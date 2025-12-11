@extends('frontend.layouts.master')
@section('title', 'Home')
@section('content')
    <section class="bg-gradient-to-br from-[#20417e] via-[#2f4c8a] to-[#778aaf] text-white overflow-hidden py-12">
        <div class="container mx-auto px-6 lg:px-20 text-center">
            <h1 class="text-4xl md:text-5xl font-extrabold leading-tight mb-6">Fertility Tests &amp; Assessments</h1>
            <p class="text-lg max-w-3xl mx-auto mb-8">Discover the root cause of conception challenges through advanced
                tests for both men and women. Our expert clinicians analyze every factor impacting fertility for
                accurate treatment planning.</p><a href="#book"
                class="bg-brand-pink text-white font-semibold py-3 px-10 rounded-full hover:shadow-lg">Book Your
                Assessment</a>
        </div>
    </section>
    <section class="py-12 bg-white">
        <div class="container mx-auto px-6 lg:px-20 grid grid-cols-1 lg:grid-cols-2 gap-14 items-center">
            <div><img src="https://images.pexels.com/photos/6129231/pexels-photo-6129231.jpeg" alt="Fertility Tests"
                    class="rounded-3xl shadow-2xl w-full h-96 object-cover"></div>
            <div>
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 leading-tight mb-6">Why Fertility Tests Matter
                </h2>
                <p class="text-lg text-gray-700 leading-relaxed mb-10">Fertility isn’t guesswork. The right tests reveal
                    what the body doesn’t say out loud — and that information becomes the key to a faster, healthier,
                    and more successful conception journey.</p>
                <ul class="space-y-6 text-gray-800 text-lg">
                    <li class="flex gap-3"><span class="text-pink-600 font-bold text-xl">•</span> <span>Identifies
                            challenges early — before time is lost.</span></li>
                    <li class="flex gap-3"><span class="text-pink-600 font-bold text-xl">•</span> <span>Removes guessing
                            and emotional uncertainty.</span></li>
                    <li class="flex gap-3"><span class="text-pink-600 font-bold text-xl">•</span> <span>Matches you with
                            the right treatment faster.</span></li>
                    <li class="flex gap-3"><span class="text-pink-600 font-bold text-xl">•</span> <span>Improves
                            conception chances from the very beginning.</span></li>
                </ul>
            </div>
        </div>
    </section>
    <section x-data="{ category: 'all' }" class="py-12 bg-gradient-to-r from-pink-50 via-white to-blue-50">
        <div class="container mx-auto px-6 lg:px-20">
            <h2 class="text-3xl font-bold text-gray-800 text-center mb-10">Types of Fertility Tests We Offer</h2>
            <div class="flex flex-wrap justify-center gap-3 mb-10"><template
                    x-for="(name, value) in { all:'All', female:'Female Tests', male:'Male Tests', advanced:'Advanced' }"><button
                        @click="category = value"
                        :class="category === value ? 'bg-pink-600 text-white' : 'bg-white text-gray-700'"
                        class="px-5 py-2 rounded-full font-medium shadow hover:shadow-md transition border"><span
                            x-text="name"></span></button></template></div>
            <div class="flex md:grid gap-6 md:gap-8 overflow-x-auto md:overflow-visible pb-4 scroll-smooth md:grid-cols-2 lg:grid-cols-3"
                style="scroll-snap-type:x mandatory">
                <div x-show="category === 'all' || category === 'female'"
                    class="min-w-[250px] bg-white p-7 rounded-3xl shadow-md hover:shadow-xl transition scroll-snap-start">
                    <h3 class="text-lg font-semibold text-gray-800 mb-2">Ovarian Reserve Tests</h3>
                    <p class="text-gray-600 text-sm">AMH, FSH, and AFC scan to assess egg count &amp; quality.</p>
                </div>
                <div x-show="category === 'all' || category === 'female'"
                    class="min-w-[250px] bg-white p-7 rounded-3xl shadow-md hover:shadow-xl transition scroll-snap-start">
                    <h3 class="text-lg font-semibold text-gray-800 mb-2">Ovulation &amp; Hormonal Panel</h3>
                    <p class="text-gray-600 text-sm">Progesterone, LH, TSH &amp; prolactin to track ovulatory health.
                    </p>
                </div>
                <div x-show="category === 'all' || category === 'female'"
                    class="min-w-[250px] bg-white p-7 rounded-3xl shadow-md hover:shadow-xl transition scroll-snap-start">
                    <h3 class="text-lg font-semibold text-gray-800 mb-2">Ultrasound Scan</h3>
                    <p class="text-gray-600 text-sm">Follicle tracking &amp; uterine lining evaluation.</p>
                </div>
                <div x-show="category === 'all' || category === 'male'"
                    class="min-w-[250px] bg-white p-7 rounded-3xl shadow-md hover:shadow-xl transition scroll-snap-start">
                    <h3 class="text-lg font-semibold text-gray-800 mb-2">Semen Analysis</h3>
                    <p class="text-gray-600 text-sm">Sperm count, motility, morphology &amp; DNA fragmentation.</p>
                </div>
                <div x-show="category === 'all' || category === 'advanced'"
                    class="min-w-[250px] bg-white p-7 rounded-3xl shadow-md hover:shadow-xl transition scroll-snap-start">
                    <h3 class="text-lg font-semibold text-gray-800 mb-2">Genetic / Immunological Tests</h3>
                    <p class="text-gray-600 text-sm">Detect gene &amp; immune conditions affecting fertility.</p>
                </div>
                <div x-show="category === 'all' || category === 'advanced'"
                    class="min-w-[250px] bg-white p-7 rounded-3xl shadow-md hover:shadow-xl transition scroll-snap-start">
                    <h3 class="text-lg font-semibold text-gray-800 mb-2">Advanced Diagnostic Assessment</h3>
                    <p class="text-gray-600 text-sm">Endometrial receptivity, hysteroscopy &amp; metabolic analysis.</p>
                </div>
            </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer=""></script>
    <section class="py-12 bg-white">
        <div class="container mx-auto px-6 lg:px-20">
            <h2 class="text-3xl font-bold text-gray-800 text-center mb-10">How the Assessment Works</h2>
            <div class="flex md:grid gap-6 md:gap-8 overflow-x-auto md:overflow-visible pb-4 scroll-smooth md:grid-cols-4"
                style="scroll-snap-type:x mandatory">
                <div
                    class="min-w-[260px] bg-white rounded-3xl shadow-lg overflow-hidden transition hover:-translate-y-2 hover:shadow-2xl scroll-snap-start">
                    <img src="https://images.pexels.com/photos/5972007/pexels-photo-5972007.jpeg"
                        class="w-full h-40 object-cover">
                    <div class="p-6 text-center">
                        <h3 class="font-semibold text-gray-900 mb-2">01 — Consultation</h3>
                        <p class="text-sm text-gray-600">Meet your fertility specialist.</p>
                    </div>
                </div>
                <div
                    class="min-w-[260px] bg-white rounded-3xl shadow-lg overflow-hidden transition hover:-translate-y-2 hover:shadow-2xl scroll-snap-start">
                    <img src="https://images.pexels.com/photos/6539795/pexels-photo-6539795.jpeg"
                        class="w-full h-40 object-cover">
                    <div class="p-6 text-center">
                        <h3 class="font-semibold text-gray-900 mb-2">02 — Testing</h3>
                        <p class="text-sm text-gray-600">Bloodwork, scans &amp; semen analysis.</p>
                    </div>
                </div>
                <div
                    class="min-w-[260px] bg-white rounded-3xl shadow-lg overflow-hidden transition hover:-translate-y-2 hover:shadow-2xl scroll-snap-start">
                    <img src="https://images.pexels.com/photos/3850809/pexels-photo-3850809.jpeg"
                        class="w-full h-40 object-cover">
                    <div class="p-6 text-center">
                        <h3 class="font-semibold text-gray-900 mb-2">03 — Diagnosis</h3>
                        <p class="text-sm text-gray-600">Detailed review of results.</p>
                    </div>
                </div>
                <div
                    class="min-w-[260px] bg-white rounded-3xl shadow-lg overflow-hidden transition hover:-translate-y-2 hover:shadow-2xl scroll-snap-start">
                    <img src="https://images.pexels.com/photos/3993214/pexels-photo-3993214.jpeg"
                        class="w-full h-40 object-cover">
                    <div class="p-6 text-center">
                        <h3 class="font-semibold text-gray-900 mb-2">04 — Treatment Plan</h3>
                        <p class="text-sm text-gray-600">Personalized roadmap for conception success.</p>
                    </div>
                </div>
            </div>
        </div>
        <div id="book" class="text-center mt-6 md:mt-12"><a href="#"
                class="px-6 md:px-12 py-4 bg-brand-pink hover:bg-brand-blue text-white rounded-full font-semibold shadow-xl text-lg transition">Schedule
                Your Fertility Assessment</a></div>
    </section>
    <section class="py-12 bg-gradient-to-b from-pink-50 via-white to-blue-50 text-center relative pl-6">
        <h2 class="text-3xl font-bold text-gray-800 mb-6 md:mb-10">Meet Our Fertility Experts</h2>
        <div class="flex gap-6 overflow-x-auto px-6 pb-4 snap-x snap-mandatory justify-start md:justify-center flex-nowrap md:flex-wrap"
            role="region" aria-label="Fertility experts — swipe horizontally on mobile">
            <div class="snap-start w-56 h-72 flex-shrink-0 [perspective:1000px]">
                <div
                    class="relative w-full h-full transition-transform duration-700 [transform-style:preserve-3d] hover:[transform:rotateY(180deg)]">
                    <div class="absolute inset-0 [backface-visibility:hidden]"><img
                            src="https://images.pexels.com/photos/5215024/pexels-photo-5215024.jpeg"
                            class="rounded-2xl w-full h-full object-cover shadow-xl" alt="Dr. Meera Sharma"></div>
                    <div
                        class="absolute inset-0 bg-brand-blue text-white rounded-2xl flex flex-col justify-center items-center px-4 [transform:rotateY(180deg)] [backface-visibility:hidden]">
                        <h3 class="text-lg font-semibold mb-1">Dr. Meera Sharma</h3>
                        <p class="text-sm font-light mb-2">IVF Specialist</p>
                        <p class="text-xs leading-relaxed opacity-90">With 15+ years of experience, Dr. Meera
                            specializes in complex IVF cases, high-risk fertility treatments, and advanced reproductive
                            technologies.</p>
                    </div>
                </div>
            </div>
            <div class="snap-start w-56 h-72 flex-shrink-0 [perspective:1000px]">
                <div
                    class="relative w-full h-full transition-transform duration-700 [transform-style:preserve-3d] hover:[transform:rotateY(180deg)]">
                    <div class="absolute inset-0 [backface-visibility:hidden]"><img
                            src="https://images.unsplash.com/photo-1537368910025-700350fe46c7"
                            class="rounded-2xl w-full h-full object-cover shadow-xl" alt="Dr. Arjun Malhotra"></div>
                    <div
                        class="absolute inset-0 bg-brand-blue text-white rounded-2xl flex flex-col justify-center items-center px-4 [transform:rotateY(180deg)] [backface-visibility:hidden]">
                        <h3 class="text-lg font-semibold mb-1">Dr. Arjun Malhotra</h3>
                        <p class="text-sm font-light mb-2">Chief Embryologist</p>
                        <p class="text-xs leading-relaxed opacity-90">Expert in advanced embryo culture and
                            cryopreservation, Dr. Arjun ensures the highest standards of lab precision for each IVF
                            cycle.</p>
                    </div>
                </div>
            </div>
            <div class="snap-start w-56 h-72 flex-shrink-0 [perspective:1000px]">
                <div
                    class="relative w-full h-full transition-transform duration-700 [transform-style:preserve-3d] hover:[transform:rotateY(180deg)]">
                    <div class="absolute inset-0 [backface-visibility:hidden]"><img
                            src="https://images.pexels.com/photos/5215024/pexels-photo-5215024.jpeg"
                            class="rounded-2xl w-full h-full object-cover shadow-xl" alt="Dr. Meera Sharma"></div>
                    <div
                        class="absolute inset-0 bg-brand-blue text-white rounded-2xl flex flex-col justify-center items-center px-4 [transform:rotateY(180deg)] [backface-visibility:hidden]">
                        <h3 class="text-lg font-semibold mb-1">Dr. Meera Sharma</h3>
                        <p class="text-sm font-light mb-2">IVF Specialist</p>
                        <p class="text-xs leading-relaxed opacity-90">With 15+ years of experience, Dr. Meera
                            specializes in complex IVF cases, high-risk fertility treatments, and advanced reproductive
                            technologies.</p>
                    </div>
                </div>
            </div>
            <div class="snap-start w-56 h-72 flex-shrink-0 [perspective:1000px]">
                <div
                    class="relative w-full h-full transition-transform duration-700 [transform-style:preserve-3d] hover:[transform:rotateY(180deg)]">
                    <div class="absolute inset-0 [backface-visibility:hidden]"><img
                            src="https://images.unsplash.com/photo-1537368910025-700350fe46c7"
                            class="rounded-2xl w-full h-full object-cover shadow-xl" alt="Dr. Arjun Malhotra"></div>
                    <div
                        class="absolute inset-0 bg-brand-blue text-white rounded-2xl flex flex-col justify-center items-center px-4 [transform:rotateY(180deg)] [backface-visibility:hidden]">
                        <h3 class="text-lg font-semibold mb-1">Dr. Arjun Malhotra</h3>
                        <p class="text-sm font-light mb-2">Chief Embryologist</p>
                        <p class="text-xs leading-relaxed opacity-90">Expert in advanced embryo culture and
                            cryopreservation, Dr. Arjun ensures the highest standards of lab precision for each IVF
                            cycle.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <style>
        .overflow-x-auto::-webkit-scrollbar {
            height: 6px
        }

        .overflow-x-auto::-webkit-scrollbar-thumb {
            background: rgba(0, 0, 0, .15);
            border-radius: 9999px
        }

        @media (max-width:768px) {
            .overflow-x-auto {
                scrollbar-width: none;
                -ms-overflow-style: none
            }

            .overflow-x-auto::-webkit-scrollbar {
                display: none
            }
        }
    </style>
    <section class="py-12 bg-white">
        <div class="container mx-auto px-6 lg:px-12">
            <div class="text-center mb-6 md:mb-10">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-800">Calculate Your <span
                        class="text-brand-pink">Ovulation Window</span></h2>
                <p class="text-gray-600 mt-3 max-w-2xl mx-auto">Track your most fertile days to plan or prepare for
                    pregnancy with confidence.</p>
            </div>
            <div class="max-w-3xl mx-auto bg-white rounded-3xl p-8 md:p-12 shadow-lg border border-pink-100">
                <form id="ovulationForm" class="space-y-8">
                    <div><label class="block text-gray-700 font-semibold mb-2">📅 First day of your last period:</label>
                        <input type="date" id="lastPeriod"
                            class="w-full border border-gray-300 rounded-lg px-4 py-3 focus:outline-none focus:ring-2 focus:ring-pink-400">
                    </div>
                    <div><label class="block text-gray-700 font-semibold mb-2">🔄 Average cycle length (in
                            days):</label> <input type="number" id="cycleLength" value="28" min="21"
                            max="40"
                            class="w-full border border-gray-300 rounded-lg px-4 py-3 focus:outline-none focus:ring-2 focus:ring-pink-400">
                    </div>
                    <div class="text-center"><button type="button" onclick="calculateOvulation()"
                            class="bg-brand-pink hover:bg-pink-700 text-white font-semibold px-8 py-3 rounded-full transition-all duration-300">Calculate</button>
                    </div>
                </form>
                <div id="result" class="mt-10 hidden text-center">
                    <h3 class="text-2xl font-bold text-gray-800 mb-2">🌼 Your Estimated Ovulation Day:</h3>
                    <p id="ovulationDate" class="text-pink-600 text-xl font-semibold"></p>
                    <h4 class="text-lg text-gray-700 mt-4 font-semibold">Fertile Window:</h4>
                    <p id="fertileWindow" class="text-gray-600"></p>
                    <div class="flex justify-center mt-6 space-x-2">
                        <div class="w-3 h-3 bg-pink-200 rounded-full"></div>
                        <div class="w-3 h-3 bg-pink-300 rounded-full"></div>
                        <div class="w-3 h-3 bg-pink-400 rounded-full"></div>
                        <div class="w-3 h-3 bg-pink-600 rounded-full"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="relative bg-brand-blue text-white py-6 text-center">
        <div class="container mx-auto px-6">
            <h2 class="text-3xl md:text-4xl font-bold mb-3">Ready to Begin Your Fertility Journey?</h2>
            <p class="text-lg mb-4 max-w-2xl mx-auto">Our fertility specialists are here to listen, guide, and support
                you — with care that’s both expert and empathetic.</p>
            <div class="flex flex-col sm:flex-row justify-center items-center gap-4"><button
                    class="bg-brand-pink text-white px-6 py-3 rounded-full shadow-lg hover:shadow-2xl transition-all duration-500 hover:scale-105"><i
                        class="fa-solid fa-hand-holding-heart mr-2"></i> Book Your Assessment</button> <button
                    class="bg-white text-brand-blue font-semibold px-6 py-3 rounded-full shadow-lg hover:shadow-2xl transition-all duration-500 hover:scale-105"><i
                        class="fa-solid fa-calculator mr-2 text-brand-pink"></i> Talk to a Specialist</button></div>
        </div>
    </section>
    <section class="relative bg-gradient-to-r from-[#20417e] via-[#3a5594] to-[#778aaf] text-white py-12 overflow-hidden">
        <div class="absolute inset-0"><img src="https://images.pexels.com/photos/2880897/pexels-photo-2880897.jpeg"
                alt="IVF background" class="w-full h-full object-cover opacity-20"></div>
        <div class="container mx-auto relative z-10 px-6 lg:px-16">
            <div class="lg:w-2/3">
                <h2 class="text-3xl md:text-4xl font-bold mb-6 leading-tight">Questions About <span
                        class="text-pink-200">IVF and Fertility Treatments</span></h2>
                <p class="text-blue-100 mb-10">Understanding your options is the first step toward hope. Here are some
                    of the most common questions our fertility experts answer every day.</p>
                <div class="space-y-5">
                    <div x-data="{ open: false }"
                        class="bg-white/90 backdrop-blur-md text-gray-800 rounded-xl shadow-lg overflow-hidden"><button
                            @click="open = !open"
                            class="flex justify-between items-center w-full px-6 py-4 text-left font-semibold hover:bg-pink-50 transition">What
                            is IVF and how does it work? <svg xmlns="http://www.w3.org/2000/svg"
                                :class="{ 'rotate-180': open }"
                                class="h-5 w-5 text-pink-500 transform transition-transform duration-300" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7">
                                </path>
                            </svg></button>
                        <div x-show="open" x-transition="" class="px-6 pb-5 text-gray-700">IVF combines eggs and sperm
                            in a lab to create embryos, which are then transferred to the uterus.</div>
                    </div>
                    <div x-data="{ open: false }"
                        class="bg-white/90 backdrop-blur-md text-gray-800 rounded-xl shadow-lg overflow-hidden"><button
                            @click="open = !open"
                            class="flex justify-between items-center w-full px-6 py-4 text-left font-semibold hover:bg-pink-50 transition">What
                            is the success rate of IVF? <svg xmlns="http://www.w3.org/2000/svg"
                                :class="{ 'rotate-180': open }"
                                class="h-5 w-5 text-pink-500 transform transition-transform duration-300" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7">
                                </path>
                            </svg></button>
                        <div x-show="open" x-transition="" class="px-6 pb-5 text-gray-700">Success rates range between
                            40–60% depending on age, health, and medical conditions.</div>
                    </div>
                    <div x-data="{ open: false }"
                        class="bg-white/90 backdrop-blur-md text-gray-800 rounded-xl shadow-lg overflow-hidden"><button
                            @click="open = !open"
                            class="flex justify-between items-center w-full px-6 py-4 text-left font-semibold hover:bg-pink-50 transition">Is
                            IVF painful or risky? <svg xmlns="http://www.w3.org/2000/svg" :class="{ 'rotate-180': open }"
                                class="h-5 w-5 text-pink-500 transform transition-transform duration-300" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7">
                                </path>
                            </svg></button>
                        <div x-show="open" x-transition="" class="px-6 pb-5 text-gray-700">IVF is minimally invasive and
                            anesthesia ensures the process is comfortable and safe.</div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer=""></script>
@endsection
