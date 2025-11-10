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
        <div class="hidden md:block hero-bg-right"></div>
        <div class="hidden md:block hero-bg-left"></div>

        @include('layouts.header')

        <div class="hidden lg:block fixed inset-0 -z-10 bg-no-repeat bg-center bg-cover"
            style="background-image: url('{{ asset('images/Background.svg') }}');">
        </div>

        <!-- Hero Section -->
        <section class="w-full mx-auto mt-16 text-center relative overflow-hidden">
            <!-- Title -->
            <h1 class="text-xl md:text-5xl font-bold text-gray-900 relative z-10">
                Online undervisningssystem
            </h1>

            <!-- Subtitle -->
            <p class="w-full sm:max-w-5xl mx-auto px-3 sm:px-0 mt-4 text-[#858599] text-sm sm:text-xl relative z-10">
                Fremtiden er digital – og med Just Driving får du ét samlet system til hele din køreskole. Her kan du
                nemt håndtere lektionsplaner, teori og prøver digitalt, så både du og dine elever altid er godt
                forberedt.
            </p>

            <!-- CTA Button -->
            <div class="mt-4 pb-2 flex items-center justify-center gap-2 sm:gap-4 z-10">
                <a href="#"
                    class="bg-transparent hover:bg-[#3384FF] text-sm text-[#3384FF] hover:text-white border border-[#3384FF] px-6 py-3 rounded-xl font-semibold shadow-md transition">
                    prøv gratis nu
                </a>
                <a href="{{ route('priser') }}"
                    class="bg-transparent hover:bg-[#3384FF] text-sm text-[#3384FF] hover:text-white border border-[#3384FF] px-6 py-3 rounded-xl font-semibold shadow-md transition">
                    Se Vores Priser
                </a>
            </div>


        </section>

        <!-- Info Section -->
        <section id="digitale-lektionsplaner"
            class="max-w-full 2xl:max-w-7xl mx-auto text-gray-900 py-5 px-6 md:px-10 lg:px-20 flex flex-col md:flex-row items-start mt-10 gap-3 overflow-hidden z-10">

            <!-- Left Column (Image) -->
            <div
                class="w-full md:w-1/2 flex justify-start opacity-0 translate-y-10 transition-all duration-700 ease-out animate-on-scroll">
                <img src="{{ asset('images/undervising1.png') }}" alt="Administration System"
                    class="w-full max-w-[450px] object-cover">
            </div>

            <!-- Right Column (Text Content) -->
            <div
                class="w-full md:w-1/2 space-y-4 opacity-0 translate-y-10 transition-all duration-700 ease-out animate-on-scroll delay-200">
                <h2 class="text-2xl font-bold text-[#1E1E1E]">
                    Digitale lektionsplaner
                </h2>
                <p class="text-[#858599] text-sm">
                    Med digitale lektionsplaner har du altid dine dokumenter lige ved hånden, klar til enten at blive
                    underskrevet i systemet eller til at printe ud og dele med dine elever.
                </p>
                <p class="text-[#858599] text-sm">
                    Du kan vælge at benytte de lektionsplaner, der allerede ligger i systemet, eller med få klik oprette
                    dine egne planer.
                </p>
                <p class="text-[#858599] text-sm">
                    Digitale lektionsplaner gør alting meget nemmere:
                </p>

                <ul class="space-y-3 text-[#444] text-sm font-semibold mt-4">
                    <li class="flex items-start gap-2">
                        <img src="{{ asset('images/arrowNew.png') }}" alt="Arrow Right" class="w-4 h-4 text-[#3384FF]">
                        <span>Både elev, kørelærer og køreskolen kan altid få adgang til lektionsplanen</span>
                    </li>
                    <li class="flex items-start gap-2">
                        <img src="{{ asset('images/arrowNew.png') }}" alt="Arrow Right" class="w-4 h-4 text-[#3384FF]">
                        <span>Underskrifter direkte i systemet</span>
                    </li>
                    <li class="flex items-start gap-2">
                        <img src="{{ asset('images/arrowNew.png') }}" alt="Arrow Right" class="w-4 h-4 text-[#3384FF]">
                        <span>Eksporter lektionsplanen til PDF med et enkelt klik</span>
                    </li>
                </ul>
            </div>
        </section>

        <!-- Features Section -->
        <section id="features-section"
            class="max-w-full 2xl:max-w-7xl mx-auto py-16 px-6 md:px-10 lg:px-20 overflow-hidden">
            <div class="max-w-full mx-auto text-center">
                @php
                    $features = [
                        [
                            'img' => 'book.png',
                            'title' => 'Opret lektionsplan',
                            'desc' => 'Opret nemt dine egne lektionsplaner eller brug vores standarder.',
                        ],
                        [
                            'img' => 'book.png',
                            'title' => 'Digital underskrift',
                            'desc' => 'Elev og kørelærer kan nemt underskrive direkte i systemet.',
                        ],
                        [
                            'img' => 'book.png',
                            'title' => 'Overvåg fremskridt',
                            'desc' => 'Hold styr på dine elevers fremskridt ved altid at have deres lektionsplaner ved hånden.',
                        ],
                        [
                            'img' => 'book.png',
                            'title' => 'Eksporter',
                            'desc' => 'Hent din lektionsplan i PDF så du nemt kan dele.',
                        ],
                    ];
                @endphp

                <!-- Card Grid -->
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-8">
                    @foreach ($features as $index => $feature)
                        <div class="relative bg-white rounded-2xl shadow-md p-6 flex flex-col items-start 
                                                                                                                                                                                     hover:-translate-y-2 hover:bg-gradient-to-b from-[#f9f9ff] to-[#e8f2ff]
                                                                                                                                                                                    transition-all duration-500 opacity-0 translate-y-10 animate-on-scroll group"
                            style="transition-delay: {{ $index * 100 }}ms;">
                            <!-- Glow effect -->
                            <div
                                class="absolute inset-0 rounded-2xl bg-gradient-to-tr from-blue-400/10 to-transparent 
                                                                                                                                                                                    opacity-0 group-hover:opacity-100 blur-lg transition duration-500">
                            </div>
                            <img src="{{ asset('images/' . $feature['img']) }}" alt="{{ $feature['title'] }}"
                                class="w-16 h-16 mb-4 transform transition-transform duration-500 group-hover:scale-110 group-hover:rotate-6">
                            <h3
                                class="text-lg font-semibold text-[#1E1E1E] mb-2 relative z-10 group-hover:text-[#248ec1] transition-colors duration-300">
                                {{ $feature['title'] }}
                            </h3>
                            <p
                                class="text-[#858599] text-start text-sm relative z-10 group-hover:text-[#4a4a5e] transition-colors duration-300">
                                {{ $feature['desc'] }}
                            </p>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>

        <!-- Info Section2 -->
        <section id=" undervisning-tilpasset"
            class="max-w-full 2xl:max-w-7xl mx-auto bg-[#f3f8fd] text-gray-900 py-5 px-6 md:px-10 lg:px-20 flex flex-col md:flex-row items-start mt-10 gap-3 overflow-hidden z-10">
            <!-- Left Column (Text) -->
            <div
                class="w-full md:w-1/2 space-y-4 opacity-0 translate-y-10 transition-all duration-700 ease-out animate-on-scroll delay-200">
                <h2 class="text-2xl capitalize font-bold text-[#1E1E1E]">
                    Undervisning tilpasset din køreskole og dine kørelærere
                </h2>
                <p class="text-[#858599]  text-sm">
                    Med undervisningssystemet kan du ændre indholdet efter behov, så den enkelte kørelærer
                    kan bruge de
                    punkter og billeder, vedkommende ønsker.
                </p>
                <p class="text-[#858599] text-sm">
                    Vores e-læringssystem fungerer fuldstændig, som hvis du stod i et fysisk lokale sammen
                    med dine
                    elever. Du kan naturligvis også bruge Just Drivings undervisningsmodul i den fysiske
                    undervisning.
                </p>
                <p class="text-[#858599] text-sm">
                    Online undervisning på få klik:
                </p>

                <ul class="space-y-3 text-[#444] text-sm font-semibold mt-4">
                    <li class="flex items-start gap-2">
                        <img src="{{ asset('images/arrowNew.png') }}" alt="Arrow Right" class="w-4 h-4 text-[#3384FF]">
                        <span>Opret undervisningsindhold for alle typer kørekort</span>
                    </li>
                    <li class="flex items-start gap-2">
                        <img src="{{ asset('images/arrowNew.png') }}" alt="Arrow Right" class="w-4 h-4 text-[#3384FF]">
                        <span>Direkte adgang for elever til fjernundervisning og teoriundervisning</span>
                    </li>
                    <li class="flex items-start gap-2">
                        <img src="{{ asset('images/arrowNew.png') }}" alt="Arrow Right" class="w-4 h-4 text-[#3384FF]">
                        <span>Mulighed for at lave flere lektionsplaner til samme type kørekort</span>
                    </li>
                    <li class="flex items-start gap-2">
                        <img src="{{ asset('images/arrowNew.png') }}" alt="Arrow Right" class="w-4 h-4 text-[#3384FF]">
                        <span>Overskueligt og nemt at eksportere til PDF</span>
                    </li>
                </ul>
            </div>
            <!-- Right Column (Image) -->
            <div
                class="w-full md:w-1/2 flex justify-end opacity-0 translate-y-10 transition-all duration-700 ease-out animate-on-scroll">
                <img src="{{ asset('images/undervising2.png') }}" alt="Administration System"
                    class="w-full max-w-[450px]">
            </div>
        </section>

        <!-- Info Section3 -->
        <section id="online-teoriprøver"
            class="max-w-full 2xl:max-w-7xl mx-auto text-gray-900 py-5 px-6 md:px-10 lg:px-20 flex flex-col md:flex-row items-start mt-10 gap-3 overflow-hidden z-10">
            <!-- Left Column (image) -->
            <div
                class="w-full md:w-1/2 flex justify-start opacity-0 translate-y-10 transition-all duration-700 ease-out animate-on-scroll">
                <img src="{{ asset('images/undervising3.png') }}" alt="Administration System"
                    class="w-full max-w-[450px] object-cover">
            </div>
            <!-- Right Column (text) -->
            <div
                class="w-full md:w-1/2 space-y-4 opacity-0 translate-y-10 transition-all duration-700 ease-out animate-on-scroll delay-200">
                <h2 class="text-2xl capitalize font-bold text-[#1E1E1E]">
                    Online teoriprøver
                </h2>
                <p class="text-[#858599]  text-sm">
                    Det er både i din køreskoles og den enkelte elevs interesse at bestå teoriprøven i første hug.
                </p>
                <p class="text-[#858599] text-sm">
                    Just Driving tilbyder et komplet online teoriprøvesystem, med teoriprøver der dækker ethvert område.
                    Du kan vælge og vrage mellem mere end 25 teoriprøver samt en masse emneprøver på dansk og engelsk,
                    som alle er opdaterede og klar til brug.
                </p>
                <p class="text-[#858599] text-sm">
                    Det er op til dig, om du vil bruge dem i undervisningen eller udbyde dem til dine elever som ekstra
                    test-tid.
                </p>

                <ul class="space-y-3 text-[#2b70d8] text-sm font-semibold mt-4">
                    <li class="flex items-start gap-2">
                        <img src="{{ asset('images/arrowNew.png') }}" alt="Arrow Right" class="w-4 h-4 text-[#3384FF]">
                        <span>Hele forløbet på en platformr</span>
                    </li>
                    <li class="flex items-start gap-2">
                        <img src="{{ asset('images/arrowNew.png') }}" alt="Arrow Right" class="w-4 h-4 text-[#3384FF]">
                        <span>Mange nye teoriprøver, der dækker alle områder og kategorierg</span>
                    </li>
                    <li class="flex items-start gap-2">
                        <img src="{{ asset('images/arrowNew.png') }}" alt="Arrow Right" class="w-4 h-4 text-[#3384FF]">
                        <span>Du kan måle dine elevers resultater og hjælpe dem bedst muligt</span>
                    </li>
                    <li class="flex items-start gap-2">
                        <img src="{{ asset('images/arrowNew.png') }}" alt="Arrow Right" class="w-4 h-4 text-[#3384FF]">
                        <span>Prøver både til bil og motorcykel</span>
                    </li>
                </ul>
            </div>
        </section>

        <!-- Features Section3 -->
        <section id="features-section3"
            class="max-w-full 2xl:max-w-7xl mx-auto py-5 px-6 md:px-10 lg:px-20 overflow-hidden">
            <div class="max-w-full mx-auto text-center">
                @php
                    $features = [
                        [
                            'img' => 'book.png',
                            'title' => 'Tilgængelighed',
                            'desc' => 'Både elev, kørelærer og køreskole har adgang til teoriprøverne, som kan tages alene eller sammen i skolen.',
                        ],
                        [
                            'img' => 'book.png',
                            'title' => 'Resultater',
                            'desc' => 'Hver elevs resultat bliver gemt, så du kan følge elevens fremskridt, og hvad de skal øve sig mere på.',
                        ],
                        [
                            'img' => 'book.png',
                            'title' => 'En samlet løsning',
                            'desc' => 'Slut med at betale til flere forskellige systemer for at få den fulde undervisning, hos Just Driving får du det hele samlet et sted.',
                        ],

                    ];
                @endphp

                <!-- Card Grid -->
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                    @foreach ($features as $index => $feature)
                        <div class="relative bg-white rounded-2xl shadow-md p-6 flex flex-col items-start 
                                                                                                                                                                                  l hover:-translate-y-2 hover:bg-gradient-to-b from-[#f9f9ff] to-[#e8f2ff]
                                                                                                                                                                                    transition-all duration-500 opacity-0 translate-y-10 animate-on-scroll group"
                            style="transition-delay: {{ $index * 100 }}ms;">
                            <!-- Glow effect -->
                            <div
                                class="absolute inset-0 rounded-2xl bg-gradient-to-tr from-blue-400/10 to-transparent 
                                                                                                                                                                                    opacity-0 group-hover:opacity-100 blur-lg transition duration-500">
                            </div>
                            <img src="{{ asset('images/' . $feature['img']) }}" alt="{{ $feature['title'] }}"
                                class="w-16 h-16 mb-4 transform transition-transform duration-500 group-hover:scale-110 group-hover:rotate-6">
                            <h3
                                class="text-lg font-semibold text-[#1E1E1E] mb-2 relative z-10 group-hover:text-[#248ec1] transition-colors duration-300">
                                {{ $feature['title'] }}
                            </h3>
                            <p
                                class="text-[#858599] text-start text-sm relative z-10 group-hover:text-[#4a4a5e] transition-colors duration-300">
                                {{ $feature['desc'] }}
                            </p>
                        </div>
                    @endforeach
                </div>
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