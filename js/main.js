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
    
    // Load submenu content:
    // - Keep the dedicated mobile layout (stacked cards)
    // - Pull titles / descriptions / links (and icons when possible)
    //   from the desktop dropdowns in header.php so content stays in sync
    function loadSubmenuContent(submenuName, container) {
        if (!container) return;

        const idMap = {
            'build': 'build-dropdown',
            'grow': 'grow-dropdown',
            'scale': 'scale-dropdown',
            'resources': 'resources-dropdown',
            'work-with-us': 'work-with-us-dropdown',
            'partner': 'partner-dropdown'
        };
        
        const dropdownId = idMap[submenuName];
        if (!dropdownId) {
            container.innerHTML = '';
            return;
        }

        const dropdown = document.getElementById(dropdownId);
        if (!dropdown) {
            container.innerHTML = '';
            return;
        }

        const cards = dropdown.querySelectorAll('a.service-card');

        // If we can't find structured cards, fall back to empty
        if (!cards.length) {
            container.innerHTML = '';
            return;
        }

        let html = '<div class="space-y-3">';

        cards.forEach(card => {
            const href = card.getAttribute('href') || '#';
            const titleEl = card.querySelector('h3');
            const allPEls = Array.from(card.querySelectorAll('p'));

            const title = titleEl ? titleEl.textContent.trim() : '';
            const subtitle = allPEls[0] ? allPEls[0].textContent.trim() : '';
            const description = allPEls[allPEls.length - 1]
                ? allPEls[allPEls.length - 1].textContent.trim()
                : '';

            // Try to pull an icon SVG from the desktop card
            const iconWrapper =
                card.querySelector('.w-12.h-12') ||
                card.querySelector('svg')?.parentElement;
            const iconSvg = iconWrapper && iconWrapper.querySelector('svg')
                ? iconWrapper.querySelector('svg').outerHTML
                : '';

            html += `
                <a href="${href}" class="mobile-service-card bg-gray-50 rounded-lg p-3 hover:shadow-lg transition-all duration-300 cursor-pointer group block">
                    <div class="flex items-center mb-2">
                        <div class="w-10 h-10 rounded-lg flex items-center justify-center mr-3 bg-gray-100">
                            ${iconSvg}
                        </div>
                        <div class="flex-1">
                            <h3 class="font-bold text-gray-900 text-sm">${title}</h3>
                            ${subtitle ? `<p class="text-gray-600 text-xs">${subtitle}</p>` : ''}
                        </div>
                        <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                        </svg>
                    </div>
                    ${description ? `<p class="text-gray-700 text-xs leading-relaxed">${description}</p>` : ''}
                </a>
            `;
        });

        html += '</div>';
        container.innerHTML = html;
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
