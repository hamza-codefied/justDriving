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
    <div class="content-container">

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

        <div class="lg:block absolute inset-0 -z-10 bg-no-repeat bg-center bg-cover pointer-events-none"
            style="background: linear-gradient(to bottom, transparent, rgba(255, 255, 255, 0.6)), url('{{ asset('images/Background.svg') }}'); will-change: transform; transform: translateZ(0);">
        </div>

        <!-- Hero Section -->
        <section class="w-full mx-auto mt-[100px] text-center relative overflow-hidden">
            <div class="max-w-5xl mx-auto px-6">
                <!-- Main Heading -->
                <h1 class="text-3xl sm:text-4xl md:text-5xl font-bold text-black relative z-10 mb-6">
                    Fra Kun <span class="text-[#3384FF]">149 Kr.</span>/Måned Pr. Elev
                </h1>

                <!-- First Descriptive Paragraph -->
                <p class="text-[#858599] text-base sm:text-[24px] font-normal relative z-10">
                    En enkel, gennemsigtig pris — med alt inkluderet.
                </p>

                <!-- Second Descriptive Paragraph -->
                <p class="text-[#858599] text-base sm:text-[24px] mt-1 font-normal mb-8 relative z-10">
                    Ingen skjulte gebyrer. Ingen moduler. En platform til hele din køreskole.
                </p>

                <!-- Key Feature Highlight -->
                <p class="text-xl sm:text-2xl font-bold text-black mb-4 relative z-10">
                    Én pris — alle funktioner inkluderet
                </p>

                <!-- Platform Description Paragraph 1 -->
                <p class="text-[#858599] text-base sm:text-[24px] font-normal relative z-10">
                    Just Driving giver dig adgang til Danmarks mest komplette platform til køreskoler.
                </p>

                <!-- Platform Description Paragraph 2 -->
                <p class="text-[#858599] text-base sm:text-[24px] mt-1 font-normal relative z-10">
                    Alt administration, undervisning, booking og betaling samlet ét sted.
                </p>
            </div>
        </section>

        <!-- Features Included Section -->
        <section id="pricing" class="w-full mt-10 py-5 px-4 sm:px-8 md:px-16 lg:px-24 relative overflow-hidden">
            <!-- Main Heading -->
            <h2 class="text-2xl sm:text-3xl md:text-4xl lg:text-[50px] font-bold text-black text-center mb-12">
                Alt dette er inkluderet – samlet ét sted
            </h2>

            <!-- Two Columns Grid -->
            <div class="flex flex-col lg:flex-row gap-3 max-w-7xl mx-auto mb-8 items-stretch">
                <!-- Left Column - 2 rows -->
                <div class="flex flex-col gap-3 flex-1">
                    <!-- System og administration -->
                    <div class="bg-[#f7fafc] rounded-xl shadow-sm border border-gray-200 p-6 flex-1 flex flex-col">
                        <h3 class="text-lg text-center font-bold text-black mb-4">System og administration</h3>
                        <ul class="space-y-3 text-[#858599] text-[18px] font-normal">
                            <li class="flex items-start gap-2">
                                <img src="{{ asset('images/simplicitet.png') }}" class="w-5 h-5 mt-0.5 flex-shrink-0"
                                    alt="Checkmark">
                                <span class="text-sm text-black">Online administrationssystem</span>
                            </li>
                            <li class="flex items-start gap-2">
                                <img src="{{ asset('images/simplicitet.png') }}" class="w-5 h-5 mt-0.5 flex-shrink-0"
                                    alt="Checkmark">
                                <span class="text-sm text-black">Medarbejder-, elev- og holdadministration</span>
                            </li>
                            <li class="flex items-start gap-2">
                                <img src="{{ asset('images/simplicitet.png') }}" class="w-5 h-5 mt-0.5 flex-shrink-0"
                                    alt="Checkmark">
                                <span class="text-sm text-black">Adgang til alle elevers oplysninger</span>
                            </li>
                            <li class="flex items-start gap-2">
                                <img src="{{ asset('images/simplicitet.png') }}" class="w-5 h-5 mt-0.5 flex-shrink-0"
                                    alt="Checkmark">
                                <span class="text-sm text-black">Ubegrænset antal elever, kørelærere og hold</span>
                            </li>
                            <li class="flex items-start gap-2">
                                <img src="{{ asset('images/simplicitet.png') }}" class="w-5 h-5 mt-0.5 flex-shrink-0"
                                    alt="Checkmark">
                                <span class="text-sm text-black">Kørelærer- og elevnotater</span>
                            </li>
                            <li class="flex items-start gap-2">
                                <img src="{{ asset('images/simplicitet.png') }}" class="w-5 h-5 mt-0.5 flex-shrink-0"
                                    alt="Checkmark">
                                <span class="text-sm text-black">Mobil-app til elever og kørelærere</span>
                            </li>
                            <li class="flex items-start gap-2">
                                <img src="{{ asset('images/simplicitet.png') }}" class="w-5 h-5 mt-0.5 flex-shrink-0"
                                    alt="Checkmark">
                                <span class="text-sm text-black">E-mail og support tickets</span>
                            </li>
                            <li class="flex items-start gap-2">
                                <img src="{{ asset('images/simplicitet.png') }}" class="w-5 h-5 mt-0.5 flex-shrink-0"
                                    alt="Checkmark">
                                <span class="text-sm text-black">Flere afdelinger med central styring</span>
                            </li>
                            <li class="flex items-start gap-2">
                                <img src="{{ asset('images/simplicitet.png') }}" class="w-5 h-5 mt-0.5 flex-shrink-0"
                                    alt="Checkmark">
                                <span class="text-sm text-black">GDPR-sikker databehandling og fuld
                                    adgangsstyring</span>
                            </li>
                            <li class="flex items-start gap-2">
                                <img src="{{ asset('images/simplicitet.png') }}" class="w-5 h-5 mt-0.5 flex-shrink-0"
                                    alt="Checkmark">
                                <span class="text-sm text-black">Hosting i Danmark med backup hver time, dag, uge og
                                    måned</span>
                            </li>
                        </ul>
                    </div>

                    <!-- Undervisning og læring -->
                    <div class="bg-[#f7fafc] rounded-xl shadow-sm border border-gray-200 p-6 flex-1 flex flex-col">
                        <h3 class="text-lg text-center font-bold text-black mb-4">Undervisning og læring</h3>
                        <ul class="space-y-3 text-[#858599] text-[18px] font-normal">
                            <li class="flex items-start gap-2">
                                <img src="{{ asset('images/simplicitet.png') }}" class="w-5 h-5 mt-0.5 flex-shrink-0"
                                    alt="Checkmark">
                                <span class="text-sm text-black">Online teoriundervisning med tekst, billeder og
                                    video</span>
                            </li>
                            <li class="flex items-start gap-2">
                                <img src="{{ asset('images/simplicitet.png') }}" class="w-5 h-5 mt-0.5 flex-shrink-0"
                                    alt="Checkmark">
                                <span class="text-sm text-black">Undervisning med automatisk afvikling</span>
                            </li>
                            <li class="flex items-start gap-2">
                                <img src="{{ asset('images/simplicitet.png') }}" class="w-5 h-5 mt-0.5 flex-shrink-0"
                                    alt="Checkmark">
                                <span class="text-sm text-black">Test elever direkte i klassen</span>
                            </li>
                            <li class="flex items-start gap-2">
                                <img src="{{ asset('images/simplicitet.png') }}" class="w-5 h-5 mt-0.5 flex-shrink-0"
                                    alt="Checkmark">
                                <span class="text-sm text-black">Materiale på dansk, engelsk og arabisk</span>
                            </li>
                            <li class="flex items-start gap-2">
                                <img src="{{ asset('images/simplicitet.png') }}" class="w-5 h-5 mt-0.5 flex-shrink-0"
                                    alt="Checkmark">
                                <span class="text-sm text-black">Integration med e-teori.dk</span>
                            </li>
                            <li class="flex items-start gap-2">
                                <img src="{{ asset('images/simplicitet.png') }}" class="w-5 h-5 mt-0.5 flex-shrink-0"
                                    alt="Checkmark">
                                <span class="text-sm text-black">Elevdokumentbank og digital opgaveaflevering</span>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Right Column - 3 rows -->
                <div class="flex flex-col gap-3 flex-1">
                    <!-- Økonomi og betaling -->
                    <div class="bg-[#f7fafc] rounded-xl shadow-sm border border-gray-200 p-6 flex-1 flex flex-col">
                        <h3 class="text-lg text-center font-bold text-black mb-4">Økonomi og betaling</h3>
                        <ul class="space-y-3 text-[#858599] text-[18px] font-normal">
                            <li class="flex items-start gap-2">
                                <img src="{{ asset('images/simplicitet.png') }}" class="w-5 h-5 mt-0.5 flex-shrink-0"
                                    alt="Checkmark">
                                <span class="text-sm text-black">Online betaling direkte i systemet</span>
                            </li>
                            <li class="flex items-start gap-2">
                                <img src="{{ asset('images/simplicitet.png') }}" class="w-5 h-5 mt-0.5 flex-shrink-0"
                                    alt="Checkmark">
                                <span class="text-sm text-black">Integration med Gompay.dk</span>
                            </li>
                            <li class="flex items-start gap-2">
                                <img src="{{ asset('images/simplicitet.png') }}" class="w-5 h-5 mt-0.5 flex-shrink-0"
                                    alt="Checkmark">
                                <span class="text-sm text-black">Fuld betalingshistorik og oversigt</span>
                            </li>
                            <li class="flex items-start gap-2">
                                <img src="{{ asset('images/simplicitet.png') }}" class="w-5 h-5 mt-0.5 flex-shrink-0"
                                    alt="Checkmark">
                                <span class="text-sm text-black">Automatisk fakturering og kvittering</span>
                            </li>
                            <li class="flex items-start gap-2">
                                <img src="{{ asset('images/simplicitet.png') }}" class="w-5 h-5 mt-0.5 flex-shrink-0"
                                    alt="Checkmark">
                                <span class="text-sm text-black">Online faktura og restancestyring</span>
                            </li>
                            <li class="flex items-start gap-2">
                                <img src="{{ asset('images/simplicitet.png') }}" class="w-5 h-5 mt-0.5 flex-shrink-0"
                                    alt="Checkmark">
                                <span class="text-sm text-black">Automatisk adgangsbegrænsning ved manglende
                                    betaling</span>
                            </li>
                        </ul>
                    </div>

                    <!-- Booking og tilmelding -->
                    <div class="bg-[#f7fafc] rounded-xl shadow-sm border border-gray-200 p-6 flex-1 flex flex-col">
                        <h3 class="text-lg text-center font-bold text-black mb-4">Booking og tilmelding</h3>
                        <ul class="space-y-3 text-[18px]">
                            <li class="flex items-start gap-2">
                                <img src="{{ asset('images/simplicitet.png') }}" class="w-5 h-5 mt-0.5 flex-shrink-0"
                                    alt="Checkmark">
                                <span class="text-sm text-black">Online bookingsystem</span>
                            </li>
                            <li class="flex items-start gap-2">
                                <img src="{{ asset('images/simplicitet.png') }}" class="w-5 h-5 mt-0.5 flex-shrink-0"
                                    alt="Checkmark">
                                <span class="text-sm text-black">Tilmeldingsformular Integreret på din hjemmeside
                                    (API)</span>
                            </li>
                            <li class="flex items-start gap-2">
                                <img src="{{ asset('images/simplicitet.png') }}" class="w-5 h-5 mt-0.5 flex-shrink-0"
                                    alt="Checkmark">
                                <span class="text-sm text-black">Digital lektionsplan og elevtilknytning</span>
                            </li>
                            <li class="flex items-start gap-2">
                                <img src="{{ asset('images/simplicitet.png') }}" class="w-5 h-5 mt-0.5 flex-shrink-0"
                                    alt="Checkmark">
                                <span class="text-sm text-black">Opret og tilknyt egne lektionsplaner</span>
                            </li>
                            <li class="flex items-start gap-2">
                                <img src="{{ asset('images/simplicitet.png') }}" class="w-5 h-5 mt-0.5 flex-shrink-0"
                                    alt="Checkmark">
                                <span class="text-sm text-black">Automatisk elevtilmelding og lektionsflow</span>
                            </li>
                            <li class="flex items-start gap-2">
                                <img src="{{ asset('images/simplicitet.png') }}" class="w-5 h-5 mt-0.5 flex-shrink-0"
                                    alt="Checkmark">
                                <span class="text-sm text-black">Kalenderbooking for både elev og kørelærer</span>
                            </li>
                        </ul>
                    </div>

                    <!-- Digital dokumentation og elevstyring -->
                    <div class="bg-[#f7fafc] rounded-xl shadow-sm border border-gray-200 p-6 flex-1 flex flex-col">
                        <h3 class="text-lg text-center font-bold text-black mb-4">Digital dokumentation og
                            elevstyring</h3>
                        <ul class="space-y-3">
                            <li class="flex items-start gap-2">
                                <img src="{{ asset('images/simplicitet.png') }}" class="w-5 h-5 mt-0.5 flex-shrink-0"
                                    alt="Checkmark">
                                <span class="text-sm text-black">Digital underskrift lektionsplan</span>
                            </li>
                            <li class="flex items-start gap-2">
                                <img src="{{ asset('images/simplicitet.png') }}" class="w-5 h-5 mt-0.5 flex-shrink-0"
                                    alt="Checkmark">
                                <span class="text-sm text-black">Digital samtykkeerklæring og GDPR-samtykke</span>
                            </li>
                            <li class="flex items-start gap-2">
                                <img src="{{ asset('images/simplicitet.png') }}" class="w-5 h-5 mt-0.5 flex-shrink-0"
                                    alt="Checkmark">
                                <span class="text-sm text-black">Automatisk synkronisering af elevdata og
                                    status</span>
                            </li>
                            <li class="flex items-start gap-2">
                                <img src="{{ asset('images/simplicitet.png') }}" class="w-5 h-5 mt-0.5 flex-shrink-0"
                                    alt="Checkmark">
                                <span class="text-sm text-black">Elevlogin med personlig oversigt og
                                    kommunikation</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Full Width Row - Kommunikation og påmindelser -->
            <div class="max-w-7xl mx-auto">
                <div class="bg-[#f7fafc] rounded-xl shadow-sm border border-gray-200 p-6">
                    <h3 class="text-lg text-center font-bold text-black mb-6">Kommunikation og påmindelser</h3>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <!-- Left Column -->
                        <div class="space-y-3">
                            <div class="flex items-start gap-2">
                                <img src="{{ asset('images/simplicitet.png') }}" class="w-5 h-5 mt-0.5 flex-shrink-0"
                                    alt="Checkmark">
                                <span class="text-sm text-black">SMS- og e-mailnotifikationer til elev og
                                    kørelærer</span>
                            </div>
                            <div class="flex items-start gap-2">
                                <img src="{{ asset('images/simplicitet.png') }}" class="w-5 h-5 mt-0.5 flex-shrink-0"
                                    alt="Checkmark">
                                <span class="text-sm text-black">Opret egne e-mail-skabeloner til tilmelding og
                                    påmindelser</span>
                            </div>
                        </div>
                        <!-- Right Column -->
                        <div class="space-y-3">
                            <div class="flex items-start gap-2">
                                <img src="{{ asset('images/simplicitet.png') }}" class="w-5 h-5 mt-0.5 flex-shrink-0"
                                    alt="Checkmark">
                                <span class="text-sm text-black">Automatisk besked ved ændringer, aflysninger og
                                    betaling</span>
                            </div>
                            <div class="flex items-start gap-2">
                                <img src="{{ asset('images/simplicitet.png') }}" class="w-5 h-5 mt-0.5 flex-shrink-0"
                                    alt="Checkmark">
                                <span class="text-sm text-black">Automatisk påmindelse om betalinger og
                                    bookinger</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Section 5 -->
        <section class="w-full mx-auto mt-16 text-center relative overflow-hidden">
            <!-- Tag -->
            <div
                class="inline-block bg-gray-50 text-black px-4 py-1 rounded-full text-[18px] font-normal shadow-sm mb-4 border border-gray-100 relative">
                Tillid fra førende skoler
            </div>

            <!-- Title -->
            <h1
                class="text-2xl sm:text-3xl md:text-4xl lg:text-[50px] font-bold leading-tight text-black relative z-10">
                Betroet af køreskoler over hele Danmark
            </h1>

            <!-- Subtitle -->
            <p class="w-[90vw] md:w-[50vw] mx-auto mt-4 text-[#858599] text-[22px] font-normal relative z-10">
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
        <section class="w-full mx-auto mt-16 text-center relative overflow-hidden">
            <!-- Tag -->


            <div
                class="inline-block bg-gray-50 text-black font-medium px-4 py-1 rounded-full text-[20px] shadow-sm mb-4 border border-gray-100 relative">
                Spørgsmål? Vi har svarene
            </div>

            <!-- Title -->
            <h1 class="text-2xl sm:text-3xl md:text-4xl lg:text-[50px] font-bold leading-tight text-black relative">
                Ofte stillede <span class="text-[#3384FF]">spørgsmål</span>
            </h1>

            <!-- Subtitle -->
            <p class="w-[90vw] md:w-[50vw] mx-auto mt-4 text-[#858599] text-[22px] font-normal relative">
                Find hurtige svar på nogle af de mest almindelige spørgsmål om Just Driving.
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
                            class="bg-white/70 shadow-sm faq-question rounded-xl px-4 py-3 flex justify-between items-center w-full text-left focus:outline-none"
                            data-index="{{ $index }}">
                            <span class="text-xs sm:text-[22px] font-semibold text-black">{{ $faq['question'] }}</span>
                            <div
                                class="icon w-6 h-6 flex items-center p-1 justify-center bg-[#3384FF] rounded-full text-white transition-all duration-300">
                                <i class="" data-lucide="plus"></i>
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