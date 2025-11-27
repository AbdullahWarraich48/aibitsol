<?php
$bookExpertSuccess = false;
$bookExpertSuccessMessage = '';
$bookExpertErrorMessage = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    require_once __DIR__ . '/../includes/book_expert_mailer.php';
    $bookExpertResult = processBookExpertSubmission($_POST);

    if ($bookExpertResult['success']) {
        $bookExpertSuccess = true;
        $bookExpertSuccessMessage = "Your submission is successful. We'll follow up within 24 hours.";
        $_POST = [];
    } else {
        $bookExpertErrorMessage = $bookExpertResult['message'] ?? 'Failed to send message. Please try again.';
    }
}

$showBookExpertSuccess = $bookExpertSuccess || isset($_GET['success']);
$bookExpertSuccessBannerText = $bookExpertSuccessMessage;
if (!$bookExpertSuccessBannerText && isset($_GET['success'])) {
    $bookExpertSuccessBannerText = "Your submission is successful. We'll follow up within 24 hours.";
}

$showBookExpertError = !empty($bookExpertErrorMessage) || isset($_GET['error']);
$bookExpertErrorBannerText = $bookExpertErrorMessage;
if (!$bookExpertErrorBannerText && isset($_GET['error'])) {
    $bookExpertErrorBannerText = $_GET['error'];
}

$bookExpertAction = htmlspecialchars($_SERVER['REQUEST_URI'] ?? '/?page=book-an-expert', ENT_QUOTES, 'UTF-8');
?>
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
            <?php if ($showBookExpertSuccess): ?>
            <div class="mb-6 rounded-xl border border-green-300 bg-green-50 px-4 py-3 text-green-800 flex items-center">
                <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>
                <span class="font-semibold"><?php echo htmlspecialchars($bookExpertSuccessBannerText, ENT_QUOTES, 'UTF-8'); ?></span>
            </div>
            <?php endif; ?>

            <?php if ($showBookExpertError): ?>
            <div class="mb-6 rounded-xl border border-red-300 bg-red-50 px-4 py-3 text-red-800 flex items-center">
                <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd"></path></svg>
                <span class="font-semibold">Error:</span>
                <span class="ml-2"><?php echo htmlspecialchars($bookExpertErrorBannerText, ENT_QUOTES, 'UTF-8'); ?></span>
            </div>
            <?php endif; ?>

            <div id="book-expert-form-error" class="hidden mb-6 rounded-xl border border-red-300 bg-red-50 px-4 py-3 text-sm text-red-800">
                Please fill in all required fields before booking your call.
            </div>

            <form id="book-expert-form" class="grid grid-cols-1 md:grid-cols-2 gap-4 md:gap-6" method="POST" action="<?php echo $bookExpertAction; ?>" novalidate>
                <input type="hidden" name="source" value="book-expert">
                <input type="hidden" name="form_identifier" value="book_expert_form">
                <div class="md:col-span-1">
                    <label for="name" class="block text-sm font-medium text-gray-700 mb-2">Full Name *</label>
                    <input id="name" name="name" required class="w-full border border-gray-300 rounded-xl px-4 py-3 focus:ring-2 focus:ring-primary focus:border-transparent text-gray-900 placeholder-gray-500 bg-white" />
                </div>
                <div class="md:col-span-1">
                    <label for="email" class="block text-sm font-medium text-gray-700 mb-2">Email *</label>
                    <input id="email" name="email" type="email" required class="w-full border border-gray-300 rounded-xl px-4 py-3 focus:ring-2 focus:ring-primary focus:border-transparent text-gray-900 placeholder-gray-500 bg-white" />
                </div>
                <div class="md:col-span-1">
                    <label for="phone" class="block text-sm font-medium text-gray-700 mb-2">Phone</label>
                    <input id="phone" name="phone" class="w-full border border-gray-300 rounded-xl px-4 py-3 focus:ring-2 focus:ring-primary focus:border-transparent text-gray-900 placeholder-gray-500 bg-white" />
                </div>
                <div class="md:col-span-1">
                    <label for="service" class="block text-sm font-medium text-gray-700 mb-2">I’m interested in</label>
                    <select id="service" name="service" class="w-full border border-gray-300 rounded-xl px-4 py-3 focus:ring-2 focus:ring-primary focus:border-transparent text-gray-900 bg-white">
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
                    <textarea id="message" name="message" rows="4" class="w-full border border-gray-300 rounded-xl px-4 py-3 focus:ring-2 focus:ring-primary focus:border-transparent text-gray-900 placeholder-gray-500 bg-white" placeholder="Tell us about your project, goals, timeline, or any questions..."></textarea>
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

<script>
document.addEventListener('DOMContentLoaded', function () {
    const form = document.getElementById('book-expert-form');
    const errorBanner = document.getElementById('book-expert-form-error');
    if (!form) return;

    const submitButton = form.querySelector('button[type="submit"]');
    const requiredFields = form.querySelectorAll('[required]');

    form.addEventListener('submit', function (event) {
        let hasErrors = false;

        requiredFields.forEach(field => {
            const value = field.value.trim();
            if (!value) {
                hasErrors = true;
                field.classList.add('border-red-500', 'focus:ring-red-500');
                field.setAttribute('aria-invalid', 'true');
            } else {
                field.classList.remove('border-red-500', 'focus:ring-red-500');
                field.removeAttribute('aria-invalid');
            }
        });

        if (hasErrors) {
            event.preventDefault();
            if (errorBanner) {
                errorBanner.classList.remove('hidden');
            }
            if (submitButton) {
                submitButton.disabled = false;
                submitButton.innerText = 'Book Expert Call';
            }
            const firstError = Array.from(requiredFields).find(field => !field.value.trim());
            if (firstError) {
                firstError.focus();
            }
            return;
        }

        if (errorBanner) {
            errorBanner.classList.add('hidden');
        }
        if (submitButton) {
            submitButton.disabled = true;
            submitButton.innerText = 'Booking...';
        }
    });
});
</script>


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
