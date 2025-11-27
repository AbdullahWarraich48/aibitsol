<?php
$sidebar_sections = [
    ['id' => 'talent-gap', 'label' => 'Talent Gap Reality'],
    ['id' => 'market-demand', 'label' => 'Market Demand'],
    ['id' => 'traditional-hiring', 'label' => 'Why Hiring Breaks'],
    ['id' => 'staff-augmentation', 'label' => 'Staff Augmentation'],
    ['id' => 'key-advantages', 'label' => 'Key Advantages'],
    ['id' => 'metrics', 'label' => 'Metrics to Watch'],
    ['id' => 'strategies', 'label' => 'Strategies That Work'],
    ['id' => 'partner', 'label' => 'Technology Partner'],
    ['id' => 'alignment', 'label' => 'How We Align'],
    ['id' => 'conclusion', 'label' => 'Final Thought'],
];

$talent_gap = [
    'title' => 'The Talent Gap Reality in 2025',
    'description' => 'Global demand for engineers still outpaces the available workforce. 69% of companies report difficulty hiring qualified talent.',
    'bullets' => [
        'AI, cloud, and cybersecurity skill demand is growing faster than training pipelines.',
        'Average senior developer hiring cycle is ~44 days (and inching upward).',
        'Hybrid work made talent global—but fragmented and expensive.',
    ],
    'highlight' => 'Outcome: stalled sprints, delayed releases, and ballooning operational costs.',
    'image' => '/images/talent-gap.png',
];

$market_demand = [
    ['title' => 'USD 1.6T IT services market by 2027', 'desc' => 'Digital transformation keeps accelerating (Statista, 2025).'],
    ['title' => '25% projected growth in software roles', 'desc' => 'One of the fastest-growing career tracks (BLS 2024-2030).'],
    ['title' => '$127B staff augmentation market by 2028', 'desc' => 'Growing 8.2% CAGR (Grand View Research, 2025).'],
];

$traditional_hiring = [
    ['title' => 'Recruitment cycles take too long', 'desc' => 'Markets can’t wait months for approvals, interviews, and sign-on delays.'],
    ['title' => 'Geographic limitations', 'desc' => 'Local talent pools restrict access to niche expertise.'],
    ['title' => 'High attrition loops', 'desc' => 'Teams rehire more than they ship when talent churns.'],
    ['title' => 'Budget ceilings', 'desc' => 'Not every role justifies full-time payroll + benefits.'],
    ['title' => 'Upskilling lag', 'desc' => 'Training takes months; projects move weekly.'],
];

$staff_aug = [
    ['value' => '69%', 'label' => 'Companies citing hiring difficulty', 'source' => 'ManpowerGroup 2025'],
    ['value' => '44 days', 'label' => 'Average time-to-hire (senior dev)', 'source' => 'Gartner 2025'],
    ['value' => '$127B', 'label' => 'Staff augmentation market by 2028', 'source' => 'Grand View Research 2025'],
    ['value' => '30–50%', 'label' => 'Cost savings vs FTEs', 'source' => 'Deloitte 2024'],
];

$advantages = [
    ['metric' => 'Average hiring time (senior dev)', 'traditional' => '44 days', 'staff' => '5-10 days', 'source' => 'Gartner 2025'],
    ['metric' => 'Average cost savings', 'traditional' => 'Fixed overhead', 'staff' => '30-50% vs FTE', 'source' => 'Deloitte 2024'],
    ['metric' => 'Productivity ramp-up', 'traditional' => '4-6 weeks', 'staff' => '1-2 weeks', 'source' => 'McKinsey 2025'],
    ['metric' => 'Retention flexibility', 'traditional' => 'Fixed payroll', 'staff' => 'Scale on-demand', 'source' => 'PwC 2024'],
];

