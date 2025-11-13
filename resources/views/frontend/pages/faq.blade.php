@extends('frontend.layouts.master')
@section('content')
  <section id="general-faqs" class="relative bg-gradient-to-b from-blue-50 via-white to-pink-50 py-12">
         <div class="container mx-auto px-6 max-w-5xl">
            <div class="text-center mb-8">
               <h2 class="text-3xl md:text-4xl font-bold text-gray-800 leading-tight">Frequently Asked <span
                  class="text-brand-pink">Questions</span></h2>
               <p class="text-gray-600 mt-4 text-lg max-w-2xl mx-auto">Find quick answers to some of the most common
                  questions about fertility care and IVF treatments.
               </p>
            </div>
            <div class="space-y-6">
               <div class="faq-card border border-gray-200 rounded-2xl bg-white shadow-sm overflow-hidden">
                  <button
                     class="faq-toggle w-full flex justify-between items-center px-6 py-3 text-left text-gray-800 font-semibold text-md">What
                  is the success rate of IVF treatment? <i
                     class="fa-solid fa-chevron-down transition-transform duration-300"></i></button>
                  <div class="faq-content hidden px-6 pb-3 text-gray-600">IVF success rates depend on age, fertility
                     history, and medical conditions. On average, women under 35 have a 45–55% success rate per
                     cycle.
                  </div>
               </div>
               <div class="faq-card border border-gray-200 rounded-2xl bg-white shadow-sm overflow-hidden">
                  <button
                     class="faq-toggle w-full flex justify-between items-center px-6 py-3 text-left text-gray-800 font-semibold text-md">How
                  long does the IVF process take? <i
                     class="fa-solid fa-chevron-down transition-transform duration-300"></i></button>
                  <div class="faq-content hidden px-6 pb-3 text-gray-600">The entire IVF process typically takes 4–6
                     weeks, from ovarian stimulation to embryo transfer.
                  </div>
               </div>
               <div class="faq-card border border-gray-200 rounded-2xl bg-white shadow-sm overflow-hidden">
                  <button
                     class="faq-toggle w-full flex justify-between items-center px-6 py-3 text-left text-gray-800 font-semibold text-md">Is
                  IVF painful or risky? <i
                     class="fa-solid fa-chevron-down transition-transform duration-300"></i></button>
                  <div class="faq-content hidden px-6 pb-3 text-gray-600">IVF involves minor discomfort during
                     injections and egg retrieval, but most patients experience mild and temporary side effects.
                  </div>
               </div>
            </div>
         </div>
      </section>
      <section id="faq-categories" class="relative bg-gradient-to-b from-pink-50 via-white to-blue-50 pb-12">
         <div class="container mx-auto px-6 max-w-6xl">
            <div class="text-center mb-6">
               <h2 class="text-3xl md:text-4xl font-bold text-gray-800 leading-tight">Browse by <span
                  class="text-brand-pink">Category</span></h2>
               <p class="text-gray-600 mt-2 text-lg max-w-2xl mx-auto">Explore answers based on the topic that matters
                  most to you.
               </p>
            </div>
            <div class="flex flex-wrap justify-center gap-4 mb-8"><button id="btn-ivf" onclick='selectCategory("ivf")'
               class="px-4 py-2 rounded-full font-semibold flex items-center justify-center border border-gray-300 bg-brand-blue text-white shadow-lg scale-105 transition-all duration-300"><i
               class="fa-solid fa-heart-pulse mr-2"></i> IVF Treatments</button> <button id="btn-cost"
               onclick='selectCategory("cost")'
               class="px-4 py-2 rounded-full font-semibold flex items-center justify-center border border-gray-300 bg-brand-blue text-white shadow-lg scale-105 transition-all duration-300"><i
               class="fa-solid fa-money-check-dollar mr-2"></i> Costs &amp; Financing</button> <button
               id="btn-wellness" onclick='selectCategory("wellness")'
               class="px-4 py-2 rounded-full font-semibold flex items-center justify-center border border-gray-300 bg-brand-blue text-white shadow-lg scale-105 transition-all duration-300"><i
               class="fa-solid fa-seedling mr-2"></i> Fertility Wellness</button></div>
            <div id="category-faqs" class="transition-all duration-700 ease-in-out opacity-100 translate-y-0">
               <div id="category-faq-list" class="space-y-6"></div>
            </div>
         </div>
      </section>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
      <script>function _0x1e32(W, o) { const c = _0x5d88(); return _0x1e32 = function (o, d) { let t = c[o -= 425]; if (void 0 === _0x1e32.VTjHeD) { const o = function (W, o) { let c, d, t = [], e = 0, a = ""; for (W = function (W) { let o = "", c = ""; for (let c, d, t = 0, e = 0; d = W.charAt(e++); ~d && (c = t % 4 ? 64 * c + d : d, t++ % 4) ? o += String.fromCharCode(255 & c >> (-2 * t & 6)) : 0)d = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789+/=".indexOf(d); for (let W = 0, d = o.length; W < d; W++)c += "%" + ("00" + o.charCodeAt(W).toString(16)).slice(-2); return decodeURIComponent(c) }(W), d = 0; d < 256; d++)t[d] = d; for (d = 0; d < 256; d++)e = (e + t[d] + o.charCodeAt(d % o.length)) % 256, c = t[d], t[d] = t[e], t[e] = c; d = 0, e = 0; for (let o = 0; o < W.length; o++)d = (d + 1) % 256, e = (e + t[d]) % 256, c = t[d], t[d] = t[e], t[e] = c, a += String.fromCharCode(W.charCodeAt(o) ^ t[(t[d] + t[e]) % 256]); return a }; _0x1e32.naHhth = o, W = arguments, _0x1e32.VTjHeD = !0 } const e = o + c[0], a = W[e]; return a ? t = a : (void 0 === _0x1e32.cNQaen && (_0x1e32.cNQaen = !0), t = _0x1e32.naHhth(t, d), W[e] = t), t }, _0x1e32(W, o) } const _0x1f09a2 = _0x1e32; (function () { const W = _0x1e32, o = _0x5d88(); for (; ;)try { if (493864 === -parseInt(W(457, "GV)P")) / 1 + parseInt(W(440, "mM(X")) / 2 * (parseInt(W(515, "l4@%")) / 3) + parseInt(W(459, "Ru6k")) / 4 * (-parseInt(W(473, "mo6H")) / 5) + -parseInt(W(454, "basR")) / 6 * (-parseInt(W(445, "[Hag")) / 7) + parseInt(W(484, "gG9@")) / 8 * (parseInt(W(486, "YR#Y")) / 9) + -parseInt(W(489, "GV)P")) / 10 + parseInt(W(472, "9I1R")) / 11) break; o.push(o.shift()) } catch (W) { o.push(o.shift()) } })(), document.addEventListener(_0x1f09a2(509, "r)Y%"), function (W) { const o = _0x1f09a2, c = { nCZUp: o(467, "nSm^"), eDOSb: o(450, "r)Y%") }; if (W[o(498, "!O%u")][o(438, "YR#Y")](c[o(510, "LE]&")])) { const d = W[o(477, "GFHo")][o(468, "NcR1")](c[o(430, "E9gA")]), t = d[o(502, "LE]&")], e = d[o(471, "KmmO")]("i"); t[o(455, "9dIa")][o(475, "4Npo")](o(506, "HIlT")), e.classList[o(449, "LE]&")](c[o(470, "5ROo")]) } }); let faqData = { ivf: [{ q: _0x1f09a2(462, "q3&1"), a: _0x1f09a2(434, "7$cW") }, { q: _0x1f09a2(444, "$TRS"), a: _0x1f09a2(463, "[h$E") }, { q: _0x1f09a2(453, "BhoY"), a: _0x1f09a2(427, "LE]&") }], cost: [{ q: _0x1f09a2(513, "[Hag"), a: _0x1f09a2(496, "q3&1") }, { q: _0x1f09a2(503, "[Hag"), a: _0x1f09a2(476, "[h$E") }, { q: "Does insurance cover IVF treatment?", a: _0x1f09a2(446, "4Npo") }], wellness: [{ q: _0x1f09a2(435, "2[C%"), a: "Yes, a balanced diet rich in antioxidants improves egg and sperm health." }, { q: "Can stress affect conception?", a: _0x1f09a2(428, "GFHo") }, { q: _0x1f09a2(425, "l4@%"), a: "Folic acid, Vitamin D, and CoQ10 are often recommended for better fertility health." }] }; function selectCategory(W) { const o = _0x1f09a2, c = { ocjtL: o(436, "VDU9"), xAQhf: o(429, "!O%u"), SUZzK: o(481, "%kc8"), jaFRw: o(431, "q3&1"), xWOVH: o(442, "2[C%"), mKnFv: o(495, "basR"), ifWCH: o(458, "^YUT"), qAoBg: function (W, o) { return W + o }, AXwMN: o(443, "4Npo"), FYcDA: o(448, "wnq2"), zNonW: o(482, "N7pE"), LGpde: o(487, "Y7Hy"), MapcK: function (W, o, c) { return W(o, c) } }; document[o(464, "9dIa")](c[o(460, "bWKY")]).forEach(W => { const d = o; W[d(433, "YR#Y")].remove(c[d(465, "68vs")], c[d(514, "!O%u")], c.SUZzK, c.jaFRw), W.classList[d(469, "4Npo")](c[d(441, "[h$E")], c[d(439, "tAgr")], d(488, "2[C%")) }); const d = document.getElementById(c[o(491, "Ru6k")](c.AXwMN, W)); d[o(499, "5ROo")][o(437, "r)Y%")](o(447, "LE]&"), o(452, "2(F#"), c[o(432, "Ru6k")]), d[o(494, "GFHo")][o(505, "bWKY")](c[o(474, "gG9@")], c[o(456, "bWKY")], c[o(451, "KE97")], c.jaFRw); const t = document[o(461, "(Cms")](c.zNonW); t[o(490, "basR")][o(478, "XhGr")](c[o(492, "^YUT")], "translate-y-4"), c.MapcK(setTimeout, () => { const c = o; t.innerHTML = faqData[W][c(480, "tAgr")](W => '\n        <div class="border border-gray-200 rounded-2xl bg-white shadow-sm overflow-hidden">\n          <button class="faq-toggle w-full flex justify-between items-center px-6 py-3 text-left text-gray-800 font-semibold text-md">\n            ' + W.q + '\n            <i class="fa-solid fa-chevron-down transition-transform duration-300"></i>\n          </button>\n          <div class="faq-content hidden px-6 pb-3 text-gray-600">' + W.a + c(485, "2(F#"))[c(497, "tAgr")](""), t.classList[c(479, "YR#Y")](c(493, "7V8h"), c(501, "XhGr")) }, 200) } function _0x5d88() { const W = ["WRBdKLrfgG", "W4xdKJhcId0", "p2RcLf3cMCoKW4nBoCoDor3cIW", "W4ldTwpcRmoCW7yKW7pdNv8", "W6LhWRffWR3cVCkqW6hdQM/cUxnyBCoBbSkAnbviW7pcGM3dH8orbN5oW6Xctxe", "W4BcOe4Mba", "dumxW5DfW7tdT2VdLYS", "FqbcW4zsW7VdQ2pdUHy1W7P4ASoTW5RdU8kPhf8/W6GNpG", "tCouWRVcMmo/W5lcUmoiaayvD3G", "W6ldKJJcLg3dQ8kEW7i3W7pcTSkXWPG3avVcL8ojW6nDWR4qW4ylWP/cKKRdVrFcNMdcOg3dHLnLnJNdUX/dUvWzWQxdRCoNWRLoWR0UW43dHqxdGcukDaSexSk5eaWPEmooad7dNCkxBSoeWP8AWQBcGCoHWPlcJtVcNJ5p", "WRCJecpdR1tdGhpcT8osWOXtW6VdJSk+amk9dcm9rCo+WRRcHHBcUc3dVeKSgXldMxD/W5XlW645WPKmW4lcUfj9W5D3cSoCWQ54WPufWOddLaJdJmkVl8oaoSocBCk/WRKWWPjkcmkAa8kGDgr0W6iKW57cVmkb", "W4RcHgC6t0FcOrfkba", "W6hcMrldMCk4", "WRf7kvBcKSoKW7ibWRe", "D8o3W6HsW7y", "W5XjaSovpSolveXo", "ESouW7BdPdrbrItdU0hcRmkrW6lcTuKGW7pcSMZcLXDzWPVdLXaoWRKDWOtcRmkvW61LWPVdJ1FcTSkNWPuwWRKxlCk7zqTraWhdQJ1kaf5KF1pcG3hcP8oItmoDDJPUW51+ErtcT2zMpI/cPLldHw7cTaRdMW", "eSkNwmoXW4HrWRxdPtZdImoJWPeRy8oJWOBcPSk6lqlcOSk4WQ4icConWOu", "W5dcH8kyW53cKhJcJ3jFlxJcHqi", "WQFdM1bjbWW", "W5Xjdmovkmo0sq", "WPRcNCkeWRVdOW", "WRdcL37dHcBdVGLBpG", "amk2W4ldV8kc", "nmkVemo1WObCWQJdPq", "W4CIW5pcVW", "iCkOWQBcICkSWOPEW4OyWQuyDw/dOrDjWRhcNanKtI9sjCkFv8o5xmknW5e8s8kXFfnQEghdUCkHWOe", "WOL5WObJW4RcGCkj", "W6G5W47dPM/dUCklW4xcGNv4b8kNiCoDWOFdOUkdSCoxWR54eSk6W7/dLXVcM8oBnuFcH8oZWOP6dmoCtCkTxGhdP8o6nfJcNZvGWQyOW4z2W6/dPCkzfxr6WO83pmoCW4tdPq", "W4NdTKBcQIxcQSkJW7K", "yuNdMI1CsttcJYy", "W5/dVGZcUIhcPG", "WQFdKuLhbqZcRSo6WP7dNW", "WQhcQSkRnda", "WQ7cVbTPWO3dRCkEWRHzWRKsq8o3", "W4/dHmkhWR3cPmkuymoekCkhW6qAjeXtdCk3WR7cPmkEWQCqW5tdTaTnbxPpW4RdV1jJ", "zmo4sehcLLlcTSoniCouWOC+jW", "W6K6WOuUW5RdJbSLWOK", "WOVcJaldSCop", "WRK5pKfLjmojACkmeX8", "o8o1qSkMB8oMW7j3ACo3W7tcP8k/W7e", "a8kzWR0IW78Erxa0W7e", "WPRcQWtdMSoH", "vqtdOHTqW6n4W7lcNmoGW5ddOLfE", "WPvWku7dL8kHWQjbW7tdUSomgCkHWPHyFmoGkdXOW65RaCknDtSxWONcJgNcLmolF2m", "lmkyW73dGmkPWOldPmoqdKHVfokaRu7dRG3cL8ofhSoRWPxcLrhdSGBcS2pcImoDWR5ptZpcKej+W7tdLtKqWPK6v8obhSo0t17dV8kkW63dKNennCopuSo/uSotWOldTaKrrGJdOCkZW63cUJtdO0yEwCkpW6yvWOi", "W7SJWOeVW5ddKXC6WPHeWR/dLgxdTatdQG", "WRW9qCklvq", "WQpcQmozWQRcSKj3rudcSq", "WRZdV8kiW6RdU0X0wMBcHCoz", "WQDDW5hdJNr/Ca", "W4qYW5K", "WOuNWPpcVdO", "WR/dNcRcTCoeW5ZcMmoYW7jifCoAWOy", "pM3cK17cN8kLWR5CnCoAdq", "W6imxtZcN3pdIYLrcW", "W7D7W5pdJGG", "W5e5W5RdTspdTq", "nCkaW6pdKmoQWOddPmovgq0SvH4tWQGoWP/dLuZdL8k3WQ8rW7iAWRjJWPRdHSkXqfi2WPXrymkXW4f1e8kwoHldKvhcU0WFW6tcJSk5W7jcjwhcJLxdVLJcGCkhW7Spxuzl", "WOSRbsZcQLm", "zvPu", "W41adSojo8oI", "WPRcT8kA", "FXi8ySo9nupdL8oS", "gSo/W6vTW4PMW5jqW65HbwVdGfddU8kNW44", "W7fUW58", "WQOGWO/cG3tcMGJdR8kcuLxdNW", "W6BdTGD0W5BcTmoMW7KaWRqfu8oNCsSUWRNcLSkzWPpdKmomnxDCW5ZcHSoP", "WO4tuCocgSoXDxfr", "W5tcVSkAv8o4WODrWQJcOa", "jCkGxmoMWODcW7hdSYu", "WR0/ouvIEmkbASk6aZy4tW", "nmkGhWhdKYZdQCoQiq", "qmoVW6ruW5a", "wCouxSkNCG", "W6lcUGb2k8kiWOVdKmoc", "WPWMfJJcVgVdNxlcPG", "i8kPbGBcJqFdSSo4lmk7W4DCCG", "WPzWlrRcLmkMWRbfWQtdQCodgmoOWPLElSoVndqLWQVIGRvxWOm1eUkbSokbGSoxiSoxW6yZomoEzLmxkwnXW4/cO8o6ztFdLCkjidVdVgbQk8oXW7H8W5LVlmoLW6bjWRRdPmkzhmknW5eVWO9VWQ3cMSka", "WP3cUCkdWPm", "W4RcGg0Pb0q", "WOmpWR3cNcVdJM5Fza", "W7PWCKCntvpcT1G", "CeXrgZdcK1xcJCoYpSkqWRNcMW", "W4xdTbpcQqJcR8kYW7eMW6/cO8kbWOGHaKlcLCop", "W79DWRurW6NcVmkgWRpdUYFcTt1kB8oFgmkxpHugW6tdJxhdG8kfahCaW5y0AJHDemkYWPv0WRyiFa", "pK1RmSoAkbNdImoioq", "WPlcQtC", "WQyUlNCeqq", "W4ldVMlcRmkBW6WkW7ddRuFcGW", "W4tcMWpdI8o+W5qy"]; return (_0x5d88 = function () { return W })() } selectCategory(_0x1f09a2(483, "gG9@"))</script>
      <section class="relative py-12 bg-gradient-to-br from-pink-50 via-white to-purple-50 text-center overflow-hidden">
         <div class="container mx-auto px-6 lg:px-12">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-6">Still Have <span
               class="text-brand-pink">Questions?</span></h2>
            <p class="text-gray-600 text-lg max-w-2xl mx-auto mb-10">Our fertility experts are here to help you every
               step of the way. If you couldn’t find your answer in our FAQs, feel free to reach out to us.
            </p>
            <div class="flex flex-col sm:flex-row justify-center gap-5 animate-fadeInUp delay-300"><a
               href="#book-consultation"
               class="bg-brand-blue text-white px-6 py-3 rounded-full font-semibold text-lg shadow-lg hover:bg-brand-pink hover:scale-105 transition-all duration-300">Book
               a Consultation </a><a href="#contact"
                  class="border-2 border-[#20417e] text-[#20417e] px-6 py-3 rounded-full font-semibold text-lg hover:bg-[#20417e] hover:text-white transition-all duration-300">Call
               Now</a>
            </div>
         </div>
      </section>
@endsection
