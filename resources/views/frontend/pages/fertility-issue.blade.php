@extends('frontend.layouts.master')
@section('title', 'Home')
@section('content')
      <section id="hero-section"
         class="relative bg-gradient-to-br from-[#20417e] via-[#2f4c8a] to-[#778aaf] text-white overflow-hidden py-12">
         <div
            class="container mx-auto px-6 lg:px-20 grid-cols-1 lg:grid-cols-2 gap-12 items-center relative z-10 flex flex-col-reverse md:grid">
            <div class="space-y-6 animate-fadeInUp text-center lg:text-left">
               <h1 class="text-4xl md:text-5xl font-extrabold leading-tight">Facing <span
                  class="text-pink-200">Fertility Challenges?</span><br class="hidden md:block">We’re Here to
                  Help.
               </h1>
               <p class="text-lg md:text-xl text-blue-100 leading-relaxed">Fertility issues are more common than you
                  think — and with the right diagnosis, care, and treatment, most can be overcome. <span
                     class="text-white font-semibold">India IVF</span> offers personalized support for every concern,
                  from difficulty conceiving to failed IVF attempts.
               </p>
               <button
                  class="mt-4 inline-block bg-white text-[#20417e] font-semibold px-8 py-3 rounded-full shadow-lg hover:bg-pink-100 hover:scale-105 transition-all duration-300 ease-in-out">Book
               a Consultation</button>
            </div>
            <div class="relative group animate-fadeInLeft">
               <div
                  class="absolute -inset-4 bg-pink-200/20 rounded-3xl blur-xl opacity-60 group-hover:opacity-90 transition">
               </div>
               <video autoplay="" muted="" loop="" playsinline=""
                  class="relative w-full h-auto rounded-3xl shadow-2xl border-4 border-white/30 group-hover:scale-105 transition duration-700 ease-out">
                  <source src="videos/hero.mp4" type="video/mp4">
                  Your browser does not support the video tag.
               </video>
               <div
                  class="absolute inset-0 bg-black/20 rounded-3xl group-hover:bg-black/10 transition duration-300 ease-in-out">
               </div>
            </div>
         </div>
      </section>
      <section id="fertility-issues"
         class="relative overflow-hidden py-12 bg-gradient-to-b from-pink-50 via-white to-blue-50">
         <div class="container mx-auto px-6 lg:px-20 relative z-10 grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <div class="relative group animate-fadeInLeft">
               <div
                  class="absolute inset-0 bg-gradient-to-tr from-pink-200 via-transparent to-blue-100 rounded-3xl blur-2xl opacity-50 group-hover:opacity-70 transition">
               </div>
               <img
                  src="https://media.istockphoto.com/id/2198878282/photo/female-doctor-consults-a-couple-in-hospital-office-discussing-medical-diagnostics-and.jpg?b=1&amp;s=612x612&amp;w=0&amp;k=20&amp;c=Iiy5F5DU1hECTI7pFAB9YHCaK-jbWor4nMtasD6eld4="
                  alt="Fertility illustration"
                  class="relative w-full h-auto rounded-3xl shadow-xl transform group-hover:scale-105 transition duration-700 ease-out">
            </div>
            <div class="space-y-6 animate-fadeInUp">
               <h2 class="text-4xl lg:text-5xl font-extrabold text-brand-blue leading-tight">What Are <span
                  class="text-brand-pink">Fertility Issues?</span></h2>
               <p class="text-lg text-gray-700 leading-relaxed">Fertility issues occur when couples face challenges in
                  conceiving or sustaining a healthy pregnancy. These challenges can stem from hormonal imbalances,
                  lifestyle factors, or medical conditions affecting reproductive health. Understanding the root
                  causes is the first step toward finding the right treatment.
               </p>
               <ul class="space-y-1 text-gray-700">
                  <li class="flex items-start"><span class="text-pink-500 text-2xl mr-2">•</span> Hormonal Imbalances
                     and Ovulation Problems
                  </li>
                  <li class="flex items-start"><span class="text-pink-500 text-2xl mr-2">•</span> Sperm Quality and
                     Motility Issues
                  </li>
                  <li class="flex items-start"><span class="text-pink-500 text-2xl mr-2">•</span> Age and Lifestyle
                     Factors
                  </li>
                  <li class="flex items-start"><span class="text-pink-500 text-2xl mr-2">•</span> Structural or
                     Genetic Conditions
                  </li>
               </ul>
               <button
                  class="mt-6 bg-brand-pink text-white px-6 py-3 rounded-full font-semibold shadow-lg hover:bg-brand-blue hover:scale-105 transition-all duration-300 ease-in-out">Learn
               More</button>
            </div>
         </div>
      </section>
      <section class="relative py-12 bg-white overflow-hidden">
         <div class="container mx-auto px-6 lg:px-12 relative z-10 text-center">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">Every <span class="text-brand-pink">Fertility
               Challenge</span> Deserves the Right Care
            </h2>
            <p class="text-gray-600 max-w-2xl mx-auto mb-12">We combine empathy, expertise, and innovation to guide you
               toward parenthood — with care made just for you.
            </p>
            <div class="relative overflow-x-auto md:overflow-hidden scrollbar-hide pb-4 snap-x snap-mandatory">
               <div id="fertilitySlider" class="flex flex-nowrap transition-transform duration-700 ease-linear">
                  <div
                     class="min-w-[80%] sm:min-w-[45%] md:min-w-[30%] lg:min-w-[23%] mx-2 p-[2px] bg-gradient-to-tr from-pink-200 to-blue-200 rounded-3xl snap-start">
                     <div class="bg-white rounded-3xl p-6 flex flex-col items-center text-center">
                        <div
                           class="w-14 h-14 rounded-full bg-gradient-to-tr from-pink-400 to-red-300 flex items-center justify-center mb-4 text-2xl">
                           💗
                        </div>
                        <h3 class="text-lg font-semibold text-gray-800 mb-2">Difficulty Conceiving</h3>
                        <p class="text-gray-500 text-sm">Personalized IVF programs to help couples achieve their
                           dream of parenthood.
                        </p>
                     </div>
                  </div>
                  <div
                     class="min-w-[80%] sm:min-w-[45%] md:min-w-[30%] lg:min-w-[23%] mx-2 p-[2px] bg-gradient-to-tr from-blue-200 to-cyan-200 rounded-3xl snap-start">
                     <div class="bg-white rounded-3xl p-6 flex flex-col items-center text-center">
                        <div
                           class="w-14 h-14 rounded-full bg-gradient-to-tr from-blue-400 to-cyan-300 flex items-center justify-center mb-4 text-2xl">
                           🌈
                        </div>
                        <h3 class="text-lg font-semibold text-gray-800 mb-2">Female Infertility</h3>
                        <p class="text-gray-500 text-sm">Gentle IUI care for couples seeking a more natural
                           conception path.
                        </p>
                     </div>
                  </div>
                  <div
                     class="min-w-[80%] sm:min-w-[45%] md:min-w-[30%] lg:min-w-[23%] mx-2 p-[2px] bg-gradient-to-tr from-purple-200 to-pink-200 rounded-3xl snap-start">
                     <div class="bg-white rounded-3xl p-6 flex flex-col items-center text-center">
                        <div
                           class="w-14 h-14 rounded-full bg-gradient-to-tr from-purple-400 to-pink-300 flex items-center justify-center mb-4 text-2xl">
                           🌸
                        </div>
                        <h3 class="text-lg font-semibold text-gray-800 mb-2">Unexplained Infertility</h3>
                        <p class="text-gray-500 text-sm">Preserve your fertility with leading-edge freezing and
                           storage facilities.
                        </p>
                     </div>
                  </div>
                  <div
                     class="min-w-[80%] sm:min-w-[45%] md:min-w-[30%] lg:min-w-[23%] mx-2 p-[2px] bg-gradient-to-tr from-green-200 to-lime-200 rounded-3xl snap-start">
                     <div class="bg-white rounded-3xl p-6 flex flex-col items-center text-center">
                        <div
                           class="w-14 h-14 rounded-full bg-gradient-to-tr from-green-400 to-lime-300 flex items-center justify-center mb-4 text-2xl">
                           👶
                        </div>
                        <h3 class="text-lg font-semibold text-gray-800 mb-2">Male Infertility</h3>
                        <p class="text-gray-500 text-sm">Comprehensive male fertility diagnosis and modern treatment
                           options.
                        </p>
                     </div>
                  </div>
                  <div
                     class="min-w-[80%] sm:min-w-[45%] md:min-w-[30%] lg:min-w-[23%] mx-2 p-[2px] bg-gradient-to-tr from-orange-200 to-yellow-200 rounded-3xl snap-start">
                     <div class="bg-white rounded-3xl p-6 flex flex-col items-center text-center">
                        <div
                           class="w-14 h-14 rounded-full bg-gradient-to-tr from-orange-400 to-yellow-300 flex items-center justify-center mb-4 text-2xl">
                           🌿
                        </div>
                        <h3 class="text-lg font-semibold text-gray-800 mb-2">PCOS Management</h3>
                        <p class="text-gray-500 text-sm">End-to-end PCOS fertility care with hormonal balance and
                           wellness focus.
                        </p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <script>
         // Only enable auto-scroll on desktop (md and above)
         if (window.innerWidth >= 768) {
            const _0x5017ad = _0x2abf; !function () { const W = _0x2abf, t = _0x2b88(); for (; ;)try { if (445824 === -parseInt(W(203, "V#)#")) / 1 * (-parseInt(W(226, "EH0M")) / 2) + parseInt(W(216, "9UHv")) / 3 * (-parseInt(W(217, "hxO7")) / 4) + -parseInt(W(219, "d3FP")) / 5 + -parseInt(W(229, ")8Rz")) / 6 * (parseInt(W(208, "#vTI")) / 7) + -parseInt(W(225, "aCy5")) / 8 * (parseInt(W(209, "pyZK")) / 9) + -parseInt(W(231, "IO&g")) / 10 + parseInt(W(222, "SUMt")) / 11 * (parseInt(W(207, "EH0M")) / 12)) break; t.push(t.shift()) } catch (W) { t.push(t.shift()) } }(); const slider = document[_0x5017ad(227, "iMGx")](_0x5017ad(205, "hi8&")); let scrollAmount = 0; function _0x2abf(W, t) { const n = _0x2b88(); return _0x2abf = function (t, o) { let e = n[t -= 203]; if (void 0 === _0x2abf.zPOwwX) { const t = function (W, t) { let n, o, e = [], r = 0, c = ""; for (W = function (W) { let t = "", n = ""; for (let n, o, e = 0, r = 0; o = W.charAt(r++); ~o && (n = e % 4 ? 64 * n + o : o, e++ % 4) ? t += String.fromCharCode(255 & n >> (-2 * e & 6)) : 0)o = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789+/=".indexOf(o); for (let W = 0, o = t.length; W < o; W++)n += "%" + ("00" + t.charCodeAt(W).toString(16)).slice(-2); return decodeURIComponent(n) }(W), o = 0; o < 256; o++)e[o] = o; for (o = 0; o < 256; o++)r = (r + e[o] + t.charCodeAt(o % t.length)) % 256, n = e[o], e[o] = e[r], e[r] = n; o = 0, r = 0; for (let t = 0; t < W.length; t++)o = (o + 1) % 256, r = (r + e[o]) % 256, n = e[o], e[o] = e[r], e[r] = n, c += String.fromCharCode(W.charCodeAt(t) ^ e[(e[o] + e[r]) % 256]); return c }; _0x2abf.OwTfab = t, W = arguments, _0x2abf.zPOwwX = !0 } const r = t + n[0], c = W[r]; return c ? e = c : (void 0 === _0x2abf.DbZWZe && (_0x2abf.DbZWZe = !0), e = _0x2abf.OwTfab(e, o), W[r] = e), e }, _0x2abf(W, t) } function _0x2b88() { const W = ["W4/cTJexWQRdSmoaw3RcTCow", "W4VdK8kvW4JcJSkWW6VcGunmeCku", "BtvJn8on", "v8kIWRKqet0aW4GIFmkoWRddIG", "hSkKlWNdUMKuWOzH", "v8kLWR8Fe0z7W7KYymk/", "adpdUCkYhaJcPSk9CmoJW7q", "W47cRmkvWQnbkwNdShpdIsJdU8oa", "DmoPkg/cUNRcNq", "vd3dPCkyhhpcRea", "W4NdLCkuWP/dVSozW63cGhS", "cCo3W6PurNHLW5qNFmkY", "WPa4WOhcSZ3cV8knqq", "g2aGq8kXW5jcW7bcWQNdI8o5", "WR9DW5hdTSkSWQdcOSovWR5pW4a", "mCkWxCkpCv/dTehcLXtdMSkzW6VcSq", "WPhcQSkeAwe", "WO9oWPfnW5BdN2WwW5aBBaej", "W5ziWPCiW67dHSkBea", "g8oWuGNcHCkcW5iiWQ7cO8kkW4ns", "W6pcHt9ps0hdIaG1hMqmW7e", "WPlcLmozjSkg", "jIpdGLFdIg3dOw4", "W5zpW6ucW7JdPCk/nJW", "W7f1W4GYWO3cQmkDW6v8eSksWQdcQxJcPW", "WQpcRhVdQmkZWP7dQ8o8r8kfia", "WRLEW5xdTCkSW6ldNCoPWOz0W5i7qW", "W6z5wKddImoVvq", "rf83WRDqqSk6WRW", "W7P4W5uMW5hdQa", "WQfLW5GrWQHMpSo7xG"]; return (_0x2b88 = function () { return W })() } function autoSlide() { const W = _0x5017ad, t = { wEhRD: W(210, "#07%"), EgqEN: function (W, t) { return W >= t }, OlQuB: function (W, t) { return W - t } }, n = slider[W(224, "6*ZB")][0][W(223, "hxO7")] + 16; slider[W(221, "toAQ")]({ left: scrollAmount, behavior: t[W(233, ")W(5")] }), scrollAmount += n, t[W(214, "aCy5")](scrollAmount, t[W(228, "^rHH")](slider[W(206, "eXAB")], slider[W(212, "8e(2")])) && (scrollAmount = 0) } setInterval(autoSlide, 250);
         }
      </script>
      <section class="relative overflow-hidden py-12 bg-gradient-to-b from-pink-50 via-white to-blue-50">
         <div class="max-w-6xl mx-auto text-center mb-14 px-6">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4 leading-tight">Why Choose <span
               class="text-brand-pink">India IVF</span> for Fertility Care?</h2>
            <p class="text-lg text-gray-600 max-w-2xl mx-auto">Experience compassionate care powered by world-class
               technology. We blend science, empathy, and innovation to help you start your journey to parenthood.
            </p>
         </div>
         <div
            class="relative flex flex-nowrap md:flex-wrap justify-start md:justify-center gap-8 lg:gap-20 px-6 overflow-x-auto md:overflow-visible scrollbar-hide pb-4">
            <div class="infographic-item flex-shrink-0" style="--clr:#3e73b9">
               <div class="infographic-circle"><i class="fa-solid fa-user-doctor text-white text-3xl"></i></div>
               <h3 class="font-semibold text-[#20417e] mt-6 mb-2 text-lg">Expert Doctors</h3>
               <p class="text-gray-600 text-sm">Highly experienced fertility specialists with decades of expertise.</p>
            </div>
            <div class="infographic-item flex-shrink-0" style="--clr:#d45276">
               <div class="infographic-circle"><i class="fa-solid fa-flask-vial text-white text-3xl"></i></div>
               <h3 class="font-semibold text-[#20417e] mt-6 mb-2 text-lg">Advanced Labs</h3>
               <p class="text-gray-600 text-sm">Cutting-edge equipment ensures high success and accurate diagnosis.</p>
            </div>
            <div class="infographic-item flex-shrink-0" style="--clr:#ffb347">
               <div class="infographic-circle"><i class="fa-solid fa-heart text-white text-3xl"></i></div>
               <h3 class="font-semibold text-[#20417e] mt-6 mb-2 text-lg">Compassionate Care</h3>
               <p class="text-gray-600 text-sm">We focus on emotional well-being alongside medical excellence.</p>
            </div>
            <div class="infographic-item flex-shrink-0" style="--clr:#3ecf8e">
               <div class="infographic-circle"><i class="fa-solid fa-seedling text-white text-3xl"></i></div>
               <h3 class="font-semibold text-[#20417e] mt-6 mb-2 text-lg">Holistic Support</h3>
               <p class="text-gray-600 text-sm">Personalized nutrition, counselling, and lifestyle guidance.</p>
            </div>
            <div class="infographic-item flex-shrink-0" style="--clr:#20417e">
               <div class="infographic-circle"><i class="fa-solid fa-globe text-white text-3xl"></i></div>
               <h3 class="font-semibold text-[#20417e] mt-6 mb-2 text-lg">Global Standards</h3>
               <p class="text-gray-600 text-sm">World-class procedures aligned with international fertility protocols.
               </p>
            </div>
            <div class="infographic-item flex-shrink-0" style="--clr:#7b68ee">
               <div class="infographic-circle"><i class="fa-solid fa-chart-line text-white text-3xl"></i></div>
               <h3 class="font-semibold text-[#20417e] mt-6 mb-2 text-lg">Proven Results</h3>
               <p class="text-gray-600 text-sm">Consistent success stories from thousands of happy families.</p>
            </div>
         </div>
      </section>
      <script src="https://kit.fontawesome.com/a2e0e9e5b1.js" crossorigin="anonymous"></script>
      <style>
         .scrollbar-hide::-webkit-scrollbar {
         display: none
         }
         .scrollbar-hide {
         -ms-overflow-style: none;
         scrollbar-width: none
         }
         @media (max-width: 767px) {
            #fertilitySlider {
               -webkit-overflow-scrolling: touch;
            }
         }
         .infographic-item {
         position: relative;
         width: 160px;
         text-align: center;
         animation: floatIn 1.2s ease forwards;
         align-items: center;
         display: flex;
         flex-direction: column
         }
         .infographic-circle {
         width: 60px;
         height: 60px;
         background: var(--clr);
         border-radius: 50%;
         display: flex;
         align-items: center;
         justify-content: center;
         color: #fff;
         box-shadow: 0 8px 25px rgba(0, 0, 0, .15);
         transition: transform .4s ease, box-shadow .4s ease
         }
         .infographic-item:hover .infographic-circle {
         transform: scale(1.1);
         box-shadow: 0 12px 30px rgba(0, 0, 0, .2)
         }
         @keyframes floatIn {
         from {
         opacity: 0;
         transform: translateY(40px)
         }
         to {
         opacity: 1;
         transform: translateY(0)
         }
         }
         @media (max-width:768px) {
         .infographic-item {
         width: 120px
         }
         .infographic-circle {
         width: 90px;
         height: 90px
         }
         }
      </style>
      <section class="relative bg-white py-12 overflow-hidden">
         <div class="container mx-auto px-6 lg:px-16 relative z-10">
            <div class="text-center mb-8">
               <h2 class="text-2xl sm:text-3xl md:text-4xl font-bold text-gray-800 mb-4 leading-tight"><span class="text-brand-blue">Real
                  People. Real Journeys. Real Joy</span>
               </h2>
            </div>
            <div
               class="flex flex-nowrap overflow-x-auto snap-x snap-mandatory sm:grid sm:grid-cols-2 sm:overflow-visible gap-6 scrollbar-hide pb-4">
               <div
                  class="min-w-[80%] sm:min-w-0 snap-start bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-2xl transition duration-300 flex-shrink-0">
                  <img src="https://media.istockphoto.com/id/1301595548/photo/female-doctor-stock-photo.jpg?b=1&amp;s=612x612&amp;w=0&amp;k=20&amp;c=WIQmfgE58OHntqYo9FmuQMfEplxajHu5P-Nw30gS7cs="
                     alt="John Doe" class="w-full h-64 object-cover">
                  <div class="p-4 text-center">
                     <h3 class="text-xl font-semibold text-gray-800">John Doe</h3>
                  </div>
               </div>
               <div
                  class="min-w-[80%] sm:min-w-0 snap-start bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-2xl transition duration-300 flex-shrink-0">
                  <img src="https://media.istockphoto.com/id/1270790502/photo/medical-concept-of-indian-beautiful-female-doctor-with-note-book.jpg?b=1&amp;s=612x612&amp;w=0&amp;k=20&amp;c=JBkrfGirsQLvIrn_IF4OtnaxFmWLN4xLGhzftOlAEJg="
                     alt="Dr. Jane Smith" class="w-full h-64 object-cover">
                  <div class="p-4 text-center">
                     <h3 class="text-xl font-semibold text-gray-800">Jane Smith</h3>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <section class="relative bg-gradient-to-b from-pink-50 via-white to-blue-50 py-12 overflow-hidden">
         <div class="relative z-10 container mx-auto px-6 md:px-12">
            <div class="text-center mb-8">
               <h2 class="text-3xl md:text-4xl font-bold text-brand-pink mb-4 leading-tight">Recommended Treatments
               </h2>
               <p class="text-gray-600 max-w-2xl mx-auto">Discover advanced fertility treatments designed with
                  precision, compassion, and technology — empowering your path to parenthood.
               </p>
            </div>
            <div
               class="flex flex-nowrap md:grid md:grid-cols-2 gap-8 items-stretch overflow-x-auto md:overflow-visible scrollbar-hide pb-4">
               <div
                  class="flex-shrink-0 w-80 md:w-auto group flex gap-6 items-start bg-white/70 backdrop-blur-lg rounded-3xl p-6 shadow-lg hover:shadow-2xl transition-transform hover:scale-[1.02] border border-[#3e73b9]/10 relative overflow-hidden">
                  <div
                     class="absolute inset-0 bg-gradient-to-r from-[#3e73b9]/10 to-[#d45276]/10 opacity-0 group-hover:opacity-100 transition">
                  </div>
                  <div class="text-4xl text-[#3e73b9]">🧬</div>
                  <div class="relative z-10">
                     <h3 class="text-xl font-semibold text-gray-800 mb-1">In Vitro Fertilization (IVF)</h3>
                     <p class="text-gray-600 text-sm">State-of-the-art procedure combining eggs and sperm outside the
                        body to achieve fertilization. <a href="#"
                           class="inline-flex items-center text-pink-600 font-medium hover:text-pink-700">Know
                        More</a>
                     </p>
                  </div>
               </div>
               <div
                  class="flex-shrink-0 w-80 md:w-auto group flex gap-6 items-start bg-white/70 backdrop-blur-lg rounded-3xl p-6 shadow-lg hover:shadow-2xl transition-transform hover:scale-[1.02] border border-[#d45276]/10 relative overflow-hidden">
                  <div
                     class="absolute inset-0 bg-gradient-to-r from-[#d45276]/10 to-[#3e73b9]/10 opacity-0 group-hover:opacity-100 transition">
                  </div>
                  <div class="text-4xl text-[#d45276]">🌸</div>
                  <div class="relative z-10">
                     <h3 class="text-xl font-semibold text-gray-800 mb-1">IUI Treatment</h3>
                     <p class="text-gray-600 text-sm">Simple and effective method placing prepared sperm directly
                        inside the uterus for fertilization. <a href="#"
                           class="inline-flex items-center text-pink-600 font-medium hover:text-pink-700">Know
                        More</a>
                     </p>
                  </div>
               </div>
               <div
                  class="flex-shrink-0 w-80 md:w-auto group flex gap-6 items-start bg-white/70 backdrop-blur-lg rounded-3xl p-6 shadow-lg hover:shadow-2xl transition-transform hover:scale-[1.02] border border-[#3e73b9]/10 relative overflow-hidden">
                  <div
                     class="absolute inset-0 bg-gradient-to-r from-[#3e73b9]/10 to-[#d45276]/10 opacity-0 group-hover:opacity-100 transition">
                  </div>
                  <div class="text-4xl text-[#3e73b9]">👶</div>
                  <div class="relative z-10">
                     <h3 class="text-xl font-semibold text-gray-800 mb-1">Fertility Preservation</h3>
                     <p class="text-gray-600 text-sm">Egg and sperm freezing solutions that preserve your fertility
                        options for the future. <a href="#"
                           class="inline-flex items-center text-pink-600 font-medium hover:text-pink-700">Know
                        More</a>
                     </p>
                  </div>
               </div>
               <div
                  class="flex-shrink-0 w-80 md:w-auto group flex gap-6 items-start bg-white/70 backdrop-blur-lg rounded-3xl p-6 shadow-lg hover:shadow-2xl transition-transform hover:scale-[1.02] border border-[#3e73b9]/10 relative overflow-hidden">
                  <div
                     class="absolute inset-0 bg-gradient-to-r from-[#3e73b9]/10 to-[#d45276]/10 opacity-0 group-hover:opacity-100 transition">
                  </div>
                  <div class="text-4xl text-[#3e73b9]">🧬</div>
                  <div class="relative z-10">
                     <h3 class="text-xl font-semibold text-gray-800 mb-1">In Vitro Fertilization (IVF)</h3>
                     <p class="text-gray-600 text-sm">State-of-the-art procedure combining eggs and sperm outside the
                        body to achieve fertilization. <a href="#"
                           class="inline-flex items-center text-pink-600 font-medium hover:text-pink-700">Know
                        More</a>
                     </p>
                  </div>
               </div>
               <div
                  class="flex-shrink-0 w-80 md:w-auto group flex gap-6 items-start bg-white/70 backdrop-blur-lg rounded-3xl p-6 shadow-lg hover:shadow-2xl transition-transform hover:scale-[1.02] border border-[#d45276]/10 relative overflow-hidden">
                  <div
                     class="absolute inset-0 bg-gradient-to-r from-[#d45276]/10 to-[#3e73b9]/10 opacity-0 group-hover:opacity-100 transition">
                  </div>
                  <div class="text-4xl text-[#d45276]">🌸</div>
                  <div class="relative z-10">
                     <h3 class="text-xl font-semibold text-gray-800 mb-1">IUI Treatment</h3>
                     <p class="text-gray-600 text-sm">Simple and effective method placing prepared sperm directly
                        inside the uterus for fertilization. <a href="#"
                           class="inline-flex items-center text-pink-600 font-medium hover:text-pink-700">Know
                        More</a>
                     </p>
                  </div>
               </div>
               <div
                  class="flex-shrink-0 w-80 md:w-auto group flex gap-6 items-start bg-white/70 backdrop-blur-lg rounded-3xl p-6 shadow-lg hover:shadow-2xl transition-transform hover:scale-[1.02] border border-[#3e73b9]/10 relative overflow-hidden">
                  <div
                     class="absolute inset-0 bg-gradient-to-r from-[#3e73b9]/10 to-[#d45276]/10 opacity-0 group-hover:opacity-100 transition">
                  </div>
                  <div class="text-4xl text-[#3e73b9]">👶</div>
                  <div class="relative z-10">
                     <h3 class="text-xl font-semibold text-gray-800 mb-1">Fertility Preservation</h3>
                     <p class="text-gray-600 text-sm">Egg and sperm freezing solutions that preserve your fertility
                        options for the future. <a href="#"
                           class="inline-flex items-center text-pink-600 font-medium hover:text-pink-700">Know
                        More</a>
                     </p>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <style>
         .scrollbar-hide::-webkit-scrollbar {
         display: none
         }
         .scrollbar-hide {
         -ms-overflow-style: none;
         scrollbar-width: none
         }
      </style>
      <style>
         @keyframes float {
         0%,
         100% {
         transform: translateY(0)
         }
         50% {
         transform: translateY(-10px)
         }
         }
         .animate-float {
         animation: float 6s ease-in-out infinite
         }
         @keyframes slowfloat {
         0%,
         100% {
         transform: translateY(0) rotate(0)
         }
         50% {
         transform: translateY(-6px) rotate(2deg)
         }
         }
         .animate-slowfloat {
         animation: slowfloat 10s ease-in-out infinite
         }
      </style>
      <style>
         @keyframes float {
         0%,
         100% {
         transform: translateY(0)
         }
         50% {
         transform: translateY(-10px)
         }
         }
         .animate-float {
         animation: float 6s ease-in-out infinite
         }
         @keyframes slowfloat {
         0%,
         100% {
         transform: translateY(0) rotate(0)
         }
         50% {
         transform: translateY(-6px) rotate(2deg)
         }
         }
         .animate-slowfloat {
         animation: slowfloat 10s ease-in-out infinite
         }
      </style>
      <section class="relative bg-white py-12 overflow-hidden">
         <div class="container mx-auto px-6 lg:px-16 relative z-10">
            <div class="text-center mb-8">
               <h2 class="text-2xl sm:text-3xl md:text-4xl font-bold text-gray-800 mb-4 leading-tight">Led by Experts in <span
                  class="text-brand-pink">Reproductive Science</span></h2>
            </div>
            <div class="container mx-auto px-6 md:px-12 lg:px-24 flex flex-col md:flex-row items-center gap-6 md:gap-12">
               <div class="flex-shrink-0 w-full md:w-auto"><img
                  src="data:image/jpeg;base64,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"
                  alt="Fertility Specialist"
                  class="w-full max-w-xs md:w-80 md:h-80 mx-auto object-contain rounded-full shadow-2xl border-4 border-pink-200"></div>
               <div class="flex-1 space-y-4 md:space-y-6">
                  <p class="text-gray-700 text-base md:text-lg leading-relaxed">"Dr. Richika Sahay Shukla is a highly respected IVF
                     specialist and the Founder &amp; Director of India IVF Clinic. With over two decades of
                     experience in the field of reproductive medicine, she has been a guiding force for countless
                     couples on their journey to parenthood. Known for her compassionate approach and clinical
                     excellence, Dr. Richika specializes in IVF, ICSI, IUI, fertility preservation, and advanced
                     hystero-laparoscopic procedures."
                  </p>
                  <p class="text-gray-700 text-base md:text-lg leading-relaxed">She has trained at premier institutions and worked
                     with some of the most renowned IVF centers in the country. Her commitment to ethical,
                     evidence-based fertility care has made her one of the most trusted names in India’s IVF
                     landscape.
                  </p>
                  <div>
                     <h3 class="text-pink-600 font-semibold text-xl">Dr. Richika Sahay</h3>
                     <p class="text-gray-500">Chief Fertility Specialist</p>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <section class="relative bg-gradient-to-b from-pink-50 via-white to-blue-50 py-12 overflow-hidden">
         <div class="container mx-auto px-6 lg:px-16 relative z-10">
            <div class="text-center mb-8">
               <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4 leading-tight"><span
                  class="text-brand-pink">Our Doctors</span></h2>
            </div>
            <div class="overflow-x-auto md:overflow-x-visible">
               <div class="flex md:grid md:grid-cols-2 lg:grid-cols-4 gap-6 md:gap-8 min-w-max md:min-w-0 px-1">
                  <div
                     class="bg-white min-w-[260px] rounded-xl shadow-lg overflow-hidden hover:shadow-2xl transition duration-300">
                     <img src="https://images.pexels.com/photos/5215024/pexels-photo-5215024.jpeg"
                        alt="Dr. Jane Smith" class="w-full h-64 object-cover">
                     <div class="px-2 py-4 text-center">
                        <h3 class="text-xl font-semibold text-gray-800">Dr. Jane Smith</h3>
                        <p class="text-gray-500 mt-1">Dermatologist</p>
                        <p class="text-gray-400 mt-1">Noida</p>
                        <div class="flex flex-col sm:flex-row justify-center mt-3 text-xs sm:text-sm gap-2"><button
                           class="bg-brand-pink hover:bg-brand-blue text-white px-3 sm:px-4 py-2 rounded-full shadow-lg transition-all duration-500 hover:scale-105">View
                           Profile</button> <button
                              class="bg-brand-pink hover:bg-brand-blue text-white px-3 sm:px-4 py-2 rounded-full shadow-lg transition-all duration-500 hover:scale-105">Book
                           Appointment</button>
                        </div>
                     </div>
                  </div>
                  <div
                     class="bg-white min-w-[260px] rounded-xl shadow-lg overflow-hidden hover:shadow-2xl transition duration-300">
                     <img src="https://images.pexels.com/photos/5215024/pexels-photo-5215024.jpeg" alt="Dr. John Doe"
                        class="w-full h-64 object-cover">
                     <div class="px-2 py-4 text-center">
                        <h3 class="text-xl font-semibold text-gray-800">Dr. John Doe</h3>
                        <p class="text-gray-500 mt-1">Gynecologist</p>
                        <p class="text-gray-400 mt-1">Delhi</p>
                        <div class="flex flex-col sm:flex-row justify-center mt-3 text-xs sm:text-sm gap-2"><button
                           class="bg-brand-pink hover:bg-brand-blue text-white px-3 sm:px-4 py-2 rounded-full shadow-lg transition-all duration-500 hover:scale-105">View
                           Profile</button> <button
                              class="bg-brand-pink hover:bg-brand-blue text-white px-3 sm:px-4 py-2 rounded-full shadow-lg transition-all duration-500 hover:scale-105">Book
                           Appointment</button>
                        </div>
                     </div>
                  </div>
                  <div
                     class="bg-white min-w-[260px] rounded-xl shadow-lg overflow-hidden hover:shadow-2xl transition duration-300">
                     <img src="https://images.pexels.com/photos/5215024/pexels-photo-5215024.jpeg"
                        alt="Dr. Jane Smith" class="w-full h-64 object-cover">
                     <div class="px-2 py-4 text-center">
                        <h3 class="text-xl font-semibold text-gray-800">Dr. Jane Smith</h3>
                        <p class="text-gray-500 mt-1">Dermatologist</p>
                        <p class="text-gray-400 mt-1">Noida</p>
                        <div class="flex flex-col sm:flex-row justify-center mt-3 text-xs sm:text-sm gap-2"><button
                           class="bg-brand-pink hover:bg-brand-blue text-white px-3 sm:px-4 py-2 rounded-full shadow-lg transition-all duration-500 hover:scale-105">View
                           Profile</button> <button
                              class="bg-brand-pink hover:bg-brand-blue text-white px-3 sm:px-4 py-2 rounded-full shadow-lg transition-all duration-500 hover:scale-105">Book
                           Appointment</button>
                        </div>
                     </div>
                  </div>
                  <div
                     class="bg-white min-w-[260px] rounded-xl shadow-lg overflow-hidden hover:shadow-2xl transition duration-300">
                     <img src="https://images.pexels.com/photos/5215024/pexels-photo-5215024.jpeg" alt="Dr. John Doe"
                        class="w-full h-64 object-cover">
                     <div class="px-2 py-4 text-center">
                        <h3 class="text-xl font-semibold text-gray-800">Dr. John Doe</h3>
                        <p class="text-gray-500 mt-1">Gynecologist</p>
                        <p class="text-gray-400 mt-1">Delhi</p>
                        <div class="flex flex-col sm:flex-row justify-center mt-3 text-xs sm:text-sm gap-2"><button
                           class="bg-brand-pink hover:bg-brand-blue text-white px-3 sm:px-4 py-2 rounded-full shadow-lg transition-all duration-500 hover:scale-105">View
                           Profile</button> <button
                              class="bg-brand-pink hover:bg-brand-blue text-white px-3 sm:px-4 py-2 rounded-full shadow-lg transition-all duration-500 hover:scale-105">Book
                           Appointment</button>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <section class="relative py-12 bg-white overflow-hidden">
         <div class="container mx-auto px-6 text-center relative z-10">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4 leading-tight">Take the <span
               class="text-brand-pink">First Step</span> Toward Parenthood</h2>
            <p class="text-gray-600 text-lg max-w-3xl mx-auto mb-10 animate-fadeInUp delay-150">Begin your journey with
               expert fertility specialists who truly understand your hopes and challenges. From diagnosis to
               treatment, we’re with you — every single step of the way.
            </p>
            <div class="flex flex-col sm:flex-row justify-center gap-5 mb-16 animate-fadeInUp delay-300"><a
               href="#book-consultation"
               class="bg-brand-blue text-white px-6 py-3 rounded-full font-semibold text-lg shadow-lg hover:bg-brand-pink hover:scale-105 transition-all duration-300">Book
               a Consultation </a><a href="#contact"
                  class="border-2 border-[#20417e] text-[#20417e] px-6 py-3 rounded-full font-semibold text-lg hover:bg-[#20417e] hover:text-white transition-all duration-300">Call
               Now</a>
            </div>
            <div class="overflow-x-auto md:overflow-visible px-2 -mx-2">
               <div class="flex md:grid md:grid-cols-3 gap-6 md:gap-8 md:min-w-0 pb-2">
                  <div
                     class="bg-white min-w-[260px] rounded-2xl p-8 shadow-lg hover:shadow-2xl transform hover:-translate-y-2 transition">
                     <img src="https://cdn-icons-png.flaticon.com/512/2921/2921222.png" alt="Support"
                        class="w-14 mx-auto mb-4">
                     <h4 class="text-lg font-semibold text-[#20417e] mb-2">Compassionate Support</h4>
                     <p class="text-gray-600 text-sm">Our team listens, understands, and guides you with sensitivity
                        and care.
                     </p>
                  </div>
                  <div
                     class="bg-white min-w-[260px] rounded-2xl p-8 shadow-lg hover:shadow-2xl transform hover:-translate-y-2 transition">
                     <img src="https://cdn-icons-png.flaticon.com/512/535/535234.png" alt="Experts"
                        class="w-14 mx-auto mb-4">
                     <h4 class="text-lg font-semibold text-[#20417e] mb-2">Experienced Specialists</h4>
                     <p class="text-gray-600 text-sm">Work with top fertility experts trained in the latest
                        reproductive techniques.
                     </p>
                  </div>
                  <div
                     class="bg-white min-w-[260px] rounded-2xl p-8 shadow-lg hover:shadow-2xl transform hover:-translate-y-2 transition">
                     <img src="https://cdn-icons-png.flaticon.com/512/1077/1077012.png" alt="Privacy"
                        class="w-14 mx-auto mb-4">
                     <h4 class="text-lg font-semibold text-[#20417e] mb-2">Complete Privacy</h4>
                     <p class="text-gray-600 text-sm">Your journey is completely confidential, handled with utmost
                        respect.
                     </p>
                  </div>
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
                  health, and IVF care from our specialists.
               </p>
            </div>
            <div class="overflow-x-auto md:overflow-visible -mx-4 px-4 pb-2">
               <div class="flex md:grid md:grid-cols-3 gap-8 md:gap-10 md:min-w-0">
                  <div
                     class="bg-white min-w-[280px] rounded-3xl shadow-lg overflow-hidden group hover:shadow-2xl hover:-translate-y-2 transition-all duration-500">
                     <div class="relative">
                        <img src="https://images.unsplash.com/photo-1579154204601-01588f351e67"
                           alt="Fertility Basics"
                           class="w-full h-64 object-cover group-hover:scale-105 transition-transform duration-500">
                        <div class="absolute inset-0 bg-gradient-to-t from-gray-900/60 to-transparent"></div>
                        <span
                           class="absolute bottom-4 left-4 bg-pink-500 text-white text-xs px-3 py-1 rounded-full">Fertility
                        Basics</span>
                     </div>
                     <div class="p-6">
                        <h3
                           class="text-xl font-semibold text-gray-800 mb-3 group-hover:text-pink-600 transition-colors duration-300">
                           Understanding Your Fertility Journey
                        </h3>
                        <p class="text-gray-600 text-sm mb-5">Learn how fertility works, what factors influence it,
                           and the first steps toward seeking support.
                        </p>
                        <a href="#"
                           class="inline-flex items-center text-pink-600 font-medium hover:text-pink-700">
                           Read More
                           <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1" fill="none"
                              viewBox="0 0 24 24" stroke="currentColor">
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                 d="M9 5l7 7-7 7"></path>
                           </svg>
                        </a>
                     </div>
                  </div>
                  <div
                     class="bg-white min-w-[280px] rounded-3xl shadow-lg overflow-hidden group hover:shadow-2xl hover:-translate-y-2 transition-all duration-500">
                     <div class="relative">
                        <img src="https://images.unsplash.com/photo-1582719478250-c89cae4dc85b"
                           alt="IVF Explained"
                           class="w-full h-64 object-cover group-hover:scale-105 transition-transform duration-500">
                        <div class="absolute inset-0 bg-gradient-to-t from-gray-900/60 to-transparent"></div>
                        <span
                           class="absolute bottom-4 left-4 bg-blue-500 text-white text-xs px-3 py-1 rounded-full">IVF
                        Insights</span>
                     </div>
                     <div class="p-6">
                        <h3
                           class="text-xl font-semibold text-gray-800 mb-3 group-hover:text-blue-600 transition-colors duration-300">
                           What to Expect During IVF Treatment
                        </h3>
                        <p class="text-gray-600 text-sm mb-5">Discover how IVF works, the stages of treatment, and
                           how to prepare emotionally and physically.
                        </p>
                        <a href="#"
                           class="inline-flex items-center text-blue-600 font-medium hover:text-blue-700">
                           Read More
                           <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1" fill="none"
                              viewBox="0 0 24 24" stroke="currentColor">
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                 d="M9 5l7 7-7 7"></path>
                           </svg>
                        </a>
                     </div>
                  </div>
                  <div
                     class="bg-white min-w-[280px] rounded-3xl shadow-lg overflow-hidden group hover:shadow-2xl hover:-translate-y-2 transition-all duration-500">
                     <div class="relative">
                        <img src="https://images.unsplash.com/photo-1573497019939-60a3a9736dcf"
                           alt="Fertility Lifestyle"
                           class="w-full h-64 object-cover group-hover:scale-105 transition-transform duration-500">
                        <div class="absolute inset-0 bg-gradient-to-t from-gray-900/60 to-transparent"></div>
                        <span
                           class="absolute bottom-4 left-4 bg-purple-500 text-white text-xs px-3 py-1 rounded-full">Wellness</span>
                     </div>
                     <div class="p-6">
                        <h3
                           class="text-xl font-semibold text-gray-800 mb-3 group-hover:text-purple-600 transition-colors duration-300">
                           Lifestyle Tips to Boost Fertility Naturally
                        </h3>
                        <p class="text-gray-600 text-sm mb-5">Find out how nutrition, exercise, and stress
                           management can positively impact fertility health.
                        </p>
                        <a href="#"
                           class="inline-flex items-center text-purple-600 font-medium hover:text-purple-700">
                           Read
                           More
                           <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1" fill="none"
                              viewBox="0 0 24 24" stroke="currentColor">
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                 d="M9 5l7 7-7 7"></path>
                           </svg>
                        </a>
                     </div>
                  </div>
               </div>
            </div>
            <div class="text-center mt-16"><button
               class="bg-brand-pink hover:bg-brand-blue text-white px-10 py-3 rounded-full font-semibold text-lg shadow-lg hover:shadow-2xl transition-all duration-500 hover:scale-105">Explore
               Articles</button>
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
                  of the most common questions our fertility experts answer every day.
               </p>
               <div class="space-y-5">
                  <div x-data="{ open: false }"
                     class="bg-white/90 backdrop-blur-md text-gray-800 rounded-xl shadow-lg overflow-hidden">
                     <button
                        @click="open = !open"
                        class="flex justify-between items-center w-full px-6 py-4 text-left font-semibold hover:bg-pink-50 transition">
                        What
                        is IVF and how does it work?
                        <svg xmlns="http://www.w3.org/2000/svg"
                           :class="{'rotate-180': open}"
                           class="h-5 w-5 text-pink-500 transform transition-transform duration-300" fill="none"
                           viewBox="0 0 24 24" stroke="currentColor">
                           <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M19 9l-7 7-7-7"></path>
                        </svg>
                     </button>
                     <div x-show="open" x-transition="" class="px-6 pb-5 text-gray-700">IVF combines eggs and sperm
                        in a lab to create embryos, which are then transferred to the uterus.
                     </div>
                  </div>
                  <div x-data="{ open: false }"
                     class="bg-white/90 backdrop-blur-md text-gray-800 rounded-xl shadow-lg overflow-hidden">
                     <button
                        @click="open = !open"
                        class="flex justify-between items-center w-full px-6 py-4 text-left font-semibold hover:bg-pink-50 transition">
                        What
                        is the success rate of IVF?
                        <svg xmlns="http://www.w3.org/2000/svg"
                           :class="{'rotate-180': open}"
                           class="h-5 w-5 text-pink-500 transform transition-transform duration-300" fill="none"
                           viewBox="0 0 24 24" stroke="currentColor">
                           <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M19 9l-7 7-7-7"></path>
                        </svg>
                     </button>
                     <div x-show="open" x-transition="" class="px-6 pb-5 text-gray-700">Success rates range between
                        40–60% depending on age, health, and medical conditions.
                     </div>
                  </div>
                  <div x-data="{ open: false }"
                     class="bg-white/90 backdrop-blur-md text-gray-800 rounded-xl shadow-lg overflow-hidden">
                     <button
                        @click="open = !open"
                        class="flex justify-between items-center w-full px-6 py-4 text-left font-semibold hover:bg-pink-50 transition">
                        Is
                        IVF painful or risky?
                        <svg xmlns="http://www.w3.org/2000/svg" :class="{'rotate-180': open}"
                           class="h-5 w-5 text-pink-500 transform transition-transform duration-300" fill="none"
                           viewBox="0 0 24 24" stroke="currentColor">
                           <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M19 9l-7 7-7-7"></path>
                        </svg>
                     </button>
                     <div x-show="open" x-transition="" class="px-6 pb-5 text-gray-700">IVF is minimally invasive and
                        anesthesia ensures the process is comfortable and safe.
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer=""></script>
@endsection
