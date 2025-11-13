<footer id="footer" class="bg-brand-grey text-white pt-8 pb-2">
    <div class="container mx-auto px-4">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 text-center md:text-left">
            <div>
                <!-- Logo -->
                <div class="mb-4">
                    <a href="<?php echo e(url('/')); ?>" class="inline-block">
                        <?php if($globalSettings && $globalSettings->site_logo): ?>
                            <img src="<?php echo e(asset('storage/' . $globalSettings->site_logo)); ?>" alt="<?php echo e($globalSettings->site_name ?? 'India IVF'); ?>" class="h-12 md:h-16 w-auto object-contain mx-auto md:mx-0">
                        <?php else: ?>
                            <img src="<?php echo e(asset('assets/images/No-1-IVF-Centre-IndiaIVF.webp')); ?>" alt="India IVF Logo" class="h-12 md:h-16 w-auto object-contain mx-auto md:mx-0">
                        <?php endif; ?>
                    </a>
                </div>

                <!-- Social Media Icons -->
                <div class="flex justify-center md:justify-start space-x-3 mb-4">
                    <?php if($globalSettings && $globalSettings->facebook_url): ?>
                    <a href="<?php echo e($globalSettings->facebook_url); ?>" target="_blank" rel="noopener noreferrer" aria-label="Facebook">
                        <span class="w-8 h-8 bg-brand-pink text-white rounded-full flex items-center justify-center hover:bg-opacity-90 cursor-pointer transition-all">
                            <i class="fab fa-facebook-f text-sm"></i>
                        </span>
                    </a>
                    <?php endif; ?>

                    <?php if($globalSettings && $globalSettings->twitter_url): ?>
                    <a href="<?php echo e($globalSettings->twitter_url); ?>" target="_blank" rel="noopener noreferrer" aria-label="Twitter">
                        <span class="w-8 h-8 bg-brand-blue text-white rounded-full flex items-center justify-center hover:bg-opacity-90 cursor-pointer transition-all">
                            <i class="fab fa-twitter text-sm"></i>
                        </span>
                    </a>
                    <?php endif; ?>

                    <?php if($globalSettings && $globalSettings->instagram_url): ?>
                    <a href="<?php echo e($globalSettings->instagram_url); ?>" target="_blank" rel="noopener noreferrer" aria-label="Instagram">
                        <span class="w-8 h-8 bg-brand-pink text-white rounded-full flex items-center justify-center hover:bg-opacity-90 cursor-pointer transition-all">
                            <i class="fab fa-instagram text-sm"></i>
                        </span>
                    </a>
                    <?php endif; ?>

                    <?php if($globalSettings && $globalSettings->youtube_url): ?>
                    <a href="<?php echo e($globalSettings->youtube_url); ?>" target="_blank" rel="noopener noreferrer" aria-label="YouTube">
                        <span class="w-8 h-8 bg-red-600 text-white rounded-full flex items-center justify-center hover:bg-opacity-90 cursor-pointer transition-all">
                            <i class="fab fa-youtube text-sm"></i>
                        </span>
                    </a>
                    <?php endif; ?>

                    <?php if($globalSettings && $globalSettings->linkedin_url): ?>
                    <a href="<?php echo e($globalSettings->linkedin_url); ?>" target="_blank" rel="noopener noreferrer" aria-label="LinkedIn">
                        <span class="w-8 h-8 bg-blue-700 text-white rounded-full flex items-center justify-center hover:bg-opacity-90 cursor-pointer transition-all">
                            <i class="fab fa-linkedin-in text-sm"></i>
                        </span>
                    </a>
                    <?php endif; ?>

                    <?php if($globalSettings && $globalSettings->whatsapp_number): ?>
                    <a href="https://wa.me/<?php echo e(preg_replace('/[^0-9]/', '', $globalSettings->whatsapp_number)); ?>" target="_blank" rel="noopener noreferrer" aria-label="WhatsApp">
                        <span class="w-8 h-8 bg-green-500 text-white rounded-full flex items-center justify-center hover:bg-opacity-90 cursor-pointer transition-all">
                            <i class="fab fa-whatsapp text-sm"></i>
                        </span>
                    </a>
                    <?php endif; ?>
                </div>

                <h3 class="text-lg font-semibold mb-2">About Us</h3>
                <ul class="space-y-1 text-gray-300">
                    <li><span class="hover:text-brand-pink transition-colors cursor-pointer">About India IVF Fertility</span></li>
                    <li><span class="hover:text-brand-pink transition-colors cursor-pointer">Our IVF Specialists</span></li>
                    <li><span class="hover:text-brand-pink transition-colors cursor-pointer">Founder's Story</span></li>
                    <li><span class="hover:text-brand-pink transition-colors cursor-pointer">Technology &amp; Facilities</span></li>
                    <li><span class="hover:text-brand-pink transition-colors cursor-pointer">Awards &amp; Media</span></li>
                </ul><br>
                <h3 class="text-lg font-semibold mb-2">Academics &amp; Careers</h3>
                <ul class="space-y-1 text-gray-300">
                    <li><span class="hover:text-brand-pink transition-colors cursor-pointer">IVF &amp; Embryologist Training</span></li>
                    <li><span class="hover:text-brand-pink transition-colors cursor-pointer">Careers at India IVF</span></li>
                </ul><br>
                <h3 class="text-lg font-semibold mb-2">Legal</h3>
                <ul class="space-y-1 text-gray-300">
                    <li><span class="hover:text-brand-pink transition-colors cursor-pointer">NCLT Order</span></li>
                </ul>
            </div>
            <div>
                <h3 class="text-lg font-semibold mb-2">Key Treatments</h3>
                <ul class="space-y-1 text-gray-300">
                    <li><span class="hover:text-brand-pink transition-colors cursor-pointer">IVF Treatment</span></li>
                    <li><span class="hover:text-brand-pink transition-colors cursor-pointer">ICSI Treatment</span></li>
                    <li><span class="hover:text-brand-pink transition-colors cursor-pointer">IUI Treatment</span></li>
                    <li><span class="hover:text-brand-pink transition-colors cursor-pointer">Egg Freezing</span></li>
                    <li><span class="hover:text-brand-pink transition-colors cursor-pointer">Male Infertility</span></li>
                    <li><span class="hover:text-brand-pink transition-colors cursor-pointer">Female Infertility</span></li>
                    <li><span class="hover:text-brand-pink transition-colors cursor-pointer">Failed IVF Solutions</span></li>
                </ul><br>
                <h3 class="text-lg font-semibold mb-2">Donation Program</h3>
                <ul class="space-y-1 text-gray-300">
                    <li><span class="hover:text-brand-pink transition-colors cursor-pointer">Donor Egg Program</span></li>
                    <li><span class="hover:text-brand-pink transition-colors cursor-pointer">Donor Sperm Program</span></li>
                    <li><span class="hover:text-brand-pink transition-colors cursor-pointer">Donor Embryo Program</span></li>
                </ul>
            </div>
            <div>
                <h3 class="text-lg font-semibold mb-2">Patient Resources</h3>
                <ul class="space-y-1 text-gray-300">
                    <li><span class="hover:text-brand-pink transition-colors cursor-pointer">Success Stories</span></li>
                    <li><span class="hover:text-brand-pink transition-colors cursor-pointer">Ovulation Calculator</span></li>
                    <li><span class="hover:text-brand-pink transition-colors cursor-pointer">IVF Cost Estimator</span></li>
                    <li><span class="hover:text-brand-pink transition-colors cursor-pointer">EMI &amp; Payment Plans</span></li>
                    <li><span class="hover:text-brand-pink transition-colors cursor-pointer">Book Consultation</span></li>
                    <li><span class="hover:text-brand-pink transition-colors cursor-pointer">Centers</span></li>
                    <li><span class="hover:text-brand-pink transition-colors cursor-pointer">Doctors</span></li>
                    <li><span class="hover:text-brand-pink transition-colors cursor-pointer">International Patients</span></li>
                    <li><span class="hover:text-brand-pink transition-colors cursor-pointer">Guides &amp; Downloads</span></li>
                    <li><span class="hover:text-brand-pink transition-colors cursor-pointer">FAQs</span></li>
                </ul>
            </div>
            <div>
                <h3 class="text-lg font-semibold mb-2">Contact Us</h3>
                <div class="space-y-1 text-gray-300 flex flex-col items-center md:items-start">
                    <div class="flex gap-3">
                        <i class="fas fa-map-marker-alt mt-1 text-brand-pink"></i>
                        <p class="font-medium"><?php echo e($globalSettings->site_name ?? 'India IVF'); ?> Center</p>
                    </div>
                    <p class="text-sm"><?php echo e($globalSettings->contact_address ?? '123 Medical Complex, New Delhi - 110001'); ?></p>
                    <div class="flex items-center gap-3">
                        <i class="fas fa-phone text-brand-pink"></i>
                        <span class="hover:text-brand-pink transition-colors cursor-pointer"><?php echo e($globalSettings->contact_phone ?? '+91 12345 67890'); ?></span>
                    </div>
                    <div class="flex items-center gap-3">
                        <i class="fas fa-envelope text-brand-pink"></i>
                        <span class="hover:text-brand-pink transition-colors cursor-pointer"><?php echo e($globalSettings->site_email ?? 'info@indiaivf.com'); ?></span>
                    </div>
                    <?php if($globalSettings && $globalSettings->whatsapp_number): ?>
                    <div class="flex items-center gap-3">
                        <i class="fab fa-whatsapp text-green-500"></i>
                        <a href="https://wa.me/<?php echo e(preg_replace('/[^0-9]/', '', $globalSettings->whatsapp_number)); ?>" target="_blank" rel="noopener noreferrer">
                            <span class="hover:text-brand-pink transition-colors cursor-pointer"><?php echo e($globalSettings->whatsapp_number); ?></span>
                        </a>
                    </div>
                    <?php else: ?>
                    <div class="flex items-center gap-3">
                        <i class="fab fa-whatsapp text-green-500"></i>
                        <span class="hover:text-brand-pink transition-colors cursor-pointer">WhatsApp Support</span>
                    </div>
                    <?php endif; ?>
                </div><br>
                <h3 class="text-lg font-semibold">Bringing Happiness in:</h3>
                <ul class="text-gray-300">
                    <li>Delhi, Noida, Gurugram, Ghaziabad, Srinagar</li>
                </ul><br>
                <div class="flex space-x-4">
                    <div class="flex flex-col justify-center space-y-3">
                        <h2 class="text-l text-center md:text-left font-bold leading-snug">Subscribe for <span class="text-[#25D366]">WhatsApp</span> Updates</h2>
                        <form class="w-full max-w-lg flex flex-col sm:flex-row items-center gap-4 mt-6 justify-center">
                            <input type="tel" placeholder="Enter your mob number" required class="w-[90%] sm:flex-1 px-3 py-1 rounded-full text-gray-800 focus:ring-2 focus:ring-[#25D366] focus:outline-none placeholder-gray-500">
                            <button type="submit" class="bg-[#25D366] hover:bg-[#1ebe5d] text-white px-3 py-1 rounded-full font-semibold transition-all duration-300 hover:scale-105 shadow-lg hover:shadow-xl flex items-center gap-2">Subscribe</button>
                        </form>
                        <p class="text-xs text-white/80 mt-4">By subscribing, you agree to receive updates via WhatsApp. You can unsubscribe anytime.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="border-t border-gray-600 mt-6 pt-2">
            <div class="flex flex-col md:flex-row justify-between items-center gap-4">
                <p class="text-gray-300 text-xs text-center md:text-left">
                    @ <?php echo e(date('Y')); ?> <?php echo e($globalSettings->site_name ?? 'India IVF'); ?>. All rights reserved.
                    <?php if($globalSettings && $globalSettings->copyright_text): ?>
                        <?php echo e($globalSettings->copyright_text); ?>

                    <?php else: ?>
                        Designed by&nbsp;Primero&nbsp;Media
                    <?php endif; ?>
                </p>
                <div class="flex gap-6 text-xs text-gray-300">
                    <span class="hover:text-brand-pink transition-colors cursor-pointer">Privacy Policy</span>
                    <span class="hover:text-brand-pink transition-colors cursor-pointer">Terms of Service</span>
                    <span class="hover:text-brand-pink transition-colors cursor-pointer">Cookie Policy</span>
                    <span class="hover:text-brand-pink transition-colors cursor-pointer">Sitemap</span>
                </div>
            </div>
        </div>
    </div>
</footer>
<?php /**PATH C:\wamp64\www\adminivf\resources\views/frontend/layouts/footer.blade.php ENDPATH**/ ?>