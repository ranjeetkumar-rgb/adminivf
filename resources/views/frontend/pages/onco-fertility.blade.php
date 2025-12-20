@extends('frontend.layouts.master')
@section('title', 'Home')
@section('content')
    <section id="hero-section"
        class="relative bg-gradient-to-br from-[#20417e] via-[#2f4c8a] to-[#778aaf] text-white overflow-hidden py-12">
        <div
            class="container mx-auto px-6 lg:px-12 grid-cols-1 lg:grid-cols-2 gap-8 md:gap-12 items-center relative z-10 flex flex-col-reverse md:grid">
            <div class="space-y-6 animate-fadeInUp text-center lg:text-left">
                <h1 class="text-4xl md:text-5xl font-extrabold leading-tight">Preserve Your <span
                        class="text-pink-200">Fertility</span>,<br class="hidden md:block">Preserve Your <span
                        class="text-pink-200">Future</span><br class="hidden md:block"></h1>
                <p class="text-lg md:text-xl text-blue-100 leading-relaxed">Egg Freezing at India IVF helps you plan
                    motherhood on your timeline, using advanced cryopreservation technology for safe, long-term storage.
                </p><button
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
    <section id="overview" class="py-12 bg-gradient-to-b from-pink-50 via-white to-blue-50">
        <div class="max-w-6xl mx-auto px-6 md:px-12">
            <div class="grid md:grid-cols-3 gap-10">
                <div class="md:col-span-2">
                    <h2 class="text-2xl md:text-3xl font-bold text-gray-900 mb-4">What is <span
                            class="text-brand-pink">Onco-Fertility?</span></h2>
                    <p class="text-gray-700 text-sm md:text-base leading-relaxed mb-4">Egg freezing is a process where
                        mature eggs are collected from the ovaries, frozen using a rapid cooling method (vitrification),
                        and stored in liquid nitrogen. These eggs can be thawed later, fertilized with sperm, and
                        transferred to the uterus as embryos through in vitro fertilization (IVF).</p>
                    <p class="text-gray-700 text-sm md:text-base leading-relaxed">The main goal is to preserve your
                        current fertility potential, especially if you’re not ready for pregnancy now but want to keep
                        the possibility open for the future.</p>
                </div>
                <div class="bg-white rounded-2xl shadow p-5 border border-gray-100">
                    <h3 class="text-lg font-semibold mb-3">Key Benefits</h3>
                    <ul class="space-y-2 text-sm text-gray-700">
                        <li>• Flexibility to plan pregnancy later</li>
                        <li>• Protection before chemotherapy or radiation</li>
                        <li>• Use younger, healthier eggs in the future</li>
                        <li>• Reduces time pressure related to age</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section id="why-egg-freezing" class="py-12 bg-white">
        <div class="max-w-6xl mx-auto px-6 lg:px-12">
            <div class="flex md:grid md:grid-cols-3 gap-10 overflow-x-auto snap-x snap-mandatory scrollbar-hide">
                <div
                    class="min-w-[280px] md:min-w-0 bg-white rounded-2xl border border-gray-200 overflow-hidden snap-start transition hover:-translate-y-1 duration-300">
                    <div class="h-56 w-full overflow-hidden"><img
                            src="https://www.indiaivf.in/wp-content/uploads/2024/12/Why-Egg-Freezing-is-Important-for-Women.webp"
                            alt="Why Egg Freezing Matters" class="h-full w-full object-cover"></div>
                    <div class="p-4">
                        <h3 class="font-semibold text-lg text-gray-900 mb-3">Why Egg Freezing is Important for Women
                        </h3>
                        <p class="text-sm text-gray-600 leading-relaxed">Egg quality naturally declines with age.
                            Freezing younger, healthier eggs helps preserve fertility and gives women more control over
                            their reproductive future, reducing pressure and uncertainty.</p>
                    </div>
                </div>
                <div
                    class="min-w-[280px] md:min-w-0 bg-white rounded-2xl border border-gray-200 overflow-hidden snap-start transition hover:-translate-y-1 duration-300">
                    <div class="h-56 w-full overflow-hidden"><img
                            src="https://www.indiaivf.in/wp-content/uploads/2024/12/Who-is-a-Good-Candidate-for-Egg-Freezing.webp"
                            alt="Who Is a Good Candidate" class="h-full w-full object-cover"></div>
                    <div class="p-4">
                        <h3 class="font-semibold text-lg text-gray-900 mb-3">Who is a Good Candidate for Egg Freezing?
                        </h3>
                        <p class="text-sm text-gray-600 leading-relaxed">Ideal for women who want to delay pregnancy,
                            plan future family goals, face medical treatments like chemotherapy, or have concerns about
                            ovarian reserve or early menopause.</p>
                    </div>
                </div>
                <div
                    class="min-w-[280px] md:min-w-0 bg-white rounded-2xl border border-gray-200 overflow-hidden snap-start transition hover:-translate-y-1 duration-300">
                    <div class="h-56 w-full overflow-hidden"><img
                            src="https://www.indiaivf.in/wp-content/uploads/2024/12/How-Egg-Freezing-Works.webp"
                            alt="How Egg Freezing Works" class="h-full w-full object-cover"></div>
                    <div class="p-4">
                        <h3 class="font-semibold text-lg text-gray-900 mb-3">How Egg Freezing Works</h3>
                        <p class="text-sm text-gray-600 leading-relaxed">The process involves hormone stimulation, egg
                            retrieval under sedation, and rapid freezing (vitrification) for long-term storage. Eggs can
                            later be thawed, fertilized, and used for IVF.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="who" class="py-12 bg-gradient-to-b from-pink-50 via-white to-blue-50">
        <div class="mx-auto px-6 lg:px-12">
            <div class="text-center mb-6 md:mb-10">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-800">Why Fertility Preservation Matters Before <span
                        class="text-brand-pink">Cancer Treatment?</span></h2>
            </div>
            <div class="flex md:grid md:grid-cols-3 gap-6 overflow-x-auto snap-x snap-mandatory scrollbar-hide">
                <div
                    class="min-w-[280px] md:min-w-0 bg-gradient-to-r from-blue-100 to-blue-50 rounded-2xl border border-gray-100 p-4">
                    <h3 class="font-semibold text-gray-900 mb-2">Delaying Pregnancy</h3>
                    <p class="text-sm text-gray-700">If you’re focusing on career, education, or aren’t ready for a
                        child yet but want biological options later.</p>
                </div>
                <div
                    class="min-w-[280px] md:min-w-0 bg-gradient-to-r from-blue-100 to-blue-50 rounded-2xl border border-gray-100 p-4">
                    <h3 class="font-semibold text-gray-900 mb-2">Cancer or Medical Treatment</h3>
                    <p class="text-sm text-gray-700">Before chemotherapy, radiation, or surgeries that may affect
                        fertility.</p>
                </div>
                <div
                    class="min-w-[280px] md:min-w-0 bg-gradient-to-r from-blue-100 to-blue-50 rounded-2xl border border-gray-100 p-4">
                    <h3 class="font-semibold text-gray-900 mb-2">Low Ovarian Reserve</h3>
                    <p class="text-sm text-gray-700">If blood tests or family history suggest early menopause or reduced
                        egg count/quality.</p>
                </div>
                <div
                    class="min-w-[280px] md:min-w-0 bg-gradient-to-r from-blue-100 to-blue-50 rounded-2xl border border-gray-100 p-4">
                    <h3 class="font-semibold text-gray-900 mb-2">Before Gender Transition</h3>
                    <p class="text-sm text-gray-700">For trans individuals who may want biological children after
                        hormone therapy or surgery.</p>
                </div>
                <div
                    class="min-w-[280px] md:min-w-0 bg-gradient-to-r from-blue-100 to-blue-50 rounded-2xl border border-gray-100 p-4">
                    <h3 class="font-semibold text-gray-900 mb-2">Uncertain Relationship Plans</h3>
                    <p class="text-sm text-gray-700">If you haven’t found the right partner yet but want to keep
                        fertility options open.</p>
                </div>
                <div
                    class="min-w-[280px] md:min-w-0 bg-gradient-to-r from-blue-100 to-blue-50 rounded-2xl border border-gray-100 p-4">
                    <h3 class="font-semibold text-gray-900 mb-2">Personal Choice</h3>
                    <p class="text-sm text-gray-700">You simply prefer having more control and time to decide about
                        parenthood.</p>
                </div>
            </div>
        </div>
    </section>
    <section id="journey" class="py-12 bg-white">
        <div class="max-w-7xl mx-auto px-6 lg:px-12">
            <h2 class="text-3xl md:text-4xl font-bold text-center text-gray-900 mb-6 md:mb-10"><span
                    class="text-brand-pink">Onco-Fertility Process</span> at India IVF</h2>
            <div
                class="flex md:grid md:grid-cols-5 gap-6 md:gap-10 overflow-x-auto snap-x snap-mandatory scrollbar-hide text-center">
                <div class="min-w-[200px] md:min-w-0 flex flex-col items-center space-y-4">
                    <div
                        class="mx-auto h-16 w-16 rounded-full bg-white border-2 border-primary shadow-md flex items-center justify-center group-hover:scale-110 transition transform">
                        <span class="font-bold text-indigo-600 text-3xl">1</span>
                    </div>
                    <h3 class="text-lg font-semibold text-gray-900">Initial Consultation</h3>
                    <p class="text-sm text-gray-600 leading-relaxed max-w-[220px]">Fertility tests &amp; ultrasound to
                        evaluate ovarian reserve and treatment planning.</p>
                </div>
                <div class="min-w-[200px] md:min-w-0 flex flex-col items-center space-y-4">
                    <div
                        class="mx-auto h-16 w-16 rounded-full bg-white border-2 border-primary shadow-md flex items-center justify-center group-hover:scale-110 transition transform">
                        <span class="font-bold text-indigo-600 text-3xl">2</span>
                    </div>
                    <h3 class="text-lg font-semibold text-gray-900">Ovarian Stimulation</h3>
                    <p class="text-sm text-gray-600 leading-relaxed max-w-[220px]">Hormone injections &amp; monitoring
                        visits to encourage multiple egg growth.</p>
                </div>
                <div class="min-w-[200px] md:min-w-0 flex flex-col items-center space-y-4">
                    <div
                        class="mx-auto h-16 w-16 rounded-full bg-white border-2 border-primary shadow-md flex items-center justify-center group-hover:scale-110 transition transform">
                        <span class="font-bold text-indigo-600 text-3xl">3</span>
                    </div>
                    <h3 class="text-lg font-semibold text-gray-900">Egg Retrieval</h3>
                    <p class="text-sm text-gray-600 leading-relaxed max-w-[220px]">15–20 minute procedure under mild
                        sedation to collect mature eggs.</p>
                </div>
                <div class="min-w-[200px] md:min-w-0 flex flex-col items-center space-y-4">
                    <div
                        class="mx-auto h-16 w-16 rounded-full bg-white border-2 border-primary shadow-md flex items-center justify-center group-hover:scale-110 transition transform">
                        <span class="font-bold text-indigo-600 text-3xl">4</span>
                    </div>
                    <h3 class="text-lg font-semibold text-gray-900">Freezing &amp; Storage</h3>
                    <p class="text-sm text-gray-600 leading-relaxed max-w-[220px]">Vitrification technique to preserve
                        egg quality at -196°C for long-term stability.</p>
                </div>
                <div class="min-w-[200px] md:min-w-0 flex flex-col items-center space-y-4">
                    <div
                        class="mx-auto h-16 w-16 rounded-full bg-white border-2 border-primary shadow-md flex items-center justify-center group-hover:scale-110 transition transform">
                        <span class="font-bold text-indigo-600 text-3xl">5</span>
                    </div>
                    <h3 class="text-lg font-semibold text-gray-900">Thawing &amp; Fertilization</h3>
                    <p class="text-sm text-gray-600 leading-relaxed max-w-[220px]">Eggs thawed, fertilized through
                        IVF/ICSI &amp; embryos transferred when ready.</p>
                </div>
            </div>
        </div>
    </section>
    <section id="why-india-ivf" class="py-12 bg-gradient-to-b from-pink-50 via-white to-blue-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-3xl md:text-4xl font-bold text-center text-gray-900 mb-6 md:mb-10">Why Choose <span
                    class="text-brand-pink">India IVF</span> for Onco-Fertility</h2>
            <div class="flex md:grid md:grid-cols-3 gap-6 overflow-x-auto snap-x snap-mandatory scrollbar-hide">
                <div class="min-w-[280px] md:min-w-0 flex flex-col items-center text-center space-y-3"><img
                        src="https://images.unsplash.com/photo-1580281657527-47d4d60f0a5a?w=1000"
                        class="h-36 w-full object-cover rounded-xl shadow-md" alt="Lab Technology">
                    <h3 class="font-semibold text-lg text-gray-900">Advanced IVF Labs</h3>
                    <p class="text-sm text-gray-600 leading-relaxed">Latest vitrification technology ensuring high egg
                        survival rates.</p>
                </div>
                <div class="min-w-[280px] md:min-w-0 flex flex-col items-center text-center space-y-3"><img
                        src="https://images.unsplash.com/photo-1584515933487-779824d29309?w=1000"
                        class="h-36 w-full object-cover rounded-xl shadow-md" alt="Specialists">
                    <h3 class="font-semibold text-lg text-gray-900">Experienced Specialists</h3>
                    <p class="text-sm text-gray-600 leading-relaxed">Skilled reproductive experts with strong success
                        records.</p>
                </div>
                <div class="min-w-[280px] md:min-w-0 flex flex-col items-center text-center space-y-3"><img
                        src="https://images.unsplash.com/photo-1604881991720-f91add269bed?w=1000"
                        class="h-36 w-full object-cover rounded-xl shadow-md" alt="Care Plans">
                    <h3 class="font-semibold text-lg text-gray-900">Personalized Care</h3>
                    <p class="text-sm text-gray-600 leading-relaxed">Customized plans based on age, hormones &amp;
                        medical history.</p>
                </div>
                <div class="min-w-[280px] md:min-w-0 flex flex-col items-center text-center space-y-3"><img
                        src="https://images.unsplash.com/photo-1581092795360-664cf7f9a0dd?w=1000"
                        class="h-36 w-full object-cover rounded-xl shadow-md" alt="Pricing">
                    <h3 class="font-semibold text-lg text-gray-900">Transparent Pricing</h3>
                    <p class="text-sm text-gray-600 leading-relaxed">Clear and honest pricing with no hidden charges.
                    </p>
                </div>
                <div class="min-w-[280px] md:min-w-0 flex flex-col items-center text-center space-y-3"><img
                        src="https://images.unsplash.com/photo-1576765974102-b7560261e8ef?w=1000"
                        class="h-36 w-full object-cover rounded-xl shadow-md" alt="Patient Experience">
                    <h3 class="font-semibold text-lg text-gray-900">Comfort &amp; Safety</h3>
                    <p class="text-sm text-gray-600 leading-relaxed">Supportive environment &amp; seamless treatment
                        experience.</p>
                </div>
            </div>
            <div class="text-center mt-6 md:mt-10"><button
                    class="bg-brand-pink text-white px-6 py-3 rounded-full shadow-lg hover:shadow-2xl transition-all duration-500 hover:scale-105 mb-2"><i
                        class="fa-solid fa-hand-holding-heart mr-2"></i> Book Your Consultation</button></div>
        </div>
    </section>
    <section id="legal-support" class="py-12 bg-white">
        <div class="max-w-7xl mx-auto px-6 lg:px-12">
            <h2 class="text-3xl md:text-4xl font-bold text-center text-gray-900 mb-6 md:mb-10"><span
                    class="text-brand-pink">Legal Support</span> Services</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-10 items-center">
                <div class="w-full"><img src="https://images.pexels.com/photos/7979447/pexels-photo-7979447.jpeg"
                        alt="Legal Consultation" class="rounded-2xl shadow-xl w-full h-[350px] object-cover"></div>
                <div class="space-y-6">
                    <p class="text-base md:text-lg text-gray-700 leading-relaxed">Our dedicated legal advisory team
                        ensures that every step of your egg freezing journey complies with medical regulations,
                        government guidelines, and ethical standards, giving you complete clarity and peace of mind.</p>
                    <ul class="space-y-4 text-gray-700 text-base md:text-lg leading-relaxed">
                        <li class="flex gap-3"><span class="text-indigo-600 text-xl">•</span> Expert guidance on consent
                            forms, medical agreements &amp; partner authorization</li>
                        <li class="flex gap-3"><span class="text-indigo-600 text-xl">•</span> Compliance with legal
                            policies, storage laws &amp; national fertility regulations</li>
                        <li class="flex gap-3"><span class="text-indigo-600 text-xl">•</span> Support for long-term
                            storage rights, usage permissions &amp; secure documentation</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section id="fertility-path" class="py-12 bg-gradient-to-b from-pink-50 via-white to-blue-50">
        <div class="max-w-6xl mx-auto px-6 lg:px-12">
            <h2 class="text-3xl md:text-4xl font-bold text-center text-gray-900 mb-6 md:mb-10">Your Path to <span
                    class="text-brand-pink">Optimal Fertility Health</span></h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-14">
                <div class="flex gap-5 items-start"><img src="https://cdn-icons-png.flaticon.com/512/2966/2966327.png"
                        class="h-10 w-10 object-contain opacity-80" alt="Assessment Icon">
                    <div>
                        <h3 class="text-xl font-semibold text-gray-900 mb-2">Professional Assessment</h3>
                        <p class="text-gray-600 text-sm md:text-base leading-relaxed">Comprehensive evaluation of
                            hormonal profile, ovarian reserve, and reproductive health.</p>
                    </div>
                </div>
                <div class="flex gap-5 items-start"><img src="https://cdn-icons-png.flaticon.com/512/1828/1828961.png"
                        class="h-10 w-10 object-contain opacity-80" alt="Planning Icon">
                    <div>
                        <h3 class="text-xl font-semibold text-gray-900 mb-2">Personalized Treatment Plan</h3>
                        <p class="text-gray-600 text-sm md:text-base leading-relaxed">Tailored strategy based on medical
                            insights, future family goals, and biological timeline.</p>
                    </div>
                </div>
                <div class="flex gap-5 items-start"><img src="https://cdn-icons-png.flaticon.com/512/4320/4320337.png"
                        class="h-10 w-10 object-contain opacity-80" alt="Wellness Icon">
                    <div>
                        <h3 class="text-xl font-semibold text-gray-900 mb-2">Holistic Wellness Support</h3>
                        <p class="text-gray-600 text-sm md:text-base leading-relaxed">Guidance covering nutrition,
                            stress reduction, supplements, and lifestyle improvement.</p>
                    </div>
                </div>
                <div class="flex gap-5 items-start"><img src="https://cdn-icons-png.flaticon.com/512/11482/11482930.png"
                        class="h-10 w-10 object-contain opacity-80" alt="Monitoring Icon">
                    <div>
                        <h3 class="text-xl font-semibold text-gray-900 mb-2">Long-Term Monitoring</h3>
                        <p class="text-gray-600 text-sm md:text-base leading-relaxed">Ongoing tracking and support to
                            maintain fertility health and guide future decisions.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="egg-freezing-cost" class="py-12 bg-white">
        <div class="max-w-6xl mx-auto px-6 lg:px-12">
            <h2 class="text-3xl md:text-4xl font-bold text-center text-gray-900 mb-4">Cost of Egg Freezing in <span
                    class="text-brand-pink">Delhi, Gurgaon, and Noida</span></h2>
            <p class="text-center text-base md:text-lg text-gray-700 max-w-3xl mx-auto leading-relaxed mb-6 md:mb-10">
                The cost of egg freezing depends on various medical and clinical factors. Here is an approximate
                breakdown to guide your planning:</p>
            <div class="overflow-x-auto">
                <table class="w-full table-auto">
                    <thead>
                        <tr class="bg-gradient-to-r from-brand-blue to-brand-pink text-white text-lg">
                            <th class="px-6 py-4 text-left font-semibold">Procedure</th>
                            <th class="px-6 py-4 text-left font-semibold">Estimated Cost (INR)</th>
                        </tr>
                    </thead>
                    <tbody class="text-gray-800 text-base">
                        <tr class="transition hover:bg-indigo-50 hover:scale-[1.01]">
                            <td class="px-6 py-4">Initial Consultation</td>
                            <td class="px-6 py-4 font-medium">₹ 2,000 – ₹ 5,000</td>
                        </tr>
                        <tr class="bg-gray-50 transition hover:bg-indigo-50 hover:scale-[1.01]">
                            <td class="px-6 py-4">Ovarian Stimulation</td>
                            <td class="px-6 py-4 font-medium">₹ 50,000 – ₹ 80,000</td>
                        </tr>
                        <tr class="transition hover:bg-indigo-50 hover:scale-[1.01]">
                            <td class="px-6 py-4">Monitoring</td>
                            <td class="px-6 py-4 font-medium">₹ 20,000 – ₹ 30,000</td>
                        </tr>
                        <tr class="bg-gray-50 transition hover:bg-indigo-50 hover:scale-[1.01]">
                            <td class="px-6 py-4">Egg Retrieval</td>
                            <td class="px-6 py-4 font-medium">₹ 50,000 – ₹ 70,000</td>
                        </tr>
                        <tr class="transition hover:bg-indigo-50 hover:scale-[1.01] border-b border-gray-200">
                            <td class="px-6 py-4">Freezing &amp; Storage (per year)</td>
                            <td class="px-6 py-4 font-medium">₹ 15,000 – ₹ 50,000 / year</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <p class="text-sm md:text-base text-gray-600 mt-4">* Costs may vary based on medication dosage, storage
                duration, stimulation response, and additional clinical requirements.</p>
        </div>
    </section>
    <section class="relative bg-gradient-to-b from-pink-50 via-white to-blue-50 py-12 overflow-hidden">
        <div class="container mx-auto px-6 lg:px-16 relative z-10">
            <div class="text-center mb-8">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4 leading-tight"><span
                        class="text-brand-pink">Real Stories, Real Miracles</span></h2>
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
    <section class="relative py-12 bg-white overflow-hidden">
        <div class="container mx-auto px-6 md:px-12 text-center">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">At-Home Fertility Testing, Simplified</h2>
            <p class="text-gray-600 mb-6 md:mb-10 max-w-2xl mx-auto">Access easy and accurate fertility tests and
                calculators from the comfort of your home. Get insights and guidance at every stage.</p>
            <div class="flex md:grid md:grid-cols-3 gap-6 overflow-x-auto snap-x snap-mandatory pb-4">
                <div
                    class="min-w-[260px] snap-center bg-white rounded-3xl shadow-lg p-8 hover:shadow-xl transition relative">
                    <h3 class="text-xl font-semibold text-gray-800 mb-2">AMH Test</h3>
                    <p class="text-gray-500 text-sm mb-4">Understand your ovarian reserve with a simple at-home test.
                    </p><a href="#amh-test"
                        class="text-pink-600 font-semibold hover:underline absolute bottom-5 right-5">Know more →</a>
                </div>
                <div
                    class="min-w-[260px] snap-center bg-white rounded-3xl shadow-lg p-8 hover:shadow-xl transition relative">
                    <h3 class="text-xl font-semibold text-gray-800 mb-2">Semen Analysis</h3>
                    <p class="text-gray-500 text-sm mb-4">Evaluate sperm count, motility, and overall male fertility at
                        home.</p><a href="#semen-analysis"
                        class="text-pink-600 font-semibold hover:underline absolute bottom-5 right-5">Know more →</a>
                </div>
                <div
                    class="min-w-[260px] snap-center bg-white rounded-3xl shadow-lg p-8 hover:shadow-xl transition relative">
                    <h3 class="text-xl font-semibold text-gray-800 mb-2">Hormonal Panel</h3>
                    <p class="text-gray-500 text-sm mb-4">Comprehensive hormone testing to track fertility health.</p><a
                        href="#hormonal-panel"
                        class="text-pink-600 font-semibold hover:underline absolute bottom-5 right-5">Know more →</a>
                </div>
                <div
                    class="min-w-[260px] snap-center bg-white rounded-3xl shadow-lg p-8 hover:shadow-xl transition relative">
                    <h3 class="text-xl font-semibold text-gray-800 mb-2">Ovulation Calculator</h3>
                    <p class="text-gray-500 text-sm mb-4">Quickly estimate your fertile window with ease.</p><a
                        href="#ovulation-calculator"
                        class="text-pink-600 font-semibold hover:underline absolute bottom-5 right-5">Know more →</a>
                </div>
                <div
                    class="min-w-[260px] snap-center bg-white rounded-3xl shadow-lg p-8 hover:shadow-xl transition relative">
                    <h3 class="text-xl font-semibold text-gray-800 mb-2">IVF Success Calculator</h3>
                    <p class="text-gray-500 text-sm mb-4">Estimate IVF success probabilities based on your health
                        profile.</p><a href="#ivf-calculator"
                        class="text-pink-600 font-semibold hover:underline absolute bottom-5 right-5">Know more →</a>
                </div>
                <div
                    class="min-w-[260px] snap-center bg-white rounded-3xl shadow-lg p-8 hover:shadow-xl transition relative">
                    <h3 class="text-xl font-semibold text-gray-800 mb-2">Pregnancy Test Calculator</h3>
                    <p class="text-gray-500 text-sm mb-4">Check estimated conception timelines and pregnancy outcomes.
                    </p><a href="#pregnancy-calculator"
                        class="text-pink-600 font-semibold hover:underline absolute bottom-5 right-5">Know more →</a>
                </div>
            </div>
        </div>
    </section>
    <section class="relative bg-brand-blue text-white py-6 text-center">
        <div class="container mx-auto px-6">
            <h2 class="text-3xl md:text-4xl font-bold mb-3">Ready to Take Control of Your Future Fertility?</h2>
            <p class="text-lg mb-4 max-w-2xl mx-auto">Our fertility specialists are here to listen, guide, and support
                you — with care that’s both expert and empathetic.</p>
            <div class="flex flex-col sm:flex-row justify-center items-center gap-4"><button
                    class="bg-brand-pink text-white px-6 py-3 rounded-full shadow-lg hover:shadow-2xl transition-all duration-500 hover:scale-105"><i
                        class="fa-solid fa-hand-holding-heart mr-2"></i> Book Consultation</button> <button
                    class="bg-white text-brand-blue font-semibold px-6 py-3 rounded-full shadow-lg hover:shadow-2xl transition-all duration-500 hover:scale-105"><i
                        class="fa-solid fa-calculator mr-2 text-brand-pink"></i> Call Now</button></div>
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
