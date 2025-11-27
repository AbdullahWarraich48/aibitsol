# Security Configuration Guide
## DevSecOps Implementation for PHP + LiteSpeed

This document provides complete security configuration for `test.aibitsol.com` following OWASP, PCI DSS 3.2.1, and Mozilla Observatory standards.

---

## 1. TLS Configuration (Disable TLS 1.0/1.1)

### LiteSpeed Web Server Configuration

**Location:** LiteSpeed Admin Panel → Virtual Hosts → `test.aibitsol.com` → SSL Tab

#### Option A: Via LiteSpeed Admin Panel (Recommended)
1. Login to LiteSpeed WebAdmin (usually `https://your-server-ip:7080`)
2. Navigate to: **Virtual Hosts** → Select `test.aibitsol.com` → **SSL** tab
3. Under **SSL Protocol**, set:
   - **Min Protocol Version:** `TLSv1.2`
   - **Max Protocol Version:** `TLSv1.3`
4. Under **Cipher Suites**, use:
   ```
   TLSv1.2: ECDHE-ECDSA-AES256-GCM-SHA384:ECDHE-RSA-AES256-GCM-SHA384:ECDHE-ECDSA-AES128-GCM-SHA256:ECDHE-RSA-AES128-GCM-SHA256
   TLSv1.3: TLS_AES_256_GCM_SHA384:TLS_CHACHA20_POLY1305_SHA256:TLS_AES_128_GCM_SHA256
   ```
5. Enable **SSL Session Cache** and **OCSP Stapling**
6. Click **Save** and **Graceful Restart**

#### Option B: Via Virtual Host Configuration File
Edit: `/usr/local/lsws/conf/vhosts/test.aibitsol.com/vhost.conf`

```apache
# TLS Configuration - RFC 8996 Compliant
sslProtocol                    TLSv1.2 TLSv1.3
sslCipherList                  ECDHE-ECDSA-AES256-GCM-SHA384:ECDHE-RSA-AES256-GCM-SHA384:ECDHE-ECDSA-AES128-GCM-SHA256:ECDHE-RSA-AES128-GCM-SHA256
sslCipherSuites                TLS_AES_256_GCM_SHA384:TLS_CHACHA20_POLY1305_SHA256:TLS_AES_128_GCM_SHA256
sslHonorCipherOrder            on
sslSessionCache                shmcb:/tmp/ssl_scache(512000)
sslSessionCacheTimeout         600
sslStapling                    on
sslStaplingVerify              on
sslStaplingResponderTimeout    5
sslStaplingResponseMaxAge      86400
```

**Restart LiteSpeed:**
```bash
sudo /usr/local/lsws/bin/lswsctrl restart
```

#### Verification
```bash
# Test TLS versions (should reject 1.0 and 1.1)
openssl s_client -connect test.aibitsol.com:443 -tls1_2
openssl s_client -connect test.aibitsol.com:443 -tls1_1  # Should fail
openssl s_client -connect test.aibitsol.com:443 -tls1    # Should fail

# Online tools
# - SSL Labs: https://www.ssllabs.com/ssltest/analyze.html?d=test.aibitsol.com
# - Mozilla Observatory: https://observatory.mozilla.org/
```

---

## 2. SSL Certificate Fix (Hostname Mismatch)

### Problem
Current certificate is issued for `*.web-hosting.com` but domain is `test.aibitsol.com`.

### Solution: Generate Let's Encrypt Certificate

#### Prerequisites
```bash
# Install Certbot (if not already installed)
sudo apt-get update
sudo apt-get install certbot python3-certbot-nginx  # or python3-certbot-apache
```

#### Generate Certificate
```bash
# Method 1: Standalone (stops web server temporarily)
sudo certbot certonly --standalone -d test.aibitsol.com

# Method 2: Webroot (recommended - no downtime)
sudo certbot certonly --webroot -w /path/to/your/webroot -d test.aibitsol.com

# Method 3: DNS Challenge (if port 80/443 not accessible)
sudo certbot certonly --manual --preferred-challenges dns -d test.aibitsol.com
```

#### Configure LiteSpeed to Use Certificate

