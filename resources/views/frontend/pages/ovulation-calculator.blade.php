@extends('frontend.layouts.master')
@section('title', 'Home')
@section('content')
<section id="hero-section"
    class="relative bg-gradient-to-br from-[#20417e] via-[#2f4c8a] to-[#778aaf] text-white overflow-hidden py-12">
    <div class="absolute top-0 left-0 w-72 h-72 bg-pink-300/30 rounded-full blur-3xl opacity-30 animate-pulse">
    </div>
    <div class="absolute bottom-0 right-0 w-96 h-96 bg-blue-200/30 rounded-full blur-3xl opacity-30 animate-pulse">
    </div>
    <div class="container mx-auto px-6 lg:px-20 grid grid-cols-1 lg:grid-cols-2 gap-12 items-center relative z-10">
        <div class="space-y-6 animate-fadeInUp text-center lg:text-left">
            <h1 class="text-4xl md:text-5xl font-extrabold leading-tight"><span class="text-pink-200">Ovulation
                    Calculator</span>: Find Your Most Fertile Days<br class="hidden md:block"></h1>
            <p class="text-lg md:text-xl text-blue-100 leading-relaxed">Briefly explain what the tool does — e.g.,
                “Track your cycle, predict ovulation, and increase your chances of conception with our easy-to-use
                ovulation calculator.</p>
        </div>
        <div class="relative group animate-fadeInLeft">
            <div
                class="absolute -inset-4 bg-pink-200/20 rounded-3xl blur-xl opacity-60 group-hover:opacity-90 transition">
            </div><video autoplay="" muted="" loop="" playsinline=""
                class="relative rounded-3xl shadow-2xl border-4 border-white/30 group-hover:scale-105 transition duration-700 ease-out">
                <source src="videos/hero.mp4" type="video/mp4">Your browser does not support the video tag.
            </video>
            <div
                class="absolute inset-0 bg-black/20 rounded-3xl group-hover:bg-black/10 transition duration-300 ease-in-out">
            </div>
        </div>
    </div>
