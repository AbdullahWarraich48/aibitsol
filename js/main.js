// AiBit Soft - Main JavaScript

document.addEventListener('DOMContentLoaded', function() {
    // Smooth scrolling for anchor links
    const links = document.querySelectorAll('a[href^="#"]');
    links.forEach(link => {
        link.addEventListener('click', function(e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                target.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        });
    });

    // Service Interest Multiselect
    function initServiceMultiSelect() {
        const components = document.querySelectorAll('[data-service-multiselect]');

        if (!components.length) return;

        const closeAllPanels = () => {
            document.querySelectorAll('[data-service-panel]').forEach(panel => panel.classList.add('hidden'));
            document.querySelectorAll('[data-service-trigger]').forEach(btn => btn.setAttribute('aria-expanded', 'false'));
            document.querySelectorAll('[data-service-chevron]').forEach(icon => icon.classList.remove('rotate-180'));
        };

        components.forEach(component => {
            const trigger = component.querySelector('[data-service-trigger]');
            const panel = component.querySelector('[data-service-panel]');
            const label = component.querySelector('[data-service-label]');
            const chevron = component.querySelector('[data-service-chevron]');
            const clearBtn = component.querySelector('[data-service-clear]');
            const countEl = component.querySelector('[data-service-count]');
            const checkboxes = component.querySelectorAll('input[type="checkbox"]');

            if (!trigger || !panel) return;

            const updateLabel = () => {
                const selected = Array.from(checkboxes)
                    .filter(cb => cb.checked)
                    .map(cb => cb.parentElement?.querySelector('span')?.textContent?.trim() || cb.value);

                if (selected.length === 0) {
                    label.textContent = 'Select one or more services';
                } else if (selected.length === 1) {
                    label.textContent = selected[0];
                } else if (selected.length === 2) {
                    label.textContent = selected.join(', ');
                } else {
                    label.textContent = `${selected.length} services selected`;
                }

                if (countEl) {
                    countEl.textContent = `${selected.length} selected`;
                }
            };

            const openPanel = () => {
                closeAllPanels();
                panel.classList.remove('hidden');
                trigger.setAttribute('aria-expanded', 'true');
                if (chevron) chevron.classList.add('rotate-180');
            };

            const closePanel = () => {
                panel.classList.add('hidden');
                trigger.setAttribute('aria-expanded', 'false');
                if (chevron) chevron.classList.remove('rotate-180');
            };

            trigger.addEventListener('click', (e) => {
                e.preventDefault();
                const isHidden = panel.classList.contains('hidden');
                if (isHidden) {
                    openPanel();
                } else {
                    closePanel();
                }
            });

            document.addEventListener('click', (event) => {
                if (!component.contains(event.target)) {
                    closePanel();
                }
            });

            checkboxes.forEach(cb => {
                cb.addEventListener('change', updateLabel);
            });

            if (clearBtn) {
                clearBtn.addEventListener('click', () => {
                    checkboxes.forEach(cb => (cb.checked = false));
                    updateLabel();
                });
            }

            updateLabel();
        });
    }

    initServiceMultiSelect();

    // Mobile menu toggle functionality
    function toggleMobileMenu() {
        const overlay = document.getElementById('mobile-menu-overlay');
        const panel = document.getElementById('mobile-menu-panel');
        const menuButton = document.querySelector('[onclick="toggleMobileMenu()"]');
        
        if (overlay && panel) {
            const isHidden = overlay.classList.contains('hidden');
            
            if (isHidden) {
                // Show menu
                overlay.classList.remove('hidden');
                document.body.style.overflow = 'hidden';
                
                // Trigger slide-in animation
                setTimeout(() => {
                    panel.classList.remove('-translate-x-full');
                    
                    // Debug: Check if buttons are visible
                    const actionButtons = panel.querySelectorAll('a[href*="get-proposal"], a[href*="book-an-expert"]');
                    console.log('Action buttons found:', actionButtons.length);
                    actionButtons.forEach((btn, index) => {
                        console.log(`Button ${index + 1}:`, btn.textContent.trim(), 'Visible:', btn.offsetHeight > 0);
                    });
                }, 10);
                
                // Update hamburger icon to X
                if (menuButton) {
                    const svg = menuButton.querySelector('svg');
                    if (svg) {
                        svg.innerHTML = '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>';
                    }
                }
            } else {
                // Hide menu
                panel.classList.add('-translate-x-full');
                
                setTimeout(() => {
                    overlay.classList.add('hidden');
                    document.body.style.overflow = '';
                }, 300);
                
                // Reset hamburger icon
                if (menuButton) {
                    const svg = menuButton.querySelector('svg');
                    if (svg) {
                        svg.innerHTML = '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>';
                    }
                }
            }
        }
    }
    
    // Show mobile submenu
    function showMobileSubmenu(submenuName) {
        const mainOverlay = document.getElementById('mobile-menu-overlay');
        const submenuOverlay = document.getElementById('mobile-submenu-overlay');
        const submenuPanel = document.getElementById('mobile-submenu-panel');
        const submenuTitle = document.getElementById('mobile-submenu-title');
        const submenuContent = document.getElementById('mobile-submenu-content');
        
        if (mainOverlay && submenuOverlay && submenuPanel && submenuTitle && submenuContent) {
            // Hide main menu
            const mainPanel = document.getElementById('mobile-menu-panel');
            mainPanel.classList.add('-translate-x-full');
            
            setTimeout(() => {
                mainOverlay.classList.add('hidden');
                
                // Show submenu
                submenuOverlay.classList.remove('hidden');
                
                // Update title
                const titles = {
                    'build': 'Build',
                    'grow': 'Grow',
                    'scale': 'Scale',
                    'resources': 'Resources',
                    'work-with-us': 'Work With Us',
                    'partner': 'Partner'
                };
                submenuTitle.textContent = titles[submenuName] || 'Menu';
                
                // Load submenu content
                loadSubmenuContent(submenuName, submenuContent);
                
                // Trigger slide-in animation
                setTimeout(() => {
                    submenuPanel.classList.remove('-translate-x-full');
                }, 10);
            }, 300);
        }
    }
    
    // Load submenu content
    function loadSubmenuContent(submenuName, container) {
        const content = {
            'build': `
                <div class="space-y-3">
                    <a href="/?page=website-that-work" class="mobile-service-card bg-gray-50 rounded-lg p-3 hover:shadow-lg transition-all duration-300 cursor-pointer group block">
                        <div class="flex items-center mb-2">
                            <div class="w-10 h-10 bg-blue-100 rounded-lg flex items-center justify-center mr-3">
                                <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9v-9m0-9v9"></path>
                                </svg>
                            </div>
                            <div class="flex-1">
                                <h3 class="font-bold text-gray-900 text-sm">Websites That Work</h3>
                                <p class="text-gray-600 text-xs">Responsive & Custom Development</p>
                            </div>
                            <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                            </svg>
                        </div>
                        <p class="text-gray-700 text-xs leading-relaxed">Build web apps that are fast, responsive, and user-friendly with modern design patterns and optimized performance.</p>
                    </a>
                    
                    <a href="/?page=web-app-development" class="mobile-service-card bg-gray-50 rounded-lg p-3 hover:shadow-lg transition-all duration-300 cursor-pointer group block">
                        <div class="flex items-center mb-2">
                            <div class="w-10 h-10 bg-blue-100 rounded-lg flex items-center justify-center mr-3">
                                <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                </svg>
                            </div>
                            <div class="flex-1">
                                <h3 class="font-bold text-gray-900 text-sm">Web App Development</h3>
                                <p class="text-gray-600 text-xs">Scalable web apps and intuitive UX</p>
                            </div>
                            <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                            </svg>
                        </div>
                        <p class="text-gray-700 text-xs leading-relaxed">From prototypes to production-ready apps designed for scale with secure architecture.</p>
                    </a>
                    
                    <a href="/?page=ui-ux" class="mobile-service-card bg-gray-50 rounded-lg p-3 hover:shadow-lg transition-all duration-300 cursor-pointer group block">
                        <div class="flex items-center mb-2">
                            <div class="w-10 h-10 bg-blue-100 rounded-lg flex items-center justify-center mr-3">
                                <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"></path>
                                </svg>
                            </div>
                            <div class="flex-1">
                                <h3 class="font-bold text-gray-900 text-sm">UI/UX Design</h3>
                                <p class="text-gray-600 text-xs">Designs that delight and engage</p>
                            </div>
                            <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                            </svg>
                        </div>
                        <p class="text-gray-700 text-xs leading-relaxed">Modern interfaces and visuals that make interactions intuitive with user-centered design.</p>
                    </a>
                    
                    <a href="/?page=mobile-experiences" class="mobile-service-card bg-gray-50 rounded-lg p-3 hover:shadow-lg transition-all duration-300 cursor-pointer group block">
                        <div class="flex items-center mb-2">
                            <div class="w-10 h-10 bg-blue-100 rounded-lg flex items-center justify-center mr-3">
                                <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z"></path>
                                </svg>
                            </div>
                            <div class="flex-1">
                                <h3 class="font-bold text-gray-900 text-sm">Mobile Experiences</h3>
                                <p class="text-gray-600 text-xs">Mobile App Development & UI/UX</p>
                            </div>
                            <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                            </svg>
                        </div>
                        <p class="text-gray-700 text-xs leading-relaxed">iOS and Android apps crafted to engage users with native performance and beautiful interfaces.</p>
                    </a>
                </div>
            `,
            'grow': `
                <div class="space-y-3">
                    <a href="/?page=digital-marketing" class="mobile-service-card bg-gray-50 rounded-lg p-3 hover:shadow-lg transition-all duration-300 cursor-pointer group block">
                        <div class="flex items-center mb-2">
                            <div class="w-10 h-10 bg-green-100 rounded-lg flex items-center justify-center mr-3">
                                <svg class="w-5 h-5 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path>
                                </svg>
                            </div>
                            <div class="flex-1">
                                <h3 class="font-bold text-gray-900 text-sm">Digital Marketing</h3>
                                <p class="text-gray-600 text-xs">Marketing strategies that fuel visibility</p>
                            </div>
                            <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                            </svg>
                        </div>
                        <p class="text-gray-700 text-xs leading-relaxed">Comprehensive digital marketing strategies that drive traffic, engagement, and conversions across all platforms.</p>
                    </a>
                    
                    <a href="/?page=seo-ai-seo" class="mobile-service-card bg-gray-50 rounded-lg p-3 hover:shadow-lg transition-all duration-300 cursor-pointer group block">
                        <div class="flex items-center mb-2">
                            <div class="w-10 h-10 bg-green-100 rounded-lg flex items-center justify-center mr-3">
                                <svg class="w-5 h-5 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                                </svg>
                            </div>
                            <div class="flex-1">
                                <h3 class="font-bold text-gray-900 text-sm">SEO & AI SEO</h3>
                                <p class="text-gray-600 text-xs">Search engine optimization with AI</p>
                            </div>
                            <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                            </svg>
                        </div>
                        <p class="text-gray-700 text-xs leading-relaxed">Advanced SEO strategies powered by AI to improve search rankings and organic traffic growth.</p>
                    </a>
                    
                    <a href="/?page=social-media-ads" class="mobile-service-card bg-gray-50 rounded-lg p-3 hover:shadow-lg transition-all duration-300 cursor-pointer group block">
                        <div class="flex items-center mb-2">
                            <div class="w-10 h-10 bg-green-100 rounded-lg flex items-center justify-center mr-3">
                                <svg class="w-5 h-5 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 4V2a1 1 0 011-1h8a1 1 0 011 1v2m-9 0h10m-10 0a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V6a2 2 0 00-2-2"></path>
                                </svg>
                            </div>
                            <div class="flex-1">
                                <h3 class="font-bold text-gray-900 text-sm">Social Media Ads</h3>
                                <p class="text-gray-600 text-xs">Targeted social media advertising</p>
                            </div>
                            <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                            </svg>
                        </div>
                        <p class="text-gray-700 text-xs leading-relaxed">Strategic social media advertising campaigns that reach your target audience and drive meaningful engagement.</p>
                    </a>
                </div>
            `,
            'scale': `
                <div class="space-y-3">
                    <a href="/?page=custom-software-development" class="mobile-service-card bg-gray-50 rounded-lg p-3 hover:shadow-lg transition-all duration-300 cursor-pointer group block">
                        <div class="flex items-center mb-2">
                            <div class="w-10 h-10 bg-purple-100 rounded-lg flex items-center justify-center mr-3">
                                <svg class="w-5 h-5 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"></path>
                                </svg>
                            </div>
                            <div class="flex-1">
                                <h3 class="font-bold text-gray-900 text-sm">Custom Software</h3>
                                <p class="text-gray-600 text-xs">Tailored software solutions</p>
                            </div>
                            <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                            </svg>
                        </div>
                        <p class="text-gray-700 text-xs leading-relaxed">Custom software solutions designed specifically for your business needs and growth requirements.</p>
                    </a>
                    
                    <a href="/?page=it-staff" class="mobile-service-card bg-gray-50 rounded-lg p-3 hover:shadow-lg transition-all duration-300 cursor-pointer group block">
                        <div class="flex items-center mb-2">
                            <div class="w-10 h-10 bg-purple-100 rounded-lg flex items-center justify-center mr-3">
                                <svg class="w-5 h-5 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                                </svg>
                            </div>
                            <div class="flex-1">
                                <h3 class="font-bold text-gray-900 text-sm">IT Staff Augmentation</h3>
                                <p class="text-gray-600 text-xs">Expert IT professionals on demand</p>
                            </div>
                            <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                            </svg>
                        </div>
                        <p class="text-gray-700 text-xs leading-relaxed">Scale your development team with skilled IT professionals who integrate seamlessly with your existing workflow.</p>
                    </a>
                    
                    <a href="/?page=custom-ai-solution" class="mobile-service-card bg-gray-50 rounded-lg p-3 hover:shadow-lg transition-all duration-300 cursor-pointer group block">
                        <div class="flex items-center mb-2">
                            <div class="w-10 h-10 bg-purple-100 rounded-lg flex items-center justify-center mr-3">
                                <svg class="w-5 h-5 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"></path>
                                </svg>
                            </div>
                            <div class="flex-1">
                                <h3 class="font-bold text-gray-900 text-sm">AI Solutions</h3>
                                <p class="text-gray-600 text-xs">Intelligent automation and AI integration</p>
                            </div>
                            <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                            </svg>
                        </div>
                        <p class="text-gray-700 text-xs leading-relaxed">Leverage artificial intelligence to automate processes, improve efficiency, and gain competitive advantages.</p>
                    </a>
                </div>
            `,
            'resources': `
                <div class="space-y-3">
                    <a href="/?page=blog" class="mobile-service-card bg-gray-50 rounded-lg p-3 hover:shadow-lg transition-all duration-300 cursor-pointer group block">
                        <div class="flex items-center mb-2">
                            <div class="w-10 h-10 bg-orange-100 rounded-lg flex items-center justify-center mr-3">
                                <svg class="w-5 h-5 text-orange-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9.5a2.5 2.5 0 00-2.5-2.5h-2.5"></path>
                                </svg>
                            </div>
                            <div class="flex-1">
                                <h3 class="font-bold text-gray-900 text-sm">Blog</h3>
                                <p class="text-gray-600 text-xs">Latest insights and updates</p>
                            </div>
                            <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                            </svg>
                        </div>
                        <p class="text-gray-700 text-xs leading-relaxed">Stay updated with our latest insights, tutorials, and industry trends.</p>
                    </a>
                    
                    <a href="/?page=blogs-web-design-full" class="mobile-service-card bg-gray-50 rounded-lg p-3 hover:shadow-lg transition-all duration-300 cursor-pointer group block">
                        <div class="flex items-center mb-2">
                            <div class="w-10 h-10 bg-orange-100 rounded-lg flex items-center justify-center mr-3">
                                <svg class="w-5 h-5 text-orange-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zM21 5a2 2 0 00-2-2h-4a2 2 0 00-2 2v12a4 4 0 004 4h4a2 2 0 002-2V5z"></path>
                                </svg>
                            </div>
                            <div class="flex-1">
                                <h3 class="font-bold text-gray-900 text-sm">Web Design Blog</h3>
                                <p class="text-gray-600 text-xs">Design trends and best practices</p>
                            </div>
                            <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                            </svg>
                        </div>
                        <p class="text-gray-700 text-xs leading-relaxed">Explore the latest web design trends, techniques, and best practices.</p>
                    </a>
                    
                    <a href="/?page=blogs-mobile-app" class="mobile-service-card bg-gray-50 rounded-lg p-3 hover:shadow-lg transition-all duration-300 cursor-pointer group block">
                        <div class="flex items-center mb-2">
                            <div class="w-10 h-10 bg-orange-100 rounded-lg flex items-center justify-center mr-3">
                                <svg class="w-5 h-5 text-orange-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z"></path>
                                </svg>
                            </div>
                            <div class="flex-1">
                                <h3 class="font-bold text-gray-900 text-sm">Mobile App Blog</h3>
                                <p class="text-gray-600 text-xs">Mobile development insights</p>
                            </div>
                            <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                            </svg>
                        </div>
                        <p class="text-gray-700 text-xs leading-relaxed">Learn about mobile app development, user experience, and platform-specific strategies.</p>
                    </a>
                    
                    <a href="/?page=blogs-ai-automation" class="mobile-service-card bg-gray-50 rounded-lg p-3 hover:shadow-lg transition-all duration-300 cursor-pointer group block">
                        <div class="flex items-center mb-2">
                            <div class="w-10 h-10 bg-orange-100 rounded-lg flex items-center justify-center mr-3">
                                <svg class="w-5 h-5 text-orange-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"></path>
                                </svg>
                            </div>
                            <div class="flex-1">
                                <h3 class="font-bold text-gray-900 text-sm">AI & Automation</h3>
                                <p class="text-gray-600 text-xs">Artificial intelligence insights</p>
                            </div>
                            <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                            </svg>
                        </div>
                        <p class="text-gray-700 text-xs leading-relaxed">Discover how AI and automation are transforming businesses and industries.</p>
                    </a>
                    
                    <a href="/?page=blogs-custom-software" class="mobile-service-card bg-gray-50 rounded-lg p-3 hover:shadow-lg transition-all duration-300 cursor-pointer group block">
                        <div class="flex items-center mb-2">
                            <div class="w-10 h-10 bg-orange-100 rounded-lg flex items-center justify-center mr-3">
                                <svg class="w-5 h-5 text-orange-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"></path>
                                </svg>
                            </div>
                            <div class="flex-1">
                                <h3 class="font-bold text-gray-900 text-sm">Custom Software</h3>
                                <p class="text-gray-600 text-xs">Software development insights</p>
                            </div>
                            <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                            </svg>
                        </div>
                        <p class="text-gray-700 text-xs leading-relaxed">Learn about custom software development, architecture, and implementation strategies.</p>
                    </a>
                    
                    <a href="/?page=blogs-business-growth" class="mobile-service-card bg-gray-50 rounded-lg p-3 hover:shadow-lg transition-all duration-300 cursor-pointer group block">
                        <div class="flex items-center mb-2">
                            <div class="w-10 h-10 bg-orange-100 rounded-lg flex items-center justify-center mr-3">
                                <svg class="w-5 h-5 text-orange-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path>
                                </svg>
                            </div>
                            <div class="flex-1">
                                <h3 class="font-bold text-gray-900 text-sm">Business Growth</h3>
                                <p class="text-gray-600 text-xs">Growth strategies and tips</p>
                            </div>
                            <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                            </svg>
                        </div>
                        <p class="text-gray-700 text-xs leading-relaxed">Discover proven strategies for scaling your business and achieving sustainable growth.</p>
                    </a>
                    
                    <a href="/?page=blogs-custom-marketing" class="mobile-service-card bg-gray-50 rounded-lg p-3 hover:shadow-lg transition-all duration-300 cursor-pointer group block">
                        <div class="flex items-center mb-2">
                            <div class="w-10 h-10 bg-orange-100 rounded-lg flex items-center justify-center mr-3">
                                <svg class="w-5 h-5 text-orange-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5.882V19.24a1.76 1.76 0 01-3.417.592l-2.147-6.15M18 13a3 3 0 100-6M5.436 13.683A4.001 4.001 0 017 6h1.832c4.1 0 7.625-1.234 9.168-3v14c-1.543-1.766-5.067-3-9.168-3H7a3.988 3.988 0 01-1.564-.317z"></path>
                                </svg>
                            </div>
                            <div class="flex-1">
                                <h3 class="font-bold text-gray-900 text-sm">Custom Marketing</h3>
                                <p class="text-gray-600 text-xs">Marketing strategies and insights</p>
                            </div>
                            <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                            </svg>
                        </div>
                        <p class="text-gray-700 text-xs leading-relaxed">Explore custom marketing strategies tailored to your business needs and target audience.</p>
                    </a>
                    
                    <a href="/?page=blogs-social-marketing" class="mobile-service-card bg-gray-50 rounded-lg p-3 hover:shadow-lg transition-all duration-300 cursor-pointer group block">
                        <div class="flex items-center mb-2">
                            <div class="w-10 h-10 bg-orange-100 rounded-lg flex items-center justify-center mr-3">
                                <svg class="w-5 h-5 text-orange-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8h2a2 2 0 012 2v6a2 2 0 01-2 2h-2v4l-4-4H9a1.994 1.994 0 01-2-2V10a2 2 0 012-2h2m2-4h6a2 2 0 012 2v6a2 2 0 01-2 2h-6l-4 4V8a2 2 0 012-2z"></path>
                                </svg>
                            </div>
                            <div class="flex-1">
                                <h3 class="font-bold text-gray-900 text-sm">Social Marketing</h3>
                                <p class="text-gray-600 text-xs">Social media marketing tips</p>
                            </div>
                            <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                            </svg>
                        </div>
                        <p class="text-gray-700 text-xs leading-relaxed">Master social media marketing with proven strategies for engagement and growth.</p>
                    </a>
                    
                    <a href="/?page=blogs-it-staff" class="mobile-service-card bg-gray-50 rounded-lg p-3 hover:shadow-lg transition-all duration-300 cursor-pointer group block">
                        <div class="flex items-center mb-2">
                            <div class="w-10 h-10 bg-orange-100 rounded-lg flex items-center justify-center mr-3">
                                <svg class="w-5 h-5 text-orange-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                                </svg>
                            </div>
                            <div class="flex-1">
                                <h3 class="font-bold text-gray-900 text-sm">IT Staff</h3>
                                <p class="text-gray-600 text-xs">IT staffing and management</p>
                            </div>
                            <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                            </svg>
                        </div>
                        <p class="text-gray-700 text-xs leading-relaxed">Learn about IT staffing solutions, team management, and technical expertise.</p>
                    </a>
                </div>
            `,
            'work-with-us': `
                <div class="space-y-3">
                    <a href="/?page=about" class="mobile-service-card bg-gray-50 rounded-lg p-3 hover:shadow-lg transition-all duration-300 cursor-pointer group block">
                        <div class="flex items-center mb-2">
                            <div class="w-10 h-10 bg-indigo-100 rounded-lg flex items-center justify-center mr-3">
                                <svg class="w-5 h-5 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                            </div>
                            <div class="flex-1">
                                <h3 class="font-bold text-gray-900 text-sm">About Us</h3>
                                <p class="text-gray-600 text-xs">Learn about our company</p>
                            </div>
                            <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                            </svg>
                        </div>
                        <p class="text-gray-700 text-xs leading-relaxed">Discover our story, mission, and the team behind AiBit Sol.</p>
                    </a>
                    
                    <a href="/?page=contact" class="mobile-service-card bg-gray-50 rounded-lg p-3 hover:shadow-lg transition-all duration-300 cursor-pointer group block">
                        <div class="flex items-center mb-2">
                            <div class="w-10 h-10 bg-indigo-100 rounded-lg flex items-center justify-center mr-3">
                                <svg class="w-5 h-5 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                </svg>
                            </div>
                            <div class="flex-1">
                                <h3 class="font-bold text-gray-900 text-sm">Contact</h3>
                                <p class="text-gray-600 text-xs">Get in touch with us</p>
                            </div>
                            <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                            </svg>
                        </div>
                        <p class="text-gray-700 text-xs leading-relaxed">Reach out to us for inquiries, support, or to start your project.</p>
                    </a>
                    
                    <a href="/?page=careers" class="mobile-service-card bg-gray-50 rounded-lg p-3 hover:shadow-lg transition-all duration-300 cursor-pointer group block">
                        <div class="flex items-center mb-2">
                            <div class="w-10 h-10 bg-indigo-100 rounded-lg flex items-center justify-center mr-3">
                                <svg class="w-5 h-5 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                                </svg>
                            </div>
                            <div class="flex-1">
                                <h3 class="font-bold text-gray-900 text-sm">Careers</h3>
                                <p class="text-gray-600 text-xs">Join our team</p>
                            </div>
                            <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                            </svg>
                        </div>
                        <p class="text-gray-700 text-xs leading-relaxed">Explore career opportunities and join our growing team of experts.</p>
                    </a>
                    
                    <a href="/?page=book-an-expert" class="mobile-service-card bg-gray-50 rounded-lg p-3 hover:shadow-lg transition-all duration-300 cursor-pointer group block">
                        <div class="flex items-center mb-2">
                            <div class="w-10 h-10 bg-indigo-100 rounded-lg flex items-center justify-center mr-3">
                                <svg class="w-5 h-5 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                </svg>
                            </div>
                            <div class="flex-1">
                                <h3 class="font-bold text-gray-900 text-sm">Book Expert</h3>
                                <p class="text-gray-600 text-xs">Schedule consultation</p>
                            </div>
                            <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                            </svg>
                        </div>
                        <p class="text-gray-700 text-xs leading-relaxed">Schedule a consultation with our experts to discuss your project needs.</p>
                    </a>
                    
                    <a href="/?page=get-proposal" class="mobile-service-card bg-gray-50 rounded-lg p-3 hover:shadow-lg transition-all duration-300 cursor-pointer group block">
                        <div class="flex items-center mb-2">
                            <div class="w-10 h-10 bg-indigo-100 rounded-lg flex items-center justify-center mr-3">
                                <svg class="w-5 h-5 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                                </svg>
                            </div>
                            <div class="flex-1">
                                <h3 class="font-bold text-gray-900 text-sm">Get Proposal</h3>
                                <p class="text-gray-600 text-xs">Request project quote</p>
                            </div>
                            <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                            </svg>
                        </div>
                        <p class="text-gray-700 text-xs leading-relaxed">Get a detailed proposal and quote for your project requirements.</p>
                    </a>
                    
                    <a href="/?page=affiliate-partner#custom-partnership" class="mobile-service-card bg-gray-50 rounded-lg p-3 hover:shadow-lg transition-all duration-300 cursor-pointer group block">
                        <div class="flex items-center mb-2">
                            <div class="w-10 h-10 bg-indigo-100 rounded-lg flex items-center justify-center mr-3">
                                <svg class="w-5 h-5 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                                </svg>
                            </div>
                            <div class="flex-1">
                                <h3 class="font-bold text-gray-900 text-sm">Custom Partnership</h3>
                                <p class="text-gray-600 text-xs">Tailored collaboration</p>
                            </div>
                            <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                            </svg>
                        </div>
                        <p class="text-gray-700 text-xs leading-relaxed">Explore custom partnership opportunities tailored to your business needs.</p>
                    </a>
                    
                    <a href="/?page=custom-branding-marketing-kit" class="mobile-service-card bg-gray-50 rounded-lg p-3 hover:shadow-lg transition-all duration-300 cursor-pointer group block">
                        <div class="flex items-center mb-2">
                            <div class="w-10 h-10 bg-indigo-100 rounded-lg flex items-center justify-center mr-3">
                                <svg class="w-5 h-5 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zM21 5a2 2 0 00-2-2h-4a2 2 0 00-2 2v12a4 4 0 004 4h4a2 2 0 002-2V5z"></path>
                                </svg>
                            </div>
                            <div class="flex-1">
                                <h3 class="font-bold text-gray-900 text-sm">Branding Kit</h3>
                                <p class="text-gray-600 text-xs">Custom brand solutions</p>
                            </div>
                            <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                            </svg>
                        </div>
                        <p class="text-gray-700 text-xs leading-relaxed">Get custom branding and marketing solutions designed for your business.</p>
                    </a>
                    
                    <a href="/?page=custom-ai-solution" class="mobile-service-card bg-gray-50 rounded-lg p-3 hover:shadow-lg transition-all duration-300 cursor-pointer group block">
                        <div class="flex items-center mb-2">
                            <div class="w-10 h-10 bg-indigo-100 rounded-lg flex items-center justify-center mr-3">
                                <svg class="w-5 h-5 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"></path>
                                </svg>
                            </div>
                            <div class="flex-1">
                                <h3 class="font-bold text-gray-900 text-sm">AI Solutions</h3>
                                <p class="text-gray-600 text-xs">Custom AI development</p>
                            </div>
                            <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                            </svg>
                        </div>
                        <p class="text-gray-700 text-xs leading-relaxed">Develop custom AI solutions tailored to your specific business requirements.</p>
                    </a>
                </div>
            `,
            'partner': `
                <div class="space-y-3">
                    <a href="/?page=partners" class="mobile-service-card bg-gray-50 rounded-lg p-3 hover:shadow-lg transition-all duration-300 cursor-pointer group block">
                        <div class="flex items-center mb-2">
                            <div class="w-10 h-10 bg-teal-100 rounded-lg flex items-center justify-center mr-3">
                                <svg class="w-5 h-5 text-teal-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                                </svg>
                            </div>
                            <div class="flex-1">
                                <h3 class="font-bold text-gray-900 text-sm">Partners</h3>
                                <p class="text-gray-600 text-xs">Our trusted partners</p>
                            </div>
                            <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                            </svg>
                        </div>
                        <p class="text-gray-700 text-xs leading-relaxed">Meet our trusted partners who help us deliver exceptional solutions.</p>
                    </a>
                    
                    <a href="/?page=partner-program" class="mobile-service-card bg-gray-50 rounded-lg p-3 hover:shadow-lg transition-all duration-300 cursor-pointer group block">
                        <div class="flex items-center mb-2">
                            <div class="w-10 h-10 bg-teal-100 rounded-lg flex items-center justify-center mr-3">
                                <svg class="w-5 h-5 text-teal-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"></path>
                                </svg>
                            </div>
                            <div class="flex-1">
                                <h3 class="font-bold text-gray-900 text-sm">Partner Program</h3>
                                <p class="text-gray-600 text-xs">Join our partner network</p>
                            </div>
                            <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                            </svg>
                        </div>
                        <p class="text-gray-700 text-xs leading-relaxed">Become a partner and grow your business with our comprehensive program.</p>
                    </a>
                    
                    <a href="/?page=affiliate-partner" class="mobile-service-card bg-gray-50 rounded-lg p-3 hover:shadow-lg transition-all duration-300 cursor-pointer group block">
                        <div class="flex items-center mb-2">
                            <div class="w-10 h-10 bg-teal-100 rounded-lg flex items-center justify-center mr-3">
                                <svg class="w-5 h-5 text-teal-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path>
                                </svg>
                            </div>
                            <div class="flex-1">
                                <h3 class="font-bold text-gray-900 text-sm">Affiliate Program</h3>
                                <p class="text-gray-600 text-xs">Earn with referrals</p>
                            </div>
                            <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                            </svg>
                        </div>
                        <p class="text-gray-700 text-xs leading-relaxed">Earn commissions by referring clients to our services and solutions.</p>
                    </a>
                    
                    <a href="/?page=affiliate-partner#agency-partner" class="mobile-service-card bg-gray-50 rounded-lg p-3 hover:shadow-lg transition-all duration-300 cursor-pointer group block">
                        <div class="flex items-center mb-2">
                            <div class="w-10 h-10 bg-teal-100 rounded-lg flex items-center justify-center mr-3">
                                <svg class="w-5 h-5 text-teal-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                                </svg>
                            </div>
                            <div class="flex-1">
                                <h3 class="font-bold text-gray-900 text-sm">Agency Partner</h3>
                                <p class="text-gray-600 text-xs">Agency collaboration</p>
                            </div>
                            <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                            </svg>
                        </div>
                        <p class="text-gray-700 text-xs leading-relaxed">Partner with us as an agency to expand your service offerings.</p>
                    </a>
                    
                    <a href="/?page=affiliate-partner#reseller-partner" class="mobile-service-card bg-gray-50 rounded-lg p-3 hover:shadow-lg transition-all duration-300 cursor-pointer group block">
                        <div class="flex items-center mb-2">
                            <div class="w-10 h-10 bg-teal-100 rounded-lg flex items-center justify-center mr-3">
                                <svg class="w-5 h-5 text-teal-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"></path>
                                </svg>
                            </div>
                            <div class="flex-1">
                                <h3 class="font-bold text-gray-900 text-sm">Reseller Partner</h3>
                                <p class="text-gray-600 text-xs">Resell our services</p>
                            </div>
                            <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                            </svg>
                        </div>
                        <p class="text-gray-700 text-xs leading-relaxed">Resell our services and solutions to your clients with attractive margins.</p>
                    </a>
                    
                    <a href="/?page=affiliate-partner#technology-partner" class="mobile-service-card bg-gray-50 rounded-lg p-3 hover:shadow-lg transition-all duration-300 cursor-pointer group block">
                        <div class="flex items-center mb-2">
                            <div class="w-10 h-10 bg-teal-100 rounded-lg flex items-center justify-center mr-3">
                                <svg class="w-5 h-5 text-teal-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m18-6h-2m2 6h-2M7 19h10a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2zM9 9h6v6H9V9z"></path>
                                </svg>
                            </div>
                            <div class="flex-1">
                                <h3 class="font-bold text-gray-900 text-sm">Technology Partner</h3>
                                <p class="text-gray-600 text-xs">Tech integration</p>
                            </div>
                            <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                            </svg>
                        </div>
                        <p class="text-gray-700 text-xs leading-relaxed">Integrate your technology solutions with our platform and services.</p>
                    </a>
                    
                    <a href="/?page=affiliate-partner" class="mobile-service-card bg-gray-50 rounded-lg p-3 hover:shadow-lg transition-all duration-300 cursor-pointer group block">
                        <div class="flex items-center mb-2">
                            <div class="w-10 h-10 bg-teal-100 rounded-lg flex items-center justify-center mr-3">
                                <svg class="w-5 h-5 text-teal-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                                </svg>
                            </div>
                            <div class="flex-1">
                                <h3 class="font-bold text-gray-900 text-sm">Enterprise Partner</h3>
                                <p class="text-gray-600 text-xs">Large-scale collaboration</p>
                            </div>
                            <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                            </svg>
                        </div>
                        <p class="text-gray-700 text-xs leading-relaxed">Partner with us for enterprise-level solutions and large-scale projects.</p>
                    </a>
                    
                    <a href="/?page=affiliate-partner" class="mobile-service-card bg-gray-50 rounded-lg p-3 hover:shadow-lg transition-all duration-300 cursor-pointer group block">
                        <div class="flex items-center mb-2">
                            <div class="w-10 h-10 bg-teal-100 rounded-lg flex items-center justify-center mr-3">
                                <svg class="w-5 h-5 text-teal-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1"></path>
                                </svg>
                            </div>
                            <div class="flex-1">
                                <h3 class="font-bold text-gray-900 text-sm">Affiliate Partner</h3>
                                <p class="text-gray-600 text-xs">Revenue sharing</p>
                            </div>
                            <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                            </svg>
                        </div>
                        <p class="text-gray-700 text-xs leading-relaxed">Join our affiliate program and earn revenue through successful referrals.</p>
                    </a>
                </div>
            `
        };
        
        container.innerHTML = content[submenuName] || '';
    }
    
    // Go back to main menu
    function goBackMobileMenu() {
        const mainOverlay = document.getElementById('mobile-menu-overlay');
        const submenuOverlay = document.getElementById('mobile-submenu-overlay');
        const submenuPanel = document.getElementById('mobile-submenu-panel');
        const mainPanel = document.getElementById('mobile-menu-panel');
        
        if (submenuOverlay && mainOverlay && submenuPanel && mainPanel) {
            // Hide submenu
            submenuPanel.classList.add('-translate-x-full');
            
            setTimeout(() => {
                submenuOverlay.classList.add('hidden');
                
                // Show main menu
                mainOverlay.classList.remove('hidden');
                
                setTimeout(() => {
                    mainPanel.classList.remove('-translate-x-full');
                }, 10);
            }, 300);
        }
    }
    
    // Close mobile menu on window resize to desktop size
    window.addEventListener('resize', function() {
        const mainOverlay = document.getElementById('mobile-menu-overlay');
        const submenuOverlay = document.getElementById('mobile-submenu-overlay');
        
        if (window.innerWidth >= 1024) {
            if (mainOverlay && !mainOverlay.classList.contains('hidden')) {
                const mainPanel = document.getElementById('mobile-menu-panel');
                mainPanel.classList.add('-translate-x-full');
                
                setTimeout(() => {
                    mainOverlay.classList.add('hidden');
                    document.body.style.overflow = '';
                }, 300);
            }
            
            if (submenuOverlay && !submenuOverlay.classList.contains('hidden')) {
                const submenuPanel = document.getElementById('mobile-submenu-panel');
                submenuPanel.classList.add('-translate-x-full');
                
                setTimeout(() => {
                    submenuOverlay.classList.add('hidden');
                    document.body.style.overflow = '';
                }, 300);
            }
        }
    });
    
    // Close mobile menu when submenu links are clicked
    document.addEventListener('click', function(event) {
        // Check if clicked element is a submenu link
        if (event.target.closest('a[href*="page="]')) {
            const link = event.target.closest('a[href*="page="]');
            const href = link.getAttribute('href');
            
            console.log('Submenu link clicked:', href);
            
            // Close mobile menu for submenu links
            const overlay = document.getElementById('mobile-menu-overlay');
            const submenuOverlay = document.getElementById('mobile-submenu-overlay');
            const panel = document.getElementById('mobile-menu-panel');
            const submenuPanel = document.getElementById('mobile-submenu-panel');
            const menuButton = document.querySelector('[onclick="toggleMobileMenu()"]');
            
            if (submenuOverlay && submenuPanel) {
                submenuPanel.classList.add('-translate-x-full');
                
                setTimeout(() => {
                    submenuOverlay.classList.add('hidden');
                    if (overlay) overlay.classList.add('hidden');
                    document.body.style.overflow = '';
                }, 300);
                
                // Reset hamburger icon
                if (menuButton) {
                    const svg = menuButton.querySelector('svg');
                    if (svg) {
                        svg.innerHTML = '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>';
                    }
                }
            }
        }
    });
    
    // Mobile Sidebar Toggle Functionality
    function toggleMobileSidebar() {
        const sidebar = document.getElementById('mobile-sidebar');
        const overlay = document.getElementById('mobile-sidebar-overlay');
        const toggleIcon = document.getElementById('toggle-icon');
        const toggleButton = document.querySelector('#mobile-toggle-button button');
        
        if (sidebar && overlay && toggleIcon) {
            const isOpen = sidebar.classList.contains('open');
            
            if (isOpen) {
                // Close sidebar
                sidebar.classList.remove('open');
                overlay.classList.remove('show');
                overlay.classList.add('hidden');
                document.body.style.overflow = '';
                
                // Reset icon
                toggleIcon.innerHTML = '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>';
                
                // Reset button state
                if (toggleButton) {
                    toggleButton.style.transform = 'scale(1)';
                }
            } else {
                // Open sidebar
                sidebar.classList.add('open');
                overlay.classList.remove('hidden');
                overlay.classList.add('show');
                document.body.style.overflow = 'hidden';
                
                // Change icon to X
                toggleIcon.innerHTML = '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>';
                
                // Animate button
                if (toggleButton) {
                    toggleButton.style.transform = 'scale(1.1)';
                    setTimeout(() => {
                        toggleButton.style.transform = 'scale(1)';
                    }, 200);
                }
            }
        }
    }
    
    // Close sidebar when clicking on sidebar links
    function closeMobileSidebar() {
        const sidebar = document.getElementById('mobile-sidebar');
        const overlay = document.getElementById('mobile-sidebar-overlay');
        const toggleIcon = document.getElementById('toggle-icon');
        
        if (sidebar && overlay && toggleIcon) {
            sidebar.classList.remove('open');
            overlay.classList.remove('show');
            overlay.classList.add('hidden');
            document.body.style.overflow = '';
            
            // Reset icon
            toggleIcon.innerHTML = '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>';
        }
    }
    
    // Add click event listeners to sidebar links
    document.addEventListener('click', function(event) {
        // Check if clicked element is a sidebar link
        if (event.target.closest('#mobile-sidebar a[href*="page="]')) {
            closeMobileSidebar();
        }
    });
    
    // Close sidebar on window resize to desktop size
    window.addEventListener('resize', function() {
        if (window.innerWidth >= 768) { // md breakpoint
            closeMobileSidebar();
        }
    });
    
    // Add keyboard support for accessibility
    document.addEventListener('keydown', function(event) {
        if (event.key === 'Escape') {
            const sidebar = document.getElementById('mobile-sidebar');
            if (sidebar && sidebar.classList.contains('open')) {
                toggleMobileSidebar();
            }
        }
    });
    
    // Add touch gesture support for mobile
    let touchStartX = 0;
    let touchEndX = 0;
    
    document.addEventListener('touchstart', function(event) {
        touchStartX = event.changedTouches[0].screenX;
    });
    
    document.addEventListener('touchend', function(event) {
        touchEndX = event.changedTouches[0].screenX;
        handleSwipeGesture();
    });
    
    function handleSwipeGesture() {
        const swipeThreshold = 50;
        const swipeDistance = touchEndX - touchStartX;
        
        // Swipe left to close sidebar
        if (swipeDistance < -swipeThreshold) {
            const sidebar = document.getElementById('mobile-sidebar');
            if (sidebar && sidebar.classList.contains('open')) {
                toggleMobileSidebar();
            }
        }
        
        // Swipe right to open sidebar (only if sidebar is closed and swipe starts from edge)
        if (swipeDistance > swipeThreshold && touchStartX < 50) {
            const sidebar = document.getElementById('mobile-sidebar');
            if (sidebar && !sidebar.classList.contains('open')) {
                toggleMobileSidebar();
            }
        }
    }
    
    // Make functions globally available
    window.toggleMobileMenu = toggleMobileMenu;
    window.showMobileSubmenu = showMobileSubmenu;
    window.goBackMobileMenu = goBackMobileMenu;
    window.toggleMobileSidebar = toggleMobileSidebar;
    window.closeMobileSidebar = closeMobileSidebar;

	    // Blog Read More toggle (home page cards)
	    document.addEventListener('click', function(event) {
	        const toggleLink = event.target.closest('a[data-readmore="toggle"]');
	        if (!toggleLink) return;
	        event.preventDefault();
	        const cardBody = toggleLink.closest('.p-6');
	        const description = cardBody && cardBody.querySelector('.blog-description');
	        if (!description) return;
	        const willShow = description.classList.contains('hidden');
	        description.classList.toggle('hidden');
	        const svg = toggleLink.querySelector('svg');
	        const svgHtml = svg ? svg.outerHTML : '';
	        toggleLink.innerHTML = (willShow ? 'Show Less' : 'Read More') + svgHtml;
	    });

	    // Team tabs (Leadership/Core/Structure) - show one panel at a time
	    document.addEventListener('click', function(event) {
	        const tab = event.target.closest('[data-team-tab]');
	        if (!tab) return;
	        const selected = tab.getAttribute('data-team-tab');
	        const container = tab.closest('section');
	        if (!container) return;
	        // Toggle tab button styles
	        container.querySelectorAll('[data-team-tab]').forEach(btn => {
	            if (btn === tab) {
	                btn.classList.add('bg-blue-600','text-white');
	                btn.classList.remove('text-white/80');
	            } else {
	                btn.classList.remove('bg-blue-600');
	                btn.classList.add('text-white/80');
	            }
	        });
	        // Toggle panels
	        container.querySelectorAll('[data-team-panel]').forEach(panel => {
	            const isMatch = panel.getAttribute('data-team-panel') === selected;
	            panel.classList.toggle('hidden', !isMatch);
	        });
	    });

    // Accordion: FAQs (click to reveal)
    document.addEventListener('click', function(event) {
        const trigger = event.target.closest('[data-accordion-trigger]');
        if (!trigger) return;

        const item = trigger.closest('[role="listitem"]');
        const list = trigger.closest('[data-accordion]');
        const content = item && item.querySelector('[data-accordion-content]');
        const icon = trigger.querySelector('svg');

        if (!item || !list || !content) return;

        // Close others (single-open behavior)
        list.querySelectorAll('[role="listitem"]').forEach(other => {
            if (other !== item) {
                const otherTrigger = other.querySelector('[data-accordion-trigger]');
                const otherContent = other.querySelector('[data-accordion-content]');
                const otherIcon = otherTrigger && otherTrigger.querySelector('svg');
                if (otherTrigger && otherContent) {
                    otherTrigger.setAttribute('aria-expanded', 'false');
                    otherContent.classList.add('hidden');
                    if (otherIcon) {
                        otherIcon.innerHTML = '<path d="M12 5v14M5 12h14" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>';
                    }
                }
            }
        });

        // Toggle current
        const isExpanded = trigger.getAttribute('aria-expanded') === 'true';
        trigger.setAttribute('aria-expanded', String(!isExpanded));
        content.classList.toggle('hidden');
        if (icon) {
            icon.innerHTML = isExpanded
                ? '<path d="M12 5v14M5 12h14" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>' // plus
                : '<path d="M5 12h14" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>'; // minus
        }
    });
});

// Utility functions
function showNotification(message, type = 'info') {
    const notification = document.createElement('div');
    notification.className = `notification notification-${type}`;
    notification.textContent = message;
    notification.style.cssText = `
        position: fixed;
        top: 20px;
        right: 20px;
        padding: 15px 20px;
        background: ${type === 'success' ? '#10b981' : type === 'error' ? '#ef4444' : '#3b82f6'};
        color: white;
        border-radius: 5px;
        z-index: 10000;
        animation: slideIn 0.3s ease;
    `;
    
    document.body.appendChild(notification);
    
    setTimeout(() => {
        notification.remove();
    }, 3000);
}
