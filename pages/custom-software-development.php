<?php
/**
 * Custom Software Development Page
 * Full rebuild to match refreshed blog layouts.
 */
?>

<!-- Hero -->
<section class="relative section-padding overflow-hidden bg-gradient-to-br from-slate-50 via-blue-50 to-sky-100 text-slate-900">
    <div class="absolute inset-0 pointer-events-none">
        <div class="absolute inset-0 bg-white/50 mix-blend-overlay"></div>
        <div class="absolute -top-20 -left-14 w-80 h-80 bg-blue-200/40 rounded-full blur-3xl"></div>
        <div class="absolute -bottom-24 right-0 w-96 h-96 bg-violet-200/30 rounded-full blur-3xl"></div>
        <div class="absolute top-16 right-1/4 w-20 h-20 bg-sky-200/40 rounded-full blur-2xl"></div>
        <div class="absolute bottom-16 left-1/3 w-16 h-16 bg-emerald-200/40 rounded-full blur-2xl"></div>
    </div>
    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-4xl mx-auto">
            <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-white shadow-sm ring-1 ring-blue-200/60 mb-5">
                <span class="w-2 h-2 rounded-full bg-blue-500"></span>
                <span class="text-sm text-blue-800 font-semibold uppercase tracking-wide">Custom Software Development</span>
            </div>
            <h1 class="text-4xl md:text-6xl font-bold tracking-tight mb-4">Build <span class="text-gradient">Software Around Your Business</span>, Not The Other Way Around</h1>
            <p class="text-xl text-slate-600 mb-2">Design secure, scalable platforms that match the way your teams actually work.</p>
            <p class="text-lg text-slate-600/90 mb-8">From discovery to continuous delivery, we architect tailored systems that reduce manual effort, integrate seamlessly, and accelerate growth.</p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="/?page=get-proposal" class="inline-flex items-center justify-center gap-2 px-8 py-4 rounded-full text-lg font-semibold bg-primary text-white shadow hover:bg-primary/90 transition-colors">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" class="opacity-90"><path d="M5 12h14M12 5l7 7-7 7" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                    Get a Proposal
                </a>
                <a href="/?page=book-an-expert" class="inline-flex items-center justify-center gap-2 px-8 py-4 rounded-full text-lg font-semibold border border-primary text-primary bg-white hover:bg-primary hover:text-white transition-colors shadow">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" class="opacity-90"><path d="M8 7h8M6 11h12M9 15h6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                    Talk to Engineering
                </a>
            </div>
            <!-- <div class="mt-8 flex flex-col sm:flex-row gap-3 justify-center">
                <a href="/?page=book-an-expert" class="inline-flex items-center justify-center px-6 py-3 rounded-full text-sm font-semibold border border-primary text-primary bg-white hover:bg-primary hover:text-white transition-colors">Schedule Discovery</a>
                <a href="/?page=contact" class="inline-flex items-center justify-center px-6 py-3 rounded-full text-sm font-semibold border border-primary text-primary bg-white hover:bg-primary hover:text-white transition-colors">Ask a Question</a>
                <a href="/?page=contact" class="inline-flex items-center justify-center px-6 py-3 rounded-full text-sm font-semibold border border-primary text-primary bg-white hover:bg-primary hover:text-white transition-colors">Request NDA</a>
            </div> -->
        </div>
        <!-- <div class="mt-10 grid grid-cols-1 sm:grid-cols-3 gap-4 text-left">
            <div class="bg-white rounded-xl p-4 ring-1 ring-blue-100 shadow-sm">
                <div class="text-2xl font-extrabold text-blue-700">68%</div>
                <div class="text-sm text-slate-600">Outgrow off-the-shelf tools within 18 months</div>
            </div>
            <div class="bg-white rounded-xl p-4 ring-1 ring-blue-100 shadow-sm">
                <div class="text-2xl font-extrabold text-blue-700">45%</div>
                <div class="text-sm text-slate-600">Productivity lift when workflows are automated end-to-end</div>
            </div>
            <div class="bg-white rounded-xl p-4 ring-1 ring-blue-100 shadow-sm">
                <div class="text-2xl font-extrabold text-blue-700">99.9%</div>
                <div class="text-sm text-slate-600">Uptime delivered through resilient architectures</div>
            </div>
        </div> -->
    </div>
    <div class="sr-only">Source: AiBit Sol delivery benchmarks</div>
</section>

