<?php
// Include configuration
require_once 'config.php';
testimonial-slider
// Set current page for proper meta tags and navigation
$current_page = 'career';
?>

<?php include 'includes/header.php'; ?>

<!-- Career Hero Section -->
<section class="bg-white py-16 md:py-24">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-4xl mx-auto">
            <h1 class="text-4xl md:text-6xl font-bold text-gray-900 mb-6 tracking-wide">
                Career at CliffSide
            </h1>
            <p class="text-lg text-gray-600 leading-relaxed mb-8">
                Join a team that's redefining cybersecurity consulting. We're looking for professionals who share our commitment to honest expertise and practical solutions.
            </p>
            <button class="bg-[#02B578] hover:bg-[#02B578]/90 text-white font-semibold px-8 py-3 rounded-[300px] transition-all duration-300">
                <a href="#open-positions">View Open Positions</a>
            </button>
        </div>
    </div>
</section>

<!-- Why Work With Us Section -->
<section class="bg-gray-50 py-16 md:py-24">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-6">Why Work With Us</h2>
            <p class="text-lg text-gray-600 max-w-3xl mx-auto">
                At Cliffside, we believe that great cybersecurity comes from great people working in an environment that supports excellence.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <?php
            $benefits = [
                [
                    'title' => 'Meaningful Work',
                    'description' => 'Make a real difference by helping Australian businesses strengthen their security posture.',
                    'icon' => 'meaningful-work.webp'
                ],
                [
                    'title' => 'Professional Growth',
                    'description' => 'Continuous learning opportunities, certifications, and exposure to diverse security challenges.',
                    'icon' => 'professional-growth.webp'
                ],
                [
                    'title' => 'Work-Life Balance',
                    'description' => 'Flexible working arrangements and a culture that values personal well-being.',
                    'icon' => 'work-life-balance.webp'
                ],
                [
                    'title' => 'Collaborative Culture',
                    'description' => 'Work alongside experts who are passionate about sharing knowledge and solving problems.',
                    'icon' => 'collaborative-culture.webp'
                ],
                [
                    'title' => 'Competitive Package',
                    'description' => 'Attractive salary, benefits, and opportunities for equity participation.',
                    'icon' => 'competitive-package.webp'
                ],
                [
                    'title' => 'Innovation Focus',
                    'description' => 'Stay at the forefront of cybersecurity technology and methodologies.',
                    'icon' => 'innovation-focus.webp'
                ]
            ];

            foreach ($benefits as $benefit): ?>
                <div class="bg-white rounded-lg p-8 shadow-sm hover:shadow-lg transition-all duration-300">
                    <div class="w-12 h-12 bg-[#02B578]/10 rounded-lg flex items-center justify-center mb-6">
                        <img src="<?php echo ASSETS_PATH . $benefit['icon']; ?>" alt="<?php echo htmlspecialchars($benefit['title']); ?>" class="w-6 h-6" />
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 mb-4"><?php echo htmlspecialchars($benefit['title']); ?></h3>
                    <p class="text-gray-600"><?php echo htmlspecialchars($benefit['description']); ?></p>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- Open Positions Section -->
