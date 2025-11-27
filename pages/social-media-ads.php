<?php
$insight_tabs = [
    'Statistics' => [
        ['value' => '$276.7B', 'label' => 'Social media ad spend projected for 2025.'],
        ['value' => '58%', 'label' => 'Consumers discover new businesses via social media.'],
        ['value' => '2.50% / 1.51%', 'label' => 'Facebook CTR averages for leads vs traffic.'],
        ['value' => '76%', 'label' => 'Share of consumers recommending brands after great social experiences.'],
    ],
    'Problems' => [
        ['title' => 'Wasted Budget', 'copy' => 'Weak ads spend money without generating sales.'],
        ['title' => 'Missed Leads', 'copy' => 'Potential customers don’t see your products or offers.'],
        ['title' => 'Low Conversions', 'copy' => 'Poor ad design, copy, or targeting prevents actions.'],
        ['title' => 'Competitor Advantage', 'copy' => 'Rivals capture market share and brand recognition.'],
    ],
    'Solutions' => [
        ['title' => 'Precise Targeting', 'copy' => 'Reach the right audience by age, location, interests, and behavior.'],
        ['title' => 'Creative Ad Design', 'copy' => 'Eye-catching visuals and videos that grab attention.'],
        ['title' => 'Compelling Copywriting', 'copy' => 'Clear, action-driven messages that convert.'],
        ['title' => 'Smart Optimization', 'copy' => 'Monitor clicks, leads, and conversions to continuously improve.'],
    ],
];
$hero_highlights = [
    ['label' => 'Build · Grow · Scale', 'copy' => 'Strategy, creative, and optimization handled end to end.', 'icon' => '/images/growth.svg'],
    ['label' => 'Platforms', 'copy' => 'Facebook · Instagram · TikTok · LinkedIn · YouTube.', 'icon' => '/images/social.svg'],
    ['label' => 'What you get', 'copy' => 'Precise targeting, creative engine, budget control, and reporting.', 'icon' => '/images/precise_targeting.svg'],
];
?>

