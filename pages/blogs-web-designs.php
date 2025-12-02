<?php
/**
 * Web Design blog (resources-style layout) – mirrors the Web Design resources page from the Next.js build.
 * Source: aibit_soft/out/Blogs-Web-Design/index.html (same content/sections as resources-web-design.php).
 */

if (!defined('IS_ROUTED')) {
    $page_title = $page_title ?? 'Web Design Resources — Insights & Guides | AiBit Sol';
    $page_description = $page_description ?? 'Web design insights, checklists, and best practices to improve trust, speed, and conversions.';
    include __DIR__ . '/../includes/header.php';
}
?>

<!-- Hero Section -->
<section class="relative w-full mx-auto text-white py-20 px-4 flex flex-col items-center text-center rounded-b-2xl" style="background: linear-gradient(to right, #063BDB, #1D4ED8);">
    <!-- Category Badge -->
    <div class="mb-4">
        <span class="inline-block bg-white/10 text-white text-sm sm:text-base px-4 py-1.5 rounded-full border border-white/20 backdrop-blur-md">
            Website Design & Development
        </span>
    </div>

    <!-- Heading -->
    <h1 class="text-3xl sm:text-4xl md:text-5xl font-bold max-w-4xl leading-tight">
        Outdated Site Costing Trust? Redesign to Win Confidence
    </h1>

    <!-- Subheading -->
    <p class="mt-4 max-w-2xl text-base sm:text-lg text-white/90">
        Your website is your silent first impression. Learn how modern design builds trust, improves conversions, and delivers measurable business value.
    </p>
</section>

<!-- AI Automation Section (Key Facts) -->
<section class="bg-white py-16 px-4 sm:px-6 lg:px-8">
    <div class="max-w-7xl mx-auto px-4 md:px-8 lg:px-[80px] xl:px-4 [@media(min-width:1280px)_and_(max-width:1280px)_and_(max-height:800px)]:px-[100px]">
        <div class="max-w-7xl mx-auto grid lg:grid-cols-[2fr_1fr] gap-12">
            <!-- Left: Content -->
            <div>
                <!-- Heading -->
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 leading-tight font-sans">
                    The Silent First Impression
                </h2>
                
                <!-- Paragraphs -->
                <p class="mt-4 text-gray-600 text-base leading-relaxed font-sans">
                    When someone visits your site, they don't read every word first. They see. They feel. Within 50 milliseconds, users already form an opinion, is this site modern, credible, pleasant to use? If design, layout, speed, or responsiveness feel off, the judgment is made before you ever get to make your case.
                </p>
                <p class="mt-4 text-gray-600 text-base leading-relaxed font-sans">
                    AiBit Soft believes your website should whisper competence from its very first glance. Not shout desperation or neglect.
                </p>

                <!-- Section Title -->
                <h3 class="mt-12 text-2xl md:text-3xl font-bold text-gray-900 font-sans">
                    Key Facts & Statistics
                </h3>
                <p class="mt-3 text-gray-600 text-base leading-relaxed font-sans">
                    Automation and artificial intelligence aren't buzzwords—they're measurable levers of efficiency and impact.
                </p>

                <!-- Stats Grid -->
                <div class="mt-8 grid sm:grid-cols-2 gap-6">
                    <div class="border border-gray-200 shadow-sm rounded-xl">
                        <div class="p-6 flex flex-col justify-center h-full">
                            <p class="text-4xl font-bold text-[#2B4DDF]">92%</p>
                            <p class="mt-2 text-gray-700 text-sm">
                                of users say they've stopped using a website because of its design.
                            </p>
                        </div>
                    </div>
                    <div class="border border-gray-200 shadow-sm rounded-xl">
                        <div class="p-6 flex flex-col justify-center h-full">
                            <p class="text-4xl font-bold text-[#2B4DDF]">66%</p>
                            <p class="mt-2 text-gray-700 text-sm">
                                of users say they've stopped using a website because of its design.
                            </p>
                        </div>
                    </div>
                    <div class="border border-gray-200 shadow-sm rounded-xl">
                        <div class="p-6 flex flex-col justify-center h-full">
                            <p class="text-4xl font-bold text-[#2B4DDF]">30%</p>
                            <p class="mt-2 text-gray-700 text-sm">
                                of users say they've stopped using a website because of its design.
                            </p>
                        </div>
                    </div>
                    <div class="border border-gray-200 shadow-sm rounded-xl">
                        <div class="p-6 flex flex-col justify-center h-full">
                            <p class="text-4xl font-bold text-[#2B4DDF]">84%</p>
                            <p class="mt-2 text-gray-700 text-sm">
                                of users say they've stopped using a website because of its design.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Note Box -->
                <div class="mt-8 bg-[#F0F3FF] border border-[#D9E2FF] p-5 rounded-lg">
                    <p class="text-gray-800 text-sm font-sans">
                        These numbers aren't projections—they reflect what businesses currently experience when they deploy web design at scale.
                    </p>
                </div>
            </div>

            <!-- Right: Sidebar -->
            <aside class="lg:pl-4">
                <div class="sticky top-24 border border-gray-200 rounded-lg p-5 bg-gray-50">
                    <ul class="space-y-2 text-sm font-medium text-gray-700">
                        <li class="text-[#2B4DDF] font-semibold">The Silent First Impression</li>
                        <li class="text-[#2B4DDF] font-semibold">Key Facts & Statistics</li>
                        <li>AI-Powered Web Design</li>
                        <li>How Design Erodes Trust</li>
                        <li>What Design Does Differently</li>
                        <li>Real-World Benchmarks</li>
                        <li>Do You Need a Redesign?</li>
                        <li>Choosing the Right Partner</li>
                        <li>Conclusion</li>
                    </ul>
                </div>
            </aside>
        </div>
    </div>
