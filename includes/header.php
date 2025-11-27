<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <title><?php echo $page_title; ?></title>
    <meta name="description" content="<?php echo $page_description; ?>"/>
    
    <!-- Performance: Resource Hints -->
    <link rel="dns-prefetch" href="https://cdn.tailwindcss.com"/>
    <link rel="dns-prefetch" href="https://fonts.googleapis.com"/>
    <link rel="dns-prefetch" href="https://fonts.gstatic.com"/>
    <link rel="preconnect" href="https://fonts.googleapis.com"/>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin/>
    
    <!-- Favicon -->
    <link rel="shortcut icon" href="/images/logo-loader.svg"/>
    <link rel="icon" href="/images/logo-loader.svg" type="image/svg+xml" sizes="any"/>
    <link rel="icon" href="/favicon.ico" type="image/x-icon" sizes="16x16"/>
    
    <!-- Preload Critical Resources for LCP -->
    <link rel="preload" href="/images/logo-loader.svg" as="image" type="image/svg+xml"/>
    <link rel="preload" href="/images/logo.svg" as="image" type="image/svg+xml" fetchpriority="high"/>
    <link rel="preload" href="/images/aibs.svg" as="image" type="image/svg+xml" fetchpriority="high"/>
    <link rel="preload" href="/js/main.js" as="script"/>
    <link rel="preconnect" href="https://cdn.tailwindcss.com" crossorigin/>
    
    <!-- Critical CSS: Inline hero styles to prevent render blocking -->
    <style>
        /* Critical above-the-fold styles */
        .hero-section {
            content-visibility: auto;
            contain-intrinsic-size: 500px;
        }
        
        /* Ensure LCP element renders immediately */
        .lcp-element {
            opacity: 1 !important;
            visibility: visible !important;
            transform: translateZ(0);
            will-change: auto;
        }
    </style>
    
    <!-- Tailwind CSS CDN - Must load before rendering for utility classes -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'primary': '#2B4DDF',
                        'secondary': '#0A165E',
                        'accent': '#E8EDFF'
                    }
                }
            }
        }
    </script>
    
    <!-- Custom CSS -->
    <style>
        /* Optimized font loading with font-display swap */
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap');
        
        body {
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, sans-serif;
        }
        
        /* Prevent layout shift during font load */
        .font-loading {
            visibility: hidden;
        }
        
        /* LCP optimization: Ensure hero text is immediately visible */
        h1, .hero-text {
            font-display: swap;
            will-change: transform;
            transform: translateZ(0); /* GPU acceleration */
        }
        
        .gradient-bg {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        }
        
        .hero-bg {
            background: linear-gradient(135deg, #1e3a8a 0%, #3b82f6 50%, #8b5cf6 100%);
        }
        
        .card-hover {
            transition: all 0.3s ease;
        }
        
        .card-hover:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
        }
        
        .btn-primary {
            background: linear-gradient(135deg, #2B4DDF 0%, #1e40af 100%);
            transition: all 0.3s ease;
        }
        
        .btn-primary:hover {
            background: linear-gradient(135deg, #1e40af 0%, #1e3a8a 100%);
            transform: translateY(-2px);
            box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1);
        }
        
        .text-gradient {
            background: linear-gradient(135deg, #2B4DDF 0%, #8b5cf6 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
        
        .section-padding {
            padding: 5rem 0;
        }
        
        @media (max-width: 768px) {
            .section-padding {
                padding: 3rem 0;
            }
        }
        
        /* Professional Color Scheme */
        :root {
            --primary-blue: #0ea5e9;
            --light-blue: #e0f2fe;
            --dark-blue: #0369a1;
            --accent-blue: #0284c7;
            --text-dark: #1e293b;
            --text-light: #64748b;
            --bg-light: #f8fafc;
            --white: #ffffff;
        }
        
        /* Modern Animations */
        .animate-fade-in-up {
            animation: fadeInUp 0.8s ease-out;
        }
        
        .animate-fade-in-up-delayed {
            animation: fadeInUp 0.8s ease-out 0.2s both;
        }
        
        .animate-fade-in-up-delayed-2 {
            animation: fadeInUp 0.8s ease-out 0.4s both;
        }
        
        .animate-fade-in-up-delayed-3 {
            animation: fadeInUp 0.8s ease-out 0.6s both;
        }
        
        /* LCP-optimized: Element visible immediately, subtle animation */
        .animate-slide-in-left {
            /* Start visible for LCP, then animate */
            opacity: 1;
            transform: translateX(0);
            animation: slideInLeftSubtle 0.4s ease-out;
        }
        
        /* Fallback for browsers without animation support */
        @supports not (animation: slideInLeftSubtle) {
            .animate-slide-in-left {
                opacity: 1;
                transform: translateX(0);
            }
        }
        
        .animate-slide-in-right {
            opacity: 1;
            transform: translateX(0);
            animation: slideInRightSubtle 0.4s ease-out;
        }
        
        /* Non-blocking animation for LCP elements - starts visible */
        .animate-slide-in-left-lcp {
            opacity: 1 !important;
            transform: translateX(0) !important;
            will-change: transform;
        }
        
        /* Float animations removed - icons are now static */
        /*
        .animate-float {
            animation: float 6s ease-in-out infinite;
        }
        
        .animate-float-delayed {
            animation: float 6s ease-in-out infinite 2s;
        }
        
        .animate-float-slow {
            animation: float 8s ease-in-out infinite;
        }
        */
        
        .animate-counter {
            animation: counter 2s ease-out;
        }
        
        @keyframes fadeInUp {
            from { 
                opacity: 0; 
                transform: translateY(40px); 
            }
            to { 
                opacity: 1; 
                transform: translateY(0); 
            }
        }
        
        /* Original animation (kept for backward compatibility) */
        @keyframes slideInLeft {
            from { 
                opacity: 0; 
                transform: translateX(-50px); 
            }
            to { 
                opacity: 1; 
                transform: translateX(0); 
            }
        }
        
        /* LCP-optimized: Subtle animation, element already visible */
        @keyframes slideInLeftSubtle {
            from { 
                opacity: 1; 
                transform: translateX(-10px); 
            }
            to { 
                opacity: 1; 
                transform: translateX(0); 
            }
        }
        
        @keyframes slideInRight {
            from { 
                opacity: 0; 
                transform: translateX(50px); 
            }
            to { 
                opacity: 1; 
                transform: translateX(0); 
            }
        }
        
        /* LCP-optimized: Subtle animation, element already visible */
        @keyframes slideInRightSubtle {
            from { 
                opacity: 1; 
                transform: translateX(10px); 
            }
            to { 
                opacity: 1; 
                transform: translateX(0); 
            }
        }
        
        /* Float animation keyframes removed - icons are now static */
        /*
        @keyframes float {
            0%, 100% { 
                transform: translateY(0px) rotate(0deg); 
            }
            50% { 
                transform: translateY(-20px) rotate(5deg); 
            }
        }
        */
        
        @keyframes counter {
            from { 
                opacity: 0; 
                transform: scale(0.5); 
            }
            to { 
                opacity: 1; 
                transform: scale(1); 
            }
        }
        
        /* Professional Hover Effects */
        .card-hover {
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }
        
        .card-hover:hover {
            transform: translateY(-4px);
            box-shadow: 0 20px 40px -12px rgba(14, 165, 233, 0.15);
        }
        
        /* Professional Button Styles */
        .btn-primary {
            background: linear-gradient(135deg, var(--primary-blue), var(--accent-blue));
            color: white;
            transition: all 0.3s ease;
        }
        
        .btn-primary:hover {
            background: linear-gradient(135deg, var(--accent-blue), var(--dark-blue));
            transform: translateY(-2px);
            box-shadow: 0 10px 25px -5px rgba(14, 165, 233, 0.3);
        }
        
        /* Professional Gradient Text */
        .gradient-text {
            background: linear-gradient(135deg, var(--primary-blue), var(--accent-blue));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
        
        .glass-effect {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.2);
        }
        
        .team-card {
            background: linear-gradient(145deg, #1e293b 0%, #334155 100%);
            border: 1px solid rgba(255, 255, 255, 0.1);
        }
        
        .service-icon {
            width: 60px;
            height: 60px;
            background: linear-gradient(135deg, #2B4DDF 0%, #8b5cf6 100%);
            border-radius: 15px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 1rem;
        }
        
        .process-step {
            position: relative;
        }
        
        .process-step::after {
            content: '';
            position: absolute;
            top: 50%;
            right: -50px;
            width: 100px;
            height: 2px;
            background: linear-gradient(90deg, #2B4DDF, #8b5cf6);
            transform: translateY(-50%);
        }
        
        .process-step:last-child::after {
            display: none;
        }
        
        @media (max-width: 768px) {
            .process-step::after {
                display: none;
            }
        }
    </style>
    
    <!-- Mobile Menu JavaScript -->
    <script>
        function toggleMobileMenu() {
            const mobileMenu = document.getElementById('mobile-menu');
            const isHidden = mobileMenu.classList.contains('hidden');
            
            if (isHidden) {
                mobileMenu.classList.remove('hidden');
                mobileMenu.style.animation = 'slideDown 0.3s ease-out';
            } else {
                mobileMenu.style.animation = 'slideUp 0.3s ease-out';
                setTimeout(() => {
                    mobileMenu.classList.add('hidden');
                }, 300);
            }
        }
        
        // Close mobile menu when clicking outside
        document.addEventListener('click', function(event) {
            const mobileMenu = document.getElementById('mobile-menu');
            const menuButton = event.target.closest('button[onclick="toggleMobileMenu()"]');
            
            if (mobileMenu && !mobileMenu.contains(event.target) && !menuButton && !mobileMenu.classList.contains('hidden')) {
                mobileMenu.style.animation = 'slideUp 0.3s ease-out';
                setTimeout(() => {
                    mobileMenu.classList.add('hidden');
                }, 300);
            }
        });
        
        // Close mobile menu on window resize to desktop
        window.addEventListener('resize', function() {
            const mobileMenu = document.getElementById('mobile-menu');
            if (mobileMenu && window.innerWidth >= 1024 && !mobileMenu.classList.contains('hidden')) {
                mobileMenu.classList.add('hidden');
            }
        });
        
        // Build dropdown functionality
        function toggleBuildDropdown() {
            const dropdown = document.getElementById('build-dropdown');
            const growDropdown = document.getElementById('grow-dropdown');
            const scaleDropdown = document.getElementById('scale-dropdown');
            const resourcesDropdown = document.getElementById('resources-dropdown');
            const workWithUsDropdown = document.getElementById('work-with-us-dropdown');
            const partnerDropdown = document.getElementById('partner-dropdown');
            
            // Close all other dropdowns if open
            if (growDropdown.classList.contains('show')) {
                growDropdown.classList.remove('show');
                growDropdown.classList.add('hidden');
            }
            if (scaleDropdown.classList.contains('show')) {
                scaleDropdown.classList.remove('show');
                scaleDropdown.classList.add('hidden');
            }
            if (resourcesDropdown.classList.contains('show')) {
                resourcesDropdown.classList.remove('show');
                resourcesDropdown.classList.add('hidden');
            }
            if (workWithUsDropdown.classList.contains('show')) {
                workWithUsDropdown.classList.remove('show');
                workWithUsDropdown.classList.add('hidden');
            }
            if (partnerDropdown.classList.contains('show')) {
                partnerDropdown.classList.remove('show');
                partnerDropdown.classList.add('hidden');
            }
            
            // Toggle build dropdown
            if (dropdown.classList.contains('hidden')) {
                dropdown.classList.remove('hidden');
                dropdown.classList.add('show');
            } else {
                dropdown.classList.add('hidden');
                dropdown.classList.remove('show');
            }
            return false;
        }
        
        function closeBuildDropdown() {
            const dropdown = document.getElementById('build-dropdown');
            dropdown.classList.add('hidden');
            dropdown.classList.remove('show');
            return false;
        }
        
        // Grow dropdown functionality
        function toggleGrowDropdown() {
            const dropdown = document.getElementById('grow-dropdown');
            const buildDropdown = document.getElementById('build-dropdown');
            const scaleDropdown = document.getElementById('scale-dropdown');
            const resourcesDropdown = document.getElementById('resources-dropdown');
            const workWithUsDropdown = document.getElementById('work-with-us-dropdown');
            const partnerDropdown = document.getElementById('partner-dropdown');
            
            // Close all other dropdowns if open
            if (buildDropdown.classList.contains('show')) {
                buildDropdown.classList.remove('show');
                buildDropdown.classList.add('hidden');
            }
            if (scaleDropdown.classList.contains('show')) {
                scaleDropdown.classList.remove('show');
                scaleDropdown.classList.add('hidden');
            }
            if (resourcesDropdown.classList.contains('show')) {
                resourcesDropdown.classList.remove('show');
                resourcesDropdown.classList.add('hidden');
            }
            if (workWithUsDropdown.classList.contains('show')) {
                workWithUsDropdown.classList.remove('show');
                workWithUsDropdown.classList.add('hidden');
            }
            if (partnerDropdown.classList.contains('show')) {
                partnerDropdown.classList.remove('show');
                partnerDropdown.classList.add('hidden');
            }
            
            // Toggle grow dropdown
            if (dropdown.classList.contains('hidden')) {
                dropdown.classList.remove('hidden');
                dropdown.classList.add('show');
            } else {
                dropdown.classList.add('hidden');
                dropdown.classList.remove('show');
            }
            return false;
        }
        
        function closeGrowDropdown() {
            const dropdown = document.getElementById('grow-dropdown');
            dropdown.classList.add('hidden');
            dropdown.classList.remove('show');
            return false;
        }
        
        // Scale dropdown functionality
        function toggleScaleDropdown() {
            const dropdown = document.getElementById('scale-dropdown');
            const buildDropdown = document.getElementById('build-dropdown');
            const growDropdown = document.getElementById('grow-dropdown');
            const resourcesDropdown = document.getElementById('resources-dropdown');
            const workWithUsDropdown = document.getElementById('work-with-us-dropdown');
            const partnerDropdown = document.getElementById('partner-dropdown');
            
            // Close all other dropdowns if open
            if (buildDropdown.classList.contains('show')) {
                buildDropdown.classList.remove('show');
                buildDropdown.classList.add('hidden');
            }
            
            if (growDropdown.classList.contains('show')) {
                growDropdown.classList.remove('show');
                growDropdown.classList.add('hidden');
            }
            
            if (resourcesDropdown.classList.contains('show')) {
                resourcesDropdown.classList.remove('show');
                resourcesDropdown.classList.add('hidden');
            }
            
            if (workWithUsDropdown.classList.contains('show')) {
                workWithUsDropdown.classList.remove('show');
                workWithUsDropdown.classList.add('hidden');
            }
            
            if (partnerDropdown.classList.contains('show')) {
                partnerDropdown.classList.remove('show');
                partnerDropdown.classList.add('hidden');
            }
            
            // Toggle scale dropdown
            if (dropdown.classList.contains('hidden')) {
                dropdown.classList.remove('hidden');
                dropdown.classList.add('show');
            } else {
                dropdown.classList.add('hidden');
                dropdown.classList.remove('show');
            }
            return false;
        }
        
        function closeScaleDropdown() {
            const dropdown = document.getElementById('scale-dropdown');
            dropdown.classList.add('hidden');
            dropdown.classList.remove('show');
            return false;
        }
        
        // Resources dropdown functionality
        function toggleResourcesDropdown() {
            const dropdown = document.getElementById('resources-dropdown');
            const buildDropdown = document.getElementById('build-dropdown');
            const growDropdown = document.getElementById('grow-dropdown');
            const scaleDropdown = document.getElementById('scale-dropdown');
            const workWithUsDropdown = document.getElementById('work-with-us-dropdown');
            const partnerDropdown = document.getElementById('partner-dropdown');
            
            // Close other dropdowns if open
            if (buildDropdown.classList.contains('show')) {
                buildDropdown.classList.remove('show');
                buildDropdown.classList.add('hidden');
            }
            
            if (growDropdown.classList.contains('show')) {
                growDropdown.classList.remove('show');
                growDropdown.classList.add('hidden');
            }
            
            if (scaleDropdown.classList.contains('show')) {
                scaleDropdown.classList.remove('show');
                scaleDropdown.classList.add('hidden');
            }
            
            if (workWithUsDropdown.classList.contains('show')) {
                workWithUsDropdown.classList.remove('show');
                workWithUsDropdown.classList.add('hidden');
            }
            
            if (partnerDropdown.classList.contains('show')) {
                partnerDropdown.classList.remove('show');
                partnerDropdown.classList.add('hidden');
            }
            
            // Toggle resources dropdown
            if (dropdown.classList.contains('hidden')) {
                dropdown.classList.remove('hidden');
                dropdown.classList.add('show');
            } else {
                dropdown.classList.add('hidden');
                dropdown.classList.remove('show');
            }
            return false;
        }
        
        function closeResourcesDropdown() {
            const dropdown = document.getElementById('resources-dropdown');
            dropdown.classList.add('hidden');
            dropdown.classList.remove('show');
            return false;
        }
        
        // Work With Us dropdown functionality
        function toggleWorkWithUsDropdown() {
            const dropdown = document.getElementById('work-with-us-dropdown');
            const buildDropdown = document.getElementById('build-dropdown');
            const growDropdown = document.getElementById('grow-dropdown');
            const scaleDropdown = document.getElementById('scale-dropdown');
            const resourcesDropdown = document.getElementById('resources-dropdown');
            const partnerDropdown = document.getElementById('partner-dropdown');
            
            // Close all other dropdowns if open
            if (buildDropdown.classList.contains('show')) {
                buildDropdown.classList.remove('show');
                buildDropdown.classList.add('hidden');
            }
            if (growDropdown.classList.contains('show')) {
                growDropdown.classList.remove('show');
                growDropdown.classList.add('hidden');
            }
            if (scaleDropdown.classList.contains('show')) {
                scaleDropdown.classList.remove('show');
                scaleDropdown.classList.add('hidden');
            }
            if (resourcesDropdown.classList.contains('show')) {
                resourcesDropdown.classList.remove('show');
                resourcesDropdown.classList.add('hidden');
            }
            if (partnerDropdown.classList.contains('show')) {
                partnerDropdown.classList.remove('show');
                partnerDropdown.classList.add('hidden');
            }
            
            // Toggle work with us dropdown
            if (dropdown.classList.contains('hidden')) {
                dropdown.classList.remove('hidden');
                dropdown.classList.add('show');
            } else {
                dropdown.classList.add('hidden');
                dropdown.classList.remove('show');
            }
            return false;
        }
        
        function closeWorkWithUsDropdown() {
            const dropdown = document.getElementById('work-with-us-dropdown');
            dropdown.classList.add('hidden');
            dropdown.classList.remove('show');
            return false;
        }
        
        // Partner dropdown functionality
        function togglePartnerDropdown() {
            const dropdown = document.getElementById('partner-dropdown');
            const buildDropdown = document.getElementById('build-dropdown');
            const growDropdown = document.getElementById('grow-dropdown');
            const scaleDropdown = document.getElementById('scale-dropdown');
            const resourcesDropdown = document.getElementById('resources-dropdown');
            const workWithUsDropdown = document.getElementById('work-with-us-dropdown');
            
            // Close all other dropdowns if open
            if (buildDropdown.classList.contains('show')) {
                buildDropdown.classList.remove('show');
                buildDropdown.classList.add('hidden');
            }
            if (growDropdown.classList.contains('show')) {
                growDropdown.classList.remove('show');
                growDropdown.classList.add('hidden');
            }
            if (scaleDropdown.classList.contains('show')) {
                scaleDropdown.classList.remove('show');
                scaleDropdown.classList.add('hidden');
            }
            if (resourcesDropdown.classList.contains('show')) {
                resourcesDropdown.classList.remove('show');
                resourcesDropdown.classList.add('hidden');
            }
            if (workWithUsDropdown.classList.contains('show')) {
                workWithUsDropdown.classList.remove('show');
                workWithUsDropdown.classList.add('hidden');
            }
            
            // Toggle partner dropdown
            if (dropdown.classList.contains('hidden')) {
                dropdown.classList.remove('hidden');
                dropdown.classList.add('show');
            } else {
                dropdown.classList.add('hidden');
                dropdown.classList.remove('show');
            }
            return false;
        }
        
        function closePartnerDropdown() {
            const dropdown = document.getElementById('partner-dropdown');
            dropdown.classList.add('hidden');
            dropdown.classList.remove('show');
            return false;
        }
        
        // Close dropdown when clicking outside
        document.addEventListener('click', function(event) {
            const buildDropdown = document.getElementById('build-dropdown');
            const growDropdown = document.getElementById('grow-dropdown');
            const scaleDropdown = document.getElementById('scale-dropdown');
            const resourcesDropdown = document.getElementById('resources-dropdown');
            const buildGroup = event.target.closest('.group');
            const growGroup = event.target.closest('.group');
            const scaleGroup = event.target.closest('.group');
            const resourcesGroup = event.target.closest('.group');
            
            // Check if click is on build dropdown trigger
            if (event.target.closest('a[href="/?page=services"]') && event.target.closest('.group')) {
                return; // Let the toggle function handle it
            }
            
            // Check if click is on grow dropdown trigger
            if (event.target.closest('a[href="/?page=digital-marketing"]') && event.target.closest('.group')) {
                return; // Let the toggle function handle it
            }
            
            // Check if click is on scale dropdown trigger
            if (event.target.closest('a[href="/?page=scale"]') && event.target.closest('.group')) {
                return; // Let the toggle function handle it
            }
            
            // Check if click is on resources dropdown trigger
            if (event.target.closest('a[href="/?page=resources"]') && event.target.closest('.group')) {
                return; // Let the toggle function handle it
            }
            
            // Close dropdowns if clicking outside
            if (buildDropdown && !buildGroup && buildDropdown.classList.contains('show')) {
                buildDropdown.classList.add('hidden');
                buildDropdown.classList.remove('show');
            }
            
            if (growDropdown && !growGroup && growDropdown.classList.contains('show')) {
                growDropdown.classList.add('hidden');
                growDropdown.classList.remove('show');
            }
            
            if (scaleDropdown && !scaleGroup && scaleDropdown.classList.contains('show')) {
                scaleDropdown.classList.add('hidden');
                scaleDropdown.classList.remove('show');
            }
            
            if (resourcesDropdown && !resourcesGroup && resourcesDropdown.classList.contains('show')) {
                resourcesDropdown.classList.add('hidden');
                resourcesDropdown.classList.remove('show');
            }
        });
        
        // Prevent dropdown from closing when clicking inside them (except close buttons)
        const buildDropdown = document.getElementById('build-dropdown');
        if (buildDropdown) {
            buildDropdown.addEventListener('click', function(event) {
                // Don't stop propagation for close buttons
                if (!event.target.closest('.close-button')) {
                    event.stopPropagation();
                }
            });
        }
        
        const growDropdown = document.getElementById('grow-dropdown');
        if (growDropdown) {
            growDropdown.addEventListener('click', function(event) {
                // Don't stop propagation for close buttons
                if (!event.target.closest('.close-button')) {
                    event.stopPropagation();
                }
            });
        }
        
        const scaleDropdown = document.getElementById('scale-dropdown');
        if (scaleDropdown) {
            scaleDropdown.addEventListener('click', function(event) {
                // Don't stop propagation for close buttons
                if (!event.target.closest('.close-button')) {
                    event.stopPropagation();
                }
            });
        }
        
        const resourcesDropdown = document.getElementById('resources-dropdown');
        if (resourcesDropdown) {
            resourcesDropdown.addEventListener('click', function(event) {
                // Don't stop propagation for close buttons
                if (!event.target.closest('.close-button')) {
                    event.stopPropagation();
                }
            });
        }
        
        // Add direct event listeners for close buttons
        document.addEventListener('click', function(event) {
            // Check if the clicked element is a close button
            if (event.target.closest('button[onclick*="closeBuildDropdown"]')) {
                event.preventDefault();
                event.stopPropagation();
                closeBuildDropdown();
            }
            
            if (event.target.closest('button[onclick*="closeGrowDropdown"]')) {
                event.preventDefault();
                event.stopPropagation();
                closeGrowDropdown();
            }
            
            if (event.target.closest('button[onclick*="closeScaleDropdown"]')) {
                event.preventDefault();
                event.stopPropagation();
                closeScaleDropdown();
            }
            
            if (event.target.closest('button[onclick*="closeResourcesDropdown"]')) {
                event.preventDefault();
                event.stopPropagation();
                closeResourcesDropdown();
            }
        });
    </script>
    
    <style>
        @keyframes slideDown {
            from {
                opacity: 0;
                transform: translateY(-10px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        @keyframes slideUp {
            from {
                opacity: 1;
                transform: translateY(0);
            }
            to {
                opacity: 0;
                transform: translateY(-10px);
            }
        }
        
        @keyframes float {
            0%, 100% {
                transform: translateY(0px) rotateX(0deg) rotateY(0deg);
            }
            25% {
                transform: translateY(-10px) rotateX(5deg) rotateY(5deg);
            }
            50% {
                transform: translateY(-5px) rotateX(0deg) rotateY(10deg);
            }
            75% {
                transform: translateY(-15px) rotateX(-5deg) rotateY(5deg);
            }
        }
        
        .animate-float {
            animation: float 4s ease-in-out infinite;
        }
        
        /* Enhanced responsive header styles */
        @media (max-width: 640px) {
            .nav-container {
                padding-left: 1rem;
                padding-right: 1rem;
            }
            
            .logo {
                height: 2rem;
            }
        }
        
        /* Logo positioning and spacing */
        .nav-container {
            display: flex;
            align-items: center;
            justify-content: space-between;
        }
        
        .nav-links {
            flex: 1;
            justify-content: flex-start;
            margin-left: 0;
        }
        
        /* Ensure logo stays at the very left */
        .flex-shrink-0 {
            flex-shrink: 0;
            margin-right: 2rem;
        }
        
        @media (min-width: 641px) and (max-width: 1023px) {
            .nav-container {
                padding-left: 1.5rem;
                padding-right: 1.5rem;
            }
        }
        
        /* Smooth transitions for all interactive elements */
        .nav-link {
            position: relative;
            overflow: hidden;
        }
        
        .nav-link::before {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 0;
            height: 2px;
            background: linear-gradient(90deg, #2B4DDF, #8b5cf6);
            transition: width 0.3s ease;
        }
        
        .nav-link:hover::before {
            width: 100%;
        }
        
        /* Mobile menu enhancements */
        .mobile-menu-item {
            position: relative;
            overflow: hidden;
        }
        
        .mobile-menu-item::before {
            content: '';
            position: absolute;
            left: 0;
            top: 0;
            width: 0;
            height: 100%;
            background: linear-gradient(90deg, rgba(43, 77, 223, 0.1), rgba(139, 92, 246, 0.1));
            transition: width 0.3s ease;
        }
        
        .mobile-menu-item:hover::before {
            width: 100%;
        }
        
        /* Dropdown Base Styles */
        #build-dropdown, #grow-dropdown, #scale-dropdown, #resources-dropdown, #work-with-us-dropdown, #partner-dropdown {
            animation: fadeInDown 0.3s ease-out;
            left: 50%;
            transform: translateX(-50%);
            top: calc(100% + 10px);
            z-index: 1000;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
            border-radius: 12px;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            width: 60vw;
            max-width: 60vw;
            min-width: 300px;
        }
        
        /* Individual dropdown positioning */
        #build-dropdown {
            left: 50%;
            transform: translateX(-50%);
            margin-left: 2rem;
        }
        
        #grow-dropdown {
            left: 50%;
            transform: translateX(-50%);
        }
        
        #scale-dropdown {
            left: 50%;
            transform: translateX(-50%);
        }
        
        #resources-dropdown {
            left: 50%;
            transform: translateX(-50%);
        }
        
        /* Click-based dropdown styles */
        #build-dropdown.show,
        #grow-dropdown.show,
        #scale-dropdown.show,
        #resources-dropdown.show,
        #work-with-us-dropdown.show,
        #partner-dropdown.show {
            display: block !important;
            opacity: 1;
            visibility: visible;
        }
        
        /* Consistent dropdown content styling */
        #build-dropdown, #grow-dropdown, #scale-dropdown, #work-with-us-dropdown, #partner-dropdown {
            width: 60vw;
            max-width: 60vw;
            min-width: 300px;
        }
        
        #resources-dropdown {
            width: 60vw;
            max-width: 60vw;
            min-width: 300px;
        }
        
        /* Consistent spacing and padding */
        #build-dropdown .grid, #grow-dropdown .grid, #scale-dropdown .grid, #work-with-us-dropdown .grid, #partner-dropdown .grid {
            padding: 1rem;
            gap: 1rem;
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            max-width: 100%;
            overflow: hidden;
        }
        
        #resources-dropdown .grid {
            padding: 1rem;
            gap: 0.75rem;
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            max-width: 100%;
            overflow: hidden;
        }
        
        /* Header styling */
        #build-dropdown .text-center, #grow-dropdown .text-center, #scale-dropdown .text-center, #resources-dropdown .text-center, #work-with-us-dropdown .text-center, #partner-dropdown .text-center {
            padding: 2rem 1.5rem 1.5rem 1.5rem;
            border-bottom: 1px solid rgba(0, 0, 0, 0.05);
        }
        
        #build-dropdown h2, #grow-dropdown h2, #scale-dropdown h2, #resources-dropdown h2, #work-with-us-dropdown h2, #partner-dropdown h2 {
            font-size: 1.25rem;
            font-weight: 700;
            color: #1f2937;
            margin-bottom: 0.5rem;
            word-wrap: break-word;
            overflow-wrap: break-word;
        }
        
        #build-dropdown p, #grow-dropdown p, #scale-dropdown p, #resources-dropdown p, #work-with-us-dropdown p, #partner-dropdown p {
            font-size: 0.9rem;
            color: #6b7280;
            line-height: 1.4;
            word-wrap: break-word;
            overflow-wrap: break-word;
        }
        
        /* Service card text optimization */
        .service-card h3 {
            font-size: 1rem;
            font-weight: 600;
            color: #1f2937;
            margin-bottom: 0.25rem;
            word-wrap: break-word;
            overflow-wrap: break-word;
        }
        
        .service-card p {
            font-size: 0.8rem;
            color: #6b7280;
            line-height: 1.3;
            word-wrap: break-word;
            overflow-wrap: break-word;
        }
        
        /* Close button styles */
        .close-button {
            cursor: pointer !important;
            z-index: 50 !important;
            pointer-events: auto !important;
            transition: all 0.2s ease;
            border-radius: 4px;
            display: flex;
            align-items: center;
            justify-content: center;
            min-width: 32px;
            min-height: 32px;
            background: transparent;
            border: none;
        }
        
        .close-button:hover {
            background-color: rgba(0, 0, 0, 0.1) !important;
            transform: scale(1.1);
        }
        
        .close-button:active {
            background-color: rgba(0, 0, 0, 0.2) !important;
            transform: scale(0.95);
        }
        
        .close-button svg {
            pointer-events: none;
        }
        
        @keyframes fadeInDown {
            from {
                opacity: 0;
                transform: translate(-50%, -10px);
            }
            to {
                opacity: 1;
                transform: translate(-50%, 0);
            }
        }
        
        @keyframes fadeOutUp {
            from {
                opacity: 1;
                transform: translate(-50%, 0);
            }
            to {
                opacity: 0;
                transform: translate(-50%, -10px);
            }
        }
        
        /* Smooth close animation */
        #build-dropdown.closing, #grow-dropdown.closing, #scale-dropdown.closing, #resources-dropdown.closing {
            animation: fadeOutUp 0.2s ease-in forwards;
        }
        
        /* Enhanced service card styling */
        .service-card {
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            border-radius: 12px;
            padding: 1rem;
            background: #ffffff;
            border: 1px solid rgba(0, 0, 0, 0.05);
            max-width: 100%;
            overflow: hidden;
            word-wrap: break-word;
        }
        
        .service-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 8px 30px rgba(0, 0, 0, 0.12);
            border-color: rgba(59, 130, 246, 0.2);
        }
        
        
        /* Cross-browser compatibility */
        #build-dropdown, #grow-dropdown, #scale-dropdown, #resources-dropdown {
            -webkit-transform: translateX(-50%);
            -moz-transform: translateX(-50%);
            -ms-transform: translateX(-50%);
            -o-transform: translateX(-50%);
            transform: translateX(-50%);
            
            -webkit-transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            -moz-transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            -ms-transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            -o-transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }
        
        /* Firefox specific fixes */
        @-moz-document url-prefix() {
            #build-dropdown, #grow-dropdown, #scale-dropdown, #resources-dropdown {
                position: absolute;
            }
        }
        
        /* Safari specific fixes */
        @media not all and (min-resolution:.001dpcm) {
            @supports (-webkit-appearance:none) {
                #build-dropdown, #grow-dropdown, #scale-dropdown, #resources-dropdown {
                    -webkit-backface-visibility: hidden;
                    backface-visibility: hidden;
                }
            }
        }
        
        /* Dropdown positioning adjustments */
        @media (max-width: 1280px) {
            #build-dropdown, #grow-dropdown, #scale-dropdown, #resources-dropdown {
                width: 60vw;
                max-width: 60vw;
                left: 50%;
                transform: translateX(-50%);
            }
            
            #build-dropdown {
                margin-left: 2rem;
            }
        }
        
        @media (max-width: 1024px) {
            #build-dropdown, #grow-dropdown, #scale-dropdown, #resources-dropdown {
                width: 60vw;
                max-width: 60vw;
                left: 50%;
                transform: translateX(-50%);
            }
            
            #build-dropdown {
                margin-left: 1.5rem;
            }
            
            #build-dropdown .grid, #grow-dropdown .grid, #scale-dropdown .grid {
                grid-template-columns: 1fr;
                gap: 0.75rem;
                padding: 0.75rem;
            }
            
            #resources-dropdown .grid {
                grid-template-columns: repeat(2, 1fr);
                gap: 0.75rem;
                padding: 0.75rem;
            }
            
            /* Adjust header spacing for tablet */
            #build-dropdown .text-center, #grow-dropdown .text-center, #scale-dropdown .text-center, #resources-dropdown .text-center {
                padding: 1.5rem 1rem 1rem 1rem;
            }
        }
        
        /* Resources dropdown specific styles */
        #resources-dropdown .grid {
            grid-template-columns: repeat(3, 1fr);
            gap: 1rem;
            display: grid;
            width: 100%;
        }
        
        #resources-dropdown {
            max-height: none;
            overflow: visible;
        }
        
        /* Partner dropdown specific styles */
        #partner-dropdown .grid {
            grid-template-columns: repeat(2, 1fr);
            gap: 1rem;
            display: grid;
            width: 100%;
        }
        
        #partner-dropdown {
            max-height: none;
            overflow: visible;
        }
        
        /* Optimize card sizing for better fit */
        #resources-dropdown .service-card {
            padding: 1rem;
            min-height: auto;
        }
        
        #resources-dropdown .service-card h3 {
            font-size: 1rem;
            line-height: 1.2;
        }
        
        #resources-dropdown .service-card p {
            font-size: 0.8rem;
            line-height: 1.3;
        }
        
        #resources-dropdown .service-card .text-gray-700 {
            font-size: 0.75rem;
            line-height: 1.2;
        }
        
        /* Partner dropdown card optimizations */
        #partner-dropdown .service-card {
            padding: 1rem;
            min-height: auto;
        }
        
        #partner-dropdown .service-card h3 {
            font-size: 1rem;
            line-height: 1.2;
        }
        
        #partner-dropdown .service-card p {
            font-size: 0.8rem;
            line-height: 1.3;
        }
        
        #partner-dropdown .service-card .text-gray-700 {
            font-size: 0.75rem;
            line-height: 1.2;
        }
        
        /* Reduce icon and spacing for compact layout */
        #resources-dropdown .service-card .w-12 {
            width: 2.5rem;
            height: 2.5rem;
        }
        
        #resources-dropdown .service-card .w-6 {
            width: 1.25rem;
            height: 1.25rem;
        }
        
        #resources-dropdown .service-card .mb-4 {
            margin-bottom: 0.75rem;
        }
        
        /* Partner dropdown icon and spacing optimizations */
        #partner-dropdown .service-card .w-12 {
            width: 2.5rem;
            height: 2.5rem;
        }
        
        #partner-dropdown .service-card .w-6 {
            width: 1.25rem;
            height: 1.25rem;
        }
        
        #partner-dropdown .service-card .mb-4 {
            margin-bottom: 0.75rem;
        }
        
        @media (max-width: 1024px) {
            #resources-dropdown .grid {
                grid-template-columns: repeat(2, 1fr);
                gap: 1rem;
            }
            
            #partner-dropdown .grid {
                grid-template-columns: repeat(2, 1fr);
                gap: 1rem;
            }
        }
        
        @media (max-width: 768px) {
            #resources-dropdown .grid {
                grid-template-columns: 1fr;
                gap: 1rem;
            }
            
            #partner-dropdown .grid {
                grid-template-columns: 1fr;
                gap: 1rem;
            }
        }
        
        /* Mobile dropdown adjustments */
        @media (max-width: 768px) {
            #build-dropdown, #grow-dropdown, #scale-dropdown, #resources-dropdown, #work-with-us-dropdown, #partner-dropdown {
                left: 50%;
                transform: translateX(-50%);
                width: 80vw;
                max-width: 80vw;
                margin-left: 0;
                margin-right: 0;
                border-radius: 12px;
            }
            
            #build-dropdown {
                margin-left: 1rem;
            }
            
            #build-dropdown .text-center, #grow-dropdown .text-center, #scale-dropdown .text-center, #resources-dropdown .text-center, #work-with-us-dropdown .text-center, #partner-dropdown .text-center {
                padding: 1.5rem 1rem;
            }
            
            #build-dropdown h2, #grow-dropdown h2, #scale-dropdown h2, #resources-dropdown h2, #work-with-us-dropdown h2, #partner-dropdown h2 {
                font-size: 1.5rem;
            }
            
            #build-dropdown p, #grow-dropdown p, #scale-dropdown p, #resources-dropdown p, #work-with-us-dropdown p, #partner-dropdown p {
                font-size: 0.9rem;
            }
            
            #build-dropdown .grid, #grow-dropdown .grid, #scale-dropdown .grid, #work-with-us-dropdown .grid, #partner-dropdown .grid {
                grid-template-columns: 1fr;
                gap: 0.75rem;
                padding: 0.75rem;
            }
            
            #resources-dropdown .grid {
                grid-template-columns: 1fr;
                gap: 0.75rem;
                padding: 0.75rem;
            }
        }
        
        /* Ensure dropdown doesn't interfere with mobile menu */
        @media (max-width: 1023px) {
            #build-dropdown, #grow-dropdown, #scale-dropdown, #resources-dropdown, #work-with-us-dropdown, #partner-dropdown {
                display: none !important;
            }
        }
    </style>