<!-- Section: Hero -->
<section class="relative min-h-[70vh] flex items-center overflow-hidden bg-gradient-to-b from-slate-50 via-sky-50 to-white">
    <div class="absolute inset-0 opacity-60 [background:radial-gradient(60rem_30rem_at_10%_20%,rgba(14,165,233,0.12),transparent_60%),radial-gradient(40rem_20rem_at_90%_10%,rgba(99,102,241,0.10),transparent_60%),radial-gradient(50rem_25rem_at_50%_100%,rgba(59,130,246,0.10),transparent_60%)]"></div>
    <div class="pointer-events-none absolute -top-24 -left-24 w-80 h-80 rounded-full blur-3xl bg-sky-300/20"></div>
    <div class="pointer-events-none absolute -bottom-24 -right-24 w-96 h-96 rounded-full blur-3xl bg-indigo-300/20"></div>
    <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-24 w-full">
        <div class="text-center">
            <div id="wtw-hero-slider" class="relative max-w-5xl mx-auto">
                <div class="wtw-slide transition-opacity duration-700 ease-out opacity-100">
                    <span class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-white/70 border border-blue-200 text-primary text-sm font-semibold shadow-sm">
                        <span class="w-2 h-2 rounded-full bg-primary"></span>
                        Social Media Ads
                    </span>
                    <h1 class="mt-5 text-4xl md:text-6xl font-black leading-tight">Maximize <span class="text-gradient">reach</span> with targeted ads</h1>
                    <p class="mt-6 text-lg md:text-xl text-slate-600 max-w-3xl mx-auto">Connect with your ideal audience through precise, data-driven campaigns across the platforms they use every day.</p>
                </div>
                <div class="wtw-slide transition-opacity duration-700 ease-out opacity-0 absolute inset-0 pointer-events-none">
                    <span class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-white/70 border border-blue-200 text-primary text-sm font-semibold shadow-sm">
                        <span class="w-2 h-2 rounded-full bg-primary"></span>
                        Creative & Copy
                    </span>
                    <h1 class="mt-5 text-4xl md:text-6xl font-black leading-tight whitespace-normal md:whitespace-nowrap">Thumb-stopping <span class="text-gradient">creative</span> that converts</h1>
                    <p class="mt-6 text-lg md:text-xl text-slate-600 max-w-3xl mx-auto">Eye-catching visuals, persuasive copy, and constant experimentation that keep engagement high.</p>
                </div>
                <div class="wtw-slide transition-opacity duration-700 ease-out opacity-0 absolute inset-0 pointer-events-none">
                    <span class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-white/70 border border-blue-200 text-primary text-sm font-semibold shadow-sm">
                        <span class="w-2 h-2 rounded-full bg-primary"></span>
                        Optimization
                    </span>
                    <h1 class="mt-5 text-4xl md:text-6xl font-black leading-tight">Built for <span class="text-gradient">scale</span> and ROI</h1>
                    <p class="mt-6 text-lg md:text-xl text-slate-600 max-w-3xl mx-auto">Smart budget management, attribution, and optimization turn ad spend into measurable growth.</p>
                </div>
                <div class="mt-6 flex items-center justify-center gap-2">
                    <button class="wtw-dot h-2.5 w-2.5 rounded-full bg-blue-600"></button>
                    <button class="wtw-dot h-2.5 w-2.5 rounded-full bg-blue-200"></button>
                    <button class="wtw-dot h-2.5 w-2.5 rounded-full bg-blue-200"></button>
                </div>
            </div>
            <div class="mt-12">
                <div class="relative max-w-7xl mx-auto">
                    <div class="absolute -inset-0.5 bg-[conic-gradient(from_0deg,theme(colors.blue.500),theme(colors.indigo.500),theme(colors.purple.500),theme(colors.blue.500))] rounded-3xl blur opacity-30"></div>
                    <div id="wtw-insights" class="relative rounded-3xl bg-white/85 backdrop-blur-xl border border-slate-200 shadow-2xl overflow-hidden">
                        <div class="px-6 md:px-8 pt-6 md:pt-8 text-center">
                            <h3 class="text-lg md:text-xl font-extrabold text-slate-900">Insights</h3>
                            <p class="text-slate-600 text-sm">Statistics · Problems · Solutions</p>
                        </div>
                        <div class="flex items-center justify-center gap-2 px-3 md:px-6 py-3 md:py-4 border-y border-slate-200" role="tablist" aria-label="Insights tabs">
                            <?php $ti = 0; foreach (array_keys($insight_tabs) as $label): ?>
                                <button type="button" class="wtw-info-tab px-4 py-2 rounded-full text-sm font-semibold transition-colors <?= $ti === 0 ? 'bg-primary text-white' : 'text-primary hover:bg-primary/10' ?>" role="tab" aria-selected="<?= $ti === 0 ? 'true' : 'false' ?>"><?= htmlspecialchars($label) ?></button>
                            <?php $ti++; endforeach; ?>
                        </div>
                        <div class="p-6 md:p-8">
                            <?php $pi = 0; foreach ($insight_tabs as $label => $content): ?>
                                <div class="wtw-info-panel <?= $pi === 0 ? '' : 'hidden' ?>">
                                    <?php if ($label === 'Statistics'): ?>
                                        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 md:gap-6">
                                            <?php foreach ($content as $card): ?>
                                                <div class="group relative">
                                                    <div class="absolute inset-0 rounded-2xl bg-gradient-to-br from-sky-300/30 to-blue-300/20 blur-xl opacity-0 group-hover:opacity-100 transition"></div>
                                                    <div class="relative p-6 rounded-2xl bg-white/85 backdrop-blur border border-slate-200 text-center shadow-sm">
                                                        <div class="text-3xl font-black text-primary"><?= htmlspecialchars($card['value']) ?></div>
                                                        <p class="mt-2 text-sm text-slate-600"><?= htmlspecialchars($card['label']) ?></p>
                                                    </div>
                                                </div>
                                            <?php endforeach; ?>
                                        </div>
                                    <?php else: ?>
                                        <div class="grid grid-cols-1 md:grid-cols-3 gap-4 md:gap-6">
                                            <?php foreach ($content as $card): ?>
                                                <div class="group relative">
                                                    <div class="absolute inset-0 rounded-2xl bg-gradient-to-br from-indigo-300/30 to-purple-300/20 blur-xl opacity-0 group-hover:opacity-100 transition"></div>
                                                    <div class="relative p-6 rounded-2xl bg-white/80 backdrop-blur border border-slate-200 shadow-sm">
                                                        <h3 class="font-semibold text-slate-900"><?= htmlspecialchars($card['title']) ?></h3>
                                                        <p class="text-slate-600 text-sm mt-2"><?= htmlspecialchars($card['copy']) ?></p>
                                                    </div>
                                                </div>
                                            <?php endforeach; ?>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            <?php $pi++; endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="sr-only">Source: https://aibitsol.com/Social-Media-Ads/</div>
</section>

<!-- Missing: Contact -->

