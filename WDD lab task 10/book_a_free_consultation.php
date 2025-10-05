<?php
// Include configuration
require_once 'config.php';

// Set current page for proper meta tags and navigation
$current_page = 'consultation';

// Handle form submission
$form_submitted = false;
$form_errors = [];

if ($_POST) {
    // Validate form data
    $name = trim($_POST['name'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $company = trim($_POST['company'] ?? '');
    $phone = trim($_POST['phone'] ?? '');
    $message = trim($_POST['message'] ?? '');

    if (empty($name)) {
        $form_errors[] = 'Name is required';
    }

    if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $form_errors[] = 'Valid email is required';
    }

    if (empty($company)) {
        $form_errors[] = 'Company is required';
    }

    if (empty($message)) {
        $form_errors[] = 'Message is required';
    }

    // If no errors, process the form (in real app, send email, save to database, etc.)
    if (empty($form_errors)) {
        $form_submitted = true;
        // Here you would normally send the email or save to database
    }
}
?>

<?php include 'includes/header.php'; ?>

<!-- Book Consultation Main Section -->
<section class="bg-white py-16 md:py-24">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-6">
                Book Your Free Consultation
            </h1>
            <p class="text-lg text-gray-600 max-w-2xl mx-auto">
                Get honest, expert cybersecurity advice tailored to your business. No sales pitch, just practical guidance from professionals who understand Australian business challenges.
            </p>
        </div>

        <?php if ($form_submitted): ?>
            <!-- Success Message -->
            <div class="bg-green-50 border border-green-200 rounded-lg p-6 mb-8">
                <div class="flex items-center">
                    <div class="flex-shrink-0">
                        <svg class="h-5 w-5 text-green-400" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                        </svg>
                    </div>
                    <div class="ml-3">
                        <h3 class="text-sm font-medium text-green-800">Consultation Request Submitted</h3>
                        <div class="mt-2 text-sm text-green-700">
                            <p>Thank you for your interest! We'll be in touch within 24 hours to schedule your free consultation.</p>
                        </div>
                    </div>
                </div>
            </div>
        <?php endif; ?>

        <?php if (!empty($form_errors)): ?>
            <!-- Error Messages -->
            <div class="bg-red-50 border border-red-200 rounded-lg p-6 mb-8">
                <div class="flex">
                    <div class="flex-shrink-0">
                        <svg class="h-5 w-5 text-red-400" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd"></path>
                        </svg>
                    </div>
                    <div class="ml-3">
                        <h3 class="text-sm font-medium text-red-800">Please fix the following errors:</h3>
                        <div class="mt-2 text-sm text-red-700">
                            <ul class="list-disc pl-5 space-y-1">
                                <?php foreach ($form_errors as $error): ?>
                                    <li><?php echo htmlspecialchars($error); ?></li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        <?php endif; ?>

        <!-- Consultation Form -->
        <div class="bg-white shadow-xl rounded-lg p-8">
            <form method="POST" action="" class="space-y-6">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <!-- Name Field -->
                    <div>
                        <label for="name" class="block text-sm font-medium text-gray-700 mb-2">
                            Full Name <span class="text-red-500">*</span>
                        </label>
                        <input type="text" id="name" name="name" value="<?php echo htmlspecialchars($_POST['name'] ?? ''); ?>" required class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#02B578] focus:border-transparent transition-colors" placeholder="Enter your full name">
                    </div>

                    <!-- Email Field -->
                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-700 mb-2">
                            Email Address <span class="text-red-500">*</span>
                        </label>
                        <input type="email" id="email" name="email" value="<?php echo htmlspecialchars($_POST['email'] ?? ''); ?>" required class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#02B578] focus:border-transparent transition-colors" placeholder="your.email@company.com">
                    </div>

                    <!-- Company Field -->
                    <div>
                        <label for="company" class="block text-sm font-medium text-gray-700 mb-2">
                            Company Name <span class="text-red-500">*</span>
                        </label>
                        <input type="text" id="company" name="company" value="<?php echo htmlspecialchars($_POST['company'] ?? ''); ?>" required class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#02B578] focus:border-transparent transition-colors" placeholder="Your company name">
                    </div>

                    <!-- Phone Field -->
                    <div>
                        <label for="phone" class="block text-sm font-medium text-gray-700 mb-2">
                            Phone Number
                        </label>
                        <input type="tel" id="phone" name="phone" value="<?php echo htmlspecialchars($_POST['phone'] ?? ''); ?>" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#02B578] focus:border-transparent transition-colors" placeholder="+61 XXX XXX XXX">
                    </div>
                </div>

                <!-- Message Field -->
                <div>
                    <label for="message" class="block text-sm font-medium text-gray-700 mb-2">
                        Tell us about your cybersecurity needs <span class="text-red-500">*</span>
                    </label>
                    <textarea id="message" name="message" rows="5" required class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#02B578] focus:border-transparent transition-colors resize-none" placeholder="Describe your current cybersecurity challenges, what you'd like to discuss, or any specific areas of concern..."><?php echo htmlspecialchars($_POST['message'] ?? ''); ?></textarea>
                </div>

                <!-- Industry Selection -->
                <div>
                    <label for="industry" class="block text-sm font-medium text-gray-700 mb-2">
                        Industry
                    </label>
                    <select id="industry" name="industry" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#02B578] focus:border-transparent transition-colors">
                        <option value="">Select your industry (optional)</option>
                        <option value="financial-services" <?php echo ($_POST['industry'] ?? '') === 'financial-services' ? 'selected' : ''; ?>>Financial Services</option>
                        <option value="healthcare" <?php echo ($_POST['industry'] ?? '') === 'healthcare' ? 'selected' : ''; ?>>Healthcare</option>
                        <option value="technology" <?php echo ($_POST['industry'] ?? '') === 'technology' ? 'selected' : ''; ?>>Technology</option>
                        <option value="manufacturing" <?php echo ($_POST['industry'] ?? '') === 'manufacturing' ? 'selected' : ''; ?>>Manufacturing</option>
                        <option value="retail" <?php echo ($_POST['industry'] ?? '') === 'retail' ? 'selected' : ''; ?>>Retail</option>
                        <option value="government" <?php echo ($_POST['industry'] ?? '') === 'government' ? 'selected' : ''; ?>>Government</option>
                        <option value="education" <?php echo ($_POST['industry'] ?? '') === 'education' ? 'selected' : ''; ?>>Education</option>
                        <option value="other" <?php echo ($_POST['industry'] ?? '') === 'other' ? 'selected' : ''; ?>>Other</option>
                    </select>
                </div>

                <!-- Preferred Contact Method -->
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-3">
                        Preferred Contact Method
                    </label>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                        <label class="flex items-center p-3 border border-gray-300 rounded-lg cursor-pointer hover:bg-gray-50 transition-colors">
                            <input type="radio" name="contact_method" value="email" <?php echo ($_POST['contact_method'] ?? 'email') === 'email' ? 'checked' : ''; ?> class="text-[#02B578] focus:ring-[#02B578]">
                            <span class="ml-2 text-sm text-gray-700">Email</span>
                        </label>
                        <label class="flex items-center p-3 border border-gray-300 rounded-lg cursor-pointer hover:bg-gray-50 transition-colors">
                            <input type="radio" name="contact_method" value="phone" <?php echo ($_POST['contact_method'] ?? '') === 'phone' ? 'checked' : ''; ?> class="text-[#02B578] focus:ring-[#02B578]">
                            <span class="ml-2 text-sm text-gray-700">Phone Call</span>
                        </label>
                        <label class="flex items-center p-3 border border-gray-300 rounded-lg cursor-pointer hover:bg-gray-50 transition-colors">
                            <input type="radio" name="contact_method" value="video" <?php echo ($_POST['contact_method'] ?? '') === 'video' ? 'checked' : ''; ?> class="text-[#02B578] focus:ring-[#02B578]">
                            <span class="ml-2 text-sm text-gray-700">Video Call</span>
                        </label>
                    </div>
                </div>

                <!-- Submit Button -->
                <div class="pt-6">
                    <button type="submit" class="w-full bg-[#02B578] hover:bg-[#02B578]/90 text-white font-semibold px-8 py-4 rounded-lg transition-all duration-300 transform hover:-translate-y-1 shadow-lg hover:shadow-xl">
                        Book Free Consultation
                    </button>
                </div>

                <!-- Privacy Notice -->
                <div class="text-xs text-gray-500 text-center">
                    By submitting this form, you agree to our Privacy Policy and consent to be contacted regarding cybersecurity services.
                </div>
            </form>
        </div>

        <!-- What to Expect Section -->
        <div class="mt-16 grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="text-center p-6 bg-gray-50 rounded-lg">
                <div class="w-12 h-12 bg-[#02B578] rounded-full flex items-center justify-center mx-auto mb-4">
                    <span class="text-white font-bold">1</span>
                </div>
                <h3 class="text-lg font-semibold text-gray-900 mb-2">Initial Assessment</h3>
                <p class="text-sm text-gray-600">We'll discuss your current security posture and business objectives.</p>
            </div>

            <div class="text-center p-6 bg-gray-50 rounded-lg">
                <div class="w-12 h-12 bg-[#02B578] rounded-full flex items-center justify-center mx-auto mb-4">
                    <span class="text-white font-bold">2</span>
                </div>
                <h3 class="text-lg font-semibold text-gray-900 mb-2">Honest Evaluation</h3>
                <p class="text-sm text-gray-600">Get straight-forward advice about what you actually need.</p>
            </div>

            <div class="text-center p-6 bg-gray-50 rounded-lg">
                <div class="w-12 h-12 bg-[#02B578] rounded-full flex items-center justify-center mx-auto mb-4">
                    <span class="text-white font-bold">3</span>
                </div>
                <h3 class="text-lg font-semibold text-gray-900 mb-2">Clear Next Steps</h3>
                <p class="text-sm text-gray-600">Receive actionable recommendations you can implement immediately.</p>
            </div>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>