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
						Custom AI Solutions
					</span>
					<h1 class="mt-5 text-4xl md:text-6xl font-black leading-tight">Turn ideas into <span class="text-gradient">intelligent products</span></h1>
					<p class="mt-6 text-lg md:text-xl text-slate-600 max-w-3xl mx-auto">We design, build, and integrate AI copilots, automations, and analytics that plug directly into your workflows—from sales to operations.</p>
				</div>
				<div class="wtw-slide transition-opacity duration-700 ease-out opacity-0 absolute inset-0 pointer-events-none">
					<span class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-white/70 border border-blue-200 text-primary text-sm font-semibold shadow-sm">
						<span class="w-2 h-2 rounded-full bg-primary"></span>
						Automation + Insights
					</span>
					<h1 class="mt-5 text-4xl md:text-6xl font-black leading-tight">Automate work, <span class="text-gradient">unlock insight</span></h1>
					<p class="mt-6 text-lg md:text-xl text-slate-600 max-w-3xl mx-auto">Agents, workflows, and ML models that eliminate manual tasks and surface next-best actions in real time.</p>
				</div>
				<div class="wtw-slide transition-opacity duration-700 ease-out opacity-0 absolute inset-0 pointer-events-none">
					<span class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-white/70 border border-blue-200 text-primary text-sm font-semibold shadow-sm">
						<span class="w-2 h-2 rounded-full bg-primary"></span>
						Secure & Responsible
					</span>
					<h1 class="mt-5 text-4xl md:text-6xl font-black leading-tight">AI you can <span class="text-gradient">trust at scale</span></h1>
					<p class="mt-6 text-lg md:text-xl text-slate-600 max-w-3xl mx-auto">SOC2-aligned processes, data governance, and human-in-the-loop safeguards are built into every deployment.</p>
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
						<div class="px-6 md:px-8 pt-6 md:pt-8">
							<div class="text-center">
								<h3 class="text-lg md:text-xl font-extrabold text-slate-900">Insights</h3>
								<p class="text-slate-600 text-sm">Key stats, blockers, and wins when adopting AI</p>
							</div>
						</div>
						<div class="flex items-center justify-center gap-2 px-3 md:px-6 py-3 md:py-4 border-y border-slate-200" role="tablist" aria-label="Insights tabs">
							<button type="button" class="wtw-info-tab px-4 py-2 rounded-full text-sm font-semibold transition-colors" role="tab" aria-selected="true">Statistics</button>
							<button type="button" class="wtw-info-tab px-4 py-2 rounded-full text-sm font-semibold transition-colors" role="tab" aria-selected="false">Problems</button>
							<button type="button" class="wtw-info-tab px-4 py-2 rounded-full text-sm font-semibold transition-colors" role="tab" aria-selected="false">Solutions</button>
						</div>
						<div class="p-6 md:p-8">
							<div class="wtw-info-panel grid grid-cols-2 md:grid-cols-4 gap-4 md:gap-6">
								<?php
									$stats = [
										['66%', 'Productivity boost with AI copilots'],
										['45%', 'Cost reduction via automation'],
										['95%', 'Projects fail without integration'],
										['3-6 mo', 'Payback period when deployed well']
									];
									$statGradients = [
										'from-sky-300/30 to-blue-300/20',
										'from-indigo-300/30 to-purple-300/20',
										'from-cyan-300/30 to-emerald-300/20',
										'from-rose-300/30 to-amber-300/20'
									];
									foreach ($stats as $index => $stat):
										$grad = $statGradients[$index % count($statGradients)];
								?>
								<div class="group relative">
									<div class="absolute inset-0 rounded-2xl bg-gradient-to-br <?= $grad ?> blur-xl opacity-0 group-hover:opacity-100 transition"></div>
									<div class="relative p-5 rounded-2xl bg-white/80 backdrop-blur border border-slate-200 text-center shadow-sm">
										<div class="text-3xl font-black text-primary"><?= htmlspecialchars($stat[0]) ?></div>
										<p class="mt-1 text-xs md:text-sm text-slate-600"><?= htmlspecialchars($stat[1]) ?></p>
									</div>
								</div>
								<?php endforeach; ?>
							</div>
							<div class="wtw-info-panel hidden grid grid-cols-1 md:grid-cols-3 gap-4 md:gap-6">
								<?php
									$problems = [
										['Disconnected Data', 'AI can’t learn from siloed systems.'],
										['Manual Bottlenecks', 'Repetitive work blocks strategic work.'],
										['Compliance Risk', 'Shadow AI introduces security issues.']
									];
									foreach ($problems as $i => $prob):
										$grad = $statGradients[$i % count($statGradients)];
								?>
								<div class="group relative">
									<div class="absolute inset-0 rounded-2xl bg-gradient-to-br <?= $grad ?> blur-xl opacity-0 group-hover:opacity-100 transition"></div>
									<div class="relative p-5 rounded-2xl bg-white/70 backdrop-blur border border-slate-200 shadow-sm">
										<h3 class="font-semibold text-slate-900"><?= htmlspecialchars($prob[0]) ?></h3>
										<p class="text-slate-600 mt-1 text-sm"><?= htmlspecialchars($prob[1]) ?></p>
									</div>
								</div>
								<?php endforeach; ?>
							</div>
							<div class="wtw-info-panel hidden grid grid-cols-1 md:grid-cols-3 gap-4 md:gap-6">
								<?php
									$solutions = [
										['Unified AI Strategy', 'Audit systems, set KPIs, define guardrails.'],
										['Embedded Automations', 'Agents + RPA inside CRM, ERP, ops tools.'],
										['Responsible AI Ops', 'Monitoring, human-in-loop, continuous tuning.']
									];
									foreach ($solutions as $i => $sol):
										$grad = $statGradients[$i % count($statGradients)];
								?>
								<div class="group relative">
									<div class="absolute inset-0 rounded-2xl bg-gradient-to-br <?= $grad ?> blur-xl opacity-0 group-hover:opacity-100 transition"></div>
									<div class="relative p-5 rounded-2xl bg-white/70 backdrop-blur border border-slate-200 shadow-sm">
										<h3 class="font-semibold text-slate-900"><?= htmlspecialchars($sol[0]) ?></h3>
										<p class="text-slate-600 mt-1 text-sm"><?= htmlspecialchars($sol[1]) ?></p>
									</div>
								</div>
								<?php endforeach; ?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- Section: Process | Deploy AI That Sticks -->
