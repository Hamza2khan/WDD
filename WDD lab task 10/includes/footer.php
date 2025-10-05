<footer class="bg-white">
    <div class="w-full px-4 sm:px-6 px-2 lg:px-16 xl:px-20 py-12 lg:py-[100px]">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-10 md:gap-30 justify-center">
            <div class="md:col-span-1">
                <div class="flex-shrink-0 flex items-center gap-4 md:gap-2 lg:gap-2 mb-5 md:mb-24">
                    <img src="<?php echo ASSETS_PATH; ?>Group.webp" alt="Cliffside Icon" class="h-[48px] w-auto object-contain" loading="lazy" />
                    <a href="index.php" class="block">
                        <img src="<?php echo ASSETS_PATH; ?>CliffsideLogo.webp" alt="Cliffside Logo" class="h-[25px] w-auto object-contain" loading="lazy" />
                    </a>
                </div>

                <div class="space-y-5">
                    <div class="flex items-center gap-2">
                        <svg class="w-4 h-4 text-[#02B578]" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z" />
                        </svg>
                        <span class="text-gray-600 text-sm"><?php echo $contact_info['address']; ?></span>
                    </div>
                    <div class="flex items-center gap-2">
                        <svg class="w-4 h-4 text-[#02B578]" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M6.62 10.79c1.44 2.83 3.76 5.14 6.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.24 1.12.37 2.33.57 3.57.57.55 0 1 .45 1 1V20c0 .55-.45 1-1 1-9.39 0-17-7.61-17-17 0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1 0 1.25.2 2.45.57 3.57.11.35.03.74-.25 1.02l-2.2 2.2z" />
                        </svg>
                        <span class="text-gray-600 text-sm"><?php echo $contact_info['phone']; ?></span>
                    </div>
                </div>
            </div>

            <div class="md:col-span-2 grid grid-col-1 sm:grid-cols-3 gap-8 lg:gap-12">
                <?php foreach ($footer_menus as $menu_key => $menu): ?>
                    <div class="lg:col-span-1">
                        <h4 class="text-lg font-bold text-gray-900 mb-4 font-[var(--main-font)]">
                            <?php if ($menu_key === 'contact_us'): ?>
                                <a href="book_a_free_consultation.php"><?php echo $menu['title']; ?></a>
                            <?php else: ?>
                                <?php echo $menu['title']; ?>
                            <?php endif; ?>
                        </h4>
                        <ul class="space-y-5">
                            <?php foreach ($menu['items'] as $item_name => $item_url): ?>
                                <li>
                                    <a href="<?php echo $item_url; ?>" class="text-gray-600 hover:text-gray-900 text-sm transition-colors">
                                        <?php echo $item_name; ?>
                                    </a>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                <?php endforeach; ?>
            </div>

            <div class="md:col-span-1">
                <h4 class="text-lg font-bold text-gray-900 mb-4 font-[var(--main-font)]">Get Update</h4>
                <p class="text-gray-600 text-sm mb-4">Subscribe to our newsletter for the latest insights and updates.</p>

                <div class="space-y-3">
                    <form method="POST" action="#" class="space-y-3">
                        <input type="email" name="email" placeholder="Enter your email" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-[#02B578] focus:border-transparent" required />
                        <button type="submit" class="w-full bg-[#FFF455] hover:bg-[#FFF455]/90 text-gray-900 font-bold py-2 px-4 rounded-lg transition-all duration-300">
                            Join
                        </button>
                    </form>
                    <p class="text-gray-500 text-xs">By joining, you consent to our Privacy Policy and receive updates.</p>
                </div>
            </div>
        </div>
    </div>
</footer>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" defer></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" defer></script>
<script src="script.js" defer></script>
</body>
</html>
