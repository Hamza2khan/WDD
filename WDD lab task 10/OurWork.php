<?php
// Include configuration
require_once 'config.php';

// Set current page for proper meta tags and navigation
$current_page = 'our_work';
?>

<?php include 'includes/header.php'; ?>

<!-- How We Work Hero Section -->
<section class="bg-white py-16 md:py-24">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-4xl mx-auto">
            <h1 class="text-4xl md:text-6xl font-bold text-gray-900 mb-6 tracking-wide">
                How We Work
            </h1>
            <p class="text-lg text-gray-600 leading-relaxed">
                Our methodology is built on honest assessment, practical recommendations, and genuine partnership. We don't just identify problems—we work with you to solve them in ways that make sense for your business.
            </p>
        </div>
    </div>
</section>

<!-- Our Process Section -->
<section class="bg-gray-50 py-16 md:py-24">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-6">Our Process</h2>
            <p class="text-lg text-gray-600 max-w-3xl mx-auto">
                Every engagement follows our proven methodology designed to deliver maximum value while respecting your time and budget.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            <?php
            $process_steps = [
                [
                    'number' => '01',
                    'title' => 'Discovery & Assessment',
                    'description' => 'We start by understanding your business context, current security posture, and real-world constraints.',
                    'icon' => 'assessment.webp'
                ],
                [
                    'number' => '02',
                    'title' => 'Analysis & Prioritisation',
                    'description' => 'Identify genuine risks and opportunities, prioritised by business impact and practical feasibility.',
                    'icon' => 'analysis.webp'
                ],
                [
                    'number' => '03',
                    'title' => 'Recommendations',
                    'description' => 'Receive honest, actionable guidance tailored to your specific environment and objectives.',
                    'icon' => 'recommendations.webp'
                ],
                [
                    'number' => '04',
                    'title' => 'Implementation Support',
                    'description' => 'Ongoing partnership to help you implement recommendations effectively and sustainably.',
                    'icon' => 'implementation.webp'
                ]
            ];

            foreach ($process_steps as $step): ?>
                <div class="bg-white rounded-lg p-8 shadow-sm hover:shadow-lg transition-all duration-300">
                    <div class="flex items-center mb-6">
                        <span class="text-4xl font-bold text-[#02B578] mr-4"><?php echo $step['number']; ?></span>
                        <img src="<?php echo ASSETS_PATH . $step['icon']; ?>" alt="<?php echo htmlspecialchars($step['title']); ?>" class="w-8 h-8" />
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 mb-4"><?php echo htmlspecialchars($step['title']); ?></h3>
                    <p class="text-gray-600 text-sm leading-relaxed"><?php echo htmlspecialchars($step['description']); ?></p>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- Why This Approach Works Section -->
<section class="bg-white py-16 md:py-24">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
            <div>
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-6">
                    Why This Approach Works
                </h2>
                <div class="space-y-6">
                    <?php
                    $benefits = [
                        [
                            'title' => 'Context-Driven Solutions',
                            'description' => 'Every recommendation considers your specific business environment, not generic best practices.'
                        ],
                        [
                            'title' => 'Honest Communication',
                            'description' => 'We tell you what you need to hear, not what we think you want to hear.'
                        ],
                        [
                            'title' => 'Practical Implementation',
                            'description' => 'Our recommendations can actually be implemented with your existing resources and constraints.'
                        ],
                        [
                            'title' => 'Measurable Outcomes',
                            'description' => 'Clear metrics and success criteria so you know when objectives have been achieved.'
                        ]
                    ];

                    foreach ($benefits as $benefit): ?>
                        <div class="flex items-start gap-4">
                            <div class="w-2 h-2 bg-[#02B578] rounded-full mt-3 flex-shrink-0"></div>
                            <div>
                                <h3 class="text-lg font-semibold text-gray-900 mb-2"><?php echo htmlspecialchars($benefit['title']); ?></h3>
                                <p class="text-gray-600"><?php echo htmlspecialchars($benefit['description']); ?></p>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
            <div class="lg:pl-16">
                <img src="<?php echo ASSETS_PATH; ?>how-we-work-illustration.webp" alt="How we work illustration" class="w-full h-auto rounded-lg shadow-lg" />
            </div>
        </div>
    </div>
</section>

<!-- Partnership Principles Section -->
<section class="bg-gray-50 py-16 md:py-24">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-6">Partnership Principles</h2>
            <p class="text-lg text-gray-600 max-w-3xl mx-auto">
                We believe in building genuine partnerships, not vendor-client relationships. These principles guide every interaction.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <?php
            $principles = [
                [
                    'title' => 'Transparency',
                    'description' => 'Clear communication about what we\'re doing, why we\'re doing it, and what it will cost.',
                    'icon' => 'transparency.webp'
                ],
                [
                    'title' => 'Collaboration',
                    'description' => 'Working with your team to build internal capability rather than creating dependency.',
                    'icon' => 'collaboration.webp'
                ],
                [
                    'title' => 'Value Focus',
                    'description' => 'Every recommendation must deliver measurable business value, not just technical compliance.',
                    'icon' => 'value-focus.webp'
                ]
            ];

            foreach ($principles as $principle): ?>
                <div class="bg-white rounded-lg p-8 shadow-sm hover:shadow-lg transition-all duration-300 text-center">
                    <div class="w-16 h-16 bg-[#02B578]/10 rounded-full flex items-center justify-center mx-auto mb-6">
                        <img src="<?php echo ASSETS_PATH . $principle['icon']; ?>" alt="<?php echo htmlspecialchars($principle['title']); ?>" class="w-8 h-8" />
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 mb-4"><?php echo htmlspecialchars($principle['title']); ?></h3>
                    <p class="text-gray-600"><?php echo htmlspecialchars($principle['description']); ?></p>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- Ready to Start Section -->
<section class="bg-[#02B578] text-white py-16 md:py-24">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="text-3xl md:text-4xl font-bold mb-6">
            Ready to Start?
        </h2>
        <p class="text-lg text-white/90 mb-8 max-w-2xl mx-auto">
            Experience the difference of working with cybersecurity professionals who put your business needs first.
        </p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <button class="bg-white text-[#02B578] hover:bg-gray-100 font-semibold px-8 py-3 rounded-[300px] transition-all duration-300">
                <a href="book_a_free_consultation.php">Book Free Consultation</a>
            </button>
            <button class="bg-transparent border border-white text-white hover:bg-white hover:text-[#02B578] font-semibold px-8 py-3 rounded-[300px] transition-all duration-300">
                <a href="index.php">Learn More About Our Services</a>
            </button>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>