<!-- Insights -->
<section class="bg-transparent -mt-8 md:-mt-12 pb-4 md:pb-8">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="relative">
            <div class="absolute -inset-0.5 bg-[conic-gradient(from_0deg,theme(colors.blue.500),theme(colors.indigo.500),theme(colors.purple.500),theme(colors.blue.500))] rounded-3xl blur opacity-30"></div>
            <div id="csd-insights" class="relative rounded-3xl bg-white/90 backdrop-blur-xl border border-slate-200 shadow-2xl overflow-hidden">
                <div class="px-6 md:px-8 pt-6 md:pt-8">
                    <div class="text-center">
                        <h3 class="text-lg md:text-xl font-extrabold text-slate-900">Insights</h3>
                        <p class="text-slate-600 text-sm">Key stats, issues, and solutions for custom software builds</p>
                        <div class="hidden md:flex items-center justify-center gap-2 text-xs text-slate-500 mt-2">
                            <span class="inline-flex items-center gap-1 px-2 py-1 rounded-full bg-slate-100 border border-slate-200">
                                Updated
                                <span class="w-1.5 h-1.5 rounded-full bg-emerald-500"></span>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="flex items-center justify-center gap-2 px-3 md:px-6 py-3 md:py-4 border-y border-slate-200" role="tablist" aria-label="Insights tabs">
                    <button type="button" class="csd-info-tab px-4 py-2 rounded-full text-sm font-semibold transition-colors" role="tab" aria-selected="true">Statistics</button>
                    <button type="button" class="csd-info-tab px-4 py-2 rounded-full text-sm font-semibold transition-colors" role="tab" aria-selected="false">Problems</button>
                    <button type="button" class="csd-info-tab px-4 py-2 rounded-full text-sm font-semibold transition-colors" role="tab" aria-selected="false">Solutions</button>
                </div>
                <div class="p-6 md:p-8">
                    <div class="csd-info-panel grid grid-cols-2 md:grid-cols-4 gap-4 md:gap-6">
                        <div class="group relative">
                            <div class="absolute inset-0 rounded-2xl bg-gradient-to-br from-sky-300/30 to-blue-300/20 blur-xl opacity-0 group-hover:opacity-100 transition"></div>
                            <div class="relative p-5 rounded-2xl bg-white/80 backdrop-blur border border-slate-200 text-center shadow-sm">
                                <div class="text-3xl font-black text-primary">68%</div>
                                <p class="mt-1 text-xs md:text-sm text-slate-600">Outgrow off-the-shelf tools in 18 months</p>
                            </div>
                        </div>
                        <div class="group relative">
                            <div class="absolute inset-0 rounded-2xl bg-gradient-to-br from-indigo-300/30 to-purple-300/20 blur-xl opacity-0 group-hover:opacity-100 transition"></div>
                            <div class="relative p-5 rounded-2xl bg-white/80 backdrop-blur border border-slate-200 text-center shadow-sm">
                                <div class="text-3xl font-black text-primary">45%</div>
                                <p class="mt-1 text-xs md:text-sm text-slate-600">Productivity lift via custom automation</p>
                            </div>
                        </div>
                        <div class="group relative">
                            <div class="absolute inset-0 rounded-2xl bg-gradient-to-br from-cyan-300/30 to-emerald-300/20 blur-xl opacity-0 group-hover:opacity-100 transition"></div>
                            <div class="relative p-5 rounded-2xl bg-white/80 backdrop-blur border border-slate-200 text-center shadow-sm">
                                <div class="text-3xl font-black text-primary">99.9%</div>
                                <p class="mt-1 text-xs md:text-sm text-slate-600">Uptime with cloud-native architecture</p>
                            </div>
                        </div>
                        <div class="group relative">
                            <div class="absolute inset-0 rounded-2xl bg-gradient-to-br from-rose-300/30 to-amber-300/20 blur-xl opacity-0 group-hover:opacity-100 transition"></div>
                            <div class="relative p-5 rounded-2xl bg-white/80 backdrop-blur border border-slate-200 text-center shadow-sm">
                                <div class="text-3xl font-black text-primary">4.2×</div>
                                <p class="mt-1 text-xs md:text-sm text-slate-600">Average efficiency lift after replatforming</p>
                            </div>
                        </div>
                    </div>
                    <div class="csd-info-panel hidden grid grid-cols-1 md:grid-cols-3 gap-4 md:gap-6">
                        <div class="group relative">
                            <div class="absolute inset-0 rounded-2xl bg-gradient-to-br from-blue-300/30 to-sky-300/20 blur-xl opacity-0 group-hover:opacity-100 transition"></div>
                            <div class="relative p-5 rounded-2xl bg-white/70 backdrop-blur border border-slate-200 shadow-sm">
                                <h4 class="font-semibold text-slate-900">Integration Chaos</h4>
                                <p class="text-slate-600 text-sm mt-1">Data trapped in CRMs, ERPs, and spreadsheets.</p>
                            </div>
                        </div>
                        <div class="group relative">
                            <div class="absolute inset-0 rounded-2xl bg-gradient-to-br from-indigo-300/30 to-purple-300/20 blur-xl opacity-0 group-hover:opacity-100 transition"></div>
                            <div class="relative p-5 rounded-2xl bg-white/70 backdrop-blur border border-slate-200 shadow-sm">
                                <h4 class="font-semibold text-slate-900">Compliance Risk</h4>
                                <p class="text-slate-600 text-sm mt-1">Generic software lacks controls for audits.</p>
                            </div>
                        </div>
                        <div class="group relative">
                            <div class="absolute inset-0 rounded-2xl bg-gradient-to-br from-rose-300/30 to-amber-300/20 blur-xl opacity-0 group-hover:opacity-100 transition"></div>
                            <div class="relative p-5 rounded-2xl bg-white/70 backdrop-blur border border-slate-200 shadow-sm">
                                <h4 class="font-semibold text-slate-900">Manual Workflows</h4>
                                <p class="text-slate-600 text-sm mt-1">Teams copy data between systems by hand.</p>
                            </div>
                        </div>
                    </div>
                    <div class="csd-info-panel hidden grid grid-cols-1 md:grid-cols-3 gap-4 md:gap-6">
                        <div class="group relative">
                            <div class="absolute inset-0 rounded-2xl bg-gradient-to-br from-sky-300/30 to-blue-300/20 blur-xl opacity-0 group-hover:opacity-100 transition"></div>
                            <div class="relative p-5 rounded-2xl bg-white/70 backdrop-blur border border-slate-200 shadow-sm">
                                <h4 class="font-semibold text-slate-900">Modular Architecture</h4>
                                <p class="text-slate-600 text-sm mt-1">Domain-driven design keeps features independent.</p>
                            </div>
                        </div>
                        <div class="group relative">
                            <div class="absolute inset-0 rounded-2xl bg-gradient-to-br from-indigo-300/30 to-purple-300/20 blur-xl opacity-0 group-hover:opacity-100 transition"></div>
                            <div class="relative p-5 rounded-2xl bg-white/70 backdrop-blur border border-slate-200 shadow-sm">
                                <h4 class="font-semibold text-slate-900">Secure Integration Layer</h4>
                                <p class="text-slate-600 text-sm mt-1">APIs, event buses, and monitoring keep data synced.</p>
                            </div>
                        </div>
                            <div class="group relative">
                            <div class="absolute inset-0 rounded-2xl bg-gradient-to-br from-cyan-300/30 to-emerald-300/20 blur-xl opacity-0 group-hover:opacity-100 transition"></div>
                            <div class="relative p-5 rounded-2xl bg-white/70 backdrop-blur border border-slate-200 shadow-sm">
                                <h4 class="font-semibold text-slate-900">Automation + Observability</h4>
                                <p class="text-slate-600 text-sm mt-1">CI/CD, alerts, and dashboards keep teams aligned.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Process CTA -->
