@extends('frontend.layouts.master')
@section('title', 'Home')
@section('content')
    <section id="hero-section"
        class="relative bg-gradient-to-br from-[#20417e] via-[#2f4c8a] to-[#778aaf] text-white overflow-hidden py-12">
        <div
            class="container mx-auto px-6 lg:px-20 flex flex-col-reverse md:flex-row items-center relative z-10 gap-12">
            <div class="space-y-6 animate-fadeInUp lg:w-1/2 text-center lg:text-left">
                <h1 class="text-4xl font-extrabold leading-tight">IVF Insurance<br class="hidden md:block"></h1><span
                    class="text-pink-200 text-lg md:text-xl">Protecting Your Parenthood Journey</span>
                <p class="text-lg text-blue-100 leading-tight">Introduce the concept — IVF treatments are a financial
                    and emotional commitment, and insurance coverage helps make it more secure and stress-free. <span
                        class="text-white font-semibold">We</span> ensure transparent and detailed pricing, helping you
                    make informed decisions about your fertility care with clarity and confidence.</p>
                <div class="flex flex-col md:flex-row justify-center lg:justify-start md:space-x-4"><button
                        class="mt-4 inline-block bg-white text-[#20417e] font-semibold px-8 py-3 rounded-full shadow-lg hover:bg-pink-100 hover:scale-105 transition-all duration-300 ease-in-out">Check
                        your Coverage</button> <button
                        class="mt-4 inline-block bg-white text-[#20417e] font-semibold px-8 py-3 rounded-full shadow-lg hover:bg-pink-100 hover:scale-105 transition-all duration-300 ease-in-out">Talk
                        to Our Insurance Expert</button></div>
            </div>
            <div class="lg:w-1/2 animate-fadeInRight relative group"><img src="parents.jpg" alt="Fertility Care"
                    class="relative rounded-3xl shadow-2xl border-4 border-white/30 group-hover:scale-105 transition duration-700 ease-out object-cover w-full h-full">
            </div>
        </div>
    </section>
    <section
        class="relative bg-gradient-to-b from-white via-blue-50/50 to-blue-50 from-[#20417e] via-[#3e73b9] to-[#20417e] py-12 overflow-hidden">
        <div class="relative max-w-6xl mx-auto px-6 flex flex-col lg:flex-row items-center justify-between gap-10">
            <div class="text-center lg:text-left max-w-lg">
                <h2 class="text-3xl md:text-4xl font-bold text-[#20417e] mb-4 leading-tight">Ongoing Fertility Offers
                </h2>
                <p class="text-black/80 text-lg mb-8 leading-relaxed">Grab exclusive discounts on IVF, IUI, and
                    fertility checkups — because your dream deserves the right start.</p><a href="#offers"
                    class="inline-block bg-[#ffd700] text-[#20417e] px-8 py-3 rounded-full font-semibold shadow-md hover:shadow-xl hover:bg-white transition-all duration-300 hover:scale-105 active:scale-95 focus:ring-4 focus:ring-yellow-300/60">View
                    All Offers</a>
            </div>
            <div class="grid grid-cols-2 gap-6 w-full lg:w-auto">
                <div
                    class="offer-card bg-white/90 backdrop-blur-lg rounded-2xl p-3 shadow-lg border border-blue-100 hover:border-blue-300 hover:shadow-2xl transition-all duration-500">
                    <h3 class="text-xl font-bold text-[#20417e] mb-2">💖 IVF Starter Package</h3>
                    <p class="text-gray-700 text-sm">Flat 25% off this month only!</p>
                </div>
                <div
                    class="offer-card bg-white/90 backdrop-blur-lg rounded-2xl p-3 shadow-lg border border-blue-100 hover:border-blue-300 hover:shadow-2xl transition-all duration-500">
                    <h3 class="text-xl font-bold text-[#20417e] mb-2">🩺 Fertility Health Check</h3>
                    <p class="text-gray-700 text-sm">Comprehensive tests at just ₹999</p>
                </div>
                <div
                    class="offer-card bg-white/90 backdrop-blur-lg rounded-2xl p-3 shadow-lg border border-blue-100 hover:border-blue-300 hover:shadow-2xl transition-all duration-500">
                    <h3 class="text-xl font-bold text-[#20417e] mb-2">👶 Free Consultation</h3>
                    <p class="text-gray-700 text-sm">Get your first fertility consultation free</p>
                </div>
                <div
                    class="offer-card bg-white/90 backdrop-blur-lg rounded-2xl p-3 shadow-lg border border-blue-100 hover:border-blue-300 hover:shadow-2xl transition-all duration-500">
                    <h3 class="text-xl font-bold text-[#20417e] mb-2">💬 Counseling Session</h3>
                    <p class="text-gray-700 text-sm">Book 2, get 1 free this festive season</p>
                </div>
            </div>
        </div>
    </section>
    <section class="relative py-12 bg-gradient-to-b from-pink-50 via-white to-blue-50 overflow-hidden">
        <div class="container mx-auto px-6 lg:px-12 relative z-10 text-center">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4 animate-fade-in-up">Why <span class="text-brand-pink">Secure</span> IVF Plan?</h2>
            <p class="text-gray-600 max-w-2xl mx-auto mb-6 md:mb-10 animate-fade-in-up delay-100">We combine empathy, expertise, and innovation to guide you toward parenthood — with care made just for you.</p>

            <div id="fertilitySlider" class="flex gap-6 overflow-x-auto snap-x snap-mandatory pb-4 scroll-smooth">

                <div class="min-w-[80%] sm:min-w-[45%] md:min-w-[30%] lg:min-w-[23%] p-[2px] bg-gradient-to-tr from-pink-200 to-blue-200 rounded-3xl snap-start hover:shadow-2xl hover:shadow-pink-100 transition-all duration-300">
                    <div class="bg-white rounded-3xl p-6 flex flex-col items-center text-center h-full animate-fade-in-up">
                        <div class="w-14 h-14 rounded-full border-2 border-pink-400 flex items-center justify-center mb-4 text-2xl bg-pink-50">
                            <i class="fa-solid fa-map-marker-alt text-pink-500 text-3xl"></i>
                        </div>
                        <h3 class="text-lg font-semibold text-gray-800 mb-2">Covers major fertility treatments like IVF, ICSI, and Egg Freezing</h3>
                    </div>
                </div>

                <div class="min-w-[80%] sm:min-w-[45%] md:min-w-[30%] lg:min-w-[23%] p-[2px] bg-gradient-to-tr from-blue-200 to-cyan-200 rounded-3xl snap-start hover:shadow-2xl hover:shadow-blue-100 transition-all duration-300">
                    <div class="bg-white rounded-3xl p-6 flex flex-col items-center text-center h-full animate-fade-in-up delay-100">
                        <div class="w-14 h-14 rounded-full border-2 border-pink-400 flex items-center justify-center mb-4 text-2xl bg-blue-50">
                            <i class="fa-solid fa-vial text-pink-500 text-3xl"></i>
                        </div>
                        <h3 class="text-lg font-semibold text-gray-800 mb-2">Protects against treatment complications or unforeseen cancellations.</h3>
                    </div>
                </div>

                <div class="min-w-[80%] sm:min-w-[45%] md:min-w-[30%] lg:min-w-[23%] p-[2px] bg-gradient-to-tr from-purple-200 to-pink-200 rounded-3xl snap-start hover:shadow-2xl hover:shadow-purple-100 transition-all duration-300">
                    <div class="bg-white rounded-3xl p-6 flex flex-col items-center text-center h-full animate-fade-in-up delay-200">
                        <div class="w-14 h-14 rounded-full border-2 border-pink-400 flex items-center justify-center mb-4 text-2xl bg-pink-50">
                            <i class="fa-solid fa-egg text-pink-500 text-3xl"></i>
                        </div>
                        <h3 class="text-lg font-semibold text-gray-800 mb-2">Reduces financial stress and ensures treatment continuity.</h3>
                    </div>
                </div>

                <div class="min-w-[80%] sm:min-w-[45%] md:min-w-[30%] lg:min-w-[23%] p-[2px] bg-gradient-to-tr from-green-200 to-lime-200 rounded-3xl snap-start hover:shadow-2xl hover:shadow-green-100 transition-all duration-300">
                    <div class="bg-white rounded-3xl p-6 flex flex-col items-center text-center h-full animate-fade-in-up delay-300">
                        <div class="w-14 h-14 rounded-full border-2 border-pink-400 flex items-center justify-center mb-4 text-2xl bg-green-50">
                            <i class="fa-solid fa-file-medical text-pink-500 text-3xl"></i>
                        </div>
                        <h3 class="text-lg font-semibold text-gray-800 mb-2">Available as add-on or standalone plans.</h3>
                    </div>
                </div>

            </div>

            <button id="prevBtn" class="hidden sm:flex absolute top-1/2 -translate-y-1/2 left-0 bg-white shadow-md w-10 h-10 rounded-full justify-center items-center text-pink-500 hover:bg-pink-100 transition-all duration-300 z-20">
                <i class="fa-solid fa-chevron-left"></i>
            </button>
            <button id="nextBtn" class="hidden sm:flex absolute top-1/2 -translate-y-1/2 right-0 bg-white shadow-md w-10 h-10 rounded-full justify-center items-center text-pink-500 hover:bg-pink-100 transition-all duration-300 z-20">
                <i class="fa-solid fa-chevron-right"></i>
            </button>
        </div>
    </section>
    <section id="learn-fertility" class="relative py-12 bg-white overflow-hidden">
        <div class="container mx-auto px-6 lg:px-16 relative z-10">
            <div class="text-center mb-6 md:mb-10 max-w-3xl mx-auto animate-fade-in-up">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-800 leading-tight mb-4">What’s Covered Under the
                    <span class="bg-gradient-to-r from-pink-500 to-blue-500 bg-clip-text text-transparent">Secure IVF
                        Plan</span>
                </h2>
                <p class="text-gray-600 text-lg">Comprehensive protection for every stage of your fertility journey —
                    from treatment to unforeseen complications.</p>
            </div>
            <div
                class="flex gap-6 overflow-x-auto snap-x snap-mandatory pb-4 md:grid md:grid-cols-6 md:gap-10 md:overflow-visible">
                <div
                    class="min-w-[260px] snap-start col-span-6 md:col-span-2 bg-white rounded-3xl shadow-md hover:shadow-2xl hover:-translate-y-2 transition-all duration-500 group p-8 border border-gray-100 animate-fade-in-up">
                    <div
                        class="w-16 h-16 bg-gradient-to-tr from-pink-400 to-blue-400 rounded-full flex items-center justify-center mb-5 text-white text-3xl shadow-lg group-hover:scale-110 transition-transform duration-300">
                        <i class="fa-solid fa-heart-pulse"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-800 mb-3 group-hover:text-pink-600 transition-colors">
                        Treatment Coverage</h3>
                    <p class="text-gray-600 text-sm leading-relaxed">IVF, ICSI, IUI, and fertility medications —
                        complete support for your treatment journey.</p>
                </div>
                <div
                    class="min-w-[260px] snap-start col-span-6 md:col-span-2 bg-white rounded-3xl shadow-md hover:shadow-2xl hover:-translate-y-2 transition-all duration-500 group p-8 border border-gray-100 animate-fade-in-up delay-100">
                    <div
                        class="w-16 h-16 bg-gradient-to-tr from-blue-400 to-cyan-400 rounded-full flex items-center justify-center mb-5 text-white text-3xl shadow-lg group-hover:scale-110 transition-transform duration-300">
                        <i class="fa-solid fa-vial"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-800 mb-3 group-hover:text-blue-600 transition-colors">
                        Procedural Coverage</h3>
                    <p class="text-gray-600 text-sm leading-relaxed">Egg retrieval, embryo transfer, freezing, and
                        storage — every major step covered.</p>
                </div>
                <div
                    class="min-w-[260px] snap-start col-span-6 md:col-span-2 bg-white rounded-3xl shadow-md hover:shadow-2xl hover:-translate-y-2 transition-all duration-500 group p-8 border border-gray-100 animate-fade-in-up delay-200">
                    <div
                        class="w-16 h-16 bg-gradient-to-tr from-purple-400 to-pink-400 rounded-full flex items-center justify-center mb-5 text-white text-3xl shadow-lg group-hover:scale-110 transition-transform duration-300">
                        <i class="fa-solid fa-kit-medical"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-800 mb-3 group-hover:text-purple-600 transition-colors">
                        Complications Coverage</h3>
                    <p class="text-gray-600 text-sm leading-relaxed">Covers medical emergencies or unexpected issues
                        during IVF procedures.</p>
                </div>
                <div
                    class="min-w-[260px] snap-start col-span-6 md:col-start-2 md:col-span-2 bg-white rounded-3xl shadow-md hover:shadow-2xl hover:-translate-y-2 transition-all duration-500 group p-8 border border-gray-100 animate-fade-in-up delay-300">
                    <div
                        class="w-16 h-16 bg-gradient-to-tr from-green-400 to-lime-400 rounded-full flex items-center justify-center mb-5 text-white text-3xl shadow-lg group-hover:scale-110 transition-transform duration-300">
                        <i class="fa-solid fa-rotate"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-800 mb-3 group-hover:text-green-600 transition-colors">
                        Multiple Cycles</h3>
                    <p class="text-gray-600 text-sm leading-relaxed">Partial coverage for repeat IVF cycles, depending
                        on your chosen plan tier.</p>
                </div>
                <div
                    class="min-w-[260px] snap-start col-span-6 md:col-span-2 bg-white rounded-3xl shadow-md hover:shadow-2xl hover:-translate-y-2 transition-all duration-500 group p-8 border border-gray-100 animate-fade-in-up delay-400">
                    <div
                        class="w-16 h-16 bg-gradient-to-tr from-yellow-400 to-pink-400 rounded-full flex items-center justify-center mb-5 text-white text-3xl shadow-lg group-hover:scale-110 transition-transform duration-300">
                        <i class="fa-solid fa-dna"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-800 mb-3 group-hover:text-yellow-600 transition-colors">
                        Add-ons</h3>
                    <p class="text-gray-600 text-sm leading-relaxed">Includes donor egg/sperm, surrogacy assistance, and
                        pre-implantation genetic testing (PGT).</p>
                </div>
            </div>
        </div>
    </section>
    <section class="relative py-12 bg-gradient-to-b from-pink-50 via-white to-blue-50 overflow-hidden">
        <div class="max-w-5xl mx-auto px-6 text-center animate-fade-in-up">
            <h3 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">Know Your <span
                    class="text-pink-600">Exclusions</span></h3>
            <p class="text-gray-600 text-lg md:text-xl mb-10">Some treatments and conditions are not included under
                standard fertility plans.</p>
            <ul class="grid grid-cols-2 gap-6">
                <li
                    class="flex items-center md:items-start flex-col md:flex-row gap-4 p-2 md:p-5 bg-white/70 backdrop-blur rounded-xl shadow-sm hover:shadow-md hover:bg-white transition-all duration-300">
                    <i class="fa-solid fa-circle-xmark text-pink-500 text-2xl mt-1"></i> <span
                        class="text-gray-700 text-base md:text-lg">Pre-existing infertility conditions</span>
                </li>
                <li
                    class="flex items-center md:items-start flex-col md:flex-row gap-4 p-2 md:p-5 bg-white/70 backdrop-blur rounded-xl shadow-sm hover:shadow-md hover:bg-white transition-all duration-300">
                    <i class="fa-solid fa-circle-xmark text-pink-500 text-2xl mt-1"></i> <span
                        class="text-gray-700 text-base md:text-lg">Cosmetic or non-medical fertility procedures</span>
                </li>
                <li
                    class="flex items-center md:items-start flex-col md:flex-row gap-4 p-2 md:p-5 bg-white/70 backdrop-blur rounded-xl shadow-sm hover:shadow-md hover:bg-white transition-all duration-300">
                    <i class="fa-solid fa-circle-xmark text-pink-500 text-2xl mt-1"></i> <span
                        class="text-gray-700 text-base md:text-lg">Optional or advanced diagnostic testing</span>
                </li>
                <li
                    class="flex items-center md:items-start flex-col md:flex-row gap-4 p-2 md:pp-5 bg-white/70 backdrop-blur rounded-xl shadow-sm hover:shadow-md hover:bg-white transition-all duration-300">
                    <i class="fa-solid fa-circle-xmark text-pink-500 text-2xl mt-1"></i> <span
                        class="text-gray-700 text-base md:text-lg">Medications not prescribed by specialists</span>
                </li>
            </ul>
        </div>
        <style>
            @keyframes fade-in-up {
                0% {
                    opacity: 0;
                    transform: translateY(25px)
                }

                100% {
                    opacity: 1;
                    transform: translateY(0)
                }
            }

            .animate-fade-in-up {
                animation: fade-in-up .9s ease-out both
            }
        </style>
    </section>
    <section class="relative py-12 bg-white overflow-hidden">
        <div class="container mx-auto px-6 lg:px-16 text-center">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4 animate-fade-in-up">Our <span
                    class="bg-gradient-to-r from-pink-500 to-blue-500 bg-clip-text text-transparent">Trusted Insurance
                    Partners</span></h2>
            <p class="text-gray-600 text-lg max-w-2xl mx-auto mb-6 md:mb-10 animate-fade-in-up delay-100">We’ve
                partnered with leading insurance and financial institutions to make your fertility journey smooth,
                affordable, and secure.</p>
            <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 gap-8 md:gap-10"><a href="#" target="_blank"
                    class="group rounded-3xl flex flex-col items-center justify-center transition-all duration-500 animate-fade-in-up delay-100"><img
                        src="HDFC.jpg" alt="HDFC Logo"
                        class="h-24 w-auto object-contain mb-4 transition-transform duration-300">
                    <p class="text-gray-700 text-sm font-medium">HDFC ERGO Insurance</p>
                </a><a href="#" target="_blank"
                    class="group rounded-3xl flex flex-col items-center justify-center transition-all duration-500 animate-fade-in-up delay-200"><img
                        src="HDFC.jpg" alt="ICICI Logo"
                        class="h-24 w-auto object-contain mb-4 transition-transform duration-300">
                    <p class="text-gray-700 text-sm font-medium">ICICI Lombard</p>
                </a><a href="#" target="_blank"
                    class="group rounded-3xl flex flex-col items-center justify-center transition-all duration-500 animate-fade-in-up delay-300"><img
                        src="HDFC.jpg" alt="Bajaj Finserv"
                        class="h-24 w-auto object-contain mb-4 transition-transform duration-300">
                    <p class="text-gray-700 text-sm font-medium">Bajaj Finserv</p>
                </a><a href="#" target="_blank"
                    class="group rounded-3xl flex flex-col items-center justify-center transition-all duration-500 animate-fade-in-up delay-400"><img
                        src="HDFC.jpg" alt="Aditya Birla"
                        class="h-24 w-auto object-contain mb-4 transition-transform duration-300">
                    <p class="text-gray-700 text-sm font-medium">Aditya Birla Health</p>
                </a></div>
        </div>
        <style>
            @keyframes fade-in-up {
                0% {
                    opacity: 0;
                    transform: translateY(20px)
                }

                100% {
                    opacity: 1;
                    transform: translateY(0)
                }
            }

            .animate-fade-in-up {
                animation: fade-in-up .9s ease-out both
            }

            .delay-100 {
                animation-delay: .1s
            }

            .delay-200 {
                animation-delay: .2s
            }

            .delay-300 {
                animation-delay: .3s
            }

            .delay-400 {
                animation-delay: .4s
            }

            .delay-500 {
                animation-delay: .5s
            }
        </style>
    </section>
    <section class="relative py-12 bg-gradient-to-b from-pink-50 via-white to-blue-50 overflow-hidden">
        <div class="container mx-auto px-6 lg:px-12 text-center">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-6 md:mb-10">IVF Insurance &amp; Financing Plans
            </h2>
            <div class="grid sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div
                    class="bg-white rounded-3xl shadow-lg hover:shadow-2xl transition-all duration-500 p-8 border border-gray-100 transform hover:-translate-y-2 cursor-pointer">
                    <div class="h-2 w-full rounded-t-3xl bg-gradient-to-r from-blue-400 to-blue-600 mb-4"></div>
                    <h3 class="text-xl font-semibold text-gray-800 mb-3 flex items-center justify-center gap-2"><i
                            class="fa-solid fa-seedling text-blue-500"></i> Basic Plan</h3>
                    <p class="text-gray-600 mb-2"><strong>Features:</strong> Single cycle IVF coverage</p>
                    <p class="text-gray-600 mb-2"><strong>Coverage:</strong> ₹1–2 lakh</p>
                    <p class="text-gray-600"><strong>Premium:</strong> ₹15,000–₹20,000 / year</p>
                </div>
                <div
                    class="bg-white rounded-3xl shadow-lg hover:shadow-2xl transition-all duration-500 p-8 border border-gray-100 transform hover:-translate-y-2 cursor-pointer">
                    <div class="h-2 w-full rounded-t-3xl bg-gradient-to-r from-pink-400 to-pink-600 mb-4"></div>
                    <h3 class="text-xl font-semibold text-gray-800 mb-3 flex items-center justify-center gap-2"><i
                            class="fa-solid fa-shield-heart text-pink-500"></i> Advanced Plan</h3>
                    <p class="text-gray-600 mb-2"><strong>Features:</strong> IVF + ICSI + Egg Freezing</p>
                    <p class="text-gray-600 mb-2"><strong>Coverage:</strong> ₹3–4 lakh</p>
                    <p class="text-gray-600"><strong>Premium:</strong> ₹25,000–₹30,000 / year</p>
                </div>
                <div
                    class="bg-white rounded-3xl shadow-lg hover:shadow-2xl transition-all duration-500 p-8 border border-gray-100 transform hover:-translate-y-2 cursor-pointer">
                    <div class="h-2 w-full rounded-t-3xl bg-gradient-to-r from-yellow-400 to-yellow-600 mb-4"></div>
                    <h3 class="text-xl font-semibold text-gray-800 mb-3 flex items-center justify-center gap-2"><i
                            class="fa-solid fa-crown text-yellow-500"></i> Comprehensive Plan</h3>
                    <p class="text-gray-600 mb-2"><strong>Features:</strong> Multi-cycle, medications &amp;
                        complications</p>
                    <p class="text-gray-600 mb-2"><strong>Coverage:</strong> ₹5–6 lakh</p>
                    <p class="text-gray-600"><strong>Premium:</strong> ₹35,000–₹45,000 / year</p>
                </div>
            </div>
        </div>
    </section>
    <section class="bg-white py-12">
        <div class="container mx-auto px-6 lg:px-16">
            <div class="text-center mb-6 md:mb-10">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-800">Assessment Journey &amp; <span
                        class="text-brand-pink">Why Choose IVF Insurance With Us</span></h2>
                <p class="text-gray-600 mt-4 max-w-2xl mx-auto">From initial consultation to comprehensive coverage, we
                    guide you at every step of your IVF journey.</p>
            </div>
            <div class="flex flex-col lg:flex-row">
                <div class="lg:w-1/2"><img src="insurance.png" class="w-[80%] mx-auto"></div>
                <div class="lg:w-1/2 grid grid-cols-1 gap-6">
                    <div class="flex gap-4 p-4 bg-white rounded-xl shadow">
                        <div class="text-pink-500 flex-shrink-0"><svg xmlns="http://www.w3.org/2000/svg"
                                class="h-10 w-10" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 12l2 2l4-4m0 0a9 9 0 11-9-9a9 9 0 019 9z"></path>
                            </svg></div>
                        <div>
                            <h4 class="font-semibold text-gray-700">Comprehensive Coverage</h4>
                            <p class="text-gray-600 text-sm">IVF procedures, medications, and follow-ups are fully
                                covered.</p>
                        </div>
                    </div>
                    <div class="flex gap-4 p-4 bg-white rounded-xl shadow">
                        <div class="text-pink-500 flex-shrink-0"><svg xmlns="http://www.w3.org/2000/svg"
                                class="h-10 w-10" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 8v4l3 3m6-3a9 9 0 11-9-9a9 9 0 019 9z"></path>
                            </svg></div>
                        <div>
                            <h4 class="font-semibold text-gray-700">Trusted Partners</h4>
                            <p class="text-gray-600 text-sm">We collaborate with top fertility clinics and insurance
                                providers.</p>
                        </div>
                    </div>
                    <div class="flex gap-4 p-4 bg-white rounded-xl shadow">
                        <div class="text-pink-500 flex-shrink-0"><svg xmlns="http://www.w3.org/2000/svg"
                                class="h-10 w-10" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 13l4 4L19 7"></path>
                            </svg></div>
                        <div>
                            <h4 class="font-semibold text-gray-700">Personalized Guidance</h4>
                            <p class="text-gray-600 text-sm">Step-by-step assistance throughout the IVF journey.</p>
                        </div>
                    </div>
                    <div class="flex gap-4 p-4 bg-white rounded-xl shadow">
                        <div class="text-pink-500 flex-shrink-0"><svg xmlns="http://www.w3.org/2000/svg"
                                class="h-10 w-10" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 13l4 4L19 7"></path>
                            </svg></div>
                        <div>
                            <h4 class="font-semibold text-gray-700">Transparent &amp; Hassle-free</h4>
                            <p class="text-gray-600 text-sm">Clear policies, fast approvals, and no hidden processes.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="relative bg-brand-blue text-white py-6 text-center">
        <div class="container mx-auto px-6">
            <h2 class="text-3xl md:text-4xl font-bold mb-3">Ready to Take the Next Step?</h2>
            <p class="text-lg mb-4 max-w-2xl mx-auto">Our fertility specialists are here to listen, guide, and support
                you — with care that’s both expert and empathetic.</p>
            <div class="flex flex-col sm:flex-row justify-center items-center gap-4"><button
                    class="bg-white text-brand-blue font-semibold px-6 py-3 rounded-full shadow-lg hover:shadow-2xl transition-all duration-500 hover:scale-105"><i
                        class="fa-solid fa-calculator mr-2 text-brand-pink"></i> Check Coverage Eligibility</button>
                <button
                    class="bg-brand-pink text-white px-6 py-3 rounded-full shadow-lg hover:shadow-2xl transition-all duration-500 hover:scale-105"><i
                        class="fa-solid fa-hand-holding-heart mr-2"></i> Book Your Consultation</button>
            </div>
        </div>
    </section>
    <section
        class="relative bg-gradient-to-r from-[#20417e] via-[#3a5594] to-[#778aaf] text-white py-12 overflow-hidden">
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
@endsection
