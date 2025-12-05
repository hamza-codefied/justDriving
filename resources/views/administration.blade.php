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

        <div class="hidden lg:block fixed inset-0 -z-10 bg-no-repeat bg-center bg-cover"
            style="background-image: url('{{ asset('images/Background.svg') }}');">
        </div>

        <!-- Hero Section -->
        <section class="max-w-[1280px] mx-auto mt-[80px] md:mt-[140px] text-center relative">
            <!-- Title -->
            <h1 class="font-product-sans-bold text-[28px] md:text-[59px] md:leading-[95px] text-black relative z-10"
                style="letter-spacing: -2px; word-spacing: -2px;">
                Online <span class="text-[#3384FF]"> Administrationssystem</span> – Alt samlet ét sted
            </h1>

            <!-- Subtitle -->
            <p style="letter-spacing: -1px;"
                class="w-full sm:max-w-6xl px-6 md:px-0 mx-auto mt-[16px] leading-[38px] text-[#858599] md:text-[16px] lg:text-[24px] z-10 font-manrope-bold opacity-[90%]">
                Med Just Driving får du ét samlet system, der håndterer alle dine administrative opgaver hurtigt,
                sikkert og <br class="hidden md:block"> effektivt. Du slipper for flere systemer og manuelle
                arbejdsgange.
            </p>
            <!-- CTA Button -->
            <div class="mt-[50px] flex flex-col md:flex-row items-center justify-center gap-4 relative z-10">
                <a href="#"
                    class="flex flex-col justify-center items-center gap-[9.882px] w-[309px] h-[74px] py-[19.765px] px-[10px] rounded-[19.765px] border-[1.235px] border-[rgba(255,255,255,0.40)] bg-[#3384FF] text-white text-[20px] font-product-sans-bold hover:bg-[#2563EB] transition"
                    style="box-shadow: 0 24.706px 43.235px 0 rgba(51, 132, 255, 0.20);">
                    Prøve Administrationssystem
                </a>
                <a href="#"
                    class="flex flex-col justify-center items-center gap-[9.882px] w-[276px] h-[74px] py-[19.765px] px-[44.471px] rounded-[19.765px] border-[1.235px] border-[#377DFF] bg-[#E8F2FF] text-[#3384FF] text-[20px] font-product-sans-bold hover:bg-[#3384FF] hover:text-white transition"
                    style="box-shadow: 0 24.706px 43.235px 0 rgba(51, 132, 255, 0.20);">
                    Se Vores Priser
                </a>
            </div>
        </section>

        @php
            $features = [
                [
                    'id' => 1,
                    'description' => 'Ét samlet overblik over elever, kørelærere og afdelinger',
                    'icon' => asset('images/admin1.png'),
                ],
                [
                    'id' => 2,

                    'description' => 'Digital holdadministration og lektionsstyring',
                    'icon' => asset('images/admin2.png'),
                ],
                [
                    'id' => 3,

                    'description' => 'Indbygget aflønning og betalingsovervågning',
                    'icon' => asset('images/admin3.png'),
                ],
                [
                    'id' => 4,

                    'description' => 'Elevdata, historik og progression – opdateret i realtid',
                    'icon' => asset('images/admin4.png'),
                ],
                [
                    'id' => 5,

                    'description' => 'Adgang via både computer og mobil-app',
                    'icon' => asset('images/admin5.png'),
                ],
                [
                    'id' => 6,

                    'description' => 'Sikker datalagring i overensstemmelse med GDPR',
                    'icon' => asset('images/admin6.png'),
                ],
                [
                    'id' => 7,

                    'description' => 'Automatisk integration med e-teori.dk og findkoreskole.dk',
                    'icon' => asset('images/admin7.png'),
                ],
            ];
         @endphp

        <!-- Section 2 -->
        <section
            class="w-full mx-auto mt-[100px] md:mt-[166px] px-6 text-center relative overflow-hidden bg-gradient-to-b from-transparent via-[#ffffff]/90 to-[#ffffff]">
            <!-- Title -->
            <h1 class="font-product-sans-bold text-[40px] font-bold leading-[60px] text-center text-[#171717] relative z-10"
                style="letter-spacing: -1.2px;">
                Du får blandt andet
            </h1>

            <!-- Cards Grid -->
            <div class="max-w-[1280px] mx-auto flex flex-wrap justify-center gap-[50px] mt-16">
                @foreach ($features as $feature)
                    <div
                        class="bg-[#F5f5f5] p-2 rounded-[40px] shadow-sm transition-all duration-300 ease-out hover:-translate-y-2  hover:bg-white w-full md:max-w-[276px] h-[362px]">
                        <!-- Icon Section -->
                        <div
                            class="bg-[#EAEFF4] py-10 flex items-center justify-center rounded-t-[32px] transition-all duration-300 hover:bg-[#DCE8F5] h-[222px]">
                            <div
                                class="mx-auto rounded-lg flex items-center justify-center transform transition-transform duration-300 hover:scale-110">
                                <img src="{{ $feature['icon'] }}" alt="Icon" class="w-20 h-20" />
                            </div>
                        </div>

                        <!-- Text Section -->
                        <div class="flex flex-col my-5 pl-6 items-start transition-all duration-300">
                            <p class="font-manrope-medium text-[#858599] text-start w-[95%] text-[16px] font-medium leading-[30px]"
                                style="letter-spacing: -0.32px;">{{ $feature['description'] }}</p>
                        </div>
                    </div>
                @endforeach
            </div>

        </section>

        <!-- Info Section -->
        <section id="holdadministration" class="w-full mx-auto text-black  pt-[288px] gap-10 z-10 bg-white">
            <div class="max-w-[1280px] mx-auto px-6 flex flex-col md:flex-row items-start justify-center">

                <!-- Left Column (Image) -->
                <div
                    class="w-full md:w-1/2 flex justify-center md:justify-start  translate-y-10 transition-all duration-700 ease-out animate-on-scroll">
                    <img src="{{ asset('images/admin-system.png') }}" alt="Administration System" class="">
                </div>

                <!-- Right Column (Text Content) -->
                <div
                    class="w-full md:w-1/2 space-y-4 translate-y-10 transition-all duration-700 ease-out animate-on-scroll delay-200">
                    <h2 class="font-product-sans-bold text-[28px] font-bold leading-normal capitalize text-[#000]">
                        Holdadministration – Automatisk overblik fra <br /> start til slut
                    </h2>
                    <p
                        class="font-product-sans-regular text-[#858599] text-[16px] font-normal leading-normal capitalize">
                        Just Driving giver dig intelligent og fleksibel holdstyring, der gør både oprettelse,
                        tilmelding,
                        betaling og lektionsplanlægning problemfri.
                    </p>
                    <p
                        class="font-product-sans-regular text-[#858599] text-[16px] font-normal leading-normal capitalize">
                        Elever kan tilmelde sig direkte fra din hjemmeside, og systemet håndterer resten automatisk.
                    </p>
                    <p class="font-product-sans-bold text-[#000] text-[20px] font-bold leading-normal capitalize">
                        Du får:
                    </p>

                    <ul class="space-y-3 mt-4">
                        <li class="flex items-start gap-2">
                            <img src="{{ asset('images/arrowNew.png') }}" alt="Arrow Right"
                                class="w-4 h-4 mt-1 text-[#3384FF]">
                            <span
                                class="font-product-sans-regular text-[#2B70D8] text-[18px] font-normal leading-normal capitalize">Fuld
                                oversigt over alle aktive, kommende og afsluttede hold.</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <img src="{{ asset('images/arrowNew.png') }}" alt="Arrow Right"
                                class="w-4 h-4 mt-1 text-[#3384FF]">
                            <span
                                class="font-product-sans-regular text-[#2B70D8] text-[18px] font-normal leading-normal capitalize">Automatisk
                                betaling ved tilmelding og færre administrative fejl.</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <img src="{{ asset('images/arrowNew.png') }}" alt="Arrow Right"
                                class="w-4 h-4 mt-1 text-[#3384FF]">
                            <span
                                class="font-product-sans-regular text-[#2B70D8] text-[18px] font-normal leading-normal capitalize">API-integration
                                til din hjemmeside og digital lektionsplan for hvert hold.</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <img src="{{ asset('images/arrowNew.png') }}" alt="Arrow Right"
                                class="w-4 h-4 mt-1 text-[#3384FF]">
                            <span
                                class="font-product-sans-regular text-[#2B70D8] text-[18px] font-normal leading-normal capitalize">Alt
                                synkroniseres automatisk med elevens profil og logbog for et nemt workflow.</span>
                        </li>
                    </ul>
                </div>
            </div>
        </section>


        <!-- Features Section -->
        <section id="features-section" class="w-full pt-[209px] pb-[262px] bg-white">
            <div class="text-center max-w-[1280px] mx-auto px-6">
                <p class="font-product-sans-bold text-[#000] text-[28px] font-bold leading-normal capitalize">
                    Holdadministration – Effektiv styring med automatisk flow
                </p>
                <p
                    class="font-product-sans-regular text-[#858599] text-center text-[16px] font-normal leading-normal capitalize mt-7">
                    Just Driving samler hele holdprocessen i ét automatiseret flow, så du får mere tid til selve
                    undervisningen.
                </p>
                @php
                    $features = [
                        [
                            'img' => 'hola1.png',
                            'title' => 'Tilmelding',
                            'desc' => 'Eleven tilmelder sig via din hjemmeside – systemet opretter og giver automatisk adgang.',
                        ],
                        [
                            'img' => 'hola2.png',
                            'title' => 'Betalinger',
                            'desc' => 'Du sætter prisen. Systemet opkræver betaling ved tilmelding og holder styr på restancer.',
                        ],
                        [
                            'img' => 'hola3.png',
                            'title' => 'Lektionsplan',
                            'desc' => 'Hvert hold får en automatisk, ensartet lektionsplan for alle elever.',
                        ],
                        [
                            'img' => 'hola4.png',
                            'title' => 'Kørelæreradgang',
                            'desc' => 'Kørelærere får automatisk adgang til eleverne på deres hold – ingen manuel opsætning.',
                        ],
                        [
                            'img' => 'hola5.png',
                            'title' => 'Afdelingsstyring',
                            'desc' => 'Opret hold på tværs af afdelinger og bevar fuldt overblik ét sted.',
                        ],
                        [
                            'img' => 'hola6.png',
                            'title' => 'Fakturering og kvittering',
                            'desc' => 'Betaling udløser automatisk faktura og kvittering – helt uden ekstra systemer.',
                        ],
                    ];
                @endphp
                <!-- Card Grid -->
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-9 mt-[52px]">
                    @foreach ($features as $index => $feature)
                        <div class="relative h-[220px] bg-white rounded-[30px] border-[4px] border-[#f0f2f5] shadow-md p-5 flex flex-col items-start hover:-translate-y-2 hover:bg-gradient-to-b from-[#f9f9ff] to-[#e8f2ff] transition-all duration-500 opacity-0 translate-y-10 animate-on-scroll group"
                            style="transition-delay: {{ $index * 100 }}ms;">

                            <!-- Glow effect -->
                            <div
                                class="absolute inset-0 rounded-2xl bg-gradient-to-tr from-blue-400/10 to-transparent 
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                opacity-0 group-hover:opacity-100 blur-lg transition duration-500">
                            </div>

                            <img src="{{ asset('images/' . $feature['img']) }}" alt="{{ $feature['title'] }}"
                                class="w-12 h-12 mb-4 transform transition-transform duration-500 group-hover:scale-110 group-hover:rotate-6">

                            <h3 class="font-manrope-extrabold text-[#1B1C31] text-[20px] font-extrabold leading-[33px] mb-2 relative z-10 group-hover:text-[#248ec1] transition-colors duration-300"
                                style="letter-spacing: -0.6px;">
                                {{ $feature['title'] }}
                            </h3>

                            <p class="font-manrope-medium text-[#747474] text-start text-[16px] font-medium leading-normal relative z-10 group-hover:text-[#4a4a5e] transition-colors duration-300"
                                style="letter-spacing: -0.32px;">
                                {{ $feature['desc'] }}
                            </p>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>

        <!-- Info Section2 -->
        <section id="afdelinger" class="w-full bg-[#f3f8fd] md:p-[76px] text-black">
            <div
                class="max-w-[1280px] px-6 mx-auto flex flex-col md:flex-row items-start justify-center gap-[40px] z-10">
                <!-- Left Column (Text) -->
                <div
                    class="w-full md:w-1/2 space-y-7 opacity-0 translate-y-10 transition-all duration-700 ease-out animate-on-scroll delay-200">
                    <h2 class="font-product-sans-bold text-[#000] text-[28px] font-bold leading-normal">
                        Afdelingsstyring – Én platform til alle dine lokationer
                    </h2>
                    <p
                        class="font-product-sans-regular text-[#858599] text-[16px] font-normal leading-normal lowercase">
                        Vil du udvide din køreskole uden ekstra administrativt kaos?<br /> Med Just Driving kan du
                        og
                        administrere ubegrænset antal afdelinger i ét samlet <br /> system.
                    </p>
                    <p class="font-product-sans-bold text-[#000] text-[20px] font-bold leading-normal capitalize">
                        Fordele:
                    </p>

                    <ul class="space-y-3 mt-4">
                        <li class="flex items-start gap-2">
                            <img src="{{ asset('images/arrowNew.png') }}" alt="Arrow Right"
                                class="w-4 h-4 mt-1 text-[#3384FF]">
                            <span
                                class="font-product-sans-regular text-[#2B70D8] text-[18px] font-normal leading-normal lowercase">Opret
                                ubegrænsede afdelinger og administrér dem samlet ét sted.</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <img src="{{ asset('images/arrowNew.png') }}" alt="Arrow Right"
                                class="w-4 h-4 mt-1 text-[#3384FF]">
                            <span
                                class="font-product-sans-regular text-[#2B70D8] text-[18px] font-normal leading-normal lowercase">Kørelærere
                                tilknyttes automatisk de rette afdelinger og kan arbejde på tværs.</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <img src="{{ asset('images/arrowNew.png') }}" alt="Arrow Right"
                                class="w-4 h-4 mt-1 text-[#3384FF]">
                            <span
                                class="font-product-sans-regular text-[#2B70D8] text-[18px] font-normal leading-normal lowercase">Ét
                                login giver fuldt centralt overblik over struktur, elever og aktiviteter.</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <img src="{{ asset('images/arrowNew.png') }}" alt="Arrow Right"
                                class="w-4 h-4 mt-1 text-[#3384FF]">
                            <span
                                class="font-product-sans-regular text-[#2B70D8] text-[18px] font-normal leading-normal lowercase">Klar
                                økonomioversigt pr. afdeling for nem styring og kontrol.</span>
                        </li>
                    </ul>
                </div>
                <!-- Right Column (Image) -->
                <div
                    class="w-full md:w-1/2 flex justify-end opacity-0 translate-y-10 transition-all duration-700 ease-out animate-on-scroll">
                    <img src="{{ asset('images/feature2.png') }}" alt="Administration System" class="">
                </div>
            </div>
        </section>

        <section id=""
            class="w-full px-6 md:px-0 text-black pt-[150px] bg-gradient-to-b from-[#ffffff] via-[#ffffff]/20 to-transparent">
            <div class="max-w-[1280px] mx-auto flex flex-col md:flex-row items-start justify-center gap-[64px] z-10">
                <!-- Left Column (image) -->
                <div
                    class="w-full md:w-1/2 flex justify-center md:justify-start opacity-0 translate-y-10 transition-all duration-700 ease-out animate-on-scroll">
                    <img src="{{ asset('images/Rectangle.png') }}" alt="Administration System" class="">
                </div>
                <!-- Right Column (text) -->
                <div
                    class="w-full md:w-1/2 space-y-1 opacity-0 translate-y-10 transition-all duration-700 ease-out animate-on-scroll delay-200">
                    <h2 class="font-product-sans-bold text-[#000] text-[28px] font-bold leading-normal">
                        Afdelingsstyring – Skalér din køreskole uden besvær
                    </h2>
                    <p
                        class="font-product-sans-regular text-[#858599] text-[16px] font-normal leading-normal capitalize">
                        Just Driving giver dig alle værktøjer til at drifte og vækste professionelt, uanset størrelse.
                    </p>
                    <ul class="space-y-2">
                        <li class="flex items-start gap-2">
                            <img src="{{ asset('images/arrowNew.png') }}" alt="Arrow Right"
                                class="w-4 h-4 mt-1 text-[#3384FF]">
                            <span
                                class="font-product-sans-regular text-[#2B70D8] text-[18px] font-normal leading-normal">Afdelinger
                                : Opret ubegrænsede afdelinger og få et klart overblik over elever, hold og
                                kørelærere.</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <img src="{{ asset('images/arrowNew.png') }}" alt="Arrow Right"
                                class="w-4 h-4 mt-1 text-[#3384FF]">
                            <span
                                class="font-product-sans-regular text-[#2B70D8] text-[18px] font-normal leading-normal">Kørelærere
                                : Tildel kørelærere til afdelinger med få klik – perfekt også for
                                selvstændige, der arbejder flere steder.</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <img src="{{ asset('images/arrowNew.png') }}" alt="Arrow Right"
                                class="w-4 h-4 mt-1 text-[#3384FF]">
                            <span
                                class="font-product-sans-regular text-[#2B70D8] text-[18px] font-normal leading-normal">Elever
                                & hold : Elever tilknyttes automatisk korrekt afdeling gennem kørelæreren. Hold
                                organiseres pr. afdeling.</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <img src="{{ asset('images/arrowNew.png') }}" alt="Arrow Right"
                                class="w-4 h-4 mt-1 text-[#3384FF]">
                            <span
                                class="font-product-sans-regular text-[#2B70D8] text-[18px] font-normal leading-normal">Ledelsesoverblik
                                : Følg elevstatus, økonomi og aktiviteter på tværs af alle lokationer
                                fra ét login.</span>
                        </li>
                    </ul>
                    <p class="font-product-sans-regular text-[#858599] text-[16px] font-normal leading-normal">
                        Én platform. Én struktur. Fuld skalering uden besvær.
                    </p>
                </div>
            </div>

            <div
                class="max-w-[1280px] mx-auto flex flex-col md:flex-row items-start justify-center gap-[64px] z-10 mt-[150px]">

                <!-- Right Column (text) -->
                <div
                    class="w-full md:w-1/2 space-y-3 opacity-0 translate-y-10 transition-all duration-700 ease-out animate-on-scroll delay-200">
                    <h2 class="font-product-sans-bold text-[#000] text-[28px] font-bold leading-normal">
                        Automatisk notifikationssystem – Gå aldrig glip af en aftale
                    </h2>
                    <p class="font-product-sans-regular text-[#858599] text-[16px] font-normal leading-normal">
                        Just Driving sender automatisk SMS- og e-mailnotifikationer til både elev og kørelærer, så alle
                        altid er opdaterede.
                    </p>
                    <p class="font-product-sans-bold text-[#000] text-[20px] font-bold leading-normal lowercase">
                        Systemet sender automatisk besked ved:
                    </p>

                    <ul class="space-y-3">
                        <li class="flex items-start gap-2">
                            <img src="{{ asset('images/arrowNew.png') }}" alt="Arrow Right"
                                class="w-4 h-4 mt-1 text-[#3384FF]">
                            <span
                                class="font-product-sans-regular text-[#2B70D8] text-[18px] font-normal leading-normal">Ændringer,
                                aflysninger og nye lektioner</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <img src="{{ asset('images/arrowNew.png') }}" alt="Arrow Right"
                                class="w-4 h-4 mt-1 text-[#3384FF]">
                            <span
                                class="font-product-sans-regular text-[#2B70D8] text-[18px] font-normal leading-normal">Reservationer
                                og tilmeldinger</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <img src="{{ asset('images/arrowNew.png') }}" alt="Arrow Right"
                                class="w-4 h-4 mt-1 text-[#3384FF]">
                            <span
                                class="font-product-sans-regular text-[#2B70D8] text-[18px] font-normal leading-normal">Betalingspåmindelser
                                og frister</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <img src="{{ asset('images/arrowNew.png') }}" alt="Arrow Right"
                                class="w-4 h-4 mt-1 text-[#3384FF]">
                            <span
                                class="font-product-sans-regular text-[#2B70D8] text-[18px] font-normal leading-normal">Udeblivelser
                                og annulleringer</span>
                        </li>
                    </ul>
                    <p class="font-product-sans-regular text-[#858599] text-[16px] font-normal leading-normal">
                        Reducer no-shows, skab klar kommunikation og spar tid – helt automatisk.
                    </p>
                </div>

                <!-- Left Column (image) -->
                <div
                    class="w-full md:w-1/2 flex justify-start opacity-0 translate-y-10 transition-all duration-700 ease-out animate-on-scroll">
                    <img src="{{ asset('images/Rectangle.png') }}" alt="Administration System" class="">
                </div>
            </div>

            <div class="w-full bg-gradient-to-t from-[#ffffff] via-[#ffffff]/80 to-[#ffffff]/30">
                <div
                    class="max-w-[1280px] mx-auto flex flex-col md:flex-row items-start justify-center gap-[64px] z-10 mt-[150px]  pb-[230px]">
                    <!-- Left Column (image) -->
                    <div
                        class="w-full md:w-1/2 flex justify-center md:justify-start opacity-0 translate-y-10 transition-all duration-700 ease-out animate-on-scroll">
                        <img src="{{ asset('images/Rectangle.png') }}" alt="Administration System" class="">
                    </div>
                    <!-- Right Column (text) -->
                    <div
                        class="w-full md:w-1/2 space-y-3 opacity-0 translate-y-10 transition-all duration-700 ease-out animate-on-scroll delay-200">
                        <h2 class="font-product-sans-bold text-[#000] text-[28px] font-bold leading-normal">
                            Notifikationssystem – Automatisk besked, hver gang det gælder
                        </h2>
                        <p class="font-product-sans-regular text-[#858599] text-[16px] font-normal leading-normal">
                            Notifikationer opdateres i realtid, så ingen misser vigtige aftaler.
                        </p>
                        <p class="font-product-sans-bold text-[#000] text-[20px] font-bold leading-normal capitalize">
                            Du får bl.a.:
                        </p>
                        <ul class="space-y-3">
                            <li class="flex items-start gap-2">
                                <img src="{{ asset('images/arrowNew.png') }}" alt="Arrow Right"
                                    class="w-4 h-4 mt-1 text-[#3384FF]">
                                <span
                                    class="font-product-sans-regular text-[#2B70D8] text-[18px] font-normal leading-normal">Lektioner
                                    : Besked ved nye bookinger, ændringer og aflysninger.</span>
                            </li>
                            <li class="flex items-start gap-2">
                                <img src="{{ asset('images/arrowNew.png') }}" alt="Arrow Right"
                                    class="w-4 h-4 mt-1 text-[#3384FF]">
                                <span
                                    class="font-product-sans-regular text-[#2B70D8] text-[18px] font-normal leading-normal">Betalinger
                                    : Besked ved nye bookinger, ændringer og aflysninger.</span>
                            </li>
                            <li class="flex items-start gap-2">
                                <img src="{{ asset('images/arrowNew.png') }}" alt="Arrow Right"
                                    class="w-4 h-4 mt-1 text-[#3384FF]">
                                <span
                                    class="font-product-sans-regular text-[#2B70D8] text-[18px] font-normal leading-normal">Lektionsplan
                                    : Besked ved nye bookinger, ændringer og aflysninger.</span>
                            </li>
                            <li class="flex items-start gap-2">
                                <img src="{{ asset('images/arrowNew.png') }}" alt="Arrow Right"
                                    class="w-4 h-4 mt-1 text-[#3384FF]">
                                <span
                                    class="font-product-sans-regular text-[#2B70D8] text-[18px] font-normal leading-normal">Automatisk
                                    og intelligent : Besked ved nye bookinger, ændringer og aflysninger.</span>
                            </li>
                        </ul>
                        <p class="font-product-sans-regular text-[#858599] text-[16px] font-normal leading-normal">
                            Mindre spildtid. Færre misforståelser. Mere professionel drift.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <section id="" class="w-full bg-[#f3f8fd] md:p-[76px] text-black">
            <div
                class="max-w-[1280px] px-6 mx-auto flex flex-col md:flex-row items-start justify-center gap-[40px] z-10">
                <!-- Right Column (Image) -->
                <div
                    class="w-full md:w-1/2 flex justify-center opacity-0 translate-y-10 transition-all duration-700 ease-out animate-on-scroll">
                    <img src="{{ asset('images/synkroneseret.png') }}" alt="Administration System" class="">
                </div>
                <!-- Left Column (Text) -->
                <div
                    class="w-full md:w-1/2 space-y-2 opacity-0 translate-y-10 transition-all duration-700 ease-out animate-on-scroll delay-200">
                    <h2 class="font-product-sans-bold text-[#000] text-[28px] font-bold leading-normal">
                        Synkroniseret data – Altid opdateret. Altid sikkert.
                    </h2>
                    <p
                        class="font-product-sans-regular text-[#858599] text-[16px] font-normal leading-normal lowercase">
                        Just Driving synkroniserer alt i realtid: hold, elever, betalinger og lektionsplaner.<br />
                        Ingen
                        dobbeltindtastning. Ingen fejl. Ingen tabte oplysninger.
                    </p>
                    <p class="font-product-sans-bold text-[#000] text-[20px] font-bold leading-normal capitalize">
                        Fordele:
                    </p>

                    <ul class="space-y-3 mt-4">
                        <li class="flex items-start gap-2">
                            <img src="{{ asset('images/arrowNew.png') }}" alt="Arrow Right"
                                class="w-4 h-4 mt-1 text-[#3384FF]">
                            <span
                                class="font-product-sans-regular text-[#2B70D8] text-[18px] font-normal leading-normal lowercase">Realtidsopdatering
                                på tværs af hele systemet</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <img src="{{ asset('images/arrowNew.png') }}" alt="Arrow Right"
                                class="w-4 h-4 mt-1 text-[#3384FF]">
                            <span
                                class="font-product-sans-regular text-[#2B70D8] text-[18px] font-normal leading-normal lowercase">GDPR-sikker
                                datalagring.</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <img src="{{ asset('images/arrowNew.png') }}" alt="Arrow Right"
                                class="w-4 h-4 mt-1 text-[#3384FF]">
                            <span
                                class="font-product-sans-regular text-[#2B70D8] text-[18px] font-normal leading-normal lowercase">Ét
                                Adgangsstyring – kun de rigtige ser data</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <img src="{{ asset('images/arrowNew.png') }}" alt="Arrow Right"
                                class="w-4 h-4 mt-1 text-[#3384FF]">
                            <span
                                class="font-product-sans-regular text-[#2B70D8] text-[18px] font-normal leading-normal lowercase">Digital
                                elevmappe – alt samlet ét sted</span>
                        </li>
                    </ul>
                    <p class="font-product-sans-regular text-[#858599] text-[16px] font-normal leading-normal">
                        Ét system, der altid er opdateret – uden manuelt arbejde.
                    </p>
                </div>

            </div>
        </section>

        <!-- Features Section4 -->
        <section id="features-section4" class="w-full bg-white mx-auto px-6 pt-[170px] pb-[150px]">
            <div class="max-w-[1280px] mx-auto text-center">
                <!-- Title -->
                <h4 class="font-product-sans-bold text-[#000] text-[28px] font-bold leading-normal relative z-10">
                    Datastyring & overblik – Al information, ét sted
                </h4>

                <!-- Subtitle -->
                <p
                    class="font-product-sans-regular text-[#858599] text-[16px] font-normal leading-normal lowercase mt-4 relative z-10">
                    Få adgang til alle data, du behøver – når som helst.
                </p>

                @php
                    $features = [
                        [
                            'img' => 'data1.png',
                            'title' => 'Elevdata',
                            'desc' => 'Kontaktinfo, status, lektionsplaner, bookinger, betalinger og kommunikation.',
                        ],
                        [
                            'img' => 'data2.png',
                            'title' => 'Kørelærerdata',
                            'desc' => 'Skemaer, undervisning, fakturering, afdelinger og aktiviteter..',
                        ],
                        [
                            'img' => 'data3.png',
                            'title' => 'Køreskoledatakontrol',
                            'desc' => 'Struktur, rapporter, økonomi og administrative nøgletal samlet ét sted.',
                        ],

                    ];
                @endphp

                <!-- Card Grid -->
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 mt-8">
                    @foreach ($features as $index => $feature)
                        <div
                            class="relative bg-white rounded-[30px] shadow-xl border-[4px] border-[#f0f2f5] p-5 flex flex-col items-start hover:shadow-md hover:-translate-y-1 transition-all duration-300 group">
                            <img src="{{ asset('images/' . $feature['img']) }}" alt="{{ $feature['title'] }}"
                                class=" mb-4 transform transition-transform duration-300 group-hover:scale-105">

                            <h4 class="font-manrope-extrabold text-[#1B1C31] text-[24px] font-extrabold leading-[33px] mb-2 relative z-10"
                                style="letter-spacing: -0.72px;">
                                {{ $feature['title'] }}
                            </h4>

                            <p class="font-manrope-semibold text-[#747474] text-start text-[16px] font-semibold leading-normal relative z-10"
                                style="letter-spacing: -0.32px;">
                                {{ $feature['desc'] }}
                            </p>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>

        <!--SMS Notificationer-->
        <section id="SMS-Notificationer" class="bg-[#f3f8fd] text-black md:p-[76px] w-full">
            <div class="max-w-[1280px] mx-auto px-6 flex flex-col md:flex-row items-center gap-3 overflow-hidden z-10">
                <!-- Right Column (text) -->
                <div
                    class="w-full md:w-1/2 space-y-4 opacity-0 translate-y-10 transition-all duration-700 ease-out animate-on-scroll delay-200">
                    <h4 class="font-product-sans-bold text-[#000] text-[28px] font-bold leading-normal ">
                        SMS-notifikationer – Vigtig information leveret med det samme
                    </h4>
                    <p class="font-product-sans-regular text-[#858599] text-[16px] font-normal leading-normal ">
                        Just Driving sikrer, at alle kritiske beskeder når frem med det samme.
                    </p>
                    <p class="font-product-sans-bold text-[#000] text-[20px] font-bold leading-normal ">
                        Eksempler på automatiske SMS'er:
                    </p>

                    <ul class="space-y-3 mt-4">
                        <li class="flex items-start gap-2">
                            <img src="{{ asset('images/arrowNew.png') }}" alt="Arrow Right"
                                class="w-4 h-4 mt-1 text-[#3384FF]">
                            <span
                                class="font-product-sans-regular text-[#2B70D8] text-[18px] font-normal leading-normal lowercase">Lektioner
                                ændret/aflyst</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <img src="{{ asset('images/arrowNew.png') }}" alt="Arrow Right"
                                class="w-4 h-4 mt-1 text-[#3384FF]">
                            <span
                                class="font-product-sans-regular text-[#2B70D8] text-[18px] font-normal leading-normal lowercase">Bekræftelser
                                på reservationer</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <img src="{{ asset('images/arrowNew.png') }}" alt="Arrow Right"
                                class="w-4 h-4 mt-1 text-[#3384FF]">
                            <span
                                class="font-product-sans-regular text-[#2B70D8] text-[18px] font-normal leading-normal lowercase">Betalingspåmindelser</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <img src="{{ asset('images/arrowNew.png') }}" alt="Arrow Right"
                                class="w-4 h-4 mt-1 text-[#3384FF]">
                            <span
                                class="font-product-sans-regular text-[#2B70D8] text-[18px] font-normal leading-normal lowercase">Vigtige
                                beskeder fra køreskolen</span>
                        </li>
                    </ul>
                    <p class="font-product-sans-regular text-[#858599] text-[16px] font-normal leading-normal">
                        Elever og kørelærere modtager samme besked samtidig – helt uden manuelt arbejde.
                    </p>
                </div>

                <!-- Left Column (image) -->
                <div
                    class="w-full md:w-1/2 flex justify-center opacity-0 translate-y-10 transition-all duration-700 ease-out animate-on-scroll">
                    <img src="{{ asset('images/sms.png') }}" alt="Administration System" class="">
                </div>
            </div>
        </section>

        <!-- Data Sikkerhed -->
        <div class="w-full bg-white">
            <section style="border: 3px solid rgba(43, 112, 216, 0.50);"
                class="w-[90vw] md:max-w-[1280px] mx-auto bg-[#e2ebf4] rounded-[40px] p-[50px] mt-[140px] mb-[196px]">
                <div class="flex flex-col md:flex-row gap-8 md:gap-24">
                    <!-- Left Column -->
                    <div class="w-full md:w-1/2 flex flex-col items-start">
                        <!-- Tag -->
                        <div
                            class="flex items-center justify-center bg-white px-4 py-2 rounded-2xl shadow-sm mb-6 border border-gray-100 font-product-sans-regular text-[#171717] text-center text-[18px] font-normal leading-normal">
                            Data sikkerhed
                        </div>

                        <!-- Main Heading -->
                        <h4 class="font-manrope-extrabold text-[#171717] text-[28px] md:text-[48px] font-extrabold leading-[46px] mb-6"
                            style="">
                            Datasikkerhed – Tryghed for dig og dine elever
                        </h4>

                        <!-- First Paragraph -->
                        <p class="font-manrope-medium text-[#181433] text-[20px] font-medium leading-[36px] mb-4"
                            style="letter-spacing: -0.4px;">
                            Just Driving er bygget med fokus på sikkerhed, stabil drift og GDPR-overholdelse.
                        </p>
                        <p class="font-manrope-bold text-[#000] text-[20px] font-bold leading-[36px] mb-4"
                            style="letter-spacing: -0.4px;">
                            Dine data er beskyttet året rundt – sikkert, stabilt og GDPR-kompatibelt.
                        </p>
                    </div>

                    <!-- Right Column -->
                    <div class="w-full md:w-1/2 flex flex-col items-start">
                        <!-- Section Title -->
                        <h4 class="font-manrope-bold text-[#000] text-[24px] font-bold leading-[36px] mt-[72px] mb-10"
                            style="letter-spacing: -0.48px;">
                            Vi sikrer:
                        </h4>

                        <!-- Feature List -->
                        <ul class="space-y-8">
                            <li class="flex items-start gap-3">
                                <img src="{{ asset('images/arrowNew.png') }}" alt="Arrow Right"
                                    class="w-5 h-5 mt-0.5 flex-shrink-0">
                                <span
                                    class="font-product-sans-regular text-[#000] text-[18px] font-normal leading-normal capitalize">
                                    Fuld adgang til alle data med dansk hosting og høj sikkerhed.
                                </span>
                            </li>
                            <li class="flex items-start gap-3">
                                <img src="{{ asset('images/arrowNew.png') }}" alt="Arrow Right"
                                    class="w-5 h-5 mt-0.5 flex-shrink-0">
                                <span
                                    class="font-product-sans-regular text-[#000] text-[18px] font-normal leading-normal capitalize">
                                    Automatiske backups på time-, dags-, uge- og månedsbasis.
                                </span>
                            </li>
                            <li class="flex items-start gap-3">
                                <img src="{{ asset('images/arrowNew.png') }}" alt="Arrow Right"
                                    class="w-5 h-5 mt-0.5 flex-shrink-0">
                                <span
                                    class="font-product-sans-regular text-[#000] text-[18px] font-normal leading-normal capitalize">
                                    Løbende opdateringer og stabil drift uden afbrydelser.
                                </span>
                            </li>
                            <li class="flex items-start gap-3">
                                <img src="{{ asset('images/arrowNew.png') }}" alt="Arrow Right"
                                    class="w-5 h-5 mt-0.5 flex-shrink-0">
                                <span
                                    class="font-product-sans-regular text-[#000] text-[18px] font-normal leading-normal capitalize">
                                    Logning og adgangskontrol sikrer fuld sporbarhed og kontrol.
                                </span>
                            </li>

                        </ul>
                    </div>
                </div>

            </section>
        </div>

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
        });
    </script>
</body>

</html>