<section class="bg-white section-padding">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="bg-gradient-to-br from-blue-600 to-indigo-600 rounded-3xl p-8 md:p-12 text-white text-center shadow-xl">
            <h2 class="text-3xl md:text-5xl font-bold mb-6">From Idea To Release With A Proven Build Process</h2>
            <p class="text-xl text-blue-100 mb-8 max-w-3xl mx-auto">Strategy, product, engineering, QA, and DevOps move in lockstep so you get dependable releases, cleaner handoffs, and measurable ROI.</p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="/?page=custom-partnership" class="bg-white text-blue-700 px-8 py-4 rounded-full text-lg font-semibold hover:bg-blue-50 transition-colors shadow inline-flex items-center justify-center gap-2">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none"><path d="M4 7h16M4 12h16M4 17h10" stroke="currentColor" stroke-width="2" stroke-linecap="round"/></svg>
                    Explore Engagement Models
                </a>
                <a href="/?page=book-an-expert" class="bg-white/10 text-white border border-white/30 px-8 py-4 rounded-full text-lg font-semibold hover:bg-white/20 transition-colors inline-flex items-center justify-center gap-2 backdrop-blur">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none"><path d="M8 7h8M6 11h12M9 15h6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                    Book A Build Consultation
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Insights script -->
<script>
    (function(){
        const container = document.getElementById('csd-insights');
        if(!container) return;
        const tabs = container.querySelectorAll('.csd-info-tab');
        const panels = container.querySelectorAll('.csd-info-panel');
        let timer = null;
        let current = 0;

        function activate(index){
            tabs.forEach((tab, i) => {
                if(i === index){
                    tab.classList.add('bg-primary','text-white','ring-1','ring-primary/30','shadow-sm');
                    tab.classList.remove('text-primary','hover:bg-primary/10');
                    tab.setAttribute('aria-selected','true');
                } else {
                    tab.classList.remove('bg-primary','text-white','ring-1','ring-primary/30','shadow-sm');
                    tab.classList.add('text-primary','hover:bg-primary/10');
                    tab.setAttribute('aria-selected','false');
                }
            });
            panels.forEach((panel, i)=> {
                if(i === index){
                    panel.classList.remove('hidden');
                } else {
                    panel.classList.add('hidden');
                }
            });
            current = index;
        }

        tabs.forEach((tab, i)=> tab.addEventListener('click', ()=> { activate(i); restart(); }));

        function next(){ activate((current + 1) % tabs.length); }
        function restart(){ if(timer) clearInterval(timer); timer = setInterval(next, 6000); }

        activate(0);
        restart();
    })();
