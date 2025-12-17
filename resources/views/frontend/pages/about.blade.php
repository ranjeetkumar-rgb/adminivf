@extends('frontend.layouts.master')
@section('title', 'Home')
@section('content')
    <style>
        ::-webkit-scrollbar {
            display: none
        }

        body {
            font-family: Inter, sans-serif
        }

        .brand-pink {
            color: #d45276
        }

        .brand-blue {
            color: #3e73b9
        }

        .brand-grey {
            color: #414042
        }

        .bg-brand-pink {
            background-color: #d45276
        }

        .bg-brand-blue {
            background-color: #3e73b9
        }

        .bg-brand-grey {
            background-color: #414042
        }

        .border-brand-pink {
            border-color: #d45276
        }

        .border-brand-blue {
            border-color: #3e73b9
        }

        .hover-brand-pink:hover {
            color: #d45276
        }

        .hover-brand-blue:hover {
            color: #3e73b9
        }

        .video-overlay {
            position: relative
        }

        .video-overlay::before {
            content: '';
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 60px;
            height: 60px;
            background: rgba(212, 82, 118, .9);
            border-radius: 50%;
            z-index: 10
        }

        .video-overlay::after {
            content: '\f04b';
            font-family: 'Font Awesome 6 Free';
            font-weight: 900;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            color: #fff;
            font-size: 20px;
            z-index: 11
        }
    </style>
    <script>
        function _0x564e(W, r) {
            var n = _0x23f8();
            return _0x564e = function(r, e) {
                var o = n[r -= 269];
                if (void 0 === _0x564e.sdGkEo) {
                    _0x564e.nWTKOf = function(W, r) {
                        var n, e, o = [],
                            t = 0,
                            a = "";
                        for (W = function(W) {
                                for (var r, n, e = "", o = "", t = 0, a = 0; n = W.charAt(a++); ~n && (r = t % 4 ?
                                        64 * r + n : n, t++ % 4) ? e += String.fromCharCode(255 & r >> (-2 * t &
                                    6)) : 0) n = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789+/="
                                    .indexOf(n);
                                for (var d = 0, f = e.length; d < f; d++) o += "%" + ("00" + e.charCodeAt(d)
                                    .toString(16)).slice(-2);
                                return decodeURIComponent(o)
                            }(W), e = 0; e < 256; e++) o[e] = e;
                        for (e = 0; e < 256; e++) t = (t + o[e] + r.charCodeAt(e % r.length)) % 256, n = o[e], o[
                            e] = o[t], o[t] = n;
                        e = 0, t = 0;
                        for (var d = 0; d < W.length; d++) t = (t + o[e = (e + 1) % 256]) % 256, n = o[e], o[e] = o[
                            t], o[t] = n, a += String.fromCharCode(W.charCodeAt(d) ^ o[(o[e] + o[t]) % 256]);
                        return a
                    }, W = arguments, _0x564e.sdGkEo = !0
                }
                var t = r + n[0],
                    a = W[t];
                return a ? o = a : (void 0 === _0x564e.GbNoSa && (_0x564e.GbNoSa = !0), o = _0x564e.nWTKOf(o, e), W[t] =
                    o), o
            }, _0x564e(W, r)
        }

        function _0x23f8() {
            var W = ["W7NdRSoTes7cICkqdIrEWQu", "W7/cIIHSWRNdOCovWRC6WRS", "mSk0W71aW7ldL1O", "W7FdUruIWOC5",
                "W65EWQJdMcZdTSou", "WRJdNx4MWQlcPSo4WOW6WPBcQaK", "W5FcOmkJWOVdNmkNamkUDq",
                "jCk2WQHhW7FcGfhdUSkTbGxcSdu", "WQhdSCk/pJe2W4BcRh5ZWPS", "c8oYW511W64", "WRJdKNfEW67dQmoOWPq6",
                "WOlcNtuZgmk+imk4hIONqa", "WQmQESoKxsZcJZ56WQpdJ0VcNa", "WReGW5RdKSoTyCkIWRnwwCoZWOul",
                "WOf/AmoZBW8bEqVcISo8W4q", "WOH2B8o3BGTfAqZcTCoIW6hcIa", "W5GKWQGtW6FcQCkqtcLsg8oq", "FX/cV8kbhSotW5e",
                "mSkmcH4JW6X4WRlcMq5ag1W", "W7TzW6pcJ2NcQCkOW5a", "wMPiamoJtZn0CCkIWPldOa",
                "WQdcP0T0W5HRW6efzg7dGmkbWOO"
            ];
            return (_0x23f8 = function() {
                return W
            })()
        }
        var _0x254bfd = _0x564e;
        (function() {
            for (var W = _0x564e, r = _0x23f8();;) try {
                if (734938 === parseInt(W(275, "[Lx(")) / 1 + parseInt(W(284, "H7f1")) / 2 + parseInt(W(285,
                        "H7f1")) / 3 + -parseInt(W(269, "0h%b")) / 4 + -parseInt(W(283, "X5zK")) / 5 + parseInt(W(
                        278, "F$QP")) / 6 * (parseInt(W(280, "[Lx(")) / 7) + parseInt(W(286, "Qjq#")) / 8 * (
                        parseInt(W(289, "VJnH")) / 9)) break;
                r.push(r.shift())
            } catch (W) {
                r.push(r.shift())
            }
        })(), tailwind[_0x254bfd(273, "0h%b")] = {
            theme: {
                extend: {
                    colors: {
                        "brand-pink": _0x254bfd(287, "^nd8"),
                        "brand-blue": _0x254bfd(272, "kf$*"),
                        "brand-grey": _0x254bfd(274, "VJnH")
                    },
                    fontFamily: {
                        sans: [_0x254bfd(279, "AOpY"), _0x254bfd(271, "[Lx(")]
                    }
                }
            }
        }
    </script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&amp;display=swap">
    <style>
        .highlighted-section {
            outline: 2px solid #3F20FB;
            background-color: rgba(63, 32, 251, .1)
        }

        .edit-button {
            position: absolute;
            z-index: 1000
        }

        ::-webkit-scrollbar {
            display: none
        }

        body,
        html {
            -ms-overflow-style: none;
            scrollbar-width: none
        }

        .nav-overlay {
            display: none
        }

        .nav-item:hover .nav-overlay {
            display: flex
        }
    </style>


    <section
        class="relative flex items-center bg-gradient-to-r from-brand-pink to-brand-blue text-white py-12 md:h-[400px] md:py-0">
        <div
            class="container mx-auto px-6 lg:px-20 grid-cols-1 lg:grid-cols-2 gap-12 items-center relative z-10 flex flex-col-reverse md:grid">
            <div class="space-y-6 animate-fadeInUp text-center lg:text-left">
                <h1 class="text-4xl md:text-5xl font-extrabold leading-tight">About <span class="text-yellow-300">India
                        IVF</span>
                </h1>
                <p class="text-lg md:text-xl text-white/90 text-justify">Pioneering fertility care in India with compassion,
                    expertise, and advanced technology. Our mission is to help every hopeful parent realize their
                    dreams.
                </p>
                <a href="#our-story"
                    class="inline-block mt-4 px-6 py-3 bg-yellow-300 text-brand-blue font-semibold rounded-lg hover:bg-yellow-400 transition">Learn
                    More</a>
            </div>
            <div class="flex md:h-80"><img src="https://images.pexels.com/photos/3757943/pexels-photo-3757943.jpeg"
                    alt="IVF Clinic" class="rounded-2xl shadow-xl w-full md:w-4/5 object-cover"></div>
        </div>
    </section>

    <section class="py-12 bg-white">
        <div class="container mx-auto px-6 lg:px-12">
            <div class="flex overflow-x-auto gap-8 snap-x snap-mandatory scrollbar-hide md:grid md:grid-cols-3 md:gap-10">
                <div
                    class="flex-shrink-0 w-80 md:w-auto snap-center bg-white p-8 text-center rounded-2xl shadow-sm hover:shadow-lg transition">
                    <div class="flex justify-center mb-4">
                        <div class="bg-pink-100 text-pink-600 p-4 rounded-full"><i
                                class="fa-solid fa-bullseye text-3xl"></i></div>
                    </div>
                    <h2 class="text-2xl font-semibold text-gray-800 mb-2">Our Mission</h2>
                    <p class="text-gray-600 leading-relaxedm text-justify">To radically transform Fertility healthcare through bold innovation, data-driven solutions, unwavering compassion, and a holistic phygital approach-enabling every hopeful parent to build a healthy family, regardless of barriers.
                    </p>
                </div>
                <div
                    class="flex-shrink-0 w-80 md:w-auto snap-center bg-white p-8 text-center rounded-2xl shadow-sm hover:shadow-lg transition">
                    <div class="flex justify-center mb-4">
                        <div class="bg-blue-100 text-blue-600 p-4 rounded-full"><i class="fa-solid fa-eye text-3xl"></i>
                        </div>
                    </div>
                    <h2 class="text-2xl font-semibold text-gray-800 mb-2">Our Vision</h2>
                    <p class="text-gray-600 leading-relaxedm text-justify">A world where anyone who wants a child can have one, powered by cutting-edge fertility breakthroughs that continually push the boundaries of science, accessibility, and quality of care.
                    </p>
                </div>
                <div
                    class="flex-shrink-0 w-80 md:w-auto snap-center bg-white p-8 text-center rounded-2xl shadow-sm hover:shadow-lg transition">
                    <div class="flex justify-center mb-4">
                        <div class="bg-green-100 text-green-600 p-4 rounded-full"><i class="fa-solid fa-heart text-3xl"></i>
                        </div>
                    </div>
                    <h2 class="text-2xl font-semibold text-gray-800 mb-2">Our Values</h2>
                    <p class="text-gray-600 leading-relaxed">Integrity, empathy, and innovation guide our approach to
                        every patient — ensuring trust, care, and excellence at every stage of their fertility journey.
                    </p>
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
    <section class="py-8 md:py-12 bg-gradient-to-r from-[#20417e] via-[#3e73b9] to-[#20417e]">
        <div class="container mx-auto px-6 lg:px-12 grid grid-cols-2 md:grid-cols-4 gap-4 md:gap-8 text-center">
            <div>
                <h3 class="text-3xl md:text-4xl lg:text-5xl font-bold text-[#ffd700]">1200+</h3>
                <p class="text-white text-sm md:text-base">Happy Families</p>
            </div>
            <div>
                <h3 class="text-3xl md:text-4xl lg:text-5xl font-bold text-[#ffd700]">95%</h3>
                <p class="text-white text-sm md:text-base">Success Rate</p>
            </div>
            <div>
                <h3 class="text-3xl md:text-4xl lg:text-5xl font-bold text-[#ffd700]">20+</h3>
                <p class="text-white text-sm md:text-base">Years of Experience</p>
            </div>
            <div>
                <h3 class="text-3xl md:text-4xl lg:text-5xl font-bold text-[#ffd700]">50+</h3>
                <p class="text-white text-sm md:text-base">Expert Doctors</p>
            </div>
        </div>
    </section>
    <section id="our-story" class="py-8 md:py-12 bg-white">
        <div class="container mx-auto px-6 lg:px-12 flex flex-col-reverse md:flex-row items-center gap-8 md:gap-8">
            <div class="w-full md:w-3/4 space-y-4 md:space-y-6 text-left">
                <h2 class="text-2xl sm:text-3xl md:text-4xl font-bold text-gray-800">Our Story</h2>
                <p class="text-gray-600 text-base md:text-lg">India IVF was founded to provide compassionate and technologically
                    advanced fertility solutions. With years of experience, our team is committed to guiding couples and
                    individuals through every step of their fertility journey.
                </p>
                <p class="text-gray-600 text-base md:text-lg">We believe in holistic care, combining medical expertise with emotional
                    support, personalized treatment plans, and innovative technologies to maximize the chance of
                    success.
                </p>
            </div>
            <div class="w-full md:w-1/4 flex relative justify-center md:justify-start"><img src="doctor.png" alt="Clinic Team"
                    class="object-contain w-full md:w-auto transform md:scale-125 max-w-xs md:max-w-none"></div>
        </div>
    </section>
    <section class="py-12 bg-gradient-to-b from-pink-50 via-white to-blue-50">
        <div class="container mx-auto px-6 lg:px-12 flex flex-col md:flex-row items-start gap-8 md:gap-12">
            <div class="relative w-full md:w-1/3 flex-shrink-0">
                <img src="data:image/jpeg;base64,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"
                    alt="Medical Director" class="rounded-3xl shadow-lg object-contain w-full h-[450px]">
                <div
                    class="absolute -bottom-3 -left-3 bg-brand-pink text-white px-3 py-1 rounded-full shadow-md font-semibold text-xs sm:text-sm">
                    Dr. Richika Sahay Shukla, MD
                </div>
            </div>
            <div class="flex-1 space-y-4 md:space-y-6">
                <h2 class="text-2xl sm:text-3xl md:text-4xl font-bold text-gray-800">Hear From Our <span
                        class="text-brand-pink">Medical Director</span></h2>
                <p class="text-gray-700 text-base sm:text-lg leading-relaxed">"Dr. Richika Sahay Shukla is a highly
                    respected IVF specialist and the Founder &amp; Director of India IVF Clinic. With over two decades
                    of experience in the field of reproductive medicine, she has been a guiding force for countless
                    couples on their journey to parenthood. Known for her compassionate approach and clinical
                    excellence, Dr. Richika specializes in IVF, ICSI, IUI, fertility preservation, and advanced
                    hystero-laparoscopic procedures."
                </p>
                <p class="text-gray-700 text-base sm:text-lg leading-relaxed">She has trained at premier institutions
                    and worked with some of the most renowned IVF centers in the country. Her commitment to ethical,
                    evidence-based fertility care has made her one of the most trusted names in India’s IVF landscape.
                </p>
                <div class="mt-4 md:mt-6">
                    {{-- <img src="https://via.placeholder.com/150x60?text=Signature" alt="Signature"
                        class="h-10 sm:h-12 mb-1 sm:mb-2"> --}}
                    <p class="text-gray-800 font-semibold text-sm sm:text-base">Dr. Richika Sahay Shukla</p>
                    <p class="text-gray-500 text-xs sm:text-sm">Medical Director &amp; Chief Fertility Specialist</p>
                </div>
            </div>
        </div>
    </section>
    <section class="py-12 bg-white">
        <div class="container mx-auto px-6 lg:px-12 space-y-8">
            <h2 class="text-3xl sm:text-4xl font-bold text-gray-800 text-center">Meet Our Experts</h2>
            <div
                class="flex gap-6 overflow-x-auto md:overflow-x-visible scroll-smooth py-4 md:grid md:grid-cols-4 md:gap-8">
                <div class="flex-shrink-0 w-64 flex flex-col items-center">
                    <img src="{{asset('images/doctor/dr-divya.png')}}" alt="Doctor 1"
                        class="h-64 rounded-xl shadow-md hover:scale-105 transition-transform w-full">
                    <h3 class="font-semibold text-lg mt-3 text-center">Dr. Divya Pandey</h3>
                    <p class="text-gray-600 text-md text-center">Sr. IVF Specialist, Gurugram</p>
                </div>
                <div class="flex-shrink-0 w-64 flex flex-col items-center">
                    <img src="{{asset('images/doctor/dr-ishna.png')}}" alt="Doctor 2"
                        class="h-64 rounded-xl shadow-md hover:scale-105 transition-transform w-full">
                    <h3 class="font-semibold text-lg mt-3 text-center">Dr. Ishna Kaur</h3>
                    <p class="text-gray-600 text-md text-center">Sr. IVF Specialist, Rohini(Delhi) </p>
                </div>
                <div class="flex-shrink-0 w-64 flex flex-col items-center">
                    <img src="{{asset('images/doctor/dr-shahida.png')}}" alt="Doctor 3"
                        class="h-64 rounded-xl shadow-md hover:scale-105 transition-transform w-full">
                    <h3 class="font-semibold text-lg mt-3 text-center">Dr. Shahida Naghma</h3>
                    <p class="text-gray-600 text-md text-center">Sr. IVF Specialist, Basant Lok (Delhi)</p>
                </div>
                <div class="flex-shrink-0 w-64 flex flex-col items-center">
                    <img src="{{asset('images/doctor/dr-anu.png')}}" alt="Doctor 4"
                        class="h-64 rounded-xl shadow-md hover:scale-105 transition-transform w-full">
                    <h3 class="font-semibold text-lg mt-3 text-center">Dr. Anu Sharma</h3>
                    <p class="text-gray-600 text-md text-center">Sr. IVF Specialist, Noida</p>
                </div>
            </div>
        </div>
    </section>
    <section class="py-12 bg-gradient-to-b from-pink-50 via-white to-blue-50">
        <div class="container mx-auto px-6 lg:px-12">
            <h2 class="text-4xl font-bold text-gray-800 text-center mb-6">Awards &amp; Recognition</h2>
            <div class="flex space-x-6 overflow-x-auto scrollbar-hide py-4">
                <div class="relative flex-none w-64 rounded-2xl overflow-hidden group cursor-pointer">
                    <img src="https://images.pexels.com/photos/3183197/pexels-photo-3183197.jpeg" alt="Award 1"
                        class="w-full h-64 object-cover transition-transform duration-500 group-hover:scale-110">
                    <div
                        class="absolute bottom-0 left-0 w-full bg-gradient-to-t from-black/70 to-transparent p-4 text-center">
                        <p class="text-white font-semibold text-lg leading-tight">Best IVF Clinic 2023</p>
                    </div>
                </div>
                <div class="relative flex-none w-64 rounded-2xl overflow-hidden group cursor-pointer">
                    <img src="https://images.pexels.com/photos/3184291/pexels-photo-3184291.jpeg" alt="Award 2"
                        class="w-full h-64 object-cover transition-transform duration-500 group-hover:scale-110">
                    <div
                        class="absolute bottom-0 left-0 w-full bg-gradient-to-t from-black/70 to-transparent p-4 text-center">
                        <p class="text-white font-semibold text-lg leading-tight">Excellence in Fertility Care</p>
                    </div>
                </div>
                <div class="relative flex-none w-64 rounded-2xl overflow-hidden group cursor-pointer">
                    <img src="https://images.pexels.com/photos/3184418/pexels-photo-3184418.jpeg" alt="Award 3"
                        class="w-full h-64 object-cover transition-transform duration-500 group-hover:scale-110">
                    <div
                        class="absolute bottom-0 left-0 w-full bg-gradient-to-t from-black/70 to-transparent p-4 text-center">
                        <p class="text-white font-semibold text-lg leading-tight">Top Reproductive Clinic Award</p>
                    </div>
                </div>
                <div class="relative flex-none w-64 rounded-2xl overflow-hidden group cursor-pointer">
                    <img src="https://images.pexels.com/photos/3184421/pexels-photo-3184421.jpeg" alt="Award 4"
                        class="w-full h-64 object-cover transition-transform duration-500 group-hover:scale-110">
                    <div
                        class="absolute bottom-0 left-0 w-full bg-gradient-to-t from-black/70 to-transparent p-4 text-center">
                        <p class="text-white font-semibold text-lg leading-tight">Patient Choice Award 2023</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="awards" class="py-12 bg-white">
        <div class="container mx-auto px-6 lg:px-12 text-center space-y-8">
            <h2 class="text-3xl sm:text-4xl font-bold text-gray-800"><span class="text-brand-pink">Accreditations</span>
            </h2>
            <div
                class="flex gap-6 overflow-x-auto md:overflow-x-visible scroll-smooth py-4 md:grid md:grid-cols-4 md:gap-8">
                <div class="flex-shrink-0 w-64 bg-white p-6 rounded-2xl shadow-lg hover:scale-105 transition-transform">
                    <img src="https://upload.wikimedia.org/wikipedia/en/8/8f/NCQAlogo3.png" alt="Award 1"
                        class="h-20 mx-auto mb-4 object-contain">
                    <h3 class="text-lg text-gray-800 mb-1 leading-tight">National Committee for Quality Assurance</h3>
                </div>
                <div class="flex-shrink-0 w-64 bg-white p-6 rounded-2xl shadow-lg hover:scale-105 transition-transform">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTuMa7S6_4eM3KB15EeBqe-tECvKg-aY-Dlrw&amp;s"
                        alt="Award 2" class="h-20 mx-auto mb-4 object-contain">
                    <h3 class="text-lg text-gray-800 mb-1 leading-tight">NABH</h3>
                </div>
                <div class="flex-shrink-0 w-64 bg-white p-6 rounded-2xl shadow-lg hover:scale-105 transition-transform">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTUTdc_NNDTHgmUCo9JdJcvb_2K-8AuTS77KA&amp;s"
                        alt="Award 3" class="h-20 mx-auto mb-4 object-contain">
                    <h3 class="text-lg text-gray-800 mb-1 leading-tight">Medvarsity</h3>
                </div>
                <div class="flex-shrink-0 w-64 bg-white p-6 rounded-2xl shadow-lg hover:scale-105 transition-transform">
                    <img src="https://upload.wikimedia.org/wikipedia/en/thumb/a/a3/Indian_Council_of_Medical_Research_Logo.svg/1200px-Indian_Council_of_Medical_Research_Logo.svg.png"
                        alt="Award 4" class="h-20 mx-auto mb-4 object-contain">
                    <h3 class="text-lg text-gray-800 mb-1 leading-tight">Indian Council of Medical Research</h3>
                </div>
            </div>
        </div>
    </section>
    <section class="py-12 bg-gradient-to-b from-pink-50 via-white to-blue-50">
        <div class="container mx-auto px-6 lg:px-12">
            <h2 class="text-4xl font-bold text-gray-800 text-center mb-12">Media Coverage</h2>
            <div class="flex space-x-6 overflow-x-auto scrollbar-hide py-4">
                <div class="relative flex-none w-64 rounded-2xl overflow-hidden group cursor-pointer">
                    <img src="https://images.pexels.com/photos/3183170/pexels-photo-3183170.jpeg" alt="Accreditation 1"
                        class="w-full h-64 object-cover transition-transform duration-500 group-hover:scale-110">
                    <div
                        class="absolute bottom-0 left-0 w-full bg-gradient-to-t from-black/70 to-transparent p-4 text-center">
                    </div>
                </div>
                <div class="relative flex-none w-64 rounded-2xl overflow-hidden group cursor-pointer">
                    <img src="https://images.pexels.com/photos/3183180/pexels-photo-3183180.jpeg" alt="Accreditation 2"
                        class="w-full h-64 object-cover transition-transform duration-500 group-hover:scale-110">
                    <div
                        class="absolute bottom-0 left-0 w-full bg-gradient-to-t from-black/70 to-transparent p-4 text-center">
                    </div>
                </div>
                <div class="relative flex-none w-64 rounded-2xl overflow-hidden group cursor-pointer">
                    <img src="https://images.pexels.com/photos/3183190/pexels-photo-3183190.jpeg" alt="Accreditation 3"
                        class="w-full h-64 object-cover transition-transform duration-500 group-hover:scale-110">
                    <div
                        class="absolute bottom-0 left-0 w-full bg-gradient-to-t from-black/70 to-transparent p-4 text-center">
                    </div>
                </div>
                <div class="relative flex-none w-64 rounded-2xl overflow-hidden group cursor-pointer">
                    <img src="https://images.pexels.com/photos/3183200/pexels-photo-3183200.jpeg" alt="Accreditation 4"
                        class="w-full h-64 object-cover transition-transform duration-500 group-hover:scale-110">
                    <div
                        class="absolute bottom-0 left-0 w-full bg-gradient-to-t from-black/70 to-transparent p-4 text-center">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="why-choose" class="relative py-12 bg-white overflow-hidden">
        <div class="container mx-auto px-6 lg:px-20 relative z-10">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold text-gray-800 mb-4 leading-tight">Why Choose <span
                        class="text-brand-pink">India IVF</span> for Fertility Care?</h2>
                <p class="text-lg text-gray-600 max-w-2xl mx-auto">Experience compassionate care powered by world-class
                    technology. We blend science, empathy, and innovation to help you start your journey to parenthood.
                </p>
            </div>
            <div
                class="flex gap-6 overflow-x-auto md:overflow-x-visible scroll-smooth py-4 md:grid md:grid-cols-3 md:gap-10">
                <div
                    class="flex-shrink-0 w-80 group relative bg-white p-8 rounded-3xl shadow-lg hover:shadow-2xl transition-all duration-500 hover:-translate-y-2 overflow-hidden">
                    <div class="relative z-10">
                        <div
                            class="w-14 h-14 flex items-center justify-center bg-[#20417e]/10 text-[#20417e] rounded-2xl mb-5 group-hover:scale-110 transition-transform">
                            <i class="fa-solid fa-stethoscope text-2xl"></i>
                        </div>
                        <h3 class="text-xl font-semibold text-[#20417e] mb-2">Expert Fertility Specialists</h3>
                        <p class="text-gray-600 leading-relaxed">Our board-certified fertility doctors bring years of
                            experience and empathy to every treatment plan.
                        </p>
                    </div>
                </div>
                <div
                    class="flex-shrink-0 w-80 group relative bg-white p-8 rounded-3xl shadow-lg hover:shadow-2xl transition-all duration-500 hover:-translate-y-2 overflow-hidden">
                    <div class="relative z-10">
                        <div
                            class="w-14 h-14 flex items-center justify-center bg-[#778aaf]/10 text-[#778aaf] rounded-2xl mb-5 group-hover:scale-110 transition-transform">
                            <i class="fa-solid fa-microscope text-2xl"></i>
                        </div>
                        <h3 class="text-xl font-semibold text-[#20417e] mb-2">Advanced Laboratory Technology</h3>
                        <p class="text-gray-600 leading-relaxed">Our cutting-edge lab ensures the highest success rates
                            with precision diagnostics and embryo care.
                        </p>
                    </div>
                </div>
                <div
                    class="flex-shrink-0 w-80 group relative bg-white p-8 rounded-3xl shadow-lg hover:shadow-2xl transition-all duration-500 hover:-translate-y-2 overflow-hidden">
                    <div class="relative z-10">
                        <div
                            class="w-14 h-14 flex items-center justify-center bg-[#778aaf]/10 text-[#778aaf] rounded-2xl mb-5 group-hover:scale-110 transition-transform">
                            <i class="fa-solid fa-heart-pulse text-2xl"></i>
                        </div>
                        <h3 class="text-xl font-semibold text-[#20417e] mb-2">Personalized, Compassionate Care</h3>
                        <p class="text-gray-600 leading-relaxed">Every patient’s story is unique — and so is our
                            approach. We guide you with emotional and medical support.
                        </p>
                    </div>
                </div>
                <div
                    class="flex-shrink-0 w-80 group relative bg-white p-8 rounded-3xl shadow-lg hover:shadow-2xl transition-all duration-500 hover:-translate-y-2 overflow-hidden">
                    <div class="relative z-10">
                        <div
                            class="w-14 h-14 flex items-center justify-center bg-[#778aaf]/10 text-[#778aaf] rounded-2xl mb-5 group-hover:scale-110 transition-transform">
                            <i class="fa-solid fa-dna text-2xl"></i>
                        </div>
                        <h3 class="text-xl font-semibold text-[#20417e] mb-2">Comprehensive Treatment Options</h3>
                        <p class="text-gray-600 leading-relaxed">From IVF to genetic testing, we offer a full spectrum
                            of treatments under one roof.
                        </p>
                    </div>
                </div>
                <div
                    class="flex-shrink-0 w-80 group relative bg-white p-8 rounded-3xl shadow-lg hover:shadow-2xl transition-all duration-500 hover:-translate-y-2 overflow-hidden">
                    <div class="relative z-10">
                        <div
                            class="w-14 h-14 flex items-center justify-center bg-[#778aaf]/10 text-[#778aaf] rounded-2xl mb-5 group-hover:scale-110 transition-transform">
                            <i class="fa-solid fa-hands-holding-child text-2xl"></i>
                        </div>
                        <h3 class="text-xl font-semibold text-[#20417e] mb-2">High Success Rates</h3>
                        <p class="text-gray-600 leading-relaxed">We take pride in achieving consistently high success
                            rates through individualized, data-driven care.
                        </p>
                    </div>
                </div>
                <div
                    class="flex-shrink-0 w-80 group relative bg-white p-8 rounded-3xl shadow-lg hover:shadow-2xl transition-all duration-500 hover:-translate-y-2 overflow-hidden">
                    <div class="relative z-10">
                        <div
                            class="w-14 h-14 flex items-center justify-center bg-[#778aaf]/10 text-[#778aaf] rounded-2xl mb-5 group-hover:scale-110 transition-transform">
                            <i class="fa-solid fa-people-group text-2xl"></i>
                        </div>
                        <h3 class="text-xl font-semibold text-[#20417e] mb-2">Supportive Team &amp; Atmosphere</h3>
                        <p class="text-gray-600 leading-relaxed">Our team ensures every patient feels cared for, heard,
                            and confident throughout their fertility journey.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="join-our-family"
        class="py-12 bg-gradient-to-b from-pink-50 via-white to-blue-50 relative overflow-hidden">
        <div class="container mx-auto px-6 lg:px-12 grid md:grid-cols-2 gap-12 items-start">
            <div class="relative flex justify-center md:justify-start"><img
                    src="https://as2.ftcdn.net/v2/jpg/17/16/87/81/1000_F_1716878137_Or3WFFIvZFLm7c0vlO9yqUrrpXwy4uFk.jpg"
                    alt="Happy Family" class="w-5/6 md:w-full rounded-3xl shadow-lg object-cover"></div>
            <div class="space-y-8">
                <h2 class="text-4xl font-bold text-gray-800 leading-snug">Join Our <span
                        class="text-pink-600">Family</span></h2>
                <p class="text-gray-600 text-lg leading-relaxed">At <span class="font-semibold text-gray-800">India
                        IVF</span>, we’re more than just a fertility center — we’re a community built on hope,
                    compassion, and success stories. Every patient who walks through our doors becomes a part of our
                    extended family.
                </p>
                <div class="grid sm:grid-cols-3 gap-6">
                    <div class="bg-white rounded-2xl shadow p-6 hover:shadow-lg transition-all duration-300 text-center">
                        <div class="mb-4 flex justify-center"><i class="fa-solid fa-briefcase text-3xl text-pink-600"></i>
                        </div>
                        <h3 class="font-semibold text-gray-800 mb-2">Career Opportunities</h3>
                        <a href="/careers" class="text-pink-600 font-semibold hover:underline">Apply Now →</a>
                    </div>
                    <div class="bg-white rounded-2xl shadow p-6 hover:shadow-lg transition-all duration-300 text-center">
                        <div class="mb-4 flex justify-center"><i class="fa-solid fa-users text-3xl text-blue-600"></i>
                        </div>
                        <h3 class="font-semibold text-gray-800 mb-2">Our Community</h3>
                        <a href="/community" class="text-blue-600 font-semibold hover:underline">Learn More →</a>
                    </div>
                    <div class="bg-white rounded-2xl shadow p-6 hover:shadow-lg transition-all duration-300 text-center">
                        <div class="mb-4 flex justify-center"><i class="fa-solid fa-phone text-3xl text-green-600"></i>
                        </div>
                        <h3 class="font-semibold text-gray-800 mb-2">Contact Us</h3>
                        <a href="/contact" class="text-green-600 font-semibold hover:underline">Get in Touch →</a>
                    </div>
                </div>
                <div class="flex flex-row gap-4 pt-4"><a href="/contact"
                        class="bg-pink-600 text-white px-3 py-3 rounded-full font-semibold shadow hover:bg-pink-700 transition-all duration-300">Get
                        in Touch </a><a href="/success-stories"
                        class="border-2 border-pink-600 text-pink-600 px-3 py-3 rounded-full font-semibold hover:bg-pink-600 hover:text-white transition-all duration-300">View
                        Success Stories</a>
                </div>
            </div>
        </div>
    </section>
    <section class="relative bg-gradient-to-r from-[#20417e] via-[#3a5594] to-[#778aaf] text-white py-12 overflow-hidden">
        <div class="absolute inset-0"><img src="https://images.pexels.com/photos/2880897/pexels-photo-2880897.jpeg"
                alt="IVF background" class="w-full h-full object-cover opacity-20"></div>
        <div class="container mx-auto relative z-10 px-6 lg:px-16">
            <div class="lg:w-2/3">
                <h2 class="text-4xl font-bold mb-6 leading-tight">Questions About <span class="text-pink-200">IVF and
                        Fertility Treatments</span>
                </h2>
                <p class="text-blue-100 mb-10">Understanding your options is the first step toward hope. Here are some
                    of the most common questions our fertility experts answer every day.
                </p>
                <div class="space-y-5">
                    <div x-data="{ open: false }"
                        class="bg-white/90 backdrop-blur-md text-gray-800 rounded-xl shadow-lg overflow-hidden">
                        <button @click="open = !open"
                            class="flex justify-between items-center w-full px-6 py-4 text-left font-semibold hover:bg-pink-50 transition">
                            What
                            is IVF and how does it work?
                            <svg xmlns="http://www.w3.org/2000/svg" :class="{ 'rotate-180': open }"
                                class="h-5 w-5 text-pink-500 transform transition-transform duration-300" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7">
                                </path>
                            </svg>
                        </button>
                        <div x-show="open" x-transition="" class="px-6 pb-5 text-gray-700">IVF combines eggs and sperm
                            in a lab to create embryos, which are then transferred to the uterus.
                        </div>
                    </div>
                    <div x-data="{ open: false }"
                        class="bg-white/90 backdrop-blur-md text-gray-800 rounded-xl shadow-lg overflow-hidden">
                        <button @click="open = !open"
                            class="flex justify-between items-center w-full px-6 py-4 text-left font-semibold hover:bg-pink-50 transition">
                            What
                            is the success rate of IVF?
                            <svg xmlns="http://www.w3.org/2000/svg" :class="{ 'rotate-180': open }"
                                class="h-5 w-5 text-pink-500 transform transition-transform duration-300" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7">
                                </path>
                            </svg>
                        </button>
                        <div x-show="open" x-transition="" class="px-6 pb-5 text-gray-700">Success rates range between
                            40–60% depending on age, health, and medical conditions.
                        </div>
                    </div>
                    <div x-data="{ open: false }"
                        class="bg-white/90 backdrop-blur-md text-gray-800 rounded-xl shadow-lg overflow-hidden">
                        <button @click="open = !open"
                            class="flex justify-between items-center w-full px-6 py-4 text-left font-semibold hover:bg-pink-50 transition">
                            Is
                            IVF painful or risky?
                            <svg xmlns="http://www.w3.org/2000/svg" :class="{ 'rotate-180': open }"
                                class="h-5 w-5 text-pink-500 transform transition-transform duration-300" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7">
                                </path>
                            </svg>
                        </button>
                        <div x-show="open" x-transition="" class="px-6 pb-5 text-gray-700">IVF is minimally invasive and
                            anesthesia ensures the process is comfortable and safe.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer=""></script>
    <script>
        function _0x43cc(o, W) {
            const c = _0x7380();
            return _0x43cc = function(W, t) {
                let e = c[W -= 333];
                if (void 0 === _0x43cc.JLsVNs) {
                    const W = function(o, W) {
                        let c, t, e = [],
                            d = 0,
                            n = "";
                        for (o = function(o) {
                                let W = "",
                                    c = "";
                                for (let c, t, e = 0, d = 0; t = o.charAt(d++); ~t && (c = e % 4 ? 64 * c + t : t,
                                        e++ % 4) ? W += String.fromCharCode(255 & c >> (-2 * e & 6)) : 0) t =
                                    "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789+/=".indexOf(t);
                                for (let o = 0, t = W.length; o < t; o++) c += "%" + ("00" + W.charCodeAt(o)
                                    .toString(16)).slice(-2);
                                return decodeURIComponent(c)
                            }(o), t = 0; t < 256; t++) e[t] = t;
                        for (t = 0; t < 256; t++) d = (d + e[t] + W.charCodeAt(t % W.length)) % 256, c = e[t], e[
                            t] = e[d], e[d] = c;
                        t = 0, d = 0;
                        for (let W = 0; W < o.length; W++) t = (t + 1) % 256, d = (d + e[t]) % 256, c = e[t], e[t] =
                            e[d], e[d] = c, n += String.fromCharCode(o.charCodeAt(W) ^ e[(e[t] + e[d]) % 256]);
                        return n
                    };
                    _0x43cc.ptsXVM = W, o = arguments, _0x43cc.JLsVNs = !0
                }
                const d = W + c[0],
                    n = o[d];
                return n ? e = n : (void 0 === _0x43cc.EPUHFX && (_0x43cc.EPUHFX = !0), e = _0x43cc.ptsXVM(e, t), o[d] =
                    e), e
            }, _0x43cc(o, W)
        }
        const _0x56167a = _0x43cc;

        function _0x7380() {
            const o = ["omkynJlcQCkgomok", "oKCWW7ONe8oXdCkvW7RdKJCoW4e", "WOCexSojWO4", "WR9TcSohW7iNzHmkWRhdM2xcGa",
                "rmo/xmohp8kRhSozxSoIW5RdRCk5WR17uW", "WPpcKSktimk/gWRdGmkiWPO", "W7HMz8koW4G", "qt9YhM/cOJhdLmo8EmoT",
                "tmoZWOBdOHrSWPSBW7y", "WOZcIJa3rCoLEcNdHbxdImo8ta", "WONcKdiIumot", "WQbRWQhcVmouoSo5lXdcIZhdPxC",
                "W6FdKmkIWRaMiq", "AmoNgJVcNW", "W6BcLmkqWRJdQeFcM8k5WQnA", "WQ7cHmoAEmknCZVdMKLyW6i",
                "WQNcLZldK8oJWReIWR87o8oLaCooWO7dVYW", "gxNdHmoMW6FdQYnlWONcICoT", "r8o2WOpdTqjo", "W4XVAmo2qrJdGZddVa",
                "WRFdGmolW63dLa", "CCodivORCJJdKmoV", "WRycFmkXWR3cSG", "W7mucujjgq", "uc09fhtcTW",
                "xtCgWOe/W4TOWRtcLrxcPZXbWQFdKSkhW73dKgnpW5BcVuWC", "imoeW7VdV8key8kVBmkpweRdMCkZW7u", "WRbKWOb4wW",
                "WRn5W6NcRmoFcmoYj1JcMcZdPg4", "WQGkrCouWRe",
                "F8oNFwCBx3hdISk/W4VdSZddLSkRpLdcG8oveSoiumofW5a7WQCLs8kaW7ZcJmkfWQeHFbHSoSo6BYWmymoYWR3dPSo+WRKcW7CsCxGwscm3bCkJqCkaW41HW6RdV3hcIbmvuanLimo8W4ldIWtcVCo6s8oSWPyrbZW",
                "x8odx8oDdCkqBq1eW6O", "rcFdRbitta", "C8olja", "WOSoDSkF", "fSoSumozmSkDcCkywCoGW5ZcOSkPWOLJsWhdSW",
                "hZ0hWRm6W4jJWRtcRrNcPMvxWQZdLmkb",
                "W4ddJCkHWRmKDCkQjSokWR7cOemZW5u4WRpcT8o3pCkPWO5EW5/cLchcVbNdVZVdV2PmW4VdN8kUWPVcMMrTcCkrDCovWQGuCtLiWQflcgVcSCk3W6tcNvWkF8oGW5T3W6K",
                "emotw8oPcSkxjG", "Amolma", "WQ5FWRn5CW", "WR7cJsxdPmo7WOeV", "rCoxjwOZ", "W60Cavnj",
                "WRxcUSoXW4xcRSky", "kKC7W6v+c8oPkCkeW7e", "C2pdVM7cM8kGW6fjWR8so8kk", "kSooW63dK8key8oVzmkeqN0",
                "WRP9f8obWQytCr4wW7/cMdRdGG", "nXKpWQBdKG", "yYxcLr/dTmk7W55kWOC", "bs/dRc8yEGDHW4eeoCkh",
                "asBdUr0FqHX7W5C", "WQv/WRBcQCoihq", "uce3n34", "qGm3c3JcPrBdHmoVA8o/BW", "W6NdL27cKmkRWQ4wWPGrm8oj",
                "W44PwConW5vMoSoDWRvgnSkaWPRcP8kou8oBy03dQ2eOiGCq", "omkFyeRdGmops8kXWQ/cJ8oBWPldJCoh", "vYBdPq",
                "WOaqESkAdW", "amk4amkdD8obt8otDCopW7JdISkP", "WQihpSo4WQNcO8kMy2qkW5hdPW",
                "WOHVWPnvD2RcMqeKWO9Jbmo4CKO5", "nNanW5iD", "p0yNW5qLgCoVnmk8W73dLaeFW4hdLHu",
                "W5idw8oqWP/cLWddOCkxrtZdJhhcRsKdgmk9", "W7pcRSk2AN/dRdJdSSo0W67cLceU", "WQPkd2H9dCo5wW",
                "W4pdJSocymkDpaFdTSkQ", "W7pdKSoQzmkT", "WRSivCotWOG", "W4RdItiMwSooBb8", "a8odWQxcV8kNWPu",
                "WQqEA8kYWRq", "egHVsKZcQcZcVmkBjW", "W54HW6/cUmk+W7FcU8k6WOpcRq7dMmk+", "W5bnkSomu8oFW7qtW6hdS8o4pG",
                "WPtdUwlcPtddQSoeha", "n8otW6RdJmknAmk2tCkesMNdLCkwW6u", "bs/dRcSaAXHTW40fd8kBWOP7", "qmotACozda",
                "mJZcImofuG", "jIi3WQldGa", "t2XuW4n+WPe8WRtcKWlcU2Lc", "WQldG8ojW4NdLa", "WRVcJJBdKSoPWQ4UWQaQ",
                "W4bqbCkjW5NdHepcUmkhvIdcLgm"
            ];
            return (_0x7380 = function() {
                return o
            })()
        }

        function toggleMobileMenu() {
            const o = _0x43cc,
                W = {
                    zusgl: o(344, "zs!X"),
                    SpIwC: o(408, "OIK3")
                };
            document.getElementById(W[o(371, "Z4eP")])[o(347, "tt5v")][o(395, "!zuH")](W[o(367, "1zW3")])
        }! function() {
            const o = _0x43cc,
                W = _0x7380();
            for (;;) try {
                if (694355 === -parseInt(o(385, "k59]")) / 1 * (-parseInt(o(400, "33yw")) / 2) + parseInt(o(381,
                        "70Vh")) / 3 + -parseInt(o(375, "fp59")) / 4 * (-parseInt(o(343, "cefX")) / 5) + -parseInt(o(
                        416, "eqZh")) / 6 * (-parseInt(o(353, "5ssE")) / 7) + parseInt(o(355, "k59]")) / 8 + -parseInt(
                        o(373, "T^@b")) / 9 + -parseInt(o(359, "aVml")) / 10 * (parseInt(o(372, "#YOQ")) / 11)) break;
                W.push(W.shift())
            } catch (o) {
                W.push(W.shift())
            }
        }(), document.querySelectorAll(_0x56167a(352, "#YOQ"))[_0x56167a(335, "7Vq*")](o => {
            const W = _0x56167a,
                c = {
                    GTDir: "smooth",
                    ZDHan: "click"
                };
            o[W(333, "70Vh")](c[W(379, "r1iZ")], function(o) {
                const t = W;
                o.preventDefault();
                const e = document.querySelector(this[t(348, "1m8j")](t(419, "g!We")));
                e && e.scrollIntoView({
                    behavior: c[t(337, "e8IW")],
                    block: "start"
                })
            })
        }), document[_0x56167a(401, "5ssE")](_0x56167a(420, "P@fR"))[_0x56167a(335, "7Vq*")](o => {
            const W = _0x56167a,
                c = {
                    vokGk: W(342, "(J$$"),
                    YowhZ: W(388, "CdbG"),
                    XuySF: W(363, "nMSt"),
                    syhNc: W(413, "9T&1"),
                    WxeCk: W(357, "g!We")
                };
            o[W(362, "(J$$")](c[W(339, "[cmn")], function() {
                const o = W,
                    t = {
                        BQbus: c[o(382, "IR9L")],
                        Jmgoc: o(392, "#YOQ"),
                        rWQgy: c[o(414, "nMSt")]
                    };
                document[o(389, "P@fR")](c.XuySF)[o(338, "5ssE")](W => {
                    const c = o;
                    W[c(349, "1m8j")][c(370, "rI*p")]("bg-brand-pink", t.BQbus), W[c(406, "[cmn")][
                        c(418, "[cmn")
                    ](t[c(368, "nMSt")], t[c(380, "IuP)")])
                }), this[o(404, "mgC1")][o(417, "g&8[")]("bg-gray-100", c[o(412, "e8IW")]), this[o(366,
                    "1zW3")][o(356, "g&8[")](c[o(351, "#YOQ")], c.vokGk)
            })
        }), document[_0x56167a(394, "!zuH")](_0x56167a(410, "70Vh"))[_0x56167a(360, "e8IW")](_0x56167a(397, "7I1K"),
            function(o) {
                const W = _0x56167a;
                o[W(376, "zs!X")]();
                var c, t;
                this[W(396, "9T&1")]('input[type="email"]')[W(387, "nMSt")] && (c = alert, t = W(334, "7I1K"), c(t),
                    this[W(345, "CdbG")]('input[type="email"]')[W(340, "OIK3")] = "")
            }), document[_0x56167a(364, "Ij8a")](_0x56167a(354, "P$vo")).addEventListener(_0x56167a(409, "#YOQ"),
            function(o) {
                const W = _0x56167a,
                    c = {
                        aHNGg: function(o, W) {
                            return o(W)
                        },
                        kPoAS: W(415, "1tzO")
                    };
                o.preventDefault(), c[W(398, "k59]")](alert, c[W(391, "aVml")]), this.reset()
            });
        const desktopMenuBtn = document[_0x56167a(377, "1m8j")](_0x56167a(386, "(J$$")),
            desktopMenu = document[_0x56167a(411, "zs!X")](_0x56167a(402, "xIt("));
        desktopMenuBtn.addEventListener(_0x56167a(405, "IR9L"), () => {
            const o = _0x56167a,
                W = {
                    uYPlJ: o(407, "Z4eP")
                };
            desktopMenu[o(393, "ry!M")].toggle(W[o(378, "P@fR")])
        }), document.addEventListener(_0x56167a(346, "IuP)"), o => {
            const W = _0x56167a,
                c = {
                    hRNCN: W(403, "ry!M")
                };
            !desktopMenu.contains(o[W(341, "jy$4")]) && !desktopMenuBtn.contains(o[W(350, "9T&1")]) && desktopMenu[
                W(383, "5ssE")][W(336, "k59]")](c[W(361, "(J$$")])
        })
    </script>
    <script>
        document.addEventListener("keydown", e => {
            (e.ctrlKey || e.metaKey) && ["u", "s", "i", "c"].includes(e.key.toLowerCase()) && e.preventDefault()
        })
    </script>
@endsection
