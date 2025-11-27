<?php
/**
 * Blogs - Custom Marketing (Resources)
 * Auto-generated to mirror the Next.js Resources page content.
 */
?>

<!-- Hero -->
<section class="relative min-h-screen bg-gradient-to-br from-slate-50 via-blue-50 to-sky-100 overflow-hidden rounded-b-2xl">
    <div class="absolute inset-0">
        <div class="absolute top-0 right-0 w-96 h-96 bg-gradient-to-br from-blue-200/20 to-sky-200/20 rounded-full blur-3xl animate-float"></div>
        <div class="absolute bottom-0 left-0 w-80 h-80 bg-gradient-to-tr from-blue-100/30 to-sky-100/30 rounded-full blur-3xl animate-float-delayed"></div>
        <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-64 h-64 bg-gradient-to-r from-blue-200/15 to-sky-200/15 rounded-full blur-3xl animate-float-slow"></div>
    </div>

    <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20">
        <div class="text-center mb-20">
            <div class="inline-flex items-center bg-blue-100/80 backdrop-blur-sm border border-blue-200/50 rounded-full px-6 py-3 text-sm font-bold mb-8 animate-fade-in-up">
                <span class="w-2 h-2 bg-blue-500 rounded-full mr-3 animate-ping"></span>
                <span class="text-blue-700 font-medium">BLOG &amp; CONTENT MARKETING</span>
            </div>
            <h1 class="text-5xl md:text-7xl font-black text-slate-800 mb-8 animate-fade-in-up-delayed">
                <span class="block">No Traffic, No Leads?</span>
                <span class="block bg-gradient-to-r from-blue-700 to-blue-600 bg-clip-text text-transparent">
                    Publish Content that Actually Converts
                </span>
            </h1>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto animate-fade-in-up-delayed-2">
                In a world where 7.5 million blog posts are published daily, attention is currency. Learn how strategic content design transforms publishing into a predictable growth engine.
            </p>
        </div>
    </div>
</section>