</script>

<!-- Solutions -->
<section class="relative bg-gradient-to-br from-white via-sky-50 to-blue-50 section-padding overflow-hidden">
    <div class="absolute -top-10 -left-10 w-72 h-72 bg-gradient-to-br from-blue-200/30 to-purple-200/30 rounded-full blur-3xl"></div>
    <div class="absolute bottom-0 right-0 w-80 h-80 bg-gradient-to-tr from-emerald-200/30 to-cyan-200/30 rounded-full blur-3xl"></div>
    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <div>
                <div class="inline-flex items-center bg-primary/10 text-primary px-4 py-2 rounded-full text-sm font-semibold mb-4">
                    <span class="w-2 h-2 bg-primary rounded-full mr-2"></span>
                    Built-For-You Platforms
                </div>
                <h2 class="text-3xl md:text-5xl font-bold text-gray-900 mb-4">
                    <span class="block">Modernize operations,</span>
                    <span class="block bg-gradient-to-r from-primary to-sky-600 bg-clip-text text-transparent">ship features faster, stay resilient</span>
                </h2>
                <p class="text-lg text-gray-600 mb-6">Whether you need a mission-critical ERP, customer portal, or modular SaaS, we design cloud-native systems that scale and stay easy to evolve.</p>
                <ul class="text-gray-700 space-y-2 mb-8">
                    <li class="flex items-start">
                        <svg class="w-5 h-5 text-emerald-500 mr-2 mt-0.5" viewBox="0 0 24 24" fill="none"><path d="M5 12l4 4L19 6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                        Product strategy, UX, and architecture led by the same squad
                    </li>
                    <li class="flex items-start">
                        <svg class="w-5 h-5 text-emerald-500 mr-2 mt-0.5" viewBox="0 0 24 24" fill="none"><path d="M5 12l4 4L19 6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                        Secure integrations with CRMs, ERPs, data warehouses, and third-party APIs
                    </li>
                    <li class="flex items-start">
                        <svg class="w-5 h-5 text-emerald-500 mr-2 mt-0.5" viewBox="0 0 24 24" fill="none"><path d="M5 12l4 4L19 6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                        Automated testing + DevOps pipelines for predictable releases
                    </li>
                </ul>
                <div class="flex flex-col sm:flex-row gap-4">
                    <a href="/?page=book-an-expert" class="inline-flex items-center justify-center gap-2 px-8 py-4 rounded-full text-lg font-semibold bg-primary text-white shadow hover:bg-primary/90 transition-colors">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none"><path d="M8 7h8M6 11h12M9 15h6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                        Meet The Product Team
                    </a>
                    <a href="/?page=get-proposal" class="inline-flex items-center justify-center gap-2 px-8 py-4 rounded-full text-lg font-semibold border border-primary text-primary hover:bg-primary hover:text-white transition-colors">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none"><path d="M5 12h14M12 5l7 7-7 7" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                        Launch My Build
                    </a>
                </div>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                <div class="bg-white rounded-2xl p-6 ring-1 ring-gray-200 hover:shadow-lg transition-shadow">
                    <div class="w-10 h-10 rounded-lg bg-primary/10 text-primary flex items-center justify-center mb-3">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none"><path d="M12 3l7 4v6c0 4.418-3.582 8-8 8s-8-3.582-8-8V7l9-4z" stroke="currentColor" stroke-width="2"/></svg>
                    </div>
                    <h3 class="text-lg font-semibold mb-1">Product Discovery</h3>
                    <p class="text-gray-600">Map goals, priority workflows, and KPI impact before a line of code.</p>
                </div>
                <div class="bg-white rounded-2xl p-6 ring-1 ring-gray-200 hover:shadow-lg transition-shadow">
                    <div class="w-10 h-10 rounded-lg bg-sky-100 text-sky-600 flex items-center justify-center mb-3">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none"><path d="M4 12h16M4 8h16M4 16h10" stroke="currentColor" stroke-width="2" stroke-linecap="round"/></svg>
                    </div>
                    <h3 class="text-lg font-semibold mb-1">Modular Architecture</h3>
                    <p class="text-gray-600">Domain-driven design keeps features independent yet cohesive.</p>
                </div>
                <div class="bg-white rounded-2xl p-6 ring-1 ring-gray-200 hover:shadow-lg transition-shadow">
                    <div class="w-10 h-10 rounded-lg bg-emerald-100 text-emerald-600 flex items-center justify-center mb-3">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none"><path d="M12 6l-8 4 8 4 8-4-8-4z" stroke="currentColor" stroke-width="2"/></svg>
                    </div>
                    <h3 class="text-lg font-semibold mb-1">Secure Delivery</h3>
                    <p class="text-gray-600">Zero-trust practices, code reviews, and compliance baked into sprints.</p>
                </div>
                <div class="bg-white rounded-2xl p-6 ring-1 ring-gray-200 hover:shadow-lg transition-shadow">
                    <div class="w-10 h-10 rounded-lg bg-indigo-100 text-indigo-600 flex items-center justify-center mb-3">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none"><path d="M3 12h7l2 3 3-6 3 9" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                    </div>
                    <h3 class="text-lg font-semibold mb-1">Lifecycle Support</h3>
                    <p class="text-gray-600">Monitoring, analytics, and iteration to keep adoption high post-launch.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Benefits -->
