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
        <section class="w-full mx-auto mt-[140px] text-center relative overflow-hidden">
            <!-- Title -->
            <h4 style="color: #181B32; text-align: center; line-height: normal; letter-spacing: -2px; text-transform: capitalize;"
                class="relative z-10 mb-3 font-product-sans-bold text-[59px]">
                Kontakt <span class="text-[#3384FF]">Os</span>
            </h4>

            <!-- Subtitle -->
            <p
                class="w-full sm:max-w-5xl mx-auto px-3 sm:px-0 mt-4 text-[#858599] font-manrope-bold text-[24px] relative z-10">
                Just Driving er den perfekte kombination af erfarne it-folk, med fokus på at skabe systemer, der er
                nemme at bruge og giver overblik – og erfarne kørelærere og køreskoler, som har skubbet på for at få et
                system, der kan det hele.
            </p>
        </section>

        <!-- Contact Section -->
        <section
            class="relative w-full bg-[#f6f7fa] py-16 px-4 md:px-12 lg:px-20 overflow-hidden animate-on-scroll opacity-0 translate-y-10 transition-all duration-700">
            <div class="max-w-4xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-10 items-center">
                <!-- Left Column -->
                <div class="text-center md:text-left space-y-3">
                    <img src="/images/kontakt.png" alt="Contact Image" class="w-auto max-w-xs mx-auto md:mx-0">
                    <h2 class="text-2xl sm:text-3xl lg:text-4xl font-bold text-gray-900">
                        Kontakt os!
                    </h2>
                    <p class="text-[#858599] text-sm sm:text-base leading-relaxed max-w-md mx-auto md:mx-0">
                        We are waiting for your messageVi <br /> venter på din besked
                    </p>
                    <div class="space-y-2">
                        <div class="flex items-start space-x-4">
                            <img src="/images/address.png" alt="Contact Image" class="w-auto">
                            <div class="flex flex-col ">
                                <span class="text-black font-semibold text-sm sm:text-base leading-relaxed">
                                    Address
                                </span>
                                <span class="text-[#858599] text-sm leading-relaxed">
                                    Trykkeriet, Kvarmløsevej 36,<br />
                                    4340 Tølløse
                                </span>
                            </div>
                        </div>
                        <div class="flex items-start space-x-4">
                            <img src="/images/telefon.png" alt="Contact Image" class="w-auto">
                            <div class="flex flex-col ">
                                <span class="text-black font-semibold text-sm sm:text-base leading-relaxed">
                                    Telefon
                                </span>
                                <span class="text-[#858599] text-sm leading-relaxed">
                                    +152534-468-854
                                </span>
                            </div>
                        </div>
                        <div class="flex items-start space-x-4">
                            <img src="/images/email.png" alt="Contact Image" class="w-auto">
                            <div class="flex flex-col ">
                                <span class="text-black font-semibold text-sm sm:text-base leading-relaxed">
                                    Email
                                </span>
                                <span class="text-[#858599] text-sm leading-relaxed">
                                    support@just-driving.dk
                                </span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Right Column (Form) -->
                <form
                    class="bg-white rounded-2xl shadow-md p-6 space-y-4 w-full max-w-lg mx-auto md:mx-0 animate-on-scroll opacity-0 translate-y-10 transition-all duration-700">

                    <!-- Name -->
                    <div>
                        <input type="text" id="name" name="name"
                            class="w-full border border-gray-300 rounded-lg p-2.5 text-sm focus:ring-2 focus:ring-[#3384FF] focus:outline-none"
                            placeholder="Navn" required>
                    </div>

                    <!-- Telephone -->
                    <div>
                        <input type="tel" id="phone" name="phone"
                            class="w-full border border-gray-300 rounded-lg p-2.5 text-sm focus:ring-2 focus:ring-[#3384FF] focus:outline-none"
                            placeholder="Telefon" required>
                    </div>

                    <!-- Email -->
                    <div>
                        <input type="email" id="email" name="email"
                            class="w-full border border-gray-300 rounded-lg p-2.5 text-sm focus:ring-2 focus:ring-[#3384FF] focus:outline-none"
                            placeholder="Email" required>
                    </div>

                    <!-- Budget -->
                    <div>
                        <input type="budget" id="budget" name="budget"
                            class="w-full border border-gray-300 rounded-lg p-2.5 text-sm focus:ring-2 focus:ring-[#3384FF] focus:outline-none"
                            placeholder="Budget" required>
                    </div>

                    <!-- Description -->
                    <div>
                        <textarea id="message" name="message" rows="3"
                            class="w-full border border-gray-300 rounded-lg p-2.5 text-sm focus:ring-2 focus:ring-[#3384FF] focus:outline-none"
                            placeholder="Besked"></textarea>
                    </div>

                    <!-- Submit Button -->
                    <div class="w-full text-center md:text-left">
                        <button type="submit"
                            class="bg-[#3384FF] w-full text-white font-medium py-2.5 px-8 rounded-lg shadow hover:bg-[#1f6ce5] transition-all duration-300">
                            Send Nu
                        </button>
                    </div>
                </form>
            </div>
        </section>


        @include('layouts.footer')


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