<section class="relative bg-white section-padding overflow-hidden">
    <div class="absolute inset-0 pointer-events-none opacity-70 [background:radial-gradient(60rem_30rem_at_0%_0%,rgba(14,165,233,0.08),transparent_60%),radial-gradient(40rem_20rem_at_100%_10%,rgba(99,102,241,0.08),transparent_60%),radial-gradient(50rem_25rem_at_50%_100%,rgba(59,130,246,0.07),transparent_60%)]"></div>
    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
		<div class="grid grid-cols-1 lg:grid-cols-12 gap-10 items-center">
            <div class="lg:col-span-6">
                <h2 class="text-3xl md:text-5xl font-extrabold leading-tight text-slate-900">Deploy AI that teams actually use</h2>
                <p class="text-slate-600 text-lg mt-4">Product strategists, ML engineers, and UX designers co-build AI copilots, data copilots, and automation that feel native to your stack.</p>
                <div class="mt-6 flex flex-col sm:flex-row gap-4">
                    <a href="/?page=get-proposal" class="px-6 py-3 rounded-full font-semibold bg-primary text-white hover:opacity-90 transition shadow">Launch an AI Pilot</a>
                    <a href="/?page=book-an-expert" class="px-6 py-3 rounded-full font-semibold border border-primary text-primary hover:bg-primary hover:text-white transition">Talk to an AI Lead</a>
                </div>
				<div class="mt-8 grid grid-cols-2 gap-4">
					<div class="flex items-center gap-3 text-slate-700">
						<span class="inline-block h-2 w-2 rounded-full bg-emerald-400"></span>
						<span class="font-medium">Domain-tuned models</span>
					</div>
					<div class="flex items-center gap-3 text-slate-700">
						<span class="inline-block h-2 w-2 rounded-full bg-sky-400"></span>
						<span class="font-medium">Human-in-loop guardrails</span>
					</div>
					<div class="flex items-center gap-3 text-slate-700">
						<span class="inline-block h-2 w-2 rounded-full bg-indigo-400"></span>
						<span class="font-medium">SOC2 & GDPR ready</span>
					</div>
					<div class="flex items-center gap-3 text-slate-700">
						<span class="inline-block h-2 w-2 rounded-full bg-purple-400"></span>
						<span class="font-medium">Observability dashboards</span>
					</div>
				</div>
			</div>
			<div class="lg:col-span-6">
                <div class="grid grid-cols-2 gap-4">
					<?php 
						$capabilities = [
							['AI Copilots','Sales, support, marketing, ops assistants.','/images/mobile.svg'],
							['Automation & RPA','Agents that move data across CRMs, ERPs, and SaaS tools.','/images/fast_reliable.svg'],
							['Predictive Analytics','Forecast demand, churn, revenue, risk.','/images/Roi.svg'],
							['Vision & NLP','OCR, document AI, voice, sentiment, compliance.','/images/secure.svg']
						];
						$accents = [
							'from-sky-500/15 to-blue-500/10',
							'from-indigo-500/15 to-purple-500/10',
							'from-cyan-500/15 to-emerald-500/10',
							'from-rose-500/15 to-amber-500/10'
						];
						foreach ($capabilities as $i => $cap):
					?>
					<div class="group relative">
                        <div class="absolute inset-0 bg-gradient-to-br <?= $accents[$i % count($accents)] ?> rounded-2xl blur-xl opacity-0 group-hover:opacity-100 transition"></div>
                        <div class="relative p-6 rounded-2xl bg-white backdrop-blur border border-slate-200 shadow-sm hover:shadow-md transition">
                            <div class="h-12 w-12 rounded-xl bg-slate-100 border border-slate-200 flex items-center justify-center">
								<img src="<?= htmlspecialchars($cap[2]) ?>" alt="<?= htmlspecialchars($cap[0]) ?>" class="h-7 w-7"/>
							</div>
                            <h4 class="mt-4 font-semibold text-slate-900"><?= htmlspecialchars($cap[0]) ?></h4>
                            <p class="text-slate-600 text-sm mt-1 leading-relaxed"><?= htmlspecialchars($cap[1]) ?></p>
						</div>
					</div>
					<?php endforeach; ?>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- Section: CTA -->
