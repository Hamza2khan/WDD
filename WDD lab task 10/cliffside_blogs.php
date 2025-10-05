<?php
// Include configuration
require_once 'config.php';

// Set current page for proper meta tags and navigation
$current_page = 'blog';
?>
<?php include 'includes/header.php'; ?>

<!-- Blog Hero Section -->
<section class="bg-white py-16 md:py-24">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-4xl mx-auto">
            <h1 class="text-4xl md:text-6xl font-bold text-gray-900 mb-6 tracking-wide">
                Cliffside Blog
            </h1>
            <p class="text-lg text-gray-600 leading-relaxed">
                Practical cybersecurity insights, industry trends, and honest advice from our team of experts. No vendor pitches, just useful information.
            </p>
        </div>
    </div>
</section>

<!-- Featured Article Section -->
<section class="bg-gray-50 py-16 md:py-24">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-6">Featured Article</h2>
        </div>

        <div class="bg-white rounded-lg shadow-lg overflow-hidden">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-0">
                <div class="p-8 lg:p-12">
                    <div class="inline-block bg-[#02B578]/10 text-[#02B578] px-3 py-1 rounded-full text-sm font-medium mb-4">
                        Security Strategy
                    </div>
                    <h3 class="text-2xl md:text-3xl font-bold text-gray-900 mb-4">
                        The Real Cost of Cybersecurity: Beyond the Security Budget
                    </h3>
                    <p class="text-gray-600 mb-6 leading-relaxed">
                        Most businesses focus on the direct costs of cybersecurity tools and services, but the real expenses often lie elsewhere. We break down the hidden costs and help you budget realistically for effective security.
                    </p>
                    <div class="flex items-center gap-4 text-sm text-gray-500 mb-6">
                        <span>December 15, 2024</span>
                        <span>•</span>
                        <span>8 min read</span>
                        <span>•</span>
                        <span>By Sarah Chen, Security Consultant</span>
                    </div>
                    <button class="bg-[#02B578] hover:bg-[#02B578]/90 text-white font-semibold px-6 py-3 rounded-lg transition-all duration-300">
                        Read Full Article
                    </button>
                </div>
                <div>
                    <img src="<?php echo ASSETS_PATH; ?>blog-featured.webp" alt="Featured blog post" class="w-full h-full object-cover min-h-[400px]" />
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Recent Articles Section -->
<section class="bg-white py-16 md:py-24">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-6">Recent Articles</h2>
            <p class="text-lg text-gray-600 max-w-3xl mx-auto">
                Stay informed with our latest insights on cybersecurity trends, best practices, and industry developments.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <?php
            $blog_posts = [
                [
                    'title' => 'Essential 8 Maturity Model: A Practical Implementation Guide',
                    'category' => 'Compliance',
                    'excerpt' => 'A step-by-step approach to implementing the Australian Government\'s Essential 8 cybersecurity framework.',
                    'author' => 'Mark Thompson',
                    'date' => 'December 12, 2024',
                    'read_time' => '6 min read',
                    'image' => 'blog-essential8.webp'
                ],
                [
                    'title' => 'Cloud Security Mistakes That Cost Australian Businesses Millions',
                    'category' => 'Cloud Security',
                    'excerpt' => 'Common cloud security misconfigurations and how to avoid them in your AWS, Azure, or Google Cloud environment.',
                    'author' => 'Jennifer Liu',
                    'date' => 'December 10, 2024',
                    'read_time' => '7 min read',
                    'image' => 'blog-cloud-security.webp'
                ],
                [
                    'title' => 'Incident Response Planning: Lessons from Real Breaches',
                    'category' => 'Incident Response',
                    'excerpt' => 'What we\'ve learned from actual security incidents and how to prepare your organisation for the inevitable.',
                    'author' => 'David Park',
                    'date' => 'December 8, 2024',
                    'read_time' => '9 min read',
                    'image' => 'blog-incident-response.webp'
                ],
                [
                    'title' => 'The ROI of Cybersecurity: Measuring What Matters',
                    'category' => 'Business Strategy',
                    'excerpt' => 'How to demonstrate the business value of cybersecurity investments and measure meaningful security metrics.',
                    'author' => 'Sarah Chen',
                    'date' => 'December 5, 2024',
                    'read_time' => '5 min read',
                    'image' => 'blog-roi.webp'
                ],
                [
                    'title' => 'Penetration Testing vs Vulnerability Scanning: When to Use Each',
                    'category' => 'Security Testing',
                    'excerpt' => 'Understanding the differences between penetration testing and vulnerability scanning to make informed decisions.',
                    'author' => 'Alex Rodriguez',
                    'date' => 'December 3, 2024',
                    'read_time' => '4 min read',
                    'image' => 'blog-pentesting.webp'
                ],
                [
                    'title' => 'Zero Trust Architecture: Beyond the Buzzword',
                    'category' => 'Security Architecture',
                    'excerpt' => 'A practical look at implementing Zero Trust principles in real-world business environments.',
                    'author' => 'Michael Foster',
                    'date' => 'November 28, 2024',
                    'read_time' => '8 min read',
                    'image' => 'blog-zero-trust.webp'
                ]
            ];

            foreach ($blog_posts as $post): ?>
                <article class="bg-white rounded-lg shadow-sm hover:shadow-lg transition-all duration-300 overflow-hidden group">
                    <div class="aspect-video bg-gray-200 overflow-hidden">
                        <img src="<?php echo ASSETS_PATH . $post['image']; ?>" alt="<?php echo htmlspecialchars($post['title']); ?>" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300" />
                    </div>
                    <div class="p-6">
                        <div class="inline-block bg-[#02B578]/10 text-[#02B578] px-3 py-1 rounded-full text-xs font-medium mb-3">
                            <?php echo htmlspecialchars($post['category']); ?>
                        </div>
                        <h3 class="text-lg font-semibold text-gray-900 mb-3 group-hover:text-[#02B578] transition-colors line-clamp-2">
                            <?php echo htmlspecialchars($post['title']); ?>
                        </h3>
                        <p class="text-gray-600 text-sm mb-4 line-clamp-3">
                            <?php echo htmlspecialchars($post['excerpt']); ?>
                        </p>
                        <div class="flex items-center justify-between text-xs text-gray-500">
                            <div class="flex items-center gap-2">
                                <span><?php echo htmlspecialchars($post['author']); ?></span>
                                <span>•</span>
                                <span><?php echo htmlspecialchars($post['date']); ?></span>
                            </div>
                            <span><?php echo htmlspecialchars($post['read_time']); ?></span>
                        </div>
                    </div>
                </article>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- Newsletter Signup Section -->
