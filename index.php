<?php
// ============================================================================
// SECURITY: Remove PHP version disclosure
// ============================================================================
header_remove('X-Powered-By');
if (function_exists('header_register_callback')) {
    header_register_callback(function() {
        header_remove('X-Powered-By');
    });
}

// Enable error reporting for debugging (disable in production)
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Performance: Set caching headers for static assets
$request_uri = $_SERVER['REQUEST_URI'] ?? '';
$extension = pathinfo(parse_url($request_uri, PHP_URL_PATH), PATHINFO_EXTENSION);

// Cache static assets for 1 year
if (in_array($extension, ['css', 'js', 'jpg', 'jpeg', 'png', 'gif', 'svg', 'ico', 'woff', 'woff2', 'ttf', 'eot'])) {
    header('Cache-Control: public, max-age=31536000, immutable');
    header('Expires: ' . gmdate('D, d M Y H:i:s', time() + 31536000) . ' GMT');
} else {
    // Cache HTML pages for 1 hour
    header('Cache-Control: public, max-age=3600');
    header('Expires: ' . gmdate('D, d M Y H:i:s', time() + 3600) . ' GMT');
}

// Main index.php file - handles routing and includes appropriate pages
$page = $_GET['page'] ?? 'home';

// Redirect all partner pages to affiliate-partner
$partner_pages = ['enterprise-partner', 'agency-partner', 'technology-partner', 'reseller-partner', 'custom-partnership'];
if (in_array($page, $partner_pages)) {
    header('Location: /?page=affiliate-partner', true, 301);
    exit;
}

$allowed_pages = [
    'home', 'services', 'about', 'contact', 'blog', 'careers', 'partners', 'custom-partnership', 'affiliate-partner',
    'website-that-work', 'web-app-development', 'mob-app-development', 'ui-ux', 'mobile-experiences',
    'mvp', 'custom-ai-solution', 'digital-marketing', 'seo-ai-seo', 'social-media-ads',
    'custom-software-development', 'it-staff', 'get-proposal', 'book-an-expert',
    'blogs-ai-automation', 'blogs-business-growth', 'blogs-custom-marketing',
    'blogs-custom-software', 'blogs-it-staff', 'blogs-mobile-app', 'blogs-social-marketing',
    'blogs-web-design', 'resources', 'coming-soon', 'hotel-about', 'seo-marketing', 'custom-branding-marketing-kit', 'resources-web-design', 'blogs-web-design-full',
    'privacy-policy', 'terms-conditions'
];

if (!in_array($page, $allowed_pages)) {
    $page = '404';
}

// Set page title and meta description
$page_titles = [
    'home' => 'AiBit Sol - Smart Digital Solutions for Your Business Growth',
    'services' => 'Our Services - AiBit Sol',
    'about' => 'About Us - AiBit Sol',
    'contact' => 'Contact Us - AiBit Sol',
    'blog' => 'Blog - AiBit Sol',
    'careers' => 'Careers - AiBit Sol',
    'partners' => 'Partners - AiBit Sol',
    'affiliate-partner' => 'Affiliate Partner - AiBit Sol',
    'custom-partnership' => 'Custom Partnership - AiBit Sol',
    'website-that-work' => 'Website Design & Development - AiBit Sol',
    'web-app-development' => 'Web App Development - AiBit Sol',
    'mob-app-development' => 'Mobile App Development - AiBit Sol',
    'ui-ux' => 'UI/UX Design - AiBit Sol',
    'mobile-experiences' => 'Mobile Experiences — iOS & Android Apps | AiBit Sol',
    'mvp' => 'MVP Development - AiBit Sol',
    'custom-ai-solution' => 'Custom AI Solutions - AiBit Sol',
    'digital-marketing' => 'Digital Marketing - AiBit Sol',
    'seo-ai-seo' => 'SEO & AI SEO - AiBit Sol',
    'social-media-ads' => 'Social Media Ads - AiBit Sol',
    'custom-software-development' => 'Custom Software Development - AiBit Sol',
    'it-staff' => 'IT Staff Augmentation - AiBit Sol',
    'get-proposal' => 'Get a Proposal - AiBit Sol',
    'book-an-expert' => 'Book an Expert - AiBit Sol',
    'blogs-ai-automation' => 'AI Automation Blog - AiBit Sol',
    'blogs-business-growth' => 'Business Growth Blog - AiBit Sol',
    'blogs-custom-marketing' => 'Custom Marketing Blog - AiBit Sol',
    'blogs-custom-software' => 'Custom Software Blog - AiBit Sol',
    'blogs-it-staff' => 'IT Staff Blog - AiBit Sol',
    'blogs-mobile-app' => 'Mobile App Blog - AiBit Sol',
    'blogs-social-marketing' => 'Social Marketing Blog - AiBit Sol',
    'blogs-web-design' => 'Web Design Blog - AiBit Sol',
    'resources' => 'Resources - AiBit Sol',
    'coming-soon' => 'Coming Soon - AiBit Sol',
    'hotel-about' => 'Blog & Content Marketing | Hotel Case Study - AiBit Sol',
    'seo-marketing' => 'SEO & Marketing — Get Found & Convert | AiBit Sol',
    'custom-branding-marketing-kit' => 'Custom Branding & Marketing Kit - AiBit Sol',
    'resources-web-design' => 'Web Design Resources — Insights & Guides | AiBit Sol',
    'blogs-web-design-full' => 'Website Design & Development — Trust, Speed, Conversion | AiBit Sol',
    'privacy-policy' => 'Privacy Policy - AiBit Sol',
    'terms-conditions' => 'Terms & Conditions - AiBit Sol',
    '404' => '404 - Page Not Found'
];

