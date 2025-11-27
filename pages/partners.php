<!-- Mobile Toggle Button -->
<div id="mobile-toggle-button" style="display: none;">
    <button onclick="toggleMobileSidebar()" class="bg-blue-600 hover:bg-blue-700 text-white p-3 rounded-full shadow-lg transition-all duration-300 hover:scale-110 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
        <svg id="toggle-icon" class="w-6 h-6 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
        </svg>
    </button>
</div>

<!-- Mobile Sidebar -->
<div id="mobile-sidebar" class="fixed right-0 top-0 h-full w-80 bg-white shadow-2xl transform translate-x-full transition-transform duration-300 ease-in-out z-40 md:hidden">
    <div class="p-6">
        <!-- Sidebar Header -->
        <div class="flex items-center justify-between mb-6">
            <h3 class="text-xl font-bold text-gray-900">Quick Menu</h3>
            <button onclick="toggleMobileSidebar()" class="text-gray-500 hover:text-gray-700 transition-colors">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                </svg>
            </button>
        </div>
        
        <!-- Sidebar Content -->
        <div class="space-y-4">
            <a href="/?page=home" class="flex items-center p-3 rounded-lg hover:bg-blue-50 transition-colors group">
                <div class="w-10 h-10 bg-blue-100 rounded-lg flex items-center justify-center mr-3 group-hover:bg-blue-200 transition-colors">
                    <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                    </svg>
                </div>
                <div>
                    <h4 class="font-semibold text-gray-900">Home</h4>
                    <p class="text-sm text-gray-600">Back to homepage</p>
                </div>
            </a>
            
            <a href="/?page=about" class="flex items-center p-3 rounded-lg hover:bg-blue-50 transition-colors group">
                <div class="w-10 h-10 bg-green-100 rounded-lg flex items-center justify-center mr-3 group-hover:bg-green-200 transition-colors">
                    <svg class="w-5 h-5 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                </div>
                <div>
                    <h4 class="font-semibold text-gray-900">About Us</h4>
                    <p class="text-sm text-gray-600">Learn about our company</p>
                </div>
            </a>
            
            <a href="/?page=services" class="flex items-center p-3 rounded-lg hover:bg-blue-50 transition-colors group">
                <div class="w-10 h-10 bg-purple-100 rounded-lg flex items-center justify-center mr-3 group-hover:bg-purple-200 transition-colors">
                    <svg class="w-5 h-5 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                    </svg>
                </div>
                <div>
                    <h4 class="font-semibold text-gray-900">Services</h4>
                    <p class="text-sm text-gray-600">Our service offerings</p>
                </div>
            </a>
            
            <a href="/?page=contact" class="flex items-center p-3 rounded-lg hover:bg-blue-50 transition-colors group">
                <div class="w-10 h-10 bg-orange-100 rounded-lg flex items-center justify-center mr-3 group-hover:bg-orange-200 transition-colors">
                    <svg class="w-5 h-5 text-orange-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                    </svg>
                </div>
                <div>
                    <h4 class="font-semibold text-gray-900">Contact</h4>
                    <p class="text-sm text-gray-600">Get in touch</p>
                </div>
            </a>
            
            <a href="/?page=blog" class="flex items-center p-3 rounded-lg hover:bg-blue-50 transition-colors group">
                <div class="w-10 h-10 bg-teal-100 rounded-lg flex items-center justify-center mr-3 group-hover:bg-teal-200 transition-colors">
                    <svg class="w-5 h-5 text-teal-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9.5a2.5 2.5 0 00-2.5-2.5h-2.5"></path>
                    </svg>
                </div>
                <div>
                    <h4 class="font-semibold text-gray-900">Blog</h4>
                    <p class="text-sm text-gray-600">Latest insights</p>
                </div>
            </a>
        </div>
        
        <!-- Sidebar Footer -->
        <div class="mt-8 pt-6 border-t border-gray-200">
            <div class="space-y-3">
                <a href="/?page=get-proposal" class="w-full bg-blue-600 text-white py-3 px-4 rounded-lg text-center font-semibold hover:bg-blue-700 transition-colors block">
                    Get Proposal
                </a>
                <a href="/?page=book-an-expert" class="w-full border-2 border-blue-600 text-blue-600 py-3 px-4 rounded-lg text-center font-semibold hover:bg-blue-50 transition-colors block">
                    Book Expert
                </a>
            </div>
        </div>
    </div>
