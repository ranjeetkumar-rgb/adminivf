@extends('frontend.layouts.master')
@section('title', 'Home')
@section('content')
    <section id="hero-section"
        class="relative bg-gradient-to-br from-[#20417e] via-[#2f4c8a] to-[#778aaf] text-white overflow-hidden py-12">
        <div class="absolute top-0 left-0 w-72 h-72 bg-pink-300/30 rounded-full blur-3xl opacity-30 animate-pulse">
        </div>
        <div class="absolute bottom-0 right-0 w-96 h-96 bg-blue-200/30 rounded-full blur-3xl opacity-30 animate-pulse">
        </div>
        <div class="container mx-auto px-6 lg:px-20 grid grid-cols-1 lg:grid-cols-2 gap-12 items-center relative z-10">
            <div class="space-y-6 animate-fadeInUp text-center lg:text-left">
                <h1 class="text-4xl md:text-5xl font-extrabold leading-tight">Empowering You with <span
                        class="text-pink-200">Tools for Your Fertility Journey</span><br class="hidden md:block"></h1>
                <p class="text-lg md:text-xl text-blue-100 leading-relaxed">From fertility calculators to patient
                    stories, find everything you need to make informed decisions about your treatment.</p><button
                    class="mt-4 inline-block bg-white text-[#20417e] font-semibold px-8 py-3 rounded-full shadow-lg hover:bg-pink-100 hover:scale-105 transition-all duration-300 ease-in-out">Book
                    a Consultation</button>
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
    <section class="relative py-12 bg-gradient-to-b from-pink-50 overflow-hidden pb-28">
        <div class="text-center mb-28">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-800">Interactive Tools to Help You <span
                    class="text-pink-600">Plan, Track</span> &amp; <span class="text-pink-600">Estimate</span> Your
                Journey</h2>
            <p class="mt-3 text-gray-600 max-w-2xl mx-auto">Discover personalized features designed to make your
                fertility journey simpler and smarter.</p>
        </div>
        <div class="relative flex justify-center items-center">
            <div
                class="relative w-52 h-52 bg-white rounded-full shadow-lg flex flex-col justify-center items-center z-20 border-2 border-pink-400">
                <span class="text-lg font-semibold text-gray-800">Fertility Tools</span>
            </div>
            <div
                class="absolute top-[calc(50%-12rem)] left-[calc(50%-2rem)] w-36 h-36 bg-gradient-to-br from-pink-400 to-pink-600 rounded-full shadow-md flex flex-col justify-center items-center text-white z-20 hover:scale-105 transition cursor-pointer">
                <i class="fa-solid fa-calendar-check text-2xl mb-2"></i> <span
                    class="text-sm font-semibold text-center">Pregnancy Test Calculator</span>
            </div>
            <div
                class="z-10 absolute top-[calc(50%+2rem)] left-[calc(50%-6rem)] w-28 h-28 bg-gradient-to-br from-blue-400 to-blue-600 rounded-full shadow-md flex flex-col justify-center items-center text-white">
            </div>
            <div
                class="absolute top-[calc(50%+2rem)] left-[calc(50%)] w-40 h-40 bg-gradient-to-br from-green-400 to-green-600 rounded-full shadow-md flex flex-col justify-center items-center text-white z-30 hover:scale-105 transition cursor-pointer">
                <i class="fa-solid fa-calculator text-2xl mb-2"></i> <span
                    class="text-sm font-semibold text-center">Eggs to Freeze by<br>Age Calculator</span>
            </div>
            <div
                class="z-40 absolute top-[calc(50%+1rem)] left-[calc(50%+9rem)] w-36 h-36 bg-gradient-to-br from-orange-400 to-pink-500 rounded-full shadow-md flex flex-col justify-center items-center text-white hover:scale-105 transition cursor-pointer">
                <i class="fa-solid fa-heart-pulse text-2xl mb-2"></i> <span
                    class="text-sm font-semibold text-center">IVF Cost<br>Estimator</span>
            </div>
            <div
                class="z-40 absolute top-[calc(50%-12rem)] left-[calc(50%+6rem)] w-32 h-32 bg-gradient-to-br from-yellow-400 to-yellow-600 rounded-full shadow-md flex flex-col justify-center items-center text-white hover:scale-105 transition cursor-pointer">
                <i class="fa-solid fa-calculator text-2xl mb-2"></i> <span class="text-sm font-semibold text-center">BMI
                    Calculator</span>
            </div>
            <div
                class="z-40 absolute top-[calc(50%-2rem)] left-[calc(50%-12rem)] w-32 h-32 bg-gradient-to-br from-blue-400 to-blue-600 rounded-full shadow-md flex flex-col justify-center items-center text-white hover:scale-105 transition cursor-pointer">
                <i class="fa-solid fa-heart-pulse text-2xl mb-2"></i> <span
                    class="text-sm font-semibold text-center">IVF Success Calculator</span>
            </div>
            <div
                class="absolute top-[calc(50%-7rem)] left-[calc(50%-21rem)] w-36 h-36 bg-gradient-to-br from-pink-400 to-pink-600 rounded-full shadow-md flex flex-col justify-center items-center text-white z-30">
            </div>
            <div
                class="z-10 absolute top-[calc(50%+3rem)] left-[calc(50%-15rem)] w-28 h-28 bg-gradient-to-br from-pink-100 to-pink-300 rounded-full shadow-md flex flex-col justify-center items-center text-white">
            </div>
            <div
                class="absolute top-[calc(50%-1rem)] left-[calc(50%-25rem)] w-40 h-40 bg-gradient-to-br from-green-400 to-green-600 rounded-full shadow-md flex flex-col justify-center items-center text-white z-30 hover:scale-105 transition cursor-pointer">
                <i class="fa-solid fa-calculator text-2xl mb-2"></i> <span
                    class="text-sm font-semibold text-center">Ovulation<br>Calculator</span>
            </div>
            <div
                class="z-30 absolute top-[calc(50%-5rem)] left-[calc(50%+7rem)] w-24 h-24 bg-gradient-to-br from-orange-400 to-pink-500 rounded-full shadow-md flex flex-col justify-center items-center text-white">
            </div>
            <div
                class="z-40 absolute top-[calc(50%-4rem)] left-[calc(50%+21rem)] w-28 h-28 bg-gradient-to-br from-yellow-400 to-yellow-600 rounded-full shadow-md flex flex-col justify-center items-center text-white">
            </div>
            <div
                class="z-30 absolute top-[calc(50%)] left-[calc(50%+14rem)] w-32 h-32 bg-gradient-to-br from-pink-100 to-pink-300 rounded-full shadow-md flex flex-col justify-center items-center text-white">
            </div>
            <div
                class="z-30 absolute top-[calc(50%-6rem)] left-[calc(50%+12rem)] w-20 h-20 bg-gradient-to-br from-blue-400 to-blue-600 rounded-full shadow-md flex flex-col justify-center items-center text-white">
            </div>
            <div
                class="z-40 absolute top-[calc(50%-9rem)] left-[calc(50%-12rem)] w-20 h-20 bg-gradient-to-br from-yellow-400 to-yellow-600 rounded-full shadow-md flex flex-col justify-center items-center text-white">
            </div>
        </div>
    </section>
    <script src="https://kit.fontawesome.com/a2e0ad6d3a.js" crossorigin="anonymous"></script>
    <section class="relative bg-white py-12 overflow-hidden">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold text-gray-800 leading-tight"><span
                        class="text-brand-pink">Treatment</span> &amp; Support Options</h2>
                <p class="text-gray-600 mt-4 text-lg max-w-2xl mx-auto">Explore personalized fertility treatments,
                    advanced techniques, and holistic wellness programs designed for your journey.</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-10 px-12">
                <div
                    class="group relative bg-white/60 backdrop-blur-lg rounded-3xl shadow-lg hover:shadow-2xl transition-all duration-500 p-4 border border-white/40 hover:-translate-y-2">
                    <div class="flex flex-col items-center text-center">
                        <div
                            class="w-16 h-16 flex items-center justify-center rounded-full bg-brand-pink text-white shadow-xl mb-6 group-hover:scale-110 transition-transform duration-300">
                            <i class="fa-solid fa-heart-pulse text-2xl"></i>
                        </div>
                        <h3 class="text-xl font-semibold text-gray-800 mb-1">IVF &amp; Related Treatments</h3>
                        <p class="text-gray-600 mb-4 h-16 text-sm">Comprehensive fertility treatments including IVF,
                            ICSI, and egg freezing guided by experienced specialists.</p><a href="#"
                            class="text-brand-blue font-semibold hover:text-brand-pink transition-all duration-300">Learn
                            More <i class="fa-solid fa-arrow-right-long ml-2"></i></a>
                    </div>
                </div>
                <div
                    class="group relative bg-white/60 backdrop-blur-lg rounded-3xl shadow-lg hover:shadow-2xl transition-all duration-500 p-4 border border-white/40 hover:-translate-y-2">
                    <div class="flex flex-col items-center text-center">
                        <div
                            class="w-16 h-16 flex items-center justify-center rounded-full bg-brand-pink text-white shadow-xl mb-6 group-hover:scale-110 transition-transform duration-300">
                            <i class="fa-solid fa-flask text-2xl"></i>
                        </div>
                        <h3 class="text-xl font-semibold text-gray-800 mb-1">Advanced Techniques</h3>
                        <p class="text-gray-600 mb-4 h-16 text-sm">Utilizing the latest lab innovations and precision
                            diagnostics to enhance your success rate.</p><a href="#"
                            class="text-brand-blue font-semibold hover:text-brand-pink transition-all duration-300">Learn
                            More <i class="fa-solid fa-arrow-right-long ml-2"></i></a>
                    </div>
                </div>
                <div
                    class="group relative bg-white/60 backdrop-blur-lg rounded-3xl shadow-lg hover:shadow-2xl transition-all duration-500 p-4 border border-white/40 hover:-translate-y-2">
                    <div class="flex flex-col items-center text-center">
                        <div
                            class="w-16 h-16 flex items-center justify-center rounded-full bg-brand-pink text-white shadow-xl mb-6 group-hover:scale-110 transition-transform duration-300">
                            <i class="fa-solid fa-leaf text-2xl"></i>
                        </div>
                        <h3 class="text-xl font-semibold text-gray-800 mb-1">Fertility Wellness</h3>
                        <p class="text-gray-600 mb-4 h-16 text-sm">Supporting your mind and body with nutrition,
                            mindfulness, and lifestyle guidance.</p><a href="#"
                            class="text-brand-blue font-semibold hover:text-brand-pink transition-all duration-300">Learn
                            More <i class="fa-solid fa-arrow-right-long ml-2"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <section class="py-12 bg-gradient-to-b from-pink-50 overflow-hidden">
        <div class="container mx-auto px-6 lg:px-12 text-center">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">Download Our <span class="text-pink-600">Free
                    Guides</span></h2>
            <p class="text-gray-500 max-w-2xl mx-auto mb-12">Learn more about fertility treatments, IVF success, and
                pregnancy care with our expert resources — all available in easy-to-read PDF format.</p>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6 px-6 max-w-6xl mx-auto">
                <div
                    class="bg-white rounded-2xl shadow-md p-6 hover:shadow-xl transition duration-300 flex flex-col items-center">
                    <i class="fa-solid fa-file-pdf text-pink-600 text-3xl mb-3"></i> <span
                        class="font-semibold text-gray-700 mb-2">IVF Basics</span> <a href="#"
                        class="text-sm text-pink-600 font-medium hover:underline"><i class="fa-solid fa-download"></i>
                        Download</a>
                </div>
                <div
                    class="bg-white rounded-2xl shadow-md p-6 hover:shadow-xl transition duration-300 flex flex-col items-center">
                    <i class="fa-solid fa-file-pdf text-pink-600 text-3xl mb-3"></i> <span
                        class="font-semibold text-gray-700 mb-2">Fertility Tips</span> <a href="#"
                        class="text-sm text-pink-600 font-medium hover:underline"><i class="fa-solid fa-download"></i>
                        Download</a>
                </div>
                <div
                    class="bg-white rounded-2xl shadow-md p-6 hover:shadow-xl transition duration-300 flex flex-col items-center">
                    <i class="fa-solid fa-file-pdf text-pink-600 text-3xl mb-3"></i> <span
                        class="font-semibold text-gray-700 mb-2">Treatment Plan</span> <a href="#"
                        class="text-sm text-pink-600 font-medium hover:underline"><i class="fa-solid fa-download"></i>
                        Download</a>
                </div>
                <div
                    class="bg-white rounded-2xl shadow-md p-6 hover:shadow-xl transition duration-300 flex flex-col items-center">
                    <i class="fa-solid fa-file-pdf text-pink-600 text-3xl mb-3"></i> <span
                        class="font-semibold text-gray-700 mb-2">Nutrition</span> <a href="#"
                        class="text-sm text-pink-600 font-medium hover:underline"><i class="fa-solid fa-download"></i>
                        Download</a>
                </div>
                <div
                    class="bg-white rounded-2xl shadow-md p-6 hover:shadow-xl transition duration-300 flex flex-col items-center">
                    <i class="fa-solid fa-file-pdf text-pink-600 text-3xl mb-3"></i> <span
                        class="font-semibold text-gray-700 mb-2">FAQs</span> <a href="#"
                        class="text-sm text-pink-600 font-medium hover:underline"><i class="fa-solid fa-download"></i>
                        Download</a>
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
    <section id="learn-fertility" class="relative py-12 bg-gradient-to-b from-pink-50 overflow-hidden">
        <div class="container mx-auto px-6 lg:px-16 relative z-10">
            <div class="text-center mb-8 max-w-3xl mx-auto">
                <h2 class="text-4xl font-extrabold text-gray-800 leading-tight mb-4">Learn About <span
                        class="bg-gradient-to-r from-pink-500 to-blue-500 bg-clip-text text-transparent">Fertility</span>
                </h2>
                <p class="text-gray-600 text-lg">Explore trusted insights and expert guidance on fertility, reproductive
                    health, and IVF care from our specialists.</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-10">
                <div
                    class="bg-white rounded-3xl shadow-lg overflow-hidden group hover:shadow-2xl hover:-translate-y-2 transition-all duration-500">
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
                    class="bg-white rounded-3xl shadow-lg overflow-hidden group hover:shadow-2xl hover:-translate-y-2 transition-all duration-500">
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
                    class="bg-white rounded-3xl shadow-lg overflow-hidden group hover:shadow-2xl hover:-translate-y-2 transition-all duration-500">
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
        <div class="text-center mt-16"><button
                class="bg-brand-pink hover:bg-brand-blue text-white px-10 py-3 rounded-full font-semibold text-lg shadow-lg hover:shadow-2xl transition-all duration-500 hover:scale-105">Explore
                Articles</button></div>
    </section>
    <section class="relative py-12 bg-white overflow-hidden">
        <div class="container mx-auto px-6 text-center relative z-10">
            <h2 class="text-4xl font-bold text-gray-800 leading-tight mb-6"><span class="text-brand-pink">Need
                    personalized guidance? </span>Speak with our fertility experts today</h2>
            <p class="text-gray-600 text-lg max-w-3xl mx-auto mb-10 animate-fadeInUp delay-150">Begin your journey with
                expert fertility specialists who truly understand your hopes and challenges. From diagnosis to
                treatment, we’re with you — every single step of the way.</p>
            <div class="flex flex-col sm:flex-row justify-center gap-5 animate-fadeInUp delay-300"><a
                    href="#book-consultation"
                    class="bg-brand-blue text-white px-6 py-3 rounded-full font-semibold text-lg shadow-lg hover:bg-brand-pink hover:scale-105 transition-all duration-300">Book
                    a Consultation </a><a href="#contact"
                    class="border-2 border-[#20417e] text-[#20417e] px-6 py-3 rounded-full font-semibold text-lg hover:bg-[#20417e] hover:text-white transition-all duration-300">Call
                    Now</a></div>
        </div>
    </section>
    <section
        class="relative bg-gradient-to-r from-[#20417e] via-[#3a5594] to-[#778aaf] text-white py-12 overflow-hidden">
        <div class="absolute inset-0"><img src="https://images.pexels.com/photos/2880897/pexels-photo-2880897.jpeg"
                alt="IVF background" class="w-full h-full object-cover opacity-20"></div>
        <div class="container mx-auto relative z-10 px-6 lg:px-16">
            <div class="lg:w-2/3">
                <h2 class="text-4xl font-bold mb-6 leading-tight">Questions About <span class="text-pink-200">IVF and
                        Fertility Treatments</span></h2>
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
