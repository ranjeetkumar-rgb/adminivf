@extends('frontend.layouts.master')
@section('title', 'Home')
@section('content')
 <section class="relative bg-gradient-to-b from-pink-50 via-white to-blue-50 py-12 overflow-hidden">
        <div
            class="container mx-auto px-6 text-center md:text-left flex flex-col-reverse md:flex-row items-center gap-10">
            <div class="md:w-1/2">
                <h1 class="text-4xl md:text-5xl font-bold text-gray-800 leading-tight mb-4">Nourish Your Body, Nurture
                    Your Fertility</h1>
                <p class="text-gray-600 text-lg mb-6 leading-relaxed">Introduce how personalized diet and lifestyle
                    changes can improve hormonal balance, ovulation, and reproductive health for both partners</p>
                <button
                    class="bg-brand-blue hover:bg-brand-pink text-white px-6 py-3 rounded-full shadow-lg hover:shadow-2xl transition-all duration-500 hover:scale-105">Book
                    a Consultation</button>
            </div>
            <div class="md:w-1/2 relative"><img
                    src="https://media.istockphoto.com/id/1407833173/photo/food-products-recommended-for-pregnancy-healthy-diet.jpg?s=1024x1024&amp;w=is&amp;k=20&amp;c=2DRtzVJcBpU-9Ol-ZCE3e1qvr7HQBFr_7g3FkfxIr8c="
                    alt="Fertility Diet" class="rounded-3xl shadow-2xl border-4 border-white"></div>
        </div>
    </section>
    <section id="nutrition-fertility" class="relative py-12 bg-white overflow-hidden">
        <div class="container mx-auto px-6 lg:px-16 relative z-10">
            <div class="text-center mb-12 max-w-3xl mx-auto animate-fade-in-up">
                <h2 class="text-4xl font-extrabold text-gray-800 leading-tight mb-4">How Nutrition Impacts Fertility
                </h2>
                <p class="text-gray-600 text-lg">Understanding the essential role of nutrients in supporting healthy
                    conception.</p>
            </div>
            <div
                class="flex flex-nowrap overflow-x-auto snap-x snap-mandatory sm:grid sm:grid-cols-3 sm:overflow-visible gap-6 scrollbar-hide pb-4">
                <div
                    class="min-w-[80%] sm:min-w-0 snap-start bg-white rounded-3xl shadow-md hover:shadow-2xl hover:-translate-y-2 transition-all duration-500 group p-0 border border-gray-100 overflow-hidden">
                    <div class="relative w-full h-44 overflow-hidden"><span
                            class="absolute inset-0 bg-green-500 blur-xl opacity-20"></span> <img
                            src="https://images.pexels.com/photos/5972007/pexels-photo-5972007.jpeg"
                            alt="Nutrient-Rich Foods"
                            class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                    </div>
                    <div class="p-8">
                        <h3
                            class="text-xl font-semibold text-gray-800 mb-3 group-hover:text-green-600 transition-colors">
                            Nutrient-Rich Foods</h3>
                        <p class="text-gray-600 text-sm leading-relaxed">Nutrient-rich diets improve egg and sperm
                            quality.</p>
                    </div>
                </div>
                <div
                    class="min-w-[80%] sm:min-w-0 snap-start bg-white rounded-3xl shadow-md hover:shadow-2xl hover:-translate-y-2 transition-all duration-500 group p-0 border border-gray-100 overflow-hidden animate-fade-in-up delay-100">
                    <div class="relative w-full h-44 overflow-hidden"><span
                            class="absolute inset-0 bg-yellow-500 blur-xl opacity-20"></span> <img
                            src="https://images.pexels.com/photos/6539795/pexels-photo-6539795.jpeg"
                            alt="Hormone Balance"
                            class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                    </div>
                    <div class="p-8">
                        <h3
                            class="text-xl font-semibold text-gray-800 mb-3 group-hover:text-yellow-600 transition-colors">
                            Hormone Balance</h3>
                        <p class="text-gray-600 text-sm leading-relaxed">Balanced hormones lead to regular cycles and
                            better conception rates.</p>
                    </div>
                </div>
                <div
                    class="min-w-[80%] sm:min-w-0 snap-start bg-white rounded-3xl shadow-md hover:shadow-2xl hover:-translate-y-2 transition-all duration-500 group p-0 border border-gray-100 overflow-hidden animate-fade-in-up delay-200">
                    <div class="relative w-full h-44 overflow-hidden"><span
                            class="absolute inset-0 bg-orange-500 blur-xl opacity-20"></span> <img
                            src="https://images.pexels.com/photos/3850809/pexels-photo-3850809.jpeg"
                            alt="Gut &amp; Micronutrient Health"
                            class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                    </div>
                    <div class="p-8">
                        <h3
                            class="text-xl font-semibold text-gray-800 mb-3 group-hover:text-orange-600 transition-colors">
                            Gut &amp; Micronutrient Health</h3>
                        <p class="text-gray-600 text-sm leading-relaxed">Gut health and micronutrient levels are
                            essential for fertility wellness.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="py-12 bg-gradient-to-b from-gray-50 to-white">
        <div class="text-center mb-6 md:mb-10 px-6">
            <h2 class="text-4xl font-extrabold text-gray-800 mb-3">Consultation Offerings</h2>
            <p class="text-gray-600 max-w-2xl mx-auto text-lg">Comprehensive support designed to uplift your fertility
                wellness journey.</p>
        </div>
        <div
            class="flex flex-nowrap overflow-x-auto snap-x snap-mandatory sm:grid sm:grid-cols-2 sm:overflow-visible gap-6 scrollbar-hide pb-4 mx-6 px-6 lg:px-20">
            <div
                class="min-w-[100%] sm:min-w-0 snap-start relative flex gap-6 p-6 bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden">
                <div class="absolute left-0 top-0 h-full w-2 bg-green-500"></div>
                <div
                    class="flex-shrink-0 w-16 h-16 rounded-xl bg-green-100 text-green-600 flex items-center justify-center text-2xl shadow">
                    <i class="fa-solid fa-bowl-rice"></i>
                </div>
                <div>
                    <h3 class="text-xl font-semibold text-gray-800 mb-2">Personalized Nutrition Plans</h3>
                    <p class="text-gray-600 text-sm">Tailored fertility meal plans based on age, BMI, and health goals.
                    </p>
                </div>
            </div>
            <div
                class="min-w-[100%] sm:min-w-0 snap-start relative flex gap-6 p-6 bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden">
                <div class="absolute left-0 top-0 h-full w-2 bg-blue-500"></div>
                <div
                    class="flex-shrink-0 w-16 h-16 rounded-xl bg-blue-100 text-blue-600 flex items-center justify-center text-2xl shadow">
                    <i class="fa-solid fa-heart-circle-bolt"></i>
                </div>
                <div>
                    <h3 class="text-xl font-semibold text-gray-800 mb-2">Lifestyle Counseling</h3>
                    <p class="text-gray-600 text-sm">Sleep, stress, hydration, and exercise optimization for fertility.
                    </p>
                </div>
            </div>
            <div
                class="min-w-[100%] sm:min-w-0 snap-start relative flex gap-6 p-6 bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden">
                <div class="absolute left-0 top-0 h-full w-2 bg-pink-500"></div>
                <div
                    class="flex-shrink-0 w-16 h-16 rounded-xl bg-pink-100 text-pink-600 flex items-center justify-center text-2xl shadow">
                    <i class="fa-solid fa-leaf"></i>
                </div>
                <div>
                    <h3 class="text-xl font-semibold text-gray-800 mb-2">Preconception Detox Programs</h3>
                    <p class="text-gray-600 text-sm">Short-term plans to reset the body for conception.</p>
                </div>
            </div>
            <div
                class="min-w-[100%] sm:min-w-0 snap-start relative flex gap-6 p-6 bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden">
                <div class="absolute left-0 top-0 h-full w-2 bg-purple-500"></div>
                <div
                    class="flex-shrink-0 w-16 h-16 rounded-xl bg-purple-100 text-purple-600 flex items-center justify-center text-2xl shadow">
                    <i class="fa-solid fa-user-group"></i>
                </div>
                <div>
                    <h3 class="text-xl font-semibold text-gray-800 mb-2">Couples’ Wellness Coaching</h3>
                    <p class="text-gray-600 text-sm">Joint consultations and meal planning for couples.</p>
                </div>
            </div>
        </div>
    </section>
    <section class="relative py-12 bg-gradient-to-br from-pink-50 via-white to-blue-50 overflow-hidden">
        <div class="text-center mb-6 md:mb-10 px-6 relative z-10">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">Expert-Led Consultation Flow</h2>
            <p class="text-gray-600 max-w-2xl mx-auto text-lg">A guided journey designed to support you through every
                stage of your fertility transformation.</p>
        </div>
        <div class="container mx-auto px-6 lg:px-16 relative z-10">
            <div
                class="flex flex-nowrap overflow-x-auto snap-x snap-mandatory sm:grid sm:grid-cols-4 sm:overflow-visible gap-6 scrollbar-hide">
                <div class="min-w-[100%] sm:min-w-0 snap-start relative group">
                    <div
                        class="bg-white rounded-3xl shadow-xl overflow-hidden transition-all duration-300 group-hover:-translate-y-2 group-hover:shadow-2xl">
                        <div class="p-8 flex flex-col items-center text-center">
                            <div
                                class="w-14 h-14 flex items-center justify-center rounded-full bg-green-500 text-white text-xl font-bold shadow mb-5">
                                1</div>
                            <h3 class="text-xl font-semibold text-gray-800 mb-3">Initial Assessment</h3>
                            <p class="text-gray-600 text-sm leading-relaxed">Personal 1-on-1 evaluation to understand
                                your fertility goals and health background.</p>
                        </div>
                    </div>
                </div>
                <div class="min-w-[100%] sm:min-w-0 snap-start relative group">
                    <div
                        class="bg-white rounded-3xl shadow-xl overflow-hidden transition-all duration-300 group-hover:-translate-y-2 group-hover:shadow-2xl">
                        <div class="p-8 flex flex-col items-center text-center">
                            <div
                                class="w-14 h-14 flex items-center justify-center rounded-full bg-green-600 text-white text-xl font-bold shadow mb-5">
                                2</div>
                            <h3 class="text-xl font-semibold text-gray-800 mb-3">Nutritional &amp; Lifestyle Mapping
                            </h3>
                            <p class="text-gray-600 text-sm leading-relaxed">Tailored guidance to optimize nutrition,
                                routine and hormonal health.</p>
                        </div>
                    </div>
                </div>
                <div class="min-w-[100%] sm:min-w-0 snap-start relative group">
                    <div
                        class="bg-white rounded-3xl shadow-xl overflow-hidden transition-all duration-300 group-hover:-translate-y-2 group-hover:shadow-2xl">
                        <div class="p-8 flex flex-col items-center text-center">
                            <div
                                class="w-14 h-14 flex items-center justify-center rounded-full bg-green-700 text-white text-xl font-bold shadow mb-5">
                                3</div>
                            <h3 class="text-xl font-semibold text-gray-800 mb-3">Personalized Plan Creation</h3>
                            <p class="text-gray-600 text-sm leading-relaxed">A science-backed fertility roadmap designed
                                to suit your body’s unique needs.</p>
                        </div>
                    </div>
                </div>
                <div class="min-w-[100%] sm:min-w-0 snap-start relative group">
                    <div
                        class="bg-white rounded-3xl shadow-xl overflow-hidden transition-all duration-300 group-hover:-translate-y-2 group-hover:shadow-2xl">
                        <div class="p-8 flex flex-col items-center text-center">
                            <div
                                class="w-14 h-14 flex items-center justify-center rounded-full bg-green-800 text-white text-xl font-bold shadow mb-5">
                                4</div>
                            <h3 class="text-xl font-semibold text-gray-800 mb-3">Ongoing Support</h3>
                            <p class="text-gray-600 text-sm leading-relaxed">Expert coaching, follow-ups and continuous
                                monitoring at every step.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="relative py-12 bg-white overflow-hidden">
        <div class="text-center mb-6 md:mb-10 px-6">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-3">What a Fertility-Focused Diet Looks Like</h2>
            <p class="text-gray-600 max-w-xl mx-auto text-lg">Gentle food foundations that support hormonal balance and
                reproductive health.</p>
        </div>
        <div
            class="flex overflow-x-auto snap-x snap-mandatory sm:overflow-visible gap-6 scrollbar-hide md:container md:block mx-auto px-6 lg:px-20">
            <div class="min-w-[100%] sm:min-w-0 snap-start flex flex-col md:flex-row items-center gap-10 md:gap-14">
                <div class="w-40 h-40 rounded-full shadow-lg overflow-hidden flex-shrink-0"><img
                        src="https://images.pexels.com/photos/7511845/pexels-photo-7511845.jpeg"
                        alt="Iron-rich leafy greens &amp; whole grains" class="w-full h-full object-cover"></div>
                <div class="text-center md:text-left max-w-md">
                    <h3 class="text-xl font-semibold text-gray-800 mb-2">Iron-rich leafy greens &amp; whole grains</h3>
                    <p class="text-gray-600 text-sm">Nourish the body with essential minerals that support healthy
                        ovulation.</p>
                </div>
            </div>
            <div
                class="min-w-[100%] sm:min-w-0 snap-start flex flex-col md:flex-row-reverse items-center gap-10 md:gap-14">
                <div class="w-40 h-40 rounded-full shadow-lg overflow-hidden flex-shrink-0"><img
                        src="https://images.pexels.com/photos/8844375/pexels-photo-8844375.jpeg"
                        alt="Omega-3 from nuts, seeds, and fish" class="w-full h-full object-cover"></div>
                <div class="text-center md:text-right max-w-md">
                    <h3 class="text-xl font-semibold text-gray-800 mb-2">Omega-3 from nuts, seeds, and fish</h3>
                    <p class="text-gray-600 text-sm">Anti-inflammatory fats that support egg quality and hormonal
                        balance.</p>
                </div>
            </div>
            <div class="min-w-[100%] sm:min-w-0 snap-start flex flex-col md:flex-row items-center gap-10 md:gap-14">
                <div class="w-40 h-40 rounded-full shadow-lg overflow-hidden flex-shrink-0"><img
                        src="https://images.pexels.com/photos/5966434/pexels-photo-5966434.jpeg"
                        alt="Antioxidant-rich fruits &amp; vegetables" class="w-full h-full object-cover"></div>
                <div class="text-center md:text-left max-w-md">
                    <h3 class="text-xl font-semibold text-gray-800 mb-2">Antioxidant-rich fruits &amp; vegetables</h3>
                    <p class="text-gray-600 text-sm">Support cellular health and protect reproductive cells from
                        oxidative stress.</p>
                </div>
            </div>
            <div
                class="min-w-[100%] sm:min-w-0 snap-start flex flex-col md:flex-row-reverse items-center gap-10 md:gap-14">
                <div class="w-40 h-40 rounded-full shadow-lg overflow-hidden flex-shrink-0"><img
                        src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBxMTEhUSEhMWFhUWFRkYGBcYGBUXGRgVFxoXFxYVGBcaHSggGB8lGxYVITEhJSktLi4uGB8zODMtNygtLisBCgoKDg0OGxAQGzcmICUvLS81Ly0vNS01NS0wLS4tLS8tLS0tLS0tLS8tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLf/AABEIAKgBLAMBIgACEQEDEQH/xAAcAAAABwEBAAAAAAAAAAAAAAAAAQIDBAUGBwj/xABDEAABAwIDBQUFBQcCBQUAAAABAAIRAyEEEjEFBkFRYSJxgZGhEzJCUrEUYsHR8AcVI3KS4fFDghYzg8LiRGOTorL/xAAaAQACAwEBAAAAAAAAAAAAAAADBAABAgUG/8QAMxEAAgIBBAEBBAkDBQAAAAAAAAECAxEEEiExQVEFEyLwFDJCYXGRobHBI4HhFUNS0fH/2gAMAwEAAhEDEQA/AOmygEqEAFRQEaEJShBMIilpFZsgwqk9qbLSy8CA6dEtCjEWSjA1QXdBR3SksGtrzhIEIpSH4loTJxo5JaXtTSx+0EWnsfgkylAKGMd0TjMaOSyvaulf2v0Zb01i8EvKI4ymy7mlmoImISXPaGkkptX1y+rIFsa7QRRQmsGDkE9fLgn0WEt0VL1KksPAlBGgAtGQkEpFChAiiQQUIBBBAqEEoIIBQgESNBVgsQDdKISDqlFQgSJyUUkqEEoIwgVCCCiSiiVEElCEaChCYlII1ooJBE9wAkkAdUltQHT8vqoQWjCII1GQW5o1hM1abD8w8ZTxcm3NXm9W4Tm08fl/gfq4RW1WN5nyTDgOfoplWhPEKPVw5AmxH3e16a+i4/upN/Cvyfyx+NkUuWNCEpqKkWu91wMaxw6EcEvKhecMtyRLqViGBuYacASfNIwsSmn1WgJtmJvAXQhqv6sZd4wvnItKrMWi4ARwiLgAJ/z3Dis/tve/D4eWl8vHwMh7u43ys8TPRevzhcnMjCU3iKNBCQarRYuHmFzDaP7Qaz7UqbGDm6aju+LNH9Ko6+8uMfriKgHJpyDyZCy7UOR9n2Pvg7V7QfoFF7ZvzAd5j6rhbtp1zrXq/wDyVPzT1DbuKZ7uJrD/AKjyPIkhV703/pz/AOR3ABHC5Fgt98Uw9osqfzNDT/UzKfOVqdkb/wBF8Nqg0j97tM/rAlvi0960rIsBZorY+M/gbSEUJrD4prwC0ggiQQQQRzBFj4J4rYr0JKEIFBQoKESUklQgh7UpBFKhAFEUaChBtKhFCUoQTCIhLhBVgsbIRQnISYUITIUXaeMFGm6oRMDTmeAUtQNu4P2tB7JiRY8iOfRR9cEXfIrC4c2fUOZ5v0b0aPx1KlQs3g9vupEUsZTfTIECrBdTeBxzNsD+rI6m+uHnKwVHnoxw8ZMW6rDsjFZZpVyk8JGlARVnw0k8BKyWM3za0C2UnQWmeVlHxG9bC1rKjnNdnl0NMADQTx1JSstYpJ7U/wARn6JKONxp9n1KmSXOmSSARoJsJHRSRXGhseR/A8VR0N5MMRDarbC4hwPC8EdU5SxzKwOUgxrYj66rhOW5PdF59ehrZzwWdQFRaxhZ/E7wsa/LSqGQQIPuk8b/AOFa4/aVRtPMWNe3KDZw1OoBmLIX+lzeXE2rVHGRrE4XOcwJa8aPFiOh+YdCmcJtEVWlzToS0/zDWEzT2hUqsy0WZS73nOILWt6OGp7pKTs7Ctp0wxkkXvF3GdYGnct2aVx06c+8/wDf6BIyTswh+pWSGY1lOalRwaxurjp0EC5J4AXKGOpGmx1R/YY0SXOtA0EDUkmwHErm+1dpurOEmGNJys5TxPNx4lE0mkk5qUlhILhTTSZe7xb51a5LKJdTp6TP8R4+84e6Put8SVlgEA5ardbcevi4ef4VE/G4XcPuN495gd67/MmTFdEfRGVKmYTZVer/AMujUeObWOI84hdl2VuVhcNBZTD3j46kPdPMcG+ACtnMIRFS/IlP2ivsL8ziY3Rxx/8ATP8ANg+rlHxO72LpiX4eqBzDS4ebZXXNp7w4egcr3y75Wy53kNFD2Vt44p8Mpva1pDjmF3xoAOSzJQj5KhrLZfZWDjRBBIdaOGh8UYbZd7x2xaWKaftFJjpNpHab3P1B7lid4v2ZObNTBvzR/pPInuY/Q9zvNB5Gq9XW+JcP58mL2Pterh3ZqZsdWOux3eOB6iCum7vbfpYpvZOR7RLqZJzN6g/G3rqOI4rkVUOY4se0tc0wWkEEHkQdEvDYlzHtfTJa5plrhYgqZ8BLtPGxZ8+p2yri3U5LgXN6XMc1Op1A4BzTIIkLO7o7fZi6ZDg1tRsZ28OlRv3TxHwnoQVoqOAa2ctvEotUpR4bycS2G14aww0RQqDKQJ1nzCh7W2kyhTNWobDQcXHg0dUwpJrIHA1tna9LDUzUquAHAcXHkFz2jv1iXVCWljmkyGWsOU6qq29tJ+IqGtUsJAA4Mbew9LqqBabtBd1At56IbbfQaMUuzoVff0tolxpRVmMhDgC35g78EvYv7QGVHNp1aZa5xjMPdvpPJYJuIqARDsvIlpHkSk1HU9SS0EWtbONWiD1F+qvLL2xO5BwNwQR0ujBXDf3k+g57GVi2CQQCYPgui7kb0txM0XOmowTN+23iR3aLW4E4cZNgCiKJGtGAkUo0UKEJeVFUbII5gpZQAUIZ/H4gmk1zHaGHcbxoR4KlxLmPBz02uMTmAh39fveqrN7c1Ks8scWyeB143HFVmA2xUsHNBsb3CG+Q0YtdE07MZUcC1pGUz8RAM63cVK/dbKhcHSTa4MCe6OXIqp/4hDXFrmuuYsrLBbQkh1MEuFspMOPPgenNJ3Pah2tOQzW3eyOLhMwbSIjQzfkp1XDvZRhroGU5iADJ1nXTohXx8uMsMgybtI0joVDqbWAawAOkcezoOWp6aJKc3LoZjW/JQioA6ASXA65QP6Tcg+KvqMCIaCeJMud3AlxHospi8e5tV/ZmXEm5+LtaxPFLbtypADCGTqW2cZPze9p1T22XGAahnJt/t9OjJM5iIDdXH8hbitDg65p0mQIJaDMXOa4HrC59s2k05Kobmc5wF7zPjr0PNavenbvscM4EDMRkYeTnDX/a3Me8hBjqYRkoPsqenlPox++m3XV6vsg4mnTN+Tqmhd3D3R481nQEAOS0O5ew/tNaXj+FTgu5OPws8Yk9B1TKy2PfBVD7kZ8BdR3C35c4tw+JcMwEMefjjRp+99e/WDvjun7TNiMO2H6vpj4/vNHzdOPfrz6VtNwYFqvUw+eD0h9vYeBCMVmHiuXbo72B8UcQf4o9x5Pv/dd97rx79drRrvcJAjoUeM8nJt07reGSsdu7QquzlgD/AJ29l3iePimtnbG+zyWkuPCYmOSVgcc6cpg+PorhtQESVHXCfOOQW6ceM8GW21vHUouLRSIHB7pienPzUzd7aFWqCapZrbLY+IU3FVmZT7QtyfeiIvMz4KjG1MK2o00smsSNJ4wkra3W9zlx6DFc1OO1R59SL+0bdynXomsABVZEP0kTEO5j1HouMvBa4tdIIMELre9O9rRmoMAJdYyeHGAsDvDT9q32jacOYL9W/wBvpKC7MzyujoaWcoJQkQtkbRfQqNrU/eadDo4cWu5giy7H/wAT0W4X7SXgNLMzQTJnTIeocMp8Oa4ZTqwJKRhfa1iKLT2SS4BxytmLm/QeiPGQTVUKa3eUdGw37QqtWoHGm32TZkDW4gGVmdubyOxL5e8BoPZGrW9w+I9VB20xlKk3Dsd22z7Qie04xI5EDh3rP5UzXHK7OXOOJdFoccwGbvvF+fCBoB/ZM4jarnWAgd6hQhlRVFIG02G+u46lFVqEta06NBjrmJJP08kptMnQEpJatcFOLEveSZ4rffskwzDVqVCTnY2AI+F2pnwWFdhXiJab9OC6P+ybK0Vmz2jlMdLifNZbRGmkzo4KUmQ5GXKAB1BIzISoQsIQQRqEMbvpss1HEtF8s9/MA6SsJhAQ4B02JEEQe5dX262TTHzSPG0LB7cpiPbgXBhwjjwJ5JdyxJ5G6llGfZQLqpyjQm4/WqnYWm6lOV7XG4vckTrHdZMbDxjGVCamjpBIE5SeKt3uoPsx4JGubjy0+lklduzlD0MLhlU6oQ+Wh7ZnjE98iNeHVJ2liAxodJBAiLGXA6yDxuOSl4hrR0fbKwmPpxlQdsYUeyBfYzxIAnjprbigww5LIfLSyjNgueS5xmTJPVS8Fs7NVaDGXW0mYExAuJkJ7C4RjiAD5SVdbK2YKTzUqPORok94uO+PxTtlyXC4ZiFfGWi33e2bUOQENHsxOQWgOtLuRi8Kn3+xeasynwa3Mf5nmRPc0N81qt1KmelUqMblzZufMQTJN/yWD3mdmxdfpULf6Ox/2rn+6k7lJrjD/PIaiacmvQq8y7DuRhfs+GYxwEv7b5sczhME9BA8FybZlD2lanT4OqNB7iRPpK7iCulXlMDr2tqiWFJjHe6YPL+yxe/O5BqZsRhmj2mr6Ytn5uaPm6ce/XU04U9jnRZ3mJTWFJcnKrtlVLMWeeMq6FuVvOKhbQxFTK/Rjz8f3Xfe5Hj36yN+t0DVzYigB7TV7AIz/eA+b69+vL3kpd5gzrrZqa/ng9BOqMboB3m368lk95t63MPs6LoOpdA05NmfNZnd3eYvAoV3drRrz8XJrjz68e/VG32g1f8AaPxWZ3SfC4B6X2enbifIzitqGp/zCan81/qktxbBrTHmR9Cm2U280VSiOBS+ItnX+h1rhIWcTQJk0hP8zvzU0bZbECm3SOJVNUposwHBW6YsFZo14KDHHK9zQIE27jceijU6hDg6TYg+SnbZHaB5j6f5VeAipYL28clpj4JgGbkk31P9gFDyK52PsStXZNNjnAAS6waOBzPdYac1ZYPd0moKTX0nPPBs1SI1JcBlaB3pj3ijE41u3c0ZmlhXO0Clfu6PePDhquh1twSKZIrFz4mIygm1gZMDXgjwP7PwXD2lWWCCQ03Jm7NBAjjr0S0tbHPZjgwlCk1mkyf1Ct8Hu7iXQWYYtGsuytt3Ogrq2C2HhqEGnRY0/NEu/qMn1TuMuJCT1Gt2J47JFt9HAa+Iqvdka10zGUAl08RAW2/Zts+rRfW9tTcxzmsLcwglpJv0uNFpNl4ClQc802waji55kmSSTx0FzYK2rNGUki4Bg/ruCNX7Rg5bUuAdsJYFteke09FXMrXlFiMQQQQbaHxXRbE0i2bVslMryFVYfECSBwQq4gg2U3EwaxBBBEMlZt9k0wflePIyPxWAxQJpYlh1AJ8jK6Vj6eam4dPpdYDE0f4ldvzMd6hCkviDwfBzqq4h2vFWT9nPtIJHoJ+irsXYg8iCukYao19FhaA4lszAJ01uk9Vc6lFpD1UFJtMxmJ2TWD2ugkiwkzwtqeqVidkVi0veScokzw/Ja91acpLZII1F9QpmMpyx41lp4dFz3r5prKHFVFLg5UAWmxgjiLK7wWZ+He5xLjniTfgD+Kg4lg7uHiFa7PEYU9ajvQAfgutuTWQT6wbnczDZcKDBMkad65ltZx+0Vj/71T/9uXYtjVWUcKwOMH2YMXmdVyXePs4rEAD/AFqh5Wc4uHoUPKwuStLl2S4F7p0pxtAff+jXFdca0rjmwsWaeJovEAio0X0uct79V0HG75MpuLIDnNMEw6JmIA/GVqM4pk1lU5yW1eDTsmVPpuss1gN4GVDdj2D5nDsExJGYaHvhXAxjeBCZrnGS4Zy7ISi+USMQ+y5xvtu8KhNaiIqauaPj6j731W6q4mbDUp3C4RogkAuPHl3fmsXSQfTSdb3I4D7M93fZaHYlcVnilWqhrrNY4iQ7hlcZEHkePfrtd89zxWzVsOP4wu9lv4vGW/e+vkuX1G8DbhHKNZHBLPlHbpv3LMXhnUq247Q2fbFp6tEcdRIjgov/AAZIGWr2vvMLWno25OnFQt1N5xUaMPijLgAKdQn3iIysfNp66nv11eLrFoY2QM0y4Ou2DHG9oQ5WbfsgfpOpi9rn+iMJjdiVaZILcwAnMztCOdtPFVT2roL8aA4tc0Bpv2gQHG0AWBi3roFT43BUq0kENMGHGAc3Jw+LTvVxsTHIayX+4v7o59tpvu+P4KFRpxciZ0Csd5KLmPFNwgiZHfEfRRM15RJM1bJPo6PunscYjCUhVe9zQHQwOLWACpUsAOsmeq2G727tLDB2SZeQSSZMDRo6a+aqNxIbhqQI/wBMH+pz3/8AcFsA4AJJW728vhHn7s73j1IeLeNAnaFPKOaiVWkugKxaQudS/eWSlLvwbmtsUkRKxe7T+wUbE4dxHafI5AR5mbqzq6KrxVQ5SsWqMHjtvyarbkVtSxsrKlTHsyHHUKgdiSXdm8Kfh3fMZ+ii+DlhbYZRAqO4KPVqEcbfrVWu0WZmyNW/TkqglN6bUyraWeBaytSWfI39odqOGoThrlRsK6XQND9P8yFZDCHku5CW5ZQi1g3KCAKMlMgxDhMhY3a+HLMQ0/M2J6iy2gCz+PDaj3scHSwyHcp4dQVizC5YSBxradKCRyJ9CtxuZi6f2VrTGYEjyuIHcVU7wbAqhzjlGUuN7cTw179FH2IxtIOZVJzAgtmY6xI8eGi5+rjvr2v1OjXJbso1mKxdMtMZbdRf8uCU3bFJrW3zOjQaTproszisW0zJMcBDe7Sbf3SaFZlgGm2ggnhyAM+a530RNDbmsFVtKoBULS02PkDoulbobuinQY+qAXkF4aR7gcZFj8UR3THfl8Huy/EVWurD2bXQASC3NGjQHHu634rqeOdlpktGgMD3RI0ExYdV0JL+mha21N4iUxxwDHF9N7SAbZcz3gCTAHHouTb7T9o9qT/zWh0ZXNOZv8Nwym49yfFdL2hUINJ9VzW3DST2mNe4Cwg8QSMxOp6Ki/aKWPohzGuc6k+QWtJaGODQ9pdwg5D5oVUcMLTZtmvvOa0WuNz+uS6Vs3Y9HEU6eJlxce25shwLvjBEaZgfJc7ZWBtxW1/ZxtUAuwjzAqSaZ+9HbYLi5Fx3HmiWZ8DN6e3K8G3xWGFVpYBlvAaJ5zm1vr+oWboVG0w5jXSQ7S8ReQORmLdFoixtPtNOWJmxiCQRee7rqqDeTaIfmLIDYtzLr3PO59Usp4fHYpVFt7fBabu4rOXE8LD8SPRX9JsAnhpH4ei55sbH+zfJNiPA9Omi2rcdYAjiYPDQcVqdnxZkEtoaeIk57iRFhYzb4Reeix+++6orn29Afxz71MR2wB71vjtPUC91q6FcFojib3sdQCRyGqjvqlpmxvJJtaY14XkrXvNvIKClGXBw8693P1stxulvMHAYbEOMmcjybuOoYZtm4Bx1mD1c3z2GKrPtTGhlRxMsBj2kXmPmgi/Fc+BEGddIPqIR01If2q2Hz2dbxNInNmDu03QSCTIi0ngR3EQqvEPDZblGW+Z8SZBnNmvEgjlos9sLeEkCjWeYAOVx+KJIa48SdATKmbw7Y9kzI2C6O8FxEGw1ygm6HtMqqS47MrvBiva1nGZDeyD0br6kqKxhdAHEgDvNgkNarvc7DTXDuFPtX0zGzB5yf9q3J7YZ9Asmox/A6TsSsxjAz3YAaJ0IaA0QdDormnVl1tOIVNQoD4eyfQqczDdHNPzUz9W/+K422M3lPD+fnycmTce+S400TBrwoDqtQaVabujwWO9PyTjDUgh1Imfle0+IzQhPSzcsp/P6EjZFdljTxYdbzUTGsHDRV+KrmlcUn3+ZoPqwlL/eAePcqT/I8x4gXWrK5tcrk2nFPK6K02tyTjXpyqWg2a+erXfiE0ATox3jA/Fa93J+DTtiNY2u5xgm0aCybwWHc9xAHBTmYSfe+qsqWIDAKdJmZx4NB8y43PcICbpo5Tm/5YtZZlYiUdPBeyceJHAcDqprK0iYUV9QB5GYOPEiMoPyt5wjbWHBdmviInLs2oSQ6Umq7gNT6DiUsNTQINQcVs8OcXgmYjoVPSS5VKKksMtNrlGK2xs8uqseKYLm5cznRAh1yRyg6rT5MzXkNDmZiQIaTMzAnVPYnCMqRnaDGnREzZVMyWtgnUtsT4peVHDXqFVmWvuKXD4Cg4y6jTBJjtMbIIubdwU2mAG2GQXFmi0cbDknKez2sJINT/dUefSUNoYCnWaG1GgxpIFu7ks6bTumDX8hbI+8eWS/bsc1oY7MWEEQASP5pFvRRPt/txmDQWBzmuJJF2gXA4iTCbo7JpgZSXxpd7ojlEwpbaDaTMrRAJ0E6/qFLIyVfJUMKeCkxewaRblpjjIE9lrhJBDY58o1SqtCRlEkHMaluzeQ4EuNgYI4wI6KeG0yScxbpcGOMR9FW4rZZYMtOvkBMguDTxm5PIm3ekG21yOLhnKdv7L+z1nMF2G7HH4mHS/MXB6jqq5mIyEFpILSCCLEEQQQecrf7e2RWrtDatRhIbnY+O1mMNc5zR8JIAtylc5x2EfSe6nUBa5pgg8+9Gg93B0qpqa+82tDe012RVIDhEgAX6tHfryk8EbHGpc2aNB+awVIkGQYI4q/wu3Zb7N3ZPF3Aj8EOVWPqhI0pP4S4ex4+C3eFc7G2g5sNeNIgekeIt4BQcHXzNE368+qce6L8lmccx4CNbltaNK10ZYmASDHEPu0+ZUepi3hrSTJa/K6QNLGf/sfJDZlcOhp4iPO49fqptaiHNd1aHeLbH6lc5PD5Qs5JPDK7G4kn2zHEEUxLSeJkA+chZPeHZLX5H0/fczM8WAMSPOx9FrtpYa9QgasafMtKy+3NoU6RInM7IBlHMgTJ4alN0tZ4QzTta+fRf8Apip5/rojq13OjMSYEBHjMQXuLiAJ4C2n170mi3inzb4HAOC1uxcO7DNDozT70zlzcYI5C3moGx9luH8R7Wgx2Q8AhoPxlpuSdAIOsq+pPysLJa2YzZCRBBkCGzNwDr9VhsRvllYQ8N4XMd2Wy2Lg8D0IWq2btAVKbXtkBwmOXMLBVWMM3IPCJ9QfwKm7H3jpNa2mcwixMEjXWyS1OmzHdWufuEsZN6MTwS6ddo1YO+As+zGhwlpBHMGUf2uOKRjKyLKdSZbbSqAkCSO4kfRHhag+Z3mqOpjiTqn6WLgaq5Oe7cX7vEcE3aOIaDEnzKiMrjkoNaq5ztUTKkalazLsirSRa/aQAoG09sOyOYx2QEfDqe86nuVficZwb5qNrrdP6WEnyxezCF7Ocbm0OOYRPHX1UipWM2I81A2Z8IdAMEAHWx5dyl4nDuJkAac10l0LPs6Th6Zu46u9BwATyCCcACHk3Fx1/FJZSiBeycKMKsECa1Fs98Eg8YTpEAnofoqQPPNRjmnr3RZo30w7UKp2o9tBud0kaADWVNw1F7AL5hy5dyqt7CXUYa1xdIsASRreyjfBuqGZqOeDM7T3pqD3AGg/7j62U/OamDp1H1HWLi4g5TBJGovHdGqzjNh4moR/CLR94ifIGyvhsiq2nBDS2LidAO+yVsUpJobuUI4UPUqqbGmwqOBEQ4OcCY58/G6kY3C1iJGJJGnbaHW4kwBZVf7rc2PZv4aOBiw4Hh6pjF4ytTaczDFuPZMmNRcLnumS6Li9z4Y1X2hWokEVabyYMgSW/dMm0fLzVBtwPqxn96SQQLdq8A6kTNuHBDGPzHMGho0gFxA8XEn1Tb/rHn+pTKgkdamhJZKYUCDDv89QlubbRbLd/ZrXseXtBa6AARa2pHEa6hQtobsZQ97HgZfgfxJMdlw18Y70D30XY4FyXOEZilVez3SR9PLRWmC209gIc1rp7woeIwlRgl7HAc4t56JincomU0ay8YNFh95nM0p93a/8VPO/lSIbRYDDhdznWN9BHFYhxuplF4i6G6IN5aBWQT5ZZ7R3ixFaQ6pALQC1gyiBFrXPiVS1D9VPw2FNQxTYXnk1pcfIK0O5mKgvczK0atkF4HPKNPEo0a1FcGYzhF7ejNCg4mACSdALknkANVpd3tg9qawMg+5EgSDd19RGndKstiCnhzLQWu0JeMxPODYs/wBpVrtJza7CAxuaLFroE+ICtpSXDNWOae1rj1CqYENIJqNBHGQeOp9E1i6QcTNYOImYjTncwqelsmo52VxyuHAm8dOiLFbEqNHu26XWFQKWVwTw7OfwJG0AxgDm1A8AfDlmx0MGZ18lmqdQBPvpQbhNiu1rg5rdOenkmK4pcAnHamlyPUsS5l2lzTzBhT6G8tQe8A7rofS3oq/GYltQAwGETIF56jkmcNRc8wwSZVTqhL6yKrSxmRp8HtplR2WC1x04g+KnOxcWm8KBs7d/I4GpmB55HGO5oHqSnKmDqNcXNaXAEwRBkAxMAmPFIzpg38PRmUo54JH7wtI4a944KO7EF4B4ET5qvxOKqZswAbJvIgfRSdkbUpuc2lUGVxIaHC4nQTyUWn8oFKWCQwHTpKk0mi1tf0bq4ZsftNN9CD6EfQp1mzbiAYvfl4apqqtoTnNFA3An2gqNdaQSIF7RY8LK3a1T6mzCB2QCYsDa/ff6J5uBamowaASlk1IREos3Q+n5pttUzGRwHO0ehR20YUR5E2pePwP1RNnj+UeqDRwiysoca79WukDCU9cjf6QlApdNxVGlJokgpNWmHahJDkMys2pFFtvFfZyABOYWJ4LFbY2xUe8Bzuzy0Hktbvbha1WPYsDuzHaNheZjis3h90axOaoZPfA8ggT3eDo1W1Qim3yCjUlPvp5rRmjMcvB0AgAz1cFbYTYJHvH9fqFY0NmMHBZVbfYm7Unwcq2tXYGmi3DezcIzOdJfa89Jt4JO72DbUMu+Ai3MunXuhbzEUDTLziW0skdkgZnv1nNItaEhmFwjWGsGBoEZgwZZ5AtHGSuVrdXtk60nnrj9jtw1WK3GPnz3+4KDg1zmMaCG8dJ4J19BjndpucC8HnE6rOu3posJcxlQybg5Wn6lPu30YCXNomTcDMLc5Md6T+j2PlIVWl1GcqP6/wCSXVwtPJVeyWtpsLrE3gHhxvZYvGtm7mtk8TTa0/SfFbPZe2KdZj2sbcubnDoMg3kc7j0Stp7ApVZdfNES0js6m7dFK7VVJqSf74OhpbXW3G79Tnh2fTiYbPLtT+Su9ntwjGtDmNc4C59nOv8AMom0cE6i7K4gyJBHEaeBtooweIiLzrPDlH60XQcVZHvg6cq4WRX8G62U5rDnZGVw0FgRb4RA4K4/eQjLFtIAtBWV3eaTSE6SY7v8yrumxE08ZwjtycHUwgptPwY/aQIqkeHfyJHcUyaxYfyt6LQbwYK7KkW0cfUek37lkMQ+SSSr2tM6lNsboL8C+wmOZUIa6CRpfK4H7t58irmlUeLB7X/dqAh39TRfxasA8D9BPUNqVadmvJA+F3aHgDp4JmE8HO1ekUvqv+zLjevB9kVMgZ2oMOmZmIEA8FlHQOqudq7eNakGFkEOBkGRYEaG415qkFJx0BKJxkWrzCGJABVrs7FGmQ4WPC3HUGPVVwwVXhTee5rj+C0Oy9jGtRbZwPOI0tF9VmccmbLYpclxgMe4thxPCZB1HEHgf1wSHU2NqB1gLXa0SZ+chwkkjWOqsMHsnENyhtRsDSWkEcrtdfxVlUpVW5WPpUqntCWhwgQcs3lvGHJR12IArYvpjbWUKhOaNIkguBPKx/UrAYvDCni2Bth7RpHH44t5Lp9LC5GFwouzNBy3ab6ZeyRxtMLG0918VVriq6kWhsZQSAbEmTfWSSt0wmm8lSsjjs09DH6Tw/x+KZw+1oxLmFuoDgb6GztBBEjXnZO4fd+qIJgJVfYOWoypxyPaIt2rPb6Nf5o6jJCmUWj8XEW1eGiYuSNR0/IqU1lr68Y5o6WGACcbTMcuh/sUygRMafJKjiggoaBKCCC0ZDBQjn5IIKEFgo5QQUIIekoIKECjVBBBUQi47ANq66jj+YVBvPgMlBoAEGq2YtwdEoIJSzSVOfvMfEOaW6SnGPjJz3HVS+s50APkA2vmbAkjibeKr6hEfrWb9yCCAlzyezlJKKSWODR7klg9oXe92Y/lv+K1NDCg1XVZ7OXu0ECeBQQXE16atbT7Obq1tefUrNsbIp1qgmoWgNMQJJkk89FWjdFxsx57y239kaC62iq+BZZyp+0L6/qs0uy933U2AOdYW0j8Va0tmgC97evkggunGEUc6y+c+ZMVWwLSyHMs6xBk2PcoNDdLDAXp5jzJcfxQQWtib5MRtnFYi2v7j7N3MMP9Cn4tB+qebsaiNKNIf9NqCC1tXoYdkn2x0YNg0Y0dzWjx0TeKaymx1TLIAzHLlv1uQDZBBZm8J49GSKy+Q6uBBAMxob/RFR2eL9/5IIKeSscEhmHAIEdyM0wXZOIyvnlcga9xHmggoy0LLDle2Ju6O89oep9E428EaG/eCEEFZBaarnQzEEfkfQoIK2UDD+7xEEi/QkfglEoIK0Uz/9k="
                        alt="Limited processed foods &amp; refined sugar" class="w-full h-full object-cover"></div>
                <div class="text-center md:text-right max-w-md">
                    <h3 class="text-xl font-semibold text-gray-800 mb-2">Limited processed foods &amp; refined sugar
                    </h3>
                    <p class="text-gray-600 text-sm">Reduce inflammation and support better hormonal balance.</p>
                </div>
            </div>
        </div>
    </section>
    <section class="relative py-12 bg-gradient-to-b from-pink-50 via-white to-blue-50 overflow-hidden">
        <div class="text-center mb-6 md:mb-10 px-6">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-3">Demystify the Journey</h2>
            <p class="text-gray-600 max-w-xl mx-auto text-lg">Key pillars to guide your fertility wellness, explained
                simply.</p>
        </div>
        <div
            class="flex flex-nowrap overflow-x-auto snap-x snap-mandatory sm:grid sm:grid-cols-4 sm:overflow-visible mx-6 md:mx-auto px-6 lg:px-20 gap-6 scrollbar-hide">
            <div class="min-w-[80%] sm:min-w-0 snap-start flex flex-col items-center text-center space-y-4">
                <div
                    class="w-24 h-24 flex items-center justify-center bg-purple-200 text-purple-700 text-4xl rounded-full shadow-lg animate-bounce-slow">
                    <i class="fa-solid fa-moon"></i>
                </div>
                <h3 class="text-gray-800 font-semibold">Sleep Cycle Regulation</h3>
                <p class="text-gray-600 text-sm">Align your sleep for better hormonal balance and fertility.</p>
            </div>
            <div class="min-w-[80%] sm:min-w-0 snap-start flex flex-col items-center text-center space-y-4">
                <div
                    class="w-24 h-24 flex items-center justify-center bg-green-200 text-green-700 text-4xl rounded-full shadow-lg animate-bounce-slow delay-100">
                    <i class="fa-solid fa-person-running"></i>
                </div>
                <h3 class="text-gray-800 font-semibold">Physical Activity Guidance</h3>
                <p class="text-gray-600 text-sm">Yoga, pilates, and gentle exercises to support fertility.</p>
            </div>
            <div class="min-w-[100%] sm:min-w-0 snap-start flex flex-col items-center text-center space-y-4">
                <div
                    class="w-24 h-24 flex items-center justify-center bg-blue-200 text-blue-700 text-4xl rounded-full shadow-lg animate-bounce-slow delay-200">
                    <i class="fa-solid fa-spa"></i>
                </div>
                <h3 class="text-gray-800 font-semibold">Stress Management</h3>
                <p class="text-gray-600 text-sm">Mindfulness and relaxation practices to improve fertility outcomes.</p>
            </div>
            <div class="min-w-[80%] sm:min-w-0 snap-start flex flex-col items-center text-center space-y-4">
                <div
                    class="w-24 h-24 flex items-center justify-center bg-pink-200 text-pink-700 text-4xl rounded-full shadow-lg animate-bounce-slow delay-300">
                    <i class="fa-solid fa-brain"></i>
                </div>
                <h3 class="text-gray-800 font-semibold">Mind-Body Therapy</h3>
                <p class="text-gray-600 text-sm">Tailored therapy for emotional wellness and reproductive support.</p>
            </div>
        </div>
    </section>
    <section class="relative bg-brand-blue text-white py-6 text-center">
        <div class="container mx-auto px-6">
            <h2 class="text-3xl md:text-4xl font-bold mb-3">Eat Right. Live Well. Conceive Naturally</h2>
            <p class="text-lg mb-4 max-w-2xl mx-auto">Our fertility specialists are here to listen, guide, and support
                you — with care that’s both expert and empathetic.</p>
            <div class="flex flex-col sm:flex-row justify-center items-center gap-4"><button
                    class="bg-brand-pink text-white px-6 py-3 rounded-full shadow-lg hover:shadow-2xl transition-all duration-500 hover:scale-105"><i
                        class="fa-solid fa-hand-holding-heart mr-2"></i> Book Your Consultation</button> <button
                    class="bg-white text-brand-blue font-semibold px-6 py-3 rounded-full shadow-lg hover:shadow-2xl transition-all duration-500 hover:scale-105"><i
                        class="fa-solid fa-calculator mr-2 text-brand-pink"></i> Talk to a Specialist</button></div>
        </div>
    </section>
    <section class="py-12 bg-gradient-to-b from-pink-50 via-white to-blue-50 text-center relative pl-6">
        <h2 class="text-3xl font-bold text-gray-800 mb-6 md:mb-10">Meet Our Delhi Fertility Experts</h2>
        <div class="flex gap-6 overflow-x-auto px-6 pb-4 snap-x snap-mandatory justify-start md:justify-center flex-nowrap md:flex-wrap"
            role="region" aria-label="Fertility experts — swipe horizontally on mobile">
            <div class="snap-start w-56 h-72 flex-shrink-0 [perspective:1000px]">
                <div
                    class="relative w-full h-full transition-transform duration-700 [transform-style:preserve-3d] hover:[transform:rotateY(180deg)]">
                    <div class="absolute inset-0 [backface-visibility:hidden]"><img
                            src="https://images.pexels.com/photos/5215024/pexels-photo-5215024.jpeg"
                            class="rounded-2xl w-full h-full object-cover shadow-xl" alt="Dr. Meera Sharma"></div>
                    <div
                        class="absolute inset-0 bg-brand-blue text-white rounded-2xl flex flex-col justify-center items-center px-4 [transform:rotateY(180deg)] [backface-visibility:hidden]">
                        <h3 class="text-lg font-semibold mb-1">Dr. Meera Sharma</h3>
                        <p class="text-sm font-light mb-2">IVF Specialist</p>
                        <p class="text-xs leading-relaxed opacity-90">With 15+ years of experience, Dr. Meera
                            specializes in complex IVF cases, high-risk fertility treatments, and advanced reproductive
                            technologies.</p>
                    </div>
                </div>
            </div>
            <div class="snap-start w-56 h-72 flex-shrink-0 [perspective:1000px]">
                <div
                    class="relative w-full h-full transition-transform duration-700 [transform-style:preserve-3d] hover:[transform:rotateY(180deg)]">
                    <div class="absolute inset-0 [backface-visibility:hidden]"><img
                            src="https://images.unsplash.com/photo-1537368910025-700350fe46c7"
                            class="rounded-2xl w-full h-full object-cover shadow-xl" alt="Dr. Arjun Malhotra"></div>
                    <div
                        class="absolute inset-0 bg-brand-blue text-white rounded-2xl flex flex-col justify-center items-center px-4 [transform:rotateY(180deg)] [backface-visibility:hidden]">
                        <h3 class="text-lg font-semibold mb-1">Dr. Arjun Malhotra</h3>
                        <p class="text-sm font-light mb-2">Chief Embryologist</p>
                        <p class="text-xs leading-relaxed opacity-90">Expert in advanced embryo culture and
                            cryopreservation, Dr. Arjun ensures the highest standards of lab precision for each IVF
                            cycle.</p>
                    </div>
                </div>
            </div>
            <div class="snap-start w-56 h-72 flex-shrink-0 [perspective:1000px]">
                <div
                    class="relative w-full h-full transition-transform duration-700 [transform-style:preserve-3d] hover:[transform:rotateY(180deg)]">
                    <div class="absolute inset-0 [backface-visibility:hidden]"><img
                            src="https://images.pexels.com/photos/5215024/pexels-photo-5215024.jpeg"
                            class="rounded-2xl w-full h-full object-cover shadow-xl" alt="Dr. Meera Sharma"></div>
                    <div
                        class="absolute inset-0 bg-brand-blue text-white rounded-2xl flex flex-col justify-center items-center px-4 [transform:rotateY(180deg)] [backface-visibility:hidden]">
                        <h3 class="text-lg font-semibold mb-1">Dr. Meera Sharma</h3>
                        <p class="text-sm font-light mb-2">IVF Specialist</p>
                        <p class="text-xs leading-relaxed opacity-90">With 15+ years of experience, Dr. Meera
                            specializes in complex IVF cases, high-risk fertility treatments, and advanced reproductive
                            technologies.</p>
                    </div>
                </div>
            </div>
            <div class="snap-start w-56 h-72 flex-shrink-0 [perspective:1000px]">
                <div
                    class="relative w-full h-full transition-transform duration-700 [transform-style:preserve-3d] hover:[transform:rotateY(180deg)]">
                    <div class="absolute inset-0 [backface-visibility:hidden]"><img
                            src="https://images.unsplash.com/photo-1537368910025-700350fe46c7"
                            class="rounded-2xl w-full h-full object-cover shadow-xl" alt="Dr. Arjun Malhotra"></div>
                    <div
                        class="absolute inset-0 bg-brand-blue text-white rounded-2xl flex flex-col justify-center items-center px-4 [transform:rotateY(180deg)] [backface-visibility:hidden]">
                        <h3 class="text-lg font-semibold mb-1">Dr. Arjun Malhotra</h3>
                        <p class="text-sm font-light mb-2">Chief Embryologist</p>
                        <p class="text-xs leading-relaxed opacity-90">Expert in advanced embryo culture and
                            cryopreservation, Dr. Arjun ensures the highest standards of lab precision for each IVF
                            cycle.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <style>
        .overflow-x-auto::-webkit-scrollbar {
            height: 6px
        }

        .overflow-x-auto::-webkit-scrollbar-thumb {
            background: rgba(0, 0, 0, .15);
            border-radius: 9999px
        }

        @media (max-width:768px) {
            .overflow-x-auto {
                scrollbar-width: none;
                -ms-overflow-style: none
            }

            .overflow-x-auto::-webkit-scrollbar {
                display: none
            }
        }
    </style>
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