<section class="bg-white py-12 px-4 sm:px-6 lg:px-8">
    <div class="max-w-7xl mx-auto grid lg:grid-cols-[2fr_1fr] gap-12">
        <div class="[&>*]:scroll-mt-28 space-y-12">
            <section id="saturation">
                <h2 class="text-3xl md:text-4xl font-bold text-[#0B1D51] mb-6 leading-tight">
                    The 2025 Reality of Content Saturation
                </h2>
                <p class="text-gray-700 text-base md:text-lg leading-relaxed mb-4 max-w-3xl">
                    Every day, over 7.5 million blog posts are published globally. The digital world has never been louder and yet, over 90% of pages get zero organic traffic.
                    <br>
                    <span class="text-gray-500 text-sm">(Source: Ahrefs, 2025)</span>
                </p>
                <p class="text-gray-700 text-base md:text-lg leading-relaxed mb-6 max-w-3xl">
                    The problem isn&apos;t that brands aren&apos;t creating content, it&apos;s that they&apos;re creating without clarity, consistency, or conversion focus.
                </p>
                <div class="bg-[#EEF0FF] border border-[#D9E2FF] p-5 max-w-3xl rounded-lg">
                    <p class="text-gray-800 text-base md:text-lg leading-relaxed font-medium">
                        Readers today don&apos;t need more articles; they need relevance. They seek value in seconds and trust over time.
                    </p>
                </div>
            </section>

            <section id="roi">
                <h2 class="text-[32px] md:text-[38px] font-bold text-[#0B1D51] mb-4 leading-tight">
                    Common Growth Barriers &amp; Missteps
                </h2>
                <p class="text-[18px] text-gray-700 mb-10 max-w-3xl leading-relaxed">
                    Traditional content strategies often stop at “publish and hope.” Here’s why that fails in today’s data-driven environment:
                </p>
                <div class="space-y-6">
                    <?php
                    $growthBarriers = [
                        ["title" => "No search intent alignment", "description" => "Writing what we want, not what users search for."],
                        ["title" => "Weak structure and UX", "description" => "Long paragraphs, no scannability, poor visuals."],
                        ["title" => "Inconsistent cadence", "description" => "Bursts of activity followed by silence."],
                        ["title" => "No data loop", "description" => "Zero measurement, iteration, or content lifecycle management."],
                        ["title" => "Generic tone", "description" => "Content that could belong to anyone, therefore trusted by no one."],
                    ];
                    foreach ($growthBarriers as $item): ?>
                        <div class="flex items-start space-x-4">
                            <div class="w-[4px] bg-red-300 rounded-full mt-[2px]"></div>
                            <div>
                                <h3 class="text-[18px] font-semibold text-gray-900 mb-1"><?= htmlspecialchars($item['title']); ?></h3>
                                <p class="text-[16px] text-gray-600"><?= htmlspecialchars($item['description']); ?></p>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </section>

            <section id="shift">
                <h2 class="text-3xl md:text-4xl font-bold text-[#0B1D51] mb-4 leading-tight">
                    The Shift: From Publishing to Performance
                </h2>
                <p class="text-base md:text-lg text-gray-700 leading-relaxed mb-2 max-w-3xl">
                    Content marketing has evolved from volume to performance.
                </p>
                <p class="text-base md:text-lg text-gray-700 leading-relaxed mb-4 max-w-3xl">
                    Modern brands measure not by how many posts they publish — but how many actions they inspire.
                </p>
                <p class="text-base md:text-lg text-gray-700 leading-relaxed mb-8 max-w-3xl">
                    This is the <span class="font-semibold">Apple mindset applied</span> to content:
                </p>
                <?php
                $principles = [
                    "Design every word, paragraph, and visual with intentional simplicity.",
                    "Focus on user experience, from scroll depth to readability.",
                    "Treat each article as a digital product with a measurable purpose.",
                ];
                foreach ($principles as $principle): ?>
                    <div class="bg-[#F7F8FF] rounded-lg p-4 shadow-sm text-sm md:text-base text-gray-800 mb-4">
                        <?= htmlspecialchars($principle); ?>
                    </div>
                <?php endforeach; ?>
                <div class="bg-[#F0F3FF] border border-green-200 p-4 rounded-md max-w-3xl">
                    <p class="text-gray-800 text-base md:text-lg">
                        At <span class="font-semibold">AiBit Soft</span>, we call it “content experience design.”
                    </p>
                </div>
            </section>

            <section id="facts">
                <h2 class="text-3xl md:text-4xl font-bold text-[#0B1D51] mb-2 leading-tight">
                    Facts That Define the New Content Landscape
                </h2>
                <p class="text-base md:text-lg text-gray-700 mb-10 leading-relaxed">
                    Recent, reliable data paints a clear picture:
                </p>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-8">
                    <?php
                    $facts = [
                        ["number" => "70%", "text" => "of marketers say content marketing now drives more leads than traditional advertising.", "source" => "Source: Content Marketing Institute, 2025"],
                        ["number" => "67%", "text" => "of businesses that blog regularly generate more monthly leads than those that don’t.", "source" => "Source: HubSpot, 2025"],
                        ["number" => "77%", "text" => "of long-form content (1,500+ words) earns more backlinks and higher dwell time.", "source" => "Source: Backlinko, 2025"],
                        ["number" => "86%", "text" => "of conversion rates increase when video + written content are used together.", "source" => "Source: Demand Metric, 2025"],
                    ];
                    foreach ($facts as $fact): ?>
                        <div class="bg-white rounded-xl shadow-sm border border-gray-100 p-6 flex flex-col justify-between hover:shadow-md transition-shadow">
                            <div>
                                <div class="text-3xl md:text-[36px] font-bold text-[#0B1D51] mb-2"><?= $fact['number']; ?></div>
                                <p class="text-sm md:text-base text-gray-700 leading-relaxed mb-3"><?= $fact['text']; ?></p>
                            </div>
                            <p class="text-xs md:text-sm text-gray-500"><?= $fact['source']; ?></p>
                        </div>
                    <?php endforeach; ?>
                </div>
                <p class="text-sm md:text-base text-gray-700 mb-6 max-w-4xl leading-relaxed">
                    65% of high-performing content teams use AI-assisted optimization for topic research, structure, and performance tracking. (Semrush State of Content Marketing, 2025)
                </p>
                <div class="bg-[#F0F3FF] border border-[#D9E2FF] p-4 rounded-md max-w-4xl">
                    <p class="text-gray-800 text-base md:text-lg font-medium">
                        Content isn’t static anymore — it’s an adaptive, data-driven engine of growth and conversion.
                    </p>
                </div>
            </section>

            <section id="anatomy">
                <h2 class="text-3xl md:text-4xl font-bold text-[#0B1D51] mb-4">
                    The Anatomy of High-Converting Content
                </h2>
                <p class="text-base md:text-lg text-gray-700 mb-8 max-w-3xl leading-relaxed">
                    Truly effective content has a recognizable pattern:
                </p>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                    <?php
                    $anatomy = [
                        ["title" => "Empathy-driven insights", "description" => "Address real user pain points."],
                        ["title" => "Credibility signals", "description" => "Cite data, use visuals, include expert commentary."],
                        ["title" => "Modern structure", "description" => "Short sections, bold highlights, interactive visuals."],
                        ["title" => "Clear value exchange", "description" => "Every piece must answer: “What’s in it for the reader?”"],
                    ];
                    foreach ($anatomy as $item): ?>
                        <div class="bg-[#F7F8FF] rounded-lg p-4 shadow-sm border border-gray-100">
                            <h3 class="text-base md:text-lg font-semibold text-[#0B1D51] mb-1"><?= htmlspecialchars($item['title']); ?></h3>
                            <p class="text-sm md:text-base text-gray-700"><?= htmlspecialchars($item['description']); ?></p>
                        </div>
                    <?php endforeach; ?>
                </div>
                <p class="text-sm md:text-base text-gray-700 mb-4">
                    • Compelling call-to-value (not just call-to-action) guide the next logical step without sales pressure.
                </p>
                <div class="bg-[#EEF0FF] p-4 rounded-md mb-16">
                    <p class="text-gray-800 text-base md:text-lg leading-relaxed">
                        At its best, content feels effortless because it was crafted intentionally.
                    </p>
                </div>
                <h2 id="metrics" class="text-3xl md:text-4xl font-bold text-[#0B1D51] mb-4">
                    Metrics That Matter in 2025
                </h2>
                <p class="text-base md:text-lg text-gray-700 mb-8 max-w-3xl leading-relaxed">
                    Data-driven marketers track more than views or likes. The new success metrics are about <span class="font-semibold">engagement quality</span> and <span class="font-semibold">ROI clarity</span>:
                </p>
                <?php
                $metrics = [
                    ["metric" => "Average engagement time", "reveals" => "Real reader interest", "benchmark" => "45–60 sec+"],
                    ["metric" => "Scroll depth", "reveals" => "UX effectiveness", "benchmark" => "70–80%"],
                    ["metric" => "CTR to next page / CTA", "reveals" => "Conversion readiness", "benchmark" => "3–5%"],
                    ["metric" => "Leads or form submissions", "reveals" => "Direct conversion", "benchmark" => "Rising trend month-over-month"],
                    ["metric" => "SEO share of voice", "reveals" => "Topical authority", "benchmark" => "Top 10 in key cluster"],
                    ["metric" => "Content velocity", "reveals" => "Freshness of updates", "benchmark" => "1 major refresh every 90 days"],
                ];
                ?>
                <div class="overflow-x-auto">
                    <table class="w-full border-collapse text-left min-w-[600px]">
                        <thead>
                            <tr class="bg-[#F7F8FF]">
                                <th class="py-3 px-4 text-sm md:text-base font-semibold text-[#0B1D51]">Metric</th>
                                <th class="py-3 px-4 text-sm md:text-base font-semibold text-[#0B1D51]">What it Reveals</th>
                                <th class="py-3 px-4 text-sm md:text-base font-semibold text-[#0B1D51]">Benchmark (2025)</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($metrics as $index => $row): ?>
                                <tr class="border-b border-gray-200 <?= $index % 2 === 1 ? 'bg-white' : 'bg-gray-50'; ?>">
                                    <td class="py-3 px-4 text-sm md:text-base text-gray-800 font-medium"><?= $row['metric']; ?></td>
                                    <td class="py-3 px-4 text-sm md:text-base text-gray-700"><?= $row['reveals']; ?></td>
                                    <td class="py-3 px-4 text-sm md:text-base text-gray-700"><?= $row['benchmark']; ?></td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </section>

            <section id="why">
                <h2 class="text-3xl md:text-4xl font-bold text-[#0B1D51] mb-4">
                    Why AiBit Soft Believes in Strategic Content Design
                </h2>
                <p class="text-base md:text-lg text-gray-700 mb-8 max-w-3xl leading-relaxed">
                    At AiBit Soft, we view content as an extension of brand experience, not just communication. Our approach focuses on:
                </p>
                <?php
                $bullets = [
                    "Research-first topics grounded in verified user intent.",
                    "Apple-inspired design language for readability and trust.",
                    "Precision tone: simple, human, confident.",
                    "SEO + UX hybrid strategy so every post performs technically and emotionally.",
                    "Continuous optimization, performance dashboards, A/B testing, and trend-based iteration.",
                ];
                ?>
                <ul class="space-y-3 mb-6">
                    <?php foreach ($bullets as $bullet): ?>
                        <li class="pl-5 text-sm md:text-base text-gray-800 relative before:content-[''] before:absolute before:left-0 before:top-[9px] before:w-[6px] before:h-[6px] before:bg-[#0B1D51] before:rounded-full">
                            <?= htmlspecialchars($bullet); ?>
                        </li>
                    <?php endforeach; ?>
                </ul>
                <div class="bg-[#EEF0FF] p-4 rounded-md mb-16">
                    <p class="text-gray-800 text-base md:text-lg leading-relaxed">
                        Every piece is designed to educate, engage, and earn trust, the real driver behind conversion.
                    </p>
                </div>
                <h2 id="framework" class="text-3xl md:text-4xl font-bold text-[#0B1D51] mb-4">
                    The AiBit Soft Framework: Content That Builds Trust, Not Noise
                </h2>
                <?php
                $framework = [
                    ["title" => "Discovery", "description" => "Audit your current content landscape and find gaps against competitors."],
                    ["title" => "Strategy Design", "description" => "Define themes, tone, and target clusters aligned with business goals."],
                    ["title" => "Production", "description" => "Create content using human expertise + AI insight for accuracy and style."],
                    ["title" => "Distribution", "description" => "Publish and promote through organic, paid, and partner channels."],
                    ["title" => "Optimization", "description" => "Track engagement metrics and update dynamically for higher ROI."],
                    ["title" => "Reporting & Learning", "description" => "Monthly visibility into content health, ranking, and conversion trends."],
                ];
                ?>
                <ul class="space-y-4 mb-8">
                    <?php foreach ($framework as $step): ?>
                        <li class="text-sm md:text-base text-gray-800">
                            <span class="font-semibold"><?= $step['title']; ?>:</span> <?= $step['description']; ?>
                        </li>
                    <?php endforeach; ?>
                </ul>
                <div class="bg-[#E6F1FF] p-5 rounded-md border border-[#BFD9FF]">
                    <p class="text-gray-800 text-base md:text-lg leading-relaxed">
                        This framework transforms content from random publishing into a strategic growth engine.
                    </p>
                </div>
            </section>

            <section id="closing">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 leading-tight font-sans">
                    Closing Thought: Growth Is a Design
                </h2>
                <div class="mt-6 space-y-6 text-base text-gray-600 leading-relaxed font-sans">
                    <p>Think of scaling not as a phase but as architecture. Growth shouldn&apos;t be a scramble, it should follow design.</p>
                    <p>When your systems, data, team, and go-to-market engines are built to scale, what once felt like incremental gains become exponential momentum.</p>
                    <p>If you&apos;re feeling stuck, plateaued, or uncertain how to scale further, the solution often lies not in more hustle, but in designing smarter systems and choosing the right partners to lift you.</p>
                    <p>When you&apos;re ready to take the next level, AiBit Soft is ready to be your growth infrastructure, the invisible engine behind sustainable scaling.</p>
                </div>
                <div class="mt-12 bg-[#F0F3FF] border border-[#D9E2FF] rounded-lg p-8 text-center">
                    <h3 class="text-xl md:text-2xl font-semibold text-gray-900 mb-4 font-sans">
                        Ready to unlock smarter scaling?
                    </h3>
                    <p class="text-sm text-gray-700 mb-6 font-sans">
                        Let AiBit Soft design the systems and strategies that turn plateaus into momentum.
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4 justify-center items-center">
                        <a href="/?page=get-proposal" class="bg-[#2B4DDF] text-white px-6 py-3 rounded-full text-sm font-medium hover:bg-[#1e3a8a] transition font-sans focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-[#2B4DDF]">
                            Get Started Today
                        </a>
                        <a href="/?page=book-an-expert" class="border border-gray-300 text-gray-800 px-6 py-3 rounded-full text-sm font-medium hover:bg-gray-100 transition font-sans focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-300 bg-white">
                            Get Free Consultation
                        </a>
                    </div>
                </div>
            </section>
        </div>

        <aside class="lg:pl-4">
            <div class="sticky top-24 border border-gray-200 rounded-lg p-5 bg-gray-50">
                <nav class="space-y-2 text-sm font-medium text-gray-700" id="resource-sidebar">
                    <?php
                    $navItems = [
                        "saturation" => "Content Saturation",
                        "roi" => "Growth Barriers",
                        "shift" => "Publishing to Performance",
                        "facts" => "New Content Facts",
                        "anatomy" => "Anatomy of Conversion",
                        "metrics" => "Success Metrics",
                        "why" => "Why AiBit Soft",
                        "framework" => "Framework",
                        "closing" => "Closing Thought",
                    ];
                    foreach ($navItems as $id => $label): ?>
                        <a href="#<?= $id; ?>" class="block rounded-md px-3 py-2 transition-colors sidebar-link" data-target="<?= $id; ?>">
                            <?= htmlspecialchars($label); ?>
                        </a>
                    <?php endforeach; ?>
                </nav>
            </div>
        </aside>
    </div>