<!-- Section: Process | Paid Social Operating System -->
<section class="relative bg-white section-padding overflow-hidden">
    <div class="absolute inset-0 pointer-events-none opacity-70 [background:radial-gradient(60rem_30rem_at_0%_0%,rgba(14,165,233,0.08),transparent_60%),radial-gradient(40rem_20rem_at_100%_10%,rgba(99,102,241,0.08),transparent_60%),radial-gradient(50rem_25rem_at_50%_100%,rgba(59,130,246,0.07),transparent_60%)]"></div>
    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 items-center">
            <div class="lg:col-span-6">
                <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-white/70 border border-blue-200 text-primary text-sm font-semibold shadow-sm mb-4">
                    <span class="w-2 h-2 rounded-full bg-primary"></span>
                    Paid Social Operating System
                </div>
                <h2 class="text-3xl md:text-5xl font-extrabold leading-tight text-slate-900">Launch ads that feel native—and convert</h2>
                <p class="text-slate-600 text-lg mt-4">Plug in a team that handles research, creative, testing, and reporting so every campaign scales with confidence.</p>
                <div class="mt-6 flex flex-col sm:flex-row gap-4">
                    <a href="/?page=get-proposal" class="px-6 py-3 rounded-full font-semibold bg-primary text-white hover:opacity-90 transition shadow">Plan My Campaigns</a>
                    <a href="/?page=book-an-expert" class="px-6 py-3 rounded-full font-semibold border border-primary text-primary hover:bg-primary hover:text-white transition">Book an Expert</a>
                </div>
                <div class="mt-8 grid grid-cols-2 gap-4">
                    <div class="flex items-center gap-3 text-slate-700">
                        <span class="inline-block h-2 w-2 rounded-full bg-emerald-400"></span>
                        <span class="font-medium">Precise targeting</span>
                    </div>
                    <div class="flex items-center gap-3 text-slate-700">
                        <span class="inline-block h-2 w-2 rounded-full bg-sky-400"></span>
                        <span class="font-medium">Creative systems</span>
                    </div>
                    <div class="flex items-center gap-3 text-slate-700">
                        <span class="inline-block h-2 w-2 rounded-full bg-indigo-400"></span>
                        <span class="font-medium">Always-on testing</span>
                    </div>
                    <div class="flex items-center gap-3 text-slate-700">
                        <span class="inline-block h-2 w-2 rounded-full bg-purple-400"></span>
                        <span class="font-medium">Full-funnel reporting</span>
                    </div>
                </div>
            </div>
            <div class="lg:col-span-6">
                <?php
                    $playbook_cards = [
                        ['title' => 'Audience Intelligence', 'copy' => 'Layer demographics, interests, lookalikes, and intent data to focus budgets where returns are highest.', 'icon' => '/images/precise_targeting.svg', 'gradient' => 'from-sky-500/15 to-blue-500/10'],
                        ['title' => 'Creative Engine', 'copy' => 'Feed-native image, video, and UGC concepts refreshed weekly to keep thumb stops high.', 'icon' => '/images/creative_ad_design.svg', 'gradient' => 'from-indigo-500/15 to-purple-500/10'],
                        ['title' => 'Optimization Routines', 'copy' => 'Structured testing, pacing, and bid strategies that protect ROAS while you scale.', 'icon' => '/images/growth_focused.svg', 'gradient' => 'from-cyan-500/15 to-emerald-500/10'],
                        ['title' => 'Measurement & Reporting', 'copy' => 'Dashboards that tie spend to pipeline with channel, creative, and audience insights.', 'icon' => '/images/growth_focused.svg', 'gradient' => 'from-rose-500/15 to-amber-500/10'],
                    ];
                ?>
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <?php foreach ($playbook_cards as $card): ?>
                        <div class="group relative">
                            <div class="absolute inset-0 bg-gradient-to-br <?= $card['gradient'] ?> rounded-2xl blur-xl opacity-0 group-hover:opacity-100 transition"></div>
                            <div class="relative p-6 rounded-2xl bg-white/85 backdrop-blur border border-slate-200 shadow-sm hover:shadow-md transition">
                                <div class="h-12 w-12 rounded-xl bg-slate-100 border border-slate-200 flex items-center justify-center">
                                    <img src="<?= htmlspecialchars($card['icon']) ?>" alt="<?= htmlspecialchars($card['title']) ?>" class="h-7 w-7"/>
                                </div>
                                <h4 class="mt-4 font-semibold text-slate-900"><?= htmlspecialchars($card['title']) ?></h4>
                                <p class="text-slate-600 text-sm mt-1"><?= htmlspecialchars($card['copy']) ?></p>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Section: CTA | Ready to Scale Ads -->
<section class="bg-white section-padding">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="bg-gradient-to-br from-blue-600 to-indigo-600 rounded-3xl p-8 md:p-12 text-white text-center shadow-xl">
            <h2 class="text-3xl md:text-4xl font-extrabold">Ready to Stop Wasting Ad Spend?</h2>
            <p class="mt-4 text-lg md:text-xl text-blue-100 max-w-3xl mx-auto">Get a paid social engine that delivers qualified traffic, leads, and revenue every week.</p>
            <div class="mt-8 flex flex-col sm:flex-row gap-4 justify-center">
                <a href="/?page=book-an-expert" class="bg-white text-blue-700 px-6 py-3 rounded-full font-semibold hover:bg-blue-50 transition shadow">Get an Expert Appointment</a>
                <a href="/?page=get-proposal" class="bg-white/10 text-white border border-white/30 px-6 py-3 rounded-full font-semibold hover:bg-white/15 transition">Get a Proposal</a>
            </div>
        </div>
    </div>
