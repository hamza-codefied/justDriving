<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Just Driving</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
    <link rel="stylesheet" href="/css/styles.css">
</head>

<body class="bg-[#F9FAFB] font-sans relative">
    <div class="blocks-container" id="blocksContainer">

        <div class="content-container">
            <!-- Hero Backgrounds -->
            <div class="hero-bg-right"></div>
            <div class="hero-bg-left"></div>

            <!-- Header -->
            <header
                class="bg-[#1E1E1E] text-white py-3 pl-6 pr-3 flex items-center justify-between rounded-xl w-[90vw] md:w-[70vw] xl:w-[50vw] mx-auto mt-4 shadow-md relative z-10">
                <!-- Logo -->
                <div class="flex items-center space-x-1 text-lg font-semibold">
                    <span class="text-white">JUST</span>
                    <span class="text-[#3673EF]">DRIVING</span>
                </div>

                <!-- Hamburger button (mobile only) -->
                <input type="checkbox" id="menu-toggle" class="peer hidden">
                <label for="menu-toggle" class="md:hidden cursor-pointer p-2 rounded-lg hover:bg-[#2A2A2A] transition">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </label>

                <!-- Navigation (desktop) -->
                <nav class="hidden md:flex items-center space-x-6 text-sm">
                    <a href="#" class="hover:text-blue-400 transition">Forside</a>

                    <!-- Dropdown -->
                    <div class="relative group">
                        <button class="flex items-center space-x-1 hover:text-blue-400 transition">
                            <span>Systemet</span>
                            <svg class="w-4 h-4 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 9l-7 7-7-7" />
                            </svg>
                        </button>
                        <!-- <div
                            class="absolute hidden group-hover:block bg-white text-gray-800 mt-2 py-2 rounded-lg shadow-lg w-40 z-10">
                            <a href="#" class="block px-4 py-2 hover:bg-gray-100">Feature 1</a>
                            <a href="#" class="block px-4 py-2 hover:bg-gray-100">Feature 2</a>
                            <a href="#" class="block px-4 py-2 hover:bg-gray-100">Feature 3</a>
                        </div> -->
                    </div>

                    <a href="#" class="hover:text-blue-400 transition">Om Just Driving</a>
                    <a href="#" class="hover:text-blue-400 transition">Priser</a>
                </nav>

                <!-- Contact Button (desktop only) -->
                <a href="#"
                    class="hidden md:inline-block bg-[#3384FF] text-white px-5 py-2 text-sm font-medium shadow-md transition rounded-lg hover:bg-[#2563EB]">
                    Kontakt
                </a>

                <!-- Mobile Menu -->
                <div
                    class="absolute peer-checked:flex hidden flex-col bg-[#1E1E1E] w-full left-0 top-full mt-2 rounded-xl py-4 space-y-3 text-center shadow-lg md:hidden">
                    <a href="#" class="hover:text-blue-400 transition">Forside</a>

                    <!-- Systemet (Dropdown simplified for mobile) -->
                    <details class="group">
                        <summary class="cursor-pointer hover:text-blue-400 transition list-none">Systemet</summary>
                        <!-- <div class="mt-2 space-y-2">
                            <a href="#" class="block hover:text-blue-400 transition">Feature 1</a>
                            <a href="#" class="block hover:text-blue-400 transition">Feature 2</a>
                            <a href="#" class="block hover:text-blue-400 transition">Feature 3</a>
                        </div> -->
                    </details>

                    <a href="#" class="hover:text-blue-400 transition">Om Just Driving</a>
                    <a href="#" class="hover:text-blue-400 transition">Priser</a>

                    <a href="#"
                        class="bg-[#3384FF] text-white px-5 py-2 text-sm font-medium shadow-md transition rounded-lg hover:bg-[#2563EB] inline-block w-[80%] mx-auto">
                        Kontakt
                    </a>
                </div>
            </header>

            <!-- Hero Section -->
            <section class="w-[100vw] mx-auto mt-16 text-center relative overflow-hidden">
                <div class="testimoniol1 hidden lg:block"></div>
                <!-- Tag -->
                <div
                    class="inline-block bg-gray-50 text-gray-700 px-4 py-1 rounded-full text-sm font-medium shadow-sm mb-4 border border-gray-100 relative">
                    #1 Productivity Software
                </div>

                <!-- Title -->
                <h1 class="text-4xl sm:text-5xl md:text-7xl font-bold leading-tight text-gray-900 relative z-10">
                    Alt-i-en <span class="text-[#3384FF]">cloudplatform</span> til<br />
                    køreskoler
                </h1>

                <!-- Subtitle -->
                <p class="max-w-2xl mx-auto px-3 sm:px-0 mt-6 text-[#AFAFAF] text-lg relative z-10">
                    Gør booking, betaling, lektionsplaner og elevhåndtering nemt – alt samlet ét sted.
                    Perfekt til både enkeltmandskøreskoler og større teams med flere instruktører.
                </p>

                <div class="testimoniol2 hidden lg:block"></div>
                <div class="testimoniol3 hidden lg:block"></div>

                <!-- CTA Button -->
                <div class="mt-8 relative z-10">
                    <a href="#"
                        class="inline-flex items-center bg-[#3384FF] text-sm text-white px-6 py-3 rounded-xl font-semibold shadow-md hover:bg-[#2563EB] transition">
                        <img src="{{ asset('images/energy.png') }}" alt="Apple Logo" class="w-4 h-4 mr-2" /> Try 14 days
                        free
                    </a>
                </div>

                <!-- Rating Text -->
                <div class="flex flex-col sm:flex sm:flex-row items-center mt-5 justify-center">
                    <img src="{{ asset('images/stars.png') }}" alt="Apple Logo" class=" mr-2" />
                    <p class="text-[#AFAFAF] text-sm relative z-10">
                        1k + rating on Product Hunt
                    </p>
                </div>

                <!-- Laptop Mockup with Responsive Video -->
                <div class="laptop relative flex items-center justify-center mt-10">
                    <!-- Laptop Image -->
                    <img src="{{ asset('images/laptop.png') }}" alt="Laptop Mockup"
                        class="w-[90vw] md:w-[70vw] mx-auto object-contain select-none" />

                    <!-- Video inside laptop screen -->
                    <video id="mockupVideo" autoplay muted loop playsinline class="absolute object-cover rounded-md shadow-md cursor-pointer
               top-[5.8%] left-[21%] w-[58.5%] h-[79.5%]
               md:top-[5.5%] md:left-[26%] md:w-[48%] md:h-[80%]
               lg:top-[5%] lg:left-[26.8%] lg:w-[46.8%] lg:h-[80%]">
                        <source src="{{ asset('images/dummy.mp4') }}" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                </div>
            </section>

            <!-- Client Section -->
            <section class="w-[100vw] mx-auto mt-16 text-center relative overflow-hidden bg-[#f7f8fa] py-1 sm:py-5">
                <div class="relative py-10 bg-transparent flex flex-col items-center justify-center"
                    style="background-image: url('{{ asset('images/client-background.png') }}'); background-size: cover; background-position: center;">

                    <!-- Static Logos -->
                    <div
                        class="w-[100%] flex justify-between max-sm:justify-center items-center gap-10 md:gap-16 opacity-50 grayscale px-10">
                        <img src="{{ asset('images/client.png') }}" alt="Client"
                            class="h-10 w-[170px] object-contain" />
                        <img src="{{ asset('images/client.png') }}" alt="Client"
                            class="hidden md:block h-10 w-[170px] object-contain" />
                        <img src="{{ asset('images/client.png') }}" alt="Client"
                            class="hidden lg:block h-10 w-[170px] object-contain" />
                        <img src="{{ asset('images/client.png') }}" alt="Client"
                            class="hidden xl:block h-10 w-[170px] object-contain" />
                        <img src="{{ asset('images/client.png') }}" alt="Client"
                            class="hidden 2xl:block h-10 w-[170px] object-contain" />

                    </div>
                </div>
            </section>


            @php
                $features = [
                    [
                        'id' => 1,
                        'title' => 'Smart bookingsystem',
                        'description' => 'Læs mere om hvordan smart automatiske planlægning og booking hjælper med at spare tid.',
                        'icon' => asset('images/smart.png'),
                    ],
                    [
                        'id' => 2,
                        'title' => 'Online betalinger',
                        'description' => 'Integrering af sikre og automatiske betalinger – let og problemfrit.',
                        'icon' => asset('images/online.png'),
                    ],
                    [
                        'id' => 3,
                        'title' => 'Automatisk fakturering',
                        'description' => 'Automatiske fakturaer og hurtig opsummering af kørselsdata.',
                        'icon' => asset('images/automatisk.png'),
                    ],
                    [
                        'id' => 4,
                        'title' => 'Lektionsplaner',
                        'description' => 'Skab og del lektionsplaner med eleverne på en nem måde.',
                        'icon' => asset('images/digitale.png'),
                    ],
                    [
                        'id' => 5,
                        'title' => 'Instruktørdashboard',
                        'description' => 'Få et overblik over dine elever og deres fremskridt.',
                        'icon' => asset('images/dashboard.png'),
                    ],
                    [
                        'id' => 6,
                        'title' => 'GDPR- og cloud-sikkerhed',
                        'description' => 'Sikrer dine data med GDPR-kompatible og cloud-baseret sikkerhed.',
                        'icon' => asset('images/gdpr.png'),
                    ],
                ];
            @endphp

            <!-- Section 2 -->
            <section class="w-[100vw] mx-auto mt-24 sm:mt-16 px-6 text-center relative overflow-hidden">
                <!-- Tag -->
                <div
                    class="inline-block uppercase bg-gray-50 text-gray-700 px-4 py-1 rounded-full text-sm font-medium shadow-sm mb-4 border border-gray-100 relative">
                    Nøglefunktioner
                </div>

                <!-- Title -->
                <h1 class="text-2xl sm:text-3xl md:text-4xl font-bold leading-tight text-gray-900 relative z-10">
                    Alt, hvad du <span class="text-[#3384FF]"> behøver</span> for at drive din køreskole
                    køreskoler
                </h1>

                <!-- Subtitle -->
                <p class="max-w-5xl mx-auto mt-4 text-[#AFAFAF] text-lg relative z-10">
                    Just Driving samler alle vigtige værktøjer – booking, betaling, lektionsplaner og mere – i én smart
                    og
                    brugervenlig platform. Spar tid, minimer administrationsarbejdet og fokuser på det, der virkelig
                    betyder
                    noget: undervisningen.
                </p>

                <!-- Cards Grid -->
                <div class="max-w-4xl mx-auto grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8 mt-12">
                    @foreach ($features as $feature)
                        <div class="bg-[#F8F8F8] p-1 rounded-2xl shadow-sm transition-all hover:shadow-md">
                            <div class="bg-[#EAEFF4] py-4 flex items-center justify-center rounded-t-2xl">
                                <div class="mx-auto rounded-lg flex items-center justify-center">
                                    <img src="{{ $feature['icon'] }}" alt="Icon" class="w-20 h-20">
                                </div>
                            </div>
                            <div class="flex flex-col my-3 pl-5 gap-1 items-start">
                                <h3 class="text-lg font-semibold text-gray-900">{{ $feature['title'] }}</h3>
                                <p class="text-[#AFAFAF] text-start w-[90%] text-sm">{{ $feature['description'] }}</p>
                                <div class="flex items-center justify-center cursor-pointer gap-2">
                                    <p class="inline-block text-[#3384FF] text-sm font-normal hover:underline">
                                        Læs mere
                                    </p>
                                    <img src="{{ asset('images/arrow-right.png') }}" alt="Arrow" class="inline-block mt-1">
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </section>

            <!-- Section 3 -->
            <section class="w-[100vw] mx-auto mt-24 sm:mt-16 text-center relative overflow-hidden">
                <!-- Tag -->
                <div
                    class="inline-block uppercase bg-gray-50 text-gray-700 px-4 py-1 rounded-full text-sm font-medium shadow-sm mb-4 border border-gray-100 relative">
                    Vores arbejdsproces
                </div>

                <!-- Title -->
                <h1 class="text-2xl sm:text-3xl md:text-4xl font-bold leading-tight text-gray-900 relative z-10">
                    Administrér din <span class="text-[#3384FF]"> køreskole</span> i 3 enkle trin
                </h1>

                <!-- Subtitle -->
                <p class="w-[90vw] md:w-[40vw] max-w-xl mx-auto mt-4 text-[#AFAFAF] text-lg relative z-10">
                    Fra elevbooking til betalinger og lektionssporing – alt er strømlinet og automatiseret.
                </p>

                <!-- 3 Steps Container -->
                <div class="mt-12 space-y-16 w-[90vw] md:w-[70vw] mx-auto">
                    <!-- Step 1 -->
                    <div class="flex flex-col md:flex-row items-center justify-between gap-5">
                        <!-- Image -->
                        <div class="w-full md:w-1/2 flex">
                            <img src="{{ asset('images/screen1.png') }}" alt="Step 1"
                                class="w-[90%] max-w-md rounded-xl shadow-md object-cover" />
                        </div>
                        <!-- Text -->
                        <div class="w-full md:w-1/2 text-left md:text-left">
                            <div class="inline-block bg-white px-3 py-1 rounded-full text-sm font-semibold mb-3">
                                Trin 1</div>
                            <h2 class="text-2xl font-bold mb-3 text-gray-900">Opret din køreskoleprofil</h2>
                            <p class="text-[#AFAFAF] mb-5 pr-0 md:pr-[40px]">
                                Tilføj alle dine oplysninger, instruktører og køretøjer for at komme i gang. Alt bliver
                                samlet ét sted.
                            </p>
                            <button
                                class="bg-[#3384FF] text-white px-6 py-2 rounded-lg font-normal hover:bg-[#2563eb] transition-all duration-300 shadow-2xl shadow-[#3384FF] text-xs">
                                Tag det første skridt
                            </button>
                        </div>
                    </div>

                    <!-- Step 2 (reversed) -->
                    <div class="flex flex-col md:flex-row-reverse items-center justify-between gap-5">
                        <!-- Image -->
                        <div class="w-full md:w-1/2 flex">
                            <img src="{{ asset('images/screen2.png') }}" alt="Step 2"
                                class="w-[90%] max-w-md rounded-xl shadow-md object-cover" />
                        </div>
                        <!-- Text -->
                        <div class="w-full md:w-1/2 text-left md:text-left">
                            <div class="inline-block bg-white px-3 py-1 rounded-full text-sm font-semibold mb-3">
                                Trin 2</div>
                            <h2 class="text-2xl font-bold mb-3 text-gray-900">Administrér elever og bookinger</h2>
                            <p class="text-[#AFAFAF] mb-5 pr-0 md:pr-[40px]">
                                Se dine elevers fremskridt, planlæg lektioner, og hold styr på betalinger – helt
                                automatisk.
                            </p>
                            <button
                                class="bg-[#3384FF] text-white px-6 py-2 rounded-lg font-normal hover:bg-[#2563eb] transition-all duration-300 shadow-2xl shadow-[#3384FF] text-xs">
                                Tag det første skridt
                            </button>
                        </div>
                    </div>

                    <!-- Step 3 -->
                    <div class="flex flex-col md:flex-row items-center justify-between gap-5">
                        <!-- Image -->
                        <div class="w-full md:w-1/2 flex">
                            <img src="{{ asset('images/screen3.png') }}" alt="Step 3"
                                class="w-[90%] max-w-md rounded-xl shadow-md object-cover" />
                        </div>
                        <!-- Text -->
                        <div class="w-full md:w-1/2 text-left md:text-left">
                            <div class="inline-block bg-white px-3 py-1 rounded-full text-sm font-semibold mb-3">
                                Trin 3</div>
                            <h2 class="text-2xl font-bold mb-3 text-gray-900">Følg resultater og vækst</h2>
                            <p class="text-[#AFAFAF] mb-5 pr-0 md:pr-[40px]">
                                Få indsigt i din køreskoles præstationer, elevtilfredshed og økonomi – alt på ét
                                dashboard.
                            </p>
                            <button
                                class="bg-[#3384FF] text-white px-6 py-2 rounded-lg font-normal hover:bg-[#2563eb] transition-all duration-300 shadow-2xl shadow-[#3384FF] text-xs">
                                Tag det første skridt
                            </button>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Section 4 -->
            <section class="w-[100vw] mx-auto mt-24 sm:mt-16 text-center relative overflow-hidden">
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
                        <img src="{{ asset('images/review1.png') }}" alt="Client 1"
                            class="h-16 sm:h-32 object-contain" />
                        <img src="{{ asset('images/review2.png') }}" alt="Client 2"
                            class="h-16 sm:h-32 object-contain" />
                        <img src="{{ asset('images/review3.png') }}" alt="Client 3"
                            class="h-16 sm:h-32 object-contain" />
                        <!-- duplicate for loop -->
                        <img src="{{ asset('images/review1.png') }}" alt="Client 1"
                            class="h-16 sm:h-32 object-contain" />
                        <img src="{{ asset('images/review2.png') }}" alt="Client 2"
                            class="h-16 sm:h-32 object-contain" />
                        <img src="{{ asset('images/review3.png') }}" alt="Client 3"
                            class="h-16 sm:h-32 object-contain" />
                        <!-- duplicate for loop -->
                        <img src="{{ asset('images/review1.png') }}" alt="Client 1"
                            class="h-16 sm:h-32 object-contain" />
                        <img src="{{ asset('images/review2.png') }}" alt="Client 2"
                            class="h-16 sm:h-32 object-contain" />
                        <img src="{{ asset('images/review3.png') }}" alt="Client 3"
                            class="h-16 sm:h-32 object-contain" />
                    </div>

                    <!-- Row 2 (right to left) -->
                    <div class="flex animate-scroll-right space-x-8 w-max mt-8">
                        <img src="{{ asset('images/review1.png') }}" alt="Client 1"
                            class="h-16 sm:h-32 object-contain" />
                        <img src="{{ asset('images/review2.png') }}" alt="Client 2"
                            class="h-16 sm:h-32 object-contain" />
                        <img src="{{ asset('images/review3.png') }}" alt="Client 3"
                            class="h-16 sm:h-32 object-contain" />
                        <!-- duplicate for loop -->
                        <img src="{{ asset('images/review1.png') }}" alt="Client 1"
                            class="h-16 sm:h-32 object-contain" />
                        <img src="{{ asset('images/review2.png') }}" alt="Client 2"
                            class="h-16 sm:h-32 object-contain" />
                        <img src="{{ asset('images/review3.png') }}" alt="Client 3"
                            class="h-16 sm:h-32 object-contain" />
                        <!-- duplicate for loop -->
                        <img src="{{ asset('images/review1.png') }}" alt="Client 1"
                            class="h-16 sm:h-32 object-contain" />
                        <img src="{{ asset('images/review2.png') }}" alt="Client 2"
                            class="h-16 sm:h-32 object-contain" />
                        <img src="{{ asset('images/review3.png') }}" alt="Client 3"
                            class="h-16 sm:h-32 object-contain" />
                    </div>
                </div>
            </section>

            <!-- Section 5 -->
            <section class="w-[100vw] mx-auto mt-24 sm:mt-16 text-center relative overflow-hidden">
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
                <div class="w-[90vw] md:w-[50vw] mx-auto mt-10 text-left">
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
                                <span class="text-md font-semibold text-gray-900">{{ $faq['question'] }}</span>
                                <div class="w-6 h-6">
                                    <img src="{{ asset('images/add.png') }}" alt="Plus"
                                        class="w-full h-full object-contain">
                                </div>
                            </button>

                            <div
                                class="faq-answer px-4 py-3 rounded-xl bg-white hidden overflow-hidden transition-all duration-500 ease-in-out mt-2 text-[#777777]">
                                <p class="text-base leading-relaxed">{{ $faq['answer'] }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </section>

            <!-- Section 6 -->
            <section
                class="w-[95vw] sm:w-[100vw] max-w-5xl py-6 px-5 sm:px-0 rounded-2xl outline outline-[#ffffff] outline-offset-2 bg-[#eaeff4] mx-auto mt-24 sm:mt-16 text-center relative overflow-hidden">
                <!-- Tag -->
                <div
                    class="inline-block capitalize bg-gray-50 text-gray-700 px-4 py-1 rounded-full text-sm font-medium shadow-sm mb-4 border border-gray-100 relative">
                    Take the First Step Toward Efficiency
                </div>

                <!-- Title -->
                <h1 class="text-2xl sm:text-3xl  font-bold leading-tight text-gray-900 relative">
                    Enkel og gennemsigtig pris, der vokser med dig
                </h1>

                <!-- Subtitle -->
                <p class="w-[90vw] md:w-[40vw] max-w-xl mx-auto mt-4 text-gray-700 text-md relative">
                    Betal kun 149 DKK pr. aktiv elev om måneden. Ingen skjulte gebyrer, ingen opstartsgebyrer –
                    nogensinde.
                </p>

                <!-- button -->
                <div class="mt-5 relative z-10">
                    <a href="#"
                        class="inline-flex items-center bg-[#3384FF] text-sm text-white px-6 py-3 rounded-xl font-semibold shadow-md hover:bg-[#2563EB] transition">
                        <img src="{{ asset('images/energy.png') }}" alt="Apple Logo" class="w-4 h-4 mr-2" /> Se alle
                        priser →
                    </a>
                </div>

            </section>

            <!-- Footer -->
            <footer
                class="bg-white mt-16 text-gray-700 py-10 px-6 md:px-12 rounded-2xl shadow-sm w-[100vw] max-w-6xl mx-auto">
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-8">

                    <!-- Logo and Description -->
                    <div class="flex flex-col justify-between ">
                        <div class="space-x-1 text-lg font-semibold mb-3">
                            <span class="text-black">JUST</span>
                            <span class="text-[#3673EF]">DRIVING</span>
                            <p class="text-sm text-[#777777] mt-2 mb-4">
                                Du får et bedre overblik, mindre spildtid og større omsætning med Just-drivings
                                komplette
                                online administrationssystem.
                            </p>
                        </div>

                        <div class="flex space-x-4">
                            <img src="{{ asset('images/linkedIn.png') }}" alt="Apple Logo" class="w-4 h-4 mr-2" />
                            <img src="{{ asset('images/messenger.png') }}" alt="Apple Logo" class="w-4 h-4 mr-2" />
                            <img src="{{ asset('images/twitter.png') }}" alt="Apple Logo" class="w-4 h-4 mr-2" />
                            <img src="{{ asset('images/meta.png') }}" alt="Apple Logo" class="w-4 h-4 mr-2" />
                        </div>
                    </div>

                    <!-- Virksomheden -->
                    <div>
                        <h3 class="font-semibold mb-3">Virksomheden</h3>
                        <ul class="space-y-2 text-sm">
                            <li><a href="#" class="hover:text-[#3673EF] transition">Privatlivs- og Cookie politik</a>
                            </li>
                            <li><a href="#" class="hover:text-[#3673EF] transition">Handelsbetingelser</a></li>
                            <li><a href="#" class="hover:text-[#3673EF] transition">Om os</a></li>
                            <li><a href="#" class="hover:text-[#3673EF] transition">Priser</a></li>
                            <li><a href="#" class="hover:text-[#3673EF] transition">Karriere</a></li>
                            <li><a href="#" class="hover:text-[#3673EF] transition">Kontakt</a></li>
                        </ul>
                    </div>

                    <!-- Login -->
                    <div>
                        <h3 class="font-semibold mb-3">Login</h3>
                        <ul class="space-y-2 text-sm">
                            <li><a href="#" class="hover:text-[#3673EF] transition">Køreskole</a></li>
                            <li><a href="#" class="hover:text-[#3673EF] transition">Kørelærer</a></li>
                            <li><a href="#" class="hover:text-[#3673EF] transition">Elev</a></li>
                        </ul>
                    </div>

                    <!-- Newsletter -->
                    <div>
                        <h3 class="font-semibold mb-3">Nyhedsbrev</h3>
                        <form class="flex items-center mb-2">
                            <input type="email" placeholder="Your email address"
                                class="w-full px-3 py-2 border border-gray-300 rounded-l-md focus:outline-none focus:ring-2 focus:ring-blue-400 text-sm">
                            <button type="submit"
                                class="bg-[#3673EF] hover:bg-[#2563EB] text-white px-4 py-2 rounded-r-md text-sm transition">
                                Subscribe
                            </button>
                        </form>
                        <p class="text-xs text-gray-500">Tilmeld dig og få nyheder og tilbud til din email. <br> Skriv
                            din email *</p>
                    </div>
                </div>

                <!-- Bottom line -->
                <div class="border-t border-gray-200 mt-10 pt-4 text-center text-xs text-gray-900">
                    © <span id="year"></span> - Udviklet af Just Driving A/S.
                </div>
            </footer>


            <!-- Section 7 -->
            <section
                class="hidden sm:block w-[100vw] h-[250px] bg-[#f6f7f9] mx-auto mt-0 text-center relative overflow-hidden">
            </section>

        </div>
    </div>
    <script type="text/javascript" src="/js/script.js"></script>
</body>

</html>