@extends('frontend.layouts.master')
@section('title', 'Home')
@section('content')
  <section id="offer-banner"
        class="relative w-full bg-cover bg-center py-12 flex items-center justify-center transition-all duration-700 ease-in-out"
        style="background-image:url('https://images.pexels.com/photos/8761328/pexels-photo-8761328.jpeg')">
        <div class="absolute inset-0 bg-black opacity-50"></div>
        <div class="relative z-10 max-w-4xl text-center p-12 rounded-3xl">
            <h2 class="text-4xl md:text-5xl font-bold text-white mb-4 animate-fadeIn">Empowering the <span
                    class="text-[#ffd700]">Next Generation</span> of <span class="text-[#ffd700]">Fertility
                    Experts</span></h2>
            <p class="text-white/90 text-lg md:text-xl leading-relaxed animate-slideUp">Choose from our specialized,
                hands-on training programs designed by leading IVF practitioners.</p>
        </div>
    </section>
    <section class="relative bg-gradient-to-b from-pink-50 via-white to-blue-50 py-12 overflow-hidden">
        <div class="container mx-auto px-6 lg:px-12 text-center">
            <h2 class="text-4xl font-bold text-gray-800 mb-6">Explore Our <span class="text-brand-pink">Training
                    Programs</span></h2>
            <p class="text-gray-600 max-w-2xl mx-auto mb-8">Advance your fertility expertise through immersive, hands-on
                learning experiences guided by leading reproductive specialists.</p>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-10 items-stretch">
                <div
                    class="group relative bg-white/70 backdrop-blur-lg rounded-3xl overflow-hidden transition-all duration-500 flex flex-col text-center">
                    <div class="relative overflow-hidden h-64"><img
                            src="https://media.istockphoto.com/id/1152441056/photo/laboratroy-technician-fertilizing-an-egg.jpg?s=2048x2048&amp;w=is&amp;k=20&amp;c=U_if-M1Q3LOQdMcl9yKWYuNLv5I21jn9D5NTFhlBdi0="
                            alt="IVF Fellowship"
                            class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
                    </div>
                    <div class="p-8 flex flex-col flex-grow justify-between">
                        <div>
                            <h3 class="text-2xl font-semibold text-gray-800 mb-3">IVF Fellowship</h3>
                            <p class="text-gray-600 text-sm leading-relaxed mb-3">Master advanced IVF and ART procedures
                                through structured mentorship, clinical exposure, and real laboratory experience with
                                expert fertility specialists.</p>
                            <ul class="text-gray-600 mb-4 space-y-1">
                                <li><strong>Who Can Apply:</strong> Medical graduates &amp; specialists</li>
                                <li><strong>Duration &amp; Fee:</strong> 6 months / $5000</li>
                            </ul>
                        </div><button
                            class="mx-auto px-6 py-2 text-sm font-medium text-white bg-brand-pink rounded-full hover:bg-brand-blue transition-all">Apply
                            Now</button>
                    </div>
                </div>
                <div
                    class="group relative bg-white/70 backdrop-blur-lg rounded-3xl overflow-hidden transition-all duration-500 flex flex-col text-center">
                    <div class="relative overflow-hidden h-64"><img
                            src="https://media.istockphoto.com/id/1533148452/photo/human-cell-on-scientific-background.jpg?s=2048x2048&amp;w=is&amp;k=20&amp;c=ecB70XWv6R9usIeDETGni-dib0fJPa0IbfZRwlp12LM="
                            alt="Embryology Hands-On"
                            class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
                    </div>
                    <div class="p-8 flex flex-col flex-grow justify-between">
                        <div>
                            <h3 class="text-2xl font-semibold text-gray-800 mb-3">Embryology Hands-On</h3>
                            <p class="text-gray-600 text-sm leading-relaxed mb-3">Gain practical experience in gamete
                                handling, ICSI, and cryopreservation with real lab simulations and direct mentorship
                                from senior embryologists.</p>
                            <ul class="text-gray-600 mb-4 space-y-1">
                                <li><strong>Who Can Apply:</strong> Medical graduates &amp; specialists</li>
                                <li><strong>Duration &amp; Fee:</strong> 6 months / $5000</li>
                            </ul>
                        </div><button
                            class="mx-auto px-6 py-2 text-sm font-medium text-white bg-brand-pink rounded-full hover:bg-brand-blue transition-all">Apply
                            Now</button>
                    </div>
                </div>
                <div
                    class="group relative bg-white/70 backdrop-blur-lg rounded-3xl overflow-hidden transition-all duration-500 flex flex-col text-center">
                    <div class="relative overflow-hidden h-64"><img
                            src="https://media.istockphoto.com/id/1450340737/photo/artificial-insemination-or-in-vitro-fertilization.jpg?s=2048x2048&amp;w=is&amp;k=20&amp;c=xYq4tCwmXLe4yGDeLuwjRpFsZXUWEX0njc5Wu41bPAo="
                            alt="IUI &amp; Basic Fertility Skills"
                            class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
                    </div>
                    <div class="p-8 flex flex-col flex-grow justify-between">
                        <div>
                            <h3 class="text-2xl font-semibold text-gray-800 mb-3">IUI &amp; Basic Fertility Skills</h3>
                            <p class="text-gray-600 text-sm leading-relaxed mb-3">Learn essential fertility lab
                                techniques, ovulation tracking, and intrauterine insemination protocols through guided
                                clinical practice.</p>
                            <ul class="text-gray-600 mb-4 space-y-1">
                                <li><strong>Who Can Apply:</strong> Medical graduates &amp; specialists</li>
                                <li><strong>Duration &amp; Fee:</strong> 6 months / $5000</li>
                            </ul>
                        </div><button
                            class="mx-auto px-6 py-2 text-sm font-medium text-white bg-brand-pink rounded-full hover:bg-brand-blue transition-all">Apply
                            Now</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="py-12 bg-white">
        <div class="container mx-auto px-6 lg:px-12">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-12 items-center">
                <div class="space-y-4">
                    <h2 class="text-4xl font-bold text-gray-800">Learn From <span class="text-brand-pink">India’s
                            Leading Fertility Experts</span></h2>
                    <p class="text-gray-600 text-lg">Our personalized approach to fertility combines expert guidance,
                        advanced diagnostics, and holistic wellness strategies to help you achieve your dream of
                        parenthood.</p>
                </div>
                <div class="space-y-6">
                    <div class="flex items-start space-x-4">
                        <div class="flex-shrink-0"><img
                                src="https://img.icons8.com/?size=100&amp;id=JCDjQ3zAwdDu&amp;format=png&amp;color=000000"
                                alt="Expert Team" class="w-16 h-16"></div>
                        <div>
                            <h4 class="font-semibold text-gray-800">Certified Faculty</h4>
                            <p class="text-gray-600 text-sm">Certified specialists with years of experience in fertility
                                care.</p>
                        </div>
                    </div>
                    <div class="flex items-start space-x-4">
                        <div class="flex-shrink-0"><img
                                src="https://img.icons8.com/?size=100&amp;id=SEcqMs09YlJc&amp;format=png&amp;color=000000"
                                alt="Advanced Diagnostics" class="w-16 h-16"></div>
                        <div>
                            <h4 class="font-semibold text-gray-800">Advanced Labs</h4>
                            <p class="text-gray-600 text-sm">Cutting-edge testing and personalized assessments for
                                accurate insights.</p>
                        </div>
                    </div>
                    <div class="flex items-start space-x-4">
                        <div class="flex-shrink-0"><img
                                src="https://img.icons8.com/?size=100&amp;id=0HAGNdamoJug&amp;format=png&amp;color=000000"
                                alt="Holistic Wellness" class="w-16 h-16"></div>
                        <div>
                            <h4 class="font-semibold text-gray-800">Hands-on Learning</h4>
                            <p class="text-gray-600 text-sm">Integrating lifestyle, nutrition, and stress management for
                                better outcomes.</p>
                        </div>
                    </div>
                </div>
                <div><img src="https://images.pexels.com/photos/5940842/pexels-photo-5940842.jpeg" alt="Fertility Care"
                        class="rounded-3xl w-full h-full object-cover shadow-lg"></div>
            </div>
        </div>
    </section>
    <section class="relative bg-gradient-to-b from-pink-50 via-white to-blue-50 py-12 overflow-hidden">
        <div class="container mx-auto px-6 lg:px-16 relative z-10">
            <div class="text-center mb-8">
                <h2 class="text-4xl font-bold text-gray-800 mb-4 leading-tight">Led by Experts in <span
                        class="text-brand-pink">Reproductive Science</span></h2>
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
                        hystero-laparoscopic procedures."</p>
                    <p class="text-gray-700 text-lg leading-relaxed">She has trained at premier institutions and worked
                        with some of the most renowned IVF centers in the country. Her commitment to ethical,
                        evidence-based fertility care has made her one of the most trusted names in India’s IVF
                        landscape.</p>
                    <div>
                        <h3 class="text-pink-600 font-semibold text-xl">Dr. Richika Sahay</h3>
                        <p class="text-gray-500">Chief Fertility Specialist</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="relative bg-white py-12 overflow-hidden">
        <div class="container mx-auto px-6 lg:px-16 relative z-10">
            <div class="text-center mb-8">
                <h2 class="text-4xl font-bold text-gray-800 mb-4 leading-tight"><span class="text-brand-pink">Our
                        Doctors</span></h2>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
                <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-2xl transition duration-300"><img
                        src="https://images.pexels.com/photos/5215024/pexels-photo-5215024.jpeg" alt="Dr. Jane Smith"
                        class="w-full h-64 object-cover">
                    <div class="px-2 py-4 text-center">
                        <h3 class="text-xl font-semibold text-gray-800">Dr. Jane Smith</h3>
                        <p class="text-gray-500 mt-1">Dermatologist</p>
                        <p class="text-gray-400 mt-1">Noida</p>
                        <div class="flex text-center mt-2 text-xs gap-2 justify-center"><button
                                class="bg-brand-pink hover:bg-brand-blue text-white px-4 py-2 rounded-full shadow-lg hover:shadow-2xl transition-all duration-500 hover:scale-105">View
                                Profile</button> <button
                                class="bg-brand-pink hover:bg-brand-blue text-white px-4 py-2 rounded-full shadow-lg hover:shadow-2xl transition-all duration-500 hover:scale-105">Book
                                Appointment</button></div>
                    </div>
                </div>
                <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-2xl transition duration-300"><img
                        src="https://images.pexels.com/photos/5215024/pexels-photo-5215024.jpeg" alt="Dr. Jane Smith"
                        class="w-full h-64 object-cover">
                    <div class="px-2 py-4 text-center">
                        <h3 class="text-xl font-semibold text-gray-800">Dr. Jane Smith</h3>
                        <p class="text-gray-500 mt-1">Dermatologist</p>
                        <p class="text-gray-400 mt-1">Noida</p>
                        <div class="flex text-center mt-2 text-xs gap-2 justify-center"><button
                                class="bg-brand-pink hover:bg-brand-blue text-white px-4 py-2 rounded-full shadow-lg hover:shadow-2xl transition-all duration-500 hover:scale-105">View
                                Profile</button> <button
                                class="bg-brand-pink hover:bg-brand-blue text-white px-4 py-2 rounded-full shadow-lg hover:shadow-2xl transition-all duration-500 hover:scale-105">Book
                                Appointment</button></div>
                    </div>
                </div>
                <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-2xl transition duration-300"><img
                        src="https://images.pexels.com/photos/5215024/pexels-photo-5215024.jpeg" alt="Dr. Jane Smith"
                        class="w-full h-64 object-cover">
                    <div class="px-2 py-4 text-center">
                        <h3 class="text-xl font-semibold text-gray-800">Dr. Jane Smith</h3>
                        <p class="text-gray-500 mt-1">Dermatologist</p>
                        <p class="text-gray-400 mt-1">Noida</p>
                        <div class="flex text-center mt-2 text-xs gap-2 justify-center"><button
                                class="bg-brand-pink hover:bg-brand-blue text-white px-4 py-2 rounded-full shadow-lg hover:shadow-2xl transition-all duration-500 hover:scale-105">View
                                Profile</button> <button
                                class="bg-brand-pink hover:bg-brand-blue text-white px-4 py-2 rounded-full shadow-lg hover:shadow-2xl transition-all duration-500 hover:scale-105">Book
                                Appointment</button></div>
                    </div>
                </div>
                <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-2xl transition duration-300"><img
                        src="https://images.pexels.com/photos/5215024/pexels-photo-5215024.jpeg" alt="Dr. Jane Smith"
                        class="w-full h-64 object-cover">
                    <div class="px-2 py-4 text-center">
                        <h3 class="text-xl font-semibold text-gray-800">Dr. Jane Smith</h3>
                        <p class="text-gray-500 mt-1">Dermatologist</p>
                        <p class="text-gray-400 mt-1">Noida</p>
                        <div class="flex text-center mt-2 text-xs gap-2 justify-center"><button
                                class="bg-brand-pink hover:bg-brand-blue text-white px-4 py-2 rounded-full shadow-lg hover:shadow-2xl transition-all duration-500 hover:scale-105">View
                                Profile</button> <button
                                class="bg-brand-pink hover:bg-brand-blue text-white px-4 py-2 rounded-full shadow-lg hover:shadow-2xl transition-all duration-500 hover:scale-105">Book
                                Appointment</button></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="relative bg-gradient-to-b from-pink-50 via-white to-blue-50 py-12 overflow-hidden">
        <div class="container mx-auto text-center">
            <div class="bg-gradient-to-r from-brand-blue to-brand-pink py-16 rounded-3xl text-white">
                <h2 class="text-3xl font-semibold mb-10">What Our Trainees Say</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 px-6">
                    <div class="bg-white/10 p-6 rounded-2xl backdrop-blur-lg">
                        <p class="italic mb-3">“The hands-on training helped me gain real IVF lab experience.”</p>
                        <p class="font-semibold">– Dr. Nisha Patel</p>
                    </div>
                    <div class="bg-white/10 p-6 rounded-2xl backdrop-blur-lg">
                        <p class="italic mb-3">“World-class faculty and advanced embryology labs — a great learning
                            experience.”</p>
                        <p class="font-semibold">– Dr. Arjun Mehta</p>
                    </div>
                    <div class="bg-white/10 p-6 rounded-2xl backdrop-blur-lg">
                        <p class="italic mb-3">“The mentorship and exposure to fertility research changed my career
                            path.”</p>
                        <p class="font-semibold">– Priya Rao</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="py-12 bg-white">
        <div class="container mx-auto px-6 lg:px-12">
            <h2 class="text-4xl font-bold text-gray-800 text-center mb-12">Media Gallery</h2>
            <div class="relative">
                <div id="galleryContainer" class="overflow-x-auto overflow-y-hidden snap-x snap-mandatory scrollbar-hide pb-4 rounded-2xl">
                    <div id="gallerySlides" class="flex gap-4 transition-transform duration-500">
                        <div class="flex-shrink-0 w-[85%] sm:w-[45%] md:w-[30%] lg:w-[23%] snap-start">
                            <img src="https://images.pexels.com/photos/5982313/pexels-photo-5982313.jpeg" alt="Gallery 1"
                                class="w-full h-48 md:h-64 object-cover rounded-xl">
                        </div>
                        <div class="flex-shrink-0 w-[85%] sm:w-[45%] md:w-[30%] lg:w-[23%] snap-start">
                            <video controls class="w-full h-48 md:h-64 object-cover rounded-xl">
                                <source src="https://www.w3schools.com/html/mov_bbb.mp4" type="video/mp4">
                            </video>
                        </div>
                        <div class="flex-shrink-0 w-[85%] sm:w-[45%] md:w-[30%] lg:w-[23%] snap-start">
                            <img src="https://images.pexels.com/photos/5939653/pexels-photo-5939653.jpeg" alt="Gallery 2"
                                class="w-full h-48 md:h-64 object-cover rounded-xl">
                        </div>
                        <div class="flex-shrink-0 w-[85%] sm:w-[45%] md:w-[30%] lg:w-[23%] snap-start">
                            <img src="https://images.pexels.com/photos/3771831/pexels-photo-3771831.jpeg" alt="Gallery 3"
                                class="w-full h-48 md:h-64 object-cover rounded-xl">
                        </div>
                        <div class="flex-shrink-0 w-[85%] sm:w-[45%] md:w-[30%] lg:w-[23%] snap-start">
                            <img src="https://images.pexels.com/photos/5982313/pexels-photo-5982313.jpeg" alt="Gallery 1"
                                class="w-full h-48 md:h-64 object-cover rounded-xl">
                        </div>
                        <div class="flex-shrink-0 w-[85%] sm:w-[45%] md:w-[30%] lg:w-[23%] snap-start">
                            <video controls class="w-full h-48 md:h-64 object-cover rounded-xl">
                                <source src="https://www.w3schools.com/html/mov_bbb.mp4" type="video/mp4">
                            </video>
                        </div>
                        <div class="flex-shrink-0 w-[85%] sm:w-[45%] md:w-[30%] lg:w-[23%] snap-start">
                            <img src="https://images.pexels.com/photos/3771831/pexels-photo-3771831.jpeg" alt="Gallery 3"
                                class="w-full h-48 md:h-64 object-cover rounded-xl">
                        </div>
                        <div class="flex-shrink-0 w-[85%] sm:w-[45%] md:w-[30%] lg:w-[23%] snap-start">
                            <img src="https://images.pexels.com/photos/5939653/pexels-photo-5939653.jpeg" alt="Gallery 2"
                                class="w-full h-48 md:h-64 object-cover rounded-xl">
                        </div>
                    </div>
                </div>
                <button id="prevSlide"
                    class="absolute top-1/2 left-2 transform -translate-y-1/2 bg-white/80 hover:bg-white p-3 rounded-full shadow-lg z-10 transition-all duration-300 hidden md:block">
                    ❮
                </button>
                <button id="nextSlide"
                    class="absolute top-1/2 right-2 transform -translate-y-1/2 bg-white/80 hover:bg-white p-3 rounded-full shadow-lg z-10 transition-all duration-300 hidden md:block">
                    ❯
                </button>
            </div>
        </div>
        <style>
            /* Hide scrollbar for Chrome, Safari and Opera */
            .scrollbar-hide::-webkit-scrollbar {
                display: none;
            }

            /* Hide scrollbar for IE, Edge and Firefox */
            .scrollbar-hide {
                -ms-overflow-style: none;
                scrollbar-width: none;
            }

            /* Smooth scrolling */
            #galleryContainer {
                scroll-behavior: smooth;
                -webkit-overflow-scrolling: touch;
            }
        </style>
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const galleryContainer = document.getElementById('galleryContainer');
                const gallerySlides = document.getElementById('gallerySlides');
                const prevSlide = document.getElementById('prevSlide');
                const nextSlide = document.getElementById('nextSlide');

                if (galleryContainer && gallerySlides && prevSlide && nextSlide) {
                    function getScrollAmount() {
                        // Get the first slide element
                        const firstSlide = gallerySlides.querySelector('.flex-shrink-0');
                        if (firstSlide) {
                            // Get the width of the first slide plus gap (16px = gap-4)
                            return firstSlide.offsetWidth + 16;
                        }
                        // Fallback to responsive values
                        if (window.innerWidth < 640) {
                            return window.innerWidth * 0.85 + 16; // 85% width + gap
                        } else if (window.innerWidth < 768) {
                            return window.innerWidth * 0.45 + 16; // 45% width + gap
                        } else if (window.innerWidth < 1024) {
                            return window.innerWidth * 0.30 + 16; // 30% width + gap
                        }
                        return window.innerWidth * 0.23 + 16; // 23% width + gap
                    }

                    nextSlide.addEventListener('click', function() {
                        const scrollAmount = getScrollAmount();
                        galleryContainer.scrollBy({
                            left: scrollAmount,
                            behavior: 'smooth'
                        });
                    });

                    prevSlide.addEventListener('click', function() {
                        const scrollAmount = getScrollAmount();
                        galleryContainer.scrollBy({
                            left: -scrollAmount,
                            behavior: 'smooth'
                        });
                    });

                    // Touch/swipe support for mobile
                    let touchStartX = 0;
                    let touchEndX = 0;

                    galleryContainer.addEventListener('touchstart', function(e) {
                        touchStartX = e.changedTouches[0].screenX;
                    }, { passive: true });

                    galleryContainer.addEventListener('touchend', function(e) {
                        touchEndX = e.changedTouches[0].screenX;
                        handleSwipe();
                    }, { passive: true });

                    function handleSwipe() {
                        const swipeThreshold = 50;
                        const diff = touchStartX - touchEndX;

                        if (Math.abs(diff) > swipeThreshold) {
                            const scrollAmount = getScrollAmount();
                            if (diff > 0) {
                                // Swipe left - scroll right
                                galleryContainer.scrollBy({
                                    left: scrollAmount,
                                    behavior: 'smooth'
                                });
                            } else {
                                // Swipe right - scroll left
                                galleryContainer.scrollBy({
                                    left: -scrollAmount,
                                    behavior: 'smooth'
                                });
                            }
                        }
                    }
                }
            });
        </script>
    </section>
    <section class="relative py-12 bg-gradient-to-b from-pink-50 via-white to-blue-50 overflow-hidden">
        <div class="container mx-auto px-6 text-center relative z-10">
            <h2 class="text-4xl font-bold text-gray-800 leading-tight mb-6"><span class="text-brand-pink">Ready to
                </span><span class="text-brand-blue">Begin Your Training Journey?</span></h2>
            <div class="flex flex-col sm:flex-row justify-center gap-5 animate-fadeInUp delay-300"><a
                    href="#book-consultation"
                    class="bg-brand-blue text-white px-6 py-3 rounded-full font-semibold text-lg shadow-lg hover:bg-brand-pink hover:scale-105 transition-all duration-300">Apply
                    Now </a><a href="#contact"
                    class="border-2 border-[#20417e] text-[#20417e] px-6 py-3 rounded-full font-semibold text-lg hover:bg-[#20417e] hover:text-white transition-all duration-300">Download
                    Brochure</a></div>
        </div>
    </section>
@endsection