</section>


<!-- Section: Challenges -->
<?php
$challenges = [
    ['title' => 'Wasted Budget', 'copy' => 'Weak ads spend money without generating sales.'],
    ['title' => 'Missed Leads', 'copy' => 'Potential customers don’t see your products or offers.'],
    ['title' => 'Low Conversions', 'copy' => 'Poor ad design, copy, or targeting prevents actions.'],
    ['title' => 'Competitor Advantage', 'copy' => 'Rivals capture market share and brand recognition.'],
    ['title' => 'Lack of Optimization', 'copy' => 'Without monitoring and improving, mistakes repeat.'],
    ['title' => 'Weak Engagement', 'copy' => 'Ads fail to spark interaction, leaving customers unconnected.'],
];
?>
<section class="bg-slate-900 text-white section-padding">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="max-w-3xl">
            <p class="text-sm font-semibold uppercase tracking-[0.2em] text-sky-300">Challenges</p>
            <h2 class="mt-4 text-3xl md:text-5xl font-bold">How Businesses Lose Revenue</h2>
            <p class="mt-4 text-blue-100">Avoid these pitfalls with smart, optimized marketing that drives real results.</p>
        </div>
        <div class="mt-10 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <?php foreach ($challenges as $challenge): ?>
                <div class="p-6 rounded-3xl bg-white/5 border border-white/10 backdrop-blur shadow-lg">
                    <h3 class="text-xl font-semibold"><?= htmlspecialchars($challenge['title']) ?></h3>
                    <p class="mt-3 text-blue-100"><?= htmlspecialchars($challenge['copy']) ?></p>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- Section: Solutions | Delivery Pillars -->
<section class="bg-white section-padding">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-3xl mx-auto mb-10">
            <p class="text-sm font-semibold uppercase tracking-[0.3em] text-primary">How We Deliver</p>
            <h2 class="text-3xl md:text-5xl font-bold text-slate-900 mt-3">The Building Blocks of Winning Social Campaigns</h2>
            <p class="mt-4 text-slate-600 text-lg">From the strategy foundation to the platforms and reporting, every component is designed to feel cohesive and results-focused.</p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <?php foreach ($hero_highlights as $highlight): ?>
                <div class="group relative h-full">
                    <div class="absolute inset-0 rounded-3xl bg-gradient-to-br from-sky-200/40 to-indigo-200/20 blur opacity-0 group-hover:opacity-100 transition"></div>
                    <div class="relative h-full p-5 rounded-3xl bg-white/95 border border-slate-200 shadow-sm hover:shadow-md transition">
                        <div class="flex items-start gap-3">
                            <div class="flex-shrink-0 h-11 w-11 rounded-2xl bg-slate-100 border border-slate-200 flex items-center justify-center shadow-sm">
                                <img src="<?= htmlspecialchars($highlight['icon']) ?>" alt="<?= htmlspecialchars($highlight['label']) ?>" class="h-7 w-7 object-contain">
                            </div>
                            <div>
                                <p class="text-[11px] font-semibold uppercase tracking-[0.18em] text-primary"><?= htmlspecialchars($highlight['label']) ?></p>
                                <p class="mt-1 text-slate-600 text-sm leading-relaxed"><?= htmlspecialchars($highlight['copy']) ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- Section: Solutions | AiBit Soft Social Media Ads -->
