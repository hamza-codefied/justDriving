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
            <h1
                class="font-product-sans-bold text-[28px] md:text-[59px] leading-[65px] text-black relative z-10 capitalize">
                Om <span class="text-[#3384FF]"> os</span>– Skabt til køreskoler.<br /> Udviklet i Danmark
            </h1>

            <!-- Subtitle -->
            <p style="letter-spacing: -1px; color: var(--Body-text, #858599); text-align: center; font-size: 24px; line-height: normal;"
                class="w-full sm:max-w-6xl px-6 md:px-0 mx-auto mt-[16px] z-10 font-manrope-bold">
                Just Driving er udviklet af Nuvia ApS, et dansk team af IT-udviklere og erfarne kørelærere. Vi bygger
                digitale løsninger, der fungerer i den virkelige køreskolehverdag: stabile, enkle og nemme at bruge.
            </p>

            <div class="mt-[40px] flex flex-col md:flex-row items-center justify-center gap-4 relative z-10">
                <a href="{{ route('kontakt') }}"
                    class="flex flex-col justify-center items-center gap-[9.882px] w-[230px] h-[74px] py-[19.765px] px-[44.471px] rounded-[19.765px] border-[1.235px] border-[rgba(255,255,255,0.40)] bg-[#3384FF] text-white text-[20px] font-product-sans-bold hover:bg-[#2563EB] transition"
                    style="box-shadow: 0 24.706px 43.235px 0 rgba(51, 132, 255, 0.20);">
                    Kontakt Os
                </a>
            </div>

        </section>

        <section style="border: 4px solid rgba(55, 125, 255, 0.21); background: var(--grey-light, #EAEFF4);"
            class="w-[90vw] md:max-w-[1280px] h-auto lg:h-[311px] rounded-[40px] mx-auto p-10 mt-[145px] relative">
            <div class="flex flex-col md:flex-row items-center  justify-center gap-[103px]">
                <!-- Left Column -->
                <div class="w-full md:w-1/2 flex flex-col items-start">
                    <!-- Main Heading -->
                    <h4 style="color: var(--Black, #171717); font-family: Manrope; font-size: 47px; font-style: normal; font-weight: 800; line-height: 46px; letter-spacing: -1.41px;"
                        class="mb-6">
                        En del af et samlet økosystem
                    </h4>

                    <!-- First Paragraph -->
                    <p style="color: #181433; font-family: Manrope; font-size: 20px; font-style: normal; font-weight: 500; line-height: normal; letter-spacing: -0.4px;"
                        class="mb-4">
                        Just Driving er bygget af danske kørelærere og udviklere, som kender hverdagen i en køreskole.
                    </p>
                </div>

                <!-- Right Column -->
                <div class="w-full md:w-1/2 flex flex-col items-start justify-between">
                    <p
                        style="color: #000; font-family: 'Product Sans'; font-size: 18px; font-style: normal; font-weight: 400; line-height: normal; text-transform: capitalize;">
                        Just Driving arbejder tæt sammen med:
                    </p>
                    <!-- Feature List -->
                    <ul class="space-y-3 text-black font-product-sans-bold text-[16px] capitalize mt-5">
                        <li class="flex items-start gap-3 ">
                            <img src="{{ asset('images/arrowNew.png') }}" alt="Arrow Right"
                                class="w-5 h-5 mt-0.5 flex-shrink-0">
                            <span class="text-black capitalize text-base leading-relaxed">
                                <a href="https://e-teori.dk/" target="_blank"
                                    class="underline text-[#377DFF] hover:text-[#2563EB] transition-colors">
                                    e-teori.dk </a>–
                                teoriundervisning
                            </span>
                        </li>
                        <li class="flex items-start gap-3">
                            <img src="{{ asset('images/arrowNew.png') }}" alt="Arrow Right"
                                class="w-5 h-5 mt-0.5 flex-shrink-0">
                            <span class="text-black capitalize text-base leading-relaxed">
                                <a href="https://findkoreskole.dk/" target="_blank"
                                    class="underline text-[#377DFF] hover:text-[#2563EB] transition-colors">
                                    findkoreskole.dk </a>–
                                elevtilmelding
                            </span>
                        </li>
                        <li class="flex items-start gap-3">
                            <img src="{{ asset('images/arrowNew.png') }}" alt="Arrow Right"
                                class="w-5 h-5 mt-0.5 flex-shrink-0">
                            <span class="text-black capitalize text-base leading-relaxed">
                                <span class="underline text-[#377DFF] hover:text-[#2563EB] transition-colors">
                                    just-pay.dk </span>– betaling og fakturering
                            </span>
                        </li>
                    </ul>
                </div>
            </div>

        </section>

        <!-- About Video Section -->
        <section class="w-full bg-gradient-to-b from-transparent via-[#ffffff]/90 to-[#ffffff] mt-[165px]">
            <div
                class="w-[90vw] md:max-w-[1280px] mx-auto flex flex-col md:flex-row items-center gap-10 animate-on-scroll opacity-0 translate-y-10 transition-all duration-700 ease-out">
                <!-- Left: Video -->
                <div class="w-full md:w-1/2 relative group">
                    <div class="rounded-[30px] overflow-hidden shadow-lg">
                        <video autoplay muted loop playsinline
                            class="w-full h-[412px] object-cover rounded-4xl transition-transform duration-500">
                            <source
                                src="https://res.cloudinary.com/dejgep5l8/video/upload/v1762244345/2103099-uhd_3840_2160_30fps_1_hxj0cz.mp4"
                                type="video/mp4" />
                            Your browser does not support the video tag.
                        </video>
                    </div>
                </div>

                <!-- Right: Text Content -->
                <div class="w-full md:w-1/2 text-center md:text-left">
                    <h2 style="color: #000; font-size: 34px; line-height: normal; text-transform: capitalize;"
                        class="mb-4 font-product-sans-bold">
                        Én platform til hele din køreskole
                    </h2>
                    <p style="color: #181433; font-size: 24px; line-height: 32px;"
                        class="w-full font-product-sans-regular">
                        De fleste køreskoler bruger flere systemer – og <br /> mangler stadig noget. <br /> Just Driving
                        samler
                        det
                        hele
                        ét sted: undervisning,<br /> booking, betaling og administration. Ingen overlap. <br /> Ingen
                        rod.
                    </p>
                </div>
            </div>
        </section>

        <section class="w-full pt-[70px] bg-white">
            <div
                class="w-[90vw] md:max-w-[1280px] mx-auto flex flex-col md:flex-row items-center justify-center gap-[30px] animate-on-scroll opacity-0 translate-y-10 transition-all duration-700 ease-out">
                <!-- Right: Text Content -->
                <div class="w-full md:w-1/2 text-center md:text-left">
                    <h4 style="color: #000; font-size: 34px; line-height: normal; text-transform: capitalize;"
                        class="mb-4 font-product-sans-bold">
                        Hvorfor vælge os?
                    </h4>
                    <p style="color: #181433; font-size: 24px; line-height: normal;"
                        class="w-full font-product-sans-regular">
                        Udviklet i tæt samarbejde med kørelærere, er vores <br /> løsning skabt til at give dig færre
                        klik og
                        mindre bøvl i hverdagen. Vi opdaterer løbende med nye funktioner, <br /> og vi lytter altid til
                        dine
                        behov, så systemet hele tiden <br /> bliver bedre for dig.
                    </p>
                </div>

                <!-- Left: Image -->
                <div class="w-full md:w-1/2 relative group">
                    <div class="overflow-hidden rounded-[30px] shadow-lg">
                        <img src="{{ asset('images/chooseus.png') }}" alt="Choose Us"
                            class="w-full h-[412px] object-cover transition-transform duration-500">
                    </div>
                </div>
            </div>
        </section>

        <section class="w-full bg-white pt-[130px] pb-[100px]">
            <div style="border:3px solid rgba(43, 112, 216, 0.50); ;"
                class="w-[90vw] md:max-w-[1280px] rounded-[40px] bg-[#e2ebf4] p-[50px] text-center relative mx-auto">
                <!-- Title -->
                <h4 style="color: var(--Black, #171717); text-align: center; font-family: 'Product Sans'; font-size: 44px; font-style: normal; font-weight: 700; line-height: normal; text-transform: capitalize;"
                    class="relative z-10">
                    Vi hjælper dig med at gøre <br /> hverdagen enklere
                </h4>
                <p style="color: #181433; text-align: center; font-size: 24px; line-height: 32px;"
                    class="w-full md:w-[80vw] mx-auto py-5 font-product-sans-regular">
                    Just Driving giver dig tid til det vigtigste: eleverne og undervisningen.
                </p>
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