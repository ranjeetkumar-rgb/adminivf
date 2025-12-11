@extends('frontend.layouts.master')
@section('title', 'Home')
@section('content')
    <section id="hero-section"
        class="relative bg-gradient-to-br from-[#20417e] via-[#2f4c8a] to-[#778aaf] text-white overflow-hidden py-12">
        <div
            class="container mx-auto px-6 text-center md:text-left flex flex-col-reverse md:flex-row items-center gap-10">
            <div class="space-y-6 animate-fadeInUp lg:w-1/2 text-center lg:text-left">
                <h1 class="text-4xl md:text-5xl font-extrabold leading-tight">Balance Your Mind.</h1><span
                    class="text-pink-200 text-lg md:text-xl">Heal Your Body. Enhance Your Fertility.</span>
                <p class="text-lg md:text-xl text-blue-100 leading-relaxed">Integrative mind-body wellness to reduce
                    stress, support emotional balance, and optimize your fertility journey</p><button
                    class="bg-brand-blue hover:bg-brand-pink text-white px-6 py-3 rounded-full shadow-lg hover:shadow-2xl transition-all duration-500 hover:scale-105">Book
                    a Free Mind-Body Consultation</button>
            </div>
            <div class="md:w-1/2 relative"><img src="https://images.pexels.com/photos/6932075/pexels-photo-6932075.jpeg"
                    alt="Difficulty Conceiving"
                    class="rounded-3xl shadow-2xl border-4 border-white transform scale-90 hover:scale-95 transition-transform duration-500">
            </div>
        </div>
    </section>
    <section id="fertility-stress"
        class="relative py-12 bg-gradient-to-b from-pink-50 via-white to-blue-50 overflow-hidden">
        <div class="container mx-auto px-6 lg:px-16 relative z-10">
            <div class="text-center mb-6 md:mb-10 max-w-3xl mx-auto animate-fade-in-up">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-800 leading-tight mb-4">The Fertility-Stress
                    Connection</h2>
                <p class="text-gray-600 text-lg">Understanding how emotional well-being impacts fertility and
                    reproductive health.</p>
            </div>
            <div
                class="flex flex-nowrap overflow-x-auto snap-x snap-mandatory sm:grid sm:grid-cols-6 sm:overflow-visible gap-10 scrollbar-hide">
                <div
                    class="min-w-[80%] sm:min-w-0 snap-start col-span-6 md:col-span-2 bg-white rounded-3xl shadow-md hover:shadow-2xl hover:-translate-y-2 transition-all duration-500 group p-8 border border-gray-100 animate-fade-in-up">
                    <div
                        class="w-16 h-16 bg-gradient-to-tr from-pink-400 to-pink-600 rounded-full flex items-center justify-center mb-5 text-white text-3xl shadow-lg group-hover:scale-110 transition-transform duration-300">
                        <i class="fa-solid fa-heart-pulse"></i></div>
                    <h3 class="text-xl font-semibold text-gray-800 mb-3 group-hover:text-pink-600 transition-colors">
                        Hormone &amp; Ovulation</h3>
                    <p class="text-gray-600 text-sm leading-relaxed">Stress impacts hormone regulation and ovulation,
                        influencing your fertility journey.</p>
                </div>
                <div
                    class="min-w-[80%] sm:min-w-0 snap-start col-span-6 md:col-span-2 bg-white rounded-3xl shadow-md hover:shadow-2xl hover:-translate-y-2 transition-all duration-500 group p-8 border border-gray-100 animate-fade-in-up delay-100">
                    <div
                        class="w-16 h-16 bg-gradient-to-tr from-blue-400 to-cyan-500 rounded-full flex items-center justify-center mb-5 text-white text-3xl shadow-lg group-hover:scale-110 transition-transform duration-300">
                        <i class="fa-solid fa-droplet"></i></div>
                    <h3 class="text-xl font-semibold text-gray-800 mb-3 group-hover:text-blue-600 transition-colors">
                        Sperm &amp; Menstrual Cycles</h3>
                    <p class="text-gray-600 text-sm leading-relaxed">Elevated cortisol levels can affect sperm quality
                        and menstrual cycles, reducing conception chances.</p>
                </div>
                <div
                    class="min-w-[80%] sm:min-w-0 snap-start col-span-6 md:col-span-2 bg-white rounded-3xl shadow-md hover:shadow-2xl hover:-translate-y-2 transition-all duration-500 group p-8 border border-gray-100 animate-fade-in-up delay-200">
                    <div
                        class="w-16 h-16 bg-gradient-to-tr from-purple-400 to-pink-400 rounded-full flex items-center justify-center mb-5 text-white text-3xl shadow-lg group-hover:scale-110 transition-transform duration-300">
                        <i class="fa-solid fa-brain"></i></div>
                    <h3 class="text-xl font-semibold text-gray-800 mb-3 group-hover:text-purple-600 transition-colors">
                        Mind-Body Balance</h3>
                    <p class="text-gray-600 text-sm leading-relaxed">Maintaining mind-body balance improves conception
                        rates and supports emotional health during treatment.</p>
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
    <section id="mind-body-support" class="relative py-12 bg-white overflow-hidden">
        <div class="container mx-auto px-6 lg:px-12 relative z-10">
            <div class="text-center mb-6 md:mb-10 animate-fade-in-up">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-2">Mind-Body Support Offerings</h2>
                <p class="text-gray-600 text-lg">Exclusive programs for members to manage stress and enhance fertility
                    wellness.</p>
            </div>
            <div class="space-y-10 max-w-4xl mx-auto animate-fade-in-up">
                <div class="flex items-start gap-6">
                    <div
                        class="flex-shrink-0 w-16 h-16 bg-gradient-to-tr from-pink-400 to-pink-600 rounded-full flex items-center justify-center text-white text-2xl shadow-lg">
                        <i class="fa-solid fa-person-praying"></i></div>
                    <div>
                        <h3 class="text-xl font-semibold text-gray-800 flex items-center gap-2">Yoga for Fertility <span
                                class="bg-yellow-200 text-yellow-800 px-6 md:px-2 py-1 rounded-full text-xs font-semibold">Members
                                Only</span></h3>
                        <p class="text-gray-600 mt-1">Gentle yoga routines designed to support reproductive health and
                            emotional balance.</p><a href="#"
                            class="text-pink-600 font-semibold hover:underline mt-1 inline-block">Know more →</a>
                    </div>
                </div>
                <div class="flex items-start gap-6">
                    <div
                        class="flex-shrink-0 w-16 h-16 bg-gradient-to-tr from-blue-400 to-cyan-500 rounded-full flex items-center justify-center text-white text-2xl shadow-lg">
                        <i class="fa-solid fa-spa"></i></div>
                    <div>
                        <h3 class="text-xl font-semibold text-gray-800 flex items-center gap-2">Meditation &amp;
                            Breathwork <span
                                class="bg-yellow-200 text-yellow-800 px-6 md:px-2 py-1 rounded-full text-xs font-semibold">Members
                                Only</span></h3>
                        <p class="text-gray-600 mt-1">Guided sessions for stress relief, hormonal balance, and mental
                            clarity.</p><a href="#"
                            class="text-blue-600 font-semibold hover:underline mt-1 inline-block">Know more →</a>
                    </div>
                </div>
                <div class="flex items-start gap-6">
                    <div
                        class="flex-shrink-0 w-16 h-16 bg-gradient-to-tr from-purple-400 to-pink-400 rounded-full flex items-center justify-center text-white text-2xl shadow-lg">
                        <i class="fa-solid fa-brain"></i></div>
                    <div>
                        <h3 class="text-xl font-semibold text-gray-800 flex items-center gap-2">Mindfulness Coaching
                            <span
                                class="bg-yellow-200 text-yellow-800 px-6 md:px-2 py-1 rounded-full text-xs font-semibold">Members
                                Only</span></h3>
                        <p class="text-gray-600 mt-1">One-on-one coaching to manage stress, build resilience, and
                            improve fertility outcomes.</p><a href="#"
                            class="text-purple-600 font-semibold hover:underline mt-1 inline-block">Know more →</a>
                    </div>
                </div>
                <div class="flex items-start gap-6">
                    <div
                        class="flex-shrink-0 w-16 h-16 bg-gradient-to-tr from-green-400 to-lime-400 rounded-full flex items-center justify-center text-white text-2xl shadow-lg">
                        <i class="fa-solid fa-heart"></i></div>
                    <div>
                        <h3 class="text-xl font-semibold text-gray-800 flex items-center gap-2">Stress Management
                            Workshops <span
                                class="bg-yellow-200 text-yellow-800 px-6 md:px-2 py-1 rounded-full text-xs font-semibold">Members
                                Only</span></h3>
                        <p class="text-gray-600 mt-1">Interactive workshops for managing anxiety, reducing stress, and
                            boosting fertility wellness.</p><a href="#"
                            class="text-green-600 font-semibold hover:underline mt-1 inline-block">Know more →</a>
                    </div>
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
    <section id="consultation-offerings"
        class="relative py-12 bg-gradient-to-b from-pink-50 via-white to-blue-50 overflow-hidden">
        <div class="container mx-auto px-6 lg:px-12">
            <div class="text-center mb-6 md:mb-10">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-800">Consultation Offerings</h2>
                <p class="text-gray-600 mt-2">Tailored mind-body support services to optimize your fertility journey.
                </p>
            </div>
            <div
                class="flex flex-nowrap overflow-x-auto snap-x snap-mandatory sm:grid sm:grid-cols-4 sm:overflow-visible gap-10 scrollbar-hide">
                <div
                    class="min-w-[80%] sm:min-w-0 snap-start bg-white p-0 rounded-2xl shadow-md hover:shadow-lg transition-shadow duration-300 border border-gray-100 overflow-hidden">
                    <img src="https://images.pexels.com/photos/7579309/pexels-photo-7579309.jpeg"
                        alt="Mind-Body Assessment" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-semibold text-gray-800 mb-2">Mind-Body Assessment</h3>
                        <p class="text-gray-600 text-sm">Initial session to assess emotional well-being, stress
                            triggers, and sleep quality.</p>
                    </div>
                </div>
                <div
                    class="min-w-[80%] sm:min-w-0 snap-start bg-white p-0 rounded-2xl shadow-md hover:shadow-lg transition-shadow duration-300 border border-gray-100 overflow-hidden">
                    <img src="https://images.pexels.com/photos/8436595/pexels-photo-8436595.jpeg"
                        alt="Mind-Body Assessment" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-semibold text-gray-800 mb-2">Personalized Routine</h3>
                        <p class="text-gray-600 text-sm">Sleep, stress, hydration, and exercise optimization for
                            fertility.</p>
                    </div>
                </div>
                <div
                    class="min-w-[80%] sm:min-w-0 snap-start bg-white p-0 rounded-2xl shadow-md hover:shadow-lg transition-shadow duration-300 border border-gray-100 overflow-hidden">
                    <img src="https://images.pexels.com/photos/3822692/pexels-photo-3822692.jpeg"
                        alt="Mind-Body Assessment" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-semibold text-gray-800 mb-2">Guided Sessions</h3>
                        <p class="text-gray-600 text-sm">Daily/weekly online or in-person sessions led by wellness
                            experts.</p>
                    </div>
                </div>
                <div
                    class="min-w-[80%] sm:min-w-0 snap-start bg-white p-0 rounded-2xl shadow-md hover:shadow-lg transition-shadow duration-300 border border-gray-100 overflow-hidden">
                    <img src="https://images.pexels.com/photos/5716037/pexels-photo-5716037.jpeg"
                        alt="Mind-Body Assessment" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-semibold text-gray-800 mb-2">Progress Tracking</h3>
                        <p class="text-gray-600 text-sm">Regular mood &amp; stress-level tracking through app or
                            journal.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="fertility-preservation" class="relative py-12 bg-white overflow-hidden">
        <div class="container mx-auto px-4 lg:px-8 relative z-10">
            <div class="text-center mb-6 animate-fade-in-up">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-2">Our Fertility Preservation Services</h2>
                <p class="text-gray-600 text-sm md:text-base">Safe and trusted options to preserve your fertility for
                    the future.</p>
            </div>
            <div
                class="flex flex-nowrap overflow-x-auto snap-x snap-mandatory sm:grid sm:grid-cols-3 sm:overflow-visible gap-10 scrollbar-hide">
                <div
                    class="min-w-[80%] sm:min-w-0 snap-start flex flex-col items-center text-center bg-gray-50 p-6 rounded-xl shadow-sm border border-gray-100 hover:shadow-md transition-all">
                    <div
                        class="w-16 h-16 mb-4 text-white flex items-center justify-center rounded-full bg-gradient-to-tr from-pink-400 to-pink-600 text-2xl">
                        <i class="fa-solid fa-egg"></i></div>
                    <h3 class="text-lg font-semibold text-gray-800 mb-2">Egg Freezing</h3>
                    <p class="text-gray-600 text-sm">Safely preserve your eggs for future family planning.</p><button
                        class="mt-3 text-pink-600 font-semibold text-sm hover:underline">Learn More →</button>
                </div>
                <div
                    class="min-w-[80%] sm:min-w-0 snap-start flex flex-col items-center text-center bg-gray-50 p-6 rounded-xl shadow-sm border border-gray-100 hover:shadow-md transition-all">
                    <div
                        class="w-16 h-16 mb-4 text-white flex items-center justify-center rounded-full bg-gradient-to-tr from-blue-400 to-blue-600 text-2xl">
                        <i class="fa-solid fa-dna"></i></div>
                    <h3 class="text-lg font-semibold text-gray-800 mb-2">Embryo Freezing</h3>
                    <p class="text-gray-600 text-sm">Store embryos safely with expert handling and monitoring.</p>
                    <button class="mt-3 text-blue-600 font-semibold text-sm hover:underline">Learn More →</button>
                </div>
                <div
                    class="min-w-[80%] sm:min-w-0 snap-start flex flex-col items-center text-center bg-gray-50 p-6 rounded-xl shadow-sm border border-gray-100 hover:shadow-md transition-all">
                    <div
                        class="w-16 h-16 mb-4 text-white flex items-center justify-center rounded-full bg-gradient-to-tr from-green-400 to-green-600 text-2xl">
                        <i class="fa-solid fa-venus-mars"></i></div>
                    <h3 class="text-lg font-semibold text-gray-800 mb-2">Sperm Freezing</h3>
                    <p class="text-gray-600 text-sm">Reliable sperm preservation for your future reproductive goals.</p>
                    <button class="mt-3 text-green-600 font-semibold text-sm hover:underline">Learn More →</button>
                </div>
            </div>
        </div>
        <style>
            @keyframes fade-in-up {
                0% {
                    opacity: 0;
                    transform: translateY(10px)
                }

                100% {
                    opacity: 1;
                    transform: translateY(0)
                }
            }

            .animate-fade-in-up {
                animation: fade-in-up .7s ease-out both
            }
        </style>
    </section>
    <section id="wellness-instructors"
        class="relative py-12 bg-gradient-to-b from-pink-50 via-white to-blue-50 overflow-hidden">
        <div class="container mx-auto px-4 lg:px-8 relative z-10">
            <div class="text-center mb-10 animate-fade-in-up">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-2">Led by Mind-Body Wellness Experts</h2>
                <p class="text-gray-600 text-base md:text-lg">Meet our certified instructors guiding you through stress
                    management and fertility-focused wellness.</p>
            </div>
            <div
                class="flex flex-nowrap overflow-x-auto snap-x snap-mandatory sm:grid sm:grid-cols-4 sm:overflow-visible gap-10 scrollbar-hide">
                <div
                    class="min-w-[80%] sm:min-w-0 snap-start flex flex-col items-center text-center bg-gray-50 p-4 rounded-xl shadow-sm border border-gray-100 hover:shadow-md transition-all">
                    <div class="w-20 h-20 rounded-full overflow-hidden mb-4"><img src="doctor.png" alt="Instructor Name"
                            class="w-full h-full object-cover"></div>
                    <h3 class="text-md font-semibold text-gray-800 mb-1">Dr. Priya Sharma</h3>
                    <p class="text-gray-600 text-sm">Yoga &amp; Fertility Specialist</p><button
                        class="mt-3 text-pink-600 font-semibold text-sm hover:underline">Meet Instructor →</button>
                </div>
                <div
                    class="min-w-[80%] sm:min-w-0 snap-start flex flex-col items-center text-center bg-gray-50 p-4 rounded-xl shadow-sm border border-gray-100 hover:shadow-md transition-all">
                    <div class="w-20 h-20 rounded-full overflow-hidden mb-4"><img src="doctor.png" alt="Instructor Name"
                            class="w-full h-full object-cover"></div>
                    <h3 class="text-md font-semibold text-gray-800 mb-1">Mr. Rajiv Kapoor</h3>
                    <p class="text-gray-600 text-sm">Meditation &amp; Breathwork Coach</p><button
                        class="mt-3 text-blue-600 font-semibold text-sm hover:underline">Meet Instructor →</button>
                </div>
                <div
                    class="min-w-[80%] sm:min-w-0 snap-start flex flex-col items-center text-center bg-gray-50 p-4 rounded-xl shadow-sm border border-gray-100 hover:shadow-md transition-all">
                    <div class="w-20 h-20 rounded-full overflow-hidden mb-4"><img src="doctor.png" alt="Instructor Name"
                            class="w-full h-full object-cover"></div>
                    <h3 class="text-md font-semibold text-gray-800 mb-1">Ms. Ananya Verma</h3>
                    <p class="text-gray-600 text-sm">Mindfulness &amp; Fertility Coach</p><button
                        class="mt-3 text-purple-600 font-semibold text-sm hover:underline">Meet Instructor →</button>
                </div>
                <div
                    class="min-w-[80%] sm:min-w-0 snap-start flex flex-col items-center text-center bg-gray-50 p-4 rounded-xl shadow-sm border border-gray-100 hover:shadow-md transition-all">
                    <div class="w-20 h-20 rounded-full overflow-hidden mb-4"><img src="doctor.png" alt="Instructor Name"
                            class="w-full h-full object-cover"></div>
                    <h3 class="text-md font-semibold text-gray-800 mb-1">Dr. Kiran Mehta</h3>
                    <p class="text-gray-600 text-sm">Stress Management &amp; Wellness Expert</p><button
                        class="mt-3 text-green-600 font-semibold text-sm hover:underline">Meet Instructor →</button>
                </div>
            </div>
        </div>
        <style>
            @keyframes fade-in-up {
                0% {
                    opacity: 0;
                    transform: translateY(10px)
                }

                100% {
                    opacity: 1;
                    transform: translateY(0)
                }
            }

            .animate-fade-in-up {
                animation: fade-in-up .7s ease-out both
            }
        </style>
    </section>
    <section class="relative py-12 bg-white overflow-hidden">
        <div class="container mx-auto px-6 lg:px-12">
            <div class="text-center mb-6 md:mb-10">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-2">Real Stories of Calm, Balance &amp;
                    Conception</h2>
            </div>
            <div
                class="flex flex-nowrap overflow-x-auto snap-x snap-mandatory sm:grid sm:grid-cols-3 sm:overflow-visible gap-10 scrollbar-hide">
                <div
                    class="min-w-[80%] sm:min-w-0 snap-start bg-white shadow-md hover:shadow-xl transition-all duration-300 rounded-2xl p-8 relative overflow-hidden transform hover:-translate-y-2">
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
                    class="min-w-[80%] sm:min-w-0 snap-start bg-white shadow-md hover:shadow-xl transition-all duration-300 rounded-2xl p-8 relative overflow-hidden transform hover:-translate-y-2">
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
                    class="min-w-[80%] sm:min-w-0 snap-start bg-white shadow-md hover:shadow-xl transition-all duration-300 rounded-2xl p-8 relative overflow-hidden transform hover:-translate-y-2">
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