<section class="bg-gray-50 section-padding">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <h2 class="text-3xl md:text-5xl font-bold text-gray-900 mb-4">Immediate Wins With Bespoke Platforms</h2>
            <p class="text-lg text-gray-600">See what happens when technology matches your roadmap instead of slowing it down.</p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <div class="bg-white rounded-2xl p-6 ring-1 ring-gray-200">
                <h3 class="text-lg font-semibold mb-2">Unified Data & Workflows</h3>
                <p class="text-gray-600">Replace spreadsheets and duplicate systems with a single source of truth.</p>
            </div>
            <div class="bg-white rounded-2xl p-6 ring-1 ring-gray-200">
                <h3 class="text-lg font-semibold mb-2">Faster Decision Cycles</h3>
                <p class="text-gray-600">Dashboards built into the product give leaders the metrics that matter.</p>
            </div>
            <div class="bg-white rounded-2xl p-6 ring-1 ring-gray-200">
                <h3 class="text-lg font-semibold mb-2">Automation & AI Ready</h3>
                <p class="text-gray-600">Trigger workflows, ML models, or AI copilots the moment data hits the system.</p>
            </div>
            <div class="bg-white rounded-2xl p-6 ring-1 ring-gray-200">
                <h3 class="text-lg font-semibold mb-2">Lower Tech Debt</h3>
                <p class="text-gray-600">Modular architecture keeps features independent, testable, and easier to evolve.</p>
            </div>
            <div class="bg-white rounded-2xl p-6 ring-1 ring-gray-200">
                <h3 class="text-lg font-semibold mb-2">Enterprise Security</h3>
                <p class="text-gray-600">Role-based access, audit trails, and compliance reporting from day one.</p>
            </div>
            <div class="bg-white rounded-2xl p-6 ring-1 ring-gray-200">
                <h3 class="text-lg font-semibold mb-2">Happier Teams</h3>
                <p class="text-gray-600">Intuitive UI patterns reduce onboarding friction and keep adoption high.</p>
            </div>
        </div>
    </div>
</section>

