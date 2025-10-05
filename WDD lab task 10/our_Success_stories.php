<?php
// Include configuration
require_once 'config.php';

// Set current page for proper meta tags and navigation
$current_page = 'success_stories';
?>

<?php include 'includes/header.php'; ?>

<!-- Success Stories Hero Section -->
<section class="bg-white py-16 md:py-24">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-4xl mx-auto">
            <h1 class="text-4xl md:text-6xl font-bold text-gray-900 mb-6 tracking-wide">
                Our Success Stories
            </h1>
            <p class="text-lg text-gray-600 leading-relaxed">
                Real results from real partnerships. See how we've helped Australian businesses strengthen their cybersecurity posture while achieving their broader objectives.
            </p>
        </div>
    </div>
</section>

<!-- Featured Case Studies Section -->
<section class="bg-gray-50 py-16 md:py-24">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-6">Featured Case Studies</h2>
            <p class="text-lg text-gray-600 max-w-3xl mx-auto">
                These case studies demonstrate our commitment to delivering practical, business-focused cybersecurity solutions.
            </p>
        </div>

        <div class="space-y-16">
            <?php
            $case_studies = [
                [
                    'title' => 'Financial Services Firm: ISO 27001 Compliance Transformation',
                    'industry' => 'Financial Services',
                    'challenge' => 'A growing fintech company needed to achieve ISO 27001 certification to meet regulatory requirements and client expectations, but lacked internal expertise and resources.',
                    'solution' => 'We conducted a comprehensive gap analysis, developed a pragmatic implementation roadmap, and provided hands-on support throughout the certification process.',
                    'results' => [
                        'Achieved ISO 27001 certification in 8 months',
                        'Reduced security incidents by 75%',
                        'Improved client confidence and won 3 major contracts',
                        'Built internal security capability for ongoing compliance'
                    ],
                    'image' => 'case-study-financial.webp',
                    'testimonial' => 'Cliffside didn\'t just help us get certified—they helped us build a security program that actually works for our business.',
                    'client' => 'CTO, Australian FinTech'
                ],
                [
                    'title' => 'Healthcare Provider: Multi-Site Security Standardisation',
                    'industry' => 'Healthcare',
                    'challenge' => 'A healthcare network with 12 locations had inconsistent security practices and struggled to protect sensitive patient data across multiple sites.',
                    'solution' => 'We designed a standardised security framework that could be adapted to each location\'s unique requirements while maintaining consistent protection levels.',
                    'results' => [
                        'Standardised security across all 12 locations',
                        'Reduced compliance audit findings by 90%',
                        'Implemented automated security monitoring',
                        'Trained 200+ staff on security best practices'
                    ],
                    'image' => 'case-study-healthcare.webp',
                    'testimonial' => 'The team understood that cookie-cutter solutions wouldn\'t work for us. They created something that fit our complex environment perfectly.',
                    'client' => 'IT Director, Healthcare Network'
                ],
                [
                    'title' => 'Manufacturing Company: Operational Technology Security',
                    'industry' => 'Manufacturing',
                    'challenge' => 'A traditional manufacturer needed to secure their operational technology environment without disrupting critical production processes.',
                    'solution' => 'We developed a phased approach that prioritised critical assets and implemented security controls with minimal operational impact.',
                    'results' => [
                        'Secured OT environment with zero production downtime',
                        'Implemented network segmentation and monitoring',
                        'Detected and prevented 2 potential cyber attacks',
                        'Achieved cyber insurance premium reduction of 30%'
                    ],
                    'image' => 'case-study-manufacturing.webp',
                    'testimonial' => 'They kept our production running while making us significantly more secure. That\'s exactly what we needed.',
                    'client' => 'Operations Manager, Manufacturing Company'
                ]
            ];

            foreach ($case_studies as $index => $study): ?>
                <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-0">
                        <!-- Content Side -->
                        <div class="p-8 lg:p-12 <?php echo $index % 2 === 0 ? 'lg:order-1' : 'lg:order-2'; ?>">
                            <div class="inline-block bg-[#02B578]/10 text-[#02B578] px-3 py-1 rounded-full text-sm font-medium mb-4">
                                <?php echo htmlspecialchars($study['industry']); ?>
                            </div>
                            <h3 class="text-2xl md:text-3xl font-bold text-gray-900 mb-6">
                                <?php echo htmlspecialchars($study['title']); ?>
                            </h3>

                            <div class="space-y-6">
                                <div>
                                    <h4 class="text-lg font-semibold text-gray-900 mb-2">Challenge</h4>
                                    <p class="text-gray-600"><?php echo htmlspecialchars($study['challenge']); ?></p>
                                </div>

                                <div>
                                    <h4 class="text-lg font-semibold text-gray-900 mb-2">Solution</h4>
                                    <p class="text-gray-600"><?php echo htmlspecialchars($study['solution']); ?></p>
                                </div>

                                <div>
                                    <h4 class="text-lg font-semibold text-gray-900 mb-3">Results</h4>
                                    <ul class="space-y-2">
                                        <?php foreach ($study['results'] as $result): ?>
                                            <li class="flex items-start gap-3">
                                                <div class="w-2 h-2 bg-[#02B578] rounded-full mt-2 flex-shrink-0"></div>
                                                <span class="text-gray-600"><?php echo htmlspecialchars($result); ?></span>
                                            </li>
                                        <?php endforeach; ?>
                                    </ul>
                                </div>

                                <div class="bg-gray-50 p-6 rounded-lg">
                                    <p class="text-gray-700 italic mb-3">"<?php echo htmlspecialchars($study['testimonial']); ?>"</p>
                                    <p class="text-sm text-gray-500">— <?php echo htmlspecialchars($study['client']); ?></p>
                                </div>
                            </div>
                        </div>

                        <!-- Image Side -->
                        <div class="<?php echo $index % 2 === 0 ? 'lg:order-2' : 'lg:order-1'; ?>">
                            <img src="<?php echo ASSETS_PATH . $study['image']; ?>" alt="<?php echo htmlspecialchars($study['title']); ?>" class="w-full h-full object-cover min-h-[400px]" />
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- Metrics Section -->
<section class="bg-[#02B578] text-white py-16 md:py-24">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-bold mb-6">By the Numbers</h2>
            <p class="text-lg text-white/90 max-w-3xl mx-auto">
                Our track record speaks for itself. Here's what we've achieved for our clients.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
            <?php
            $metrics = [
                [
                    'number' => '150+',
                    'label' => 'Successful Projects',
                    'description' => 'Completed assessments and implementations'
                ],
                [
                    'number' => '98%',
                    'label' => 'Client Satisfaction',
                    'description' => 'Based on post-project surveys'
                ],
                [
                    'number' => '85%',
                    'label' => 'Average Risk Reduction',
                    'description' => 'Measured through follow-up assessments'
                ],
                [
                    'number' => '6 Months',
                    'label' => 'Average ROI Time',
                    'description' => 'Time to realize security investment returns'
                ]
            ];

            foreach ($metrics as $metric): ?>
                <div class="text-center">
                    <div class="text-4xl md:text-5xl font-bold mb-2"><?php echo htmlspecialchars($metric['number']); ?></div>
                    <div class="text-lg font-semibold mb-2"><?php echo htmlspecialchars($metric['label']); ?></div>
                    <div class="text-sm text-white/80"><?php echo htmlspecialchars($metric['description']); ?></div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- Client Testimonials -->
<section class="bg-white py-16 md:py-24">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-6">What Our Clients Say</h2>
            <p class="text-lg text-gray-600 max-w-3xl mx-auto">
                Don't just take our word for it. Here's what our clients have to say about working with Cliffside.
            </p>
        </div>

        <?php include 'includes/testimonial-slider.php'; ?>
    </div>
</section>

<!-- Ready to Start Section -->
<section class="bg-gray-50 py-16 md:py-24">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-6">
            Ready to Write Your Success Story?
        </h2>
        <p class="text-lg text-gray-600 mb-8 max-w-2xl mx-auto">
            Every successful cybersecurity transformation starts with an honest assessment. Let's discuss how we can help you achieve your security objectives.
        </p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <button class="bg-[#02B578] hover:bg-[#02B578]/90 text-white font-semibold px-8 py-3 rounded-[300px] transition-all duration-300">
                <a href="book_a_free_consultation.php">Book Free Consultation</a>
            </button>
            <button class="bg-transparent border border-gray-900 text-gray-900 hover:bg-gray-900 hover:text-white font-semibold px-8 py-3 rounded-[300px] transition-all duration-300">
                <a href="index.php">Learn About Our Services</a>
            </button>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>