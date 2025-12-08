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

        <div class="hidden lg:block fixed inset-0 -z-10 bg-no-repeat bg-center bg-cover"
            style="background-image: url('{{ asset('images/Background.svg') }}');">
        </div>

        <!-- Hero Section -->
        <section class="w-full mx-auto mt-[140px] bg-[#ffffff]/20 text-center relative overflow-hidden">
            <div class="testimoniol1 hidden lg:block"></div>
            <!-- Tag -->
            <div style="color: var(--Black, #171717); text-align: center; font-size: 18px; font-style: normal; font-weight: 400; line-height: normal;"
                class="inline-block font-product-sans-regular bg-gray-50 px-4 py-1 rounded-full shadow-sm mb-4 border border-gray-100 relative">
                #1 Productivity Software
            </div>

            <!-- Title -->
            <h1 style="color: #000; line-height: normal; letter-spacing: -1.77px;"
                class="max-w-6xl mx-auto font-product-sans-bold text-[59px] relative z-10">
                <span class="text-[#3384FF]">Just Driving</span> – Dit komplette digitale <br /> system til din
                køreskole
            </h1>

            <!-- Subtitle -->
            <p style="color: var(--Body-text, #666680); text-align: center; line-height: 38px; letter-spacing: -0.48px;"
                class="mt-6 relative z-10 font-manrope-bold text-[24px]">
                Danmarks mest intuitive alt-i-én platform til køreskoler.
                Undervisning, <br /> booking, betaling og administration – på web og app
            </p>

            <div class="testimoniol2 hidden lg:block"></div>
            <div class="testimoniol3 hidden lg:block"></div>

            <!-- CTA Button -->
            <div class="mt-8 relative z-10">
                <a href="#"
                    class="inline-flex items-center bg-[#3384FF] text-[16px] text-white px-6 py-3 rounded-xl font-bold shadow-md hover:bg-[#2563EB] transition">
                    <img src="{{ asset('images/energy.png') }}" alt="Apple Logo" class="w-4 h-4 mr-2" /> Try 14 days
                    free
                </a>
            </div>

            <!-- Rating Text -->
            <div class="flex flex-col sm:flex sm:flex-row items-center mt-[16px] justify-center">
                <img src="{{ asset('images/stars.png') }}" alt="Apple Logo" class=" mr-2" />
            </div>

            <!-- Laptop Mockup with Responsive Video -->
            <!-- <div id="videoContainer" class="relative w-full h-[30vw] overflow-hidden mt-10">
                <video id="mockupVideo" autoplay loop muted playsinline preload="auto"
                    poster="https://res.cloudinary.com/dejgep5l8/image/upload/v1760624710/laptopThumbnail.jpg"
                    class="w-[60vw] h-full mx-auto object-cover rounded-2xl shadow-lg transition-transform duration-500 hover:scale-105 hover:shadow-2xl will-change-transform backface-hidden">
                    <source
                        src="https://res.cloudinary.com/dejgep5l8/video/upload/f_auto,q_auto:good/v1760624710/newLaptopVideo_yx7ttf.mp4"
                        type="video/mp4" />
                    Your browser does not support the video tag.
                </video>
            </div> -->
            <img src="{{ asset('images/newLaptop.png') }}" alt="Laptop"
                class="w-[500px] sm:w-[700px] md:w-[1000px] mx-auto mt-10">
        </section>

        <!-- Client Section -->
        <section class="w-full mx-auto text-center relative bg-[#ffffff]/70 py-1 sm:py-5">
            <div class="relative py-10 flex flex-col items-center justify-center"
                style="background-image: url('{{ asset('images/clientBackground.png') }}'); background-size: cover; background-position: center;">
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
        <section class="w-full bg-gradient-to-b from-[#ffffff]/60 via-[#ffffff]/70 to-[#ffffff] pt-[165px] pb-[70px]">
            <div class="w-[90vw] lg:max-w-[1280px] mx-auto text-center relative">
                <!-- Tag -->
                <div style="color: var(--Black, #171717); text-align: center; line-height: 30px; letter-spacing: -0.4px; text-transform: uppercase;"
                    class="inline-block font-manrope-medium text-[20px] bg-gray-50 px-4 py-1 rounded-full shadow-sm mb-4 border border-gray-100 relative">
                    Nøglefunktioner
                </div>

                <!-- Title -->
                <p style="color: #171717; text-align: center; font-size: 64px; line-height: 60px; letter-spacing: -1.92px;"
                    class="relative font-product-sans-bold z-10">
                    Alt din køreskole <span class="text-[#3384FF]"> behøver</span> , samlet ét sted
                </p>

                <!-- Subtitle -->
                <p style="color: var(--Grey, #858599); text-align: center; line-height: 30px; letter-spacing: -0.48px;"
                    class="w-[80%] mx-auto mt-4 text-[24px] font-manrope-medium relative z-10">
                    Med just driving får du et moderne, driftssikkert system, som giver
                    overblik og sparer tid. Alt er
                    digitalt, automatisk og bygget til danske køreskolers behov. <span class="text-black font-bold">Du
                        får
                        bl.a.:
                    </span></p>

                <!-- Cards Grid -->
                <div class="grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-3 gap-6 mt-[64px]">
                    @foreach ($features as $feature)
                        <div style="border: 4px solid rgba(255, 255, 255, 0.40)"
                            class="bg-[#F8F8F8] p-1 rounded-[40px] shadow-sm transition-all duration-300 ease-out hover:-translate-y-2 hover:shadow-xl hover:bg-white">
                            <!-- Icon Section -->
                            <div
                                class="bg-[#EAEFF4] py-11 px-[135px] flex items-center justify-center rounded-t-[40px] transition-all duration-300 hover:bg-[#DCE8F5]">
                                <div
                                    class="mx-auto rounded-lg flex items-center justify-center transform transition-transform duration-300 hover:scale-110">
                                    <img src="{{ $feature['icon'] }}" alt="Icon" class="w-20 h-20" />
                                </div>
                            </div>

                            <!-- Text Section -->
                            <div class="flex flex-col my-3 pl-3 space-y-6 items-start transition-all duration-300">
                                <h4 style="color: var(--Pallet-1-Dark, #1B1C31);"
                                    class="text-start font-manrope-bold text-[24px] leading-[33px] tracking-[-0.72px]">
                                    {{ $feature['title'] }}
                                </h4>

                                <p style="color: var(--Grey, #858599);"
                                    class="text-start w-[96%] font-manrope-medium text-[16px] leading-[30px] tracking-[-0.32px]">
                                    {{ $feature['description'] }}
                                </p>

                                <div
                                    class="flex items-center justify-center cursor-pointer gap-2 hover:translate-x-1 transition-transform duration-300">
                                    <p class="inline-block text-[#3384FF] text-[16px] font-normal hover:underline">
                                        Læs mere
                                    </p>
                                    <img src="{{ asset('images/arrow-right.png') }}" alt="Arrow"
                                        class="inline-block mt-1" />
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>

        <!-- Section 3 -->
        <section class="w-full bg-[#f3f8fd] mx-auto px-[73px] py-[125px] text-center relative overflow-hidden">
            <!-- Title -->
            <p style="color: var(--Black, #171717);"
                class="text-center font-manrope-bold text-[50px] leading-[60px] tracking-[-1.5px] relative z-10">
                Med <span class="text-[#3384FF]">Just Driving</span> får du ro i maven og tid til det vigtigste: <br />
                at
                undervise dine elever og drive din
                forretning.
            </p>

            <!-- Subtitle -->
            <p style="color: var(--Grey, #858599);"
                class="w-[90vw] md:w-[40vw] max-w-xl mx-auto mt-6 text-center leading-[30px] tracking-[-0.48px] relative z-10 font-manrope-medium text-[24px]">
                Klar til at tage din køreskole til næste niveau?
            </p>

            <!-- CTA Button -->
            <div class="mt-8 relative z-10">
                <a href="#"
                    class="inline-flex items-center bg-[#3384FF] text-[16px] font-bold text-white px-6 py-3 rounded-xl shadow-md hover:bg-[#2563EB] transition">
                    Prøv Just Driving gratis
                </a>
            </div>
        </section>

        <!-- Container for three sections to prevent layout shifts -->
        <div class="w-full bg-[#ffffff]/70">
            <div class="w-[90vw] lg:max-w-[1280px] mx-auto relative space-y-[80px] mb-[50px]">
                <section id=""
                    class="scroll-section text-black flex flex-col md:flex-row items-start mt-10 gap-[48px] z-50">
                    <!-- Left Column (Image) -->
                    <div class="scroll-image-left w-full md:w-1/2 flex justify-start rounded-[px]">
                        <img src="{{ asset('images/screen1.png') }}" alt="Administration System" class="">
                    </div>

                    <!-- Right Column (Text Content) -->
                    <div class="scroll-text-right w-full md:w-1/2 space-y-2">
                        <p style="color: var(--Black, #171717);"
                            class="font-manrope-bold text-[34px] leading-normal tracking-[-1.02px]">
                            Online administrationssystem – Ét system, fuldt overblik
                        </p>
                        <p style="color: var(--Grey, #858599);"
                            class="font-manrope-medium text-[16px] leading-[24px] tracking-[-0.32px]">
                            Oprettelse og styring af elever, kørelærere og hold – med fuld lektionsoversigt og
                            fremdrift.
                        </p>

                        <ul
                            class="space-y-2 text-[#3384ff] font-manrope-medium text-[16px] leading-[30px] tracking-[-0.32px] lowercase mt-2">
                            <li class="flex items-start gap-2">
                                <img src="{{ asset('images/arrowNew.png') }}" alt="Arrow Right"
                                    class="w-4 h-4 mt-1 text-[#3384ff]">
                                <span>Automatisk aflønning, timesporing og digital håndtering af betalinger, restancer
                                    og
                                    online tilmelding via hjemmeside eller findkoreskole.dk.</span>
                            </li>
                            <li class="flex items-start gap-2">
                                <img src="{{ asset('images/arrowNew.png') }}" alt="Arrow Right"
                                    class="w-4 h-4 mt-1 text-[#3384ff]">
                                <span>Et samlet system, der giver fuldt overblik over alle afdelinger, aktiviteter og
                                    elevforløb.</span>
                            </li>
                            <li class="flex items-start gap-2">
                                <img src="{{ asset('images/arrowNew.png') }}" alt="Arrow Right"
                                    class="w-4 h-4 mt-1 text-[#3384ff]">
                                <span>Oprettelse og styring af elever, kørelærere og hold – med fuld lektionsoversigt og
                                    fremdrift.</span>
                            </li>
                        </ul>
                        <p style="color: var(--Grey, #858599);"
                            class="font-manrope-medium text-[16px] leading-[24px] tracking-[-0.32px]">
                            Mere struktur. Færre manuelle opgaver. Mere tid til undervisning.
                        </p>
                        <!-- CTA Button -->
                        <div class="mt-2 relative z-10">
                            <a href="#"
                                class="inline-flex items-center bg-[#3384FF] text-[16px] font-bold text-white px-9 py-3 rounded-xl shadow-md hover:bg-[#2563EB] transition">
                                Læs mere
                            </a>
                        </div>
                    </div>
                </section>

                <section id=""
                    class="scroll-section text-black flex flex-col md:flex-row items-start mt-10 gap-[48px] z-50">
                    <!-- Right Column (Text Content) -->
                    <div class="scroll-text-left w-full md:w-1/2 space-y-2">
                        <p style="color: var(--Black, #171717);"
                            class="font-manrope-bold text-[34px] leading-normal tracking-[-1.02px]">
                            Online undervisningssystem – Fremtidssikret læring
                        </p>
                        <p style="color: var(--Grey, #858599);"
                            class="font-manrope-medium text-[16px] leading-[24px] tracking-[-0.32px]">
                            Med Just Driving får du ét samlet undervisningssystem, der gør både fysisk og digital
                            undervisning enkel og overskuelig.
                        </p>

                        <p style="color: var(--Black, #171717);"
                            class="font-manrope-semibold text-[16px] leading-[24px] tracking-[-0.32px]">
                            Du får:
                        </p>

                        <ul
                            class="space-y-2 text-[#3384ff] font-manrope-medium text-[16px] leading-[30px] tracking-[-0.32px] lowercase mt-2">
                            <li class="flex items-start gap-2">
                                <img src="{{ asset('images/arrowNew.png') }}" alt="Arrow Right"
                                    class="w-4 h-4 mt-1 text-[#3384ff]">
                                <span>Digitale lektionsplaner og alt undervisningsmateriale samlet ét sted – klar til
                                    deling
                                    og udskrivning.</span>
                            </li>
                            <li class="flex items-start gap-2">
                                <img src="{{ asset('images/arrowNew.png') }}" alt="Arrow Right"
                                    class="w-4 h-4 mt-1 text-[#3384ff]">
                                <span>Online teoriprøver med fuld visning af elevens fremdrift og direkte integration
                                    til
                                    elevens profil.</span>
                            </li>
                            <li class="flex items-start gap-2">
                                <img src="{{ asset('images/arrowNew.png') }}" alt="Arrow Right"
                                    class="w-4 h-4 mt-1 text-[#3384ff]">
                                <span>Undervisning tilgængelig på dansk, engelsk og arabisk.</span>
                            </li>
                        </ul>

                        <!-- CTA Button -->
                        <div class="mt-2 relative z-10">
                            <a href="#"
                                class="inline-flex items-center bg-[#3384FF] text-[16px] font-bold text-white px-9 py-3 rounded-xl shadow-md hover:bg-[#2563EB] transition">
                                Læs mere
                            </a>
                        </div>
                    </div>
                    <!-- Left Column (Image) -->
                    <div class="scroll-image-right w-full md:w-1/2 flex justify-start rounded-[px]">
                        <img src="{{ asset('images/screen2.png') }}" alt="Administration System" class="">
                    </div>
                </section>

                <section id=""
                    class="scroll-section text-black flex flex-col md:flex-row items-start mt-10 gap-[48px] z-50">
                    <!-- Left Column (Image) -->
                    <div class="scroll-image-left w-full md:w-1/2 flex justify-start rounded-[px]">
                        <img src="{{ asset('images/screen3.png') }}" alt="Administration System" class="">
                    </div>

                    <!-- Right Column (Text Content) -->
                    <div class="scroll-text-right w-full md:w-1/2 space-y-2">
                        <p style="color: var(--Black, #171717);"
                            class="font-manrope-bold text-[34px] leading-normal tracking-[-1.02px]">
                            Online bookingsystem – Mere struktur, mindre spildtid
                        </p>
                        <p style="color: var(--Grey, #858599);"
                            class="font-manrope-medium text-[16px] leading-[24px] tracking-[-0.32px]">
                            Giv eleverne en nem bookingoplevelse – og få fuld kontrol over kalenderen.
                        </p>

                        <p style="color: var(--Black, #171717);"
                            class="font-manrope-semibold text-[16px] leading-[24px] tracking-[-0.32px]">
                            Fordele:
                        </p>

                        <ul
                            class="space-y-2 text-[#3384ff] font-manrope-medium text-[16px] leading-[30px] tracking-[-0.32px] lowercase mt-2">
                            <li class="flex items-start gap-2">
                                <img src="{{ asset('images/arrowNew.png') }}" alt="Arrow Right"
                                    class="w-4 h-4 mt-1 text-[#3384ff]">
                                <span>Realtidsopdateret kalender med automatiske påmindelser til elever.</span>
                            </li>
                            <li class="flex items-start gap-2">
                                <img src="{{ asset('images/arrowNew.png') }}" alt="Arrow Right"
                                    class="w-4 h-4 mt-1 text-[#3384ff]">
                                <span>Automatisk fakturering ved ekstra lektioner samt fuld synkronisering med
                                    lektionsplan
                                    og betaling</span>
                            </li>
                            <li class="flex items-start gap-2">
                                <img src="{{ asset('images/arrowNew.png') }}" alt="Arrow Right"
                                    class="w-4 h-4 mt-1 text-[#3384ff]">
                                <span>Fleksibel løsning, der passer til både enkeltlærere og større køreskoler.</span>
                            </li>
                        </ul>

                        <!-- CTA Button -->
                        <div class="mt-2 relative z-10">
                            <a href="#"
                                class="inline-flex items-center bg-[#3384FF] text-[16px] font-bold text-white px-9 py-3 rounded-xl shadow-md hover:bg-[#2563EB] transition">
                                Læs mere
                            </a>
                        </div>
                    </div>
                </section>

                <section id=""
                    class="scroll-section text-black flex flex-col md:flex-row items-start mt-10 gap-[48px] z-50">
                    <!-- Right Column (Text Content) -->
                    <div class="scroll-text-left w-full md:w-1/2 space-y-4">
                        <p style="color: var(--Black, #171717);"
                            class="font-product-sans-bold text-[28px] leading-normal capitalize">
                            Digitalt økonomisystem – Overblik uden bøvl
                        </p>
                        <p style="color: var(--Grey, #858599);"
                            class="font-product-sans-regular text-[16px] capitalize">
                            Et moderne økonomisystem, der håndterer hele elevens betalingsforløb automatisk.
                        </p>

                        <p style="color: var(--Black, #171717);"
                            class="font-manrope-semibold text-[16px] leading-[24px] tracking-[-0.32px]">
                            Funktioner:
                        </p>

                        <ul
                            class="space-y-2 text-[#3384ff] font-manrope-medium text-[16px] leading-[30px] tracking-[-0.32px] lowercase mt-2">
                            <li class="flex items-start gap-2">
                                <img src="{{ asset('images/arrowNew.png') }}" alt="Arrow Right"
                                    class="w-4 h-4 mt-1 text-[#3384ff]">
                                <span>Kun betalende elever kan booke, så du undgår restancer.</span>
                            </li>
                            <li class="flex items-start gap-2">
                                <img src="{{ asset('images/arrowNew.png') }}" alt="Arrow Right"
                                    class="w-4 h-4 mt-1 text-[#3384ff]">
                                <span>Kortbetaling, MobilePay og automatisk fakturering i ét system.</span>
                            </li>
                            <li class="flex items-start gap-2">
                                <img src="{{ asset('images/arrowNew.png') }}" alt="Arrow Right"
                                    class="w-4 h-4 mt-1 text-[#3384ff]">
                                <span>Fuld transaktionsoversigt og bogholderi-integration for nem økonomistyring.</span>
                            </li>
                        </ul>

                        <!-- CTA Button -->
                        <div class="mt-2 relative z-10">
                            <a href="#"
                                class="inline-flex items-center bg-[#3384FF] text-[16px] font-bold text-white px-9 py-3 rounded-xl shadow-md hover:bg-[#2563EB] transition">
                                Læs mere
                            </a>
                        </div>
                    </div>
                    <!-- Left Column (Image) -->
                    <div class="scroll-image-right w-full md:w-1/2 flex justify-start">
                        <img src="{{ asset('images/screen4.png') }}" alt="Administration System" class="">
                    </div>
                </section>
            </div>
        </div>

        <!-- Section -->
        <section class="w-full bg-[#ffffff]/70 mx-auto pb-[138px] text-center relative">
            <!-- CTA Button -->
            <div class="mt-[60px] flex flex-col md:flex-row items-center justify-center gap-4 relative z-10">
                <a href="#"
                    class="flex flex-col justify-center items-center gap-[9.882px] w-[309px] h-[74px] py-[19.765px] px-[10px] rounded-[19.765px] border-[1.235px] border-[rgba(255,255,255,0.40)] bg-[#3384FF] text-white text-[20px] font-product-sans-bold hover:bg-[#2563EB] transition">
                    Prøv gratis nu
                </a>
                <a href="#"
                    class="flex flex-col justify-center items-center gap-[9.882px] w-[276px] h-[74px] py-[19.765px] px-[44.471px] rounded-[19.765px] border-[1.235px] border-[#377DFF] bg-[#E8F2FF] text-[#3384FF] text-[20px] font-product-sans-bold hover:bg-[#3384FF] hover:text-white transition">
                    Læs mere
                </a>
            </div>
        </section>

        <!-- Section  -->
        <section class="w-full bg-[#f3f8fd] mx-auto px-[73px] py-[100px] text-center relativeF">
            <!-- Title -->
            <p style="color: var(--Black, #171717);"
                class="text-center font-manrope-bold text-[50px] leading-[60px] tracking-[-1.5px] relative z-10">
                Tag din køreskole til næste niveau
            </p>

            <!-- Subtitle -->
            <p style="color: var(--Grey, #858599);"
                class="w-[90vw] font-manrope-medium text-[24px] mt-6 text-center leading-[30px] tracking-[-0.48px] relative z-10">
                Gør administrationen enkel med én samlet løsning. Just Driving håndterer alle daglige opgaver for
                dig,<br />
                minimerer fejl og sparer tid, så du kan fokusere på undervisningen. Systemet er udviklet med danske
                køreskoler<br /> og bygger på moderne teknologi, der kan skalere i takt med din forretning.
            </p>

            <!-- CTA Button -->
            <div class="mt-8 relative z-10">
                <a href="#"
                    class="inline-flex items-center bg-[#3384FF] text-[16px] font-bold text-white px-6 py-3 rounded-xl shadow-md hover:bg-[#2563EB] transition">
                    Prøv Just Driving gratis
                </a>
            </div>
        </section>

        <!-- Payment Flow Section -->
        <section class="w-full bg-[#ffffff]/70 mx-auto pt-16 text-center relative">
            <div class="w-[90vw] lg:max-w-[1280px] mx-auto px-6">
                <!-- Main Heading -->
                <h4 style="color: #000;"
                    class="text-center font-product-sans-bold text-[28px] leading-normal capitalize relative z-10">
                    Betalingsflow – Sikkert, Enkelt Og 100% Automatiseret
                </h4>

                <!-- Subheading -->
                <p style="color: #858599;"
                    class="text-center font-product-sans-bold text-[16px] leading-normal capitalize mt-4 relative z-10">
                    Med Just Driving slipper du for manuelle afstemninger og jagt på betalinger. Systemet håndterer
                    alt<br />
                    automatisk – fra adgang til betaling, booking og kvittering.
                </p>

                <!-- Three Feature Cards -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 justify-center gap-6 mt-10">
                    <!-- Card 1 -->
                    <div style="border: 4px solid #F0F2F5"
                        class="group bg-white rounded-[40px] p-6 shadow-sm border border-gray-100 hover:-translate-y-2 hover:border-[#3384FF]/30 transition-all duration-300 ease-out cursor-pointer">
                        <div class="flex flex-col items-start gap-4">
                            <!-- Clock Icon -->
                            <div
                                class="transform transition-transform duration-300 group-hover:scale-110 group-hover:rotate-6 p-4 bg-[#f3f8fd] rounded-[20px]">
                                <img src="{{ asset('images/clock.png') }}" alt="Icon" class="h-10 w-10">
                            </div>
                            <h4 style="color: var(--Pallet-1-Dark, #1B1C31);"
                                class="font-manrope-bold text-[24px] leading-[33px] tracking-[-0.72px]">Slut med
                                spildtid</h4>
                            <p style="color: var(--Grey, #858599);"
                                class="font-manrope-bold text-[16px] leading-normal tracking-[-0.32px] text-left group-hover:text-[#3384FF] transition-colors duration-300">
                                Eleven køber adgang direkte i systemet – enten til hold, lektioner eller pakker. Når
                                betalingen er gennemført, gives der automatisk adgang.
                            </p>
                        </div>
                    </div>

                    <!-- Card 2 -->
                    <div style="border: 4px solid #F0F2F5"
                        class="group bg-white rounded-[40px] p-6 shadow-sm border border-gray-100 hover:-translate-y-2 hover:border-[#3384FF]/30 transition-all duration-300 ease-out cursor-pointer">
                        <div class="flex flex-col items-start gap-4">
                            <!-- Clock Icon -->
                            <div
                                class="transform transition-transform duration-300 group-hover:scale-110 group-hover:rotate-6 bg-[#f3f8fd] rounded-[20px]">
                                <img src="{{ asset('images/clock2.png') }}" alt="Icon" class="">
                            </div>
                            <h4 style="color: var(--Pallet-1-Dark, #1B1C31);"
                                class="font-manrope-bold text-[24px] leading-[33px] text-start tracking-[-0.72px]">Slut
                                Betaling
                                med det samme</h4>
                            <p style="color: var(--Grey, #858599);"
                                class="font-manrope-bold text-[16px] leading-normal tracking-[-0.32px] text-left group-hover:text-[#3384FF] transition-colors duration-300">
                                Ingen betaling = ingen booking. Elever kan kun booke lektioner, når de har betalt – det
                                sikrer likviditet og sparer dig for administration.
                            </p>
                        </div>
                    </div>

                    <!-- Card 3 -->
                    <div style="border: 4px solid #F0F2F5"
                        class="group bg-white rounded-[40px] p-6 shadow-sm border border-gray-100 hover:-translate-y-2 hover:border-[#3384FF]/30 transition-all duration-300 ease-out cursor-pointer">
                        <div class="flex flex-col items-start gap-4">
                            <!-- Clock Icon -->
                            <div
                                class="transform transition-transform duration-300 group-hover:scale-110 group-hover:rotate-6 bg-[#f3f8fd] rounded-[20px]">
                                <img src="{{ asset('images/clock3.png') }}" alt="Icon" class="">
                            </div>
                            <h4 style="color: var(--Pallet-1-Dark, #1B1C31);"
                                class="font-manrope-bold text-[24px] leading-[33px] tracking-[-0.72px]">Høj sikkerhed
                            </h4>
                            <p style="color: var(--Grey, #858599);"
                                class="font-manrope-bold text-[16px] leading-normal tracking-[-0.32px] text-left group-hover:text-[#3384FF] transition-colors duration-300">
                                Alle betalinger behandles via vores danske betalingspartner Bambora, som lever op til de
                                højeste standarder for datasikkerhed og betalingsinfrastruktur.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Section 5 -->
        <section class="w-full bg-[#ffffff]/70 mx-auto pt-[180px] text-center relative overflow-hidden">
            <!-- Tag -->
            <div style="color: var(--Black, #171717); text-align: center; font-family: 'Product Sans'; font-size: 18px; font-style: normal; font-weight: 400; line-height: normal;"
                class="inline-block bg-white px-4 py-1 rounded-full shadow-md mb-[28px] relative">
                Tillid fra førende skoler
            </div>

            <!-- Title -->
            <h4 style="color: var(--Black, #171717); text-align: center; font-size: 50px; font-style: normal; font-weight: 900; line-height: 52.5px;"
                class="relative z-10 font-product-sans-bold">
                Betroet af køreskoler over hele Danmark
            </h4>

            <!-- Subtitle -->
            <p style="color: var(--Grey, #747474); text-align: center; font-family: 'Product Sans'; font-size: 24px; font-style: normal; font-weight: 400; line-height: 41.6px;"
                class="w-[90vw] md:w-[50vw] mx-auto mt-4 relative z-10">
                Tag ikke bare vores ord for det. Hør fra teams, der har <br /> forbedret deres produktivitet med os.
            </p>

            <!-- Logo Carousel Wrapper -->
            <div class="mt-[55px] w-full relative">
                <!-- Fading edges -->
                <div
                    class="pointer-events-none absolute inset-y-0 left-0 w-32 bg-gradient-to-r from-white to-transparent z-20">
                </div>
                <div
                    class="pointer-events-none absolute inset-y-0 right-0 w-32 bg-gradient-to-l from-white to-transparent z-20">
                </div>

                <!-- Row 1 (left to right) -->
                <div class="flex animate-scroll-left space-x-2 w-max">
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
                <div class="flex animate-scroll-right space-x-2 w-max mt-8">
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
        <section class="w-full bg-[#ffffff] pt-[160px] mx-auto text-center pb-10 relative">
            <div style="color: var(--Black, #171717); text-align: center; font-family: 'Product Sans'; font-size: 18px; font-style: normal; font-weight: 400; line-height: normal;"
                class="inline-block bg-white px-4 py-1 rounded-full shadow-md mb-[50px] relative">
                Spørgsmål? Vi har svarene
            </div>

            <!-- Title -->
            <h1 style="color: var(--Black, #171717); text-align: center; font-family: 'Product Sans'; font-size: 50px; font-style: normal; font-weight: 700; line-height: 103.2px; letter-spacing: -1px;"
                class="relative">
                Ofte stillede <span class="text-[#3384FF]">spørgsmål</span>
            </h1>

            <!-- Subtitle -->
            <p style="color: var(--Grey, #747474); text-align: center; font-family: 'Product Sans'; font-size: 24px; font-style: normal; font-weight: 400; line-height: 41.6px;"
                class="w-[90vw] md:w-[50vw] mx-auto mt-4 relative">
                Find hurtige svar på nogle af de mest almindelige <br /> spørgsmål om Just Driving.
            </p>

            <!-- FAQ Section -->
            <div class="w-[90vw] md:w-[60vw] mx-auto mt-10 text-left">
                @php
                    $faqs = [
                        ['question' => 'Hvordan fungerer forøge?', 'answer' => 'forøge hjælper skoler med at automatisere planlægning, booking og betalinger på en nem og effektiv måde.'],
                        ['question' => 'Er der en gratis prøveperiode?', 'answer' => 'Ja, vi tilbyder en gratis prøveperiode, så du kan prøve systemet, før du forpligter dig.'],
                        ['question' => 'Hvordan kan jeg opsige mit abonnement?', 'answer' => 'Du kan til enhver tid opsige dit abonnement fra dit kontrolpanel under indstillinger.'],
                        ['question' => 'Tilbyder I kundesupport?', 'answer' => 'Ja, vores supportteam er tilgængeligt via e-mail og chat for at hjælpe dig med alt, du måtte have brug for.'],
                        ['question' => 'Er mine data sikre hos jer?', 'answer' => 'Ja, vi bruger moderne kryptering og sikkerhedsforanstaltninger for at beskytte alle dine data.'],
                    ];
                 @endphp

                @foreach ($faqs as $index => $faq)
                    <div class="bg-transparent p-2">
                        <button id="faq-{{ $index }}"
                            style="border: 4px solid rgba(255, 255, 255, 0.40); box-shadow: 0 3px 8px 0 rgba(20, 27, 52, 0.04);"
                            class="faq-question rounded-[24px] px-6 py-4 flex justify-between items-center w-full text-left focus:outline-none"
                            data-index="{{ $index }}">
                            <span
                                style="color: var(--Black, #171717); font-family: 'Product Sans'; font-size: 24px; font-style: normal; font-weight: 700; line-height: normal;">{{ $faq['question'] }}</span>
                            <div
                                class="icon w-6 h-6 flex items-center p-1 justify-center bg-[#3384FF] rounded-full text-white transition-all duration-300">
                                <i class="faq-icon" data-lucide="plus"></i>
                            </div>
                        </button>

                        <div
                            class="faq-answer max-h-0 opacity-0 px-4 py-0 rounded-xl bg-white overflow-hidden transition-all duration-500 ease-in-out mt-2 text-[#858599]">
                            <p class="text-[20px] font-normal leading-relaxed py-2">{{ $faq['answer'] }}</p>
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

            // Smooth scroll animations for sections (250-473)
            gsap.utils.toArray(".scroll-section").forEach((section, index) => {
                const imageLeft = section.querySelector(".scroll-image-left");
                const imageRight = section.querySelector(".scroll-image-right");
                const textLeft = section.querySelector(".scroll-text-left");
                const textRight = section.querySelector(".scroll-text-right");

                // Animate images from left
                if (imageLeft) {
                    gsap.fromTo(imageLeft,
                        { x: -150, opacity: 0 },
                        {
                            x: 0,
                            opacity: 1,
                            duration: 1.2,
                            ease: "power3.out",
                            scrollTrigger: {
                                trigger: section,
                                start: "top 80%",
                                toggleActions: "play none none reverse",
                            }
                        }
                    );
                }

                // Animate images from right
                if (imageRight) {
                    gsap.fromTo(imageRight,
                        { x: 150, opacity: 0 },
                        {
                            x: 0,
                            opacity: 1,
                            duration: 1.2,
                            ease: "power3.out",
                            scrollTrigger: {
                                trigger: section,
                                start: "top 80%",
                                toggleActions: "play none none reverse",
                            }
                        }
                    );
                }

                // Animate text from right
                if (textRight) {
                    gsap.fromTo(textRight,
                        { x: 100, opacity: 0 },
                        {
                            x: 0,
                            opacity: 1,
                            duration: 1.2,
                            ease: "power3.out",
                            delay: 0.2,
                            scrollTrigger: {
                                trigger: section,
                                start: "top 80%",
                                toggleActions: "play none none reverse",
                            }
                        }
                    );
                }

                // Animate text from left
                if (textLeft) {
                    gsap.fromTo(textLeft,
                        { x: -100, opacity: 0 },
                        {
                            x: 0,
                            opacity: 1,
                            duration: 1.2,
                            ease: "power3.out",
                            delay: 0.2,
                            scrollTrigger: {
                                trigger: section,
                                start: "top 80%",
                                toggleActions: "play none none reverse",
                            }
                        }
                    );
                }
            });
        });
    </script>
</body>

</html>