<!-- Proof -->
<section class="bg-white section-padding">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-4xl mx-auto mb-12">
            <h2 class="text-3xl md:text-5xl font-bold text-gray-900 mb-4">What Custom Software Fixes</h2>
            <p class="text-lg text-gray-600">Teams that replace fragmented tooling see measurable, compounding returns.</p>
            <div class="text-5xl md:text-6xl font-extrabold text-primary mt-4">4.2×</div>
            <p class="text-gray-600 mt-2">Average efficiency lift reported after consolidating processes into custom platforms.</p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <div class="bg-gray-50 rounded-2xl p-6 ring-1 ring-gray-200">
                <h3 class="text-xl font-semibold mb-2">Disconnected Ops</h3>
                <p class="text-gray-600 mb-4">Manual re-entry, duplicate data, and brittle integrations slow down delivery.</p>
                <div class="text-3xl font-bold text-primary">38%</div>
                <p class="text-gray-600 mt-2">Of IT leaders name integration debt as their biggest blocker.</p>
            </div>
            <div class="bg-gray-50 rounded-2xl p-6 ring-1 ring-gray-200">
                <h3 class="text-xl font-semibold mb-2">Compliance Risk</h3>
                <p class="text-gray-600 mb-4">Generic tools rarely offer the audit controls regulated teams require.</p>
                <div class="text-3xl font-bold text-primary">71%</div>
                <p class="text-gray-600 mt-2">Need custom workflows to meet industry regulations.</p>
            </div>
            <div class="bg-gray-50 rounded-2xl p-6 ring-1 ring-gray-200">
                <h3 class="text-xl font-semibold mb-2">Innovation Slowdown</h3>
                <p class="text-gray-600 mb-4">Legacy systems make experimentation expensive and risky.</p>
                <div class="text-3xl font-bold text-primary">54%</div>
                <p class="text-gray-600 mt-2">Say tech debt directly delays revenue features.</p>
            </div>
        </div>
    </div>
</section>