</section>

<!-- Strategy Playbook Section (How Design Erodes Trust) -->
<section class="bg-white py-7 px-4 sm:px-6 lg:px-8">
    <div class="max-w-7xl mx-auto px-4 md:px-8 lg:px-[80px] xl:px-4 [@media(min-width:1280px)_and_(max-width:1280px)_and_(max-height:800px)]:px-[100px]">
        <div class="max-w-7xl mx-auto grid lg:grid-cols-[2fr_1fr] gap-12">
            <!-- Left: Content -->
            <div>
                <!-- Heading -->
                <h2 class="text-3xl md:text-4xl font-bold text-[#1A237E]">
                    How Outdated Design Erodes Trust
                </h2>
                <div class="mt-3 text-gray-600 leading-relaxed">
                    <p>Modern websites aren't just prettier—they help or hurt your perception in several deep ways. Poor design choices can silently undermine your credibility and drive users away. Here are the critical trust-killing design elements to avoid:</p>
                </div>

                <!-- Strategy List -->
                <div class="mt-10 space-y-8">
                    <div class="flex gap-4">
                        <!-- Blue vertical line -->
                        <div class="w-1 bg-[#2B4DDF] rounded-md shrink-0"></div>
                        <!-- Content -->
                        <div>
                            <h3 class="font-semibold text-gray-900">
                                Speed & Responsiveness
                            </h3>
                            <p class="text-gray-700 text-sm mt-1 leading-relaxed">
                                Slow sites feel unreliable. If mobile users wait too long, they leave—even if content is good.
                            </p>
                        </div>
                    </div>
                    <div class="flex gap-4">
                        <div class="w-1 bg-[#2B4DDF] rounded-md shrink-0"></div>
                        <div>
                            <h3 class="font-semibold text-gray-900">
                                Visual Cues & Aesthetics
                            </h3>
                            <p class="text-gray-700 text-sm mt-1 leading-relaxed">
                                Old fonts, low-res images, mismatched colors, busy layouts all send subtle signals of neglect. Users subconsciously assume the business itself may be outdated.
                            </p>
                        </div>
                    </div>
                    <div class="flex gap-4">
                        <div class="w-1 bg-[#2B4DDF] rounded-md shrink-0"></div>
                        <div>
                            <h3 class="font-semibold text-gray-900">
                                Mobile & Device Compatibility
                            </h3>
                            <p class="text-gray-700 text-sm mt-1 leading-relaxed">
                                More than half of web traffic is on mobile. If your site breaks or looks cramped there, users feel you haven't kept up.
                            </p>
                        </div>
                    </div>
                    <div class="flex gap-4">
                        <div class="w-1 bg-[#2B4DDF] rounded-md shrink-0"></div>
                        <div>
                            <h3 class="font-semibold text-gray-900">
                                Trust & Security Elements
                            </h3>
                            <p class="text-gray-700 text-sm mt-1 leading-relaxed">
                                Absence of SSL/HTTPS, no privacy or security cues, broken links or outdated software versions—all undermine trust.
                            </p>
                        </div>
                    </div>
                    <div class="flex gap-4">
                        <div class="w-1 bg-[#2B4DDF] rounded-md shrink-0"></div>
                        <div>
                            <h3 class="font-semibold text-gray-900">
                                User Experience Friction
                            </h3>
                            <p class="text-gray-700 text-sm mt-1 leading-relaxed">
                                Hard to find your contact info, unclear calls to action, non-intuitive navigation—these make users frustrated and wary.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right: Sidebar -->
            <aside class="lg:pl-4">
                <div class="sticky top-24 border border-gray-200 rounded-lg p-5 bg-gray-50">
                    <ul class="space-y-2 text-sm font-medium text-gray-700">
                        <li>The Silent First Impression</li>
                        <li>Key Facts & Statistics</li>
                        <li>AI-Powered Web Design</li>
                        <li class="text-[#2B4DDF] font-semibold">How Design Erodes Trust</li>
                        <li>What Design Does Differently</li>
                        <li>Real-World Benchmarks</li>
                        <li>Do You Need a Redesign?</li>
                        <li>Choosing the Right Partner</li>
                        <li>Conclusion</li>
                    </ul>
                </div>
            </aside>
        </div>
    </div>
