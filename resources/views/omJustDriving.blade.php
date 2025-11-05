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
                Om <span class="text-[#3384FF]">Os</span>
            </h1>

            <!-- Subtitle -->
            <p class="w-full sm:max-w-4xl mx-auto px-3 sm:px-0 mt-4 text-[#858599] text-sm sm:text-xl relative z-10">
                Just Driving er den perfekte kombination af erfarne it-folk, med fokus på at skabe systemer, der er
                nemme at bruge og giver overblik – og erfarne kørelærere og køreskoler, som har skubbet på for at få et
                system, der kan det hele.
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

        <!-- About Video Section -->
        <section
            class="w-full mx-auto mt-20 px-4 sm:px-6 lg:px-8 flex flex-col md:flex-row items-center gap-10 md:gap-16 animate-on-scroll opacity-0 translate-y-10 transition-all duration-700 ease-out">

            <!-- Left: Video -->
            <div class="w-full md:w-1/2 relative group">
                <div class="aspect-w-16 aspect-h-9 rounded-2xl overflow-hidden shadow-lg">
                    <video autoplay muted loop playsinline
                        class="w-full h-[320px] object-cover rounded-4xl transition-transform duration-500">
                        <source
                            src="https://res.cloudinary.com/dejgep5l8/video/upload/v1762244345/2103099-uhd_3840_2160_30fps_1_hxj0cz.mp4"
                            type="video/mp4" />
                        Your browser does not support the video tag.
                    </video>
                </div>
            </div>

            <!-- Right: Text Content -->
            <div class="w-full md:w-1/2 text-center md:text-left">
                <h2 class="text-2xl sm:text-3xl lg:text-4xl font-bold text-gray-900 mb-4 capitalize">
                    Nemmere for dig
                </h2>
                <p class="text-[#858599] text-sm sm:text-base lg:text-lg leading-relaxed mb-6">
                    Der findes mange systemer på markedet, men de mangler altid noget. Hos Just Driving får du ét
                    komplet system, der samler det hele – kalender, fakturering og undervisning. Vi udvikler løbende, så
                    du altid er på forkant med fremtidens behov.
                </p>
                <a href="{{ route('kontakt') }}"
                    class="inline-block bg-[#3384FF] text-white px-16 py-3 rounded-xl text-sm font-semibold shadow-md hover:bg-[#2563EB] transition">
                    Kontakt Os
                </a>
            </div>
        </section>

        <!-- info Section -->
        <section
            class="w-full max-w-full mx-auto mt-10 px-4 sm:px-6 text-start animate-on-scroll opacity-0 translate-y-10 transition-all duration-700 ease-out">
            <h2 class="text-2xl sm:text-3xl lg:text-4xl font-bold text-gray-900 mb-4">
                Her mangler ikke noget
            </h2>
            <p class="text-[#858599] text-sm sm:text-base w-full leading-relaxed">
                Det er vores intention at gøre det enkelt for dig at fokusere på din kerneforretning – dine elever.
                Og for dine elever at komme godt igennem deres oplevelse hos dig.
                I stedet for at se Just Driving som ”endnu et system”, du skal sætte dig ind i, kan du se på det som
                ”det eneste system” du skal sætte dig ind i.
                Med hjælp fra erfarne kørelærere har vi udviklet et system, der er nemt at tilgå og giver dig præcis det
                overblik, du før har skullet åbne flere systemer for at opnå.
                Her får du det hele et sted – så du kan lave det, du er bedst til.
            </p>
        </section>

        <!-- Dynamic Info Cards Section -->
        <section
            class="w-full mx-auto mt-20 px-4 sm:px-6 lg:px-8 text-center animate-on-scroll opacity-0 translate-y-10 transition-all duration-700 ease-out">

            <!-- Heading -->
            <h2 class="text-2xl sm:text-3xl lg:text-4xl font-bold text-gray-900 mb-4">
                Vores værdier
            </h2>

            <!-- Paragraph -->
            <p class="text-[#858599] text-sm sm:text-base lg:text-lg max-w-3xl mx-auto leading-relaxed mb-10">
                Vi er drevet af at skabe en platform, der er nem at bruge, sikker og altid i udvikling.
            </p>

            @php
                $cards = [
                    [
                        'img' => 'simplicitet.png',
                        'title' => 'Simplicitet',
                        'desc' => 'Vi tror på, at det enkle er det bedste.',
                    ],
                    [
                        'img' => 'tillid.png',
                        'title' => 'Tillid',
                        'desc' => 'Vi behandler dine data med respekt og sikkerhed.',
                    ],
                    [
                        'img' => 'innovation.png',
                        'title' => 'Innovation',
                        'desc' => 'Vi forbedrer løbende vores løsninger med ny teknologi.',
                    ],
                ];
            @endphp

            <!-- Cards Grid -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8 mt-8">
                @foreach ($cards as $card)
                    <div
                        class="group bg-[#F7FAFC] border  rounded-xl p-6 transition-all duration-500 ease-out hover:shadow-[0_8px_25px_rgba(0,0,0,0.1)] hover:-translate-y-3 hover:scale-[1.03] hover:border-[#4c8099]/40 hover:bg-white hover:shadow-[#4c8099]/20 relative overflow-hidden">

                        <!-- Glow effect -->
                        <div
                            class="absolute inset-0 bg-gradient-to-r from-[#4c8099]/5 via-[#4c8099]/10 to-transparent opacity-0 group-hover:opacity-100 blur-2xl transition-opacity duration-500">
                        </div>

                        <div class="relative z-10 flex justify-start mb-4">
                            <img src="{{ asset('images/' . $card['img']) }}" alt="{{ $card['title'] }}"
                                class="h-8 w-8 object-contain transition-transform duration-500 group-hover:scale-110 group-hover:drop-shadow-[0_0_10px_#4c8099]">
                        </div>

                        <h3
                            class="relative z-10 text-lg sm:text-xl font-semibold text-gray-900 mb-2 text-left transition-colors duration-300 group-hover:text-[#4c8099]">
                            {{ $card['title'] }}
                        </h3>

                        <p
                            class="relative z-10 text-[#4c8099] text-sm text-left transition-all duration-300 group-hover:text-[#366074]">
                            {{ $card['desc'] }}
                        </p>
                    </div>
                @endforeach
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