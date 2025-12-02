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
            <h1 class="text-xl md:text-5xl capitalize font-bold text-black relative z-10">
                Online økonomisystem – Fuld kontrol over din forretning
            </h1>

            <!-- Subtitle -->
            <p
                class="w-full sm:max-w-6xl mx-auto px-3 sm:px-0 mt-4 text-[#858599] text-sm sm:text-[24px] leading-tight relative z-10">
                Et stærkt økonomisystem er fundamentet for en professionel køreskole. I Just Driving er økonomien fuldt
                integreret i hele platformen — kalender, booking og betaling arbejder sammen i ét flow, så du altid har
                styr på indtægter, fakturaer og elevbetalinger uden ekstra systemer.
            </p>
        </section>

        @php
            $features = [
                [
                    'id' => 1,
                    'description' => 'Betaling og booking i samme flow – direkte i kalenderen.',
                    'icon' => asset('images/newbook.png'),
                ],
                [
                    'id' => 2,

                    'description' => 'Automatisk faktura, kvittering og betalingspåmindelser.',
                    'icon' => asset('images/newbook.png'),
                ],
                [
                    'id' => 3,

                    'description' => 'Komplet betalingshistorik for hver elev med nem opfølgning.',
                    'icon' => asset('images/newbook.png'),
                ],
                [
                    'id' => 4,

                    'description' => 'Fleksibel loginstruktur, så kørelærere kan skifte mellem flere køreskoler.',
                    'icon' => asset('images/newbook.png'),
                ],
            ];
         @endphp

        <!-- Section 2 -->
        <section class="w-full mx-auto mt-24 sm:mt-20 px-6 py-0 sm:py-5 text-center relative overflow-hidden">
            <!-- Title -->
            <h1 class="text-2xl sm:text-3xl md:text-5xl font-bold leading-tight text-black relative z-10">
                Du får
            </h1>

            <!-- Cards Grid -->
            <div class="max-w-6xl mx-auto grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8 mt-12">
                @foreach ($features as $feature)
                    <div
                        class="bg-[#F5f5f5] p-1 rounded-2xl shadow-sm transition-all duration-300 ease-out hover:-translate-y-2 hover:shadow-xl hover:bg-white">
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
                            <p class="text-[#858599] text-start w-[85%] text-base font-normal">{{ $feature['description'] }}
                            </p>
                        </div>
                    </div>
                @endforeach

            </div>
            <p class="text-center text-[20px] py-10 font-semibold text-[#858599]">
                Et økonomisystem, der arbejder for dig – så du kan fokusere på undervisningen.
            </p>
        </section>

        <!-- Info Section -->
        <section id="betalinger"
            class="max-w-full 2xl:max-w-7xl mx-auto text-black py-5 px-6 md:px-10 lg:px-20 flex flex-col md:flex-row items-start mt-10 gap-3 overflow-hidden z-10">

            <!-- Left Column (Image) -->
            <div
                class="w-full md:w-1/2 flex justify-start opacity-0 translate-y-10 transition-all duration-700 ease-out animate-on-scroll">
                <img src="{{ asset('images/undervising1.png') }}" alt="Administration System"
                    class="w-full max-w-[500px] object-cover">
            </div>

            <!-- Right Column (Text Content) -->
            <div
                class="w-full md:w-1/2 space-y-4 opacity-0 translate-y-10 transition-all duration-700 ease-out animate-on-scroll delay-200">
                <h2 class="text-2xl sm:text-[28px] font-bold capitalize text-black">
                    Slut med manuelle afstemninger – betalingen matcher automatisk
                </h2>
                <p class="text-[#858599] text-base font-normal">
                    Når en elev køber en lektion, et forløb eller et tilkøb, matcher systemet automatisk betalingen. Du
                    slipper for manuel kontrol og får i stedet et fuldt opdateret økonomisk overblik.
                </p>

                <p class="text-black capitalize font-semibold text-base">
                    Automatiseret og sikker betalingskontrol:
                </p>

                <ul class="space-y-5 text-[#3384FF] text-[18px] font-normal mt-4">
                    <li class="flex items-start gap-2">
                        <img src="{{ asset('images/arrowNew.png') }}" alt="Arrow Right"
                            class="w-4 h-4 text-[#3384FF] mt-1">
                        <span>Elever kan kun booke lektioner, når betalingen er gennemført.</span>
                    </li>
                    <li class="flex items-start gap-2">
                        <img src="{{ asset('images/arrowNew.png') }}" alt="Arrow Right"
                            class="w-4 h-4 text-[#3384FF] mt-1">
                        <span>Systemet håndterer betalingsstatus automatisk og viser restancer tydeligt.</span>
                    </li>
                    <li class="flex items-start gap-2">
                        <img src="{{ asset('images/arrowNew.png') }}" alt="Arrow Right"
                            class="w-4 h-4 text-[#3384FF] mt-1">
                        <span>Alle opkrævninger og transaktioner er samlet i et klart overblik.</span>
                    </li>
                    <li class="flex items-start gap-2">
                        <img src="{{ asset('images/arrowNew.png') }}" alt="Arrow Right"
                            class="w-4 h-4 text-[#3384FF] mt-1">
                        <span>Betalinger behandles sikkert via Stripe med høj datasikkerhed.</span>
                    </li>
                </ul>
            </div>
        </section>
        <p class="text-[#858599] py-5 text-[20px]">
            Mindre administration – mere ro i maven.
        </p>

        @php
            $features = [
                [
                    'id' => 1,
                    'description' => 'Betaling for forløb, enkeltlektioner og tilkøb – samlet ét sted.',
                    'icon' => asset('images/newbook.png'),
                ],
                [
                    'id' => 2,

                    'description' => 'Kortbetaling og MobilePay integreret direkte i systemet.',
                    'icon' => asset('images/newbook.png'),
                ],
                [
                    'id' => 3,

                    'description' => 'Automatisk fakturering, kvittering og PDF-eksport til arkiv eller bogholder.',
                    'icon' => asset('images/newbook.png'),
                ],
                [
                    'id' => 4,

                    'description' => 'Systemet sender selv påmindelser ved manglende betaling.',
                    'icon' => asset('images/newbook.png'),
                ],
            ];
         @endphp

        <!-- Section 2 -->
        <section class="w-full mx-auto mt-24 sm:mt-20 px-6 py-0 sm:py-5 text-center relative overflow-hidden">
            <!-- Title -->
            <h1
                class="text-2xl sm:text-3xl md:text-4xl lg:text-[50px] font-bold leading-tight text-black relative z-10">
                Mindre administration, mere undervisning
            </h1>
            <p class="text-black w-full md:w-[80vw] mx-auto py-5 text-[24px]">
                Just Driving automatiserer hele betalingsforløbet fra start til slut. Når en elev vælger sin
                betalingsplan, sørger systemet for alt: betaling, kvittering, opfølgning og dokumentation.
            </p>

            <!-- Cards Grid -->
            <div class="max-w-6xl mx-auto grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8 mt-6">
                @foreach ($features as $feature)
                    <div
                        class="bg-[#F5f5f5] p-1 rounded-2xl shadow-sm transition-all duration-300 ease-out hover:-translate-y-2 hover:shadow-xl hover:bg-white">
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
                            <p class="text-[#858599] text-start w-[85%] text-base font-normal">{{ $feature['description'] }}
                            </p>
                        </div>
                    </div>
                @endforeach

            </div>
            <p class="text-center text-[24px] py-10 font-semibold text-[#858599]">
                Ét samlet økonomisystem betyder mindre tastearbejde og mere undervisning.
            </p>
        </section>

        <!-- Info Section2 -->
        <section id="rapporter" class="bg-[#f3f8fd] text-black w-full">
            <div
                class="max-w-full 2xl:max-w-7xl mx-auto py-10 px-6 md:px-10 lg:px-20 flex flex-col md:flex-row items-center mt-10 gap-3 overflow-hidden z-10">
                <!-- Left Column (text) -->
                <div
                    class="w-full md:w-1/2 space-y-4 opacity-0 translate-y-10 transition-all duration-700 ease-out animate-on-scroll delay-200">
                    <h2 class="text-2xl sm:text-[28px] capitalize font-bold text-black">
                        Mindre spildtid – Større overblik
                    </h2>
                    <p class="text-[#858599] text-base font-normal">
                        Med Just Driving er både du og dine elever altid opdateret på økonomien. Alt er samlet ét sted,
                        så
                        du slipper for at jonglere mellem flere systemer.
                    </p>

                    <p class="text-black font-semibold text-base">
                        Dine fordele:
                    </p>

                    <ul class="space-y-3 text-[#3384FF] text-[18px] font-normal mt-4">
                        <li class="flex items-start gap-2">
                            <img src="{{ asset('images/arrowNew.png') }}" alt="Arrow Right"
                                class="w-4 h-4 mt-1 text-[#3384FF]">
                            <span>Fuldt overblik over indtjening, restancer, transaktioner og alle betalingstyper ét
                                sted.</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <img src="{{ asset('images/arrowNew.png') }}" alt="Arrow Right"
                                class="w-4 h-4 mt-1 text-[#3384FF]">
                            <span>Automatiske betalingspåmindelser, så du undgår udeblivelser.</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <img src="{{ asset('images/arrowNew.png') }}" alt="Arrow Right"
                                class="w-4 h-4 mt-1 text-[#3384FF]">
                            <span>Elever har eget betalingsoverblik og adgang til kvitteringer via deres login.</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <img src="{{ asset('images/arrowNew.png') }}" alt="Arrow Right"
                                class="w-4 h-4 mt-1 text-[#3384FF]">
                            <span>Kortbetaling, MobilePay, PDF-fakturaer og integration til eksternt
                                økonomisystem.</span>
                        </li>
                    </ul>
                </div>
                <!-- Right Column (image) -->
                <div
                    class="w-full md:w-1/2 flex justify-end opacity-0 translate-y-10 transition-all duration-700 ease-out animate-on-scroll">
                    <img src="{{ asset('images/okonomi1.png') }}" alt="Administration System"
                        class="w-full max-w-[500px] object-cover">
                </div>
            </div>
        </section>
        <p class="text-[#858599] bg-[#f3f8fd] w-full text-center py-10 text-[24px] font-semibold">
            Mindst mulig administration — mest mulig tid til eleverne.
        </p>

        @include('layouts.footer')


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