$metrics = [
    ['title' => 'DAU / MAU', 'desc' => 'Stickiness ratio showing habit formation.'],
    ['title' => 'Retention cohorts', 'desc' => 'Day 1, Day 7, Day 30 highlight value drop-offs.'],
    ['title' => 'Churn rate', 'desc' => 'Shows where users exit for good.'],
    ['title' => 'Session duration & frequency', 'desc' => 'How long and how often people engage.'],
    ['title' => 'Conversion events', 'desc' => 'Track onboarding completion, purchases, feature trials.'],
    ['title' => 'Cohort analysis', 'desc' => 'Group users by campaign or signup week to see behavior patterns.'],
    ['title' => 'Lifetime value', 'desc' => 'Tie monetization to retention, not vanity metrics.'],
    ['title' => 'Funnel drop-offs', 'desc' => 'Pinpoint the exact screens where attention dies.'],
];

$strategies = [
    ['stage' => 'Onboarding', 'strategy' => 'Show core value immediately; keep steps minimal with contextual hints.', 'why' => 'Users decide in seconds whether to stay.'],
    ['stage' => 'Permission requests', 'strategy' => 'Ask with context when needed, not all upfront.', 'why' => 'Reduces friction and distrust.'],
    ['stage' => 'Progressive profiling', 'strategy' => 'Collect info gradually.', 'why' => 'Keeps onboarding light.'],
    ['stage' => 'Personalization', 'strategy' => 'Use data to tailor content.', 'why' => 'People gravitate to experiences made for them.'],
    ['stage' => 'Gamification & rewards', 'strategy' => 'Badges, streaks, incentives.', 'why' => 'Encourages return visits.'],
    ['stage' => 'Push & in-app messaging', 'strategy' => 'Nudge wisely with context.', 'why' => 'Well-timed reminders boost retention.'],
    ['stage' => 'Content updates', 'strategy' => 'Ship fresh value often.', 'why' => 'Stale apps lose mindshare.'],
    ['stage' => 'Behavioral triggers', 'strategy' => 'Prompt action based on user behavior.', 'why' => 'Cues feel natural, not spammy.'],
    ['stage' => 'Feedback loops', 'strategy' => 'Collect input and act on it.', 'why' => 'Shows you listen and adapt.'],
];

$partner = [
    'left' => [
        'Performance optimization: smaller bundles, caching, fast APIs.',
        'Adaptive layouts & responsive behavior across every device.',
        'Modular architecture so new features can launch independently.',
        'Feature flagging & experimentation baked in.',
        'Continuous delivery to ship improvements weekly.',
    ],
    'right' => [
        'Smooth UI + motion so experiences feel effortless.',
        'State persistence & offline-friendly support.',
        'Analytics & logging from day one for data-driven iteration.',
        'Security & privacy controls as table stakes.',
        'Monitoring to catch issues before customers do.',
    ],
];

$principles = [
    'We start with a retention + engagement audit so fixes target the biggest levers.',
    'Design ethos is minimal, purposeful, intuitive—pretty is useless without clarity.',
    'Tracking & analytics land on day one, so every iteration is grounded in data.',
    'We build flexibility: modular code, feature toggles, CI/CD pipelines.',
    'Security, performance, privacy are non-negotiable foundations.',
    'We iterate with you—ship, learn, optimize—so the product stays alive.',
];

$conclusion = [
    'title' => 'Final Thought: Engagement Is a Promise',
    'paragraphs' => [
        'An app only matters if it keeps mattering every day. Each time a user logs in and finds something fast, relevant, and polished, you renew their trust.',
        'Most teams know where the experience feels “good enough.” Staff augmentation lets you fix those gaps without waiting for headcount.',
        'Ask yourself: where does the current flow lose its grip? Which metrics keep you up at night?',
    ],
];
?>

