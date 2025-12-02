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
            <!-- Title -->
            <h1 class="text-xl sm:text-3xl md:text-4xl lg:text-5xl font-bold text-black relative z-10">
                Online administrationssystem – Alt samlet ét sted
            </h1>

            <!-- Subtitle -->
            <p
                class="w-full sm:max-w-5xl mx-auto px-3 sm:px-0 mt-4 text-[#858599] text-[24px] font-medium relative z-10">
                Med Just Driving får du ét samlet system, der håndterer alle dine administrative opgaver hurtigt,
                sikkert og effektivt. Du slipper for flere systemer og manuelle arbejdsgange.
            </p>
            <!-- CTA Button -->
            <div class="mt-4 relative z-10">
                <a href="#"
                    class="inline-flex items-center bg-[#3384FF] text-[16px] font-bold text-white px-6 py-3 rounded-xl shadow-md hover:bg-[#2563EB] transition">
                    Prøve administrationssystem
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
        <section class="w-full mx-auto mt-24 sm:mt-20 px-6 py-0 sm:py-5 text-center relative overflow-hidden">
            <!-- Title -->
            <h1 class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl font-bold leading-tight text-black relative z-10">
                Du får blandt andet
            </h1>

            <!-- Cards Grid -->
            <div class="max-w-5xl mx-auto flex flex-wrap justify-center gap-8 mt-12">
                @foreach ($features as $feature)
                    <div
                        class="bg-[#F5f5f5] p-1 rounded-2xl shadow-sm transition-all duration-300 ease-out hover:-translate-y-2 hover:shadow-xl hover:bg-white w-full sm:w-[calc(50%-1rem)] md:w-[calc(33.333%-1.33rem)] lg:w-[calc(25%-1.5rem)] max-w-[280px]">
                        <!-- Icon Section -->
                        <div
                            class="bg-[#EAEFF4] py-10 flex items-center justify-center rounded-t-2xl transition-all duration-300 hover:bg-[#DCE8F5]">
                            <div
                                class="mx-auto rounded-lg flex items-center justify-center transform transition-transform duration-300 hover:scale-110">
                                <img src="{{ $feature['icon'] }}" alt="Icon" class="w-20 h-20" />
                            </div>
                        </div>

                        <!-- Text Section -->
                        <div class="flex flex-col my-3 pl-5 items-start transition-all duration-300">
                            <p class="text-[#858599] text-start w-[95%] text-[16px]">{{ $feature['description'] }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
            <p class="text-center text-[24px] py-10 font-semibold text-[#858599]">
                Ét login. Ét system. Fuld kontrol over hele din køreskole.
            </p>
        </section>

        <!-- Info Section -->
        <section id="holdadministration"
            class="max-w-full 2xl:max-w-7xl mx-auto text-black py-5 px-6 md:px-10 lg:px-20 flex flex-col md:flex-row items-start mt-10 gap-3 overflow-hidden z-10">

            <!-- Left Column (Image) -->
            <div
                class="w-full md:w-1/2 flex justify-start translate-y-10 transition-all duration-700 ease-out animate-on-scroll">
                <img src="{{ asset('images/admin-system.png') }}" alt="Administration System"
                    class="w-full max-w-[500px]">
            </div>

            <!-- Right Column (Text Content) -->
            <div
                class="w-full md:w-1/2 space-y-4 translate-y-10 transition-all duration-700 ease-out animate-on-scroll delay-200">
                <h2 class="text-2xl capitalize font-bold text-black">
                    Holdadministration – Automatisk overblik fra start til slut
                </h2>
                <p class="text-[#858599] text-[16px]">
                    Just Driving giver dig intelligent og fleksibel holdstyring, der gør både oprettelse, tilmelding,
                    betaling og lektionsplanlægning problemfri.
                </p>
                <p class="text-[#858599] text-[16px]">
                    Elever kan tilmelde sig direkte fra din hjemmeside, og systemet håndterer resten automatisk.
                </p>
                <p class="text-black text-base font-semibold">
                    Du får:
                </p>

                <ul class="space-y-3 text-[#3384FF] text-[16px] font-semibold mt-4">
                    <li class="flex items-start gap-2">
                        <img src="{{ asset('images/arrowNew.png') }}" alt="Arrow Right"
                            class="w-4 h-4 mt-1 text-[#3384FF]">
                        <span>Fuld oversigt over alle aktive, kommende og afsluttede hold.</span>
                    </li>
                    <li class="flex items-start gap-2">
                        <img src="{{ asset('images/arrowNew.png') }}" alt="Arrow Right"
                            class="w-4 h-4 mt-1 text-[#3384FF]">
                        <span>Automatisk betaling ved tilmelding og færre administrative fejl.</span>
                    </li>
                    <li class="flex items-start gap-2">
                        <img src="{{ asset('images/arrowNew.png') }}" alt="Arrow Right"
                            class="w-4 h-4 mt-1 text-[#3384FF]">
                        <span>API-integration til din hjemmeside og digital lektionsplan for hvert hold.</span>
                    </li>
                    <li class="flex items-start gap-2">
                        <img src="{{ asset('images/arrowNew.png') }}" alt="Arrow Right"
                            class="w-4 h-4 mt-1 text-[#3384FF]">
                        <span>Alt synkroniseres automatisk med elevens profil og logbog for et nemt workflow.</span>
                    </li>
                </ul>
            </div>
        </section>
        <p class="text-center text-[16px] py-10 font-semibold text-[#858599]">
            Holdadministration har aldrig været nemmere – ét login styrer hele forløbet.
        </p>

        <!-- Features Section -->
        <section id="features-section"
            class="max-w-full 2xl:max-w-7xl mx-auto py-16 px-6 md:px-10 lg:px-20 overflow-hidden">
            <div class="max-w-full mx-auto text-center">
                <h2 class="text-[28px] capitalize font-bold text-black">
                    Holdadministration – Effektiv styring med automatisk flow
                </h2>
                <p class="text-[#858599] text-[16px] font-normal mt-3">
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
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8 mt-10">
                    @foreach ($features as $index => $feature)
                        <div class="relative bg-white rounded-2xl shadow-md p-6 flex flex-col items-start hover:-translate-y-2 hover:bg-gradient-to-b from-[#f9f9ff] to-[#e8f2ff] transition-all duration-500 opacity-0 translate-y-10 animate-on-scroll group"
                            style="transition-delay: {{ $index * 100 }}ms;">

                            <!-- Glow effect -->
                            <div
                                class="absolute inset-0 rounded-2xl bg-gradient-to-tr from-blue-400/10 to-transparent 
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        opacity-0 group-hover:opacity-100 blur-lg transition duration-500">
                            </div>

                            <img src="{{ asset('images/' . $feature['img']) }}" alt="{{ $feature['title'] }}"
                                class="w-12 h-12 mb-4 transform transition-transform duration-500 group-hover:scale-110 group-hover:rotate-6">

                            <h3
                                class="text-[24px] font-semibold text-black mb-2 relative z-10 group-hover:text-[#248ec1] transition-colors duration-300">
                                {{ $feature['title'] }}
                            </h3>

                            <p
                                class="text-[#858599] text-start text-[16px] relative z-10 group-hover:text-[#4a4a5e] transition-colors duration-300">
                                {{ $feature['desc'] }}
                            </p>
                        </div>
                    @endforeach
                </div>

                <p class="text-center mt-4 text-[20px] py-3 font-semibold text-black">
                    Resultatet:
                </p>
                <p class="text-center text-[20px] font-semibold text-[#858599]">
                     Et komplet, synkroniseret holdflow – fra oprettelse til undervisning og betaling.
                </p>
            </div>
        </section>

        <!-- Info Section2 -->
        <section id="afdelinger" class="w-full bg-[#f3f8fd] text-black ">
            <div
                class="w-full 2xl:max-w-7xl mx-auto py-5 px-6 md:px-10 lg:px-20 flex flex-col md:flex-row items-start mt-5 gap-3 overflow-hidden z-10">
                <!-- Left Column (Text) -->
                <div
                    class="w-full md:w-1/2 space-y-4 opacity-0 translate-y-10 transition-all duration-700 ease-out animate-on-scroll delay-200">
                    <h2 class="text-[28px] capitalize font-bold text-black">
                        Afdelingsstyring – Én platform til alle dine lokationer
                    </h2>
                    <p class="text-[#858599] font-normal text-[16px]">
                        Vil du udvide din køreskole uden ekstra administrativt kaos? Med Just Driving kan du oprette og
                        administrere ubegrænset antal afdelinger i ét samlet system.
                    </p>
                    <p class="text-black font-semibold text-base">
                        Fordele:
                    </p>

                    <ul class="space-y-3 text-[#3384FF] text-[18px] font-semibold mt-4">
                        <li class="flex items-start gap-2">
                            <img src="{{ asset('images/arrowNew.png') }}" alt="Arrow Right"
                                class="w-4 h-4 mt-1 text-[#3384FF]">
                            <span>Opret ubegrænsede afdelinger og administrér dem samlet ét sted.</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <img src="{{ asset('images/arrowNew.png') }}" alt="Arrow Right"
                                class="w-4 h-4 mt-1 text-[#3384FF]">
                            <span>Kørelærere tilknyttes automatisk de rette afdelinger og kan arbejde på tværs.</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <img src="{{ asset('images/arrowNew.png') }}" alt="Arrow Right"
                                class="w-4 h-4 mt-1 text-[#3384FF]">
                            <span>Ét login giver fuldt centralt overblik over struktur, elever og aktiviteter.</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <img src="{{ asset('images/arrowNew.png') }}" alt="Arrow Right"
                                class="w-4 h-4 mt-1 text-[#3384FF]">
                            <span>Klar økonomioversigt pr. afdeling for nem styring og kontrol.</span>
                        </li>

                    </ul>
                </div>
                <!-- Right Column (Image) -->
                <div
                    class="w-full md:w-1/2 flex justify-end opacity-0 translate-y-10 transition-all duration-700 ease-out animate-on-scroll">
                    <img src="{{ asset('images/feature2.png') }}" alt="Administration System" class="w-full">
                </div>
            </div>
        </section>
        <p class="text-center w-full text-[16px] pb-10 bg-[#f3f8fd] font-semibold text-[#858599]">
            Holdadministration har aldrig været nemmere – ét login styrer hele forløbet.
        </p>

        <!-- Features Section2 -->
        <section id="features-section2"
            class="max-w-full 2xl:max-w-7xl mx-auto py-20 px-6 md:px-10 lg:px-20 overflow-hidden">
            <div class="max-w-full mx-auto text-center">
                <!-- Title -->
                <h1 class="text-2xl sm:text-3xl font-bold leading-tight text-black relative z-10">
                    Afdelingsstyring – Skalér Din Køreskole Uden Besvær
                </h1>

                <!-- Subtitle -->
                <p class="w-[90vw] md:w-[60vw] mx-auto mt-4 text-[#858599] text-base font-normal relative z-10">
                    Just Driving Giver Dig Alle Værktøjer Til At Drifte Og Vækste Professionelt, Uanset Størrelse.
                </p>

                @php
                    $features = [
                        [
                            'img' => 'afdelin1.png',
                            'title' => 'Afdelinger',
                            'desc' => 'Opret ubegrænsede afdelinger og få et klart overblik over elever, hold og kørelærere.',
                        ],
                        [
                            'img' => 'afdelin2.png',
                            'title' => 'Kørelærere',
                            'desc' => 'Tildel kørelærere til afdelinger med få klik - perfekt også for selvstændige, der arbejder flere steder.',
                        ],
                        [
                            'img' => 'afdelin3.png',
                            'title' => 'Elever & hold',
                            'desc' => 'Elever tilknyttes automatisk korrekt afdeling gennem kørelæreren. Hold organiseres pr. afdeling.',
                        ],
                        [
                            'img' => 'afdelin4.png',
                            'title' => 'Ledelsesoverblik',
                            'desc' => 'Følg elevstatus, økonomi og aktiviteter på tværs af alle lokationer fra ét login.',
                        ],
                    ];
                @endphp

                <!-- Card Grid -->
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-2 gap-6 mt-12 max-w-6xl mx-auto">
                    @foreach ($features as $index => $feature)
                        <div
                            class="relative bg-white rounded-2xl shadow-xl border border-gray-100 p-6 flex flex-col items-start hover:shadow-md hover:-translate-y-1 transition-all duration-300 group">
                            <img src="{{ asset('images/' . $feature['img']) }}" alt="{{ $feature['title'] }}"
                                class=" mb-4 transform transition-transform duration-300 group-hover:scale-105">

                            <h3 class="text-[24px] font-bold text-black mb-2 relative z-10">
                                {{ $feature['title'] }}
                            </h3>

                            <p class="text-[#858599] text-start text-[16px] leading-relaxed relative z-10">
                                {{ $feature['desc'] }}
                            </p>
                        </div>
                    @endforeach
                </div>

                <!-- Footer Text -->
                <p class="text-black font-bold text-[20px] mt-6 relative z-10">
                    Én Platform. Én Struktur. Fuld Skalering Uden Besvær.
                </p>
            </div>
        </section>


        <!-- Info Section3 -->
        <section id="Gå-aldrig"
            class="max-w-full 2xl:max-w-7xl mx-auto text-black py-5 px-6 md:px-10 lg:px-20 flex flex-col md:flex-row items-start mt-5 gap-10 overflow-hidden z-10">
            <!-- Left Column (image) -->
            <div
                class="w-full md:w-1/3 flex justify-center md:justify-end opacity-0 translate-y-10 transition-all duration-700 ease-out animate-on-scroll">
                <img src="{{ asset('images/scope.png') }}" alt="Administration System" class=" object-cover">
            </div>
            <!-- Right Column (text) -->
            <div
                class="w-full md:w-2/3 space-y-4 opacity-0 translate-y-10 transition-all duration-700 ease-out animate-on-scroll delay-200">
                <h2 class="text-[28px] capitalize font-bold text-black">
                    Automatisk notifikationssystem – Gå aldrig glip af en aftale
                </h2>
                <p class="text-[#858599] font-normal text-[16px]">
                    Just Driving sender automatisk SMS- og e-mailnotifikationer til både elev og kørelærer, så alle
                    altid er opdaterede.
                </p>
                <p class="text-black font-bold text-base">
                    Systemet sender automatisk besked ved:
                </p>


                <ul class="space-y-3 text-[#3384FF] text-[18px] font-semibold mt-4">
                    <li class="flex items-start gap-2">
                        <img src="{{ asset('images/arrowNew.png') }}" alt="Arrow Right" class="w-4 h-4 mt-1">
                        <span>Ændringer, aflysninger og nye lektioner</span>
                    </li>
                    <li class="flex items-start gap-2">
                        <img src="{{ asset('images/arrowNew.png') }}" alt="Arrow Right" class="w-4 h-4 mt-1">
                        <span>Reservationer og tilmeldinger</span>
                    </li>
                    <li class="flex items-start gap-2">
                        <img src="{{ asset('images/arrowNew.png') }}" alt="Arrow Right" class="w-4 h-4 mt-1">
                        <span>Betalingspåmindelser og frister</span>
                    </li>
                    <li class="flex items-start gap-2">
                        <img src="{{ asset('images/arrowNew.png') }}" alt="Arrow Right" class="w-4 h-4 mt-1">
                        <span>Udeblivelser og annulleringer</span>
                    </li>

                </ul>
                <p class="text-[#858599] font-normal text-base">
                    Reducer no-shows, skab klar kommunikation og spar tid – helt automatisk.
                </p>
            </div>
        </section>

        <!-- Features Section3 -->
        <section id="features-section3"
            class="w-full 2xl:max-w-7xl mx-auto py-20 px-6 md:px-10 lg:px-20 overflow-hidden">
            <div class="w-full mx-auto text-center">
                <!-- Title -->
                <h1 class="text-2xl sm:text-[28px] capitalize font-bold leading-tight text-black relative z-10">
                    Notifikationssystem – Automatisk besked, hver gang det gælder
                </h1>

                <!-- Subtitle -->
                <p
                    class="w-[90vw] md:w-[50vw] capitalize mx-auto mt-4 text-[#858599] font-normal text-base relative z-10">
                    Notifikationer opdateres i realtid, så ingen misser vigtige aftaler.
                </p>

                <p class="mt-4 text-black relative z-10 text-[20px] font-bold capitalize">
                    Du får bl.a.:
                </p>

                @php
                    $features = [
                        [
                            'img' => 'noti1.png',
                            'title' => 'Lektioner',
                            'desc' => 'Besked ved nye bookinger, ændringer og aflysninger.',
                        ],
                        [
                            'img' => 'noti2.png',
                            'title' => 'Betalinger',
                            'desc' => 'Automatiske påmindelser og bekræftelser.',
                        ],
                        [
                            'img' => 'noti3.png',
                            'title' => 'Lektionsplan',
                            'desc' => 'Elever får løbende opdateringer på deres progression.',
                        ],
                        [
                            'img' => 'noti4.png',
                            'title' => 'Automatisk og intelligent',
                            'desc' => 'Opsæt det én gang – systemet klarer resten.',
                        ],
                    ];
                @endphp

                <!-- Card Grid -->
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-2 gap-6 mt-4 max-w-6xl mx-auto">
                    @foreach ($features as $index => $feature)
                        <div
                            class="relative bg-white rounded-2xl shadow-xl border border-gray-100 p-6 flex flex-col items-start hover:shadow-md hover:-translate-y-1 transition-all duration-300 group">
                            <img src="{{ asset('images/' . $feature['img']) }}" alt="{{ $feature['title'] }}"
                                class=" mb-4 transform transition-transform duration-300 group-hover:scale-105">

                            <h3 class="text-[24px] font-bold text-black mb-2 relative z-10">
                                {{ $feature['title'] }}
                            </h3>

                            <p class="text-[#858599] text-start font-normal text-base leading-relaxed relative z-10">
                                {{ $feature['desc'] }}
                            </p>
                        </div>
                    @endforeach
                </div>

                <!-- Footer Text -->
                <p class="text-black capitalize text-base font-bold mt-6 relative z-10">
                    Mindre spildtid. Færre misforståelser. Mere professionel drift.
                </p>
            </div>
        </section>

        <!--Synkroniseret data-->
        <section id="Synkroniseret" class="w-full bg-[#f3f8fd] text-black">
            <div
                class="w-full 2xl:max-w-7xl mx-auto py-10 px-10 md:px-20 flex flex-col md:flex-row items-center mt-10 gap-3 overflow-hidden z-10">
                <!-- Left Column (image) -->
                <div
                    class="w-full md:w-1/2 flex justify-start opacity-0 translate-y-10 transition-all duration-700 ease-out animate-on-scroll">
                    <img src="{{ asset('images/synkroneseret.png') }}" alt="Administration System"
                        class="w-full max-w-[500px] object-cover">
                </div>
                <!-- Right Column (text) -->
                <div
                    class="w-full md:w-1/2 space-y-4 opacity-0 translate-y-10 transition-all duration-700 ease-out animate-on-scroll delay-200">
                    <h2 class="text-[28px] capitalize font-bold text-black">
                        Synkroniseret data – Altid opdateret. Altid sikkert.
                    </h2>
                    <p class="text-[#858599] font-normal text-base">
                        Just Driving synkroniserer alt i realtid: hold, elever, betalinger og lektionsplaner.  Ingen
                        dobbeltindtastning. Ingen fejl. Ingen tabte oplysninger.
                    </p>
                    <p class="text-black font-bold text-base">
                        Fordele:
                    </p>

                    <ul class="space-y-8 text-[#3384FF] text-[18px] font-normal mt-4">
                        <li class="flex items-start gap-2">
                            <img src="{{ asset('images/arrowNew.png') }}" alt="Arrow Right"
                                class="w-4 h-4 mt-1 text-[#3384FF]">
                            <span>Realtidsopdatering på tværs af hele systemet.</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <img src="{{ asset('images/arrowNew.png') }}" alt="Arrow Right"
                                class="w-4 h-4 mt-1 text-[#3384FF]">
                            <span>GDPR-sikker datalagring</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <img src="{{ asset('images/arrowNew.png') }}" alt="Arrow Right"
                                class="w-4 h-4 mt-1 text-[#3384FF]">
                            <span>Adgangsstyring – kun de rigtige ser data.</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <img src="{{ asset('images/arrowNew.png') }}" alt="Arrow Right"
                                class="w-4 h-4 mt-1 text-[#3384FF]">
                            <span>Digital elevmappe – alt samlet ét sted</span>
                        </li>
                    </ul>
                    <p class="text-[#858599] mt-4 text-base font-semibold">
                        Ét system, der altid er opdateret – uden manuelt arbejde.
                    </p>
                </div>
            </div>
        </section>

        <!-- Features Section4 -->
        <section id="features-section4"
            class="w-full 2xl:max-w-7xl mx-auto py-20 px-6 md:px-10 lg:px-20 overflow-hidden">
            <div class="w-full mx-auto text-center">
                <!-- Title -->
                <h1 class="text-2xl sm:text-[28px] capitalize font-bold leading-tight text-black relative z-10">
                    Datastyring & overblik – Al information, ét sted
                </h1>

                <!-- Subtitle -->
                <p class="mt-4 text-[#858599] font-normal text-base relative z-10">
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
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 mt-12 max-w-6xl mx-auto">
                    @foreach ($features as $index => $feature)
                        <div
                            class="relative bg-white rounded-2xl shadow-xl border border-gray-100 p-6 flex flex-col items-start hover:shadow-md hover:-translate-y-1 transition-all duration-300 group">
                            <img src="{{ asset('images/' . $feature['img']) }}" alt="{{ $feature['title'] }}"
                                class=" mb-4 transform transition-transform duration-300 group-hover:scale-105">

                            <h3 class="text-[24px] font-semibold text-black mb-2 relative z-10">
                                {{ $feature['title'] }}
                            </h3>

                            <p class="text-[#858599] text-start text-base leading-relaxed relative z-10">
                                {{ $feature['desc'] }}
                            </p>
                        </div>
                    @endforeach
                </div>

                <!-- Footer Text -->
                <p class="text-black text-[20px] capitalize font-bold mt-6 relative z-10">
                    Professionel datastyring, der gør hverdagen enklere og mere effektiv.
                </p>
            </div>
        </section>

        <!--SMS Notificationer-->
        <section id="SMS-Notificationer" class="bg-[#f3f8fd] text-black w-full">
            <div
                class="w-full 2xl:max-w-7xl mx-auto py-10 md:py-16 px-6 md:px-10 lg:px-20 flex flex-col md:flex-row items-center mt-4 gap-3 overflow-hidden z-10">
                <!-- Right Column (text) -->
                <div
                    class="w-full md:w-1/2 space-y-4 opacity-0 translate-y-10 transition-all duration-700 ease-out animate-on-scroll delay-200">
                    <h2 class="text-[28px] capitalize font-bold text-black">
                        SMS-notifikationer – Vigtig information leveret med det samme
                    </h2>
                    <p class="text-[#858599]  text-base font-normal">
                        Just Driving sikrer, at alle kritiske beskeder når frem med det samme.
                    </p>
                    <p class="text-black font-semibold text-base">
                        Eksempler på automatiske SMS’er:
                    </p>

                    <ul class="space-y-5 text-[#3384FF] text-[18px] font-semibold mt-4">
                        <li class="flex items-start gap-2">
                            <img src="{{ asset('images/arrowNew.png') }}" alt="Arrow Right"
                                class="w-4 h-4 mt-1 text-[#3384FF]">
                            <span>Lektioner ændret/aflyst</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <img src="{{ asset('images/arrowNew.png') }}" alt="Arrow Right"
                                class="w-4 h-4 mt-1 text-[#3384FF]">
                            <span>Bekræftelser på reservationer.</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <img src="{{ asset('images/arrowNew.png') }}" alt="Arrow Right"
                                class="w-4 h-4 mt-1 text-[#3384FF]">
                            <span>Overskredet betalingsfrister.</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <img src="{{ asset('images/arrowNew.png') }}" alt="Arrow Right"
                                class="w-4 h-4 mt-1 text-[#3384FF]">
                            <span>Vigtige beskeder fra køreskolen</span>
                        </li>
                    </ul>
                    <p class="text-[#858599] text-base font-semibold">
                        Elever og kørelærere modtager samme besked samtidig – helt uden manuelt arbejde.
                    </p>
                </div>

                <!-- Left Column (image) -->
                <div
                    class="w-full md:w-1/2 flex justify-center opacity-0 translate-y-10 transition-all duration-700 ease-out animate-on-scroll">
                    <img src="{{ asset('images/sms.png') }}" alt="Administration System"
                        class="w-full max-w-[450px] object-cover">
                </div>
            </div>
        </section>

        <!-- Data Sikkerhed -->
        <section
            class="max-w-6xl mx-auto bg-[#eaeff4] rounded-2xl py-10 px-6 md:px-10 lg:px-20 mt-24 sm:mt-16 relative overflow-hidden">
            <div class="flex flex-col md:flex-row gap-8 md:gap-24">
                <!-- Left Column -->
                <div class="w-full md:w-1/2 flex flex-col items-start">
                    <!-- Tag -->
                    <div
                        class="flex items-center justify-center bg-white text-gray-700 px-4 py-2 rounded-2xl text-sm font-medium shadow-sm mb-6 border border-gray-100">
                        Data sikkerhed
                    </div>

                    <!-- Main Heading -->
                    <h1 class="text-2xl sm:text-3xl md:text-4xl font-bold text-black mb-6">
                        Datasikkerhed – Tryghed for dig og dine elever
                    </h1>

                    <!-- First Paragraph -->
                    <p class="text-[#858599] text-[22px] font-medium mb-4 leading-relaxed">
                        Just Driving er bygget med fokus på sikkerhed, stabil drift og GDPR-overholdelse.
                    </p>
                    <p class="text-[#858599] text-[22px] font-bold mb-4 leading-relaxed">
                        Dine data er beskyttet året rundt – sikkert, stabilt og GDPR-kompatibelt.
                    </p>
                </div>

                <!-- Right Column -->
                <div class="w-full md:w-1/2 flex flex-col items-start">
                    <!-- Section Title -->
                    <h2 class="text-[24px] font-bold text-black mb-6">
                        Vi sikrer:
                    </h2>

                    <!-- Feature List -->
                    <ul class="space-y-6 text-[#3384FF] text-[18px] font-normal">
                        <li class="flex items-start gap-3">
                            <img src="{{ asset('images/arrowNew.png') }}" alt="Arrow Right"
                                class="w-5 h-5 mt-0.5 flex-shrink-0">
                            <span class="leading-relaxed">
                                Fuld adgang til alle data med dansk hosting og høj sikkerhed.
                            </span>
                        </li>
                        <li class="flex items-start gap-3">
                            <img src="{{ asset('images/arrowNew.png') }}" alt="Arrow Right"
                                class="w-5 h-5 mt-0.5 flex-shrink-0">
                            <span class="leading-relaxed">
                                Automatiske backups på time-, dags-, uge- og månedsbasis.
                            </span>
                        </li>
                        <li class="flex items-start gap-3">
                            <img src="{{ asset('images/arrowNew.png') }}" alt="Arrow Right"
                                class="w-5 h-5 mt-0.5 flex-shrink-0">
                            <span class="leading-relaxed">
                                Løbende opdateringer og stabil drift uden afbrydelser.
                            </span>
                        </li>
                        <li class="flex items-start gap-3">
                            <img src="{{ asset('images/arrowNew.png') }}" alt="Arrow Right"
                                class="w-5 h-5 mt-0.5 flex-shrink-0">
                            <span class="leading-relaxed">
                                Logning og adgangskontrol sikrer fuld sporbarhed og kontrol.
                            </span>
                        </li>

                    </ul>
                </div>
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