</section>

<section class="bg-white py-2 mt-10 px-4 sm:px-6 lg:px-8">
    <div>
        <section class="py-3 sm:py-2 lg:py-0 bg-white mb-[100px]">
            <div class="max-w-7xl mx-auto px-4 md:px-8 lg:px-[80px] xl:px-4">
                <div class="text-center">
                    <h2 class="inline-block px-3 py-1 font-bold text-xl sm:text-2xl text-blue-600 mb-3 sm:mb-4 font-sora">BLOGS</h2>
                </div>
                <h2 class="text-2xl sm:text-3xl lg:text-5xl font-bold text-[#0A165E] mb-4 font-sans leading-tight text-center">
                    Learn, Grow, And Stay Ahead
                </h2>
                <p class="text-base sm:text-lg text-gray-600 mb-10 font-sora max-w-3xl mx-auto text-center">
                    Tips, guides, and trends to help your business perform better online.
                </p>
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6 mb-10">
                    <?php
                    $blogCards = [
                        ["title" => "Web Design & Development", "subtitle" => "Design that builds trust", "desc" => "Learn why design matters and how to fix an outdated site.", "image" => "/Blogs/WebsiteDevelopment.jpg", "link" => "/?page=blogs-web-design"],
                        ["title" => "Mobile Apps", "subtitle" => "Keep customers coming back", "desc" => "How mobile apps increase retention.", "image" => "/Blogs/MobileApps.jpg", "link" => "/?page=blogs-mobile-app"],
                        ["title" => "Custom AI Tools and Integration", "subtitle" => "Work smarter, scale faster", "desc" => "Discover how AI streamlines workflows and drives smarter decisions.", "image" => "/Blogs/AI.jpg", "link" => "/?page=blogs-ai-automation"],
                    ];
                    foreach ($blogCards as $card): ?>
                        <div class="bg-card text-card-foreground relative h-full flex flex-col overflow-hidden rounded-xl border border-gray-200 shadow-sm hover:shadow-md transition-shadow">
                            <div class="relative w-full h-48 sm:h-52 md:h-56">
                                <img src="<?= $card['image']; ?>" alt="<?= htmlspecialchars($card['title']); ?>" class="object-cover absolute inset-0 w-full h-full">
                            </div>
                            <div class="p-6 flex-1 flex flex-col border-t border-gray-100 text-center items-center">
                                <h3 class="text-base sm:text-lg font-semibold text-[#0A165E]"><?= htmlspecialchars($card['title']); ?></h3>
                                <p class="text-sm font-medium text-blue-600 mb-2"><?= htmlspecialchars($card['subtitle']); ?></p>
                                <p class="text-gray-600 text-sm sm:text-base mb-4"><?= htmlspecialchars($card['desc']); ?></p>
                                <div class="mt-auto">
                                    <a href="<?= $card['link']; ?>" class="inline-flex items-center justify-center text-sm font-medium bg-blue-600 hover:bg-blue-700 text-white rounded-full px-5 py-2 transition">
                                        Read More
                                        <svg xmlns="http://www.w3.org/2000/svg" class="ml-2 h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14M12 5l7 7-7 7"/>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>
    </div>
</section>

<script>
    (function() {
        const links = document.querySelectorAll('.sidebar-link');
        const sections = Array.from(links).map(link => document.getElementById(link.dataset.target));

        function setActive(id) {
            links.forEach(link => {
                if (link.dataset.target === id) {
                    link.classList.add('text-[#2B4DDF]', 'bg-blue-50', 'font-semibold');
                } else {
                    link.classList.remove('text-[#2B4DDF]', 'bg-blue-50', 'font-semibold');
                }
            });
        }

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    setActive(entry.target.id);
                }
            });
        }, {
            root: null,
            rootMargin: '-120px 0px -60% 0px',
            threshold: [0, 0.25, 0.5, 1],
        });

        sections.forEach(section => {
            if (section) observer.observe(section);
        });

        links.forEach(link => {
            link.addEventListener('click', (event) => {
                event.preventDefault();
                const target = document.getElementById(link.dataset.target || '');
                if (!target) return;
                window.scrollTo({
                    top: target.getBoundingClientRect().top + window.scrollY - 100,
                    behavior: 'smooth',
                });
            });
        });
    })();
</script>