<!-- Hero -->
<section class="relative min-h-screen bg-gradient-to-br from-slate-50 via-blue-50 to-sky-100 overflow-hidden rounded-b-2xl">
    <div class="absolute inset-0">
        <div class="absolute top-0 right-0 w-96 h-96 bg-gradient-to-br from-blue-200/20 to-sky-200/20 rounded-full blur-3xl animate-float"></div>
        <div class="absolute bottom-0 left-0 w-80 h-80 bg-gradient-to-tr from-blue-100/30 to-sky-100/30 rounded-full blur-3xl animate-float-delayed"></div>
        <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-64 h-64 bg-gradient-to-r from-blue-200/15 to-sky-200/15 rounded-full blur-3xl animate-float-slow"></div>
    </div>

    <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20 text-center">
        <div class="mb-8 animate-fade-in-up inline-flex items-center bg-blue-100/80 backdrop-blur-sm border border-blue-200/50 rounded-full px-6 py-3 text-sm font-bold">
            <span class="w-2 h-2 bg-blue-500 rounded-full mr-3 animate-ping"></span>
            <span class="text-blue-700 font-medium">IT STAFF AUGMENTATION</span>
        </div>
        <h1 class="text-5xl md:text-7xl font-black text-slate-800 mb-8 animate-fade-in-up-delayed">
            <span class="block">Talent gaps delaying projects?</span>
            <span class="block bg-gradient-to-r from-blue-700 to-blue-600 bg-clip-text text-transparent">
                Scale your team on demand
            </span>
        </h1>
        <p class="text-xl text-gray-600 max-w-3xl mx-auto animate-fade-in-up-delayed-2">
            Access skilled professionals instantly. Bridge talent gaps, accelerate delivery, and scale without compromise.
        </p>
        <div class="mt-10 flex flex-col sm:flex-row gap-4 justify-center">
            <a href="/?page=get-proposal" class="px-6 py-3 rounded-full bg-blue-600 text-white font-semibold hover:-translate-y-0.5 transition shadow-lg shadow-blue-500/30">
                Build My Squad
            </a>
            <a href="/?page=book-an-expert" class="px-6 py-3 rounded-full border-2 border-blue-600 text-blue-700 font-semibold hover:bg-blue-50 transition">
                Talk with Delivery Lead
            </a>
        </div>
    </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', function () {
    const OFFSET = 80;
    const navLinks = document.querySelectorAll('.js-nav-link');
    const sections = document.querySelectorAll('article[id]');
    const activeClasses = ['bg-primary/10', 'text-primary', 'font-semibold'];

    function setActiveLink(sectionId) {
        navLinks.forEach(function (link) {
            const isActive = link.dataset.section === sectionId;
            activeClasses.forEach(cls => link.classList.toggle(cls, isActive));
        });
    }

    document.querySelectorAll('a[href^="#"]').forEach(function (link) {
        link.addEventListener('click', function (event) {
            const targetId = this.getAttribute('href').substring(1);
            const target = document.getElementById(targetId);
            if (!target) return;
            event.preventDefault();
            const rect = target.getBoundingClientRect();
            const scrollTop = window.pageYOffset || document.documentElement.scrollTop;
            window.scrollTo({
                top: rect.top + scrollTop - OFFSET,
                behavior: 'smooth'
            });
            setActiveLink(targetId);
        });
    });

    if (sections.length && navLinks.length) {
        const observer = new IntersectionObserver(
            function (entries) {
                entries.forEach(function (entry) {
                    if (entry.isIntersecting) {
                        setActiveLink(entry.target.id);
                    }
                });
            },
            {
                rootMargin: '-40% 0px -40% 0px',
                threshold: 0.3
            }
        );

        sections.forEach(function (section) {
            observer.observe(section);
        });

        setActiveLink(sections[0].id);
    }
});
</script>