<?php
$solutions = [
    ['title' => 'Precise Targeting', 'copy' => 'Reach the right audience by age, location, and interests.', 'icon' => '/images/precise_targeting.svg'],
    ['title' => 'Creative Ad Design', 'copy' => 'Eye-catching visuals and videos that grab attention.', 'icon' => '/images/creative_ad_design.svg'],
    ['title' => 'Compelling Copywriting', 'copy' => 'Clear, action-driven messages that convert.', 'icon' => '/images/compelling_copywriting.svg'],
    ['title' => 'Smart Budget Management', 'copy' => 'Spend smarter with optimized budgets that deliver higher ROI.', 'icon' => '/images/smart_budget_management.svg'],
    ['title' => 'Performance Tracking & Optimization', 'copy' => 'Monitor clicks, leads, and conversions to continuously improve results.', 'icon' => '/images/growth_focused.svg'],
];
?>
<section class="bg-slate-50 section-padding">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 items-center">
            <div>
                <p class="text-primary font-semibold mb-2 tracking-[0.35em] uppercase">Custom Solutions</p>
                <h2 class="text-3xl md:text-5xl font-bold text-gray-900 mb-4">AiBit Soft · Social Media Ads</h2>
                <p class="text-gray-600 text-lg mb-6">AiBit Soft helps businesses grow through powerful social media advertising across platforms like Facebook, Instagram, TikTok, and LinkedIn. Our service covers everything you need for results-driven campaigns.</p>
                <div class="flex flex-wrap gap-3">
                    <span class="px-4 py-2 rounded-full bg-accent text-secondary text-sm font-semibold shadow-sm">Meta Suite</span>
                    <span class="px-4 py-2 rounded-full bg-accent text-secondary text-sm font-semibold shadow-sm">TikTok Ads</span>
                    <span class="px-4 py-2 rounded-full bg-accent text-secondary text-sm font-semibold shadow-sm">LinkedIn</span>
                    <span class="px-4 py-2 rounded-full bg-accent text-secondary text-sm font-semibold shadow-sm">YouTube</span>
                </div>
                <div class="mt-8 flex flex-col sm:flex-row gap-4">
                    <a href="/?page=get-proposal" class="bg-primary text-white px-6 py-3 rounded-full font-semibold hover:opacity-90 transition shadow-md">Get Started Today</a>
                    <a href="/?page=book-an-expert" class="border-2 border-primary text-primary px-6 py-3 rounded-full font-semibold hover:bg-primary hover:text-white transition">Book an Expert</a>
                </div>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                <?php foreach ($solutions as $solution): ?>
                    <div class="group relative">
                        <div class="absolute inset-0 bg-gradient-to-br from-blue-500/10 to-sky-500/10 rounded-2xl blur-xl opacity-0 group-hover:opacity-100 transition"></div>
                        <div class="relative p-6 bg-white/80 backdrop-blur rounded-2xl text-left border border-slate-200 shadow-sm hover:shadow-md transition hover:-translate-y-1">
                            <div class="flex items-start gap-4">
                                <div class="h-12 w-12 rounded-xl bg-slate-100 flex items-center justify-center shadow-sm">
                                    <img src="<?= htmlspecialchars($solution['icon']) ?>" alt="<?= htmlspecialchars($solution['title']) ?>" class="h-7 w-7">
                                </div>
                                <div>
                                    <h3 class="text-lg font-semibold text-slate-900"><?= htmlspecialchars($solution['title']) ?></h3>
                                    <p class="text-sm text-gray-600 mt-1"><?= htmlspecialchars($solution['copy']) ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>

<!-- Section: Benefits -->
<?php
$benefits = [
    ['title' => 'Increased Brand Visibility', 'copy' => 'Get your brand in front of more people, faster.'],
    ['title' => 'More Leads & Sales', 'copy' => 'Generate new enquiries and sales you’d miss without ads.'],
    ['title' => 'Accelerated Growth', 'copy' => 'Scale quicker than relying only on organic reach.'],
    ['title' => 'Smarter Insights', 'copy' => 'Test audiences, messages, and creatives to see what works best.'],
    ['title' => 'Clear ROI Tracking', 'copy' => 'Track results in real time—know what is working and stop wasting money.'],
    ['title' => 'Precise Targeting', 'copy' => 'Reach the right audience by age, location, interests, and behavior.'],
    ['title' => 'Cost-Effective Marketing', 'copy' => 'Spend smarter with optimized budgets that deliver higher ROI.'],
    ['title' => 'Scalable Campaigns', 'copy' => 'Easily increase ad spend when you find a winning strategy.'],
    ['title' => 'Stronger Customer Connections', 'copy' => 'Stay top-of-mind and build trust with consistent ad presence.'],
];
?>
<section class="bg-gray-50 section-padding">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <h2 class="text-3xl md:text-5xl font-bold text-gray-900">Immediate Benefits Of Our Service</h2>
            <p class="mt-4 text-lg text-gray-600">Turn clicks into customers with ads that deliver instant visibility, leads, and measurable growth.</p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <?php foreach ($benefits as $benefit): ?>
                <div class="p-6 rounded-2xl bg-white/90 border border-slate-200 shadow-sm hover:shadow-md transition">
                    <h3 class="text-lg font-semibold text-slate-900"><?= htmlspecialchars($benefit['title']) ?></h3>
                    <p class="mt-2 text-slate-600 text-sm"><?= htmlspecialchars($benefit['copy']) ?></p>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- Section: Proof | Cost of Poor Social Media Advertising -->