<!-- Packages -->
<section class="bg-white section-padding">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <h2 class="text-3xl md:text-5xl font-bold text-gray-900 mb-4">Custom Software Programs</h2>
            <p class="text-lg text-gray-600">Engagement models that fit your stage—prototype, replatform, or enterprise rollout.</p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-4 gap-6">
            <div class="rounded-2xl border border-gray-200 p-6 flex flex-col hover:shadow-lg transition-shadow">
                <div class="text-sm font-semibold text-primary mb-2">CoreBuild</div>
                <h3 class="text-xl font-bold mb-1">Perfect Start</h3>
                <p class="text-gray-600 mb-4">A streamlined package for startups and SMBs needing a strong foundation with cost-efficient delivery.</p>
                <div class="text-sm font-semibold mb-2">Key Benefits:</div>
                <ul class="list-disc list-inside text-gray-700 text-sm space-y-1 mb-4">
                    <li>Quickly launch MVPs and core systems.</li>
                    <li>Cost-efficient while maintaining quality.</li>
                    <li>Scalable architecture ready for growth.</li>
                    <li>Rapid development with agile methodology.</li>
                    <li>Enhanced user experience with clean UI/UX.</li>
                </ul>
                <div class="text-sm font-semibold mb-2">What's Included:</div>
                <ul class="list-disc list-inside text-gray-700 text-sm space-y-1 mb-6">
                    <li>MVP design & development.</li>
                    <li>User authentication & role management.</li>
                    <li>Database architecture and complete setup.</li>
                    <li>API development & integration.</li>
                    <li>Cloud-ready deployment.</li>
                    <li>Mobile responsiveness.</li>
                    <li>Basic analytics dashboard.</li>
                    <li>3rd-party tool integrations (e.g., Stripe, Twilio).</li>
                </ul>
                <a href="/?page=get-proposal" class="mt-auto inline-flex items-center justify-center px-6 py-3 rounded-full text-base font-semibold bg-primary text-white shadow hover:bg-primary/90 transition-colors">Get Started</a>
            </div>
            <div class="rounded-2xl border-2 border-primary p-6 flex flex-col relative shadow-md">
                <div class="absolute -top-3 left-6 bg-primary text-white text-xs font-semibold px-3 py-1 rounded-full">Most Popular</div>
                <div class="text-sm font-semibold text-primary mb-2">ScaleEdge</div>
                <h3 class="text-xl font-bold mb-1">Business Growth</h3>
                <p class="text-gray-600 mb-4">A growth-driven development package for businesses expanding software needs with advanced automation.</p>
                <div class="text-sm font-semibold mb-2">Key Benefits:</div>
                <ul class="list-disc list-inside text-gray-700 text-sm space-y-1 mb-4">
                    <li>Handles growing user bases seamlessly.</li>
                    <li>Integrates automation to save time and resources.</li>
                    <li>Provides advanced security and compliance.</li>
                    <li>Custom dashboards for smarter decisions.</li>
                    <li>Built with modularity for easy feature expansion.</li>
                </ul>
                <div class="text-sm font-semibold mb-2">What's Included:</div>
                <ul class="list-disc list-inside text-gray-700 text-sm space-y-1 mb-6">
                    <li>Advanced role-based access control.</li>
                    <li>Automated workflows & task scheduling.</li>
                    <li>Multi-device support (desktop, mobile, tablet).</li>
                    <li>Cloud-native scalability (AWS/Azure/GCP).</li>
                    <li>Data visualization dashboards.</li>
                    <li>Payment gateways & subscription billing.</li>
                    <li>Multi-language & multi-currency support.</li>
                    <li>Enhanced security (OAuth2, encryption).</li>
                </ul>
                <a href="/?page=get-proposal" class="mt-auto inline-flex items-center justify-center px-6 py-3 rounded-full text-base font-semibold bg-primary text-white shadow hover:bg-primary/90 transition-colors">Get Started</a>
            </div>
            <div class="rounded-2xl border border-gray-200 p-6 flex flex-col hover:shadow-lg transition-shadow">
                <div class="text-sm font-semibold text-primary mb-2">EnterpriseForge</div>
                <h3 class="text-xl font-bold mb-1">Enterprise Power</h3>
                <p class="text-gray-600 mb-4">A robust package tailored for corporations needing full-scale, mission-critical systems with automation.</p>
                <div class="text-sm font-semibold mb-2">Key Benefits:</div>
                <ul class="list-disc list-inside text-gray-700 text-sm space-y-1 mb-4">
                    <li>Built for scale—thousands to millions of users.</li>
                    <li>Enterprise-level security & compliance.</li>
                    <li>Seamless integrations with existing ERP/CRM.</li>
                    <li>High availability with 99.99% uptime.</li>
                    <li>Custom-tailored to industry-specific needs.</li>
                </ul>
                <div class="text-sm font-semibold mb-2">What's Included:</div>
                <ul class="list-disc list-inside text-gray-700 text-sm space-y-1 mb-6">
                    <li>Enterprise architecture design.</li>
                    <li>Multi-tenant SaaS platform development.</li>
                    <li>AI/ML integrations for automation & insights.</li>
                    <li>Advanced data pipelines & ETL systems.</li>
                    <li>High-availability cloud deployment.</li>
                    <li>Custom APIs for ecosystem integrations.</li>
                    <li>CI/CD pipeline automation.</li>
                    <li>Dedicated SLA support & maintenance.</li>
                </ul>
                <a href="/?page=get-proposal" class="mt-auto inline-flex items-center justify-center px-6 py-3 rounded-full text-base font-semibold bg-primary text-white shadow hover:bg-primary/90 transition-colors">Get Started</a>
            </div>
            <div class="rounded-2xl border border-gray-200 p-6 flex flex-col hover:shadow-lg transition-shadow">
                <div class="text-sm font-semibold text-primary mb-2">VisionCraft</div>
                <h3 class="text-xl font-bold mb-1">Unlimited Vision</h3>
                <p class="text-gray-600 mb-4">A fully customized development journey aligned with complex vision, workflows, and long-term goals.</p>
                <div class="text-sm font-semibold mb-2">Key Benefits:</div>
                <ul class="list-disc list-inside text-gray-700 text-sm space-y-1 mb-4">
                    <li>100% tailored to your business model.</li>
                    <li>Flexible scope—from niche tools to full platforms.</li>
                    <li>Long-term partnership with continuous evolution.</li>
                    <li>Future-proof with AI, blockchain, or IoT integrations.</li>
                    <li>Built to provide maximum ROI and competitive edge.</li>
                </ul>
                <div class="text-sm font-semibold mb-2">What's Included:</div>
                <ul class="list-disc list-inside text-gray-700 text-sm space-y-1 mb-6">
                    <li>Strategic workshops & requirement engineering.</li>
                    <li>Custom architecture from scratch.</li>
                    <li>Emerging tech (AI, AR/VR, IoT, Blockchain).</li>
                    <li>Complex workflows & automation.</li>
                    <li>Global-ready software with compliance (HIPAA, GDPR).</li>
                    <li>Cross-platform support (web, desktop, mobile).</li>
                    <li>End-to-end DevOps pipeline setup.</li>
                    <li>Dedicated post-launch support & upgrades.</li>
                </ul>
                <a href="/?page=get-proposal" class="mt-auto inline-flex items-center justify-center px-6 py-3 rounded-full text-base font-semibold bg-primary text-white shadow hover:bg-primary/90 transition-colors">Get Started</a>
            </div>
        </div>
    </div>
</section>