</section>
<section class="py-12 bg-gradient-to-b from-pink-50 via-white to-blue-50">
    <div class="container mx-auto px-6 lg:px-12">
        <div class="text-center mb-14">
            <h2 class="text-4xl font-bold text-gray-800">Calculate Your <span class="text-brand-pink">Ovulation
                    Window</span></h2>
            <p class="text-gray-600 mt-3 max-w-2xl mx-auto">Track your most fertile days to plan or prepare for
                pregnancy with confidence.</p>
        </div>
        <div class="max-w-3xl mx-auto bg-white rounded-3xl p-8 md:p-12 shadow-lg border border-pink-100">
            <form id="ovulationForm" class="space-y-8" onsubmit="event.preventDefault(); calculateOvulation();">
                <div><label class="block text-gray-700 font-semibold mb-2">📅 First day of your last period:</label>
                    <input type="date" id="lastPeriod"
                        class="w-full border border-gray-300 rounded-lg px-4 py-3 focus:outline-none focus:ring-2 focus:ring-pink-400">
                </div>
                <div><label class="block text-gray-700 font-semibold mb-2">🔄 Average cycle length (in
                        days):</label> <input type="number" id="cycleLength" value="28" min="21" max="40"
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
</section>, 
<section class="py-12 bg-white">
    <div class="container mx-auto px-6 lg:px-12">
        <div class="text-center mb-14">
            <h2 class="text-4xl font-bold text-gray-800">What Your <span class="text-brand-pink">Ovulation
                    Results</span> Mean</h2>
            <p class="text-gray-600 mt-3 max-w-2xl mx-auto">Understanding your ovulation results can help you plan
                conception, track your cycle, or identify hormonal balance. Here's what your results tell you:</p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-10 text-center">
            <div class="flex flex-col items-center space-y-4">
                <div class="bg-pink-100 p-4 rounded-full"><svg xmlns="http://www.w3.org/2000/svg"
                        class="h-10 w-10 text-pink-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8"
                            d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg></div>
                <h3 class="text-lg font-semibold text-gray-800">Fertile Window</h3>
                <p class="text-gray-600 text-sm">This is your most fertile phase — having intercourse during these
                    days increases your chance of conception.</p>
            </div>
            <div class="flex flex-col items-center space-y-4">
                <div class="bg-pink-100 p-4 rounded-full"><svg xmlns="http://www.w3.org/2000/svg"
                        class="h-10 w-10 text-pink-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8"
                            d="M9.75 17L15 12l-5.25-5"></path>
                    </svg></div>
                <h3 class="text-lg font-semibold text-gray-800">Ovulation Day</h3>
                <p class="text-gray-600 text-sm">The day your ovary releases an egg — it’s the most likely day for
                    fertilization to occur.</p>
            </div>
            <div class="flex flex-col items-center space-y-4">
                <div class="bg-pink-100 p-4 rounded-full"><svg xmlns="http://www.w3.org/2000/svg"
                        class="h-10 w-10 text-pink-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8"
                            d="M13 16h-1v-4H8l4-8v4h1a4 4 0 010 8z"></path>
                    </svg></div>
                <h3 class="text-lg font-semibold text-gray-800">Hormonal Shift</h3>
                <p class="text-gray-600 text-sm">A surge in luteinizing hormone (LH) triggers ovulation — tracking
                    it confirms your cycle health.</p>
            </div>
            <div class="flex flex-col items-center space-y-4">
                <div class="bg-pink-100 p-4 rounded-full"><svg xmlns="http://www.w3.org/2000/svg"
                        class="h-10 w-10 text-pink-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8"
                            d="M12 11c0 1.657-1.343 3-3 3S6 12.657 6 11s1.343-3 3-3 3 1.343 3 3zM12 11c0 1.657 1.343 3 3 3s3-1.343 3-3-1.343-3-3-3-3 1.343-3 3z">
                        </path>
                    </svg></div>
                <h3 class="text-lg font-semibold text-gray-800">Cycle Awareness</h3>
                <p class="text-gray-600 text-sm">Regular ovulation suggests a healthy menstrual cycle — irregularity
                    may indicate hormonal imbalance.</p>
            </div>
        </div>
    </div>
