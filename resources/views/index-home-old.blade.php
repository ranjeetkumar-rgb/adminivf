@extends('frontend.layouts.master')
@section('title', 'Home')
@section('content')
      <!-- Hero Section -->
      <section id="hero" class="relative h-[600px] md:h-[700px] bg-gradient-to-r from-primary-blue/10 to-primary-pink/10">
         <div class="container mx-auto px-4 md:px-8 h-full">
            <div class="flex flex-col md:flex-row items-center justify-between h-full py-12 malign-center">
               <div class="md:w-1/2 z-10">
                  <h1 class="text-3xl md:text-4xl lg:text-5xl font-bold text-support-grey mb-4">
                     Best IVF Center in Srinagar | <span class="text-primary-pink">High Success Rate</span>
                  </h1>
                  <p class="text-lg md:text-xl text-support-grey/80 mb-6">
                     Consult with Top Fertility Experts in Jammu &amp; Kashmir
                  </p>
                  <div class="flex flex-wrap max-md:justify-center gap-4 mb-8">
                     <div class="flex items-center bg-white rounded-lg px-3 py-2 shadow-sm">
                        <i class="text-yellow-400 mr-2" data-fa-i2svg="">
                           <svg class="svg-inline--fa fa-star" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg="">
                              <path fill="currentColor" d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"></path>
                           </svg>
                        </i>
                        <span class="text-support-grey font-medium">4.9/5 Google Rating</span>
                     </div>
                     <div class="flex items-center bg-white rounded-lg px-3 py-2 shadow-sm">
                        <i class="text-primary-blue mr-2" data-fa-i2svg="">
                           <svg class="svg-inline--fa fa-certificate" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="certificate" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                              <path fill="currentColor" d="M211 7.3C205 1 196-1.4 187.6 .8s-14.9 8.9-17.1 17.3L154.7 80.6l-62-17.5c-8.4-2.4-17.4 0-23.5 6.1s-8.5 15.1-6.1 23.5l17.5 62L18.1 170.6c-8.4 2.1-15 8.7-17.3 17.1S1 205 7.3 211l46.2 45L7.3 301C1 307-1.4 316 .8 324.4s8.9 14.9 17.3 17.1l62.5 15.8-17.5 62c-2.4 8.4 0 17.4 6.1 23.5s15.1 8.5 23.5 6.1l62-17.5 15.8 62.5c2.1 8.4 8.7 15 17.1 17.3s17.3-.2 23.4-6.4l45-46.2 45 46.2c6.1 6.2 15 8.7 23.4 6.4s14.9-8.9 17.1-17.3l15.8-62.5 62 17.5c8.4 2.4 17.4 0 23.5-6.1s8.5-15.1 6.1-23.5l-17.5-62 62.5-15.8c8.4-2.1 15-8.7 17.3-17.1s-.2-17.3-6.4-23.4l-46.2-45 46.2-45c6.2-6.1 8.7-15 6.4-23.4s-8.9-14.9-17.3-17.1l-62.5-15.8 17.5-62c2.4-8.4 0-17.4-6.1-23.5s-15.1-8.5-23.5-6.1l-62 17.5L341.4 18.1c-2.1-8.4-8.7-15-17.1-17.3S307 1 301 7.3L256 53.5 211 7.3z"></path>
                           </svg>
                        </i>
                        <span class="text-support-grey font-medium">NABH Accredited</span>
                     </div>
                     <div class="flex items-center bg-white rounded-lg px-3 py-2 shadow-sm">
                        <i class="text-primary-blue mr-2" data-fa-i2svg="">
                           <svg class="svg-inline--fa fa-calendar-check" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="calendar-check" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
                              <path fill="currentColor" d="M128 0c17.7 0 32 14.3 32 32V64H288V32c0-17.7 14.3-32 32-32s32 14.3 32 32V64h48c26.5 0 48 21.5 48 48v48H0V112C0 85.5 21.5 64 48 64H96V32c0-17.7 14.3-32 32-32zM0 192H448V464c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V192zM329 305c9.4-9.4 9.4-24.6 0-33.9s-24.6-9.4-33.9 0l-95 95-47-47c-9.4-9.4-24.6-9.4-33.9 0s-9.4 24.6 0 33.9l64 64c9.4 9.4 24.6 9.4 33.9 0L329 305z"></path>
                           </svg>
                        </i>
                        <span class="text-support-grey font-medium">20+ Years Experience</span>
                     </div>
                  </div>
                  <a href="#" class="mb-6 inline-block bg-primary-pink hover:bg-opacity-90 text-white px-6 py-3 rounded-md font-medium text-lg transition duration-300 cursor-pointer shadow-md">
                  Book Free Consultation
                  </a>
                  <a href="#" class="inline-flex items-center bg-green-500 hover:bg-green-600 text-white px-6 py-3 rounded-md font-medium text-lg transition-colors duration-300 shadow-md ml-4">
                  <i class="fab fa-whatsapp mr-2 text-xl"></i> Chat Now
                  </a>
               </div>
               <div class="md:w-1/2 mt-8 md:mt-0 relative" style="background-color: #f0f0f0;">
                  <div class="bg-gradient-to-br from-white via-blue-50/30 to-pink-50/30 rounded-2xl shadow-2xl p-6 border border-blue-100/50 backdrop-blur-sm">
                     <!-- Header with Icon -->
                     <div class="text-center mb-6">
                        <div class="bg-gradient-to-r from-primary-pink to-primary-blue w-12 h-12 rounded-full flex items-center justify-center mx-auto mb-3 shadow-lg">
                           <i class="text-white text-lg" data-fa-i2svg="">
                              <svg class="svg-inline--fa fa-user-md" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="user-md" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
                                 <path fill="currentColor" d="M224 256A128 128 0 1 0 224 0a128 128 0 1 0 0 256zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512H418.3c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304H178.3zM304 128c0 44.2-35.8 80-80 80s-80-35.8-80-80s35.8-80 80-80s80 35.8 80 80z"></path>
                              </svg>
                           </i>
                        </div>
                        <h3 class="text-2xl font-bold text-support-grey mb-2">Free Consultation</h3>
                        <p class="text-support-grey/70 text-sm">Get expert advice from our fertility specialists</p>
                        <div class="w-16 h-0.5 bg-gradient-to-r from-primary-pink to-primary-blue mx-auto mt-3 rounded-full"></div>
                     </div>
                     
                     <form id="consultationForm" class="space-y-4">
                        @csrf
                        <!-- Personal Information -->
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                           <div class="relative">
                              <label for="first_name" class="block text-xs font-semibold text-support-grey mb-1">First Name *</label>
                              <div class="relative">
                                 <input type="text" id="first_name" name="first_name" required 
                                        class="w-full px-3 py-2 border-2 border-gray-200 rounded-lg focus:outline-none focus:border-primary-pink focus:ring-2 focus:ring-primary-pink/10 transition-all duration-300 bg-white/80 backdrop-blur-sm text-sm">
                                 <div class="absolute inset-y-0 right-0 flex items-center pr-2">
                                    <i class="text-gray-400 text-xs" data-fa-i2svg="">
                                       <svg class="svg-inline--fa fa-user" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="user" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
                                          <path fill="currentColor" d="M224 256A128 128 0 1 0 224 0a128 128 0 1 0 0 256zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512H418.3c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304H178.3z"></path>
                                       </svg>
                                    </i>
                                 </div>
                              </div>
                           </div>
                           <div class="relative">
                              <label for="last_name" class="block text-xs font-semibold text-support-grey mb-1">Last Name *</label>
                              <div class="relative">
                                 <input type="text" id="last_name" name="last_name" required 
                                        class="w-full px-3 py-2 border-2 border-gray-200 rounded-lg focus:outline-none focus:border-primary-pink focus:ring-2 focus:ring-primary-pink/10 transition-all duration-300 bg-white/80 backdrop-blur-sm text-sm">
                                 <div class="absolute inset-y-0 right-0 flex items-center pr-2">
                                    <i class="text-gray-400 text-xs" data-fa-i2svg="">
                                       <svg class="svg-inline--fa fa-user" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="user" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
                                          <path fill="currentColor" d="M224 256A128 128 0 1 0 224 0a128 128 0 1 0 0 256zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512H418.3c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304H178.3z"></path>
                                       </svg>
                                    </i>
                                 </div>
                              </div>
                           </div>
                        </div>
                        
                        <!-- Contact Information -->
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                           <div class="relative">
                              <label for="phone" class="block text-xs font-semibold text-support-grey mb-1">Phone Number *</label>
                              <div class="relative">
                                 <input type="tel" id="phone" name="phone" required 
                                        class="w-full px-3 py-2 border-2 border-gray-200 rounded-lg focus:outline-none focus:border-primary-pink focus:ring-2 focus:ring-primary-pink/10 transition-all duration-300 bg-white/80 backdrop-blur-sm text-sm">
                                 <div class="absolute inset-y-0 right-0 flex items-center pr-2">
                                    <i class="text-gray-400 text-xs" data-fa-i2svg="">
                                       <svg class="svg-inline--fa fa-phone" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="phone" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                                          <path fill="currentColor" d="M164.9 24.6c-7.7-18.6-28-28.5-47.4-23.2l-88 24C12.1 30.2 0 46 0 64C0 311.4 200.6 512 448 512c18 0 33.8-12.1 38.6-29.5l24-88c5.3-19.4-4.6-39.7-23.2-47.4l-96-40c-16.3-6.8-35.2-2.1-46.3 11.6L304.7 368C234.3 334.7 177.3 277.7 144 207.3L193.3 167c13.7-11.2 18.4-30 11.6-46.3l-40-96z"></path>
                                       </svg>
                                    </i>
                                 </div>
                              </div>
                           </div>
                           <div class="relative">
                              <label for="email" class="block text-xs font-semibold text-support-grey mb-1">Email Address</label>
                              <div class="relative">
                                 <input type="email" id="email" name="email" 
                                        class="w-full px-3 py-2 border-2 border-gray-200 rounded-lg focus:outline-none focus:border-primary-pink focus:ring-2 focus:ring-primary-pink/10 transition-all duration-300 bg-white/80 backdrop-blur-sm text-sm">
                                 <div class="absolute inset-y-0 right-0 flex items-center pr-2">
                                    <i class="text-gray-400 text-xs" data-fa-i2svg="">
                                       <svg class="svg-inline--fa fa-envelope" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="envelope" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                                          <path fill="currentColor" d="M48 64C21.5 64 0 85.5 0 112c0 15.1 7.1 29.2 19.2 38.2L236.8 313.6c11.4 8.5 27 8.5 38.4 0L492.8 150.2c12.1-9 19.2-23.1 19.2-38.2c0-26.5-21.5-48-48-48H48zM0 176V384c0 35.3 28.7 64 64 64H448c35.3 0 64-28.7 64-64V176L294.4 339.1c-22.8 17.1-54 17.1-76.8 0L0 176z"></path>
                                       </svg>
                                    </i>
                                 </div>
                              </div>
                           </div>
                        </div>
                        
                        <!-- Medical Information -->
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                           <div class="relative">
                              <label for="age" class="block text-xs font-semibold text-support-grey mb-1">Age *</label>
                              <div class="relative">
                                 <select id="age" name="age" required 
                                         class="w-full px-3 py-2 border-2 border-gray-200 rounded-lg focus:outline-none focus:border-primary-pink focus:ring-2 focus:ring-primary-pink/10 transition-all duration-300 bg-white/80 backdrop-blur-sm appearance-none text-sm">
                                    <option value="">Select Age</option>
                                    <option value="18-25">18-25 years</option>
                                    <option value="26-30">26-30 years</option>
                                    <option value="31-35">31-35 years</option>
                                    <option value="36-40">36-40 years</option>
                                    <option value="41-45">41-45 years</option>
                                    <option value="46+">46+ years</option>
                                 </select>
                                 <div class="absolute inset-y-0 right-0 flex items-center pr-2 pointer-events-none">
                                    <i class="text-gray-400 text-xs" data-fa-i2svg="">
                                       <svg class="svg-inline--fa fa-chevron-down" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-down" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
                                          <path fill="currentColor" d="M201.4 374.6c12.5 12.5 32.8 12.5 45.3 0l160-160c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L224 306.7 86.6 169.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3l160 160z"></path>
                                       </svg>
                                    </i>
                                 </div>
                              </div>
                           </div>
                           <div class="relative">
                              <label for="treatment" class="block text-xs font-semibold text-support-grey mb-1">Treatment Interest *</label>
                              <div class="relative">
                                 <select id="treatment" name="treatment" required 
                                         class="w-full px-3 py-2 border-2 border-gray-200 rounded-lg focus:outline-none focus:border-primary-pink focus:ring-2 focus:ring-primary-pink/10 transition-all duration-300 bg-white/80 backdrop-blur-sm appearance-none text-sm">
                                    <option value="">Select Treatment</option>
                                    <option value="IVF Treatment">IVF Treatment</option>
                                    <option value="IUI Treatment">IUI Treatment</option>
                                    <option value="ICSI Treatment">ICSI Treatment</option>
                                    <option value="Surrogacy">Surrogacy</option>
                                    <option value="Egg Freezing">Egg Freezing</option>
                                    <option value="General Consultation">General Consultation</option>
                                    <option value="Other">Other</option>
                                 </select>
                                 <div class="absolute inset-y-0 right-0 flex items-center pr-2 pointer-events-none">
                                    <i class="text-gray-400 text-xs" data-fa-i2svg="">
                                       <svg class="svg-inline--fa fa-chevron-down" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-down" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
                                          <path fill="currentColor" d="M201.4 374.6c12.5 12.5 32.8 12.5 45.3 0l160-160c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L224 306.7 86.6 169.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3l160 160z"></path>
                                       </svg>
                                    </i>
                                 </div>
                              </div>
                           </div>
                        </div>
                        
                        <!-- Additional Information -->
                        <div class="relative">
                           <label for="message" class="block text-xs font-semibold text-support-grey mb-1">Additional Information</label>
                           <div class="relative">
                              <textarea id="message" name="message" rows="2" 
                                        placeholder="Tell us about your fertility journey..."
                                        class="w-full px-3 py-2 border-2 border-gray-200 rounded-lg focus:outline-none focus:border-primary-pink focus:ring-2 focus:ring-primary-pink/10 transition-all duration-300 bg-white/80 backdrop-blur-sm resize-none text-sm"></textarea>
                              <div class="absolute top-2 right-2">
                                 <i class="text-gray-400 text-xs" data-fa-i2svg="">
                                    <svg class="svg-inline--fa fa-comment" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="comment" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                                       <path fill="currentColor" d="M256 448c141.4 0 256-93.1 256-208S397.4 32 256 32S0 125.1 0 240c0 45.1 17.7 86.8 47.7 120.9c-1.9 24.5-11.4 46.3-22.1 56.8c-5.1 6.8-15.5 14.9-9.2 28.4c9.6 20.9 25.7 33.4 43.3 33.4c28.9 0 53.5-16.9 69.8-38.8c24.4 13.8 52.1 22.1 81.4 22.1z"></path>
                                    </svg>
                                 </i>
                              </div>
                           </div>
                        </div>
                        
                        <!-- Privacy Consent -->
                        <div class="bg-blue-50/50 rounded-lg p-3 border border-blue-100">
                           <div class="flex items-start">
                              <input type="checkbox" id="privacy" name="privacy" required 
                                     class="h-4 w-4 text-primary-pink focus:ring-primary-pink border-gray-300 rounded mt-0.5">
                              <label for="privacy" class="ml-2 text-xs text-support-grey/80 leading-relaxed">
                                 I agree to the <a href="#" class="text-primary-pink hover:underline font-medium">Privacy Policy</a> and consent to being contacted.
                              </label>
                           </div>
                        </div>
                        
                        <!-- Submit Button -->
                        <button type="submit" 
                                class="w-full bg-gradient-to-r from-primary-pink to-primary-blue hover:from-primary-pink/90 hover:to-primary-blue/90 text-white py-3 px-6 rounded-lg font-semibold text-base transition-all duration-300 shadow-lg hover:shadow-xl transform hover:-translate-y-0.5">
                           <i class="fas fa-calendar-check mr-2"></i>
                           Book Free Consultation
                        </button>
                     </form>
                     
                     <!-- Security Badge -->
                     <div class="mt-6 text-center">
                        <div class="inline-flex items-center bg-green-50 text-green-700 px-3 py-1.5 rounded-full text-xs font-medium border border-green-200">
                           <i class="fas fa-shield-alt mr-1.5 text-green-600"></i>
                           Your information is secure and confidential
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="absolute bottom-0 left-0 right-0 bg-white h-16 md:h-24 transform translate-y-1/2 rounded-t-[50%] z-0"></div>
      </section>
      <!-- Own DNA Section -->
      <section id="own-dna" class="pt-20 pb-16 bg-white md-mt-300">
         <div class="container mx-auto px-4 md:px-8">
            <div class="text-center mb-12">
               <h2 class="text-3xl md:text-4xl font-bold text-support-grey mb-4">Your Journey, Your DNA</h2>
               <p class="text-lg text-support-grey/80 max-w-3xl mx-auto">
                  At India IVF Srinagar, we prioritize your genetic legacy with treatments that honor your biology.
               </p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
               <div id="own-egg" class="bg-gradient-to-b from-white to-primary-blue/10 rounded-xl p-6 text-center shadow-sm hover:shadow-md transition duration-300">
                  <div class="bg-primary-blue/10 w-20 h-20 rounded-full flex items-center justify-center mx-auto mb-4">
                     <i class="text-3xl text-primary-pink" data-fa-i2svg="">
                        <svg class="svg-inline--fa fa-egg" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="egg" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" data-fa-i2svg="">
                           <path fill="currentColor" d="M192 496C86 496 0 394 0 288C0 176 64 16 192 16s192 160 192 272c0 106-86 208-192 208zM154.8 134c6.5-6 7-16.1 1-22.6s-16.1-7-22.6-1c-23.9 21.8-41.1 52.7-52.3 84.2C69.7 226.1 64 259.7 64 288c0 8.8 7.2 16 16 16s16-7.2 16-16c0-24.5 5-54.4 15.1-82.8c10.1-28.5 25-54.1 43.7-71.2z"></path>
                        </svg>
                     </i>
                  </div>
                  <h3 class="text-xl font-semibold text-support-grey mb-2">Own Egg</h3>
                  <p class="text-support-grey/80">Treatments utilizing your eggs for the highest genetic connection to your child.</p>
               </div>
               <div id="own-sperm" class="bg-gradient-to-b from-white to-primary-blue/10 rounded-xl p-6 text-center shadow-sm hover:shadow-md transition duration-300">
                  <div class="bg-primary-blue/10 w-20 h-20 rounded-full flex items-center justify-center mx-auto mb-4">
                     <i class="text-3xl text-primary-blue" data-fa-i2svg="">
                        <svg class="svg-inline--fa fa-microscope" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="microscope" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                           <path fill="currentColor" d="M160 32c0-17.7 14.3-32 32-32h32c17.7 0 32 14.3 32 32c17.7 0 32 14.3 32 32V288c0 17.7-14.3 32-32 32c0 17.7-14.3 32-32 32H192c-17.7 0-32-14.3-32-32c-17.7 0-32-14.3-32-32V64c0-17.7 14.3-32 32-32zM32 448H320c70.7 0 128-57.3 128-128s-57.3-128-128-128V128c106 0 192 86 192 192c0 49.2-18.5 94-48.9 128H480c17.7 0 32 14.3 32 32s-14.3 32-32 32H320 32c-17.7 0-32-14.3-32-32s14.3-32 32-32zm80-64H304c8.8 0 16 7.2 16 16s-7.2 16-16 16H112c-8.8 0-16-7.2-16-16s7.2-16 16-16z"></path>
                        </svg>
                     </i>
                  </div>
                  <h3 class="text-xl font-semibold text-support-grey mb-2">Own Sperm</h3>
                  <p class="text-support-grey/80">Specialized protocols to utilize paternal sperm, preserving the father's genetic lineage.</p>
               </div>
               <div id="own-dna-card" class="bg-gradient-to-b from-white to-primary-blue/10 rounded-xl p-6 text-center shadow-sm hover:shadow-md transition duration-300">
                  <div class="bg-primary-blue/10 w-20 h-20 rounded-full flex items-center justify-center mx-auto mb-4">
                     <i class="text-3xl text-primary-blue" data-fa-i2svg="">
                        <svg class="svg-inline--fa fa-dna" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="dna" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
                           <path fill="currentColor" d="M416 0c17.7 0 32 14.3 32 32c0 59.8-30.3 107.5-69.4 146.6c-28 28-62.5 53.5-97.3 77.4l-2.5 1.7c-11.9 8.1-23.8 16.1-35.5 23.9l0 0 0 0 0 0-1.6 1c-6 4-11.9 7.9-17.8 11.9c-20.9 14-40.8 27.7-59.3 41.5H283.3c-9.8-7.4-20.1-14.7-30.7-22.1l7-4.7 3-2c15.1-10.1 30.9-20.6 46.7-31.6c25 18.1 48.9 37.3 69.4 57.7C417.7 372.5 448 420.2 448 480c0 17.7-14.3 32-32 32s-32-14.3-32-32H64c0 17.7-14.3 32-32 32s-32-14.3-32-32c0-59.8 30.3-107.5 69.4-146.6c28-28 62.5-53.5 97.3-77.4c-34.8-23.9-69.3-49.3-97.3-77.4C30.3 139.5 0 91.8 0 32C0 14.3 14.3 0 32 0S64 14.3 64 32H384c0-17.7 14.3-32 32-32zM338.6 384H109.4c-10.1 10.6-18.6 21.3-25.5 32H364.1c-6.8-10.7-15.3-21.4-25.5-32zM109.4 128H338.6c10.1-10.7 18.6-21.3 25.5-32H83.9c6.8 10.7 15.3 21.3 25.5 32zm55.4 48c18.4 13.8 38.4 27.5 59.3 41.5c20.9-14 40.8-27.7 59.3-41.5H164.7z"></path>
                        </svg>
                     </i>
                  </div>
                  <h3 class="text-xl font-semibold text-support-grey mb-2">Own DNA</h3>
                  <p class="text-support-grey/80">Advanced genetic screening ensuring your DNA is preserved through generations.</p>
               </div>
               <div id="own-baby" class="bg-gradient-to-b from-white to-primary-blue/10 rounded-xl p-6 text-center shadow-sm hover:shadow-md transition duration-300">
                  <div class="bg-primary-blue/10 w-20 h-20 rounded-full flex items-center justify-center mx-auto mb-4">
                     <i class="text-3xl text-primary-pink" data-fa-i2svg="">
                        <svg class="svg-inline--fa fa-baby" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="baby" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
                           <path fill="currentColor" d="M152 88a72 72 0 1 1 144 0A72 72 0 1 1 152 88zM39.7 144.5c13-17.9 38-21.8 55.9-8.8L131.8 162c26.8 19.5 59.1 30 92.2 30s65.4-10.5 92.2-30l36.2-26.4c17.9-13 42.9-9 55.9 8.8s9 42.9-8.8 55.9l-36.2 26.4c-13.6 9.9-28.1 18.2-43.3 25V288H128V251.7c-15.2-6.7-29.7-15.1-43.3-25L48.5 200.3c-17.9-13-21.8-38-8.8-55.9zm89.8 184.8l60.6 53-26 37.2 24.3 24.3c15.6 15.6 15.6 40.9 0 56.6s-40.9 15.6-56.6 0l-48-48C70 438.6 68.1 417 79.2 401.1l50.2-71.8zm128.5 53l60.6-53 50.2 71.8c11.1 15.9 9.2 37.5-4.5 51.2l-48 48c-15.6 15.6-40.9 15.6-56.6 0s-15.6-40.9 0-56.6L284 419.4l-26-37.2z"></path>
                        </svg>
                     </i>
                  </div>
                  <h3 class="text-xl font-semibold text-support-grey mb-2">Own Baby</h3>
                  <p class="text-support-grey/80">Complete support through pregnancy and delivery to welcome your genetic legacy.</p>
               </div>
            </div>
         </div>
      </section>
      <!-- Services Section -->
      <section id="services" class="py-16 bg-gray-50">
         <div class="container mx-auto px-4 md:px-8">
            <div class="text-center mb-12">
               <h2 class="text-3xl md:text-4xl font-bold text-support-grey mb-4">Our Comprehensive Fertility Services</h2>
               <p class="text-lg text-support-grey/80 max-w-3xl mx-auto">
                  India IVF Srinagar offers a complete range of fertility treatments tailored to your unique needs.
               </p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
               <span class="group cursor-pointer">
                  <div class="bg-white rounded-xl overflow-hidden shadow-md hover:shadow-lg transition duration-300">
                     <div class="h-48 bg-primary-blue/10 flex items-center justify-center">
                        <i class="text-6xl text-primary-blue group-hover:text-primary-pink transition duration-300" data-fa-i2svg="">
                           <svg class="svg-inline--fa fa-baby-carriage" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="baby-carriage" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                              <path fill="currentColor" d="M256 192H.1C2.7 117.9 41.3 52.9 99 14.1c13.3-8.9 30.8-4.3 39.9 8.8L256 192zm128-32c0-35.3 28.7-64 64-64h32c17.7 0 32 14.3 32 32s-14.3 32-32 32l-32 0v64c0 25.2-5.8 50.2-17 73.5s-27.8 44.5-48.6 62.3s-45.5 32-72.7 41.6S253.4 416 224 416s-58.5-5-85.7-14.6s-51.9-23.8-72.7-41.6s-37.3-39-48.6-62.3S0 249.2 0 224l224 0 160 0V160zM80 416a48 48 0 1 1 0 96 48 48 0 1 1 0-96zm240 48a48 48 0 1 1 96 0 48 48 0 1 1 -96 0z"></path>
                           </svg>
                        </i>
                     </div>
                     <div class="p-6">
                        <h3 class="text-xl font-semibold text-support-grey mb-2 group-hover:text-primary-blue transition duration-300">In Vitro Fertilization (IVF)</h3>
                        <p class="text-support-grey/80 mb-4">Advanced IVF treatment with 75%+ success rate, personalized for optimal results.</p>
                        <div class="flex items-center text-primary-pink font-medium">
                           Learn more
                           <i class="ml-2 group-hover:ml-3 transition-all duration-300" data-fa-i2svg="">
                              <svg class="svg-inline--fa fa-arrow-right" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="arrow-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
                                 <path fill="currentColor" d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z"></path>
                              </svg>
                           </i>
                        </div>
                     </div>
                  </div>
               </span>
               <span class="group cursor-pointer">
                  <div class="bg-white rounded-xl overflow-hidden shadow-md hover:shadow-lg transition duration-300">
                     <div class="h-48 bg-primary-blue/10 flex items-center justify-center">
                        <i class="text-6xl text-primary-blue group-hover:text-primary-pink transition duration-300" data-fa-i2svg="">
                           <svg class="svg-inline--fa fa-syringe" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="syringe" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                              <path fill="currentColor" d="M441 7l32 32 32 32c9.4 9.4 9.4 24.6 0 33.9s-24.6 9.4-33.9 0l-15-15L417.9 128l55 55c9.4 9.4 9.4 24.6 0 33.9s-24.6 9.4-33.9 0l-72-72L295 73c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l55 55L422.1 56 407 41c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0zM210.3 155.7l61.1-61.1c.3 .3 .6 .7 1 1l16 16 56 56 56 56 16 16c.3 .3 .6 .6 1 1l-191 191c-10.5 10.5-24.7 16.4-39.6 16.4H97.9L41 505c-9.4 9.4-24.6 9.4-33.9 0s-9.4-24.6 0-33.9l57-57V325.3c0-14.9 5.9-29.1 16.4-39.6l43.3-43.3 57 57c6.2 6.2 16.4 6.2 22.6 0s6.2-16.4 0-22.6l-57-57 41.4-41.4 57 57c6.2 6.2 16.4 6.2 22.6 0s6.2-16.4 0-22.6l-57-57z"></path>
                           </svg>
                        </i>
                     </div>
                     <div class="p-6">
                        <h3 class="text-xl font-semibold text-support-grey mb-2 group-hover:text-primary-blue transition duration-300">Intrauterine Insemination (IUI)</h3>
                        <p class="text-support-grey/80 mb-4">Less invasive fertility treatment with high success rates for suitable candidates.</p>
                        <div class="flex items-center text-primary-pink font-medium">
                           Learn more
                           <i class="ml-2 group-hover:ml-3 transition-all duration-300" data-fa-i2svg="">
                              <svg class="svg-inline--fa fa-arrow-right" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="arrow-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
                                 <path fill="currentColor" d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z"></path>
                              </svg>
                           </i>
                        </div>
                     </div>
                  </div>
               </span>
               <span class="group cursor-pointer">
                  <div class="bg-white rounded-xl overflow-hidden shadow-md hover:shadow-lg transition duration-300">
                     <div class="h-48 bg-primary-blue/10 flex items-center justify-center">
                        <i class="text-6xl text-primary-blue group-hover:text-primary-pink transition duration-300" data-fa-i2svg="">
                           <svg class="svg-inline--fa fa-microscope" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="microscope" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                              <path fill="currentColor" d="M160 32c0-17.7 14.3-32 32-32h32c17.7 0 32 14.3 32 32c17.7 0 32 14.3 32 32V288c0 17.7-14.3 32-32 32c0 17.7-14.3 32-32 32H192c-17.7 0-32-14.3-32-32c-17.7 0-32-14.3-32-32V64c0-17.7 14.3-32 32-32zM32 448H320c70.7 0 128-57.3 128-128s-57.3-128-128-128V128c106 0 192 86 192 192c0 49.2-18.5 94-48.9 128H480c17.7 0 32 14.3 32 32s-14.3 32-32 32H320 32c-17.7 0-32-14.3-32-32s14.3-32 32-32zm80-64H304c8.8 0 16 7.2 16 16s-7.2 16-16 16H112c-8.8 0-16-7.2-16-16s7.2-16 16-16z"></path>
                           </svg>
                        </i>
                     </div>
                     <div class="p-6">
                        <h3 class="text-xl font-semibold text-support-grey mb-2 group-hover:text-primary-blue transition duration-300">Intracytoplasmic Sperm Injection (ICSI)</h3>
                        <p class="text-support-grey/80 mb-4">Specialized treatment for male factor infertility with direct sperm injection.</p>
                        <div class="flex items-center text-primary-pink font-medium">
                           Learn more
                           <i class="ml-2 group-hover:ml-3 transition-all duration-300" data-fa-i2svg="">
                              <svg class="svg-inline--fa fa-arrow-right" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="arrow-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
                                 <path fill="currentColor" d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z"></path>
                              </svg>
                           </i>
                        </div>
                     </div>
                  </div>
               </span>
               <span class="group cursor-pointer">
                  <div class="bg-white rounded-xl overflow-hidden shadow-md hover:shadow-lg transition duration-300">
                     <div class="h-48 bg-primary-blue/10 flex items-center justify-center">
                        <i class="text-6xl text-primary-blue group-hover:text-primary-pink transition duration-300" data-fa-i2svg="">
                           <svg class="svg-inline--fa fa-snowflake" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="snowflake" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
                              <path fill="currentColor" d="M224 0c17.7 0 32 14.3 32 32V62.1l15-15c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9l-49 49v70.3l61.4-35.8 17.7-66.1c3.4-12.8 16.6-20.4 29.4-17s20.4 16.6 17 29.4l-5.2 19.3 23.6-13.8c15.3-8.9 34.9-3.7 43.8 11.5s3.8 34.9-11.5 43.8l-25.3 14.8 21.7 5.8c12.8 3.4 20.4 16.6 17 29.4s-16.6 20.4-29.4 17l-67.7-18.1L287.5 256l60.9 35.5 67.7-18.1c12.8-3.4 26 4.2 29.4 17s-4.2 26-17 29.4l-21.7 5.8 25.3 14.8c15.3 8.9 20.4 28.5 11.5 43.8s-28.5 20.4-43.8 11.5l-23.6-13.8 5.2 19.3c3.4 12.8-4.2 26-17 29.4s-26-4.2-29.4-17l-17.7-66.1L256 311.7v70.3l49 49c9.4 9.4 9.4 24.6 0 33.9s-24.6 9.4-33.9 0l-15-15V480c0 17.7-14.3 32-32 32s-32-14.3-32-32V449.9l-15 15c-9.4 9.4-24.6 9.4-33.9 0s-9.4-24.6 0-33.9l49-49V311.7l-61.4 35.8-17.7 66.1c-3.4 12.8-16.6 20.4-29.4 17s-20.4-16.6-17-29.4l5.2-19.3L48.1 395.6c-15.3 8.9-34.9 3.7-43.8-11.5s-3.7-34.9 11.5-43.8l25.3-14.8-21.7-5.8c-12.8-3.4-20.4-16.6-17-29.4s16.6-20.4 29.4-17l67.7 18.1L160.5 256 99.6 220.5 31.9 238.6c-12.8 3.4-26-4.2-29.4-17s4.2-26 17-29.4l21.7-5.8L15.9 171.6C.6 162.7-4.5 143.1 4.4 127.9s28.5-20.4 43.8-11.5l23.6 13.8-5.2-19.3c-3.4-12.8 4.2-26 17-29.4s26 4.2 29.4 17l17.7 66.1L192 200.3V129.9L143 81c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l15 15V32c0-17.7 14.3-32 32-32z"></path>
                           </svg>
                        </i>
                     </div>
                     <div class="p-6">
                        <h3 class="text-xl font-semibold text-support-grey mb-2 group-hover:text-primary-blue transition duration-300">Egg Freezing</h3>
                        <p class="text-support-grey/80 mb-4">Preserve your fertility for future family planning with cutting-edge cryopreservation.</p>
                        <div class="flex items-center text-primary-pink font-medium">
                           Learn more
                           <i class="ml-2 group-hover:ml-3 transition-all duration-300" data-fa-i2svg="">
                              <svg class="svg-inline--fa fa-arrow-right" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="arrow-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
                                 <path fill="currentColor" d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z"></path>
                              </svg>
                           </i>
                        </div>
                     </div>
                  </div>
               </span>
               <span class="group cursor-pointer">
                  <div class="bg-white rounded-xl overflow-hidden shadow-md hover:shadow-lg transition duration-300">
                     <div class="h-48 bg-primary-blue/10 flex items-center justify-center">
                        <i class="text-6xl text-primary-blue group-hover:text-primary-pink transition duration-300" data-fa-i2svg="">
                           <svg class="svg-inline--fa fa-hospital-user" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="hospital-user" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg="">
                              <path fill="currentColor" d="M48 0C21.5 0 0 21.5 0 48V256H144c8.8 0 16 7.2 16 16s-7.2 16-16 16H0v64H144c8.8 0 16 7.2 16 16s-7.2 16-16 16H0v80c0 26.5 21.5 48 48 48H265.9c-6.3-10.2-9.9-22.2-9.9-35.1c0-46.9 25.8-87.8 64-109.2V271.8 48c0-26.5-21.5-48-48-48H48zM152 64h16c8.8 0 16 7.2 16 16v24h24c8.8 0 16 7.2 16 16v16c0 8.8-7.2 16-16 16H184v24c0 8.8-7.2 16-16 16H152c-8.8 0-16-7.2-16-16V152H112c-8.8 0-16-7.2-16-16V120c0-8.8 7.2-16 16-16h24V80c0-8.8 7.2-16 16-16zM512 272a80 80 0 1 0 -160 0 80 80 0 1 0 160 0zM288 477.1c0 19.3 15.6 34.9 34.9 34.9H541.1c19.3 0 34.9-15.6 34.9-34.9c0-51.4-41.7-93.1-93.1-93.1H381.1c-51.4 0-93.1 41.7-93.1 93.1z"></path>
                           </svg>
                        </i>
                     </div>
                     <div class="p-6">
                        <h3 class="text-xl font-semibold text-support-grey mb-2 group-hover:text-primary-blue transition duration-300">Laparoscopy</h3>
                        <p class="text-support-grey/80 mb-4">Minimally invasive diagnostic and therapeutic procedures for reproductive issues.</p>
                        <div class="flex items-center text-primary-pink font-medium">
                           Learn more
                           <i class="ml-2 group-hover:ml-3 transition-all duration-300" data-fa-i2svg="">
                              <svg class="svg-inline--fa fa-arrow-right" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="arrow-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
                                 <path fill="currentColor" d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z"></path>
                              </svg>
                           </i>
                        </div>
                     </div>
                  </div>
               </span>
               <span class="group cursor-pointer">
                  <div class="bg-white rounded-xl overflow-hidden shadow-md hover:shadow-lg transition duration-300">
                     <div class="h-48 bg-primary-blue/10 flex items-center justify-center">
                        <i class="text-6xl text-primary-blue group-hover:text-primary-pink transition duration-300" data-fa-i2svg="">
                           <svg class="svg-inline--fa fa-users" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="users" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" data-fa-i2svg="">
                              <path fill="currentColor" d="M144 0a80 80 0 1 1 0 160A80 80 0 1 1 144 0zM512 0a80 80 0 1 1 0 160A80 80 0 1 1 512 0zM0 298.7C0 239.8 47.8 192 106.7 192h42.7c15.9 0 31 3.5 44.6 9.7c-1.3 7.2-1.9 14.7-1.9 22.3c0 38.2 16.8 72.5 43.3 96c-.2 0-.4 0-.7 0H21.3C9.6 320 0 310.4 0 298.7zM405.3 320c-.2 0-.4 0-.7 0c26.6-23.5 43.3-57.8 43.3-96c0-7.6-.7-15-1.9-22.3c13.6-6.3 28.7-9.7 44.6-9.7h42.7C592.2 192 640 239.8 640 298.7c0 11.8-9.6 21.3-21.3 21.3H405.3zM224 224a96 96 0 1 1 192 0 96 96 0 1 1 -192 0zM128 485.3C128 411.7 187.7 352 261.3 352H378.7C452.3 352 512 411.7 512 485.3c0 14.7-11.9 26.7-26.7 26.7H154.7c-14.7 0-26.7-11.9-26.7-26.7z"></path>
                           </svg>
                        </i>
                     </div>
                     <div class="p-6">
                        <h3 class="text-xl font-semibold text-support-grey mb-2 group-hover:text-primary-blue transition duration-300">Surrogacy</h3>
                        <p class="text-support-grey/80 mb-4">Legal and ethical surrogacy services with comprehensive support throughout the journey.</p>
                        <div class="flex items-center text-primary-pink font-medium">
                           Learn more
                           <i class="ml-2 group-hover:ml-3 transition-all duration-300" data-fa-i2svg="">
                              <svg class="svg-inline--fa fa-arrow-right" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="arrow-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
                                 <path fill="currentColor" d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z"></path>
                              </svg>
                           </i>
                        </div>
                     </div>
                  </div>
               </span>
            </div>
         </div>
      </section>
      <!-- Doctor Highlight Section -->
      <section id="doctor-highlight" class="py-16 bg-white">
         <div class="container mx-auto px-4 md:px-8">
            <div class="flex flex-col md:flex-row items-center gap-8">
               <div class="md:w-1/3">
                  <div class="rounded-xl overflow-hidden shadow-lg">
                     <img class="w-full h-[400px] object-cover" src="https://storage.googleapis.com/uxpilot-auth.appspot.com/9c6abc74f5-3037f0564fa093b25824.png" alt="professional female Indian doctor in white coat, confident pose, medical office background, professional headshot">
                  </div>
               </div>
               <div class="md:w-2/3">
                  <div class="flex items-center mb-4">
                     <h2 class="text-3xl md:text-4xl font-bold text-support-grey">Meet Our Expert</h2>
                     <div class="ml-4 flex">
                        <i class="text-yellow-400" data-fa-i2svg="">
                           <svg class="svg-inline--fa fa-star" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg="">
                              <path fill="currentColor" d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"></path>
                           </svg>
                        </i>
                        <i class="text-yellow-400" data-fa-i2svg="">
                           <svg class="svg-inline--fa fa-star" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg="">
                              <path fill="currentColor" d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"></path>
                           </svg>
                        </i>
                        <i class="text-yellow-400" data-fa-i2svg="">
                           <svg class="svg-inline--fa fa-star" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg="">
                              <path fill="currentColor" d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"></path>
                           </svg>
                        </i>
                        <i class="text-yellow-400" data-fa-i2svg="">
                           <svg class="svg-inline--fa fa-star" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg="">
                              <path fill="currentColor" d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"></path>
                           </svg>
                        </i>
                        <i class="text-yellow-400" data-fa-i2svg="">
                           <svg class="svg-inline--fa fa-star" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg="">
                              <path fill="currentColor" d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"></path>
                           </svg>
                        </i>
                     </div>
                  </div>
                  <h3 class="text-2xl font-semibold text-primary-blue mb-2">Dr. Sheemu Shoukat</h3>
                  <p class="text-lg text-primary-pink font-medium mb-4">Fertility Specialist &amp; IVF Consultant</p>
                  <div class="flex flex-wrap gap-3 mb-6">
                     <span class="bg-primary-blue/10 text-primary-blue px-3 py-1 rounded-full text-sm font-medium">MBBS</span>
                     <span class="bg-primary-blue/10 text-primary-blue px-3 py-1 rounded-full text-sm font-medium">MD (Gynecology)</span>
                     <span class="bg-primary-blue/10 text-primary-blue px-3 py-1 rounded-full text-sm font-medium">Fellowship in Reproductive Medicine</span>
                     <span class="bg-primary-blue/10 text-primary-blue px-3 py-1 rounded-full text-sm font-medium">20+ Years Experience</span>
                  </div>
                  <p class="text-support-grey/80 mb-6">
                     Dr. Sheemu Shoukat is a renowned fertility specialist with over 20 years of experience in treating complex infertility cases. She has helped thousands of couples in Jammu &amp; Kashmir realize their dream of parenthood through her expertise in IVF, ICSI, and other advanced reproductive technologies.
                  </p>
                  <div class="flex flex-wrap gap-4">
                     <span class="bg-primary-pink hover:bg-opacity-90 text-white px-6 py-3 rounded-md font-medium transition duration-300 cursor-pointer">
                     Book Consultation with Dr. Sheemu
                     </span>
                     <span class="border border-primary-blue text-primary-blue hover:bg-primary-blue hover:text-white px-6 py-3 rounded-md font-medium transition duration-300 cursor-pointer" target="_blank">
                     View Google Reviews
                     </span>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- Why Choose Us Section -->
      <section id="why-choose" class="py-16 bg-gray-50">
         <div class="container mx-auto px-4 md:px-8">
            <div class="text-center mb-12">
               <h2 class="text-3xl md:text-4xl font-bold text-support-grey mb-4">Why Choose India IVF - Srinagar?</h2>
               <p class="text-lg text-support-grey/80 max-w-3xl mx-auto">
                  We combine advanced technology with compassionate care to deliver the best fertility outcomes in Jammu &amp; Kashmir.
               </p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-12">
               <div class="bg-white rounded-xl p-6 shadow-md">
                  <div class="flex items-start mb-4">
                     <div class="bg-primary-blue/10 p-3 rounded-full mr-4">
                        <i class="text-2xl text-primary-blue" data-fa-i2svg="">
                           <svg class="svg-inline--fa fa-location-dot" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="location-dot" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" data-fa-i2svg="">
                              <path fill="currentColor" d="M215.7 499.2C267 435 384 279.4 384 192C384 86 298 0 192 0S0 86 0 192c0 87.4 117 243 168.3 307.2c12.3 15.3 35.1 15.3 47.4 0zM192 128a64 64 0 1 1 0 128 64 64 0 1 1 0-128z"></path>
                           </svg>
                        </i>
                     </div>
                     <div>
                        <h3 class="text-xl font-semibold text-support-grey mb-2">Strategic Location</h3>
                        <p class="text-support-grey/80">Conveniently located on Bypass Road, Hyderpora, easily accessible from all parts of Srinagar and surrounding areas.</p>
                     </div>
                  </div>
               </div>
               <div class="bg-white rounded-xl p-6 shadow-md">
                  <div class="flex items-start mb-4">
                     <div class="bg-primary-blue/10 p-3 rounded-full mr-4">
                        <i class="text-2xl text-primary-blue" data-fa-i2svg="">
                           <svg class="svg-inline--fa fa-flask" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="flask" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
                              <path fill="currentColor" d="M288 0H160 128C110.3 0 96 14.3 96 32s14.3 32 32 32V196.8c0 11.8-3.3 23.5-9.5 33.5L10.3 406.2C3.6 417.2 0 429.7 0 442.6C0 480.9 31.1 512 69.4 512H378.6c38.3 0 69.4-31.1 69.4-69.4c0-12.8-3.6-25.4-10.3-36.4L329.5 230.4c-6.2-10.1-9.5-21.7-9.5-33.5V64c17.7 0 32-14.3 32-32s-14.3-32-32-32H288zM192 196.8V64h64V196.8c0 23.7 6.6 46.9 19 67.1L309.5 320h-171L173 263.9c12.4-20.2 19-43.4 19-67.1z"></path>
                           </svg>
                        </i>
                     </div>
                     <div>
                        <h3 class="text-xl font-semibold text-support-grey mb-2">State-of-the-Art Laboratory</h3>
                        <p class="text-support-grey/80">Equipped with the latest technology and maintained according to international standards for optimal embryo development.</p>
                     </div>
                  </div>
               </div>
               <div class="bg-white rounded-xl p-6 shadow-md">
                  <div class="flex items-start mb-4">
                     <div class="bg-primary-blue/10 p-3 rounded-full mr-4">
                        <i class="text-2xl text-primary-blue" data-fa-i2svg="">
                           <svg class="svg-inline--fa fa-indian-rupee-sign" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="indian-rupee-sign" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" data-fa-i2svg="">
                              <path fill="currentColor" d="M0 64C0 46.3 14.3 32 32 32H96h16H288c17.7 0 32 14.3 32 32s-14.3 32-32 32H231.8c9.6 14.4 16.7 30.6 20.7 48H288c17.7 0 32 14.3 32 32s-14.3 32-32 32H252.4c-13.2 58.3-61.9 103.2-122.2 110.9L274.6 422c14.4 10.3 17.7 30.3 7.4 44.6s-30.3 17.7-44.6 7.4L13.4 314C2.1 306-2.7 291.5 1.5 278.2S18.1 256 32 256h80c32.8 0 61-19.7 73.3-48H32c-17.7 0-32-14.3-32-32s14.3-32 32-32H185.3C173 115.7 144.8 96 112 96H96 32C14.3 96 0 81.7 0 64z"></path>
                           </svg>
                        </i>
                     </div>
                     <div>
                        <h3 class="text-xl font-semibold text-support-grey mb-2">Cost-Effective Packages</h3>
                        <p class="text-support-grey/80">Transparent pricing with customized packages to suit different budgets without compromising on quality of care.</p>
                     </div>
                  </div>
               </div>
               <div class="bg-white rounded-xl p-6 shadow-md">
                  <div class="flex items-start mb-4">
                     <div class="bg-primary-blue/10 p-3 rounded-full mr-4">
                        <i class="text-2xl text-primary-blue" data-fa-i2svg="">
                           <svg class="svg-inline--fa fa-user-doctor" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="user-doctor" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
                              <path fill="currentColor" d="M224 256A128 128 0 1 0 224 0a128 128 0 1 0 0 256zm-96 55.2C54 332.9 0 401.3 0 482.3C0 498.7 13.3 512 29.7 512H418.3c16.4 0 29.7-13.3 29.7-29.7c0-81-54-149.4-128-171.1V362c27.6 7.1 48 32.2 48 62v40c0 8.8-7.2 16-16 16H336c-8.8 0-16-7.2-16-16s7.2-16 16-16V424c0-17.7-14.3-32-32-32s-32 14.3-32 32v24c8.8 0 16 7.2 16 16s-7.2 16-16 16H256c-8.8 0-16-7.2-16-16V424c0-29.8 20.4-54.9 48-62V304.9c-6-.6-12.1-.9-18.3-.9H178.3c-6.2 0-12.3 .3-18.3 .9v65.4c23.1 6.9 40 28.3 40 53.7c0 30.9-25.1 56-56 56s-56-25.1-56-56c0-25.4 16.9-46.8 40-53.7V311.2zM144 448a24 24 0 1 0 0-48 24 24 0 1 0 0 48z"></path>
                           </svg>
                        </i>
                     </div>
                     <div>
                        <h3 class="text-xl font-semibold text-support-grey mb-2">Expert Team</h3>
                        <p class="text-support-grey/80">Our multidisciplinary team includes fertility specialists, embryologists, nurses, and counselors dedicated to your success.</p>
                     </div>
                  </div>
               </div>
            </div>
            <!-- Comparison Table -->
            <div class="bg-white rounded-xl shadow-md overflow-hidden">
               <div class="bg-primary-blue text-white p-4">
                  <h3 class="text-xl font-semibold text-center">India IVF Srinagar vs. Others</h3>
               </div>
               <div class="overflow-x-auto">
                  <table class="w-full">
                     <thead>
                        <tr class="bg-gray-100">
                           <th class="px-6 py-3 text-left text-support-grey font-semibold">Features</th>
                           <th class="px-6 py-3 text-center text-primary-blue font-semibold">India IVF Srinagar</th>
                           <th class="px-6 py-3 text-center text-support-grey font-semibold">Others</th>
                        </tr>
                     </thead>
                     <tbody>
                        <tr class="border-b">
                           <td class="px-6 py-4 text-support-grey font-medium">Success Rate</td>
                           <td class="px-6 py-4 text-center text-primary-blue font-semibold">75%+</td>
                           <td class="px-6 py-4 text-center text-support-grey">40-50%</td>
                        </tr>
                        <tr class="border-b bg-gray-50">
                           <td class="px-6 py-4 text-support-grey font-medium">Doctor Experience</td>
                           <td class="px-6 py-4 text-center text-primary-blue font-semibold">20+ Years</td>
                           <td class="px-6 py-4 text-center text-support-grey">Varies (5-15 Years)</td>
                        </tr>
                        <tr class="border-b">
                           <td class="px-6 py-4 text-support-grey font-medium">Lab Technology</td>
                           <td class="px-6 py-4 text-center text-primary-blue font-semibold">Latest Generation</td>
                           <td class="px-6 py-4 text-center text-support-grey">Older Equipment</td>
                        </tr>
                        <tr class="border-b bg-gray-50">
                           <td class="px-6 py-4 text-support-grey font-medium">Personalized Care</td>
                           <td class="px-6 py-4 text-center text-primary-blue font-semibold">
                              <i class="text-green-500" data-fa-i2svg="">
                                 <svg class="svg-inline--fa fa-check" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="check" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
                                    <path fill="currentColor" d="M438.6 105.4c12.5 12.5 12.5 32.8 0 45.3l-256 256c-12.5 12.5-32.8 12.5-45.3 0l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0L160 338.7 393.4 105.4c12.5-12.5 32.8-12.5 45.3 0z"></path>
                                 </svg>
                              </i>
                           </td>
                           <td class="px-6 py-4 text-center text-support-grey">
                              <i class="text-red-500" data-fa-i2svg="">
                                 <svg class="svg-inline--fa fa-xmark" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="xmark" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" data-fa-i2svg="">
                                    <path fill="currentColor" d="M342.6 150.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L192 210.7 86.6 105.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L146.7 256 41.4 361.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L192 301.3 297.4 406.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L237.3 256 342.6 150.6z"></path>
                                 </svg>
                              </i>
                           </td>
                        </tr>
                        <tr>
                           <td class="px-6 py-4 text-support-grey font-medium">Transparent Pricing</td>
                           <td class="px-6 py-4 text-center text-primary-blue font-semibold">
                              <i class="text-green-500" data-fa-i2svg="">
                                 <svg class="svg-inline--fa fa-check" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="check" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
                                    <path fill="currentColor" d="M438.6 105.4c12.5 12.5 12.5 32.8 0 45.3l-256 256c-12.5 12.5-32.8 12.5-45.3 0l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0L160 338.7 393.4 105.4c12.5-12.5 32.8-12.5 45.3 0z"></path>
                                 </svg>
                              </i>
                           </td>
                           <td class="px-6 py-4 text-center text-support-grey">
                              <i class="text-red-500" data-fa-i2svg="">
                                 <svg class="svg-inline--fa fa-xmark" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="xmark" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" data-fa-i2svg="">
                                    <path fill="currentColor" d="M342.6 150.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L192 210.7 86.6 105.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L146.7 256 41.4 361.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L192 301.3 297.4 406.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L237.3 256 342.6 150.6z"></path>
                                 </svg>
                              </i>
                           </td>
                        </tr>
                     </tbody>
                  </table>
               </div>
            </div>
         </div>
      </section>
      <!-- Testimonials Section -->
      <section id="testimonials" class="py-16 bg-white">
         <div class="container mx-auto px-4 md:px-8">
            <div class="text-center mb-12">
               <h2 class="text-3xl md:text-4xl font-bold text-support-grey mb-4">Success Stories from Srinagar</h2>
               <p class="text-lg text-support-grey/80 max-w-3xl mx-auto">
                  Real experiences from our patients who found hope and joy at India IVF Srinagar.
               </p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
               <div class="bg-gray-50 rounded-xl p-6 shadow-sm hover:shadow-md transition duration-300">
                  <div class="flex items-center mb-4">
                     <div class="h-12 w-12 rounded-full overflow-hidden mr-4">
                        <img src="https://storage.googleapis.com/uxpilot-auth.appspot.com/avatars/avatar-1.jpg" alt="Patient" class="w-full h-full object-cover">
                     </div>
                     <div>
                        <h4 class="font-semibold text-support-grey">Fatima &amp; Arif</h4>
                        <div class="flex text-yellow-400">
                           <i data-fa-i2svg="">
                              <svg class="svg-inline--fa fa-star" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg="">
                                 <path fill="currentColor" d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"></path>
                              </svg>
                           </i>
                           <i data-fa-i2svg="">
                              <svg class="svg-inline--fa fa-star" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg="">
                                 <path fill="currentColor" d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"></path>
                              </svg>
                           </i>
                           <i data-fa-i2svg="">
                              <svg class="svg-inline--fa fa-star" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg="">
                                 <path fill="currentColor" d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"></path>
                              </svg>
                           </i>
                           <i data-fa-i2svg="">
                              <svg class="svg-inline--fa fa-star" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg="">
                                 <path fill="currentColor" d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"></path>
                              </svg>
                           </i>
                           <i data-fa-i2svg="">
                              <svg class="svg-inline--fa fa-star" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg="">
                                 <path fill="currentColor" d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"></path>
                              </svg>
                           </i>
                        </div>
                     </div>
                  </div>
                  <p class="text-support-grey/80 mb-4">
                     "After 7 years of trying, we had almost given up hope. Dr. Sheemu gave us confidence and personalized care. Today, we are blessed with twins! The entire team at India IVF Srinagar was supportive throughout our journey."
                  </p>
                  <div class="flex justify-between items-center">
                     <span class="text-sm text-primary-pink font-medium">IVF Treatment</span>
                     <span class="text-primary-blue hover:underline cursor-pointer">Watch Video</span>
                  </div>
               </div>
               <div class="bg-gray-50 rounded-xl p-6 shadow-sm hover:shadow-md transition duration-300">
                  <div class="flex items-center mb-4">
                     <div class="h-12 w-12 rounded-full overflow-hidden mr-4">
                        <img src="https://storage.googleapis.com/uxpilot-auth.appspot.com/avatars/avatar-2.jpg" alt="Patient" class="w-full h-full object-cover">
                     </div>
                     <div>
                        <h4 class="font-semibold text-support-grey">Rahul &amp; Priya</h4>
                        <div class="flex text-yellow-400">
                           <i data-fa-i2svg="">
                              <svg class="svg-inline--fa fa-star" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg="">
                                 <path fill="currentColor" d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"></path>
                              </svg>
                           </i>
                           <i data-fa-i2svg="">
                              <svg class="svg-inline--fa fa-star" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg="">
                                 <path fill="currentColor" d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"></path>
                              </svg>
                           </i>
                           <i data-fa-i2svg="">
                              <svg class="svg-inline--fa fa-star" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg="">
                                 <path fill="currentColor" d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"></path>
                              </svg>
                           </i>
                           <i data-fa-i2svg="">
                              <svg class="svg-inline--fa fa-star" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg="">
                                 <path fill="currentColor" d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"></path>
                              </svg>
                           </i>
                           <i data-fa-i2svg="">
                              <svg class="svg-inline--fa fa-star" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg="">
                                 <path fill="currentColor" d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"></path>
                              </svg>
                           </i>
                        </div>
                     </div>
                  </div>
                  <p class="text-support-grey/80 mb-4">
                     "We had failed IVF cycles elsewhere before coming to India IVF Srinagar. The difference in care and technology was apparent from day one. Their approach was completely different, and it worked! Our daughter is now 2 years old."
                  </p>
                  <div class="flex justify-between items-center">
                     <span class="text-sm text-primary-pink font-medium">ICSI Treatment</span>
                     <span class="text-primary-blue hover:underline cursor-pointer">Read Full Story</span>
                  </div>
               </div>
               <div class="bg-gray-50 rounded-xl p-6 shadow-sm hover:shadow-md transition duration-300">
                  <div class="flex items-center mb-4">
                     <div class="h-12 w-12 rounded-full overflow-hidden mr-4">
                        <img src="https://storage.googleapis.com/uxpilot-auth.appspot.com/avatars/avatar-5.jpg" alt="Patient" class="w-full h-full object-cover">
                     </div>
                     <div>
                        <h4 class="font-semibold text-support-grey">Saima Khan</h4>
                        <div class="flex text-yellow-400">
                           <i data-fa-i2svg="">
                              <svg class="svg-inline--fa fa-star" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg="">
                                 <path fill="currentColor" d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"></path>
                              </svg>
                           </i>
                           <i data-fa-i2svg="">
                              <svg class="svg-inline--fa fa-star" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg="">
                                 <path fill="currentColor" d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"></path>
                              </svg>
                           </i>
                           <i data-fa-i2svg="">
                              <svg class="svg-inline--fa fa-star" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg="">
                                 <path fill="currentColor" d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"></path>
                              </svg>
                           </i>
                           <i data-fa-i2svg="">
                              <svg class="svg-inline--fa fa-star" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg="">
                                 <path fill="currentColor" d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"></path>
                              </svg>
                           </i>
                           <i data-fa-i2svg="">
                              <svg class="svg-inline--fa fa-star-half-stroke" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star-half-stroke" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" data-fa-i2svg="">
                                 <path fill="currentColor" d="M320 376.4l.1-.1 26.4 14.1 85.2 45.5-16.5-97.6-4.8-28.7 20.7-20.5 70.1-69.3-96.1-14.2-29.3-4.3-12.9-26.6L320.1 86.9l-.1 .3V376.4zm175.1 98.3c2 12-3 24.2-12.9 31.3s-23 8-33.8 2.3L320.1 439.8 191.8 508.3C181 514 167.9 513.1 158 506s-14.9-19.3-12.9-31.3L169.8 329 65.6 225.9c-8.6-8.5-11.7-21.2-7.9-32.7s13.7-19.9 25.7-21.7L227 150.3 291.4 18c5.4-11 16.5-18 28.8-18s23.4 7 28.8 18l64.3 132.3 143.6 21.2c12 1.8 22 10.2 25.7 21.7s.7 24.2-7.9 32.7L470.5 329l24.6 145.7z"></path>
                              </svg>
                           </i>
                        </div>
                     </div>
                  </div>
                  <p class="text-support-grey/80 mb-4">
                     "As a single woman, I was worried about freezing my eggs. The team at India IVF Srinagar made me feel comfortable and respected my choices. The procedure was smooth, and I feel secure about my future family options."
                  </p>
                  <div class="flex justify-between items-center">
                     <span class="text-sm text-primary-pink font-medium">Egg Freezing</span>
                     <span class="text-primary-blue hover:underline cursor-pointer">Read Full Story</span>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- FAQ Section -->
      <section id="faq" class="py-16 bg-gray-50">
         <div class="container mx-auto px-4 md:px-8">
            <div class="text-center mb-12">
               <h2 class="text-3xl md:text-4xl font-bold text-support-grey mb-4">Frequently Asked Questions</h2>
               <p class="text-lg text-support-grey/80 max-w-3xl mx-auto">
                  Find answers to common questions about fertility treatments at India IVF Srinagar.
               </p>
            </div>
            <div class="max-w-3xl mx-auto">
               <div class="mb-6">
                  <button class="flex justify-between items-center w-full bg-white p-4 rounded-lg shadow-sm text-left" onclick="toggleFAQ('faq1')">
                     <h3 class="text-lg font-semibold text-support-grey">What is the success rate of IVF at India IVF Srinagar?</h3>
                     <i class="text-primary-blue" id="faq1-icon" data-fa-i2svg="">
                        <svg class="svg-inline--fa fa-chevron-down" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-down" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                           <path fill="currentColor" d="M233.4 406.6c12.5 12.5 32.8 12.5 45.3 0l192-192c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L256 338.7 86.6 169.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3l192 192z"></path>
                        </svg>
                     </i>
                  </button>
                  <div class="bg-white px-4 pb-4 rounded-b-lg shadow-sm hidden" id="faq1">
                     <p class="text-support-grey/80">
                        India IVF Srinagar boasts a success rate of over 75%, which is among the highest in the region. Our success is attributed to our state-of-the-art facilities, experienced doctors, and personalized treatment plans that address each patient's unique fertility challenges.
                     </p>
                  </div>
               </div>
               <div class="mb-6">
                  <button class="flex justify-between items-center w-full bg-white p-4 rounded-lg shadow-sm text-left" onclick="toggleFAQ('faq2')">
                     <h3 class="text-lg font-semibold text-support-grey">How much does IVF treatment cost in Srinagar?</h3>
                     <i class="text-primary-blue" id="faq2-icon" data-fa-i2svg="">
                        <svg class="svg-inline--fa fa-chevron-down" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-down" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                           <path fill="currentColor" d="M233.4 406.6c12.5 12.5 32.8 12.5 45.3 0l192-192c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L256 338.7 86.6 169.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3l192 192z"></path>
                        </svg>
                     </i>
                  </button>
                  <div class="bg-white px-4 pb-4 rounded-b-lg shadow-sm hidden" id="faq2">
                     <p class="text-support-grey/80">
                        The cost of IVF treatment at India IVF Srinagar starts from ₹1,50,000. We offer transparent pricing with no hidden costs, and various financing options to make fertility treatments accessible to all. The final cost depends on individual medical requirements and the specific treatment protocol.
                     </p>
                  </div>
               </div>
               <div class="mb-6">
                  <button class="flex justify-between items-center w-full bg-white p-4 rounded-lg shadow-sm text-left" onclick="toggleFAQ('faq3')">
                     <h3 class="text-lg font-semibold text-support-grey">How long does the IVF process take?</h3>
                     <i class="text-primary-blue" id="faq3-icon" data-fa-i2svg="">
                        <svg class="svg-inline--fa fa-chevron-down" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-down" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                           <path fill="currentColor" d="M233.4 406.6c12.5 12.5 32.8 12.5 45.3 0l192-192c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L256 338.7 86.6 169.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3l192 192z"></path>
                        </svg>
                     </i>
                  </button>
                  <div class="bg-white px-4 pb-4 rounded-b-lg shadow-sm hidden" id="faq3">
                     <p class="text-support-grey/80">
                        A single IVF cycle typically takes about 4-6 weeks from the start of medication to pregnancy test. This includes ovarian stimulation (10-12 days), egg retrieval, fertilization, embryo culture (3-5 days), and embryo transfer. The waiting period for the pregnancy test is about 2 weeks after the embryo transfer.
                     </p>
                  </div>
               </div>
               <div class="mb-6">
                  <button class="flex justify-between items-center w-full bg-white p-4 rounded-lg shadow-sm text-left" onclick="toggleFAQ('faq4')">
                     <h3 class="text-lg font-semibold text-support-grey">Is IVF painful?</h3>
                     <i class="text-primary-blue" id="faq4-icon" data-fa-i2svg="">
                        <svg class="svg-inline--fa fa-chevron-down" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-down" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                           <path fill="currentColor" d="M233.4 406.6c12.5 12.5 32.8 12.5 45.3 0l192-192c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L256 338.7 86.6 169.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3l192 192z"></path>
                        </svg>
                     </i>
                  </button>
                  <div class="bg-white px-4 pb-4 rounded-b-lg shadow-sm hidden" id="faq4">
                     <p class="text-support-grey/80">
                        Most patients experience minimal discomfort during the IVF process. Injections for ovarian stimulation may cause mild soreness. The egg retrieval procedure is performed under sedation, so you won't feel pain during the procedure. Some patients may experience mild cramping afterward, which typically resolves within a day.
                     </p>
                  </div>
               </div>
               <div>
                  <button class="flex justify-between items-center w-full bg-white p-4 rounded-lg shadow-sm text-left" onclick="toggleFAQ('faq5')">
                     <h3 class="text-lg font-semibold text-support-grey">How do I know if I need IVF?</h3>
                     <i class="text-primary-blue" id="faq5-icon" data-fa-i2svg="">
                        <svg class="svg-inline--fa fa-chevron-down" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-down" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                           <path fill="currentColor" d="M233.4 406.6c12.5 12.5 32.8 12.5 45.3 0l192-192c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L256 338.7 86.6 169.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3l192 192z"></path>
                        </svg>
                     </i>
                  </button>
                  <div class="bg-white px-4 pb-4 rounded-b-lg shadow-sm hidden" id="faq5">
                     <p class="text-support-grey/80">
                        IVF may be recommended if you've been trying to conceive for over a year without success (or 6 months if you're over 35), have blocked fallopian tubes, endometriosis, low sperm count or quality, or unexplained infertility. A consultation with our fertility specialists will help determine the most appropriate treatment for your specific situation.
                     </p>
                  </div>
               </div>
            </div>
         </div>
      </section>

      <!-- Consultation Form Section -->
      <section id="book-consultation" class="py-16 bg-white">
         <div class="container mx-auto px-4 md:px-8">
            <div class="flex flex-col md:flex-row items-center gap-12">
               <div class="md:w-1/2">
                  <h2 class="text-3xl md:text-4xl font-bold text-support-grey mb-4">Start Your Fertility Journey Today</h2>
                  <p class="text-lg text-support-grey/80 mb-8">
                     Book a free consultation with our fertility experts and take the first step towards building your family.
                  </p>
                  <div class="bg-gray-50 rounded-xl p-6 mb-8">
                     <div class="flex items-center mb-4">
                        <div class="bg-primary-blue/10 p-3 rounded-full mr-4">
                           <i class="text-2xl text-primary-blue" data-fa-i2svg="">
                              <svg class="svg-inline--fa fa-location-dot" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="location-dot" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" data-fa-i2svg="">
                                 <path fill="currentColor" d="M215.7 499.2C267 435 384 279.4 384 192C384 86 298 0 192 0S0 86 0 192c0 87.4 117 243 168.3 307.2c12.3 15.3 35.1 15.3 47.4 0zM192 128a64 64 0 1 1 0 128 64 64 0 1 1 0-128z"></path>
                              </svg>
                           </i>
                        </div>
                        <div>
                           <h3 class="text-xl font-semibold text-support-grey mb-1">India IVF Srinagar</h3>
                           <p class="text-support-grey/80">Bypass Road, Hyderpora, Srinagar, Jammu &amp; Kashmir - 190014</p>
                        </div>
                     </div>
                     <div class="flex items-center mb-4">
                        <div class="bg-primary-blue/10 p-3 rounded-full mr-4">
                           <i class="text-2xl text-primary-blue" data-fa-i2svg="">
                              <svg class="svg-inline--fa fa-phone" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="phone" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                                 <path fill="currentColor" d="M164.9 24.6c-7.7-18.6-28-28.5-47.4-23.2l-88 24C12.1 30.2 0 46 0 64C0 311.4 200.6 512 448 512c18 0 33.8-12.1 38.6-29.5l24-88c5.3-19.4-4.6-39.7-23.2-47.4l-96-40c-16.3-6.8-35.2-2.1-46.3 11.6L304.7 368C234.3 334.7 177.3 277.7 144 207.3L193.3 167c13.7-11.2 18.4-30 11.6-46.3l-40-96z"></path>
                              </svg>
                           </i>
                        </div>
                        <div>
                           <h3 class="text-xl font-semibold text-support-grey mb-1">Call Us</h3>
                           <p class="text-support-grey/80">+91-9999999999</p>
                        </div>
                     </div>
                     <div class="flex items-center">
                        <div class="bg-primary-blue/10 p-3 rounded-full mr-4">
                           <i class="text-2xl text-primary-blue" data-fa-i2svg="">
                              <svg class="svg-inline--fa fa-envelope" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="envelope" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                                 <path fill="currentColor" d="M48 64C21.5 64 0 85.5 0 112c0 15.1 7.1 29.3 19.2 38.4L236.8 313.6c11.4 8.5 27 8.5 38.4 0L492.8 150.4c12.1-9.1 19.2-23.3 19.2-38.4c0-26.5-21.5-48-48-48H48zM0 176V384c0 35.3 28.7 64 64 64H448c35.3 0 64-28.7 64-64V176L294.4 339.2c-22.8 17.1-54 17.1-76.8 0L0 176z"></path>
                              </svg>
                           </i>
                        </div>
                        <div>
                           <h3 class="text-xl font-semibold text-support-grey mb-1">Email Us</h3>
                           <p class="text-support-grey/80">srinagar@indiaivf.in</p>
                        </div>
                     </div>
                  </div>
                  <div class="h-[300px] rounded-xl overflow-hidden shadow-md">
                     <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d26537.20891146762!2d74.78121178945089!3d34.08358116812577!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38e18ff3e44c1463%3A0x6eef3a7f1f1858b!2sHyderpora%2C%20Srinagar!5e0!3m2!1sen!2sin!4v1624889128270!5m2!1sen!2sin" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                  </div>
               </div>
               <div class="md:w-1/2">
                  <div class="bg-gray-50 rounded-xl p-8 shadow-md">
                     <h3 class="text-2xl font-bold text-support-grey mb-6">Book Your Free Consultation</h3>
                     <form>
                        <div class="mb-6">
                           <label for="name" class="block text-support-grey font-medium mb-2">Full Name*</label>
                           <input type="text" id="name" class="w-full px-4 py-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-primary-blue" placeholder="Enter your full name" required="">
                        </div>
                        <div class="mb-6">
                           <label for="phone" class="block text-support-grey font-medium mb-2">Mobile Number*</label>
                           <input type="tel" id="phone" class="w-full px-4 py-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-primary-blue" placeholder="Enter your mobile number" required="">
                        </div>
                        <div class="mb-6">
                           <label for="email" class="block text-support-grey font-medium mb-2">Email Address</label>
                           <input type="email" id="email" class="w-full px-4 py-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-primary-blue" placeholder="Enter your email address">
                        </div>
                        <div class="mb-6">
                           <label for="city" class="block text-support-grey font-medium mb-2">City</label>
                           <input type="city" id="city" class="w-full px-4 py-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-primary-blue" placeholder="Enter your city">
                        </div>
                        <div class="mb-6">
                           <label for="pin" class="block text-support-grey font-medium mb-2">Pin Code</label>
                           <input type="pin" id="pin" class="w-full px-4 py-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-primary-blue" placeholder="Enter your pin code">
                        </div>
                        <div class="mb-6">
                           <label for="service" class="block text-support-grey font-medium mb-2">Service Interested*</label>
                           <select id="service" class="w-full px-4 py-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-primary-blue" required="">
                              <option value="" disabled="" selected="">Select a service</option>
                              <option value="ivf">IVF Treatment</option>
                              <option value="iui">IUI Treatment</option>
                              <option value="icsi">ICSI Treatment</option>
                              <option value="egg-freezing">Egg Freezing</option>
                              <option value="laparoscopy">Laparoscopy</option>
                              <option value="surrogacy">Surrogacy</option>
                              <option value="other">Other</option>
                           </select>
                        </div>
                        <div class="mb-8">
                           <label for="date" class="block text-support-grey font-medium mb-2">Preferred Date*</label>
                           <input type="date" id="date" class="w-full px-4 py-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-primary-blue" required="">
                        </div>
                        <button type="submit" class="w-full bg-primary-pink hover:bg-opacity-90 text-white px-6 py-3 rounded-md font-medium text-lg transition duration-300">
                        Book Free Consultation
                        </button>
                     </form>

                     <div class="contact-section">
                        <div class="social-connect">
                           <h3>Connect With Us</h3>
                           <div class="social-icons">
                              <a href="#" class="icon facebook"><i class="fab fa-facebook-f"></i></a>
                              <a href="#" class="icon instagram"><i class="fab fa-instagram"></i></a>
                              <a href="#" class="icon youtube"><i class="fab fa-youtube"></i></a>
                              <a href="#" class="icon twitter"><i class="fab fa-twitter"></i></a>
                           </div>
                        </div>
                        <div class="whatsapp-box">
                           <div class="whatsapp-text">
                              <strong>WhatsApp Consultation</strong>
                              <p>Quick responses to your queries</p>
                           </div>
                           <a href="#" class="chat-button">
                           <i class="fab fa-whatsapp"></i> Chat Now
                           </a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
        <!-- Footer Section -->
