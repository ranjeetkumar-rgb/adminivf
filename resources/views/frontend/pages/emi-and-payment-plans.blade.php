@extends('frontend.layouts.master')
@section('title', 'Home')
@section('content')
    <section id="hero-section"
        class="relative bg-gradient-to-br from-[#20417e] via-[#2f4c8a] to-[#778aaf] text-white overflow-hidden py-12">
        <div class="absolute top-0 left-0 w-72 h-72 bg-pink-300/30 rounded-full blur-3xl opacity-30 animate-pulse">
        </div>
        <div class="absolute bottom-0 right-0 w-96 h-96 bg-blue-200/30 rounded-full blur-3xl opacity-30 animate-pulse">
        </div>
        <div class="container mx-auto px-6 lg:px-20 items-center relative z-10">
            <div class="space-y-6 animate-fadeInUp text-center lg:text-center">
                <h1 class="text-4xl md:text-5xl font-extrabold leading-tight">Fertility Care Made Affordable<br
                        class="hidden md:block"></h1><span class="text-pink-200 text-lg md:text-xl">Easy EMI &amp; 0%
                    Interest Plans</span>
                <p class="text-lg md:text-xl text-blue-100 leading-relaxed">Start your parenthood journey without
                    financial stress. Our flexible EMI options and 0% interest plans make advanced fertility treatments
                    accessible and affordable for everyone.</p>
                <div class="flex flex-col md:flex-row justify-center md:space-x-4"><button
                        class="mt-4 inline-block bg-white text-[#20417e] font-semibold px-8 py-3 rounded-full shadow-lg hover:bg-pink-100 hover:scale-105 transition-all duration-300 ease-in-out">Check
                        your EMI Eligibility</button> <button
                        class="mt-4 inline-block bg-white text-[#20417e] font-semibold px-8 py-3 rounded-full shadow-lg hover:bg-pink-100 hover:scale-105 transition-all duration-300 ease-in-out">Book
                        Free Financial Counseling</button></div>
            </div>
        </div>
    </section>
    <section
        class="relative bg-gradient-to-b from-white via-blue-50/50 to-blue-50 from-[#20417e] via-[#3e73b9] to-[#20417e] py-14 overflow-hidden">
        <div class="absolute -top-10 -left-10 w-40 h-40 bg-blue-100/40 rounded-full blur-3xl animate-pulse"></div>
        <div class="absolute -bottom-10 -right-10 w-52 h-52 bg-blue-200/40 rounded-full blur-3xl animate-pulse"></div>
        <div class="relative max-w-6xl mx-auto px-6 flex flex-col lg:flex-row items-center justify-between gap-10">
            <div class="text-center lg:text-left max-w-lg">
                <h2 class="text-3xl md:text-4xl font-bold text-[#20417e] mb-4 leading-tight">Ongoing Fertility Offers
                </h2>
                <p class="text-black/80 text-lg mb-8 leading-relaxed">Grab exclusive discounts on IVF, IUI, and
                    fertility checkups — because your dream deserves the right start.</p><a href="#offers"
                    class="inline-block bg-[#ffd700] text-[#20417e] px-8 py-3 rounded-full font-semibold shadow-md hover:shadow-xl hover:bg-white transition-all duration-300 hover:scale-105 active:scale-95 focus:ring-4 focus:ring-yellow-300/60">View
                    All Offers</a>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 w-full lg:w-auto">
                <div
                    class="offer-card bg-white/90 backdrop-blur-lg rounded-2xl p-6 shadow-lg border border-blue-100 hover:border-blue-300 hover:shadow-2xl transition-all duration-500">
                    <h3 class="text-xl font-bold text-[#20417e] mb-2">💖 IVF Starter Package</h3>
                    <p class="text-gray-700 text-sm">Flat 25% off this month only!</p>
                </div>
                <div
                    class="offer-card bg-white/90 backdrop-blur-lg rounded-2xl p-6 shadow-lg border border-blue-100 hover:border-blue-300 hover:shadow-2xl transition-all duration-500">
                    <h3 class="text-xl font-bold text-[#20417e] mb-2">🩺 Fertility Health Check</h3>
                    <p class="text-gray-700 text-sm">Comprehensive tests at just ₹999</p>
                </div>
                <div
                    class="offer-card bg-white/90 backdrop-blur-lg rounded-2xl p-6 shadow-lg border border-blue-100 hover:border-blue-300 hover:shadow-2xl transition-all duration-500">
                    <h3 class="text-xl font-bold text-[#20417e] mb-2">👶 Free Consultation</h3>
                    <p class="text-gray-700 text-sm">Get your first fertility consultation free</p>
                </div>
                <div
                    class="offer-card bg-white/90 backdrop-blur-lg rounded-2xl p-6 shadow-lg border border-blue-100 hover:border-blue-300 hover:shadow-2xl transition-all duration-500">
                    <h3 class="text-xl font-bold text-[#20417e] mb-2">💬 Counseling Session</h3>
                    <p class="text-gray-700 text-sm">Book 2, get 1 free this festive season</p>
                </div>
            </div>
        </div>
        <div class="absolute inset-0 pointer-events-none overflow-hidden">
            <div class="animate-float-slow absolute top-10 left-1/4 w-2 h-2 bg-blue-300 rounded-full blur-sm"></div>
            <div class="animate-float-medium absolute bottom-20 right-1/3 w-3 h-3 bg-yellow-400 rounded-full blur-sm">
            </div>
        </div>
        <style>
            @keyframes float-slow {

                0%,
                100% {
                    transform: translateY(0)
                }

                50% {
                    transform: translateY(-12px)
                }
            }

            @keyframes float-medium {

                0%,
                100% {
                    transform: translateY(0)
                }

                50% {
                    transform: translateY(-8px)
                }
            }

            .animate-float-slow {
                animation: float-slow 6s ease-in-out infinite
            }

            .animate-float-medium {
                animation: float-medium 4s ease-in-out infinite
            }

            .offer-card:hover {
                transform: translateY(-6px) rotateX(2deg) rotateY(-2deg)
            }
        </style>
    </section>
    <section id="accessible-care" class="relative py-12 bg-gradient-to-b from-pink-50 via-white to-blue-50 overflow-hidden">
        <div class="container mx-auto px-6 lg:px-16 relative z-10">
            <div class="text-center mb-12 max-w-3xl mx-auto animate-fade-in-up">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-800 leading-tight mb-4">Accessible Care Without
                    Compromise</h2>
                <p class="text-gray-600 text-lg">Making fertility care affordable and stress-free — with flexible,
                    transparent payment options.</p>
            </div>
            <div
                class="flex gap-6 overflow-x-auto snap-x snap-mandatory sm:grid sm:grid-cols-2 md:grid-cols-4 sm:overflow-visible pb-4">
                <div
                    class="min-w-[250px] snap-start items-center text-center justify-center flex flex-col bg-white rounded-3xl shadow-md hover:shadow-2xl hover:-translate-y-2 transition-all duration-500 group p-8 border border-gray-100 animate-fade-in-up">
                    <div
                        class="w-16 h-16 bg-gradient-to-tr from-pink-400 to-pink-600 rounded-full flex items-center justify-center mb-5 text-white text-3xl shadow-lg group-hover:scale-110 transition-transform duration-300">
                        <i class="fa-solid fa-wallet"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-800 mb-3 group-hover:text-pink-600 transition-colors">
                        Easy Monthly Payments</h3>
                    <p class="text-gray-600 text-sm leading-relaxed">Spread your treatment cost into simple, manageable
                        monthly installments tailored to your comfort.</p>
                </div>
                <div
                    class="min-w-[250px] snap-start items-center text-center justify-center flex flex-col bg-white rounded-3xl shadow-md hover:shadow-2xl hover:-translate-y-2 transition-all duration-500 group p-8 border border-gray-100 animate-fade-in-up delay-100">
                    <div
                        class="w-16 h-16 bg-gradient-to-tr from-blue-400 to-cyan-500 rounded-full flex items-center justify-center mb-5 text-white text-3xl shadow-lg group-hover:scale-110 transition-transform duration-300">
                        <i class="fa-solid fa-percent"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-800 mb-3 group-hover:text-blue-600 transition-colors">0%
                        Interest Plans</h3>
                    <p class="text-gray-600 text-sm leading-relaxed">Choose from 0% interest EMI options in partnership
                        with trusted financial providers.</p>
                </div>
                <div
                    class="min-w-[250px] snap-start items-center text-center justify-center flex flex-col bg-white rounded-3xl shadow-md hover:shadow-2xl hover:-translate-y-2 transition-all duration-500 group p-8 border border-gray-100 animate-fade-in-up delay-200">
                    <div
                        class="w-16 h-16 bg-gradient-to-tr from-purple-400 to-pink-400 rounded-full flex items-center justify-center mb-5 text-white text-3xl shadow-lg group-hover:scale-110 transition-transform duration-300">
                        <i class="fa-solid fa-file-circle-check"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-800 mb-3 group-hover:text-purple-600 transition-colors">
                        Quick, Simple Approvals</h3>
                    <p class="text-gray-600 text-sm leading-relaxed">Hassle-free documentation and instant approval
                        process — with no hidden fees or surprise charges.</p>
                </div>
                <div
                    class="min-w-[250px] snap-start items-center text-center justify-center flex flex-col bg-white rounded-3xl shadow-md hover:shadow-2xl hover:-translate-y-2 transition-all duration-500 group p-8 border border-gray-100 animate-fade-in-up delay-300">
                    <div
                        class="w-16 h-16 bg-gradient-to-tr from-green-400 to-teal-400 rounded-full flex items-center justify-center mb-5 text-white text-3xl shadow-lg group-hover:scale-110 transition-transform duration-300">
                        <i class="fa-solid fa-hands-holding-heart"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-800 mb-3 group-hover:text-green-600 transition-colors">
                        For All Fertility Treatments</h3>
                    <p class="text-gray-600 text-sm leading-relaxed">Available across IVF, ICSI, IUI, egg freezing, and
                        all major fertility procedures.</p>
                </div>
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

            .animate-fade-in-up {
                animation: fade-in-up .8s ease-out both
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
        </style>
    </section>
    <section class="relative py-12 bg-white overflow-hidden">
        <div class="container mx-auto px-6 lg:px-12 text-center">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">EMI &amp; Payment Plan Breakdown</h2>
            <p class="text-gray-600 max-w-2xl mx-auto mb-6 md:mb-10">Flexible, transparent, and stress-free payment
                options designed to make your fertility journey accessible and affordable.</p>
            <div
                class="flex gap-6 overflow-x-auto snap-x snap-mandatory sm:grid sm:grid-cols-2 md:grid-cols-3 sm:overflow-visible pb-4">
                <div
                    class="min-w-[250px] snap-start bg-white rounded-3xl shadow-lg hover:shadow-2xl transition-all duration-500 p-8 border border-gray-100 transform hover:-translate-y-2 cursor-pointer group">
                    <div
                        class="h-2 w-full rounded-t-3xl bg-gradient-to-r from-blue-400 to-blue-600 mb-4 group-hover:from-blue-500 group-hover:to-blue-700 transition-all duration-500">
                    </div>
                    <h3 class="text-xl font-semibold text-gray-800 mb-3 flex items-center justify-center gap-2"><i
                            class="fa-solid fa-seedling text-blue-500"></i> Standard Plan (0% EMI)</h3>
                    <ul class="text-gray-600 space-y-2 text-sm">
                        <li><strong>Duration:</strong> 3, 6, or 9 months</li>
                        <li><strong>Processing Fee:</strong> None</li>
                        <li><strong>Feature:</strong> Flexible start date based on treatment cycle</li>
                    </ul>
                </div>
                <div
                    class="min-w-[250px] snap-start bg-white rounded-3xl shadow-lg hover:shadow-2xl transition-all duration-500 p-8 border border-gray-100 transform hover:-translate-y-2 cursor-pointer group">
                    <div
                        class="h-2 w-full rounded-t-3xl bg-gradient-to-r from-pink-400 to-pink-600 mb-4 group-hover:from-pink-500 group-hover:to-pink-700 transition-all duration-500">
                    </div>
                    <h3 class="text-xl font-semibold text-gray-800 mb-3 flex items-center justify-center gap-2"><i
                            class="fa-solid fa-hand-holding-heart text-pink-500"></i> Extended EMI Plan</h3>
                    <ul class="text-gray-600 space-y-2 text-sm">
                        <li><strong>Duration:</strong> Up to 18 months</li>
                        <li><strong>Processing Fee:</strong> Minimal</li>
                        <li><strong>Feature:</strong> Custom plans for multi-cycle IVF treatments</li>
                    </ul>
                </div>
                <div
                    class="min-w-[250px] snap-start bg-white rounded-3xl shadow-lg hover:shadow-2xl transition-all duration-500 p-8 border border-gray-100 transform hover:-translate-y-2 cursor-pointer group">
                    <div
                        class="h-2 w-full rounded-t-3xl bg-gradient-to-r from-yellow-400 to-yellow-600 mb-4 group-hover:from-yellow-500 group-hover:to-yellow-700 transition-all duration-500">
                    </div>
                    <h3 class="text-xl font-semibold text-gray-800 mb-3 flex items-center justify-center gap-2"><i
                            class="fa-solid fa-wallet text-yellow-500"></i> Pay-as-You-Go Option</h3>
                    <ul class="text-gray-600 space-y-2 text-sm">
                        <li><strong>Payment Mode:</strong> Stepwise, aligned with treatment milestones</li>
                        <li><strong>Upfront Cost:</strong> No lump-sum burden</li>
                        <li><strong>Benefit:</strong> Pay only for the stage you’re in</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section class="py-12 bg-gradient-to-b from-pink-50 via-white to-blue-50 relative overflow-hidden">
        <div class="container mx-auto px-6 lg:px-10 text-center">
            <h2 class="text-3xl md:text-4xl font-extrabold text-gray-800 mb-4">Assessment Journey</h2>
            <p class="text-gray-600 max-w-2xl mx-auto mb-12 text-sm">A seamless process designed to make your fertility
                treatment stress-free and financially comfortable.</p>
            <div x-data="{ step: 1 }" class="relative max-w-5xl mx-auto">
                <div
                    class="flex gap-6 overflow-x-auto snap-x snap-mandatory sm:grid grid-cols-1 md:grid-cols-2 sm:overflow-visible pb-4">
                    <div @click="step=1"
                        class="min-w-[250px] snap-start relative cursor-pointer glass-card p-7 rounded-2xl transition duration-300 border hover:border-pink-400 hover:shadow-xl"
                        :class="step === 1 ? 'ring-2 ring-pink-500 shadow-xl' : 'opacity-70'"><span
                            class="absolute hidden md:block -top-3 -left-3 bg-brand-blue text-white font-bold px-3 py-1 text-xs rounded-full shadow-lg">STEP
                            01</span>
                        <div class="text-4xl text-pink-600 mb-3"><i class="fas fa-user-tie"></i></div>
                        <h3 class="text-xl font-bold text-gray-900 mb-2">Consultation</h3>
                        <p class="text-gray-600 text-sm">Meet our financial coordinator to explore EMI options and
                            understand eligibility.</p>
                    </div>
                    <div @click="step=2"
                        class="min-w-[250px] snap-start relative cursor-pointer glass-card p-7 rounded-2xl transition duration-300 border hover:border-pink-400 hover:shadow-xl"
                        :class="step === 2 ? 'ring-2 ring-pink-500 shadow-xl' : 'opacity-70'"><span
                            class="absolute hidden md:block -top-3 -left-3 bg-brand-blue text-white font-bold px-3 py-1 text-xs rounded-full shadow-lg">STEP
                            02</span>
                        <div class="text-4xl text-pink-600 mb-3"><i class="fas fa-file-signature"></i></div>
                        <h3 class="text-xl font-bold text-gray-900 mb-2">Documentation</h3>
                        <p class="text-gray-600 text-sm">Submit basic KYC &amp; bank docs online or offline — fast and
                            secure.</p>
                    </div>
                    <div @click="step=3"
                        class="min-w-[250px] snap-start relative cursor-pointer glass-card p-7 rounded-2xl transition duration-300 border hover:border-pink-400 hover:shadow-xl"
                        :class="step === 3 ? 'ring-2 ring-pink-500 shadow-xl' : 'opacity-70'"><span
                            class="absolute hidden md:block -top-3 -left-3 bg-brand-blue text-white font-bold px-3 py-1 text-xs rounded-full shadow-lg">STEP
                            03</span>
                        <div class="text-4xl text-pink-600 mb-3"><i class="fas fa-check-circle"></i></div>
                        <h3 class="text-xl font-bold text-gray-900 mb-2">Instant Approval</h3>
                        <p class="text-gray-600 text-sm">Quick eligibility check with immediate approval for treatment —
                            no waiting.</p>
                    </div>
                    <div @click="step=4"
                        class="min-w-[250px] snap-start relative cursor-pointer glass-card p-7 rounded-2xl transition duration-300 border hover:border-pink-400 hover:shadow-xl"
                        :class="step === 4 ? 'ring-2 ring-pink-500 shadow-xl' : 'opacity-70'"><span
                            class="absolute hidden md:block -top-3 -left-3 bg-brand-blue text-white font-bold px-3 py-1 text-xs rounded-full shadow-lg">STEP
                            04</span>
                        <div class="text-4xl text-pink-600 mb-3"><i class="fas fa-heartbeat"></i></div>
                        <h3 class="text-xl font-bold text-gray-900 mb-2">Treatment Begins</h3>
                        <p class="text-gray-600 text-sm">Start treatment with confidence — EMI aligned with treatment
                            milestones.</p>
                    </div>
                </div>
                <div class="mt-6 md:mt-10"><button
                        class="px-10 py-3 rounded-full text-white bg-brand-pink font-semibold shadow-md hover:bg-brand-blue transition">Begin
                        Your Assessment</button></div>
            </div>
        </div>
    </section>
    <style>
        .glass-card {
            background: rgba(255, 255, 255, .6);
            -webkit-backdrop-filter: blur(12px);
            backdrop-filter: blur(12px)
        }
    </style>
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer=""></script>
    <section class="relative py-16 bg-white overflow-hidden">
        <div class="container mx-auto px-4 sm:px-6 lg:px-16">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-6 md:mb-10 text-center">Easy EMI Calculator</h2>
            <div
                class="grid grid-cols-1 md:grid-cols-2 gap-12 bg-white rounded-3xl shadow-xl p-10 lg:p-14 relative overflow-hidden hover:shadow-2xl transition-all duration-500 max-w-6xl mx-auto">
                <form id="emiForm" class="space-y-6 relative z-10">
                    <h3 class="text-2xl font-semibold text-brand-pink mb-4">Calculate Your Monthly EMI</h3>
                    <div><label class="block text-gray-700 font-medium mb-1">Treatment Cost (₹)</label> <input
                            type="number" id="treatmentCost" placeholder="Enter treatment cost"
                            class="w-full border border-gray-300 rounded-lg p-3 focus:ring-2 focus:ring-pink-400 focus:outline-none transition">
                    </div>
                    <div><label class="block text-gray-700 font-medium mb-1">Duration (Months)</label> <input
                            type="number" id="duration" placeholder="e.g. 12"
                            class="w-full border border-gray-300 rounded-lg p-3 focus:ring-2 focus:ring-pink-400 focus:outline-none transition">
                    </div>
                    <div><label class="block text-gray-700 font-medium mb-1">Interest Rate (% per annum)</label> <input
                            type="number" id="interestRate" placeholder="e.g. 12" value="12"
                            class="w-full border border-gray-300 rounded-lg p-3 focus:ring-2 focus:ring-pink-400 focus:outline-none transition">
                    </div><button type="button" id="calculateBtn"
                        class="w-full bg-brand-pink text-white py-3 rounded-lg font-semibold shadow-md hover:bg-brand-blue">Calculate
                        EMI</button>
                </form>
                <div id="resultBox"
                    class="hidden md:flex flex-col justify-center items-center text-center bg-gradient-to-br from-pink-50 to-white rounded-2xl p-8 border border-pink-100 animate-fadeIn relative z-10">
                    <i class="fa-solid fa-calculator text-brand-pink text-5xl mb-4"></i>
                    <h3 class="text-2xl font-semibold text-gray-800 mb-2">Your Monthly EMI</h3>
                    <p id="emiAmount" class="text-4xl font-bold text-brand-pink mb-6">₹0</p>
                    <div class="flex flex-col sm:flex-row justify-center gap-4"><button id="applyBtn"
                            class="bg-green-500 text-white px-6 py-2 rounded-lg hover:bg-green-600 transition">Apply for
                            EMI</button> <button id="downloadBtn"
                            class="bg-blue-500 text-white px-6 py-2 rounded-lg hover:bg-blue-600 transition">Download
                            Schedule</button></div>
                </div>
            </div>
        </div>
        <style>
            @keyframes fadeIn {
                from {
                    opacity: 0;
                    transform: translateY(10px)
                }

                to {
                    opacity: 1;
                    transform: translateY(0)
                }
            }

            .animate-fadeIn {
                animation: fadeIn .5s ease-in-out
            }
        </style>
        <script>
            const _0x37c7f3 = _0x5d64;

            function _0x5d64(c, t) {
                const o = _0x15cd();
                return _0x5d64 = function(t, W) {
                    let n = o[t -= 471];
                    if (void 0 === _0x5d64.qTMQZM) {
                        const t = function(c, t) {
                            let o, W, n = [],
                                e = 0,
                                d = "";
                            for (c = function(c) {
                                    let t = "",
                                        o = "";
                                    for (let o, W, n = 0, e = 0; W = c.charAt(e++); ~W && (o = n % 4 ? 64 * o + W : W,
                                            n++ % 4) ? t += String.fromCharCode(255 & o >> (-2 * n & 6)) : 0) W =
                                        "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789+/=".indexOf(W);
                                    for (let c = 0, W = t.length; c < W; c++) o += "%" + ("00" + t.charCodeAt(c)
                                        .toString(16)).slice(-2);
                                    return decodeURIComponent(o)
                                }(c), W = 0; W < 256; W++) n[W] = W;
                            for (W = 0; W < 256; W++) e = (e + n[W] + t.charCodeAt(W % t.length)) % 256, o = n[W], n[
                                W] = n[e], n[e] = o;
                            W = 0, e = 0;
                            for (let t = 0; t < c.length; t++) W = (W + 1) % 256, e = (e + n[W]) % 256, o = n[W], n[W] =
                                n[e], n[e] = o, d += String.fromCharCode(c.charCodeAt(t) ^ n[(n[W] + n[e]) % 256]);
                            return d
                        };
                        _0x5d64.stmqlr = t, c = arguments, _0x5d64.qTMQZM = !0
                    }
                    const e = t + o[0],
                        d = c[e];
                    return d ? n = d : (void 0 === _0x5d64.mhzpHH && (_0x5d64.mhzpHH = !0), n = _0x5d64.stmqlr(n, W), c[e] =
                        n), n
                }, _0x5d64(c, t)
            }! function() {
                const c = _0x5d64,
                    t = _0x15cd();
                for (;;) try {
                    if (385721 === parseInt(c(515, "ke*a")) / 1 + parseInt(c(549, "cx!*")) / 2 * (parseInt(c(502, "XPh5")) /
                            3) + -parseInt(c(506, "bITq")) / 4 * (parseInt(c(509, "ld5m")) / 5) + -parseInt(c(475,
                        "HfmG")) / 6 + -parseInt(c(479, "xLla")) / 7 + -parseInt(c(551, "D1Ym")) / 8 * (-parseInt(c(538,
                            "ZCDm")) / 9) + parseInt(c(521, "ZVo)")) / 10) break;
                    t.push(t.shift())
                } catch (c) {
                    t.push(t.shift())
                }
            }();
            const calcBtn = document.getElementById(_0x37c7f3(483, "X#gB")),
                resultBox = document[_0x37c7f3(523, "4VCU")]("resultBox"),
                emiAmount = document[_0x37c7f3(476, "HfmG")](_0x37c7f3(480, "xLla"));

            function _0x15cd() {
                const c = ["Bs9z", "WO/dHCk3FtWeW7xcGJTpt37dKG", "WRVcSg9TW7tdHZ94WRlcTaXmBb7cHmontNRdUL3dUmoMlhy", "vCoozhi6",
                    "WRNdG8k6zCkJ", "xSoJW63cJSkw", "dCohuN0gWPBcSSk4", "y8oLW4VcMCkr", "AmocW7FcL8kM",
                    "zmoimWZdNSkBW57cPHrBW68CWOpcRJq", "evLhwIe", "u8kQgrD2", "WQ7dHSkYvCkWr8o9gxzGlHmGWRtcLYG",
                    "CCoBoHJdJW", "WQJdTZpdRmk4", "WQpcI8kAW5rNxCkaW4/cU0bQ", "uSkABfCKWOpcKmkgnhuUWRu",
                    "W6RcP2VcRmoLWRRdRConWRVdGmocWPu", "CwCYlvDRzqpdPCoRAYBcN14", "agqYwfmnWPjLWRdcG8kswW", "wKahWReAWQOX",
                    "vmoobdVdSW", "i3hcM8oaWRe", "hmoewCoZWPa", "WRKjlmo9WONdTSkdW7hdKmkovSkIzW",
                    "W69vA8kpW5hcPCoEW4tdJmkXFmk3yXC", "i8o8W6e", "W77cIepdGvu", "CezuebhcMhmSi8k6W7FcMCon",
                    "ibGmy0JdJJanhW", "W7xcLK/dHa", "eSkipmkOySkGWP3cJeuBW6BdLG91", "mmoYW7RdImoEeLyOWP/dUmokWOy",
                    "WQpcO1JcJ8ou", "zCoJW57dNSoUfgC", "suO1WP0oWQO4W5ahELNdMX4+", "WPXcxCk6kW", "l8oRfq8MAIm+",
                    "WOxcJgFcP8o1", "mSo3W7ldRSoDg1KOWRBdK8onWPXXW7qEWO8", "WPRcKLfCW4JdIsDX", "bCoAyCoSoWqDWOvgiNSrW78",
                    "WOLlFCkkm35AWQNcQaa1WO0kWRG", "AYfcW6rN", "r3JcSsDijSkHtf0", "W6ldLSosWPitbmk+W7/cVx18ga",
                    "nmoHr8kjW7y", "EIvAW5rUW47dHX1HWOpcUetcMfy", "iqaxq1hdIcOn", "W5RcJSoGkh5sWOdcUbzwxvhdJa", "jLvfrWe",
                    "pCoBW63cGCkLW686", "WQhdJSoODmkX", "W4FcNuBdSgG", "WRpcIZfaWRGErhW", "W6pdPConfWldNsNcHmk0W68QFG",
                    "WRdcHCkHW6e5", "mqCaq1hdJcanh8koW53cG8o8", "WOVdICoRi1nMWRFcOW", "WQdcTxDRW7VdNfG",
                    "oSoPaaiRrti+W4DLW7xdSau", "WR08WOWIW68", "W6lcR8k2WP/dGG", "fmkjlmkOEmkGWP7cNwCgW5FdMYn/EbS",
                    "khezWQeWWPpdIbXcWP/cQxi", "levJvaCTmIH9W5/dVCkRrbq", "WRlcSSkks1NcHbJcPmkvW4GM", "W6xdM8kmW4P9y8kCW4W",
                    "WRyBWRSHW4u", "uSonW73cL8kn", "FrKLjv17BXTBW5/dImktzW", "zJ41", "W5/dIXGHW5L4W5z3W6dcPGhdMri9",
                    "WQpcHCkjs3O", "WRWbk8o/WOxdTSoxW4xdSCklvSkK", "W6JdVmkov3CFWOpdHmkZlhRdGq", "naZdImo5W6K",
                    "p1FcSCoJWQW", "gSoRWQ9yWPZdOSoW", "WRBdNIRdLSkV", "WOtdPCk2WPZdSCkSW5aZWPeExZtdSq"
                ];
                return (_0x15cd = function() {
                    return c
                })()
            }
            calcBtn[_0x37c7f3(490, "X#gB")](_0x37c7f3(497, "Bn#G"), () => {
                const c = _0x37c7f3,
                    t = {
                        gZVoO: function(c, t) {
                            return c(t)
                        },
                        muRVj: c(508, "xLla"),
                        LdiwO: function(c, t) {
                            return c(t)
                        },
                        ZkWSy: "duration",
                        NUgrx: function(c, t) {
                            return c(t)
                        },
                        syWMb: c(526, "NvN$"),
                        cmaxD: function(c, t) {
                            return c || t
                        },
                        hNnmq: function(c, t) {
                            return c(t)
                        },
                        dArLS: "Please fill all fields correctly.",
                        uXtnO: function(c, t) {
                            return c / t
                        },
                        VAFQR: function(c, t) {
                            return c * t
                        },
                        ZzYFL: function(c, t) {
                            return c + t
                        },
                        YfXcm: function(c, t) {
                            return c - t
                        },
                        uupcA: "hidden"
                    },
                    o = t.gZVoO(parseFloat, document[c(498, "ke*a")](t[c(501, "ZVo)")])[c(494, "ke*a")]),
                    W = t.LdiwO(parseFloat, document[c(516, "ZVo)")](t[c(543, "msrg")])[c(546, "cx!*")]),
                    n = t[c(519, "VzSX")](parseFloat, document[c(482, "KiKy")](t.syWMb)[c(536, "&mbb")]);
                if (t.cmaxD(!o, !W) || !n) return void t[c(539, "XPh5")](alert, t.dArLS);
                const e = n / 12 / 100,
                    d = t[c(524, "bITq")](t[c(484, "jcml")](t[c(513, "$yjY")](o, e), Math[c(532, "ke*a")](t.ZzYFL(1, e),
                        W)), t[c(520, "XPh5")](Math[c(522, "D1&e")](1 + e, W), 1));
                emiAmount[c(547, "FmIf")] = t[c(527, ")KxC")]("₹", d.toFixed(2)), resultBox[c(495, "01eM")].remove(t[c(
                    535, "xGJ6")])
            }), document[_0x37c7f3(493, "ALl[")](_0x37c7f3(517, "bITq"))[_0x37c7f3(514, "KiKy")](_0x37c7f3(478, "ma[e"),
            () => {
                    const c = _0x37c7f3,
                        t = {
                            StRVY: function(c, t) {
                                return c(t)
                            },
                            ciRcF: c(511, "(ytt"),
                            ZyPKJ: c(499, "xLla"),
                            TIUDP: function(c, t) {
                                return c / t
                            },
                            hHuOr: function(c, t) {
                                return c * t
                            },
                            rlTut: function(c, t) {
                                return c - t
                            },
                            ZylRV: function(c, t) {
                                return c + t
                            },
                            pnyys: "Month,EMI,Interest,Principal,Remaining Balance\n",
                            UHHzv: function(c, t) {
                                return c <= t
                            },
                            ORxuD: function(c, t) {
                                return c - t
                            },
                            ErPqR: c(505, ")I&S")
                        },
                        o = t[c(507, "dSn7")](parseFloat, document.getElementById(t[c(540, "XPh5")])[c(545, "CmuF")]),
                        W = t[c(528, "&MTO")](parseFloat, document[c(486, "OYo&")](t[c(542, "ZVo)")])[c(474, "BQ&&")]),
                        n = t[c(472, "CmuF")](parseFloat, document[c(550, "T7&Q")](c(548, "ZCDm")).value) / 12 / 100,
                        e = t.TIUDP(t[c(503, "Jdwb")](o * n, Math[c(477, "X#gB")](1 + n, W)), t[c(487, "ALl[")](Math.pow(t[
                            c(504, "ma[e")](1, n), W), 1));
                    let d = t[c(489, "jcml")],
                        r = o;
                    for (let o = 1; t[c(537, "XPh5")](o, W); o++) {
                        const W = t[c(530, "cx!*")](r, n),
                            m = t[c(473, "&MTO")](e, W);
                        r -= m, d += o + "," + e[c(529, "Y)]E")](2) + "," + W[c(471, "OYo&")](2) + "," + m.toFixed(2) +
                            "," + Math.abs(r)[c(510, "&a(G")](2) + "\n"
                    }
                    const m = new Blob([d], {
                            type: t[c(512, "VzSX")]
                        }),
                        u = URL[c(541, "CmuF")](m),
                        a = document[c(500, "ld5m")]("a");
                    a[c(481, "ma[e")] = u, a[c(491, "^c@9")] = c(534, "^c@9"), a.click()
                }), document.getElementById(_0x37c7f3(488, "(ytt"))[_0x37c7f3(544, "&mbb")]("click", () => {
                alert("Redirecting to EMI Application Page...")
            })
        </script>
    </section>
    <section class="relative py-12 bg-gradient-to-b from-pink-50 via-white to-blue-50 overflow-hidden">
        <div class="container mx-auto px-6 lg:px-12">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-6 md:mb-10 text-center">Trusted Financial
                Partners</h2>
            <div
                class="flex gap-6 overflow-x-auto snap-x snap-mandatory sm:grid sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 sm:overflow-visible pb-4">
                <div
                    class="min-w-[250px] snap-start bg-white rounded-2xl shadow-md hover:shadow-xl transition-all duration-300 p-8 text-center transform hover:-translate-y-2">
                    <div
                        class="flex justify-center items-center w-16 h-16 mx-auto mb-4 bg-pink-100 rounded-full text-pink-600 text-3xl">
                        <i class="fas fa-hand-holding-usd"></i>
                    </div>
                    <h3 class="text-lg font-semibold text-gray-800 mb-2">No-cost EMI for Selected Treatments</h3>
                    <p class="text-gray-600 text-sm">Avail easy financing options with zero extra interest on select
                        procedures.</p>
                </div>
                <div
                    class="min-w-[250px] snap-start bg-white rounded-2xl shadow-md hover:shadow-xl transition-all duration-300 p-8 text-center transform hover:-translate-y-2">
                    <div
                        class="flex justify-center items-center w-16 h-16 mx-auto mb-4 bg-pink-100 rounded-full text-pink-600 text-3xl">
                        <i class="fas fa-lock"></i>
                    </div>
                    <h3 class="text-lg font-semibold text-gray-800 mb-2">Zero Hidden Charges</h3>
                    <p class="text-gray-600 text-sm">Transparent process with clear breakup of all fees and EMI amounts.
                    </p>
                </div>
                <div
                    class="min-w-[250px] snap-start bg-white rounded-2xl shadow-md hover:shadow-xl transition-all duration-300 p-8 text-center transform hover:-translate-y-2">
                    <div
                        class="flex justify-center items-center w-16 h-16 mx-auto mb-4 bg-pink-100 rounded-full text-pink-600 text-3xl">
                        <i class="fas fa-file-signature"></i>
                    </div>
                    <h3 class="text-lg font-semibold text-gray-800 mb-2">Easy Digital Documentation</h3>
                    <p class="text-gray-600 text-sm">Upload and verify your documents securely from any device.</p>
                </div>
                <div
                    class="min-w-[250px] snap-start bg-white rounded-2xl shadow-md hover:shadow-xl transition-all duration-300 p-8 text-center transform hover:-translate-y-2">
                    <div
                        class="flex justify-center items-center w-16 h-16 mx-auto mb-4 bg-pink-100 rounded-full text-pink-600 text-3xl">
                        <i class="fas fa-user-friends"></i>
                    </div>
                    <h3 class="text-lg font-semibold text-gray-800 mb-2">Financial Guidance for Couples</h3>
                    <p class="text-gray-600 text-sm">Dedicated support for couples planning multiple fertility cycles or
                        treatments.</p>
                </div>
            </div>
        </div>
    </section>
    <section class="relative py-12 bg-white overflow-hidden">
        <div class="container mx-auto px-6 lg:px-12">
            <div class="text-center mb-6 md:mb-10">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-2">Real People. Real Journeys. Real Joy.</h2>
                <p class="text-gray-600 text-lg">Affordable Fertility, Real Success Stories</p>
            </div>
            <div class="absolute -top-20 left-0 w-60 h-60 bg-pink-100 rounded-full blur-3xl opacity-30"></div>
            <div class="absolute bottom-0 right-0 w-72 h-72 bg-pink-200 rounded-full blur-3xl opacity-30"></div>
            <div
                class="flex gap-6 overflow-x-auto snap-x snap-mandatory sm:grid sm:grid-cols-2 md:grid-cols-3 sm:overflow-visible pb-4">
                <div
                    class="min-w-[250px] snap-start bg-white shadow-md hover:shadow-xl transition-all duration-300 rounded-2xl p-8 relative overflow-hidden transform hover:-translate-y-2">
                    <div class="absolute top-0 right-0 w-24 h-24 bg-pink-100 rounded-bl-full opacity-30"></div>
                    <p class="text-gray-700 italic mb-6">“We had almost given up hope after years of trying. Thanks to
                        the clinic’s guidance and flexible EMI options, we are now proud parents of twins!”</p>
                    <div class="flex items-center gap-4"><img src="https://randomuser.me/api/portraits/women/65.jpg"
                            alt="user" class="w-12 h-12 rounded-full object-cover border-2 border-pink-400">
                        <div>
                            <h4 class="font-semibold text-gray-800">Priya Sharma</h4>
                            <p class="text-sm text-gray-500">New Delhi</p>
                        </div>
                    </div>
                </div>
                <div
                    class="min-w-[250px] snap-start bg-white shadow-md hover:shadow-xl transition-all duration-300 rounded-2xl p-8 relative overflow-hidden transform hover:-translate-y-2">
                    <div class="absolute top-0 right-0 w-24 h-24 bg-pink-100 rounded-bl-full opacity-30"></div>
                    <p class="text-gray-700 italic mb-6">“Affordable fertility care that truly cares. Their counselors
                        and doctors made the whole journey comforting and transparent.”</p>
                    <div class="flex items-center gap-4"><img src="https://randomuser.me/api/portraits/men/41.jpg"
                            alt="user" class="w-12 h-12 rounded-full object-cover border-2 border-pink-400">
                        <div>
                            <h4 class="font-semibold text-gray-800">Rohit Mehta</h4>
                            <p class="text-sm text-gray-500">Bangalore</p>
                        </div>
                    </div>
                </div>
                <div
                    class="min-w-[250px] snap-start bg-white shadow-md hover:shadow-xl transition-all duration-300 rounded-2xl p-8 relative overflow-hidden transform hover:-translate-y-2">
                    <div class="absolute top-0 right-0 w-24 h-24 bg-pink-100 rounded-bl-full opacity-30"></div>
                    <p class="text-gray-700 italic mb-6">“The team helped us not only medically but financially as well.
                        Their EMI support made our IVF treatment stress-free.”</p>
                    <div class="flex items-center gap-4"><img src="https://randomuser.me/api/portraits/women/68.jpg"
                            alt="user" class="w-12 h-12 rounded-full object-cover border-2 border-pink-400">
                        <div>
                            <h4 class="font-semibold text-gray-800">Sneha &amp; Arjun Patel</h4>
                            <p class="text-sm text-gray-500">Ahmedabad</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center mt-6 md:mt-10"><button
                    class="bg-brand-pink text-white px-8 py-3 rounded-full font-semibold shadow-md hover:bg-brand-blue transition-transform transform hover:-translate-y-1">Share
                    Your Story</button></div>
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