<!-- Body -->
<section class="bg-white py-16 px-4 sm:px-6 lg:px-8">
    <div class="max-w-6xl mx-auto grid lg:grid-cols-[2fr_1fr] gap-12">
        <div class="space-y-16">
            <article id="talent-gap" class="space-y-6">
                <p class="text-sm font-semibold text-primary uppercase tracking-widest">Section 01</p>
                <header>
                    <h2 class="text-3xl md:text-4xl font-bold text-slate-900"><?= htmlspecialchars($talent_gap['title']); ?></h2>
                    <p class="mt-4 text-slate-600 text-lg leading-relaxed"><?= htmlspecialchars($talent_gap['description']); ?></p>
                </header>
                <div class="grid gap-8 lg:grid-cols-[1.1fr_0.9fr]">
                    <div>
                        <ul class="space-y-3 text-slate-700">
                            <?php foreach ($talent_gap['bullets'] as $bullet): ?>
                                <li class="flex gap-3"><span class="text-primary font-bold mt-1">•</span><?= htmlspecialchars($bullet); ?></li>
                            <?php endforeach; ?>
                        </ul>
                        <div class="mt-8 bg-blue-50 border border-blue-100 rounded-2xl p-5 text-blue-900 font-semibold">
                            <?= htmlspecialchars($talent_gap['highlight']); ?>
                        </div>
                    </div>
                    <div class="rounded-3xl overflow-hidden shadow-2xl">
                        <img src="<?= htmlspecialchars($talent_gap['image']); ?>" alt="Talent gap illustration" class="w-full h-full object-cover">
                    </div>
                </div>
            </article>

            <article id="market-demand" class="space-y-6">
                <p class="text-sm font-semibold text-primary uppercase tracking-widest">Section 02</p>
                <h2 class="text-3xl md:text-4xl font-bold text-slate-900">The market signals are loud</h2>
                <p class="text-slate-600">Independent research shows how sharp today’s demand has become.</p>
                <div class="space-y-6">
                    <?php foreach ($market_demand as $item): ?>
                        <div class="flex gap-4">
                            <div class="w-1 bg-primary rounded-full"></div>
                            <div>
                                <h3 class="text-xl font-semibold text-slate-900"><?= htmlspecialchars($item['title']); ?></h3>
                                <p class="text-slate-600"><?= htmlspecialchars($item['desc']); ?></p>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </article>

            <article id="traditional-hiring" class="space-y-6">
                <p class="text-sm font-semibold text-primary uppercase tracking-widest">Section 03</p>
                <h2 class="text-3xl font-bold text-slate-900">Why traditional hiring struggles</h2>
                <div class="grid md:grid-cols-2 gap-6">
                    <?php foreach ($traditional_hiring as $pain): ?>
                        <div class="p-6 border border-slate-200 rounded-2xl shadow-sm bg-white/80">
                            <h3 class="text-xl font-semibold text-slate-900"><?= htmlspecialchars($pain['title']); ?></h3>
                            <p class="mt-2 text-slate-600"><?= htmlspecialchars($pain['desc']); ?></p>
                        </div>
                    <?php endforeach; ?>
                </div>
                <div class="bg-blue-50 border border-blue-100 rounded-2xl p-4 text-blue-900">
                    The old model of “hire everyone full-time” no longer fits agile roadmaps.
                </div>
            </article>

            <article id="staff-augmentation" class="space-y-6">
                <p class="text-sm font-semibold text-primary uppercase tracking-widest">Section 04</p>
                <h2 class="text-3xl md:text-4xl font-bold text-slate-900">What staff augmentation really is</h2>
                <p class="text-slate-600 max-w-3xl">Extend in-house squads with on-demand experts while you keep roadmap control. We provide vetted people who slot into your ceremonies, tools, and culture.</p>
                <div class="grid sm:grid-cols-2 gap-5">
                    <?php foreach ($staff_aug as $stat): ?>
                        <div class="rounded-2xl border border-slate-200 p-6">
                            <p class="text-4xl font-black text-primary"><?= htmlspecialchars($stat['value']); ?></p>
                            <p class="text-slate-700 mt-2"><?= htmlspecialchars($stat['label']); ?></p>
                            <p class="text-xs text-slate-500 mt-1"><?= htmlspecialchars($stat['source']); ?></p>
                        </div>
                    <?php endforeach; ?>
                </div>
                <div class="bg-slate-900 text-white rounded-2xl p-5">
                    Unlike outsourcing, you still run the roadmap. Your partner supplies on-demand talent to fill gaps without slowing delivery.
                </div>
            </article>

            <article id="key-advantages" class="space-y-6">
                <h2 class="text-3xl font-bold text-slate-900">Key advantages you can measure</h2>
                <p class="text-slate-600">Traditional hiring vs. staff augmentation at a glance:</p>
                <div class="overflow-x-auto rounded-xl border border-slate-200 shadow-sm">
                    <table class="w-full text-left text-sm">
                        <thead class="bg-slate-50">
                            <tr>
                                <th class="px-4 py-3">Metric</th>
                                <th class="px-4 py-3">Traditional Hiring</th>
                                <th class="px-4 py-3">Staff Augmentation</th>
                                <th class="px-4 py-3">Source</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($advantages as $row): ?>
                                <tr class="border-t border-slate-100">
                                    <td class="px-4 py-3 font-semibold text-slate-900"><?= htmlspecialchars($row['metric']); ?></td>
                                    <td class="px-4 py-3 text-slate-600"><?= htmlspecialchars($row['traditional']); ?></td>
                                    <td class="px-4 py-3 text-slate-600"><?= htmlspecialchars($row['staff']); ?></td>
                                    <td class="px-4 py-3 text-slate-500 text-xs"><?= htmlspecialchars($row['source']); ?></td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
                <div class="bg-blue-50 border border-blue-100 rounded-2xl p-4 text-blue-900">
                    These differences directly impact delivery speed, quality, and profitability.
                </div>
            </article>

            <article id="metrics" class="space-y-6">
                <h2 class="text-3xl font-bold text-slate-900">Metrics to watch & what they reveal</h2>
                <p class="text-slate-600">Track a focused set to know if your strategy is working.</p>
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
                    <?php foreach ($metrics as $metric): ?>
                        <div class="rounded-2xl bg-white border border-slate-200 p-5 shadow-sm hover:shadow-md transition">
                            <h3 class="font-semibold text-slate-900"><?= htmlspecialchars($metric['title']); ?></h3>
                            <p class="text-slate-600 text-sm mt-1"><?= htmlspecialchars($metric['desc']); ?></p>
                        </div>
                    <?php endforeach; ?>
                </div>
                <div class="bg-sky-50 border border-sky-100 rounded-2xl p-4 text-slate-700 text-sm">
                    These metrics tell you where the app succeeds, where it fails, and where to prioritize fixes.
                </div>
            </article>

            <article id="strategies" class="space-y-6">
                <h2 class="text-3xl font-bold text-slate-900">Strategies that work: from onboarding to habit</h2>
                <p class="text-slate-600">Stage → Strategy → Why it works.</p>
                <div class="overflow-x-auto rounded-2xl border border-slate-200 shadow-sm">
                    <table class="w-full text-left text-sm">
                        <thead class="bg-indigo-50">
                            <tr>
                                <th class="px-4 py-3">Stage</th>
                                <th class="px-4 py-3">Strategy</th>
                                <th class="px-4 py-3">Why it works</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($strategies as $index => $row): ?>
                                <tr class="<?= $index % 2 === 0 ? 'bg-white' : 'bg-slate-50'; ?>">
                                    <td class="px-4 py-3 font-semibold text-slate-900"><?= htmlspecialchars($row['stage']); ?></td>
                                    <td class="px-4 py-3 text-slate-600"><?= htmlspecialchars($row['strategy']); ?></td>
                                    <td class="px-4 py-3 text-slate-600"><?= htmlspecialchars($row['why']); ?></td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
                <div class="bg-rose-50 border border-rose-100 rounded-2xl p-4 text-rose-900 text-sm font-semibold">
                    Implementing even a handful of these tactics can move your retention curve upward.
                </div>
            </article>

            <article id="partner" class="space-y-6">
                <h2 class="text-3xl font-bold text-slate-900">What your tech & design stack must do</h2>
                <p class="text-slate-600">To keep augmented squads productive, the product foundation has to be healthy.</p>
                <div class="grid md:grid-cols-2 gap-8">
                    <ul class="space-y-4">
                        <?php foreach ($partner['left'] as $item): ?>
                            <li class="border-l-4 border-primary pl-4 text-slate-800"><?= htmlspecialchars($item); ?></li>
                        <?php endforeach; ?>
                    </ul>
                    <ul class="space-y-4">
                        <?php foreach ($partner['right'] as $item): ?>
                            <li class="border-l-4 border-primary pl-4 text-slate-800"><?= htmlspecialchars($item); ?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
                <div class="bg-blue-50 border border-blue-100 rounded-2xl p-4 text-blue-900">
                    Pro tip: implementing even a handful of these fundamentals moves retention curves upward.
                </div>
            </article>

            <article id="alignment" class="space-y-6">
                <h2 class="text-3xl font-bold text-slate-900">How AiBit Soft aligns with these principles</h2>
                <p class="text-slate-600">Here’s how we reinforce confidence without heavy selling.</p>
                <ul class="space-y-4 text-slate-700">
                    <?php foreach ($principles as $item): ?>
                        <li class="flex gap-3"><span class="text-slate-900 font-bold">•</span><?= htmlspecialchars($item); ?></li>
                    <?php endforeach; ?>
                </ul>
                <div class="bg-sky-500 text-white rounded-2xl p-5 font-medium">
                    When you partner with us, you’re not just getting “extra hands”—you’re investing in outcomes engineered to move metrics.
                </div>
            </article>

            <article id="conclusion" class="space-y-6">
                <h2 class="text-3xl md:text-4xl font-bold text-slate-900"><?= htmlspecialchars($conclusion['title']); ?></h2>
                <div class="space-y-4">
                    <?php foreach ($conclusion['paragraphs'] as $paragraph): ?>
                        <p class="text-slate-700 text-lg leading-relaxed"><?= htmlspecialchars($paragraph); ?></p>
                    <?php endforeach; ?>
                </div>
                <div class="bg-gradient-to-br from-slate-900 to-indigo-900 text-white rounded-3xl p-8 text-center space-y-4">
                    <h3 class="text-2xl font-semibold mb-3">Ready to scale your team without slowing the roadmap?</h3>
                    <p class="text-white/80 mb-6">Send your role requirements, stack, and timeline. We’ll respond with vetted profiles and a ramp plan within 48 hours.</p>
                    <div class="flex flex-col sm:flex-row gap-4 justify-center">
                        <a href="/?page=get-proposal" class="px-8 py-4 rounded-full bg-white text-slate-900 font-semibold hover:bg-slate-100 transition">
                            Get Started Today
                        </a>
                        <a href="/?page=book-an-expert" class="px-8 py-4 rounded-full border-2 border-white text-white font-semibold hover:bg-white/10 transition">
                            Get Free Consultation
                        </a>
                    </div>
                </div>
            </article>
        </div>

        <aside class="space-y-6 sticky top-24 h-fit">
            <div class="border border-slate-200 rounded-2xl p-5 bg-white shadow-sm">
                <p class="text-sm font-semibold text-primary uppercase tracking-widest mb-3">On this page</p>
                <nav class="space-y-2 text-sm text-slate-700">
                    <?php foreach ($sidebar_sections as $section): ?>
                        <a
                            href="#<?= htmlspecialchars($section['id']); ?>"
                            class="block px-3 py-2 rounded-lg hover:bg-primary/10 js-nav-link"
                            data-section="<?= htmlspecialchars($section['id']); ?>"
                        >
                            <?= htmlspecialchars($section['label']); ?>
                        </a>
                    <?php endforeach; ?>
                </nav>
            </div>
            <div class="border border-slate-200 rounded-2xl p-5 bg-slate-50">
                <p class="text-sm text-slate-600">Need engineers this month? Send us your stack and timeline—we’ll send curated profiles within 48 hours.</p>
                <div class="mt-5 space-y-3">
                    <a href="/?page=get-proposal" class="block text-center w-full px-4 py-3 rounded-full bg-primary text-white font-semibold hover:bg-primary/90 transition">
                        Request Shortlist
                    </a>
                    <a href="/?page=book-an-expert" class="block text-center w-full px-4 py-3 rounded-full border border-primary text-primary font-semibold hover:bg-primary/10 transition">
                        Meet Delivery Lead
                    </a>
                </div>
            </div>
        </aside>
    </div>
</section>

