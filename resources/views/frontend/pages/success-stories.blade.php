@extends('frontend.layouts.master')
@section('title', 'Home')
@section('content')
<section class="bg-brand-pink text-white py-12">
    <div class="container mx-auto px-6 text-center">
        <h2 class="text-5xl md:text-6xl font-extrabold mb-4">Finding Hope. Sharing Joy.</h2>
        <p class="text-xl max-w-3xl mx-auto opacity-90">These are the real stories of the families we've helped
            build. Let their journeys inspire your own step toward parenthood.</p>
    </div>
</section>
<section class="py-12 bg-gradient-to-b from-pink-50 via-white to-blue-50">
    <div class="container mx-auto px-6">
        <h3 class="text-4xl font-bold text-center text-gray-800 mb-10">Meet Our <span
                class="text-brand-pink">Families</span></h3>
        <div class="flex flex-col md:flex-row justify-center items-center gap-4 mb-6 p-4 max-w-4xl mx-auto">
            <div class="w-full md:w-auto"><label for="treatment-filter"
                    class="block text-sm font-medium text-gray-700 mb-1">Treatment Type:</label> <select
                    id="treatment-filter"
                    class="w-full md:w-56 p-2 border border-gray-300 rounded-md focus:ring-pink-500 focus:border-pink-500 appearance-none bg-white">
                    <option value="all">All Treatments</option>
                    <option value="ivf">Standard IVF</option>
                    <option value="donor-egg">Donor Egg</option>
                    <option value="iui">IUI</option>
                </select></div>
            <div class="w-full md:w-auto"><label for="length-filter"
                    class="block text-sm font-medium text-gray-700 mb-1">Journey Length:</label> <select
                    id="length-filter"
                    class="w-full md:w-56 p-2 border border-gray-300 rounded-md focus:ring-pink-500 focus:border-pink-500 appearance-none bg-white">
                    <option value="all">Any Length</option>
                    <option value="long">3+ Years Trying</option>
                    <option value="short">Under 1 Year</option>
                </select></div><button
                class="w-full md:w-auto mt-6 bg-brand-blue hover:bg-brand-pink text-white font-semibold py-2 px-4 rounded-md transition duration-150 shadow-md">Clear
                Filters</button>
        </div>
        <div class="grid grid-cols-2 lg:grid-cols-4 gap-6">
            <div class="col-span-1 row-span-2 lg:row-span-2 story-card bg-white rounded-xl shadow-lg overflow-hidden border border-pink-100"
                data-treatment="ivf" data-length="long"><img class="w-full h-80 object-cover"
                    src="https://as1.ftcdn.net/v2/jpg/06/06/46/54/1000_F_606465464_mdHsKSwNIPTDMhuPNyYitga564aZwpsa.jpg"
                    alt="Happy mother holding baby">
                <div class="p-4"><span
                        class="inline-block bg-teal-100 text-teal-800 text-xs font-semibold px-3 py-1 rounded-full uppercase mb-2">IVF
                        Success</span>
                    <h4 class="text-xl font-bold text-gray-900 mb-2">The Chen Family</h4>
                    <p class="text-gray-600 italic text-sm">"Our long journey ended with our beautiful girl, thanks
                        to your support."</p><a href="detail-page.html"
                        class="mt-3 inline-block text-pink-600 font-semibold hover:text-pink-800 text-sm">Read Full
                        Story →</a>
                </div>
            </div>
            <div class="col-span-1 story-card bg-white rounded-xl shadow-lg overflow-hidden border border-teal-100"
                data-treatment="donor-egg" data-length="medium"><img class="w-full h-36 object-cover"
                    src="https://t3.ftcdn.net/jpg/04/35/77/86/240_F_435778653_WveLoeSoimepG0vdKJ8NVUplOH75WZ4s.jpg"
                    alt="Smiling couple">
                <div class="p-4"><span
                        class="inline-block bg-pink-100 text-pink-800 text-xs font-semibold px-3 py-1 rounded-full uppercase mb-2">Donor
                        Egg</span>
                    <h4 class="text-lg font-bold text-gray-900 mb-1">The Rodriguez Family</h4><a
                        href="detail-page.html"
                        class="mt-2 inline-block text-pink-600 font-semibold hover:text-pink-800 text-sm">Read Full
                        Story →</a>
                </div>
            </div>
            <div class="col-span-2 lg:col-span-2 story-card bg-white rounded-xl shadow-lg flex border border-pink-100"
                data-treatment="ivf" data-length="short"><img class="w-1/3 h-auto object-cover"
                    src="https://t4.ftcdn.net/jpg/00/61/28/57/240_F_61285793_YneWEiSZUtk1UIvZP1lRMiV59aqHndSC.jpg"
                    alt="Twins sleeping">
                <div class="p-4 w-2/3"><span
                        class="inline-block bg-teal-100 text-teal-800 text-xs font-semibold px-3 py-1 rounded-full uppercase mb-2">Twins
                        Success!</span>
                    <h4 class="text-xl font-bold text-gray-900 mb-1">The Miller Couple</h4>
                    <p class="text-gray-600 italic text-sm">"We got double the blessing on our first try! We are
                        overjoyed."</p><a href="detail-page.html"
                        class="mt-3 inline-block text-pink-600 font-semibold hover:text-pink-800 text-sm">Read Full
                        Story →</a>
                </div>
            </div>
            <div class="col-span-1 story-card bg-white rounded-xl shadow-lg overflow-hidden border border-teal-100"
                data-treatment="iui" data-length="short"><img class="w-full h-36 object-cover"
                    src="https://t4.ftcdn.net/jpg/03/07/33/75/240_F_307337515_nBU1ab2sOfvtXse67AK3xViTYgY6hJ4K.jpg"
                    alt="Proud father and baby">
                <div class="p-4"><span
                        class="inline-block bg-pink-100 text-pink-800 text-xs font-semibold px-3 py-1 rounded-full uppercase mb-2">IUI
                        Success</span>
                    <h4 class="text-lg font-bold text-gray-900 mb-1">The Kim Family</h4><a href="detail-page.html"
                        class="mt-2 inline-block text-pink-600 font-semibold hover:text-pink-800 text-sm">Read Full
                        Story →</a>
                </div>
            </div>
            <div class="col-span-1 story-card bg-white rounded-xl shadow-lg overflow-hidden border border-teal-100"
                data-treatment="ivf" data-length="long"><img class="w-full h-36 object-cover"
                    src="https://t4.ftcdn.net/jpg/05/36/54/35/240_F_536543511_3luMFgbXSnES5V20WV4dY6K27IqyREJD.jpg"
                    alt="Family smiling outdoors">
                <div class="p-4"><span
                        class="inline-block bg-teal-100 text-teal-800 text-xs font-semibold px-3 py-1 rounded-full uppercase mb-2">Complex
                        IVF</span>
                    <h4 class="text-lg font-bold text-gray-900 mb-1">The Johnson Couple</h4><a
                        href="detail-page.html"
                        class="mt-2 inline-block text-pink-600 font-semibold hover:text-pink-800 text-sm">Read Full
                        Story →</a>
                </div>
            </div>
            <div class="col-span-1 row-span-1 lg:row-span-1 story-card bg-white rounded-xl shadow-lg overflow-hidden border border-pink-100"
                data-treatment="pgt" data-length="medium"><img class="w-full h-36 object-cover"
                    src="https://t4.ftcdn.net/jpg/04/22/68/99/240_F_422689965_oj3yJ38xfU6x3bpOtoCZpU31czzD3i0i.jpg"
                    alt="Close up of baby looking up">
                <div class="p-4"><span
                        class="inline-block bg-pink-100 text-pink-800 text-xs font-semibold px-3 py-1 rounded-full uppercase mb-2">PGT
                        Tested</span>
                    <h4 class="text-lg font-bold text-gray-900 mb-1">The Davis Couple</h4><a href="detail-page.html"
                        class="mt-2 inline-block text-pink-600 font-semibold hover:text-pink-800 text-sm">Read Full
                        Story →</a>
                </div>
            </div>
        </div>
        <div class="mt-12 text-center"><button
                class="bg-gray-200 hover:bg-gray-300 text-gray-800 font-bold py-3 px-8 rounded-full text-lg transition duration-300">Load
                More Stories</button></div>
    </div>
