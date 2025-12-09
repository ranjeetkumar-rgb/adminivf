@extends('frontend.layouts.master')
@section('title', 'Home')
@section('content')
   <section
        class="relative bg-gradient-to-br from-[#20417e] via-[#2f4c8a] to-[#778aaf] text-white py-12 overflow-hidden">
        <div
            class="container mx-auto px-6 lg:px-20 relative z-10 md:grid grid-cols-1 lg:grid-cols-2 items-center flex flex-col-reverse">
            <div class="space-y-6">
                <h1 class="text-4xl md:text-5xl font-bold leading-tight">Corporate Health Talks<br><span
                        class="text-yellow-300">Empowering Workplaces with Wellness</span></h1>
                <p class="text-lg text-blue-100 max-w-xl leading-relaxed">Expert-led sessions on fertility, mental
                    wellness, preventive healthcare, nutrition, stress management and holistic well-being — designed to
                    build a healthier, happier and more productive workforce.</p>
                <div class="flex flex-col sm:flex-row gap-4"><a href="#book"
                        class="px-8 py-3 bg-yellow-300 text-gray-900 rounded-full font-semibold shadow-xl hover:bg-yellow-400 transition">Schedule
                        a Health Talk </a><a href="#topics"
                        class="px-8 py-3 border border-white/60 rounded-full font-semibold text-white hover:bg-white/20 transition">View
                        Session Topics</a></div>
            </div>
            <div class="flex justify-center lg:justify-end mb-4 md:mb-0"><img
                    src="https://media.istockphoto.com/id/1432010692/photo/businesswoman-talking-with-female-healthcare-worker-in-doctors-office.jpg?s=612x612&amp;w=0&amp;k=20&amp;c=YCO-p148k0AM7BiiTHITdvoDqPqUyLDR4K6pNAEj7SA="
                    class="w-full max-w-md rounded-3xl shadow-2xl border border-white/20 object-cover"
                    alt="Corporate Health Talks"></div>
        </div>
    </section>
    <section id="topics" class="py-12 bg-white">
        <div class="container mx-auto px-6 lg:px-20 text-center">
            <h2 class="text-3xl md:text-4xl font-extrabold text-gray-900 mb-6 md:mb-10">Topics We Cover in <span
                    class="text-brand-pink">Corporate Health Talks</span></h2>
            <div class="flex md:grid md:grid-cols-3 gap-6 overflow-x-auto snap-x snap-mandatory pb-4 scrollbar-hide">
                <div class="flex-shrink-0 w-80 md:w-auto bg-gray-50 p-8 rounded-2xl shadow hover:shadow-xl transition">
                    <i class="fa-solid fa-brain text-4xl text-blue-600 mb-4"></i>
                    <h3 class="text-lg font-semibold text-gray-800 mb-2">Mental Well-Being &amp; Stress Management</h3>
                    <p class="text-gray-600 text-sm">Managing work-life stress, anxiety and burnout.</p>
                </div>
                <div class="flex-shrink-0 w-80 md:w-auto bg-gray-50 p-8 rounded-2xl shadow hover:shadow-xl transition">
                    <i class="fa-solid fa-person-running text-4xl text-green-600 mb-4"></i>
                    <h3 class="text-lg font-semibold text-gray-800 mb-2">Lifestyle &amp; Nutrition for Peak Performance
                    </h3>
                    <p class="text-gray-600 text-sm">Diet, fitness and sleep for sustained energy &amp; focus.</p>
                </div>
                <div class="flex-shrink-0 w-80 md:w-auto bg-gray-50 p-8 rounded-2xl shadow hover:shadow-xl transition">
                    <i class="fa-solid fa-notes-medical text-4xl text-pink-600 mb-4"></i>
                    <h3 class="text-lg font-semibold text-gray-800 mb-2">Preventive Healthcare &amp; Fertility Awareness
                    </h3>
                    <p class="text-gray-600 text-sm">Early testing &amp; reproductive health education.</p>
                </div>
            </div>
        </div>
    </section>
    <section class="py-12 bg-gradient-to-b from-pink-50 via-white to-blue-50">
        <div class="container mx-auto px-6 lg:px-20 text-center">
            <h2 class="text-3xl md:text-4xl font-extrabold text-gray-900 mb-6 md:mb-10">Why Companies <span
                    class="text-brand-pink">Choose Us</span></h2>
            <div class="flex md:grid md:grid-cols-4 gap-6 overflow-x-auto snap-x snap-mandatory pb-4 scrollbar-hide">
                <div class="flex-shrink-0 w-80 md:w-auto p-8 bg-white rounded-3xl shadow hover:shadow-xl transition"><i
                        class="fa-solid fa-user-doctor text-4xl text-pink-600 mb-3"></i>
                    <h3 class="text-lg font-semibold">Expert Speakers</h3>
                    <p class="text-gray-600 text-sm">Sessions led by senior doctors, psychologists &amp; nutritionists.
                    </p>
                </div>
                <div class="flex-shrink-0 w-80 md:w-auto p-8 bg-white rounded-3xl shadow hover:shadow-xl transition"><i
                        class="fa-solid fa-chart-line text-4xl text-blue-600 mb-3"></i>
                    <h3 class="text-lg font-semibold">Proven Workplace Benefits</h3>
                    <p class="text-gray-600 text-sm">Higher productivity, morale and employee retention.</p>
                </div>
                <div class="flex-shrink-0 w-80 md:w-auto p-8 bg-white rounded-3xl shadow hover:shadow-xl transition"><i
                        class="fa-solid fa-laptop-house text-4xl text-green-600 mb-3"></i>
                    <h3 class="text-lg font-semibold">Online &amp; On-Site Formats</h3>
                    <p class="text-gray-600 text-sm">Conducted virtually or at your corporate office.</p>
                </div>
                <div class="flex-shrink-0 w-80 md:w-auto p-8 bg-white rounded-3xl shadow hover:shadow-xl transition"><i
                        class="fa-solid fa-people-group text-4xl text-yellow-500 mb-3"></i>
                    <h3 class="text-lg font-semibold">Engaging &amp; Interactive</h3>
                    <p class="text-gray-600 text-sm">Live Q&amp;A, quizzes, polls and take-home resources.</p>
                </div>
            </div>
        </div>
    </section>
    <section class="py-6 bg-blue-900 text-white text-center">
        <div class="container mx-auto px-6 lg:px-20">
            <h2 class="text-3xl md:text-4xl font-extrabold mb-12">The Impact of Our Corporate Wellness Talks</h2>
            <div class="grid grid-cols-1 md:grid-cols-4 gap-10">
                <div>
                    <p class="text-5xl font-extrabold text-yellow-300 mb-2">94%</p>
                    <p>Employees found sessions highly valuable</p>
                </div>
                <div>
                    <p class="text-5xl font-extrabold text-yellow-300 mb-2">87%</p>
                    <p>Reported reduced stress levels</p>
                </div>
                <div>
                    <p class="text-5xl font-extrabold text-yellow-300 mb-2">72%</p>
                    <p>Showed improved work productivity</p>
                </div>
                <div>
                    <p class="text-5xl font-extrabold text-yellow-300 mb-2">4.8/5</p>
                    <p>Average feedback rating</p>
                </div>
            </div>
        </div>
    </section>
    <section class="py-12 bg-white relative overflow-hidden">
        <div class="container mx-auto px-6 lg:px-20 relative z-10 text-center mb-6 md:mb-10">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 leading-snug">Empowering <span
                    class="text-brand-pink">Women's Health </span>in the Workplace</h2>
            <p class="text-lg text-gray-600 max-w-2xl mx-auto mt-4">Healthy Women, Productive Teams, Thriving Businesses
            </p>
        </div>
        <div
            class="flex md:grid md:grid-cols-3 gap-6 overflow-x-auto snap-x snap-mandatory pb-4 scrollbar-hide px-6 md:px-20">
            <div
                class="flex-shrink-0 w-80 md:w-auto bg-white/90 backdrop-blur rounded-3xl p-8 shadow-lg hover:-translate-y-2 hover:shadow-2xl transition text-center">
                <div class="w-16 h-16 mx-auto mb-5 bg-blue-100 rounded-full flex items-center justify-center"><i
                        class="fa-solid fa-user-doctor text-blue-600 text-2xl"></i></div>
                <h3 class="text-lg font-semibold text-gray-900 mb-2">Expertise in Women’s Health</h3>
                <p class="text-gray-600 text-sm leading-relaxed">A deep and specialized focus on women-specific medical
                    and emotional wellness needs.</p>
            </div>
            <div
                class="flex-shrink-0 w-80 md:w-auto bg-white/90 backdrop-blur rounded-3xl p-8 shadow-lg hover:-translate-y-2 hover:shadow-2xl transition text-center border border-pink-300">
                <div class="w-16 h-16 mx-auto mb-5 bg-pink-100 rounded-full flex items-center justify-center"><i
                        class="fa-solid fa-bullseye text-pink-600 text-2xl"></i></div>
                <h3 class="text-lg font-semibold text-gray-900 mb-2">Tailored Programs</h3>
                <p class="text-gray-600 text-sm leading-relaxed">Customized health talk themes and workshop content
                    based on your workforce needs.</p>
            </div>
            <div
                class="flex-shrink-0 w-80 md:w-auto bg-white/90 backdrop-blur rounded-3xl p-8 shadow-lg hover:-translate-y-2 hover:shadow-2xl transition text-center">
                <div class="w-16 h-16 mx-auto mb-5 bg-green-100 rounded-full flex items-center justify-center"><i
                        class="fa-solid fa-chart-line text-green-600 text-2xl"></i></div>
                <h3 class="text-lg font-semibold text-gray-900 mb-2">Proven Results</h3>
                <p class="text-gray-600 text-sm leading-relaxed">Participation, engagement and workplace wellness
                    outcomes backed by positive corporate feedback.</p>
            </div>
        </div>
    </section>
    <section class="py-12 bg-gradient-to-b from-pink-50 via-white to-blue-50 relative overflow-hidden">
        <div class="container mx-auto px-6 lg:px-20 grid grid-cols-1 lg:grid-cols-2 gap-16 items-center relative z-10">
            <div>
                <h2 class="text-3xl md:text-4xl font-extrabold text-gray-900 mb-5 leading-tight">How <span
                        class="text-brand-pink">Corporate Health Talks </span>Can Help</h2>
                <p class="text-gray-700 mb-10 text-base max-w-lg">Each wellness session equips women with practical
                    health insights while helping organizations foster a supportive and high-performing workplace.</p>
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
                    <div class="bg-white rounded-2xl p-5 shadow-md hover:shadow-xl transition">
                        <h3 class="font-semibold text-gray-900 text-base mb-1">Menstrual Health</h3>
                        <p class="text-gray-600 text-sm leading-relaxed">Relief strategies and myth-breaking.</p>
                    </div>
                    <div class="bg-white rounded-2xl p-5 shadow-md hover:shadow-xl transition">
                        <h3 class="font-semibold text-gray-900 text-base mb-1">Hormonal Balance</h3>
                        <p class="text-gray-600 text-sm leading-relaxed">Support for PCOS &amp; menopause.</p>
                    </div>
                    <div class="bg-white rounded-2xl p-5 shadow-md hover:shadow-xl transition">
                        <h3 class="font-semibold text-gray-900 text-base mb-1">Pregnancy Wellness</h3>
                        <p class="text-gray-600 text-sm leading-relaxed">Guidance for prenatal &amp; postpartum stages.
                        </p>
                    </div>
                    <div class="bg-white rounded-2xl p-5 shadow-md hover:shadow-xl transition">
                        <h3 class="font-semibold text-gray-900 text-base mb-1">Work-Life &amp; Mental Well-Being</h3>
                        <p class="text-gray-600 text-sm leading-relaxed">Stress &amp; emotional resilience tools.</p>
                    </div>
                    <div class="bg-white rounded-2xl p-5 shadow-md hover:shadow-xl transition sm:col-span-2">
                        <h3 class="font-semibold text-gray-900 text-base mb-1">Preventive Care Awareness</h3>
                        <p class="text-gray-600 text-sm leading-relaxed">Importance of mammograms, Pap smears &amp;
                            routine screenings.</p>
                    </div>
                </div>
            </div>
            <div class="flex flex-col gap-8">
                <div class="relative group"><img
                        src="https://images.pexels.com/photos/3182812/pexels-photo-3182812.jpeg"
                        class="rounded-3xl shadow-2xl w-full object-cover transition duration-700 group-hover:scale-105">
                    <span
                        class="absolute bottom-4 right-4 bg-white/90 px-5 py-2 rounded-full text-gray-700 text-xs font-semibold shadow-md backdrop-blur">Corporate
                        Wellness in Action</span>
                </div>
                <div class="bg-white rounded-3xl shadow-xl p-8 border">
                    <h4 class="font-bold text-gray-900 text-lg mb-4 text-center">Benefits for Organizations</h4>
                    <ul class="space-y-3 text-gray-700 text-base">
                        <li>• Lower absenteeism and burnout</li>
                        <li>• Higher employee satisfaction and retention</li>
                        <li>• Reduced long-term healthcare costs</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section class="py-12 bg-white relative overflow-hidden">
        <div class="container mx-auto px-6 lg:px-20 text-center">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Did You Know? <span
                    class="text-brand-pink">Common Female Health Issues</span></h2>
            <p class="text-gray-700 mb-6 md:mb-10 text-lg">Women often push through chronic symptoms while juggling
                demanding careers and personal life. Awareness and early support make a measurable difference to health,
                happiness and work-life balance.</p>
        </div>
        <div class="container mx-auto px-6 lg:px-12 grid grid-cols-1 lg:grid-cols-2 gap-16 items-center relative z-10">
            <div class="relative group"><img
                    src="https://media.istockphoto.com/id/1820926701/photo/unrecognizable-female-university-student-shares-struggles-with-female-therapist.jpg?s=612x612&amp;w=0&amp;k=20&amp;c=tYZwLlkQv47NibcIDjzlmeMUzSj2QLXmhIxZ3ENwFVg="
                    class="rounded-3xl shadow-2xl w-full object-cover transition duration-700 group-hover:scale-105">
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-3">
                <div
                    class="bg-white/90 backdrop-blur rounded-2xl p-3 shadow hover:shadow-xl hover:-translate-y-1 transition group">
                    <div class="flex items-start gap-3"><i class="fa-solid fa-droplet text-pink-500 text-xl mt-1"></i>
                        <div>
                            <h3 class="font-semibold text-gray-900 text-sm mb-1">Menstrual Problems</h3>
                            <p class="text-gray-600 text-xs leading-relaxed">Heavy bleeding, irregular cycles &amp;
                                painful cramps.</p>
                        </div>
                    </div>
                </div>
                <div
                    class="bg-white/90 backdrop-blur rounded-2xl p-3 shadow hover:shadow-xl hover:-translate-y-1 transition group">
                    <div class="flex items-start gap-3"><i
                            class="fa-solid fa-circle-nodes text-blue-500 text-xl mt-1"></i>
                        <div>
                            <h3 class="font-semibold text-gray-900 text-sm mb-1">PCOS</h3>
                            <p class="text-gray-600 text-xs leading-relaxed">Hormonal imbalance causing irregular cycles
                                &amp; infertility.</p>
                        </div>
                    </div>
                </div>
                <div
                    class="bg-white/90 backdrop-blur rounded-2xl p-3 shadow hover:shadow-xl hover:-translate-y-1 transition group">
                    <div class="flex items-start gap-3"><i
                            class="fa-solid fa-heart-pulse text-red-500 text-xl mt-1"></i>
                        <div>
                            <h3 class="font-semibold text-gray-900 text-sm mb-1">Reproductive Health Disorders</h3>
                            <p class="text-gray-600 text-xs leading-relaxed">Endometriosis, fibroids &amp; infertility
                                concerns.</p>
                        </div>
                    </div>
                </div>
                <div
                    class="bg-white/90 backdrop-blur rounded-2xl p-3 shadow hover:shadow-xl hover:-translate-y-1 transition group">
                    <div class="flex items-start gap-3"><i class="fa-solid fa-baby text-amber-500 text-xl mt-1"></i>
                        <div>
                            <h3 class="font-semibold text-gray-900 text-sm mb-1">Pregnancy-Related Challenges</h3>
                            <p class="text-gray-600 text-xs leading-relaxed">High-risk pregnancies, postpartum issues
                                &amp; fatigue.</p>
                        </div>
                    </div>
                </div>
                <div
                    class="bg-white/90 backdrop-blur rounded-2xl p-3 shadow hover:shadow-xl hover:-translate-y-1 transition group">
                    <div class="flex items-start gap-3"><i class="fa-solid fa-fire text-yellow-500 text-xl mt-1"></i>
                        <div>
                            <h3 class="font-semibold text-gray-900 text-sm mb-1">Menopause</h3>
                            <p class="text-gray-600 text-xs leading-relaxed">Hot flashes, sleep issues &amp; hormonal
                                transitions.</p>
                        </div>
                    </div>
                </div>
                <div
                    class="bg-white/90 backdrop-blur rounded-2xl p-3 shadow hover:shadow-xl hover:-translate-y-1 transition group">
                    <div class="flex items-start gap-3"><i class="fa-solid fa-ribbon text-purple-500 text-xl mt-1"></i>
                        <div>
                            <h3 class="font-semibold text-gray-900 text-sm mb-1">Breast &amp; Cervical Health</h3>
                            <p class="text-gray-600 text-xs leading-relaxed">Low awareness of mammograms and Pap
                                screenings.</p>
                        </div>
                    </div>
                </div>
                <div
                    class="bg-white/90 backdrop-blur rounded-2xl p-3 shadow hover:shadow-xl hover:-translate-y-1 transition group">
                    <div class="flex items-start gap-3"><i
                            class="fa-solid fa-face-tired text-indigo-500 text-xl mt-1"></i>
                        <div>
                            <h3 class="font-semibold text-gray-900 text-sm mb-1">Mental Health</h3>
                            <p class="text-gray-600 text-xs leading-relaxed">Stress, anxiety, depression &amp;
                                postpartum emotional strain.</p>
                        </div>
                    </div>
                </div>
                <div
                    class="bg-white/90 backdrop-blur rounded-2xl p-3 shadow hover:shadow-xl hover:-translate-y-1 transition group">
                    <div class="flex items-start gap-3"><i
                            class="fa-solid fa-apple-whole text-green-500 text-xl mt-1"></i>
                        <div>
                            <h3 class="font-semibold text-gray-900 text-sm mb-1">Lifestyle-Linked Issues</h3>
                            <p class="text-gray-600 text-xs leading-relaxed">Obesity, diabetes &amp; cardiovascular
                                health risks.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="py-12 bg-gradient-to-b from-pink-50 via-white to-blue-50">
        <div class="container mx-auto px-6 lg:px-20">
            <h2 class="text-3xl md:text-4xl font-extrabold text-gray-900 text-center mb-4">Exclusive Corporate Offers
            </h2>
            <p class="text-gray-600 text-center max-w-2xl mx-auto mb-6 md:mb-10 text-lg">Designed to support employee
                well-being while helping organizations build a healthier, happier and more productive workforce.</p>
            <div class="flex md:grid md:grid-cols-3 gap-6 overflow-x-auto snap-x snap-mandatory pb-4 scrollbar-hide">
                <div
                    class="flex-shrink-0 w-80 md:w-auto bg-white p-10 rounded-3xl shadow-lg hover:-translate-y-2 hover:shadow-2xl transition text-center">
                    <div
                        class="w-20 h-20 mx-auto mb-6 bg-blue-100 rounded-full flex items-center justify-center shadow-md">
                        <i class="fa-solid fa-people-group text-blue-600 text-3xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 mb-3">Group Wellness Sessions</h3>
                    <p class="text-gray-600 text-sm leading-relaxed mb-4">Host 3+ sessions per year and unlock exclusive
                        pricing for recurring wellness programs.</p>
                    <p class="text-pink-600 font-semibold text-sm">Special pricing available for annual tie-ups</p>
                </div>
                <div
                    class="flex-shrink-0 w-80 md:w-auto bg-white p-10 rounded-3xl shadow-lg hover:-translate-y-2 hover:shadow-2xl transition text-center border-2 border-pink-500 relative">
                    <span class="absolute top-4 right-6 bg-pink-600 text-white text-xs px-3 py-1 rounded-full">Most
                        Popular</span>
                    <div
                        class="w-20 h-20 mx-auto mb-6 bg-pink-100 rounded-full flex items-center justify-center shadow-md">
                        <i class="fa-solid fa-hand-holding-heart text-pink-600 text-3xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 mb-3">Employee Fertility &amp; Wellness Package</h3>
                    <p class="text-gray-600 text-sm leading-relaxed mb-4">Includes wellness talks + personalized
                        fertility consultation vouchers for employees &amp; partners.</p>
                    <p class="text-pink-600 font-semibold text-sm">Up to 35% savings vs individual consultations</p>
                </div>
                <div
                    class="flex-shrink-0 w-80 md:w-auto bg-white p-10 rounded-3xl shadow-lg hover:-translate-y-2 hover:shadow-2xl transition text-center">
                    <div
                        class="w-20 h-20 mx-auto mb-6 bg-green-100 rounded-full flex items-center justify-center shadow-md">
                        <i class="fa-solid fa-user-shield text-green-600 text-3xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 mb-3">Corporate Family Health Benefits</h3>
                    <p class="text-gray-600 text-sm leading-relaxed mb-4">Special assistance &amp; priority appointments
                        for employees and their dependents throughout the year.</p>
                    <p class="text-pink-600 font-semibold text-sm">Concierge-style employee care desk included</p>
                </div>
            </div>
            <div class="text-center mt-14"><a href="#book"
                    class="px-6 md:px-12 py-4 bg-brand-pink hover:bg-brand-blue text-white rounded-full shadow-xl text-lg font-semibold transition">Request
                    Corporate Offer Details</a></div>
        </div>
    </section>
    <section class="py-12 bg-white">
        <div class="container mx-auto px-6 lg:px-20">
            <h2 class="text-3xl md:text-4xl font-extrabold text-gray-900 text-center mb-4">Corporate Events Gallery</h2>
            <p class="text-gray-600 text-center max-w-2xl mx-auto mb-6 md:mb-10 text-lg">A glimpse of our wellness
                sessions conducted across leading organizations.</p>
            <div class="flex md:grid md:grid-cols-4 gap-6 overflow-x-auto snap-x snap-mandatory pb-4 scrollbar-hide">
                <div
                    class="flex-shrink-0 w-80 md:w-auto group relative overflow-hidden rounded-2xl shadow-xl cursor-pointer">
                    <img src="https://images.pexels.com/photos/3184325/pexels-photo-3184325.jpeg"
                        class="w-full h-48 object-cover transition duration-500 group-hover:scale-110">
                    <div class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition"></div>
                </div>
                <div
                    class="flex-shrink-0 w-80 md:w-auto group relative overflow-hidden rounded-2xl shadow-xl cursor-pointer">
                    <img src="https://images.pexels.com/photos/3184418/pexels-photo-3184418.jpeg"
                        class="w-full h-48 object-cover transition duration-500 group-hover:scale-110">
                    <div class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition"></div>
                </div>
                <div
                    class="flex-shrink-0 w-80 md:w-auto group relative overflow-hidden rounded-2xl shadow-xl cursor-pointer">
                    <img src="https://images.pexels.com/photos/3182744/pexels-photo-3182744.jpeg"
                        class="w-full h-48 object-cover transition duration-500 group-hover:scale-110">
                    <div class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition"></div>
                </div>
                <div
                    class="flex-shrink-0 w-80 md:w-auto group relative overflow-hidden rounded-2xl shadow-xl cursor-pointer">
                    <img src="https://images.pexels.com/photos/3184465/pexels-photo-3184465.jpeg"
                        class="w-full h-48 object-cover transition duration-500 group-hover:scale-110">
                    <div class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition"></div>
                </div>
                <div
                    class="flex-shrink-0 w-80 md:w-auto group relative overflow-hidden rounded-2xl shadow-xl cursor-pointer">
                    <img src="https://images.pexels.com/photos/3184646/pexels-photo-3184646.jpeg"
                        class="w-full h-48 object-cover transition duration-500 group-hover:scale-110">
                    <div class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition"></div>
                </div>
                <div
                    class="flex-shrink-0 w-80 md:w-auto group relative overflow-hidden rounded-2xl shadow-xl cursor-pointer">
                    <img src="https://images.pexels.com/photos/3182812/pexels-photo-3182812.jpeg"
                        class="w-full h-48 object-cover transition duration-500 group-hover:scale-110">
                    <div class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition"></div>
                </div>
                <div
                    class="flex-shrink-0 w-80 md:w-auto group relative overflow-hidden rounded-2xl shadow-xl cursor-pointer">
                    <img src="https://images.pexels.com/photos/3183226/pexels-photo-3183226.jpeg"
                        class="w-full h-48 object-cover transition duration-500 group-hover:scale-110">
                    <div class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition"></div>
                </div>
                <div
                    class="flex-shrink-0 w-80 md:w-auto group relative overflow-hidden rounded-2xl shadow-xl cursor-pointer">
                    <img src="https://images.pexels.com/photos/3184398/pexels-photo-3184398.jpeg"
                        class="w-full h-48 object-cover transition duration-500 group-hover:scale-110">
                    <div class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition"></div>
                </div>
            </div>
        </div>
    </section>
    <section id="appointment-section"
        class="relative py-12 bg-gradient-to-br from-pink-50 via-white to-blue-50 overflow-hidden">
        <div class="container mx-auto px-4">
            <div class="max-w-6xl mx-auto">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                    <div class="hidden md:block"><img
                            src="https://media.istockphoto.com/id/1095309852/photo/doctor-listening-to-female-colleague-in-meeting.jpg?s=612x612&amp;w=0&amp;k=20&amp;c=p8JUgcB8LcjCIlOu2S5gt_PXSNBkn9y8i1Wf-Z5ugFo="
                            alt="Corporate Health Talk" class="w-full h-full object-cover rounded-3xl shadow-2xl"></div>
                    <div class="bg-gray-50 rounded-2xl p-4">
                        <h3 class="text-2xl font-bold brand-grey mb-6 text-center">Book a Corporate Health Talk</h3>
                        <form class="space-y-4"><input placeholder="HR / Company Representative Name"
                                class="w-full px-4 py-3 border border-gray-200 rounded-lg focus:outline-none focus:border-brand-pink">
                            <input placeholder="Company Name"
                                class="w-full px-4 py-3 border border-gray-200 rounded-lg focus:outline-none focus:border-brand-pink">
                            <input type="email" placeholder="Work Email"
                                class="w-full px-4 py-3 border border-gray-200 rounded-lg focus:outline-none focus:border-brand-pink">
                            <input type="tel" placeholder="Phone Number"
                                class="w-full px-4 py-3 border border-gray-200 rounded-lg focus:outline-none focus:border-brand-pink">
                            <select class="w-full p-4 rounded-xl">
                                <option>Select Preferred Talk Format</option>
                                <option>On-Site Session</option>
                                <option>Virtual Webinar</option>
                                <option>Workshop (Extended Format)</option>
                            </select> <button type="submit"
                                class="w-full bg-brand-pink hover:bg-brand-blue text-white px-10 py-3 rounded-full font-semibold text-lg shadow-lg hover:shadow-2xl transition-all duration-500">Book
                                Free Consultation</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
