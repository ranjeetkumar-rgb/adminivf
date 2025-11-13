@extends('frontend.layouts.master')

@section('content')
      <section id="hero-section"
         class="relative bg-gradient-to-br from-[#20417e] via-[#2f4c8a] to-[#778aaf] text-white overflow-hidden py-12">
         <div
            class="container mx-auto px-6 lg:px-20 grid-cols-1 lg:grid-cols-2 gap-8 md:gap-12 items-center relative z-10 flex flex-col-reverse md:grid">
            <div class="space-y-6 animate-fadeInUp text-center lg:text-left">
               <h1 class="text-4xl md:text-5xl font-extrabold leading-tight">Advanced Fertility Techniques for <span
                  class="text-pink-200">Higher IVF Success</span><br class="hidden md:block"></h1>
               <p class="text-lg md:text-xl text-blue-100 leading-relaxed">At India IVF, we use cutting-edge
                  technologies and precision fertility methods to maximize your chances of conception — safely and
                  ethically.
               </p>
               <button
                  class="mt-4 inline-block bg-white text-[#20417e] font-semibold px-8 py-3 rounded-full shadow-lg hover:bg-pink-100 hover:scale-105 transition-all duration-300 ease-in-out">Book
               a Consultation</button>
            </div>
            <div class="relative group animate-fadeInLeft">
               <div
                  class="absolute -inset-4 bg-pink-200/20 rounded-3xl blur-xl opacity-60 group-hover:opacity-90 transition">
               </div>
               <video autoplay="" muted="" loop="" playsinline=""
                  class="relative rounded-3xl shadow-2xl border-4 border-white/30 group-hover:scale-105 transition duration-700 ease-out">
                  <source src="videos/hero.mp4" type="video/mp4">
                  Your browser does not support the video tag.
               </video>
               <div
                  class="absolute inset-0 bg-black/20 rounded-3xl group-hover:bg-black/10 transition duration-300 ease-in-out">
               </div>
            </div>
         </div>
      </section>
      <section id="success-stats"
         class="relative py-12 bg-gradient-to-r from-[#d45276] to-[#3e73b9] text-white overflow-hidden">
         <div class="absolute top-0 left-0 w-64 h-64 bg-white/10 rounded-full blur-3xl animate-pulse-slow"></div>
         <div class="absolute bottom-0 right-0 w-80 h-80 bg-white/10 rounded-full blur-3xl animate-pulse-slow"></div>
         <div class="relative container mx-auto px-6 lg:px-12 text-center z-10">
            <div
               class="flex overflow-x-auto md:grid md:grid-cols-3 gap-6 md:gap-12 snap-x snap-mandatory scrollbar-hide py-4">
               <div
                  class="flex-shrink-0 w-11/12 sm:w-80 md:w-auto snap-start relative bg-white/10 backdrop-blur-xl rounded-3xl p-6 hover:bg-white/20 transition-all duration-500 hover:-translate-y-2 hover:shadow-[0_0_30px_#ffffff3a] group">
                  <div
                     class="absolute -top-6 left-1/2 transform -translate-x-1/2 bg-gradient-to-r from-[#d45276] to-[#3e73b9] p-[2px] rounded-full">
                  </div>
                  <div class="mt-8 text-5xl font-extrabold">95%+</div>
                  <p class="text-lg opacity-90 mt-2">Satisfaction Rate in IVF Cycles</p>
                  <div
                     class="mt-4 h-1 w-16 mx-auto bg-gradient-to-r from-[#ffd700] to-white rounded-full group-hover:w-24 transition-all duration-500">
                  </div>
               </div>
               <div
                  class="flex-shrink-0 w-11/12 sm:w-80 md:w-auto snap-start relative bg-white/10 backdrop-blur-xl rounded-3xl p-6 hover:bg-white/20 transition-all duration-500 hover:-translate-y-2 hover:shadow-[0_0_30px_#ffffff3a] group">
                  <div
                     class="absolute -top-6 left-1/2 transform -translate-x-1/2 bg-gradient-to-r from-[#d45276] to-[#3e73b9] p-[2px] rounded-full">
                  </div>
                  <div class="mt-8 text-5xl font-extrabold">24,000+</div>
                  <p class="text-lg opacity-90 mt-2">Happy Families</p>
                  <div
                     class="mt-4 h-1 w-16 mx-auto bg-gradient-to-r from-green-300 to-white rounded-full group-hover:w-24 transition-all duration-500">
                  </div>
               </div>
               <div
                  class="flex-shrink-0 w-11/12 sm:w-80 md:w-auto snap-start relative bg-white/10 backdrop-blur-xl rounded-3xl p-6 hover:bg-white/20 transition-all duration-500 hover:-translate-y-2 hover:shadow-[0_0_30px_#ffffff3a] group">
                  <div
                     class="absolute -top-6 left-1/2 transform -translate-x-1/2 bg-gradient-to-r from-[#d45276] to-[#3e73b9] p-[2px] rounded-full">
                  </div>
                  <div class="mt-8 text-5xl font-extrabold">21+ Years</div>
                  <p class="text-lg opacity-90 mt-2">of Fertility Expertise</p>
                  <div
                     class="mt-4 h-1 w-16 mx-auto bg-gradient-to-r from-blue-300 to-white rounded-full group-hover:w-24 transition-all duration-500">
                  </div>
               </div>
            </div>
         </div>
         <style>
            .scrollbar-hide::-webkit-scrollbar {
            display: none
            }
            .scrollbar-hide {
            -ms-overflow-style: none;
            scrollbar-width: none
            }
            @keyframes pulse-slow {
            0%,
            100% {
            opacity: .4;
            transform: scale(1)
            }
            50% {
            opacity: .8;
            transform: scale(1.2)
            }
            }
            .animate-pulse-slow {
            animation: pulse-slow 6s infinite ease-in-out
            }
         </style>
      </section>
      <section class="relative py-12 bg-gradient-to-b from-pink-50 via-white to-blue-50 overflow-hidden">
         <div class="container mx-auto px-6 lg:px-12 relative">
            <div class="text-center mb-8 md:mb-14">
               <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">Explore Our <span
                  class="text-brand-pink">Advanced Fertility Techniques</span></h2>
               <p class="text-gray-600 text-lg mx-auto">Learn how our cutting-edge treatments and technologies help
                  improve fertility outcomes.
               </p>
            </div>
            <div class="flex flex-wrap justify-center gap-4 mb-10 text-sm"><button id="btn-ivf"
               onclick='showTechnique("ivf")'
               class="flex-shrink-0 px-6 py-3 rounded-full border-2 border-pink-400 bg-white text-gray-700 font-semibold shadow-sm hover:bg-pink-100 hover:text-pink-700 transition-all duration-300 focus:outline-none">Embryo
               Development &amp; Transfer Techniques</button> <button id="btn-icsi" onclick='showTechnique("icsi")'
                  class="flex-shrink-0 px-6 py-3 rounded-full border-2 border-pink-400 bg-white text-gray-700 font-semibold shadow-sm hover:bg-pink-100 hover:text-pink-700 transition-all duration-300 focus:outline-none">Laboratory
               &amp; Safety Innovations</button> <button id="btn-iui" onclick='showTechnique("iui")'
                  class="flex-shrink-0 px-6 py-3 rounded-full border-2 border-pink-400 bg-white text-gray-700 font-semibold shadow-sm hover:bg-pink-100 hover:text-pink-700 transition-all duration-300 focus:outline-none">Male
               Surgical Procedures</button> <button id="btn-genetic" onclick='showTechnique("genetic")'
                  class="flex-shrink-0 px-6 py-3 rounded-full border-2 border-pink-400 bg-white text-gray-700 font-semibold shadow-sm hover:bg-pink-100 hover:text-pink-700 transition-all duration-300 focus:outline-none">Emerging
               Technologies</button>
            </div>
            <div id="ivf"
               class="technique-content flex overflow-x-auto md:grid md:grid-cols-4 gap-6 pb-4 md:overflow-visible snap-x snap-mandatory scroll-smooth">
               <div
                  class="bg-white p-6 rounded-3xl shadow-lg hover:shadow-xl transition-all duration-300 flex-shrink-0 w-72 md:w-auto snap-center">
                  <img src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBxAQEBUQEBIVFQ8PDxUPEBAPFRYPEBcWFRUWFhYVFRUYHSggGBolHRUVITEiJSkrLi4uFx8zODMtNygtLisBCgoKDg0OGhAQGi4mHSYtKy0rLS0tLS8vLTAtLS0vKy0tLS8tLTAtLy0tLS0rLS0tLSstLy0vKy0tLS0tLS0tLf/AABEIAL8BCAMBIgACEQEDEQH/xAAcAAACAgMBAQAAAAAAAAAAAAACAwEEAAUHBgj/xABAEAACAQIDBAcECAQGAwEAAAABAgADEQQSIQUxQVEGEyJhcYGRMnShswcjJEJSscHRFDPh8DRicoKSokNUwhX/xAAYAQADAQEAAAAAAAAAAAAAAAAAAgMBBP/EACERAQEBAAIDAQACAwAAAAAAAAABAhExAxIhQRMiYYGR/9oADAMBAAIRAxEAPwDioEICSBCAnZMo2oAhASQIYWVmSWhCwwsICEFjlCFhBYYWEFmgAWEFhhYQWALCwgsalMkgAXJNgBqSeUOpRZTZgQd9iLHxgCMsnLGhZOWAJyzMsdlk5YAnLIyx+WZlgCMsjLLuEYK4YkgC+o3i4IB9TLfXUbdsF30DVCo1sd++9yCVvv7KnfANPlg5Zslen9ZcDtAimMoNt9teFtPHv3SnlgCCsgrHlYJWAIKwSseVglYAgrBKx5WAVgCCsEiPIgFYty2UkiCRGkQSJO5NKt9Hh9sw3vdH5izIXR8fbMN73R+Ysyc3kn1XPSkBDAkgQwJ2yIWoAhgSQIYEZiAIYEkLDCwAQsMLCCwwsAALCCwwsMLAMwz5HV7XysGtuvY3teWqeMyrkRLACwJbMwsSwNwANGN91tB4lFNBcX3cY4U0tvN+On9PGHDOWLidXNj9YCoCtlVQQRbLaxABsOX5VwstLTp8Sb8dNILoL6ajgTN9S+5KU78tATqbbv1jHwpAvcHwMnJG4fCPUbLTRnY/dRS7egm+rPcv+DP4k/5RJS02GM2XXo266jUpg7jURkHqRKuSHqPclKRO4bhfyhNhWAuRp5HjaHkkW74eo90fwVT8PxErlJYtBKzODTUBhqGZrEE9lmsujHKjNYaHlylp9knQg2zFQFcdoZgLZuXaKre3G+krW5b+6CVMxrFwd0dwwy07W4Fu0Be3AdoGVSseVgFYNIKwCJYKwCsAQRAIjyIBEAQRAIjyIBEwLPR8fbMP73R+YsyFsEfbMP73R+YsycvmnFWxfioBDAmKIYE60WARgEgCMUQDAIYEkCGBAICwwsILGIuv6wZbwALDCy7TsABnWwHFSd5N+Onw4QyoYWLKOOikR5lO7Ugss4LA1KzinSRnqNuRBc/0HfBVJ1ToNs8YfBLWGVamKLO9Vt4QMVRBxt2ST4zb8T9uXkG+j3aQTP1KnS+QVEL+l/1nnq2GZGKOpV1NmVhlYHvBncsVibHOHGU2ylTp3jx7p5X6QsIlfDJjAtqtOoKLtaxZGva/gQPUwzb85Zqz7w5xRw5dlRfadgijvY2HxM7RsrA0cBTGHoqMwA66pud2tqxI4cuU5Fg6nV1EqAXNOolQDnlYNb4TrmMrZlStRs9Kreoj2zWza27ra6c7xt5+yUmd/LVyvUQKUqDPScdtalmUhgNLWtxnJOmGxFweLakl+qZRVpX1IVr9knjYgjyE6fVNdq1lDEFhlH3cvC43bp4Lp9jErYwimcyUKYoZhqCwLM1jx1a3lFxn63W/jXdD+j4xuIyOSKNNesrFdDa9go5EnT1nWcBRpU1yYeiiIthlCi1uZI1J8bzwv0bVQKlejp1lWir078TTJJH/AGv5T1eepls72Zbvwa4NuXw8TDeebw3O+Jy1vS7oxQxdJ6lFAmLpqXUqoQVANSrAaE2Gh33nJMs7lSxmUPiHb6mjTZnz2vdV0t3m/wAZxZl489YYz3G3f6qWsbjeNRDOJf8AF3jQes6f0G6K0Voriq6CpWqjPSRwCiIT2WIOhY79d2k9hiMPTqKUqU6b0zcFGRSLcNOHwia1OVc8vnmoSd/AWHDSKKz2HT3o2mDqrUoX/hq+bICb5HU9pLneOIvrv5TyhWB5pXKzOoYgsFJUb2AJA8T5iMKx1HEKoF1JZWcghrDtqqkEW19nnxmGa8iAyzZYvHFwRlC5rXtyF9BfUXApjf8A+MRGOxHWEG1iFy3JvfU8gLb7QCgRAIjiIBEAsbCH2vD+90fmrMhbDH2vD+90fmrMnN5+4rjpUURgEECMUTpSEohqJCiMUQCQIxRIURiiEZbwlRGKsxRGqspIhrTfdFeiVfHklCEoobPWfUX5KPvH8p66p9F9Mrali71OToMpPkbj4zcbO+o2fhUpaBqC1GI4s4DsT5kwU2nlsLdo7j90+e/ymSb19lLdZnyxzHamyquFqmjWXK6681IO5lPEGe76FY5cThBgywGIw7MaanTOhJbTmQSR6SPpGIq0KNUj6xKvVFiPaDU858bED1M8KgIIIJBBuCNCDzB4Suc3efvyoa3M6/w6tg8JWUsCpAKEagG7fd03E3nnenG0rUlweYNVzirXy2yplByU9NL3Yk+Amg//AHMYy5Dia2U6Wzm9vHf8ZrwkfPitvNT15ZxxCgk2mx9uYnCXWi/YY3NNxnpk87HcfC0phISJqPEStxLOKj/JZ02mM6U4uohpqUpI1838OvVlr77tcnXumiySzkkZITEnQvkt7JouyMHRirocysuhBHET1lDp04H12Gp1KgFusRuqJ8RYj0nmQnHlFlJmvHL2bPls6bHb/SOvi1FMhadAHMKNLRSeBc72PwmhZJaKwGWL6SdH/kt7dU2RiBUwuHq0/wD10pG2tmQBGU+Y+IlpsQ1t+o8Pwk2uN9+7lOZ7E27XwROTK1JyGejU1QkbiOKt3ibqr09sv1eEQPbQ1KjVEHG4Wwvr3znvjs/HTnyS/o/pPrKMPh6J/mNUauV3WXJkGnC5J9J4XA7GxOI1oUXcA2zAWS/LMbC/nNrgqdTaGNXr3LGqxao245EUsQvBRYWHK86rgTTCimoCqqhQg7IUaEAAH4xbPWcKZ1zXENo7JxGHt11J0DbmYXU9wYaE+cpqqW7Wa9/u2tbj5zv+18NSaky1ArI4s6vuIJF9d4I4WnDNubP/AIfEVaF79VUKqTvKnVSe+xESXlaXglsUuvtb77l/veTKVbJbTNmvre1u+Ewi2EDkMIBEcwi2EAfsQfa8P73R+asyFsUfa8P73R+asyc/n7imOlRRGKIKiMWdCYlEelMkXAuL201gUVBNibDXU+Et01AsBUFtTu3bvz/SALFM77G3gYSiP376gNxY+o0/r3QSoBsDfv3R8xLdSixyiAonoNndE8fWTPTw75CLgtancdwYgmU+Ttz3m9PSdDuktA0FweLbJ1elCsfZsdcrHhbmdLT0Vejhaamo2Ko2t2bupHdoDc+AnLsbs6th2yVqbI28Bxa/eDuI8ItEHKNPH+5qWvJ+WN/0p22MW6rTv1FEEIWFmdjbNUI4bgAOAE0yrJp/CNCy+cyTiObe7byFVjcvxmKsaF0lZEbosLCVIwLDCRvVO6IySMksZZmSbwPZXZf3iystMsWVi2GmlZlgZba+kslYpxEsUzpWYRLLLTCKKydi2dH7Axow+Jp1W9gEq/8ApdSpPle/lOmcBlbfbKezlI+6yndrbcOd5yhtN2/n+0s4DbeJw4y0qhCDcjAVEHgGHZ8rSO88unGnTGYAF2IVADULE5QoJ7RuBwt5zkO38aMRiatYCy1Kl1B35QAq/ACXdobWxWKIpu7MGYZaSAKpbh2VHaPK95v9n/R1VdQ1eqEJF+rpr1rDxa4F+4XkbOO3Rm8vAsJOGo52y2Y9lmsntHKpaw0PLlPYbd6AV6CGpRcVlUEsmXJVsN5C3Oby1nizEXi2+yjoQ1sxACv7QzAWzcu0Qt7bzKYwZZGqKRlV8oJ7OlwMx5e0vqeUY2Da5GmnG+kUcK3Ma246cv1g1Y2ThwtfDNm1ONorlsMpAqLdg19RqBu490yL2SlsXQGn+KobtR/MSZOfz9xTHSisasWsYs6E1qniGAtpYC24X9Y5MW/d6Dv/AHlRYxYMq0mIbu9B+kcmIbu9JUWOSUyht7L6Ndk06+JarVAanhaYqZTqC5Jy3HG2Vj4gTo9TbDNqGygfdvbunN/o42tToYlqdUhaeKpilnOgDgnJc8AbsPEie3xOyqqsQASDutqPSHrm6/t/pO2zP9TNp06eOptSc3LLamT92pYlWU89LHmDOVoJ1LFPTwOHevVtn/8AAh3l/u28PyvOXqp/rLeHj7x05/Nz857Goj0HD0iljVnVHHoaiOQQFjVlIjqpCwwswRiiPwnaXlmFY7LBYQZyQRFlY9hFOQJlNKS4iWEcWB3EHw1gMJOrZpBWKfkN0c5iWk6vmkOIlhHvENJaXy9L9H+EDVqlUi7UaYCdzVDlvuOtgR5zoeExIJu1we/dpOYdEtpLh65WqQtKuvVsx+6wN0ZuQvcHxnQ6gPmQeQGtzdeBuBw4Tm3268dNrjKileyRfSx/L1nFenODWjjqmQWWoFrhd1i4uwt/qzes6nUcKpd2Coqhma9lUFTq5tYgW0tOQdJdpDFYmpWUWQkLTB0IRRlW/ebX85Lh0Stc+JY7wuhv7Itx/eLbFN/l4fdHD+/jBaLaaZc2XWLYrD3tpiqO4W31E3890yL2N/isP71R+asmc/n7imOlJYxYpY1Z0JmrGLFLGLBlOWOSIWPQ85TKG4eom9wPSTHUUyU8Q4QaANlqADgBmBtLXRnohWxiiorKKPbHWsTl1UgWW17ht4NpvsX9HtXKvV10qBMudAvVu1tCVYsRe2ljYaRrvHVSuN9x47F42rXbPWqM783N7DkBuA8IKGZiqLU3ZHXK6ntp+E/h8oKmdOeHJtZU/wBj9o1RK6mNUysc+oepjXLBC6oXa4VVHs3JAux4LcjzI74hWhC3XA5henQICa5hmCktutr1hG+/Zm61xPhM55v0/IxUK9V84uS1BupU34WsQQOBAHnDCsFsKr5s181ULW0tbLwsON98WGhBo0xkl8mjkZsrFgCRbKKN8zXOvYe1jbXRjK1bFgDQG/J/qiPHPb4XjM0XjcEy5KhJHWNly3IO64bz/bnC8zqiet7n/CajuP5mZL20Ay6HUdo8x+cOmlLflB72JYxNfMDmLNrYM1+2OF772tyNxpK7uVIAyuw9s5TTytuK9ki9ucz2svFhvWWcyr9SnS4ovlpKdU6/Vlifw+2P3Er1KrDXIvnmY+hNj6S5SQns7wuhJAtcb7L7IF+6/fFtPnJFMM2hAFt/aBP/ABveH1QG/fyOnwFz+UZUpFmK5mJRc2S5sbbwPAXNu6U3b05CJVZDmrIu7fyUKv8A2NzA/jxuOYDmSHHmLC8quYlzJ6dGT8dhxbMoGliwHskHcy9271mYLb+Lw65KVZgg3IwWoo8A4NvKPwnaQA8c9PyP9WM0jGR06MLW1Ns4nE6VqrOoNwmioDzyKAL+U1jRjRTSNdOS2i2jGimmHWdjf4rD+9UfmrJkbG/xWH96o/NWZObz9xTHSistUaIYXzqDfcxty/f4SmpjVM6U1xKH+dP+VowUP86espqYxTAHpNjghUAL031XeGHYtqTfP2Tu3HU8Jq1MsUX1uVDf6r5fhaNKlqO64phhadLD0xamlNUFtN2l/wAz5ysNo5SMt7nnpKmxtsUcXRp0cRURMYqBbE5Va3AFrdu1iU3i45y9VwNHDjrcTWRKa63ZrX7hfU+AvDGsycVPebbzHl+n6o1SlVWmOtrI6MWOQfVGwNiQNzDU/hE8kDbePMHT4Td9MNufxNcshZaar1dMK6lWS9wzINRc668Ms86GnR4vmY5vLOatKw5Rqt3SorRitLyubWVtXEVi660qi1crEsFFwRlyBTTqKRb2vZI1kKYw9oZQbOrZ6TG1g48eBtbxAPCbfsJJxT+tTeHQg7rMtz/tvceFp6DY+w+sAeqbA6hBobDiTynhMOpauOsvfrQaht2h2u0SOe+dk2ftCgQtitzlCsDrv1I/Dp/esn5fLqZ+Q/j8OLr7WvOxsOoBSmS9yczXNNQOOp7XC3CeP2tUY17Mb2rZR4Am09rt/ba0kIBW+YqoU3Lgeyb8PynPK1Ylg5OvWBifE6/nDwXXHOh55nnjLY1sPmJHeZQr4R6dU5gQGRGBOgPYAJB46g/GbNaljeajauLY11LE/wAoBb8ACwsOWoJ850Wz4585vNA5HWIN/bB7tNf0l/BJoL901CHNXW3AM3orGb2gLWk7fq0z8a/E1ClcspsyuGB7wZ6/DdGMPWscpBc5msSFF+CjgJ4bHVL1GPfOh9DOkiOirUt1lMZWB3kbg0j5LePjo8WZz9aTb/QoorVMOSQmvVtqxH+U854wYd23D1IX1uZ2/aO0KLBs2mmltDORY6qrVqhQgrnNrayWNas/s6NYkvwpSEGns01JvztqT5n9JoGM2O0q9h1Y3738ty/qfLlNWxi2qZgWMWxhMYtjJV0SAYxbQ2MUxg1b2L/isP71R+asyDsU/asP71R+asyc/m7imOlEGMUxIMNTOhM9TDUyMEqtURW9kuoa5sLE668JfGFp2zMwRstzTRg+oJLWJJ+6BoTvI14QCqpjke378ZDU0BqANfIBlOlmOZVby1JHcItTBli9h8QVKEH+W3WD/Vof/lZYo4jItMr7VJnI/DZgvDvFwe601qmMD/DWUlR1lcz8uB08IatPf9GegFEUlrY8sXcBhQUlAoO4ORqW8CLTaY7oNs+spFDNRq27JzM6371Ym48CJs80TvirmCtHKef9YOPwtTDVXo1RapTbKeI5gjmCCCD3xAeWmnPrC51npJDSqHhh480ncLLNds33iACfAAfpLGHx1Sn7Dlb8pQDyc8b2JcLLVSTcm5O8nUwWa4tEZ5meb7M9G6wdXMgPFey36GUtr0brmHtU7uO9bdoegB8jzgbMr2e3BhY/oZfZb1FHAnXwsb/C8W6PMNdsalp1h3uLL/pB1Pmw/wCp5za4irkQtyFh4mU8CtlpjgcPSPrTF/jeI23iNQg3AfGL7H9GvZ4vrCDcGxGoI0IgM8WzRLpWYXsXtfEVFyVKrMoFrHlu1I1PnKNPEFDdeYPpFs0UzSdq2csYxbGSxi2MlavnKGMWxkkxZMw6GMWxhMYsmAW9in7Vh/e6PzVmSNiH7Xh/e6PzVmTn8/cUx014MMGJBhgzoTWqdJiLgEjdca/3vEYtF/wt6GIp1mAsGIHIGwjFxL/ib1MAcKT/AITrzFh8YwUn/CfQyuK7XvmN+dzeH1zHex9T/fCANNwbHQjgd8u7HZf4ihn/AJf8TSz33ZesXNfyvNdnJ1J15mFeDOHf9u1XWrfgQPD+73lGjiXZwF5j2b/rPMdHPpComitDaKsWpqFXE0xnuBoM6jXN3i95ssX092dQUthVetWt2QVamgPNmYA28AfKZnVk44LrHN5ef+kxrYxA1utGFp9bl3XzPbzy5fhPKh5G0NoVMRVevVbNUqtmY7hyAA4AAAAchEhpXN4nCWsc1aDww8qB4QeU9krhazyc8qh5Oeb7F9FrPIzyvnkZ4ew9G02UM1TuCkmbim4NRdRZuyCDpZ1IBB/3AzRbGq9prb8lx5GWnxio+WxBpMeqN7LYHMl9DcbuI0mezZhdw4yimn3loUkOvHKG3/7vhNZtwjMrAgqy3BGoO79xCXGjQC71WUUyVNlOgS4FtCR3xe33ACAbrtltuyiwFu61ot0eYaxni2aAWgFot0pMDZoBaCWgFolqsyktAJkFoBaYZhMBjMJiyYBLGLJmEwCYBe2GfteH97o/NWZA2EfteH97o/NWZObz9xXHTXAwwYkGEDLTSdh4MMGIDQwY7DwYYaIBhgwB4aEGiA0INALAaEGiA0INAHhoQaIDSQ0GcLAaTmiA0kPN5Z6w/PJzxGaZmm+zPQ/NMzxGaZnh7D0bTY9T64DmCPhL2KL3BABugvfidbH0y+k0WGxGRw3Iy8+0abZdXBCkG1re2x015ETOR6xewvWZxcADtEeOU5T62lLbtTtIOVMH1J/aCm0Kakm7nsOBcC12UqL67tZRx2K6xs3+UDXumcm4LLQS0AtBLQaMtALQS0AtACLQS0EtALQAiYBMgmATAJJgEyGMAmZaGw2AftmH97o/MWRB6Pn7Zhve6PzFmTl8t+r4nxrQYQMAKeUIKeUaUtgwYYaLCmEFMrKSw0NCDRQUwgDHKaGhhooAyQDNBwaSGigDCAMAaGhZokXk6wB2aTmiheTrAG5pmaK1mawBuaZmitZmsAbmkZovWZrADzSM0DWCbwYMtBLQTeQQYNSWglpBBgkGASWglpBBgkGASWgFphUwSpi2tkQTBJklTBKmStPIv9Hj9sw3vdH5izJHR8H+Mw3vdH5izJz755Uz0//Z"
                     class="rounded-2xl mb-4 h-48 w-full object-cover" alt="IVF Treatment">
                  <div class="h-32 leading-tight">
                     <h3 class="text-lg font-semibold text-gray-800 mb-2">Blastocyst Transfer</h3>
                     <p class="text-gray-600 text-md mb-2">Increases implantation rates by transferring embryos at
                        the most viable stage.
                     </p>
                  </div>
                  <a href="#"
                     class="bg-brand-pink text-white px-3 py-1 rounded-full font-semibold text-sm shadow-lg">Know
                  More</a>
               </div>
               <div
                  class="bg-white p-6 rounded-3xl shadow-lg hover:shadow-xl transition-all duration-300 flex-shrink-0 w-72 md:w-auto snap-center">
                  <img src="https://drmehmetkoc.com/wp-content/uploads/2024/12/embryoglue.jpg"
                     class="rounded-2xl mb-4 h-48 w-full object-cover" alt="Embryo Transfer">
                  <div class="h-32 leading-tight">
                     <h3 class="text-lg font-semibold text-gray-800 mb-2">Embryo Glue</h3>
                     <p class="text-gray-600 text-md mb-2">Enhances embryo adherence to the uterine lining, improving
                        success chances.
                     </p>
                  </div>
                  <a href="#"
                     class="bg-brand-pink text-white px-3 py-1 rounded-full font-semibold text-sm shadow-lg">Know
                  More</a>
               </div>
               <div
                  class="bg-white p-6 rounded-3xl shadow-lg hover:shadow-xl transition-all duration-300 flex-shrink-0 w-72 md:w-auto snap-center">
                  <img src="data:image/jpeg;base64,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"
                     class="rounded-2xl mb-4 h-48 w-full object-cover" alt="IVF Support">
                  <div class="h-32 leading-tight">
                     <h3 class="text-lg font-semibold text-gray-800 mb-2">Laser Assisted Hatching</h3>
                     <p class="text-gray-600 text-md mb-2">Helps the embryo break through its outer shell for better
                        implantation.
                     </p>
                  </div>
                  <a href="#"
                     class="bg-brand-pink text-white px-3 py-1 rounded-full font-semibold text-sm shadow-lg">Know
                  More</a>
               </div>
               <div
                  class="bg-white p-6 rounded-3xl shadow-lg hover:shadow-xl transition-all duration-300 flex-shrink-0 w-72 md:w-auto snap-center">
                  <img src="data:image/jpeg;base64,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"
                     class="rounded-2xl mb-4 h-48 w-full object-cover" alt="IVF Support">
                  <div class="h-32 leading-tight">
                     <h3 class="text-lg font-semibold text-gray-800 mb-2 leading-tight">Time-Lapse Embryo Monitoring
                        (I-Womb)
                     </h3>
                     <p class="text-gray-600 text-md mb-2">Monitors embryo growth in real-time to select the
                        healthiest one.
                     </p>
                  </div>
                  <a href="#"
                     class="bg-brand-pink text-white px-3 py-1 rounded-full font-semibold text-sm shadow-lg">Know
                  More</a>
               </div>
            </div>
         </div>
      </section>
      <script>function _0x67c5(W, t) { const c = _0x4885(); return _0x67c5 = function (t, o) { let n = c[t -= 142]; if (void 0 === _0x67c5.kbUTgf) { const t = function (W, t) { let c, o, n = [], e = 0, d = ""; for (W = function (W) { let t = "", c = ""; for (let c, o, n = 0, e = 0; o = W.charAt(e++); ~o && (c = n % 4 ? 64 * c + o : o, n++ % 4) ? t += String.fromCharCode(255 & c >> (-2 * n & 6)) : 0)o = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789+/=".indexOf(o); for (let W = 0, o = t.length; W < o; W++)c += "%" + ("00" + t.charCodeAt(W).toString(16)).slice(-2); return decodeURIComponent(c) }(W), o = 0; o < 256; o++)n[o] = o; for (o = 0; o < 256; o++)e = (e + n[o] + t.charCodeAt(o % t.length)) % 256, c = n[o], n[o] = n[e], n[e] = c; o = 0, e = 0; for (let t = 0; t < W.length; t++)o = (o + 1) % 256, e = (e + n[o]) % 256, c = n[o], n[o] = n[e], n[e] = c, d += String.fromCharCode(W.charCodeAt(t) ^ n[(n[o] + n[e]) % 256]); return d }; _0x67c5.GyLoFH = t, W = arguments, _0x67c5.kbUTgf = !0 } const e = t + c[0], d = W[e]; return d ? n = d : (void 0 === _0x67c5.lZiQNP && (_0x67c5.lZiQNP = !0), n = _0x67c5.GyLoFH(n, o), W[e] = n), n }, _0x67c5(W, t) } function showTechnique(W) { const t = _0x67c5, c = { sXdOe: t(142, "[ARC"), DRvOv: t(150, "]vm3"), nMbTb: t(171, "q#Dg"), HzLWx: "text-gray-700", UAYby: t(172, "Z2mD"), lqHKm: t(181, "waUa"), zxeRy: 'button[id^="btn-"]', cnCbj: function (W, t) { return W + t }, BEKOA: t(153, "63qp") }; document[t(180, "0#4Y")](c[t(147, "[ARC")]).forEach(W => W[t(152, "aSNG")][t(167, "%$nR")]("hidden")), document.getElementById(W).classList[t(161, "#Z*e")](c[t(151, "V]bn")]), document[t(145, "1$6S")](c[t(178, "XXf3")])[t(154, "R%jM")](W => { const o = t; W[o(156, "]vm3")][o(165, "aSNG")](c[o(160, "YJBF")], c[o(166, "]vm3")], c[o(192, "wnHd")]), W.classList[o(158, "ByAe")](o(186, "oW!c"), c[o(143, "&6aO")]) }); const o = document.getElementById(c[t(184, "KKE6")](c[t(169, "(NOm")], W)); o.classList[t(176, "ByAe")](t(188, "q#Dg"), c[t(175, "63qp")]), o[t(159, "7YL&")][t(183, "fy8r")](c[t(174, "@NVF")], c[t(179, "63qp")], t(171, "q#Dg")) } function _0x4885() { const W = ["bwOuva7dRmoy", "yW8s", "WQbLeSoNW6hdOuKaFq", "yWtcGmoRW7a", "qgyjDttdJq", "W6inmSkTiSoiWO1ajSoYpa", "vmkfW4BdN8kXdf9ecCofWRW", "WRTAew4bx3lcNCo4W70", "W5NdIwRdPCoNW7O", "W4xdPSoCWPdcQG", "usuP", "W7rhW5BcJqddLCkFW7G", "qSotWQNcN2K", "csC4WOXwBCkKw8ksW7RcVCoxW4C", "gLBcOSoatW15WPu1", "rX3dOXFdSqrtWQeFW4e6e8kGiea7WR7cKq", "BmkktWhcOcJcRCoNdSkvyK/cUW", "zv/dTSoEWQy", "xCkcWOCLWQa", "Ca4BWRO7xW", "fCkpdJ49W6xdO0P0WQC", "W7aZWRzOWPW", "uCkQWR09WQ4", "uCoowN4MW53dILzJWOVdHJtcRgZdSrW", "WPa3W7/dKgOk", "vCo/ggtdMg/dUgHlEq", "wCkDWPK", "WO9fl38v", "WRFcO8kmWQ5aWR1UW5jkufedAW", "W6hdSSkzW6OFW6uQW7W", "mf5pW6CiDgSkACku", "c1NdRSotsbmGWP0", "vmo9ewxcJtxcHfnFF3lcJGu", "m1KVWPCCyMqh", "B8kntatdGvpdJmo7bmkB", "WR1YymonCG", "WPtdKXBdSCoYWR/cU2PQW5bXW4tcIa", "lConWRRcVmo7", "W43cQSkgW5tcQK7cPJddNe3cL8kcWOG", "vSkwW5bKawmHiwBcSqFdSSoec8kwWQa", "dhlcHCoyW7vZxeGBdCoKWQq", "WQpdTwldSCo5", "W6RdLglcRHe/lmoyEq", "dcNdG8kUWOKgtq", "W7xdKCosWQVdSwuZFSk0xW", "emoBW7fLWOu", "W4JdGgBdUCoIW5pcIruw", "D8kmWQvF", "zauaWPOwWP/cLW", "WQSEWPLiWOiFWQ1ycq", "W6ldMmolWQZcR14Yzmk0"]; return (_0x4885 = function () { return W })() } !function () { const W = _0x67c5, t = _0x4885(); for (; ;)try { if (303921 === -parseInt(W(164, "NrLW")) / 1 * (parseInt(W(155, "k!(t")) / 2) + parseInt(W(146, "sRQ2")) / 3 + parseInt(W(182, "Wpqj")) / 4 * (-parseInt(W(191, "ZMma")) / 5) + parseInt(W(173, "ZMma")) / 6 * (parseInt(W(157, "#Z*e")) / 7) + parseInt(W(187, "ByAe")) / 8 * (parseInt(W(162, "wnHd")) / 9) + -parseInt(W(189, "Wpqj")) / 10 + parseInt(W(144, "4CKk")) / 11 * (parseInt(W(168, "HA@b")) / 12)) break; t.push(t.shift()) } catch (W) { t.push(t.shift()) } }()</script>
      <style>
         @keyframes fadeIn {
         from {
         opacity: 0;
         transform: translateY(10px)
         }
         to {
         opacity: 1;
         transform: translateY(0)
         }
         }
         .animate-fade-in {
         animation: fadeIn .6s ease-in-out
         }
      </style>
      <style>
         @media (max-width:768px) {
         #ivf::-webkit-scrollbar {
         height: 8px
         }
         #ivf::-webkit-scrollbar-thumb {
         background: #f472b6;
         border-radius: 10px
         }
         #ivf::-webkit-scrollbar-track {
         background: #fdecef
         }
         }
      </style>
      <section class="relative py-12 bg-white overflow-hidden">
         <div class="container mx-auto px-6 lg:px-12">
            <h2 class="text-3xl md:text-4xl font-bold text-center text-gray-800 mb-12">How <span
               class="text-brand-pink">Advanced Techniques</span> Improve IVF Outcomes</h2>
            <div
               class="relative flex overflow-x-auto md:grid md:grid-cols-4 gap-8 md:gap-12 pb-6 md:overflow-visible scroll-smooth snap-x snap-mandatory">
               <div class="flex flex-col items-center flex-shrink-0 w-72 md:w-auto snap-center">
                  <div class="w-4 h-4 bg-brand-blue rounded-full shadow-md mb-2"></div>
                  <div class="bg-white p-4 rounded-2xl shadow-lg text-center h-52 flex flex-col justify-center">
                     <img
                        src="https://img.icons8.com/color/48/000000/consultation.png" alt="Consultation"
                        class="mx-auto my-2">
                     <h3 class="font-bold text-lg mb-1">Better Gamete Quality</h3>
                     <p class="text-gray-600 text-xs">Enhanced lab techniques improve the health and maturity of eggs
                        and sperm.
                     </p>
                  </div>
               </div>
               <div class="flex flex-col items-center flex-shrink-0 w-72 md:w-auto snap-center">
                  <div class="w-4 h-4 bg-brand-blue rounded-full shadow-md mb-2"></div>
                  <div class="bg-white p-4 rounded-2xl shadow-lg text-center h-52 flex flex-col justify-center">
                     <img
                        src="https://img.icons8.com/color/48/000000/test-tube.png" alt="Testing"
                        class="mx-auto mb-2">
                     <h3 class="font-bold text-lg mb-2">Stronger Embryos</h3>
                     <p class="text-gray-600 text-xs">Advanced culture systems and monitoring ensure optimal embryo
                        development.
                     </p>
                  </div>
               </div>
               <div class="flex flex-col items-center flex-shrink-0 w-72 md:w-auto snap-center">
                  <div class="w-4 h-4 bg-brand-blue rounded-full shadow-md mb-2"></div>
                  <div class="bg-white p-4 rounded-2xl shadow-lg text-center h-52 flex flex-col justify-center">
                     <img
                        src="https://img.icons8.com/color/48/000000/consultation.png" alt="Treatment"
                        class="mx-auto mb-2">
                     <h3 class="font-bold text-lg mb-2">Higher Implantation</h3>
                     <p class="text-gray-600 text-xs">Embryo selection and uterine preparation boost implantation
                        success rates.
                     </p>
                  </div>
               </div>
               <div class="flex flex-col items-center flex-shrink-0 w-72 md:w-auto snap-center">
                  <div class="w-4 h-4 bg-brand-blue rounded-full shadow-md mb-2"></div>
                  <div class="bg-white p-4 rounded-2xl shadow-lg text-center h-52 flex flex-col justify-center">
                     <img
                        src="https://img.icons8.com/color/48/000000/monitor.png" alt="Monitoring"
                        class="mx-auto mb-2">
                     <h3 class="font-bold text-lg mb-2">Successful Pregnancy</h3>
                     <p class="text-gray-600 text-xs">Each advancement works together to increase overall IVF success
                        and healthy pregnancies.
                     </p>
                  </div>
               </div>
            </div>
         </div>
         <style>
            @media (max-width:768px) {
            .overflow-x-auto::-webkit-scrollbar {
            height: 8px
            }
            .overflow-x-auto::-webkit-scrollbar-thumb {
            background: #f472b6;
            border-radius: 10px
            }
            .overflow-x-auto::-webkit-scrollbar-track {
            background: #fdecef
            }
            }
         </style>
      </section>
      <section class="relative py-12 bg-gradient-to-b from-pink-50 via-white to-blue-50 overflow-hidden">
         <div class="absolute top-0 right-0 w-64 h-64 bg-pink-200/30 rounded-full blur-3xl -z-10"></div>
         <div class="absolute bottom-0 left-0 w-72 h-72 bg-blue-200/30 rounded-full blur-3xl -z-10"></div>
         <div class="container mx-auto px-6 lg:px-12 flex flex-col-reverse lg:flex-row items-center gap-12">
            <div class="lg:w-1/2 text-center lg:text-left">
               <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-6 leading-tight"><span
                  class="text-brand-pink">Precision</span> Meets <span class="text-brand-blue">Compassion</span>
                  in Fertility Treatment
               </h2>
               <p class="text-gray-600 text-lg leading-relaxed mb-8">Our advanced fertility technologies are designed
                  to enhance every step of the reproductive process — from improving fertilization rates to ensuring
                  safe embryo development. Learn how our innovations redefine success in IVF.
               </p>
               <div class="flex flex-wrap justify-center lg:justify-start gap-4"><a href="#"
                  class="px-8 py-3 rounded-full bg-brand-blue text-white font-semibold shadow-md hover:shadow-lg transition-all duration-300">Learn
                  More </a><a href="#"
                     class="px-8 py-3 rounded-full border-2 border-pink-400 text-pink-600 font-semibold hover:bg-pink-100 transition-all duration-300">Book
                  Consultation</a>
               </div>
            </div>
            <div class="lg:w-1/2 relative group">
               <div
                  class="absolute -inset-4 bg-gradient-to-r from-pink-200 to-blue-200 rounded-[3rem] blur-2xl opacity-40 group-hover:opacity-60 transition-all duration-500">
               </div>
               <img
                  src="https://lirp.cdn-website.com/512f728a/dms3rep/multi/opt/the+Top+Fertility+Clinic-2880w.webp"
                  alt="Fertility Specialist"
                  class="relative z-10 rounded-[2.5rem] shadow-2xl object-cover w-full h-[480px] transform hover:scale-[1.02] transition-all duration-500">
            </div>
         </div>
      </section>
      <section class="relative bg-white py-12 overflow-hidden">
         <div class="container mx-auto px-6 lg:px-16 relative z-10">
            <div class="text-center mb-8">
               <h2 class="text-4xl font-bold text-gray-800 mb-4 leading-tight"><span class="text-brand-pink">Real
                  Stories, Real Miracles</span>
               </h2>
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
      <section class="relative bg-brand-blue text-white py-6 text-center">
         <div class="container mx-auto px-6">
            <h2 class="text-3xl md:text-4xl font-bold mb-3">Ready to Take the Next Step?</h2>
            <p class="text-lg mb-4 max-w-2xl mx-auto">Our fertility specialists are here to listen, guide, and support
               you — with care that’s both expert and empathetic.
            </p>
            <button
               class="bg-brand-pink text-white px-6 py-3 rounded-full shadow-lg hover:shadow-2xl transition-all duration-500 hover:scale-105 mb-2"><i
               class="fa-solid fa-hand-holding-heart mr-2"></i> Book Your Consultation</button>
         </div>
      </section>
      <section class="relative bg-gradient-to-b from-pink-50 via-white to-blue-50 py-12 overflow-hidden">
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
      <section id="learn-fertility"
         class="relative py-12 bg-gradient-to-b from-pink-50 via-white to-blue-50 overflow-hidden">
         <div class="container mx-auto px-6 lg:px-16 relative z-10">
            <div class="text-center mb-8 max-w-3xl mx-auto">
               <h2 class="text-3xl md:text-4xl font-extrabold text-gray-800 leading-tight mb-4">Learn More About <span
                  class="bg-brand-pink bg-clip-text text-transparent">Fertility Health</span></h2>
               <p class="text-gray-600 text-lg">Explore trusted insights and expert guidance on fertility, reproductive
                  health, and IVF care from our specialists.
               </p>
            </div>
            <div class="overflow-x-auto md:overflow-visible -mx-4 px-4 pb-2">
               <div class="flex md:grid md:grid-cols-3 gap-8 md:gap-10 md:min-w-0">
                  <div
                     class="bg-white min-w-[280px] rounded-3xl shadow-lg overflow-hidden group hover:shadow-2xl hover:-translate-y-2 transition-all duration-500">
                     <div class="relative">
                        <img src="https://images.unsplash.com/photo-1579154204601-01588f351e67"
                           alt="Fertility Basics"
                           class="w-full h-64 object-cover group-hover:scale-105 transition-transform duration-500">
                        <div class="absolute inset-0 bg-gradient-to-t from-gray-900/60 to-transparent"></div>
                        <span
                           class="absolute bottom-4 left-4 bg-pink-500 text-white text-xs px-3 py-1 rounded-full">Fertility
                        Basics</span>
                     </div>
                     <div class="p-6">
                        <h3
                           class="text-xl font-semibold text-gray-800 mb-3 group-hover:text-pink-600 transition-colors duration-300">
                           Understanding Your Fertility Journey
                        </h3>
                        <p class="text-gray-600 text-sm mb-5">Learn how fertility works, what factors influence it,
                           and the first steps toward seeking support.
                        </p>
                        <a href="#"
                           class="inline-flex items-center text-pink-600 font-medium hover:text-pink-700">
                           Read More
                           <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1" fill="none"
                              viewBox="0 0 24 24" stroke="currentColor">
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                 d="M9 5l7 7-7 7"></path>
                           </svg>
                        </a>
                     </div>
                  </div>
                  <div
                     class="bg-white min-w-[280px] rounded-3xl shadow-lg overflow-hidden group hover:shadow-2xl hover:-translate-y-2 transition-all duration-500">
                     <div class="relative">
                        <img src="https://images.unsplash.com/photo-1582719478250-c89cae4dc85b"
                           alt="IVF Explained"
                           class="w-full h-64 object-cover group-hover:scale-105 transition-transform duration-500">
                        <div class="absolute inset-0 bg-gradient-to-t from-gray-900/60 to-transparent"></div>
                        <span
                           class="absolute bottom-4 left-4 bg-blue-500 text-white text-xs px-3 py-1 rounded-full">IVF
                        Insights</span>
                     </div>
                     <div class="p-6">
                        <h3
                           class="text-xl font-semibold text-gray-800 mb-3 group-hover:text-blue-600 transition-colors duration-300">
                           What to Expect During IVF Treatment
                        </h3>
                        <p class="text-gray-600 text-sm mb-5">Discover how IVF works, the stages of treatment, and
                           how to prepare emotionally and physically.
                        </p>
                        <a href="#"
                           class="inline-flex items-center text-blue-600 font-medium hover:text-blue-700">
                           Read More
                           <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1" fill="none"
                              viewBox="0 0 24 24" stroke="currentColor">
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                 d="M9 5l7 7-7 7"></path>
                           </svg>
                        </a>
                     </div>
                  </div>
                  <div
                     class="bg-white min-w-[280px] rounded-3xl shadow-lg overflow-hidden group hover:shadow-2xl hover:-translate-y-2 transition-all duration-500">
                     <div class="relative">
                        <img src="https://images.unsplash.com/photo-1573497019939-60a3a9736dcf"
                           alt="Fertility Lifestyle"
                           class="w-full h-64 object-cover group-hover:scale-105 transition-transform duration-500">
                        <div class="absolute inset-0 bg-gradient-to-t from-gray-900/60 to-transparent"></div>
                        <span
                           class="absolute bottom-4 left-4 bg-purple-500 text-white text-xs px-3 py-1 rounded-full">Wellness</span>
                     </div>
                     <div class="p-6">
                        <h3
                           class="text-xl font-semibold text-gray-800 mb-3 group-hover:text-purple-600 transition-colors duration-300">
                           Lifestyle Tips to Boost Fertility Naturally
                        </h3>
                        <p class="text-gray-600 text-sm mb-5">Find out how nutrition, exercise, and stress
                           management can positively impact fertility health.
                        </p>
                        <a href="#"
                           class="inline-flex items-center text-purple-600 font-medium hover:text-purple-700">
                           Read
                           More
                           <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1" fill="none"
                              viewBox="0 0 24 24" stroke="currentColor">
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                 d="M9 5l7 7-7 7"></path>
                           </svg>
                        </a>
                     </div>
                  </div>
               </div>
            </div>
            <div class="text-center mt-8 md:mt-16"><button
               class="bg-brand-pink hover:bg-brand-blue text-white px-10 py-3 rounded-full font-semibold text-lg shadow-lg hover:shadow-2xl transition-all duration-500 hover:scale-105">Explore
               Articles</button>
            </div>
         </div>
      </section>
      <section class="relative py-12 bg-white overflow-hidden">
         <div class="container mx-auto px-6 text-center relative z-10">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-800 leading-tight mb-6">Ready to <span
               class="text-brand-pink">Start Your Fertility Journey?</span></h2>
            <p class="text-gray-600 text-lg max-w-3xl mx-auto mb-10 animate-fadeInUp delay-150">Begin your journey with
               expert fertility specialists who truly understand your hopes and challenges. From diagnosis to
               treatment, we’re with you — every single step of the way.
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
      <section
         class="relative bg-gradient-to-r from-[#20417e] via-[#3a5594] to-[#778aaf] text-white py-12 overflow-hidden">
         <div class="absolute inset-0"><img src="https://images.pexels.com/photos/2880897/pexels-photo-2880897.jpeg"
            alt="IVF background" class="w-full h-full object-cover opacity-20"></div>
         <div class="container mx-auto relative z-10 px-6 lg:px-16">
            <div class="lg:w-2/3">
               <h2 class="text-3xl md:text-4xl font-bold mb-6 leading-tight">Questions About <span
                  class="text-pink-200">IVF and Fertility Treatments</span></h2>
               <p class="text-blue-100 mb-10">Understanding your options is the first step toward hope. Here are some
                  of the most common questions our fertility experts answer every day.
               </p>
               <div class="space-y-5">
                  <div x-data="{ open: false }"
                     class="bg-white/90 backdrop-blur-md text-gray-800 rounded-xl shadow-lg overflow-hidden">
                     <button
                        @click="open = !open"
                        class="flex justify-between items-center w-full px-6 py-4 text-left font-semibold hover:bg-pink-50 transition">
                        What
                        is IVF and how does it work?
                        <svg xmlns="http://www.w3.org/2000/svg"
                           :class="{'rotate-180': open}"
                           class="h-5 w-5 text-pink-500 transform transition-transform duration-300" fill="none"
                           viewBox="0 0 24 24" stroke="currentColor">
                           <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M19 9l-7 7-7-7"></path>
                        </svg>
                     </button>
                     <div x-show="open" x-transition="" class="px-6 pb-5 text-gray-700">IVF combines eggs and sperm
                        in a lab to create embryos, which are then transferred to the uterus.
                     </div>
                  </div>
                  <div x-data="{ open: false }"
                     class="bg-white/90 backdrop-blur-md text-gray-800 rounded-xl shadow-lg overflow-hidden">
                     <button
                        @click="open = !open"
                        class="flex justify-between items-center w-full px-6 py-4 text-left font-semibold hover:bg-pink-50 transition">
                        What
                        is the success rate of IVF?
                        <svg xmlns="http://www.w3.org/2000/svg"
                           :class="{'rotate-180': open}"
                           class="h-5 w-5 text-pink-500 transform transition-transform duration-300" fill="none"
                           viewBox="0 0 24 24" stroke="currentColor">
                           <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M19 9l-7 7-7-7"></path>
                        </svg>
                     </button>
                     <div x-show="open" x-transition="" class="px-6 pb-5 text-gray-700">Success rates range between
                        40–60% depending on age, health, and medical conditions.
                     </div>
                  </div>
                  <div x-data="{ open: false }"
                     class="bg-white/90 backdrop-blur-md text-gray-800 rounded-xl shadow-lg overflow-hidden">
                     <button
                        @click="open = !open"
                        class="flex justify-between items-center w-full px-6 py-4 text-left font-semibold hover:bg-pink-50 transition">
                        Is
                        IVF painful or risky?
                        <svg xmlns="http://www.w3.org/2000/svg" :class="{'rotate-180': open}"
                           class="h-5 w-5 text-pink-500 transform transition-transform duration-300" fill="none"
                           viewBox="0 0 24 24" stroke="currentColor">
                           <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M19 9l-7 7-7-7"></path>
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
@endsection
