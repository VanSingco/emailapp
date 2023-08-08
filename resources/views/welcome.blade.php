<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <script src="https://cdn.tailwindcss.com"></script>
        <!-- Styles -->
        <style>
            /* ! tailwindcss v3.2.4 | MIT License | https://tailwindcss.com */*,::after,::before{box-sizing:border-box;border-width:0;border-style:solid;border-color:#e5e7eb}::after,::before{--tw-content:''}html{line-height:1.5;-webkit-text-size-adjust:100%;-moz-tab-size:4;tab-size:4;font-family:Figtree, sans-serif;font-feature-settings:normal}body{margin:0;line-height:inherit}hr{height:0;color:inherit;border-top-width:1px}abbr:where([title]){-webkit-text-decoration:underline dotted;text-decoration:underline dotted}h1,h2,h3,h4,h5,h6{font-size:inherit;font-weight:inherit}a{color:inherit;text-decoration:inherit}b,strong{font-weight:bolder}code,kbd,pre,samp{font-family:ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;font-size:1em}small{font-size:80%}sub,sup{font-size:75%;line-height:0;position:relative;vertical-align:baseline}sub{bottom:-.25em}sup{top:-.5em}table{text-indent:0;border-color:inherit;border-collapse:collapse}button,input,optgroup,select,textarea{font-family:inherit;font-size:100%;font-weight:inherit;line-height:inherit;color:inherit;margin:0;padding:0}button,select{text-transform:none}[type=button],[type=reset],[type=submit],button{-webkit-appearance:button;background-color:transparent;background-image:none}:-moz-focusring{outline:auto}:-moz-ui-invalid{box-shadow:none}progress{vertical-align:baseline}::-webkit-inner-spin-button,::-webkit-outer-spin-button{height:auto}[type=search]{-webkit-appearance:textfield;outline-offset:-2px}::-webkit-search-decoration{-webkit-appearance:none}::-webkit-file-upload-button{-webkit-appearance:button;font:inherit}summary{display:list-item}blockquote,dd,dl,figure,h1,h2,h3,h4,h5,h6,hr,p,pre{margin:0}fieldset{margin:0;padding:0}legend{padding:0}menu,ol,ul{list-style:none;margin:0;padding:0}textarea{resize:vertical}input::placeholder,textarea::placeholder{opacity:1;color:#9ca3af}[role=button],button{cursor:pointer}:disabled{cursor:default}audio,canvas,embed,iframe,img,object,svg,video{display:block;vertical-align:middle}img,video{max-width:100%;height:auto}[hidden]{display:none}*, ::before, ::after{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }::-webkit-backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }::backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }.relative{position:relative}.mx-auto{margin-left:auto;margin-right:auto}.mx-6{margin-left:1.5rem;margin-right:1.5rem}.ml-4{margin-left:1rem}.mt-16{margin-top:4rem}.mt-6{margin-top:1.5rem}.mt-4{margin-top:1rem}.-mt-px{margin-top:-1px}.mr-1{margin-right:0.25rem}.flex{display:flex}.inline-flex{display:inline-flex}.grid{display:grid}.h-16{height:4rem}.h-7{height:1.75rem}.h-6{height:1.5rem}.h-5{height:1.25rem}.min-h-screen{min-height:100vh}.w-auto{width:auto}.w-16{width:4rem}.w-7{width:1.75rem}.w-6{width:1.5rem}.w-5{width:1.25rem}.max-w-7xl{max-width:80rem}.shrink-0{flex-shrink:0}.scale-100{--tw-scale-x:1;--tw-scale-y:1;transform:translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}.grid-cols-1{grid-template-columns:repeat(1, minmax(0, 1fr))}.items-center{align-items:center}.justify-center{justify-content:center}.gap-6{gap:1.5rem}.gap-4{gap:1rem}.self-center{align-self:center}.rounded-lg{border-radius:0.5rem}.rounded-full{border-radius:9999px}.bg-gray-100{--tw-bg-opacity:1;background-color:rgb(243 244 246 / var(--tw-bg-opacity))}.bg-white{--tw-bg-opacity:1;background-color:rgb(255 255 255 / var(--tw-bg-opacity))}.bg-red-50{--tw-bg-opacity:1;background-color:rgb(254 242 242 / var(--tw-bg-opacity))}.bg-dots-darker{background-image:url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(0,0,0,0.07)'/%3E%3C/svg%3E")}.from-gray-700\/50{--tw-gradient-from:rgb(55 65 81 / 0.5);--tw-gradient-to:rgb(55 65 81 / 0);--tw-gradient-stops:var(--tw-gradient-from), var(--tw-gradient-to)}.via-transparent{--tw-gradient-to:rgb(0 0 0 / 0);--tw-gradient-stops:var(--tw-gradient-from), transparent, var(--tw-gradient-to)}.bg-center{background-position:center}.stroke-red-500{stroke:#ef4444}.stroke-gray-400{stroke:#9ca3af}.p-6{padding:1.5rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.text-center{text-align:center}.text-right{text-align:right}.text-xl{font-size:1.25rem;line-height:1.75rem}.text-sm{font-size:0.875rem;line-height:1.25rem}.font-semibold{font-weight:600}.leading-relaxed{line-height:1.625}.text-gray-600{--tw-text-opacity:1;color:rgb(75 85 99 / var(--tw-text-opacity))}.text-gray-900{--tw-text-opacity:1;color:rgb(17 24 39 / var(--tw-text-opacity))}.text-gray-500{--tw-text-opacity:1;color:rgb(107 114 128 / var(--tw-text-opacity))}.underline{-webkit-text-decoration-line:underline;text-decoration-line:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.shadow-2xl{--tw-shadow:0 25px 50px -12px rgb(0 0 0 / 0.25);--tw-shadow-colored:0 25px 50px -12px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.shadow-gray-500\/20{--tw-shadow-color:rgb(107 114 128 / 0.2);--tw-shadow:var(--tw-shadow-colored)}.transition-all{transition-property:all;transition-timing-function:cubic-bezier(0.4, 0, 0.2, 1);transition-duration:150ms}.selection\:bg-red-500 *::selection{--tw-bg-opacity:1;background-color:rgb(239 68 68 / var(--tw-bg-opacity))}.selection\:text-white *::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.selection\:bg-red-500::selection{--tw-bg-opacity:1;background-color:rgb(239 68 68 / var(--tw-bg-opacity))}.selection\:text-white::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.hover\:text-gray-900:hover{--tw-text-opacity:1;color:rgb(17 24 39 / var(--tw-text-opacity))}.hover\:text-gray-700:hover{--tw-text-opacity:1;color:rgb(55 65 81 / var(--tw-text-opacity))}.focus\:rounded-sm:focus{border-radius:0.125rem}.focus\:outline:focus{outline-style:solid}.focus\:outline-2:focus{outline-width:2px}.focus\:outline-red-500:focus{outline-color:#ef4444}.group:hover .group-hover\:stroke-gray-600{stroke:#4b5563}.z-10{z-index: 10}@media (prefers-reduced-motion: no-preference){.motion-safe\:hover\:scale-\[1\.01\]:hover{--tw-scale-x:1.01;--tw-scale-y:1.01;transform:translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}}@media (prefers-color-scheme: dark){.dark\:bg-gray-900{--tw-bg-opacity:1;background-color:rgb(17 24 39 / var(--tw-bg-opacity))}.dark\:bg-gray-800\/50{background-color:rgb(31 41 55 / 0.5)}.dark\:bg-red-800\/20{background-color:rgb(153 27 27 / 0.2)}.dark\:bg-dots-lighter{background-image:url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(255,255,255,0.07)'/%3E%3C/svg%3E")}.dark\:bg-gradient-to-bl{background-image:linear-gradient(to bottom left, var(--tw-gradient-stops))}.dark\:stroke-gray-600{stroke:#4b5563}.dark\:text-gray-400{--tw-text-opacity:1;color:rgb(156 163 175 / var(--tw-text-opacity))}.dark\:text-white{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.dark\:shadow-none{--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.dark\:ring-1{--tw-ring-offset-shadow:var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);--tw-ring-shadow:var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);box-shadow:var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000)}.dark\:ring-inset{--tw-ring-inset:inset}.dark\:ring-white\/5{--tw-ring-color:rgb(255 255 255 / 0.05)}.dark\:hover\:text-white:hover{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.group:hover .dark\:group-hover\:stroke-gray-400{stroke:#9ca3af}}@media (min-width: 640px){.sm\:fixed{position:fixed}.sm\:top-0{top:0px}.sm\:right-0{right:0px}.sm\:ml-0{margin-left:0px}.sm\:flex{display:flex}.sm\:items-center{align-items:center}.sm\:justify-center{justify-content:center}.sm\:justify-between{justify-content:space-between}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width: 768px){.md\:grid-cols-2{grid-template-columns:repeat(2, minmax(0, 1fr))}}@media (min-width: 1024px){.lg\:gap-8{gap:2rem}.lg\:p-8{padding:2rem}}
        </style>
    </head>
    <body class="antialiased">
        <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 selection:bg-red-500 selection:text-white">
            @if (Route::has('login'))
                <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="max-w-7xl mx-auto p-6 lg:p-8 text-center">
                <div class="flex justify-center items-center">
                    <svg width="200px" height="200px" viewBox="0 0 500 500" enable-background="new 0 0 500 500" id="Layer_1" version="1.1" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">

                        <g>
                        
                        <path d="M458.41,284.071c-18.154-57.832-35.808-115.882-54.029-173.704c-4.565-14.082-14.193-28.553-33.242-22.906   c-86.518,24.843-173.71,47.452-260.272,72.213c-14.963,4.171-29.882,8.495-44.873,12.569c-14.311,3.135-29.075,11.983-25.48,30.866   c14.936,61.124,33.264,121.347,50.649,181.802c2.237,15.592,14.588,31.238,31.45,28.585c72.706-18.79,144.089-43.364,216.18-64.692   c33.493-10.35,67.068-20.44,100.36-31.43C453.27,313.46,464.304,298.759,458.41,284.071z" fill="#3F3756"/>
                        
                        <path d="M44.073,210.175c0,0,50.037,177.5,53.987,184.874s10.26,15.563,25.282,15.275   c15.022-0.288,319.535-97.353,319.535-97.353s16.509-10.394,14.923-22.692S396.703,103.78,396.703,103.78   c-12.169,19.051-109.591,152.363-130.096,167.23C233.361,268.354,79.309,221.321,44.073,210.175z" fill="#A7943F"/>
                        
                        <path d="M43.283,206.4c0,0-4.74-20.542,8.427-26.335c13.168-5.794,326.295-90.242,326.295-90.242   c4.311,0.848,17.887,6.526,18.522,15.626c-21.7,29.349-104.91,147.391-132.33,165.662C229.163,268.336,69.886,217.4,43.283,206.4z" fill="#E2B251"/>
                        
                        <path d="M266.08,272.194c-13.27,13.363-45.925-2.647-63.153-4.52c-18.892-4.309-38.147-9.169-56.266-15.287   c13.603,47.964,33.582,104.519,83.401,125.328c-143.309,41.418-115.691,63.405-153.984-65.577   c-8.718-29.637-17.36-59.299-26.641-88.766c-0.365-2.374-5.808-14.08-1.952-12.017c48.553,16.221,97.041,32.774,146.504,46.051   C217.964,262.429,241.249,273.18,266.08,272.194z" fill="#8A7527"/>
                        
                        <path d="M126.522,161.733c3.341,26.359,9.387,52.371,16.484,77.958c-32.998-10.262-67.253-21.367-99.044-33.044   c-2.483-10.573,1.86-23.222,13.198-26.109C80.314,174.392,103.389,167.958,126.522,161.733z" fill="#D69735"/>
                        
                        <path d="M259.062,271.603c29.71-34.519,57.443-72.46,85.769-108.715c8.73-12.689,18.119-24.896,26.81-37.598   c5.275-8.938,15.914-18.135,10.779-29.384c-2.747-5.353,3.785-2.266,5.815-0.469c2.242,2.153,5.831,4.9,6.138,7.946   c-16.608,29.633-38.763,55.699-59.785,82.281c-17.534,22.284-34.915,44.704-52.911,66.607   C274.619,258.636,269.141,270.523,259.062,271.603z" fill="#E9C36F"/>
                        
                        <path d="M447.846,308.757c0.903-3.543,3.654-7.16,2.642-10.851c-3.482-13.921-7.759-27.592-12.426-41.121   c-15.14-47.874-30.532-95.655-46.855-143.157c1.118-2.208,4.629-5.622,5.321-8.181c15.417,44.009,27.148,89.173,42.155,133.405   C442.252,257.143,468.594,296.807,447.846,308.757z" fill="#B9A95D"/>
                        
                        <path d="M403.892,186.878c-0.563-12.899,9.32,7.439,2.184,1.283c-0.272,8.362-5.525,1.896-5.155-2.655   c-0.128-1.612,2.153-1.814,2.259-0.176C403.271,185.811,403.354,186.322,403.892,186.878z" fill="#B9A95C"/>
                        
                        <path d="M369.338,298.88c-0.09,2.536-5.866-8.478-4.42-8.543C367.342,291.786,367.996,296.251,369.338,298.88z" fill="#403855"/>
                        
                        <path d="M420.881,240.028c0.873,1.67,1.046,3.768,3.198,4.331c1.11,0.313,2.848,1.95,2.533,3.194   C424.104,246.767,419.213,243.273,420.881,240.028z" fill="#403855"/>
                        
                        <path d="M249.795,195.487c-6.514,18.297-21.794-1.671-14.574-12.717c3.273-7.936,15.955-5.894,15.536,2.962   c0.113,1.663-1.809,2.177-2.467,0.629c-7.179-11.812-14.888,4.75-7.934,11.026c6.179,5.617,5.532-12.904,11.645-6.446   c1.705,0.937,3.64,6.512,5.452,3.672c4.643-6.611,4.493-15.833,0.751-22.817c-6.192-11.404-22.622-7.491-29.03,1.69   c-21.86,24.921,15.885,59.152,36.083,31.539c1.301-1.397,2.356-4.807,4.71-4.058c2.638,3.829-2.249,9.206-4.68,12.212   c-8.948,9.343-24.995,9.556-35.057,1.794c-37.188-28.612,21.896-82.716,34.302-36.948   C267.258,186.948,259.745,211.09,249.795,195.487z" fill="#3F3756"/>
                        
                        <path d="M107.708,341.981c-0.265-3.05-0.342-7.25,1.106-9.723C109.692,335.054,108.203,338.926,107.708,341.981z" fill="#403855"/>
                        
                        <path d="M171.484,364.605c-1.577-0.108-4.007-0.477-4.138-1.971C168.548,361.849,170.372,363.446,171.484,364.605z" fill="#413954"/>
                        
                        <path d="M458.41,284.071c-18.154-57.832-35.808-115.882-54.029-173.704c-4.565-14.082-14.193-28.553-33.242-22.906   c-86.518,24.843-173.71,47.452-260.272,72.213c-14.963,4.171-29.882,8.495-44.873,12.569c-14.311,3.135-29.075,11.983-25.48,30.866   c14.936,61.124,33.264,121.347,50.649,181.802c2.237,15.592,14.588,31.238,31.45,28.585c72.706-18.79,144.089-43.364,216.18-64.692   c33.493-10.35,67.068-20.44,100.36-31.43C453.27,313.46,464.304,298.759,458.41,284.071z M45.872,206.074   c-2.394-10.213,1.793-22.425,12.746-25.214c29.258-7.855,58.494-15.791,87.672-23.938c78.549-19.703,156.067-47.735,235.126-63.279   c0,0,0,0,0,0c5.158,0.71,8.83,5.048,11.573,9.141c1.411,0.613-3.351,6.334-3.555,7.886   c-23.567,38.081-53.701,71.572-80.867,107.072c-10.762,11.332-34.474,49.499-48.099,51.317   c-40.482-5.179-79.8-19.541-118.944-31.072l0,0v0C109.656,228.075,76.574,217.353,45.872,206.074z M446.168,305.924   c-29.501,14.249-62.982,19.95-93.929,30.951c-48.05,14.895-96.115,29.765-144.067,44.94c-17.002,5.359-34.034,10.626-50.919,16.342   c-17.115,3.652-42.526,18.196-54.683-1.087c-19.131-56.61-32.972-115.145-51.638-172.018c-0.552-2.479-5.533-13.706-1.904-11.731   c35.279,11.753,70.438,23.838,106.114,34.347c28.717,8.99,57.994,16.012,87.083,23.669c9.587,1.982,21.895,6.093,29.764-1.935   c41.214-50.542,84.444-99.922,121.082-154.002c0,0,0,0,0,0c1.048-2.156,2.42-4.152,3.069-6.65   c13.794,42.855,27.068,86.146,41.439,128.92C440.834,255.699,465.694,293.673,446.168,305.924z" fill="#3F3756"/>
                        
                        </g>
                        
                    </svg>
                </div>

                <h1 class="text-4xl mt-10 font-bold">Welcome to Email App</h1>
                <p class="text-lg mt-5">Please login to send email.</p>

                <a href="/login" class="mt-5 inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150 ml-4">
                    Log in now
                </a>
            </div>
        </div>
    </body>
</html>