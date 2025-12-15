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

        <!-- Left Gradient (Figma Design) -->
        <div class="absolute left-0 pointer-events-none"
            style="top: -150px; width: 103.782px; height: 425.071px; transform: rotate(-45deg); background: linear-gradient(180deg, rgba(51, 132, 255, 0.60) 1.66%, rgba(51, 132, 255, 0.30) 100%); filter: blur(50px);">
        </div>

        <!-- Right Gradient (Figma Design) -->
        <div class="absolute right-0 pointer-events-none"
            style="top: -150px; width: 103.782px; height: 425.071px; transform: rotate(45deg); background: linear-gradient(180deg, rgba(51, 132, 255, 0.60) 1.66%, rgba(51, 132, 255, 0.30) 100%); filter: blur(50px);">
        </div>

        @include('layouts.header')

        <!-- <div class="hidden lg:block fixed inset-0 -z-10 bg-no-repeat bg-center bg-cover"
            style="background-image: url('{{ asset('images/Background.svg') }}');">
        </div> -->

        <!-- Hero Section -->
        <section class="max-w-[1280px] mx-auto mt-[80px] md:mt-[140px] text-center relative">
            <!-- Title -->
            <h1 class="font-product-sans-bold text-[28px] md:text-[59px] md:leading-[65px] text-black relative z-10 capitalize"
                style="letter-spacing: -2px; word-spacing: -2px;">
                Online <span class="text-[#3384FF]"> økonomisystem</span>– Fuld kontrol<br /> over din forretning.
            </h1>

            <!-- Subtitle -->
            <p style="letter-spacing: -1px;"
                class="w-full sm:max-w-7xl px-6 md:px-0 mx-auto mt-[16px] leading-[38px] text-[#858599] md:text-[16px] lg:text-[24px] z-10 font-manrope-bold opacity-[90%]">
                Et stærkt økonomisystem er fundamentet for en professionel køreskole. I Just Driving er økonomien fuldt
                integreret <br /> i hele platformen — kalender, booking og betaling arbejder sammen i ét flow, så du
                altid har
                styr på indtægter,<br />
                fakturaer og elevbetalinger uden ekstra systemer.
            </p>
            <!-- CTA Button -->
            <div class="mt-[50px] flex flex-col md:flex-row items-center justify-center gap-4 relative z-10">
                <a href="#"
                    class="flex flex-col justify-center items-center gap-[9.882px] w-[284px] h-[74px] py-[19.765px] px-[10px] rounded-[19.765px] border-[1.235px] border-[rgba(255,255,255,0.40)] bg-[#3384FF] text-white text-[20px] font-product-sans-bold hover:bg-[#2563EB] transition"
                    style="box-shadow: 0 24.706px 43.235px 0 rgba(51, 132, 255, 0.20);">
                    prøv Okonomisystem
                </a>
            </div>
        </section>

        @php
            $features = [
                [
                    'id' => 1,
                    'description' => 'Betaling og booking i samme flow – direkte i kalenderen.',
                    'icon' => asset('images/book.png'),
                ],
                [
                    'id' => 2,

                    'description' => 'Automatisk faktura, kvittering og betalingspåmindelser.',
                    'icon' => asset('images/book.png'),
                ],
                [
                    'id' => 3,

                    'description' => 'Komplet betalingshistorik for hver elev med nem opfølgning.',
                    'icon' => asset('images/book.png'),
                ],
                [
                    'id' => 4,

                    'description' => 'Fleksibel loginstruktur, så kørelærere kan skifte mellem flere køreskoler.',
                    'icon' => asset('images/book.png'),
                ],

            ];
         @endphp

        <!-- Section 2 -->
        <section
            class="w-full mx-auto mt-[100px] md:mt-[160px] px-6 text-center relative bg-gradient-to-b from-transparent via-[#ffffff]/30 to-[#ffffff]">
            <!-- Title -->
            <h4 class="font-product-sans-bold text-[40px] font-bold leading-[60px] text-center text-[#171717] relative z-10"
                style="letter-spacing: -1.2px;">
                Du får
            </h4>

            <!-- Cards Grid -->
            <div class="max-w-[1280px] mx-auto flex flex-wrap justify-center gap-3 mt-[35px]">
                @foreach ($features as $feature)
                    <div
                        class="bg-[#F5f5f5] p-2 rounded-[40px] shadow-sm transition-all duration-300 ease-out hover:-translate-y-2  hover:bg-white w-full md:max-w-[310px] h-[364px]">
                        <!-- Icon Section -->
                        <div
                            class="bg-[#EAEFF4] py-10 flex items-center justify-center rounded-t-[32px] transition-all duration-300 hover:bg-[#DCE8F5] h-[222px]">
                            <div
                                class="mx-auto rounded-[24px] flex items-center bg-white/40 justify-center transform transition-transform duration-300 hover:scale-110 p-6">
                                <img src="{{ $feature['icon'] }}" alt="Icon" class="w-20 h-20" />
                            </div>
                        </div>

                        <!-- Text Section -->
                        <div class="flex flex-col my-5 pl-4 items-start transition-all duration-300">
                            <p class="font-manrope-regular text-[#858599] text-start w-[95%] text-[16px] font-medium leading-[30px]"
                                style="letter-spacing: -0.32px;">{{ $feature['description'] }}</p>
                        </div>
                    </div>
                @endforeach
            </div>

        </section>

        <!-- Info Section -->
        <section id="betalinger"
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
                    class="w-full md:w-1/2 space-y-4 translate-y-10 transition-all duration-700 ease-out animate-on-scroll delay-200">
                    <h2 class="font-product-sans-bold text-[28px] font-bold leading-normal text-[#000]">
                        Slut med manuelle afstemninger – betalingen matcher automatisk
                    </h2>
                    <p class="font-product-sans-regular text-[#858599] text-[16px] font-normal leading-normal">
                        Når en elev køber en lektion, et forløb eller et tilkøb, matcher systemet automatisk betalingen.
                        du
                        slipper for manuel kontrol og får i stedet et fuldt opdateret økonomisk overblik.
                    </p>

                    <p class="font-product-sans-bold text-[#000] text-[20px] font-bold leading-normal ">
                        Automatiseret og sikker betalingskontrol:
                    </p>

                    <ul class="space-y-4 mt-4">
                        <li class="flex items-start gap-2">
                            <img src="{{ asset('images/arrowNew.png') }}" alt="Arrow Right"
                                class="w-4 h-4 mt-1 text-[#3384FF]">
                            <span
                                class="font-product-sans-regular text-[#3384ff] text-[16px] font-normal leading-normal">Elever
                                kan kun booke lektioner, når betalingen er gennemført.</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <img src="{{ asset('images/arrowNew.png') }}" alt="Arrow Right"
                                class="w-4 h-4 mt-1 text-[#3384FF]">
                            <span
                                class="font-product-sans-regular text-[#3384ff] text-[16px] font-normal leading-normal">Systemet
                                håndterer betalingsstatus automatisk og viser restancer tydeligt.</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <img src="{{ asset('images/arrowNew.png') }}" alt="Arrow Right"
                                class="w-4 h-4 mt-1 text-[#3384FF]">
                            <span
                                class="font-product-sans-regular text-[#3384ff] text-[16px] font-normal leading-normal">Alle
                                opkrævninger og transaktioner er samlet i et klart overblik.</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <img src="{{ asset('images/arrowNew.png') }}" alt="Arrow Right"
                                class="w-4 h-4 mt-1 text-[#3384FF]">
                            <span
                                class="font-product-sans-regular text-[#3384ff] text-[16px] font-normal leading-normal">Betalinger
                                behandles sikkert via Stripe med høj datasikkerhed.</span>
                        </li>
                    </ul>
                </div>
            </div>
        </section>

        @php
            $features = [
                [
                    'id' => 1,
                    'description' => 'Betaling for forløb, enkeltlektioner og tilkøb – samlet ét sted.',
                    'icon' => asset('images/book.png'),
                ],
                [
                    'id' => 2,

                    'description' => 'Kortbetaling og MobilePay integreret direkte i systemet.',
                    'icon' => asset('images/book.png'),
                ],
                [
                    'id' => 3,

                    'description' => 'Automatisk fakturering, kvittering og PDF-eksport til arkiv eller bogholder.',
                    'icon' => asset('images/book.png'),
                ],
                [
                    'id' => 4,

                    'description' => 'Systemet sender selv påmindelser ved manglende betaling.',
                    'icon' => asset('images/book.png'),
                ],

            ];
         @endphp
        <!-- Section 2 -->
        <section
            class="w-full bg-gradient-to-b from-transparent via-[#ffffff]/30 to-[#ffffff]/30  mx-auto mt-[100px] md:mt-[214px] pb-[160px] px-6 text-center relative">
            <!-- Title -->
            <h4 class="font-product-sans-bold text-[50px] font-bold leading-[60px] text-center text-[#171717] relative z-10"
                style="letter-spacing: -1.2px;">
                Mindre administration, mere undervisning
            </h4>
            <p class="font-product-sans-regular text-[#858599] text-center text-[24px] font-normal leading-[30px] mt-6"
                style="letter-spacing: -0.72px;">
                Just Driving automatiserer hele betalingsforløbet fra start til slut. <br />Når en elev vælger sin
                betalingsplan, sørger systemet for alt: betaling, kvittering, opfølgning og dokumentation.
            </p>

            <!-- Cards Grid -->
            <div class="max-w-[1280px] mx-auto flex flex-wrap justify-center gap-3 mt-[64px]">
                @foreach ($features as $feature)
                    <div
                        class="bg-[#F5f5f5] p-2 rounded-[40px] shadow-sm transition-all duration-300 ease-out hover:-translate-y-2  hover:bg-white w-full md:w-[310px] h-[368px]">
                        <!-- Icon Section -->
                        <div
                            class="bg-[#EAEFF4] py-10 flex items-center justify-center rounded-t-[32px] transition-all duration-300 hover:bg-[#DCE8F5] h-[222px]">
                            <div
                                class="mx-auto rounded-[24px] flex items-center bg-white/40 justify-center transform transition-transform duration-300 hover:scale-110 p-6">
                                <img src="{{ $feature['icon'] }}" alt="Icon" class="w-20 h-20" />
                            </div>
                        </div>

                        <!-- Text Section -->
                        <div class="flex flex-col my-5 pl-4 items-start transition-all duration-300">
                            <p class="font-manrope-medium text-[#858599] text-start w-[95%] text-[16px] font-medium leading-[30px]"
                                style="letter-spacing: -0.32px;">{{ $feature['description'] }}</p>
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="mt-[64px] flex flex-col md:flex-row items-center justify-center gap-4 relative z-10">
                <a href="#"
                    class="flex flex-col justify-center items-center gap-[9.882px] w-[246px] h-[74px] py-[19.765px] px-[44.471px] rounded-[19.765px] border-[1.235px] border-[rgba(255,255,255,0.40)] bg-[#3384FF] text-white text-[20px] font-product-sans-bold hover:bg-[#2563EB] transition"
                    style="box-shadow: 0 24.706px 43.235px 0 rgba(51, 132, 255, 0.20);">
                    Prøv Gratis
                </a>
                <a href="{{ route('kontakt') }}"
                    class="flex flex-col justify-center items-center gap-[9.882px] w-[276px] h-[74px] py-[19.765px] px-[44.471px] rounded-[19.765px] border-[1.235px] border-[#377DFF] bg-[#E8F2FF] text-[#3384FF] text-[20px] font-product-sans-bold hover:bg-[#3384FF] hover:text-white transition"
                    style="box-shadow: 0 24.706px 43.235px 0 rgba(51, 132, 255, 0.20);">
                    Kontakt Os
                </a>
            </div>
        </section>

        <!-- Info Section2 -->
        <section id="rapporter" class="bg-[#f3f8fd] text-black w-full xl:p-[76px]">
            <div class="max-w-[1280px] mx-auto px-6 lg:px-0 flex flex-col md:flex-row items-center gap-10 z-10">
                <!-- Left Column (Text) -->
                <div
                    class="w-full md:w-1/2 space-y-2 opacity-0 translate-y-10 transition-all duration-700 ease-out animate-on-scroll delay-200">
                    <h4 class="font-product-sans-bold text-[#000] text-[28px] font-bold leading-normal">
                        Mindre spildtid – Større overblik
                    </h4>
                    <p
                        class="font-product-sans-regular text-[#858599] text-[16px] font-normal leading-normal capitalize">
                        Med Just Driving er både du og dine elever altid opdateret på økonomien. Alt er samlet ét sted,
                        så du slipper for at jonglere mellem flere systemer.
                    </p>

                    <p class="font-product-sans-bold text-[#000] text-[20px] font-bold leading-normal capitalize">
                        Dine fordele:
                    </p>

                    <ul class="space-y-2 mt-2">
                        <li class="flex items-start gap-2">
                            <img src="{{ asset('images/arrowNew.png') }}" alt="Arrow Right"
                                class="w-4 h-4 mt-1 text-[#3384FF]">
                            <span
                                class="font-product-sans-regular text-[#3384ff] text-[16px] font-normal leading-normal">Fuldt
                                overblik over indtjening, restancer, transaktioner og alle <br /> betalingstyper ét
                                sted.</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <img src="{{ asset('images/arrowNew.png') }}" alt="Arrow Right"
                                class="w-4 h-4 mt-1 text-[#3384FF]">
                            <span
                                class="font-product-sans-regular text-[#3384ff] text-[16px] font-normal leading-normal">Automatiske
                                betalingspåmindelser, så du undgår udeblivelser.</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <img src="{{ asset('images/arrowNew.png') }}" alt="Arrow Right"
                                class="w-4 h-4 mt-1 text-[#3384FF]">
                            <span
                                class="font-product-sans-regular text-[#3384ff] text-[16px] font-normal leading-normal">Elever
                                har eget betalingsoverblik og adgang til kvitteringer via deres login.</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <img src="{{ asset('images/arrowNew.png') }}" alt="Arrow Right"
                                class="w-4 h-4 mt-1 text-[#3384FF]">
                            <span
                                class="font-product-sans-regular text-[#3384ff] text-[16px] font-normal leading-normal">Kortbetaling,
                                MobilePay, PDF-fakturaer og integration til eksternt <br /> økonomisystem.</span>
                        </li>
                    </ul>
                </div>
                <!-- Right Column (Image) -->
                <div
                    class="w-full md:w-1/2 flex justify-end opacity-0 translate-y-10 transition-all duration-700 ease-out animate-on-scroll">
                    <img src="{{ asset('images/okonomi1.png') }}" alt="Administration System" class="">
                </div>
            </div>
        </section>


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