</section>

<!-- Modern Design Section -->
<section class="bg-white py-7 px-4 sm:px-6 lg:px-8">
    <div class="max-w-7xl mx-auto px-4 md:px-8 lg:px-[80px] xl:px-4 [@media(min-width:1280px)_and_(max-width:1280px)_and_(max-height:800px)]:px-[100px]">
        <div class="max-w-7xl mx-auto grid lg:grid-cols-[2fr_1fr] gap-12">
            <!-- Left: Content -->
            <div>
                <!-- Heading -->
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 leading-tight font-sans">
                    What Design Does Differently
                </h2>
                <p class="mt-4 text-gray-600 text-base leading-relaxed font-sans">
                    Professional web design isn't just about looking good—it's about creating experiences that convert visitors into customers.
                </p>

                <!-- Feature Cards -->
                <div class="mt-10 grid sm:grid-cols-2 gap-6">
                    <div class="rounded-xl border p-6 text-left flex flex-col gap-3 bg-blue-50 border-blue-200">
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-5 h-5 text-blue-600">
                                <path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"></path>
                                <circle cx="12" cy="12" r="4"></circle>
                            </svg>
                        </div>
                        <h3 class="font-semibold text-gray-900">User-Centered Design</h3>
                        <p class="text-gray-700 text-sm leading-relaxed">
                            Every design decision is based on user research, behavior analysis, and usability testing.
                        </p>
                    </div>
                    <div class="rounded-xl border p-6 text-left flex flex-col gap-3 bg-green-50 border-green-200">
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-5 h-5 text-green-600">
                                <rect width="14" height="20" x="5" y="2" rx="2" ry="2"></rect>
                                <path d="M12 18h.01"></path>
                            </svg>
                        </div>
                        <h3 class="font-semibold text-gray-900">Conversion Optimization</h3>
                        <p class="text-gray-700 text-sm leading-relaxed">
                            Strategic placement of elements, clear calls-to-action, and optimized user flows guide visitors toward desired actions.
                        </p>
                    </div>
                    <div class="rounded-xl border p-6 text-left flex flex-col gap-3 bg-purple-50 border-purple-200">
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-5 h-5 text-purple-600">
                                <path d="m9 10 2 2 4-4"></path>
                                <rect width="20" height="14" x="2" y="3" rx="2"></rect>
                                <path d="M12 17v4"></path>
                                <path d="M8 21h8"></path>
                            </svg>
                        </div>
                        <h3 class="font-semibold text-gray-900">Performance-First Approach</h3>
                        <p class="text-gray-700 text-sm leading-relaxed">
                            Design and development work together to ensure fast loading times and smooth interactions.
                        </p>
                    </div>
                    <div class="rounded-xl border p-6 text-left flex flex-col gap-3 bg-amber-50 border-amber-200">
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-5 h-5 text-amber-600">
                                <path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2"></path>
                                <circle cx="12" cy="7" r="4"></circle>
                            </svg>
                        </div>
                        <h3 class="font-semibold text-gray-900">Accessibility & Inclusivity</h3>
                        <p class="text-gray-700 text-sm leading-relaxed">
                            Designs that work for everyone, regardless of abilities or devices, demonstrate professionalism and care.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Right: Sidebar -->
            <aside class="lg:pl-4">
                <div class="sticky top-24 border border-gray-200 rounded-lg p-5 bg-gray-50">
                    <ul class="space-y-2 text-sm font-medium text-gray-700">
                        <li>The Silent First Impression</li>
                        <li>Key Facts & Statistics</li>
                        <li>AI-Powered Web Design</li>
                        <li>How Design Erodes Trust</li>
                        <li class="text-[#2B4DDF] font-semibold">What Design Does Differently</li>
                        <li>Real-World Benchmarks</li>
                        <li>Do You Need a Redesign?</li>
                        <li>Choosing the Right Partner</li>
                        <li>Conclusion</li>
                    </ul>
                </div>
            </aside>
        </div>
    </div>
