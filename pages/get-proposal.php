<!-- Get Proposal Page -->
<section class="hero-bg text-white section-padding">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-4xl mx-auto">
            <h1 class="text-4xl md:text-6xl font-bold mb-6">Get a Proposal</h1>
            <p class="text-xl text-blue-100 mb-8">
                Tell us about your project and we'll provide you with a detailed proposal tailored to your needs.
            </p>
        </div>
    </div>
</section>

<!-- Proposal Form -->
<section class="bg-gray-50 section-padding">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="bg-white rounded-2xl p-8 shadow-lg">
            <div class="text-center mb-8">
                <h2 class="text-3xl font-bold text-gray-900 mb-4">Project Details</h2>
                <p class="text-gray-600">Fill out the form below and we'll get back to you with a detailed proposal within 24 hours.</p>
            </div>
            
            <form class="space-y-6" method="POST" action="includes/contact_handler.php">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label for="name" class="block text-sm font-medium text-gray-700 mb-2">Full Name *</label>
                        <input type="text" id="name" name="name" required class="w-full border border-gray-300 rounded-lg px-4 py-3 focus:ring-2 focus:ring-primary focus:border-transparent">
                    </div>
                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-700 mb-2">Email *</label>
                        <input type="email" id="email" name="email" required class="w-full border border-gray-300 rounded-lg px-4 py-3 focus:ring-2 focus:ring-primary focus:border-transparent">
                    </div>
                </div>
                
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label for="company" class="block text-sm font-medium text-gray-700 mb-2">Company</label>
                        <input type="text" id="company" name="company" class="w-full border border-gray-300 rounded-lg px-4 py-3 focus:ring-2 focus:ring-primary focus:border-transparent">
                    </div>
                    <div>
                        <label for="phone" class="block text-sm font-medium text-gray-700 mb-2">Phone Number</label>
                        <input type="tel" id="phone" name="phone" class="w-full border border-gray-300 rounded-lg px-4 py-3 focus:ring-2 focus:ring-primary focus:border-transparent">
                    </div>
                </div>
                
                <div>
                    <label for="service" class="block text-sm font-medium text-gray-700 mb-2">Service Interest *</label>
                    <select id="service" name="service" required class="w-full border border-gray-300 rounded-lg px-4 py-3 focus:ring-2 focus:ring-primary focus:border-transparent">
                        <option value="">Select a service</option>
                        <option value="website-development">Website Development</option>
                        <option value="web-app-development">Web App Development</option>
                        <option value="mobile-app-development">Mobile App Development</option>
                        <option value="ui-ux-design">UI/UX Design</option>
                        <option value="digital-marketing">Digital Marketing</option>
                        <option value="seo-ai-seo">SEO & AI SEO</option>
                        <option value="social-media-ads">Social Media Ads</option>
                        <option value="custom-software-development">Custom Software Development</option>
                        <option value="custom-ai-solution">Custom AI Solutions</option>
                        <option value="it-staff-augmentation">IT Staff Augmentation</option>
                        <option value="mvp-development">MVP Development</option>
                        <option value="multiple-services">Multiple Services</option>
                    </select>
                </div>
                
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label for="budget" class="block text-sm font-medium text-gray-700 mb-2">Project Budget</label>
                        <select id="budget" name="budget" class="w-full border border-gray-300 rounded-lg px-4 py-3 focus:ring-2 focus:ring-primary focus:border-transparent">
                            <option value="">Select budget range</option>
                            <option value="under-5k">Under $5,000</option>
                            <option value="5k-10k">$5,000 - $10,000</option>
                            <option value="10k-25k">$10,000 - $25,000</option>
                            <option value="25k-50k">$25,000 - $50,000</option>
                            <option value="50k-plus">$50,000+</option>
                            <option value="discuss">Let's discuss</option>
                        </select>
                    </div>
                    <div>
                        <label for="timeline" class="block text-sm font-medium text-gray-700 mb-2">Project Timeline</label>
                        <select id="timeline" name="timeline" class="w-full border border-gray-300 rounded-lg px-4 py-3 focus:ring-2 focus:ring-primary focus:border-transparent">
                            <option value="">Select timeline</option>
                            <option value="asap">ASAP</option>
                            <option value="1-month">Within 1 month</option>
                            <option value="2-3-months">2-3 months</option>
                            <option value="3-6-months">3-6 months</option>
                            <option value="6-months-plus">6+ months</option>
                            <option value="flexible">Flexible</option>
                        </select>
                    </div>
                </div>
                
                <div>
                    <label for="message" class="block text-sm font-medium text-gray-700 mb-2">Project Description *</label>
                    <textarea id="message" name="message" rows="6" required class="w-full border border-gray-300 rounded-lg px-4 py-3 focus:ring-2 focus:ring-primary focus:border-transparent" placeholder="Please describe your project in detail. Include your goals, requirements, and any specific features you need..."></textarea>
                </div>
                
                <div class="bg-blue-50 border border-blue-200 rounded-lg p-4">
                    <h3 class="text-lg font-semibold text-blue-900 mb-2">What happens next?</h3>
                    <ul class="text-blue-700 text-sm space-y-1">
                        <li>• We'll review your project details within 24 hours</li>
                        <li>• Our team will prepare a detailed proposal</li>
                        <li>• We'll schedule a call to discuss your project</li>
                        <li>• You'll receive a comprehensive proposal with timeline and pricing</li>
                    </ul>
                </div>
                
                <button type="submit" class="w-full btn-primary text-white py-4 rounded-lg font-semibold text-lg">
                    Request Proposal
                </button>
            </form>
        </div>
    </div>
</section>