<section class="bg-white section-padding">
	<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
		<div class="bg-gradient-to-br from-blue-600 to-indigo-600 rounded-3xl p-8 md:p-12 text-white text-center shadow-xl">
			<h2 class="text-3xl md:text-4xl font-extrabold">Ready to ship your AI roadmap?</h2>
			<p class="mt-4 text-lg md:text-xl text-blue-100 max-w-3xl mx-auto">From rapid pilots to enterprise programs, we’ll scope, build, and integrate AI that drives revenue within weeks.</p>
			<div class="mt-8 flex flex-col sm:flex-row gap-4 justify-center">
				<a href="/?page=book-an-expert" class="bg-white text-blue-700 px-6 py-3 rounded-full font-semibold hover:bg-blue-50 transition shadow">Book an Expert Call</a>
				<a href="/?page=get-proposal" class="bg-white/10 text-white border border-white/30 px-6 py-3 rounded-full font-semibold hover:bg-white/15 transition">Get a Proposal</a>
			</div>
		</div>
	</div>
</section>

<!-- Section: Solutions -->
<section class="bg-slate-50 section-padding">
	<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
		<div class="grid grid-cols-1 lg:grid-cols-2 gap-10 items-center">
			<div>
				<h3 class="text-primary font-semibold mb-2">INTELLIGENT SOLUTIONS</h3>
				<h2 class="text-3xl md:text-5xl font-bold text-gray-900 mb-4">AI copilots, automations, and <span class="text-primary">decision intelligence</span></h2>
				<p class="text-gray-600 text-lg mb-6">We map your workflows, data sources, and systems, then design AI that snaps in without disrupting the tools your teams already love.</p>
				<p class="text-gray-600 mb-6">FinOps dashboards, underwriting copilots, compliance monitors, marketing optimizers—everything is custom to your stack, with ongoing support to adapt models as your business evolves.</p>
				<div class="flex flex-wrap gap-3">
					<span class="px-4 py-2 rounded-full bg-accent text-secondary text-sm font-semibold shadow-sm">Secure AI Copilots</span>
					<span class="px-4 py-2 rounded-full bg-accent text-secondary text-sm font-semibold shadow-sm">Workflow Automation</span>
					<span class="px-4 py-2 rounded-full bg-accent text-secondary text-sm font-semibold shadow-sm">Predictive Analytics</span>
					<span class="px-4 py-2 rounded-full bg-accent text-secondary text-sm font-semibold shadow-sm">Responsible AI</span>
				</div>
				<div class="mt-8 flex flex-col sm:flex-row gap-4">
					<a href="/?page=get-proposal" class="bg-primary text-white px-6 py-3 rounded-full font-semibold hover:opacity-90 transition shadow-md">Start Your Pilot</a>
					<a href="/?page=book-an-expert" class="border-2 border-primary text-primary px-6 py-3 rounded-full font-semibold hover:bg-primary hover:text-white transition">Review Use Cases</a>
				</div>
			</div>
			<div class="grid grid-cols-2 gap-4">
				<?php
					$solutions = [
						['AI Copilots','Sales · Support · Marketing','/images/mobile.svg'],
						['Automation','Ops · Finance · HR','/images/fast_reliable.svg'],
						['Analytics','Dashboards · Forecasting','/images/Roi.svg'],
						['Compliance','Audit · Guardrails · Logs','/images/secure.svg']
					];
					$gradients = [
						'from-blue-500/10 to-sky-500/10',
						'from-indigo-500/10 to-purple-500/10',
						'from-cyan-500/10 to-emerald-500/10',
						'from-rose-500/10 to-amber-500/10'
					];
					foreach ($solutions as $i => $solution):
				?>
				<div class="group relative">
					<div class="absolute inset-0 bg-gradient-to-br <?= $gradients[$i % count($gradients)] ?> rounded-2xl blur-xl opacity-0 group-hover:opacity-100 transition"></div>
					<div class="relative p-6 bg-white/80 backdrop-blur rounded-2xl text-center border border-slate-200 shadow-sm hover:shadow-md transition hover:-translate-y-1">
						<div class="mx-auto h-12 w-12 rounded-xl bg-slate-100 flex items-center justify-center shadow-sm">
							<img src="<?= htmlspecialchars($solution[2]) ?>" alt="<?= htmlspecialchars($solution[0]) ?>" class="h-7 w-7"/>
						</div>
						<div class="text-lg md:text-xl font-extrabold text-slate-900 mt-3"><?= htmlspecialchars($solution[0]) ?></div>
						<p class="text-sm text-gray-600 mt-1"><?= htmlspecialchars($solution[1]) ?></p>
					</div>
				</div>
				<?php endforeach; ?>
			</div>
		</div>
	</div>