</div>

<!-- Mobile Sidebar Overlay -->
<div id="mobile-sidebar-overlay" class="fixed inset-0 bg-black bg-opacity-50 z-30 hidden md:hidden" onclick="toggleMobileSidebar()"></div>

<!-- Partners Page -->
<section class="relative min-h-screen bg-gradient-to-br from-slate-50 via-blue-50 to-sky-100 flex items-center justify-center overflow-hidden">
    <!-- Professional Animated Background -->
    <div class="absolute inset-0">
        <div class="absolute top-20 left-10 w-20 h-20 bg-blue-200/30 rounded-full animate-float"></div>
        <div class="absolute top-40 right-20 w-16 h-16 bg-sky-200/40 rounded-full animate-float-delayed"></div>
        <div class="absolute bottom-40 left-1/4 w-12 h-12 bg-blue-300/30 rounded-full animate-float-slow"></div>
        <div class="absolute bottom-20 right-1/3 w-8 h-8 bg-sky-300/40 rounded-full animate-float"></div>
        <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-32 h-32 bg-gradient-to-r from-blue-200/20 to-sky-200/20 rounded-full blur-3xl animate-pulse"></div>
    </div>
    
    <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <div class="animate-fade-in-up">
            <div class="inline-flex items-center bg-blue-100/80 backdrop-blur-sm border border-blue-200/50 rounded-full px-6 py-3 mb-8 animate-pulse">
                <span class="w-2 h-2 bg-blue-500 rounded-full mr-3 animate-ping"></span>
                <span class="text-blue-700 font-medium">Partnership Program</span>
            </div>
            
            <h1 class="text-5xl md:text-7xl lg:text-8xl font-black mb-8 leading-tight">
                <span class="block text-slate-800 animate-slide-in-left">Partners</span>
            </h1>
            
            <p class="text-xl md:text-2xl text-slate-600 mb-12 max-w-4xl mx-auto leading-relaxed animate-fade-in-up-delayed">
                We believe in the power of partnerships to deliver 
                <span class="text-blue-600 font-semibold">exceptional results</span> for our clients.
            </p>
        </div>
    </div>
</section>

<!-- Partnership Benefits -->
<section class="bg-white section-padding">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-5xl font-bold text-gray-900 mb-6">Why Partner With Us?</h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Join our network of trusted partners and unlock new opportunities for growth.
            </p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Benefit 1 -->
            <div class="text-center">
                <div class="w-16 h-16 bg-primary/10 rounded-full flex items-center justify-center mx-auto mb-6">
                    <svg class="w-8 h-8 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-semibold text-gray-900 mb-3">Revenue Growth</h3>
                <p class="text-gray-600">Access new revenue streams through our partnership program and referral system.</p>
            </div>
            
            <!-- Benefit 2 -->
            <div class="text-center">
                <div class="w-16 h-16 bg-primary/10 rounded-full flex items-center justify-center mx-auto mb-6">
                    <svg class="w-8 h-8 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-semibold text-gray-900 mb-3">Collaborative Approach</h3>
                <p class="text-gray-600">Work together to deliver comprehensive solutions that exceed client expectations.</p>
            </div>
            
            <!-- Benefit 3 -->
            <div class="text-center">
                <div class="w-16 h-16 bg-primary/10 rounded-full flex items-center justify-center mx-auto mb-6">
                    <svg class="w-8 h-8 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-semibold text-gray-900 mb-3">Quality Assurance</h3>
                <p class="text-gray-600">Maintain high standards through our rigorous quality control and testing processes.</p>
            </div>
            
            <!-- Benefit 4 -->
            <div class="text-center">
                <div class="w-16 h-16 bg-primary/10 rounded-full flex items-center justify-center mx-auto mb-6">
                    <svg class="w-8 h-8 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.746 0 3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-semibold text-gray-900 mb-3">Training & Support</h3>
                <p class="text-gray-600">Access to training materials, technical support, and best practices documentation.</p>
            </div>
            
            <!-- Benefit 5 -->
            <div class="text-center">
                <div class="w-16 h-16 bg-primary/10 rounded-full flex items-center justify-center mx-auto mb-6">
                    <svg class="w-8 h-8 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-semibold text-gray-900 mb-3">Marketing Support</h3>
                <p class="text-gray-600">Co-marketing opportunities and access to our marketing resources and tools.</p>
            </div>
            
            <!-- Benefit 6 -->
            <div class="text-center">
                <div class="w-16 h-16 bg-primary/10 rounded-full flex items-center justify-center mx-auto mb-6">
                    <svg class="w-8 h-8 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-semibold text-gray-900 mb-3">Fast Track</h3>
                <p class="text-gray-600">Expedited project delivery and priority support for our partner clients.</p>
            </div>
        </div>
    </div>
