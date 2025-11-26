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
            <h1 class="text-xl md:text-5xl capitalize font-bold text-gray-900 relative z-10">
                Om <span class="text-[#3384FF]">Os</span> – Skabt til køreskoler. Udviklet i Danmark.
            </h1>

            <!-- Subtitle -->
            <p class="w-full sm:max-w-4xl mx-auto px-3 sm:px-0 mt-4 text-[#858599] text-sm sm:text-xl relative z-10">
                Just Driving er udviklet af Nuvia ApS, et dansk team af IT-udviklere og erfarne kørelærere. Vi bygger
                digitale løsninger, der fungerer i den virkelige køreskolehverdag: stabile, enkle og nemme at bruge.
            </p>
        </section>

        <section
            class="max-w-6xl mx-auto bg-[#eaeff4] rounded-2xl py-10 px-6 md:px-10 lg:px-20 mt-24 sm:mt-16 relative overflow-hidden">
            <div class="flex flex-col md:flex-row items-center gap-8 md:gap-24">
                <!-- Left Column -->
                <div class="w-full md:w-1/2 flex flex-col items-start">
                    <!-- Main Heading -->
                    <h1 class="text-2xl sm:text-3xl md:text-4xl font-bold leading-tight text-gray-900 mb-6">
                        En del af et samlet økosystem
                    </h1>

                    <!-- First Paragraph -->
                    <p class="text-[#444] text-xl mb-4 leading-relaxed">
                        Just Driving er bygget af danske kørelærere og udviklere, som kender hverdagen i en køreskole.
                    </p>
                </div>

                <!-- Right Column -->
                <div class="w-full md:w-1/2 flex flex-col items-start">
                    <p class="text-[#1E1E1E] font-semibold text-lg mb-4 leading-relaxed">
                        Just Driving arbejder tæt sammen med:
                    </p>
                    <!-- Feature List -->
                    <ul class="space-y-6">
                        <li class="flex items-start gap-3">
                            <img src="{{ asset('images/arrowNew.png') }}" alt="Arrow Right"
                                class="w-5 h-5 mt-0.5 flex-shrink-0">
                            <span class="text-[#444] capitalize text-base leading-relaxed">
                                <span class="underline text-[#3384FF]"> e-teori.dk </span>– teoriundervisning
                            </span>
                        </li>
                        <li class="flex items-start gap-3">
                            <img src="{{ asset('images/arrowNew.png') }}" alt="Arrow Right"
                                class="w-5 h-5 mt-0.5 flex-shrink-0">
                            <span class="text-[#444] capitalize text-base leading-relaxed">
                                <span class="underline text-[#3384FF]"> findkoreskole.dk </span>– elevtilmelding
                            </span>
                        </li>
                        <li class="flex items-start gap-3">
                            <img src="{{ asset('images/arrowNew.png') }}" alt="Arrow Right"
                                class="w-5 h-5 mt-0.5 flex-shrink-0">
                            <span class="text-[#444] capitalize text-base leading-relaxed">
                                <span class="font-semibold"> just-pay.dk </span>– betaling og fakturering
                            </span>
                        </li>
                    </ul>
                </div>
            </div>

        </section>
        <p class="text-[#1E1E1E] mt-4 text-sm sm:text-base max-w-md text-center leading-relaxed">
            Alt udvikles og hostes i Danmark med fuld fokus på brugervenlighed og datasikkerhed.
        </p>

        <!-- About Video Section -->
        <section
            class="max-w-full 2xl:max-w-7xl mx-auto mt-20 px-4 sm:px-6 lg:px-8 flex flex-col md:flex-row items-center gap-10 md:gap-16 animate-on-scroll opacity-0 translate-y-10 transition-all duration-700 ease-out">

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
                    Én platform til hele din køreskole
                </h2>
                <p class="text-[#858599] text-sm sm:text-base w-full md:w-[80%] lg:text-lg leading-relaxed mb-6">
                    De fleste køreskoler bruger flere systemer – og mangler stadig noget. Just Driving samler det hele
                    ét sted: undervisning, booking, betaling og administration. Ingen overlap. Ingen rod.
                </p>
            </div>
        </section>

        <section
            class="max-w-full 2xl:max-w-7xl mx-auto mt-20 px-4 sm:px-6 lg:px-8 flex flex-col md:flex-row items-center gap-10 md:gap-16 animate-on-scroll opacity-0 translate-y-10 transition-all duration-700 ease-out">

            <!-- Right: Text Content -->
            <div class="w-full md:w-1/2 text-center md:text-left">
                <h2 class="text-2xl sm:text-3xl lg:text-4xl font-bold text-gray-900 mb-4 capitalize">
                    Hvorfor vælge os?
                </h2>
                <ul class="space-y-4 text-[#444] text-base leading-relaxed list-disc list-inside">
                    <li>Udviklet sammen med karelærere</li>
                    <li>Færre klik, mindre bavi</li>
                    <li>Løbende opdateringer og nye funktioner</li>
                    <li>Vi lytter til dine behov</li>
                </ul>
            </div>

            <!-- Left: Image -->
            <div class="w-full md:w-1/2 relative group">
                <div class="overflow-hidden shadow-lg">
                    <img src="{{ asset('images/chooseus.png') }}" alt="Choose Us"
                        class="w-full h-auto object-cover transition-transform duration-500">
                </div>
            </div>
        </section>

        <section class="w-full mx-auto mt-6 sm:mt-10 px-6 py-0 sm:py-5 text-center relative overflow-hidden">
            <!-- Title -->
            <h1 class="text-2xl sm:text-3xl md:text-4xl font-bold leading-tight text-gray-900 relative z-10">
                Vi hjælper dig med at gøre hverdagen enklere
            </h1>
            <p class="text-[#1E1E1E] w-full md:w-[80vw] mx-auto py-5 text-[20px]">
                Just Driving giver dig tid til det vigtigste: eleverne og undervisningen.
            </p>
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