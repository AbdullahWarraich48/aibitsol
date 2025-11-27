<!-- Book Expert — Modern, Minimal‑Click -->
<section class="relative text-white section-padding overflow-hidden">
    <div class="absolute inset-0 bg-gradient-to-br from-primary/90 via-primary/80 to-blue-700/80"></div>
    <div class="relative max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-3xl mx-auto">
            <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-white/10 ring-1 ring-white/20 mb-5">
                <span class="w-2 h-2 rounded-full bg-emerald-400"></span>
                <span class="text-sm">Book an Expert</span>
            </div>
            <h1 class="text-3xl md:text-6xl font-bold tracking-tight mb-3 whitespace-nowrap">Jump On A Call With An Expert</h1>
            <p class="text-lg md:text-xl text-blue-100">Zero sales pressure. 30–45 minutes to map goals, options, and next steps.</p>
        </div>
        <div class="mt-10 bg-white rounded-2xl p-6 md:p-8 ring-1 ring-white/20 shadow-xl">
            <form class="grid grid-cols-1 md:grid-cols-2 gap-4 md:gap-6" method="POST" action="includes/contact_handler.php">
                <input type="hidden" name="source" value="book-expert">
                <div class="md:col-span-1">
                    <label for="name" class="block text-sm font-medium text-gray-700 mb-2">Full Name *</label>
                    <input id="name" name="name" required class="w-full border border-gray-300 rounded-xl px-4 py-3 focus:ring-2 focus:ring-primary focus:border-transparent" />
                </div>
                <div class="md:col-span-1">
                    <label for="email" class="block text-sm font-medium text-gray-700 mb-2">Email *</label>
                    <input id="email" name="email" type="email" required class="w-full border border-gray-300 rounded-xl px-4 py-3 focus:ring-2 focus:ring-primary focus:border-transparent" />
                </div>
                <div class="md:col-span-1">
                    <label for="phone" class="block text-sm font-medium text-gray-700 mb-2">Phone</label>
                    <input id="phone" name="phone" class="w-full border border-gray-300 rounded-xl px-4 py-3 focus:ring-2 focus:ring-primary focus:border-transparent" />
                </div>
                <div class="md:col-span-1">
                    <label for="service" class="block text-sm font-medium text-gray-700 mb-2">I’m interested in</label>
                    <select id="service" name="service" class="w-full border border-gray-300 rounded-xl px-4 py-3 focus:ring-2 focus:ring-primary focus:border-transparent">
                        <option value="">Choose a service (optional)</option>
                        <option value="website-development">Website Development</option>
                        <option value="web-app-development">Web App Development</option>
                        <option value="mobile-app-development">Mobile App Development</option>
                        <option value="ui-ux-design">UI/UX Design</option>
                        <option value="seo-ai-seo">SEO & AI SEO</option>
                        <option value="social-media-ads">Social Media Ads</option>
                        <option value="custom-software-development">Custom Software Development</option>
                        <option value="custom-ai-solution">Custom AI Solutions</option>
                        <option value="it-staff-augmentation">IT Staff Augmentation</option>
                        <option value="mvp-development">MVP Development</option>
                        <option value="general-consultation">General Consultation</option>
                    </select>
                </div>
                <div class="md:col-span-2">
                    <label for="message" class="block text-sm font-medium text-gray-700 mb-2">What would you like to achieve?</label>
                    <textarea id="message" name="message" rows="4" class="w-full border border-gray-300 rounded-xl px-4 py-3 focus:ring-2 focus:ring-primary focus:border-transparent" placeholder="Tell us about your project, goals, timeline, or any questions..."></textarea>
                </div>
                <div class="md:col-span-2 grid grid-cols-1 sm:grid-cols-3 gap-3">
                    <button type="submit" class="col-span-1 btn-primary whitespace-nowrap text-white py-3 rounded-xl font-semibold text-base">Book Expert Call</button>
                    <a href="/?page=get-proposal" class="col-span-1 text-center border-2 border-primary text-primary py-3 rounded-xl font-semibold hover:bg-primary hover:text-white transition-colors">Get a Proposal</a>
                    <a href="/?page=contact" class="col-span-1 text-center border-2 border-gray-300 text-gray-700 py-3 rounded-xl font-semibold hover:bg-gray-50 transition-colors">Message Us</a>
                </div>
                <p class="md:col-span-2 text-xs text-gray-500 mt-1">We’ll reply within 24–48 hours. Your information is protected and won’t be shared.</p>
            </form>
        </div>
        <div class="mt-10 grid grid-cols-1 md:grid-cols-3 gap-4 text-center">
            <div class="bg-white/10 rounded-xl p-4 ring-1 ring-white/20"><div class="text-2xl font-bold">4.9/5</div><div class="text-blue-100 text-sm">Client Rating</div></div>
            <div class="bg-white/10 rounded-xl p-4 ring-1 ring-white/20"><div class="text-2xl font-bold">200+ </div><div class="text-blue-100 text-sm">Projects Delivered</div></div>
            <div class="bg-white/10 rounded-xl p-4 ring-1 ring-white/20"><div class="text-2xl font-bold">24–48h</div><div class="text-blue-100 text-sm">Avg. Response</div></div>
        </div>
    </div>
