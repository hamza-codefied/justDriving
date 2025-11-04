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
                Fleksible <span class="text-[#3384FF]">priser</span> tilpasset din køreskole
            </h1>

            <!-- Subtitle -->
            <p class="w-full sm:max-w-5xl mx-auto px-3 sm:px-0 mt-4 text-[#858599] text-sm sm:text-xl relative z-10">
                Vælg den løsning, der passer bedst til din størrelse og dine behov.
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

        <!-- Pricing Section -->
        <section id="pricing" class="w-full mt-20 py-5 px-4 sm:px-8 md:px-16 lg:px-24 relative overflow-hidden">
            <!-- Heading -->
            <div
                class="text-center w-fit mx-auto capitalize bg-gray-50 text-gray-700 px-4 py-1 rounded-full text-sm font-medium shadow-sm mb-10 border border-gray-100 relative">
                Vælg den plan, der passer til dig
            </div>

            <!-- Pricing Cards -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 max-w-6xl mx-auto">
                <!-- Pricing Plan - Basic -->
                <div
                    class="pricing-card bg-[#f7fafc] shadow-lg rounded-2xl border border-gray-200 p-6 flex flex-col items-start text-start transition-all duration-700 ease-out opacity-0 translate-y-10 hover:scale-[1.03] hover:shadow-xl hover:border-[#3384FF]/40 cursor-pointer">
                    <h3 class="text-lg font-semibold text-gray-800 mb-2">Basic</h3>
                    <p class="text-4xl font-bold text-gray-900">299<span class="text-base text-black"> /mdr</span>
                    </p>
                    <button
                        class="mt-5 bg-[#e8f0f2] text-black hover:bg-[#3384FF] hover:text-white transition-all duration-300 px-6 py-2 rounded-xl font-semibold w-full">
                        Vælg plan
                    </button>

                    <ul class="mt-6 space-y-2 text-gray-600 text-sm sm:text-base">
                        <li class="flex items-center justify-start gap-2"><img
                                src="{{ asset('images/simplicitet.png') }}" class="w-5 h-5" alt="Checkmark"><span>Online
                                administrationssystem</span> </li>
                        <li class="flex items-center justify-start gap-2"><img
                                src="{{ asset('images/simplicitet.png') }}" class="w-5 h-5" alt="Checkmark"><span>Online
                                undervisningssystem</span> </li>
                        <li class="flex items-center justify-start gap-2"><img
                                src="{{ asset('images/simplicitet.png') }}" class="w-5 h-5" alt="Checkmark"><span>Online
                                bookingsystem</span> </li>
                        <li class="flex items-center justify-start gap-2"><img
                                src="{{ asset('images/simplicitet.png') }}" class="w-5 h-5" alt="Checkmark"><span>Online
                                okonomisystem</span> </li>
                    </ul>
                </div>

                <!-- Pricing Plan - Standard -->
                <div
                    class="pricing-card bg-[#f7fafc] shadow-lg rounded-2xl border border-gray-200 p-6 flex flex-col items-start text-start transition-all duration-700 ease-out opacity-0 translate-y-10 hover:scale-[1.03] hover:shadow-xl hover:border-[#3384FF]/40 cursor-pointer">
                    <div class="w-full flex items-center justify-between">
                        <h3 class="text-lg font-semibold text-gray-800 mb-2">Standard</h3>
                        <h3 class="text-sm rounded-2xl font-semibold bg-[#3384FF] text-white mb-2 px-4 py-1">Mest
                            Popular</h3>
                    </div>
                    <p class="text-4xl font-bold text-gray-900">499<span class="text-base text-black"> /mdr</span>
                    </p>
                    <button
                        class="mt-5 bg-[#e8f0f2] text-black hover:bg-[#3384FF] hover:text-white transition-all duration-300 px-6 py-2 rounded-xl font-semibold w-full">
                        Vælg plan
                    </button>

                    <ul class="mt-6 space-y-2 text-gray-600 text-sm sm:text-base">
                        <li class="flex items-center justify-start gap-2"><img
                                src="{{ asset('images/simplicitet.png') }}" class="w-5 h-5" alt="Checkmark"><span>Online
                                administrationssystem</span> </li>
                        <li class="flex items-center justify-start gap-2"><img
                                src="{{ asset('images/simplicitet.png') }}" class="w-5 h-5" alt="Checkmark"><span>Online
                                undervisningssystem</span> </li>
                        <li class="flex items-center justify-start gap-2"><img
                                src="{{ asset('images/simplicitet.png') }}" class="w-5 h-5" alt="Checkmark"><span>Online
                                bookingsystem</span> </li>
                        <li class="flex items-center justify-start gap-2"><img
                                src="{{ asset('images/simplicitet.png') }}" class="w-5 h-5" alt="Checkmark"><span>Online
                                okonomisystem</span> </li>
                    </ul>
                </div>

                <!-- Pricing Plan - Premium -->
                <div
                    class="pricing-card bg-[#f7fafc] shadow-lg rounded-2xl border border-gray-200 p-6 flex flex-col items-start text-start transition-all duration-700 ease-out opacity-0 translate-y-10 hover:scale-[1.03] hover:shadow-xl hover:border-[#3384FF]/40 cursor-pointer">
                    <h3 class="text-lg font-semibold text-gray-800 mb-2">Premium</h3>
                    <p class="text-4xl font-bold text-gray-900">799<span class="text-base text-black"> /mdr</span>
                    </p>
                    <button
                        class="mt-5 bg-[#e8f0f2] text-black hover:bg-[#3384FF] hover:text-white transition-all duration-300 px-6 py-2 rounded-xl font-semibold w-full">
                        Vælg plan
                    </button>

                    <ul class="mt-6 space-y-2 text-gray-600 text-sm sm:text-base">
                        <li class="flex items-center justify-start gap-2"><img
                                src="{{ asset('images/simplicitet.png') }}" class="w-5 h-5" alt="Checkmark"><span>Online
                                administrationssystem</span> </li>
                        <li class="flex items-center justify-start gap-2"><img
                                src="{{ asset('images/simplicitet.png') }}" class="w-5 h-5" alt="Checkmark"><span>Online
                                undervisningssystem</span> </li>
                        <li class="flex items-center justify-start gap-2"><img
                                src="{{ asset('images/simplicitet.png') }}" class="w-5 h-5" alt="Checkmark"><span>Online
                                bookingsystem</span> </li>
                        <li class="flex items-center justify-start gap-2"><img
                                src="{{ asset('images/simplicitet.png') }}" class="w-5 h-5" alt="Checkmark"><span>Online
                                okonomisystem</span> </li>
                    </ul>
                </div>
            </div>
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

        <!-- faq -->
        <section class="w-full mx-auto mt-24 sm:mt-16 text-center relative overflow-hidden">
            <!-- Tag -->
            <div
                class="inline-block uppercase bg-gray-50 text-gray-700 px-4 py-1 rounded-full text-sm font-medium shadow-sm mb-4 border border-gray-100 relative">
                Spørgsmål? Vi har svarene
            </div>

            <!-- Title -->
            <h1 class="text-2xl sm:text-3xl md:text-4xl font-bold leading-tight text-gray-900 relative">
                Ofte stillede <span class="text-[#3384FF]">spørgsmål</span>
            </h1>

            <!-- Subtitle -->
            <p class="w-[90vw] md:w-[40vw] max-w-xl mx-auto mt-4 text-[#AFAFAF] text-lg relative">
                Find hurtige svar på nogle af de mest almindelige spørgsmål om Increasy.
            </p>

            <!-- FAQ Section -->
            <div class="w-[90vw] md:w-[60vw] mx-auto mt-10 text-left">
                @php
                    $faqs = [
                        ['question' => 'Hvordan fungerer Increasy?', 'answer' => 'Increasy hjælper skoler med at automatisere planlægning, booking og betalinger på en nem og effektiv måde.'],
                        ['question' => 'Er der en gratis prøveperiode?', 'answer' => 'Ja, vi tilbyder en gratis prøveperiode, så du kan prøve systemet, før du forpligter dig.'],
                        ['question' => 'Hvordan kan jeg opsige mit abonnement?', 'answer' => 'Du kan til enhver tid opsige dit abonnement fra dit kontrolpanel under indstillinger.'],
                        ['question' => 'Tilbyder I kundesupport?', 'answer' => 'Ja, vores supportteam er tilgængeligt via e-mail og chat for at hjælpe dig med alt, du måtte have brug for.'],
                        ['question' => 'Er mine data sikre hos jer?', 'answer' => 'Ja, vi bruger moderne kryptering og sikkerhedsforanstaltninger for at beskytte alle dine data.'],
                    ];
                 @endphp

                @foreach ($faqs as $index => $faq)
                    <div class="bg-transparent p-2">
                        <button id="faq-{{ $index }}"
                            class="bg-white/70 shadow-sm faq-question rounded-xl px-4 py-3 flex justify-between items-center w-full text-left focus:outline-none"
                            data-index="{{ $index }}">
                            <span class="text-xs sm:text-md font-semibold text-gray-900">{{ $faq['question'] }}</span>
                            <div
                                class="icon w-6 h-6 flex items-center p-1 justify-center bg-[#3384FF] rounded-full text-white transition-all duration-300">
                                <i class="" data-lucide="plus"></i>
                            </div>
                        </button>

                        <div
                            class="faq-answer max-h-0 opacity-0 px-4 py-0 rounded-xl bg-white overflow-hidden transition-all duration-500 ease-in-out mt-2 text-[#777777]">
                            <p class="text-xs sm:text-md leading-relaxed py-2">{{ $faq['answer'] }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </section>

        <!-- efficiency -->
        <section
            class="w-[90vw] py-6 px-5 sm:px-0 rounded-2xl outline outline-[#ffffff] outline-offset-2 bg-[#eaeff4] mx-auto mt-24 sm:mt-16 text-center">
            <div
                class="inline-block capitalize bg-gray-50 text-gray-700 px-4 py-1 rounded-full text-sm font-medium shadow-sm mb-4 border border-gray-100 relative">
                Take the First Step Toward Efficiency
            </div>

            <h1 class="text-2xl sm:text-3xl  font-bold leading-tight text-gray-900 relative">
                Enkel og gennemsigtig pris, der vokser med dig
            </h1>

            <p class="w-[90vw] md:w-[40vw] max-w-xl mx-auto mt-4 text-gray-700 text-md relative">
                Betal kun 149 DKK pr. aktiv elev om måneden. Ingen skjulte gebyrer, ingen opstartsgebyrer –
                nogensinde.
            </p>

            <div class="mt-5 relative z-10">
                <a href="#"
                    class="inline-flex items-center bg-[#3384FF] text-sm text-white px-6 py-3 rounded-xl font-semibold shadow-md hover:bg-[#2563EB] transition">
                    <img src="{{ asset('images/energy.png') }}" alt="Apple Logo" class="w-4 h-4 mr-2" /> Se alle
                    priser →
                </a>
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
            const cards = document.querySelectorAll(".pricing-card");

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

            const observer2 = new IntersectionObserver((entries) => {
                entries.forEach((entry, index) => {
                    if (entry.isIntersecting) {
                        setTimeout(() => {
                            entry.target.classList.remove("opacity-0", "translate-y-10");
                            entry.target.classList.add("opacity-100", "translate-y-0");
                        }, index * 150); // stagger animation
                        observer2.unobserve(entry.target);
                    }
                });
            }, { threshold: 0.2 });

            cards.forEach(card => observer2.observe(card));
        });
    </script>






</body>

</html>