**Via Admin Panel:**
1. Navigate to: **Virtual Hosts** → `test.aibitsol.com` → **SSL** tab
2. Set:
   - **Private Key File:** `/etc/letsencrypt/live/test.aibitsol.com/privkey.pem`
   - **Certificate File:** `/etc/letsencrypt/live/test.aibitsol.com/fullchain.pem`
3. Enable **SSL** checkbox
4. Click **Save** and **Graceful Restart**

**Via Configuration File:**
Edit `/usr/local/lsws/conf/vhosts/test.aibitsol.com/vhost.conf`:
```apache
keyFile                    /etc/letsencrypt/live/test.aibitsol.com/privkey.pem
certFile                   /etc/letsencrypt/live/test.aibitsol.com/fullchain.pem
```

#### Auto-Renewal Setup
```bash
# Test renewal
sudo certbot renew --dry-run

# Add to crontab (runs twice daily)
sudo crontab -e
# Add:
0 0,12 * * * /usr/bin/certbot renew --quiet --deploy-hook "/usr/local/lsws/bin/lswsctrl reload"
```

---

## 3. HTTP Strict Transport Security (HSTS)

### Already Configured in `.htaccess`
The HSTS header is automatically set via `.htaccess`:
```apache
Header always set Strict-Transport-Security "max-age=31536000; includeSubDomains; preload" env=HTTPS
```

### LiteSpeed Alternative (if .htaccess not working)
Add to virtual host configuration:
```apache
# In vhost.conf or via Admin Panel → Headers
addHeader                    Strict-Transport-Security "max-age=31536000; includeSubDomains; preload"
```

### Verification
```bash
curl -I https://test.aibitsol.com | grep -i strict-transport
# Should show: Strict-Transport-Security: max-age=31536000; includeSubDomains; preload
```

### HSTS Preload Submission
1. Ensure `includeSubDomains` and `preload` are present
2. Submit to: https://hstspreload.org/
3. Wait for approval (can take weeks)

---

## 4. Hide PHP Version (X-Powered-By)

### Already Implemented

#### PHP Code (index.php)
```php
header_remove('X-Powered-By');
```

#### PHP.ini Configuration
Edit `/etc/php/8.x/apache2/php.ini` (or your PHP version):
```ini
expose_php = Off
```

**Restart PHP-FPM/LiteSpeed:**
```bash
sudo systemctl restart php8.x-fpm  # Adjust version
sudo /usr/local/lsws/bin/lswsctrl restart
```

#### .htaccess (Backup Method)
Already added:
```apache
Header always unset X-Powered-By
```

### Verification
```bash
curl -I https://test.aibitsol.com | grep -i x-powered
# Should return nothing
```

---

## 5. Content Security Policy (CSP)

### Already Configured in `.htaccess`
```apache
Header always set Content-Security-Policy "default-src 'self'; script-src 'self' 'unsafe-inline' https://cdn.tailwindcss.com https://www.google.com https://www.gstatic.com; style-src 'self' 'unsafe-inline' https://fonts.googleapis.com https://cdn.tailwindcss.com; font-src 'self' https://fonts.gstatic.com data:; img-src 'self' data: https:; connect-src 'self' https://www.google.com; frame-src 'self' https://www.google.com; object-src 'none'; base-uri 'self'; form-action 'self'; frame-ancestors 'none'; upgrade-insecure-requests;"
```

### Customization
If you need to add more external domains, modify the CSP in `.htaccess`:
- `script-src`: Add domains that serve JavaScript
- `style-src`: Add domains that serve CSS
- `img-src`: Add image CDN domains
- `connect-src`: Add API endpoints

### Report-Only Mode (Testing)
To test CSP without breaking the site:
```apache
Header always set Content-Security-Policy-Report-Only "..." env=HTTPS
```

### Verification
```bash
curl -I https://test.aibitsol.com | grep -i content-security
```

---

## 6. Permissions-Policy Header

### Already Configured in `.htaccess`
```apache
Header always set Permissions-Policy "geolocation=(), camera=(), microphone=(), payment=(), usb=(), magnetometer=(), gyroscope=(), accelerometer=()"
```

