# AiBit Soft - Clean PHP Website

This is the optimized PHP version of the AiBit Soft website, cleaned and organized for better performance.

## Features

- **Clean URL Routing**: SEO-friendly URLs with .htaccess rewrite rules
- **Responsive Design**: Mobile-first design that works on all devices
- **Modular Structure**: Organized PHP includes for header, footer, and navigation
- **Contact Form**: Working contact form with basic validation
- **Service Pages**: Individual pages for each service offering
- **Blog Integration**: Ready for blog content management
- **SEO Optimized**: Proper meta tags and structured content
- **Optimized Performance**: Removed unnecessary files and organized structure

## File Structure

```
/
├── index.php                 # Main entry point with routing
├── .htaccess                # URL rewriting rules
├── favicon.ico              # Website favicon
├── includes/                 # PHP include files
│   ├── header.php           # HTML head and navigation
│   ├── footer.php           # Footer and closing tags
│   ├── navigation.php        # Navigation menu
│   └── contact_handler.php   # Contact form processing
├── pages/                   # Individual page content
│   ├── home.php            # Homepage content
│   ├── services.php        # Services overview
│   ├── contact.php         # Contact page
│   ├── 404.php             # 404 error page
│   └── [all other pages]   # Service and blog pages
├── css/                     # Stylesheets
│   └── style.css           # Main stylesheet
├── js/                      # JavaScript files
│   └── main.js             # Main JavaScript
├── images/                  # Website images
├── static/                  # Static assets (fonts, etc.)
├── Core/                    # Core assets (favicons, etc.)
├── socialIcons/             # Social media icons
├── team/                    # Team member images
└── LeaderShip/              # Leadership team images
```

## Installation

1. **Upload Files**: Upload all files to your web server
2. **Configure Server**: Ensure PHP is enabled and .htaccess is supported
3. **Set Permissions**: Make sure PHP files are executable
4. **Test**: Visit your domain to see the website

## URL Structure

The website supports clean URLs:

- `/` - Homepage
- `/services` - Services page
- `/contact` - Contact page
- `/website-that-work` - Website development service
- `/web-app-development` - Web app development service
- `/blogs-ai-automation` - AI automation blog
- And many more...

## Customization

### Adding New Pages

1. Create a new PHP file in the `pages/` directory
2. Add the page to the `$allowed_pages` array in `index.php`
3. Add page title and description to the respective arrays
4. Add URL rewrite rule to `.htaccess` if needed

### Modifying Content

- **Header/Footer**: Edit files in the `includes/` directory
- **Page Content**: Edit files in the `pages/` directory
- **Styling**: The original CSS files are preserved and can be modified

### Contact Form

The contact form is located in `includes/contact_handler.php`. To make it fully functional:

1. Configure email settings
2. Add database integration if needed
3. Implement spam protection
4. Add email templates

## Technical Details

- **PHP Version**: Compatible with PHP 7.4+
- **Server Requirements**: Apache with mod_rewrite enabled
- **Dependencies**: No external dependencies required
- **Database**: Optional (contact form can work without database)

## SEO Features

- Clean, semantic URLs
- Proper meta tags for each page
- Structured HTML markup
- Mobile-responsive design
- Fast loading times

## Security

- Basic input validation on contact form
- XSS protection headers
- Content type validation
- Frame options security

## Performance

- Optimized asset loading
- Caching headers for static files
- Minimal server-side processing
- Clean, efficient code structure

## Support

For questions or support regarding this PHP conversion, please contact the development team.

## License

This project maintains the same license as the original React application.