</section>

<!-- Section: Benefits -->
<section class="bg-white section-padding">
	<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
		<div class="text-center">
			<h2 class="text-3xl md:text-4xl font-extrabold text-slate-900">Immediate Benefits of Custom AI</h2>
			<p class="mt-3 text-slate-600 max-w-3xl mx-auto">Go beyond experiments—ship AI that reduces cost, increases speed, and keeps teams focused on high-leverage work.</p>
		</div>
		<?php
			$benefits = [
				['Faster Execution','Copilots generate content, code, and insights instantly.','/images/fast_reliable.svg'],
				['Cost Efficiency','Automation replaces repetitive work and reduces errors.','/images/smart_budget_management.svg'],
				['Smarter Decisions','Predictive dashboards push next-best actions to teams.','/images/Roi.svg'],
				['Better CX','AI assistants deliver personalized, 24/7 support.','/images/user.svg'],
				['Compliance Ready','Audit trails, approvals, and access controls baked in.','/images/secure.svg'],
				['Elastic Capacity','Scale automations without new headcount.','/images/scalable.svg'],
				['Data Activation','Turn unstructured data into searchable knowledge.','/images/growth.svg'],
				['Innovation Velocity','Experiment quickly with reusable AI building blocks.','/images/CustomSoftware.svg'],
				['Human + AI Harmony','Teams focus on strategy while AI handles the busy work.','/images/personalized_features.svg']
			];
			$accentSet = [
				'from-sky-500/10 to-blue-500/10',
				'from-indigo-500/10 to-purple-500/10',
				'from-cyan-500/10 to-emerald-500/10',
				'from-rose-500/10 to-amber-500/10'
			];
		?>
		<div class="mt-10 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
			<?php foreach ($benefits as $i => $benefit): $accent=$accentSet[$i % count($accentSet)]; ?>
				<div class="group relative">
					<div class="absolute inset-0 rounded-2xl bg-gradient-to-br <?= $accent ?> blur-xl opacity-0 group-hover:opacity-100 transition"></div>
					<div class="relative p-6 rounded-2xl bg-white/80 backdrop-blur border border-slate-200 shadow-sm hover:shadow-md transition hover:-translate-y-1">
						<div class="flex items-start gap-4">
							<div class="flex-shrink-0 h-12 w-12 rounded-xl bg-slate-100 flex items-center justify-center shadow-sm">
								<img src="<?= htmlspecialchars($benefit[2]) ?>" alt="<?= htmlspecialchars($benefit[0]) ?>" class="h-7 w-7"/>
							</div>
							<div>
								<h3 class="font-semibold text-slate-900"><?= htmlspecialchars($benefit[0]) ?></h3>
								<p class="text-slate-600 mt-1 text-sm"><?= htmlspecialchars($benefit[1]) ?></p>
							</div>
						</div>
					</div>
				</div>
			<?php endforeach; ?>
		</div>
	</div>