<!-- CTA -->
<section class="bg-white section-padding">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="bg-gradient-to-br from-blue-600 to-indigo-600 rounded-3xl p-8 md:p-12 text-white text-center shadow-xl">
            <h2 class="text-3xl md:text-5xl font-bold mb-6">Ready To Replace Former Constraints With Custom Builds?</h2>
            <p class="text-xl text-blue-100 mb-8 max-w-3xl mx-auto">Share your workflows, integrations, and adoption goals—we’ll map a release plan that keeps stakeholders aligned.</p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="/?page=get-proposal" class="bg-white text-blue-700 px-8 py-4 rounded-full text-lg font-semibold hover:bg-blue-50 transition-colors shadow inline-flex items-center justify-center gap-2">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none"><path d="M5 12h14M12 5l7 7-7 7" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                    Get A Proposal
                </a>
                <a href="/?page=book-an-expert" class="bg-white/10 text-white border border-white/30 px-8 py-4 rounded-full text-lg font-semibold hover:bg-white/20 transition-colors inline-flex items-center justify-center gap-2 backdrop-blur">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none"><path d="M8 7h8M6 11h12M9 15h6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                    Book an Expert Call
                </a>
            </div>
        </div>
    </div>
</section>

<!-- FAQs -->
<section class="bg-gray-50 section-padding">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-10">
            <h2 class="text-3xl md:text-5xl font-bold text-gray-900 mb-4">Frequently Asked Questions</h2>
            <p class="text-lg text-gray-600">Still evaluating? Here are answers we share with most product and IT leaders.</p>
        </div>
        <div class="space-y-4" role="list" aria-label="Frequently asked questions">
            <div class="bg-white rounded-2xl ring-1 ring-gray-200" role="listitem">
                <button type="button" class="w-full text-left px-6 py-5 flex items-center justify-between gap-4" aria-expanded="false">
                    <span class="font-semibold text-lg">How do you keep custom builds on time and on budget?</span>
                    <span class="flex-shrink-0 w-6 h-6 rounded-full bg-gray-100 text-gray-600 flex items-center justify-center">
                        <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none"><path d="M12 5v14M5 12h14" stroke="currentColor" stroke-width="2" stroke-linecap="round"/></svg>
                    </span>
                </button>
                <div class="px-6 pb-6 hidden">
                    <p class="text-gray-600">We lock scope through discovery, run two-week sprints with shared dashboards, and keep a dedicated delivery manager aligned with your stakeholders.</p>
                </div>
            </div>
            <div class="bg-white rounded-2xl ring-1 ring-gray-200" role="listitem">
                <button type="button" class="w-full text-left px-6 py-5 flex items-center justify-between gap-4" aria-expanded="false">
                    <span class="font-semibold text-lg">Can you integrate with our current CRM, ERP, or data lake?</span>
                    <span class="flex-shrink-0 w-6 h-6 rounded-full bg-gray-100 text-gray-600 flex items-center justify-center">
                        <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none"><path d="M12 5v14M5 12h14" stroke="currentColor" stroke-width="2" stroke-linecap="round"/></svg>
                    </span>
                </button>
                <div class="px-6 pb-6 hidden">
                    <p class="text-gray-600">Yes. We design integration layers or APIs, leverage iPaaS when helpful, and include monitoring to keep data synchronized.</p>
                </div>
            </div>
            <div class="bg-white rounded-2xl ring-1 ring-gray-200" role="listitem">
                <button type="button" class="w-full text-left px-6 py-5 flex items-center justify-between gap-4" aria-expanded="false">
                    <span class="font-semibold text-lg">What happens after launch?</span>
                    <span class="flex-shrink-0 w-6 h-6 rounded-full bg-gray-100 text-gray-600 flex items-center justify-center">
                        <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none"><path d="M12 5v14M5 12h14" stroke="currentColor" stroke-width="2" stroke-linecap="round"/></svg>
                    </span>
                </button>
                <div class="px-6 pb-6 hidden">
                    <p class="text-gray-600">Choose between managed support, shared squads, or a clean handoff. We offer documentation, training, and hiring support so your team can own the stack.</p>
                </div>
            </div>
            <div class="bg-white rounded-2xl ring-1 ring-gray-200" role="listitem">
                <button type="button" class="w-full text-left px-6 py-5 flex items-center justify-between gap-4" aria-expanded="false">
                    <span class="font-semibold text-lg">Do you help with compliance or security reviews?</span>
                    <span class="flex-shrink-0 w-6 h-6 rounded-full bg-gray-100 text-gray-600 flex items-center justify-center">
                        <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none"><path d="M12 5v14M5 12h14" stroke="currentColor" stroke-width="2" stroke-linecap="round"/></svg>
                    </span>
                </button>
                <div class="px-6 pb-6 hidden">
                    <p class="text-gray-600">Absolutely. We design with SOC 2, HIPAA, GDPR, and industry-specific requirements in mind and assist during audits or vendor approvals.</p>
                </div>
            </div>
        </div>
    </div>
</section>