</section>

<!-- Technology Partner Section -->
<section class="bg-white py-7 px-4 sm:px-6 lg:px-8">
    <div class="max-w-7xl mx-auto px-4 md:px-8 lg:px-[80px] xl:px-4 [@media(min-width:1280px)_and_(max-width:1280px)_and_(max-height:800px)]:px-[100px]">
        <div class="max-w-7xl mx-auto grid lg:grid-cols-[2fr_1fr] gap-12">
            <!-- Left: Content -->
            <div>
                <!-- Heading -->
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 leading-tight font-sans">
                    What To Look For In A Trusted Web Design Partner
                </h2>
                <p class="mt-4 text-gray-600 text-base leading-relaxed font-sans">
                    If you decide to redesign, how do you pick someone who will deliver trust through design?
                </p>

                <!-- Two Column List -->
                <div class="mt-8 grid grid-cols-1 md:grid-cols-2 gap-x-8 gap-y-4">
                    <ul class="space-y-4">
                        <li class="border-l-4 border-[#2B4DDF] pl-4 text-gray-800 text-base leading-relaxed font-sans">
                            Starts with comprehensive audit: speed, UX, security, visual polish, analytics
                        </li>
                        <li class="border-l-4 border-[#2B4DDF] pl-4 text-gray-800 text-base leading-relaxed font-sans">
                            UX & user-centered approach: usability, simplicity, hierarchy, path to conversion
                        </li>
                        <li class="border-l-4 border-[#2B4DDF] pl-4 text-gray-800 text-base leading-relaxed font-sans">
                            Transparency about metrics: current stats, planned improvements, success measurement
                        </li>
                        <li class="border-l-4 border-[#2B4DDF] pl-4 text-gray-800 text-base leading-relaxed font-sans">
                            Client testimonials demonstrating trust and results
                        </li>
                    </ul>
                    <ul class="space-y-4">
                        <li class="border-l-4 border-[#2B4DDF] pl-4 text-gray-800 text-base leading-relaxed font-sans">
                            Demonstrated skill in performance optimization (image formats, lazy loading, clean code)
                        </li>
                        <li class="border-l-4 border-[#2B4DDF] pl-4 text-gray-800 text-base leading-relaxed font-sans">
                            Experience with responsive/mobile design & accessibility standards
                        </li>
                        <li class="border-l-4 border-[#2B4DDF] pl-4 text-gray-800 text-base leading-relaxed font-sans">
                            Portfolio showing modern, high-performing websites
                        </li>
                        <li class="border-l-4 border-[#2B4DDF] pl-4 text-gray-800 text-base leading-relaxed font-sans">
                            Ongoing maintenance and iterative improvement philosophy
                        </li>
                    </ul>
                </div>

                <!-- Bottom Info Box -->
                <div class="mt-8 bg-[#F0F3FF] border border-[#D9E2FF] p-5 rounded-lg">
                    <p class="text-gray-800 text-sm font-sans">
                        AiBit Soft embodies these principles: we audit first, measure, prioritize speed & trust, not just aesthetics.
                    </p>
                </div>
            </div>

            <!-- Right: Sidebar -->
            <aside class="lg:pl-4">
                <div class="sticky top-24 border border-gray-200 rounded-lg p-5 bg-gray-50">
                    <ul class="space-y-2 text-sm font-medium text-gray-700">
                        <li>The Silent First Impression</li>
                        <li>Key Facts & Statistics</li>
                        <li>AI-Powered Web Design</li>
                        <li>How Design Erodes Trust</li>
                        <li>What Design Does Differently</li>
                        <li>Real-World Benchmarks</li>
                        <li>Do You Need a Redesign?</li>
                        <li class="text-[#2B4DDF] font-semibold">Choosing the Right Partner</li>
                        <li>Conclusion</li>
                    </ul>
                </div>
            </aside>
        </div>
    </div>