</section>

<!-- Section: Proof -->
<section class="relative bg-gradient-to-br from-slate-900 via-blue-900 to-slate-800 text-white section-padding overflow-hidden">
	<div class="absolute inset-0 pointer-events-none opacity-30 [background:radial-gradient(40rem_20rem_at_10%_10%,rgba(59,130,246,0.25),transparent_60%),radial-gradient(30rem_15rem_at_90%_20%,rgba(99,102,241,0.22),transparent_60%)]"></div>
	<div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
		<div class="text-center">
			<h2 class="text-3xl md:text-4xl font-extrabold">What AI-ready teams outperform on</h2>
			<p class="mt-3 text-blue-100 max-w-3xl mx-auto">Leaders that operationalize AI see higher revenue, stronger margins, and happier customers.</p>
		</div>
		<div class="mt-10 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
			<?php
				$proof = [
					['x2.5', 'Pipeline Velocity', 'AI copilots prioritize leads and craft outreach.'],
					['-40%', 'Average Handle Time', 'Support bots resolve tickets instantly.'],
					['+33%', 'Retention Rate', 'Predictive insights flag churn risks.'],
					['<$500k', 'Avg. Pilot Cost', 'Enterprise‑grade AI without the heavy lift.']
				];
			?>
			<?php foreach ($proof as $stat): ?>
			<div class="group relative">
				<div class="absolute inset-0 bg-gradient-to-br from-blue-600 to-indigo-600 rounded-2xl blur-xl opacity-0 group-hover:opacity-20 transition"></div>
				<div class="relative p-6 rounded-2xl bg-white/10 backdrop-blur border border-white/10 shadow-sm hover:bg-white/15 transition">
					<div class="text-3xl font-black text-white"><?= htmlspecialchars($stat[0]) ?></div>
					<h3 class="mt-1 font-semibold text-white/90"><?= htmlspecialchars($stat[1]) ?></h3>
					<p class="text-blue-100 text-sm mt-2"><?= htmlspecialchars($stat[2]) ?></p>
				</div>
			</div>
			<?php endforeach; ?>
		</div>
	</div>
