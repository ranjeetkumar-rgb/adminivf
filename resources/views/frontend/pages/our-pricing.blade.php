@extends('frontend.layouts.master')
@section('title', 'Home')
@section('content')
    <section class="bg-gradient-to-br from-[#20417e] via-[#2f4c8a] to-[#778aaf] text-white overflow-hidden py-12">
        <div class="container mx-auto px-6 lg:px-20 text-center">
            <h1 class="text-4xl md:text-5xl font-extrabold leading-tight mb-6">Our Pricing</h1>
            <p class="text-lg max-w-3xl mx-auto mb-8">Clear, transparent pricing designed to support your fertility
                journey with flexibility and trust.</p><a href="#book"
                class="bg-brand-pink text-white font-semibold py-3 px-10 rounded-full hover:shadow-lg">Book Your
                Assessment</a>
        </div>
    </section>
    <section class="py-12 bg-gradient-to-b from-pink-50 via-white to-blue-50">
        <div class="container mx-auto px-6 md:px-0">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 text-center mb-4">Our Commitment to <span
                    class="text-brand-pink">Transparent Pricing</span></h2>
            <p class="text-gray-600 max-w-2xl mx-auto text-center mb-6 md:mb-10 text-lg">Transparency isn't optional —
                it’s our promise. You will always know what you're paying for and why.</p>
            <div
                class="flex flex-nowrap overflow-x-auto snap-x snap-mandatory sm:grid sm:grid-cols-5 sm:overflow-visible gap-6 scrollbar-hide pb-4">
                <div class="min-w-[240px] bg-white rounded-3xl shadow-lg hover:shadow-2xl transition p-5 text-center">
                    <div
                        class="w-20 h-20 mx-auto mb-6 rounded-full bg-pink-100 flex items-center justify-center shadow-lg">
                        <i class="fa-solid fa-file-invoice-dollar text-pink-600 text-3xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-800 mb-3">Upfront Cost Breakdown</h3>
                    <p class="text-gray-600 text-sm leading-relaxed">Every component of the treatment is clearly shared
                        before starting — no mid-treatment price surprises.</p>
                </div>
                <div class="min-w-[240px] bg-white rounded-3xl shadow-lg hover:shadow-2xl transition p-5 text-center">
                    <div
                        class="w-20 h-20 mx-auto mb-6 rounded-full bg-blue-100 flex items-center justify-center shadow-lg">
                        <i class="fa-solid fa-shield-heart text-blue-600 text-3xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-800 mb-3">No Hidden Add-Ons</h3>
                    <p class="text-gray-600 text-sm leading-relaxed">Pricing includes medications, scans, embryology
                        &amp; procedures — nothing added without consent.</p>
                </div>
                <div class="min-w-[240px] bg-white rounded-3xl shadow-lg hover:shadow-2xl transition p-5 text-center">
                    <div
                        class="w-20 h-20 mx-auto mb-6 rounded-full bg-green-100 flex items-center justify-center shadow-lg">
                        <i class="fa-solid fa-hand-holding-medical text-green-600 text-3xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-800 mb-3">Tailored Financial Plans</h3>
                    <p class="text-gray-600 text-sm leading-relaxed">Every couple receives a personalised pricing sheet
                        designed around their medical needs &amp; roadmap.</p>
                </div>
                <div class="min-w-[240px] bg-white rounded-3xl shadow-lg hover:shadow-2xl transition p-5 text-center">
                    <div
                        class="w-20 h-20 mx-auto mb-6 rounded-full bg-yellow-100 flex items-center justify-center shadow-lg">
                        <i class="fa-solid fa-credit-card text-yellow-600 text-3xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-800 mb-3">Flexible EMI &amp; Protection Plans</h3>
                    <p class="text-gray-600 text-sm leading-relaxed">Affordable EMI options and IVF protection plans
                        ensure peace of mind throughout treatment.</p>
                </div>
                <div class="min-w-[240px] bg-white rounded-3xl shadow-lg hover:shadow-2xl transition p-5 text-center">
                    <div
                        class="w-20 h-20 mx-auto mb-6 rounded-full bg-red-100 flex items-center justify-center shadow-lg">
                        <i class="fa-solid fa-scale-balanced text-red-600 text-3xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-800 mb-3">Ethical Treatment Guidance</h3>
                    <p class="text-gray-600 text-sm leading-relaxed">We recommend only what is medically necessary — no
                        upselling, no unnecessary procedures.</p>
                </div>
            </div>
        </div>
    </section>
    <section class="py-12 bg-white">
        <div class="container mx-auto px-6 lg:px-20">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 text-center mb-6">Fertility Treatment Packages &amp;
                Cost</h2>
            <p class="text-gray-600 text-center max-w-2xl mx-auto mb-6 md:mb-10 text-lg">Transparent, inclusive pricing
                designed to support your parenthood journey with clarity and confidence.</p>
            <div class="overflow-x-auto">
                <table class="w-full bg-white rounded-3xl shadow-xl border overflow-hidden">
                    <thead class="bg-gray-50 text-gray-700 text-sm font-semibold">
                        <tr>
                            <th class="py-4 px-6 text-left">Treatment Package</th>
                            <th class="py-4 px-6 text-left">Inclusions</th>
                            <th class="py-4 px-6 text-left">Estimated Cost</th>
                        </tr>
                    </thead>
                    <tbody class="text-gray-700 text-sm">
                        <tr class="border-t">
                            <td class="py-5 px-6 font-medium text-gray-900">Standard IVF Cycle</td>
                            <td class="py-5 px-6">Consultation, Ovarian Stimulation, Egg Retrieval, Embryo Transfer</td>
                            <td class="py-5 px-6 font-semibold text-pink-600">₹1,10,000 – ₹1,50,000</td>
                        </tr>
                        <tr class="border-t">
                            <td class="py-5 px-6 font-medium text-gray-900">Advanced IVF Cycle</td>
                            <td class="py-5 px-6">IVF + ICSI + Blastocyst Transfer</td>
                            <td class="py-5 px-6 font-semibold text-pink-600">₹1,50,000 – ₹2,00,000</td>
                        </tr>
                        <tr class="border-t">
                            <td class="py-5 px-6 font-medium text-gray-900">IVF with Donor Eggs</td>
                            <td class="py-5 px-6">Includes Donor Screening &amp; Medications</td>
                            <td class="py-5 px-6 font-semibold text-pink-600">₹2,00,000 – ₹2,50,000</td>
                        </tr>
                        <tr class="border-t">
                            <td class="py-5 px-6 font-medium text-gray-900">IVF with Frozen Embryo Transfer (FET)</td>
                            <td class="py-5 px-6">Frozen Embryo Thawing &amp; Transfer</td>
                            <td class="py-5 px-6 font-semibold text-pink-600">₹1,20,000 – ₹1,80,000</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="text-center mt-10"><a href="#"
                    class="px-6 md:px-12 py-4 bg-brand-blue hover:bg-brand-pink text-white rounded-full shadow-xl text-lg font-semibold transition">Get
                    Detailed Cost Breakdown</a></div>
        </div>
    </section>
    <section class="py-12 bg-gradient-to-b from-pink-50 via-white to-blue-50">
        <div class="container mx-auto px-6 lg:px-20">
            <h2 class="text-3xl md:text-4xl font-extrabold text-gray-900 text-center mb-6">Cost Comparison with Other
                IVF Centers</h2>
            <p class="text-gray-600 text-center max-w-2xl mx-auto text-lg mb-6 md:mb-10">Prices for IVF vary widely
                across India. At India IVF, we ensure world-class treatment at fair and transparent pricing — without
                compromising clinical success rates.</p>
            <div class="overflow-x-auto">
                <table class="w-full bg-white rounded-3xl shadow-xl border overflow-hidden text-left">
                    <thead class="bg-gray-50 text-gray-700 text-sm font-semibold">
                        <tr>
                            <th class="py-4 px-6">Criteria</th>
                            <th class="py-4 px-6">India IVF</th>
                            <th class="py-4 px-6">Other IVF Centers</th>
                        </tr>
                    </thead>
                    <tbody class="text-gray-700 text-sm">
                        <tr class="border-t">
                            <td class="py-5 px-6 font-medium text-gray-900">Cost per IVF Cycle</td>
                            <td class="py-5 px-6 font-semibold text-green-700">₹1,10,000 – ₹1,95,000</td>
                            <td class="py-5 px-6 font-semibold text-red-600">₹1,70,000 – ₹3,50,000</td>
                        </tr>
                        <tr class="border-t">
                            <td class="py-5 px-6 font-medium text-gray-900">Hidden Charges / Add-Ons</td>
                            <td class="py-5 px-6 text-green-700 font-semibold">❌ None – All Inclusive</td>
                            <td class="py-5 px-6 text-red-600 font-semibold">⚠ Common — Add-Ons After Cycle Starts</td>
                        </tr>
                        <tr class="border-t">
                            <td class="py-5 px-6 font-medium text-gray-900">Embryology Lab Charges</td>
                            <td class="py-5 px-6 text-green-700 font-semibold">✔ Included</td>
                            <td class="py-5 px-6 text-red-600 font-semibold">❌ Often Charged Separately</td>
                        </tr>
                        <tr class="border-t">
                            <td class="py-5 px-6 font-medium text-gray-900">Success Rate (Avg.)</td>
                            <td class="py-5 px-6 font-semibold text-green-700">46% – 62%</td>
                            <td class="py-5 px-6 font-semibold text-gray-500">32% – 45%</td>
                        </tr>
                        <tr class="border-t">
                            <td class="py-5 px-6 font-medium text-gray-900">Experience of Consultants</td>
                            <td class="py-5 px-6 text-green-700 font-semibold">15+ Years</td>
                            <td class="py-5 px-6 text-gray-500 font-semibold">3 – 10 Years</td>
                        </tr>
                        <tr class="border-t">
                            <td class="py-5 px-6 font-medium text-gray-900">Money-Back / Protection Plan</td>
                            <td class="py-5 px-6 text-green-700 font-semibold">✔ Available</td>
                            <td class="py-5 px-6 text-gray-500 font-semibold">❌ Rarely Offered</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="text-center mt-6 md:mt-10">
                <p class="text-gray-800 text-lg font-medium max-w-3xl mx-auto mb-6 md:mb-10">Better success rate. Lower
                    cost. Zero hidden charges — that's the India IVF promise.</p><a href="#pricing"
                    class="px-2 md:px-12 py-4 bg-brand-blue hover:bg-brand-pink text-white rounded-full shadow-xl text-lg font-semibold transition">View
                    Complete Pricing &amp; EMI Options</a>
            </div>
        </div>
    </section>
    <section class="py-12 bg-white">
        <div class="container mx-auto px-6 lg:px-20">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-800 text-center mb-12">IVF Cost Comparison — Real
                Savings Over Time</h2>
            <div class="max-w-5xl mx-auto space-y-10">
                <div class="flex flex-col md:flex-row items-center gap-10">
                    <div class="w-full md:w-1/2">
                        <h3 class="text-2xl font-semibold text-gray-900 mb-2">IVF With Early Assessment</h3>
                        <p class="text-gray-600 text-lg">Early diagnosis reduces repeated failed attempts and shortens
                            time to pregnancy.</p>
                    </div>
                    <div class="w-full md:w-1/2">
                        <div class="bg-green-50 border border-green-300 p-6 rounded-2xl text-center shadow">
                            <p class="text-4xl font-extrabold text-green-600">₹1.2–2.5 Lakhs</p>
                            <p class="text-gray-700 font-medium mt-1">(Avg. total cost to conception)</p>
                        </div>
                    </div>
                </div>
                <div class="flex flex-col md:flex-row items-center gap-10 md:flex-row-reverse">
                    <div class="w-full md:w-1/2">
                        <h3 class="text-2xl font-semibold text-gray-900 mb-2">IVF After Delayed Treatment</h3>
                        <p class="text-gray-600 text-lg">Late testing often leads to multiple failed IUI cycles,
                            repeated IVF cycles and emotional burnout.</p>
                    </div>
                    <div class="w-full md:w-1/2">
                        <div class="bg-red-50 border border-red-300 p-6 rounded-2xl text-center shadow">
                            <p class="text-4xl font-extrabold text-red-500">₹3.5–7.8 Lakhs</p>
                            <p class="text-gray-700 font-medium mt-1">(Avg. cost when treatment begins late)</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center mt-14">
                <p class="text-gray-700 text-lg font-medium max-w-3xl mx-auto">The earlier fertility issues are tested
                    and treated, the fewer cycles are required — which dramatically reduces total cost and stress.</p>
            </div>
        </div>
    </section>
    <section class="py-12 bg-gradient-to-b from-pink-50 via-white to-blue-50">
        <div class="container mx-auto px-6 lg:px-20">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-800 text-center mb-6">IVF Treatment Cost at India IVF
            </h2>
            <p class="text-gray-600 text-center max-w-2xl mx-auto text-lg mb-6 md:mb-10">India IVF offers transparent
                and affordable IVF plans designed to give every couple the highest probability of conception with
                world-class care.</p>
            <div class="overflow-x-auto pb-4 md:overflow-visible">
                <div class="flex gap-6 md:grid md:grid-cols-3 md:gap-8">
                    <div
                        class="min-w-[300px] bg-white p-10 rounded-3xl shadow-lg hover:-translate-y-2 hover:shadow-2xl transition">
                        <h3 class="text-xl font-bold text-gray-800 mb-3">Standard IVF</h3>
                        <p class="text-gray-600 text-sm mb-6">Ideal for first IVF attempt with complete stimulation
                            &amp; embryo transfer.</p>
                        <p class="text-3xl font-extrabold text-gray-900 mb-6">₹89,000 – ₹1,45,000</p>
                        <ul class="space-y-2 text-gray-700 text-sm mb-8">
                            <li>✔ Ovarian stimulation &amp; monitoring</li>
                            <li>✔ Egg retrieval &amp; fertilization</li>
                            <li>✔ Single fresh embryo transfer</li>
                        </ul>
                    </div>
                    <div
                        class="min-w-[300px] bg-white p-10 rounded-3xl shadow-lg hover:-translate-y-2 hover:shadow-2xl transition border-2 border-pink-500 relative">
                        <span class="absolute top-4 right-6 bg-pink-600 text-white text-xs px-3 py-1 rounded-full">Most
                            Chosen</span>
                        <h3 class="text-xl font-bold text-gray-800 mb-3">IVF with ICSI</h3>
                        <p class="text-gray-600 text-sm mb-6">Advanced IVF for improved fertilization &amp; success
                            rate.</p>
                        <p class="text-3xl font-extrabold text-gray-900 mb-6">₹1,25,000 – ₹1,95,000</p>
                        <ul class="space-y-2 text-gray-700 text-sm mb-8">
                            <li>✔ Standard IVF inclusions</li>
                            <li>✔ ICSI for high-precision fertilization</li>
                            <li>✔ Embryo culture &amp; quality grading</li>
                        </ul>
                    </div>
                    <div
                        class="min-w-[300px] bg-white p-10 rounded-3xl shadow-lg hover:-translate-y-2 hover:shadow-2xl transition">
                        <h3 class="text-xl font-bold text-gray-800 mb-3">IVF Advanced</h3>
                        <p class="text-gray-600 text-sm mb-6">For medically complex fertility cases with extra testing.
                        </p>
                        <p class="text-3xl font-extrabold text-gray-900 mb-6">₹1,85,000 – ₹2,75,000</p>
                        <ul class="space-y-2 text-gray-700 text-sm mb-8">
                            <li>✔ PGT-A / ERA / genetic screening</li>
                            <li>✔ Extended embryo monitoring</li>
                            <li>✔ Personalized treatment plan</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="text-center mt-14"><a href="#"
                    class="px-12 py-4 bg-brand-blue hover:bg-brand-pink text-white rounded-full font-semibold shadow-xl text-lg transition">Talk
                    to a Fertility Expert</a></div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer=""></script>
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
                class="flex flex-nowrap overflow-x-auto snap-x snap-mandatory md:grid md:grid-cols-3 md:overflow-visible gap-10 scrollbar-hide">
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
        <div class="text-center mt-6 md:mt-10"><button
                class="bg-brand-pink hover:bg-brand-blue text-white px-10 py-3 rounded-full font-semibold text-lg shadow-lg hover:shadow-2xl transition-all duration-500 hover:scale-105">Explore
                Articles</button></div>
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