</section>
<section class="py-12 bg-gradient-to-b from-pink-50 via-white to-blue-50">
    <div class="container mx-auto px-6 lg:px-12">
        <div class="text-center mb-16">
            <h2 class="text-4xl font-bold text-gray-800">Understanding <span class="text-brand-pink">Ovulation &amp;
                    Fertility</span></h2>
            <p class="text-gray-600 mt-3 max-w-2xl mx-auto">Key signs that your body is preparing for ovulation —
                helping you recognize your most fertile window.</p>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-10">
            <div class="flex items-start space-x-4">
                <div class="p-3 bg-pink-100 rounded-full"><i
                        class="fa-solid fa-temperature-high text-pink-600 text-2xl"></i></div>
                <div>
                    <h3 class="font-semibold text-gray-800">Rising Body Temperature</h3>
                    <p class="text-gray-600 text-sm">A slight rise in basal body temperature after ovulation.</p>
                </div>
            </div>
            <div class="flex items-start space-x-4">
                <div class="p-3 bg-pink-100 rounded-full"><i class="fa-solid fa-droplet text-pink-600 text-2xl"></i>
                </div>
                <div>
                    <h3 class="font-semibold text-gray-800">Mild Spotting</h3>
                    <p class="text-gray-600 text-sm">Light bleeding may occur when the egg is released.</p>
                </div>
            </div>
            <div class="flex items-start space-x-4">
                <div class="p-3 bg-pink-100 rounded-full"><i
                        class="fa-solid fa-hand-holding-heart text-pink-600 text-2xl"></i></div>
                <div>
                    <h3 class="font-semibold text-gray-800">Tenderness of Breasts</h3>
                    <p class="text-gray-600 text-sm">Hormonal changes may cause slight breast soreness.</p>
                </div>
            </div>
            <div class="flex items-start space-x-4">
                <div class="p-3 bg-pink-100 rounded-full"><i
                        class="fa-solid fa-heart-pulse text-pink-600 text-2xl"></i></div>
                <div>
                    <h3 class="font-semibold text-gray-800">Mild Cramps in Abdomen</h3>
                    <p class="text-gray-600 text-sm">Some women experience brief, one-sided cramps.</p>
                </div>
            </div>
            <div class="flex items-start space-x-4">
                <div class="p-3 bg-pink-100 rounded-full"><i class="fa-solid fa-nose text-pink-600 text-2xl"></i>
                </div>
                <div>
                    <h3 class="font-semibold text-gray-800">Elevated Sense of Smell</h3>
                    <p class="text-gray-600 text-sm">Heightened senses often accompany ovulation.</p>
                </div>
            </div>
            <div class="flex items-start space-x-4">
                <div class="p-3 bg-pink-100 rounded-full"><i class="fa-solid fa-vial text-pink-600 text-2xl"></i>
                </div>
                <div>
                    <h3 class="font-semibold text-gray-800">High LH Levels</h3>
                    <p class="text-gray-600 text-sm">Detected through ovulation kits indicating peak fertility.</p>
                </div>
            </div>
            <div class="flex items-start space-x-4">
                <div class="p-3 bg-pink-100 rounded-full"><i class="fa-solid fa-heart text-pink-600 text-2xl"></i>
                </div>
                <div>
                    <h3 class="font-semibold text-gray-800">Increased Sex Drive</h3>
                    <p class="text-gray-600 text-sm">A natural rise in libido during the fertile phase.</p>
                </div>
            </div>
            <div class="flex items-start space-x-4">
                <div class="p-3 bg-pink-100 rounded-full"><i class="fa-solid fa-droplet text-pink-600 text-2xl"></i>
                </div>
                <div>
                    <h3 class="font-semibold text-gray-800">Cervical Mucus Change</h3>
                    <p class="text-gray-600 text-sm">Becomes clear, stretchy, and egg-white-like.</p>
                </div>
            </div>
            <div class="flex items-start space-x-4">
                <div class="p-3 bg-pink-100 rounded-full"><i class="fa-solid fa-wind text-pink-600 text-2xl"></i>
                </div>
                <div>
                    <h3 class="font-semibold text-gray-800">Bloating</h3>
                    <p class="text-gray-600 text-sm">Hormonal changes may cause mild abdominal bloating.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
<section class="relative bg-brand-blue text-white py-6 text-center">
    <div class="container mx-auto px-6">
        <h2 class="text-4xl font-bold mb-3">Ready to Take the Next Step?</h2>
        <p class="text-lg mb-4 max-w-2xl mx-auto">Our fertility specialists are here to listen, guide, and support
            you — with care that’s both expert and empathetic.</p><button
            class="bg-brand-pink text-white px-6 py-3 rounded-full shadow-lg hover:shadow-2xl transition-all duration-500 hover:scale-105 mb-2"><i
                class="fa-solid fa-hand-holding-heart mr-2"></i> Book Your Consultation</button>
    </div>