</section>

<!-- Section: Packages -->
<section class="bg-slate-50 section-padding">
	<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
		<h2 class="text-3xl md:text-4xl font-extrabold text-slate-900 text-center">Custom AI Engagement Packages</h2>
		<p class="mt-3 text-slate-600 text-center max-w-3xl mx-auto">Choose the right starting point—then scale into a roadmap with ongoing optimization.</p>
		<div class="mt-10 grid grid-cols-1 md:grid-cols-2 xl:grid-cols-4 gap-6 md:gap-7">
			<?php
				$packages = [
					[
						'name' => 'Pilot Lab',
						'tag' => 'Quick Win',
						'benefits' => [
							'Validate one AI use case in 4-6 weeks.',
							'Deliver working MVP + ROI model.',
							'Ideal for automation or copilot trials.'
						],
						'includes' => [
							'Discovery + data audit',
							'Design + prototype',
							'Pilot build + rollout',
							'Success metrics dashboard'
						],
						'covers' => 'ChatGPT-style assistants, workflow automation, forecasting POCs.'
					],
					[
						'name' => 'AI Ops Pod',
						'tag' => 'Most Popular · Program',
						'benefits' => [
							'Dedicated pod (PM + DS + ML + Eng).',
							'Multiple use cases in parallel.',
							'24/7 monitoring + guardrails.',
							'Knowledge handoff + enablement.'
						],
						'includes' => [
							'Backlog + roadmap management',
							'Custom model training + fine-tuning',
							'Automated eval + observability',
							'Human-in-loop tooling'
						],
						'covers' => 'Revenue ops, service, marketing, finance, supply chain AI.'
					],
					[
						'name' => 'Intelligence Hub',
						'tag' => 'Growth Mode',
						'benefits' => [
							'Centralized knowledge base + copilots.',
							'Unified semantic search + RAG stack.',
							'Multi-channel orchestration.',
							'Quarterly AI strategy + governance.'
						],
						'includes' => [
							'Data lakehouse pipelines',
							'Vector DB + embeddings',
							'Security + compliance review',
							'Executive reporting + KPIs'
						],
						'covers' => 'Enterprises building shared AI platforms and centers of excellence.'
					],
					[
						'name' => 'AI Guild',
						'tag' => 'Unlimited Vision',
						'benefits' => [
							'Co-owned AI practice + innovation lab.',
							'Custom hiring and upskilling programs.',
							'Joint IP, assets, and playbooks.',
							'Long-term R&D partnership.'
						],
						'includes' => [
							'Dedicated engagement director',
							'Shadow teams for succession',
							'MLOps + DevSecOps integration',
							'Advanced compliance & risk management'
						],
						'covers' => 'Global orgs scaling AI across business units with full governance.'
					],
				];
				$descriptions = [
					'Pilot Lab' => 'Launch an AI proof-of-value with measured outcomes and rollout plan.',
					'AI Ops Pod' => 'Run multiple AI initiatives with a pod embedded into your workflows.',
					'Intelligence Hub' => 'Connect data + AI into a single control plane with reusable components.',
					'AI Guild' => 'Build a long-term AI partnership with ongoing R&D and shared IP.'
				];
				$accentGradients = [
					'from-sky-400 to-blue-400',
					'from-indigo-400 to-purple-400',
					'from-emerald-400 to-cyan-400',
					'from-rose-400 to-amber-400'
				];
				foreach ($packages as $pi => $p):
					$featured = strpos($p['tag'], 'Most Popular') !== false;
					$grad = $accentGradients[$pi % count($accentGradients)];
			?>
			<div class="group relative bg-white rounded-3xl border <?= $featured ? 'border-blue-200 ring-1 ring-blue-200/60' : 'border-slate-200' ?> shadow-sm hover:shadow-md transition hover:-translate-y-1 flex flex-col h-full <?= $featured ? 'overflow-visible' : 'overflow-hidden' ?>">
				<?php if ($featured): ?>
				<div class="absolute -top-3 left-1/2 -translate-x-1/2 z-10 text-[10px] uppercase tracking-wide px-2.5 py-1 rounded-full bg-blue-600 text-white shadow">Most Popular</div>
				<?php endif; ?>
				<div class="p-6 md:p-7 border-b border-slate-200/80 min-h-[160px] flex flex-col justify-start">
					<div class="flex items-center justify-between">
						<div class="text-xs inline-flex items-center px-2.5 py-1 rounded-full <?= $featured ? 'bg-blue-50 text-blue-700 border border-blue-200' : 'bg-accent text-secondary' ?> font-semibold whitespace-nowrap">
							<?= htmlspecialchars($p['tag']) ?>
						</div>
					</div>
					<h3 class="mt-3 text-2xl font-bold text-slate-900 tracking-tight"><?= htmlspecialchars($p['name']) ?></h3>
					<?php $desc = $descriptions[$p['name']] ?? ''; if ($desc): ?>
						<p class="mt-2 text-slate-600 text-sm leading-relaxed">
							<?= htmlspecialchars($desc) ?>
						</p>
					<?php endif; ?>
					<div class="mt-4 h-1 rounded-full bg-gradient-to-r <?= $grad ?> opacity-60"></div>
				</div>
				<div class="p-6 md:p-7 space-y-6 flex-1">
					<div>
						<h4 class="font-semibold text-slate-900 flex items-center gap-2"><span class="inline-block h-1.5 w-1.5 rounded-full bg-primary"></span>Key Benefits</h4>
						<ul class="mt-2 space-y-2 text-sm leading-relaxed text-slate-700">
							<?php foreach ($p['benefits'] as $benefit): ?>
								<li class="flex items-start gap-2">
									<span class="mt-1 inline-block h-1.5 w-1.5 rounded-full <?= $featured ? 'bg-blue-500' : 'bg-primary' ?>"></span>
									<span><?= htmlspecialchars($benefit) ?></span>
								</li>
							<?php endforeach; ?>
						</ul>
					</div>
					<div class="pt-1 border-t border-slate-200/70">
						<h4 class="font-semibold text-slate-900 flex items-center gap-2"><span class="inline-block h-1.5 w-1.5 rounded-full bg-emerald-500"></span>What's Included</h4>
						<ul class="mt-2 space-y-2 text-sm leading-relaxed text-slate-700">
							<?php foreach ($p['includes'] as $include): ?>
								<li class="flex items-start gap-2">
									<span class="mt-0.5 inline-flex items-center justify-center h-4 w-4 rounded-full bg-emerald-50 border border-emerald-200">
										<svg viewBox="0 0 24 24" class="h-3 w-3 text-emerald-600" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6L9 17l-5-5"/></svg>
									</span>
									<span><?= htmlspecialchars($include) ?></span>
								</li>
							<?php endforeach; ?>
						</ul>
					</div>
					<div class="pt-1 border-t border-slate-200/70">
						<h4 class="font-semibold text-slate-900 flex items-center gap-2"><span class="inline-block h-1.5 w-1.5 rounded-full bg-indigo-500"></span>What It Covers</h4>
						<p class="mt-2 text-sm leading-relaxed text-slate-600"><?= htmlspecialchars($p['covers']) ?></p>
					</div>
				</div>
				<div class="mt-auto p-6 md:p-7 pt-0">
					<a href="/?page=get-proposal" class="inline-flex items-center justify-center w-full <?= $featured ? 'bg-blue-600 hover:bg-blue-700' : 'bg-primary hover:opacity-90' ?> text-white px-6 py-3 rounded-full font-semibold transition shadow">Get Started</a>
				</div>
			</div>
			<?php endforeach; ?>
		</div>
	</div>
