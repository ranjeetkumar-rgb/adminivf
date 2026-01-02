@extends('frontend.layouts.master')
@section('title', 'Home')
@section('content')
  <section id="hero-section"
         class="relative bg-gradient-to-br from-[#20417e] via-[#2f4c8a] to-[#778aaf] text-white overflow-hidden py-12">
         <div
            class="container mx-auto px-6 lg:px-20 grid-cols-1 lg:grid-cols-2 gap-12 items-center relative z-10 flex flex-col-reverse md:grid">
            <div class="space-y-6 animate-fadeInUp text-center lg:text-left">
               <h1 class="text-4xl md:text-5xl font-extrabold leading-tight">Comprehensive <span
                  class="text-pink-200">IVF &amp; Fertility Treatments</span><br class="hidden md:block">Tailored
                  for You.
               </h1>
               <p class="text-lg md:text-xl text-blue-100 leading-relaxed">At India IVF, we combine world-class
                  reproductive technology with compassionate care to help you realize your dream of parenthood
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
                  class="relative rounded-3xl shadow-2xl border-4 border-white/30 group-hover:scale-105 transition duration-700 ease-out">
                  <source src="videos/hero.mp4" type="video/mp4">
                  Your browser does not support the video tag.
               </video>
               <div
                  class="absolute inset-0 bg-black/20 rounded-3xl group-hover:bg-black/10 transition duration-300 ease-in-out">
               </div>
            </div>
         </div>
      </section>
      <section id="success-stats"
         class="relative py-12 bg-gradient-to-r from-[#d45276] to-[#3e73b9] text-white overflow-hidden">
         <div class="absolute top-0 left-0 w-64 h-64 bg-white/10 rounded-full blur-3xl animate-pulse-slow"></div>
         <div class="absolute bottom-0 right-0 w-80 h-80 bg-white/10 rounded-full blur-3xl animate-pulse-slow"></div>
         <div class="relative container mx-auto px-6 lg:px-12 text-center z-10">
            <div
               class="flex overflow-x-auto md:grid md:grid-cols-3 gap-6 md:gap-12 snap-x snap-mandatory scrollbar-hide py-4">
               <div
                  class="flex-shrink-0 w-11/12 sm:w-80 md:w-auto snap-start relative bg-white/10 backdrop-blur-xl rounded-3xl p-6 hover:bg-white/20 transition-all duration-500 hover:-translate-y-2 hover:shadow-[0_0_30px_#ffffff3a] group">
                  <div
                     class="absolute -top-6 left-1/2 transform -translate-x-1/2 bg-gradient-to-r from-[#d45276] to-[#3e73b9] p-[2px] rounded-full">
                  </div>
                  <div class="mt-8 text-5xl font-extrabold">95%+</div>
                  <p class="text-lg opacity-90 mt-2">Satisfaction Rate in IVF Cycles</p>
                  <div
                     class="mt-4 h-1 w-16 mx-auto bg-gradient-to-r from-[#ffd700] to-white rounded-full group-hover:w-24 transition-all duration-500">
                  </div>
               </div>
               <div
                  class="flex-shrink-0 w-11/12 sm:w-80 md:w-auto snap-start relative bg-white/10 backdrop-blur-xl rounded-3xl p-6 hover:bg-white/20 transition-all duration-500 hover:-translate-y-2 hover:shadow-[0_0_30px_#ffffff3a] group">
                  <div
                     class="absolute -top-6 left-1/2 transform -translate-x-1/2 bg-gradient-to-r from-[#d45276] to-[#3e73b9] p-[2px] rounded-full">
                  </div>
                  <div class="mt-8 text-5xl font-extrabold">24,000+</div>
                  <p class="text-lg opacity-90 mt-2">Happy Families</p>
                  <div
                     class="mt-4 h-1 w-16 mx-auto bg-gradient-to-r from-green-300 to-white rounded-full group-hover:w-24 transition-all duration-500">
                  </div>
               </div>
               <div
                  class="flex-shrink-0 w-11/12 sm:w-80 md:w-auto snap-start relative bg-white/10 backdrop-blur-xl rounded-3xl p-6 hover:bg-white/20 transition-all duration-500 hover:-translate-y-2 hover:shadow-[0_0_30px_#ffffff3a] group">
                  <div
                     class="absolute -top-6 left-1/2 transform -translate-x-1/2 bg-gradient-to-r from-[#d45276] to-[#3e73b9] p-[2px] rounded-full">
                  </div>
                  <div class="mt-8 text-5xl font-extrabold">21+ Years</div>
                  <p class="text-lg opacity-90 mt-2">of Fertility Expertise</p>
                  <div
                     class="mt-4 h-1 w-16 mx-auto bg-gradient-to-r from-blue-300 to-white rounded-full group-hover:w-24 transition-all duration-500">
                  </div>
               </div>
            </div>
         </div>
         <style>
            .scrollbar-hide::-webkit-scrollbar {
            display: none
            }
            .scrollbar-hide {
            -ms-overflow-style: none;
            scrollbar-width: none
            }
            @keyframes pulse-slow {
            0%,
            100% {
            opacity: .4;
            transform: scale(1)
            }
            50% {
            opacity: .8;
            transform: scale(1.2)
            }
            }
            .animate-pulse-slow {
            animation: pulse-slow 6s infinite ease-in-out
            }
         </style>
      </section>
      <section class="relative py-12 bg-gradient-to-b from-pink-50 via-white to-blue-50 overflow-hidden">
            <div class="container mx-auto px-6 lg:px-12 relative z-10 text-center">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">Every <span class="text-brand-pink">Fertility Challenge</span> Deserves the Right Care
                </h2>
                <p class="text-gray-600 max-w-2xl mx-auto mb-12">We combine empathy, expertise, and innovation to guide you toward parenthood — with care made just for you.
                </p>

                <div class="relative overflow-hidden">
                    <div id="fertilityChallengesSlider" class="flex gap-6 overflow-x-auto snap-x snap-mandatory pb-4 scroll-smooth no-scrollbar">

                        <div class="min-w-[80%] sm:min-w-[45%] md:min-w-[30%] lg:min-w-[23%] p-[2px] bg-gradient-to-tr from-pink-200 to-blue-200 rounded-3xl snap-start hover:shadow-xl transition-all duration-300">
                            <div class="bg-white rounded-3xl p-6 flex flex-col items-center text-center h-full">
                                <div class="w-14 h-14 rounded-full bg-gradient-to-tr from-pink-400 to-red-300 flex items-center justify-center mb-4 text-2xl">
                                    💗
                                </div>
                                <h3 class="text-lg font-semibold text-gray-800 mb-2">Difficulty Conceiving</h3>
                                <p class="text-gray-500 text-sm h-16">Personalized IVF programs to help couples achieve their dream of parenthood.
                                </p>
                                <a href="#" class="bg-brand-pink text-white px-6 py-1 rounded-full font-semibold text-lg shadow-lg mt-2 hover:bg-pink-600 transition-colors">Know More</a>
                            </div>
                        </div>

                        <div class="min-w-[80%] sm:min-w-[45%] md:min-w-[30%] lg:min-w-[23%] p-[2px] bg-gradient-to-tr from-blue-200 to-cyan-200 rounded-3xl snap-start hover:shadow-xl transition-all duration-300">
                            <div class="bg-white rounded-3xl p-6 flex flex-col items-center text-center h-full">
                                <div class="w-14 h-14 rounded-full bg-gradient-to-tr from-blue-400 to-cyan-300 flex items-center justify-center mb-4 text-2xl">
                                    🌈
                                </div>
                                <h3 class="text-lg font-semibold text-gray-800 mb-2">Female Infertility</h3>
                                <p class="text-gray-500 text-sm h-16">Gentle IUI care for couples seeking a more natural conception path.
                                </p>
                                <a href="#" class="bg-brand-pink text-white px-6 py-1 rounded-full font-semibold text-lg shadow-lg mt-2 hover:bg-pink-600 transition-colors">Know More</a>
                            </div>
                        </div>

                        <div class="min-w-[80%] sm:min-w-[45%] md:min-w-[30%] lg:min-w-[23%] p-[2px] bg-gradient-to-tr from-purple-200 to-pink-200 rounded-3xl snap-start hover:shadow-xl transition-all duration-300">
                            <div class="bg-white rounded-3xl p-6 flex flex-col items-center text-center h-full">
                                <div class="w-14 h-14 rounded-full bg-gradient-to-tr from-purple-400 to-pink-300 flex items-center justify-center mb-4 text-2xl">
                                    🌸
                                </div>
                                <h3 class="text-lg font-semibold text-gray-800 mb-2">Unexplained Infertility</h3>
                                <p class="text-gray-500 text-sm h-16">Preserve your fertility with leading-edge freezing and storage facilities.
                                </p>
                                <a href="#" class="bg-brand-pink text-white px-6 py-1 rounded-full font-semibold text-lg shadow-lg mt-2 hover:bg-pink-600 transition-colors">Know More</a>
                            </div>
                        </div>

                        <div class="min-w-[80%] sm:min-w-[45%] md:min-w-[30%] lg:min-w-[23%] p-[2px] bg-gradient-to-tr from-green-200 to-lime-200 rounded-3xl snap-start hover:shadow-xl transition-all duration-300">
                            <div class="bg-white rounded-3xl p-6 flex flex-col items-center text-center h-full">
                                <div class="w-14 h-14 rounded-full bg-gradient-to-tr from-green-400 to-lime-300 flex items-center justify-center mb-4 text-2xl">
                                    👶
                                </div>
                                <h3 class="text-lg font-semibold text-gray-800 mb-2">Male Infertility</h3>
                                <p class="text-gray-500 text-sm h-16">Comprehensive male fertility diagnosis and modern treatment options.
                                </p>
                                <a href="#" class="bg-brand-pink text-white px-6 py-1 rounded-full font-semibold text-lg shadow-lg mt-2 hover:bg-pink-600 transition-colors">Know More</a>
                            </div>
                        </div>

                        <div class="min-w-[80%] sm:min-w-[45%] md:min-w-[30%] lg:min-w-[23%] p-[2px] bg-gradient-to-tr from-orange-200 to-yellow-200 rounded-3xl snap-start hover:shadow-xl transition-all duration-300">
                            <div class="bg-white rounded-3xl p-6 flex flex-col items-center text-center h-full">
                                <div class="w-14 h-14 rounded-full bg-gradient-to-tr from-orange-400 to-yellow-300 flex items-center justify-center mb-4 text-2xl">
                                    🌿
                                </div>
                                <h3 class="text-lg font-semibold text-gray-800 mb-2">PCOS Management</h3>
                                <p class="text-gray-500 text-sm h-16">End-to-end PCOS fertility care with hormonal balance and wellness focus.
                                </p>
                                <a href="#" class="bg-brand-pink text-white px-6 py-1 rounded-full font-semibold text-lg shadow-lg mt-2 hover:bg-pink-600 transition-colors">Know More</a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
     </section>
      {{-- <section class="relative py-12 bg-gradient-to-b from-pink-50 via-white to-blue-50 overflow-hidden">
         <div class="container mx-auto px-6 lg:px-12 relative z-10 text-center">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">Every <span class="text-brand-pink">Fertility
               Challenge</span> Deserves the Right Care
            </h2>
            <p class="text-gray-600 max-w-2xl mx-auto mb-12">We combine empathy, expertise, and innovation to guide you
               toward parenthood — with care made just for you.
            </p>
            <div class="relative overflow-hidden">
               <div id="fertilitySlider" class="flex transition-transform duration-700 ease-linear">
                  <div
                     class="min-w-[80%] sm:min-w-[45%] md:min-w-[30%] lg:min-w-[23%] mx-2 p-[2px] bg-gradient-to-tr from-pink-200 to-blue-200 rounded-3xl">
                     <div class="bg-white rounded-3xl p-6 flex flex-col items-center text-center">
                        <div
                           class="w-14 h-14 rounded-full bg-gradient-to-tr from-pink-400 to-red-300 flex items-center justify-center mb-4 text-2xl">
                           💗
                        </div>
                        <h3 class="text-lg font-semibold text-gray-800 mb-2">Difficulty Conceiving</h3>
                        <p class="text-gray-500 text-sm h-16">Personalized IVF programs to help couples achieve
                           their dream of parenthood.
                        </p>
                        <a href="#"
                           class="bg-brand-pink text-white px-6 py-1 rounded-full font-semibold text-lg shadow-lg mt-2">Know
                        More</a>
                     </div>
                  </div>
                  <div
                     class="min-w-[80%] sm:min-w-[45%] md:min-w-[30%] lg:min-w-[23%] mx-2 p-[2px] bg-gradient-to-tr from-blue-200 to-cyan-200 rounded-3xl">
                     <div class="bg-white rounded-3xl p-6 flex flex-col items-center text-center">
                        <div
                           class="w-14 h-14 rounded-full bg-gradient-to-tr from-blue-400 to-cyan-300 flex items-center justify-center mb-4 text-2xl">
                           🌈
                        </div>
                        <h3 class="text-lg font-semibold text-gray-800 mb-2">Female Infertility</h3>
                        <p class="text-gray-500 text-sm h-16">Gentle IUI care for couples seeking a more natural
                           conception path.
                        </p>
                        <a href="#"
                           class="bg-brand-pink text-white px-6 py-1 rounded-full font-semibold text-lg shadow-lg mt-2">Know
                        More</a>
                     </div>
                  </div>
                  <div
                     class="min-w-[80%] sm:min-w-[45%] md:min-w-[30%] lg:min-w-[23%] mx-2 p-[2px] bg-gradient-to-tr from-purple-200 to-pink-200 rounded-3xl">
                     <div class="bg-white rounded-3xl p-6 flex flex-col items-center text-center">
                        <div
                           class="w-14 h-14 rounded-full bg-gradient-to-tr from-purple-400 to-pink-300 flex items-center justify-center mb-4 text-2xl">
                           🌸
                        </div>
                        <h3 class="text-lg font-semibold text-gray-800 mb-2">Unexplained Infertility</h3>
                        <p class="text-gray-500 text-sm h-16">Preserve your fertility with leading-edge freezing and
                           storage facilities.
                        </p>
                        <a href="#"
                           class="bg-brand-pink text-white px-6 py-1 rounded-full font-semibold text-lg shadow-lg mt-2">Know
                        More</a>
                     </div>
                  </div>
                  <div
                     class="min-w-[80%] sm:min-w-[45%] md:min-w-[30%] lg:min-w-[23%] mx-2 p-[2px] bg-gradient-to-tr from-green-200 to-lime-200 rounded-3xl">
                     <div class="bg-white rounded-3xl p-6 flex flex-col items-center text-center">
                        <div
                           class="w-14 h-14 rounded-full bg-gradient-to-tr from-green-400 to-lime-300 flex items-center justify-center mb-4 text-2xl">
                           👶
                        </div>
                        <h3 class="text-lg font-semibold text-gray-800 mb-2">Male Infertility</h3>
                        <p class="text-gray-500 text-sm h-16">Comprehensive male fertility diagnosis and modern
                           treatment options.
                        </p>
                        <a href="#"
                           class="bg-brand-pink text-white px-6 py-1 rounded-full font-semibold text-lg shadow-lg mt-2">Know
                        More</a>
                     </div>
                  </div>
                  <div
                     class="min-w-[80%] sm:min-w-[45%] md:min-w-[30%] lg:min-w-[23%] mx-2 p-[2px] bg-gradient-to-tr from-orange-200 to-yellow-200 rounded-3xl">
                     <div class="bg-white rounded-3xl p-6 flex flex-col items-center text-center">
                        <div
                           class="w-14 h-14 rounded-full bg-gradient-to-tr from-orange-400 to-yellow-300 flex items-center justify-center mb-4 text-2xl">
                           🌿
                        </div>
                        <h3 class="text-lg font-semibold text-gray-800 mb-2">PCOS Management</h3>
                        <p class="text-gray-500 text-sm h-16">End-to-end PCOS fertility care with hormonal balance
                           and wellness focus.
                        </p>
                        <a href="#"
                           class="bg-brand-pink text-white px-6 py-1 rounded-full font-semibold text-lg shadow-lg mt-2">Know
                        More</a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section> --}}
      <section class="relative bg-white py-12 overflow-hidden">
         <div class="container mx-auto px-6">
            <div class="text-center">
               <h2 class="text-3xl md:text-4xl font-bold text-gray-800 leading-tight">Your <span
                  class="text-brand-pink">IVF Journey</span> — Step by Step</h2>
               <p class="text-gray-600 mt-4 text-lg">Follow our simple process designed with care and expertise.</p>
            </div>
            <svg class="hidden md:block absolute top-48 left-0 w-full z-0" viewBox="0 0 1200 200" fill="none">
               <path d="M0,100 C200,10 400,190 600,100 C800,190 1000,10 1200,100" stroke="#e5e7eb" stroke-width="4"
                  fill="none" stroke-linecap="round"></path>
            </svg>
            <div
               class="relative flex md:flex-row flex-nowrap md:justify-between items-start md:items-center gap-10 md:gap-0 mt-10 overflow-x-auto md:overflow-visible px-2 md:px-0 snap-x snap-mandatory scrollbar-hide">
               <div
                  class="relative flex-shrink-0 snap-center z-10 flex flex-col items-center text-center group w-64 md:w-1/5">
                  <div
                     class="w-20 h-20 flex items-center justify-center rounded-full bg-brand-pink text-white shadow-2xl transition duration-500 group-hover:scale-110">
                     <i class="fa-solid fa-user-doctor text-3xl"></i>
                  </div>
                  <h3 class="mt-4 font-semibold text-lg text-gray-800">Consultation</h3>
                  <p class="mt-2 text-gray-600 text-sm">Meet your fertility specialist and discuss your goals.</p>
               </div>
               <div
                  class="relative flex-shrink-0 snap-center z-10 flex flex-col items-center text-center group w-64 md:w-1/5 md:mt-32">
                  <div
                     class="w-20 h-20 flex items-center justify-center rounded-full bg-brand-blue text-white shadow-2xl transition duration-500 group-hover:scale-110">
                     <i class="fa-solid fa-vial text-3xl"></i>
                  </div>
                  <h3 class="mt-4 font-semibold text-lg text-gray-800">Ovarian Stimulation</h3>
                  <p class="mt-2 text-gray-600 text-sm">Stimulate healthy egg production with guided care.</p>
               </div>
               <div
                  class="relative flex-shrink-0 snap-center z-10 flex flex-col items-center text-center group w-64 md:w-1/5">
                  <div
                     class="w-20 h-20 flex items-center justify-center rounded-full bg-brand-pink text-white shadow-2xl transition duration-500 group-hover:scale-110">
                     <i class="fa-solid fa-egg text-3xl"></i>
                  </div>
                  <h3 class="mt-4 font-semibold text-lg text-gray-800">Egg Retrieval</h3>
                  <p class="mt-2 text-gray-600 text-sm">Gently collect eggs for the next stage of your journey.</p>
               </div>
               <div
                  class="relative flex-shrink-0 snap-center z-10 flex flex-col items-center text-center group w-64 md:w-1/5 md:mt-32">
                  <div
                     class="w-20 h-20 flex items-center justify-center rounded-full bg-brand-blue text-white shadow-2xl transition duration-500 group-hover:scale-110">
                     <i class="fa-solid fa-heart-pulse text-3xl"></i>
                  </div>
                  <h3 class="mt-4 font-semibold text-lg text-gray-800">Fertilization</h3>
                  <p class="mt-2 text-gray-600 text-sm">Combine eggs and sperm in our state-of-the-art lab.</p>
               </div>
               <div
                  class="relative flex-shrink-0 snap-center z-10 flex flex-col items-center text-center group w-64 md:w-1/5">
                  <div
                     class="w-20 h-20 flex items-center justify-center rounded-full bg-brand-pink text-white shadow-2xl transition duration-500 group-hover:scale-110">
                     <i class="fa-solid fa-baby text-3xl"></i>
                  </div>
                  <h3 class="mt-4 font-semibold text-lg text-gray-800">Embryo Transfer</h3>
                  <p class="mt-2 text-gray-600 text-sm">The embryo is carefully placed, marking a new beginning.</p>
               </div>
            </div>
         </div>
      </section>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
      <section class="relative bg-white py-12 overflow-hidden">
         <div class="container mx-auto px-6 lg:px-16 relative z-10">
            <div class="text-center mb-8">
               <h2 class="text-4xl font-bold text-gray-800 mb-4 leading-tight"><span class="text-brand-pink">Real
                  Stories, Real Miracles</span>
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
         <div class="container mx-auto px-6 lg:px-16 relative z-10">
            <div class="text-center mb-8">
               <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4 leading-tight">Empowering the <span
                  class="text-brand-pink">Next Generation </span>of Fertility Specialists</h2>
            </div>
            <div class="container mx-auto px-6 md:px-12 lg:px-24 flex flex-col md:flex-row items-center gap-12">
               <div class="flex-shrink-0"><img
                  src="data:image/jpeg;base64,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"
                  alt="Fertility Specialist"
                  class="w-80 h-80 object-contain rounded-full shadow-2xl border-4 border-pink-200"></div>
               <div class="flex-1 space-y-6">
                  <p class="text-gray-700 text-lg leading-relaxed">"Dr. Richika Sahay Shukla is a highly respected IVF
                     specialist and the Founder &amp; Director of India IVF Clinic. With over two decades of
                     experience in the field of reproductive medicine, she has been a guiding force for countless
                     couples on their journey to parenthood. Known for her compassionate approach and clinical
                     excellence, Dr. Richika specializes in IVF, ICSI, IUI, fertility preservation, and advanced
                     hystero-laparoscopic procedures."
                  </p>
                  <p class="text-gray-700 text-lg leading-relaxed">She has trained at premier institutions and worked
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
                        <div class="flex justify-center mt-3 text-xs gap-2"><button
                           class="bg-brand-pink hover:bg-brand-blue text-white px-4 py-2 rounded-full shadow-lg transition-all duration-500 hover:scale-105">View
                           Profile</button> <button
                              class="bg-brand-pink hover:bg-brand-blue text-white px-4 py-2 rounded-full shadow-lg transition-all duration-500 hover:scale-105">Book
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
                        <div class="flex justify-center mt-3 text-xs gap-2"><button
                           class="bg-brand-pink hover:bg-brand-blue text-white px-4 py-2 rounded-full shadow-lg transition-all duration-500 hover:scale-105">View
                           Profile</button> <button
                              class="bg-brand-pink hover:bg-brand-blue text-white px-4 py-2 rounded-full shadow-lg transition-all duration-500 hover:scale-105">Book
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
                        <div class="flex justify-center mt-3 text-xs gap-2"><button
                           class="bg-brand-pink hover:bg-brand-blue text-white px-4 py-2 rounded-full shadow-lg transition-all duration-500 hover:scale-105">View
                           Profile</button> <button
                              class="bg-brand-pink hover:bg-brand-blue text-white px-4 py-2 rounded-full shadow-lg transition-all duration-500 hover:scale-105">Book
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
                        <div class="flex justify-center mt-3 text-xs gap-2"><button
                           class="bg-brand-pink hover:bg-brand-blue text-white px-4 py-2 rounded-full shadow-lg transition-all duration-500 hover:scale-105">View
                           Profile</button> <button
                              class="bg-brand-pink hover:bg-brand-blue text-white px-4 py-2 rounded-full shadow-lg transition-all duration-500 hover:scale-105">Book
                           Appointment</button>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <section class="relative bg-white py-12 overflow-hidden">
         <div class="container mx-auto px-6 lg:px-12 flex flex-col-reverse md:flex-row items-center gap-10">
            <div class="md:w-1/2 text-center md:text-left">
               <h2 class="text-3xl md:text-4xl font-bold text-gray-800 leading-tight mb-6">Affordable <span
                  class="text-brand-pink">IVF Treatments</span> Without Compromise</h2>
               <p class="text-gray-600 text-lg mb-8 max-w-xl">Experience world-class fertility care with transparent
                  pricing, advanced technology, and compassionate support—because starting your family shouldn’t come
                  with financial stress.
               </p>
               <button
                  class="bg-brand-blue hover:bg-brand-pink text-white px-6 py-3 rounded-full shadow-lg hover:shadow-2xl transition-all duration-500 hover:scale-105"><i
                  class="fa-solid fa-box-open mr-2"></i> View IVF Packages</button>
            </div>
            <div class="md:w-1/2 flex justify-center relative">
               <div class="relative">
                  <img src="https://images.pexels.com/photos/3038369/pexels-photo-3038369.jpeg"
                     alt="IVF Treatment"
                     class="rounded-3xl shadow-2xl border-4 border-white transform hover:scale-105 transition-transform duration-500">
                  <div class="absolute -bottom-6 -left-6 bg-white p-4 rounded-2xl shadow-lg">
                     <p class="text-brand-pink font-semibold text-sm">Trusted by 10,000+ Families</p>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <section id="learn-fertility"
         class="relative py-12 bg-gradient-to-b from-pink-50 via-white to-blue-50 overflow-hidden">
         <div class="container mx-auto px-6 lg:px-16 relative z-10">
            <div class="text-center mb-8 max-w-3xl mx-auto">
               <h2 class="text-3xl md:text-4xl font-extrabold text-gray-800 leading-tight mb-4">Learn More About <span
                  class="bg-brand-pink bg-clip-text text-transparent">Fertility Health</span></h2>
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
            <div class="text-center mt-8 md:mt-16"><button
               class="bg-brand-pink hover:bg-brand-blue text-white px-10 py-3 rounded-full font-semibold text-lg shadow-lg hover:shadow-2xl transition-all duration-500 hover:scale-105">Explore
               Articles</button>
            </div>
         </div>
      </section>
      <section class="relative py-12 bg-white overflow-hidden">
         <div class="container mx-auto px-6 text-center relative z-10">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-800 leading-tight mb-6">Ready to <span
               class="text-brand-pink">Start Your Fertility Journey?</span></h2>
            <p class="text-gray-600 text-lg max-w-3xl mx-auto mb-10 animate-fadeInUp delay-150">Begin your journey with
               expert fertility specialists who truly understand your hopes and challenges. From diagnosis to
               treatment, we’re with you — every single step of the way.
            </p>
            <div class="flex flex-col sm:flex-row justify-center gap-5 animate-fadeInUp delay-300"><a
               href="#book-consultation"
               class="bg-brand-blue text-white px-6 py-3 rounded-full font-semibold text-lg shadow-lg hover:bg-brand-pink hover:scale-105 transition-all duration-300">Book
               a Consultation </a><a href="#contact"
                  class="border-2 border-[#20417e] text-[#20417e] px-6 py-3 rounded-full font-semibold text-lg hover:bg-[#20417e] hover:text-white transition-all duration-300">Call
               Now</a>
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
