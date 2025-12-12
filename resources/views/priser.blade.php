<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Just Driving</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/lucide@latest"></script>


    <link rel="icon" type="image/x-icon" href="{{ asset('images/favicon.png') }}">

    <link rel="stylesheet" href="/css/styles.css">
    <!-- Splide CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css" />

</head>

<body>
    <div class="content-container" style="background-image: url('{{ asset('images/Background.svg') }}'); background-attachment: scroll; background-repeat: repeat; background-position: center top; background-size: auto;">

        <!-- Hero Backgrounds -->
        <!-- <div class="hidden md:block hero-bg-right"></div>
        <div class="hidden md:block hero-bg-left"></div> -->

        <div class="absolute top-0 left-0 w-[200px] h-[200px]"
            style="background: radial-gradient(circle at top left, #3384FF99 0%, #3384FF4D 30%, #93b7ed1a 60%, transparent 70%)">
        </div>

        <div class="absolute top-0 right-0 w-[200px] h-[200px]"
            style="background: radial-gradient(circle at top right, #3384FF99 0%, #3384FF4D 30%, #93b7ed1a 60%, transparent 70%)">
        </div>

        @include('layouts.header')
<!-- 
        <div class="hidden lg:block fixed inset-0 -z-10 bg-no-repeat bg-center bg-cover"
            style="background-image: url('{{ asset('images/Background.svg') }}');">
        </div> -->

        <!-- Hero Section -->
        <section class="w-[90vw] md:max-w-[1280px] mx-auto mt-[140px] text-center relative">
            <div class="px-6">
                <!-- Main Heading -->
                <h4 style="color: #181B32; text-align: center; line-height: normal; letter-spacing: -2px; text-transform: capitalize;"
                    class="relative z-10 mb-3 font-product-sans-bold text-[59px]">
                    Fra Kun <span class="text-[#3384FF]">149 Kr.</span>/Måned Pr. Elev
                </h4>

                <!-- First Descriptive Paragraph -->
                <p style="color: var(--Body-text, #666680); text-align: center; line-height: 24px;"
                    class="relative z-10 font-manrope-bold text-[24px]">
                    En enkel, gennemsigtig pris — med alt inkluderet. <br /> Ingen skjulte gebyrer. Ingen moduler. Én
                    platform
                    til hele din køreskole.
                </p>

                <div class="mt-[40px] flex flex-col md:flex-row items-center justify-center gap-4 relative z-10">
                    <a href="#"
                        class="flex flex-col justify-center items-center gap-[9.882px] w-[274px] h-[74px] py-[19.765px] px-[44.471px] rounded-[19.765px] border-[1.235px] border-[rgba(255,255,255,0.40)] bg-[#3384FF] text-white text-[20px] font-product-sans-bold hover:bg-[#2563EB] transition"
                        style="box-shadow: 0 24.706px 43.235px 0 rgba(51, 132, 255, 0.20);">
                        Opret gratis konto
                    </a>
                </div>
            </div>
        </section>

        <!-- Features Included Section -->
        <section id="pricing"
            class="w-full bg-gradient-to-b from-transparent via-[#ffffff]/30 to-[#ffffff] mt-[114px] relative">
            <div class="w-[90vw] md:max-w-[1280px] mx-auto">
                <!-- Main Heading -->
                <h4 style="color: var(--Black, #171717); text-align: center; font-size: 40px; font-style: normal; font-weight: 900; line-height: 52.5px;"
                    class="mb-[62px] font-product-sans-bold">
                    Alt dette er inkluderet – samlet ét sted
                </h4>

                <!-- Two Columns Grid -->
                <div class="flex flex-col lg:flex-row gap-3 max-w-7xl mx-auto mb-8 items-stretch">
                    <!-- Left Column - 2 rows -->
                    <div class="flex flex-col gap-3 flex-1">
                        <!-- System og administration -->
                        <div class="bg-[#f7fafc] rounded-xl shadow-sm border border-[#cfdee8] p-5 flex-1 flex flex-col">
                            <h4 class="text-[22px] text-center font-bold text-black mb-4">System og administration</h3>
                                <ul style="color: #0D171C; font-feature-settings: 'dlig' on; font-size: 17.306px; line-height: 26.625px;"
                                    class="space-y-3 font-manrope-regular">
                                    <li class="flex items-start gap-2">
                                        <img src="{{ asset('images/simplicitet.png') }}"
                                            class="w-5 h-5 mt-0.5 flex-shrink-0" alt="Checkmark">
                                        <span>Online administrationssystem</span>
                                    </li>
                                    <li class="flex items-start gap-2">
                                        <img src="{{ asset('images/simplicitet.png') }}"
                                            class="w-5 h-5 mt-0.5 flex-shrink-0" alt="Checkmark">
                                        <span>Medarbejder-, elev- og
                                            holdadministration</span>
                                    </li>
                                    <li class="flex items-start gap-2">
                                        <img src="{{ asset('images/simplicitet.png') }}"
                                            class="w-5 h-5 mt-0.5 flex-shrink-0" alt="Checkmark">
                                        <span>Adgang til alle elevers oplysninger</span>
                                    </li>
                                    <li class="flex items-start gap-2">
                                        <img src="{{ asset('images/simplicitet.png') }}"
                                            class="w-5 h-5 mt-0.5 flex-shrink-0" alt="Checkmark">
                                        <span>Ubegrænset antal elever, kørelærere og
                                            hold</span>
                                    </li>
                                    <li class="flex items-start gap-2">
                                        <img src="{{ asset('images/simplicitet.png') }}"
                                            class="w-5 h-5 mt-0.5 flex-shrink-0" alt="Checkmark">
                                        <span>Kørelærer- og elevnotater</span>
                                    </li>
                                    <li class="flex items-start gap-2">
                                        <img src="{{ asset('images/simplicitet.png') }}"
                                            class="w-5 h-5 mt-0.5 flex-shrink-0" alt="Checkmark">
                                        <span>Mobil-app til elever og kørelærere</span>
                                    </li>
                                    <li class="flex items-start gap-2">
                                        <img src="{{ asset('images/simplicitet.png') }}"
                                            class="w-5 h-5 mt-0.5 flex-shrink-0" alt="Checkmark">
                                        <span>E-mail og support tickets</span>
                                    </li>
                                    <li class="flex items-start gap-2">
                                        <img src="{{ asset('images/simplicitet.png') }}"
                                            class="w-5 h-5 mt-0.5 flex-shrink-0" alt="Checkmark">
                                        <span>Flere afdelinger med central styring</span>
                                    </li>
                                    <li class="flex items-start gap-2">
                                        <img src="{{ asset('images/simplicitet.png') }}"
                                            class="w-5 h-5 mt-0.5 flex-shrink-0" alt="Checkmark">
                                        <span>GDPR-sikker databehandling og fuld
                                            adgangsstyring</span>
                                    </li>
                                    <li class="flex items-start gap-2">
                                        <img src="{{ asset('images/simplicitet.png') }}"
                                            class="w-5 h-5 mt-0.5 flex-shrink-0" alt="Checkmark">
                                        <span>Hosting i Danmark med backup hver time, dag,
                                            uge og
                                            måned</span>
                                    </li>
                                </ul>
                        </div>

                        <!-- Undervisning og læring -->
                        <div class="bg-[#f7fafc] rounded-xl shadow-sm border border-[#cfdee8] p-5 flex-1 flex flex-col">
                            <h3 class="text-[22px] text-center font-bold text-black mb-4">Undervisning og læring</h3>
                            <ul style="color: #0D171C; font-feature-settings: 'dlig' on; font-size: 17.306px; font-style: normal; line-height: 26.625px;"
                                class="space-y-3 font-manrope-regular">
                                <li class="flex items-start gap-2">
                                    <img src="{{ asset('images/simplicitet.png') }}"
                                        class="w-5 h-5 mt-0.5 flex-shrink-0" alt="Checkmark">
                                    <span>Online teoriundervisning med tekst, billeder og
                                        video</span>
                                </li>
                                <li class="flex items-start gap-2">
                                    <img src="{{ asset('images/simplicitet.png') }}"
                                        class="w-5 h-5 mt-0.5 flex-shrink-0" alt="Checkmark">
                                    <span>Undervisning med automatisk afvikling</span>
                                </li>
                                <li class="flex items-start gap-2">
                                    <img src="{{ asset('images/simplicitet.png') }}"
                                        class="w-5 h-5 mt-0.5 flex-shrink-0" alt="Checkmark">
                                    <span>Test elever direkte i klassen</span>
                                </li>
                                <li class="flex items-start gap-2">
                                    <img src="{{ asset('images/simplicitet.png') }}"
                                        class="w-5 h-5 mt-0.5 flex-shrink-0" alt="Checkmark">
                                    <span>Materiale på dansk, engelsk og arabisk</span>
                                </li>
                                <li class="flex items-start gap-2">
                                    <img src="{{ asset('images/simplicitet.png') }}"
                                        class="w-5 h-5 mt-0.5 flex-shrink-0" alt="Checkmark">
                                    <span>Integration med <span class="font-product-sans-bold">e-teori.dk</span></span>
                                </li>
                                <li class="flex items-start gap-2">
                                    <img src="{{ asset('images/simplicitet.png') }}"
                                        class="w-5 h-5 mt-0.5 flex-shrink-0" alt="Checkmark">
                                    <span>Elevdokumentbank og digital opgaveaflevering</span>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <!-- Right Column - 3 rows -->
                    <div class="flex flex-col gap-3 flex-1">
                        <!-- Økonomi og betaling -->
                        <div class="bg-[#f7fafc] rounded-xl shadow-sm border border-[#cfdee8] p-5 flex-1 flex flex-col">
                            <h3 class="text-[22px] text-center font-bold text-black mb-4">Økonomi og betaling</h3>
                            <ul style="color: #0D171C; font-feature-settings: 'dlig' on; font-size: 17.306px; line-height: 26.625px;"
                                class="space-y-3 font-manrope-regular">
                                <li class="flex items-start gap-2">
                                    <img src="{{ asset('images/simplicitet.png') }}"
                                        class="w-5 h-5 mt-0.5 flex-shrink-0" alt="Checkmark">
                                    <span>Online betaling direkte i systemet</span>
                                </li>
                                <li class="flex items-start gap-2">
                                    <img src="{{ asset('images/simplicitet.png') }}"
                                        class="w-5 h-5 mt-0.5 flex-shrink-0" alt="Checkmark">
                                    <span>Integration med <span class="font-product-sans-bold">Just-pay.dk</span></span>
                                </li>
                                <li class="flex items-start gap-2">
                                    <img src="{{ asset('images/simplicitet.png') }}"
                                        class="w-5 h-5 mt-0.5 flex-shrink-0" alt="Checkmark">
                                    <span>Fuld betalingshistorik og oversigt</span>
                                </li>
                                <li class="flex items-start gap-2">
                                    <img src="{{ asset('images/simplicitet.png') }}"
                                        class="w-5 h-5 mt-0.5 flex-shrink-0" alt="Checkmark">
                                    <span>Automatisk fakturering og kvittering</span>
                                </li>
                                <li class="flex items-start gap-2">
                                    <img src="{{ asset('images/simplicitet.png') }}"
                                        class="w-5 h-5 mt-0.5 flex-shrink-0" alt="Checkmark">
                                    <span>Online faktura og restancestyring</span>
                                </li>
                                <li class="flex items-start gap-2">
                                    <img src="{{ asset('images/simplicitet.png') }}"
                                        class="w-5 h-5 mt-0.5 flex-shrink-0" alt="Checkmark">
                                    <span>Automatisk adgangsbegrænsning ved manglende
                                        betaling</span>
                                </li>
                            </ul>
                        </div>

                        <!-- Booking og tilmelding -->
                        <div class="bg-[#f7fafc] rounded-xl shadow-sm border border-[#cfdee8] p-5 flex-1 flex flex-col">
                            <h3 class="text-[22px] text-center font-bold text-black mb-4">Booking og tilmelding</h3>
                            <ul style="color: #0D171C; font-feature-settings: 'dlig' on; font-size: 17.306px; line-height: 26.625px;"
                                class="space-y-3 font-manrope-regular">
                                <li class="flex items-start gap-2">
                                    <img src="{{ asset('images/simplicitet.png') }}"
                                        class="w-5 h-5 mt-0.5 flex-shrink-0" alt="Checkmark">
                                    <span>Online bookingsystem</span>
                                </li>
                                <li class="flex items-start gap-2">
                                    <img src="{{ asset('images/simplicitet.png') }}"
                                        class="w-5 h-5 mt-0.5 flex-shrink-0" alt="Checkmark">
                                    <span>Tilmeldingsformular Integreret på din hjemmeside
                                        (API)</span>
                                </li>
                                <li class="flex items-start gap-2">
                                    <img src="{{ asset('images/simplicitet.png') }}"
                                        class="w-5 h-5 mt-0.5 flex-shrink-0" alt="Checkmark">
                                    <span>Digital lektionsplan og elevtilknytning</span>
                                </li>
                                <li class="flex items-start gap-2">
                                    <img src="{{ asset('images/simplicitet.png') }}"
                                        class="w-5 h-5 mt-0.5 flex-shrink-0" alt="Checkmark">
                                    <span>Opret og tilknyt egne lektionsplaner</span>
                                </li>
                                <li class="flex items-start gap-2">
                                    <img src="{{ asset('images/simplicitet.png') }}"
                                        class="w-5 h-5 mt-0.5 flex-shrink-0" alt="Checkmark">
                                    <span>Automatisk elevtilmelding og lektionsflow</span>
                                </li>
                                <li class="flex items-start gap-2">
                                    <img src="{{ asset('images/simplicitet.png') }}"
                                        class="w-5 h-5 mt-0.5 flex-shrink-0" alt="Checkmark">
                                    <span>Kalenderbooking for både elev og kørelærer</span>
                                </li>
                            </ul>
                        </div>

                        <!-- Digital dokumentation og elevstyring -->
                        <div class="bg-[#f7fafc] rounded-xl shadow-sm border border-[#cfdee8] p-5 flex-1 flex flex-col">
                            <h3 class="text-[22px] text-center font-bold text-black mb-4">Digital dokumentation og
                                elevstyring</h3>
                            <ul style="color: #0D171C; font-feature-settings: 'dlig' on; font-size: 17.306px; line-height: 26.625px;"
                                class="space-y-3 font-manrope-regular">
                                <li class="flex items-start gap-2">
                                    <img src="{{ asset('images/simplicitet.png') }}"
                                        class="w-5 h-5 mt-0.5 flex-shrink-0" alt="Checkmark">
                                    <span>Digital underskrift lektionsplan</span>
                                </li>
                                <li class="flex items-start gap-2">
                                    <img src="{{ asset('images/simplicitet.png') }}"
                                        class="w-5 h-5 mt-0.5 flex-shrink-0" alt="Checkmark">
                                    <span>Digital samtykkeerklæring og GDPR-samtykke</span>
                                </li>
                                <li class="flex items-start gap-2">
                                    <img src="{{ asset('images/simplicitet.png') }}"
                                        class="w-5 h-5 mt-0.5 flex-shrink-0" alt="Checkmark">
                                    <span>Automatisk synkronisering af elevdata og
                                        status</span>
                                </li>
                                <li class="flex items-start gap-2">
                                    <img src="{{ asset('images/simplicitet.png') }}"
                                        class="w-5 h-5 mt-0.5 flex-shrink-0" alt="Checkmark">
                                    <span>Elevlogin med personlig oversigt og
                                        kommunikation</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Full Width Row - Kommunikation og påmindelser -->
                <div class="mx-auto">
                    <div class="bg-[#f7fafc] rounded-xl shadow-sm border border-[#cfdee8] p-5">
                        <h3 class="text-[22px] text-center font-bold text-black mb-6">Kommunikation og påmindelser</h3>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <!-- Left Column -->
                            <div class="space-y-3 text-[17.306px] font-manrope-regular">
                                <div class="flex items-start gap-2">
                                    <img src="{{ asset('images/simplicitet.png') }}"
                                        class="w-5 h-5 mt-0.5 flex-shrink-0" alt="Checkmark">
                                    <span class="text-sm text-black text-[17.306px]">SMS- og e-mailnotifikationer til
                                        elev og
                                        kørelærer</span>
                                </div>
                                <div class="flex items-start gap-2">
                                    <img src="{{ asset('images/simplicitet.png') }}"
                                        class="w-5 h-5 mt-0.5 flex-shrink-0" alt="Checkmark">
                                    <span class="text-sm text-black text-[17.306px]">Opret egne e-mail-skabeloner til
                                        tilmelding og
                                        påmindelser</span>
                                </div>
                            </div>
                            <!-- Right Column -->
                            <div class="space-y-3 text-[17.306px] font-manrope-regular">
                                <div class="flex items-start gap-2">
                                    <img src="{{ asset('images/simplicitet.png') }}"
                                        class="w-5 h-5 mt-0.5 flex-shrink-0" alt="Checkmark">
                                    <span class="text-sm text-black text-[17.306px]">Automatisk besked ved ændringer,
                                        aflysninger og
                                        betaling</span>
                                </div>
                                <div class="flex items-start gap-2">
                                    <img src="{{ asset('images/simplicitet.png') }}"
                                        class="w-5 h-5 mt-0.5 flex-shrink-0" alt="Checkmark">
                                    <span class="text-sm text-black text-[17.306px]">Automatisk påmindelse om betalinger
                                        og
                                        bookinger</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="w-full bg-white pt-[150px]">
            <div style="border:3px solid rgba(43, 112, 216, 0.50); ;"
                class="w-[90vw] md:max-w-[1280px] rounded-[40px] bg-[#e2ebf4] p-[50px] text-center relative mx-auto">
                <!-- Title -->
                <h4 style="color: var(--Black, #171717); text-align: center; font-size: 44px; line-height: normal; text-transform: capitalize;"
                    class="relative z-10 font-product-sans-bold">
                    Én pris — alle funktioner inkluderet
                </h4>
                <p style="text-align: center; font-feature-settings: 'dlig' on; font-size: 24px; line-height: 32px;"
                    class="w-full md:w-[80vw] mx-auto py-5 font-product-sans-regular text-[#666680]">
                    Just Driving giver dig adgang til Danmarks mest komplette platform til køreskoler. <br> Alt
                    administration, undervisning, booking og betaling samlet ét sted.
                </p>

                <div class="flex flex-col md:flex-row items-center justify-center gap-4 relative z-10">
                    <a href="#"
                        style="background: var(--blue-light, #3384FF); box-shadow: 0 20px 35px 0 rgba(51, 132, 255, 0.20); padding: 16px 36px;"
                        class="flex flex-col justify-center items-center gap-[9.882px] w-[230px] h-[74px] rounded-[19.765px] py-[19.765px] px-[40.471px] border border-[rgba(255,255,255,0.40)] text-white text-[19.76px] font-product-sans-bold hover:bg-[#2563EB] transition">
                        Prøv Just Driving
                    </a>
                    <a href="{{ route('kontakt') }}"
                        style="padding: 19.765px 44.471px; border: 1.235px solid #377DFF; box-shadow: 0 24.706px 43.235px 0 rgba(51, 132, 255, 0.20);"
                        class="flex flex-col justify-center items-center gap-[9.882px] w-[230px] h-[74px] py-[19.765px] px-[44.471px] rounded-[19.765px] bg-[#E8F2FF] text-[#3384FF] text-[19.76px] font-product-sans-bold hover:bg-[#3384FF] hover:text-white transition">
                        Kontakt Os
                    </a>
                </div>
            </div>
        </section>

        <!-- Section 5 -->
        <section class="w-full bg-white mx-auto pt-[236px] text-center relative overflow-hidden">
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
            <p style="color: var(--Grey, #858599); text-align: center; font-size: 24px; line-height: 41.6px;"
                class="w-[90vw] md:w-[50vw] mx-auto mt-4 relative z-10 font-product-sans-regular text-[#858599]">
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
                    <img src="{{ asset('images/review1.png') }}" alt="Client 1" class="h-16 sm:h-48 object-contain" />
                    <img src="{{ asset('images/review2.png') }}" alt="Client 2" class="h-16 sm:h-48 object-contain" />
                    <img src="{{ asset('images/review3.png') }}" alt="Client 3" class="h-16 sm:h-48 object-contain" />
                    <!-- duplicate for loop -->
                    <img src="{{ asset('images/review1.png') }}" alt="Client 1" class="h-16 sm:h-48 object-contain" />
                    <img src="{{ asset('images/review2.png') }}" alt="Client 2" class="h-16 sm:h-48 object-contain" />
                    <img src="{{ asset('images/review3.png') }}" alt="Client 3" class="h-16 sm:h-48 object-contain" />
                    <!-- duplicate for loop -->
                    <img src="{{ asset('images/review1.png') }}" alt="Client 1" class="h-16 sm:h-48 object-contain" />
                    <img src="{{ asset('images/review2.png') }}" alt="Client 2" class="h-16 sm:h-48 object-contain" />
                    <img src="{{ asset('images/review3.png') }}" alt="Client 3" class="h-16 sm:h-48 object-contain" />
                    <!-- duplicate for loop -->
                    <img src="{{ asset('images/review1.png') }}" alt="Client 1" class="h-16 sm:h-48 object-contain" />
                    <img src="{{ asset('images/review2.png') }}" alt="Client 2" class="h-16 sm:h-48 object-contain" />
                    <img src="{{ asset('images/review3.png') }}" alt="Client 3" class="h-16 sm:h-48 object-contain" />
                    <!-- duplicate for loop -->
                    <img src="{{ asset('images/review1.png') }}" alt="Client 1" class="h-16 sm:h-48 object-contain" />
                    <img src="{{ asset('images/review2.png') }}" alt="Client 2" class="h-16 sm:h-48 object-contain" />
                    <img src="{{ asset('images/review3.png') }}" alt="Client 3" class="h-16 sm:h-48 object-contain" />
                </div>

                <!-- Row 2 (right to left) -->
                <div class="flex animate-scroll-right space-x-2 w-max mt-4">
                    <img src="{{ asset('images/review1.png') }}" alt="Client 1" class="h-16 sm:h-48 object-contain" />
                    <img src="{{ asset('images/review2.png') }}" alt="Client 2" class="h-16 sm:h-48 object-contain" />
                    <img src="{{ asset('images/review3.png') }}" alt="Client 3" class="h-16 sm:h-48 object-contain" />
                    <!-- duplicate for loop -->
                    <img src="{{ asset('images/review1.png') }}" alt="Client 1" class="h-16 sm:h-48 object-contain" />
                    <img src="{{ asset('images/review2.png') }}" alt="Client 2" class="h-16 sm:h-48 object-contain" />
                    <img src="{{ asset('images/review3.png') }}" alt="Client 3" class="h-16 sm:h-48 object-contain" />
                    <!-- duplicate for loop -->
                    <img src="{{ asset('images/review1.png') }}" alt="Client 1" class="h-16 sm:h-48 object-contain" />
                    <img src="{{ asset('images/review2.png') }}" alt="Client 2" class="h-16 sm:h-48 object-contain" />
                    <img src="{{ asset('images/review3.png') }}" alt="Client 3" class="h-16 sm:h-48 object-contain" />
                    <!-- duplicate for loop -->
                    <img src="{{ asset('images/review1.png') }}" alt="Client 1" class="h-16 sm:h-48 object-contain" />
                    <img src="{{ asset('images/review2.png') }}" alt="Client 2" class="h-16 sm:h-48 object-contain" />
                    <img src="{{ asset('images/review3.png') }}" alt="Client 3" class="h-16 sm:h-48 object-contain" />
                    <!-- duplicate for loop -->
                    <img src="{{ asset('images/review1.png') }}" alt="Client 1" class="h-16 sm:h-48 object-contain" />
                    <img src="{{ asset('images/review2.png') }}" alt="Client 2" class="h-16 sm:h-48 object-contain" />
                    <img src="{{ asset('images/review3.png') }}" alt="Client 3" class="h-16 sm:h-48 object-contain" />
                </div>
            </div>
        </section>

        <!-- Section 6 -->
        <section class="w-full bg-white pt-[160px] mx-auto text-center pb-10 relative">
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
            <p style="color: var(--Grey, #858599); text-align: center; font-size: 24px; line-height: 41.6px;"
                class="w-[90vw] md:w-[50vw] mx-auto mt-4 relative font-product-sans-regular text-[#858599]">
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
                            class="faq-question rounded-[24px] px-6 py-4 flex justify-between items-center w-full text-left focus:outline-none bg-gradient-to-t from-[#F5F5F5] to-[#FFFFFF]"
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

        <!-- Section 7 -->
        <!-- <section class="w-full h-[120px] bg-[#f6f7fa] mx-auto mt-0 text-center relative overflow-hidden">
        </section> -->
    </div>
    <script type="text/javascript" src="/js/script.js"></script>
    <!-- Splide JS -->
    <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js"></script>

    <script>
        // Simple Intersection Observer Animation
        document.addEventListener("DOMContentLoaded", () => {
            const animatedEls = document.querySelectorAll(".animate-on-scroll");
            const cards = document.querySelectorAll(".pricing-card");

            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.remove("opacity-0", "translate-y-10");
                        entry.target.classList.add("opacity-100", "translate-y-0");
                        observer.unobserve(entry.target); // animate only once
                    }
                });
            }, { threshold: 0.15 });

            animatedEls.forEach(el => observer.observe(el));

            const observer2 = new IntersectionObserver((entries) => {
                entries.forEach((entry, index) => {
                    if (entry.isIntersecting) {
                        setTimeout(() => {
                            entry.target.classList.remove("opacity-0", "translate-y-10");
                            entry.target.classList.add("opacity-100", "translate-y-0");
                        }, index * 150); // stagger animation
                        observer2.unobserve(entry.target);
                    }
                });
            }, { threshold: 0.2 });

            cards.forEach(card => observer2.observe(card));
        });
    </script>






</body>

</html>