<section class="relative bg-gradient-to-br from-slate-900 via-blue-900 to-slate-800 text-white section-padding overflow-hidden">
    <div class="absolute inset-0 pointer-events-none opacity-30 [background:radial-gradient(40rem_20rem_at_10%_10%,rgba(59,130,246,0.25),transparent_60%),radial-gradient(30rem_15rem_at_90%_20%,rgba(99,102,241,0.22),transparent_60%)]"></div>
    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-4xl mx-auto mb-12">
            <p class="text-sm font-semibold tracking-[0.3em] text-sky-300 uppercase">Critical Business Impact</p>
            <h2 class="mt-4 text-3xl md:text-5xl font-bold">The Cost Of Poor Social Media Advertising</h2>
            <p class="mt-4 text-lg text-blue-100">Poorly managed ads drain budgets, miss opportunities, and let competitors capture your audience.</p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
            <div class="p-6 rounded-2xl bg-white/10 border border-white/10 backdrop-blur">
                <div class="text-3xl font-black text-white mb-2">$276.7B</div>
                <p class="text-blue-100 text-sm">Social media ad spend is projected to reach US$276.7 billion in 2025.</p>
            </div>
            <div class="p-6 rounded-2xl bg-white/10 border border-white/10 backdrop-blur">
                <div class="text-3xl font-black text-white mb-2">2.50% / 1.51% CTR</div>
                <p class="text-blue-100 text-sm">Facebook lead-gen ads average 2.50% CTR and traffic ads 1.51% — poor targeting wastes spend.</p>
            </div>
            <div class="p-6 rounded-2xl bg-white/10 border border-white/10 backdrop-blur">
                <div class="text-3xl font-black text-white mb-2">58%</div>
                <p class="text-blue-100 text-sm">Of consumers discover new businesses via social media — skipping ads loses opportunities.</p>
            </div>
            <div class="p-6 rounded-2xl bg-white/10 border border-white/10 backdrop-blur">
                <div class="text-3xl font-black text-white mb-2">76%</div>
                <p class="text-blue-100 text-sm">Of consumers who had a good social media brand experience recommend it — poor ads damage trust.</p>
            </div>
        </div>
    </div>
</section>

