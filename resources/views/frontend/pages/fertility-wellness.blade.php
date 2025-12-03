@extends('frontend.layouts.master')
@section('content')
    <section id="hero-section"
        class="relative bg-gradient-to-br from-[#20417e] via-[#2f4c8a] to-[#778aaf] text-white overflow-hidden py-12">
        <div class="absolute top-0 left-0 w-72 h-72 bg-pink-300/30 rounded-full blur-3xl opacity-30 animate-pulse">
        </div>
        <div class="absolute bottom-0 right-0 w-96 h-96 bg-blue-200/30 rounded-full blur-3xl opacity-30 animate-pulse">
        </div>
        <div
            class="container mx-auto px-6 lg:px-20 md:grid grid-cols-1 lg:grid-cols-2 gap-12 items-center relative z-10 flex flex-col-reverse">
            <div class="space-y-6 animate-fadeInUp text-center lg:text-left">
                <h1 class="text-4xl md:text-5xl font-extrabold leading-tight">Nurture Your, <span
                        class="text-pink-200">Fertility</span>,<br class="hidden md:block">Naturally</h1>
                <p class="text-lg md:text-xl text-blue-100 leading-relaxed">Comprehensive wellness programs to support
                    your reproductive health and overall well-being.</p><button
                    class="mt-4 inline-block bg-white text-[#20417e] font-semibold px-8 py-3 rounded-full shadow-lg hover:bg-pink-100 hover:scale-105 transition-all duration-300 ease-in-out">Start
                    Your Wellness Journey</button>
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
    <section class="relative py-12 bg-white overflow-hidden">
        <div class="container mx-auto px-6 lg:px-12 text-center relative z-10">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-16">Why <span class="text-brand-pink">Fertility
                    Wellness?</span></h2>
            <div
                class="flex gap-16 overflow-x-auto pt-6 md:pb-6 snap-x snap-mandatory sm:flex-wrap sm:overflow-visible md:justify-center">
                <div class="flex-shrink-0 group relative flex flex-col items-center cursor-pointer">
                    <div
                        class="w-32 h-32 rounded-full bg-gradient-to-tr from-pink-400 to-pink-200 flex items-center justify-center text-5xl text-white font-bold shadow-2xl transition-transform duration-500 hover:scale-125 animate-bounce-slow">
                        🩺</div>
                    <p
                        class="mt-4 text-xl font-semibold text-gray-700 group-hover:text-pink-600 transition-colors duration-300">
                        Expert Care</p>
                    <div class="w-48 text-sm">Personalized fertility guidance from top specialists.</div>
                </div>
                <div class="flex-shrink-0 group relative flex flex-col items-center cursor-pointer">
                    <div
                        class="w-32 h-32 rounded-full bg-gradient-to-tr from-green-400 to-green-200 flex items-center justify-center text-5xl text-white font-bold shadow-2xl transition-transform duration-500 hover:scale-125 animate-bounce-slow delay-200">
                        🌿</div>
                    <p
                        class="mt-4 text-xl font-semibold text-gray-700 group-hover:text-pink-600 transition-colors duration-300">
                        Holistic</p>
                    <div class="w-48 text-sm">Natural wellness approaches to support fertility journey.</div>
                </div>
                <div class="flex-shrink-0 group relative flex flex-col items-center cursor-pointer">
                    <div
                        class="w-32 h-32 rounded-full bg-gradient-to-tr from-blue-400 to-blue-200 flex items-center justify-center text-5xl text-white font-bold shadow-2xl transition-transform duration-500 hover:scale-125 animate-bounce-slow delay-400">
                        🧬</div>
                    <p
                        class="mt-4 text-xl font-semibold text-gray-700 group-hover:text-pink-600 transition-colors duration-300">
                        Innovation</p>
                    <div class="w-48 text-sm">Advanced IVF techniques and technology for best outcomes.</div>
                </div>
                <div class="flex-shrink-0 group relative flex flex-col items-center cursor-pointer">
                    <div
                        class="w-32 h-32 rounded-full bg-gradient-to-tr from-yellow-300 to-yellow-100 flex items-center justify-center text-5xl text-white font-bold shadow-2xl transition-transform duration-500 hover:scale-125 animate-bounce-slow delay-600">
                        💖</div>
                    <p
                        class="mt-4 text-xl font-semibold text-gray-700 group-hover:text-pink-600 transition-colors duration-300">
                        Compassion</p>
                    <div class="w-48 text-sm">Emotional support and care throughout your fertility journey.</div>
                </div>
            </div>
        </div>
    </section>
    <style>
        @keyframes float {

            0%,
            100% {
                transform: translateY(0)
            }

            50% {
                transform: translateY(-20px)
            }
        }

        .animate-floating-slow {
            animation: float 6s ease-in-out infinite
        }

        .animate-bounce-slow {
            animation: float 4s ease-in-out infinite
        }
    </style>
    <section class="relative bg-gradient-to-b from-pink-50 via-white to-blue-50 py-12 overflow-hidden">
        <div class="container mx-auto px-6">
            <div class="text-center mb-6 md:mb-10">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-800 leading-tight">Explore Our <span
                        class="text-brand-pink">Fertility Wellness Services</span></h2>
                <p class="text-gray-600 mt-4 text-lg max-w-2xl mx-auto">Our comprehensive range of fertility tests and
                    wellness services help you understand your reproductive health and take the right steps toward
                    parenthood.</p>
            </div>
            <div class="flex gap-6 overflow-x-auto no-scrollbar p-4 lg:grid lg:grid-cols-3 lg:gap-10 lg:px-12">
                <div
                    class="group flex-shrink-0 w-80 relative bg-white/60 backdrop-blur-lg rounded-3xl shadow-lg hover:shadow-2xl transition-all duration-500 p-4 border border-white/40 hover:-translate-y-2">
                    <div class="flex flex-col items-center text-center">
                        <div
                            class="w-16 h-16 flex items-center justify-center rounded-full bg-brand-pink text-white shadow-xl mb-6 group-hover:scale-110 transition-transform duration-300">
                            <i class="fa-solid fa-microscope text-2xl"></i></div>
                        <h3 class="text-xl font-semibold text-gray-800 mb-1">Fertility Tests &amp; Assessments</h3>
                        <p class="text-gray-600 mb-4 h-16 text-sm">Comprehensive fertility assessments for men and women
                        </p><a href="#"
                            class="text-brand-blue font-semibold hover:text-brand-pink transition-all duration-300">Explore
                            More <i class="fa-solid fa-arrow-right-long ml-2"></i></a>
                    </div>
                </div>
                <div
                    class="group flex-shrink-0 w-80 relative bg-white/60 backdrop-blur-lg rounded-3xl shadow-lg hover:shadow-2xl transition-all duration-500 p-4 border border-white/40 hover:-translate-y-2">
                    <div class="flex flex-col items-center text-center">
                        <div
                            class="w-16 h-16 flex items-center justify-center rounded-full bg-brand-pink text-white shadow-xl mb-6 group-hover:scale-110 transition-transform duration-300">
                            <i class="fa-solid fa-bowl-food text-2xl"></i></div>
                        <h3 class="text-xl font-semibold text-gray-800 mb-1">Fertility Diet &amp; Lifestyle Consultation
                        </h3>
                        <p class="text-gray-600 mb-4 h-16 text-sm">Personalized nutrition &amp; lifestyle guidance</p><a
                            href="#"
                            class="text-brand-blue font-semibold hover:text-brand-pink transition-all duration-300">Explore
                            More <i class="fa-solid fa-arrow-right-long ml-2"></i></a>
                    </div>
                </div>
                <div
                    class="group flex-shrink-0 w-80 relative bg-white/60 backdrop-blur-lg rounded-3xl shadow-lg hover:shadow-2xl transition-all duration-500 p-4 border border-white/40 hover:-translate-y-2">
                    <div class="flex flex-col items-center text-center">
                        <div
                            class="w-16 h-16 flex items-center justify-center rounded-full bg-brand-pink text-white shadow-xl mb-6 group-hover:scale-110 transition-transform duration-300">
                            <i class="fa-solid fa-leaf text-2xl"></i></div>
                        <h3 class="text-xl font-semibold text-gray-800 mb-1">Stress &amp; Mind-Body Support</h3>
                        <p class="text-gray-600 mb-4 h-16 text-sm">Yoga, mindfulness, and stress-reduction programs</p>
                        <a href="#"
                            class="text-brand-blue font-semibold hover:text-brand-pink transition-all duration-300">Explore
                            More <i class="fa-solid fa-arrow-right-long ml-2"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <style>
        .no-scrollbar::-webkit-scrollbar {
            display: none
        }

        .no-scrollbar {
            -ms-overflow-style: none;
            scrollbar-width: none
        }
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <section class="py-12 bg-white overflow-hidden">
        <div class="container mx-auto px-6 lg:px-12">
            <h2 class="text-3xl md:text-4xl font-bold text-center text-gray-800 mb-12">Fertility <span
                    class="text-brand-pink">Shop</span></h2>
            <div class="flex gap-4 overflow-x-auto no-scrollbar px-2 lg:grid lg:grid-cols-6 lg:gap-6 lg:px-0">
                <div class="flex-shrink-0 group cursor-pointer">
                    <div class="overflow-hidden rounded-xl shadow-lg"><img
                            src="https://images.pexels.com/photos/3683088/pexels-photo-3683088.jpeg" alt="Item 1"
                            class="w-full h-64 object-cover transition-transform duration-300 group-hover:scale-110">
                    </div>
                    <p class="text-center mt-2 text-gray-700 font-medium group-hover:text-brand-pink">Vitamins</p>
                </div>
                <div class="flex-shrink-0 group cursor-pointer">
                    <div class="overflow-hidden rounded-xl shadow-lg"><img
                            src="https://images.pexels.com/photos/7615574/pexels-photo-7615574.jpeg" alt="Item 2"
                            class="w-full h-64 object-cover transition-transform duration-300 group-hover:scale-110">
                    </div>
                    <p class="text-center mt-2 text-gray-700 font-medium group-hover:text-brand-pink">Supplements</p>
                </div>
                <div class="flex-shrink-0 group cursor-pointer">
                    <div class="overflow-hidden rounded-xl shadow-lg"><img
                            src="https://images.pexels.com/photos/5682707/pexels-photo-5682707.jpeg" alt="Item 3"
                            class="w-full h-64 object-cover transition-transform duration-300 group-hover:scale-110">
                    </div>
                    <p class="text-center mt-2 text-gray-700 font-medium group-hover:text-brand-pink">Oils</p>
                </div>
                <div class="flex-shrink-0 group cursor-pointer">
                    <div class="overflow-hidden rounded-xl shadow-lg"><img
                            src="https://images.pexels.com/photos/4871224/pexels-photo-4871224.jpeg" alt="Item 4"
                            class="w-full h-64 object-cover transition-transform duration-300 group-hover:scale-110">
                    </div>
                    <p class="text-center mt-2 text-gray-700 font-medium group-hover:text-brand-pink">Teas</p>
                </div>
                <div class="flex-shrink-0 group cursor-pointer">
                    <div class="overflow-hidden rounded-xl shadow-lg"><img
                            src="https://images.pexels.com/photos/159866/books-book-pages-read-literature-159866.jpeg"
                            alt="Item 5"
                            class="w-full h-64 object-cover transition-transform duration-300 group-hover:scale-110">
                    </div>
                    <p class="text-center mt-2 text-gray-700 font-medium group-hover:text-brand-pink">Books</p>
                </div>
                <div class="flex-shrink-0 group cursor-pointer">
                    <div class="overflow-hidden rounded-xl shadow-lg"><img
                            src="https://images.pexels.com/photos/5982313/pexels-photo-5982313.jpeg" alt="Item 6"
                            class="w-full h-64 object-cover transition-transform duration-300 group-hover:scale-110">
                    </div>
                    <p class="text-center mt-2 text-gray-700 font-medium group-hover:text-brand-pink">Kits</p>
                </div>
            </div>
        </div>
    </section>
    <style>
        .no-scrollbar::-webkit-scrollbar {
            display: none
        }

        .no-scrollbar {
            -ms-overflow-style: none;
            scrollbar-width: none
        }
    </style>
    <section class="relative py-12 bg-gradient-to-b from-pink-50 via-white to-blue-50 overflow-hidden">
        <div class="container mx-auto px-6 text-center relative z-10">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-800 leading-tight mb-6">Simple Steps to <span
                    class="text-brand-pink">Preserve Your Fertility</span></h2>
            <p class="text-gray-600 text-lg max-w-3xl mx-auto animate-fadeInUp delay-150">Begin your journey with expert
                fertility specialists who truly understand your hopes and challenges. From diagnosis to treatment, we’re
                with you — every single step of the way.</p><img src="Assessment.png" alt="consultation"
                class="mx-auto mb-2 transform-scale-90 w-[70%] mt-8">
        </div>
    </section>
    <section class="py-12 bg-white">
        <div class="container mx-auto px-6 lg:px-12">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-800 text-center mb-10">Why <span
                    class="text-brand-pink">Fertility Wellness</span> Matters</h2>
            <div class="flex gap-8 overflow-x-auto pb-4 sm:grid sm:grid-cols-2 lg:grid-cols-4 sm:overflow-visible">
                <div class="flex flex-col items-center min-w-[180px] sm:min-w-0"><img
                        src="https://img.icons8.com/?size=100&amp;id=ddggfpNqqC8C&amp;format=png&amp;color=000000"
                        alt="Fertility Potential" class="mb-4 h-12">
                    <h3 class="font-semibold text-lg text-gray-800 mb-2 text-center">Fertility Potential</h3>
                </div>
                <div class="flex flex-col items-center min-w-[180px] sm:min-w-0"><img
                        src="https://img.icons8.com/?size=100&amp;id=eGc97b6eA0zS&amp;format=png&amp;color=000000"
                        alt="Balanced Mind" class="mb-4 h-12">
                    <h3 class="font-semibold text-lg text-gray-800 mb-2 text-center">Balanced Mind &amp; Body</h3>
                </div>
                <div class="flex flex-col items-center min-w-[180px] sm:min-w-0"><img
                        src="https://img.icons8.com/?size=100&amp;id=dBmKhyC3hEFd&amp;format=png&amp;color=000000"
                        alt="Healthy Lifestyle" class="mb-4 h-12">
                    <h3 class="font-semibold text-lg text-gray-800 mb-2 text-center">Healthy Lifestyle</h3>
                </div>
                <div class="flex flex-col items-center min-w-[180px] sm:min-w-0"><img
                        src="https://img.icons8.com/?size=100&amp;id=o70PP4TWOG6T&amp;format=png&amp;color=000000"
                        alt="Personalized Advice" class="mb-4 h-12">
                    <h3 class="font-semibold text-lg text-gray-800 mb-2 text-center">Personalized Advice</h3>
                </div>
            </div>
        </div>
    </section>
    <section id="learn-fertility"
        class="relative py-12 bg-gradient-to-b from-pink-50 via-white to-blue-50 overflow-hidden">
        <div class="container mx-auto px-6 lg:px-16 relative z-10">
            <div class="text-center mb-8 max-w-3xl mx-auto">
                <h2 class="text-3xl md:text-4xl font-extrabold text-gray-800 leading-tight mb-4">Learn About <span
                        class="bg-gradient-to-r from-pink-500 to-blue-500 bg-clip-text text-transparent">Fertility</span>
                </h2>
                <p class="text-gray-600 text-lg">Explore trusted insights and expert guidance on fertility, reproductive
                    health, and IVF care from our specialists.</p>
            </div>
            <div
                class="flex flex-nowrap overflow-x-auto snap-x snap-mandatory md:grid md:grid-cols-3 md:overflow-visible gap-10 pb-4 scrollbar-hide">
                <div
                    class="min-w-[80%] md:min-w-0 snap-start bg-white rounded-3xl shadow-lg overflow-hidden group hover:shadow-2xl hover:-translate-y-2 transition-all duration-500">
                    <div class="relative"><img src="https://images.unsplash.com/photo-1579154204601-01588f351e67"
                            alt="Fertility Basics"
                            class="w-full h-64 object-cover group-hover:scale-105 transition-transform duration-500">
                        <div class="absolute inset-0 bg-gradient-to-t from-gray-900/60 to-transparent"></div><span
                            class="absolute bottom-4 left-4 bg-pink-500 text-white text-xs px-3 py-1 rounded-full">Fertility
                            Basics</span>
                    </div>
                    <div class="p-6">
                        <h3
                            class="text-xl font-semibold text-gray-800 mb-3 group-hover:text-pink-600 transition-colors duration-300">
                            Understanding Your Fertility Journey</h3>
                        <p class="text-gray-600 text-sm mb-5">Learn how fertility works, what factors influence it, and
                            the first steps toward seeking support.</p><a href="#"
                            class="inline-flex items-center text-pink-600 font-medium hover:text-pink-700">Read More
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7">
                                </path>
                            </svg></a>
                    </div>
                </div>
                <div
                    class="min-w-[80%] md:min-w-0 snap-start bg-white rounded-3xl shadow-lg overflow-hidden group hover:shadow-2xl hover:-translate-y-2 transition-all duration-500">
                    <div class="relative"><img src="https://images.unsplash.com/photo-1582719478250-c89cae4dc85b"
                            alt="IVF Explained"
                            class="w-full h-64 object-cover group-hover:scale-105 transition-transform duration-500">
                        <div class="absolute inset-0 bg-gradient-to-t from-gray-900/60 to-transparent"></div><span
                            class="absolute bottom-4 left-4 bg-blue-500 text-white text-xs px-3 py-1 rounded-full">IVF
                            Insights</span>
                    </div>
                    <div class="p-6">
                        <h3
                            class="text-xl font-semibold text-gray-800 mb-3 group-hover:text-blue-600 transition-colors duration-300">
                            What to Expect During IVF Treatment</h3>
                        <p class="text-gray-600 text-sm mb-5">Discover how IVF works, the stages of treatment, and how
                            to prepare emotionally and physically.</p><a href="#"
                            class="inline-flex items-center text-blue-600 font-medium hover:text-blue-700">Read More
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7">
                                </path>
                            </svg></a>
                    </div>
                </div>
                <div
                    class="min-w-[80%] md:min-w-0 snap-start bg-white rounded-3xl shadow-lg overflow-hidden group hover:shadow-2xl hover:-translate-y-2 transition-all duration-500">
                    <div class="relative"><img src="https://images.unsplash.com/photo-1573497019939-60a3a9736dcf"
                            alt="Fertility Lifestyle"
                            class="w-full h-64 object-cover group-hover:scale-105 transition-transform duration-500">
                        <div class="absolute inset-0 bg-gradient-to-t from-gray-900/60 to-transparent"></div><span
                            class="absolute bottom-4 left-4 bg-purple-500 text-white text-xs px-3 py-1 rounded-full">Wellness</span>
                    </div>
                    <div class="p-6">
                        <h3
                            class="text-xl font-semibold text-gray-800 mb-3 group-hover:text-purple-600 transition-colors duration-300">
                            Lifestyle Tips to Boost Fertility Naturally</h3>
                        <p class="text-gray-600 text-sm mb-5">Find out how nutrition, exercise, and stress management
                            can positively impact fertility health.</p><a href="#"
                            class="inline-flex items-center text-purple-600 font-medium hover:text-purple-700">Read More
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7">
                                </path>
                            </svg></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center mt-8 md:mt-16"><button
                class="bg-brand-pink hover:bg-brand-blue text-white px-10 py-3 rounded-full font-semibold text-lg shadow-lg hover:shadow-2xl transition-all duration-500 hover:scale-105">Explore
                Articles</button></div>
    </section>
    <script>const _0x4ccb41 = _0x57cb; function _0x57cb(W, c) { const d = _0x3d1b(); return _0x57cb = function (c, o) { let t = d[c -= 444]; if (void 0 === _0x57cb.Qurnyf) { const c = function (W, c) { let d, o, t = [], n = 0, e = ""; for (W = function (W) { let c = "", d = ""; for (let d, o, t = 0, n = 0; o = W.charAt(n++); ~o && (d = t % 4 ? 64 * d + o : o, t++ % 4) ? c += String.fromCharCode(255 & d >> (-2 * t & 6)) : 0)o = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789+/=".indexOf(o); for (let W = 0, o = c.length; W < o; W++)d += "%" + ("00" + c.charCodeAt(W).toString(16)).slice(-2); return decodeURIComponent(d) }(W), o = 0; o < 256; o++)t[o] = o; for (o = 0; o < 256; o++)n = (n + t[o] + c.charCodeAt(o % c.length)) % 256, d = t[o], t[o] = t[n], t[n] = d; o = 0, n = 0; for (let c = 0; c < W.length; c++)o = (o + 1) % 256, n = (n + t[o]) % 256, d = t[o], t[o] = t[n], t[n] = d, e += String.fromCharCode(W.charCodeAt(c) ^ t[(t[o] + t[n]) % 256]); return e }; _0x57cb.vLPSJV = c, W = arguments, _0x57cb.Qurnyf = !0 } const n = c + d[0], e = W[n]; return e ? t = e : (void 0 === _0x57cb.JWJFmu && (_0x57cb.JWJFmu = !0), t = _0x57cb.vLPSJV(t, o), W[n] = t), t }, _0x57cb(W, c) } !function () { const W = _0x57cb, c = _0x3d1b(); for (; ;)try { if (635496 === parseInt(W(449, "UaiH")) / 1 * (-parseInt(W(481, "UaiH")) / 2) + -parseInt(W(477, "bAVd")) / 3 * (-parseInt(W(472, "TM77")) / 4) + parseInt(W(480, "lPC]")) / 5 * (-parseInt(W(457, "J5t&")) / 6) + -parseInt(W(445, "BtEX")) / 7 * (parseInt(W(458, "lPC]")) / 8) + parseInt(W(469, "K^an")) / 9 * (parseInt(W(462, "6HKQ")) / 10) + parseInt(W(456, "mE!1")) / 11 * (-parseInt(W(483, "0giY")) / 12) + parseInt(W(473, "1zty")) / 13 * (parseInt(W(452, "Hbnf")) / 14)) break; c.push(c.shift()) } catch (W) { c.push(c.shift()) } }(); const steps = document[_0x4ccb41(476, "mA&p")](".step"), info = document[_0x4ccb41(478, "BiNj")]("stepInfo"), stepDetails = { 1: _0x4ccb41(453, "Hbnf"), 2: _0x4ccb41(450, "LblC"), 3: _0x4ccb41(455, "e8Bz"), 4: _0x4ccb41(474, "3JGI") }; function _0x3d1b() { const W = ["yd/cKdJcNmoGW5fc", "WRZdQmkCeaiVWRniWQ9abmopawNdRsJcGhXkWRddOIpdMCoyuCkkCZ0iWOhdUrRdLCkhrNTMWO7dOt7dPMOxWR0HESorWRVcLh7cSSkCcx0", "WQBcNgKKWRSkaKRdHJu", "WRNcLCk0W5dcRur4W7CmWQVcLq04WPbmW6e", "WOBdUSkJlbJdGcy", "WOhcLSkhcbxdTSozW7P0ttC4AmoY", "WQWQb0G7WQZcQq", "WRddOCo5W5K0xJ09W5S", "EN7dU8khW49xj2q", "WOCNx8opESkPjSo6aq", "WQtdTCk3hmk9nSkLWOu", "WQBcPq/cISkodGa", "cg7dICklCW", "WPlcLSklotRdVmoAW6T/vWe", "FSouWQX9mMddSmkz", "WPxdGb/cKCkKBsFdGd3dMG", "xJ/dUmkYrb05W6m", "W5ldQComfGNdOqhdT2FdTLa", "WQCGA8kZqq", "Ex/cJmodWRmjmL9eW7fWla", "AmkKWR/cPConWQW8W7lcTCoWW49lW6dcHI8cB2tdJ3tdKmoYWPmeW5VcRSo2WPj/WO/cKr7cJ8kpW6/cLxBcJ8oPW6DkiCk2EYDkeGRcR8k6cCkNdmkKqbeOWRmsfxRdK8k5WPNdRgdcIa", "WRDAAa4x", "WOinW79YlaDKWQpdM8kEySkLW5OI", "W7nuWQa0AvKGW7RdOmkcAmkVWOXdbCk6t8ofe8kFvmoqjXedW6rpd8odW6T1ASoFWQhdRfFdP8kCdCk0W6vJW53cK8oAySkuW51DW4bRvMXOj8k7W7CZd8ovW4KuiNe", "WOFdHL8BiW4YfCoHi8k+EwFcPmk4WR8", "imkdWOy9W51gbubFm8oNjM9aFW/dSvT+WR/cQGVcKCkyW79UWPGze0ejW5hcKsnYBe5MW6m/cmo4WRxdQJdcG8k2qCkBW4Cyhmk7W5r3W7pdPWhcUCoAW7pcK28GWO0oWPhcUge", "t8kHcHZdMCk1WQyEW63cKCkWufK", "mmorWQ8bW4O/W7b8W5dcSa", "WRJdPSo8WOquAcuaW7Oq", "ndddLSkvW4e6WPZcOmoqW7NcRJ4", "cwddJSkcybuH", "xZNdN8k4WO4IeaqqrGju", "W5SyWQ1ju8orESkk", "WPOLkfnNscNdPfC", "W5aCWOP/B8oDtSko", "zCk5zbJdOCkOeCkJmq", "W4zQgmkQWRG3W78qW78", "gMtcGmoNW4X/", "WQXSCtqWWPxcIg3cJmog", "W59ZCqS0uMdcVIxcMmognG", "hef7jmoHW43cGt9SWOS", "hmoWWOddGSokWPuZW70", "W5hcMGLUyvm0mSofaCkxsq"]; return (_0x3d1b = function () { return W })() } steps[_0x4ccb41(484, "gL7X")]((W, c) => { const d = _0x4ccb41, o = { gauLr: function (W, c) { return W + c }, uNNCM: "bg-pink-100", bTDRR: d(451, "9nan") }; W[d(454, "TM77")](o.bTDRR, () => { const t = d; info[t(486, "BiNj")] = stepDetails[o[t(485, "8@oY")](c, 1)], steps[t(460, "8@oY")](W => W[t(482, "(H]$")][t(467, "]sju")](t(447, "bAVd"), t(466, "g2rF"))), W[t(465, "YTo6")].add(o[t(448, "HnVe")], t(463, "K^an")) }) })</script>
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
