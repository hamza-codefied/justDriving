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
            <h1 class="text-xl md:text-5xl font-bold text-black relative z-10">
                Online bookingsystem – Ét klik. Fuld kontrol.
            </h1>

            <!-- Subtitle -->
            <p
                class="w-full sm:max-w-5xl mx-auto px-3 sm:px-0 mt-4 text-[#858599] text-sm sm:text-[24px] leading-tight relative z-10">
                Et stærkt bookingsystem er afgørende for en effektiv hverdag i din køreskole. Med Just Driving får du et
                bookingsystem, hvor både elever og kørelærere nemt kan booke, ændre og følge deres lektioner – samlet i
                én platform.
            </p>
        </section>

        @php
            $features = [
                [
                    'id' => 1,
                    'description' => 'Intuitiv kalender til lektioner, prøver og møder.',
                    'icon' => asset('images/newbook.png'),
                ],
                [
                    'id' => 2,

                    'description' => 'Automatiske SMS- og e-mailpåmindelser for færre udeblivelser.',
                    'icon' => asset('images/newbook.png'),
                ],
                [
                    'id' => 3,

                    'description' => 'Hurtig håndtering af ændringer og aflysninger.',
                    'icon' => asset('images/newbook.png'),
                ],
                [
                    'id' => 4,

                    'description' => 'Tydeligt overblik for kørelæreren – tilgængeligt på mobil, tablet og computer.',
                    'icon' => asset('images/newbook.png'),
                ],
            ];
         @endphp

        <!-- Section 2 -->
        <section class="w-full mx-auto mt-24 sm:mt-20 px-6 py-0 sm:py-5 text-center relative overflow-hidden">
            <!-- Title -->
            <h1
                class="text-2xl sm:text-3xl md:text-4xl lg:text-[50px] font-bold leading-tight text-black relative z-10">
                Derfor vælger køreskoler Just Driving
            </h1>

            <!-- Cards Grid -->
            <div class="max-w-5xl mx-auto grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8 mt-12">
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
                            <p class="text-[#858599] text-start w-[85%] text-base font-medium">{{ $feature['description'] }}
                            </p>
                        </div>
                    </div>
                @endforeach

            </div>
            <p class="text-center text-[20px] py-10 font-semibold text-[#858599]">
                Slut med dobbeltbookinger og rod. Få fuld kontrol over din daglige drift.
            </p>
        </section>

        <!-- Info Section -->
        <section id="overview"
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
                <h2 class="text-2xl sm:text-[28px] capitalize font-bold text-black">
                    Booking, aftaler og betaling – samlet ét sted
                </h2>
                <p class="text-[#858599] text-base font-normal">
                    Hvor mange systemer vil du logge ind i hver dag? De fleste kørelærere svarede: Ét. Derfor har vi
                    samlet booking, kalender og betaling i ét strømlinet system.


                </p>
                <p class="text-black capitalize font-semibold text-base">
                    Du får blandt andet:
                </p>

                <ul class="space-y-3 text-[#3384FF] text-[18px] font-normal mt-8">
                    <li class="flex items-start gap-2">
                        <img src="{{ asset('images/arrowNew.png') }}" alt="Arrow Right"
                            class="w-4 h-4 text-[#3384FF] mt-1">
                        <span>Fælles kalenderoverblik for elev, kørelærer og køreskole</span>
                    </li>
                    <li class="flex items-start gap-2">
                        <img src="{{ asset('images/arrowNew.png') }}" alt="Arrow Right"
                            class="w-4 h-4 text-[#3384FF] mt-1">
                        <span>Direkte booking og betaling i samme flow</span>
                    </li>
                    <li class="flex items-start gap-2">
                        <img src="{{ asset('images/arrowNew.png') }}" alt="Arrow Right"
                            class="w-4 h-4 text-[#3384FF] mt-1">
                        <span>Hurtig oprettelse af aftaler – enkeltvis eller flere ad gangen</span>
                    </li>
                    <li class="flex items-start gap-2">
                        <img src="{{ asset('images/arrowNew.png') }}" alt="Arrow Right"
                            class="w-4 h-4 text-[#3384FF] mt-1">
                        <span>Klar visning af alle kommende lektioner og aftaler</span>
                    </li>
                </ul>
            </div>
        </section>
        <p class="text-[#858599] py-5 text-[20px]">
            Just Driving giver dig en hverdag, hvor alt hænger sammen – præcis som det bør være.
        </p>

        <!-- Dynamiske Formularer Section -->
        <section class="w-full mx-auto mt-24 sm:mt-16 px-6 py-0 sm:py-5 text-center mb-10 relative overflow-hidden">
            <div class="max-w-6xl mx-auto">
                <!-- Main Heading -->
                <h1
                    class="text-2xl sm:text-3xl md:text-4xl lg:text-[50px] font-bold leading-tight text-black relative z-10 mb-6">
                    Dynamiske Formularer – Fleksibel Planlægning
                </h1>

                <!-- Introductory Paragraph -->
                <p class="text-[#858599] text-base font-normal mb-12 relative z-10">
                    Opret præcis de lektionstyper, du har brug for – enkeltlektioner, gruppetimer eller længere forløb.
                    Systemet tilpasser sig din måde at arbejde på.
                </p>

                <!-- First Sub-section -->
                <div class="text-center mb-10">
                    <h2 class="text-xl sm:text-2xl md:text-[28px] font-bold text-black mb-4 text-center">
                        Smidig betaling – direkte i bookingflowet
                    </h2>
                    <p class="text-[#858599] text-base mb-3">
                        Tilbyder du ekstra eller frivillige lektioner? 
                    </p>
                    <p class="text-[#858599] text-base leading-relaxed">
                        Systemet håndterer betalingen automatisk som en del af bookingen – nemt for både elev og
                        kørelærer.
                    </p>
                </div>

                <!-- Second Sub-section -->
                <div class="text-center">
                    <h2 class="text-xl sm:text-2xl md:text-[28px] font-bold text-black mb-4">
                        Avanceret søgning og filtre – altid overblik
                    </h2>
                    <p class="text-[#858599] text-base font-normal leading-relaxed">
                        Med intelligente filtre kan du hurtigt finde specifikke elever, lektioner eller tidsrum. Perfekt
                        til travle dage, hvor du ønsker fuldt overblik med få klik.
                    </p>
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