<header id="header" class="bg-white shadow-sm border-b border-gray-100 sticky top-0 z-50 overflow-visible">
    <div class="container mx-auto px-4 mb-4 md:mb-0 md:px-12 overflow-visible">
        <div class="flex flex-col md:flex-row md:items-center justify-between  space-y-4 md:space-y-0">
            <div class="flex items-center justify-between px-4 md:px-0 py-2 bg-white">
                <div class="flex items-center">
                    <a href="<?php echo e(url('/')); ?>" class="flex items-center">
                        <?php if($globalSettings && $globalSettings->site_logo): ?>
                            <img src="<?php echo e(asset('storage/' . $globalSettings->site_logo)); ?>" alt="<?php echo e($globalSettings->site_name ?? 'India IVF'); ?>" style="height: 100px !important" class="h-10 md:h-16 w-auto object-contain">
                        <?php else: ?>
                            <img src="<?php echo e(asset('assets/images/No-1-IVF-Centre-IndiaIVF.webp')); ?>" alt="India IVF Logo" class="h-10 md:h-16 w-auto object-contain">
                        <?php endif; ?>
                    </a>
                </div>
                <div class="md:hidden">
                    <button id="mobileMenuBtn" class="text-gray-700 focus:outline-none">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16"></path>
                        </svg>
                    </button>
                </div>
            </div>
            <div class="flex items-center space-x-2 md:space-x-4 w-full md:w-auto">
                <div class="relative block">
                    <input placeholder="Search articles..." class="w-[100%] md:w-72 pl-10 pr-4 py-2 border border-gray-200 rounded-full focus:outline-none focus:border-brand-pink">
                    <i class="fas fa-search absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-400"></i>
                </div>
                <button class="hidden md:block bg-brand-blue hover:bg-brand-pink text-white px-4 md:px-6 py-2 rounded-full font-medium hover:bg-opacity-90 transition-all text-sm md:text-base">Shop</button>
                <div class="flex flex-row items-center space-x-2 md:space-x-3">
                    <?php if($globalSettings && $globalSettings->facebook_url): ?>
                    <a href="<?php echo e($globalSettings->facebook_url); ?>" target="_blank" rel="noopener noreferrer" aria-label="Facebook">
                        <span class="w-8 h-8 bg-brand-pink text-white rounded-full flex items-center justify-center hover:bg-opacity-90 cursor-pointer transition-all">
                            <i class="fab fa-facebook-f text-sm"></i>
                        </span>
                    </a>
                    <?php else: ?>
                    <span class="w-8 h-8 bg-brand-pink text-white rounded-full flex items-center justify-center hover:bg-opacity-90 cursor-pointer transition-all">
                        <i class="fab fa-facebook-f text-sm"></i>
                    </span>
                    <?php endif; ?>

                    <?php if($globalSettings && $globalSettings->twitter_url): ?>
                    <a href="<?php echo e($globalSettings->twitter_url); ?>" target="_blank" rel="noopener noreferrer" aria-label="Twitter">
                        <span class="w-8 h-8 bg-brand-blue text-white rounded-full flex items-center justify-center hover:bg-opacity-90 cursor-pointer transition-all">
                            <i class="fab fa-twitter text-sm"></i>
                        </span>
                    </a>
                    <?php else: ?>
                    <span class="w-8 h-8 bg-brand-blue text-white rounded-full flex items-center justify-center hover:bg-opacity-90 cursor-pointer transition-all">
                        <i class="fab fa-twitter text-sm"></i>
                    </span>
                    <?php endif; ?>

                    <?php if($globalSettings && $globalSettings->instagram_url): ?>
                    <a href="<?php echo e($globalSettings->instagram_url); ?>" target="_blank" rel="noopener noreferrer" aria-label="Instagram">
                        <span class="w-8 h-8 bg-brand-pink text-white rounded-full flex items-center justify-center hover:bg-opacity-90 cursor-pointer transition-all">
                            <i class="fab fa-instagram text-sm"></i>
                        </span>
                    </a>
                    <?php else: ?>
                    <span class="w-8 h-8 bg-brand-pink text-white rounded-full flex items-center justify-center hover:bg-opacity-90 cursor-pointer transition-all">
                        <i class="fab fa-instagram text-sm"></i>
                    </span>
                    <?php endif; ?>

                    <?php if($globalSettings && $globalSettings->whatsapp_number): ?>
                    <a href="https://wa.me/<?php echo e(preg_replace('/[^0-9]/', '', $globalSettings->whatsapp_number)); ?>" target="_blank" rel="noopener noreferrer" aria-label="WhatsApp">
                        <span class="w-8 h-8 bg-green-500 text-white rounded-full flex items-center justify-center hover:bg-opacity-90 cursor-pointer transition-all">
                            <i class="fab fa-whatsapp text-sm"></i>
                        </span>
                    </a>
                    <?php else: ?>
                    <span class="w-8 h-8 bg-green-500 text-white rounded-full flex items-center justify-center hover:bg-opacity-90 cursor-pointer transition-all">
                        <i class="fab fa-whatsapp text-sm"></i>
                    </span>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <nav class="relative overflow-visible">
            <div class="hidden md:flex py-3 justify-between items-center sm:text-sm relative overflow-visible">
                <a href="<?php echo e(url('/')); ?>">
                    <span class="text-gray-700 hover:text-brand-pink font-medium cursor-pointer whitespace-nowrap">Home</span>
                </a>
                <div class="group relative">
                    <button class="text-gray-700 hover:text-brand-pink font-medium cursor-pointer whitespace-nowrap">Planning for baby</button>
                    <div class="absolute left-0 top-full pt-2 bg-transparent z-[100] hidden group-hover:block" style="min-width: 600px;">
                        <div class="bg-white border shadow-xl max-w-6xl p-4 rounded-md" style="width: max-content; min-width: 600px;">
                        <div class="grid grid-cols-3 gap-6 w-full">
                            <div>
                                <h4 class="text-md font-semibold mb-2 text-brand-pink">Fertility Issues</h4>
                                <ul class="space-y-1 text-gray-600">
                                    <li><a href="#" class="hover:text-pink-500">Difficulty Conceiving</a></li>
                                    <li><a href="#" class="hover:text-pink-500">Female Infertility</a></li>
                                    <li><a href="#" class="hover:text-pink-500">Male Infertility</a></li>
                                    <li><a href="#" class="hover:text-pink-500">Unexplained Infertility</a></li>
                                    <li><a href="#" class="hover:text-pink-500">Pregnancy Loss Care</a></li>
                                    <li><a href="#" class="hover:text-pink-500">Failed IVF Solutions</a></li>
                                    <li><a href="#" class="hover:text-pink-500">Second Opinion</a></li>
                                </ul>
                            </div>
                            <div>
                                <h4 class="text-md font-semibold mb-2 text-brand-pink">IVF &amp; Related Treatments</h4>
                                <ul class="space-y-1 text-gray-600">
                                    <li><a href="#" class="hover:text-pink-500">IVF</a></li>
                                    <li><a href="#" class="hover:text-pink-500">ICSI</a></li>
                                    <li><a href="#" class="hover:text-pink-500">IUI</a></li>
                                    <li><a href="#" class="hover:text-pink-500">Donor Egg Program</a></li>
                                    <li><a href="#" class="hover:text-pink-500">Donor Sperm Program</a></li>
                                    <li><a href="#" class="hover:text-pink-500">Surrogacy</a></li>
                                    <li><a href="#" class="hover:text-pink-500">IVF for Single Mothers</a></li>
                                    <li><a href="#" class="hover:text-pink-500">IVF for HIV-positive Couples</a></li>
                                </ul>
                            </div>
                            <div>
                                <h4 class="text-md font-semibold mb-2 text-brand-pink">Advanced Techniques</h4>
                                <ul class="space-y-1 text-gray-600">
                                    <li><a href="#" class="hover:text-pink-500">Blastocyst Transfer</a></li>
                                    <li><a href="#" class="hover:text-pink-500">Embryo Glue</a></li>
                                    <li><a href="#" class="hover:text-pink-500">Laser Assisted Hatching</a></li>
                                    <li><a href="#" class="hover:text-pink-500">Time-Lapse Embryo Monitoring</a></li>
                                    <li><a href="#" class="hover:text-pink-500">Double Witnessing</a></li>
                                    <li><a href="#" class="hover:text-pink-500">MACS</a></li>
                                    <li><a href="#" class="hover:text-pink-500">Microfluidic Sperm Sorting</a></li>
                                </ul><br>
                                <h5 class="text-md font-semibold mb-2 text-brand-pink">Male Surgical Procedures</h5>
                                <ul class="space-y-1 text-gray-600">
                                    <li><a href="#" class="hover:text-pink-500">TESA</a></li>
                                    <li><a href="#" class="hover:text-pink-500">PESA</a></li>
                                    <li><a href="#" class="hover:text-pink-500">Micro-TESE</a></li>
                                    <li><a href="#" class="hover:text-pink-500">Testicular Mapping</a></li>
                                    <li><a href="#" class="hover:text-pink-500">Surgical Innovations / Stem Cell Research</a></li>
                                </ul>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
                <div class="group relative">
                    <button class="text-gray-700 hover:text-brand-pink font-medium cursor-pointer whitespace-nowrap">Fertility Preservation</button>
                    <div class="absolute left-1/2 -translate-x-1/2 top-full pt-2 bg-transparent z-[100] hidden group-hover:block">
                        <div class="bg-white border shadow-xl p-4 rounded-md" style="min-width: 300px; width: max-content;">
                        <div class="grid gap-6 w-full">
                            <div>
                                <ul class="space-y-2 text-gray-600">
                                    <li><a href="#" class="hover:text-pink-500 ">Egg Freezing</a></li>
                                    <li><a href="#" class="hover:text-pink-500 ">Sperm Freezing</a></li>
                                    <li><a href="#" class="hover:text-pink-500 ">Embryo Freezing</a></li>
                                    <li><a href="#" class="hover:text-pink-500 ">Fertility Preservation for Cancer Patients</a></li>
                                    <li><a href="#" class="hover:text-pink-500 ">Social Egg Freezing</a></li>
                                    <li><a href="#" class="hover:text-pink-500 ">Storage &amp; Legal Guidelines</a></li>
                                </ul>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
                <div class="group relative">
                    <button class="text-gray-700 hover:text-brand-pink font-medium cursor-pointer whitespace-nowrap">Fertility Wellness</button>
                    <div class="absolute left-1/2 -translate-x-1/2 top-full pt-2 bg-transparent z-[100] hidden group-hover:block">
                        <div class="bg-white border shadow-xl p-4 rounded-md" style="min-width: 300px; width: max-content;">
                        <div class="grid gap-6 w-full">
                            <div>
                                <ul class="space-y-2 text-gray-600">
                                    <li><a href="#" class="hover:text-pink-500">Fertility Tests &amp; Assessments</a></li>
                                    <li><a href="#" class="hover:text-pink-500">BMI Calculator &amp; Weight Management</a></li>
                                    <li><a href="#" class="hover:text-pink-500">Fertility Diet &amp; Lifestyle Consultations</a></li>
                                    <li><a href="#" class="hover:text-pink-500">Stress &amp; Mind-Body Support</a></li>
                                    <li><a href="#" class="hover:text-pink-500">Fertility Supplements &amp; Products</a></li>
                                </ul>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
                <div class="group relative">
                    <button class="text-gray-700 hover:text-brand-pink font-medium cursor-pointer whitespace-nowrap">Centres</button>
                    <div class="absolute left-1/2 -translate-x-1/2 top-full pt-2 bg-transparent z-[100] hidden group-hover:block">
                        <div class="bg-white border shadow-xl p-4 rounded-md" style="min-width: 300px; width: max-content;">
                        <div class="grid gap-6 w-full">
                            <div>
                                <ul class="space-y-2 text-gray-600">
                                    <li><a href="#" class="hover:text-pink-500">Delhi – South (Vasant Lok)</a></li>
                                    <li><a href="#" class="hover:text-pink-500">Delhi – North (Rohini)</a></li>
                                    <li><a href="#" class="hover:text-pink-500">Gurugram</a></li>
                                    <li><a href="#" class="hover:text-pink-500">Noida</a></li>
                                    <li><a href="#" class="hover:text-pink-500">Ghaziabad</a></li>
                                    <li><a href="#" class="hover:text-pink-500">Srinagar</a></li>
                                </ul>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
                <span class="text-gray-700 hover:text-brand-pink font-medium cursor-pointer whitespace-nowrap">Our Pricing</span>
                <span class="text-gray-700 hover:text-brand-pink font-medium cursor-pointer whitespace-nowrap">Patient Resources</span>
                <span class="text-gray-700 hover:text-brand-pink font-medium cursor-pointer whitespace-nowrap">Academics</span>
                <span class="text-gray-700 hover:text-brand-pink font-medium cursor-pointer whitespace-nowrap">International Patients</span>

                <div class="group relative">
                    <button id="desktopMenuBtn" class="text-gray-700 hover:text-brand-pink focus:outline-none">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16"></path>
                        </svg>
                    </button>
                    <div class="absolute right-0 top-full pt-2 bg-transparent z-[100] hidden group-hover:block">
                        <div class="bg-white border shadow-xl max-w-6xl p-4 rounded-md">
                        <div class="grid gap-6 w-full">
                            <div>
                                <ul class="space-y-3">
                                    <li><a href="#" class="hover:text-pink-500">Franchise Opportunities</a></li>
                                    <li><a href="#" class="hover:text-pink-500">Corporate Health Talks</a></li>
                                    <li><a href="<?php echo e(url('blog')); ?>" class="hover:text-pink-500">Blog</a></li>
                                    <li><a href="#" class="hover:text-pink-500">About Us</a></li>
                                </ul>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="mobileMenu" class="hidden md:hidden border-t border-gray-200 bg-white py-4 space-y-2 max-h-[calc(100vh-200px)] overflow-y-auto">
                <a href="<?php echo e(url('/')); ?>" class="block px-4 py-2 text-gray-700 hover:text-brand-pink font-medium">Home</a>
                <hr class="my-2">
                
                <!-- Planning for baby -->
                <button class="w-full flex justify-between items-center px-4 py-2 text-gray-700 hover:text-brand-pink font-medium" data-toggle="submenu">
                    <span>Planning for baby</span>
                    <i class="fa-solid fa-chevron-down transition-transform duration-300"></i>
                </button>
                <div class="hidden submenu space-y-2 pl-4">
                    <!-- Fertility Issues -->
                    <button class="w-full flex justify-between items-center text-gray-600 hover:text-brand-pink text-sm" data-toggle="submenu">
                        <span>Fertility Issues</span>
                        <i class="fa-solid fa-chevron-down transition-transform duration-300 text-xs"></i>
                    </button>
                    <div class="hidden submenu space-y-1 pl-4">
                        <a href="#" class="block py-1.5 text-gray-600 hover:text-brand-pink text-sm">Difficulty Conceiving</a>
                        <a href="#" class="block py-1.5 text-gray-600 hover:text-brand-pink text-sm">Female Infertility</a>
                        <a href="#" class="block py-1.5 text-gray-600 hover:text-brand-pink text-sm">Male Infertility</a>
                        <a href="#" class="block py-1.5 text-gray-600 hover:text-brand-pink text-sm">Unexplained Infertility</a>
                        <a href="#" class="block py-1.5 text-gray-600 hover:text-brand-pink text-sm">Pregnancy Loss Care</a>
                        <a href="#" class="block py-1.5 text-gray-600 hover:text-brand-pink text-sm">Failed IVF Solutions</a>
                        <a href="#" class="block py-1.5 text-gray-600 hover:text-brand-pink text-sm">Second Opinion</a>
                    </div>
                    
                    <!-- IVF & Related Treatments -->
                    <button class="w-full flex justify-between items-center text-gray-600 hover:text-brand-pink text-sm" data-toggle="submenu">
                        <span>IVF &amp; Related Treatments</span>
                        <i class="fa-solid fa-chevron-down transition-transform duration-300 text-xs"></i>
                    </button>
                    <div class="hidden submenu space-y-1 pl-4">
                        <a href="#" class="block py-1.5 text-gray-600 hover:text-brand-pink text-sm">IVF</a>
                        <a href="#" class="block py-1.5 text-gray-600 hover:text-brand-pink text-sm">ICSI</a>
                        <a href="#" class="block py-1.5 text-gray-600 hover:text-brand-pink text-sm">IUI</a>
                        <a href="#" class="block py-1.5 text-gray-600 hover:text-brand-pink text-sm">Donor Egg Program</a>
                        <a href="#" class="block py-1.5 text-gray-600 hover:text-brand-pink text-sm">Donor Sperm Program</a>
                        <a href="#" class="block py-1.5 text-gray-600 hover:text-brand-pink text-sm">Surrogacy</a>
                        <a href="#" class="block py-1.5 text-gray-600 hover:text-brand-pink text-sm">IVF for Single Mothers</a>
                        <a href="#" class="block py-1.5 text-gray-600 hover:text-brand-pink text-sm">IVF for HIV-positive Couples</a>
                    </div>
                    
                    <!-- Advanced Techniques -->
                    <button class="w-full flex justify-between items-center text-gray-600 hover:text-brand-pink text-sm" data-toggle="submenu">
                        <span>Advanced Techniques</span>
                        <i class="fa-solid fa-chevron-down transition-transform duration-300 text-xs"></i>
                    </button>
                    <div class="hidden submenu space-y-1 pl-4">
                        <a href="#" class="block py-1.5 text-gray-600 hover:text-brand-pink text-sm">Blastocyst Transfer</a>
                        <a href="#" class="block py-1.5 text-gray-600 hover:text-brand-pink text-sm">Embryo Glue</a>
                        <a href="#" class="block py-1.5 text-gray-600 hover:text-brand-pink text-sm">Laser Assisted Hatching</a>
                        <a href="#" class="block py-1.5 text-gray-600 hover:text-brand-pink text-sm">Time-Lapse Embryo Monitoring</a>
                        <a href="#" class="block py-1.5 text-gray-600 hover:text-brand-pink text-sm">Double Witnessing</a>
                        <a href="#" class="block py-1.5 text-gray-600 hover:text-brand-pink text-sm">MACS</a>
                        <a href="#" class="block py-1.5 text-gray-600 hover:text-brand-pink text-sm">Microfluidic Sperm Sorting</a>
                    </div>
                    
                    <!-- Male Surgical Procedures -->
                    <button class="w-full flex justify-between items-center text-gray-600 hover:text-brand-pink text-sm" data-toggle="submenu">
                        <span>Male Surgical Procedures</span>
                        <i class="fa-solid fa-chevron-down transition-transform duration-300 text-xs"></i>
                    </button>
                    <div class="hidden submenu space-y-1 pl-4">
                        <a href="#" class="block py-1.5 text-gray-600 hover:text-brand-pink text-sm">TESA</a>
                        <a href="#" class="block py-1.5 text-gray-600 hover:text-brand-pink text-sm">PESA</a>
                        <a href="#" class="block py-1.5 text-gray-600 hover:text-brand-pink text-sm">Micro-TESE</a>
                        <a href="#" class="block py-1.5 text-gray-600 hover:text-brand-pink text-sm">Testicular Mapping</a>
                        <a href="#" class="block py-1.5 text-gray-600 hover:text-brand-pink text-sm">Surgical Innovations / Stem Cell Research</a>
                    </div>
                </div>
                
                <hr class="my-2">
                
                <!-- Fertility Preservation -->
                <button class="w-full flex justify-between items-center px-4 py-2 text-gray-700 hover:text-brand-pink font-medium" data-toggle="submenu">
                    <span>Fertility Preservation</span>
                    <i class="fa-solid fa-chevron-down transition-transform duration-300"></i>
                </button>
                <div class="hidden submenu space-y-1 pl-4">
                    <a href="#" class="block py-1.5 text-gray-600 hover:text-brand-pink text-sm">Egg Freezing</a>
                    <a href="#" class="block py-1.5 text-gray-600 hover:text-brand-pink text-sm">Sperm Freezing</a>
                    <a href="#" class="block py-1.5 text-gray-600 hover:text-brand-pink text-sm">Embryo Freezing</a>
                    <a href="#" class="block py-1.5 text-gray-600 hover:text-brand-pink text-sm">Fertility Preservation for Cancer Patients</a>
                    <a href="#" class="block py-1.5 text-gray-600 hover:text-brand-pink text-sm">Social Egg Freezing</a>
                    <a href="#" class="block py-1.5 text-gray-600 hover:text-brand-pink text-sm">Storage &amp; Legal Guidelines</a>
                </div>
                
                <hr class="my-2">
                
                <!-- Fertility Wellness -->
                <button class="w-full flex justify-between items-center px-4 py-2 text-gray-700 hover:text-brand-pink font-medium" data-toggle="submenu">
                    <span>Fertility Wellness</span>
                    <i class="fa-solid fa-chevron-down transition-transform duration-300"></i>
                </button>
                <div class="hidden submenu space-y-1 pl-4">
                    <a href="#" class="block py-1.5 text-gray-600 hover:text-brand-pink text-sm">Fertility Tests &amp; Assessments</a>
                    <a href="#" class="block py-1.5 text-gray-600 hover:text-brand-pink text-sm">BMI Calculator &amp; Weight Management</a>
                    <a href="#" class="block py-1.5 text-gray-600 hover:text-brand-pink text-sm">Fertility Diet &amp; Lifestyle Consultations</a>
                    <a href="#" class="block py-1.5 text-gray-600 hover:text-brand-pink text-sm">Stress &amp; Mind-Body Support</a>
                    <a href="#" class="block py-1.5 text-gray-600 hover:text-brand-pink text-sm">Fertility Supplements &amp; Products</a>
                </div>
                
                <hr class="my-2">
                
                <!-- Centres -->
                <button class="w-full flex justify-between items-center px-4 py-2 text-gray-700 hover:text-brand-pink font-medium" data-toggle="submenu">
                    <span>Centres</span>
                    <i class="fa-solid fa-chevron-down transition-transform duration-300"></i>
                </button>
                <div class="hidden submenu space-y-1 pl-4">
                    <a href="#" class="block py-1.5 text-gray-600 hover:text-brand-pink text-sm">Delhi – South (Vasant Lok)</a>
                    <a href="#" class="block py-1.5 text-gray-600 hover:text-brand-pink text-sm">Delhi – North (Rohini)</a>
                    <a href="#" class="block py-1.5 text-gray-600 hover:text-brand-pink text-sm">Gurugram</a>
                    <a href="#" class="block py-1.5 text-gray-600 hover:text-brand-pink text-sm">Noida</a>
                    <a href="#" class="block py-1.5 text-gray-600 hover:text-brand-pink text-sm">Ghaziabad</a>
                    <a href="#" class="block py-1.5 text-gray-600 hover:text-brand-pink text-sm">Srinagar</a>
                </div>
                
                <hr class="my-2">
                
                <a href="#" class="block px-4 py-2 text-gray-700 hover:text-brand-pink font-medium">Our Pricing</a>
                <hr class="my-2">
                <a href="#" class="block px-4 py-2 text-gray-700 hover:text-brand-pink font-medium">Patient Resources</a>
                <hr class="my-2">
                <a href="#" class="block px-4 py-2 text-gray-700 hover:text-brand-pink font-medium">Academics</a>
                <hr class="my-2">
                <a href="#" class="block px-4 py-2 text-gray-700 hover:text-brand-pink font-medium">International Patients</a>
                <hr class="my-2">
                
                <!-- More Menu -->
                <button class="w-full flex justify-between items-center px-4 py-2 text-gray-700 hover:text-brand-pink font-medium" data-toggle="submenu">
                    <span>More</span>
                    <i class="fa-solid fa-chevron-down transition-transform duration-300"></i>
                </button>
                <div class="hidden submenu space-y-1 pl-4">
                    <a href="#" class="block py-1.5 text-gray-600 hover:text-brand-pink text-sm">Franchise Opportunities</a>
                    <a href="#" class="block py-1.5 text-gray-600 hover:text-brand-pink text-sm">Corporate Health Talks</a>
                    <a href="<?php echo e(url('blog')); ?>" class="block py-1.5 text-gray-600 hover:text-brand-pink text-sm">Blog</a>
                    <a href="#" class="block py-1.5 text-gray-600 hover:text-brand-pink text-sm">About Us</a>
                </div>
            </div>
        </nav>
    </div>
    <script>
        const mobileBtn = document.getElementById("mobileMenuBtn");
        const mobileMenu = document.getElementById("mobileMenu");

        if (mobileBtn && mobileMenu) {
            mobileBtn.addEventListener("click", function(e) {
                e.stopPropagation();
                mobileMenu.classList.toggle("hidden");
                // Toggle hamburger icon
                const icon = mobileBtn.querySelector('svg');
                if (icon) {
                    if (mobileMenu.classList.contains("hidden")) {
                        icon.innerHTML = '<path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16"></path>';
                    } else {
                        icon.innerHTML = '<path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"></path>';
                    }
                }
            });
        }

        // Close mobile menu when clicking outside
        document.addEventListener("click", function(event) {
            if (mobileMenu && !mobileMenu.contains(event.target) && !mobileBtn.contains(event.target)) {
                if (!mobileMenu.classList.contains("hidden")) {
                    mobileMenu.classList.add("hidden");
                    const icon = mobileBtn.querySelector('svg');
                    if (icon) {
                        icon.innerHTML = '<path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16"></path>';
                    }
                }
            }
        });

        // Handle submenu toggles
        document.querySelectorAll('[data-toggle="submenu"]').forEach(btn => {
            btn.addEventListener("click", function(e) {
                e.stopPropagation();
                const submenu = this.nextElementSibling;
                if (submenu) {
                submenu.classList.toggle("hidden");
                    const icon = this.querySelector("i");
                    if (icon) {
                        icon.classList.toggle("rotate-180");
                    }
                }
            });
        });
    </script>
</header>
<?php /**PATH C:\wamp64\www\adminivf\resources\views/frontend/layouts/header.blade.php ENDPATH**/ ?>