</section>

<!-- Final Thoughts Section -->
<section class="bg-white py-7 px-4 sm:px-6 lg:px-8">
    <div class="max-w-7xl mx-auto px-4 md:px-8 lg:px-[80px] xl:px-4 [@media(min-width:1280px)_and_(max-width:1280px)_and_(max-height:800px)]:px-[100px]">
        <div class="max-w-7xl mx-auto grid lg:grid-cols-[2fr_1fr] gap-12">
            <!-- Left: Content -->
            <div class="text-gray-800">
                <!-- Heading -->
                <h2 class="text-3xl md:text-4xl font-bold text-[#0C1B66] mb-6">
                    Final Thought: Design With Purpose
                </h2>

                <!-- Paragraphs -->
                <p class="text-[18px] leading-[30px] mb-5">
                    When design is done well, it doesn't look like you spent money. It feels like you care. That feeling turns into trust, which turns into longer sessions, higher conversions, higher loyalty and ultimately, stronger business results.
                </p>
                <p class="text-[18px] leading-[30px] mb-5">
                    If your website is showing signs of age—slow speed, inconsistent mobile performance, unclear visuals or navigation—those are more than cosmetic issues. They're trust issues.
                </p>
                <p class="text-[18px] leading-[30px] mb-5">
                    Bringing your site up to modern standards is not a cost, but an investment in your brand's credibility, your users' experience, and your bottom-line. When people feel confident, they engage, they convert, they return.
                </p>

                <!-- CTA Box -->
                <div class="mt-10 bg-[#F5F7FF] rounded-2xl p-8 text-center shadow-sm">
                    <h3 class="text-2xl md:text-3xl font-semibold text-[#0C1B66] mb-3">
                        Ready to transform your website into a trust-building asset?
                    </h3>
                    <p class="text-gray-600 mb-6">
                        AiBit Soft is ready to help you create a website that whispers competence from first glance.
                    </p>

                    <div class="flex flex-col sm:flex-row justify-center gap-4">
                        <a href="/?page=get-proposal">
                            <button class="bg-[#2B4DDF] hover:bg-[#233eb4] text-white px-6 py-3 text-base rounded-full">
                                Get Started Today
                            </button>
                        </a>
                        <a href="/?page=book-an-expert">
                            <button class="border border-gray-300 hover:bg-gray-100 text-gray-800 px-6 py-3 text-base rounded-full">
                                Get Free Consultation
                            </button>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Right: Sidebar -->
            <aside class="lg:pl-4">
                <div class="sticky top-24 border border-gray-200 rounded-lg p-5 bg-gray-50">
                    <ul class="space-y-2 text-sm font-medium text-gray-700">
                        <li>The Silent First Impression</li>
                        <li>Key Facts & Statistics</li>
                        <li>AI-Powered Web Design</li>
                        <li>How Design Erodes Trust</li>
                        <li>What Design Does Differently</li>
                        <li>Real-World Benchmarks</li>
                        <li>Do You Need a Redesign?</li>
                        <li>Choosing the Right Partner</li>
                        <li class="text-[#2B4DDF] font-semibold">Conclusion</li>
                    </ul>
                </div>
            </aside>
        </div>
    </div>
</section>

<?php
if (!defined('IS_ROUTED')) {
    include __DIR__ . '/../includes/footer.php';
}
?>