</section>
<section id="treatments-expertise" class="relative py-12 bg-white">
    <div class="relative container mx-auto px-6">
        <div class="text-center mb-8">
            <h2 class="text-4xl font-bold text-gray-800 mb-4 leading-tight"><span class="text-brand-pink">Treatments
                    &amp; Expertise </span>- Science That Brings Life</h2>
            <p class="text-gray-600 text-lg max-w-2xl mx-auto">Science that brings life closer — compassionate care,
                advanced methods, and proven results.</p>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-10">
            <div
                class="group relative p-8 rounded-3xl bg-white/70 backdrop-blur-lg shadow-xl transition-all duration-500 border border-white/30 hover:border-brand-pink/40 hover:bg-white/90">
                <div
                    class="w-20 h-20 mx-auto mb-5 flex items-center justify-center rounded-2xl bg-gradient-to-r from-brand-pink to-brand-blue text-white text-3xl shadow-lg animate-pulse group-hover:scale-110 transition-transform duration-300">
                    💫</div>
                <h3 class="text-xl font-semibold text-gray-800 mb-2 group-hover:text-brand-pink transition-colors">
                    IVF Treatment</h3>
                <p class="text-gray-600 text-sm leading-relaxed">Cutting-edge IVF procedures guided by precision and
                    empathy.</p><button
                    class="mt-10 sm: mt-4 w-full bg-brand-pink hover:bg-brand-blue text-white px-4 py-2 font-semibold text-lg shadow-lg hover:shadow-2xl transition-all duration-500">Know
                    more</button>
            </div>
            <div
                class="group relative p-8 rounded-3xl bg-white/70 backdrop-blur-lg shadow-xl transition-all duration-500 border border-white/30 hover:border-brand-pink/40 hover:bg-white/90">
                <div
                    class="w-20 h-20 mx-auto mb-5 flex items-center justify-center rounded-2xl bg-gradient-to-r from-indigo-400 to-purple-500 text-white text-3xl shadow-lg animate-bounce group-hover:scale-110 transition-transform duration-300">
                    🌸</div>
                <h3 class="text-xl font-semibold text-gray-800 mb-2 group-hover:text-brand-pink transition-colors">
                    Intrauterine Insemination (IUI)</h3>
                <p class="text-gray-600 text-sm leading-relaxed">Gentle and effective fertility assistance for
                    hopeful parents.</p><button
                    class="mt-10 sm: mt-4 w-full bg-brand-pink hover:bg-brand-blue text-white px-4 py-2 font-semibold text-lg shadow-lg hover:shadow-2xl transition-all duration-500">Know
                    more</button>
            </div>
            <div
                class="group relative p-8 rounded-3xl bg-white/70 backdrop-blur-lg shadow-xl transition-all duration-500 border border-white/30 hover:border-brand-pink/40 hover:bg-white/90">
                <div
                    class="w-20 h-20 mx-auto mb-5 flex items-center justify-center rounded-2xl bg-gradient-to-r from-green-400 to-brand-pink text-white text-3xl shadow-lg animate-pulse group-hover:scale-110 transition-transform duration-300">
                    ❄️</div>
                <h3 class="text-xl font-semibold text-gray-800 mb-2 group-hover:text-brand-pink transition-colors">
                    Fertility Preservation</h3>
                <p class="text-gray-600 text-sm leading-relaxed">Advanced freezing options to protect your fertility
                    future.</p><button
                    class="mt-10 sm: mt-4 w-full bg-brand-pink hover:bg-brand-blue text-white px-4 py-2 font-semibold text-lg shadow-lg hover:shadow-2xl transition-all duration-500">Know
                    more</button>
            </div>
            <div
                class="group relative p-8 rounded-3xl bg-white/70 backdrop-blur-lg shadow-xl transition-all duration-500 border border-white/30 hover:border-brand-pink/40 hover:bg-white/90">
                <div
                    class="w-20 h-20 mx-auto mb-5 flex items-center justify-center rounded-2xl bg-gradient-to-r from-yellow-400 to-brand-blue text-white text-3xl shadow-lg group-hover:scale-110 transition-transform duration-300">
                    🌼</div>
                <h3 class="text-xl font-semibold text-gray-800 mb-2 group-hover:text-brand-pink transition-colors">
                    Female Infertility Solutions</h3>
                <p class="text-gray-600 text-sm leading-relaxed">Holistic and science-backed treatments for female
                    wellness.</p><button
                    class="mt-10 sm: mt-4 w-full bg-brand-pink hover:bg-brand-blue text-white px-4 py-2 font-semibold text-lg shadow-lg hover:shadow-2xl transition-all duration-500">Know
                    more</button>
            </div>
            <div
                class="group relative p-8 rounded-3xl bg-white/70 backdrop-blur-lg shadow-xl transition-all duration-500 border border-white/30 hover:border-brand-pink/40 hover:bg-white/90">
                <div
                    class="w-20 h-20 mx-auto mb-5 flex items-center justify-center rounded-2xl bg-gradient-to-r from-brand-blue to-brand-pink text-white text-3xl shadow-lg group-hover:scale-110 transition-transform duration-300">
                    ❤️</div>
                <h3 class="text-xl font-semibold text-gray-800 mb-2 group-hover:text-brand-pink transition-colors">
                    Pregnancy Loss Care</h3>
                <p class="text-gray-600 text-sm leading-relaxed">Compassionate medical and emotional recovery
                    support.</p><button
                    class="mt-10 sm: mt-4 w-full bg-brand-pink hover:bg-brand-blue text-white px-4 py-2 font-semibold text-lg shadow-lg hover:shadow-2xl transition-all duration-500">Know
                    more</button>
            </div>
            <div
                class="group relative p-8 rounded-3xl bg-white/70 backdrop-blur-lg shadow-xl transition-all duration-500 border border-white/30 hover:border-brand-pink/40 hover:bg-white/90">
                <div
                    class="w-20 h-20 mx-auto mb-5 flex items-center justify-center rounded-2xl bg-gradient-to-r from-indigo-400 to-brand-blue text-white text-3xl shadow-lg group-hover:scale-110 transition-transform duration-300">
                    ⚡</div>
                <h3 class="text-xl font-semibold text-gray-800 mb-2 group-hover:text-brand-pink transition-colors">
                    Male Infertility Solutions</h3>
                <p class="text-gray-600 text-sm leading-relaxed">Advanced diagnostics and effective treatments for
                    men.</p><button
                    class="mt-10 sm: mt-4 w-full bg-brand-pink hover:bg-brand-blue text-white px-4 py-2 font-semibold text-lg shadow-lg hover:shadow-2xl transition-all duration-500">Know
                    more</button>
            </div>
        </div>
    </div>
