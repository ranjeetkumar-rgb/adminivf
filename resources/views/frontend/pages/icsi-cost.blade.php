@extends('frontend.layouts.master')
@section('title', 'Home')
@section('content')
    <section id="hero-section"
        class="relative bg-gradient-to-br from-[#20417e] via-[#2f4c8a] to-[#778aaf] text-white overflow-hidden py-12">
        <div
            class="container mx-auto px-6 lg:px-20 flex flex-col-reverse md:flex-row items-center relative z-10 gap-12">
            <div class="space-y-6 animate-fadeInUp lg:w-1/2 text-center lg:text-left">
                <h1 class="text-4xl font-extrabold leading-tight">Fertility Care Made Affordable</h1><span
                    class="text-pink-200 text-lg md:text-xl">Easy EMI &amp; 0% Interest Plans</span>
                <p class="text-lg md:text-xl text-blue-100 leading-relaxed">IVF treatment costs vary depending on the
                    clinic, type of procedure, and individual patient profile. <span
                        class="text-white font-semibold">We</span> ensure transparent and detailed pricing, helping you
                    make informed decisions about your fertility care with clarity and confidence.</p>
                <div class="flex flex-col md:flex-row justify-center lg:justify-start md:space-x-4"><button
                        class="mt-4 inline-block bg-white text-[#20417e] font-semibold px-8 py-3 rounded-full shadow-lg hover:bg-pink-100 hover:scale-105 transition-all duration-300 ease-in-out">Get
                        Cost Estimation</button> <button
                        class="mt-4 inline-block bg-white text-[#20417e] font-semibold px-8 py-3 rounded-full shadow-lg hover:bg-pink-100 hover:scale-105 transition-all duration-300 ease-in-out">Book
                        a Free Consultation</button></div>
            </div>
            <div class="lg:w-1/2 animate-fadeInRight relative group"><img src="parents.jpg" alt="Fertility Care"
                    class="relative rounded-3xl shadow-2xl border-4 border-white/30 group-hover:scale-105 transition duration-700 ease-out object-cover w-full h-full">
            </div>
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

            .animate-fadeInUp {
                animation: fade-in-up .9s ease-out both
            }

            @keyframes fade-in-right {
                0% {
                    opacity: 0;
                    transform: translateX(20px)
                }

                100% {
                    opacity: 1;
                    transform: translateX(0)
                }
            }

            .animate-fadeInRight {
                animation: fade-in-right .9s ease-out both
            }

            @keyframes pulse {

                0%,
                100% {
                    transform: scale(1);
                    opacity: .6
                }

                50% {
                    transform: scale(1.05);
                    opacity: .9
                }
            }

            .animate-pulse {
                animation: pulse 10s ease-in-out infinite
            }
        </style>
    </section>
    <section
        class="relative bg-gradient-to-b from-white via-blue-50/50 to-blue-50 from-[#20417e] via-[#3e73b9] to-[#20417e] py-12 overflow-hidden">
        <div class="relative max-w-6xl mx-auto px-6 flex flex-col lg:flex-row items-center justify-between gap-10">
            <div class="text-center lg:text-left max-w-lg">
                <h2 class="text-3xl md:text-4xl font-extrabold text-[#20417e] mb-4 leading-tight">Ongoing Fertility
                    Offers</h2>
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
        <div class="container mx-auto px-6 lg:px-12">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-12 text-center">Average IVF Cost in India (2025)
            </h2>
            <div class="max-w-3xl mx-auto space-y-6">
                <div
                    class="flex items-start gap-5 p-5 rounded-2xl bg-white shadow-md hover:shadow-xl hover:-translate-y-1 transition-all duration-300">
                    <div
                        class="flex items-center justify-center w-10 h-10 rounded-full bg-gradient-to-r from-pink-500 to-blue-500 text-white text-lg shadow-md flex-shrink-0">
                        <i class="fa-solid fa-hand-holding-medical"></i>
                    </div><span class="text-gray-800 font-medium leading-relaxed"><strong>Comprehensive IVF
                            Package</strong> –
                        Includes consultation, stimulation, egg retrieval, and embryo transfer in one transparent
                        price.</span>
                </div>
                <div
                    class="flex items-start gap-5 p-5 rounded-2xl bg-white shadow-md hover:shadow-xl hover:-translate-y-1 transition-all duration-300">
                    <div
                        class="flex items-center justify-center w-10 h-10 rounded-full bg-gradient-to-r from-blue-500 to-pink-500 text-white text-lg shadow-md flex-shrink-0">
                        <i class="fa-solid fa-credit-card"></i>
                    </div><span class="text-gray-800 font-medium leading-relaxed"><strong>0% EMI Plans</strong> – Easy
                        monthly
                        installments with no additional interest or hidden charges.</span>
                </div>
                <div
                    class="flex items-start gap-5 p-5 rounded-2xl bg-white shadow-md hover:shadow-xl hover:-translate-y-1 transition-all duration-300">
                    <div
                        class="flex items-center justify-center w-10 h-10 rounded-full bg-gradient-to-r from-pink-600 to-blue-500 text-white text-lg shadow-md flex-shrink-0">
                        <i class="fa-solid fa-vial-circle-check"></i>
                    </div><span class="text-gray-800 font-medium leading-relaxed"><strong>Fertility Assessment
                            Package</strong>
                        – Complete diagnostic tests and consultation for couples planning treatment.</span>
                </div>
            </div>
        </div>
    </section>
    <section class="relative py-12 bg-white overflow-hidden">
        <div class="container mx-auto px-6 lg:px-12 relative z-10 text-center">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">Factors Affecting <span
                    class="text-brand-pink">IVF Cost</span></h2>
            <p class="text-gray-600 max-w-2xl mx-auto mb-12">We combine empathy, expertise, and innovation to guide you
                toward parenthood — with care made just for you.</p>
            <div class="flex gap-6 overflow-x-auto snap-x snap-mandatory pb-4">
                <div
                    class="min-w-[80%] sm:min-w-[45%] md:min-w-[30%] lg:min-w-[23%] mx-2 p-[2px] bg-gradient-to-tr from-pink-200 to-blue-200 rounded-3xl snap-start">
                    <div class="bg-white rounded-3xl p-6 flex flex-col items-center text-center">
                        <div class="w-14 h-14 rounded-full border-2 flex items-center justify-center mb-4 text-2xl">
                            <i class="fa-solid fa-map-marker-alt text-pink-500 text-3xl"></i>
                        </div>
                        <h3 class="text-lg font-semibold text-gray-800 mb-2">Location &amp; Clinic Reputation</h3>
                        <p class="text-gray-500 text-sm h-16">Tier-1 cities and advanced centers may charge more</p>
                    </div>
                </div>
                <div
                    class="min-w-[80%] sm:min-w-[45%] md:min-w-[30%] lg:min-w-[23%] mx-2 p-[2px] bg-gradient-to-tr from-blue-200 to-cyan-200 rounded-3xl snap-start">
                    <div class="bg-white rounded-3xl p-6 flex flex-col items-center text-center">
                        <div class="w-14 h-14 rounded-full border-2 flex items-center justify-center mb-4 text-2xl">
                            <i class="fa-solid fa-vial text-pink-500 text-3xl"></i>
                        </div>
                        <h3 class="text-lg font-semibold text-gray-800 mb-2">Number of IVF Cycles Required</h3>
                        <p class="text-gray-500 text-sm h-16">Some patients conceive in 1 cycle, others need 2–3.
                        </p>
                    </div>
                </div>
                <div
                    class="min-w-[80%] sm:min-w-[45%] md:min-w-[30%] lg:min-w-[23%] mx-2 p-[2px] bg-gradient-to-tr from-purple-200 to-pink-200 rounded-3xl snap-start">
                    <div class="bg-white rounded-3xl p-6 flex flex-col items-center text-center">
                        <div class="w-14 h-14 rounded-full border-2 flex items-center justify-center mb-4 text-2xl">
                            <i class="fa-solid fa-egg text-pink-500 text-3xl"></i>
                        </div>
                        <h3 class="text-lg font-semibold text-gray-800 mb-2">Use of Donor Eggs/Sperm</h3>
                        <p class="text-gray-500 text-sm h-16">Adds extra procedural and legal cost.</p>
                    </div>
                </div>
                <div
                    class="min-w-[80%] sm:min-w-[45%] md:min-w-[30%] lg:min-w-[23%] mx-2 p-[2px] bg-gradient-to-tr from-green-200 to-lime-200 rounded-3xl snap-start">
                    <div class="bg-white rounded-3xl p-6 flex flex-col items-center text-center">
                        <div class="w-14 h-14 rounded-full border-2 flex items-center justify-center mb-4 text-2xl">
                            <i class="fa-solid fa-file-medical text-pink-500 text-3xl"></i>
                        </div>
                        <h3 class="text-lg font-semibold text-gray-800 mb-2">Fertility Medications</h3>
                        <p class="text-gray-500 text-sm h-16">Brand and dosage affect total spend.</p>
                    </div>
                </div>
                <div
                    class="min-w-[80%] sm:min-w-[45%] md:min-w-[30%] lg:min-w-[23%] mx-2 p-[2px] bg-gradient-to-tr from-green-200 to-lime-200 rounded-3xl snap-start">
                    <div class="bg-white rounded-3xl p-6 flex flex-col items-center text-center">
                        <div class="w-14 h-14 rounded-full border-2 flex items-center justify-center mb-4 text-2xl">
                            <i class="fa-solid fa-calendar-heart text-pink-500 text-3xl"></i>
                        </div>
                        <h3 class="text-lg font-semibold text-gray-800 mb-2">Social Egg Freezing</h3>
                        <p class="text-gray-500 text-sm h-16">For individuals choosing to delay parenthood</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="relative py-12 bg-gradient-to-b from-pink-50 via-white to-blue-50 overflow-hidden">
        <div class="absolute -top-10 left-1/3 w-24 h-24 bg-pink-200/30 rounded-full blur-3xl animate-float-slow"></div>
        <div class="absolute bottom-0 right-1/4 w-32 h-32 bg-blue-200/30 rounded-full blur-3xl animate-float-medium">
        </div>
        <div class="container mx-auto px-6 lg:px-12 text-center relative z-10">
            <h2 class="text-3xl md:text-4xl font-bold mb-4 animate-fade-in-up text-brand-pink">Average IVF Cost by
                Location</h2>
            <p class="text-gray-600 max-w-2xl mx-auto mb-10 text-base md:text-lg animate-fade-in-up delay-100">Explore
                the average IVF cost per cycle across different countries and plan your fertility journey wisely.</p>
            <div class="flex justify-center animate-fade-in-up delay-200">
                <div
                    class="w-full max-w-3xl overflow-x-auto rounded-3xl shadow-xl border border-gray-100 bg-white transition-all duration-500 hover:shadow-2xl hover:-translate-y-1">
                    <table class="min-w-full text-sm md:text-base text-gray-700">
                        <thead class="bg-brand-blue text-white">
                            <tr>
                                <th class="py-4 px-6 font-semibold uppercase tracking-wide text-center rounded-tl-3xl">
                                    Location</th>
                                <th class="py-4 px-6 font-semibold uppercase tracking-wide text-center rounded-tr-3xl">
                                    Average IVF Cost (1 Cycle)</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-100">
                            <tr
                                class="bg-pink-50/50 odd:bg-white group transition duration-500 ease-in-out hover:bg-pink-100 cursor-pointer hover:shadow-md relative">
                                <td class="py-4 px-6 font-medium text-center">India</td>
                                <td class="py-4 px-6 text-center font-semibold text-gray-800">₹1.5L – ₹3.5L</td>
                            </tr>
                            <tr
                                class="bg-white odd:bg-pink-50/50 group transition duration-500 ease-in-out hover:bg-pink-100 cursor-pointer hover:shadow-md relative">
                                <td class="py-4 px-6 font-medium text-center">USA</td>
                                <td class="py-4 px-6 text-center font-semibold text-gray-800">₹10L – ₹15L</td>
                            </tr>
                            <tr
                                class="bg-pink-50/50 odd:bg-white group transition duration-500 ease-in-out hover:bg-pink-100 cursor-pointer hover:shadow-md relative">
                                <td class="py-4 px-6 font-medium text-center">UK</td>
                                <td class="py-4 px-6 text-center font-semibold text-gray-800">₹8L – ₹12L</td>
                            </tr>
                            <tr
                                class="bg-white odd:bg-pink-50/50 group transition duration-500 ease-in-out hover:bg-pink-100 cursor-pointer hover:shadow-md relative">
                                <td class="py-4 px-6 font-medium text-center">Singapore</td>
                                <td class="py-4 px-6 text-center font-semibold text-gray-800">₹6L – ₹10L</td>
                            </tr>
                            <tr
                                class="bg-pink-50/50 odd:bg-white group transition duration-500 ease-in-out hover:bg-pink-100 cursor-pointer hover:shadow-md relative">
                                <td class="py-4 px-6 font-medium text-center">Thailand</td>
                                <td class="py-4 px-6 text-center font-semibold text-gray-800">₹4L – ₹6L</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <style>
            @keyframes float-slow {

                0%,
                100% {
                    transform: translateY(0)
                }

                50% {
                    transform: translateY(-10px)
                }
            }

            @keyframes float-medium {

                0%,
                100% {
                    transform: translateY(0)
                }

                50% {
                    transform: translateY(-15px)
                }
            }

            .animate-float-slow {
                animation: float-slow 6s ease-in-out infinite
            }

            .animate-float-medium {
                animation: float-medium 8s ease-in-out infinite
            }

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
                animation: fade-in-up .8s ease-out both
            }

            .delay-100 {
                animation-delay: .1s
            }

            .delay-200 {
                animation-delay: .2s
            }

            .row::after {
                content: "";
                position: absolute;
                left: 0;
                top: 0;
                width: 0%;
                height: 100%;
                background: linear-gradient(90deg, rgba(255, 255, 255, 0) 0, rgba(255, 192, 203, .2) 50%, rgba(255, 255, 255, 0) 100%);
                transition: width .4s ease
            }

            .row:hover::after {
                width: 100%
            }
        </style>
    </section>
    <section class="relative py-12 bg-gradient-to-b from-white via-pink-50/40 to-white">
        <div class="relative container mx-auto px-6 text-center">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4"><span class="text-brand-pink">Financing &amp;
                    Support</span></h2>
            <p class="text-gray-600 text-lg max-w-2xl mx-auto mb-8">Flexible payment plans, insurance guidance, and
                government-backed support designed to make your fertility journey stress-free and affordable.</p>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10">
                <div
                    class="bg-white/80 backdrop-blur-sm border border-pink-100 rounded-2xl p-6 shadow-md hover:shadow-2xl hover:-translate-y-2 transition-all duration-300 text-left">
                    <div class="flex items-start space-x-5">
                        <div
                            class="flex items-center justify-center w-16 h-16 rounded-full bg-gradient-to-r from-pink-500 to-blue-500 text-white text-2xl shadow-lg flex-shrink-0">
                            <i class="fa-solid fa-wallet"></i>
                        </div>
                        <div>
                            <h3 class="text-lg font-semibold text-gray-800 mb-1">EMI &amp; Payment Options</h3>
                            <p class="text-gray-600 text-sm leading-relaxed">Enjoy 0% EMI plans up to 12 months with
                                instant approval and minimal documentation.</p>
                        </div>
                    </div>
                </div>
                <div
                    class="bg-white/80 backdrop-blur-sm border border-pink-100 rounded-2xl p-6 shadow-md hover:shadow-2xl hover:-translate-y-2 transition-all duration-300 text-left">
                    <div class="flex items-start space-x-5">
                        <div
                            class="flex items-center justify-center w-16 h-16 rounded-full bg-gradient-to-r from-pink-500 to-blue-500 text-white text-2xl shadow-lg flex-shrink-0">
                            <i class="fa-solid fa-hand-holding-heart"></i>
                        </div>
                        <div>
                            <h3 class="text-lg font-semibold text-gray-800 mb-1">Government Schemes</h3>
                            <p class="text-gray-600 text-sm leading-relaxed">Assistance with national and state-level
                                fertility and women’s health subsidy programs.</p>
                        </div>
                    </div>
                </div>
                <div
                    class="bg-white/80 backdrop-blur-sm border border-pink-100 rounded-2xl p-6 shadow-md hover:shadow-2xl hover:-translate-y-2 transition-all duration-300 text-left">
                    <div class="flex items-start space-x-5">
                        <div
                            class="flex items-center justify-center w-16 h-16 rounded-full bg-gradient-to-r from-pink-500 to-blue-500 text-white text-2xl shadow-lg flex-shrink-0">
                            <i class="fa-solid fa-file-medical"></i>
                        </div>
                        <div>
                            <h3 class="text-lg font-semibold text-gray-800 mb-1">Insurance Assistance</h3>
                            <p class="text-gray-600 text-sm leading-relaxed">Guidance for claims and coverage under
                                select fertility and maternity insurance plans.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="awards" class="relative py-12 bg-gradient-to-b from-pink-50 via-white to-blue-50 overflow-hidden">
        <div class="container mx-auto px-6 lg:px-12 text-center">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-8">Transparent Pricing, Compassionate Care</h2>
            <div
                class="flex gap-6 overflow-x-auto snap-x snap-mandatory sm:grid sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 sm:overflow-visible pb-4">
                <div
                    class="bg-white p-6 rounded-2xl shadow hover:shadow-lg transition-all duration-300 min-w-[200px] snap-start">
                    <img src="care1.jpg" alt="Care 1" class="h-20 mx-auto mb-4 object-contain">
                    <h3 class="text-base font-semibold text-gray-800 mb-1">No hidden charges or surprise costs</h3>
                </div>
                <div
                    class="bg-white p-6 rounded-2xl shadow hover:shadow-lg transition-all duration-300 min-w-[200px] snap-start">
                    <img src="care2.jpg" alt="Care 2" class="h-20 mx-auto mb-4 object-contain">
                    <h3 class="text-base font-semibold text-gray-800 mb-1">Personalized cost plan after consultation
                    </h3>
                </div>
                <div
                    class="bg-white p-6 rounded-2xl shadow hover:shadow-lg transition-all duration-300 min-w-[200px] snap-start">
                    <img src="care3.jpg" alt="Care 3" class="h-20 mx-auto mb-4 object-contain">
                    <h3 class="text-base font-semibold text-gray-800 mb-1">Expert fertility specialists with 90%+
                        satisfaction</h3>
                </div>
                <div
                    class="bg-white p-6 rounded-2xl shadow hover:shadow-lg transition-all duration-300 min-w-[200px] snap-start">
                    <img src="care4.jpg" alt="Care 4" class="h-20 mx-auto mb-4 object-contain">
                    <h3 class="text-base font-semibold text-gray-800 mb-1">High success rates across age groups</h3>
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
                        class="fa-solid fa-calculator mr-2 text-brand-pink"></i> Get Cost Estimate</button> <button
                    class="bg-brand-pink text-white px-6 py-3 rounded-full shadow-lg hover:shadow-2xl transition-all duration-500 hover:scale-105"><i
                        class="fa-solid fa-hand-holding-heart mr-2"></i> Book Your Consultation</button></div>
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
