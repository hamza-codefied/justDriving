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
        <section class="w-full mx-auto mt-[100px] text-center relative overflow-hidden">
            <!-- Title -->
            <h1 class="text-xl capitalize md:text-5xl font-bold text-black leading-tight relative z-10">
                Online undervisning – Effektiv, fleksibel og altid opdateret
            </h1>

            <!-- Subtitle -->
            <p
                class="w-full sm:max-w-5xl mx-auto px-3 sm:px-0 mt-6 text-[#858599] text-sm sm:text-[24px] relative z-10 leading-tight">
                Just Driving giver dig et komplet digitalt undervisningssystem, der samler alt teoriindhold,
                lektionsplaner og elevdata ét sted. Du sparer tid, undgår papirarbejde og får undervisning, der altid
                følger de gældende krav.
            </p>
        </section>

        @php
            $features = [
                [
                    'id' => 1,
                    'description' => 'Undervisning i alle lovpligtige lektioner',
                    'icon' => asset('images/newbook.png'),
                ],
                [
                    'id' => 2,

                    'description' => 'Undervisningsmaterialer på flere sprog',
                    'icon' => asset('images/newbook.png'),
                ],
                [
                    'id' => 3,

                    'description' => 'Digitale teoriprøver med automatisk resultat-log',
                    'icon' => asset('images/newbook.png'),
                ],
                [
                    'id' => 4,

                    'description' => 'Indhold med tekst, billeder og video',
                    'icon' => asset('images/newbook.png'),
                ],
                [
                    'id' => 5,

                    'description' => 'Automatisk tildeling ved holdtilmelding',
                    'icon' => asset('images/newbook.png'),
                ],
                [
                    'id' => 6,

                    'description' => 'Overblik over elever og hold samlet ét sted',
                    'icon' => asset('images/newbook.png'),
                ],
                [
                    'id' => 7,

                    'description' => 'Fuldt integreret med elevens profil og lektionsplan',
                    'icon' => asset('images/newbook.png'),
                ],
            ];
         @endphp

        <!-- Section 2 -->
        <section class="w-full mx-auto mt-24 sm:mt-20 px-6 py-0 sm:py-5 text-center relative overflow-hidden">
            <!-- Title -->
            <h1 class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl font-bold leading-tight text-black relative z-10">
                Systemet giver dig
            </h1>

            <!-- Cards Grid -->
            <div class="max-w-6xl mx-auto flex flex-wrap justify-center gap-8 mt-12">
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
                            <p class="text-[#858599] text-start w-[95%] text-[16px] font-medium">
                                {{ $feature['description'] }}
                            </p>
                        </div>
                    </div>
                @endforeach

            </div>
            <p class="text-center text-[22px] py-10 font-semibold text-[#858599]">
                En professionel, brugervenlig løsning – klar til både klasseundervisning og fjernundervisning.
            </p>
        </section>

        <!-- Info Section -->
        <section id="digitale-lektionsplaner"
            class="max-w-full 2xl:max-w-7xl mx-auto text-black py-5 px-6 md:px-10 lg:px-20 flex flex-col md:flex-row items-start mt-10 gap-3 overflow-hidden z-10">

            <!-- Left Column (Image) -->
            <div
                class="w-full md:w-1/2 flex justify-start opacity-0 translate-y-10 transition-all duration-700 ease-out animate-on-scroll">
                <img src="{{ asset('images/undervising1.png') }}" alt="Administration System"
                    class="w-full max-w-[450px] object-cover">
            </div>

            <!-- Right Column (Text Content) -->
            <div
                class="w-full md:w-1/2 space-y-4 opacity-0 translate-y-10 transition-all duration-700 ease-out animate-on-scroll delay-200">
                <h2 class="text-[28px] capitalize font-bold text-black">
                    Digitale lektionsplaner – Struktur og dokumentation gjort nemt
                </h2>
                <p class="text-[#858599] text-base font-normal">
                    Med Just Driving har du altid opdaterede lektionsplaner lige ved hånden. Brug de færdige planer i
                    systemet eller opret dine egne – alt kan eksporteres og printes efter behov.
                </p>

                <p class="text-black font-semibold  text-base">
                    Fordele:
                </p>

                <ul class="space-y-3 text-[#3384FF] text-[18px] font-semibold mt-4">
                    <li class="flex items-start gap-2">
                        <img src="{{ asset('images/arrowNew.png') }}" alt="Arrow Right"
                            class="w-4 h-4 text-[#3384FF] mt-1">
                        <span>Adgang for elev, kørelærer og køreskole døgnet rundt</span>
                    </li>
                    <li class="flex items-start gap-2">
                        <img src="{{ asset('images/arrowNew.png') }}" alt="Arrow Right"
                            class="w-4 h-4 text-[#3384FF] mt-1">
                        <span>Digital underskrift – 100 % papirfri dokumentation</span>
                    </li>
                    <li class="flex items-start gap-2">
                        <img src="{{ asset('images/arrowNew.png') }}" alt="Arrow Right"
                            class="w-4 h-4 text-[#3384FF] mt-1">
                        <span>Én klik PDF-eksport til print eller arkiv</span>
                    </li>
                    <li class="flex items-start gap-2">
                        <img src="{{ asset('images/arrowNew.png') }}" alt="Arrow Right"
                            class="w-4 h-4 text-[#3384FF] mt-1">
                        <span>Automatisk synkronisering med elevens status</span>
                    </li>
                </ul>
            </div>
        </section>
        <p class="text-[#858599] py-3 text-[20px]">
            Det gør opfølgning og dokumentation markant nemmere.
        </p>

        <!-- Features Section -->
        <section id="features-section"
            class="max-w-full 2xl:max-w-7xl mx-auto py-5 px-6 md:px-10 lg:px-20 overflow-hidden">

            <div class="max-w-full mx-auto text-center">
                <h2 class="text-[28px] capitalize mb-6 font-bold text-black">
                    Lektionsplan-funktioner – Klar til brug og tilpasning
                </h2>
                <p class="text-black capitalize font-normal mb-8 text-[16px]">
                    Med fuld fleksibilitet kan du strukturere lektionsplaner præcis efter dine læringsforløb.
                </p>

                @php
                    $features = [
                        [
                            'img' => 'book.png',
                            'title' => 'Opret dine egne lektionsplaner',
                            'desc' => 'Tilpas undervisningen med dine egne planer – eller vælg vores standarder.',
                        ],
                        [
                            'img' => 'book.png',
                            'title' => 'Digital underskrift',
                            'desc' => 'Både elev og kørelærer kan underskrive direkte i systemet – nemt og sikkert.',
                        ],
                        [
                            'img' => 'book.png',
                            'title' => 'Overvåg elevens fremskridt',
                            'desc' => 'Følg med i elevens status og udvikling – alt er samlet ét sted.',
                        ],
                        [
                            'img' => 'book.png',
                            'title' => 'Eksportér til PDF',
                            'desc' => 'Hent og del lektionsplanen med et enkelt klik – perfekt til dokumentation og print.',
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
                                class="text-lg sm:text-[24px] text-start font-semibold text-black mb-2 relative z-10 group-hover:text-[#248ec1] transition-colors duration-300">
                                {{ $feature['title'] }}
                            </h3>
                            <p
                                class="text-[#858599] text-start text-base relative z-10 group-hover:text-[#4a4a5e] transition-colors duration-300">
                                {{ $feature['desc'] }}
                            </p>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>

        <!-- Info Section2 -->
        <section id=" undervisning-tilpasset" class="bg-[#f3f8fd] text-black w-full mt-20">
            <div
                class="w-full 2xl:max-w-7xl mx-auto py-5 sm:py-10 px-6 md:px-10 lg:px-20 flex flex-col md:flex-row items-center  gap-3 overflow-hidden z-10">
                <!-- Left Column (Text) -->
                <div
                    class="w-full md:w-1/2 space-y-4 opacity-0 translate-y-10 transition-all duration-700 ease-out animate-on-scroll delay-200">
                    <h2 class="text-[28px] capitalize font-bold text-black">
                        Undervisning tilpasset din køreskole
                    </h2>
                    <p class="text-[#858599]  text-base font-normal">
                        Systemet fungerer intuitivt – både til klasseundervisning og online teori. Du kan nemt tilpasse
                        alt
                        indhold, så det passer til dine kurser og kategorier.


                    </p>

                    <p class="text-black font-semibold  text-base">
                        Muligheder:
                    </p>

                    <ul class="space-y-3 text-[#3384FF] text-[18px] font-semibold mt-4">
                        <li class="flex items-start gap-2">
                            <img src="{{ asset('images/arrowNew.png') }}" alt="Arrow Right"
                                class="w-4 h-4 mt-1 text-[#3384FF]">
                            <span>Undervisning til bil, MC, trailer m.m.</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <img src="{{ asset('images/arrowNew.png') }}" alt="Arrow Right"
                                class="w-4 h-4 mt-1 text-[#3384FF]">
                            <span>Direkte adgang til teori og fjernundervisning</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <img src="{{ asset('images/arrowNew.png') }}" alt="Arrow Right"
                                class="w-4 h-4 mt-1 text-[#3384FF]">
                            <span>Flere lektionsplaner pr. kategori</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <img src="{{ asset('images/arrowNew.png') }}" alt="Arrow Right"
                                class="w-4 h-4 mt-1 text-[#3384FF]">
                            <span>Undervisning med tekst, video, billeder og quizzer</span>
                        </li>
                    </ul>
                </div>
                <!-- Right Column (Image) -->
                <div
                    class="w-full md:w-1/2 flex justify-end opacity-0 translate-y-10 transition-all duration-700 ease-out animate-on-scroll">
                    <img src="{{ asset('images/undervising2.png') }}" alt="Administration System"
                        class="w-full max-w-[500px]">
                </div>
            </div>
        </section>
        <p class="text-[#858599] w-full capitalize text-center bg-[#F3F8FD] py-5 text-[16px] font-normal">
            Med Just Driving bliver undervisningen mere tilgængelig, fleksibel og effektiv.
        </p>

        <!-- Info Section3 -->
        <section id="online-teoriprøver"
            class="max-w-full 2xl:max-w-7xl mx-auto text-black py-5 px-6 md:px-10 lg:px-20 flex flex-col md:flex-row items-start mt-20 gap-3 overflow-hidden z-10 mb-10">
            <!-- Left Column (image) -->
            <div
                class="w-full md:w-1/2 flex justify-start opacity-0 translate-y-10 transition-all duration-700 ease-out animate-on-scroll">
                <img src="{{ asset('images/undervising3.png') }}" alt="Administration System"
                    class="w-full max-w-[500px] object-cover">
            </div>
            <!-- Right Column (text) -->
            <div
                class="w-full md:w-1/2 space-y-4 opacity-0 translate-y-10 transition-all duration-700 ease-out animate-on-scroll delay-200">
                <h2 class="text-[28px] capitalize font-bold text-black">
                    Online teoriprøver – Forbered dine elever på at bestå
                </h2>
                <p class="text-[#858599]  text-base font-normal">
                    Få adgang til et komplet teoriprøvesystem med mere end 25 prøver og emneprøver – altid opdateret og
                    tilgængeligt på dansk og engelsk.
                </p>
                <p class="text-black font-semibold  text-base">
                    Du får:
                </p>

                <ul class="space-y-6 text-[#3384FF] text-[18px] font-normal mt-4">
                    <li class="flex items-start gap-2">
                        <img src="{{ asset('images/arrowNew.png') }}" alt="Arrow Right" class="w-4 h-4 text-[#3384FF]">
                        <span>Ét samlet system med fuld integration</span>
                    </li>
                    <li class="flex items-start gap-2">
                        <img src="{{ asset('images/arrowNew.png') }}" alt="Arrow Right"
                            class="w-4 h-4 text-[#3384FF] mt-1">
                        <span>25+ prøver til bil og motorcykel</span>
                    </li>
                    <li class="flex items-start gap-2">
                        <img src="{{ asset('images/arrowNew.png') }}" alt="Arrow Right"
                            class="w-4 h-4 text-[#3384FF] mt-1">
                        <span>Realtidsvisning af elevens resultater</span>
                    </li>
                    <li class="flex items-start gap-2">
                        <img src="{{ asset('images/arrowNew.png') }}" alt="Arrow Right"
                            class="w-4 h-4 text-[#3384FF] mt-1">
                        <span>Målrettet undervisning baseret på elevens niveau</span>
                    </li>
                </ul>
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