<!-- Section: Packages | Packages -->
<?php
$packages = [
    [
        'name' => 'SparkReach',
        'tag' => 'Perfect Start',
        'desc' => 'An entry-level content and ad package designed to help small businesses light their first spark online and reach new audiences.',
        'benefits' => [
            'Affordable way to start digital campaigns.',
            'Builds brand visibility across key social channels.',
            'Engages audiences with creative posts and ads.',
            'Flexible to track progress.',
            'Simple monitoring to track progress.',
        ],
        'includes' => [
            'Social media strategy & content planning.',
            '10 branded posts per month.',
            'Basic ad campaigns (1-2 platforms).',
            'Audience targeting setup.',
            'Monthly performance reports.',
            'Content calendar.',
            'Basic graphic design.',
        ],
    ],
    [
        'name' => 'EngagePro',
        'tag' => 'Most Popular · Business Growth',
        'desc' => 'A growth-focused package designed for brands ready to build consistent engagement, stronger content strategies, and profitable ad campaigns.',
        'benefits' => [
            'Expands reach across multiple platforms.',
            'Drives measurable traffic and conversions.',
            'Improves engagement with higher-quality creative.',
            'Strengthens SEO with consistent blog content.',
            'Optimizes ROI through testing and refinement.',
        ],
        'includes' => [
            '4-6 SEO-optimized blog posts/month.',
            '20 branded social posts across 2-3 platforms.',
            'Paid ad campaigns on Facebook, Instagram, LinkedIn.',
            'Ad A/B testing for better ROI.',
            'Landing page content & optimization.',
            'Advanced targeting & retargeting campaigns.',
            'Influencer outreach (optional).',
            'Bi-weekly reporting with insights.',
        ],
    ],
    [
        'name' => 'BrandAmplify',
        'tag' => 'Enterprise Power',
        'desc' => 'An enterprise-grade solution for companies aiming for market dominance with premium content and multi-channel advertising at scale.',
        'benefits' => [
            'Creates thought leadership and brand authority.',
            'Delivers high-volume leads and conversions.',
            'Strengthens customer loyalty through storytelling.',
            'Delivers measurable results at scale.',
            'Ensures consistency and scale.',
        ],
        'includes' => [
            '6-10 SEO blog posts/articles/month.',
            'Unlimited social content (4-5 platforms, daily posts).',
            'Multi-platform ads (Google, Meta, TikTok, LinkedIn, YouTube).',
            'Video marketing (shorts, reels, YouTube content).',
            'Full-funnel content (awareness to conversion).',
            'Advanced conversion rate optimization.',
            'Weekly analytics reports + strategy sessions.',
            'Dedicated campaign strategist + creative team.',
        ],
    ],
    [
        'name' => 'VisionForge',
        'tag' => 'Unlimited Vision',
        'desc' => 'A fully tailored content and social advertising strategy designed around your unique brand story, audience, and growth ambitions.',
        'benefits' => [
            '100% customized campaigns made-to-order needs.',
            'Perfect for niche industries and high-growth brands.',
            'Seamlessly combines content, ads, and video into one engine.',
            'Multi-language and global-ready campaigns.',
            'Aligns creativity with your business goals.',
        ],
        'includes' => [
            'Custom strategy workshops + execution roadmap.',
            'Industry-specific content (tech, health, retail, etc.).',
            'Omni-channel ads (search, display, video, social, influencer).',
            'Advanced creative production (graphics, video, copy).',
            'Multi-language/localized campaigns.',
            'Funnel automation & retargeting.',
            'AI-powered content optimization.',
            'Continuous experimentation + scaling.',
        ],
    ],
];
$package_gradients = ['from-sky-400 to-blue-400', 'from-indigo-400 to-purple-400', 'from-emerald-400 to-teal-400', 'from-rose-400 to-amber-400'];
?>
<section class="bg-white section-padding">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <h2 class="text-3xl md:text-5xl font-bold text-gray-900">Social Media Advertising Packages</h2>
            <p class="mt-4 text-lg text-gray-600">Transform your business with comprehensive packages from startup-friendly solutions to enterprise-grade applications.</p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-4 gap-6">
            <?php $idx = 0; foreach ($packages as $package): $featured = str_contains($package['tag'], 'Most Popular'); ?>
                <div class="group relative bg-white rounded-3xl border <?= $featured ? 'border-blue-300 ring-2 ring-blue-100' : 'border-slate-200' ?> shadow-sm hover:shadow-lg transition flex flex-col <?= $featured ? 'overflow-visible' : 'overflow-hidden' ?>">
                    <?php if ($featured): ?>
                        <div class="absolute -top-3 left-1/2 -translate-x-1/2 z-20 text-[10px] font-bold uppercase tracking-wider px-3 py-1.5 rounded-full bg-blue-600 text-white shadow-lg whitespace-nowrap">Most Popular</div>
                    <?php endif; ?>
                    <div class="p-6 <?= $featured ? 'pt-8' : '' ?> border-b border-slate-100 space-y-3">
                        <div class="inline-flex px-3 py-1 rounded-full text-xs font-semibold <?= $featured ? 'bg-blue-50 text-blue-700 border border-blue-200' : 'bg-slate-50 text-slate-700 border border-slate-200' ?>"><?= htmlspecialchars($package['tag']) ?></div>
                        <h3 class="text-2xl font-bold text-slate-900"><?= htmlspecialchars($package['name']) ?></h3>
                        <p class="text-slate-600 text-sm leading-relaxed"><?= htmlspecialchars($package['desc']) ?></p>
                        <div class="h-1 rounded-full bg-gradient-to-r <?= $package_gradients[$idx % count($package_gradients)] ?> opacity-60"></div>
                    </div>
                    <div class="p-6 space-y-5 flex-1">
                        <div>
                            <h4 class="font-semibold text-slate-900">Key Benefits:</h4>
                            <ul class="mt-2 space-y-2 text-sm text-slate-700">
                                <?php foreach ($package['benefits'] as $benefit): ?>
                                    <li class="flex gap-2"><span class="text-primary">•</span><span><?= htmlspecialchars($benefit) ?></span></li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                        <div>
                            <h4 class="font-semibold text-slate-900">What's Included:</h4>
                            <ul class="mt-2 space-y-2 text-sm text-slate-700">
                                <?php foreach ($package['includes'] as $item): ?>
                                    <li class="flex gap-2"><span class="text-emerald-500">✔</span><span><?= htmlspecialchars($item) ?></span></li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    </div>
                    <div class="p-6 border-t border-slate-100">
                        <a href="/?page=get-proposal" class="inline-flex items-center justify-center w-full bg-primary text-white font-semibold px-6 py-3 rounded-full shadow hover:opacity-90 transition">Get Started</a>
                    </div>
                </div>
            <?php $idx++; endforeach; ?>
        </div>
    </div>
</section>

<!-- Section: FAQs -->
<?php
$faqs = [
    ['q' => 'How long does it typically take to complete a website project?', 'a' => 'Our team works tirelessly to tailor your website to your specific needs and preferences through open communication and collaboration.'],
    ['q' => 'Do you provide ongoing support and maintenance after launch?', 'a' => 'Yes, we partner with you after launch for support, optimization, and continuous improvements.'],
    ['q' => 'Can you help improve my existing website’s SEO performance?', 'a' => 'Absolutely. We pair social advertising with SEO and content upgrades to strengthen performance.'],
    ['q' => 'What makes your design process collaborative?', 'a' => 'We align with stakeholders at every step with transparent communication, reviews, and feedback loops.'],
    ['q' => 'Do you offer hosting services, and how secure are they?', 'a' => 'We use secure, monitored infrastructure and best practices to protect data and uptime.'],
];
?>
<section class="bg-gray-50 section-padding">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-10">
            <h2 class="text-3xl md:text-5xl font-bold text-gray-900">FAQs</h2>
            <p class="mt-4 text-lg text-gray-600">Got questions? We’ve answered the most common ones below to help you get started.</p>
        </div>
        <div class="space-y-4" data-accordion>
            <?php foreach ($faqs as $faq): ?>
                <div class="bg-white rounded-2xl border border-gray-200 shadow-sm">
                    <button type="button" class="w-full text-left px-6 py-5 flex items-center justify-between gap-4 hover:bg-gray-50 transition rounded-2xl" data-accordion-trigger>
                        <span class="font-semibold text-lg text-slate-900"><?= htmlspecialchars($faq['q']) ?></span>
                        <span class="flex-shrink-0 w-6 h-6 rounded-full bg-gray-100 text-gray-600 flex items-center justify-center transition-transform">
                            <svg class="w-4 h-4 transition-transform" viewBox="0 0 24 24" fill="none"><path d="M12 5v14M5 12h14" stroke="currentColor" stroke-width="2" stroke-linecap="round"/></svg>
                        </span>
                    </button>
                    <div class="px-6 pb-5 hidden overflow-hidden transition-all duration-300" data-accordion-content>
                        <p class="text-gray-600"><?= htmlspecialchars($faq['a']) ?></p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- Hero slider + tabs script -->
