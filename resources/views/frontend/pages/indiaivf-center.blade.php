@extends('frontend.layouts.master')
@section('content')
    <section class="relative text-white py-12 h-[400px]">
        <div class="absolute inset-0 w-full h-full overflow-hidden"><img
                class="w-full h-full object-cover brightness-75"
                src="https://storage.googleapis.com/uxpilot-auth.appspot.com/1127413b9e-0b5ef83b92d241e93706.png"></div>
        <div class="container mx-auto px-6 text-center md:mt-10 opacity-90">
            <h2 class="text-4xl md:text-6xl font-extrabold mb-4">India IVF - Our Network of Centres</h2>
            <p class="text-2xl max-w-3xl mx-auto">These are the real stories of the families we've helped build. Let
                their journeys inspire your own step toward parenthood.</p>
        </div>
    </section>
    <section class="py-12 bg-gradient-to-r from-[#20417e] via-[#3e73b9] to-[#20417e] overflow-hidden">
        <div class="container mx-auto px-6 lg:px-12">
            <div class="flex md:grid md:grid-cols-4 gap-8 text-center overflow-x-auto snap-x snap-mandatory pb-4">
                <div class="min-w-[180px] snap-center">
                    <h3 class="text-5xl font-bold text-[#ffd700]">1200+</h3>
                    <p class="text-white">Happy Families</p>
                </div>
                <div class="min-w-[180px] snap-center">
                    <h3 class="text-5xl font-bold text-[#ffd700]">95%</h3>
                    <p class="text-white">Success Rate</p>
                </div>
                <div class="min-w-[180px] snap-center">
                    <h3 class="text-5xl font-bold text-[#ffd700]">20+</h3>
                    <p class="text-white">Years of Experience</p>
                </div>
                <div class="min-w-[180px] snap-center">
                    <h3 class="text-5xl font-bold text-[#ffd700]">50+</h3>
                    <p class="text-white">Expert Doctors</p>
                </div>
            </div>
        </div>
    </section>
    <section id="gallery" class="py-12 bg-white">
        <div class="container mx-auto px-4">
            <div class="max-w-6xl mx-auto">
                <div class="text-center mb-12"><span
                        class="inline-flex items-center text-xs font-semibold tracking-wider uppercase text-[#d45276] bg-[#FFF0F4] px-3 py-1 rounded-full mb-4"><i
                            class="mr-2" data-fa-i2svg=""><svg class="svg-inline--fa fa-images" aria-hidden="true"
                                focusable="false" data-prefix="fas" data-icon="images" role="img"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg="">
                                <path fill="currentColor"
                                    d="M160 32c-35.3 0-64 28.7-64 64V320c0 35.3 28.7 64 64 64H512c35.3 0 64-28.7 64-64V96c0-35.3-28.7-64-64-64H160zM396 138.7l96 144c4.9 7.4 5.4 16.8 1.2 24.6S480.9 320 472 320H328 280 200c-9.2 0-17.6-5.3-21.6-13.6s-2.9-18.2 2.9-25.4l64-80c4.6-5.7 11.4-9 18.7-9s14.2 3.3 18.7 9l17.3 21.6 56-84C360.5 132 368 128 376 128s15.5 4 20 10.7zM192 128a32 32 0 1 1 64 0 32 32 0 1 1 -64 0zM48 120c0-13.3-10.7-24-24-24S0 106.7 0 120V344c0 75.1 60.9 136 136 136H456c13.3 0 24-10.7 24-24s-10.7-24-24-24H136c-48.6 0-88-39.4-88-88V120z">
                                </path>
                            </svg></i>Our Centers Gallery</span>
                    <h2 class="text-3xl md:text-4xl font-bold text-[#414042] mb-4 font-poppins">Explore Our World-Class
                        Facilities</h2>
                    <p class="text-lg text-gray-600 max-w-3xl mx-auto">Take a virtual tour of our state-of-the-art IVF
                        centers across Delhi NCR. Each facility is designed to provide the highest level of care and
                        comfort.</p>
                </div>
                <div class="flex flex-wrap justify-center gap-3 mb-8"><button
                        class="gallery-filter-btn active px-6 py-2 rounded-full text-sm font-semibold transition-all duration-300 bg-[#d45276] text-white shadow-lg hover:shadow-xl"
                        data-filter="all">All Centers</button> <button
                        class="gallery-filter-btn px-6 py-2 rounded-full text-sm font-semibold transition-all duration-300 bg-white text-[#d45276] border-2 border-[#d45276] hover:bg-[#d45276] hover:text-white shadow-lg hover:shadow-xl"
                        data-filter="delhi">Delhi</button> <button
                        class="gallery-filter-btn px-6 py-2 rounded-full text-sm font-semibold transition-all duration-300 bg-white text-[#d45276] border-2 border-[#d45276] hover:bg-[#d45276] hover:text-white shadow-lg hover:shadow-xl"
                        data-filter="noida">Noida</button> <button
                        class="gallery-filter-btn px-6 py-2 rounded-full text-sm font-semibold transition-all duration-300 bg-white text-[#d45276] border-2 border-[#d45276] hover:bg-[#d45276] hover:text-white shadow-lg hover:shadow-xl"
                        data-filter="gurugram">Gurugram</button> <button
                        class="gallery-filter-btn px-6 py-2 rounded-full text-sm font-semibold transition-all duration-300 bg-white text-[#d45276] border-2 border-[#d45276] hover:bg-[#d45276] hover:text-white shadow-lg hover:shadow-xl"
                        data-filter="ghaziabad">Ghaziabad</button> <button
                        class="gallery-filter-btn px-6 py-2 rounded-full text-sm font-semibold transition-all duration-300 bg-white text-[#d45276] border-2 border-[#d45276] hover:bg-[#d45276] hover:text-white shadow-lg hover:shadow-xl"
                        data-filter="rohini">Rohini</button></div>
                <div id="galleryGrid"
                    class="flex gap-6 overflow-x-auto snap-x snap-mandatory sm:grid sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 sm:overflow-visible pb-4">
                    <div class="group cursor-pointer gallery-item min-w-[250px] snap-start" data-center="delhi">
                        <div class="relative overflow-hidden rounded-xl shadow-lg"><img
                                src="https://indiaivf.co.in/wp-content/uploads/delhi-interior-1.jpg"
                                alt="Delhi Centre - Reception Area"
                                class="w-full h-48 object-cover transition-transform duration-300 group-hover:scale-105"
                                onerror='this.src="https://via.placeholder.com/400x300/f0f0f0/999999?text=Gallery+Image"'>
                            <div
                                class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-20 transition-all duration-300">
                            </div>
                            <div
                                class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black/70 to-transparent p-3">
                                <div class="text-white text-sm font-semibold">Delhi</div>
                            </div>
                        </div>
                    </div>
                    <div class="group cursor-pointer gallery-item min-w-[250px] snap-start" data-center="delhi">
                        <div class="relative overflow-hidden rounded-xl shadow-lg"><img
                                src="https://indiaivf.co.in/wp-content/uploads/delhi-interior-2.jpg"
                                alt="Delhi Centre - Consultation Room"
                                class="w-full h-48 object-cover transition-transform duration-300 group-hover:scale-105"
                                onerror='this.src="https://via.placeholder.com/400x300/f0f0f0/999999?text=Gallery+Image"'>
                            <div
                                class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-20 transition-all duration-300">
                            </div>
                            <div
                                class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black/70 to-transparent p-3">
                                <div class="text-white text-sm font-semibold">Delhi</div>
                            </div>
                        </div>
                    </div>
                    <div class="group cursor-pointer gallery-item min-w-[250px] snap-start" data-center="delhi">
                        <div class="relative overflow-hidden rounded-xl shadow-lg"><img
                                src="https://indiaivf.co.in/wp-content/uploads/delhi-interior-3.jpg"
                                alt="Delhi Centre - Laboratory"
                                class="w-full h-48 object-cover transition-transform duration-300 group-hover:scale-105"
                                onerror='this.src="https://via.placeholder.com/400x300/f0f0f0/999999?text=Gallery+Image"'>
                            <div
                                class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-20 transition-all duration-300">
                            </div>
                            <div
                                class="absolute bottom-0 left-0 ri  ght-0 bg-gradient-to-t from-black/70 to-transparent p-3">
                                <div class="text-white text-sm font-semibold">Delhi</div>
                            </div>
                        </div>
                    </div>
                    <div class="group cursor-pointer gallery-item min-w-[250px] snap-start" data-center="delhi">
                        <div class="relative overflow-hidden rounded-xl shadow-lg"><img
                                src="https://indiaivf.co.in/wp-content/uploads/delhi-interior-4.jpg"
                                alt="Delhi Centre - Recovery Room"
                                class="w-full h-48 object-cover transition-transform duration-300 group-hover:scale-105"
                                onerror='this.src="https://via.placeholder.com/400x300/f0f0f0/999999?text=Gallery+Image"'>
                            <div
                                class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-20 transition-all duration-300">
                            </div>
                            <div
                                class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black/70 to-transparent p-3">
                                <div class="text-white text-sm font-semibold">Delhi</div>
                            </div>
                        </div>
                    </div>
                    <div class="group cursor-pointer gallery-item min-w-[250px] snap-start" data-center="delhi">
                        <div class="relative overflow-hidden rounded-xl shadow-lg"><img
                                src="https://indiaivf.co.in/wp-content/uploads/delhif1.jpeg"
                                alt="Delhi Centre - Recovery Room"
                                class="w-full h-48 object-cover transition-transform duration-300 group-hover:scale-105"
                                onerror='this.src="https://via.placeholder.com/400x300/f0f0f0/999999?text=Gallery+Image"'>
                            <div
                                class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-20 transition-all duration-300">
                            </div>
                            <div
                                class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black/70 to-transparent p-3">
                                <div class="text-white text-sm font-semibold">Delhi</div>
                            </div>
                        </div>
                    </div>
                    <div class="group cursor-pointer gallery-item min-w-[250px] snap-start" data-center="delhi">
                        <div class="relative overflow-hidden rounded-xl shadow-lg"><img
                                src="https://indiaivf.co.in/wp-content/uploads/delhif2.jpeg"
                                alt="Delhi Centre - Recovery Room"
                                class="w-full h-48 object-cover transition-transform duration-300 group-hover:scale-105"
                                onerror='this.src="https://via.placeholder.com/400x300/f0f0f0/999999?text=Gallery+Image"'>
                            <div
                                class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-20 transition-all duration-300">
                            </div>
                            <div
                                class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black/70 to-transparent p-3">
                                <div class="text-white text-sm font-semibold">Delhi</div>
                            </div>
                        </div>
                    </div>
                    <div class="group cursor-pointer gallery-item min-w-[250px] snap-start" data-center="delhi">
                        <div class="relative overflow-hidden rounded-xl shadow-lg"><img
                                src="https://indiaivf.co.in/wp-content/uploads/delhif3.jpeg"
                                alt="Delhi Centre - Recovery Room"
                                class="w-full h-48 object-cover transition-transform duration-300 group-hover:scale-105"
                                onerror='this.src="https://via.placeholder.com/400x300/f0f0f0/999999?text=Gallery+Image"'>
                            <div
                                class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-20 transition-all duration-300">
                            </div>
                            <div
                                class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black/70 to-transparent p-3">
                                <div class="text-white text-sm font-semibold">Delhi</div>
                            </div>
                        </div>
                    </div>
                    <div class="group cursor-pointer gallery-item min-w-[250px] snap-start" data-center="noida">
                        <div class="relative overflow-hidden rounded-xl shadow-lg"><img
                                src="https://indiaivf.co.in/wp-content/uploads/noida-interior-1.jpg"
                                alt="Noida Centre - Reception Area"
                                class="w-full h-48 object-cover transition-transform duration-300 group-hover:scale-105"
                                onerror='this.src="https://via.placeholder.com/400x300/f0f0f0/999999?text=Gallery+Image"'>
                            <div
                                class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-20 transition-all duration-300">
                            </div>
                            <div
                                class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black/70 to-transparent p-3">
                                <div class="text-white text-sm font-semibold">Noida</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="text-center mt-12"><button id="loadMoreBtn"
                        class="px-8 py-3 bg-[#d45276] text-white font-semibold rounded-full hover:bg-[#b83d5f] transition-all duration-300 shadow-lg hover:shadow-xl transform hover:-translate-y-1"
                        style="display:inline-flex"><i class="fa fa-plus mr-2 mt-1"></i>See More</button></div>
            </div>
        </div>
    </section>
    <section id="academic-programs"
        class="relative py-12 bg-gradient-to-b from-pink-50 via-white to-blue-50 overflow-hidden">
        <div class="container mx-auto px-6 lg:px-16 relative z-10">
            <div class="text-center mb-8">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4 leading-tight">Find an <span
                        class="text-brand-pink">India IVF Near You</span></h2>
            </div>
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 items-start">
                <div class="bg-white shadow-2xl rounded-3xl p-8 border border-gray-100">
                    <div
                        class="flex gap-6 overflow-x-auto snap-x snap-mandatory pb-4 md:grid md:grid-cols-1 lg:grid-cols-1">
                        <div
                            class="min-w-[280px] snap-center flex flex-col bg-white rounded-xl shadow-lg overflow-hidden border border-gray-100 lg:flex-row">
                            <img src="https://media.istockphoto.com/id/2198878282/photo/female-doctor-consults-a-couple-in-hospital-office-discussing-medical-diagnostics-and.jpg?b=1&amp;s=612x612&amp;w=0&amp;k=20&amp;c=Iiy5F5DU1hECTI7pFAB9YHCaK-jbWor4nMtasD6eld4="
                                alt="Gurgaon Center" class="w-40 object-cover">
                            <div class="py-6 md:pl-4 md:pr-2">
                                <h3 class="text-xl font-semibold mb-1">Gurgaon – Sector 51</h3>
                                <p class="text-gray-500 mb-3 text-sm">123 Medical Complex, New Delhi - 110001</p>
                                <div class="flex flex-row gap-3 text-xs"><a href="tel:+911244882222"
                                        class="flex items-center justify-center gap-2 bg-brand-blue text-white px-4 py-2 rounded-lg font-medium hover:bg-brand-pink transition">+91
                                        12345 67890 </a><a href="#"
                                        class="flex items-center justify-center gap-2 border border-gray-300 text-gray-700 px-4 py-2 rounded-lg font-medium hover:bg-gray-100 transition">Center
                                        details</a></div>
                            </div>
                        </div>
                        <div
                            class="min-w-[280px] snap-center flex flex-col bg-white rounded-xl shadow-lg overflow-hidden border border-gray-100 lg:flex-row">
                            <img src="https://media.istockphoto.com/id/2198878282/photo/female-doctor-consults-a-couple-in-hospital-office-discussing-medical-diagnostics-and.jpg?b=1&amp;s=612x612&amp;w=0&amp;k=20&amp;c=Iiy5F5DU1hECTI7pFAB9YHCaK-jbWor4nMtasD6eld4="
                                alt="Delhi Center" class="w-40 object-cover">
                            <div class="py-6 md:pl-4 md:pr-2">
                                <h3 class="text-xl font-semibold mb-1">Delhi</h3>
                                <p class="text-gray-500 mb-3 text-sm">123 Medical Complex, New Delhi - 110001</p>
                                <div class="flex flex-row gap-3 text-xs"><a href="tel:+911244882222"
                                        class="flex items-center justify-center gap-2 bg-brand-blue text-white px-4 py-2 rounded-lg font-medium hover:bg-brand-pink transition">+91
                                        12345 67890 </a><a href="#"
                                        class="flex items-center justify-center gap-2 border border-gray-300 text-gray-700 px-4 py-2 rounded-lg font-medium hover:bg-gray-100 transition">Center
                                        details</a></div>
                            </div>
                        </div>
                        <div
                            class="min-w-[280px] snap-center flex flex-col bg-white rounded-xl shadow-lg overflow-hidden border border-gray-100 lg:flex-row">
                            <img src="https://media.istockphoto.com/id/2198878282/photo/female-doctor-consults-a-couple-in-hospital-office-discussing-medical-diagnostics-and.jpg?b=1&amp;s=612x612&amp;w=0&amp;k=20&amp;c=Iiy5F5DU1hECTI7pFAB9YHCaK-jbWor4nMtasD6eld4="
                                alt="Gurgaon Center" class="w-40 object-cover">
                            <div class="py-6 md:pl-4 md:pr-2">
                                <h3 class="text-xl font-semibold mb-1">Gurgaon – Sector 51</h3>
                                <p class="text-gray-500 mb-3 text-sm">123 Medical Complex, New Delhi - 110001</p>
                                <div class="flex flex-row gap-3 text-xs"><a href="tel:+911244882222"
                                        class="flex items-center justify-center gap-2 bg-brand-blue text-white px-4 py-2 rounded-lg font-medium hover:bg-brand-pink transition">+91
                                        12345 67890 </a><a href="#"
                                        class="flex items-center justify-center gap-2 border border-gray-300 text-gray-700 px-4 py-2 rounded-lg font-medium hover:bg-gray-100 transition">Center
                                        details</a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="h-[580px] rounded-2xl overflow-hidden shadow-lg border border-gray-100"><iframe
                        class="w-full h-full"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3503.511706911657!2d77.2167211150736!3d28.61393998242212!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390cfd1c5f66b2cd%3A0x42cb68eecf89b4f8!2sNew%20Delhi%2C%20Delhi!5e0!3m2!1sen!2sin!4v1697716183022!5m2!1sen!2sin"
                        allowfullscreen="" loading="lazy"></iframe></div>
            </div>
        </div>
    </section>
    <section id="testimonials" class="py12 bg-white">
        <div class="container mx-auto px-4">
            <div class="p-4 sm:p-6 relative overflow-hidden">
                <div class="flex items-center justify-between mb-4 sm:mb-6">
                    <div class="pl-4">
                        <h2 class="mt-3 text-xl sm:text-2xl md:text-3xl font-bold text-[#414042]">OUR CENTERS</h2>
                        <p class="hidden sm:block text-sm text-neutral-500 mt-1">We are proud to have 6 centres across
                            India, each dedicated to providing the best care to our patients.</p>
                    </div>
                    <div class="flex gap-2"><button id="testimonialsPrev"
                            class="bg-white/80 hover:bg-white text-[#d45276] w-9 h-9 sm:w-10 sm:h-10 rounded-full shadow-lg flex items-center justify-center"><i
                                data-fa-i2svg=""><svg class="svg-inline--fa fa-chevron-left" aria-hidden="true"
                                    focusable="false" data-prefix="fas" data-icon="chevron-left" role="img"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" data-fa-i2svg="">
                                    <path fill="currentColor"
                                        d="M9.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l192 192c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L77.3 256 246.6 86.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-192 192z">
                                    </path>
                                </svg></i></button> <button id="testimonialsNext"
                            class="bg-white/80 hover:bg-white text-[#d45276] w-9 h-9 sm:w-10 sm:h-10 rounded-full shadow-lg flex items-center justify-center"><i
                                data-fa-i2svg=""><svg class="svg-inline--fa fa-chevron-right" aria-hidden="true"
                                    focusable="false" data-prefix="fas" data-icon="chevron-right" role="img"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" data-fa-i2svg="">
                                    <path fill="currentColor"
                                        d="M310.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-192 192c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L242.7 256 73.4 86.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l192 192z">
                                    </path>
                                </svg></i></button></div>
                </div>
                <div class="overflow-hidden">
                    <div id="testimonialsCarousel" class="flex transition-transform duration-500 ease-in-out"
                        style="transform:translateX(0)">
                        <div class="w-full sm:w-1/2 lg:w-1/3 px-2 sm:px-3 flex-shrink-0">
                            <div class="relative h-80 rounded-2xl overflow-hidden shadow group cursor-pointer"
                                onclick='playVideo(this,"H3p-vl5jajI")'>
                                <div class="absolute inset-0 bg-gray-900"><iframe
                                        src="https://www.youtube.com/embed/H3p-vl5jajI?si=pMvepTmBwWOV2jIt&amp;controls=0"
                                        class="w-full h-full object-cover" frameborder="0"
                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                        allowfullscreen=""></iframe></div>
                                <div
                                    class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/20 to-transparent">
                                </div>
                                <div class="absolute bottom-0 inset-x-0 p-4">
                                    <div class="flex gap-1 mb-2 text-[#FFB55E]"><i data-fa-i2svg=""><svg
                                                class="svg-inline--fa fa-star" aria-hidden="true" focusable="false"
                                                data-prefix="fas" data-icon="star" role="img"
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"
                                                data-fa-i2svg="">
                                                <path fill="currentColor"
                                                    d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z">
                                                </path>
                                            </svg></i><i data-fa-i2svg=""><svg class="svg-inline--fa fa-star"
                                                aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star"
                                                role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"
                                                data-fa-i2svg="">
                                                <path fill="currentColor"
                                                    d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z">
                                                </path>
                                            </svg></i><i data-fa-i2svg=""><svg class="svg-inline--fa fa-star"
                                                aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star"
                                                role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"
                                                data-fa-i2svg="">
                                                <path fill="currentColor"
                                                    d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z">
                                                </path>
                                            </svg></i><i data-fa-i2svg=""><svg class="svg-inline--fa fa-star"
                                                aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star"
                                                role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"
                                                data-fa-i2svg="">
                                                <path fill="currentColor"
                                                    d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z">
                                                </path>
                                            </svg></i><i data-fa-i2svg=""><svg class="svg-inline--fa fa-star"
                                                aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star"
                                                role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"
                                                data-fa-i2svg="">
                                                <path fill="currentColor"
                                                    d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z">
                                                </path>
                                            </svg></i></div><a href="https://maps.app.goo.gl/ySqWBwxjAk7PMVoa6"
                                        target="_blank">
                                        <div class="backdrop-blur-sm bg-white/10 rounded-xl p-3 text-white">
                                            <div class="font-semibold">India IVF Centre - Delhi</div>
                                            <div class="text-xs opacity-90">Delhi</div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="w-full sm:w-1/2 lg:w-1/3 px-2 sm:px-3 flex-shrink-0">
                            <div class="relative h-80 rounded-2xl overflow-hidden shadow group cursor-pointer"
                                onclick='playVideo(this,"nlV9kKcBmoM")'>
                                <div class="absolute inset-0 bg-gray-900"><iframe
                                        src="https://www.youtube.com/embed/nlV9kKcBmoM?si=qrC5yMAZplQGUmpo&amp;controls=0"
                                        class="w-full h-full object-cover" frameborder="0"
                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                        allowfullscreen=""></iframe></div>
                                <div
                                    class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/20 to-transparent">
                                </div>
                                <div class="absolute bottom-0 inset-x-0 p-4">
                                    <div class="flex gap-1 mb-2 text-[#FFB55E]"><i data-fa-i2svg=""><svg
                                                class="svg-inline--fa fa-star" aria-hidden="true" focusable="false"
                                                data-prefix="fas" data-icon="star" role="img"
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"
                                                data-fa-i2svg="">
                                                <path fill="currentColor"
                                                    d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z">
                                                </path>
                                            </svg></i><i data-fa-i2svg=""><svg class="svg-inline--fa fa-star"
                                                aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star"
                                                role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"
                                                data-fa-i2svg="">
                                                <path fill="currentColor"
                                                    d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z">
                                                </path>
                                            </svg></i><i data-fa-i2svg=""><svg class="svg-inline--fa fa-star"
                                                aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star"
                                                role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"
                                                data-fa-i2svg="">
                                                <path fill="currentColor"
                                                    d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z">
                                                </path>
                                            </svg></i><i data-fa-i2svg=""><svg class="svg-inline--fa fa-star"
                                                aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star"
                                                role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"
                                                data-fa-i2svg="">
                                                <path fill="currentColor"
                                                    d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z">
                                                </path>
                                            </svg></i><i data-fa-i2svg=""><svg class="svg-inline--fa fa-star"
                                                aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star"
                                                role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"
                                                data-fa-i2svg="">
                                                <path fill="currentColor"
                                                    d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z">
                                                </path>
                                            </svg></i></div><a href="https://maps.app.goo.gl/wKprp9KGykkjEF3t7"
                                        target="_blank">
                                        <div class="backdrop-blur-sm bg-white/10 rounded-xl p-3 text-white">
                                            <div class="font-semibold">India IVF Centre - Noida</div>
                                            <div class="text-xs opacity-90">Noida</div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="w-full sm:w-1/2 lg:w-1/3 px-2 sm:px-3 flex-shrink-0">
                            <div class="relative h-80 rounded-2xl overflow-hidden shadow group cursor-pointer"
                                onclick='playVideo(this,"cxjNbAdTnnc")'>
                                <div class="absolute inset-0 bg-gray-900"><iframe
                                        src="https://www.youtube.com/embed/cxjNbAdTnnc?si=fmc6goCeLrdilyI1&amp;controls=0"
                                        class="w-full h-full object-cover" frameborder="0"
                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                        allowfullscreen=""></iframe></div>
                                <div
                                    class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/20 to-transparent">
                                </div>
                                <div class="absolute bottom-0 inset-x-0 p-4">
                                    <div class="flex gap-1 mb-2 text-[#FFB55E]"><i data-fa-i2svg=""><svg
                                                class="svg-inline--fa fa-star" aria-hidden="true" focusable="false"
                                                data-prefix="fas" data-icon="star" role="img"
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"
                                                data-fa-i2svg="">
                                                <path fill="currentColor"
                                                    d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z">
                                                </path>
                                            </svg></i><i data-fa-i2svg=""><svg class="svg-inline--fa fa-star"
                                                aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star"
                                                role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"
                                                data-fa-i2svg="">
                                                <path fill="currentColor"
                                                    d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z">
                                                </path>
                                            </svg></i><i data-fa-i2svg=""><svg class="svg-inline--fa fa-star"
                                                aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star"
                                                role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"
                                                data-fa-i2svg="">
                                                <path fill="currentColor"
                                                    d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z">
                                                </path>
                                            </svg></i><i data-fa-i2svg=""><svg class="svg-inline--fa fa-star"
                                                aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star"
                                                role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"
                                                data-fa-i2svg="">
                                                <path fill="currentColor"
                                                    d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z">
                                                </path>
                                            </svg></i><i data-fa-i2svg=""><svg class="svg-inline--fa fa-star"
                                                aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star"
                                                role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"
                                                data-fa-i2svg="">
                                                <path fill="currentColor"
                                                    d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z">
                                                </path>
                                            </svg></i></div><a href="https://maps.app.goo.gl/K7aUkX8MA8WZbK3W7"
                                        target="_blank">
                                        <div class="backdrop-blur-sm bg-white/10 rounded-xl p-3 text-white">
                                            <div class="font-semibold">India IVF Centre - Gurugram</div>
                                            <div class="text-xs opacity-90">Gurugram</div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="w-full sm:w-1/2 lg:w-1/3 px-2 sm:px-3 flex-shrink-0">
                            <div class="relative h-80 rounded-2xl overflow-hidden shadow group cursor-pointer"
                                onclick='playVideo(this,"KnHxZGrSVMo")'>
                                <div class="absolute inset-0 bg-gray-900"><iframe
                                        src="https://www.youtube.com/embed/KnHxZGrSVMo?si=PuKovYdicnNmO3S-&amp;controls=0"
                                        class="w-full h-full object-cover" frameborder="0"
                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                        allowfullscreen=""></iframe></div>
                                <div
                                    class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/20 to-transparent">
                                </div>
                                <div class="absolute bottom-0 inset-x-0 p-4">
                                    <div class="flex gap-1 mb-2 text-[#FFB55E]"><i data-fa-i2svg=""><svg
                                                class="svg-inline--fa fa-star" aria-hidden="true" focusable="false"
                                                data-prefix="fas" data-icon="star" role="img"
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"
                                                data-fa-i2svg="">
                                                <path fill="currentColor"
                                                    d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z">
                                                </path>
                                            </svg></i><i data-fa-i2svg=""><svg class="svg-inline--fa fa-star"
                                                aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star"
                                                role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"
                                                data-fa-i2svg="">
                                                <path fill="currentColor"
                                                    d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z">
                                                </path>
                                            </svg></i><i data-fa-i2svg=""><svg class="svg-inline--fa fa-star"
                                                aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star"
                                                role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"
                                                data-fa-i2svg="">
                                                <path fill="currentColor"
                                                    d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z">
                                                </path>
                                            </svg></i><i data-fa-i2svg=""><svg class="svg-inline--fa fa-star"
                                                aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star"
                                                role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"
                                                data-fa-i2svg="">
                                                <path fill="currentColor"
                                                    d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z">
                                                </path>
                                            </svg></i><i data-fa-i2svg=""><svg class="svg-inline--fa fa-star"
                                                aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star"
                                                role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"
                                                data-fa-i2svg="">
                                                <path fill="currentColor"
                                                    d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z">
                                                </path>
                                            </svg></i></div><a href="https://maps.app.goo.gl/rc18tmdjLdsQaqyAA"
                                        target="_blank">
                                        <div class="backdrop-blur-sm bg-white/10 rounded-xl p-3 text-white">
                                            <div class="font-semibold">India IVF Centre - Ghaziabad</div>
                                            <div class="text-xs opacity-90">Ghaziabad</div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="w-full sm:w-1/2 lg:w-1/3 px-2 sm:px-3 flex-shrink-0">
                            <div class="relative h-80 rounded-2xl overflow-hidden shadow group cursor-pointer"
                                onclick='playVideo(this,"gfUvq8lS410")'>
                                <div class="absolute inset-0 bg-gray-900"><iframe
                                        src="https://www.youtube.com/embed/gfUvq8lS410?si=FOQRj3gUSMDdTFrP&amp;controls=0"
                                        class="w-full h-full object-cover" frameborder="0"
                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                        allowfullscreen=""></iframe></div>
                                <div
                                    class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/20 to-transparent">
                                </div>
                                <div class="absolute bottom-0 inset-x-0 p-4">
                                    <div class="flex gap-1 mb-2 text-[#FFB55E]"><i data-fa-i2svg=""><svg
                                                class="svg-inline--fa fa-star" aria-hidden="true" focusable="false"
                                                data-prefix="fas" data-icon="star" role="img"
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"
                                                data-fa-i2svg="">
                                                <path fill="currentColor"
                                                    d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z">
                                                </path>
                                            </svg></i><i data-fa-i2svg=""><svg class="svg-inline--fa fa-star"
                                                aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star"
                                                role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"
                                                data-fa-i2svg="">
                                                <path fill="currentColor"
                                                    d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z">
                                                </path>
                                            </svg></i><i data-fa-i2svg=""><svg class="svg-inline--fa fa-star"
                                                aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star"
                                                role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"
                                                data-fa-i2svg="">
                                                <path fill="currentColor"
                                                    d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z">
                                                </path>
                                            </svg></i><i data-fa-i2svg=""><svg class="svg-inline--fa fa-star"
                                                aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star"
                                                role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"
                                                data-fa-i2svg="">
                                                <path fill="currentColor"
                                                    d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z">
                                                </path>
                                            </svg></i><i data-fa-i2svg=""><svg class="svg-inline--fa fa-star"
                                                aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star"
                                                role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"
                                                data-fa-i2svg="">
                                                <path fill="currentColor"
                                                    d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z">
                                                </path>
                                            </svg></i></div><a href="https://maps.app.goo.gl/8jdgianvuBFVxmUc9"
                                        target="_blank">
                                        <div class="backdrop-blur-sm bg-white/10 rounded-xl p-3 text-white">
                                            <div class="font-semibold">India IVF Centre - Rohini, Delhi</div>
                                            <div class="text-xs opacity-90">Rohini, Delhi</div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="testimonialsIndicators" class="flex justify-center mt-6 space-x-2"></div>
            </div>
        </div>
    </section>
    <section class="relative bg-gradient-to-b from-pink-50 via-white to-blue-50 py-12 overflow-hidden">
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
    <section class="relative bg-white py-12 overflow-hidden">
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
                                    Appointment</button></div>
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
                                    Appointment</button></div>
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
                                    Appointment</button></div>
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
                                    Appointment</button></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="relative bg-brand-blue text-white py-6 text-center">
        <div class="container mx-auto px-6">
            <h2 class="text-3xl md:text-4xl font-bold mb-3">Ready to Take the Next Step?</h2>
            <p class="text-lg mb-4 max-w-2xl mx-auto">Our fertility specialists are here to listen, guide, and support
                you — with care that’s both expert and empathetic.</p><button
                class="bg-brand-pink text-white px-6 py-3 rounded-full shadow-lg hover:shadow-2xl transition-all duration-500 hover:scale-105 mb-2"><i
                    class="fa-solid fa-hand-holding-heart mr-2"></i> Book Your Consultation</button>
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