</section>
<section
    class="relative bg-gradient-to-r from-[#20417e] via-[#3a5594] to-[#778aaf] text-white py-12 overflow-hidden">
    <div class="absolute inset-0"><img src="https://images.pexels.com/photos/2880897/pexels-photo-2880897.jpeg"
            alt="IVF background" class="w-full h-full object-cover opacity-20"></div>
    <div class="container mx-auto relative z-10 px-6 lg:px-16">
        <div class="lg:w-2/3">
            <h2 class="text-4xl font-bold mb-6 leading-tight">Questions About <span class="text-pink-200">IVF and
                    Fertility Treatments</span></h2>
            <p class="text-blue-100 mb-10">Understanding your options is the first step toward hope. Here are some
                of the most common questions our fertility experts answer every day.</p>
            <div class="space-y-5">
                <div x-data="{ open: false }"
                    class="bg-white/90 backdrop-blur-md text-gray-800 rounded-xl shadow-lg overflow-hidden"><button
                        @click="open = !open"
                        class="flex justify-between items-center w-full px-6 py-4 text-left font-semibold hover:bg-pink-50 transition">What
                        is IVF and how does it work? <svg xmlns="http://www.w3.org/2000/svg"
                            :class="{'rotate-180': open}"
                            class="h-5 w-5 text-pink-500 transform transition-transform duration-300" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M19 9l-7 7-7-7"></path>
                        </svg></button>
                    <div x-show="open" x-transition="" class="px-6 pb-5 text-gray-700">IVF combines eggs and sperm
                        in a lab to create embryos, which are then transferred to the uterus.</div>
                </div>
                <div x-data="{ open: false }"
                    class="bg-white/90 backdrop-blur-md text-gray-800 rounded-xl shadow-lg overflow-hidden"><button
                        @click="open = !open"
                        class="flex justify-between items-center w-full px-6 py-4 text-left font-semibold hover:bg-pink-50 transition">What
                        is the success rate of IVF? <svg xmlns="http://www.w3.org/2000/svg"
                            :class="{'rotate-180': open}"
                            class="h-5 w-5 text-pink-500 transform transition-transform duration-300" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M19 9l-7 7-7-7"></path>
                        </svg></button>
                    <div x-show="open" x-transition="" class="px-6 pb-5 text-gray-700">Success rates range between
                        40–60% depending on age, health, and medical conditions.</div>
                </div>
                <div x-data="{ open: false }"
                    class="bg-white/90 backdrop-blur-md text-gray-800 rounded-xl shadow-lg overflow-hidden"><button
                        @click="open = !open"
                        class="flex justify-between items-center w-full px-6 py-4 text-left font-semibold hover:bg-pink-50 transition">Is
                        IVF painful or risky? <svg xmlns="http://www.w3.org/2000/svg" :class="{'rotate-180': open}"
                            class="h-5 w-5 text-pink-500 transform transition-transform duration-300" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M19 9l-7 7-7-7"></path>
                        </svg></button>
                    <div x-show="open" x-transition="" class="px-6 pb-5 text-gray-700">IVF is minimally invasive and
                        anesthesia ensures the process is comfortable and safe.</div>
                </div>
            </div>
        </div>
    </div>
