<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Just Driving</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/lucide@latest"></script>
    <!-- GSAP + ScrollTrigger -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js"></script>


    <link rel="icon" type="image/x-icon" href="{{ asset('images/favicon.png') }}">

    <link rel="stylesheet" href="/css/styles.css">
    <!-- Splide CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css" />

</head>

<body>

    <div class="content-container">
        <!-- Hero Backgrounds -->
        <!-- <div class="hidden md:block hero-bg-right"></div> -->
        <!-- <div class="hidden md:block hero-bg-left"></div> -->
        <div class="absolute top-0 left-0 w-[200px] h-[200px]"
            style="background: radial-gradient(circle at top left, #3384FF99 0%, #3384FF4D 30%, #93b7ed1a 60%, transparent 70%)">
        </div>

        <div class="absolute top-0 right-0 w-[200px] h-[200px]"
            style="background: radial-gradient(circle at top right, #3384FF99 0%, #3384FF4D 30%, #93b7ed1a 60%, transparent 70%)">
        </div>

        @include('layouts.header')

        <div class="lg:block absolute inset-0 -z-10 bg-no-repeat bg-center bg-cover pointer-events-none"
            style="background: linear-gradient(to bottom, transparent, rgba(255, 255, 255, 0.6)), url('{{ asset('images/Background.svg') }}'); will-change: transform; transform: translateZ(0);">
        </div>

        <!-- Hero Section -->
        <section class="w-full mx-auto mt-16 text-center relative overflow-hidden">
            <div class="testimoniol1 hidden lg:block"></div>
            <!-- Tag -->
            <div
                class="inline-block bg-gray-50 text-gray-700 px-4 py-1 rounded-full text-sm font-medium shadow-sm mb-4 border border-gray-100 relative">
                #1 Productivity Software
            </div>

            <!-- Title -->
            <h1
                class="max-w-6xl mx-auto text-4xl sm:text-5xl md:text-6xl font-bold leading-tight text-gray-900 relative z-10">
                <span class="text-[#3384FF]">Just Driving</span> – Dit komplette digitale system til din køreskole
            </h1>

            <!-- Subtitle -->
            <p class="max-w-3xl mx-auto px-3 sm:px-0 mt-6 text-[#AFAFAF] text-lg relative z-10">
                Gør hverdagen lettere med Danmarks mest intuitive alt-i-ét platform til køreskoler. Undervisning,
                booking, betaling, fakturering, administration og elevstyring – samlet i ét professionelt system, der
                fungerer både på computer og mobil-app.
            </p>

            <div class="testimoniol2 hidden lg:block"></div>
            <div class="testimoniol3 hidden lg:block"></div>

            <!-- CTA Button -->
            <div class="mt-8 relative z-10">
                <a href="#"
                    class="inline-flex items-center bg-[#3384FF] text-sm text-white px-6 py-3 rounded-xl font-semibold shadow-md hover:bg-[#2563EB] transition">
                    <img src="{{ asset('images/energy.png') }}" alt="Apple Logo" class="w-4 h-4 mr-2" /> Try 14 days
                    free
                </a>
            </div>

            <!-- Rating Text -->
            <div class="flex flex-col sm:flex sm:flex-row items-center mt-5 justify-center">
                <img src="{{ asset('images/stars.png') }}" alt="Apple Logo" class=" mr-2" />
                <p class="text-[#AFAFAF] text-sm relative z-10">
                    1k + rating on Product Hunt
                </p>
            </div>

            <!-- Laptop Mockup with Responsive Video -->
            <div id="videoContainer" class="relative w-full h-[30vw] overflow-hidden mt-10">
                <video id="mockupVideo" autoplay loop muted playsinline preload="auto"
                    poster="https://res.cloudinary.com/dejgep5l8/image/upload/v1760624710/laptopThumbnail.jpg"
                    class="w-[60vw] h-full mx-auto object-cover rounded-2xl shadow-lg transition-transform duration-500 hover:scale-105 hover:shadow-2xl will-change-transform backface-hidden">
                    <source
                        src="https://res.cloudinary.com/dejgep5l8/video/upload/f_auto,q_auto:good/v1760624710/newLaptopVideo_yx7ttf.mp4"
                        type="video/mp4" />
                    Your browser does not support the video tag.
                </video>
            </div>
        </section>

        <!-- Client Section -->
        <section class="w-full mx-auto mt-16 text-center relative overflow-hidden bg-transparent py-1 sm:py-5">
            <div class="relative py-10 flex flex-col items-center justify-center"
                style="background-image: url('{{ asset('images/client-background.png') }}'); background-size: cover; background-position: center;">
                <div id="clientSlider" class="splide w-full" aria-label="Client Logos">
                    <div class="splide__track">
                        <ul class="splide__list opacity-50 grayscale">
                            @for ($i = 0; $i < 10; $i++)
                                <li class="splide__slide flex justify-center items-center">
                                    <img src="{{ asset('images/client.png') }}" alt="Client"
                                        class="h-10 w-[170px] object-contain" />
                                </li>
                            @endfor
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        @php
            $features = [
                [
                    'id' => 1,
                    'title' => 'Administration & Overblik',
                    'description' => 'Ét samlet system til elever, kørelærere, hold, afdelinger og løn – alt opdateres i realtid.',
                    'icon' => asset('images/smart.png'),
                ],
                [
                    'id' => 2,
                    'title' => 'Online Undervisning & Lektionsplan',
                    'description' => 'Digital teori (flere sprog), lektionsplan, logbog, underskrifter og automatisk adgang til e-teori.dk.',
                    'icon' => asset('images/online.png'),
                ],
                [
                    'id' => 3,
                    'title' => 'Booking & Kommunikation',
                    'description' => 'Bookingkalender med elev-selvbooking, automatiske SMS/e-mails og app til både elever og kørelærere.',
                    'icon' => asset('images/automatisk.png'),
                ],
                [
                    'id' => 4,
                    'title' => 'Betaling & Fakturering',
                    'description' => 'Fuldt økonomisystem med faktura, betaling, Gonpay-integration og ét-klik betaling via QR eller link.',
                    'icon' => asset('images/digitale.png'),
                ],
                [
                    'id' => 5,
                    'title' => 'Integrationer & Synlighed',
                    'description' => 'API til din egen hjemmeside og automatisk synlighed på findkoreskole.dk.',
                    'icon' => asset('images/dashboard.png'),
                ],
                [
                    'id' => 6,
                    'title' => 'Drift & Datasikkerhed',
                    'description' => 'Multibrugeropsætning, hosting i Danmark og fuld GDPR-sikkerhed.',
                    'icon' => asset('images/gdpr.png'),
                ],
            ];
         @endphp

        <!-- Section 2 -->
        <section class="w-full mx-auto mt-24 sm:mt-16 px-6 py-0 sm:py-5 text-center relative overflow-hidden">
            <!-- Tag -->
            <div
                class="inline-block uppercase bg-gray-50 text-gray-700 px-4 py-1 rounded-full text-sm font-medium shadow-sm mb-4 border border-gray-100 relative">
                Nøglefunktioner
            </div>

            <!-- Title -->
            <h1
                class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl font-bold leading-tight text-gray-900 relative z-10">
                Alt din køreskole <span class="text-[#3384FF]"> behøver</span> , samlet ét sted
            </h1>

            <!-- Subtitle -->
            <p class="max-w-4xl mx-auto mt-4 text-[#AFAFAF] text-lg relative z-10">
                Med Just Driving får du et moderne, driftssikkert system, som giver overblik og sparer tid. Alt er
                digitalt, automatisk og bygget til danske køreskolers behov. Du får bl.a.:
            </p>

            <!-- Cards Grid -->
            <div class="max-w-4xl mx-auto grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8 mt-12">
                @foreach ($features as $feature)
                    <div
                        class="bg-[#F8F8F8] p-1 rounded-2xl shadow-sm transition-all duration-300 ease-out hover:-translate-y-2 hover:shadow-xl hover:bg-white">
                        <!-- Icon Section -->
                        <div
                            class="bg-[#EAEFF4] py-4 flex items-center justify-center rounded-t-2xl transition-all duration-300 hover:bg-[#DCE8F5]">
                            <div
                                class="mx-auto rounded-lg flex items-center justify-center transform transition-transform duration-300 hover:scale-110">
                                <img src="{{ $feature['icon'] }}" alt="Icon" class="w-20 h-20" />
                            </div>
                        </div>

                        <!-- Text Section -->
                        <div class="flex flex-col my-3 pl-5 items-start transition-all duration-300">
                            <h3 class="text-lg text-start font-semibold text-gray-900">{{ $feature['title'] }}</h3>
                            <p class="text-[#AFAFAF] text-start w-[90%] text-sm">{{ $feature['description'] }}</p>
                            <div
                                class="flex items-center justify-center cursor-pointer gap-2 hover:translate-x-1 transition-transform duration-300">
                                <p class="inline-block text-[#3384FF] text-sm font-normal hover:underline">
                                    Læs mere
                                </p>
                                <img src="{{ asset('images/arrow-right.png') }}" alt="Arrow" class="inline-block mt-1" />
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

        </section>

        <!-- Section 3 -->
        <section class="w-full mx-auto mt-24 sm:mt-16 text-center relative overflow-hidden">
            <!-- Title -->
            <h1
                class="max-w-6xl mx-auto text-2xl sm:text-3xl md:text-4xl font-bold leading-tight text-gray-900 relative z-10">
                Med Just Driving får du ro i maven og tid til det vigtigste: at undervise dine elever og drive din
                forretning.
            </h1>

            <!-- Subtitle -->
            <p class="w-[90vw] md:w-[40vw] max-w-xl mx-auto mt-4 text-[#AFAFAF] text-lg relative z-10">
                Klar til at tage din køreskole til næste niveau?
            </p>

            <!-- CTA Button -->
            <div class="mt-4 relative z-10">
                <a href="#"
                    class="inline-flex items-center bg-[#3384FF] text-sm text-white px-6 py-3 rounded-xl font-semibold shadow-md hover:bg-[#2563EB] transition">
                    Prøv Just Driving gratis
                </a>
            </div>
        </section>


        <!-- Section 4 -->
        <section class="w-full mx-auto mt-24 sm:mt-16 text-center relative overflow-hidden">
            <!-- Tag -->
            <div
                class="inline-block uppercase bg-gray-50 text-gray-700 px-4 py-1 rounded-full text-sm font-medium shadow-sm mb-4 border border-gray-100 relative">
                Vores arbejdsproces
            </div>

            <!-- Title -->
            <h1 class="text-2xl sm:text-3xl md:text-4xl font-bold leading-tight text-gray-900 relative z-10">
                Online administrationssystem – Ét system, fuldt overblik
            </h1>

            <!-- Subtitle -->
            <p class="w-[90vw] md:w-[40vw] max-w-xl mx-auto mt-4 text-[#AFAFAF] text-lg relative z-10">
                Slut med at bruge flere løsninger samtidig. Just Driving samler alt i ét effektivt administrationsmodul,
                der reducerer fejl og sparer dig for dobbeltarbejde.
            </p>

            <p class="font-semibold text-gray-900">Funktioner</p>

            <!-- 3 Steps Container -->
            <div class="mt-12 space-y-16 w-[90vw] md:w-[70vw] mx-auto">
                <!-- Step 1 -->
                <div class="step-item flex flex-col md:flex-row items-center justify-between gap-5 opacity-0">
                    <div class="w-full md:w-1/2 flex">
                        <img src="{{ asset('images/screen1.png') }}" alt="Step 1"
                            class="w-[90%] max-w-md rounded-xl object-cover transform transition-all duration-700 ease-[cubic-bezier(0.25,1,0.5,1)] hover:scale-105 hover:shadow-2xl hover:brightness-110 hover:-translate-y-1" />

                    </div>
                    <div class="w-full md:w-1/2 text-left md:text-left">
                        <div class="inline-block bg-white px-3 py-1 rounded-full text-sm font-semibold mb-3">
                            Trin 1
                        </div>
                        <h2 class="text-2xl font-bold mb-3 text-gray-900">Opsæt din køreskole</h2>
                        <p class="text-[#AFAFAF] mb-5 pr-0 md:pr-[40px]">
                            Oprettelse og styring af elever, kørelærere og hold – med fuld lektionsoversigt og
                            fremdrift.
                        </p>
                        <button
                            class="bg-[#3384FF] text-white px-6 py-2 rounded-lg font-normal hover:bg-[#2563eb] transition-all duration-300 shadow-2xl shadow-[#3384FF] text-xs">
                            Tag det første skridt
                        </button>
                    </div>
                </div>

                <!-- Step 2 -->
                <div class="step-item flex flex-col md:flex-row-reverse items-center justify-between gap-5 opacity-0">
                    <div class="w-full md:w-1/2 flex">
                        <img src="{{ asset('images/screen2.png') }}" alt="Step 2"
                            class="w-[90%] max-w-md rounded-xl object-cover transform transition-all duration-700 ease-[cubic-bezier(0.25,1,0.5,1)] hover:scale-105 hover:shadow-2xl hover:brightness-110 hover:-translate-y-1" />
                    </div>
                    <div class="w-full md:w-1/2 text-left md:text-left">
                        <div class="inline-block bg-white px-3 py-1 rounded-full text-sm font-semibold mb-3">
                            Trin 2
                        </div>
                        <h2 class="text-2xl font-bold mb-3 text-gray-900">Begynd at booke online</h2>
                        <p class="text-[#AFAFAF] mb-5 pr-0 md:pr-[40px]">
                            Automatisk aflønning, timesporing og digital håndtering af betalinger, restancer og online
                            tilmelding via hjemmeside eller findkoreskole.dk.
                        </p>
                        <button
                            class="bg-[#3384FF] text-white px-6 py-2 rounded-lg font-normal hover:bg-[#2563eb] transition-all duration-300 shadow-2xl shadow-[#3384FF] text-xs">
                            Tag det første skridt
                        </button>
                    </div>
                </div>

                <!-- Step 3 -->
                <div class="step-item flex flex-col md:flex-row items-center justify-between gap-5 opacity-0">
                    <div class="w-full md:w-1/2 flex">
                        <img src="{{ asset('images/screen3.png') }}" alt="Step 3"
                            class="w-[90%] max-w-md rounded-xl object-cover transform transition-all duration-700 ease-[cubic-bezier(0.25,1,0.5,1)] hover:scale-105 hover:shadow-2xl hover:brightness-110 hover:-translate-y-1" />
                    </div>
                    <div class="w-full md:w-1/2 text-left md:text-left">
                        <div class="inline-block bg-white px-3 py-1 rounded-full text-sm font-semibold mb-3">
                            Trin 3
                        </div>
                        <h2 class="text-2xl font-bold mb-3 text-gray-900">Følg med og voks</h2>
                        <p class="text-[#AFAFAF] mb-5 pr-0 md:pr-[40px]">
                            Et samlet system, der giver fuldt overblik over alle afdelinger, aktiviteter og elevforløb.
                        </p>
                        <button
                            class="bg-[#3384FF] text-white px-6 py-2 rounded-lg font-normal hover:bg-[#2563eb] transition-all duration-300 shadow-2xl shadow-[#3384FF] text-xs">
                            Tag det første skridt
                        </button>
                    </div>
                </div>
            </div>
        </section>


        <section class="w-full mx-auto mt-24 sm:mt-16 text-center relative overflow-hidden">
            <!-- Subtitle -->
            <p class="w-[90vw] md:w-[40vw] max-w-xl mx-auto mt-4 text-black text-lg relative z-10">
                Mere struktur. Færre manuelle opgaver. Mere tid til undervisning.
            </p>

            <!-- CTA Button -->
            <div class="mt-8 relative z-10">
                <a href="#"
                    class="inline-flex items-center bg-[#3384FF] text-sm text-white px-6 py-2 rounded-xl font-semibold shadow-md hover:bg-[#2563EB] transition">
                    Læs mere
                </a>
            </div>
        </section>

        <!-- Container for three sections to prevent layout shifts -->
        <div class="max-w-full 2xl:max-w-7xl mx-auto relative">
            <section id=""
                class="text-gray-900 py-5 px-6 md:px-10 lg:px-20 flex flex-col md:flex-row items-start mt-10 gap-3 overflow-hidden z-50">
                <!-- Left Column (Image) -->
                <div
                    class="w-full md:w-1/2 flex justify-start translate-y-10 transition-all duration-700 ease-out animate-on-scroll">
                    <img src="{{ asset('images/home1.png') }}" alt="Administration System" class="w-full max-w-[450px]">
                </div>

                <!-- Right Column (Text Content) -->
                <div
                    class="w-full md:w-1/2 space-y-4 translate-y-10 transition-all duration-700 ease-out animate-on-scroll delay-200">
                    <h2 class="text-2xl font-bold text-[#1E1E1E]">
                        Online undervisningssystem – Fremtidssikret<br /> læring
                    </h2>
                    <p class="text-[#858599] text-sm">
                        Med Just Driving får du ét samlet undervisningssystem, der gør både fysisk og digital
                        undervisning
                        enkel og overskuelig.
                    </p>

                    <p class="text-black font-semibold text-sm">
                        Du får:
                    </p>
                    <ul class="space-y-3 text-[#444] text-sm font-semibold mt-4">
                        <li class="flex items-start gap-2">
                            <img src="{{ asset('images/arrowNew.png') }}" alt="Arrow Right"
                                class="w-4 h-4 text-[#3384FF]">
                            <span>Digitale lektionsplaner og alt undervisningsmateriale samlet ét sted – klar til deling
                                og
                                udskrivning.</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <img src="{{ asset('images/arrowNew.png') }}" alt="Arrow Right"
                                class="w-4 h-4 text-[#3384FF]">
                            <span>Online teoriprøver med fuld visning af elevens fremdrift og direkte integration til
                                elevens profil.</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <img src="{{ asset('images/arrowNew.png') }}" alt="Arrow Right"
                                class="w-4 h-4 text-[#3384FF]">
                            <span>Undervisning tilgængelig på dansk, engelsk og arabisk.</span>
                        </li>
                    </ul>
                </div>
            </section>

            <section id=""
                class="text-gray-900 py-5 px-6 md:px-10 lg:px-20 flex flex-col md:flex-row items-start mt-10 gap-3 overflow-hidden z-50">
                <!-- Right Column (Text Content) -->
                <div
                    class="w-full md:w-1/2 space-y-4 translate-y-10 transition-all duration-700 ease-out animate-on-scroll delay-200">
                    <h2 class="text-2xl font-bold text-[#1E1E1E]">
                        Online bookingsystem – Mere struktur, mindre spildtid
                    </h2>
                    <p class="text-[#858599] text-sm">
                        Giv eleverne en nem bookingoplevelse – og få fuld kontrol over kalenderen.
                    </p>

                    <p class="text-black font-semibold text-sm">
                        Fordele:
                    </p>
                    <ul class="space-y-3 text-[#444] text-sm font-semibold mt-4">
                        <li class="flex items-start gap-2">
                            <img src="{{ asset('images/arrowNew.png') }}" alt="Arrow Right"
                                class="w-4 h-4 text-[#3384FF]">
                            <span>Realtidsopdateret kalender med automatiske påmindelser til elever.</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <img src="{{ asset('images/arrowNew.png') }}" alt="Arrow Right"
                                class="w-4 h-4 text-[#3384FF]">
                            <span>Automatisk fakturering ved ekstra lektioner samt fuld synkronisering med lektionsplan
                                og
                                betaling.</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <img src="{{ asset('images/arrowNew.png') }}" alt="Arrow Right"
                                class="w-4 h-4 text-[#3384FF]">
                            <span>Fleksibel løsning, der passer til både enkeltlærere og større køreskoler.</span>
                        </li>
                    </ul>
                </div>
                <!-- Left Column (Image) -->
                <div
                    class="w-full md:w-1/2 flex justify-start translate-y-10 transition-all duration-700 ease-out animate-on-scroll">
                    <img src="{{ asset('images/home2.png') }}" alt="Administration System" class="w-full max-w-[450px]">
                </div>
            </section>

            <section id=""
                class="text-gray-900 py-5 px-6 md:px-10 lg:px-20 flex flex-col md:flex-row items-start justify-between mt-10 gap-3 overflow-hidden z-50">
                <!-- Left Column (Image) -->
                <div
                    class="w-full md:w-1/2 flex justify-start translate-y-10 transition-all duration-700 ease-out animate-on-scroll">
                    <img src="{{ asset('images/home3.png') }}" alt="Administration System" class="w-full max-w-[450px]">
                </div>

                <!-- Right Column (Text Content) -->
                <div
                    class="w-full md:w-1/2 space-y-4 translate-y-10 transition-all duration-700 ease-out animate-on-scroll delay-200">
                    <h2 class="text-2xl font-bold text-[#1E1E1E]">
                        Digitalt økonomisystem – Overblik uden bøvl
                    </h2>
                    <p class="text-[#858599] text-sm">
                        Et moderne økonomisystem, der håndterer hele elevens betalingsforløb automatisk.
                    </p>

                    <p class="text-black font-semibold text-sm">
                        Funktioner:
                    </p>
                    <ul class="space-y-3 text-[#444] text-sm font-semibold mt-4">
                        <li class="flex items-start gap-2">
                            <img src="{{ asset('images/arrowNew.png') }}" alt="Arrow Right"
                                class="w-4 h-4 text-[#3384FF]">
                            <span>Kun betalende elever kan booke, så du undgår restancer.</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <img src="{{ asset('images/arrowNew.png') }}" alt="Arrow Right"
                                class="w-4 h-4 text-[#3384FF]">
                            <span>Kortbetaling, MobilePay og automatisk fakturering i ét system.</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <img src="{{ asset('images/arrowNew.png') }}" alt="Arrow Right"
                                class="w-4 h-4 text-[#3384FF]">
                            <span>Fuld transaktionsoversigt og bogholderi-integration for nem økonomistyring.</span>
                        </li>
                    </ul>
                </div>
            </section>
        </div>

        <!-- Section -->
        <section class="w-full mx-auto mt-24 sm:mt-16 text-center relative overflow-hidden">

            <!-- Subtitle -->
            <p class="w-[90vw] md:w-[60vw] mx-auto mt-4 text-[#AFAFAF] text-lg relative z-10">
                Slip for manuelle fejl, rykkere og regneark – Just Driving gør økonomien digital og professionel.
            </p>

            <!-- CTA Button -->
            <div class="mt-4 pb-2 flex items-center justify-center gap-2 sm:gap-4 z-10">
                <a href="#"
                    class="bg-transparent hover:bg-[#3384FF] text-sm text-[#3384FF] hover:text-white border border-[#3384FF] px-6 py-3 rounded-xl font-semibold shadow-md transition">
                    prøv gratis nu
                </a>
                <a href="#"
                    class="bg-transparent hover:bg-[#3384FF] text-sm text-[#3384FF] hover:text-white border border-[#3384FF] px-6 py-3 rounded-xl font-semibold shadow-md transition">
                    Læs mere
                </a>
            </div>
        </section>

        <!-- Section  -->
        <section class="w-full mx-auto mt-24 sm:mt-16 text-center relative overflow-hidden">
            <!-- Title -->
            <h1
                class="max-w-6xl mx-auto text-2xl sm:text-3xl md:text-4xl font-bold leading-tight text-gray-900 relative z-10">
                Tag din køreskole til næste niveau
            </h1>

            <!-- Subtitle -->
            <p class="w-[90vw] md:w-[60vw] mx-auto mt-4 text-[#AFAFAF] text-lg relative z-10">
                Gør administrationen enkel med én samlet løsning. Just Driving håndterer alle daglige opgaver for dig,
                minimerer fejl og sparer tid, så du kan fokusere på undervisningen. Systemet er udviklet med danske
                køreskoler og bygger på moderne teknologi, der kan skalere i takt med din forretning.
            </p>

            <!-- CTA Button -->
            <div class="mt-4 relative z-10">
                <a href="#"
                    class="inline-flex items-center bg-[#3384FF] text-sm text-white px-6 py-3 rounded-xl font-semibold shadow-md hover:bg-[#2563EB] transition">
                    Prøv Just Driving gratis
                </a>
            </div>
        </section>

        <!-- Payment Flow Section -->
        <section class="w-full mx-auto mt-24 sm:mt-16 text-center relative overflow-hidden">
            <div class="max-w-full 2xl:max-w-7xl mx-auto px-6 md:px-10 lg:px-20">
                <!-- Main Heading -->
                <h1 class="text-2xl font-bold leading-tight text-gray-900 relative z-10">
                    Betalingsflow – Sikkert, Enkelt Og 100% Automatiseret
                </h1>

                <!-- Subheading -->
                <p class="text-lg font-semibold text-gray-600 mt-4 relative z-10">
                    Slut Med Manuelt Betalingsarbejde
                </p>

                <!-- Description -->
                <p class="w-[90vw] md:w-[60vw] mx-auto mt-4 text-[#858599] text-sm sm:text-base relative z-10">
                    Eleven Betaler Direkte I Systemet, Hvorefter Adgang Tildeles Automatisk.
                </p>

                <!-- Fordele Heading -->
                <p class="text-black font-semibold text-lg mt-8 mb-6 relative z-10">
                    Fordele:
                </p>

                <!-- Three Feature Cards -->
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mt-6 max-w-5xl mx-auto">
                    <!-- Card 1 -->
                    <div
                        class="group bg-white rounded-xl p-6 shadow-sm border border-gray-100 hover:shadow-xl hover:shadow-[#3384FF]/20 hover:-translate-y-2 hover:border-[#3384FF]/30 transition-all duration-300 ease-out cursor-pointer">
                        <div class="flex flex-col items-start gap-4">
                            <!-- Clock Icon -->
                            <div
                                class="transform transition-transform duration-300 group-hover:scale-110 group-hover:rotate-6">
                                <img src="{{ asset('images/clock.png') }}" alt="Icon" class="w-12 h-12">
                            </div>
                            <p
                                class="text-[#444] text-sm font-semibold text-left group-hover:text-[#3384FF] transition-colors duration-300">
                                Ingen betaling, ingen booking
                            </p>
                        </div>
                    </div>

                    <!-- Card 2 -->
                    <div
                        class="group bg-white rounded-xl p-6 shadow-sm border border-gray-100 hover:shadow-xl hover:shadow-[#3384FF]/20 hover:-translate-y-2 hover:border-[#3384FF]/30 transition-all duration-300 ease-out cursor-pointer">
                        <div class="flex flex-col items-start gap-4">
                            <!-- Clock Icon -->
                            <div
                                class="transform transition-transform duration-300 group-hover:scale-110 group-hover:rotate-6">
                                <img src="{{ asset('images/clock.png') }}" alt="Icon" class="w-12 h-12">
                            </div>
                            <p
                                class="text-[#444] text-sm font-semibold text-left group-hover:text-[#3384FF] transition-colors duration-300">
                                Automatisk kvittering
                            </p>
                        </div>
                    </div>

                    <!-- Card 3 -->
                    <div
                        class="group bg-white rounded-xl p-6 shadow-sm border border-gray-100 hover:shadow-xl hover:shadow-[#3384FF]/20 hover:-translate-y-2 hover:border-[#3384FF]/30 transition-all duration-300 ease-out cursor-pointer">
                        <div class="flex flex-col items-start gap-4">
                            <!-- Clock Icon -->
                            <div
                                class="transform transition-transform duration-300 group-hover:scale-110 group-hover:rotate-6">
                                <img src="{{ asset('images/clock.png') }}" alt="Icon" class="w-12 h-12">
                            </div>
                            <p
                                class="text-[#444] text-sm font-semibold text-left group-hover:text-[#3384FF] transition-colors duration-300">
                                Driftssikker dansk betalingsinfrastruktur
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Section 5 -->
        <section class="w-full mx-auto mt-24 sm:mt-16 text-center relative overflow-hidden">
            <!-- Tag -->
            <div
                class="inline-block uppercase bg-gray-50 text-gray-700 px-4 py-1 rounded-full text-sm font-medium shadow-sm mb-4 border border-gray-100 relative">
                Tillid fra førende skoler
            </div>

            <!-- Title -->
            <h1 class="text-2xl sm:text-3xl md:text-4xl font-bold leading-tight text-gray-900 relative z-10">
                Betroet af køreskoler over hele Danmark
            </h1>

            <!-- Subtitle -->
            <p class="w-[90vw] md:w-[40vw] max-w-xl mx-auto mt-4 text-[#AFAFAF] text-lg relative z-10">
                Tag ikke bare vores ord for det. Hør fra teams, der har forbedret deres produktivitet med os.
            </p>

            <!-- Logo Carousel Wrapper -->
            <div class="mt-5 w-full overflow-hidden relative">
                <!-- Fading edges -->
                <div
                    class="pointer-events-none absolute inset-y-0 left-0 w-32 bg-gradient-to-r from-white to-transparent z-20">
                </div>
                <div
                    class="pointer-events-none absolute inset-y-0 right-0 w-32 bg-gradient-to-l from-white to-transparent z-20">
                </div>

                <!-- Row 1 (left to right) -->
                <div class="flex animate-scroll-left space-x-8 w-max">
                    <img src="{{ asset('images/review1.png') }}" alt="Client 1" class="h-16 sm:h-32 object-contain" />
                    <img src="{{ asset('images/review2.png') }}" alt="Client 2" class="h-16 sm:h-32 object-contain" />
                    <img src="{{ asset('images/review3.png') }}" alt="Client 3" class="h-16 sm:h-32 object-contain" />
                    <!-- duplicate for loop -->
                    <img src="{{ asset('images/review1.png') }}" alt="Client 1" class="h-16 sm:h-32 object-contain" />
                    <img src="{{ asset('images/review2.png') }}" alt="Client 2" class="h-16 sm:h-32 object-contain" />
                    <img src="{{ asset('images/review3.png') }}" alt="Client 3" class="h-16 sm:h-32 object-contain" />
                    <!-- duplicate for loop -->
                    <img src="{{ asset('images/review1.png') }}" alt="Client 1" class="h-16 sm:h-32 object-contain" />
                    <img src="{{ asset('images/review2.png') }}" alt="Client 2" class="h-16 sm:h-32 object-contain" />
                    <img src="{{ asset('images/review3.png') }}" alt="Client 3" class="h-16 sm:h-32 object-contain" />
                    <!-- duplicate for loop -->
                    <img src="{{ asset('images/review1.png') }}" alt="Client 1" class="h-16 sm:h-32 object-contain" />
                    <img src="{{ asset('images/review2.png') }}" alt="Client 2" class="h-16 sm:h-32 object-contain" />
                    <img src="{{ asset('images/review3.png') }}" alt="Client 3" class="h-16 sm:h-32 object-contain" />
                    <!-- duplicate for loop -->
                    <img src="{{ asset('images/review1.png') }}" alt="Client 1" class="h-16 sm:h-32 object-contain" />
                    <img src="{{ asset('images/review2.png') }}" alt="Client 2" class="h-16 sm:h-32 object-contain" />
                    <img src="{{ asset('images/review3.png') }}" alt="Client 3" class="h-16 sm:h-32 object-contain" />
                </div>

                <!-- Row 2 (right to left) -->
                <div class="flex animate-scroll-right space-x-8 w-max mt-8">
                    <img src="{{ asset('images/review1.png') }}" alt="Client 1" class="h-16 sm:h-32 object-contain" />
                    <img src="{{ asset('images/review2.png') }}" alt="Client 2" class="h-16 sm:h-32 object-contain" />
                    <img src="{{ asset('images/review3.png') }}" alt="Client 3" class="h-16 sm:h-32 object-contain" />
                    <!-- duplicate for loop -->
                    <img src="{{ asset('images/review1.png') }}" alt="Client 1" class="h-16 sm:h-32 object-contain" />
                    <img src="{{ asset('images/review2.png') }}" alt="Client 2" class="h-16 sm:h-32 object-contain" />
                    <img src="{{ asset('images/review3.png') }}" alt="Client 3" class="h-16 sm:h-32 object-contain" />
                    <!-- duplicate for loop -->
                    <img src="{{ asset('images/review1.png') }}" alt="Client 1" class="h-16 sm:h-32 object-contain" />
                    <img src="{{ asset('images/review2.png') }}" alt="Client 2" class="h-16 sm:h-32 object-contain" />
                    <img src="{{ asset('images/review3.png') }}" alt="Client 3" class="h-16 sm:h-32 object-contain" />
                    <!-- duplicate for loop -->
                    <img src="{{ asset('images/review1.png') }}" alt="Client 1" class="h-16 sm:h-32 object-contain" />
                    <img src="{{ asset('images/review2.png') }}" alt="Client 2" class="h-16 sm:h-32 object-contain" />
                    <img src="{{ asset('images/review3.png') }}" alt="Client 3" class="h-16 sm:h-32 object-contain" />
                    <!-- duplicate for loop -->
                    <img src="{{ asset('images/review1.png') }}" alt="Client 1" class="h-16 sm:h-32 object-contain" />
                    <img src="{{ asset('images/review2.png') }}" alt="Client 2" class="h-16 sm:h-32 object-contain" />
                    <img src="{{ asset('images/review3.png') }}" alt="Client 3" class="h-16 sm:h-32 object-contain" />
                </div>
            </div>
        </section>

        <!-- Section 6 -->
        <section class="w-full mx-auto mt-24 sm:mt-16 text-center relative overflow-hidden">
            <!-- Tag -->
            <div
                class="inline-block uppercase bg-gray-50 text-gray-700 px-4 py-1 rounded-full text-sm font-medium shadow-sm mb-4 border border-gray-100 relative">
                Spørgsmål? Vi har svarene
            </div>

            <!-- Title -->
            <h1 class="text-2xl sm:text-3xl md:text-4xl font-bold leading-tight text-gray-900 relative">
                Ofte stillede <span class="text-[#3384FF]">spørgsmål</span>
            </h1>

            <!-- Subtitle -->
            <p class="w-[90vw] md:w-[40vw] max-w-xl mx-auto mt-4 text-[#AFAFAF] text-lg relative">
                Find hurtige svar på nogle af de mest almindelige spørgsmål om Increasy.
            </p>

            <!-- FAQ Section -->
            <div class="w-[90vw] md:w-[50vw] mx-auto mt-10 text-left">
                @php
                    $faqs = [
                        ['question' => 'Hvordan fungerer Increasy?', 'answer' => 'Increasy hjælper skoler med at automatisere planlægning, booking og betalinger på en nem og effektiv måde.'],
                        ['question' => 'Er der en gratis prøveperiode?', 'answer' => 'Ja, vi tilbyder en gratis prøveperiode, så du kan prøve systemet, før du forpligter dig.'],
                        ['question' => 'Hvordan kan jeg opsige mit abonnement?', 'answer' => 'Du kan til enhver tid opsige dit abonnement fra dit kontrolpanel under indstillinger.'],
                        ['question' => 'Tilbyder I kundesupport?', 'answer' => 'Ja, vores supportteam er tilgængeligt via e-mail og chat for at hjælpe dig med alt, du måtte have brug for.'],
                        ['question' => 'Er mine data sikre hos jer?', 'answer' => 'Ja, vi bruger moderne kryptering og sikkerhedsforanstaltninger for at beskytte alle dine data.'],
                    ];
                 @endphp

                @foreach ($faqs as $index => $faq)
                    <div class="bg-transparent p-2">
                        <button id="faq-{{ $index }}"
                            class="bg-white/70 shadow-sm faq-question rounded-xl px-4 py-3 flex justify-between items-center w-full text-left focus:outline-none"
                            data-index="{{ $index }}">
                            <span class="text-xs sm:text-lg font-semibold text-gray-900">{{ $faq['question'] }}</span>
                            <div
                                class="icon w-6 h-6 flex items-center p-1 justify-center bg-[#3384FF] rounded-full text-white transition-all duration-300">
                                <i class="" data-lucide="plus"></i>
                            </div>
                        </button>

                        <div
                            class="faq-answer max-h-0 opacity-0 px-4 py-0 rounded-xl bg-white overflow-hidden transition-all duration-500 ease-in-out mt-2 text-[#777777]">
                            <p class="text-xs sm:text-md leading-relaxed py-2">{{ $faq['answer'] }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </section>



        @include('layouts.footer')

        <!-- Section 8
        <section class="w-full h-[120px] bg-[#f6f7fa] mx-auto mt-0 text-center relative overflow-hidden">
        </section> -->
    </div>

    <script type="text/javascript" src="/js/script.js"></script>
    <!-- Splide JS -->
    <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js"></script>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            gsap.registerPlugin(ScrollTrigger);

            gsap.utils.toArray(".step-item").forEach((item, i) => {
                // Odd index (0,2) = slide from left; Even index (1) = slide from right
                const fromDirection = i % 2 === 1 ? 350 : -350;

                gsap.fromTo(item,
                    { x: fromDirection, opacity: 0 },
                    {
                        x: 0,
                        opacity: 1,
                        duration: 3.5, // slower smooth slide
                        ease: "power2.out",
                        scrollTrigger: {
                            trigger: item,
                            start: "top 85%",  // start when item is near viewport bottom
                            toggleActions: "play none none reverse",
                        }
                    }
                );
            });
        });
    </script>
</body>

</html>