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
                Online bookingsystem
            </h1>

            <!-- Subtitle -->
            <p class="w-full sm:max-w-5xl mx-auto px-3 sm:px-0 mt-4 text-[#858599] text-sm sm:text-xl relative z-10">
                Et effektivt kalendersystem gør hverdagen lettere. Med Just Driving kan både elever og kørelærere nemt
                håndtere bookinger, få påmindelser og holde styr på ændringer – alt samlet i ét brugervenligt system.
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
        <section id="overview"
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
                    Booking, aftaler og betalinger
                </h2>
                <p class="text-[#858599] text-sm">
                    Hvis du selv kunne bestemme, hvor mange systemer har du så lyst til at tjekke hver eneste dag?
                </p>
                <p class="text-[#858599] text-sm">
                    Det spørgsmål stillede vi en flok køreskolelærere og svaret var entydigt: Et!
                </p>
                <p class="text-[#858599] text-sm">
                    Derfor kan kalendersystemet hos Just Driving både holde styr på dine bookinger, eksisterende aftaler
                    og indbetalinger.
                </p>
                <p class="text-[#858599] text-sm">
                    For at gøre din hverdag så enkel som muligt:
                </p>

                <ul class="space-y-3 text-[#444] text-sm font-semibold mt-4">
                    <li class="flex items-start gap-2">
                        <img src="{{ asset('images/arrowNew.png') }}" alt="Arrow Right" class="w-4 h-4 text-[#3384FF]">
                        <span>Har både elev, kørelærer og køreskole adgang til kalenderen</span>
                    </li>
                    <li class="flex items-start gap-2">
                        <img src="{{ asset('images/arrowNew.png') }}" alt="Arrow Right" class="w-4 h-4 text-[#3384FF]">
                        <span>Kan du hurtigt oprette aftaler – uanset om du vil oprette enkelte aftaler eller flere på
                            en gang</span>
                    </li>
                    <li class="flex items-start gap-2">
                        <img src="{{ asset('images/arrowNew.png') }}" alt="Arrow Right" class="w-4 h-4 text-[#3384FF]">
                        <span>Booker og betaler dine elever direkte via kalendersystemet</span>
                    </li>
                    <li class="flex items-start gap-2">
                        <img src="{{ asset('images/arrowNew.png') }}" alt="Arrow Right" class="w-4 h-4 text-[#3384FF]">
                        <span>Er det nemt for både elev og kørelærer at se kommende aftaler</span>
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
                            'title' => 'Dynamiske formularer',
                            'desc' => 'Opret nemt lektioner – enkeltvis, i grupper eller over flere dage.',
                        ],
                        [
                            'img' => 'book.png',
                            'title' => 'Betalinger',
                            'desc' => 'Køreskolen sætter selv prisen på holdet, og Just Driving håndterer alle indbetalinger.',
                        ],
                        [
                            'img' => 'book.png',
                            'title' => 'Avanceret søgning',
                            'desc' => 'Få et godt overblik over dine kommende aftaler med filtrer og søgemuligheder i kalenderen.',
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