</section>

<!-- Section: FAQs -->
<section class="bg-white section-padding">
	<div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8">
		<h2 class="text-3xl md:text-4xl font-extrabold text-slate-900 text-center">Frequently Asked Questions</h2>
		<p class="mt-3 text-slate-600 text-center">Still have questions? Here are the ones we hear the most.</p>
		<div class="mt-8 divide-y divide-slate-200 bg-slate-50 border border-slate-200 rounded-2xl overflow-hidden shadow-sm">
			<?php
				$faqs = [
					['Which AI models and stacks do you support?', 'OpenAI, Anthropic, Google, open-source (Llama, Mistral), plus custom ML models deployed via AWS, Azure, GCP, or on-prem.'],
					['How do you handle data security & compliance?', 'Role-based access, encryption in transit / at rest, SOC2-aligned controls, and optional VPC or on-prem deployments.'],
					['Can you integrate with our existing tools?', 'Yes—CRMs, ERPs, data warehouses, custom APIs, and internal knowledge bases become inputs for copilots and agents.'],
					['Do you provide ongoing maintenance and tuning?', 'We monitor performance, retrain models, update prompts, and manage drift so AI continues to deliver ROI.'],
					['How soon can we launch?', 'Pilots typically start in under two weeks with scoped outcomes, success metrics, and a clear rollout plan.'],
				];
				foreach ($faqs as $index => $faq):
			?>
			<details<?= $index===0 ? ' open' : '' ?> class="group p-6">
				<summary class="flex items-center justify-between cursor-pointer">
					<span class="font-semibold text-slate-900"><?= htmlspecialchars($faq[0]) ?></span>
					<span class="ml-4 text-slate-500 group-open:rotate-180 transition">▾</span>
				</summary>
				<p class="mt-3 text-slate-600"><?= htmlspecialchars($faq[1]) ?></p>
			</details>
			<?php endforeach; ?>
		</div>
	</div>
