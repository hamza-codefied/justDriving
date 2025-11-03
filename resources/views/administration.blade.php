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
    <div id="contentContainer" class="content-container">

        <!-- Hero Backgrounds -->
        <div class="hidden md:block hero-bg-right"></div>
        <div class="hidden md:blockhero-bg-left"></div>

        @include('layouts.header')

        <!-- Hero Section -->
        <section class="w-full mx-auto mt-16 text-center relative overflow-hidden">
            <!-- Title -->
            <h1 class="text-xl md:text-5xl font-bold text-gray-900 relative z-10">
                Online Administrationssystem
            </h1>

            <!-- Subtitle -->
            <p class="w-full sm:max-w-5xl mx-auto px-3 sm:px-0 mt-4 text-[#858599] text-sm sm:text-xl relative z-10">
                Administration tager tid i enhver virksomhed. Med Just Driving samler du alt ét sted og kan nemt styre
                elever, hold og data – selvfølgelig i overensstemmelse med gældende lovgivning.
            </p>

            <!-- CTA Button -->
            <div class="mt-4 pb-2 flex items-center justify-center gap-2 sm:gap-4 z-10">
                <a href="#"
                    class="bg-transparent hover:bg-[#3384FF] text-sm text-[#3384FF] hover:text-white border border-[#3384FF] px-6 py-3 rounded-xl font-semibold shadow-md transition">
                    prøv gratis nu
                </a>
                <a href="#"
                    class="bg-transparent hover:bg-[#3384FF] text-sm text-[#3384FF] hover:text-white border border-[#3384FF] px-6 py-3 rounded-xl font-semibold shadow-md transition">
                    Se Vores Priser
                </a>
            </div>


        </section>

        <!-- Info Section -->
        <section id="info-section"
            class="w-full text-gray-900 py-5 px-6 md:px-10 lg:px-20 flex flex-col md:flex-row items-start mt-10 gap-3 overflow-hidden z-10">

            <!-- Left Column (Image) -->
            <div
                class="w-full md:w-1/2 flex justify-start opacity-0 translate-y-10 transition-all duration-700 ease-out animate-on-scroll">
                <img src="{{ asset('images/admin-system.png') }}" alt="Administration System"
                    class="w-full max-w-[450px] rounded-2xl shadow-lg object-cover">
            </div>

            <!-- Right Column (Text Content) -->
            <div
                class="w-full md:w-1/2 space-y-4 opacity-0 translate-y-10 transition-all duration-700 ease-out animate-on-scroll delay-200">
                <h2 class="text-2xl font-bold text-[#1E1E1E]">
                    Holdadministration giver dig overblik
                </h2>
                <p class="text-[#858599] text-sm">
                    Uanset om du skal oprette nye hold, komplet med prisoversigt og lektionsplan, eller vil administrere
                    nuværende hold, kan du gøre det hele med Just Driving.
                </p>
                <p class="text-[#858599] text-sm">
                    Dine elever kan tilmelde sig dine hold direkte via din hjemmeside og al data sendes videre til Just
                    Driving med en simpel API, der integrerer din hjemmeside med vores system.
                </p>
                <p class="text-[#858599] text-sm">
                    For at sikre dig en så enkel og ligetil adgang, har du følgende primære funktioner i
                    holdadministrationsmodulet:
                </p>

                <ul class="space-y-3 text-[#444] text-sm font-semibold mt-4">
                    <li class="flex items-start gap-2">
                        <img src="{{ asset('images/arrowNew.png') }}" alt="Arrow Right" class="w-4 h-4 text-[#3384FF]">
                        <span>Fuld oversigt over alle hold</span>
                    </li>
                    <li class="flex items-start gap-2">
                        <img src="{{ asset('images/arrowNew.png') }}" alt="Arrow Right" class="w-4 h-4 text-[#3384FF]">
                        <span>Elever betaler automatisk når de tilmelder sig et hold</span>
                    </li>
                    <li class="flex items-start gap-2">
                        <img src="{{ asset('images/arrowNew.png') }}" alt="Arrow Right" class="w-4 h-4 text-[#3384FF]">
                        <span>Elever kan tilmelde sig direkte på din hjemmeside</span>
                    </li>
                    <li class="flex items-start gap-2">
                        <img src="{{ asset('images/arrowNew.png') }}" alt="Arrow Right" class="w-4 h-4 text-[#3384FF]">
                        <span>Eleven følger altid den lektionsplan, du har tilknyttet det enkelte hold</span>
                    </li>
                </ul>
            </div>
        </section>

        <!-- Features Section -->
        <section id="features-section" class="w-full py-16 px-6 md:px-10 lg:px-20 overflow-hidden">
            <div class="max-w-full mx-auto text-center">
                @php
                    $features = [
                        [
                            'img' => 'book.png',
                            'title' => 'Tilmelding',
                            'desc' => 'Eleven tilmelder sig selv til holdet, og Just Driving tager sig af alt betaling og registrering.',
                        ],
                        [
                            'img' => 'book.png',
                            'title' => 'Betalinger',
                            'desc' => 'Køreskolen sætter selv prisen på holdet, og Just Driving håndterer alle indbetalinger.',
                        ],
                        [
                            'img' => 'book.png',
                            'title' => 'Lektionsplan',
                            'desc' => 'Køreskolen tilknytter en lektionsplan til hvert hold, som eleven automatisk vil få tildelt.',
                        ],
                        [
                            'img' => 'book.png',
                            'title' => 'Kørelærer',
                            'desc' => 'Kørelæreren får automatisk tildelt adgang til alle elever på holdet.',
                        ],
                        [
                            'img' => 'book.png',
                            'title' => 'Afdeling',
                            'desc' => 'Hold kan oprettes på tværs af afdelinger i køreskolen.',
                        ],
                        [
                            'img' => 'book.png',
                            'title' => 'Faktura',
                            'desc' => 'Når eleverne betaler, modtager de automatisk kvittering.',
                        ],
                    ];
                @endphp

                <!-- Card Grid -->
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                    @foreach ($features as $index => $feature)
                        <div class="bg-white rounded-2xl shadow-md p-6 flex flex-col items-start hover:shadow-xl transition duration-300 opacity-0 translate-y-10 animate-on-scroll"
                            style="transition-delay: {{ $index * 100 }}ms;">
                            <img src="{{ asset('images/' . $feature['img']) }}" alt="{{ $feature['title'] }}"
                                class="w-16 h-16 mb-4">
                            <h3 class="text-lg font-semibold text-[#1E1E1E] mb-2">{{ $feature['title'] }}</h3>
                            <p class="text-[#858599] text-start text-sm">{{ $feature['desc'] }}</p>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>

        <!-- Info Section2 -->
        <section id="info-section2"
            class="w-full bg-[#f3f8fd] text-gray-900 py-5 px-6 md:px-10 lg:px-20 flex flex-col md:flex-row items-start mt-10 gap-3 overflow-hidden z-10">
            <!-- Left Column (Text) -->
            <div
                class="w-full md:w-1/2 space-y-4 opacity-0 translate-y-10 transition-all duration-700 ease-out animate-on-scroll delay-200">
                <h2 class="text-2xl capitalize font-bold text-[#1E1E1E]">
                    Hold styr på dine afdelinger
                </h2>
                <p class="text-[#858599]  text-sm">
                    Har du længe ønsket at udvide din køreskole med flere afdelinger, men er afskrækket af den ekstra
                    administrative byrde?
                </p>
                <p class="text-[#858599] text-sm">
                    Når du vælger Just Driving, får du adgang til alle dine afdelinger i samme system og kan med få,
                    enkle trin håndtere hver enkelt afdeling.
                </p>
                <p class="text-[#858599] text-sm">
                    Dine kørelærere får adgang til den afdeling, de er tilknyttet, og du har overblikket over alle dele
                    af din forretning samme sted :
                </p>

                <ul class="space-y-3 text-[#444] text-sm font-semibold mt-4">
                    <li class="flex items-start gap-2">
                        <img src="{{ asset('images/arrowNew.png') }}" alt="Arrow Right" class="w-4 h-4 text-[#3384FF]">
                        <span>Opret så mange afdelinger, du ønsker</span>
                    </li>
                    <li class="flex items-start gap-2">
                        <img src="{{ asset('images/arrowNew.png') }}" alt="Arrow Right" class="w-4 h-4 text-[#3384FF]">
                        <span>Kørelærere kan arbejde nemt og overskueligt på tværs af afdelinger</span>
                    </li>
                    <li class="flex items-start gap-2">
                        <img src="{{ asset('images/arrowNew.png') }}" alt="Arrow Right" class="w-4 h-4 text-[#3384FF]">
                        <span>Elever kan tilmelde sig direkte på din hjemmeside</span>
                    </li>

                </ul>
            </div>
            <!-- Right Column (Image) -->
            <div
                class="w-full md:w-1/2 flex justify-end opacity-0 translate-y-10 transition-all duration-700 ease-out animate-on-scroll">
                <img src="{{ asset('images/feature2.png') }}" alt="Administration System"
                    class="w-full max-w-[450px] rounded-2xl shadow-lg object-cover">
            </div>
        </section>

        <!-- Features Section2 -->
        <section id="features-section2" class="w-full bg-[#f3f8fd] py-10 px-6 md:px-10 lg:px-20 overflow-hidden">
            <div class="max-w-full mx-auto text-center">
                @php
                    $features = [
                        [
                            'img' => 'book.png',
                            'title' => 'Afdelinger',
                            'desc' => 'Din køreskole kan oprette så mange afdelinger du ønsker, med godt overblik over elever, kørelærer og hold i den enkelte afdeling.',
                        ],
                        [
                            'img' => 'book.png',
                            'title' => 'Kørelærere',
                            'desc' => 'Tildel nemt kørelærere til dine afdelinger, og hold styr på aftaler – også hvis du arbejder som selvstændig for flere køreskoler.',
                        ],
                        [
                            'img' => 'book.png',
                            'title' => 'Elever og hold',
                            'desc' => 'Elever knyttes direkte til deres kørelærer, hvorved de tildeles den rigtige afdeling. Ønsker du bedre overblik kan du inddele hold i afdelinger.',
                        ],

                    ];
                @endphp

                <!-- Card Grid -->
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                    @foreach ($features as $index => $feature)
                        <div class="bg-white rounded-2xl shadow-md p-6 flex flex-col items-start hover:shadow-xl transition duration-300 opacity-0 translate-y-10 animate-on-scroll"
                            style="transition-delay: {{ $index * 100 }}ms;">
                            <img src="{{ asset('images/' . $feature['img']) }}" alt="{{ $feature['title'] }}"
                                class="w-16 h-16 mb-4">
                            <h3 class="text-lg font-semibold text-[#1E1E1E] mb-2">{{ $feature['title'] }}</h3>
                            <p class="text-[#858599] text-start text-sm">{{ $feature['desc'] }}</p>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>

        <!-- Info Section3 -->
        <section id="info-section3"
            class="w-full text-gray-900 py-5 px-6 md:px-10 lg:px-20 flex flex-col md:flex-row items-start mt-10 gap-3 overflow-hidden z-10">
            <!-- Left Column (image) -->
            <div
                class="w-full md:w-1/2 flex justify-start opacity-0 translate-y-10 transition-all duration-700 ease-out animate-on-scroll">
                <img src="{{ asset('images/scope.png') }}" alt="Administration System"
                    class="w-full max-w-[450px] object-cover">
            </div>
            <!-- Right Column (text) -->
            <div
                class="w-full md:w-1/2 space-y-4 opacity-0 translate-y-10 transition-all duration-700 ease-out animate-on-scroll delay-200">
                <h2 class="text-2xl capitalize font-bold text-[#1E1E1E]">
                    Gå aldrig glip af en aftale
                </h2>
                <p class="text-[#858599]  text-sm">
                    Når du vælger Just Driving, får du adgang til automatiske notifikationer. Det giver dig det bedste
                    overblik over dine aftaler, og en direkte, digital måde at kommunikere med dine elever, hvis du er
                    nødt til at ændre eller aflyse en lektion.
                </p>
                <p class="text-[#858599] text-sm">
                    Det samme gælder, hvis en af dine elever er nødt til at ændre på sin aftale med dig. På den måde
                    mindsker du risikoen for forvirringer, spildtid og mistede aftaler, og du undgår tabt omsætning.
                </p>
                <p class="text-[#858599] text-sm">
                    Du kan bruge automatiske notifikationer til en stor del af din kommunikation med dine elever og være
                    sikker på, dine beskeder bliver set af dine elever.
                </p>

                <ul class="space-y-3 text-[#2b70d8] text-sm font-semibold mt-4">
                    <li class="flex items-start gap-2">
                        <img src="{{ asset('images/arrowNew.png') }}" alt="Arrow Right" class="w-4 h-4 text-[#3384FF]">
                        <span>Notifikationer via e-mail og sms til både elev og kørelærerr</span>
                    </li>
                    <li class="flex items-start gap-2">
                        <img src="{{ asset('images/arrowNew.png') }}" alt="Arrow Right" class="w-4 h-4 text-[#3384FF]">
                        <span>Automatisk set-up systemet sørger for informere så snart du foretager en
                            ændring</span>
                    </li>
                    <li class="flex items-start gap-2">
                        <img src="{{ asset('images/arrowNew.png') }}" alt="Arrow Right" class="w-4 h-4 text-[#3384FF]">
                        <span>Brug notifikationerne til betaling, reservationer, annulleringer og meget mere</span>
                    </li>

                </ul>
            </div>
        </section>

        <!-- Features Section3 -->
        <section id="features-section3" class="w-full py-5 px-6 md:px-10 lg:px-20 overflow-hidden">
            <div class="max-w-full mx-auto text-center">
                @php
                    $features = [
                        [
                            'img' => 'book.png',
                            'title' => 'Lektioner',
                            'desc' => 'Både kørelærer og elev får notifikationer om nye reservationer, annulleringer og ændringer.',
                        ],
                        [
                            'img' => 'book.png',
                            'title' => 'Betalinger',
                            'desc' => 'Modtag betalingsnotifikationer og påmindelser om forfaldne betalinger.',
                        ],
                        [
                            'img' => 'book.png',
                            'title' => 'Køreskole data',
                            'desc' => 'Komplet oversigt over køreskolens grunddata, aftaler, elever og kørelærer og meget mere.',
                        ],

                    ];
                @endphp

                <!-- Card Grid -->
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                    @foreach ($features as $index => $feature)
                        <div class="bg-white rounded-2xl shadow-md p-6 flex flex-col items-start hover:shadow-xl transition duration-300 opacity-0 translate-y-10 animate-on-scroll"
                            style="transition-delay: {{ $index * 100 }}ms;">
                            <img src="{{ asset('images/' . $feature['img']) }}" alt="{{ $feature['title'] }}"
                                class="w-16 h-16 mb-4">
                            <h3 class="text-lg font-semibold text-[#1E1E1E] mb-2">{{ $feature['title'] }}</h3>
                            <p class="text-[#858599] text-start text-sm">{{ $feature['desc'] }}</p>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>

        <!--SMS Notificationer-->
        <section id="SMS-Notificationer"
            class="w-full bg-[#f3f8fd] text-gray-900 py-5 px-6 md:px-10 lg:px-20 flex flex-col md:flex-row items-center mt-10 gap-3 overflow-hidden z-10">
            <!-- Left Column (image) -->
            <div
                class="w-full md:w-1/2 flex justify-start opacity-0 translate-y-10 transition-all duration-700 ease-out animate-on-scroll">
                <img src="{{ asset('images/sms.png') }}" alt="Administration System"
                    class="w-full max-w-[450px] object-cover">
            </div>
            <!-- Right Column (text) -->
            <div
                class="w-full md:w-1/2 space-y-4 opacity-0 translate-y-10 transition-all duration-700 ease-out animate-on-scroll delay-200">
                <h2 class="text-2xl capitalize font-bold text-[#1E1E1E]">
                    SMS Notifikationer
                </h2>
                <p class="text-[#858599]  text-sm">
                    Gå ikke glip af vigtig information via vores SMS notifikationer, som sendes ved vigtige ændringer i
                    din dag.
                </p>

                <ul class="space-y-3 text-black text-sm font-semibold mt-4">
                    <li class="flex items-start gap-2">
                        <img src="{{ asset('images/arrowNew.png') }}" alt="Arrow Right" class="w-4 h-4 text-[#3384FF]">
                        <span>Aflysninger eller ændringer på dine aftaler.</span>
                    </li>
                    <li class="flex items-start gap-2">
                        <img src="{{ asset('images/arrowNew.png') }}" alt="Arrow Right" class="w-4 h-4 text-[#3384FF]">
                        <span>Både kørelærer og elev modtager notifikationerne.</span>
                    </li>
                    <li class="flex items-start gap-2">
                        <img src="{{ asset('images/arrowNew.png') }}" alt="Arrow Right" class="w-4 h-4 text-[#3384FF]">
                        <span>Overskredet betalingsfrister.</span>
                    </li>

                </ul>
            </div>
        </section>

        <!-- Data Sikkerhed -->
        <section
            class="w-[90vw] py-6 px-5 sm:px-0 rounded-2xl outline outline-[#d5e4ff] outline-offset-0 bg-[#eaeff4] mx-auto mt-24 sm:mt-16 text-center relative overflow-hidden">

            <div
                class="inline-block capitalize bg-gray-50 text-gray-700 px-4 py-1 rounded-full text-sm font-medium shadow-sm mb-4 border border-gray-100 relative">
                Data Sikkerhed
            </div>

            <h1 class="text-2xl sm:text-4xl font-bold leading-tight text-gray-900 relative">
                Dine data er altid sikre hos Just Driving.
            </h1>

            <p class="w-[65vw] mx-auto mt-4 text-gray-700 text-md relative">
                Når du vælger Just Driving, garanterer vi, at du altid har adgang til al din data og at systemet er
                opdateret, så du aldrig mister noget information. Vi opdaterer og udfører backup hver time, dag, uge og
                måned året rundt.
            </p>

        </section>

        <!-- Reviews -->
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
                Fra elevbooking til betalinger og lektionssporing – alt er strømlinet og automatiseret.
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



        @include('layouts.footer')

        <!-- Section 7 -->
        <section class="w-full h-[120px] bg-[#f6f7fa] mx-auto mt-0 text-center relative overflow-hidden">
        </section>
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