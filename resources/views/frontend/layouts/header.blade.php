<header id="header" class="bg-white shadow-sm border-b border-gray-100 sticky top-0 z-50 overflow-visible">
    <div class="container mx-auto px-4 mb-4 md:mb-0 md:px-12 overflow-visible">
        <div class="flex flex-col md:flex-row md:items-center justify-between  space-y-4 md:space-y-0">
            <div class="flex items-center justify-between px-4 md:px-0 py-2 bg-white">
                <div class="flex items-center">
                    <a href="{{ url('/') }}" class="flex items-center">
                        @if($globalSettings && $globalSettings->site_logo)
                            <img src="{{ asset('storage/' . $globalSettings->site_logo) }}" alt="{{ $globalSettings->site_name ?? 'India IVF' }}" style="height: 100px !important" class="h-10 md:h-16 w-auto object-contain">
                        @else
                            <img src="{{ asset('assets/images/No-1-IVF-Centre-IndiaIVF.webp') }}" alt="India IVF Logo" class="h-10 md:h-16 w-auto object-contain">
                        @endif
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
                <div class="relative block w-full md:w-auto">
                    <input
                        id="article-search-input"
                        type="text"
                        placeholder="Search articles..."
                        class="w-[100%] md:w-72 pl-10 pr-4 py-2 border border-gray-200 rounded-full focus:outline-none focus:border-brand-pink"
                        autocomplete="off"
                    >
                    <i class="fas fa-search absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-400"></i>
                    <div id="search-results" class="hidden absolute top-full left-0 right-0 md:right-auto md:w-96 mt-2 bg-white border border-gray-200 rounded-lg shadow-xl z-[9999] max-h-96 overflow-y-auto">
                        <div id="search-results-content" class="p-2">
                            <!-- Search results will be inserted here -->
                        </div>
                    </div>
                </div>
                <a href="{{ route('shop') }}" class="hidden md:block bg-brand-blue hover:bg-brand-pink text-white px-4 md:px-6 py-2 rounded-full font-medium hover:bg-opacity-90 transition-all text-sm md:text-base text-center">Shop</a>
                <div class="flex flex-row items-center space-x-2 md:space-x-3">
                    @if($globalSettings && $globalSettings->facebook_url)
                    <a href="{{ $globalSettings->facebook_url }}" target="_blank" rel="noopener noreferrer" aria-label="Facebook">
                        <span class="w-8 h-8 bg-brand-pink text-white rounded-full flex items-center justify-center hover:bg-opacity-90 cursor-pointer transition-all">
                            <i class="fab fa-facebook-f text-sm"></i>
                        </span>
                    </a>
                    @else
                    <span class="w-8 h-8 bg-brand-pink text-white rounded-full flex items-center justify-center hover:bg-opacity-90 cursor-pointer transition-all">
                        <i class="fab fa-facebook-f text-sm"></i>
                    </span>
                    @endif

                    @if($globalSettings && $globalSettings->twitter_url)
                    <a href="{{ $globalSettings->twitter_url }}" target="_blank" rel="noopener noreferrer" aria-label="Twitter">
                        <span class="w-8 h-8 bg-brand-blue text-white rounded-full flex items-center justify-center hover:bg-opacity-90 cursor-pointer transition-all">
                            <i class="fab fa-twitter text-sm"></i>
                        </span>
                    </a>
                    @else
                    <span class="w-8 h-8 bg-brand-blue text-white rounded-full flex items-center justify-center hover:bg-opacity-90 cursor-pointer transition-all">
                        <i class="fab fa-twitter text-sm"></i>
                    </span>
                    @endif

                    @if($globalSettings && $globalSettings->instagram_url)
                    <a href="{{ $globalSettings->instagram_url }}" target="_blank" rel="noopener noreferrer" aria-label="Instagram">
                        <span class="w-8 h-8 bg-brand-pink text-white rounded-full flex items-center justify-center hover:bg-opacity-90 cursor-pointer transition-all">
                            <i class="fab fa-instagram text-sm"></i>
                        </span>
                    </a>
                    @else
                    <span class="w-8 h-8 bg-brand-pink text-white rounded-full flex items-center justify-center hover:bg-opacity-90 cursor-pointer transition-all">
                        <i class="fab fa-instagram text-sm"></i>
                    </span>
                    @endif

                    @if($globalSettings && $globalSettings->whatsapp_number)
                    <a href="https://wa.me/{{ preg_replace('/[^0-9]/', '', $globalSettings->whatsapp_number) }}" target="_blank" rel="noopener noreferrer" aria-label="WhatsApp">
                        <span class="w-8 h-8 bg-green-500 text-white rounded-full flex items-center justify-center hover:bg-opacity-90 cursor-pointer transition-all">
                            <i class="fab fa-whatsapp text-sm"></i>
                        </span>
                    </a>
                    @else
                    <span class="w-8 h-8 bg-green-500 text-white rounded-full flex items-center justify-center hover:bg-opacity-90 cursor-pointer transition-all">
                        <i class="fab fa-whatsapp text-sm"></i>
                    </span>
                    @endif
                </div>
            </div>
        </div>
        <nav class="relative overflow-visible">
            <div class="hidden md:flex py-3 justify-between items-center sm:text-sm relative overflow-visible">
                <a href="{{ url('/') }}">
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
                                    <li><a href="{{ route('difficulty-conceiving') }}" class="hover:text-pink-500">Difficulty Conceiving</a></li>
                                    <li><a href="{{ route('female-infertility') }}" class="hover:text-pink-500">Female Infertility</a></li>
                                    <li><a href="{{ route('male-infertility') }}" class="hover:text-pink-500">Male Infertility</a></li>
                                    <li><a href="{{ route('unexplained-infertility') }}" class="hover:text-pink-500">Unexplained Infertility</a></li>
                                    <li><a href="{{ route('pregnancy-loss-care') }}" class="hover:text-pink-500">Pregnancy Loss Care</a></li>
                                    <li><a href="{{ route('failed-ivf-solutions') }}" class="hover:text-pink-500">Failed IVF Solutions</a></li>
                                    <li><a href="{{ route('second-opinion') }}" class="hover:text-pink-500">Second Opinion</a></li>
                                </ul>
                            </div>
                            <div>
                                <h4 class="text-md font-semibold mb-2 text-brand-pink">IVF &amp; Related Treatments</h4>
                                <ul class="space-y-1 text-gray-600">
                                    <li><a href="{{ route('ivf') }}" class="hover:text-pink-500">IVF</a></li>
                                    <li><a href="{{ route('icsi') }}" class="hover:text-pink-500">ICSI</a></li>
                                    <li><a href="{{ route('iui') }}" class="hover:text-pink-500">IUI</a></li>
                                    <li><a href="{{ route('donor-egg') }}" class="hover:text-pink-500">Donor Egg Program</a></li>
                                    <li><a href="{{ route('donor-sperm') }}" class="hover:text-pink-500">Donor Sperm Program</a></li>
                                    <li><a href="{{ route('surrogacy') }}" class="hover:text-pink-500">Surrogacy</a></li>
                                    <li><a href="{{ route('ivf-single-mothers') }}" class="hover:text-pink-500">IVF for Single Mothers</a></li>
                                    <li><a href="{{ route('ivf-hiv') }}" class="hover:text-pink-500">IVF for HIV-positive Couples</a></li>
                                </ul>
                            </div>
                            <div>
                                <h4 class="text-md font-semibold mb-2 text-brand-pink">Advanced Techniques</h4>
                                <ul class="space-y-1 text-gray-600">
                                    <li><a href="{{ route('blasto-cyst-transfer') }}" class="hover:text-pink-500">Blastocyst Transfer</a></li>
                                    <li><a href="{{ route('embryo-glue') }}" class="hover:text-pink-500">Embryo Glue</a></li>
                                    <li><a href="{{ route('laser-assisted-hatching') }}" class="hover:text-pink-500">Laser Assisted Hatching</a></li>
                                    <li><a href="{{ route('intelligent-womb') }}" class="hover:text-pink-500">Time-Lapse Embryo Monitoring</a></li>
                                    <li><a href="{{ route('double-witnessing') }}" class="hover:text-pink-500">Double Witnessing</a></li>
                                    <li><a href="{{ route('macs') }}" class="hover:text-pink-500">MACS</a></li>
                                    <li><a href="{{ route('oo-active') }}" class="hover:text-pink-500">Microfluidic Sperm Sorting</a></li>
                                </ul><br>
                                <h5 class="text-md font-semibold mb-2 text-brand-pink">Male Surgical Procedures</h5>
                                <ul class="space-y-1 text-gray-600">
                                    <li><a href="{{ route('tesa') }}" class="hover:text-pink-500">TESA</a></li>
                                    <li><a href="{{ route('pesa') }}" class="hover:text-pink-500">PESA</a></li>
                                    <li><a href="{{ route('micro-tese') }}" class="hover:text-pink-500">Micro-TESE</a></li>
                                    <li><a href="{{ route('testicular-mapping') }}" class="hover:text-pink-500">Testicular Mapping</a></li>
                                    <li><a href="{{ route('surgical-innovations') }}" class="hover:text-pink-500">Surgical Innovations / Stem Cell Research</a></li>
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
                                    <li><a href="{{ route('egg-freezing') }}" class="hover:text-pink-500 ">Egg Freezing</a></li>
                                    <li><a href="{{ route('sperm-freezing') }}" class="hover:text-pink-500 ">Sperm Freezing</a></li>
                                    <li><a href="{{ route('embryo-freezing') }}" class="hover:text-pink-500 ">Embryo Freezing</a></li>
                                    <li><a href="{{ route('onco-fertility') }}" class="hover:text-pink-500 ">Fertility Preservation for Cancer Patients</a></li>
                                    <li><a href="{{ route('social-egg-freezing') }}" class="hover:text-pink-500 ">Social Egg Freezing</a></li>
                                    <li><a href="{{ route('fertility-preservation') }}" class="hover:text-pink-500 ">Storage &amp; Legal Guidelines</a></li>
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
                                    <li><a href="{{ route('fertility-tests-and-assessments') }}" class="hover:text-pink-500">Fertility Tests &amp; Assessments</a></li>
                                    <li><a href="{{ route('fertility-wellness') }}" class="hover:text-pink-500">BMI Calculator &amp; Weight Management</a></li>
                                    <li><a href="{{ route('fertility-diet') }}" class="hover:text-pink-500">Fertility Diet &amp; Lifestyle Consultations</a></li>
                                    <li><a href="{{ route('stress-and-mind-body') }}" class="hover:text-pink-500">Stress &amp; Mind-Body Support</a></li>
                                    <li><a href="{{ route('fertility-wellness') }}" class="hover:text-pink-500">Fertility Supplements &amp; Products</a></li>
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
                                    <li><a href="{{ route('delhi-center-basant-lok') }}" class="hover:text-pink-500">Delhi – South (Vasant Lok)</a></li>
                                    <li><a href="{{ route('delhi-center-rohini') }}" class="hover:text-pink-500">Delhi – North (Rohini)</a></li>
                                    <li><a href="{{ route('gurugram-center') }}" class="hover:text-pink-500">Gurugram</a></li>
                                    <li><a href="{{ route('noida-center') }}" class="hover:text-pink-500">Noida</a></li>
                                    <li><a href="{{ route('ghaziabad-center') }}" class="hover:text-pink-500">Ghaziabad</a></li>
                                    <li><a href="{{ route('srinagar-center') }}" class="hover:text-pink-500">Srinagar</a></li>
                                </ul>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
                <a href="{{ route('our-pricing') }}" class="text-gray-700 hover:text-brand-pink font-medium whitespace-nowrap">Our Pricing</a>
                <a href="{{ route('patient-resources') }}" class="text-gray-700 hover:text-brand-pink font-medium whitespace-nowrap">Patient Resources</a>
                <a href="{{ route('academics-training') }}" class="text-gray-700 hover:text-brand-pink font-medium whitespace-nowrap">Academics</a>
                <a href="{{ route('international-patients') }}" class="text-gray-700 hover:text-brand-pink font-medium whitespace-nowrap">International Patients</a>

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
                                    <li><a href="{{ route('franchise-opportunities') }}" class="hover:text-pink-500">Franchise Opportunities</a></li>
                                    <li><a href="{{ route('corporate-health-talks') }}" class="hover:text-pink-500">Corporate Health Talks</a></li>
                                    <li><a href="{{ url('blog') }}" class="hover:text-pink-500">Blog</a></li>
                                    <li><a href="{{ route('about') }}" class="hover:text-pink-500">About Us</a></li>
                                </ul>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="mobileMenu" class="hidden md:hidden border-t border-gray-200 bg-white py-4 space-y-2 max-h-[calc(100vh-200px)] overflow-y-auto">
                <a href="{{ url('/') }}" class="block px-4 py-2 text-gray-700 hover:text-brand-pink font-medium">Home</a>
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
                        <a href="{{ route('difficulty-conceiving') }}" class="block py-1.5 text-gray-600 hover:text-brand-pink text-sm">Difficulty Conceiving</a>
                        <a href="{{ route('female-infertility') }}" class="block py-1.5 text-gray-600 hover:text-brand-pink text-sm">Female Infertility</a>
                        <a href="{{ route('male-infertility') }}" class="block py-1.5 text-gray-600 hover:text-brand-pink text-sm">Male Infertility</a>
                        <a href="{{ route('unexplained-infertility') }}" class="block py-1.5 text-gray-600 hover:text-brand-pink text-sm">Unexplained Infertility</a>
                        <a href="{{ route('pregnancy-loss-care') }}" class="block py-1.5 text-gray-600 hover:text-brand-pink text-sm">Pregnancy Loss Care</a>
                        <a href="{{ route('failed-ivf-solutions') }}" class="block py-1.5 text-gray-600 hover:text-brand-pink text-sm">Failed IVF Solutions</a>
                        <a href="{{ route('second-opinion') }}" class="block py-1.5 text-gray-600 hover:text-brand-pink text-sm">Second Opinion</a>
                    </div>

                    <!-- IVF & Related Treatments -->
                    <button class="w-full flex justify-between items-center text-gray-600 hover:text-brand-pink text-sm" data-toggle="submenu">
                        <span>IVF &amp; Related Treatments</span>
                        <i class="fa-solid fa-chevron-down transition-transform duration-300 text-xs"></i>
                    </button>
                    <div class="hidden submenu space-y-1 pl-4">
                        <a href="{{ route('ivf') }}" class="block py-1.5 text-gray-600 hover:text-brand-pink text-sm">IVF</a>
                        <a href="{{ route('icsi') }}" class="block py-1.5 text-gray-600 hover:text-brand-pink text-sm">ICSI</a>
                        <a href="{{ route('iui') }}" class="block py-1.5 text-gray-600 hover:text-brand-pink text-sm">IUI</a>
                        <a href="{{ route('donor-egg') }}" class="block py-1.5 text-gray-600 hover:text-brand-pink text-sm">Donor Egg Program</a>
                        <a href="{{ route('donor-sperm') }}" class="block py-1.5 text-gray-600 hover:text-brand-pink text-sm">Donor Sperm Program</a>
                        <a href="{{ route('surrogacy') }}" class="block py-1.5 text-gray-600 hover:text-brand-pink text-sm">Surrogacy</a>
                        <a href="{{ route('ivf-single-mothers') }}" class="block py-1.5 text-gray-600 hover:text-brand-pink text-sm">IVF for Single Mothers</a>
                        <a href="{{ route('ivf-hiv') }}" class="block py-1.5 text-gray-600 hover:text-brand-pink text-sm">IVF for HIV-positive Couples</a>
                    </div>

                    <!-- Advanced Techniques -->
                    <button class="w-full flex justify-between items-center text-gray-600 hover:text-brand-pink text-sm" data-toggle="submenu">
                        <span>Advanced Techniques</span>
                        <i class="fa-solid fa-chevron-down transition-transform duration-300 text-xs"></i>
                    </button>
                    <div class="hidden submenu space-y-1 pl-4">
                        <a href="{{ route('blasto-cyst-transfer') }}" class="block py-1.5 text-gray-600 hover:text-brand-pink text-sm">Blastocyst Transfer</a>
                        <a href="{{ route('embryo-glue') }}" class="block py-1.5 text-gray-600 hover:text-brand-pink text-sm">Embryo Glue</a>
                        <a href="{{ route('laser-assisted-hatching') }}" class="block py-1.5 text-gray-600 hover:text-brand-pink text-sm">Laser Assisted Hatching</a>
                        <a href="{{ route('intelligent-womb') }}" class="block py-1.5 text-gray-600 hover:text-brand-pink text-sm">Time-Lapse Embryo Monitoring</a>
                        <a href="{{ route('double-witnessing') }}" class="block py-1.5 text-gray-600 hover:text-brand-pink text-sm">Double Witnessing</a>
                        <a href="{{ route('macs') }}" class="block py-1.5 text-gray-600 hover:text-brand-pink text-sm">MACS</a>
                        <a href="{{ route('oo-active') }}" class="block py-1.5 text-gray-600 hover:text-brand-pink text-sm">Microfluidic Sperm Sorting</a>
                    </div>

                    <!-- Male Surgical Procedures -->
                    <button class="w-full flex justify-between items-center text-gray-600 hover:text-brand-pink text-sm" data-toggle="submenu">
                        <span>Male Surgical Procedures</span>
                        <i class="fa-solid fa-chevron-down transition-transform duration-300 text-xs"></i>
                    </button>
                    <div class="hidden submenu space-y-1 pl-4">
                        <a href="{{ route('tesa') }}" class="block py-1.5 text-gray-600 hover:text-brand-pink text-sm">TESA</a>
                        <a href="{{ route('pesa') }}" class="block py-1.5 text-gray-600 hover:text-brand-pink text-sm">PESA</a>
                        <a href="{{ route('micro-tese') }}" class="block py-1.5 text-gray-600 hover:text-brand-pink text-sm">Micro-TESE</a>
                        <a href="{{ route('testicular-mapping') }}" class="block py-1.5 text-gray-600 hover:text-brand-pink text-sm">Testicular Mapping</a>
                        <a href="{{ route('surgical-innovations') }}" class="block py-1.5 text-gray-600 hover:text-brand-pink text-sm">Surgical Innovations / Stem Cell Research</a>
                    </div>
                </div>

                <hr class="my-2">

                <!-- Fertility Preservation -->
                <button class="w-full flex justify-between items-center px-4 py-2 text-gray-700 hover:text-brand-pink font-medium" data-toggle="submenu">
                    <span>Fertility Preservation</span>
                    <i class="fa-solid fa-chevron-down transition-transform duration-300"></i>
                </button>
                <div class="hidden submenu space-y-1 pl-4">
                    <a href="{{ route('egg-freezing') }}" class="block py-1.5 text-gray-600 hover:text-brand-pink text-sm">Egg Freezing</a>
                    <a href="{{ route('sperm-freezing') }}" class="block py-1.5 text-gray-600 hover:text-brand-pink text-sm">Sperm Freezing</a>
                    <a href="{{ route('embryo-freezing') }}" class="block py-1.5 text-gray-600 hover:text-brand-pink text-sm">Embryo Freezing</a>
                    <a href="{{ route('onco-fertility') }}" class="block py-1.5 text-gray-600 hover:text-brand-pink text-sm">Fertility Preservation for Cancer Patients</a>
                    <a href="{{ route('social-egg-freezing') }}" class="block py-1.5 text-gray-600 hover:text-brand-pink text-sm">Social Egg Freezing</a>
                    <a href="{{ route('fertility-preservation') }}" class="block py-1.5 text-gray-600 hover:text-brand-pink text-sm">Storage &amp; Legal Guidelines</a>
                </div>

                <hr class="my-2">

                <!-- Fertility Wellness -->
                <button class="w-full flex justify-between items-center px-4 py-2 text-gray-700 hover:text-brand-pink font-medium" data-toggle="submenu">
                    <span>Fertility Wellness</span>
                    <i class="fa-solid fa-chevron-down transition-transform duration-300"></i>
                </button>
                <div class="hidden submenu space-y-1 pl-4">
                    <a href="{{ route('fertility-tests-and-assessments') }}" class="block py-1.5 text-gray-600 hover:text-brand-pink text-sm">Fertility Tests &amp; Assessments</a>
                    <a href="{{ route('fertility-wellness') }}" class="block py-1.5 text-gray-600 hover:text-brand-pink text-sm">BMI Calculator &amp; Weight Management</a>
                    <a href="{{ route('fertility-diet') }}" class="block py-1.5 text-gray-600 hover:text-brand-pink text-sm">Fertility Diet &amp; Lifestyle Consultations</a>
                    <a href="{{ route('stress-and-mind-body') }}" class="block py-1.5 text-gray-600 hover:text-brand-pink text-sm">Stress &amp; Mind-Body Support</a>
                    <a href="{{ route('fertility-wellness') }}" class="block py-1.5 text-gray-600 hover:text-brand-pink text-sm">Fertility Supplements &amp; Products</a>
                </div>

                <hr class="my-2">

                <!-- Centres -->
                <button class="w-full flex justify-between items-center px-4 py-2 text-gray-700 hover:text-brand-pink font-medium" data-toggle="submenu">
                    <span>Centres</span>
                    <i class="fa-solid fa-chevron-down transition-transform duration-300"></i>
                </button>
                <div class="hidden submenu space-y-1 pl-4">
                    <a href="{{ route('delhi-center-basant-lok') }}" class="block py-1.5 text-gray-600 hover:text-brand-pink text-sm">Delhi – South (Vasant Lok)</a>
                    <a href="{{ route('delhi-center-rohini') }}" class="block py-1.5 text-gray-600 hover:text-brand-pink text-sm">Delhi – North (Rohini)</a>
                    <a href="{{ route('gurugram-center') }}" class="block py-1.5 text-gray-600 hover:text-brand-pink text-sm">Gurugram</a>
                    <a href="{{ route('noida-center') }}" class="block py-1.5 text-gray-600 hover:text-brand-pink text-sm">Noida</a>
                    <a href="{{ route('ghaziabad-center') }}" class="block py-1.5 text-gray-600 hover:text-brand-pink text-sm">Ghaziabad</a>
                    <a href="{{ route('srinagar-center') }}" class="block py-1.5 text-gray-600 hover:text-brand-pink text-sm">Srinagar</a>
                </div>

                <hr class="my-2">

                <a href="{{ route('our-pricing') }}" class="block px-4 py-2 text-gray-700 hover:text-brand-pink font-medium">Our Pricing</a>
                <hr class="my-2">
                <a href="{{ route('patient-resources') }}" class="block px-4 py-2 text-gray-700 hover:text-brand-pink font-medium">Patient Resources</a>
                <hr class="my-2">
                <a href="{{ route('academics-training') }}" class="block px-4 py-2 text-gray-700 hover:text-brand-pink font-medium">Academics</a>
                <hr class="my-2">
                <a href="{{ route('international-patients') }}" class="block px-4 py-2 text-gray-700 hover:text-brand-pink font-medium">International Patients</a>
                <hr class="my-2">

                <!-- More Menu -->
                <button class="w-full flex justify-between items-center px-4 py-2 text-gray-700 hover:text-brand-pink font-medium" data-toggle="submenu">
                    <span>More</span>
                    <i class="fa-solid fa-chevron-down transition-transform duration-300"></i>
                </button>
                <div class="hidden submenu space-y-1 pl-4">
                    <a href="{{ route('franchise-opportunities') }}" class="block py-1.5 text-gray-600 hover:text-brand-pink text-sm">Franchise Opportunities</a>
                    <a href="{{ route('corporate-health-talks') }}" class="block py-1.5 text-gray-600 hover:text-brand-pink text-sm">Corporate Health Talks</a>
                    <a href="{{ url('blog') }}" class="block py-1.5 text-gray-600 hover:text-brand-pink text-sm">Blog</a>
                    <a href="{{ route('about') }}" class="block py-1.5 text-gray-600 hover:text-brand-pink text-sm">About Us</a>
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

        // Article Search Functionality
        (function() {
            const searchInput = document.getElementById('article-search-input');
            const searchResults = document.getElementById('search-results');
            const searchResultsContent = document.getElementById('search-results-content');
            let searchTimeout;

            if (!searchInput || !searchResults || !searchResultsContent) {
                console.error('Search elements not found:', {
                    searchInput: !!searchInput,
                    searchResults: !!searchResults,
                    searchResultsContent: !!searchResultsContent
                });
                return;
            }

            console.log('Search functionality initialized');

            // Debounced search function
            function performSearch(query) {
                if (query.length < 2) {
                    searchResults.classList.add('hidden');
                    return;
                }

                const searchUrl = `{{ route('blog.search') }}?q=${encodeURIComponent(query)}`;
                console.log('Searching with URL:', searchUrl);

                fetch(searchUrl, {
                    method: 'GET',
                    headers: {
                        'X-Requested-With': 'XMLHttpRequest',
                        'Accept': 'application/json'
                    }
                })
                .then(response => {
                    console.log('Search response status:', response.status);
                    if (!response.ok) {
                        throw new Error(`HTTP error! status: ${response.status}`);
                    }
                    return response.json();
                })
                .then(data => {
                    console.log('Search response data:', data);
                    if (data.success && data.results && data.results.length > 0) {
                        displayResults(data.results);
                    } else {
                        displayNoResults();
                    }
                })
                .catch(error => {
                    console.error('Search error:', error);
                    displayError();
                });
            }

            function escapeHtml(text) {
                if (!text) return '';
                const div = document.createElement('div');
                div.textContent = text;
                return div.innerHTML;
            }

            function displayResults(results) {
                let html = '';
                results.forEach(result => {
                    const title = escapeHtml(result.title);
                    const excerpt = result.excerpt ? escapeHtml(result.excerpt) : '';
                    const publishedAt = result.published_at ? escapeHtml(result.published_at) : '';
                    const image = result.image ? `<img src="${escapeHtml(result.image)}" alt="${title}" class="w-16 h-16 object-cover rounded" onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">` : '';
                    const placeholderImage = '<div class="w-16 h-16 bg-gray-200 rounded flex items-center justify-center" style="display: ' + (result.image ? 'none' : 'flex') + ';"><i class="fas fa-file-alt text-gray-400"></i></div>';
                    html += `
                        <a href="${escapeHtml(result.url)}" class="block p-3 hover:bg-gray-50 rounded transition-colors border-b border-gray-100 last:border-b-0">
                            <div class="flex space-x-3">
                                ${image}${placeholderImage}
                                <div class="flex-1 min-w-0">
                                    <h4 class="text-sm font-semibold text-gray-900 truncate">${title}</h4>
                                    ${excerpt ? `<p class="text-xs text-gray-600 mt-1 line-clamp-2">${excerpt}</p>` : ''}
                                    ${publishedAt ? `<p class="text-xs text-gray-400 mt-1">${publishedAt}</p>` : ''}
                                </div>
                            </div>
                        </a>
                    `;
                });
                searchResultsContent.innerHTML = html;
                searchResults.classList.remove('hidden');
            }

            function displayNoResults() {
                searchResultsContent.innerHTML = `
                    <div class="p-4 text-center text-gray-500">
                        <i class="fas fa-search text-2xl mb-2"></i>
                        <p class="text-sm">No articles found</p>
                    </div>
                `;
                searchResults.classList.remove('hidden');
            }

            function displayError() {
                searchResultsContent.innerHTML = `
                    <div class="p-4 text-center text-red-500">
                        <i class="fas fa-exclamation-circle text-2xl mb-2"></i>
                        <p class="text-sm">Error searching articles</p>
                    </div>
                `;
                searchResults.classList.remove('hidden');
            }

            // Input event listener with debouncing
            searchInput.addEventListener('input', function(e) {
                const query = e.target.value.trim();

                clearTimeout(searchTimeout);

                if (query.length < 2) {
                    searchResults.classList.add('hidden');
                    searchResultsContent.innerHTML = '';
                    return;
                }

                // Show loading state
                searchResultsContent.innerHTML = `
                    <div class="p-4 text-center text-gray-500">
                        <i class="fas fa-spinner fa-spin text-2xl mb-2"></i>
                        <p class="text-sm">Searching...</p>
                    </div>
                `;
                searchResults.classList.remove('hidden');

                searchTimeout = setTimeout(() => {
                    performSearch(query);
                }, 300);
            });

            // Handle Enter key to navigate to search results page
            searchInput.addEventListener('keydown', function(e) {
                if (e.key === 'Enter') {
                    e.preventDefault();
                    const query = e.target.value.trim();
                    if (query.length >= 2) {
                        window.location.href = `{{ route('blog.index') }}?search=${encodeURIComponent(query)}`;
                    }
                }
            });

            // Close search results when clicking outside
            document.addEventListener('click', function(e) {
                if (!searchInput.contains(e.target) && !searchResults.contains(e.target)) {
                    searchResults.classList.add('hidden');
                }
            });

            // Close search results on escape key
            searchInput.addEventListener('keydown', function(e) {
                if (e.key === 'Escape') {
                    searchResults.classList.add('hidden');
                }
            });
        })();
    </script>
</header>