</section>


<!-- FAQs (Accordion Ready) -->
<section class="bg-white section-padding">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-8">
            <h2 class="text-3xl md:text-5xl font-bold text-gray-900 mb-4">Frequently Asked Questions</h2>
            <p class="text-lg text-gray-600">Short answers to help you move fast.</p>
        </div>
        <div class="space-y-4" data-accordion>
            <div class="bg-gray-50 rounded-2xl ring-1 ring-gray-200" role="listitem">
                <button type="button" class="w-full text-left px-6 py-5 flex items-center justify-between" aria-expanded="false" data-accordion-trigger>
                    <span class="font-semibold text-lg">How soon can we meet?</span>
                    <span class="w-6 h-6 rounded-full bg-white text-gray-600 flex items-center justify-center"><svg class="w-4 h-4" viewBox="0 0 24 24" fill="none"><path d="M12 5v14M5 12h14" stroke="currentColor" stroke-width="2" stroke-linecap="round"/></svg></span>
                </button>
                <div class="px-6 pb-6 hidden" data-accordion-content>
                    <p class="text-gray-600">Typically within 1–2 business days. We'll coordinate the best time via email.</p>
                </div>
            </div>
            <div class="bg-gray-50 rounded-2xl ring-1 ring-gray-200" role="listitem">
                <button type="button" class="w-full text-left px-6 py-5 flex items-center justify-between" aria-expanded="false" data-accordion-trigger>
                    <span class="font-semibold text-lg">Is it really free?</span>
                    <span class="w-6 h-6 rounded-full bg-white text-gray-600 flex items-center justify-center"><svg class="w-4 h-4" viewBox="0 0 24 24" fill="none"><path d="M12 5v14M5 12h14" stroke="currentColor" stroke-width="2" stroke-linecap="round"/></svg></span>
                </button>
                <div class="px-6 pb-6 hidden" data-accordion-content>
                    <p class="text-gray-600">Yes. It's a no‑pressure session to understand your goals and share options.</p>
                </div>
            </div>
            <div class="bg-gray-50 rounded-2xl ring-1 ring-gray-200" role="listitem">
                <button type="button" class="w-full text-left px-6 py-5 flex items-center justify-between" aria-expanded="false" data-accordion-trigger>
                    <span class="font-semibold text-lg">What should I prepare?</span>
                    <span class="w-6 h-6 rounded-full bg-white text-gray-600 flex items-center justify-center"><svg class="w-4 h-4" viewBox="0 0 24 24" fill="none"><path d="M12 5v14M5 12h14" stroke="currentColor" stroke-width="2" stroke-linecap="round"/></svg></span>
                </button>
                <div class="px-6 pb-6 hidden" data-accordion-content>
                    <p class="text-gray-600">Any context on goals, audience, timeline, budget range, and current systems.</p>
                </div>
            </div>
        </div>
    </div>
</section>