This disables unnecessary browser APIs to reduce attack surface.

---

## 7. Subresource Integrity (SRI)

### For External Scripts

#### Tailwind CSS CDN
**Note:** Tailwind CDN is a dynamic script that changes, so SRI is not practical. Consider:
1. **Option A:** Download and self-host Tailwind CSS
2. **Option B:** Use Tailwind via npm/build process
3. **Option C:** Accept risk (Tailwind is a trusted CDN)

#### Google reCAPTCHA (if used)
If you add Google reCAPTCHA, generate SRI hash:

```bash
# Download the script
curl -s https://www.google.com/recaptcha/api.js -o recaptcha.js

# Generate SHA-384 hash
openssl dgst -sha384 -binary recaptcha.js | openssl base64 -A

# Use in HTML:
<script src="https://www.google.com/recaptcha/api.js"
        integrity="sha384-GENERATED_HASH_HERE"
        crossorigin="anonymous"></script>
```

#### Other External Scripts
For any external script, generate hash:
```bash
curl -s https://example.com/script.js | openssl dgst -sha384 -binary | openssl base64 -A
```

---

## 8. Additional Security Headers

### Already Configured in `.htaccess`
- ✅ `X-Content-Type-Options: nosniff`
- ✅ `X-Frame-Options: DENY`
- ✅ `X-XSS-Protection: 1; mode=block`
- ✅ `Referrer-Policy: strict-origin-when-cross-origin`
- ✅ `X-Powered-By` removed
- ✅ `Server` header removed

---

## 9. HTTPS Redirect

### Already Configured in `.htaccess`
```apache
RewriteCond %{HTTPS} off
RewriteCond %{HTTP:X-Forwarded-Proto} !https
RewriteRule ^(.*)$ https://%{HTTP_HOST}%{REQUEST_URI} [L,R=301]
```

### LiteSpeed Alternative
In virtual host configuration:
```apache
rewrite                        ^(.*)$ https://%{HTTP_HOST}$1 [R=301,L]
```

---

## 10. Verification Checklist

### SSL/TLS
- [ ] SSL Labs test: A+ rating
- [ ] TLS 1.0/1.1 disabled
- [ ] Certificate matches domain
- [ ] OCSP Stapling enabled

### Headers
- [ ] HSTS present and correct
- [ ] CSP present and not blocking resources
- [ ] X-Powered-By removed
- [ ] All security headers present

### Tools
```bash
# SSL Labs
https://www.ssllabs.com/ssltest/analyze.html?d=test.aibitsol.com

# Mozilla Observatory
https://observatory.mozilla.org/analyze/test.aibitsol.com

# Security Headers
https://securityheaders.com/?q=https://test.aibitsol.com

# Test headers locally
curl -I https://test.aibitsol.com
```

---

## 11. Production Checklist

Before going live:
- [ ] Disable `display_errors` in `php.ini`
- [ ] Set `error_reporting` to `E_ALL & ~E_DEPRECATED & ~E_STRICT`
- [ ] Enable PHP OPcache
- [ ] Set secure file permissions (644 for files, 755 for directories)
- [ ] Review and test CSP policy
- [ ] Test all functionality with security headers enabled
- [ ] Monitor error logs after deployment

---

## 12. Troubleshooting

### Headers Not Appearing
1. Check if `mod_headers` is enabled in LiteSpeed
2. Verify `.htaccess` is being read (`AllowOverride All`)
3. Check LiteSpeed error logs: `/usr/local/lsws/logs/error.log`

### CSP Blocking Resources
1. Check browser console for CSP violations
2. Add violating domains to appropriate CSP directive
3. Use `Content-Security-Policy-Report-Only` for testing

### SSL Certificate Issues
1. Verify certificate paths are correct
2. Check file permissions (should be readable by LiteSpeed user)
3. Ensure certificate is not expired
4. Verify DNS points to correct server

---

## Support

For issues, check:
- LiteSpeed Documentation: https://www.litespeedtech.com/support/wiki/
- OWASP Security Headers: https://owasp.org/www-project-secure-headers/
- Mozilla Security Guidelines: https://infosec.mozilla.org/guidelines/web_security