</section>

<!-- Slider Controller -->
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
            dots.forEach((d, di)=>{
                d.style.backgroundColor = di === i ? '#2563eb' : '#bfdbfe';
            });
            index = i;
        }

        function next(){
            show((index + 1) % slides.length);
        }

        dots.forEach((d, di)=>{
            d.addEventListener('click', ()=>{
                show(di);
                restart();
            });
        });

        function restart(){
            if(timer) clearInterval(timer);
            timer = setInterval(next, 5000);
        }

        show(0);
        restart();
    })();
</script>

<!-- Insights Tabs Controller -->
<script>
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
                    t.classList.remove('text-primary','hover:bg-primary/10','border','border-primary/20');
                    t.setAttribute('aria-selected','true');
                } else {
                    t.classList.remove('bg-primary','text-white','ring-1','ring-primary/30','shadow-sm','hover:bg-primary');
                    t.classList.add('text-primary','hover:bg-primary/10');
                    t.setAttribute('aria-selected','false');
                }
            });
            panels.forEach((p, pi)=>{
                if(pi===i){
                    p.classList.remove('hidden');
                } else {
                    p.classList.add('hidden');
                }
            });
            current = i;
        }
        tabs.forEach((t, ti)=>{
            t.addEventListener('click', ()=>{
                activate(ti);
                restart();
            });
        });
        function next(){
            activate((current + 1) % tabs.length);
        }
        function restart(){
            if(autoTimer) clearInterval(autoTimer);
            autoTimer = setInterval(next, 6000);
        }
        activate(0);
        restart();
    })();
</script>