<section class="bg-[#02B578] text-white py-16 md:py-24">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="text-3xl md:text-4xl font-bold mb-6">
            Stay Informed
        </h2>
        <p class="text-lg text-white/90 mb-8 max-w-2xl mx-auto">
            Get our latest cybersecurity insights, practical tips, and industry updates delivered directly to your inbox. No spam, just valuable content.
        </p>

        <form method="POST" action="#" class="max-w-md mx-auto">
            <div class="flex flex-col sm:flex-row gap-4">
                <input type="email" name="newsletter_email" placeholder="Enter your email address" class="flex-1 px-4 py-3 rounded-lg text-gray-900 focus:outline-none focus:ring-2 focus:ring-white" required />
                <button type="submit" class="bg-white text-[#02B578] hover:bg-gray-100 font-semibold px-6 py-3 rounded-lg transition-all duration-300 whitespace-nowrap">
                    Subscribe
                </button>
            </div>
            <p class="text-xs text-white/70 mt-3">
                By subscribing, you agree to our Privacy Policy and consent to receive updates.
            </p>
        </form>
    </div>
</section>

<!-- Categories Section -->
<section class="bg-gray-50 py-16 md:py-24">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-6">Explore by Category</h2>
            <p class="text-lg text-gray-600 max-w-3xl mx-auto">
                Find articles on specific cybersecurity topics that matter to your business.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
            <?php
            $categories = [
                [
                    'name' => 'Security Strategy',
                    'count' => 12,
                    'icon' => 'strategy-icon.webp',
                    'description' => 'Strategic approaches to cybersecurity planning and governance.'
                ],
                [
                    'name' => 'Compliance',
                    'count' => 8,
                    'icon' => 'compliance-icon.webp',
                    'description' => 'Regulatory requirements and compliance frameworks.'
                ],
                [
                    'name' => 'Cloud Security',
                    'count' => 15,
                    'icon' => 'cloud-icon.webp',
                    'description' => 'Securing cloud infrastructure and services.'
                ],
                [
                    'name' => 'Incident Response',
                    'count' => 6,
                    'icon' => 'incident-icon.webp',
                    'description' => 'Preparing for and responding to security incidents.'
                ]
            ];

            foreach ($categories as $category): ?>
                <div class="bg-white rounded-lg p-6 shadow-sm hover:shadow-lg transition-all duration-300 cursor-pointer">
                    <div class="w-12 h-12 bg-[#02B578]/10 rounded-lg flex items-center justify-center mb-4">
                        <img src="<?php echo ASSETS_PATH . $category['icon']; ?>" alt="<?php echo htmlspecialchars($category['name']); ?>" class="w-6 h-6" />
                    </div>
                    <h3 class="text-lg font-semibold text-gray-900 mb-2"><?php echo htmlspecialchars($category['name']); ?></h3>
                    <p class="text-gray-600 text-sm mb-3"><?php echo htmlspecialchars($category['description']); ?></p>
                    <p class="text-xs text-gray-500"><?php echo $category['count']; ?> articles</p>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>