<script>
    (function(){
        const slider = document.getElementById('wtw-hero-slider');
        if(!slider) return;
        const slides = slider.querySelectorAll('.wtw-slide');
        const dots = slider.querySelectorAll('.wtw-dot');
        let index = 0;
        let timer = null;
        function show(i){
            slides.forEach((s, si)=>{
                const active = si === i;
                s.style.opacity = active ? '1' : '0';
                s.style.pointerEvents = active ? 'auto' : 'none';
            });
            dots.forEach((d, di)=>{ d.style.backgroundColor = di === i ? '#2563eb' : '#bfdbfe'; });
            index = i;
        }
        function next(){ show((index + 1) % slides.length); }
        function restart(){ if(timer) clearInterval(timer); timer = setInterval(next, 5000); }
        dots.forEach((d, di)=>{ d.addEventListener('click', ()=>{ show(di); restart(); }); });
        show(0);
        restart();
    })();

    (function(){
        const container = document.getElementById('wtw-insights');
        if(!container) return;
        const tabs = container.querySelectorAll('.wtw-info-tab');
        const panels = container.querySelectorAll('.wtw-info-panel');
        let autoTimer = null;
        let current = 0;
        function activate(i){
            tabs.forEach((t, ti)=>{
                if(ti===i){
                    t.classList.add('bg-primary','text-white','ring-1','ring-primary/30','shadow-sm','hover:bg-primary');
                    t.classList.remove('text-primary','hover:bg-primary/10');
                    t.setAttribute('aria-selected','true');
                } else {
                    t.classList.remove('bg-primary','text-white','ring-1','ring-primary/30','shadow-sm','hover:bg-primary');
                    t.classList.add('text-primary','hover:bg-primary/10');
                    t.setAttribute('aria-selected','false');
                }
            });
            panels.forEach((p, pi)=>{
                if(pi===i){ p.classList.remove('hidden'); } else { p.classList.add('hidden'); }
            });
            current = i;
        }
        function next(){ activate((current + 1) % tabs.length); }
        function restart(){ if(autoTimer) clearInterval(autoTimer); autoTimer = setInterval(next, 6000); }
        tabs.forEach((t, ti)=>{ t.addEventListener('click', ()=>{ activate(ti); restart(); }); });
        activate(0);
        restart();
    })();

    // Accordion functionality
    (function(){
        function initAccordion(){
            const accordion = document.querySelector('[data-accordion]');
            if(!accordion) return;
            const triggers = accordion.querySelectorAll('[data-accordion-trigger]');
            triggers.forEach(trigger => {
                trigger.addEventListener('click', function(e){
                    e.preventDefault();
                    const content = this.nextElementSibling;
                    if(!content || !content.hasAttribute('data-accordion-content')) return;
                    const icon = this.querySelector('svg');
                    const isExpanded = !content.classList.contains('hidden');
                    
                    // Close all other items
                    triggers.forEach(t => {
                        if(t !== this){
                            const otherContent = t.nextElementSibling;
                            if(otherContent && otherContent.hasAttribute('data-accordion-content')){
                                otherContent.classList.add('hidden');
                            }
                            const otherIcon = t.querySelector('svg');
                            if(otherIcon){
                                otherIcon.style.transform = 'rotate(0deg)';
                            }
                        }
                    });
                    
                    // Toggle current item
                    if(isExpanded){
                        content.classList.add('hidden');
                        if(icon) icon.style.transform = 'rotate(0deg)';
                    } else {
                        content.classList.remove('hidden');
                        if(icon) icon.style.transform = 'rotate(45deg)';
                    }
                });
            });
        }
        if(document.readyState === 'loading'){
            document.addEventListener('DOMContentLoaded', initAccordion);
        } else {
            initAccordion();
        }
    })();
</script>

