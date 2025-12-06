@extends('frontend.layouts.master')
@section('content')
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
         /* Media Gallery Mobile Scroll Fix */
         #galleryContainer {
            -webkit-overflow-scrolling: touch;
            scroll-behavior: smooth;
            overflow-x: auto;
            overflow-y: hidden;
         }
         #galleryContainer::-webkit-scrollbar {
            display: none;
         }
         #gallerySlides {
            display: flex;
            flex-wrap: nowrap;
         }
         @media (max-width: 768px) {
            #galleryContainer {
               padding-left: 1rem;
               padding-right: 1rem;
            }
            #gallerySlides {
               padding-right: 1rem;
            }
            #prevSlide, #nextSlide {
               background-color: rgba(255, 255, 255, 0.95) !important;
               box-shadow: 0 4px 6px rgba(0, 0, 0, 0.3) !important;
            }
         }
         #prevSlide:active, #nextSlide:active {
            transform: translateY(-50%) scale(0.95);
         }
      </style>
      <section id="offer-banner"
         class="relative w-full bg-cover bg-center py-8 md:py-12 flex items-center justify-center transition-all duration-700 ease-in-out"
         style="background-image:url('https://images.pexels.com/photos/8761328/pexels-photo-8761328.jpeg')">
         <div class="absolute inset-0 bg-black opacity-50"></div>
         <div class="relative z-10 max-w-4xl text-center px-4 py-6 md:p-12 rounded-3xl">
            <h2 class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl font-bold text-white mb-3 md:mb-4 animate-fadeIn">Empowering the <span
               class="text-[#ffd700]">Next Generation</span> of <span class="text-[#ffd700]">Fertility
               Experts</span>
            </h2>
            <p class="text-white/90 text-base sm:text-lg md:text-xl leading-relaxed animate-slideUp px-2">Choose from our specialized,
               hands-on training programs designed by leading IVF practitioners.
            </p>
         </div>
      </section>
      <section class="relative bg-gradient-to-b from-pink-50 via-white to-blue-50 py-8 md:py-12 overflow-hidden">
         <div class="container mx-auto px-4 sm:px-6 lg:px-12 text-center">
            <h2 class="text-2xl sm:text-3xl md:text-4xl font-bold text-gray-800 mb-4 md:mb-6">Explore Our <span
               class="text-brand-pink">Training Programs</span></h2>
            <p class="text-gray-600 max-w-2xl mx-auto mb-6 md:mb-8 px-4 text-sm sm:text-base">Advance your fertility expertise through immersive, hands-on
               learning experiences guided by leading reproductive specialists.
            </p>
            <div class="flex md:grid md:grid-cols-3 gap-4 md:gap-6 lg:gap-10 overflow-x-auto snap-x snap-mandatory py-4 scrollbar-hide">
               <div
                  class="flex-shrink-0 w-[85%] sm:w-80 md:w-auto snap-start group relative bg-white/70 backdrop-blur-lg rounded-2xl md:rounded-3xl overflow-hidden transition-all duration-500 flex flex-col text-center">
                  <div class="relative overflow-hidden h-48 sm:h-56 md:h-64"><img
                     src="https://media.istockphoto.com/id/1152441056/photo/laboratroy-technician-fertilizing-an-egg.jpg?s=2048x2048&amp;w=is&amp;k=20&amp;c=U_if-M1Q3LOQdMcl9yKWYuNLv5I21jn9D5NTFhlBdi0="
                     alt="IVF Fellowship"
                     class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
                  </div>
                  <div class="p-4 sm:p-6 md:p-8 flex flex-col flex-grow justify-between">
                     <div>
                        <h3 class="text-xl sm:text-2xl font-semibold text-gray-800 mb-2 md:mb-3">IVF Fellowship</h3>
                        <p class="text-gray-600 text-xs sm:text-sm leading-relaxed mb-2 md:mb-3">Master advanced IVF and ART procedures
                           through structured mentorship, clinical exposure, and real laboratory experience with
                           expert fertility specialists.
                        </p>
                        <ul class="text-gray-600 mb-3 md:mb-4 space-y-1 text-xs sm:text-sm">
                           <li><strong>Who Can Apply:</strong> Medical graduates &amp; specialists</li>
                           <li><strong>Duration &amp; Fee:</strong> 6 months / $5000</li>
                        </ul>
                     </div>
                     <button
                        class="mx-auto px-4 sm:px-6 py-2 text-xs sm:text-sm font-medium text-white bg-brand-pink rounded-full hover:bg-brand-blue transition-all">Apply
                     Now</button>
                  </div>
               </div>
               <div
                  class="flex-shrink-0 w-[85%] sm:w-80 md:w-auto snap-start group relative bg-white/70 backdrop-blur-lg rounded-2xl md:rounded-3xl overflow-hidden transition-all duration-500 flex flex-col text-center">
                  <div class="relative overflow-hidden h-48 sm:h-56 md:h-64"><img
                     src="https://media.istockphoto.com/id/1533148452/photo/human-cell-on-scientific-background.jpg?s=2048x2048&amp;w=is&amp;k=20&amp;c=ecB70XWv6R9usIeDETGni-dib0fJPa0IbfZRwlp12LM="
                     alt="Embryology Hands-On"
                     class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
                  </div>
                  <div class="p-4 sm:p-6 md:p-8 flex flex-col flex-grow justify-between">
                     <div>
                        <h3 class="text-xl sm:text-2xl font-semibold text-gray-800 mb-2 md:mb-3">Embryology Hands-On</h3>
                        <p class="text-gray-600 text-xs sm:text-sm leading-relaxed mb-2 md:mb-3">Gain practical experience in gamete
                           handling, ICSI, and cryopreservation with real lab simulations and direct mentorship
                           from senior embryologists.
                        </p>
                        <ul class="text-gray-600 mb-3 md:mb-4 space-y-1 text-xs sm:text-sm">
                           <li><strong>Who Can Apply:</strong> Medical graduates &amp; specialists</li>
                           <li><strong>Duration &amp; Fee:</strong> 6 months / $5000</li>
                        </ul>
                     </div>
                     <button
                        class="mx-auto px-4 sm:px-6 py-2 text-xs sm:text-sm font-medium text-white bg-brand-pink rounded-full hover:bg-brand-blue transition-all">Apply
                     Now</button>
                  </div>
               </div>
               <div
                  class="flex-shrink-0 w-[85%] sm:w-80 md:w-auto snap-start group relative bg-white/70 backdrop-blur-lg rounded-2xl md:rounded-3xl overflow-hidden transition-all duration-500 flex flex-col text-center">
                  <div class="relative overflow-hidden h-48 sm:h-56 md:h-64"><img
                     src="https://media.istockphoto.com/id/1450340737/photo/artificial-insemination-or-in-vitro-fertilization.jpg?s=2048x2048&amp;w=is&amp;k=20&amp;c=xYq4tCwmXLe4yGDeLuwjRpFsZXUWEX0njc5Wu41bPAo="
                     alt="IUI &amp; Basic Fertility Skills"
                     class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
                  </div>
                  <div class="p-4 sm:p-6 md:p-8 flex flex-col flex-grow justify-between">
                     <div>
                        <h3 class="text-xl sm:text-2xl font-semibold text-gray-800 mb-2 md:mb-3">IUI &amp; Basic Fertility Skills</h3>
                        <p class="text-gray-600 text-xs sm:text-sm leading-relaxed mb-2 md:mb-3">Learn essential fertility lab
                           techniques, ovulation tracking, and intrauterine insemination protocols through guided
                           clinical practice.
                        </p>
                        <ul class="text-gray-600 mb-3 md:mb-4 space-y-1 text-xs sm:text-sm">
                           <li><strong>Who Can Apply:</strong> Medical graduates &amp; specialists</li>
                           <li><strong>Duration &amp; Fee:</strong> 6 months / $5000</li>
                        </ul>
                     </div>
                     <button
                        class="mx-auto px-4 sm:px-6 py-2 text-xs sm:text-sm font-medium text-white bg-brand-pink rounded-full hover:bg-brand-blue transition-all">Apply
                     Now</button>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <section class="py-12 bg-white">
         <div class="container mx-auto px-6 lg:px-12">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-12 items-center">
               <div class="space-y-4">
                  <h2 class="text-3xl md:text-4xl font-bold text-gray-800">Learn From <span
                     class="text-brand-pink">India’s Leading Fertility Experts</span></h2>
                  <p class="text-gray-600 text-lg">Our personalized approach to fertility combines expert guidance,
                     advanced diagnostics, and holistic wellness strategies to help you achieve your dream of
                     parenthood.
                  </p>
               </div>
               <div class="space-y-6">
                  <div class="flex items-start space-x-4">
                     <div class="flex-shrink-0"><img
                        src="https://img.icons8.com/?size=100&amp;id=JCDjQ3zAwdDu&amp;format=png&amp;color=000000"
                        alt="Expert Team" class="w-16 h-16"></div>
                     <div>
                        <h4 class="font-semibold text-gray-800">Certified Faculty</h4>
                        <p class="text-gray-600 text-sm">Certified specialists with years of experience in fertility
                           care.
                        </p>
                     </div>
                  </div>
                  <div class="flex items-start space-x-4">
                     <div class="flex-shrink-0"><img
                        src="https://img.icons8.com/?size=100&amp;id=SEcqMs09YlJc&amp;format=png&amp;color=000000"
                        alt="Advanced Diagnostics" class="w-16 h-16"></div>
                     <div>
                        <h4 class="font-semibold text-gray-800">Advanced Labs</h4>
                        <p class="text-gray-600 text-sm">Cutting-edge testing and personalized assessments for
                           accurate insights.
                        </p>
                     </div>
                  </div>
                  <div class="flex items-start space-x-4">
                     <div class="flex-shrink-0"><img
                        src="https://img.icons8.com/?size=100&amp;id=0HAGNdamoJug&amp;format=png&amp;color=000000"
                        alt="Holistic Wellness" class="w-16 h-16"></div>
                     <div>
                        <h4 class="font-semibold text-gray-800">Hands-on Learning</h4>
                        <p class="text-gray-600 text-sm">Integrating lifestyle, nutrition, and stress management for
                           better outcomes.
                        </p>
                     </div>
                  </div>
               </div>
               <div><img src="https://images.pexels.com/photos/5940842/pexels-photo-5940842.jpeg" alt="Fertility Care"
                  class="rounded-3xl w-full h-full object-cover shadow-lg"></div>
            </div>
         </div>
      </section>
      <section class="relative bg-gradient-to-b from-pink-50 via-white to-blue-50 py-12 overflow-hidden">
         <div class="container mx-auto px-6 lg:px-16 relative z-10">
            <div class="text-center mb-8">
               <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4 leading-tight">Led by Experts in <span
                  class="text-brand-pink">Reproductive Science</span></h2>
            </div>
            <div class="container mx-auto px-6 md:px-12 lg:px-24 flex flex-col md:flex-row items-center gap-12">
               <div class="flex-shrink-0"><img
                  src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBxMSEhUTExIWFhUXFxcWFhcWFxUXGxYXFRcWFxgYFRUYHSggGBolHRUVITEhJSkrLi4uFx8zODMsNygtLisBCgoKDg0OGhAQGi0dHyUrLSstKystKy0rLS0tLS0rKy0tLSstKy0tLi0tLS0tKy0tLSstLS0tLS0tLS0tLS0rLf/AABEIARQAtgMBIgACEQEDEQH/xAAcAAABBAMBAAAAAAAAAAAAAAAAAwQFBgECBwj/xABEEAABAwEFBQUEBwcCBgMAAAABAAIDEQQFEiExBkFRYXEHEyKBkTJCobEUI3KCwdHwCDNSYpLh8aLCFSRTo7LDFiVD/8QAGQEBAQEBAQEAAAAAAAAAAAAAAAECAwQF/8QAIxEBAQACAgMAAgIDAAAAAAAAAAECEQMhEjFBBFETwSIyYf/aAAwDAQACEQMRAD8A7YhCEAhCEAhCEAhCEAml7XpDZYnTTyNjjaKlzj8AN55BYvm9IrLC+eZ2GONpc47zTc0b3HQBeYNvdspbztGNwLIm5RRVJDB/ERoXneeg3ILdtl22zyF0dhZ3LNBK8AyOHFrT4WfE9DpzuTbG8HOLjbrTUmuU0gH9INEx+jE71n/h7zoD6IuqnbDt9eTchb5h1cHf+QKsFj7Wb1jpWdkgG6SJh9SzC74rnUtnc3UEJWGY6Kylxsdw2b7aw54ZbIAxpoO9iq4A7y5hzp0qutWK1xzMEkT2vY4Va5pBBB4ELx4HcFbOz/baW7Zair4Hn6yKp/rjGgfr137qNI9PITa7LwjtETJonB0cjQ5rhvB+R5JysgQhCAQhCAQhCAQhCoEIQgEIQgEITO+rxbZrPLO/2YmOefugmnnog4V26bVGe0/Q2H6qzmr/AOeYt+TWmnUlcws8Re8Ab1reFrdJI57jVz3Oe48XPJc74kqx9nl3d9aBXRuZUyuptrDHdW/ZDY4EBzxUK7f/AB6EDJg9FJ2SINaABRLkLzb37ezUnpTr02SgkNS3MVp58lTL72IAzjy8l197FHWuAEFXdnpr31XnyeAxuo4UzotyylDWoOhVo7QLuwuxDiqhC8jwlenDLcePkx8a6X2RbZ/Q5/o0zqWaZwoTpFMaAEcGu0POh4r0EvGz3Z8l6P7HdpfplhbG9xM1npHIXGpc3Pu38TUClTqWFWua9IQhQCEIQCEIQCEIQCEIQCEIQC5j2/X0IbA2z1OO0PGh9yItc6vKpYPNdPXmXtyvv6Reb4x7NnaIh9rJzz6mn3UHPgKldj7OblEMQdTxPzcfkOi5TcNm72eNnFwr0Ga7PYbTKfqrOAMOTnu0rwHGi48t+PRwz6u0MeSULVSZbdbofE6RjhwH9wpy6L+MlA9tD+K5a09Gql3syTGWMhbvtpY0mQNrU0w1pTdWu+irVu2oeTRkdfJJ2utIbbyzAxniM1yOQ711K/L0e5pEsTmV0O6vVcxvBtHkLtx9PNzT6TbIr/2M3yYLzibi8E2KF/DNrnR+eMAfeK52zVOrDaHRuD2mj2Oa9p/mYQ4fEBdXne0EJpdF4NtEEU7PZlY14+8AaV807QYQhCAQhCAQhCAQhCAQhCDD3UBJ0Ar6LxjfVvNotE0xJJkke/P+ZxI+BXrPbm3GC77XKNWwSU6lpaPmvHwQXLs3uwySuk/hGEdTSpVwv36XCAIGYWV8T9SK6kNGqZ9k8Y7knfiK6zZ7Ix7KOaCvLnn/AJvfx4645/1xSC12wy4TNibn45KBhaKU0zBPrVW3Y+OSUguYW505Gm8cRuryVzk2bswJcYx6lK3ZZ2g0aAANKKZcks1ox3ig9rosABxENFSSOAVFm2kwMErYCIy7C17xQOIFdSQuuW2FrzR3xUHbdioXtIDaA5kDIV400TDKT23lllrUc5G17Zxgkiwk1DeDqa0VGvuEtfy3dF25/Z/AM8FacfwVE7Rdne4aHDSuR/BdJnPLpyzxuWPbnZK2jOa0eFli7vE9T9jtoL7ospca0EjB9lksjGj0AV0XM+wC2B92ujrnFO8dA8NePmV0xBhCEIBCEIBCEIBCEIBCEIKT2z2jBdFpp73ds/qkYD8Kry05ekv2gJy26wP47RE0+Qkf/sC83SoOn9mE+GEc3O+a6rZLcANVybs3YHwUGRa4g/D81e2ROaNarwcn+9fU4tXjxTF5Wt7h4M6Z048lWINqLTG497AGj3S2p8nAjI+qUk2nhhcWyF1dMmuNeQNKFb2PbGwSGktW83D5gZhJja6Tiyvcm2kW2MhlDXWWQsOWPLLoK1KuF3XhXJwpwqoCLaSwk0jmaOFQW16Ehb2m2A0LSCNaggpZpm8d+zS1TStIXMe1ZwdB0Kn33uQqdt1aDJC6vEJje4lw6rkrysAraUZrRe98u+3a/wBnK3/WWqCvtMZK0fYcWOP+pnou5LzR2F2ssvWJv/UjlYf6Q/8A2L0wiMIQhAIQhAIQhAIQhAIQhBy39omQC7oW7zamH0im/NeeJF3r9pCv0Wy8O+d64P8AK4KTkgt3ZxfIhlMbjQPzHUbvT5LrdltjSF51ikLSHDIg1Hkug7ObT42gE+Iahebm4+/KPZ+PyTXjXV7RdsczKOaD+tyhZriLfCGgt3CRodToUts7focKEq0MtDSNy5S2PZjy54elQj2bY/J7GdGsA+NFIWTZyzWfONlDvNTn5Vopua0MAqSFWr0v1uKgIPRLlaZcuWfs/fAzkqP2gyNZARvJUla9oWtGua5ztne7pSAT5cE48LcnLkz8carL3VWoCwEvBHU+nxXvj5i39jx/+4sg/mkH/ZlXqdeXeyWOl82M8XSfGCT+69RoMIQhAIQhAIQhQCEIQCEIQcn/AGjWf8jZ3cLSB6xSfkvPdV6R/aCgLrrBHuWiNx6FsjPm8LzbRAJ1dryJG06JqpbZ6xtfJikNI2BzjzIGQCWbmlx9rHZra9uYUrHtTK3KvqaJnHZSWh1Ov90o6CurQvBco+tjh10LXtLM/V1ByzKbNt7iMLQc9/HqlG2Cp0aOp/snv0URsL3GjRnUDCDyxHXyCssvpnKWd1C2x/ctxv8AE7cOCqFomL3FztSpO+7cZDwbnhH6+aiF68MNR8/lz8qwErDLRJLIXRzdH7G4O9vWzkZd22SQ76gMc3/2L0suKfs83A8d9bn5Nc0wRV97xNc9w5Ata3+pdqQCEIQCEIQCEIUQIQhAIQmluvSKH948A8NT6DTzQUXt7tQZdRYdZZomDyJkr/o+K80kLqPbXtlFbpooLO4uihxF7qEAyk0IAO5oGv8AMeC5gxUaBtSArRaQ2ERQ0zye88Rrp5DJQl2sb3rS4+FtXHo0V/BTVlifa7QZCPadl/K3QD0opcvGbbwx3V0uIukaSW0xEuA1yKevsQGoCl7luwFzQQQ1raDz/wAJ3bbsa0Gr8ua+Zd5Xp9fC6mlaiLIwXYR6KkbQXs60Pr7o0H4qW2tvNo+rjNTvP6z/AEVT5ATkNdTyHPgvbwcNx7yeL8rl78YY2l1SkiKKS+ilrcTQaVNZCKDIVoz81HPcvQ8bVSeztySWydkEeRcdeAG8qNY0kgDUmg6lejeyjYVtkgZNKAZ5AHHL2Aa0GfI/EpIlq2bI3TJY7LFAHNLIxQVZQ0qSc2kZknU151U8Jxvy+SyRksUFKK6TZRCbNcWH+X5dE5BWbNLsIQhFCEIUQIQmdst7WggZuodNx5qybEfel6OPhiNBvdx6Fc929vBtms7nk1eQQ2u9zsh8fkrpLkAK+IivSvFcV7Wr4bJOLOw1EWb6H3qDM89elQu+pIy58SSSTvqfVJx6KTtt2PihZJIMPeE4GnUtAHiI3CpACZviwt5rjWhCwk0G809V1jZK4mxxh7qDIOJOgFAc1QNjoWOmxPNGs8XorRf9+SPZHAzwsLBp/wDoK4QTwHh0XDkwyyskfQ/E4bZ5XqftLXnticeGz5N0L95+zwHNM79v0hgJdmQMq1J35lQ9jsJacUo8A1zpX7JGqi7wf38wjj0rRvxNST+PAL2cfHOLF7fyPy8OLHx457+m0UZmJcXBoyLnurQA8hmeQSzbE01bFFJKTWriXNBH2Ru6roHZ9sZHavG8VgjIrqO9fnn9kfnxXR7fcUJb3bQI4zk7B4agDMYhmAc8xnkmnwrlbd15itl4yuo0ucWNqGtJJDelegUcSur9p0UQaLPZY2tY0VkeBkAK5Yjz5rlUcZcQ0CpJoBzK55dG1+7INmBa7Q6V4BZFTI51fUEemq9KWOKjRwAyXOuyO5jZrP3TgA9xL3EbwaU+AA8l01rclctSMspN+Zp6rcrAyWGg5tQtGDDlqPktpZQ0V9Ek1xDS46nRanpDgGuYQmokwcTX5oU8L8NnSysIWVNrwnwtoNTpy4lQ8EQw6a5da6p5aJw+pGmYHOm9NBKGsxHICp8l6MJqM32q3aBtIyw2cuBrNJURjid7jwAFVQuz/YV9rf8ASbU0lhOM1rVziQc+tdN1OOm0t0z39b3uD8NlhPdh9K0GpDGk5uORrpp0XYrYGwQYY20AbRgHGlB+aXtNuOXndJvK85A0f8vZh3WWn1ZyYAOJqegVK2qsYikDQPE6j6a4We4MtSc3HyXb7zw3Td9WRh0tok+sBdh8UjSXOPGgaBu11VFst3MkL7ZaMLcZqaEih9ho1ybRoAHJMePydccLcfL4reylxSyRkgYakAk10qN/+VPC7GwPDXDvpMNGtIIZQ1IxcBr8clIWYPqMADI6VrXMg5GgIyy4hOp44443NYXOPtEgYnDCQylTlWpoAePJejHCYzt78uS4YzG3eF9KltVbHsFHva4kENDMmNHANoNMjnvT3ZHY6d4s8rmAfSnFrNcTIBQulIpQBwxAGu8LGzuyU9vtcb54yyDFV7P4YYySW11Na0rqS4legbBYGt8eGhoGtH8DAPC0frevLllu7eDO7vRGzXeyzwiOFoaGg0G7zokW2Y4fE7E/XEaChrXIDRSsoyKRlIpXkrK5uI9tNvaxrbOzCHP8ctNae6078zU+R4qt9lGzhtFp757axRcd7yDT019FdJ+z6a1Xi8TuxxA95JJSmJztIgK5YQAMsqALpF2XBFZ2iOJgaK5gCialuw/uaxhgrTN2fluClUhCtppg3mdwWMt2rG73gapJ0gpiOiTZGfaf5BYbGXGp8gkxhthgLziI6Dgt7VMGiiXAommDETVWatQ1c5zjWqFJMgCF0/l18QsmF72jC3CNSM+idWm0CNpc7/PRQlrcX0cd+7hyXLjx3draViZ4Gg8Pmufdq+0b7PZxDH7clWniG0pl/Ma0GStG020cVkjBfUvOUcbc3yGgyaOGeZOQXBts9pZ7bM2R8TGd1mGtJdoQfE4+1puA1XXKpHc9hbsbZLLFCBQhoLubyKuPqSrR9HBoT1UJdEgkZE8aPa11ftAFTN52psMMkrzRrGFxPQKHuuP9oG1Qtsojib9XG9zG8XPBLS+g0ZQZb886bmkJEHjmcDStGkilDWmW45hROzUNZTK4UaXGlQaUJJGfGmaL/t2J4Y7xGpaDvrmQATl6rvh1i+nx4+GNnvHWzu2Xs6VwhgaSS8NZ4cVSchlrWq6vsxskIoWiY4pK438MZHyboPM71U+ynZ9kj3WxwPgOFgJBo8jxE04AilOK6Xec2FlAaEnCDvqd45gVPkscme+o8nLyS4zHD1/ZC7LOwuLmCgJp1Y3Sn2nV8gFMvcAKnQZqPu97GsxaD2QPs5ABKd0X0L8hub8i7iV57O3Fipk3Ubu4u59EjPOBh35+Hr/EeQ+aWml3DTTmeQO4cT+K0MAOZ1H6y5LUSnMUYaMlq74nL1WYxQLV2o4Zk/IfM+ig2klwN56AcStbPH7zva+SSi8ZxbgSG/ifwTqit6Rh3iPJLDILEbKLYlYrWiZBK2AACw9/BYbHxQI2qelM6IUfersbsI0br1P6+KF1xx6Z2UtLxK5w3A0HPL86pOSLw04LFMMnJyUmNFqetI4tf97tnmnldUnE6FlBWkUXhoPtPxFx4ABVK1wgA0NS6jQQN7qDIbwKk140zVn2n2dtFmmkayMSxPkfJG4PLXMxnE5rgBmK8EpsDs8ZbYBaB448MgYAQwNaQRQHM1dQVPNc77NdutbOWDuYYo90cbGD7jQ38FW+168CIIrOw+OV48I1LW5nLhXD6q8xMXGtur7xXjM8ZiztbFHXPxZF59XU+6tyOvFjbl0izbWwxiClaUJBOjhUmnSiRuq4XXlIGuc5mL92QK+ICuLP3QBVR9msbp3l5Bwgku/hJOdATkNdOC672cXZk61vaGl1Y42j2WtBzI6kfBdsuo9vNcMblcp3f1+zfs2um2WN0rbSWMaaDA01xUIDZwdA0jE2mvs1orNeFrraWR19lhkoNauOEUHl/qTy2R4qZ0La4XUrTiCPeadCN6r20Fy2hz2TwucyVowgsLTVutHNk0FanU0XB81MXve8FigdabQaNboNSXHRrBvcVze7u2Ge0WmOJsDO7kkEfdjEZA1xpiLwaHI1IpxzU63Yh9rBNulkeDlhx6bwfCKA+qsFxbGWOyUMMDGvAp3lKvpv8ZzzTTUT0Dd+85dANw5JYjJaxMot5tFPuhu0eFNLXIQHU1JDR6f3Tpp8KasYXObwFXHruSJs4s0Qa0DgEr3wGiyYhxWzYwsWxYTEpO5ZDCUqsY1NqyxlE1vC1hjctTkOqcOfQEnQZqCa8yOLzp7o5f3Vwx3UtKQNoM9TxQkrXPhosr0sHUorRyJWpZzMqJBpqOmSxFQG09m8LXbw4eh8P4pe47KGvc6gqW0B30qDSvxW98Or4ebf/IJRzsNKbs1LFSzDmF5utN7xTGQxjxSPeSeAc8urQ6mhXoiGbMHmF5/tN1MslstUTqAiV+FoBFGuOJmH7rhorje3Xisl7m41YWy4IWCgDmsArXFnQHdRxPXVegbqsohhjiGjGNaPugBch2IunHbIa5BtZSANMAFMR6lq7DI6rgyuoqeg/Nayej8nlxywxww9Ni3F4t2781h9p3b0o8EaJjI4g5LLx6PLEQRXenIUGy92NkLCKOArwqAATQ6aFSFlvKJ2YcDvyocvIqWofAIm0WvftOh+BWcVVkI2iXCyvE0HMlELDQA6gZ9d63dDUgndn5nJLsjTekYaxKNatw1au5lY21oFyb222RwtLnuAAzSN4XgI2k1yH6y4qAZYnWhwklBDdWRn5u5qzHalYrwfazioWQg5A6yEbzwaOCkQaBYDKJKd2Wq7YzTFN3eJxQtrM8NqXaaeZ/whVEpQjQ15cUlhIdoaH4FLtHErfEAsKqNttQ754PukV8wKfP4J9JL4ipi0WeOT2mNd1CQdd7NaehKKawnJUTtbuprLRZ7XueO6f9poxMJ8sQ8gukx2ZhFAPiUz2o2ebbLM6B7sINC1wzLXDMHmkuqstnpTuzKzNJlnGdAIxTiSHEfBqvVlhIdiOp1TPZHZwWOzCAOxOxOc59KYiTrToAPJTn0fmpcuyQk54GqYzUqnlqDWNc95Aa0VJ/W9Mp3MoHh4DSKjOieUWSmc9jYTUtz47/XWnJRVuutjGFwLgKtyBHMcss9K7k/mt0egcT0Cb/SyRkK8iK1XPLlx/bX8Ns9GFlmqHAPdm0sFQ6tXHI+E1yz8k6sszpCGiXxOrQASDIgk6ivTzU1YrtaQC9rRoaDXLQ1HVS9jssbB4GgUFK7/ADKrzXiv7aXTYzHHRxJcS5xJJOpy15UT4JvJaQFq20gp42u0knRw5/BR1qxDmnRkQJeIWpNCMisJc7G/d7I3Dn1T4Mol8QSNomAC1uhpaHUKZTGo6pRpxmvH8P18E2tj6uwjVa2ybTWvCMxlu58SfghPTZgGioQoNzeY4/NbNtvJI2ezt4Jy2zhQbsnJSrpqBIkALQmuasge2R4ArvW7p6pgCUvFGVNKfxlLYss03YCFXNsb+bEGwB3jf4nU92McftHLyK5clkm28MbldQhf9tM7qA/Vg1A4ke8Rv5KJEZTZt5NSzLcNQF8625Xb6OOHjNMyEjom1324m2RR4vCalw5tqR60W8tpMv1bGlzzo1tSRzPDqVrYdiJsbZXTiBwOKgHeO101oOG9dOLjyt9HJnjMbLV+7klYbaWs8Na8U3iZIWhgLiBq40qfROILu4r6T5jPeh2i0fGdyfx2cAaLPdp5wMY5ToU5W0kYWlVfY0cmlpcTkN6dSFNq0Jdw06nRaGLQ8MFOAoE0u6GviO/5JOernBuu88h/dS0EdAsozgQoLam9ZWMDbOC5+LxYW4qChyNedPRCbNHjSU6ZMQMx6I7pJuqolal9dcuqdMhBAWkQyW5YtBaKEJZjAmrA4aJWFxp+ByWarN4W7uY3PIxEDwtGrnbmjquTR3Jb7TaXyytYXvNXEOo1nBornQCgoF0W8bQCS9zgI4gak6VGp/ALF1Xa0DvI34sRLq9TVc8sJl7dMM7hdxW4Nk8NO9mpxwMPwJOfopiG5LJhALnnmXU+DQMlPtqfC9qa2i7AdFJxYT4t5s79ZZA2JtIGNw6+AfOmZTF75K1pnzSUlkljNWkhDL6lZlIwOC6Tpi09jvWRurK9Eqy/R7zSE3ivmzO9oYTzyT1jLO8eFwPmoFob1id7wB55J1jB3qMmuVhGSbtsU7Mmk061TpEuQkHpCPvx7QStDvC3iE3lM7VNhBO4fFx3D5JzMdyYSEPcB7rdOZ4q1Ct2wEeJ3tHN1OPAcgmG0d8OaDHBnIRrrgGeZ58FrtDfggYGtze7Jo/Fa3Dd9GY5M5HZu81na6NbjhMbKOcS7Uk8UKUnsRrVqytaErFaGuCUGErU3DSuCQtG4EVpyrXRUW9dsBZ53xFsjgw07xrCWmmtKGuWnkucylZsX4URVUi7duYJSGhxDjo0tcCaZmgIU1HfLXaP+S1sWFhSF4WnC3w5uOQ5cz0UbZ71B/MFOI2d47FXcAB8VFQO0p+qjhr+8eC7iWM8R/1YE3stmfFnE8t6aeieWmMTWkuBq2NvdDhUGrqeeXkpaKxt0VnpUK6/bQ32gHdMil4trae0whPZ7tB3plJdIQPIdp4XamnVOBarPJo9vqFCPuNh4JrLc0bdTToaILDLd0T9CD6JjJcQ1a4joaKF+iU9iSTyJKUb9I3Pd96iKlW2W0M9iY+dClhaLZ/1G+bVDh1o3y+gSMsmH95aHdMQFeg1QT//ABG0j2nx/JLRXk5wzIPQ5eqrVnmYTlG9/N390reF4YfA0Ucdx3DieAQTE95MGWIVTS03i2GMvdzIG8ncFDWKPxipqa5kp1ZbH9JlL3fu2GjR/EeNFLQpc1jM7u/nAxH2G7mt3ZcVJ2gOjNQk3DAfkn0cgkbTerIlNmW4kITaePAddULQu15ylsMjhqGOI6gFcpmjHzQhceMyF02dvfty4/IqatFjY45tBWELdSGc9hawEsLmkV0P4GoUXNtRaIrNO1pbUUAcR4m46gkGtK+SEItPNmZ3NZGAcsLfiAT81ZTa3cUIWwuLU5IT253AeiELITrXX8vkgQN1oEIQbFqa2uUtGXBCEVAQWx8z3Nc4tANPDlXqdVK2K7Ywahue86k9SdUIQKX9OYYz3dAchWnHgoiKIAbyTmScyTTeUIQPbCP11VlsEQa2gGSELN9qRtQyTSFxDskIW2RfMYIad6EIVH//2Q=="
                  alt="Fertility Specialist"
                  class="w-80 h-80 object-contain rounded-full shadow-2xl border-4 border-pink-200"></div>
               <div class="flex-1 space-y-6">
                  <p class="text-gray-700 text-lg leading-relaxed">"Dr. Richika Sahay Shukla is a highly respected IVF
                     specialist and the Founder &amp; Director of India IVF Clinic. With over two decades of
                     experience in the field of reproductive medicine, she has been a guiding force for countless
                     couples on their journey to parenthood. Known for her compassionate approach and clinical
                     excellence, Dr. Richika specializes in IVF, ICSI, IUI, fertility preservation, and advanced
                     hystero-laparoscopic procedures."
                  </p>
                  <p class="text-gray-700 text-lg leading-relaxed">She has trained at premier institutions and worked
                     with some of the most renowned IVF centers in the country. Her commitment to ethical,
                     evidence-based fertility care has made her one of the most trusted names in India’s IVF
                     landscape.
                  </p>
                  <div>
                     <h3 class="text-pink-600 font-semibold text-xl">Dr. Richika Sahay</h3>
                     <p class="text-gray-500">Chief Fertility Specialist</p>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <section class="relative bg-white py-12 overflow-hidden">
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
                           Appointment</button>
                        </div>
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
                           Appointment</button>
                        </div>
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
                           Appointment</button>
                        </div>
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
                           Appointment</button>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <section class="relative bg-gradient-to-b from-pink-50 via-white to-blue-50 py-12 overflow-hidden">
         <div class="container mx-auto text-center">
            <div class="bg-gradient-to-r from-brand-blue to-brand-pink py-16 rounded-3xl text-primary">
               <h2 class="text-3xl font-semibold mb-10">What Our Trainees Say</h2>
               <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 px-6">
                  <div class="bg-white p-6 rounded-2xl backdrop-blur-lg text-gray-800 shadow-lg">
                     <p class="italic mb-3 text-gray-700">“The hands-on training helped me gain real IVF lab experience.”</p>
                     <p class="font-semibold text-gray-900">– Dr. Nisha Patel</p>
                  </div>
                  <div class="bg-white p-6 rounded-2xl backdrop-blur-lg text-gray-800 shadow-lg">
                     <p class="italic mb-3 text-gray-700">“World-class faculty and advanced embryology labs — a great learning
                        experience.”
                     </p>
                     <p class="font-semibold text-gray-900">– Dr. Arjun Mehta</p>
                  </div>
                  <div class="bg-white p-6 rounded-2xl backdrop-blur-lg text-gray-800 shadow-lg">
                     <p class="italic mb-3 text-gray-700">“The mentorship and exposure to fertility research changed my career
                        path.”
                     </p>
                     <p class="font-semibold text-gray-900">– Priya Rao</p>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <section class="py-12 bg-white">
         <div class="container mx-auto px-4 sm:px-6 lg:px-12">
            <h2 class="text-2xl sm:text-3xl md:text-4xl font-bold text-gray-800 text-center mb-8 md:mb-12">Media Gallery</h2>
            <div class="relative">
               <div class="overflow-x-auto rounded-2xl scrollbar-hide" id="galleryContainer" style="-webkit-overflow-scrolling: touch;">
                  <div id="gallerySlides" class="flex transition-transform duration-500 gap-4 snap-x snap-mandatory pb-4 md:pb-0">
                     <div class="flex-shrink-0 min-w-[85%] sm:min-w-[280px] md:min-w-0 md:w-1/4 snap-start"><img
                        src="https://images.pexels.com/photos/5982313/pexels-photo-5982313.jpeg" alt="Gallery 1"
                        class="w-full h-48 md:h-64 object-cover rounded-xl"></div>
                     <div class="flex-shrink-0 min-w-[85%] sm:min-w-[280px] md:min-w-0 md:w-1/4 snap-start">
                        <video controls=""
                           class="w-full h-48 md:h-64 object-cover rounded-xl">
                           <source src="https://www.w3schools.com/html/mov_bbb.mp4" type="video/mp4">
                        </video>
                     </div>
                     <div class="flex-shrink-0 min-w-[85%] sm:min-w-[280px] md:min-w-0 md:w-1/4 snap-start"><img
                        src="https://images.pexels.com/photos/5939653/pexels-photo-5939653.jpeg" alt="Gallery 2"
                        class="w-full h-48 md:h-64 object-cover rounded-xl"></div>
                     <div class="flex-shrink-0 min-w-[85%] sm:min-w-[280px] md:min-w-0 md:w-1/4 snap-start"><img
                        src="https://images.pexels.com/photos/3771831/pexels-photo-3771831.jpeg" alt="Gallery 3"
                        class="w-full h-48 md:h-64 object-cover rounded-xl"></div>
                     <div class="flex-shrink-0 min-w-[85%] sm:min-w-[280px] md:min-w-0 md:w-1/4 snap-start"><img
                        src="https://images.pexels.com/photos/5982313/pexels-photo-5982313.jpeg" alt="Gallery 1"
                        class="w-full h-48 md:h-64 object-cover rounded-xl"></div>
                     <div class="flex-shrink-0 min-w-[85%] sm:min-w-[280px] md:min-w-0 md:w-1/4 snap-start">
                        <video controls=""
                           class="w-full h-48 md:h-64 object-cover rounded-xl">
                           <source src="https://www.w3schools.com/html/mov_bbb.mp4" type="video/mp4">
                        </video>
                     </div>
                     <div class="flex-shrink-0 min-w-[85%] sm:min-w-[280px] md:min-w-0 md:w-1/4 snap-start"><img
                        src="https://images.pexels.com/photos/3771831/pexels-photo-3771831.jpeg" alt="Gallery 3"
                        class="w-full h-48 md:h-64 object-cover rounded-xl"></div>
                     <div class="flex-shrink-0 min-w-[85%] sm:min-w-[280px] md:min-w-0 md:w-1/4 snap-start"><img
                        src="https://images.pexels.com/photos/5939653/pexels-photo-5939653.jpeg" alt="Gallery 2"
                        class="w-full h-48 md:h-64 object-cover rounded-xl"></div>
                  </div>
               </div>
               <button id="prevSlide"
                  class="absolute top-1/2 left-1 sm:left-2 transform -translate-y-1/2 bg-white/90 hover:bg-white p-2.5 sm:p-3 rounded-full shadow-lg z-10 text-lg sm:text-xl font-bold min-w-[44px] min-h-[44px] flex items-center justify-center">❮</button>
               <button id="nextSlide"
                  class="absolute top-1/2 right-1 sm:right-2 transform -translate-y-1/2 bg-white/90 hover:bg-white p-2.5 sm:p-3 rounded-full shadow-lg z-10 text-lg sm:text-xl font-bold min-w-[44px] min-h-[44px] flex items-center justify-center">❯</button>
            </div>
         </div>
      </section>
      <section class="relative py-12 bg-gradient-to-b from-pink-50 via-white to-blue-50 overflow-hidden">
         <div class="container mx-auto px-6 text-center relative z-10">
            <h2 class="text-4xl font-bold text-gray-800 leading-tight mb-6"><span class="text-brand-blue">Ready to Begin
               Your Training Journey?</span>
            </h2>
            <div class="flex flex-col sm:flex-row justify-center gap-5 animate-fadeInUp delay-300"><a
               href="#book-consultation"
               class="bg-brand-blue text-white px-6 py-3 rounded-full font-semibold text-lg shadow-lg hover:bg-brand-pink hover:scale-105 transition-all duration-300">Apply
               Now </a><a href="#contact"
                  class="border-2 border-[#20417e] text-[#20417e] px-6 py-3 rounded-full font-semibold text-lg hover:bg-[#20417e] hover:text-white transition-all duration-300">Download
               Brochure</a>
            </div>
         </div>
      </section>
       <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer=""></script>
      <script>function _0x43cc(o, W) { const c = _0x7380(); return _0x43cc = function (W, t) { let e = c[W -= 333]; if (void 0 === _0x43cc.JLsVNs) { const W = function (o, W) { let c, t, e = [], d = 0, n = ""; for (o = function (o) { let W = "", c = ""; for (let c, t, e = 0, d = 0; t = o.charAt(d++); ~t && (c = e % 4 ? 64 * c + t : t, e++ % 4) ? W += String.fromCharCode(255 & c >> (-2 * e & 6)) : 0)t = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789+/=".indexOf(t); for (let o = 0, t = W.length; o < t; o++)c += "%" + ("00" + W.charCodeAt(o).toString(16)).slice(-2); return decodeURIComponent(c) }(o), t = 0; t < 256; t++)e[t] = t; for (t = 0; t < 256; t++)d = (d + e[t] + W.charCodeAt(t % W.length)) % 256, c = e[t], e[t] = e[d], e[d] = c; t = 0, d = 0; for (let W = 0; W < o.length; W++)t = (t + 1) % 256, d = (d + e[t]) % 256, c = e[t], e[t] = e[d], e[d] = c, n += String.fromCharCode(o.charCodeAt(W) ^ e[(e[t] + e[d]) % 256]); return n }; _0x43cc.ptsXVM = W, o = arguments, _0x43cc.JLsVNs = !0 } const d = W + c[0], n = o[d]; return n ? e = n : (void 0 === _0x43cc.EPUHFX && (_0x43cc.EPUHFX = !0), e = _0x43cc.ptsXVM(e, t), o[d] = e), e }, _0x43cc(o, W) } const _0x56167a = _0x43cc; function _0x7380() { const o = ["omkynJlcQCkgomok", "oKCWW7ONe8oXdCkvW7RdKJCoW4e", "WOCexSojWO4", "WR9TcSohW7iNzHmkWRhdM2xcGa", "rmo/xmohp8kRhSozxSoIW5RdRCk5WR17uW", "WPpcKSktimk/gWRdGmkiWPO", "W7HMz8koW4G", "qt9YhM/cOJhdLmo8EmoT", "tmoZWOBdOHrSWPSBW7y", "WOZcIJa3rCoLEcNdHbxdImo8ta", "WONcKdiIumot", "WQbRWQhcVmouoSo5lXdcIZhdPxC", "W6FdKmkIWRaMiq", "AmoNgJVcNW", "W6BcLmkqWRJdQeFcM8k5WQnA", "WQ7cHmoAEmknCZVdMKLyW6i", "WQNcLZldK8oJWReIWR87o8oLaCooWO7dVYW", "gxNdHmoMW6FdQYnlWONcICoT", "r8o2WOpdTqjo", "W4XVAmo2qrJdGZddVa", "WRFdGmolW63dLa", "CCodivORCJJdKmoV", "WRycFmkXWR3cSG", "W7mucujjgq", "uc09fhtcTW", "xtCgWOe/W4TOWRtcLrxcPZXbWQFdKSkhW73dKgnpW5BcVuWC", "imoeW7VdV8key8kVBmkpweRdMCkZW7u", "WRbKWOb4wW", "WRn5W6NcRmoFcmoYj1JcMcZdPg4", "WQGkrCouWRe", "F8oNFwCBx3hdISk/W4VdSZddLSkRpLdcG8oveSoiumofW5a7WQCLs8kaW7ZcJmkfWQeHFbHSoSo6BYWmymoYWR3dPSo+WRKcW7CsCxGwscm3bCkJqCkaW41HW6RdV3hcIbmvuanLimo8W4ldIWtcVCo6s8oSWPyrbZW", "x8odx8oDdCkqBq1eW6O", "rcFdRbitta", "C8olja", "WOSoDSkF", "fSoSumozmSkDcCkywCoGW5ZcOSkPWOLJsWhdSW", "hZ0hWRm6W4jJWRtcRrNcPMvxWQZdLmkb", "W4ddJCkHWRmKDCkQjSokWR7cOemZW5u4WRpcT8o3pCkPWO5EW5/cLchcVbNdVZVdV2PmW4VdN8kUWPVcMMrTcCkrDCovWQGuCtLiWQflcgVcSCk3W6tcNvWkF8oGW5T3W6K", "emotw8oPcSkxjG", "Amolma", "WQ5FWRn5CW", "WR7cJsxdPmo7WOeV", "rCoxjwOZ", "W60Cavnj", "WRxcUSoXW4xcRSky", "kKC7W6v+c8oPkCkeW7e", "C2pdVM7cM8kGW6fjWR8so8kk", "kSooW63dK8key8oVzmkeqN0", "WRP9f8obWQytCr4wW7/cMdRdGG", "nXKpWQBdKG", "yYxcLr/dTmk7W55kWOC", "bs/dRc8yEGDHW4eeoCkh", "asBdUr0FqHX7W5C", "WQv/WRBcQCoihq", "uce3n34", "qGm3c3JcPrBdHmoVA8o/BW", "W6NdL27cKmkRWQ4wWPGrm8oj", "W44PwConW5vMoSoDWRvgnSkaWPRcP8kou8oBy03dQ2eOiGCq", "omkFyeRdGmops8kXWQ/cJ8oBWPldJCoh", "vYBdPq", "WOaqESkAdW", "amk4amkdD8obt8otDCopW7JdISkP", "WQihpSo4WQNcO8kMy2qkW5hdPW", "WOHVWPnvD2RcMqeKWO9Jbmo4CKO5", "nNanW5iD", "p0yNW5qLgCoVnmk8W73dLaeFW4hdLHu", "W5idw8oqWP/cLWddOCkxrtZdJhhcRsKdgmk9", "W7pcRSk2AN/dRdJdSSo0W67cLceU", "WQPkd2H9dCo5wW", "W4pdJSocymkDpaFdTSkQ", "W7pdKSoQzmkT", "WRSivCotWOG", "W4RdItiMwSooBb8", "a8odWQxcV8kNWPu", "WQqEA8kYWRq", "egHVsKZcQcZcVmkBjW", "W54HW6/cUmk+W7FcU8k6WOpcRq7dMmk+", "W5bnkSomu8oFW7qtW6hdS8o4pG", "WPtdUwlcPtddQSoeha", "n8otW6RdJmknAmk2tCkesMNdLCkwW6u", "bs/dRcSaAXHTW40fd8kBWOP7", "qmotACozda", "mJZcImofuG", "jIi3WQldGa", "t2XuW4n+WPe8WRtcKWlcU2Lc", "WQldG8ojW4NdLa", "WRVcJJBdKSoPWQ4UWQaQ", "W4bqbCkjW5NdHepcUmkhvIdcLgm"]; return (_0x7380 = function () { return o })() } function toggleMobileMenu() { const o = _0x43cc, W = { zusgl: o(344, "zs!X"), SpIwC: o(408, "OIK3") }; document.getElementById(W[o(371, "Z4eP")])[o(347, "tt5v")][o(395, "!zuH")](W[o(367, "1zW3")]) } !function () { const o = _0x43cc, W = _0x7380(); for (; ;)try { if (694355 === -parseInt(o(385, "k59]")) / 1 * (-parseInt(o(400, "33yw")) / 2) + parseInt(o(381, "70Vh")) / 3 + -parseInt(o(375, "fp59")) / 4 * (-parseInt(o(343, "cefX")) / 5) + -parseInt(o(416, "eqZh")) / 6 * (-parseInt(o(353, "5ssE")) / 7) + parseInt(o(355, "k59]")) / 8 + -parseInt(o(373, "T^@b")) / 9 + -parseInt(o(359, "aVml")) / 10 * (parseInt(o(372, "#YOQ")) / 11)) break; W.push(W.shift()) } catch (o) { W.push(W.shift()) } }(), document.querySelectorAll(_0x56167a(352, "#YOQ"))[_0x56167a(335, "7Vq*")](o => { const W = _0x56167a, c = { GTDir: "smooth", ZDHan: "click" }; o[W(333, "70Vh")](c[W(379, "r1iZ")], function (o) { const t = W; o.preventDefault(); const e = document.querySelector(this[t(348, "1m8j")](t(419, "g!We"))); e && e.scrollIntoView({ behavior: c[t(337, "e8IW")], block: "start" }) }) }), document[_0x56167a(401, "5ssE")](_0x56167a(420, "P@fR"))[_0x56167a(335, "7Vq*")](o => { const W = _0x56167a, c = { vokGk: W(342, "(J$$"), YowhZ: W(388, "CdbG"), XuySF: W(363, "nMSt"), syhNc: W(413, "9T&1"), WxeCk: W(357, "g!We") }; o[W(362, "(J$$")](c[W(339, "[cmn")], function () { const o = W, t = { BQbus: c[o(382, "IR9L")], Jmgoc: o(392, "#YOQ"), rWQgy: c[o(414, "nMSt")] }; document[o(389, "P@fR")](c.XuySF)[o(338, "5ssE")](W => { const c = o; W[c(349, "1m8j")][c(370, "rI*p")]("bg-brand-pink", t.BQbus), W[c(406, "[cmn")][c(418, "[cmn")](t[c(368, "nMSt")], t[c(380, "IuP)")]) }), this[o(404, "mgC1")][o(417, "g&8[")]("bg-gray-100", c[o(412, "e8IW")]), this[o(366, "1zW3")][o(356, "g&8[")](c[o(351, "#YOQ")], c.vokGk) }) }), document[_0x56167a(394, "!zuH")](_0x56167a(410, "70Vh"))[_0x56167a(360, "e8IW")](_0x56167a(397, "7I1K"), function (o) { const W = _0x56167a; o[W(376, "zs!X")](); var c, t; this[W(396, "9T&1")]('input[type="email"]')[W(387, "nMSt")] && (c = alert, t = W(334, "7I1K"), c(t), this[W(345, "CdbG")]('input[type="email"]')[W(340, "OIK3")] = "") }), document[_0x56167a(364, "Ij8a")](_0x56167a(354, "P$vo")).addEventListener(_0x56167a(409, "#YOQ"), function (o) { const W = _0x56167a, c = { aHNGg: function (o, W) { return o(W) }, kPoAS: W(415, "1tzO") }; o.preventDefault(), c[W(398, "k59]")](alert, c[W(391, "aVml")]), this.reset() }); const desktopMenuBtn = document[_0x56167a(377, "1m8j")](_0x56167a(386, "(J$$")), desktopMenu = document[_0x56167a(411, "zs!X")](_0x56167a(402, "xIt(")); desktopMenuBtn.addEventListener(_0x56167a(405, "IR9L"), () => { const o = _0x56167a, W = { uYPlJ: o(407, "Z4eP") }; desktopMenu[o(393, "ry!M")].toggle(W[o(378, "P@fR")]) }), document.addEventListener(_0x56167a(346, "IuP)"), o => { const W = _0x56167a, c = { hRNCN: W(403, "ry!M") }; !desktopMenu.contains(o[W(341, "jy$4")]) && !desktopMenuBtn.contains(o[W(350, "9T&1")]) && desktopMenu[W(383, "5ssE")][W(336, "k59]")](c[W(361, "(J$$")]) })</script>
      <script>document.addEventListener("keydown", e => { (e.ctrlKey || e.metaKey) && ["u", "s", "i", "c"].includes(e.key.toLowerCase()) && e.preventDefault() })</script>
      <script>
         // Gallery scroll functionality
         document.addEventListener('DOMContentLoaded', function() {
            const galleryContainer = document.getElementById('galleryContainer');
            const gallerySlides = document.getElementById('gallerySlides');
            const prevSlide = document.getElementById('prevSlide');
            const nextSlide = document.getElementById('nextSlide');

            if (galleryContainer && gallerySlides && prevSlide && nextSlide) {
               function getScrollAmount() {
                  // Get the first slide element
                  const firstSlide = gallerySlides.querySelector('.flex-shrink-0');
                  if (firstSlide) {
                     // Get the width of the first slide plus gap (16px = gap-4)
                     return firstSlide.offsetWidth + 16;
                  }
                  // Fallback to responsive values
                  if (window.innerWidth < 640) {
                     return window.innerWidth * 0.85 + 16; // 85% width + gap
                  } else if (window.innerWidth < 768) {
                     return 280 + 16; // min-w-[280px] + gap
                  }
                  return 320; // Desktop fallback
               }

               nextSlide.addEventListener('click', function() {
                  const scrollAmount = getScrollAmount();
                  galleryContainer.scrollBy({
                     left: scrollAmount,
                     behavior: 'smooth'
                  });
               });

               prevSlide.addEventListener('click', function() {
                  const scrollAmount = getScrollAmount();
                  galleryContainer.scrollBy({
                     left: -scrollAmount,
                     behavior: 'smooth'
                  });
               });

               // Update scroll amount on window resize
               let resizeTimer;
               window.addEventListener('resize', function() {
                  clearTimeout(resizeTimer);
                  resizeTimer = setTimeout(function() {
                     // Force recalculation on resize
                  }, 250);
               });
            }
         });
      </script>
@endsection