@endsection

<script>
document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('consultationForm');
    
    if (form) {
        form.addEventListener('submit', function(e) {
            e.preventDefault();
            
            // Get form data
            const formData = new FormData(form);
            
            // Show loading state
            const submitBtn = form.querySelector('button[type="submit"]');
            const originalText = submitBtn.innerHTML;
            submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin mr-2"></i>Submitting...';
            submitBtn.disabled = true;
            
            // Submit form via AJAX
            fetch('{{ route("submit.consultation") }}', {
                method: 'POST',
                body: formData,
                headers: {
                    'X-Requested-With': 'XMLHttpRequest',
                    'X-CSRF-TOKEN': document.querySelector('input[name="_token"]').value
                }
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    // Show success message
                    showNotification(data.message, 'success');
                    form.reset();
                } else {
                    // Show error message
                    showNotification(data.message, 'error');
                    if (data.errors) {
                        displayValidationErrors(data.errors);
                    }
                }
            })
            .catch(error => {
                console.error('Error:', error);
                showNotification('Something went wrong. Please try again.', 'error');
            })
            .finally(() => {
                // Reset button state
                submitBtn.innerHTML = originalText;
                submitBtn.disabled = false;
            });
        });
    }
    
    function showNotification(message, type) {
        // Create notification element
        const notification = document.createElement('div');
        notification.className = `fixed top-4 right-4 z-50 p-4 rounded-lg shadow-lg max-w-sm ${
            type === 'success' ? 'bg-green-500 text-white' : 'bg-red-500 text-white'
        }`;
        notification.innerHTML = `
            <div class="flex items-center">
                <i class="fas ${type === 'success' ? 'fa-check-circle' : 'fa-exclamation-circle'} mr-2"></i>
                <span>${message}</span>
            </div>
        `;
        
        // Add to page
        document.body.appendChild(notification);
        
        // Remove after 5 seconds
        setTimeout(() => {
            notification.remove();
        }, 5000);
    }
    
    function displayValidationErrors(errors) {
        // Clear previous error messages
        const existingErrors = document.querySelectorAll('.error-message');
        existingErrors.forEach(error => error.remove());
        
        // Display new error messages
        Object.keys(errors).forEach(field => {
            const input = document.querySelector(`[name="${field}"]`);
            if (input) {
                const errorDiv = document.createElement('div');
                errorDiv.className = 'error-message text-red-500 text-xs mt-1';
                errorDiv.textContent = errors[field][0];
                input.parentNode.appendChild(errorDiv);
                
                // Add error styling to input
                input.classList.add('border-red-500');
                input.addEventListener('input', function() {
                    this.classList.remove('border-red-500');
                    const errorMsg = this.parentNode.querySelector('.error-message');
                    if (errorMsg) errorMsg.remove();
                });
            }
        });
    }
});

// FAQ Toggle Function
function toggleFAQ(faqId) {
    const faqContent = document.getElementById(faqId);
    const faqIcon = document.getElementById(faqId + '-icon');
    
    if (faqContent.classList.contains('hidden')) {
        faqContent.classList.remove('hidden');
        faqIcon.style.transform = 'rotate(180deg)';
    } else {
        faqContent.classList.add('hidden');
        faqIcon.style.transform = 'rotate(0deg)';
    }
}
</script>
