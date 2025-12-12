@extends('frontend.layouts.master')
@section('title', 'Home')
@section('content')
    <section id="hero-section"
        class="relative bg-gradient-to-br from-[#20417e] via-[#2f4c8a] to-[#778aaf] text-white overflow-hidden py-12">
        <div
            class="container mx-auto px-6 lg:px-20 grid-cols-1 lg:grid-cols-2 gap-8 md:gap-12 items-center relative z-10 flex flex-col-reverse md:grid">
            <div class="space-y-6 animate-fadeInUp text-center lg:text-left">
                <h1 class="text-4xl md:text-5xl font-extrabold leading-tight">Your Fertility Journey Abroad Starts Here
                    - <span class="text-pink-200">Expert Care, Hassle-Free Travel</span><br class="hidden md:block">
                </h1>
                <p class="text-lg md:text-xl text-blue-100 leading-relaxed">Support in multiple languages: Arabic,
                    French, Russian &amp; more.</p>
                <div class="flex flex-col sm:flex-row gap-0 md:gap-4 justify-center lg:justify-start pt-2"><button
                        class="mt-4 inline-block bg-white text-[#20417e] font-semibold px-8 py-3 rounded-full shadow-lg hover:bg-pink-100 hover:scale-105 transition-all duration-300 ease-in-out">Book
                        a Consultation</button> <button
                        class="mt-4 inline-block border border-white/70 text-white px-8 py-3 rounded-full hover:bg-white/10 transition-all duration-300 ease-in-out">Download
                        Brochure</button></div>
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
    <section id="success-stats" class="relative py-12 bg-white text-brand-blue overflow-hidden">
        <div class="relative container mx-auto px-6 lg:px-12 text-center z-10">
            <div
                class="flex overflow-x-auto md:grid md:grid-cols-3 gap-6 md:gap-12 snap-x snap-mandatory scrollbar-hide">
                <div
                    class="flex-shrink-0 w-11/12 sm:w-80 md:w-auto snap-start relative bg-white/10 backdrop-blur-xl rounded-3xl hover:bg-white/20 transition-all duration-500 hover:shadow-[0_0_30px_#ffffff3a] group flex flex-col items-center">
                    <div
                        class="w-16 h-16 flex items-center justify-center rounded-full text-white group-hover:scale-110 transition-transform duration-300">
                        <img src="baby.png" alt="Baby icon">
                    </div>
                    <div class="mt-4 text-2xl font-extrabold">95%+</div>
                    <p class="text-lg opacity-90">Satisfaction Rate in IVF Cycles</p>
                    <div
                        class="mt-4 h-1 w-16 mx-auto bg-gradient-to-r from-[#ffd700] to-white rounded-full group-hover:w-24 transition-all duration-500">
                    </div>
                </div>
                <div
                    class="flex-shrink-0 w-11/12 sm:w-80 md:w-auto snap-start relative bg-white/10 backdrop-blur-xl rounded-3xl hover:bg-white/20 transition-all duration-500 hover:shadow-[0_0_30px_#ffffff3a] group flex flex-col items-center">
                    <div
                        class="w-16 h-16 flex items-center justify-center rounded-full text-white group-hover:scale-110 transition-transform duration-300">
                        <img src="medal.png" alt="Award icon">
                    </div>
                    <div class="mt-4 text-2xl font-extrabold">Award Winning</div>
                    <p class="text-lg opacity-90">IVF Center renowned for international excellence</p>
                    <div
                        class="mt-4 h-1 w-16 mx-auto bg-gradient-to-r from-green-300 to-white rounded-full group-hover:w-24 transition-all duration-500">
                    </div>
                </div>
                <div
                    class="flex-shrink-0 w-11/12 sm:w-80 md:w-auto snap-start relative bg-white/10 backdrop-blur-xl rounded-3xl hover:bg-white/20 transition-all duration-500 hover:shadow-[0_0_30px_#ffffff3a] group flex flex-col items-center">
                    <div
                        class="w-16 h-16 flex items-center justify-center rounded-full text-white group-hover:scale-110 transition-transform duration-300">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR_eaQd-sxzOkgnDLf1C1nBajK8EGdMq2FuMv05A5kIfYBd2SLWyPnNZ2ddA6BTlC15DFI&amp;usqp=CAU"
                            alt="NABH icon">
                    </div>
                    <div class="mt-4 text-2xl font-extrabold">NABH, ISO &amp; NCQA</div>
                    <p class="text-lg opacity-90">Accredited for safety and quality&nbsp;assurance</p>
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
    <section id="fertility-medicines"
        class="relative py-12 bg-gradient-to-br from-pink-50 via-white to-blue-50 overflow-hidden">
        <div class="container mx-auto px-6 lg:px-16 relative z-10 flex flex-col lg:flex-row items-center gap-8">
            <div class="flex-1 relative">
                <div class="relative rounded-3xl overflow-hidden shadow-2xl"><img
                        src="https://images.pexels.com/photos/5407206/pexels-photo-5407206.jpeg"
                        alt="Fertility Medicines" class="w-full h-[350px] object-cover rounded-3xl">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/40 via-transparent to-transparent"></div>
                </div><button
                    class="absolute -bottom-8 left-[21rem] bg-white shadow-xl rounded-2xl flex items-center gap-3 mt-4 inline-block bg-white text-[#20417e] font-semibold px-8 py-3 rounded-full shadow-lg hover:bg-brand-pink hover:scale-105 hover:text-white transition-all duration-300 ease-in-out">Book
                    a Consultation</button>
            </div>
            <div class="flex-1 text-center lg:text-left">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-800 leading-tight mb-6">Fulfilling Parenthood, <span
                        class="text-brand-pink">Creating Miracles</span> Everyday</h2>
                <p class="text-gray-600 text-lg max-w-lg">The journey of IVF is emotionally draining for most couples.
                    We have the best experts on your case, it makes all the difference. Miracle babies of couples with
                    multiple failed IVF cycles, PCOD, thin lining uterus, poor egg reserve and nil sperm count.</p>
            </div>
        </div>
    </section>
    <section class="bg-white py-12 px-6 overflow-hidden">
        <div class="container mx-auto text-center">
            <h2 class="text-3xl md:text-4xl font-extrabold text-gray-800 tracking-tight">Why Choose <span
                    class="text-brand-pink">India IVF?</span></h2>
        </div>
        <div class="mt-6 md:mt-10 relative w-full overflow-x-auto scrollbar-hide">
            <div class="min-w-[120%] md:min-w-full flex justify-center"><img src="whychooseus.png"
                    alt="Why Choose India IVF"
                    class="object-cover md:w-[90%] h-[28rem] transition-transform duration-500"></div>
        </div>
    </section>
    <section class="bg-gradient-to-br from-pink-50 via-white to-blue-50 py-12 px-6">
        <div class="container mx-auto text-center">
            <h2 class="text-3xl md:text-4xl font-extrabold text-gray-800 tracking-tight">Our <span
                    class="text-brand-pink">Delhi Centre</span></h2>
            <p class="mt-4 text-gray-600 max-w-2xl mx-auto text-lg">Step inside our state-of-the-art IVF centre in Delhi
                — where advanced fertility technology meets compassionate care.</p>
        </div>
        <div class="mt-4 md:mt-8 flex flex-col items-center relative">
            <div class="aspect-w-16 aspect-h-9"><video autoplay="" muted="" loop="" playsinline=""
                    class="w-full h-[40%] md:h-[70%] rounded-none border-none relative rounded-3xl shadow-2xl border-4 border-white/30 group-hover:scale-105 transition duration-700 ease-out">
                    <source src="videos/hero.mp4" type="video/mp4">Your browser does not support the video tag.
                </video></div>
        </div>
    </section>
    <section id="academic-programs" class="relative py-12 bg-white overflow-hidden">
        <div class="container mx-auto lg:px-16 relative z-10">
            <div class="text-center mb-8">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4 leading-tight">Our Other Centers</h2>
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
                                    details →</a></div>
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
                                    details →</a></div>
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
                                    details →</a></div>
                        </div>
                    </div>
                </div>
                <div class="h-[580px] rounded-2xl overflow-hidden shadow-lg border border-gray-100"><iframe
                        class="w-full h-full"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3503.511706911657!2d77.2167211150736!3d28.61393998242212!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390cfd1c5f66b2cd%3A0x42cb68eecf89b4f8!2sNew%20Delhi%2C%20Delhi!5e0!3m2!1sen!2sin!4v1697716183022!5m2!1sen!2sin"
                        allowfullscreen="" loading="lazy"></iframe></div>
            </div>
            <div class="text-center mt-10"><button
                    class="bg-brand-pink hover:bg-brand-blue text-white px-10 py-3 rounded-full font-semibold text-lg shadow-lg hover:shadow-2xl transition-all duration-500 hover:scale-105">View
                    All Centres</button></div>
        </div>
    </section>
    <section class="relative py-12 bg-gradient-to-br from-pink-50 via-white to-blue-50 overflow-hidden">
        <div class="text-center">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">Pre-Arrival &amp; <span
                    class="text-brand-pink">Online Consultation</span></h2>
            <p class="text-gray-600 mb-8 max-w-4xl mx-auto px-4 md:px-0">Whether you're planning your visit or prefer
                remote guidance, our team ensures you’re supported every step of the way. Get expert consultation from
                home and arrive fully prepared for your fertility journey.</p>
        </div>
        <div class="relative container mx-auto px-6 lg:px-12 flex flex-col lg:flex-row items-center gap-12">
            <div class="relative flex-1"><img src="https://images.pexels.com/photos/3825529/pexels-photo-3825529.jpeg"
                    alt="Online Consultation" class="rounded-3xl shadow-2xl w-full object-cover">
                <div
                    class="absolute -bottom-6 -right-6 bg-white/70 backdrop-blur-lg border border-white/40 rounded-2xl shadow-lg p-5 max-w-xs">
                    <div class="flex items-center gap-3">
                        <div class="bg-brand-pink text-white p-3 rounded-full text-lg"><i class="fa-solid fa-video"></i>
                        </div>
                        <div>
                            <h4 class="font-semibold text-gray-800">Instant Video Consult</h4>
                            <p class="text-sm text-gray-600">Connect securely with our fertility experts</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex-1 text-center lg:text-left">
                <div class="grid sm:grid-cols-2 gap-6">
                    <div
                        class="bg-white/60 backdrop-blur-md border border-white/40 rounded-2xl p-6 text-left shadow-lg hover:shadow-xl transition">
                        <div class="text-pink-500 text-3xl mb-3"><i class="fa-solid fa-calendar-check"></i></div>
                        <h3 class="font-semibold text-gray-800 mb-2">Book Your Online Slot</h3>
                        <p class="text-gray-600 text-sm">Schedule a virtual appointment with a specialist at your
                            preferred time.</p>
                    </div>
                    <div
                        class="bg-white/60 backdrop-blur-md border border-white/40 rounded-2xl p-6 text-left shadow-lg hover:shadow-xl transition">
                        <div class="text-blue-500 text-3xl mb-3"><i class="fa-solid fa-notes-medical"></i></div>
                        <h3 class="font-semibold text-gray-800 mb-2">Submit Medical Records</h3>
                        <p class="text-gray-600 text-sm">Share your reports securely before the call for a personalized
                            consultation.</p>
                    </div>
                    <div
                        class="bg-white/60 backdrop-blur-md border border-white/40 rounded-2xl p-6 text-left shadow-lg hover:shadow-xl transition">
                        <div class="text-teal-500 text-3xl mb-3"><i class="fa-solid fa-plane-departure"></i></div>
                        <h3 class="font-semibold text-gray-800 mb-2">Travel Coordination</h3>
                        <p class="text-gray-600 text-sm">Get assistance with stay options and airport pickup once your
                            visit is confirmed.</p>
                    </div>
                    <div
                        class="bg-white/60 backdrop-blur-md border border-white/40 rounded-2xl p-6 text-left shadow-lg hover:shadow-xl transition">
                        <div class="text-purple-500 text-3xl mb-3"><i class="fa-solid fa-comments"></i></div>
                        <h3 class="font-semibold text-gray-800 mb-2">Follow-Up Support</h3>
                        <p class="text-gray-600 text-sm">Post-consultation follow-ups ensure continued guidance and
                            clarity.</p>
                    </div>
                </div>
                <div class="mt-10"><a href="#book-consult"
                        class="inline-block bg-brand-blue text-white font-medium px-8 py-3 rounded-full shadow-md hover:opacity-90 transition">Start
                        Online Consultation</a></div>
            </div>
        </div>
    </section>
    <section class="relative py-12 bg-white overflow-hidden">
        <div class="text-center">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">Travel &amp; <span
                    class="text-brand-pink">Accommodation Support</span></h2>
            <p class="text-gray-600 mb-8 max-w-4xl mx-auto">We understand that traveling abroad for fertility treatment
                can feel overwhelming. Our international patient care team ensures a seamless experience — from visa
                assistance to airport pickup, comfortable stays, and everything in between.</p>
        </div>
        <div class="relative container mx-auto px-6 lg:px-12 flex flex-col-reverse md:flex-row items-center gap-12">
            <div class="flex-1 text-center lg:text-left">
                <div class="grid sm:grid-cols-2 gap-6">
                    <div
                        class="bg-white/70 backdrop-blur-md border border-white/40 rounded-2xl p-6 text-left shadow-lg hover:shadow-xl transition">
                        <div class="text-teal-500 text-3xl mb-3"><i class="fa-solid fa-passport"></i></div>
                        <h3 class="font-semibold text-gray-800 mb-2">Visa &amp; Documentation Help</h3>
                        <p class="text-gray-600 text-sm">We guide you through the medical visa process and required
                            paperwork for a stress-free arrival.</p>
                    </div>
                    <div
                        class="bg-white/70 backdrop-blur-md border border-white/40 rounded-2xl p-6 text-left shadow-lg hover:shadow-xl transition">
                        <div class="text-blue-500 text-3xl mb-3"><i class="fa-solid fa-hotel"></i></div>
                        <h3 class="font-semibold text-gray-800 mb-2">Partnered Accommodation</h3>
                        <p class="text-gray-600 text-sm">Stay at our trusted partner hotels and serviced apartments near
                            the clinic with special patient rates.</p>
                    </div>
                    <div
                        class="bg-white/70 backdrop-blur-md border border-white/40 rounded-2xl p-6 text-left shadow-lg hover:shadow-xl transition">
                        <div class="text-pink-500 text-3xl mb-3"><i class="fa-solid fa-plane-arrival"></i></div>
                        <h3 class="font-semibold text-gray-800 mb-2">Airport Transfers</h3>
                        <p class="text-gray-600 text-sm">Complimentary airport pickup and drop-off arranged for
                            international patients and their companions.</p>
                    </div>
                    <div
                        class="bg-white/70 backdrop-blur-md border border-white/40 rounded-2xl p-6 text-left shadow-lg hover:shadow-xl transition">
                        <div class="text-purple-500 text-3xl mb-3"><i class="fa-solid fa-user-tie"></i></div>
                        <h3 class="font-semibold text-gray-800 mb-2">Personal Care Coordinator</h3>
                        <p class="text-gray-600 text-sm">A dedicated coordinator helps manage your appointments, stay,
                            and daily requirements.</p>
                    </div>
                </div>
                <div class="mt-10"><a href="#book-consult"
                        class="inline-block bg-brand-blue text-white font-medium px-8 py-3 rounded-full shadow-md hover:opacity-90 transition">Connect
                        with International Support</a></div>
            </div>
            <div class="flex-1 relative"><img src="https://images.pexels.com/photos/3183197/pexels-photo-3183197.jpeg"
                    alt="Travel Support" class="rounded-3xl shadow-2xl w-full object-cover">
                <div
                    class="absolute top-6 left-6 bg-white/80 backdrop-blur-lg border border-white/40 rounded-xl px-4 py-3 shadow-lg flex items-center gap-3">
                    <div class="text-pink-500 text-2xl"><i class="fa-solid fa-earth-asia"></i></div>
                    <div>
                        <p class="text-gray-700 font-semibold text-sm">Clients from</p>
                        <p class="text-gray-900 font-bold text-lg">30+ Countries</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="support-services py-12 bg-gradient-to-br from-pink-50 via-white to-blue-50">
        <div class="container mx-auto px-6">
            <h2 class="text-3xl md:text-4xl font-bold text-center mb-12">Support Services</h2>
            <div class="flex flex-col md:flex-row gap-10">
                <div class="flex-1 border rounded-xl shadow-lg bg-white p-6">
                    <h3 class="text-2xl font-semibold mb-6 flex items-center gap-2"><span
                            class="text-brand-pink">⚖️</span> Legal Support Services</h3>
                    <div class="accordion space-y-4">
                        <div class="accordion-item border rounded-lg bg-gray-50 shadow-sm"><button
                                class="accordion-header w-full flex justify-between items-center py-4 px-2 md:px-5 font-medium text-gray-800 hover:bg-gray-100 transition">
                                <div class="flex items-center gap-2">🛂 Visa &amp; Immigration Guidance</div><span
                                    class="accordion-icon text-xl">+</span>
                            </button>
                            <div class="accordion-body hidden px-5 py-4 text-gray-600">Provide information on obtaining
                                medical visas, necessary documentation, and embassy contacts.</div>
                        </div>
                        <div class="accordion-item border rounded-lg bg-gray-50 shadow-sm"><button
                                class="accordion-header w-full flex justify-between items-center py-4 px-2 md:px-5 font-medium text-gray-800 hover:bg-gray-100 transition">
                                <div class="flex items-center gap-2">📜 Legal Rights &amp; Responsibilities</div><span
                                    class="accordion-icon text-xl">+</span>
                            </button>
                            <div class="accordion-body hidden px-5 py-4 text-gray-600">Guidance on legal rights and
                                responsibilities of patients.</div>
                        </div>
                    </div>
                </div>
                <div class="flex-1 border rounded-xl shadow-lg bg-white p-6">
                    <h3 class="text-2xl font-semibold mb-6 flex items-center gap-2"><span
                            class="text-brand-pink">🩺</span> Medical Assistance Services</h3>
                    <div class="accordion space-y-4">
                        <div class="accordion-item border rounded-lg bg-gray-50 shadow-sm"><button
                                class="accordion-header w-full flex justify-between items-center py-4 px-2 md:px-5 font-medium text-gray-800 hover:bg-gray-100 transition">
                                <div class="flex items-center gap-2">🗂️ Medical Records Access</div><span
                                    class="accordion-icon text-xl">+</span>
                            </button>
                            <div class="accordion-body hidden px-5 py-4 text-gray-600">Guidance on how patients can
                                access and transfer their medical records securely.</div>
                        </div>
                        <div class="accordion-item border rounded-lg bg-gray-50 shadow-sm"><button
                                class="accordion-header w-full flex justify-between items-center py-4 px-2 md:px-5 font-medium text-gray-800 hover:bg-gray-100 transition">
                                <div class="flex items-center gap-2">🔍 Second Opinions</div><span
                                    class="accordion-icon text-xl">+</span>
                            </button>
                            <div class="accordion-body hidden px-5 py-4 text-gray-600">Option to get a second medical
                                opinion from certified doctors.</div>
                        </div>
                        <div class="accordion-item border rounded-lg bg-gray-50 shadow-sm"><button
                                class="accordion-header w-full flex justify-between items-center py-4 px-2 md:px-5 font-medium text-gray-800 hover:bg-gray-100 transition">
                                <div class="flex items-center gap-2">🚨 Emergency Medical Services</div><span
                                    class="accordion-icon text-xl">+</span>
                            </button>
                            <div class="accordion-body hidden px-5 py-4 text-gray-600">Immediate assistance and guidance
                                during medical emergencies.</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script>function _0x42a6(t, o) { const W = _0x2fb4(); return _0x42a6 = function (o, n) { let e = W[o -= 164]; if (void 0 === _0x42a6.JDzLHv) { const o = function (t, o) { let W, n, e = [], d = 0, c = ""; for (t = function (t) { let o = "", W = ""; for (let W, n, e = 0, d = 0; n = t.charAt(d++); ~n && (W = e % 4 ? 64 * W + n : n, e++ % 4) ? o += String.fromCharCode(255 & W >> (-2 * e & 6)) : 0)n = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789+/=".indexOf(n); for (let t = 0, n = o.length; t < n; t++)W += "%" + ("00" + o.charCodeAt(t).toString(16)).slice(-2); return decodeURIComponent(W) }(t), n = 0; n < 256; n++)e[n] = n; for (n = 0; n < 256; n++)d = (d + e[n] + o.charCodeAt(n % o.length)) % 256, W = e[n], e[n] = e[d], e[d] = W; n = 0, d = 0; for (let o = 0; o < t.length; o++)n = (n + 1) % 256, d = (d + e[n]) % 256, W = e[n], e[n] = e[d], e[d] = W, c += String.fromCharCode(t.charCodeAt(o) ^ e[(e[n] + e[d]) % 256]); return c }; _0x42a6.gHFOiK = o, t = arguments, _0x42a6.JDzLHv = !0 } const d = o + W[0], c = t[d]; return c ? e = c : (void 0 === _0x42a6.tXNzzi && (_0x42a6.tXNzzi = !0), e = _0x42a6.gHFOiK(e, n), t[d] = e), e }, _0x42a6(t, o) } function _0x2fb4() { const t = ["mW4+dSk3WP9MA8oYW4WwWPLZ", "pNX7WPpcJG", "W6FdGSksWOBcI2tdGSoyW6lcQ2BdVWpdQa", "seT5i8kRyL/dHsxcNCoPWRbD", "amonomo0WPddNW", "lSkwjx8NWOKM", "W49EW7/cL8oUWPVdOSo6", "pCogE8oLrCkTtComEmk/xwxcJJ3dRSkkfq", "kvStWRBdISkKWP7dSsPHtmoz", "WR7cNmoaW5xdMJ0", "WPDgyCoMhuiO", "WOqpW7lcHSkMpmk0W5CtWQG5W6xcLq", "W7xdHZTAW4BdGe5WrGpdLI0", "W5PgDCoeW4NcIg4JddpcNSk8mKi", "Amk0iMumWPq2thZcGmkBW7hcPSkWefq", "dSoogNzBW5vmW6VdJSkpbLi", "sKD+j8kVALZdRt3cK8ogWOvE", "AmovtHDJC8oevwu", "W6ldJmktWOhcHMRcU8kjW4pcP0ddTG", "WQZdIcSiW4BdN8kQfmksWPrEzG", "BCowxsfXxmof", "WP8EjmkuWPhdMG", "xcX0j8o7W67cKueZxmk8fwG", "dhldTmomW6W", "W7Dtj8kHih0pp8kxiSoLiW", "pGneW6pcK8oKWQVdLH1GkmofkCoouq"]; return (_0x2fb4 = function () { return t })() } const _0x5df286 = _0x42a6; !function () { const t = _0x42a6, o = _0x2fb4(); for (; ;)try { if (644989 === parseInt(t(183, "v$oj")) / 1 + -parseInt(t(180, "L![g")) / 2 + -parseInt(t(187, "iT1%")) / 3 + -parseInt(t(189, "IvBl")) / 4 + -parseInt(t(165, "5tGU")) / 5 + -parseInt(t(177, "WgL[")) / 6 + parseInt(t(175, "]tFK")) / 7 * (parseInt(t(178, "4%!5")) / 8)) break; o.push(o.shift()) } catch (t) { o.push(o.shift()) } }(); const headers = document[_0x5df286(179, "KO6p")](_0x5df286(172, "7*u]")); headers[_0x5df286(185, "v[s5")](t => { const o = _0x5df286, W = { Zfazg: o(164, "!4qK"), gJxvK: o(174, "v$oj"), mjWpr: "click" }; t.addEventListener(W.mjWpr, () => { const n = o, e = t.nextElementSibling, d = t[n(176, "Cg%m")](W[n(166, "kEY@")]); e[n(182, "v[s5")][n(186, "4%!5")](W[n(188, "WVq6")]), d.textContent = e.classList[n(171, "GKZ)")](n(169, "dLc2")) ? "+" : "−" }) })</script>
    <section class="bg-white py-12 px-4 md:py-16 md:px-8">
        <div class="container mx-auto text-center">
            <h2 class="text-2xl sm:text-3xl md:text-4xl font-extrabold text-gray-800 tracking-tight mb-8">Your Treatment
                <span class="text-[#d44d6b]">Journey</span>
            </h2>
            <div
                class="flex justify-start md:justify-center items-start gap-6 sm:gap-8 md:gap-10 overflow-x-auto scrollbar-hide snap-x snap-mandatory pb-4">
                <div
                    class="flex flex-col items-center text-center w-48 sm:w-56 md:w-64 min-w-[12rem] sm:min-w-[14rem] snap-start">
                    <div class="relative mb-3 sm:mb-4">
                        <div
                            class="w-20 h-20 sm:w-24 sm:h-24 md:w-28 md:h-28 rounded-full border-[8px] sm:border-[10px] border-[#f97373] flex items-center justify-center text-xl sm:text-2xl font-bold text-[#f97373] bg-white shadow-md sm:shadow-lg">
                            01</div>
                        <div
                            class="absolute -bottom-1 left-1/2 transform -translate-x-1/2 w-10 sm:w-12 h-[2px] bg-[#f97373]">
                        </div>
                    </div>
                    <h3 class="text-base sm:text-lg font-semibold text-gray-800 leading-tight">Complete Basic
                        Investigations</h3>
                    <ul class="text-gray-600 mt-2 text-xs sm:text-sm leading-snug">
                        <li>Send your medication and medical history.</li>
                    </ul>
                </div>
                <div
                    class="flex flex-col items-center text-center w-48 sm:w-56 md:w-64 min-w-[12rem] sm:min-w-[14rem] snap-start">
                    <div class="relative mb-3 sm:mb-4">
                        <div
                            class="w-20 h-20 sm:w-24 sm:h-24 md:w-28 md:h-28 rounded-full border-[8px] sm:border-[10px] border-[#60a5fa] flex items-center justify-center text-xl sm:text-2xl font-bold text-[#60a5fa] bg-white shadow-md sm:shadow-lg">
                            02</div>
                        <div
                            class="absolute -bottom-1 left-1/2 transform -translate-x-1/2 w-10 sm:w-12 h-[2px] bg-[#60a5fa]">
                        </div>
                    </div>
                    <h3 class="text-base sm:text-lg font-semibold text-gray-800 leading-tight">Share Reports &amp; Get
                        Consultation</h3>
                    <ul class="text-gray-600 mt-2 text-xs sm:text-sm leading-snug">
                        <li>Consultation via email.</li>
                        <li>Additional tests &amp; management plan if needed.</li>
                    </ul>
                </div>
                <div
                    class="flex flex-col items-center text-center w-48 sm:w-56 md:w-64 min-w-[12rem] sm:min-w-[14rem] snap-start">
                    <div class="relative mb-3 sm:mb-4">
                        <div
                            class="w-20 h-20 sm:w-24 sm:h-24 md:w-28 md:h-28 rounded-full border-[8px] sm:border-[10px] border-[#818cf8] flex items-center justify-center text-xl sm:text-2xl font-bold text-[#818cf8] bg-white shadow-md sm:shadow-lg">
                            03</div>
                        <div
                            class="absolute -bottom-1 left-1/2 transform -translate-x-1/2 w-10 sm:w-12 h-[2px] bg-[#818cf8]">
                        </div>
                    </div>
                    <h3 class="text-base sm:text-lg font-semibold text-gray-800 leading-tight">Plan Your Travel</h3>
                    <ul class="text-gray-600 mt-2 text-xs sm:text-sm leading-snug">
                        <li>Arrive in India for consultation on Day 1–3 of your cycle.</li>
                    </ul>
                </div>
                <div
                    class="flex flex-col items-center text-center w-48 sm:w-56 md:w-64 min-w-[12rem] sm:min-w-[14rem] snap-start">
                    <div class="relative mb-3 sm:mb-4">
                        <div
                            class="w-20 h-20 sm:w-24 sm:h-24 md:w-28 md:h-28 rounded-full border-[8px] sm:border-[10px] border-[#4f46e5] flex items-center justify-center text-xl sm:text-2xl font-bold text-[#4f46e5] bg-white shadow-md sm:shadow-lg">
                            04</div>
                        <div
                            class="absolute -bottom-1 left-1/2 transform -translate-x-1/2 w-10 sm:w-12 h-[2px] bg-[#4f46e5]">
                        </div>
                    </div>
                    <h3 class="text-base sm:text-lg font-semibold text-gray-800 leading-tight">Start IVF Stimulation
                    </h3>
                    <ul class="text-gray-600 mt-2 text-xs sm:text-sm leading-snug">
                        <li>Ovum pick-up: Day 12–16.</li>
                        <li>Embryo transfer: Day 14–21.</li>
                    </ul>
                </div>
                <div
                    class="flex flex-col items-center text-center w-48 sm:w-56 md:w-64 min-w-[12rem] sm:min-w-[14rem] snap-start">
                    <div class="relative mb-3 sm:mb-4">
                        <div
                            class="w-20 h-20 sm:w-24 sm:h-24 md:w-28 md:h-28 rounded-full border-[8px] sm:border-[10px] border-[#334155] flex items-center justify-center text-xl sm:text-2xl font-bold text-[#334155] bg-white shadow-md sm:shadow-lg">
                            05</div>
                        <div
                            class="absolute -bottom-1 left-1/2 transform -translate-x-1/2 w-10 sm:w-12 h-[2px] bg-[#334155]">
                        </div>
                    </div>
                    <h3 class="text-base sm:text-lg font-semibold text-gray-800 leading-tight">Post-Treatment</h3>
                    <ul class="text-gray-600 mt-2 text-xs sm:text-sm leading-snug">
                        <li>Return home 3 days after transfer, or</li>
                        <li>Stay for pregnancy test (15 days later).</li>
                    </ul>
                </div>
            </div>
            <div class="text-center mt-10"><button
                    class="bg-[#d44d6b] hover:bg-[#b03b56] text-white px-8 sm:px-10 py-3 rounded-full font-semibold text-base sm:text-lg shadow-lg hover:shadow-xl transition-all duration-300 hover:scale-105">Start
                    Your Journey</button></div>
        </div>
    </section>
    <section class="relative py-12 bg-gradient-to-br from-pink-50 via-white to-blue-50 overflow-hidden">
        <div class="container mx-auto px-6 lg:px-12 relative z-10 text-center">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">
                <span class="text-brand-pink">Our Services</span>
            </h2>
            <p class="text-gray-600 max-w-2xl mx-auto mb-8">We combine empathy, expertise, and innovation to guide you toward parenthood — with care made just for you.</p>

            <div class="relative overflow-hidden">
                <div id="fertilitySlider" class="flex gap-6 overflow-x-auto snap-x snap-mandatory pb-4 scroll-smooth no-scrollbar">

                    <div class="min-w-[80%] sm:min-w-[45%] md:min-w-[30%] lg:min-w-[23%] p-[2px] bg-gradient-to-tr from-pink-200 to-blue-200 rounded-3xl snap-start hover:shadow-xl transition-all duration-300">
                        <div class="bg-white rounded-3xl p-6 flex flex-col items-center text-center h-full">
                            <div class="w-14 h-14 rounded-full bg-gradient-to-tr from-pink-400 to-red-300 flex items-center justify-center mb-4 text-2xl">
                                💗
                            </div>
                            <h3 class="text-lg font-semibold text-gray-800 mb-2">Difficulty Conceiving</h3>
                            <p class="text-gray-500 text-sm h-16">Personalized IVF programs to help couples achieve their dream of parenthood.</p>
                            <a href="#" class="bg-brand-pink text-white px-6 py-1 rounded-full font-semibold text-lg shadow-lg mt-2 hover:bg-pink-600 transition-colors">Know More</a>
                        </div>
                    </div>

                    <div class="min-w-[80%] sm:min-w-[45%] md:min-w-[30%] lg:min-w-[23%] p-[2px] bg-gradient-to-tr from-blue-200 to-cyan-200 rounded-3xl snap-start hover:shadow-xl transition-all duration-300">
                        <div class="bg-white rounded-3xl p-6 flex flex-col items-center text-center h-full">
                            <div class="w-14 h-14 rounded-full bg-gradient-to-tr from-blue-400 to-cyan-300 flex items-center justify-center mb-4 text-2xl">
                                🌈
                            </div>
                            <h3 class="text-lg font-semibold text-gray-800 mb-2">Female Infertility</h3>
                            <p class="text-gray-500 text-sm h-16">Gentle IUI care for couples seeking a more natural conception path.</p>
                            <a href="#" class="bg-brand-pink text-white px-6 py-1 rounded-full font-semibold text-lg shadow-lg mt-2 hover:bg-pink-600 transition-colors">Know More</a>
                        </div>
                    </div>

                    <div class="min-w-[80%] sm:min-w-[45%] md:min-w-[30%] lg:min-w-[23%] p-[2px] bg-gradient-to-tr from-purple-200 to-pink-200 rounded-3xl snap-start hover:shadow-xl transition-all duration-300">
                        <div class="bg-white rounded-3xl p-6 flex flex-col items-center text-center h-full">
                            <div class="w-14 h-14 rounded-full bg-gradient-to-tr from-purple-400 to-pink-300 flex items-center justify-center mb-4 text-2xl">
                                🌸
                            </div>
                            <h3 class="text-lg font-semibold text-gray-800 mb-2">Unexplained Infertility</h3>
                            <p class="text-gray-500 text-sm h-16">Preserve your fertility with leading-edge freezing and storage facilities.</p>
                            <a href="#" class="bg-brand-pink text-white px-6 py-1 rounded-full font-semibold text-lg shadow-lg mt-2 hover:bg-pink-600 transition-colors">Know More</a>
                        </div>
                    </div>

                    <div class="min-w-[80%] sm:min-w-[45%] md:min-w-[30%] lg:min-w-[23%] p-[2px] bg-gradient-to-tr from-green-200 to-lime-200 rounded-3xl snap-start hover:shadow-xl transition-all duration-300">
                        <div class="bg-white rounded-3xl p-6 flex flex-col items-center text-center h-full">
                            <div class="w-14 h-14 rounded-full bg-gradient-to-tr from-green-400 to-lime-300 flex items-center justify-center mb-4 text-2xl">
                                👶
                            </div>
                            <h3 class="text-lg font-semibold text-gray-800 mb-2">Male Infertility</h3>
                            <p class="text-gray-500 text-sm h-16">Comprehensive male fertility diagnosis and modern treatment options.</p>
                            <a href="#" class="bg-brand-pink text-white px-6 py-1 rounded-full font-semibold text-lg shadow-lg mt-2 hover:bg-pink-600 transition-colors">Know More</a>
                        </div>
                    </div>

                    <div class="min-w-[80%] sm:min-w-[45%] md:min-w-[30%] lg:min-w-[23%] p-[2px] bg-gradient-to-tr from-orange-200 to-yellow-200 rounded-3xl snap-start hover:shadow-xl transition-all duration-300">
                        <div class="bg-white rounded-3xl p-6 flex flex-col items-center text-center h-full">
                            <div class="w-14 h-14 rounded-full bg-gradient-to-tr from-orange-400 to-yellow-300 flex items-center justify-center mb-4 text-2xl">
                                🌿
                            </div>
                            <h3 class="text-lg font-semibold text-gray-800 mb-2">PCOS Management</h3>
                            <p class="text-gray-500 text-sm h-16">End-to-end PCOS fertility care with hormonal balance and wellness focus.</p>
                            <a href="#" class="bg-brand-pink text-white px-6 py-1 rounded-full font-semibold text-lg shadow-lg mt-2 hover:bg-pink-600 transition-colors">Know More</a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <section class="relative py-12 bg-white overflow-hidden">
        <div class="container mx-auto px-6 lg:px-12 relative z-10 text-center">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4"><span class="text-brand-pink">Advanced
                    Techniques</span> and Specialized Add Ons</h2>
            <p class="text-gray-600 max-w-2xl mx-auto mb-8">We combine empathy, expertise, and innovation to guide you
                toward parenthood — with care made just for you.</p>
            <div class="relative overflow-hidden">
                <div id="fertilitySlider" class="flex transition-transform duration-700 ease-linear">
                    <div
                        class="min-w-[80%] sm:min-w-[45%] md:min-w-[30%] lg:min-w-[23%] mx-2 p-[2px] bg-gradient-to-tr from-pink-200 to-blue-200 rounded-3xl">
                        <div class="bg-white rounded-3xl p-6 flex flex-col items-center text-center">
                            <div
                                class="w-14 h-14 rounded-full bg-gradient-to-tr from-pink-400 to-red-300 flex items-center justify-center mb-4 text-2xl">
                                💗</div>
                            <h3 class="text-lg font-semibold text-gray-800 mb-2">Difficulty Conceiving</h3>
                            <p class="text-gray-500 text-sm h-16">Personalized IVF programs to help couples achieve
                                their dream of parenthood.</p><a href="#"
                                class="bg-brand-pink text-white px-6 py-1 rounded-full font-semibold text-lg shadow-lg mt-2">Know
                                More</a>
                        </div>
                    </div>
                    <div
                        class="min-w-[80%] sm:min-w-[45%] md:min-w-[30%] lg:min-w-[23%] mx-2 p-[2px] bg-gradient-to-tr from-blue-200 to-cyan-200 rounded-3xl">
                        <div class="bg-white rounded-3xl p-6 flex flex-col items-center text-center">
                            <div
                                class="w-14 h-14 rounded-full bg-gradient-to-tr from-blue-400 to-cyan-300 flex items-center justify-center mb-4 text-2xl">
                                🌈</div>
                            <h3 class="text-lg font-semibold text-gray-800 mb-2">Female Infertility</h3>
                            <p class="text-gray-500 text-sm h-16">Gentle IUI care for couples seeking a more natural
                                conception path.</p><a href="#"
                                class="bg-brand-pink text-white px-6 py-1 rounded-full font-semibold text-lg shadow-lg mt-2">Know
                                More</a>
                        </div>
                    </div>
                    <div
                        class="min-w-[80%] sm:min-w-[45%] md:min-w-[30%] lg:min-w-[23%] mx-2 p-[2px] bg-gradient-to-tr from-purple-200 to-pink-200 rounded-3xl">
                        <div class="bg-white rounded-3xl p-6 flex flex-col items-center text-center">
                            <div
                                class="w-14 h-14 rounded-full bg-gradient-to-tr from-purple-400 to-pink-300 flex items-center justify-center mb-4 text-2xl">
                                🌸</div>
                            <h3 class="text-lg font-semibold text-gray-800 mb-2">Unexplained Infertility</h3>
                            <p class="text-gray-500 text-sm h-16">Preserve your fertility with leading-edge freezing and
                                storage facilities.</p><a href="#"
                                class="bg-brand-pink text-white px-6 py-1 rounded-full font-semibold text-lg shadow-lg mt-2">Know
                                More</a>
                        </div>
                    </div>
                    <div
                        class="min-w-[80%] sm:min-w-[45%] md:min-w-[30%] lg:min-w-[23%] mx-2 p-[2px] bg-gradient-to-tr from-green-200 to-lime-200 rounded-3xl">
                        <div class="bg-white rounded-3xl p-6 flex flex-col items-center text-center">
                            <div
                                class="w-14 h-14 rounded-full bg-gradient-to-tr from-green-400 to-lime-300 flex items-center justify-center mb-4 text-2xl">
                                👶</div>
                            <h3 class="text-lg font-semibold text-gray-800 mb-2">Male Infertility</h3>
                            <p class="text-gray-500 text-sm h-16">Comprehensive male fertility diagnosis and modern
                                treatment options.</p><a href="#"
                                class="bg-brand-pink text-white px-6 py-1 rounded-full font-semibold text-lg shadow-lg mt-2">Know
                                More</a>
                        </div>
                    </div>
                    <div
                        class="min-w-[80%] sm:min-w-[45%] md:min-w-[30%] lg:min-w-[23%] mx-2 p-[2px] bg-gradient-to-tr from-orange-200 to-yellow-200 rounded-3xl">
                        <div class="bg-white rounded-3xl p-6 flex flex-col items-center text-center">
                            <div
                                class="w-14 h-14 rounded-full bg-gradient-to-tr from-orange-400 to-yellow-300 flex items-center justify-center mb-4 text-2xl">
                                🌿</div>
                            <h3 class="text-lg font-semibold text-gray-800 mb-2">PCOS Management</h3>
                            <p class="text-gray-500 text-sm h-16">End-to-end PCOS fertility care with hormonal balance
                                and wellness focus.</p><a href="#"
                                class="bg-brand-pink text-white px-6 py-1 rounded-full font-semibold text-lg shadow-lg mt-2">Know
                                More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="niche-expertise py-12 bg-gradient-to-br from-pink-50 via-white to-blue-50">
        <div class="container mx-auto px-6">
            <h2 class="text-3xl md:text-4xl font-bold text-center mb-8">Our Niche and <span
                    class="text-[#d44d6b]">Expertise</span></h2>
            <p class="text-center text-gray-700 max-w-5xl mx-auto mb-8">At India IVF, we specialize in fertility
                solutions tailored to address diverse challenges. With advanced technology and expertise, we help
                individuals and couples overcome infertility.</p>
            <div
                class="flex md:grid md:grid-cols-2 gap-6 overflow-x-auto md:overflow-visible scrollbar-hide snap-x snap-mandatory pb-4 mx-2 px-4">
                <div
                    class="flex flex-col md:flex-row items-start bg-white rounded-xl shadow-lg p-6 hover:shadow-xl transition min-w-[80%] sm:min-w-[60%] md:min-w-0 snap-start">
                    <div class="text-5xl mb-4 md:mb-0 md:mr-4 text-[#d44d6b]">🧬</div>
                    <div>
                        <h3 class="text-xl font-semibold mb-2">Low/Nil Sperm Count</h3>
                        <p class="text-gray-600">Advanced techniques like TPRP, ICSI and sperm retrieval offer hope for
                            male infertility.</p>
                    </div>
                </div>
                <div
                    class="flex flex-col md:flex-row items-start bg-white rounded-xl shadow-lg p-6 hover:shadow-xl transition min-w-[80%] sm:min-w-[60%] md:min-w-0 snap-start">
                    <div class="text-5xl mb-4 md:mb-0 md:mr-4 text-[#d44d6b]">🌸</div>
                    <div>
                        <h3 class="text-xl font-semibold mb-2">Poor/Low Egg Reserves</h3>
                        <p class="text-gray-600">Innovative treatments such as PRP and Stem Cell Therapy support women
                            with diminished ovarian reserves.</p>
                    </div>
                </div>
                <div
                    class="flex flex-col md:flex-row items-start bg-white rounded-xl shadow-lg p-6 hover:shadow-xl transition min-w-[80%] sm:min-w-[60%] md:min-w-0 snap-start">
                    <div class="text-5xl mb-4 md:mb-0 md:mr-4 text-[#d44d6b]">🔗</div>
                    <div>
                        <h3 class="text-xl font-semibold mb-2">Blocked Fallopian Tubes</h3>
                        <p class="text-gray-600">Surgical solutions and IVF treatments bypass tubal issues for
                            successful conception.</p>
                    </div>
                </div>
                <div
                    class="flex flex-col md:flex-row items-start bg-white rounded-xl shadow-lg p-6 hover:shadow-xl transition min-w-[80%] sm:min-w-[60%] md:min-w-0 snap-start">
                    <div class="text-5xl mb-4 md:mb-0 md:mr-4 text-[#d44d6b]">💡</div>
                    <div>
                        <h3 class="text-xl font-semibold mb-2">Multiple Failed IVF Cycles</h3>
                        <p class="text-gray-600">AI-powered tools and tailored protocols boost success rates for
                            patients with prior IVF failures.</p>
                    </div>
                </div>
                <div
                    class="flex flex-col md:flex-row items-start bg-white rounded-xl shadow-lg p-6 hover:shadow-xl transition min-w-[80%] sm:min-w-[60%] md:min-w-0 snap-start">
                    <div class="text-5xl mb-4 md:mb-0 md:mr-4 text-[#d44d6b]">🧬</div>
                    <div>
                        <h3 class="text-xl font-semibold mb-2">Recurrent Abortions</h3>
                        <p class="text-gray-600">Genetic testing (PGT) and specialized care address the root causes for
                            healthier pregnancies.</p>
                    </div>
                </div>
                <div
                    class="flex flex-col md:flex-row items-start bg-white rounded-xl shadow-lg p-6 hover:shadow-xl transition min-w-[80%] sm:min-w-[60%] md:min-w-0 snap-start">
                    <div class="text-5xl mb-4 md:mb-0 md:mr-4 text-[#d44d6b]">🏥</div>
                    <div>
                        <h3 class="text-xl font-semibold mb-2">Uterine Defects</h3>
                        <p class="text-gray-600">Expert laparoscopic and hysteroscopic surgeries treat uterine
                            abnormalities effectively.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="self-intro py-12 bg-white">
        <div class="container mx-auto px-6">
            <h2 class="text-3xl md:text-4xl font-bold text-center mb-12">After-Care &amp; <span
                    class="text-brand-pink">Follow-Up</span></h2>
            <div class="relative overflow-x-auto md:overflow-visible">
                <div
                    class="flex md:flex-nowrap flex-nowrap md:justify-center items-start gap-12 w-max md:w-full px-4 md:px-0">
                    <div class="flex flex-col gap-8 min-w-[280px] md:min-w-0">
                        <div class="flex items-center gap-4">
                            <div class="bg-white p-4 rounded-full border-2 border-brand-pink text-brand-pink text-2xl">
                                📋</div>
                            <div>
                                <h4 class="font-semibold">Initial Assessment</h4>
                                <p class="text-gray-600 text-sm">Monitor recovery and discuss outcomes post-treatment.
                                </p>
                            </div>
                        </div>
                        <div class="flex items-center gap-4">
                            <div class="bg-white p-4 rounded-full border-2 border-brand-pink text-brand-pink text-2xl">
                                💊</div>
                            <div>
                                <h4 class="font-semibold">Medication Guidance</h4>
                                <p class="text-gray-600 text-sm">Advice on medications, diet, and lifestyle adjustments.
                                </p>
                            </div>
                        </div>
                        <div class="flex items-center gap-4">
                            <div class="bg-white p-4 rounded-full border-2 border-brand-pink text-brand-pink text-2xl">
                                📞</div>
                            <div>
                                <h4 class="font-semibold">Follow-Up Consultations</h4>
                                <p class="text-gray-600 text-sm">Scheduled check-ins with doctors to review progress.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-col gap-8 min-w-[280px] md:min-w-0">
                        <div class="flex items-center gap-4 justify-start">
                            <div class="bg-white p-4 rounded-full border-2 border-brand-pink text-brand-pink text-2xl">
                                🧘‍♀️</div>
                            <div>
                                <h4 class="font-semibold">Emotional Support</h4>
                                <p class="text-gray-600 text-sm">Counseling and guidance for emotional well-being.</p>
                            </div>
                        </div>
                        <div class="flex items-center gap-4 justify-start">
                            <div class="bg-white p-4 rounded-full border-2 border-brand-pink text-brand-pink text-2xl">
                                🩺</div>
                            <div>
                                <h4 class="font-semibold">Health Monitoring</h4>
                                <p class="text-gray-600 text-sm">Continuous check-ups and lab tests to ensure safe
                                    recovery.</p>
                            </div>
                        </div>
                        <div class="flex items-center gap-4 justify-start">
                            <div class="bg-white p-4 rounded-full border-2 border-brand-pink text-brand-pink text-2xl">
                                📈</div>
                            <div>
                                <h4 class="font-semibold">Long-Term Care</h4>
                                <p class="text-gray-600 text-sm">Tailored guidance for reproductive health maintenance.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="py-12 bbg-gradient-to-br from-pink-50 via-white to-blue-50">
        <div class="container mx-auto px-6 lg:px-12">
            <h2 class="text-4xl font-bold text-gray-800 text-center mb-6">Awards &amp; Recognition</h2>
            <div class="flex space-x-6 overflow-x-auto scrollbar-hide py-4">
                <div class="relative flex-none w-64 rounded-2xl overflow-hidden group cursor-pointer"><img
                        src="https://images.pexels.com/photos/3183197/pexels-photo-3183197.jpeg" alt="Award 1"
                        class="w-full h-64 object-cover transition-transform duration-500 group-hover:scale-110">
                    <div
                        class="absolute bottom-0 left-0 w-full bg-gradient-to-t from-black/70 to-transparent p-4 text-center">
                        <p class="text-white font-semibold text-lg leading-tight">Best IVF Clinic 2023</p>
                    </div>
                </div>
                <div class="relative flex-none w-64 rounded-2xl overflow-hidden group cursor-pointer"><img
                        src="https://images.pexels.com/photos/3184291/pexels-photo-3184291.jpeg" alt="Award 2"
                        class="w-full h-64 object-cover transition-transform duration-500 group-hover:scale-110">
                    <div
                        class="absolute bottom-0 left-0 w-full bg-gradient-to-t from-black/70 to-transparent p-4 text-center">
                        <p class="text-white font-semibold text-lg leading-tight">Excellence in Fertility Care</p>
                    </div>
                </div>
                <div class="relative flex-none w-64 rounded-2xl overflow-hidden group cursor-pointer"><img
                        src="https://images.pexels.com/photos/3184418/pexels-photo-3184418.jpeg" alt="Award 3"
                        class="w-full h-64 object-cover transition-transform duration-500 group-hover:scale-110">
                    <div
                        class="absolute bottom-0 left-0 w-full bg-gradient-to-t from-black/70 to-transparent p-4 text-center">
                        <p class="text-white font-semibold text-lg leading-tight">Top Reproductive Clinic Award</p>
                    </div>
                </div>
                <div class="relative flex-none w-64 rounded-2xl overflow-hidden group cursor-pointer"><img
                        src="https://images.pexels.com/photos/3184421/pexels-photo-3184421.jpeg" alt="Award 4"
                        class="w-full h-64 object-cover transition-transform duration-500 group-hover:scale-110">
                    <div
                        class="absolute bottom-0 left-0 w-full bg-gradient-to-t from-black/70 to-transparent p-4 text-center">
                        <p class="text-white font-semibold text-lg leading-tight">Patient Choice Award 2023</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="relative bg-white py-12 overflow-hidden">
        <div class="container mx-auto px-6 lg:px-16 relative z-10">
            <div class="text-center mb-8">
                <h2 class="text-4xl font-bold text-gray-800 mb-4 leading-tight"><span class="text-brand-pink">Real
                        Stories, Real Miracles</span></h2>
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
    <section id="appointment-section"
        class="relative py-12 bg-gradient-to-br from-pink-50 via-white to-blue-50 overflow-hidden">
        <div class="container mx-auto px-4">
            <div class="max-w-6xl mx-auto">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                    <div>
                        <h2 class="text-3xl md:text-4xl font-bold text-gray-800 leading-tight mb-6">Begin Your <span
                                class="text-brand-pink">Fertility Journey with India IVF</span></h2>
                        <p class="mt-4 text-gray-600 text-lg mb-8">Kindly reach us to get fastest response and
                            treatment.</p>
                        <div class="space-y-4 mb-8">
                            <div class="flex items-center gap-3">
                                <div class="w-8 h-8 bg-brand-pink rounded-full flex items-center justify-center"><i
                                        class="fas fa-check text-white text-sm"></i></div><span
                                    class="text-gray-700">Free initial consultation</span>
                            </div>
                            <div class="flex items-center gap-3">
                                <div class="w-8 h-8 bg-brand-pink rounded-full flex items-center justify-center"><i
                                        class="fas fa-check text-white text-sm"></i></div><span
                                    class="text-gray-700">Personalized treatment plan</span>
                            </div>
                            <div class="flex items-center gap-3">
                                <div class="w-8 h-8 bg-brand-pink rounded-full flex items-center justify-center"><i
                                        class="fas fa-check text-white text-sm"></i></div><span
                                    class="text-gray-700">24/7 patient support</span>
                            </div>
                        </div>
                        <div class="flex flex-col sm:flex-row gap-4"><button
                                class="bg-transparent border-2 border-brand-blue text-brand-blue px-8 py-3 rounded-full font-semibold hover:bg-brand-blue hover:text-white transition-all">Call
                                Now</button></div>
                    </div>
                    <div class="bg-gray-50 rounded-2xl">
                        <h3 class="text-2xl font-bold brand-grey mb-6 text-center">Schedule Your Consultation</h3>
                        <form class="space-y-4">
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4"><input placeholder="First Name"
                                    class="w-full px-4 py-3 border border-gray-200 rounded-lg focus:outline-none focus:border-brand-pink">
                                <input placeholder="Last Name"
                                    class="w-full px-4 py-3 border border-gray-200 rounded-lg focus:outline-none focus:border-brand-pink">
                            </div><input type="email" placeholder="Email Address"
                                class="w-full px-4 py-3 border border-gray-200 rounded-lg focus:outline-none focus:border-brand-pink">
                            <input type="tel" placeholder="Phone Number"
                                class="w-full px-4 py-3 border border-gray-200 rounded-lg focus:outline-none focus:border-brand-pink">
                            <select
                                class="w-full px-4 py-3 border border-gray-200 rounded-lg focus:outline-none focus:border-brand-pink">
                                <option>Select Preferred Center</option>
                                <option>Delhi</option>
                                <option>Noida</option>
                                <option>Gurugram</option>
                                <option>Ghaziabad</option>
                                <option>Srinagar</option>
                            </select> <textarea placeholder="Tell us about your fertility concerns (optional)"
                                class="w-full px-4 py-3 border border-gray-200 rounded-lg focus:outline-none focus:border-brand-pink h-24 resize-none"></textarea>
                            <button type="submit"
                                class="w-full bg-brand-pink hover:bg-brand-blue text-white px-10 py-3 rounded-full font-semibold text-lg shadow-lg hover:shadow-2xl transition-all duration-500 mt-4 md:mt-0">Book
                                Free Consultation</button>
                        </form>
                    </div>
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
