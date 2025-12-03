<html class="fontawesome-i2svg-active fontawesome-i2svg-complete">
   <head>
      <meta charset="UTF-8">
      <meta name="csrf-token" content="{{ csrf_token() }}">

      <!-- Dynamic Favicon -->
      @if(isset($siteSettings) && $siteSettings->site_favicon)
         <link rel="icon" type="image/x-icon" href="{{ asset('storage/' . $siteSettings->site_favicon) }}">
         <link rel="shortcut icon" type="image/x-icon" href="{{ asset('storage/' . $siteSettings->site_favicon) }}">
      @else
         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">
         <link rel="shortcut icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">
      @endif

      {{-- Dynamic SEO Component --}}
      <x-dynamic-seo :page="$seoPage ?? null" :data="$seoData ?? []" />

      <!-- External CSS and JS -->
      <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;500;600;700;800;900&display=swap">
      <script src="https://cdn.tailwindcss.com"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/js/all.min.js" crossorigin="anonymous" referrerpolicy="no-referrer" defer></script>
    <style>
        /* Brand Color Definitions */
        .brand-pink {
            color: #d45276;
        }

        .brand-blue {
            color: #3e73b9;
        }

        .brand-grey {
            color: #414042;
        }

        /* Background Colors */
        .bg-brand-pink {
            background-color: #d45276;
        }

        .bg-brand-blue {
            background-color: #3e73b9;
        }

        .bg-brand-grey {
            background-color: #414042;
        }

        /* Border Colors */
        .border-brand-pink {
            border-color: #d45276;
        }

        .border-brand-blue {
            border-color: #3e73b9;
        }

        /* Hover Colors */
        .hover-brand-pink:hover {
            color: #d45276;
        }

        .hover-brand-blue:hover {
            color: #3e73b9;
        }

        /* Tailwind-style utility classes */
        .text-brand-pink {
            color: #d45276;
        }

        .text-brand-blue {
            color: #3e73b9;
        }

        .text-brand-grey {
            color: #414042;
        }

        /* Hover text colors (for use with Tailwind hover: prefix) */
        .hover\:text-brand-pink:hover {
            color: #d45276;
        }

        .hover\:text-brand-blue:hover {
            color: #3e73b9;
        }

        .hover\:bg-brand-pink:hover {
            background-color: #d45276;
        }

        .hover\:bg-brand-blue:hover {
            background-color: #3e73b9;
        }

        .hover\:border-brand-pink:hover {
            border-color: #d45276;
        }

        .hover\:border-brand-blue:hover {
            border-color: #3e73b9;
        }

        /* Focus states */
        .focus\:border-brand-pink:focus {
            border-color: #d45276;
        }

        .focus\:border-brand-blue:focus {
            border-color: #3e73b9;
        }

      </style>
      <!-- Inline critical CSS -->
      <style>
         body { font-family: 'Inter', sans-serif !important; }
         .fa, .fas, .far, .fal, .fab { font-family: "Font Awesome 6 Free", "Font Awesome 6 Brands" !important; }
         ::-webkit-scrollbar { display: none; }
         html, body { -ms-overflow-style: none; scrollbar-width: none; }

         /* Brand Colors */
         .brand-pink { color: #d45276; }
         .brand-blue { color: #3e73b9; }
         .brand-grey { color: #414042; }
         .bg-brand-pink { background-color: #d45276; }
         .bg-brand-blue { background-color: #3e73b9; }
         .bg-brand-grey { background-color: #414042; }
         .border-brand-pink { border-color: #d45276; }
         .border-brand-blue { border-color: #3e73b9; }
         .hover-brand-pink:hover { color: #d45276; }
         .hover-brand-blue:hover { color: #3e73b9; }

         /* Tailwind config */
         tailwind.config = {
            "theme": {
              "extend": {
                "colors": {
                  "primary-blue": "#3e73b9",
                  "primary-pink": "#d45276",
                  "support-grey": "#414042",
                  "brand-pink": "#d45276",
                  "brand-blue": "#3e73b9",
                  "brand-grey": "#414042"
                },
                "fontFamily": {
                  "poppins": ["Poppins", "sans-serif"],
                  "sans": ["Inter", "sans-serif"]
                }
              }
            }
         };

         /* Critical styles */
         .highlighted-section {
            outline: 2px solid #3F20FB;
            background-color: rgba(63, 32, 251, 0.1);
         }
         .edit-button {
            position: absolute;
            z-index: 1000;
         }
         .contact-section {
            background: #f1f8ff;
            padding: 20px;
            border-radius: 12px;
            max-width: 600px;
            margin: 0 auto;
            font-family: Arial, sans-serif;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.05);
         }
         .social-connect h3 {
            margin-bottom: 10px;
            font-size: 20px;
            color: #2c3e50;
         }
         .social-icons {
            display: flex;
            gap: 12px;
         }
         .icon {
            display: inline-block;
            width: 35px;
            height: 35px;
            background: #ccc;
            border-radius: 50%;
            text-align: center;
            line-height: 35px;
            color: white;
            font-size: 16px;
            transition: background 0.3s;
         }
         .icon.facebook { background: #3b5998; }
         .icon.instagram { background: #e4405f; }
         .icon.youtube { background: #ff0000; }
         .icon.twitter { background: #1da1f2; }
         .icon:hover { opacity: 0.8; }
         .icon svg { margin-top: 9px !important; }
         .whatsapp-box {
            background: #d4fce1;
            padding: 15px;
            margin-top: 20px;
            border-radius: 10px;
            display: flex;
            justify-content: space-between;
            align-items: center;
         }
         .whatsapp-text strong {
            font-size: 16px;
            display: block;
            color: #2c3e50;
         }
         .whatsapp-text p {
            margin: 0;
            font-size: 14px;
            color: #2c3e50;
         }
         .chat-button {
            background: #25d366;
            color: white;
            padding: 8px 16px;
            border-radius: 6px;
            text-decoration: none;
            font-weight: bold;
            display: flex;
            align-items: center;
            gap: 5px;
         }
         .chat-button i { font-size: 16px; }

         @media (max-width: 768px) {
            .md-mt-300 { margin-top: 300px; }
         }
      </style>
      <link rel="canonical" href="https://www.indiaivf.in/ivf-center-in-srinagar/">
      <script src="https://cdn.tailwindcss.com"></script>
      <script> window.FontAwesomeConfig = { autoReplaceSvg: 'nest'};</script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/js/all.min.js" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
      <style>::-webkit-scrollbar { display: none;}</style>
      <script>tailwind.config = {
         "theme": {
           "extend": {
             "colors": {
               "primary-blue": "#3e73b9",
               "primary-pink": "#d45276",
               "support-grey": "#414042"
             },
             "fontFamily": {
               "poppins": [
                 "Poppins",
                 "sans-serif"
               ],
               "sans": [
                 "Inter",
                 "sans-serif"
               ]
             }
           }
         }
         };
      </script>
      {{-- Dynamic Schema Rendering --}}
      @include('components.schema')
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
      <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;500;600;700;800;900&amp;display=swap">
      <style>
         body {
         font-family: 'Inter', sans-serif !important;
         }
         /* Preserve Font Awesome icons */
         .fa, .fas, .far, .fal, .fab {
         font-family: "Font Awesome 6 Free", "Font Awesome 6 Brands" !important;
         }
      </style>
      <style>
         .highlighted-section {
         outline: 2px solid #3F20FB;
         background-color: rgba(63, 32, 251, 0.1);
         }
         .edit-button {
         position: absolute;
         z-index: 1000;
         }
         ::-webkit-scrollbar {
         display: none;
         }
         html, body {
         -ms-overflow-style: none;
         scrollbar-width: none;
         }
         .contact-section {
         background: #f1f8ff;
         padding: 20px;
         border-radius: 12px;
         max-width: 600px;
         margin: 0 auto;
         font-family: Arial, sans-serif;
         box-shadow: 0 4px 10px rgba(0, 0, 0, 0.05);
         }
         .social-connect h3 {
         margin-bottom: 10px;
         font-size: 20px;
         color: #2c3e50;
         }
         .social-icons {
         display: flex;
         gap: 12px;
         }
         .icon {
         display: inline-block;
         width: 35px;
         height: 35px;
         background: #ccc;
         border-radius: 50%;
         text-align: center;
         line-height: 35px;
         color: white;
         font-size: 16px;
         transition: background 0.3s;
         }
         .icon.facebook { background: #3b5998; }
         .icon.instagram { background: #e4405f; }
         .icon.youtube { background: #ff0000; }
         .icon.twitter { background: #1da1f2; }
         .icon:hover {
         opacity: 0.8;
         }
         .icon svg {
         margin-top: 9px !important;
         }
         .whatsapp-box {
         background: #d4fce1;
         padding: 15px;
         margin-top: 20px;
         border-radius: 10px;
         display: flex;
         justify-content: space-between;
         align-items: center;
         }
         .whatsapp-text strong {
         font-size: 16px;
         display: block;
         color: #2c3e50;
         }
         .whatsapp-text p {
         margin: 0;
         font-size: 14px;
         color: #2c3e50;
         }
         .chat-button {
         background: #25d366;
         color: white;
         padding: 8px 16px;
         border-radius: 6px;
         text-decoration: none;
         font-weight: bold;
         display: flex;
         align-items: center;
         gap: 5px;
         }
         .chat-button i {
         font-size: 16px;
         }
         @media (max-width: 768px) {
         .md-mt-300 {
         margin-top: 300px;
         }
         .malign-center{text-align:center;}
         }
      </style>
      <style>*, ::before, ::after{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-gradient-from-position: ;--tw-gradient-via-position: ;--tw-gradient-to-position: ;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: ;--tw-contain-size: ;--tw-contain-layout: ;--tw-contain-paint: ;--tw-contain-style: }::backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-gradient-from-position: ;--tw-gradient-via-position: ;--tw-gradient-to-position: ;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: ;--tw-contain-size: ;--tw-contain-layout: ;--tw-contain-paint: ;--tw-contain-style: }/* ! tailwindcss v3.4.16 | MIT License | https://tailwindcss.com */*,::after,::before{box-sizing:border-box;border-width:0;border-style:solid;border-color:#e5e7eb}::after,::before{--tw-content:''}:host,html{line-height:1.5;-webkit-text-size-adjust:100%;-moz-tab-size:4;tab-size:4;font-family:Inter, sans-serif;font-feature-settings:normal;font-variation-settings:normal;-webkit-tap-highlight-color:transparent}body{margin:0;line-height:inherit}hr{height:0;color:inherit;border-top-width:1px}abbr:where([title]){-webkit-text-decoration:underline dotted;text-decoration:underline dotted}h1,h2,h3,h4,h5,h6{font-size:inherit;font-weight:inherit}a{color:inherit;text-decoration:inherit}b,strong{font-weight:bolder}code,kbd,pre,samp{font-family:ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;font-feature-settings:normal;font-variation-settings:normal;font-size:1em}small{font-size:80%}sub,sup{font-size:75%;line-height:0;position:relative;vertical-align:baseline}sub{bottom:-.25em}sup{top:-.5em}table{text-indent:0;border-color:inherit;border-collapse:collapse}button,input,optgroup,select,textarea{font-family:inherit;font-feature-settings:inherit;font-variation-settings:inherit;font-size:100%;font-weight:inherit;line-height:inherit;letter-spacing:inherit;color:inherit;margin:0;padding:0}button,select{text-transform:none}button,input:where([type=button]),input:where([type=reset]),input:where([type=submit]){-webkit-appearance:button;background-color:transparent;background-image:none}:-moz-focusring{outline:auto}:-moz-ui-invalid{box-shadow:none}progress{vertical-align:baseline}::-webkit-inner-spin-button,::-webkit-outer-spin-button{height:auto}[type=search]{-webkit-appearance:textfield;outline-offset:-2px}::-webkit-search-decoration{-webkit-appearance:none}::-webkit-file-upload-button{-webkit-appearance:button;font:inherit}summary{display:list-item}blockquote,dd,dl,figure,h1,h2,h3,h4,h5,h6,hr,p,pre{margin:0}fieldset{margin:0;padding:0}legend{padding:0}menu,ol,ul{list-style:none;margin:0;padding:0}dialog{padding:0}textarea{resize:vertical}input::placeholder,textarea::placeholder{opacity:1;color:#9ca3af}[role=button],button{cursor:pointer}:disabled{cursor:default}audio,canvas,embed,iframe,img,object,svg,video{display:block;vertical-align:middle}img,video{max-width:100%;height:auto}[hidden]:where(:not([hidden=until-found])){display:none}.container{width:100%}@media (min-width: 640px){.container{max-width:640px}}@media (min-width: 768px){.container{max-width:768px}}@media (min-width: 1024px){.container{max-width:1024px}}@media (min-width: 1280px){.container{max-width:1280px}}@media (min-width: 1536px){.container{max-width:1536px}}.absolute{position:absolute}.relative{position:relative}.sticky{position:sticky}.bottom-0{bottom:0px}.left-0{left:0px}.right-0{right:0px}.top-0{top:0px}.z-0{z-index:0}.z-10{z-index:10}.z-50{z-index:50}.mx-auto{margin-left:auto;margin-right:auto}.mb-1{margin-bottom:0.25rem}.mb-12{margin-bottom:3rem}.mb-2{margin-bottom:0.5rem}.mb-4{margin-bottom:1rem}.mb-6{margin-bottom:1.5rem}.mb-8{margin-bottom:2rem}.ml-2{margin-left:0.5rem}.ml-4{margin-left:1rem}.mr-2{margin-right:0.5rem}.mr-4{margin-right:1rem}.mt-6{margin-top:1.5rem}.mt-8{margin-top:2rem}.block{display:block}.inline-block{display:inline-block}.flex{display:flex}.grid{display:grid}.hidden{display:none}.h-10{height:2.5rem}.h-12{height:3rem}.h-16{height:4rem}.h-20{height:5rem}.h-48{height:12rem}.h-\[300px\]{height:300px}.h-\[400px\]{height:400px}.h-\[600px\]{height:600px}.h-full{height:100%}.w-10{width:2.5rem}.w-12{width:3rem}.w-20{width:5rem}.w-full{width:100%}.max-w-3xl{max-width:48rem}.translate-y-1\/2{--tw-translate-y:50%;transform:translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}.transform{transform:translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}.cursor-pointer{cursor:pointer}.grid-cols-1{grid-template-columns:repeat(1, minmax(0, 1fr))}.flex-col{flex-direction:column}.flex-wrap{flex-wrap:wrap}.items-start{align-items:flex-start}.items-center{align-items:center}.justify-center{justify-content:center}.justify-between{justify-content:space-between}.gap-12{gap:3rem}.gap-3{gap:0.75rem}.gap-4{gap:1rem}.gap-6{gap:1.5rem}.gap-8{gap:2rem}.space-x-4 > :not([hidden]) ~ :not([hidden]){--tw-space-x-reverse:0;margin-right:calc(1rem * var(--tw-space-x-reverse));margin-left:calc(1rem * calc(1 - var(--tw-space-x-reverse)))}.space-x-6 > :not([hidden]) ~ :not([hidden]){--tw-space-x-reverse:0;margin-right:calc(1.5rem * var(--tw-space-x-reverse));margin-left:calc(1.5rem * calc(1 - var(--tw-space-x-reverse)))}.space-x-8 > :not([hidden]) ~ :not([hidden]){--tw-space-x-reverse:0;margin-right:calc(2rem * var(--tw-space-x-reverse));margin-left:calc(2rem * calc(1 - var(--tw-space-x-reverse)))}.space-y-3 > :not([hidden]) ~ :not([hidden]){--tw-space-y-reverse:0;margin-top:calc(0.75rem * calc(1 - var(--tw-space-y-reverse)));margin-bottom:calc(0.75rem * var(--tw-space-y-reverse))}.space-y-4 > :not([hidden]) ~ :not([hidden]){--tw-space-y-reverse:0;margin-top:calc(1rem * calc(1 - var(--tw-space-y-reverse)));margin-bottom:calc(1rem * var(--tw-space-y-reverse))}.overflow-hidden{overflow:hidden}.overflow-x-auto{overflow-x:auto}.rounded-full{border-radius:9999px}.rounded-lg{border-radius:0.5rem}.rounded-md{border-radius:0.375rem}.rounded-xl{border-radius:0.75rem}.rounded-b-lg{border-bottom-right-radius:0.5rem;border-bottom-left-radius:0.5rem}.rounded-t-\[50\%\]{border-top-left-radius:50%;border-top-right-radius:50%}.border{border-width:1px}.border-b{border-bottom-width:1px}.border-gray-300{--tw-border-opacity:1;border-color:rgb(209 213 219 / var(--tw-border-opacity, 1))}.border-primary-blue{--tw-border-opacity:1;border-color:rgb(62 115 185 / var(--tw-border-opacity, 1))}.bg-gray-100{--tw-bg-opacity:1;background-color:rgb(243 244 246 / var(--tw-bg-opacity, 1))}.bg-gray-50{--tw-bg-opacity:1;background-color:rgb(249 250 251 / var(--tw-bg-opacity, 1))}.bg-primary-blue{--tw-bg-opacity:1;background-color:rgb(62 115 185 / var(--tw-bg-opacity, 1))}.bg-primary-blue\/10{background-color:rgb(62 115 185 / 0.1)}.bg-primary-pink{--tw-bg-opacity:1;background-color:rgb(212 82 118 / var(--tw-bg-opacity, 1))}.bg-support-grey{--tw-bg-opacity:1;background-color:rgb(65 64 66 / var(--tw-bg-opacity, 1))}.bg-white{--tw-bg-opacity:1;background-color:rgb(255 255 255 / var(--tw-bg-opacity, 1))}.bg-gradient-to-b{background-image:linear-gradient(to bottom, var(--tw-gradient-stops))}.bg-gradient-to-r{background-image:linear-gradient(to right, var(--tw-gradient-stops))}.from-primary-blue{--tw-gradient-from:#3e73b9 var(--tw-gradient-from-position);--tw-gradient-to:rgb(62 115 185 / 0) var(--tw-gradient-to-position);--tw-gradient-stops:var(--tw-gradient-from), var(--tw-gradient-to)}.from-primary-blue\/10{--tw-gradient-from:rgb(62 115 185 / 0.1) var(--tw-gradient-from-position);--tw-gradient-to:rgb(62 115 185 / 0) var(--tw-gradient-to-position);--tw-gradient-stops:var(--tw-gradient-from), var(--tw-gradient-to)}.from-white{--tw-gradient-from:#fff var(--tw-gradient-from-position);--tw-gradient-to:rgb(255 255 255 / 0) var(--tw-gradient-to-position);--tw-gradient-stops:var(--tw-gradient-from), var(--tw-gradient-to)}.to-primary-blue\/10{--tw-gradient-to:rgb(62 115 185 / 0.1) var(--tw-gradient-to-position)}.to-primary-pink{--tw-gradient-to:#d45276 var(--tw-gradient-to-position)}.to-primary-pink\/10{--tw-gradient-to:rgb(212 82 118 / 0.1) var(--tw-gradient-to-position)}.object-cover{object-fit:cover}.p-3{padding:0.75rem}.p-4{padding:1rem}.p-6{padding:1.5rem}.p-8{padding:2rem}.px-3{padding-left:0.75rem;padding-right:0.75rem}.px-4{padding-left:1rem;padding-right:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.py-1{padding-top:0.25rem;padding-bottom:0.25rem}.py-12{padding-top:3rem;padding-bottom:3rem}.py-16{padding-top:4rem;padding-bottom:4rem}.py-2{padding-top:0.5rem;padding-bottom:0.5rem}.py-3{padding-top:0.75rem;padding-bottom:0.75rem}.py-4{padding-top:1rem;padding-bottom:1rem}.pb-16{padding-bottom:4rem}.pb-4{padding-bottom:1rem}.pb-8{padding-bottom:2rem}.pt-16{padding-top:4rem}.pt-20{padding-top:5rem}.text-left{text-align:left}.text-center{text-align:center}.font-poppins{font-family:Poppins, sans-serif}.text-2xl{font-size:1.5rem;line-height:2rem}.text-3xl{font-size:1.875rem;line-height:2.25rem}.text-4xl{font-size:2.25rem;line-height:2.5rem}.text-6xl{font-size:3.75rem;line-height:1}.text-lg{font-size:1.125rem;line-height:1.75rem}.text-sm{font-size:0.875rem;line-height:1.25rem}.text-xl{font-size:1.25rem;line-height:1.75rem}.font-bold{font-weight:700}.font-medium{font-weight:500}.font-semibold{font-weight:600}.text-gray-300{--tw-text-opacity:1;color:rgb(209 213 219 / var(--tw-text-opacity, 1))}.text-green-500{--tw-text-opacity:1;color:rgb(34 197 94 / var(--tw-text-opacity, 1))}.text-green-600{--tw-text-opacity:1;color:rgb(22 163 74 / var(--tw-text-opacity, 1))}.text-primary-blue{--tw-text-opacity:1;color:rgb(62 115 185 / var(--tw-text-opacity, 1))}.text-primary-pink{--tw-text-opacity:1;color:rgb(212 82 118 / var(--tw-text-opacity, 1))}.text-red-500{--tw-text-opacity:1;color:rgb(239 68 68 / var(--tw-text-opacity, 1))}.text-support-grey{--tw-text-opacity:1;color:rgb(65 64 66 / var(--tw-text-opacity, 1))}.text-support-grey\/80{color:rgb(65 64 66 / 0.8)}.text-white{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity, 1))}.text-yellow-400{--tw-text-opacity:1;color:rgb(250 204 21 / var(--tw-text-opacity, 1))}.opacity-90{opacity:0.9}.shadow-lg{--tw-shadow:0 10px 15px -3px rgb(0 0 0 / 0.1), 0 4px 6px -4px rgb(0 0 0 / 0.1);--tw-shadow-colored:0 10px 15px -3px var(--tw-shadow-color), 0 4px 6px -4px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.shadow-md{--tw-shadow:0 4px 6px -1px rgb(0 0 0 / 0.1), 0 2px 4px -2px rgb(0 0 0 / 0.1);--tw-shadow-colored:0 4px 6px -1px var(--tw-shadow-color), 0 2px 4px -2px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.shadow-sm{--tw-shadow:0 1px 2px 0 rgb(0 0 0 / 0.05);--tw-shadow-colored:0 1px 2px 0 var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.shadow-xl{--tw-shadow:0 20px 25px -5px rgb(0 0 0 / 0.1), 0 8px 10px -6px rgb(0 0 0 / 0.1);--tw-shadow-colored:0 20px 25px -5px var(--tw-shadow-color), 0 8px 10px -6px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.transition{transition-property:color, background-color, border-color, fill, stroke, opacity, box-shadow, transform, filter, -webkit-text-decoration-color, -webkit-backdrop-filter;transition-property:color, background-color, border-color, text-decoration-color, fill, stroke, opacity, box-shadow, transform, filter, backdrop-filter;transition-property:color, background-color, border-color, text-decoration-color, fill, stroke, opacity, box-shadow, transform, filter, backdrop-filter, -webkit-text-decoration-color, -webkit-backdrop-filter;transition-timing-function:cubic-bezier(0.4, 0, 0.2, 1);transition-duration:150ms}.transition-all{transition-property:all;transition-timing-function:cubic-bezier(0.4, 0, 0.2, 1);transition-duration:150ms}.duration-300{transition-duration:300ms}.hover\:bg-primary-blue:hover{--tw-bg-opacity:1;background-color:rgb(62 115 185 / var(--tw-bg-opacity, 1))}.hover\:bg-opacity-90:hover{--tw-bg-opacity:0.9}.hover\:text-gray-200:hover{--tw-text-opacity:1;color:rgb(229 231 235 / var(--tw-text-opacity, 1))}.hover\:text-primary-blue:hover{--tw-text-opacity:1;color:rgb(62 115 185 / var(--tw-text-opacity, 1))}.hover\:text-primary-pink:hover{--tw-text-opacity:1;color:rgb(212 82 118 / var(--tw-text-opacity, 1))}.hover\:text-white:hover{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity, 1))}.hover\:underline:hover{-webkit-text-decoration-line:underline;text-decoration-line:underline}.hover\:shadow-lg:hover{--tw-shadow:0 10px 15px -3px rgb(0 0 0 / 0.1), 0 4px 6px -4px rgb(0 0 0 / 0.1);--tw-shadow-colored:0 10px 15px -3px var(--tw-shadow-color), 0 4px 6px -4px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.hover\:shadow-md:hover{--tw-shadow:0 4px 6px -1px rgb(0 0 0 / 0.1), 0 2px 4px -2px rgb(0 0 0 / 0.1);--tw-shadow-colored:0 4px 6px -1px var(--tw-shadow-color), 0 2px 4px -2px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.focus\:outline-none:focus{outline:2px solid transparent;outline-offset:2px}.focus\:ring-2:focus{--tw-ring-offset-shadow:var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);--tw-ring-shadow:var(--tw-ring-inset) 0 0 0 calc(2px + var(--tw-ring-offset-width)) var(--tw-ring-color);box-shadow:var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000)}.focus\:ring-primary-blue:focus{--tw-ring-opacity:1;--tw-ring-color:rgb(62 115 185 / var(--tw-ring-opacity, 1))}.group:hover .group-hover\:ml-3{margin-left:0.75rem}.group:hover .group-hover\:text-primary-blue{--tw-text-opacity:1;color:rgb(62 115 185 / var(--tw-text-opacity, 1))}.group:hover .group-hover\:text-primary-pink{--tw-text-opacity:1;color:rgb(212 82 118 / var(--tw-text-opacity, 1))}@media (min-width: 768px){.md\:mt-0{margin-top:0px}.md\:block{display:block}.md\:flex{display:flex}.md\:h-24{height:6rem}.md\:h-\[700px\]{height:700px}.md\:w-1\/2{width:50%}.md\:w-1\/3{width:33.333333%}.md\:w-2\/3{width:66.666667%}.md\:grid-cols-2{grid-template-columns:repeat(2, minmax(0, 1fr))}.md\:flex-row{flex-direction:row}.md\:px-8{padding-left:2rem;padding-right:2rem}.md\:text-4xl{font-size:2.25rem;line-height:2.5rem}.md\:text-xl{font-size:1.25rem;line-height:1.75rem}}@media (min-width: 1024px){.lg\:flex{display:flex}.lg\:hidden{display:none}.lg\:grid-cols-3{grid-template-columns:repeat(3, minmax(0, 1fr))}.lg\:grid-cols-4{grid-template-columns:repeat(4, minmax(0, 1fr))}.lg\:text-5xl{font-size:3rem;line-height:1}}</style>
   </head>
   <body class="font-poppins">
        @include('frontend.layouts.header')
        @yield('content')
        @include('frontend.layouts.footer')
          <script>
         function toggleFAQ(id) {
             const answer = document.getElementById(id);
             answer.classList.toggle('hidden');

             const icon = document.getElementById(`${id}-icon`);
             if (answer.classList.contains('hidden')) {
                 icon.innerHTML = `<svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                     <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                 </svg>`;
             } else {
                 icon.innerHTML = `<svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                     <path fill-rule="evenodd" d="M14.707 12.707a1 1 0 01-1.414 0L10 9.414l-3.293 3.293a1 1 0 01-1.414-1.414l4-4a1 1 0 011.414 0l4 4a1 1 0 010 1.414z" clip-rule="evenodd"></path>
                 </svg>`;
             }
         }
      </script>

      @yield('scripts')
    </body>
</html>