</section>

<!-- Partnership Types -->
<section class="bg-gray-50 section-padding">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-5xl font-bold text-gray-900 mb-6">Partnership Types</h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Choose the partnership model that best fits your business and goals.
            </p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Partnership Type 1 -->
            <div class="bg-white rounded-2xl p-8 card-hover">
                <h3 class="text-xl font-semibold text-gray-900 mb-4">Referral Partners</h3>
                <p class="text-gray-600 mb-6">Earn commissions by referring clients to our services. Simple, straightforward, and profitable.</p>
                <ul class="space-y-2 text-sm text-gray-600 mb-6">
                    <li>• Competitive referral fees</li>
                    <li>• Easy referral process</li>
                    <li>• Marketing support</li>
                    <li>• Regular payouts</li>
                </ul>
                <a href="/?page=contact" class="text-primary font-semibold inline-flex items-center">
                    Learn More
                    <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                    </svg>
                </a>
            </div>
            
            <!-- Partnership Type 2 -->
            <div class="bg-white rounded-2xl p-8 card-hover">
                <h3 class="text-xl font-semibold text-gray-900 mb-4">Technology Partners</h3>
                <p class="text-gray-600 mb-6">Integrate our solutions with your technology stack and create powerful combined offerings.</p>
                <ul class="space-y-2 text-sm text-gray-600 mb-6">
                    <li>• API access and documentation</li>
                    <li>• Technical integration support</li>
                    <li>• Co-development opportunities</li>
                    <li>• Joint go-to-market strategies</li>
                </ul>
                <a href="/?page=contact" class="text-primary font-semibold inline-flex items-center">
                    Learn More
                    <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                    </svg>
                </a>
            </div>
            
            <!-- Partnership Type 3 -->
            <div class="bg-white rounded-2xl p-8 card-hover">
                <h3 class="text-xl font-semibold text-gray-900 mb-4">Strategic Partners</h3>
                <p class="text-gray-600 mb-6">Deep collaboration on large-scale projects and long-term business relationships.</p>
                <ul class="space-y-2 text-sm text-gray-600 mb-6">
                    <li>• Joint project development</li>
                    <li>• Shared resources and expertise</li>
                    <li>• Exclusive partnership benefits</li>
                    <li>• Strategic planning sessions</li>
                </ul>
                <a href="/?page=contact" class="text-primary font-semibold inline-flex items-center">
                    Learn More
                    <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                    </svg>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="gradient-bg text-white section-padding">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="text-3xl md:text-5xl font-bold mb-6">Ready to Partner With Us?</h2>
        <p class="text-xl text-blue-100 mb-8 max-w-3xl mx-auto">
            Join our network of trusted partners and unlock new opportunities for growth and success.
        </p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <a href="/?page=contact" class="bg-white text-primary px-8 py-4 rounded-full text-lg font-semibold hover:bg-gray-100 transition-colors inline-flex items-center justify-center">
                Become a Partner
            </a>
            <a href="/?page=book-an-expert" class="border-2 border-white text-white px-8 py-4 rounded-full text-lg font-semibold hover:bg-white hover:text-primary transition-colors inline-flex items-center justify-center">
                Schedule a Meeting
            </a>
        </div>
    </div>
</section>
