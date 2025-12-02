@extends('frontend.layouts.master')
@section('content')
 <section class="relative text-white py-6 md:py-12 h-[300px] sm:h-[350px] md:h-[400px]">
         <div class="absolute inset-0 w-full h-full overflow-hidden"><img
            class="w-full h-full object-cover brightness-75"
            src="https://storage.googleapis.com/uxpilot-auth.appspot.com/1127413b9e-0b5ef83b92d241e93706.png"></div>
         <div class="flex flex-col container mx-auto px-6 text-center md:mt-10 opacity-90 items-center">
            <h1 class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl font-extrabold leading-tight">Welcome to <span class="text-pink-200">India
               IVF – Delhi</span>
            </h1>
            <p class="text-white text-sm sm:text-base max-w-xl mx-auto lg:mx-0">Located in Green Park, South Delhi, our centre
               offers advanced IVF labs, experienced specialists, and compassionate care — just minutes from AIIMS and
               Safdarjung Hospital.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center lg:justify-start pt-2 mt-4"><button
               class="bg-brand-pink text-white font-semibold px-5 sm:px-8 py-2.5 sm:py-3 rounded-full shadow-lg hover:scale-105 transition-all duration-300 ease-in-out text-sm sm:text-base">Book
               a Free Consultation</button> <button
                  class="border border-white/70 text-white px-5 sm:px-8 py-2.5 sm:py-3 rounded-full hover:bg-white/10 transition-all duration-300 ease-in-out text-sm sm:text-base">Know
               More</button>
            </div>
         </div>
      </section>
      <section class="bg-white py-12">
         <div class="container mx-auto px-6 md:px-12">
            <div class="text-center mb-12">
            <h2 class="text-2xl sm:text-3xl md:text-4xl font-bold text-gray-800 mb-3">How to Reach Us</h2>
            <p class="text-gray-600 max-w-2xl mx-auto text-sm sm:text-base">We're here to guide you every step of your fertility journey
                  — contact or visit us at our Delhi Centre for any inquiries or appointments.
               </p>
            </div>
            <div class="flex flex-col md:flex-row gap-10 items-start">
               <div class="md:w-1/2 grid grid-cols-1 sm:grid-cols-2 gap-6">
                  <div class="bg-gradient-to-b from-blue-100 to-blue-50 shadow-md rounded-2xl p-6">
                     <h3 class="text-xl font-semibold text-pink-600 mb-2">📍 Address</h3>
                     <p class="text-gray-700 leading-relaxed">Delhi IVF &amp; Fertility Research Centre<br>A-56,
                        Green Park Main, New Delhi – 110016<br>Near AIIMS and Safdarjung Hospital
                     </p>
                  </div>
                  <div class="bg-gradient-to-b from-blue-100 to-blue-50 shadow-md rounded-2xl p-6">
                     <h3 class="text-xl font-semibold text-pink-600 mb-2">📞 Contact</h3>
                     <p class="text-gray-700">Phone: <a href="tel:+911145678900"
                        class="text-pink-600 hover:underline">+91 11 4567 8900</a></p>
                     <p class="text-gray-700">Email: <a href="mailto:info@delhiivfcentre.com"
                        class="text-pink-600 hover:underline">info@delhiivfcentre.com</a></p>
                  </div>
                  <div class="bg-gradient-to-b from-blue-100 to-blue-50 shadow-md rounded-2xl p-6">
                     <h3 class="text-xl font-semibold text-pink-600 mb-2">🕒 Operational Hours</h3>
                     <p class="text-gray-700">Monday – Saturday: 9:00 AM – 7:00 PM</p>
                     <p class="text-gray-700">Sunday: By Appointment Only</p>
                  </div>
                  <div
                     class="bg-gradient-to-b from-blue-100 to-blue-50 shadow-md rounded-2xl p-6 flex flex-col justify-between">
                     <div>
                        <h3 class="text-xl font-semibold text-pink-600 mb-2">🚗 Get Directions</h3>
                        <p class="text-gray-700 leading-relaxed mb-3">Find us easily on Google Maps. Parking
                           available on-site and nearby.
                        </p>
                     </div>
                     <a href="https://goo.gl/maps/zDELiIVFsample" target="_blank"
                        class="text-pink-600 font-semibold hover:underline mt-auto">Open in Maps →</a>
                  </div>
               </div>
               <div class="md:w-1/2 relative w-full"><iframe class="w-full h-[250px] sm:h-[300px] md:h-[390px] rounded-3xl shadow-lg"
                  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d224345.8879734893!2d77.0688999!3d28.5272803!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390ce26f2eebde19%3A0xc2dc97cfbb9d6b6b!2sGreen%20Park%2C%20New%20Delhi!5e0!3m2!1sen!2sin!4v1698654000000!5m2!1sen!2sin"
                  allowfullscreen="" loading="lazy"></iframe></div>
            </div>
         </div>
      </section>
      <section class="py-12 bg-gradient-to-b from-pink-50 via-white to-blue-50 relative">
         <div class="container mx-auto px-6 md:px-12 text-center">
            <h2 class="text-2xl sm:text-3xl md:text-4xl font-bold text-gray-800 mb-8">Our Delhi Centre Gallery</h2>
            <p class="text-gray-600 max-w-2xl mx-auto mb-12 text-sm sm:text-base">Take a glimpse inside our modern IVF facility — where
               advanced technology meets compassionate care.
            </p>
            <div class="relative overflow-x-auto md:overflow-hidden snap-x snap-mandatory scrollbar-hide pb-4">
               <div id="centerCarousel" class="flex flex-nowrap md:transition-transform md:duration-700 md:ease-in-out"><img
                  src="https://indiaivf.co.in/wp-content/uploads/delhi-interior-1.jpg"
                  class="min-w-[85%] sm:min-w-[60%] md:w-1/3 md:min-w-0 flex-shrink-0 rounded-2xl mx-2 shadow-lg object-cover snap-start"
                  alt="IVF Lab Delhi"> <img src="https://indiaivf.co.in/wp-content/uploads/delhi-interior-2.jpg"
                  class="min-w-[85%] sm:min-w-[60%] md:w-1/3 md:min-w-0 flex-shrink-0 rounded-2xl mx-2 shadow-lg object-cover snap-start"
                  alt="Clinic Reception"> <img
                  src="https://indiaivf.co.in/wp-content/uploads/delhi-interior-3.jpg"
                  class="min-w-[85%] sm:min-w-[60%] md:w-1/3 md:min-w-0 flex-shrink-0 rounded-2xl mx-2 shadow-lg object-cover snap-start"
                  alt="Consultation Room"> <img
                  src="https://indiaivf.co.in/wp-content/uploads/delhi-interior-4.jpg"
                  class="min-w-[85%] sm:min-w-[60%] md:w-1/3 md:min-w-0 flex-shrink-0 rounded-2xl mx-2 shadow-lg object-cover snap-start"
                  alt="Patient Lounge"> <img src="https://indiaivf.co.in/wp-content/uploads/delhif2.jpeg"
                  class="min-w-[85%] sm:min-w-[60%] md:w-1/3 md:min-w-0 flex-shrink-0 rounded-2xl mx-2 shadow-lg object-cover snap-start"
                  alt="Operation Theatre"></div>
               <button id="prevBtn"
                  class="hidden md:block absolute top-1/2 -left-4 transform -translate-y-1/2 bg-white p-3 rounded-full shadow-md hover:bg-pink-100 z-10">
                  <svg
                     xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-pink-600" fill="none" viewBox="0 0 24 24"
                     stroke="currentColor">
                     <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7">
                     </path>
                  </svg>
               </button>
               <button id="nextBtn"
                  class="hidden md:block absolute top-1/2 -right-4 transform -translate-y-1/2 bg-white p-3 rounded-full shadow-md hover:bg-pink-100 z-10">
                  <svg
                     xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-pink-600" fill="none" viewBox="0 0 24 24"
                     stroke="currentColor">
                     <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                  </svg>
               </button>
            </div>
         </div>
      </section>
      <section id="treatments-expertise" class="relative py-12 bg-gradient-to-br from-pink-50 via-white to-blue-50">
         <div class="relative container mx-auto px-6">
            <div class="text-center mb-8">
               <h2 class="text-2xl sm:text-3xl md:text-4xl font-bold text-gray-800 mb-4 leading-tight"><span class="text-brand-pink">Treatments
                  &amp; Expertise </span>- Science That Brings Life
               </h2>
               <p class="text-gray-600 text-base sm:text-lg max-w-2xl mx-auto">Science that brings life closer — compassionate care,
                  advanced methods, and proven results.
               </p>
            </div>
            <div
               class="flex flex-nowrap overflow-x-auto gap-6 snap-x snap-mandatory sm:grid sm:grid-cols-2 lg:grid-cols-3 sm:overflow-visible scrollbar-hide pb-4">
               <div
                  class="min-w-[85%] sm:min-w-0 snap-start group relative p-8 rounded-3xl bg-white/70 backdrop-blur-lg shadow-xl transition-all duration-500 border border-white/30 hover:border-brand-pink/40 hover:bg-white/90">
                  <div
                     class="w-20 h-20 mx-auto mb-5 flex items-center justify-center rounded-2xl bg-gradient-to-r from-brand-pink to-brand-blue text-white text-3xl shadow-lg animate-pulse group-hover:scale-110 transition-transform duration-300">
                     💫
                  </div>
                  <h3 class="text-xl font-semibold text-gray-800 mb-2 group-hover:text-brand-pink transition-colors">
                     IVF Treatment
                  </h3>
                  <p class="text-gray-600 text-sm leading-relaxed">Cutting-edge IVF procedures guided by precision and
                     empathy.
                  </p>
                  <button
                     class="mt-10 sm: mt-4 w-full bg-brand-pink hover:bg-brand-blue text-white px-4 py-2 font-semibold text-lg shadow-lg hover:shadow-2xl transition-all duration-500">Know
                  more</button>
               </div>
               <div
                  class="min-w-[85%] sm:min-w-0 snap-start group relative p-8 rounded-3xl bg-white/70 backdrop-blur-lg shadow-xl transition-all duration-500 border border-white/30 hover:border-brand-pink/40 hover:bg-white/90">
                  <div
                     class="w-20 h-20 mx-auto mb-5 flex items-center justify-center rounded-2xl bg-gradient-to-r from-indigo-400 to-purple-500 text-white text-3xl shadow-lg animate-bounce group-hover:scale-110 transition-transform duration-300">
                     🌸
                  </div>
                  <h3 class="text-xl font-semibold text-gray-800 mb-2 group-hover:text-brand-pink transition-colors">
                     Intrauterine Insemination (IUI)
                  </h3>
                  <p class="text-gray-600 text-sm leading-relaxed">Gentle and effective fertility assistance for
                     hopeful parents.
                  </p>
                  <button
                     class="mt-10 sm: mt-4 w-full bg-brand-pink hover:bg-brand-blue text-white px-4 py-2 font-semibold text-lg shadow-lg hover:shadow-2xl transition-all duration-500">Know
                  more</button>
               </div>
               <div
                  class="min-w-[85%] sm:min-w-0 snap-start group relative p-8 rounded-3xl bg-white/70 backdrop-blur-lg shadow-xl transition-all duration-500 border border-white/30 hover:border-brand-pink/40 hover:bg-white/90">
                  <div
                     class="w-20 h-20 mx-auto mb-5 flex items-center justify-center rounded-2xl bg-gradient-to-r from-green-400 to-brand-pink text-white text-3xl shadow-lg animate-pulse group-hover:scale-110 transition-transform duration-300">
                     ❄️
                  </div>
                  <h3 class="text-xl font-semibold text-gray-800 mb-2 group-hover:text-brand-pink transition-colors">
                     Fertility Preservation
                  </h3>
                  <p class="text-gray-600 text-sm leading-relaxed">Advanced freezing options to protect your fertility
                     future.
                  </p>
                  <button
                     class="mt-10 sm: mt-4 w-full bg-brand-pink hover:bg-brand-blue text-white px-4 py-2 font-semibold text-lg shadow-lg hover:shadow-2xl transition-all duration-500">Know
                  more</button>
               </div>
               <div
                  class="min-w-[85%] sm:min-w-0 snap-start group relative p-8 rounded-3xl bg-white/70 backdrop-blur-lg shadow-xl transition-all duration-500 border border-white/30 hover:border-brand-pink/40 hover:bg-white/90">
                  <div
                     class="w-20 h-20 mx-auto mb-5 flex items-center justify-center rounded-2xl bg-gradient-to-r from-yellow-400 to-brand-blue text-white text-3xl shadow-lg group-hover:scale-110 transition-transform duration-300">
                     🌼
                  </div>
                  <h3 class="text-xl font-semibold text-gray-800 mb-2 group-hover:text-brand-pink transition-colors">
                     Female Infertility Solutions
                  </h3>
                  <p class="text-gray-600 text-sm leading-relaxed">Holistic and science-backed treatments for female
                     wellness.
                  </p>
                  <button
                     class="mt-10 sm: mt-4 w-full bg-brand-pink hover:bg-brand-blue text-white px-4 py-2 font-semibold text-lg shadow-lg hover:shadow-2xl transition-all duration-500">Know
                  more</button>
               </div>
               <div
                  class="min-w-[85%] sm:min-w-0 snap-start group relative p-8 rounded-3xl bg-white/70 backdrop-blur-lg shadow-xl transition-all duration-500 border border-white/30 hover:border-brand-pink/40 hover:bg-white/90">
                  <div
                     class="w-20 h-20 mx-auto mb-5 flex items-center justify-center rounded-2xl bg-gradient-to-r from-brand-blue to-brand-pink text-white text-3xl shadow-lg group-hover:scale-110 transition-transform duration-300">
                     ❤️
                  </div>
                  <h3 class="text-xl font-semibold text-gray-800 mb-2 group-hover:text-brand-pink transition-colors">
                     Pregnancy Loss Care
                  </h3>
                  <p class="text-gray-600 text-sm leading-relaxed">Compassionate medical and emotional recovery
                     support.
                  </p>
                  <button
                     class="mt-10 sm: mt-4 w-full bg-brand-pink hover:bg-brand-blue text-white px-4 py-2 font-semibold text-lg shadow-lg hover:shadow-2xl transition-all duration-500">Know
                  more</button>
               </div>
               <div
                  class="min-w-[85%] sm:min-w-0 snap-start group relative p-8 rounded-3xl bg-white/70 backdrop-blur-lg shadow-xl transition-all duration-500 border border-white/30 hover:border-brand-pink/40 hover:bg-white/90">
                  <div
                     class="w-20 h-20 mx-auto mb-5 flex items-center justify-center rounded-2xl bg-gradient-to-r from-indigo-400 to-brand-blue text-white text-3xl shadow-lg group-hover:scale-110 transition-transform duration-300">
                     ⚡
                  </div>
                  <h3 class="text-xl font-semibold text-gray-800 mb-2 group-hover:text-brand-pink transition-colors">
                     Male Infertility Solutions
                  </h3>
                  <p class="text-gray-600 text-sm leading-relaxed">Advanced diagnostics and effective treatments for
                     men.
                  </p>
                  <button
                     class="mt-10 sm: mt-4 w-full bg-brand-pink hover:bg-brand-blue text-white px-4 py-2 font-semibold text-lg shadow-lg hover:shadow-2xl transition-all duration-500">Know
                  more</button>
               </div>
            </div>
         </div>
      </section>
      <section class="py-12 bg-gradient-to-b from-pink-50 via-white to-blue-50 text-center relative pl-6">
         <h2 class="text-2xl sm:text-3xl md:text-4xl font-bold text-gray-800 mb-12">Meet Our Delhi Fertility Experts</h2>
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
                        technologies.
                     </p>
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
                        cycle.
                     </p>
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
                        technologies.
                     </p>
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
                        cycle.
                     </p>
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
      <section class="relative py-12 bg-white overflow-hidden">
         <div class="container mx-auto px-6 flex flex-col-reverse md:px-12 md:grid md:grid-cols-2 gap-10 items-center">
            <div>
               <h2 class="text-2xl sm:text-3xl md:text-4xl font-bold text-gray-800 mb-4 mt-8 md:mt-0">Flexible EMI &amp; Payment
                  Options
               </h2>
               <p class="text-gray-600 mb-8 max-w-lg text-sm sm:text-base">We understand that fertility treatments can be both emotionally
                  and financially demanding. Our Delhi Centre offers flexible EMI and payment solutions to help you
                  focus on your treatment, not the bills.
               </p>
               <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                  <div class="bg-white shadow-md rounded-xl p-5 hover:shadow-lg transition">
                     <div class="text-pink-600 text-3xl mb-2">💳</div>
                     <h3 class="font-semibold text-gray-800">0% EMI for Select Treatment Plans</h3>
                     <p class="text-sm text-gray-600 mt-1">Easy monthly installments through partner financial
                        institutions.
                     </p>
                  </div>
                  <div class="bg-white shadow-md rounded-xl p-5 hover:shadow-lg transition">
                     <div class="text-blue-600 text-3xl mb-2">📅</div>
                     <h3 class="font-semibold text-gray-800">Custom Payment Schedules</h3>
                     <p class="text-sm text-gray-600 mt-1">Tailored as per treatment stages for better financial
                        flexibility.
                     </p>
                  </div>
                  <div class="bg-white shadow-md rounded-xl p-5 hover:shadow-lg transition">
                     <div class="text-green-600 text-3xl mb-2">🏥</div>
                     <h3 class="font-semibold text-gray-800">Corporate / Insurance Assistance</h3>
                     <p class="text-sm text-gray-600 mt-1">Guidance for corporate medical reimbursements or
                        insurance-linked claims.
                     </p>
                  </div>
                  <div class="bg-white shadow-md rounded-xl p-5 hover:shadow-lg transition">
                     <div class="text-yellow-600 text-3xl mb-2">🤝</div>
                     <h3 class="font-semibold text-gray-800">Easy Application Process</h3>
                     <p class="text-sm text-gray-600 mt-1">Quick approval and dedicated support to help you apply
                        with ease.
                     </p>
                  </div>
               </div>
               <div class="mt-10 flex justify-center"><a href="#apply-emi"
                  class="bg-brand-pink text-white font-medium px-8 py-3 rounded-full shadow-md hover:bg-brand-blue transition">Apply
                  for EMI Plan</a>
               </div>
            </div>
            <div class="relative">
               <img
                  src="https://media.istockphoto.com/id/1460979961/photo/female-doctor-examining-indian-pregnant-woman-holding-stethoscope-near-belly-listening-babys.jpg?s=1024x1024&amp;w=is&amp;k=20&amp;c=k_UxL66r_PcT6e17if1uR7ZshW9gMShTo8BrgGNmriA="
                  alt="Payment Options" class="rounded-2xl shadow-lg w-full">
               <div
                  class="absolute bottom-[-30px] left-1/2 transform -translate-x-1/2 bg-white shadow-xl rounded-xl p-6 w-11/12 md:w-4/5">
                  <h4 class="font-semibold text-gray-800 text-lg mb-2">Does Insurance Cover IVF?</h4>
                  <p class="text-gray-600 text-sm leading-relaxed">While most insurance providers in India don’t cover
                     IVF directly, our team assists patients in identifying partial coverage for diagnostics,
                     medications, or hospitalization.
                  </p>
               </div>
            </div>
         </div>
      </section>
      <section class="relative bg-white py-12 overflow-hidden">
         <div class="container mx-auto px-6 lg:px-16 relative z-10">
            <div class="text-center mb-8">
               <h2 class="text-2xl sm:text-3xl md:text-4xl font-bold text-gray-800 mb-4 leading-tight"><span class="text-brand-pink">Real
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
      <section id="academic-programs" class="relative py-12 bg-white overflow-hidden">
         <div class="container mx-auto lg:px-16 relative z-10">
            <div class="text-center mb-8">
               <h2 class="text-2xl sm:text-3xl md:text-4xl font-bold text-gray-800 mb-4 leading-tight">Our Other Centers</h2>
            </div>
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 items-start px-6 md:p-0">
               <div
                  class="flex gap-6 overflow-x-auto snap-x snap-mandatory bg-white shadow-2xl rounded-3xl p-8 border border-gray-100 pb-6 md:gap-8 md:flex-col">
                  <div
                     class="flex-shrink-0 w-80 md:w-full flex flex-col bg-white rounded-xl shadow-lg overflow-hidden border border-gray-100 lg:flex-row snap-center">
                     <img src="https://media.istockphoto.com/id/2198878282/photo/female-doctor-consults-a-couple-in-hospital-office-discussing-medical-diagnostics-and.jpg?b=1&amp;s=612x612&amp;w=0&amp;k=20&amp;c=Iiy5F5DU1hECTI7pFAB9YHCaK-jbWor4nMtasD6eld4="
                        alt="Gurgaon Center" class="w-40 object-cover">
                     <div class="py-6 pl-4 pr-2">
                        <h3 class="text-xl font-semibold mb-1">Gurgaon – Sector 51</h3>
                        <p class="text-gray-500 mb-3 text-sm">123 Medical Complex, New Delhi - 110001</p>
                        <div class="flex flex-row gap-3 text-xs"><a href="tel:+911244882222"
                           class="flex items-center justify-center gap-2 bg-brand-blue text-white px-4 py-2 rounded-lg font-medium hover:bg-brand-pink transition">📞
                           +91 12345 67890 </a><a href="#"
                              class="flex items-center justify-center gap-2 border border-gray-300 text-gray-700 px-4 py-2 rounded-lg font-medium hover:bg-gray-100 transition">Center
                           details →</a>
                        </div>
                     </div>
                  </div>
                  <div
                     class="flex-shrink-0 w-80 md:w-full flex flex-col bg-white rounded-xl shadow-lg overflow-hidden border border-gray-100 lg:flex-row snap-center">
                     <img src="https://media.istockphoto.com/id/2198878282/photo/female-doctor-consults-a-couple-in-hospital-office-discussing-medical-diagnostics-and.jpg?b=1&amp;s=612x612&amp;w=0&amp;k=20&amp;c=Iiy5F5DU1hECTI7pFAB9YHCaK-jbWor4nMtasD6eld4="
                        alt="Delhi Center" class="w-40 object-cover">
                     <div class="py-6 pl-4 pr-2">
                        <h3 class="text-xl font-semibold mb-1">Delhi</h3>
                        <p class="text-gray-500 mb-3 text-sm">123 Medical Complex, New Delhi - 110001</p>
                        <div class="flex flex-row gap-3 text-xs"><a href="tel:+911244882222"
                           class="flex items-center justify-center gap-2 bg-brand-blue text-white px-4 py-2 rounded-lg font-medium hover:bg-brand-pink transition">📞
                           +91 12345 67890 </a><a href="#"
                              class="flex items-center justify-center gap-2 border border-gray-300 text-gray-700 px-4 py-2 rounded-lg font-medium hover:bg-gray-100 transition">Center
                           details →</a>
                        </div>
                     </div>
                  </div>
                  <div
                     class="flex-shrink-0 w-80 md:w-full flex flex-col bg-white rounded-xl shadow-lg overflow-hidden border border-gray-100 lg:flex-row snap-center">
                     <img src="https://media.istockphoto.com/id/2198878282/photo/female-doctor-consults-a-couple-in-hospital-office-discussing-medical-diagnostics-and.jpg?b=1&amp;s=612x612&amp;w=0&amp;k=20&amp;c=Iiy5F5DU1hECTI7pFAB9YHCaK-jbWor4nMtasD6eld4="
                        alt="Gurgaon Center" class="w-40 object-cover">
                     <div class="py-6 pl-4 pr-2">
                        <h3 class="text-xl font-semibold mb-1">Gurgaon – Sector 51</h3>
                        <p class="text-gray-500 mb-3 text-sm">123 Medical Complex, New Delhi - 110001</p>
                        <div class="flex flex-row gap-3 text-xs"><a href="tel:+911244882222"
                           class="flex items-center justify-center gap-2 bg-brand-blue text-white px-4 py-2 rounded-lg font-medium hover:bg-brand-pink transition">📞
                           +91 12345 67890 </a><a href="#"
                              class="flex items-center justify-center gap-2 border border-gray-300 text-gray-700 px-4 py-2 rounded-lg font-medium hover:bg-gray-100 transition">Center
                           details →</a>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="h-[300px] sm:h-[400px] md:h-[580px] rounded-2xl overflow-hidden shadow-lg border border-gray-100"><iframe
                  class="w-full h-full"
                  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3503.511706911657!2d77.2167211150736!3d28.61393998242212!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390cfd1c5f66b2cd%3A0x42cb68eecf89b4f8!2sNew%20Delhi%2C%20Delhi!5e0!3m2!1sen!2sin!4v1697716183022!5m2!1sen!2sin"
                  allowfullscreen="" loading="lazy"></iframe></div>
            </div>
            <div class="text-center mt-16"><button
               class="bg-brand-pink hover:bg-brand-blue text-white px-6 sm:px-10 py-2.5 sm:py-3 rounded-full font-semibold text-sm sm:text-base md:text-lg shadow-lg hover:shadow-2xl transition-all duration-500 hover:scale-105">View
               All Centres</button>
            </div>
         </div>
      </section>
      <style>
         .scrollbar-hide::-webkit-scrollbar {
            display: none;
         }
         .scrollbar-hide {
            -ms-overflow-style: none;
            scrollbar-width: none;
         }
         .overflow-x-auto {
            -webkit-overflow-scrolling: touch;
         }
         @media (max-width:767px) {
            .overflow-x-auto {
               scrollbar-width: none;
               -ms-overflow-style: none;
            }
            .overflow-x-auto::-webkit-scrollbar {
               display: none;
            }
         }
      </style>
      <section class="relative bg-brand-blue text-white py-6 text-center">
         <div class="container mx-auto px-6">
            <h2 class="text-2xl sm:text-3xl md:text-4xl font-bold mb-3">Ready to Take the Next Step?</h2>
            <p class="text-base sm:text-lg mb-4 max-w-2xl mx-auto">Your parenthood journey deserves the best support, close to home
               in Delhi. Connect with our expert fertility team today and take the first step toward making your dreams
               a reality.
            </p>
            <button
               class="bg-brand-pink text-white px-5 sm:px-6 py-2.5 sm:py-3 rounded-full shadow-lg hover:shadow-2xl transition-all duration-500 hover:scale-105 mb-2 text-sm sm:text-base"><i
               class="fa-solid fa-hand-holding-heart mr-2"></i> Book Your Consultation</button>
         </div>
      </section>
      <section
         class="relative bg-gradient-to-r from-[#20417e] via-[#3a5594] to-[#778aaf] text-white py-12 overflow-hidden">
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
      <script>
         // Gallery carousel - only enable on desktop (md and above)
         document.addEventListener('DOMContentLoaded', function() {
            if (window.innerWidth >= 768) {
               const carousel = document.getElementById('centerCarousel');
               const prevBtn = document.getElementById('prevBtn');
               const nextBtn = document.getElementById('nextBtn');
               let currentIndex = 0;
               const images = carousel.querySelectorAll('img');
               const totalImages = images.length;
               const visibleImages = 3; // Show 3 images on desktop

               function updateCarousel() {
                  const translateX = -(currentIndex * (100 / visibleImages));
                  carousel.style.transform = `translateX(${translateX}%)`;
               }

               if (nextBtn) {
                  nextBtn.addEventListener('click', function() {
                     currentIndex = (currentIndex + 1) % (totalImages - visibleImages + 1);
                     updateCarousel();
                  });
               }

               if (prevBtn) {
                  prevBtn.addEventListener('click', function() {
                     currentIndex = (currentIndex - 1 + (totalImages - visibleImages + 1)) % (totalImages - visibleImages + 1);
                     updateCarousel();
                  });
               }
            }
         });
      </script>
@endsection
