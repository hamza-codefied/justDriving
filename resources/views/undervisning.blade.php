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
                Online <span class="text-[#3384FF]"> undervisning</span> – Effektiv,<br /> fleksibel og altid opdateret
            </h1>

            <!-- Subtitle -->
            <p style="letter-spacing: -1px;"
                class="w-full sm:max-w-6xl px-6 md:px-0 mx-auto mt-[16px] leading-[38px] text-[#858599] md:text-[16px] lg:text-[24px] z-10 font-manrope-bold opacity-[90%]">
                Just Driving giver dig et komplet digitalt undervisningssystem, der samler alt teoriindhold,<br />
                lektionsplaner og elevdata ét sted. Du sparer tid, undgår papirarbejde og<br />
                får undervisning, der altid følger de gældende krav.
            </p>
            <!-- CTA Button -->
            <div class="mt-[50px] flex flex-col md:flex-row items-center justify-center gap-4 relative z-10">
                <a href="#"
                    class="flex flex-col justify-center items-center gap-[9.882px] w-[309px] h-[74px] py-[19.765px] px-[10px] rounded-[19.765px] border-[1.235px] border-[rgba(255,255,255,0.40)] bg-[#3384FF] text-white text-[20px] font-product-sans-bold hover:bg-[#2563EB] transition"
                    style="box-shadow: 0 24.706px 43.235px 0 rgba(51, 132, 255, 0.20);">
                    Prøve Undervisningssystem
                </a>

            </div>
        </section>

        @php
            $features = [
                [
                    'id' => 1,
                    'description' => 'Undervisning i alle lovpligtige lektioner',
                    'icon' => asset('images/book.png'),
                ],
                [
                    'id' => 2,

                    'description' => 'Undervisningsmaterialer på flere sprog',
                    'icon' => asset('images/book.png'),
                ],
                [
                    'id' => 3,

                    'description' => 'Digitale teoriprøver med automatisk resultat-log',
                    'icon' => asset('images/book.png'),
                ],
                [
                    'id' => 4,

                    'description' => 'Indhold med tekst, billeder og video',
                    'icon' => asset('images/book.png'),
                ],
                [
                    'id' => 5,

                    'description' => 'Automatisk tildeling ved holdtilmelding',
                    'icon' => asset('images/book.png'),
                ],
                [
                    'id' => 6,

                    'description' => 'Overblik over elever og hold samlet ét sted',
                    'icon' => asset('images/book.png'),
                ],
                [
                    'id' => 7,

                    'description' => 'Fuldt integreret med elevens profil og lektionsplan',
                    'icon' => asset('images/book.png'),
                ],
            ];
         @endphp

        <!-- Section 2 -->
        <section class="w-full mx-auto mt-[100px] md:mt-[193px] px-6 text-center relative overflow-hidden">
            <!-- Title -->
            <h1 class="font-product-sans-bold text-[40px] font-bold leading-[60px] text-center text-[#171717] relative z-10"
                style="letter-spacing: -1.2px;">
                Systemet giver dig
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
                                class="mx-auto rounded-[24px] flex items-center bg-white justify-center transform transition-transform duration-300 hover:scale-110 p-6">
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
        <section id="digitale-lektionsplaner"
            class="max-w-[1280px] mx-auto text-black px-6 flex flex-col md:flex-row items-start justify-center mt-[288px] gap-10 z-10">

            <!-- Left Column (Image) -->
            <div
                class="w-full md:w-1/2 flex justify-center md:justify-start  translate-y-10 transition-all duration-700 ease-out animate-on-scroll">
                <img src="{{ asset('images/undervising1.png') }}" alt="Administration System" class="">
            </div>

            <!-- Right Column (Text Content) -->
            <div
                class="w-full md:w-1/2 space-y-6 translate-y-10 transition-all duration-700 ease-out animate-on-scroll delay-200">
                <h2 class="font-product-sans-bold text-[28px] font-bold leading-normal capitalize text-[#000]">
                    Digitale lektionsplaner – Struktur og dokumentation gjort nemt
                </h2>
                <p class="font-product-sans-regular text-[#858599] text-[16px] font-normal leading-normal capitalize">
                    Med Just Driving har du altid opdaterede lektionsplaner lige ved hånden. Brug de færdige planer i
                    systemet eller opret dine egne – alt kan eksporteres og printes efter behov.
                </p>

                <p class="font-product-sans-bold text-[#000] text-[20px] font-bold leading-normal capitalize">
                    Fordele:
                </p>

                <ul class="space-y-4 mt-4">
                    <li class="flex items-start gap-2">
                        <img src="{{ asset('images/arrowNew.png') }}" alt="Arrow Right"
                            class="w-4 h-4 mt-1 text-[#3384FF]">
                        <span
                            class="font-product-sans-regular text-[#2B70D8] text-[18px] font-normal leading-normal capitalize">Adgang
                            for elev, kørelærer og køreskole døgnet rundt</span>
                    </li>
                    <li class="flex items-start gap-2">
                        <img src="{{ asset('images/arrowNew.png') }}" alt="Arrow Right"
                            class="w-4 h-4 mt-1 text-[#3384FF]">
                        <span
                            class="font-product-sans-regular text-[#2B70D8] text-[18px] font-normal leading-normal capitalize">Digital
                            underskrift – 100 % papirfri dokumentation</span>
                    </li>
                    <li class="flex items-start gap-2">
                        <img src="{{ asset('images/arrowNew.png') }}" alt="Arrow Right"
                            class="w-4 h-4 mt-1 text-[#3384FF]">
                        <span
                            class="font-product-sans-regular text-[#2B70D8] text-[18px] font-normal leading-normal capitalize">Én
                            klik PDF-eksport til print eller arkiv</span>
                    </li>
                    <li class="flex items-start gap-2">
                        <img src="{{ asset('images/arrowNew.png') }}" alt="Arrow Right"
                            class="w-4 h-4 mt-1 text-[#3384FF]">
                        <span
                            class="font-product-sans-regular text-[#2B70D8] text-[18px] font-normal leading-normal capitalize">Automatisk
                            synkronisering med elevens status</span>
                    </li>
                </ul>
            </div>
        </section>

        <!-- Features Section -->
        <section id="features-section" class="max-w-[1280px] mx-auto mt-[150px]">

            <div class="max-w-full mx-auto text-center">
                <h2 class="font-product-sans-bold text-[#000] text-[28px] font-bold leading-normal capitalize mb-6">
                    Lektionsplan-funktioner – Klar til brug og tilpasning
                </h2>
                <p
                    class="font-product-sans-regular text-[#858599] text-center text-[16px] font-normal leading-normal capitalize mb-8">
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
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 px-6 xl:px-0 gap-8">
                    @foreach ($features as $index => $feature)
                        <div class="relative bg-white rounded-[30px] border-[4px] border-[#f0f2f5] shadow-md p-5 flex flex-col items-start 
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
                            <h4 class="font-manrope-extrabold text-[#1B1C31] text-[24px] font-extrabold leading-[33px] text-start mb-2 relative z-10 group-hover:text-[#248ec1] transition-colors duration-300"
                                style="letter-spacing: -0.72px;">
                                {{ $feature['title'] }}
                            </h4>
                            <p class="font-manrope-semibold text-[#747474] text-start text-[16px] font-semibold leading-normal relative z-10 group-hover:text-[#4a4a5e] transition-colors duration-300"
                                style="letter-spacing: -0.32px;">
                                {{ $feature['desc'] }}
                            </p>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>

        <!-- Info Section2 -->
        <section id=" undervisning-tilpasset" class="bg-[#f3f8fd] text-black w-full xl:p-[76px] mt-[204px]">
            <div class="max-w-[1280px] mx-auto px-6 flex flex-col md:flex-row items-center gap-10 z-10">
                <!-- Left Column (Text) -->
                <div
                    class="w-full md:w-1/2 space-y-4 opacity-0 translate-y-10 transition-all duration-700 ease-out animate-on-scroll delay-200">
                    <h4 class="font-product-sans-bold text-[#000] text-[28px] font-bold leading-normal capitalize">
                        Undervisning tilpasset din køreskole
                    </h4>
                    <p
                        class="font-product-sans-regular text-[#858599] text-[16px] font-normal leading-normal capitalize">
                        Systemet fungerer intuitivt – både til klasseundervisning og online teori. Du kan nemt tilpasse
                        alt
                        indhold, så det passer til dine kurser og kategorier.


                    </p>

                    <p class="font-product-sans-bold text-[#000] text-[20px] font-bold leading-normal capitalize">
                        Muligheder:
                    </p>

                    <ul class="space-y-4 mt-4">
                        <li class="flex items-start gap-2">
                            <img src="{{ asset('images/arrowNew.png') }}" alt="Arrow Right"
                                class="w-4 h-4 mt-1 text-[#3384FF]">
                            <span
                                class="font-product-sans-regular text-[#2B70D8] text-[18px] font-normal leading-normal capitalize">Undervisning
                                til bil, MC, trailer m.m.</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <img src="{{ asset('images/arrowNew.png') }}" alt="Arrow Right"
                                class="w-4 h-4 mt-1 text-[#3384FF]">
                            <span
                                class="font-product-sans-regular text-[#2B70D8] text-[18px] font-normal leading-normal capitalize">Direkte
                                adgang til teori og fjernundervisning</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <img src="{{ asset('images/arrowNew.png') }}" alt="Arrow Right"
                                class="w-4 h-4 mt-1 text-[#3384FF]">
                            <span
                                class="font-product-sans-regular text-[#2B70D8] text-[18px] font-normal leading-normal capitalize">Flere
                                lektionsplaner pr. kategori</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <img src="{{ asset('images/arrowNew.png') }}" alt="Arrow Right"
                                class="w-4 h-4 mt-1 text-[#3384FF]">
                            <span
                                class="font-product-sans-regular text-[#2B70D8] text-[18px] font-normal leading-normal capitalize">Undervisning
                                med tekst, video, billeder og quizzer</span>
                        </li>
                    </ul>
                </div>
                <!-- Right Column (Image) -->
                <div
                    class="w-full md:w-1/2 flex justify-end opacity-0 translate-y-10 transition-all duration-700 ease-out animate-on-scroll">
                    <img src="{{ asset('images/undervisning2.png') }}" alt="Administration System" class="">
                </div>
            </div>
        </section>


        <!-- Info Section3 -->
        <section id="online-teoriprøver" class="mt-[128px] mb-[100px]">
            <div class="max-w-[1280px] mx-auto px-6 flex flex-col md:flex-row items-center gap-[64px] z-10">

                <!-- Right Column (Image) -->
                <div
                    class="w-full md:w-1/3 flex justify-center md:justify-start opacity-0 translate-y-10 transition-all duration-700 ease-out animate-on-scroll">
                    <img src="{{ asset('images/undervising3.png') }}" alt="Administration System" class="">
                </div>
                <!-- Left Column (Text) -->
                <div
                    class="w-full md:w-2/3 space-y-4 opacity-0 translate-y-10 transition-all duration-700 ease-out animate-on-scroll delay-200">
                    <h4 class="font-product-sans-bold text-[#000] text-[28px] font-bold leading-normal capitalize">
                        Online teoriprøver – Forbered dine elever på at bestå
                    </h4>
                    <p
                        class="font-product-sans-regular text-[#858599] text-[16px] font-normal leading-normal capitalize">
                        Få adgang til et komplet teoriprøvesystem med mere end 25 prøver og emneprøver – altid <br />
                        opdateret
                        og tilgængeligt på dansk og engelsk.

                    </p>

                    <p class="font-product-sans-bold text-[#000] text-[20px] font-bold leading-normal capitalize">
                        Du får:
                    </p>

                    <ul class="space-y-4 mt-4">
                        <li class="flex items-start gap-2">
                            <img src="{{ asset('images/arrowNew.png') }}" alt="Arrow Right"
                                class="w-4 h-4 mt-1 text-[#3384FF]">
                            <span
                                class="font-product-sans-regular text-[#2B70D8] text-[18px] font-normal leading-normal capitalize">Ét
                                samlet system med fuld integration</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <img src="{{ asset('images/arrowNew.png') }}" alt="Arrow Right"
                                class="w-4 h-4 mt-1 text-[#3384FF]">
                            <span
                                class="font-product-sans-regular text-[#2B70D8] text-[18px] font-normal leading-normal capitalize">25+
                                prøver til bil og motorcykel</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <img src="{{ asset('images/arrowNew.png') }}" alt="Arrow Right"
                                class="w-4 h-4 mt-1 text-[#3384FF]">
                            <span
                                class="font-product-sans-regular text-[#2B70D8] text-[18px] font-normal leading-normal capitalize">Realtidsvisning
                                af elevens resultater</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <img src="{{ asset('images/arrowNew.png') }}" alt="Arrow Right"
                                class="w-4 h-4 mt-1 text-[#3384FF]">
                            <span
                                class="font-product-sans-regular text-[#2B70D8] text-[18px] font-normal leading-normal capitalize">Målrettet
                                undervisning baseret på elevens niveau</span>
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