</head>
<body class="antialiased bg-gray-50">
    <!-- Loading Screen -->
    <div id="loading-screen" class="fixed inset-0 flex items-center justify-center bg-white z-[9999]">
        <div class="w-24 h-24 relative">
            <div class="w-full h-full">
                <div class="w-24 h-24 flex items-center justify-center">
                    <img src="/images/logo-loader.svg" alt="AiBit Sol" class="w-16 h-16 animate-wave-logo" />
                </div>
            </div>
        </div>
    </div>
    
    <!-- Navigation -->
    <nav class="bg-white shadow-lg relative z-50 sticky top-0">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-16 lg:h-20">
                <!-- Logo -->
                <div class="flex-shrink-0 mr-4 sm:mr-6 lg:mr-8">
                    <a href="/" class="flex items-center group">
                        <img src="/images/aibs.svg" alt="AiBit Sol" class="nav-logo h-8 sm:h-10 lg:h-12 w-auto transition-transform duration-300 group-hover:scale-105" loading="eager" fetchpriority="high" decoding="async" width="134" height="24">
                    </a>
                </div>
                
                <!-- Desktop Navigation -->
                <div class="hidden lg:flex flex-1 justify-start">
                    <div class="flex items-center space-x-3 xl:space-x-4 2xl:space-x-6 nav-links">
                        <div class="relative group">
                            <a href="/?page=services" onclick="toggleBuildDropdown(); return false;" class="nav-link text-gray-600 hover:text-primary font-medium transition-colors duration-300 flex items-center cursor-pointer">
                                Build
                                <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                                </svg>
                            </a>
                            
                            <!-- Build Dropdown -->
                            <div id="build-dropdown" class="absolute top-full left-1/2 transform -translate-x-1/2 w-screen max-w-6xl bg-white shadow-2xl border-t-4 border-blue-500 rounded-br-lg hidden z-50" style="margin-top: 5px;">
                                <!-- Invisible bridge to prevent dropdown from disappearing -->
                                <div class="absolute -top-5 left-0 right-0 h-5 bg-transparent"></div>
                                <div class="relative">
                                    <!-- Close Button -->
                                    <button onclick="closeBuildDropdown(); event.stopPropagation();" class="close-button absolute top-4 right-4 text-gray-400 hover:text-gray-600 transition-colors duration-200 z-10 p-1" type="button" title="Close">
                                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                                        </svg>
                                    </button>
                                    
                                    <!-- Dropdown Header -->
                                    <div class="text-center py-12 px-6">
                                        <h2 class="text-3xl font-bold text-gray-900 mb-2">Responsive & Custom Development</h2>
                                        <p class="text-gray-600 text-lg">Build web apps that are fast, responsive, and user-friendly.</p>
                                    </div>
                                    
                                    <!-- Services Grid -->
                                    <div class="grid grid-cols-2 gap-6 p-6">
                                        <!-- Website Development -->
                                        <a href="/?page=website-that-work" class="service-card bg-gray-50 rounded-xl p-4 hover:shadow-lg transition-all duration-300 cursor-pointer group block">
                                            <div class="flex items-center mb-4">
                                                <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center mr-4">
                                                    <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9v-9m0-9v9"></path>
                                                    </svg>
                                                </div>
                                                <div>
                                                    <h3 class="font-bold text-gray-900 text-lg">Websites That Work</h3>
                                                    <p class="text-gray-600 text-sm">Responsive & Custom Development</p>
                                                </div>
                                            </div>
                                            <p class="text-gray-700 text-sm leading-relaxed">Build web apps that are fast, responsive, and user-friendly with modern design patterns and optimized performance.</p>
                                        </a>
                                        
                                        <!-- Web App Development -->
                                        <a href="/?page=web-app-development" class="service-card bg-gray-50 rounded-xl p-4 hover:shadow-lg transition-all duration-300 cursor-pointer group block">
                                            <div class="flex items-center mb-4">
                                                <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center mr-4">
                                                    <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                                    </svg>
                                                </div>
                                                <div>
                                                    <h3 class="font-bold text-gray-900 text-lg">Web App Design & Development</h3>
                                                    <p class="text-gray-600 text-sm">Scalable web apps and intuitive user experiences</p>
                                                </div>
                                            </div>
                                            <p class="text-gray-700 text-sm leading-relaxed">From prototypes to production-ready apps designed for scale with secure architecture and seamless functionality.</p>
                                        </a>
                                        
                                        <!-- UI/UX Design -->
                                        <a href="/?page=blogs-ui-ux-design" class="service-card bg-gray-50 rounded-xl p-4 hover:shadow-lg transition-all duration-300 cursor-pointer group block">
                                            <div class="flex items-center mb-4">
                                                <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center mr-4">
                                                    <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"></path>
                                                    </svg>
                                                </div>
                                                <div>
                                                    <h3 class="font-bold text-gray-900 text-lg">UI/UX & Creative Design</h3>
                                                    <p class="text-gray-600 text-sm">Designs that delight and engage users</p>
                                                </div>
                                            </div>
                                            <p class="text-gray-700 text-sm leading-relaxed">Modern interfaces and visuals that make interactions intuitive with user-centered design methodologies and research.</p>
                                        </a>
                                        
                                        <!-- Mobile Development -->
                                        <a href="/?page=mobile-experiences" class="service-card bg-gray-50 rounded-xl p-4 hover:shadow-lg transition-all duration-300 cursor-pointer group block">
                                            <div class="flex items-center mb-4">
                                                <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center mr-4">
                                                    <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z"></path>
                                                    </svg>
                                                </div>
                                                <div>
                                                    <h3 class="font-bold text-gray-900 text-lg">Mobile Experiences</h3>
                                                    <p class="text-gray-600 text-sm">Mobile App Development & UI/UX Design</p>
                                                </div>
                                            </div>
                                            <p class="text-gray-700 text-sm leading-relaxed">iOS and Android apps crafted to engage users and boost retention with native performance and beautiful interfaces.</p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="relative group">
                            <a href="/?page=digital-marketing" onclick="toggleGrowDropdown(); return false;" class="nav-link text-gray-600 hover:text-primary font-medium transition-colors duration-300 flex items-center cursor-pointer">
                                Grow
                                <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                                </svg>
                            </a>
                            
                            <!-- Grow Dropdown -->
                            <div id="grow-dropdown" class="absolute top-full left-1/2 transform -translate-x-1/2 w-screen max-w-6xl bg-white shadow-2xl border-t-4 border-blue-500 rounded-br-lg hidden z-50" style="margin-top: 5px;">
                                <!-- Invisible bridge to prevent dropdown from disappearing -->
                                <div class="absolute -top-5 left-0 right-0 h-5 bg-transparent"></div>
                                <div class="relative">
                                    <!-- Close Button -->
                                    <button onclick="closeGrowDropdown(); event.stopPropagation();" class="close-button absolute top-4 right-4 text-gray-400 hover:text-gray-600 transition-colors duration-200 z-10 p-1" type="button" title="Close">
                                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                                        </svg>
                                    </button>
                                    
                                    <!-- Dropdown Header -->
                                    <div class="text-center py-12 px-6">
                                        <h2 class="text-3xl font-bold text-gray-900 mb-2">Marketing that fuels visibility</h2>
                                        <p class="text-gray-600 text-lg">Marketing strategies that fuel visibility, traffic, and long-term growth.</p>
                                    </div>
                                    
                                    <!-- Services Grid -->
                                    <div class="grid grid-cols-2 gap-6 p-6">
                                        <!-- Digital Marketing -->
                                        <a href="/?page=digital-marketing" class="service-card bg-gray-50 rounded-xl p-4 hover:shadow-lg transition-all duration-300 cursor-pointer group block">
                                            <div class="flex items-center mb-4">
                                                <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center mr-4">
                                                    <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path>
                                                    </svg>
                                                </div>
                                                <div>
                                                    <h3 class="font-bold text-gray-900 text-lg">Digital Marketing</h3>
                                                    <p class="text-gray-600 text-sm">Strategies to grow your brand online</p>
                                                </div>
                                            </div>
                                            <p class="text-gray-700 text-sm leading-relaxed">Integrated campaigns that boost traffic and conversions through data-driven strategies and continuous optimization.</p>
                                        </a>
                                        
                                        <!-- Blog and Content Marketing -->
                                        <a href="/?page=blogs-custom-marketing" class="service-card bg-gray-50 rounded-xl p-4 hover:shadow-lg transition-all duration-300 cursor-pointer group block">
                                            <div class="flex items-center mb-4">
                                                <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center mr-4">
                                                    <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                                                    </svg>
                                                </div>
                                                <div>
                                                    <h3 class="font-bold text-gray-900 text-lg">Blog and Content Marketing</h3>
                                                    <p class="text-gray-600 text-sm">Blog & Content Marketing</p>
                                                </div>
                                            </div>
                                            <p class="text-gray-700 text-sm leading-relaxed">Content that educates visitors and turns them into customers with strategic storytelling and SEO optimization.</p>
                                        </a>
                                        
                                        <!-- Social Ads That Sell -->
                                        <a href="/?page=social-media-ads" class="service-card bg-gray-50 rounded-xl p-4 hover:shadow-lg transition-all duration-300 cursor-pointer group block">
                                            <div class="flex items-center mb-4">
                                                <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center mr-4">
                                                    <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.684 13.342C8.886 12.938 9 12.482 9 12c0-.482-.114-.938-.316-1.342m0 2.684a3 3 0 110-2.684m0 2.684l6.632 3.316m-6.632-6l6.632-3.316m0 0a3 3 0 105.367-2.684 3 3 0 00-5.367 2.684zm0 9.316a3 3 0 105.367 2.684 3 3 0 00-5.367-2.684z"></path>
                                                    </svg>
                                                </div>
                                                <div>
                                                    <h3 class="font-bold text-gray-900 text-lg">Social Ads That Sell</h3>
                                                    <p class="text-gray-600 text-sm">Engaging Social Media Advertising campaigns</p>
                                                </div>
                                            </div>
                                            <p class="text-gray-700 text-sm leading-relaxed">Targeted ad strategies that increase engagement and sales across platforms with creative content and analytics.</p>
                                        </a>
                                        
                                        <!-- SEO & GEO -->
                                        <a href="/?page=seo-ai-seo" class="service-card bg-gray-50 rounded-xl p-4 hover:shadow-lg transition-all duration-300 cursor-pointer group block">
                                            <div class="flex items-center mb-4">
                                                <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center mr-4">
                                                    <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                                                    </svg>
                                                </div>
                                                <div>
                                                    <h3 class="font-bold text-gray-900 text-lg">SEO & GEO</h3>
                                                    <p class="text-gray-600 text-sm">Search Engine Optimization & AI-Powered SEO</p>
                                                </div>
                                            </div>
                                            <p class="text-gray-700 text-sm leading-relaxed">Boost your visibility with traditional SEO and cutting-edge AI optimization for sustainable organic growth.</p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="relative group">
                            <a href="/?page=scale" onclick="toggleScaleDropdown(); return false;" class="nav-link text-gray-600 hover:text-primary font-medium transition-colors duration-300 flex items-center cursor-pointer">
                                Scale
                                <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                                </svg>
                            </a>
                            
                            <!-- Scale Dropdown -->
                            <div id="scale-dropdown" class="absolute top-full left-1/2 transform -translate-x-1/2 w-screen max-w-6xl bg-white shadow-2xl border-t-4 border-blue-500 rounded-br-lg hidden z-50" style="margin-top: 5px;">
                                <!-- Invisible bridge to prevent dropdown from disappearing -->
                                <div class="absolute -top-5 left-0 right-0 h-5 bg-transparent"></div>
                                <div class="relative">
                                    <!-- Close Button -->
                                    <button onclick="closeScaleDropdown(); event.stopPropagation();" class="close-button absolute top-4 right-4 text-gray-400 hover:text-gray-600 transition-colors duration-200 z-10 p-1" type="button" title="Close">
                                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                                        </svg>
                                    </button>
                                    
                                    <!-- Dropdown Header -->
                                    <div class="text-center py-12 px-6">
                                        <h2 class="text-3xl font-bold text-gray-900 mb-2">Scale Your Business</h2>
                                        <p class="text-gray-600 text-lg">Solutions to help your business grow and scale efficiently.</p>
                                    </div>
                                    
                                    <!-- Services Grid -->
                                    <div class="grid grid-cols-2 gap-6 p-6">
                                        <!-- Custom Software Development -->
                                        <a href="/?page=custom-software-development" class="service-card bg-gray-50 rounded-xl p-4 hover:shadow-lg transition-all duration-300 cursor-pointer group block">
                                            <div class="flex items-center mb-4">
                                                <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center mr-4">
                                                    <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"></path>
                                                    </svg>
                                                </div>
                                                <div>
                                                    <h3 class="font-bold text-gray-900 text-lg">Custom Software Development</h3>
                                                    <p class="text-gray-600 text-sm">Tailored solutions for your business needs</p>
                                                </div>
                                            </div>
                                            <p class="text-gray-700 text-sm leading-relaxed">Build scalable software solutions that grow with your business and adapt to your unique requirements.</p>
                                        </a>
                                        
                                        <!-- MVP Development -->
                                        <a href="/?page=mvp" class="service-card bg-gray-50 rounded-xl p-4 hover:shadow-lg transition-all duration-300 cursor-pointer group block">
                                            <div class="flex items-center mb-4">
                                                <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center mr-4">
                                                    <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                                                    </svg>
                                                </div>
                                                <div>
                                                    <h3 class="font-bold text-gray-900 text-lg">MVP Development</h3>
                                                    <p class="text-gray-600 text-sm">Fast-track your product launch</p>
                                                </div>
                                            </div>
                                            <p class="text-gray-700 text-sm leading-relaxed">Launch your minimum viable product quickly to test market fit and gather user feedback for rapid iteration.</p>
                                        </a>
                                        
                                        <!-- IT Staff Augmentation -->
                                        <a href="/?page=it-staff" class="service-card bg-gray-50 rounded-xl p-4 hover:shadow-lg transition-all duration-300 cursor-pointer group block">
                                            <div class="flex items-center mb-4">
                                                <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center mr-4">
                                                    <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                                                    </svg>
                                                </div>
                                                <div>
                                                    <h3 class="font-bold text-gray-900 text-lg">IT Staff Augmentation</h3>
                                                    <p class="text-gray-600 text-sm">Expert talent when you need it</p>
                                                </div>
                                            </div>
                                            <p class="text-gray-700 text-sm leading-relaxed">Scale your development team with skilled professionals who integrate seamlessly into your existing workflow.</p>
                                        </a>
                                        
                                        <!-- AI Automation -->
                                        <a href="/?page=custom-ai-solution" class="service-card bg-gray-50 rounded-xl p-4 hover:shadow-lg transition-all duration-300 cursor-pointer group block">
                                            <div class="flex items-center mb-4">
                                                <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center mr-4">
                                                    <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"></path>
                                                    </svg>
                                                </div>
                                                <div>
                                                    <h3 class="font-bold text-gray-900 text-lg">AI Automation</h3>
                                                    <p class="text-gray-600 text-sm">Intelligent automation solutions</p>
                                                </div>
                                            </div>
                                            <p class="text-gray-700 text-sm leading-relaxed">Leverage artificial intelligence to automate processes, reduce costs, and improve efficiency across your organization.</p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="relative group">
                            <a href="/?page=resources" onclick="toggleResourcesDropdown(); return false;" class="nav-link text-gray-600 hover:text-primary font-medium transition-colors duration-300 flex items-center cursor-pointer">
                                Resources
                                <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                                </svg>
                            </a>
                            
                            <!-- Resources Dropdown -->
                            <div id="resources-dropdown" class="absolute top-full left-1/2 transform -translate-x-1/2 w-screen max-w-6xl bg-white shadow-2xl border-t-4 border-blue-500 rounded-br-lg hidden z-50" style="margin-top: 5px;">
                                <!-- Invisible bridge to prevent dropdown from disappearing -->
                                <div class="absolute -top-5 left-0 right-0 h-5 bg-transparent"></div>
                                <div class="relative">
                                    <!-- Close Button -->
                                    <button onclick="closeResourcesDropdown(); event.stopPropagation();" class="close-button absolute top-4 right-4 text-gray-400 hover:text-gray-600 transition-colors duration-200 z-10 p-1" type="button" title="Close">
                                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                                        </svg>
                                    </button>
                                    
                                    <!-- Dropdown Header -->
                                    <div class="text-center py-12 px-6">
                                        <h2 class="text-3xl font-bold text-gray-900 mb-2">Insights, guides, and strategies</h2>
                                        <p class="text-gray-600 text-lg">Insights, guides, and strategies to help your business move forward.</p>
                                    </div>
                                    
                                    <!-- Resources Grid -->
                                    <div class="grid grid-cols-3 gap-4 p-4">
                                        <!-- Web Design -->
                                        <a href="/?page=blogs-custom-software" class="service-card bg-gray-50 rounded-xl p-4 hover:shadow-lg transition-all duration-300 cursor-pointer group block">
                                            <div class="flex items-center mb-4">
                                                <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center mr-4">
                                                    <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9v-9m0-9v9"></path>
                                                    </svg>
                                                </div>
                                                <div>
                                                    <h3 class="font-bold text-gray-900 text-lg">Web Design</h3>
                                                    <p class="text-gray-600 text-sm">Design drives trust</p>
                                                </div>
                                            </div>
                                            <p class="text-gray-700 text-sm leading-relaxed">Learn why design matters and how to fix an outdated site with modern aesthetics and improved user experience.</p>
                                        </a>
                                        
                                        <!-- Mobile Apps -->
                                        <a href="/?page=blogs-mobile-app" class="service-card bg-gray-50 rounded-xl p-4 hover:shadow-lg transition-all duration-300 cursor-pointer group block">
                                            <div class="flex items-center mb-4">
                                                <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center mr-4">
                                                    <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z"></path>
                                                    </svg>
                                                </div>
                                                <div>
                                                    <h3 class="font-bold text-gray-900 text-lg">Mobile Apps</h3>
                                                    <p class="text-gray-600 text-sm">Keep customers coming back</p>
                                                </div>
                                            </div>
                                            <p class="text-gray-700 text-sm leading-relaxed">How mobile apps increase retention and engagement with personalized experiences and push notification strategies.</p>
                                        </a>
                                        
                                        <!-- Business Growth -->
                                        <a href="/?page=blogs-business-growth" class="service-card bg-gray-50 rounded-xl p-4 hover:shadow-lg transition-all duration-300 cursor-pointer group block">
                                            <div class="flex items-center mb-4">
                                                <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center mr-4">
                                                    <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path>
                                                    </svg>
                                                </div>
                                                <div>
                                                    <h3 class="font-bold text-gray-900 text-lg">Business Growth</h3>
                                                    <p class="text-gray-600 text-sm">Scale smarter</p>
                                                </div>
                                            </div>
                                            <p class="text-gray-700 text-sm leading-relaxed">Strategies to move past growth plateaus and achieve sustainable expansion with proven methodologies and insights.</p>
                                        </a>
                                        
                                        <!-- AI & Automation -->
                                        <a href="/?page=blogs-ai-automation" class="service-card bg-gray-50 rounded-xl p-4 hover:shadow-lg transition-all duration-300 cursor-pointer group block">
                                            <div class="flex items-center mb-4">
                                                <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center mr-4">
                                                    <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path>
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                                    </svg>
                                                </div>
                                                <div>
                                                    <h3 class="font-bold text-gray-900 text-lg">AI & Automation</h3>
                                                    <p class="text-gray-600 text-sm">Save time & money</p>
                                                </div>
                                            </div>
                                            <p class="text-gray-700 text-sm leading-relaxed">Automate repetitive tasks and scale smarter with intelligent workflows that reduce costs and increase productivity.</p>
                                        </a>
                                        
                                        <!-- Custom Branding & Marketing Kit -->
                                        <a href="/?page=custom-branding-marketing-kit" class="service-card bg-gray-50 rounded-xl p-4 hover:shadow-lg transition-all duration-300 cursor-pointer group block">
                                            <div class="flex items-center mb-4">
                                                <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center mr-4">
                                                    <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zM21 5a2 2 0 00-2-2h-4a2 2 0 00-2 2v12a4 4 0 004 4h4a2 2 0 002-2V5z"></path>
                                                    </svg>
                                                </div>
                                                <div>
                                                    <h3 class="font-bold text-gray-900 text-lg">Custom Branding & Marketing Kit</h3>
                                                    <p class="text-gray-600 text-sm">Make your brand unforgettable</p>
                                                </div>
                                            </div>
                                            <p class="text-gray-700 text-sm leading-relaxed">Custom assets that sharpen your identity and create consistent brand recognition across all marketing channels.</p>
                                        </a>
                                        
                                        <!-- Custom Software Development -->
                                        <a href="/?page=blogs-custom-software" class="service-card bg-gray-50 rounded-xl p-4 hover:shadow-lg transition-all duration-300 cursor-pointer group block">
                                            <div class="flex items-center mb-4">
                                                <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center mr-4">
                                                    <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"></path>
                                                    </svg>
                                                </div>
                                                <div>
                                                    <h3 class="font-bold text-gray-900 text-lg">Custom Software Development</h3>
                                                    <p class="text-gray-600 text-sm">Outgrown tools? Build your own.</p>
                                                </div>
                                            </div>
                                            <p class="text-gray-700 text-sm leading-relaxed">Tailored solutions that scale with your business needs and integrate seamlessly with existing systems and workflows.</p>
                                        </a>
                                        
                                        <!-- Blog & Content Marketing -->
                                        <a href="/?page=custom-branding-marketing-kit" class="service-card bg-gray-50 rounded-xl p-4 hover:shadow-lg transition-all duration-300 cursor-pointer group block">
                                            <div class="flex items-center mb-4">
                                                <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center mr-4">
                                                    <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                                                    </svg>
                                                </div>
                                                <div>
                                                    <h3 class="font-bold text-gray-900 text-lg">Blog & Content Marketing</h3>
                                                    <p class="text-gray-600 text-sm">No traffic, no leads? Publish content that actually converts.</p>
                                                </div>
                                            </div>
                                            <p class="text-gray-700 text-sm leading-relaxed">SEO-driven blogs that build visibility and trust while attracting qualified leads through strategic content planning.</p>
                                        </a>
                                        
                                        <!-- Social Media Ads -->
                                        <a href="/?page=blogs-social-marketing" class="service-card bg-gray-50 rounded-xl p-4 hover:shadow-lg transition-all duration-300 cursor-pointer group block">
                                            <div class="flex items-center mb-4">
                                                <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center mr-4">
                                                    <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.684 13.342C8.886 12.938 9 12.482 9 12c0-.482-.114-.938-.316-1.342m0 2.684a3 3 0 110-2.684m0 2.684l6.632 3.316m-6.632-6l6.632-3.316m0 0a3 3 0 105.367-2.684 3 3 0 00-5.367 2.684zm0 9.316a3 3 0 105.367 2.684 3 3 0 00-5.367-2.684z"></path>
                                                    </svg>
                                                </div>
                                                <div>
                                                    <h3 class="font-bold text-gray-900 text-lg">Social Media Ads</h3>
                                                    <p class="text-gray-600 text-sm">Wasting ad spend? Run campaigns that truly perform.</p>
                                                </div>
                                            </div>
                                            <p class="text-gray-700 text-sm leading-relaxed">Targeted ads designed to capture attention and drive results with data-driven optimization and creative excellence.</p>
                                        </a>
                                        
                                        <!-- IT Staff Augmentation -->
                                        <a href="/?page=blogs-it-staff" class="service-card bg-gray-50 rounded-xl p-4 hover:shadow-lg transition-all duration-300 cursor-pointer group block">
                                            <div class="flex items-center mb-4">
                                                <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center mr-4">
                                                    <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                                                    </svg>
                                                </div>
                                                <div>
                                                    <h3 class="font-bold text-gray-900 text-lg">IT Staff Augmentation</h3>
                                                    <p class="text-gray-600 text-sm">Scale your team on demand.</p>
                                                </div>
                                            </div>
                                            <p class="text-gray-700 text-sm leading-relaxed">Skilled developers who plug right into your projects and deliver results with minimal onboarding and maximum efficiency.</p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="relative group">
                            <a href="/?page=work-with-us" onclick="toggleWorkWithUsDropdown(); return false;" class="nav-link text-gray-600 hover:text-primary font-medium transition-colors duration-300 flex items-center cursor-pointer">
                                Work With Us
                                <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                                </svg>
                            </a>
                            
                            <!-- Work With Us Dropdown -->
                            <div id="work-with-us-dropdown" class="absolute top-full left-1/2 transform -translate-x-1/2 w-screen max-w-6xl bg-white shadow-2xl border-t-4 border-blue-500 rounded-br-lg hidden z-50" style="margin-top: 5px;">
                                <!-- Invisible bridge to prevent dropdown from disappearing -->
                                <div class="absolute -top-5 left-0 right-0 h-5 bg-transparent"></div>
                                <div class="relative">
                                    <!-- Close Button -->
                                    <button onclick="closeWorkWithUsDropdown(); event.stopPropagation();" class="close-button absolute top-4 right-4 text-gray-400 hover:text-gray-600 transition-colors duration-200 z-10 p-1" type="button" title="Close">
                                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                                        </svg>
                                    </button>
                                    
                                    <!-- Dropdown Header -->
                                    <div class="text-center py-12 px-6">
                                        <h2 class="text-3xl font-bold text-gray-900 mb-2">Join our team and grow</h2>
                                        <p class="text-gray-600 text-lg">Explore career opportunities and build your future with AiBit Soft.</p>
                                    </div>
                                    
                                    <!-- Work With Us Grid -->
                                    <div class="grid grid-cols-2 gap-6 p-6">
                                        <!-- Careers -->
                                        <a href="/?page=careers" class="service-card bg-gray-50 rounded-xl p-4 hover:shadow-lg transition-all duration-300 cursor-pointer group block">
                                            <div class="flex items-center mb-4">
                                                <div class="w-12 h-12 bg-green-100 rounded-lg flex items-center justify-center mr-4">
                                                    <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path>
                                                    </svg>
                                                </div>
                                                <div>
                                                    <h3 class="font-bold text-gray-900 text-lg">Careers</h3>
                                                    <p class="text-gray-600 text-sm">Join our team and grow with AiBit Soft</p>
                                                </div>
                                            </div>
                                            <p class="text-gray-700 text-sm leading-relaxed">Discover exciting career opportunities in a collaborative environment where innovation meets expertise.</p>
                                        </a>
                                        
                                        <!-- Contact Us -->
                                        <a href="/?page=contact" class="service-card bg-gray-50 rounded-xl p-4 hover:shadow-lg transition-all duration-300 cursor-pointer group block">
                                            <div class="flex items-center mb-4">
                                                <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center mr-4">
                                                    <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                                    </svg>
                                                </div>
                                                <div>
                                                    <h3 class="font-bold text-gray-900 text-lg">Contact Us</h3>
                                                    <p class="text-gray-600 text-sm">Reach out for a consultation or questions</p>
                                                </div>
                                            </div>
                                            <p class="text-gray-700 text-sm leading-relaxed">Get personalized solutions and expert advice. We respond within 24-48 hours to all inquiries.</p>
                                        </a>
                                        
                                        <!-- Book an Expert Appointment -->
                                        <a href="/?page=book-an-expert" class="service-card bg-gray-50 rounded-xl p-4 hover:shadow-lg transition-all duration-300 cursor-pointer group block">
                                            <div class="flex items-center mb-4">
                                                <div class="w-12 h-12 bg-purple-100 rounded-lg flex items-center justify-center mr-4">
                                                    <svg class="w-6 h-6 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                                                    </svg>
                                                </div>
                                                <div>
                                                    <h3 class="font-bold text-gray-900 text-lg">Book an Expert Appointment</h3>
                                                    <p class="text-gray-600 text-sm">Schedule a consultation with our experts</p>
                                                </div>
                                            </div>
                                            <p class="text-gray-700 text-sm leading-relaxed">Book a one-on-one session with our experts to discuss your project requirements and get tailored solutions.</p>
                                        </a>
                                        
                                        <!-- Get a Proposal -->
                                        <a href="/?page=get-proposal" class="service-card bg-gray-50 rounded-xl p-4 hover:shadow-lg transition-all duration-300 cursor-pointer group block">
                                            <div class="flex items-center mb-4">
                                                <div class="w-12 h-12 bg-orange-100 rounded-lg flex items-center justify-center mr-4">
                                                    <svg class="w-6 h-6 text-orange-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                                                    </svg>
                                                </div>
                                                <div>
                                                    <h3 class="font-bold text-gray-900 text-lg">Get a Proposal</h3>
                                                    <p class="text-gray-600 text-sm">Request a custom proposal</p>
                                                </div>
                                            </div>
                                            <p class="text-gray-700 text-sm leading-relaxed">Get a detailed proposal with transparent pricing and project timeline tailored to your specific needs.</p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="relative group">
                            <a href="/?page=partner" onclick="togglePartnerDropdown(); return false;" class="nav-link text-gray-600 hover:text-primary font-medium transition-colors duration-300 flex items-center cursor-pointer">
                                Partner
                                <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                                </svg>
                            </a>
                            
                            <!-- Partner Dropdown -->
                            <div id="partner-dropdown" class="absolute top-full left-1/2 transform -translate-x-1/2 w-screen max-w-6xl bg-white shadow-2xl border-t-4 border-blue-500 rounded-br-lg hidden z-50" style="margin-top: 5px;">
                                <!-- Invisible bridge to prevent dropdown from disappearing -->
                                <div class="absolute -top-5 left-0 right-0 h-5 bg-transparent"></div>
                                <div class="relative">
                                    <!-- Close Button -->
                                    <button onclick="closePartnerDropdown(); event.stopPropagation();" class="close-button absolute top-4 right-4 text-gray-400 hover:text-gray-600 transition-colors duration-200 z-10 p-1" type="button" title="Close">
                                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                                        </svg>
                                    </button>
                                    
                                    <!-- Dropdown Header -->
                                    <div class="text-center py-12 px-6">
                                        <h2 class="text-3xl font-bold text-gray-900 mb-2">Collaborate. Grow. Win Together.</h2>
                                        <p class="text-gray-600 text-lg">Exclusive programs for agencies, consultants, and businesses who want to team up with AiBit Soft.</p>
                                    </div>
                                    
                                    <!-- Partner Grid -->
                                    <div class="grid grid-cols-2 gap-6 p-6">
                                        <!-- Affiliate Partner -->
                                        <a href="/?page=affiliate-partner" class="service-card bg-gray-50 rounded-xl p-4 hover:shadow-lg transition-all duration-300 cursor-pointer group block">
                                            <div class="flex items-center mb-4">
                                                <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center mr-4">
                                                    <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                                                    </svg>
                                                </div>
                                                <div>
                                                    <h3 class="font-bold text-gray-900 text-lg">Affiliate Partner</h3>
                                                    <p class="text-gray-600 text-sm">Earn as you grow</p>
                                                </div>
                                            </div>
                                            <p class="text-gray-700 text-sm leading-relaxed">Recommend our services and earn commissions for every client referral with transparent tracking and timely payouts.</p>
                                        </a>
                                        
                                        <!-- Enterprise Partner -->
                                        <a href="/?page=affiliate-partner#enterprise-partner" class="service-card bg-gray-50 rounded-xl p-4 hover:shadow-lg transition-all duration-300 cursor-pointer group block">
                                            <div class="flex items-center mb-4">
                                                <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center mr-4">
                                                    <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                                                    </svg>
                                                </div>
                                                <div>
                                                    <h3 class="font-bold text-gray-900 text-lg">Enterprise Partner</h3>
                                                    <p class="text-gray-600 text-sm">Tailored alliances for big growth</p>
                                                </div>
                                            </div>
                                            <p class="text-gray-700 text-sm leading-relaxed">Strategic programs for enterprises needing long-term collaboration with dedicated support and custom solutions.</p>
                                        </a>
                                        
                                        <!-- Agency Partner -->
                                        <a href="/?page=affiliate-partner#agency-partner" class="service-card bg-gray-50 rounded-xl p-4 hover:shadow-lg transition-all duration-300 cursor-pointer group block">
                                            <div class="flex items-center mb-4">
                                                <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center mr-4">
                                                    <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197m13.5-9a2.5 2.5 0 11-5 0 2.5 2.5 0 015 0z"></path>
                                                    </svg>
                                                </div>
                                                <div>
                                                    <h3 class="font-bold text-gray-900 text-lg">Agency Partner</h3>
                                                    <p class="text-gray-600 text-sm">Extend your services, expand your impact</p>
                                                </div>
                                            </div>
                                            <p class="text-gray-700 text-sm leading-relaxed">Marketing, dev, and IT support to scale your agency offerings and deliver exceptional results to your clients.</p>
                                        </a>
                                        
                                        <!-- Technology Partner -->
                                        <a href="/?page=affiliate-partner#technology-partner" class="service-card bg-gray-50 rounded-xl p-4 hover:shadow-lg transition-all duration-300 cursor-pointer group block">
                                            <div class="flex items-center mb-4">
                                                <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center mr-4">
                                                    <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"></path>
                                                    </svg>
                                                </div>
                                                <div>
                                                    <h3 class="font-bold text-gray-900 text-lg">Technology Partner</h3>
                                                    <p class="text-gray-600 text-sm">Build smarter, together</p>
                                                </div>
                                            </div>
                                            <p class="text-gray-700 text-sm leading-relaxed">Collaborate on software, apps, and AI solutions to innovate faster with shared resources and combined expertise.</p>
                                        </a>
                                        
                                        <!-- Reseller Partner -->
                                        <a href="/?page=affiliate-partner#reseller-partner" class="service-card bg-gray-50 rounded-xl p-4 hover:shadow-lg transition-all duration-300 cursor-pointer group block">
                                            <div class="flex items-center mb-4">
                                                <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center mr-4">
                                                    <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4m0 0L7 13m0 0l-2.5 5M7 13l2.5 5m6-5v6a2 2 0 01-2 2H9a2 2 0 01-2-2v-6m8 0V9a2 2 0 00-2-2H9a2 2 0 00-2 2v4.01"></path>
                                                    </svg>
                                                </div>
                                                <div>
                                                    <h3 class="font-bold text-gray-900 text-lg">Reseller Partner</h3>
                                                    <p class="text-gray-600 text-sm">Your brand, our expertise</p>
                                                </div>
                                            </div>
                                            <p class="text-gray-700 text-sm leading-relaxed">White-label AiBit Soft solutions and sell them as your own with complete branding control and profit margins.</p>
                                        </a>
                                        
                                        <!-- Custom Partnership -->
                                        <a href="/?page=affiliate-partner#custom-partnership" class="service-card bg-gray-50 rounded-xl p-4 hover:shadow-lg transition-all duration-300 cursor-pointer group block">
                                            <div class="flex items-center mb-4">
                                                <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center mr-4">
                                                    <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                                    </svg>
                                                </div>
                                                <div>
                                                    <h3 class="font-bold text-gray-900 text-lg">Custom Partnership</h3>
                                                    <p class="text-gray-600 text-sm">No limits, just possibilities</p>
                                                </div>
                                            </div>
                                            <p class="text-gray-700 text-sm leading-relaxed">Co-create a partnership model designed for your unique vision with flexible terms and mutually beneficial outcomes.</p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Action Buttons -->
                <div class="nav-buttons flex items-center space-x-2 sm:space-x-3 lg:space-x-4 ml-4 sm:ml-6">
                    <!-- Desktop Action Buttons -->
                    <div class="hidden sm:flex items-center space-x-3">
                        <a href="/?page=get-proposal" class="nav-button bg-gradient-to-r from-blue-700 to-blue-600 text-white px-4 lg:px-6 py-2 rounded-full font-medium hover:from-blue-900 hover:to-blue-700 transition-all duration-300 text-sm lg:text-base hover:scale-105">Get Proposal</a>
                        <a href="/?page=book-an-expert" class="nav-button bg-white text-primary border-2 border-primary px-4 lg:px-6 py-2 rounded-full font-medium hover:bg-primary hover:text-white transition-all duration-300 text-sm lg:text-base hover:scale-105">Book Expert</a>
                    </div>
                    
                    <!-- Mobile menu button -->
                    <button class="lg:hidden text-gray-600 hover:text-primary transition-colors duration-300 focus:outline-none focus:ring-2 focus:ring-primary focus:ring-offset-2 rounded-md p-1" onclick="toggleMobileMenu()" aria-label="Toggle mobile menu">
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                        </svg>
                    </button>
                </div>
            </div>
            
    <!-- Mobile Menu Overlay -->
    <div id="mobile-menu-overlay" class="fixed inset-0 z-50 hidden">
        <!-- Backdrop -->
        <div class="absolute inset-0 bg-black bg-opacity-50 transition-opacity duration-300" onclick="toggleMobileMenu()" style="z-index: -1;"></div>
        
        <!-- Mobile Menu Panel -->
        <div id="mobile-menu-panel" class="absolute top-0 left-0 h-full w-full max-w-sm bg-white shadow-xl transform -translate-x-full transition-transform duration-300 ease-in-out flex flex-col">
            <!-- Menu Header -->
            <div class="flex items-center justify-between px-4 py-4 border-b border-gray-200 flex-shrink-0">
                <h2 class="text-lg font-semibold text-gray-900">Menu</h2>
                <button onclick="toggleMobileMenu()" class="text-gray-600 hover:text-gray-900 transition-colors duration-200 p-1">
                    <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </button>
            </div>
            
            <!-- Navigation Items -->
            <div class="flex-1 overflow-y-auto px-4 py-4">
                <nav class="space-y-1">
                    <!-- Build -->
                    <button onclick="showMobileSubmenu('build')" class="mobile-nav-item w-full flex items-center justify-between px-3 py-3 text-left text-gray-700 hover:text-blue-600 hover:bg-blue-50 rounded-lg transition-all duration-200 group">
                        <span class="font-medium text-base">Build</span>
                        <svg class="w-4 h-4 text-gray-400 group-hover:text-blue-600 transition-colors duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                        </svg>
                    </button>
                    
                    <!-- Grow -->
                    <button onclick="showMobileSubmenu('grow')" class="mobile-nav-item w-full flex items-center justify-between px-3 py-3 text-left text-gray-700 hover:text-green-600 hover:bg-green-50 rounded-lg transition-all duration-200 group">
                        <span class="font-medium text-base">Grow</span>
                        <svg class="w-4 h-4 text-gray-400 group-hover:text-green-600 transition-colors duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                        </svg>
                    </button>
                    
                    <!-- Scale -->
                    <button onclick="showMobileSubmenu('scale')" class="mobile-nav-item w-full flex items-center justify-between px-3 py-3 text-left text-gray-700 hover:text-purple-600 hover:bg-purple-50 rounded-lg transition-all duration-200 group">
                        <span class="font-medium text-base">Scale</span>
                        <svg class="w-4 h-4 text-gray-400 group-hover:text-purple-600 transition-colors duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                        </svg>
                    </button>
                    
                    <!-- Resources -->
                    <button onclick="showMobileSubmenu('resources')" class="mobile-nav-item w-full flex items-center justify-between px-3 py-3 text-left text-gray-700 hover:text-orange-600 hover:bg-orange-50 rounded-lg transition-all duration-200 group">
                        <span class="font-medium text-base">Resources</span>
                        <svg class="w-4 h-4 text-gray-400 group-hover:text-orange-600 transition-colors duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                        </svg>
                    </button>
                    
                    <!-- Work With Us -->
                    <button onclick="showMobileSubmenu('work-with-us')" class="mobile-nav-item w-full flex items-center justify-between px-3 py-3 text-left text-gray-700 hover:text-indigo-600 hover:bg-indigo-50 rounded-lg transition-all duration-200 group">
                        <span class="font-medium text-base">Work With Us</span>
                        <svg class="w-4 h-4 text-gray-400 group-hover:text-indigo-600 transition-colors duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                        </svg>
                    </button>
                    
                    <!-- Partner -->
                    <button onclick="showMobileSubmenu('partner')" class="mobile-nav-item w-full flex items-center justify-between px-3 py-3 text-left text-gray-700 hover:text-teal-600 hover:bg-teal-50 rounded-lg transition-all duration-200 group">
                        <span class="font-medium text-base">Partner</span>
                        <svg class="w-4 h-4 text-gray-400 group-hover:text-teal-600 transition-colors duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                        </svg>
                    </button>
                </nav>
            </div>
            
            <!-- Action Buttons -->
            <div class="flex-shrink-0 px-4 py-4 border-t border-gray-200 space-y-2">
                <a href="/?page=get-proposal" class="block w-full bg-gradient-to-r from-blue-600 to-blue-700 text-white px-4 py-2.5 rounded-lg font-medium hover:from-blue-700 hover:to-blue-800 transition-all duration-200 text-center shadow-sm text-sm">
                    Get Proposal
                </a>
                <a href="/?page=book-an-expert" class="block w-full bg-white text-blue-600 border-2 border-blue-600 px-4 py-2.5 rounded-lg font-medium hover:bg-blue-600 hover:text-white transition-all duration-200 text-center text-sm">
                    Book Expert
                </a>
            </div>
        </div>
    </div>
    
    <!-- Mobile Submenu Overlay -->
    <div id="mobile-submenu-overlay" class="fixed inset-0 z-50 hidden">
        <!-- Backdrop -->
        <div class="absolute inset-0 bg-black bg-opacity-50 transition-opacity duration-300" onclick="goBackMobileMenu()"></div>
        
        <!-- Submenu Panel -->
        <div id="mobile-submenu-panel" class="absolute top-0 left-0 h-full w-full max-w-sm bg-white shadow-xl transform -translate-x-full transition-transform duration-300 ease-in-out flex flex-col">
            <!-- Submenu Header -->
            <div class="flex items-center justify-between px-4 py-4 border-b border-gray-200 flex-shrink-0">
                <button onclick="goBackMobileMenu()" class="text-gray-600 hover:text-gray-900 transition-colors duration-200 p-1">
                    <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                    </svg>
                </button>
                <h2 id="mobile-submenu-title" class="text-lg font-semibold text-gray-900">Build</h2>
                <div class="w-9"></div>
            </div>
            
            <!-- Submenu Content -->
            <div id="mobile-submenu-content" class="flex-1 overflow-y-auto px-4 py-4">
                <!-- Content will be dynamically loaded here -->
            </div>
        </div>
    </div>
        </div>
    </nav>
    
    <!-- Main Content -->
    <main class="min-h-screen">