</section>
<section class="relative bg-white py-12 overflow-hidden">
    <div class="container mx-auto px-6 lg:px-16 relative z-10">
        <div class="text-center mb-8">
            <h2 class="text-4xl font-bold text-gray-800 mb-4 leading-tight"><span class="text-brand-pink">Real
                    Stories, Real Miracles</span></h2>
        </div>
        <div class="grid grid-cols-2 gap-6">
            <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-2xl transition duration-300"><img
                    src="https://media.istockphoto.com/id/1301595548/photo/female-doctor-stock-photo.jpg?b=1&amp;s=612x612&amp;w=0&amp;k=20&amp;c=WIQmfgE58OHntqYo9FmuQMfEplxajHu5P-Nw30gS7cs="
                    alt="Dr. John Doe" class="w-full h-64 object-cover">
                <div class="p-4 text-center">
                    <h3 class="text-xl font-semibold text-gray-800">John Doe</h3>
                </div>
            </div>
            <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-2xl transition duration-300"><img
                    src="https://media.istockphoto.com/id/1270790502/photo/medical-concept-of-indian-beautiful-female-doctor-with-note-book.jpg?b=1&amp;s=612x612&amp;w=0&amp;k=20&amp;c=JBkrfGirsQLvIrn_IF4OtnaxFmWLN4xLGhzftOlAEJg="
                    alt="Dr. Jane Smith" class="w-full h-64 object-cover">
                <div class="p-4 text-center">
                    <h3 class="text-xl font-semibold text-gray-800">Jane Smith</h3>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="relative py-12 bg-gradient-to-b from-pink-50 via-white to-blue-50 overflow-hidden">
    <div
        class="absolute -top-20 -left-20 w-80 h-80 bg-pink-200 rounded-full mix-blend-multiply blur-3xl opacity-20">
    </div>
    <div
        class="absolute bottom-0 right-0 w-96 h-96 bg-blue-200 rounded-full mix-blend-multiply blur-3xl opacity-20">
    </div>
    <div class="container mx-auto px-6 lg:px-12 relative z-10 text-center">
        <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">Every <span class="text-brand-pink">Fertility
                Challenge</span> Deserves the Right Care</h2>
        <p class="text-gray-600 max-w-2xl mx-auto mb-12">We combine empathy, expertise, and innovation to guide you
            toward parenthood — with care made just for you.</p>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-8 justify-items-center">
            <div
                class="relative group w-full max-w-xs p-[2px] bg-gradient-to-tr from-pink-200 to-blue-200 rounded-3xl transition-all duration-500 hover:shadow-lg">
                <div
                    class="bg-white rounded-3xl p-6 h-full flex flex-col items-center text-center relative overflow-hidden">
                    <div
                        class="absolute inset-0 rounded-3xl bg-gradient-to-tr from-pink-200/40 to-blue-200/40 opacity-0 group-hover:opacity-100 group-hover:animate-ping-slow">
                    </div>
                    <div class="relative z-10">
                        <div
                            class="w-14 h-14 rounded-full bg-gradient-to-tr from-pink-400 to-red-300 flex items-center justify-center mx-auto mb-4 text-2xl">
                            💗</div>
                        <h3 class="text-lg font-semibold text-gray-800 mb-2">IVF Treatments</h3>
                        <p class="text-gray-500 text-sm">Personalized IVF programs to help couples achieve their
                            dream of parenthood.</p>
                    </div>
                </div>
            </div>
            <div
                class="relative group w-full max-w-xs p-[2px] bg-gradient-to-tr from-blue-200 to-cyan-200 rounded-3xl transition-all duration-500 hover:shadow-lg">
                <div
                    class="bg-white rounded-3xl p-6 h-full flex flex-col items-center text-center relative overflow-hidden">
                    <div
                        class="absolute inset-0 rounded-3xl bg-gradient-to-tr from-blue-200/40 to-cyan-200/40 opacity-0 group-hover:opacity-100 group-hover:animate-ping-slow">
                    </div>
                    <div class="relative z-10">
                        <div
                            class="w-14 h-14 rounded-full bg-gradient-to-tr from-blue-400 to-cyan-300 flex items-center justify-center mx-auto mb-4 text-2xl">
                            🌈</div>
                        <h3 class="text-lg font-semibold text-gray-800 mb-2">IUI Procedures</h3>
                        <p class="text-gray-500 text-sm">Gentle IUI care for couples seeking a more natural
                            conception path.</p>
                    </div>
                </div>
            </div>
            <div
                class="relative group w-full max-w-xs p-[2px] bg-gradient-to-tr from-purple-200 to-pink-200 rounded-3xl transition-all duration-500 hover:shadow-lg">
                <div
                    class="bg-white rounded-3xl p-6 h-full flex flex-col items-center text-center relative overflow-hidden">
                    <div
                        class="absolute inset-0 rounded-3xl bg-gradient-to-tr from-purple-200/40 to-pink-200/40 opacity-0 group-hover:opacity-100 group-hover:animate-ping-slow">
                    </div>
                    <div class="relative z-10">
                        <div
                            class="w-14 h-14 rounded-full bg-gradient-to-tr from-purple-400 to-pink-300 flex items-center justify-center mx-auto mb-4 text-2xl">
                            🌸</div>
                        <h3 class="text-lg font-semibold text-gray-800 mb-2">Egg Freezing</h3>
                        <p class="text-gray-500 text-sm">Preserve your fertility with leading-edge freezing and
                            storage facilities.</p>
                    </div>
                </div>
            </div>
            <div
                class="relative group w-full max-w-xs p-[2px] bg-gradient-to-tr from-green-200 to-lime-200 rounded-3xl transition-all duration-500 hover:shadow-lg">
                <div
                    class="bg-white rounded-3xl p-6 h-full flex flex-col items-center text-center relative overflow-hidden">
                    <div
                        class="absolute inset-0 rounded-3xl bg-gradient-to-tr from-green-200/40 to-lime-200/40 opacity-0 group-hover:opacity-100 group-hover:animate-ping-slow">
                    </div>
                    <div class="relative z-10">
                        <div
                            class="w-14 h-14 rounded-full bg-gradient-to-tr from-green-400 to-lime-300 flex items-center justify-center mx-auto mb-4 text-2xl">
                            👶</div>
                        <h3 class="text-lg font-semibold text-gray-800 mb-2">Male Infertility</h3>
                        <p class="text-gray-500 text-sm">Comprehensive male fertility diagnosis and modern treatment
                            options.</p>
                    </div>
                </div>
            </div>
            <div
                class="relative group w-full max-w-xs p-[2px] bg-gradient-to-tr from-orange-200 to-yellow-200 rounded-3xl transition-all duration-500 hover:shadow-lg">
                <div
                    class="bg-white rounded-3xl p-6 h-full flex flex-col items-center text-center relative overflow-hidden">
                    <div
                        class="absolute inset-0 rounded-3xl bg-gradient-to-tr from-orange-200/40 to-yellow-200/40 opacity-0 group-hover:opacity-100 group-hover:animate-ping-slow">
                    </div>
                    <div class="relative z-10">
                        <div
                            class="w-14 h-14 rounded-full bg-gradient-to-tr from-orange-400 to-yellow-300 flex items-center justify-center mx-auto mb-4 text-2xl">
                            🌿</div>
                        <h3 class="text-lg font-semibold text-gray-800 mb-2">PCOS Management</h3>
                        <p class="text-gray-500 text-sm">End-to-end PCOS fertility care with hormonal balance and
                            wellness focus.</p>
                    </div>
                </div>
            </div>
            <div
                class="relative group w-full max-w-xs p-[2px] bg-gradient-to-tr from-red-200 to-pink-200 rounded-3xl transition-all duration-500 hover:shadow-lg">
                <div
                    class="bg-white rounded-3xl p-6 h-full flex flex-col items-center text-center relative overflow-hidden">
                    <div
                        class="absolute inset-0 rounded-3xl bg-gradient-to-tr from-red-200/40 to-pink-200/40 opacity-0 group-hover:opacity-100 group-hover:animate-ping-slow">
                    </div>
                    <div class="relative z-10">
                        <div
                            class="w-14 h-14 rounded-full bg-gradient-to-tr from-red-400 to-pink-300 flex items-center justify-center mx-auto mb-4 text-2xl">
                            🧬</div>
                        <h3 class="text-lg font-semibold text-gray-800 mb-2">Genetic Testing</h3>
                        <p class="text-gray-500 text-sm">Identify and overcome genetic barriers with advanced
                            fertility screening.</p>
                    </div>
                </div>
            </div>
            <div
                class="relative group w-full max-w-xs p-[2px] bg-gradient-to-tr from-teal-200 to-emerald-200 rounded-3xl transition-all duration-500 hover:shadow-lg">
                <div
                    class="bg-white rounded-3xl p-6 h-full flex flex-col items-center text-center relative overflow-hidden">
                    <div
                        class="absolute inset-0 rounded-3xl bg-gradient-to-tr from-teal-200/40 to-emerald-200/40 opacity-0 group-hover:opacity-100 group-hover:animate-ping-slow">
                    </div>
                    <div class="relative z-10">
                        <div
                            class="w-14 h-14 rounded-full bg-gradient-to-tr from-teal-400 to-emerald-300 flex items-center justify-center mx-auto mb-4 text-2xl">
                            💫</div>
                        <h3 class="text-lg font-semibold text-gray-800 mb-2">Laparoscopy</h3>
                        <p class="text-gray-500 text-sm">Minimally invasive solutions for diagnosing and treating
                            fertility issues.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="bg-brand-blue text-white py-12 text-center">
    <div class="container mx-auto px-6">
        <h4 class="text-3xl font-bold mb-3">Ready to Write Your Story?</h4>
        <p class="text-lg mb-6 opacity-90">Let our team guide you through every milestone.</p><a href="#"
            class="bg-pink-500 hover:bg-pink-600 text-white font-bold py-3 px-8 rounded-full text-lg shadow-xl transition duration-300 transform hover:scale-105">Book
            Your First Appointment</a>
    </div>
</section>
@endsection
