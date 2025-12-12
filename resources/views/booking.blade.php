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
    <div class="content-container" style="background-image: url('{{ asset('images/Background.svg') }}'); background-attachment: scroll; background-repeat: repeat; background-position: center top; background-size: auto;">

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

        <!-- <div class="hidden lg:block fixed inset-0 -z-10 bg-no-repeat bg-center bg-cover"
            style="background-image: url('{{ asset('images/Background.svg') }}');">
        </div> -->

        <!-- Hero Section -->
        <section class="max-w-[1280px] mx-auto mt-[80px] md:mt-[140px] text-center relative">
            <!-- Title -->
            <h1 class="font-product-sans-bold text-[28px] md:text-[59px] md:leading-[95px] text-black relative z-10"
                style="letter-spacing: -2px; word-spacing: -2px;">
                Online <span class="text-[#3384FF]"> Bookingsystem</span>– Ét klik. Fuld Kontrol.
            </h1>

            <!-- Subtitle -->
            <p style="letter-spacing: -1px;"
                class="w-full sm:max-w-6xl px-6 md:px-0 mx-auto mt-[16px] leading-[38px] text-[#858599] md:text-[16px] lg:text-[24px] z-10 font-manrope-bold opacity-[90%]">
                Et stærkt bookingsystem er afgørende for en effektiv hverdag i din køreskole. Med Just Driving får du et
                bookingsystem, hvor både elever og kørelærere nemt kan booke, ændre og følge deres lektioner – samlet i
                én platform.
            </p>
            <!-- CTA Button -->
            <div class="mt-[50px] flex flex-col md:flex-row items-center justify-center gap-4 relative z-10">
                <a href="#"
                    class="flex flex-col justify-center items-center gap-[9.882px] w-[309px] h-[74px] py-[19.765px] px-[10px] rounded-[19.765px] border-[1.235px] border-[rgba(255,255,255,0.40)] bg-[#3384FF] text-white text-[19.76px] font-product-sans-bold hover:bg-[#2563EB] transition"
                    style="box-shadow: 0 24.706px 43.235px 0 rgba(51, 132, 255, 0.20);">
                    prøv Bookingsystem
                </a>

            </div>
        </section>

        @php
            $features = [
                [
                    'id' => 1,
                    'description' => 'Intuitiv kalender til lektioner,prøver og møder.',
                    'icon' => asset('images/book.png'),
                ],
                [
                    'id' => 2,

                    'description' => 'Automatiske SMS- og e-mailpåmindelser for færre udeblivelser.',
                    'icon' => asset('images/book.png'),
                ],
                [
                    'id' => 3,

                    'description' => 'Hurtig håndtering af ændringer og aflysninger.',
                    'icon' => asset('images/book.png'),
                ],
                [
                    'id' => 4,

                    'description' => 'Tydeligt overblik for kørelæreren – tilgængeligt på mobil, tablet og computer.',
                    'icon' => asset('images/book.png'),
                ],

            ];
         @endphp

        <!-- Section 2 -->
        <section id="overview"
            class="w-full mx-auto mt-[100px] md:mt-[177px] px-6 text-center relative bg-gradient-to-b from-transparent via-[#ffffff]/30 to-[#ffffff]">
            <!-- Title -->
            <h1 class="font-product-sans-bold text-[40px] font-bold leading-[60px] text-center text-[#171717] relative z-10"
                style="letter-spacing: -1.2px;">
                Derfor vælger køreskoler Just Driving
            </h1>

            <!-- Cards Grid -->
            <div class="max-w-[1280px] mx-auto flex flex-wrap justify-center gap-[13.33px] mt-16">
                @foreach ($features as $feature)
                    <div
                        class="bg-[#F5f5f5] p-2 rounded-[40px] shadow-sm transition-all duration-300 ease-out hover:-translate-y-2  hover:bg-white w-full md:w-[310px] h-[362px]">
                        <!-- Icon Section -->
                        <div
                            class="bg-[#EAEFF4] py-10 flex items-center justify-center rounded-t-[32px] transition-all duration-300 hover:bg-[#DCE8F5] h-[222px]">
                            <div
                                class="mx-auto rounded-[24px] flex items-center bg-white/40 justify-center transform transition-transform duration-300 hover:scale-110 px-6 py-[35px]">
                                <img src="{{ $feature['icon'] }}" alt="Icon" class="w-20 h-20" />
                            </div>
                        </div>

                        <!-- Text Section -->
                        <div class="flex flex-col my-5 pl-3 items-start transition-all duration-300">
                            <p class="font-manrope-medium text-[#858599] text-start w-full text-[16px] font-medium leading-[30px]"
                                style="letter-spacing: -0.32px;">{{ $feature['description'] }}</p>
                        </div>
                    </div>
                @endforeach
            </div>

        </section>

        <!-- Info Section -->
        <section id="booking-betaling"
            class="w-full bg-gradient-to-b from-[#ffffff]/30 via-[#ffffff]/40 to-transparent pt-[180px]">
            <div
                class="max-w-[1280px] mx-auto text-black px-6 flex flex-col md:flex-row items-center justify-center gap-10 z-10">
                <!-- Left Column (Image) -->
                <div
                    class="w-full md:w-1/2 flex justify-center md:justify-start  translate-y-10 transition-all duration-700 ease-out animate-on-scroll">
                    <img src="{{ asset('images/undervising1.png') }}" alt="Administration System" class="">
                </div>

                <!-- Right Column (Text Content) -->
                <div
                    class="w-full md:w-1/2 space-y-6 translate-y-10 transition-all duration-700 ease-out animate-on-scroll delay-200">
                    <h2 class="font-product-sans-bold text-[28px] font-bold leading-normal text-[#000]">
                        Booking, aftaler og betaling – samlet ét sted
                    </h2>
                    <p class="font-product-sans-regular text-[#858599] text-[16px] font-normal leading-normal">
                        hvor mange systemer vil du logge ind i hver dag? <br />de fleste kørelærere svarede: ét.
                        <br />derfor
                        har vi
                        samlet booking, kalender og betaling i ét strømlinet system.
                    </p>

                    <p class="font-product-sans-bold text-[#000] text-[20px] font-bold leading-normal">
                        Du får blandt andet:
                    </p>

                    <ul class="space-y-6 mt-4">
                        <li class="flex items-start gap-2">
                            <img src="{{ asset('images/arrowNew.png') }}" alt="Arrow Right"
                                class="w-4 h-4 mt-1 text-[#3384FF]">
                            <span class="font-product-sans-regular text-[#3384ff] text-[16px] leading-normal">Fælles
                                kalenderoverblik for elev, kørelærer og køreskole</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <img src="{{ asset('images/arrowNew.png') }}" alt="Arrow Right"
                                class="w-4 h-4 mt-1 text-[#3384FF]">
                            <span class="font-product-sans-regular text-[#3384ff] text-[16px] leading-normal">Direkte
                                booking og betaling i samme flow</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <img src="{{ asset('images/arrowNew.png') }}" alt="Arrow Right"
                                class="w-4 h-4 mt-1 text-[#3384FF]">
                            <span class="font-product-sans-regular text-[#3384ff] text-[16px] leading-normal">Hurtig
                                oprettelse af aftaler – enkeltvis eller flere ad gangen</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <img src="{{ asset('images/arrowNew.png') }}" alt="Arrow Right"
                                class="w-4 h-4 mt-1 text-[#3384FF]">
                            <span class="font-product-sans-regular text-[#3384ff] text-[16px] leading-normal">Klar
                                visning af alle kommende lektioner og aftaler</span>
                        </li>
                    </ul>
                </div>
            </div>
        </section>

        <!-- Dynamiske Formularer Section -->
        <section id=""
            class="w-full bg-gradient-to-b from-transparent via-[#ffffff]/30 to-[#ffffff] mt-[133px] pb-[100px]">
            <div class="max-w-[1280px] mx-auto px-6">
                @php
                    $features = [
                        [
                            'img' => 'data1.png',
                            'title' => 'Dynamiske formularer – fleksibel planlægning',
                            'desc' => 'Opret præcis de lektionstyper, du har brug for – enkeltlektioner, gruppetimer eller længere forløb. Systemet tilpasser sig din måde at arbejde på.',
                        ],
                        [
                            'img' => 'data2.png',
                            'title' => 'Smidig betaling – direkte i bookingflowet',
                            'desc' => 'Tilbyder du ekstra eller frivillige lektioner? Systemet håndterer betalingen automatisk som en del af bookingen – nemt for både elev og kørelærer.',
                        ],
                        [
                            'img' => 'data3.png',
                            'title' => 'Avanceret søgning og filtre – altid overblik',
                            'desc' => 'Med intelligente filtre kan du hurtigt finde specifikke elever, lektioner eller tidsrum. Perfekt til travle dage, hvor du ønsker fuldt overblik med få klik.',
                        ],

                    ];
                @endphp

                <!-- Card Grid -->
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 mt-8">
                    @foreach ($features as $index => $feature)
                        <div
                            class="relative bg-white rounded-[30px] shadow-xl border-[4px] border-[#f0f2f5] px-3 py-5 flex flex-col items-start hover:shadow-md hover:-translate-y-1 transition-all duration-300 group">
                            <div class="flex justify-center items-center p-4 mb-2 rounded-[20px] bg-[#f3f8fd]">
                                <img src="{{ asset('images/' . $feature['img']) }}" alt="{{ $feature['title'] }}"
                                    class="w-12 h-12 transform transition-transform duration-300 group-hover:scale-105">
                            </div>
                            <h4 class="font-manrope-extrabold text-[#1B1C31] text-[24px] font-extrabold leading-[33px] mb-2 relative z-10"
                                style="letter-spacing: -0.72px;">
                                {{ $feature['title'] }}
                            </h4>

                            <p class="font-manrope-regular text-[#747474] text-start text-[16px] leading-normal relative z-10"
                                style="letter-spacing: -0.32px;">
                                {{ $feature['desc'] }}
                            </p>
                        </div>
                    @endforeach
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