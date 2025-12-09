@extends('frontend.layouts.master')
@section('title', 'Home')
@section('content')
      <section class="relative bg-gradient-to-b from-pink-50 via-white to-blue-50 py-8 sm:py-12 overflow-hidden">
         <div
            class="container mx-auto px-6 text-center md:text-left flex flex-col-reverse md:flex-row items-center gap-10">
            <div class="md:w-1/2">
               <h1 class="text-3xl sm:text-4xl md:text-5xl font-bold text-gray-800 leading-tight mb-4">Pregnancy <span
                  class="text-brand-pink">Loss Care</span></h1>
               <p class="text-gray-600 text-base sm:text-lg mb-6 leading-relaxed">If you've been trying to conceive without success,
                  you're not alone. Around 1 in 6 couples experience fertility challenges. Our compassionate team uses
                  advanced diagnostics and personalized care to uncover the causes and guide you toward parenthood.
               </p>
               <button
                  class="bg-brand-blue hover:bg-brand-pink text-white px-5 sm:px-6 py-2.5 sm:py-3 rounded-full shadow-lg hover:shadow-2xl transition-all duration-500 hover:scale-105 text-sm sm:text-base">Book
               a Consultation</button>
            </div>
            <div class="md:w-1/2 relative w-full"><img src="https://images.pexels.com/photos/5700170/pexels-photo-5700170.jpeg"
               alt="Difficulty Conceiving"
               class="w-full h-auto rounded-3xl shadow-2xl border-4 border-white transform scale-90 hover:scale-95 transition-transform duration-500">
            </div>
         </div>
      </section>
      <section class="py-8 sm:py-12 bg-white">
         <div class="container mx-auto px-6 text-center">
            <h2 class="text-2xl sm:text-3xl md:text-4xl font-bold text-gray-800 mb-4">Common Causes of Pregnancy Loss Care</h2>
            <p class="text-gray-600 mb-12 max-w-2xl mx-auto text-sm sm:text-base">There can be various factors — physical, hormonal, or
               lifestyle-related — that affect your fertility. Understanding these causes helps us design the most
               effective treatment plan for you.
            </p>
            <div class="flex md:grid md:grid-cols-3 gap-6 overflow-x-auto snap-x snap-mandatory pb-4 scrollbar-hide">
                  <div
                     class="flex-shrink-0 w-80 md:w-auto bg-gradient-to-b from-pink-50 to-white rounded-3xl p-6 sm:p-8 shadow-lg hover:shadow-2xl transition snap-start">
                  <img src="https://images.pexels.com/photos/7653670/pexels-photo-7653670.jpeg"
                     alt="Hormonal Imbalance" class="w-20 h-20 sm:w-24 sm:h-24 mx-auto rounded-full mb-4 object-cover shadow-md">
                  <h3 class="text-lg sm:text-xl font-semibold text-gray-800 mb-3">Hormonal Imbalances</h3>
                  <p class="text-gray-600 text-sm sm:text-base">Irregular hormone levels can disrupt ovulation or sperm production,
                     impacting fertility. Our doctors perform hormone tests to identify and treat these imbalances.
                  </p>
               </div>
               <div
                  class="flex-shrink-0 w-80 md:w-auto bg-gradient-to-b from-pink-50 to-white rounded-3xl p-6 sm:p-8 shadow-lg hover:shadow-2xl transition snap-start">
                  <img src="https://images.pexels.com/photos/5982466/pexels-photo-5982466.jpeg"
                     alt="Blocked Fallopian Tubes"
                     class="w-20 h-20 sm:w-24 sm:h-24 mx-auto rounded-full mb-4 object-cover shadow-md">
                  <h3 class="text-lg sm:text-xl font-semibold text-gray-800 mb-3">Blocked Fallopian Tubes</h3>
                  <p class="text-gray-600 text-sm sm:text-base">Tubal blockages can prevent the egg and sperm from meeting. Advanced
                     imaging helps us diagnose and correct these issues effectively.
                  </p>
               </div>
               <div
                  class="flex-shrink-0 w-80 md:w-auto bg-gradient-to-b from-pink-50 to-white rounded-3xl p-6 sm:p-8 shadow-lg hover:shadow-2xl transition snap-start">
                  <img src="https://images.pexels.com/photos/11219937/pexels-photo-11219937.jpeg"
                     alt="Male Factor Infertility"
                     class="w-20 h-20 sm:w-24 sm:h-24 mx-auto rounded-full mb-4 object-cover shadow-md">
                  <h3 class="text-lg sm:text-xl font-semibold text-gray-800 mb-3">Male Factor Infertility</h3>
                  <p class="text-gray-600 text-sm sm:text-base">Issues with sperm count, movement, or structure are common and treatable.
                     We offer complete male fertility testing and lifestyle guidance.
                  </p>
               </div>
            </div>
         </div>
      </section>
      <section class="relative py-8 sm:py-12 bg-gradient-to-b from-pink-50 via-white to-blue-50 overflow-hidden">
         <div class="relative container mx-auto px-6 text-center">
            <h2 class="text-2xl sm:text-3xl md:text-4xl font-bold text-gray-800 mb-6">How It's <span
               class="text-pink-600">Diagnosed</span></h2>
            <p class="text-gray-600 max-w-2xl mx-auto mb-10 text-sm sm:text-base">Every fertility journey begins with a detailed diagnosis.
               Here's how our specialists uncover the root cause — through a combination of advanced tests and clinical
               insight.
            </p>
            <div
               class="relative flex md:flex-row flex-nowrap md:justify-between items-start md:items-center space-x-6 overflow-x-auto md:overflow-visible snap-x snap-mandatory scrollbar-hide">
               <svg viewBox="0 0 1000 100" preserveAspectRatio="none"
                  class="absolute hidden md:block w-full bottom-32">
                  <path d="M0,50 C200,100 800,0 1000,50" stroke="#f472b6" stroke-width="2" fill="none"
                     stroke-dasharray="3 3"></path>
               </svg>
                  <div
                     class="flex-shrink-0 snap-start flex flex-col items-center text-center min-w-[260px] md:min-w-0 md:w-1/4 group">
                  <div
                     class="w-20 h-20 sm:w-24 sm:h-24 flex items-center justify-center rounded-full bg-gradient-to-r from-pink-500 to-rose-400 text-white text-3xl sm:text-4xl shadow-xl z-10 relative group-hover:scale-110 transition-transform duration-300">
                     <i class="fa-solid fa-flask"></i>
                  </div>
                  <div class="mt-6 max-w-xs">
                     <h3 class="text-lg sm:text-xl font-semibold text-gray-800 mb-2">Hormone Tests</h3>
                     <p class="text-gray-600 text-sm sm:text-base">Checks levels of FSH, LH, and AMH to assess ovarian health and
                        ovulation.
                     </p>
                  </div>
               </div>
               <div
                  class="flex-shrink-0 snap-start flex flex-col items-center text-center min-w-[260px] md:min-w-0 md:w-1/4 group">
                  <div
                     class="w-20 h-20 sm:w-24 sm:h-24 flex items-center justify-center rounded-full bg-gradient-to-r from-blue-500 to-indigo-500 text-white text-3xl sm:text-4xl shadow-xl z-10 relative group-hover:scale-110 transition-transform duration-300">
                     <i class="fa-solid fa-vial-circle-check"></i>
                  </div>
                  <div class="mt-6 max-w-xs">
                     <h3 class="text-lg sm:text-xl font-semibold text-gray-800 mb-2">Semen Analysis</h3>
                     <p class="text-gray-600 text-sm sm:text-base">Evaluates sperm count, shape, and motility — key to identifying male
                        factors.
                     </p>
                  </div>
               </div>
               <div
                  class="flex-shrink-0 snap-start flex flex-col items-center text-center min-w-[260px] md:min-w-0 md:w-1/4 group">
                  <div
                     class="w-20 h-20 sm:w-24 sm:h-24 flex items-center justify-center rounded-full bg-gradient-to-r from-purple-500 to-pink-500 text-white text-3xl sm:text-4xl shadow-xl z-10 relative group-hover:scale-110 transition-transform duration-300">
                     <i class="fa-solid fa-x-ray"></i>
                  </div>
                  <div class="mt-6 max-w-xs">
                     <h3 class="text-lg sm:text-xl font-semibold text-gray-800 mb-2">Imaging</h3>
                     <p class="text-gray-600 text-sm sm:text-base">Uses ultrasound and HSG scans to visualize uterus and fallopian tubes.
                     </p>
                  </div>
               </div>
               <div
                  class="flex-shrink-0 snap-start flex flex-col items-center text-center min-w-[260px] md:min-w-0 md:w-1/4 group">
                  <div
                     class="w-20 h-20 sm:w-24 sm:h-24 flex items-center justify-center rounded-full bg-gradient-to-r from-teal-500 to-blue-500 text-white text-3xl sm:text-4xl shadow-xl z-10 relative group-hover:scale-110 transition-transform duration-300">
                     <i class="fa-solid fa-dna"></i>
                  </div>
                  <div class="mt-6 max-w-xs">
                     <h3 class="text-lg sm:text-xl font-semibold text-gray-800 mb-2">Genetic Testing</h3>
                     <p class="text-gray-600 text-sm sm:text-base">Identifies chromosomal and hereditary factors affecting conception.</p>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <section class="relative bg-brand-blue text-white py-5 sm:py-6 text-center">
         <div class="container mx-auto px-6">
            <h2 class="text-2xl sm:text-3xl md:text-4xl font-bold mb-3">Ready to Take the Next Step?</h2>
            <p class="text-base sm:text-lg mb-4 max-w-2xl mx-auto">Our fertility specialists are here to listen, guide, and support
               you — with care that's both expert and empathetic.
            </p>
            <button
               class="bg-brand-pink text-white px-5 sm:px-6 py-2.5 sm:py-3 rounded-full shadow-lg hover:shadow-2xl transition-all duration-500 hover:scale-105 mb-2 text-sm sm:text-base"><i
               class="fa-solid fa-hand-holding-heart mr-2"></i> Book Your Consultation</button>
         </div>
      </section>
      <section class="relative bg-gradient-to-b from-pink-50 via-white to-blue-50 py-8 sm:py-12 overflow-hidden">
         <div class="container mx-auto px-6">
            <div class="text-center mb-10">
               <h2 class="text-2xl sm:text-3xl md:text-4xl font-bold text-gray-800 leading-tight"><span
                  class="text-brand-pink">Treatment</span> &amp; Support Options</h2>
               <p class="text-gray-600 mt-4 text-base sm:text-lg max-w-2xl mx-auto">Explore personalized fertility treatments,
                  advanced techniques, and holistic wellness programs designed for your journey.
               </p>
            </div>
            <div
               class="flex flex-nowrap overflow-x-auto snap-x snap-mandatory sm:grid sm:grid-cols-3 sm:overflow-visible gap-10 scrollbar-hide pb-4">
               <div
                  class="min-w-[80%] sm:min-w-0 snap-start group relative bg-white/60 backdrop-blur-lg rounded-3xl shadow-lg hover:shadow-2xl transition-all duration-500 p-4 border border-white/40 hover:-translate-y-2">
                  <div class="flex flex-col items-center text-center">
                     <div
                        class="w-14 h-14 sm:w-16 sm:h-16 flex items-center justify-center rounded-full bg-brand-blue text-white shadow-xl mb-6 group-hover:scale-110 transition-transform duration-300">
                        <i class="fa-solid fa-heart-pulse text-xl sm:text-2xl"></i>
                     </div>
                     <h3 class="text-lg sm:text-xl font-semibold text-gray-800 mb-1">IVF &amp; Related Treatments</h3>
                     <p class="text-gray-600 mb-4 h-16 text-xs sm:text-sm">Comprehensive fertility treatments including IVF,
                        ICSI, and egg freezing guided by experienced specialists.
                     </p>
                     <a href="#"
                        class="text-brand-blue font-semibold hover:text-brand-pink transition-all duration-300 text-sm sm:text-base">Learn
                     More <i class="fa-solid fa-arrow-right-long ml-2"></i></a>
                  </div>
               </div>
               <div
                  class="min-w-[80%] sm:min-w-0 snap-start group relative bg-white/60 backdrop-blur-lg rounded-3xl shadow-lg hover:shadow-2xl transition-all duration-500 p-4 border border-white/40 hover:-translate-y-2">
                  <div class="flex flex-col items-center text-center">
                     <div
                        class="w-14 h-14 sm:w-16 sm:h-16 flex items-center justify-center rounded-full bg-brand-blue text-white shadow-xl mb-6 group-hover:scale-110 transition-transform duration-300">
                        <i class="fa-solid fa-flask text-xl sm:text-2xl"></i>
                     </div>
                     <h3 class="text-lg sm:text-xl font-semibold text-gray-800 mb-1">Advanced Techniques</h3>
                     <p class="text-gray-600 mb-4 h-16 text-xs sm:text-sm">Utilizing the latest lab innovations and precision
                        diagnostics to enhance your success rate.
                     </p>
                     <a href="#"
                        class="text-brand-blue font-semibold hover:text-brand-pink transition-all duration-300 text-sm sm:text-base">Learn
                     More <i class="fa-solid fa-arrow-right-long ml-2"></i></a>
                  </div>
               </div>
               <div
                  class="min-w-[80%] sm:min-w-0 snap-start group relative bg-white/60 backdrop-blur-lg rounded-3xl shadow-lg hover:shadow-2xl transition-all duration-500 p-4 border border-white/40 hover:-translate-y-2">
                  <div class="flex flex-col items-center text-center">
                     <div
                        class="w-14 h-14 sm:w-16 sm:h-16 flex items-center justify-center rounded-full bg-brand-blue text-white shadow-xl mb-6 group-hover:scale-110 transition-transform duration-300">
                        <i class="fa-solid fa-leaf text-xl sm:text-2xl"></i>
                     </div>
                     <h3 class="text-lg sm:text-xl font-semibold text-gray-800 mb-1">Fertility Wellness</h3>
                     <p class="text-gray-600 mb-4 h-16 text-xs sm:text-sm">Supporting your mind and body with nutrition,
                        mindfulness, and lifestyle guidance.
                     </p>
                     <a href="#"
                        class="text-brand-blue font-semibold hover:text-brand-pink transition-all duration-300 text-sm sm:text-base">Learn
                     More <i class="fa-solid fa-arrow-right-long ml-2"></i></a>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
      <section class="relative bg-white py-8 sm:py-12 overflow-hidden">
         <div class="container mx-auto px-6 lg:px-16 relative z-10">
            <div class="text-center mb-8">
               <h2 class="text-2xl sm:text-3xl md:text-4xl font-bold text-gray-800 mb-4 leading-tight"><span
                  class="text-brand-pink">Real Stories, Real Miracles</span></h2>
            </div>
            <div
               class="flex flex-nowrap overflow-x-auto snap-x snap-mandatory sm:grid sm:grid-cols-2 sm:overflow-visible gap-6 scrollbar-hide pb-4">
               <div
                  class="min-w-[80%] sm:min-w-0 snap-start bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-2xl transition duration-300 flex-shrink-0">
                  <img src="https://media.istockphoto.com/id/1301595548/photo/female-doctor-stock-photo.jpg?b=1&amp;s=612x612&amp;w=0&amp;k=20&amp;c=WIQmfgE58OHntqYo9FmuQMfEplxajHu5P-Nw30gS7cs="
                     alt="John Doe" class="w-full h-48 sm:h-64 object-cover">
                  <div class="p-4 text-center">
                     <h3 class="text-lg sm:text-xl font-semibold text-gray-800">John Doe</h3>
                  </div>
               </div>
               <div
                  class="min-w-[80%] sm:min-w-0 snap-start bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-2xl transition duration-300 flex-shrink-0">
                  <img src="https://media.istockphoto.com/id/1270790502/photo/medical-concept-of-indian-beautiful-female-doctor-with-note-book.jpg?b=1&amp;s=612x612&amp;w=0&amp;k=20&amp;c=JBkrfGirsQLvIrn_IF4OtnaxFmWLN4xLGhzftOlAEJg="
                     alt="Dr. Jane Smith" class="w-full h-48 sm:h-64 object-cover">
                  <div class="p-4 text-center">
                     <h3 class="text-lg sm:text-xl font-semibold text-gray-800">Jane Smith</h3>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <section class="relative py-8 sm:py-12 bg-gradient-to-b from-pink-50 via-white to-blue-50 overflow-hidden">
         <div class="absolute -top-20 -right-20 w-96 h-96 bg-blue-100 rounded-full blur-3xl opacity-40 animate-pulse">
         </div>
         <div class="absolute bottom-0 left-0 w-80 h-80 bg-pink-100 rounded-full blur-3xl opacity-30 animate-pulse">
         </div>
         <div class="container mx-auto px-6 text-center relative z-10">
            <h2 class="text-2xl sm:text-3xl md:text-4xl font-bold text-gray-800 mb-4 leading-tight">Take the <span
               class="text-brand-pink">First Step</span> Toward Parenthood</h2>
            <p class="text-gray-600 text-base sm:text-lg max-w-3xl mx-auto mb-10 animate-fadeInUp delay-150">Begin your journey with
               expert fertility specialists who truly understand your hopes and challenges. From diagnosis to
               treatment, we're with you — every single step of the way.
            </p>
            <div class="flex flex-col sm:flex-row justify-center gap-5 animate-fadeInUp delay-300"><a
               href="#book-consultation"
               class="bg-brand-blue text-white px-5 sm:px-6 py-2.5 sm:py-3 rounded-full font-semibold text-sm sm:text-lg shadow-lg hover:bg-brand-pink hover:scale-105 transition-all duration-300">Book
               a Consultation </a><a href="#contact"
                  class="border-2 border-[#20417e] text-[#20417e] px-5 sm:px-6 py-2.5 sm:py-3 rounded-full font-semibold text-sm sm:text-lg hover:bg-[#20417e] hover:text-white transition-all duration-300">Call
               Now</a>
            </div>
         </div>
      </section>
      <section
         class="relative bg-gradient-to-r from-[#20417e] via-[#3a5594] to-[#778aaf] text-white py-8 sm:py-12 overflow-hidden">
         <div class="absolute inset-0"><img src="https://images.pexels.com/photos/2880897/pexels-photo-2880897.jpeg"
            alt="IVF background" class="w-full h-full object-cover opacity-20"></div>
         <div class="container mx-auto relative z-10 px-6 lg:px-16">
            <div class="lg:w-2/3">
               <h2 class="text-2xl sm:text-3xl md:text-4xl font-bold mb-6 leading-tight">Questions About <span
                  class="text-pink-200">IVF and Fertility Treatments</span></h2>
               <p class="text-blue-100 mb-10 text-sm sm:text-base">Understanding your options is the first step toward hope. Here are some
                  of the most common questions our fertility experts answer every day.
               </p>
               <div class="space-y-5">
                  <div x-data="{ open: false }"
                     class="bg-white/90 backdrop-blur-md text-gray-800 rounded-xl shadow-lg overflow-hidden">
                     <button
                        @click="open = !open"
                        class="flex justify-between items-center w-full px-4 sm:px-6 py-3 sm:py-4 text-left font-semibold hover:bg-pink-50 transition text-sm sm:text-base">
                        What
                        is IVF and how does it work?
                        <svg xmlns="http://www.w3.org/2000/svg"
                           :class="{'rotate-180': open}"
                           class="h-5 w-5 text-pink-500 transform transition-transform duration-300 flex-shrink-0 ml-2" fill="none"
                           viewBox="0 0 24 24" stroke="currentColor">
                           <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M19 9l-7 7-7-7"></path>
                        </svg>
                     </button>
                     <div x-show="open" x-transition="" class="px-4 sm:px-6 pb-4 sm:pb-5 text-gray-700 text-sm sm:text-base">IVF combines eggs and sperm
                        in a lab to create embryos, which are then transferred to the uterus.
                     </div>
                  </div>
                  <div x-data="{ open: false }"
                     class="bg-white/90 backdrop-blur-md text-gray-800 rounded-xl shadow-lg overflow-hidden">
                     <button
                        @click="open = !open"
                        class="flex justify-between items-center w-full px-4 sm:px-6 py-3 sm:py-4 text-left font-semibold hover:bg-pink-50 transition text-sm sm:text-base">
                        What
                        is the success rate of IVF?
                        <svg xmlns="http://www.w3.org/2000/svg"
                           :class="{'rotate-180': open}"
                           class="h-5 w-5 text-pink-500 transform transition-transform duration-300 flex-shrink-0 ml-2" fill="none"
                           viewBox="0 0 24 24" stroke="currentColor">
                           <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M19 9l-7 7-7-7"></path>
                        </svg>
                     </button>
                     <div x-show="open" x-transition="" class="px-4 sm:px-6 pb-4 sm:pb-5 text-gray-700 text-sm sm:text-base">Success rates range between
                        40–60% depending on age, health, and medical conditions.
                     </div>
                  </div>
                  <div x-data="{ open: false }"
                     class="bg-white/90 backdrop-blur-md text-gray-800 rounded-xl shadow-lg overflow-hidden">
                     <button
                        @click="open = !open"
                        class="flex justify-between items-center w-full px-4 sm:px-6 py-3 sm:py-4 text-left font-semibold hover:bg-pink-50 transition text-sm sm:text-base">
                        Is
                        IVF painful or risky?
                        <svg xmlns="http://www.w3.org/2000/svg" :class="{'rotate-180': open}"
                           class="h-5 w-5 text-pink-500 transform transition-transform duration-300 flex-shrink-0 ml-2" fill="none"
                           viewBox="0 0 24 24" stroke="currentColor">
                           <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M19 9l-7 7-7-7"></path>
                        </svg>
                     </button>
                     <div x-show="open" x-transition="" class="px-4 sm:px-6 pb-4 sm:pb-5 text-gray-700 text-sm sm:text-base">IVF is minimally invasive and
                        anesthesia ensures the process is comfortable and safe.
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer=""></script>
@endsection
