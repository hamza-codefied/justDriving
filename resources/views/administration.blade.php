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
            <h1 class="text-5xl font-bold text-gray-900 relative z-10">
                Online Administrationssystem
            </h1>

            <!-- Subtitle -->
            <p class="max-w-4xl mx-auto px-3 sm:px-0 mt-4 text-gray-400 text-xl relative z-10">
                Administration tager tid i enhver virksomhed. Med Just Driving samler du alt ét sted og kan nemt styre
                elever, hold og data – selvfølgelig i overensstemmelse med gældende lovgivning.
            </p>

            <!-- CTA Button -->
            <div class="mt-4 pb-2 flex items-center justify-center gap-4 z-10">
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
            class="w-full bg-transparent text-gray-900 py-16 px-6 md:px-10 lg:px-20 flex flex-col md:flex-row items-start mt-10 gap-3 overflow-hidden z-10">

            <!-- Left Column (Image) -->
            <div
                class="w-full md:w-1/2 flex justify-center opacity-0 translate-y-10 transition-all duration-700 ease-out animate-on-scroll">
                <img src="{{ asset('images/admin-system.png') }}" alt="Administration System"
                    class="w-full max-w-[450px] rounded-2xl shadow-lg object-cover">
            </div>

            <!-- Right Column (Text Content) -->
            <div
                class="w-full md:w-1/2 space-y-4 opacity-0 translate-y-10 transition-all duration-700 ease-out animate-on-scroll delay-200">
                <h2 class="text-2xl font-bold text-[#1E1E1E]">
                    Holdadministration giver dig overblik
                </h2>
                <p class="text-gray-400 text-sm">
                    Uanset om du skal oprette nye hold, komplet med prisoversigt og lektionsplan, eller vil administrere
                    nuværende hold, kan du gøre det hele med Just Driving.
                </p>
                <p class="text-gray-400 text-sm">
                    Dine elever kan tilmelde sig dine hold direkte via din hjemmeside og al data sendes videre til Just
                    Driving med en simpel API, der integrerer din hjemmeside med vores system.
                </p>
                <p class="text-gray-400 text-sm">
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