<section id="open-positions" class="bg-white py-16 md:py-24">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-6">Open Positions</h2>
            <p class="text-lg text-gray-600 max-w-3xl mx-auto">
                We're always looking for talented individuals to join our team. See our current openings below.
            </p>
        </div>

        <div class="space-y-6">
            <?php
            $positions = [
                [
                    'title' => 'Senior Cybersecurity Consultant',
                    'location' => 'Sydney, Australia',
                    'type' => 'Full-time',
                    'description' => 'Lead cybersecurity assessments and provide strategic guidance to enterprise clients.',
                    'requirements' => ['5+ years cybersecurity experience', 'Industry certifications (CISSP, CISM, etc.)', 'Strong communication skills'],
                    'posted' => '2 days ago'
                ],
                [
                    'title' => 'Penetration Tester',
                    'location' => 'Sydney, Australia',
                    'type' => 'Full-time',
                    'description' => 'Conduct comprehensive penetration testing and vulnerability assessments.',
                    'requirements' => ['3+ years pentesting experience', 'OSCP or similar certification', 'Experience with common testing tools'],
                    'posted' => '1 week ago'
                ],
                [
                    'title' => 'Junior Security Analyst',
                    'location' => 'Sydney, Australia',
                    'type' => 'Full-time',
                    'description' => 'Support security assessments and help clients implement security improvements.',
                    'requirements' => ['1-2 years security experience', 'Relevant degree or certifications', 'Eagerness to learn'],
                    'posted' => '3 days ago'
                ]
            ];

            foreach ($positions as $position): ?>
                <div class="bg-white border border-gray-200 rounded-lg p-8 hover:shadow-lg transition-all duration-300">
                    <div class="flex flex-col md:flex-row md:items-center md:justify-between">
                        <div class="flex-1">
                            <div class="flex items-center gap-4 mb-4">
                                <h3 class="text-xl font-semibold text-gray-900"><?php echo htmlspecialchars($position['title']); ?></h3>
                                <span class="px-3 py-1 bg-[#02B578]/10 text-[#02B578] text-sm rounded-full"><?php echo htmlspecialchars($position['type']); ?></span>
                            </div>
                            <div class="flex items-center gap-4 text-gray-600 text-sm mb-4">
                                <span class="flex items-center gap-1">
                                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z" />
                                    </svg>
                                    <?php echo htmlspecialchars($position['location']); ?>
                                </span>
                                <span>Posted <?php echo htmlspecialchars($position['posted']); ?></span>
                            </div>
                            <p class="text-gray-700 mb-4"><?php echo htmlspecialchars($position['description']); ?></p>
                            <div class="flex flex-wrap gap-2">
                                <?php foreach ($position['requirements'] as $requirement): ?>
                                    <span class="px-3 py-1 bg-gray-100 text-gray-700 text-xs rounded-full"><?php echo htmlspecialchars($requirement); ?></span>
                                <?php endforeach; ?>
                            </div>
                        </div>
                        <div class="mt-6 md:mt-0 md:ml-8">
                            <button class="bg-[#02B578] hover:bg-[#02B578]/90 text-white font-semibold px-6 py-3 rounded-lg transition-all duration-300">
                                Apply Now
                            </button>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- Application Process Section -->
<section class="bg-gray-50 py-16 md:py-24">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-6">Application Process</h2>
            <p class="text-lg text-gray-600 max-w-3xl mx-auto">
                Our hiring process is designed to be thorough yet respectful of your time.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
            <?php
            $process_steps = [
                [
                    'step' => '1',
                    'title' => 'Application Review',
                    'description' => 'We review your application and assess fit for the role.'
                ],
                [
                    'step' => '2',
                    'title' => 'Initial Interview',
                    'description' => 'Phone or video call to discuss your experience and motivations.'
                ],
                [
                    'step' => '3',
                    'title' => 'Technical Assessment',
                    'description' => 'Practical exercise relevant to the role requirements.'
                ],
                [
                    'step' => '4',
                    'title' => 'Final Interview',
                    'description' => 'Meet the team and discuss how you\'ll contribute to our mission.'
                ]
            ];

            foreach ($process_steps as $step): ?>
                <div class="text-center">
                    <div class="w-12 h-12 bg-[#02B578] text-white rounded-full flex items-center justify-center mx-auto mb-4 font-bold text-lg">
                        <?php echo $step['step']; ?>
                    </div>
                    <h3 class="text-lg font-semibold text-gray-900 mb-3"><?php echo htmlspecialchars($step['title']); ?></h3>
                    <p class="text-gray-600 text-sm"><?php echo htmlspecialchars($step['description']); ?></p>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- Contact HR Section -->
<section class="bg-[#02B578] text-white py-16 md:py-24">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="text-3xl md:text-4xl font-bold mb-6">
            Don't See the Right Role?
        </h2>
        <p class="text-lg text-white/90 mb-8 max-w-2xl mx-auto">
            We're always interested in connecting with talented cybersecurity professionals. Send us your details and we'll keep you in mind for future opportunities.
        </p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <button class="bg-white text-[#02B578] hover:bg-gray-100 font-semibold px-8 py-3 rounded-[300px] transition-all duration-300">
                <a href="book_a_free_consultation.php">Get in Touch</a>
            </button>
            <button class="bg-transparent border border-white text-white hover:bg-white hover:text-[#02B578] font-semibold px-8 py-3 rounded-[300px] transition-all duration-300">
                <a href="mailto:careers@cliffside.com">Email careers@cliffside.com</a>
            </button>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>