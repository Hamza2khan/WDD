<?php
require_once 'config.php';
$current_page = 'home';
?>
<?php include 'includes/header.php'; ?>
<?php include 'includes/nav.php'; ?>
<?php include 'includes/services.php'; ?>

<section class="bg-white py-16 md:py-24">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <div class="inline-block bg-green-100 text-[#02B578] px-4 py-2 rounded-full text-sm font-light mb-6 tracking-widest">
                Real Solutions, Clear Communication, Lasting Partnerships
            </div>
            <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold text-gray-900 mb-6">Our Approach</h2>
            <p class="text-md text-gray-400 max-w-4xl mx-auto font-light mb-8 leading-relaxed">
                Every environment is different, and every risk carries its own context. That's why we take the time to assess before advising. We help you understand what's really going on, what matters most, and where to focus, then deliver practical, fit-for-purpose guidance that supports your business goals.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center items-center">
                <button class="bg-[#FFF455] hover:bg-[#FFF455] text-gray-900 font-semibold px-8 py-3 rounded-[300px] transition-all duration-300 shadow-lg hover:shadow-xl transform hover:-translate-y-1 shadow-[#FFF455]/60 hover:shadow-[#FFF455]-300/70">
                    Learn More
                </button>
                <button class="bg-white border border-gray-900 text-gray-900 hover:bg-gray-900 hover:text-white font-semibold px-8 py-3 rounded-[300px] transition-all duration-300">
                    Sign Up
                </button>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 lg:gap-12">
            <?php
            $approach_items = [
                ['icon' => 'assessment.webp', 'title' => 'Assessment First, Always', 'description' => 'Before offering any guidance, we take the time to assess. This ensures that the direction we go will always reflect your context, and never a generic formula.'],
                ['icon' => 'partnership.webp', 'title' => 'Partnership Integration', 'description' => 'We become part of your team rather than replacing them. We empower your existing staff instead of telling you everything you do wrong.'],
                ['icon' => 'consultant.webp', 'title' => 'Expert Consultants', 'description' => 'We don\'t just know how to secure systems. We know how to align security with real-world goals, pressures, and decision-making.']
            ];

            foreach ($approach_items as $item): ?>
                <div class="bg-white rounded-lg p-8 hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2">
                    <div class="rounded-lg p-4 w-fit mb-6">
                        <img src="<?php echo ASSETS_PATH . $item['icon']; ?>" alt="<?php echo htmlspecialchars($item['title']); ?>" class="w-12 h-12" />
                    </div>
                    <h3 class="text-xl font-[500] text-gray-900 mb-4"><?php echo htmlspecialchars($item['title']); ?></h3>
                    <p class="text-gray-500 text-sm font-light leading-relaxed"><?php echo htmlspecialchars($item['description']); ?></p>
                    <a href="#" class="inline-flex items-center text-green-600 hover:text-green-700 font-medium transition-colors duration-200 group mt-3">
                        Explore
                        <svg class="ml-2 w-4 h-4 transform group-hover:translate-x-1 transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                        </svg>
                    </a>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<?php include 'includes/slider.php'; ?>