$page_descriptions = [
    'home' => 'From responsive web apps to AI-powered tools, AiBit Sol delivers experiences that engage, convert, and scale your business.',
    'services' => 'Specialized digital solutions designed to drive results for your business.',
    'about' => 'Learn about AiBit Sol and our team of experts.',
    'contact' => 'Get in touch with AiBit Sol for your digital solutions.',
    'blog' => 'Tips, guides, and trends to help your business perform better online.',
    'careers' => 'Join the AiBit Sol team and help build the future of digital solutions.',
    'partners' => 'Partner with AiBit Sol to grow your business.',
    'affiliate-partner' => 'Earn as you grow — refer clients to AiBit Soft and enjoy recurring commissions with real-time tracking.',
    'custom-partnership' => 'Create a custom partnership model designed for your unique business vision with AiBit Sol.',
    'website-that-work' => 'Professional website design and development services.',
    'web-app-development' => 'Custom web application development services.',
    'mob-app-development' => 'Mobile app development for iOS and Android.',
    'ui-ux' => 'UI/UX design services for better user experiences.',
    'mobile-experiences' => 'iOS & Android apps designed to engage, delight, and retain users.',
    'mvp' => 'MVP development to validate your business idea.',
    'custom-ai-solution' => 'Custom AI tools and integration services.',
    'digital-marketing' => 'Digital marketing strategies to grow your business.',
    'seo-ai-seo' => 'SEO and AI-powered SEO solutions.',
    'social-media-ads' => 'Social media advertising campaigns.',
    'custom-software-development' => 'Custom software development services.',
    'it-staff' => 'IT staff augmentation services.',
    'get-proposal' => 'Get a custom proposal for your project.',
    'book-an-expert' => 'Book a consultation with our experts.',
    'blogs-ai-automation' => 'AI automation insights and tips.',
    'blogs-business-growth' => 'Business growth strategies and insights.',
    'blogs-custom-marketing' => 'Custom marketing strategies and tips.',
    'blogs-custom-software' => 'Custom software development insights.',
    'blogs-it-staff' => 'IT staff augmentation insights.',
    'blogs-mobile-app' => 'Mobile app development insights.',
    'blogs-social-marketing' => 'Social media marketing insights.',
    'blogs-web-design' => 'Web design tips and insights.',
    'resources' => 'Resources and tools for your business.',
    'coming-soon' => 'This page is coming soon.',
    'hotel-about' => 'Learn how effective content marketing and SEO strategies can transform hospitality businesses and attract more guests.',
    'seo-marketing' => 'SEO & Marketing services that increase visibility, build trust, and turn clicks into customers.',
    'custom-branding-marketing-kit' => 'Custom branding assets and marketing kits to make your brand unforgettable across every channel.',
    'resources-web-design' => 'Web design insights, checklists, and best practices to improve trust, speed, and conversions.',
    'blogs-web-design-full' => 'Outdated site costing trust? Learn how modern web design improves credibility, speed, accessibility, and conversions.',
    'privacy-policy' => 'Learn how AiBit Sol collects, uses, and protects your personal information.',
    'terms-conditions' => 'Terms and conditions for using AiBit Sol\'s website and services.',
    '404' => 'The page you are looking for could not be found.'
];

$page_title = $page_titles[$page] ?? 'AiBit Sol';
$page_description = $page_descriptions[$page] ?? 'AiBit Sol - Smart Digital Solutions';

// Include header
include 'includes/header.php';

// Include the appropriate page content
if (file_exists("pages/{$page}.php")) {
    include "pages/{$page}.php";
} else {
    include 'pages/404.php';
}

// Include footer
include 'includes/footer.php';
?>