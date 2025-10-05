<section class="relative overflow-hidden text-white">
    <div class="relative bg-no-repeat bg-center bg-cover" style="background-image: url('<?php echo ASSETS_PATH; ?>trustedBack.webp')">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-10 md:py-14">
            <div class="flex flex-wrap justify-center items-center gap-6 md:gap-40 lg:gap-26 opacity-100">
                <img src="<?php echo ASSETS_PATH; ?>ISO.webp" alt="ISO 27001 Logo" class="h-16 md:h-24 lg:h-28 w-auto" width="112" height="64" loading="lazy" />
                <img src="<?php echo ASSETS_PATH; ?>NIST.webp" alt="NIST CSF 2.0 Logo" class="h-16 md:h-24 lg:h-28 w-auto" width="112" height="64" loading="lazy" />
                <img src="<?php echo ASSETS_PATH; ?>APRA.webp" alt="APRA CPS 234 Logo" class="h-16 md:h-24 lg:h-28 w-auto" width="112" height="64" loading="lazy" />
                <img src="<?php echo ASSETS_PATH; ?>Essential8.webp" alt="ACSC Essential 8 Logo" class="h-16 md:h-24 lg:h-28 w-auto" width="112" height="64" loading="lazy" />
            </div>
        </div>
        <div class="pointer-events-none absolute inset-x-0 bottom-0 h-24 md:h-32" style="background: linear-gradient(to bottom, rgba(0, 0, 0, 0) 0%, rgba(0, 0, 0, 0.65) 70%, rgba(0, 0, 0, 0.95) 100%);"></div>
    </div>

    <div class="relative bg-no-repeat bg-center bg-cover" style="background-image: url('<?php echo ASSETS_PATH; ?>Trustedbg-2.webp')">
        <div class="pointer-events-none absolute left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 w-[800px] h-[800px] md:w-[1000px] md:h-[1000px] rounded-full blur-3xl opacity-50" style="background: radial-gradient(ellipse at center, rgba(16, 185, 129, 0.45) 0%, rgba(0, 0, 0, 0) 60%);"></div>
        <div class="pointer-events-none absolute inset-x-0 top-0 h-24 md:h-32" style="background: linear-gradient(to bottom, rgba(0, 0, 0, 0.95) 0%, rgba(0, 0, 0, 0.7) 40%, rgba(0, 0, 0, 0) 100%);"></div>

        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16 md:py-24">
            <div class="text-center">
                <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold tracking-wide">Our Cybersecurity Services</h2>
            </div>

            <div class="mt-10 md:mt-14 grid grid-cols-1 lg:grid-cols-3 gap-8 lg:gap-12">
                <div class="space-y-6">
                    <?php
                    $left_services = [
                        ['icon' => 'CyberSecurityAdvisory.webp','title' => 'Cybersecurity Advisory & Consultancy','description' => 'Honest advice about what your business actually needs.'],
                        ['icon' => 'SecuirtyArchitecture.webp','title' => 'Security Architecture Services','description' => 'Design security systems that work for your specific environment.'],
                        ['icon' => 'cloudSecuirty.webp','title' => 'Cloud Security','description' => 'Secure your cloud infrastructure and data properly.']
                    ];
                    foreach ($left_services as $service): ?>
                        <div class="flex items-start gap-4 p-5 rounded-2xl bg-white/25 lg:bg-white/5 border border-white/20 lg:border-white/10 backdrop-blur-md lg:backdrop-blur-sm hover:bg-white/30 lg:hover:bg-white/10 transition">
                            <div class="shrink-0 w-10 h-10 rounded-lg bg-emerald-500/20 flex items-center justify-center">
                                <img src="<?php echo ASSETS_PATH . $service['icon']; ?>" alt="<?php echo htmlspecialchars($service['title']); ?>" class="w-6 h-6" />
                            </div>
                            <div>
                                <h3 class="text-base md:text-lg font-semibold"><?php echo htmlspecialchars($service['title']); ?></h3>
                                <p class="text-sm text-gray-200/80 mt-1 max-w-sm"><?php echo htmlspecialchars($service['description']); ?></p>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>

                <div class="hidden lg:block"></div>

                <div class="space-y-6">
                    <?php
                    $right_services = [
                        ['icon' => 'Compilance.webp','title' => 'Compliance and Risk Management','description' => 'Meet regulatory requirements without wasting money on unnecessary extras.'],
                        ['icon' => 'peneterationTesting.webp','title' => 'Penetration Testing & Assurance','description' => 'Find real security weaknesses before attackers do.'],
                        ['icon' => 'securityAwareness.webp','title' => 'Security Awareness','description' => 'Train your people to recognise and avoid cyber threats.']
                    ];
                    foreach ($right_services as $service): ?>
                        <div class="flex items-start gap-4 p-5 rounded-2xl bg-white/25 lg:bg-white/5 border border-white/20 lg:border-white/10 backdrop-blur-md lg:backdrop-blur-sm hover:bg-white/30 lg:hover:bg-white/10 transition">
                            <div class="shrink-0 w-10 h-10 rounded-lg bg-emerald-500/20 flex items-center justify-center">
                                <img src="<?php echo ASSETS_PATH . $service['icon']; ?>" alt="<?php echo htmlspecialchars($service['title']); ?>" class="w-6 h-6" />
                            </div>
                            <div>
                                <h3 class="text-base md:text-lg font-semibold"><?php echo htmlspecialchars($service['title']); ?></h3>
                                <p class="text-sm text-gray-200/80 mt-1 max-w-sm"><?php echo htmlspecialchars($service['description']); ?></p>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</section>
