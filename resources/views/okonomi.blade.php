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
            <h1 class="text-xl md:text-5xl capitalize font-bold text-gray-900 relative z-10">
                Online økonomisystem
            </h1>

            <!-- Subtitle -->
            <p class="w-full sm:max-w-5xl mx-auto px-3 sm:px-0 mt-4 text-[#858599] text-sm sm:text-xl relative z-10">
                Med Just Driving får du et integreret økonomisystem, der samler fakturering og betalinger direkte med
                din kalender. Du har fuldt overblik over elever, betalinger og historik – alt samlet ét sted.
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
        <section id="betalinger"
            class="w-full text-gray-900 py-5 px-6 md:px-10 lg:px-20 flex flex-col md:flex-row items-start mt-10 gap-3 overflow-hidden z-10">

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
                    Automatiske betalinger
                </h2>
                <p class="text-[#858599] text-sm">
                    Du sparer din køreskole for en masse spildtid ved at investere i Just Driving.
                </p>
                <p class="text-[#858599] text-sm">
                    Her får du adgang til en nem og overskuelig betalingsmetode, hvor langt det meste foregår helt
                    automatisk, så snart en ny elev har valgt sin betalingsplan.
                </p>
                <p class="text-[#858599] text-sm">
                    Uanset om det er en fast betaling for et helt forløb, enkelte lektioner eller tilkøb, kan du bruge
                    Just Drivings betalingsintegration til at håndtere den del af dit bogholderi.
                </p>
                <p class="text-[#858599] text-sm">
                    Brug systemet til:
                </p>

                <ul class="space-y-3 text-[#444] text-sm font-semibold mt-4">
                    <li class="flex items-start gap-2">
                        <img src="{{ asset('images/arrowNew.png') }}" alt="Arrow Right" class="w-4 h-4 text-[#3384FF]">
                        <span>Betalinger for forløb, ekstra lektioner og tilkøb</span>
                    </li>
                    <li class="flex items-start gap-2">
                        <img src="{{ asset('images/arrowNew.png') }}" alt="Arrow Right" class="w-4 h-4 text-[#3384FF]">
                        <span>Betaling med kort og MobilePay</span>
                    </li>
                    <li class="flex items-start gap-2">
                        <img src="{{ asset('images/arrowNew.png') }}" alt="Arrow Right" class="w-4 h-4 text-[#3384FF]">
                        <span>Send faktura direkte til dine elever</span>
                    </li>
                    <li class="flex items-start gap-2">
                        <img src="{{ asset('images/arrowNew.png') }}" alt="Arrow Right" class="w-4 h-4 text-[#3384FF]">
                        <span>Faktura og kvitteringer er tilgængelige i systemet og nemme at eksportere til PDF</span>
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
                            'title' => 'Slut med at spilde tid på afstemning',
                            'desc' => 'Systemet matcher betalinger automatisk for dig.',
                        ],
                        [
                            'img' => 'book.png',
                            'title' => 'Betaling med det samme',
                            'desc' => 'Elever kan kun booke lektioner, hvis de betaler med det samme, eller lektionen er en del af et allerede betalt forløb.',
                        ],
                        [
                            'img' => 'book.png',
                            'title' => 'Høj sikkerhed',
                            'desc' => 'Betalinger håndteres sikkert gennem vores danske partner Bambora, så du kan være tryg og fokusere på din kerneforretning.',
                        ],

                    ];
                @endphp

                <!-- Card Grid -->
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
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
                            <h3  class="text-lg font-semibold text-[#1E1E1E] mb-2 relative z-10 group-hover:text-[#248ec1] transition-colors duration-300">{{ $feature['title'] }}</h3>
                            <p class="text-[#858599] text-start text-sm relative z-10 group-hover:text-[#4a4a5e] transition-colors duration-300">{{ $feature['desc'] }}</p>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>

        <!-- Info Section2 -->
        <section id="rapporter"
            class="w-full bg-[#f3f8fd] text-gray-900 py-5 px-6 md:px-10 lg:px-20 flex flex-col md:flex-row items-center mt-10 gap-3 overflow-hidden z-10">
            <!-- Left Column (text) -->
            <div
                class="w-full md:w-1/2 space-y-4 opacity-0 translate-y-10 transition-all duration-700 ease-out animate-on-scroll delay-200">
                <h2 class="text-2xl font-bold text-[#1E1E1E]">
                    Mindre spildtid og større overblik
                </h2>
                <p class="text-[#858599] text-sm">
                    Få det komplette overblik over din køreskoles indtjening og dine elevers betalinger med Just
                    Driving.
                </p>
                <p class="text-[#858599] text-sm">
                    Du behøver ikke længere bruge flere systemer for at holde styr på fakturering og indbetalinger, du
                    skal kun gå et sted hen.
                </p>
                <p class="text-[#858599] text-sm">
                    Betalingsoversigten giver også dine elever et overskueligt overblik over deres transaktioner og
                    sender automatisk påmindelser ud, hvis en betaling udebliver.
                </p>
                <p class="text-[#858599] text-sm">
                    Alt samlet et sted:
                </p>

                <ul class="space-y-3 text-[#444] text-sm font-semibold mt-4">
                    <li class="flex items-start gap-2">
                        <img src="{{ asset('images/arrowNew.png') }}" alt="Arrow Right" class="w-4 h-4 text-[#3384FF]">
                        <span>Betalinger for forløb, ekstra lektioner og tilkøb</span>
                    </li>
                    <li class="flex items-start gap-2">
                        <img src="{{ asset('images/arrowNew.png') }}" alt="Arrow Right" class="w-4 h-4 text-[#3384FF]">
                        <span>Betaling med kort og MobilePay</span>
                    </li>
                    <li class="flex items-start gap-2">
                        <img src="{{ asset('images/arrowNew.png') }}" alt="Arrow Right" class="w-4 h-4 text-[#3384FF]">
                        <span>Faktura og kvitteringer er tilgængelige i systemet og nemme at eksportere til PDF</span>
                    </li>
                    <li class="flex items-start gap-2">
                        <img src="{{ asset('images/arrowNew.png') }}" alt="Arrow Right" class="w-4 h-4 text-[#3384FF]">
                        <span>Integration mellem Just Driving og dit økonomisystem</span>
                    </li>
                </ul>
            </div>
            <!-- Right Column (image) -->
            <div
                class="w-full md:w-1/2 flex justify-end opacity-0 translate-y-10 transition-all duration-700 ease-out animate-on-scroll">
                <img src="{{ asset('images/okonomi1.png') }}" alt="Administration System"
                    class="w-full max-w-[450px] object-cover">
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