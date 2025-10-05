
    <section class="bg-[#02B578] text-white py-16 md:py-24">
        <div class="max-w-5xl mx-auto px-6 sm:px-8 lg:px-10 relative">
            <div class="testimonial-carousel owl-carousel owl-theme">
                <?php foreach ($testimonials as $testimonial): ?>
                    <div class="item">
                        <div class="text-center max-w-3xl mx-auto">
                            <div class="flex justify-center">
                                <div class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/10">
                                    <span class="text-3xl leading-none">"</span>
                                </div>
                            </div>
                            <p class="mt-6 text-white/95 leading-8">
                                <?php echo htmlspecialchars($testimonial['quote']); ?>
                            </p>
                            <div class="mt-8 flex flex-col items-center gap-2">
                                <img src="<?php echo $testimonial['avatar']; ?>" alt="<?php echo htmlspecialchars($testimonial['name']); ?>" class="director-avatar" />
                                <div class="text-[13px] md:text-sm font-semibold">
                                    <?php echo htmlspecialchars($testimonial['name']); ?>
                                </div>
                                <div class="text-[11px] md:text-xs opacity-90">
                                    <?php echo htmlspecialchars($testimonial['company']); ?>
                                </div>
                                <img src="<?php echo $testimonial['company_logo']; ?>" alt="Company Logo" class="company-logo mt-4" />
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>