<section class="bg-white py-16 md:py-24">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold text-gray-900 mb-6">
                Solving Real Problems with Honest Expertise
            </h2>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 lg:gap-12">
            <?php
            $problems = [
                ['icon' => 'CyberSecurityReality.webp', 'title' => 'Cybersecurity That Ignores Business Reality', 'description' => 'Too many security programmes operate in isolation from business objectives. We align your cybersecurity strategy with actual business outcomes, ensuring every security investment drives measurable value.'],
                ['icon' => 'OverwhelmingCompilance.webp', 'title' => 'Overwhelming Compliance Burden', 'description' => 'Regulatory requirements feel endless and contradictory. We help you navigate complex compliance landscapes efficiently against critical industry compliance standards such as ISO 27001, PCI DSS, and APRA CPS 234.'],
                ['icon' => 'StrategicConfusion.webp', 'title' => 'Strategic Confusion Around Security Priorities', 'description' => 'Without clear direction, security becomes a collection of disconnected tools and policies. We establish strategic clarity that guides decision-making and ensures every security effort supports broader organisational goals.'],
                ['icon' => 'SecurityInvestment.webp', 'title' => 'Security Investment Plateaus', 'description' => 'Many organisations hit a wall after initial security investments, unsure where to focus next. We provide clear roadmaps for security maturity that build on previous efforts rather than starting from scratch with each new initiative.'],
                ['icon' => 'WasteFulSecuritySpend.webp', 'title' => 'Wasteful Security Spending', 'description' => 'Security budgets often fund the wrong priorities or duplicate existing capabilities. We identify where your money should actually go, sometimes recommending less expensive solutions when they better address your real needs.'],
                ['icon' => 'Toolsprawl.webp', 'title' => 'Tool Sprawl and Budget Drain', 'description' => 'Multiple security tools that don\'t integrate create operational headaches and budget bottlenecks. We help rationalise your security stack, focusing on solutions that work together effectively rather than adding complexity.']
            ];

            foreach ($problems as $problem): ?>
                <div class="bg-white rounded-lg p-8 hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2 group">
                    <div class="rounded-lg p-4 w-fit mb-6">
                        <img src="<?php echo ASSETS_PATH . $problem['icon']; ?>" alt="<?php echo htmlspecialchars($problem['title']); ?>" class="w-12 h-12" />
                    </div>
                    <h3 class="text-xl font-[500] text-gray-900 mb-4"><?php echo htmlspecialchars($problem['title']); ?></h3>
                    <p class="text-gray-500 text-sm font-light leading-relaxed"><?php echo htmlspecialchars($problem['description']); ?></p>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<section class="bg-black text-white py-16 md:py-24 relative overflow-hidden font-[var(--main-font)]">
    <div class="absolute inset-0 bg-no-repeat bg-center bg-cover" style="background-image: url('<?php echo ASSETS_PATH; ?>BookConsulatationBg.webp')"></div>
    <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="max-w-4xl">
            <div class="inline-block bg-[#02B578]/20 text-[#02B578] px-4 py-2 rounded-lg text-sm font-medium mb-6">
                Comprehensive Cybersecurity Assessment
            </div>
            <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold leading-tight mb-6">
                Start With What You Actually Need
            </h2>
            <p class="text-gray-300 text-lg leading-relaxed mb-8">
                The Cliffside Lighthouse assessment provides a comprehensive evaluation of your current cybersecurity posture, identifying real risks and opportunities for improvement. We focus on what matters most to your business, not generic checklists.
            </p>

            <div class="space-y-10 mb-10">
                <h3 class="text-xl font-semibold">What you get:</h3>
                <ul class="space-y-3">
                    <li class="flex items-start gap-3">
                        <div class="w-2 h-2 bg-[#02B578] rounded-full mt-2 flex-shrink-0"></div>
                        <span class="text-gray-300">Honest evaluation of your actual cybersecurity needs</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <div class="w-2 h-2 bg-[#02B578] rounded-full mt-2 flex-shrink-0"></div>
                        <span class="text-gray-300">Prioritised roadmap of genuine security requirements</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <div class="w-2 h-2 bg-[#02B578] rounded-full mt-2 flex-shrink-0"></div>
                        <span class="text-gray-300">Real recommendations of what's right for your business</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <div class="w-2 h-2 bg-[#02B578] rounded-full mt-2 flex-shrink-0"></div>
                        <span class="text-gray-300">Transferable report you can use with any provider</span>
                    </li>
                </ul>
            </div>

            <div class="flex flex-col sm:flex-row gap-4">
                <button class="bg-[#02B578] hover:bg-[#02B578]/90 text-white font-semibold px-8 py-3 rounded-[300px] transition-all duration-300">
                    <a href="book_a_free_consultation.php">Book Free Consultation</a>
                </button>
                <button class="bg-transparent border border-white text-white hover:bg-white hover:text-black font-semibold px-8 py-3 rounded-[300px] transition-all duration-300">
                    Learn More
                </button>
            </div>
        </div>
    </div>
</section>

<section class="relative overflow-hidden py-16 md:py-24 bg-no-repeat bg-center bg-cover" style="background-image: url('<?php echo ASSETS_PATH; ?>BookConsulatation2.webp')">
    <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-3xl mx-auto">
            <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold text-gray-900 mb-6 font-[var(--main-font)]">
                Ready for Cybersecurity That's Actually Practical?
            </h2>
            <p class="text-gray-700 text-lg md:text-xl mb-8 font-[var(--main-font)]">
                Contact us for honest expertise from people who genuinely want you to succeed.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <button class="bg-black hover:bg-gray-800 text-white font-semibold px-10 py-3 rounded-[300px] transition-all duration-300 font-[var(--main-font)]">
                    <a href="book_a_free_consultation.php">Book Free Consultation</a>
                </button>
                <button class="bg-transparent border border-black text-black hover:bg-gray-50 font-semibold px-10 py-3 rounded-[300px] transition-all duration-300 font-[var(--main-font)]">
                    Learn More
                </button>
            </div>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
