<?php
// Site Configuration
define('SITE_TITLE', 'CliffSide Cybersecurity');
define('SITE_DESCRIPTION', 'Brutally honest cybersecurity for Australian businesses. Get clarity, compliance, and real protection.');
define('SITE_URL', 'http://localhost');
define('ASSETS_PATH', 'assets/');

// Navigation Menu Items
$navigation_items = [
    'how_we_work' => [
        'title' => 'How We Work',
        'url' => 'OurWork.php',
        'dropdown' => false
    ],
    'services' => [
        'title' => 'Services',
        'url' => '#',
        'dropdown' => true,
        'items' => [
            'Security Assessment' => '#',
            'Penetration Testing' => '#',
            'Compliance Consulting' => '#',
            'Incident Response' => '#',
            'Cybersecurity Advisory' => '#',
            'Security Architecture' => '#',
            'Cloud Security' => '#',
            'Security Awareness' => '#'
        ]
    ],
    'industries' => [
        'title' => 'Industries',
        'url' => '#',
        'dropdown' => true,
        'items' => [
            'Carreer at CliffSide' => 'Carreer_at_cliffside.php',
            'Our Success Stories' => 'our_Success_stories.php',
            'Technology' => '#',
            'Manufacturing' => '#',
            'Retail' => '#',
            'Government' => '#',
            'Education' => '#'
        ]
    ]
];

// Footer Menu Items
$footer_menus = [
    'contact_us' => [
        'title' => 'Contact Us',
        'items' => [
            'Placeholder Only' => '#',
            'Case Studies' => '#',
            'Blog Post' => 'cliffside_blogs.php',
            'FAQs' => '#',
            'Support Team' => '#'
        ]
    ],
    'follow_us' => [
        'title' => 'Follow Us',
        'items' => [
            'Placeholder Only' => '#',
            'Twitter Feed' => '#',
            'Facebook Group' => '#',
            'YouTube Channel' => '#',
            'Instagram Profile' => '#'
        ]
    ],
    'get_update' => [
        'title' => 'Get Update',
        'items' => [
            'Placeholder Only' => '#',
            'Special Offers' => '#',
            'Event Alert' => '#',
            'Webinars Info' => '#',
            'Resource Library' => '#'
        ]
    ]
];

// Contact Information
$contact_info = [
    'phone' => '(02) 8916 6389',
    'address' => 'Level 1, 66 King Street Sydney',
    'location' => 'Sydney, Australia'
];

// Testimonials Data
$testimonials = [
    [
        'quote' => 'The ongoing security awareness campaigns have greatly improved our staff\'s understanding of cybersecurity, drastically reducing phishing incidents. The regular third-party assessments give us peace of mind, ensuring our systems stay secure and aligned with best practices. Cliffside Cybersecurity support has been invaluable in strengthening our cybersecurity posture.',
        'name' => 'Business Operations Director',
        'company' => 'International HR Organisation',
        'avatar' => ASSETS_PATH . 'DirectorHashicorp.webp',
        'company_logo' => ASSETS_PATH . 'HashiCorp.webp'
    ],
    [
        'quote' => 'Cliffside identified several hidden risks and helped us prioritise remediation without disrupting operations. Their practical approach and clear communication made a measurable difference to our security posture.',
        'name' => 'Technology Lead',
        'company' => 'FinTech Company',
        'avatar' => ASSETS_PATH . 'DirectorHashicorp.webp',
        'company_logo' => ASSETS_PATH . 'HashiCorp.webp'
    ],
    [
        'quote' => 'Their penetration testing and follow-up assurance gave us clear, actionable insights. We fixed high-risk issues quickly and improved our compliance readiness ahead of schedule.',
        'name' => 'Head of IT Security',
        'company' => 'Healthcare Provider',
        'avatar' => ASSETS_PATH . 'DirectorHashicorp.webp',
        'company_logo' => ASSETS_PATH . 'HashiCorp.webp'
    ]
];

// Page specific data function
function get_page_data($page = 'home')
{
    switch ($page) {
        case 'home':
            return [
                'title' => 'CliffSide | Home',
                'meta_description' => 'Cliffside: Honest, expert cybersecurity services for Australian businesses. Assessments, consulting, compliance, and more.',
                'meta_keywords' => 'cybersecurity, consulting, compliance, penetration testing, cloud security, Australia, risk management'
            ];
        case 'our_work':
            return [
                'title' => 'Cliffside | How We Work',
                'meta_description' => 'Learn about Cliffside\'s approach to cybersecurity consulting. Assessment-first methodology, partnership integration, and expert guidance.',
                'meta_keywords' => 'cybersecurity methodology, security assessment, consulting approach, partnership'
            ];
        case 'consultation':
            return [
                'title' => 'Cliffside | Book Consultation',
                'meta_description' => 'Book a free cybersecurity consultation with Cliffside experts. Get honest, practical advice tailored to your business needs.',
                'meta_keywords' => 'cybersecurity consultation, free assessment, security advice, business protection'
            ];
        case 'career':
            return [
                'title' => 'Cliffside | Career Opportunities',
                'meta_description' => 'Join the Cliffside team. Explore career opportunities in cybersecurity consulting, penetration testing, and security advisory.',
                'meta_keywords' => 'cybersecurity careers, security jobs, penetration testing jobs, security consultant'
            ];
        case 'success_stories':
            return [
                'title' => 'Cliffside | Success Stories',
                'meta_description' => 'Read about successful cybersecurity implementations and transformations led by Cliffside experts.',
                'meta_keywords' => 'cybersecurity case studies, security success stories, client testimonials'
            ];
        case 'blog':
            return [
                'title' => 'Cliffside | Blog & Insights',
                'meta_description' => 'Stay updated with the latest cybersecurity insights, trends, and practical advice from Cliffside experts.',
                'meta_keywords' => 'cybersecurity blog, security insights, threat intelligence, security best practices'
            ];
        default:
            return [
                'title' => SITE_TITLE,
                'meta_description' => SITE_DESCRIPTION,
                'meta_keywords' => 'cybersecurity, consulting, compliance'
            ];
    }
}