</section>
<script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer=""></script>
<script>
    function calculateOvulation() {
        // Get input values
        const lastPeriodInput = document.getElementById('lastPeriod');
        const cycleLengthInput = document.getElementById('cycleLength');
        const resultDiv = document.getElementById('result');
        const ovulationDateP = document.getElementById('ovulationDate');
        const fertileWindowP = document.getElementById('fertileWindow');

        // Validate inputs
        if (!lastPeriodInput.value) {
            alert('Please select the first day of your last period.');
            lastPeriodInput.focus();
            return;
        }

        const lastPeriod = new Date(lastPeriodInput.value);
        const cycleLength = parseInt(cycleLengthInput.value) || 28;

        // Validate cycle length
        if (cycleLength < 21 || cycleLength > 40) {
            alert('Cycle length should be between 21 and 40 days.');
            cycleLengthInput.focus();
            return;
        }

        // Calculate next period date
        const nextPeriod = new Date(lastPeriod);
        nextPeriod.setDate(nextPeriod.getDate() + cycleLength);

        // Calculate ovulation date (typically 14 days before next period, or cycleLength - 14)
        const ovulationDay = cycleLength - 14;
        const ovulationDate = new Date(lastPeriod);
        ovulationDate.setDate(ovulationDate.getDate() + ovulationDay);

        // Calculate fertile window (5 days before ovulation to 1 day after)
        const fertileStart = new Date(ovulationDate);
        fertileStart.setDate(fertileStart.getDate() - 5);

        const fertileEnd = new Date(ovulationDate);
        fertileEnd.setDate(fertileEnd.getDate() + 1);

        // Format dates
        const formatDate = (date) => {
            const options = { year: 'numeric', month: 'long', day: 'numeric' };
            return date.toLocaleDateString('en-US', options);
        };

        // Display results
        ovulationDateP.textContent = formatDate(ovulationDate);
        fertileWindowP.textContent = `${formatDate(fertileStart)} to ${formatDate(fertileEnd)}`;

        // Show result section
        resultDiv.classList.remove('hidden');

        // Scroll to results
        resultDiv.scrollIntoView({ behavior: 'smooth', block: 'nearest' });
    }

    // Allow Enter key to submit
    document.addEventListener('DOMContentLoaded', function() {
        const form = document.getElementById('ovulationForm');
        const inputs = form.querySelectorAll('input');

        inputs.forEach(input => {
            input.addEventListener('keypress', function(e) {
                if (e.key === 'Enter') {
                    e.preventDefault();
                    calculateOvulation();
                }
            });
        });
    });
</script>
@endsection
