@extends('frontend.layouts.master')
@section('title', 'Home')
@section('content')
  <section id="hero-section"
    class="relative bg-gradient-to-br from-[#20417e] via-[#2f4c8a] to-[#778aaf] text-white overflow-hidden py-12">
    <div
      class="container mx-auto px-6 lg:px-20 grid-cols-1 lg:grid-cols-2 gap-8 md:gap-12 items-center relative z-10 flex flex-col-reverse md:grid">
      <div class="space-y-6 animate-fadeInUp text-center lg:text-left">
        <h1 class="text-4xl md:text-5xl font-extrabold leading-tight">Grow with Us: Franchise Opportunities <span
            class="text-pink-200"></span><br class="hidden md:block"></h1>
        <div class="flex flex-col sm:flex-row gap-4 justify-center lg:justify-start pt-2"><button
            class="md:mt-4 inline-block bg-white text-[#20417e] font-semibold px-8 py-3 rounded-full shadow-lg hover:bg-pink-100 hover:scale-105 transition-all duration-300 ease-in-out">Download
            Franchise Brochure</button> <button
            class="md:mt-4 inline-block border border-white/70 text-white px-8 py-3 rounded-full hover:bg-white/10 transition-all duration-300 ease-in-out">Register
            Now</button></div>
      </div>
      <div class="relative group animate-fadeInLeft">
        <div class="absolute -inset-4 bg-pink-200/20 rounded-3xl blur-xl opacity-60 group-hover:opacity-90 transition">
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
  <section class="py-12 bg-white">
    <div class="container mx-auto px-6 lg:px-12">
      <div class="flex overflow-x-auto gap-8 snap-x snap-mandatory scrollbar-hide md:grid md:grid-cols-3 md:gap-10">
        <div class="flex-shrink-0 w-80 md:w-auto snap-center bg-white px-8 text-center">
          <div class="flex justify-center mb-4">
            <div class="bg-pink-100 text-pink-600 p-4 rounded-full"><i class="fa-solid fa-bullseye text-3xl"></i></div>
          </div>
          <h2 class="text-2xl font-semibold text-gray-800 mb-2">Our Mission</h2>
          <p class="text-gray-600 leading-relaxed">To provide accessible, compassionate, and advanced fertility care
            that empowers every couple or individual to achieve their dream of parenthood.</p>
        </div>
        <div class="flex-shrink-0 w-80 md:w-auto snap-center bg-white px-8 text-center">
          <div class="flex justify-center mb-4">
            <div class="bg-blue-100 text-blue-600 p-4 rounded-full"><i class="fa-solid fa-eye text-3xl"></i></div>
          </div>
          <h2 class="text-2xl font-semibold text-gray-800 mb-2">Our Vision</h2>
          <p class="text-gray-600 leading-relaxed">To be recognized as India’s leading fertility center, setting
            benchmarks in success, care, innovation, and patient experience.</p>
        </div>
        <div class="flex-shrink-0 w-80 md:w-auto snap-center bg-white px-8 text-center">
          <div class="flex justify-center mb-4">
            <div class="bg-green-100 text-green-600 p-4 rounded-full"><i class="fa-solid fa-heart text-3xl"></i></div>
          </div>
          <h2 class="text-2xl font-semibold text-gray-800 mb-2">Our Values</h2>
          <p class="text-gray-600 leading-relaxed">Integrity, empathy, and innovation guide our approach to every
            patient — ensuring trust, care, and excellence at every stage of their fertility journey.</p>
        </div>
      </div>
    </div>
  </section>
  <style>
    .scrollbar-hide::-webkit-scrollbar {
      display: none
    }

    .scrollbar-hide {
      -ms-overflow-style: none;
      scrollbar-width: none
    }
  </style>
  <section class="relative bg-gradient-to-b from-pink-50 via-white to-blue-50 py-12 overflow-hidden">
    <div class="container mx-auto px-6 lg:px-12">
      <div class="text-center mb-6 max-w-3xl mx-auto">
        <h2 class="text-3xl md:text-4xl font-bold text-gray-800 leading-tight">India IVF <span
            class="text-brand-pink">Franchise Opportunity</span></h2>
      </div>
      <div class="grid md:grid-cols-2 gap-10">
        <div class="transition-all duration-500 overflow-hidden content-center"><img src="TreatmentRatio.jpg"
            alt="Profit Growth" class="w-full h-76 object-cover"></div>
        <div class="transition-all duration-500 overflow-hidden"><img src="Growth.png" alt="IVF Need"
            class="w-full h-76 object-cover">
          <div class="px-6">
            <h3 class="text-xl font-semibold text-gray-800 mb-2">Market Potential</h3>
            <p class="text-gray-600 leading-relaxed">According to the report published by Allied Market Research (Allied
              Market Research (AMR) is a full-service market research and business-consulting wing of Allied Analytics
              LLP based in Portland, Oregon), the India IVF Services Market garnered $478.2 million in 2018 and is
              expected to reach $1.45 billion by 2026, portraying a CAGR of 14.7% from 2019 to 2026.</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="relative bg-white py-12 overflow-hidden">
    <div class="container mx-auto px-6 lg:px-12">
      <div class="text-center mb-6 md:mb-10 max-w-3xl mx-auto">
        <h2 class="text-3xl md:text-4xl font-bold text-gray-800 leading-tight">Why Choose <span
            class="text-brand-pink">India IVF Fertility Centre Franchise?</span></h2>
        <p class="text-gray-600 mt-4 text-lg">A proven, scalable, and medically trusted IVF franchise model designed for
          rapid growth.</p>
      </div>
      <div
        class="flex flex-nowrap overflow-x-auto snap-x snap-mandatory sm:grid sm:grid-cols-4 sm:overflow-visible gap-10 scrollbar-hide">
        <div
          class="min-w-[80%] sm:min-w-0 snap-start relative group rounded-2xl overflow-hidden shadow-md cursor-pointer hover:shadow-xl hover:-translate-y-1 transition-all duration-500"
          style="background-image:url('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQYt4kZ6iH7tPJTFBgcAWh1bu1y-RbZrMEi3g&amp;s');background-size:cover;background-position:center">
          <div class="absolute inset-0 bg-black/55 group-hover:bg-black/45 transition-all duration-500"></div>
          <div class="relative p-6 mt-44 text-white">
            <h3 class="text-lg font-semibold mb-2">High Success Rates</h3>
            <p class="text-sm leading-relaxed opacity-90">Advanced fertility protocols and embryology standards that
              deliver market-leading results.</p>
          </div>
        </div>
        <div
          class="min-w-[80%] sm:min-w-0 snap-start relative group rounded-2xl overflow-hidden shadow-md cursor-pointer hover:shadow-xl hover:-translate-y-1 transition-all duration-500"
          style="background-image:url('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSsraG8duTOnayCQ6O7nzV49bnfcn3SMOXZEQ&amp;s');background-size:cover;background-position:center">
          <div class="absolute inset-0 bg-black/55 group-hover:bg-black/45 transition-all duration-500"></div>
          <div class="relative p-6 mt-44 text-white">
            <h3 class="text-lg font-semibold mb-2">Cutting-Edge IVF Lab Setup</h3>
            <p class="text-sm leading-relaxed opacity-90">Complete lab setup guidance including ICSI, Cryopreservation,
              and genetic screening.</p>
          </div>
        </div>
        <div
          class="min-w-[80%] sm:min-w-0 snap-start relative group rounded-2xl overflow-hidden shadow-md cursor-pointer hover:shadow-xl hover:-translate-y-1 transition-all duration-500"
          style="background-image:url('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRyw12JjIkfVQqVrQaN9eF2i1kUrvq0V9fPFQ&amp;s');background-size:cover;background-position:center">
          <div class="absolute inset-0 bg-black/55 group-hover:bg-black/45 transition-all duration-500"></div>
          <div class="relative p-6 mt-44 text-white">
            <h3 class="text-lg font-semibold mb-2">Fast ROI &amp; Growing Demand</h3>
            <p class="text-sm leading-relaxed opacity-90">India’s fertility market is expanding rapidly, creating strong
              long-term revenue potential.</p>
          </div>
        </div>
        <div
          class="min-w-[80%] sm:min-w-0 snap-start relative group rounded-2xl overflow-hidden shadow-md cursor-pointer hover:shadow-xl hover:-translate-y-1 transition-all duration-500"
          style="background-image:url('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRVzZ_zgaDbsF-odyanubTyc_LrLLbHGstigg&amp;s');background-size:cover;background-position:center">
          <div class="absolute inset-0 bg-black/55 group-hover:bg-black/45 transition-all duration-500"></div>
          <div class="relative p-6 mt-44 text-white">
            <h3 class="text-lg font-semibold mb-2">Clinical &amp; Operational Training</h3>
            <p class="text-sm leading-relaxed opacity-90">End-to-end support for doctors, embryologists, and management
              teams to ensure smooth operations.</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section id="awards" class="py-12 bg-gradient-to-b from-pink-50 via-white to-blue-50">
    <div class="container mx-auto px-6 lg:px-12 text-center">
      <h2 class="text-3xl sm:text-4xl font-bold text-gray-800"><span class="text-brand-pink">Accreditations</span></h2>
      <div
        class="flex mt-6 md:mt-10 gap-6 overflow-x-auto md:overflow-x-visible scroll-smooth md:grid md:grid-cols-4 md:gap-8">
        <div class="flex-shrink-0 w-64 h-40 bg-white p-2 rounded-2xl shadow-lg hover:scale-105 transition-transform">
          <img src="https://upload.wikimedia.org/wikipedia/en/8/8f/NCQAlogo3.png" alt="Award 1"
            class="h-20 mx-auto mb-4 object-contain">
          <h3 class="text-lg text-gray-800 mb-1 leading-tight">National Committee for Quality Assurance</h3>
        </div>
        <div
          class="flex-shrink-0 w-64 h-40 bg-white p-2 rounded-2xl shadow-lg hover:scale-105 transition-transform content-center">
          <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTuMa7S6_4eM3KB15EeBqe-tECvKg-aY-Dlrw&amp;s"
            alt="Award 2" class="h-20 mx-auto mb-4 object-contain">
          <h3 class="text-lg text-gray-800 mb-1 leading-tight">NABH</h3>
        </div>
        <div
          class="flex-shrink-0 w-64 h-40 bg-white p-2 rounded-2xl shadow-lg hover:scale-105 transition-transform content-center">
          <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTUTdc_NNDTHgmUCo9JdJcvb_2K-8AuTS77KA&amp;s"
            alt="Award 3" class="h-20 mx-auto mb-4 object-contain">
          <h3 class="text-lg text-gray-800 mb-1 leading-tight">Medvarsity</h3>
        </div>
        <div class="flex-shrink-0 w-64 h-40 bg-white p-2 rounded-2xl shadow-lg hover:scale-105 transition-transform">
          <img
            src="https://upload.wikimedia.org/wikipedia/en/thumb/a/a3/Indian_Council_of_Medical_Research_Logo.svg/1200px-Indian_Council_of_Medical_Research_Logo.svg.png"
            alt="Award 4" class="h-20 mx-auto mb-4 object-contain">
          <h3 class="text-lg text-gray-800 mb-1 leading-tight">Indian Council of Medical Research</h3>
        </div>
      </div>
    </div>
  </section>
  <section class="relative py-12 overflow-hidden bg-white">
    <div class="container mx-auto px-6 lg:px-12">
      <div class="text-center max-w-4xl mx-auto mb-4">
        <h2 class="text-3xl md:text-4xl font-extrabold text-gray-900 tracking-tight leading-tight">Why co-brand your IVF
          centre with <span class="text-brand-pink drop-shadow-md">India IVF?</span></h2>
        <p class="text-gray-700 mt-6 text-lg md:text-xl leading-relaxed font-medium">Co-branding upgrades a standalone
          IVF clinic into a high-performance centre backed by national brand value, clinical expertise, advanced
          reproductive technology and scalable business systems.</p>
      </div>
      <div
        class="backdrop-blur-md bg-white/70 border border-gray-100 rounded-3xl shadow-lg px-10 py-5 hover:shadow-2xl transition-all duration-300">
        <h3 class="text-2xl font-semibold mb-4 text-brand-blue flex items-center gap-2">Problems faced by standalone IVF
          centres</h3>
        <div class="grid md:grid-cols-2 gap-10">
          <ul class="space-y-6 text-gray-700">
            <li class="flex gap-3"><span class="text-brand-pink text-xl">✖</span>
              <div><strong class="text-gray-900">Poor clinical outcomes</strong>
                <p class="text-sm text-gray-500 leading-relaxed">Lack of protocols and oversight reduces success rates.
                </p>
              </div>
            </li>
            <li class="flex gap-3"><span class="text-brand-pink text-xl">✖</span>
              <div><strong class="text-gray-900">Lack of trained manpower</strong>
                <p class="text-sm text-gray-500 leading-relaxed">Few centres have trained embryologists &amp; IVF
                  specialists.</p>
              </div>
            </li>
            <li class="flex gap-3"><span class="text-brand-pink text-xl">✖</span>
              <div><strong class="text-gray-900">Lack of quality control</strong>
                <p class="text-sm text-gray-500 leading-relaxed">Maintaining ISO, NABH and i-Womb level QC is difficult.
                </p>
              </div>
            </li>
            <li class="flex gap-3"><span class="text-brand-pink text-xl">✖</span>
              <div><strong class="text-gray-900">No SOPs &amp; KPI governance</strong>
                <p class="text-sm text-gray-500 leading-relaxed">Missing SOPs, KPI dashboards and review systems.</p>
              </div>
            </li>
            <li class="flex gap-3"><span class="text-brand-pink text-xl">✖</span>
              <div><strong class="text-gray-900">Ethical concerns</strong>
                <p class="text-sm text-gray-500 leading-relaxed">Misleading success rates &amp; non-standard consumables
                  harm trust.</p>
              </div>
            </li>
          </ul>
          <ul class="space-y-6 text-gray-700">
            <li class="flex gap-3"><span class="text-brand-pink text-xl">✖</span>
              <div><strong class="text-gray-900">Lack of technology</strong>
                <p class="text-sm text-gray-500 leading-relaxed">Automation &amp; IVF software are costly and mostly
                  absent.</p>
              </div>
            </li>
            <li class="flex gap-3"><span class="text-brand-pink text-xl">✖</span>
              <div><strong class="text-gray-900">Sustainability challenges</strong>
                <p class="text-sm text-gray-500 leading-relaxed">Low monthly cases + high freelance costs stop growth.
                </p>
              </div>
            </li>
            <li class="flex gap-3"><span class="text-brand-pink text-xl">✖</span>
              <div><strong class="text-gray-900">Handling difficult cases</strong>
                <p class="text-sm text-gray-500 leading-relaxed">Special protocols required for failures, donors &amp;
                  surrogacy.</p>
              </div>
            </li>
            <li class="flex gap-3"><span class="text-brand-pink text-xl">✖</span>
              <div><strong class="text-gray-900">No innovation or management</strong>
                <p class="text-sm text-gray-500 leading-relaxed">Doctor-run setups lack analytics, marketing &amp;
                  R&amp;D.</p>
              </div>
            </li>
          </ul>
        </div>
      </div>
      <section class="grid md:grid-cols-3 gap-6"><template x-for="(item, index) in [
        'Clinical Excellence',
        'Quality &amp; Compliance',
        'Technology &amp; SOPs',
        'Brand &amp; Marketing',
        'Operational Support',
        'Specialised Protocols'
      ]">
          <div
            class="group p-6 bg-white shadow-md border border-gray-100 rounded-2xl backdrop-blur-sm transition-all hover:shadow-pink-200 hover:-translate-y-1 cursor-pointer">
            <h4 class="font-semibold text-gray-900 text-lg group-hover:text-brand-pink transition"><span
                x-text="item"></span></h4>
            <p class="mt-2 text-sm text-gray-600 leading-relaxed" x-show="index === 0">Access to experts, protocols
              &amp; advanced lab practices.</p>
            <p class="mt-2 text-sm text-gray-600 leading-relaxed" x-show="index === 1">ISO workflows, QC systems &amp;
              transparent processes.</p>
            <p class="mt-2 text-sm text-gray-600 leading-relaxed" x-show="index === 2">Monitoring, IVF software &amp;
              dashboard-driven governance.</p>
            <p class="mt-2 text-sm text-gray-600 leading-relaxed" x-show="index === 3">Digital marketing + patient
              financing + brand expansion.</p>
            <p class="mt-2 text-sm text-gray-600 leading-relaxed" x-show="index === 4">Manpower, training, maintenance
              &amp; FOCO model.</p>
            <p class="mt-2 text-sm text-gray-600 leading-relaxed" x-show="index === 5">Protocols for failures, donors
              &amp; complex cases.</p>
          </div>
        </template></section>
      <div
        class="backdrop-blur-md bg-white/70 border border-gray-100 rounded-3xl shadow-lg px-10 py-5 hover:shadow-2xl transition-all duration-300 mt-6">
        <h3 class="text-2xl font-semibold mb-4 text-brand-blue flex items-center gap-2">How India IVF solves these
          problems</h3>
        <div class="grid md:grid-cols-3 gap-6">
          <div class="p-5 border rounded-xl">
            <h4 class="font-semibold text-gray-900">Clinical Excellence</h4>
            <p class="text-sm text-gray-600 mt-2">Access to experts, structured protocols and advanced lab systems.</p>
          </div>
          <div class="p-5 border rounded-xl">
            <h4 class="font-semibold text-gray-900">Quality &amp; Compliance</h4>
            <p class="text-sm text-gray-600 mt-2">i-Womb monitoring, ISO-certified workflows and transparent,
              audit-ready systems.</p>
          </div>
          <div class="p-5 border rounded-xl">
            <h4 class="font-semibold text-gray-900">Technology &amp; SOPs</h4>
            <p class="text-sm text-gray-600 mt-2">Monitoring devices, lab software, SOPs, and regular KPI reviews.</p>
          </div>
          <div class="p-5 border rounded-xl">
            <h4 class="font-semibold text-gray-900">Brand &amp; Marketing</h4>
            <p class="text-sm text-gray-600 mt-2">Digital marketing, patient financing and reputation-building systems.
            </p>
          </div>
          <div class="p-5 border rounded-xl">
            <h4 class="font-semibold text-gray-900">Operational Support</h4>
            <p class="text-sm text-gray-600 mt-2">Manpower, training, maintenance and an optional FOCO model.</p>
          </div>
          <div class="p-5 border rounded-xl">
            <h4 class="font-semibold text-gray-900">Specialised Protocols</h4>
            <p class="text-sm text-gray-600 mt-2">Protocols for failures, donor programs and complex cases recognised
              internationally.</p>
          </div>
        </div>
      </div>
      <div
        class="backdrop-blur-md bg-white/70 border border-gray-100 rounded-3xl shadow-lg px-10 py-5 hover:shadow-2xl transition-all duration-300 mt-6">
        <h3 class="text-2xl font-semibold mb-4 text-brand-blue flex items-center gap-2">India IVF Franchise Models</h3>
        <div class="grid md:grid-cols-2 gap-6">
          <div class="p-5 border rounded-xl">
            <h4 class="font-semibold text-gray-900">FOFO — Franchise Owned, Franchise Operated</h4>
            <p class="text-sm text-gray-600 mt-2">You own and operate the centre with branding, SOPs and clinical
              support from India IVF.</p>
          </div>
          <div class="p-5 border rounded-xl">
            <h4 class="font-semibold text-gray-900">FOCO — Franchise Owned, Company Operated</h4>
            <p class="text-sm text-gray-600 mt-2">You invest and India IVF manages operations end-to-end—ideal for a
              hands-off model.</p>
          </div>
        </div>
      </div>
      <div
        class="backdrop-blur-md bg-white/70 border border-gray-100 rounded-3xl shadow-lg px-10 py-5 hover:shadow-2xl transition-all duration-300 mt-6">
        <h3 class="text-2xl font-semibold mb-4 text-brand-blue flex items-center gap-2">Franchise Requirements &amp;
          Expectations</h3>
        <div class="grid md:grid-cols-2 gap-8">
          <ul class="space-y-4 text-gray-700">
            <li><strong class="text-gray-900">Minimum area:</strong> 2500 sq. ft. (owned/leased)</li>
            <li><strong class="text-gray-900">Investment required:</strong> ₹2 Crore &amp; above</li>
            <li><strong class="text-gray-900">Setup:</strong> Interiors &amp; IVF infrastructure as per MCI + company
              standards</li>
            <li><strong class="text-gray-900">Expected monthly revenue:</strong> ₹70 Lakh – ₹1 Crore</li>
          </ul>
          <p class="text-sm text-gray-600">Open for both medical and non-medical investors. India IVF ensures protocols,
            training, technology, marketing and governance for stable performance.</p>
        </div>
        <div class="grid md:grid-cols-2 gap-6 mt-4">
          <div class="p-5 border rounded-xl">
            <h4 class="font-semibold text-gray-900 mb-2">Franchisee Responsibilities</h4>
            <ol class="list-decimal list-inside text-sm text-gray-600 space-y-1">
              <li>Provide infrastructure as per ICMR + company design.</li>
              <li>Maintain OT, IVF lab &amp; AHU systems.</li>
              <li>Manage rent, local manpower &amp; operational costs.</li>
            </ol>
          </div>
          <div class="p-5 border rounded-xl">
            <h4 class="font-semibold text-gray-900 mb-2">What India IVF Provides</h4>
            <ul class="text-sm text-gray-600 space-y-1">
              <li>Brand, SOPs, QC + training</li>
              <li>Clinical &amp; embryology expertise</li>
              <li>Technology + digital marketing + financing networks</li>
              <li>Ethical governance with KPI tracking</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section
    class="relative bg-gradient-to-b from-pink-50 via-white to-blue-50 rounded-2xl shadow-xl py-12 overflow-hidden">
    <div class="container mx-auto px-6 lg:px-12">
      <div class="text-center mb-10">
        <h2 class="text-3xl md:text-4xl font-extrabold text-gray-800">Complete Franchise Support <span
            class="text-brand-pink">From Day One</span></h2>
        <p class="mt-3 text-gray-600 max-w-2xl mx-auto">We don't just provide a franchise — we build IVF centres that
          deliver clinical excellence and profitable outcomes.</p>
      </div>
      <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-5 text-gray-700 text-sm leading-relaxed font-medium">
        <div class="flex gap-3"><span class="text-pink-600 text-lg">✔</span>Experienced IVF specialists &amp;
          embryologists for all procedures</div>
        <div class="flex gap-3"><span class="text-pink-600 text-lg">✔</span>End-to-end business growth &amp; marketing
          support</div>
        <div class="flex gap-3"><span class="text-pink-600 text-lg">✔</span>Clinical &amp; medical backup support</div>
        <div class="flex gap-3"><span class="text-pink-600 text-lg">✔</span>Recruitment &amp; HR onboarding assistance
        </div>
        <div class="flex gap-3"><span class="text-pink-600 text-lg">✔</span>SOPs, operational guidance &amp; centre
          launch roadmap</div>
        <div class="flex gap-3"><span class="text-pink-600 text-lg">✔</span>Complete centre setup &amp; workflow
          implementation</div>
        <div class="flex gap-3"><span class="text-pink-600 text-lg">✔</span>IT, billing software &amp; CRM setup</div>
        <div class="flex gap-3"><span class="text-pink-600 text-lg">✔</span>Centralised branding, marketing &amp;
          tele-calling support</div>
        <div class="flex gap-3"><span class="text-pink-600 text-lg">✔</span>Specialised knowledge transfer &amp;
          technical know-how</div>
        <div class="flex gap-3"><span class="text-pink-600 text-lg">✔</span>Operational manuals, setup manuals &amp;
          franchise kit</div>
        <div class="flex gap-3"><span class="text-pink-600 text-lg">✔</span>TQM – 24×7 QC support powered by patented
          i-Womb tech</div>
      </div>
      <p class="mt-8 max-w-3xl text-center mx-auto text-gray-700 text-base">Every year thousands of couples silently
        battle infertility. Partner with us and build a centre that gives hope, happiness and parenthood to families who
        need it most.</p>
      <div x-data="{ open: null }" class="mt-12 space-y-4">
        <div class="border rounded-xl overflow-hidden shadow-sm"><button
            class="w-full flex justify-between items-center p-3 text-left font-semibold text-gray-800 hover:bg-gray-50"
            @click="open === 1 ? open = null : open = 1">Business Highlights <span
              :class="open === 1 ? 'rotate-180' : ''" class="transform transition text-gray-600">▼</span></button>
          <div x-show="open === 1" x-collapse="">
            <ul class="p-3 text-gray-600 text-sm space-y-2">
              <li>Exclusive territorial rights — <strong>Yes</strong></li>
              <li>Expected ROI — <strong>70%</strong></li>
              <li>Payback period — <strong>2–4 years</strong></li>
            </ul>
          </div>
        </div>
        <div class="border rounded-xl overflow-hidden shadow-sm"><button
            class="w-full flex justify-between items-center p-3 text-left font-semibold text-gray-800 hover:bg-gray-50"
            @click="open === 2 ? open = null : open = 2">Property Requirements <span
              :class="open === 2 ? 'rotate-180' : ''" class="transform transition text-gray-600">▼</span></button>
          <div x-show="open === 2" x-collapse="">
            <ul class="p-3 text-gray-600 text-sm space-y-2">
              <li>Commercial property</li>
              <li>2500 – 5000 sq. ft.</li>
              <li>Prime urban / densely populated location</li>
            </ul>
          </div>
        </div>
        <div class="border rounded-xl overflow-hidden shadow-sm"><button
            class="w-full flex justify-between items-center p-3 text-left font-semibold text-gray-800 hover:bg-gray-50"
            @click="open === 3 ? open = null : open = 3">Training &amp; Setup <span
              :class="open === 3 ? 'rotate-180' : ''" class="transform transition text-gray-600">▼</span></button>
          <div x-show="open === 3" x-collapse="">
            <ul class="p-3 text-gray-600 text-sm space-y-2">
              <li>Complete operating manuals</li>
              <li>Training at corporate office</li>
              <li>Field assistance provided</li>
              <li>Dedicated expert guidance</li>
              <li>IT systems included</li>
            </ul>
          </div>
        </div>
        <div class="border rounded-xl overflow-hidden shadow-sm"><button
            class="w-full flex justify-between items-center p-3 text-left font-semibold text-gray-800 hover:bg-gray-50"
            @click="open === 4 ? open = null : open = 4">Agreement &amp; Terms <span
              :class="open === 4 ? 'rotate-180' : ''" class="transform transition text-gray-600">▼</span></button>
          <div x-show="open === 4" x-collapse="">
            <ul class="p-3 text-gray-600 text-sm space-y-2">
              <li>Standard franchise agreement — Yes</li>
              <li>Franchise term — 10 years</li>
              <li>Renewable — Yes</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="relative bg-white py-12 overflow-hidden">
    <div class="container mx-auto px-6 lg:px-16 relative z-10">
      <div class="text-center mb-8">
        <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4 leading-tight"><span
            class="text-brand-pink">Franchise Success Stories</span></h2>
      </div>
      <div
        class="flex flex-nowrap overflow-x-auto snap-x snap-mandatory sm:grid sm:grid-cols-2 sm:overflow-visible gap-6 scrollbar-hide pb-4">
        <div
          class="min-w-[80%] sm:min-w-0 snap-start bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-2xl transition duration-300 flex-shrink-0">
          <img
            src="https://media.istockphoto.com/id/1301595548/photo/female-doctor-stock-photo.jpg?b=1&amp;s=612x612&amp;w=0&amp;k=20&amp;c=WIQmfgE58OHntqYo9FmuQMfEplxajHu5P-Nw30gS7cs="
            alt="John Doe" class="w-full h-64 object-cover">
          <div class="p-4 text-center">
            <h3 class="text-xl font-semibold text-gray-800">John Doe</h3>
          </div>
        </div>
        <div
          class="min-w-[80%] sm:min-w-0 snap-start bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-2xl transition duration-300 flex-shrink-0">
          <img
            src="https://media.istockphoto.com/id/1270790502/photo/medical-concept-of-indian-beautiful-female-doctor-with-note-book.jpg?b=1&amp;s=612x612&amp;w=0&amp;k=20&amp;c=JBkrfGirsQLvIrn_IF4OtnaxFmWLN4xLGhzftOlAEJg="
            alt="Dr. Jane Smith" class="w-full h-64 object-cover">
          <div class="p-4 text-center">
            <h3 class="text-xl font-semibold text-gray-800">Jane Smith</h3>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="relative bg-brand-blue text-white py-6 text-center">
    <div class="container mx-auto px-6">
      <h2 class="text-3xl md:text-4xl font-bold mb-3">Start Your Franchise Journey</h2>
      <p class="text-lg mb-4 max-w-2xl mx-auto">Kindly reach us to get fastes response and treatment</p><button
        class="bg-brand-pink text-white px-6 py-3 rounded-full shadow-lg hover:shadow-2xl transition-all duration-500 hover:scale-105 mb-2"><i
          class="fa-solid fa-hand-holding-heart mr-2"></i> Contact Us</button>
    </div>
  </section>
  <section class="relative bg-gradient-to-r from-[#20417e] via-[#3a5594] to-[#778aaf] text-white py-12 overflow-hidden">
    <div class="absolute inset-0"><img src="https://images.pexels.com/photos/2880897/pexels-photo-2880897.jpeg"
        alt="IVF background" class="w-full h-full object-cover opacity-20"></div>
    <div class="container mx-auto relative z-10 px-6 lg:px-16">
      <div class="lg:w-2/3">
        <h2 class="text-3xl md:text-4xl font-bold mb-6 leading-tight">Questions About <span class="text-pink-200">IVF
            and Fertility Treatments</span></h2>
        <p class="text-blue-100 mb-10">Understanding your options is the first step toward hope. Here are some of the
          most common questions our fertility experts answer every day.</p>
        <div class="space-y-5">
          <div x-data="{ open: false }"
            class="bg-white/90 backdrop-blur-md text-gray-800 rounded-xl shadow-lg overflow-hidden"><button
              @click="open = !open"
              class="flex justify-between items-center w-full px-6 py-4 text-left font-semibold hover:bg-pink-50 transition">What
              is IVF and how does it work? <svg xmlns="http://www.w3.org/2000/svg" :class="{'rotate-180': open}"
                class="h-5 w-5 text-pink-500 transform transition-transform duration-300" fill="none"
                viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
              </svg></button>
            <div x-show="open" x-transition="" class="px-6 pb-5 text-gray-700">IVF combines eggs and sperm in a lab to
              create embryos, which are then transferred to the uterus.</div>
          </div>
          <div x-data="{ open: false }"
            class="bg-white/90 backdrop-blur-md text-gray-800 rounded-xl shadow-lg overflow-hidden"><button
              @click="open = !open"
              class="flex justify-between items-center w-full px-6 py-4 text-left font-semibold hover:bg-pink-50 transition">What
              is the success rate of IVF? <svg xmlns="http://www.w3.org/2000/svg" :class="{'rotate-180': open}"
                class="h-5 w-5 text-pink-500 transform transition-transform duration-300" fill="none"
                viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
              </svg></button>
            <div x-show="open" x-transition="" class="px-6 pb-5 text-gray-700">Success rates range between 40–60%
              depending on age, health, and medical conditions.</div>
          </div>
          <div x-data="{ open: false }"
            class="bg-white/90 backdrop-blur-md text-gray-800 rounded-xl shadow-lg overflow-hidden"><button
              @click="open = !open"
              class="flex justify-between items-center w-full px-6 py-4 text-left font-semibold hover:bg-pink-50 transition">Is
              IVF painful or risky? <svg xmlns="http://www.w3.org/2000/svg" :class="{'rotate-180': open}"
                class="h-5 w-5 text-pink-500 transform transition-transform duration-300" fill="none"
                viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
              </svg></button>
            <div x-show="open" x-transition="" class="px-6 pb-5 text-gray-700">IVF is minimally invasive and anesthesia
              ensures the process is comfortable and safe.</div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer=""></script>
@endsection
