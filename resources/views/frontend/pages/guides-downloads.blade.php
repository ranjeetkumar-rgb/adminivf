@extends('frontend.layouts.master')
@section('content')
  <section class="relative bg-gradient-to-b from-pink-50 via-white to-blue-50 py-12 overflow-hidden">
        <div
            class="container mx-auto px-16 text-center md:text-left flex flex-col-reverse md:flex-row items-center gap-10">
            <div class="md:w-1/2">
                <h1 class="text-4xl font-bold text-gray-800 leading-tight mb-4">Guides &amp; Downloads: <span
                        class="text-brand-pink">Expert Fertility Resources</span></h1>
                <p class="text-gray-600 text-lg mb-6 leading-relaxed">Access helpful guides and downloadable resources
                    to understand fertility, treatments, and planning.</p><button
                    class="bg-brand-blue hover:bg-brand-pink text-white px-6 py-3 rounded-full shadow-lg hover:shadow-2xl transition-all duration-500 hover:scale-105"><i
                        class="fa fa-download mr-2"></i>Download Brochure</button>
            </div>
            <div class="md:w-1/2 relative"><img src="https://images.pexels.com/photos/5700170/pexels-photo-5700170.jpeg"
                    alt="Difficulty Conceiving"
                    class="rounded-3xl shadow-2xl border-4 border-white transform scale-90 hover:scale-95 transition-transform duration-500">
            </div>
        </div>
    </section>
    <section class="bg-white py-12">
        <div class="container mx-auto px-6 lg:px-12">
            <div class="flex flex-wrap justify-center gap-4 mb-12"><button
                    class="px-6 py-2 rounded-full bg-brand-pink text-white font-medium shadow-md hover:bg-pink-700 transition">All</button>
                <button class="px-6 py-2 rounded-full bg-white text-gray-700 border hover:bg-pink-100 transition">IVF
                    &amp; Treatments</button> <button
                    class="px-6 py-2 rounded-full bg-white text-gray-700 border hover:bg-pink-100 transition">Nutrition
                    &amp; Wellness</button> <button
                    class="px-6 py-2 rounded-full bg-white text-gray-700 border hover:bg-pink-100 transition">Fertility
                    Tests</button> <button
                    class="px-6 py-2 rounded-full bg-white text-gray-700 border hover:bg-pink-100 transition">Fertility
                    Preservation</button>
            </div>
            <div
                class="flex md:grid overflow-x-auto snap-x snap-mandatory grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-10">
                <div
                    class="group bg-white rounded-3xl overflow-hidden transition hover:shadow-xl min-w-[300px] snap-start">
                    <div class="relative"><img
                            src="https://images.unsplash.com/photo-1588776814546-23c0e27d0e0d?q=80&amp;w=800"
                            alt="IVF Guide"
                            class="w-full h-56 object-cover transition group-hover:scale-105 duration-500">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/40 to-transparent"></div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-semibold text-gray-800 mb-2">IVF Process Step-by-Step</h3>
                        <p class="text-gray-600 text-sm mb-4">A complete guide explaining each phase of IVF and how to
                            prepare for the best outcomes.</p>
                        <div class="flex justify-between items-center"><span class="text-brand-pink font-medium">PDF •
                                1.2 MB</span> <a href="#"
                                class="text-sm bg-brand-pink text-white px-4 py-2 rounded-full hover:bg-brand-blue transition"><i
                                    class="fa fa-download mr-2"></i>Download</a></div>
                    </div>
                </div>
                <div
                    class="group bg-white rounded-3xl overflow-hidden transition hover:shadow-xl min-w-[300px] snap-start">
                    <div class="relative"><img
                            src="https://images.unsplash.com/photo-1518611012118-696072aa579a?q=80&amp;w=800"
                            alt="Fertility Diet Guide"
                            class="w-full h-56 object-cover transition group-hover:scale-105 duration-500">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/40 to-transparent"></div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-semibold text-gray-800 mb-2">Fertility Diet &amp; Lifestyle</h3>
                        <p class="text-gray-600 text-sm mb-4">Learn about nutrition, supplements, and habits that
                            support reproductive health.</p>
                        <div class="flex justify-between items-center"><span class="text-brand-pink font-medium">PDF •
                                900 KB</span> <a href="#"
                                class="text-sm bg-brand-pink text-white px-4 py-2 rounded-full hover:bg-brand-blue transition"><i
                                    class="fa fa-download mr-2"></i>Download</a></div>
                    </div>
                </div>
                <div
                    class="group bg-white rounded-3xl overflow-hidden transition hover:shadow-xl min-w-[300px] snap-start">
                    <div class="relative"><img
                            src="https://images.unsplash.com/photo-1599058917212-d750089bc07f?q=80&amp;w=800"
                            alt="Fertility FAQ"
                            class="w-full h-56 object-cover transition group-hover:scale-105 duration-500">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/40 to-transparent"></div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-semibold text-gray-800 mb-2">Fertility FAQs</h3>
                        <p class="text-gray-600 text-sm mb-4">Get clear answers to common questions about fertility,
                            ovulation, and IVF success.</p>
                        <div class="flex justify-between items-center"><span class="text-brand-pink font-medium">PDF •
                                700 KB</span> <a href="#"
                                class="text-sm bg-brand-pink text-white px-4 py-2 rounded-full hover:bg-brand-blue transition"><i
                                    class="fa fa-download mr-2"></i>Download</a></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="relative py-12 bg-gradient-to-b from-pink-50 via-white to-blue-50 overflow-hidden">
        <div class="container mx-auto px-6 lg:px-12 relative z-10 text-center">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">Every <span class="text-brand-pink">Fertility
                    Challenge</span> Deserves the Right Care</h2>
            <p class="text-gray-600 max-w-2xl mx-auto mb-12">We combine empathy, expertise, and innovation to guide you
                toward parenthood — with care made just for you.</p>
            <div class="relative overflow-x-auto overflow-y-hidden scrollbar-hide pb-4" style="-webkit-overflow-scrolling: touch;">
                <div id="fertilitySlider" class="flex flex-nowrap">
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
    <section id="learn-fertility" class="relative py-12 bg-white overflow-hidden">
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
    <section class="relative bg-brand-blue text-white py-6 text-center">
        <div class="container mx-auto px-6">
            <h2 class="text-4xl font-bold mb-3">Ready to Take the Next Step?</h2>
            <p class="text-lg mb-4 max-w-2xl mx-auto">Our fertility specialists are here to listen, guide, and support
                you — with care that’s both expert and empathetic.</p><button
                class="bg-brand-pink text-white px-6 py-3 rounded-full shadow-lg hover:shadow-2xl transition-all duration-500 hover:scale-105 mb-2"><i
                    class="fa-solid fa-hand-holding-heart mr-2"></i> Book Your Consultation</button>
        </div>
    </section>
@endsection