@section('scripts')
<script>
    // Gallery Filter Functionality
    document.addEventListener('DOMContentLoaded', function() {
        const filterButtons = document.querySelectorAll('.gallery-filter-btn');
        const galleryItems = document.querySelectorAll('.gallery-item');
        const loadMoreBtn = document.getElementById('loadMoreBtn');
        const galleryGrid = document.getElementById('galleryGrid');

        // Filter button click handlers
        filterButtons.forEach(button => {
            button.addEventListener('click', function(e) {
                e.preventDefault();
                const filter = this.getAttribute('data-filter');

                // Remove active class from all buttons
                filterButtons.forEach(btn => {
                    btn.classList.remove('active', 'bg-[#d45276]', 'text-white', 'shadow-lg');
                    btn.classList.add('bg-white', 'text-[#d45276]', 'border-2', 'border-[#d45276]');
                });

                // Add active class to clicked button
                this.classList.add('active', 'bg-[#d45276]', 'text-white', 'shadow-lg');
                this.classList.remove('bg-white', 'text-[#d45276]', 'border-2', 'border-[#d45276]');

                // Filter gallery items with smooth transition
                let visibleCount = 0;
                galleryItems.forEach(item => {
                    const center = item.getAttribute('data-center');
                    const matchesFilter = filter === 'all' || center === filter;

                    if (matchesFilter) {
                        // Show item if it matches filter - remove hidden-item class
                        item.classList.remove('hidden-item');
                        item.style.display = 'block';
                        item.style.opacity = '0';
                        setTimeout(() => {
                            item.style.transition = 'opacity 0.3s ease-in';
                            item.style.opacity = '1';
                        }, 10);
                        visibleCount++;
                    } else {
                        // Hide item if it doesn't match filter
                        item.style.opacity = '0';
                        setTimeout(() => {
                            item.style.display = 'none';
                        }, 200);
                    }
                });

                // Hide load more button when filter is applied (since filter shows all matching items)
                if (loadMoreBtn) {
                    loadMoreBtn.style.display = 'none';
                }
            });
        });

        // Load More button functionality
        if (loadMoreBtn) {
            // Initially show only first 4 items, hide the rest
            const allItems = Array.from(galleryItems);
            const initialShowCount = 4;

            allItems.forEach((item, index) => {
                if (index >= initialShowCount) {
                    item.style.display = 'none';
                    item.classList.add('hidden-item');
                }
            });

            // Show button if there are more items to show
            if (allItems.length > initialShowCount) {
                loadMoreBtn.style.display = 'inline-flex';
            } else {
                loadMoreBtn.style.display = 'none';
            }

            loadMoreBtn.addEventListener('click', function(e) {
                e.preventDefault();

                // Get current filter
                const currentFilter = document.querySelector('.gallery-filter-btn.active')?.getAttribute('data-filter') || 'all';

                // Show ALL items that match the current filter
                galleryItems.forEach(item => {
                    const center = item.getAttribute('data-center');
                    const matchesFilter = currentFilter === 'all' || center === currentFilter;

                    if (matchesFilter) {
                        // Remove hidden-item class
                        item.classList.remove('hidden-item');

                        // Show the item with animation
                        item.style.display = 'block';
                        item.style.opacity = '0';
                        item.style.transition = 'opacity 0.4s ease-in';

                        // Trigger fade-in
                        setTimeout(() => {
                            item.style.opacity = '1';
                        }, 50);
                    }
                });

                // Hide the button after showing all items
                this.style.display = 'none';

                // Scroll to gallery section smoothly after a brief delay
                setTimeout(() => {
                    const gallerySection = document.getElementById('gallery');
                    if (gallerySection) {
                        gallerySection.scrollIntoView({ behavior: 'smooth', block: 'start' });
                    }
                }, 200);
            });
        }

        // Testimonials/Centers Carousel Functionality
        const testimonialsCarousel = document.getElementById('testimonialsCarousel');
        const testimonialsPrev = document.getElementById('testimonialsPrev');
        const testimonialsNext = document.getElementById('testimonialsNext');

        if (testimonialsCarousel && testimonialsPrev && testimonialsNext) {
            let currentIndex = 0;
            // Get direct child div elements using children property
            const carouselItems = Array.from(testimonialsCarousel.children);
            const totalItems = carouselItems.length;

            // Function to get items per view based on screen size
            function getItemsPerView() {
                const width = window.innerWidth;
                if (width >= 1024) return 3; // lg:w-1/3
                if (width >= 640) return 2;  // sm:w-1/2
                return 1; // w-full
            }

            // Function to update carousel position
            function updateCarousel() {
                const itemsPerView = getItemsPerView();
                const maxIndex = Math.max(0, totalItems - itemsPerView);
                currentIndex = Math.min(currentIndex, maxIndex);
                currentIndex = Math.max(0, currentIndex);

                // Calculate translateX value based on item width
                // Items are: w-full (100%), sm:w-1/2 (50%), lg:w-1/3 (33.33%)
                // We need to account for the flex container and item widths
                if (totalItems > 0 && carouselItems[0]) {
                    const firstItem = carouselItems[0];
                    const itemWidth = firstItem.offsetWidth;
                    const containerWidth = testimonialsCarousel.parentElement.offsetWidth;
                    const translateX = -(currentIndex * itemWidth);

                    testimonialsCarousel.style.transform = `translateX(${translateX}px)`;
                } else {
                    // Fallback to percentage-based calculation
                    const itemWidthPercent = 100 / getItemsPerView();
                    const translateX = -(currentIndex * itemWidthPercent);
                    testimonialsCarousel.style.transform = `translateX(${translateX}%)`;
                }

                // Update button states
                testimonialsPrev.style.opacity = currentIndex === 0 ? '0.5' : '1';
                testimonialsPrev.style.pointerEvents = currentIndex === 0 ? 'none' : 'auto';
                testimonialsPrev.style.cursor = currentIndex === 0 ? 'not-allowed' : 'pointer';

                testimonialsNext.style.opacity = currentIndex >= maxIndex ? '0.5' : '1';
                testimonialsNext.style.pointerEvents = currentIndex >= maxIndex ? 'none' : 'auto';
                testimonialsNext.style.cursor = currentIndex >= maxIndex ? 'not-allowed' : 'pointer';
            }

            // Previous button
            testimonialsPrev.addEventListener('click', function(e) {
                e.preventDefault();
                e.stopPropagation();
                if (currentIndex > 0) {
                    currentIndex--;
                    updateCarousel();
                }
            });

            // Next button
            testimonialsNext.addEventListener('click', function(e) {
                e.preventDefault();
                e.stopPropagation();
                const itemsPerView = getItemsPerView();
                const maxIndex = Math.max(0, totalItems - itemsPerView);
                if (currentIndex < maxIndex) {
                    currentIndex++;
                    updateCarousel();
                }
            });

            // Update on window resize
            let resizeTimeout;
            window.addEventListener('resize', function() {
                clearTimeout(resizeTimeout);
                resizeTimeout = setTimeout(() => {
                    // Reset to first slide if current index is out of bounds
                    const itemsPerView = getItemsPerView();
                    const maxIndex = Math.max(0, totalItems - itemsPerView);
                    if (currentIndex > maxIndex) {
                        currentIndex = maxIndex;
                    }
                    updateCarousel();
                }, 250);
            });

            // Initialize carousel
            setTimeout(() => {
                updateCarousel();
            }, 100);
        }
    });

    // Play Video Function for carousel items
    function playVideo(element, videoId) {
        const iframe = element.querySelector('iframe');
        if (iframe) {
            // Update iframe src to enable autoplay
            const currentSrc = iframe.src;
            if (!currentSrc.includes('autoplay=1')) {
                const separator = currentSrc.includes('?') ? '&' : '?';
                iframe.src = currentSrc + separator + 'autoplay=1';
            }
        }
    }
</script>
@endsection
