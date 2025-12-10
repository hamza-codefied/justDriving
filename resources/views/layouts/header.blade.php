<!-- Header -->
<header
    class="bg-[#1E1E1E] text-white py-3 pl-6 pr-3 flex items-center justify-between rounded-xl w-[90vw] md:w-[80vw] xl:max-w-[900px] mx-auto mt-4 shadow-md relative z-50">

    <!-- Logo -->
    <a href="{{ route('home') }}" class="flex items-center">
        <img src="{{ asset('images/logo.png') }}" alt="Just Driving Logo" class="h-7 w-auto object-contain" />
    </a>

    <!-- Hamburger button (mobile only) -->
    <input type="checkbox" id="menu-toggle" class="peer hidden">
    <label for="menu-toggle" class="lg:hidden cursor-pointer p-2 rounded-lg hover:bg-[#2A2A2A] transition">
        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
        </svg>
    </label>

    <!-- Navigation (desktop) -->
    <nav class="hidden lg:flex items-center space-x-6 text-sm">
        <a href="{{ route('home') }}"
            class="hover:text-[#3384FF] font-manrope-semibold text-[16px] transition">Forside</a>

        <!-- Dropdown (click-based) -->
        <div class="relative">
            <!-- Hidden checkbox for toggle state -->
            <input type="checkbox" id="funktioner-toggle" class="peer hidden">

            <!-- Trigger -->
            <label for="funktioner-toggle"
                class="flex items-center font-manrope-semibold space-x-1 hover:text-[#3384FF] transition focus:outline-none text-[16px] cursor-pointer relative">
                <span>Funktioner</span>
                <span class="relative inline-block w-4 h-4 mt-0.5">
                    <!-- Arrow Down (shown when closed) -->
                    <svg id="arrow-down" class="absolute inset-0 w-4 h-4 transition-opacity duration-300" fill="none"
                        stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                    <!-- Arrow Up (shown when open) -->
                    <svg id="arrow-up" class="absolute inset-0 w-4 h-4 opacity-0 transition-opacity duration-300"
                        fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 15l7-7 7 7" />
                    </svg>
                </span>
            </label>

            <!-- Full-width mega menu -->
            <div id="mega-menu" class="mega-menu absolute top-full w-[90vw] md:w-[80vw] xl:max-w-[900px] z-40
        opacity-0 translate-y-2 pointer-events-none scale-95 transition-all duration-300 ease-[cubic-bezier(0.25,1,0.5,1)]
        peer-checked:opacity-100 peer-checked:translate-y-0 peer-checked:pointer-events-auto peer-checked:scale-100">

                <!-- Menu content -->
                <div class="bg-white text-black border-t border-gray-400 rounded-xl shadow-2xl mt-[25px] ml-1">
                    <div class="grid grid-cols-2 gap-8 px-10 py-8">

                        <!-- Column 1 -->
                        <div>
                            <h3
                                class="flex items-center gap-2 text-[#3384FF] hover:text-[#3384FF] font-product-sans-bold text-[16px] transition mb-3">
                                <img src="{{ asset('images/mega1.png') }}" alt="Icon" class="w-6 h-6">
                                <a href="{{ route('administration') }}">Online administrationssystem</a>
                            </h3>
                            <ul class="space-y-2 text-[14px] pl-[34px] text-[#677489] font-product-sans-regular">
                                <li><a href="{{ route('administration') }}#holdadministration"
                                        class="block hover:text-[#3384FF] transition">Holdadministration</a></li>
                                <li><a href="{{ route('administration') }}#afdelinger"
                                        class="block hover:text-[#3384FF] transition">Afdelingsstyring</a></li>
                                <li><a href="{{ route('administration') }}#SMS-Notificationer"
                                        class="block hover:text-[#3384FF] transition">Notifikationer</a></li>
                                <li><a href="{{ route('administration') }}#synkroniseret-data"
                                        class="block hover:text-[#3384FF] transition">Datasynkronisering</a></li>

                            </ul>
                        </div>

                        <!-- Column 2 -->
                        <div>
                            <h3
                                class="flex items-center gap-2 text-[#3384FF] hover:text-[#3384FF] font-product-sans-bold text-[16px] transition mb-3">
                                <img src="{{ asset('images/mega2.png') }}" alt="Icon" class="w-6 h-6">
                                <a href="{{ route('undervisning') }}">Online undervisningsystem</a>
                            </h3>
                            <ul class="space-y-2 text-[14px] pl-[34px] text-[#677489] font-product-sans-regular">
                                <li><a href="{{ route('undervisning') }}"
                                        class="block hover:text-[#3384FF] transition">Digital teoriundervisning</a></li>
                                <li><a href="{{ route('undervisning') }}#digitale-lektionsplaner"
                                        class="block hover:text-[#3384FF] transition">Digitale lektionsplaner</a></li>
                                <li><a href="{{ route('undervisning') }}#undervisning-tilpasset"
                                        class="block hover:text-[#3384FF] transition">Eget undervisningsindhold</a></li>
                                <li><a href="{{ route('undervisning') }}#online-teoriprøver"
                                        class="block hover:text-[#3384FF] transition">Online teoriprøver</a></li>
                            </ul>
                        </div>

                        <!-- Column 3 -->
                        <div>
                            <h3
                                class="flex items-center gap-2 text-[#3384FF] hover:text-[#3384FF] font-product-sans-bold text-[16px] transition mb-2">
                                <img src="{{ asset('images/mega4.png') }}" alt="Icon" class="w-6 h-6">
                                <a href="{{ route('okonomi') }}">Online Økonomisystem</a>
                            </h3>
                            <ul class="space-y-2 text-[14px] pl-[34px] text-[#677489] font-product-sans-regular">
                                <li><a href="{{ route('okonomi') }}#betalinger"
                                        class="block hover:text-[#3384FF] transition">Betalingsflow</a></li>
                                <li><a href="{{ route('okonomi') }}#rapporter"
                                        class="block hover:text-[#3384FF] transition">Elevens betalingsoversigt</a></li>
                            </ul>
                        </div>

                        <!-- Column 4 -->
                        <div>
                            <h3
                                class="flex items-center gap-2 text-[#3384FF] hover:text-[#3384FF] font-product-sans-bold text-[16px] transition mb-2">
                                <img src="{{ asset('images/mega3.png') }}" alt="Icon" class="w-6 h-6">
                                <a href="{{ route('booking') }}">Online Bookingsystem</a>
                            </h3>
                            <ul class="space-y-2 text-[14px] pl-[34px] text-[#677489] font-product-sans-regular">
                                <li><a href="{{ route('booking') }}#overview"
                                        class="block hover:text-[#3384FF] transition">Bookings funktioner</a></li>
                                <li><a href="{{ route('booking') }}#booking-betaling"
                                        class="block hover:text-[#3384FF] transition">Booking & betaling</a></li>
                            </ul>
                        </div>


                    </div>
                </div>
            </div>
        </div>


        <a href="{{ route('omJustDriving') }}"
            class="hover:text-[#3384FF] font-manrope-semibold transition text-[16px]">Om
            Os</a>
        <a href="{{ route('priser') }}"
            class="hover:text-[#3384FF] font-manrope-semibold transition text-[16px]">Priser</a>

        <a href="{{ route('kontakt') }}"
            class="hover:text-[#3384FF] font-manrope-semibold transition text-[16px]">Kontakt</a>

    </nav>

    <!-- Contact Button (desktop only) -->
    <a href="{{ route('login') }}" style="padding: 14px 36px;" class="hidden lg:inline-block relative overflow-hidden text-white text-sm font-medium rounded-[16px]
         transition-all duration-300 bg-[#3384FF] hover:bg-[#2563EB] hover:scale-105 group shadow-md">
        <span class="relative z-10">Login</span>
        <span class="absolute inset-0 bg-gradient-to-r from-blue-400 via-blue-500 to-blue-600 
               opacity-0 group-hover:opacity-100 blur-sm transition duration-500"></span>
    </a>

    <!-- Mobile Menu -->
    <div
        class="absolute peer-checked:flex hidden flex-col bg-[#1E1E1E] w-full left-0 top-full mt-2 rounded-xl py-4 space-y-3 text-center shadow-lg md:hidden">
        <a href="#" class="hover:text-blue-400 transition">Forside</a>

        <details class="group">
            <summary class="cursor-pointer hover:text-blue-400 transition list-none">Funktioner</summary>
            <div class="mt-2 space-y-2">
                <a href="{{ route('administration') }}" class="block px-4 py-2 hover:bg-gray-800">Online administration
                    system</a>
                <a href="{{ route('undervisning') }}" class="block px-4 py-2 hover:bg-gray-800">Online undervisning
                    system</a>
                <a href="{{ route('booking') }}" class="block px-4 py-2 hover:bg-gray-800">Online booking system</a>
                <a href="{{ route('okonomi') }}" class="block px-4 py-2 hover:bg-gray-800">Online økonomisystem</a>
            </div>
        </details>

        <a href="{{ route('omJustDriving') }}" class="hover:text-blue-400 transition">Om Os</a>
        <a href="{{ route('priser') }}" class="hover:text-blue-400 transition">Priser</a>
        <a href="{{ route('kontakt') }}" class="hover:text-[#3384FF] font-semibold transition text-[16px]">Kontakt</a>

        <a href="{{ route('login') }}"
            class="bg-[#3384FF] text-white px-5 py-2 text-sm font-medium shadow-md transition rounded-lg hover:bg-[#2563EB] inline-block w-[80%] mx-auto">
            Login
        </a>
    </div>
</header>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const toggle = document.getElementById('funktioner-toggle');
        const arrowDown = document.getElementById('arrow-down');
        const arrowUp = document.getElementById('arrow-up');

        if (!toggle || !arrowDown || !arrowUp) return;

        // Function to update arrow visibility
        function updateArrows() {
            if (toggle.checked) {
                arrowDown.style.opacity = '0';
                arrowUp.style.opacity = '1';
            } else {
                arrowDown.style.opacity = '1';
                arrowUp.style.opacity = '0';
            }
        }

        // Update arrows on toggle change
        toggle.addEventListener('change', updateArrows);

        // Initial state
        updateArrows();

        // Position mega menu to align with header
        function positionMegaMenu() {
            const header = document.querySelector('header');
            const megaMenu = document.getElementById('mega-menu');
            const dropdown = megaMenu ? megaMenu.closest('.relative') : null;

            if (!header || !megaMenu || !dropdown) return;

            const headerRect = header.getBoundingClientRect();
            const dropdownRect = dropdown.getBoundingClientRect();

            // Calculate left position: header's left edge minus dropdown's left edge
            const leftOffset = headerRect.left - dropdownRect.left;

            // Set the left position
            megaMenu.style.left = leftOffset + 'px';
        }

        // Position on load and resize
        positionMegaMenu();
        window.addEventListener('resize', positionMegaMenu);

        // Also position when menu opens
        toggle.addEventListener('change', function () {
            if (this.checked) {
                setTimeout(positionMegaMenu, 10);
            }
        });
    });

    // Close mega menu when clicking outside
    document.addEventListener('click', function (event) {
        const toggle = document.getElementById('funktioner-toggle');
        if (!toggle) return;

        const dropdown = toggle.closest('.relative');
        if (!dropdown) return;

        // Check if click is outside the dropdown container
        if (!dropdown.contains(event.target)) {
            toggle.checked = false;
            // Update arrows when closing
            const arrowDown = document.getElementById('arrow-down');
            const arrowUp = document.getElementById('arrow-up');
            if (arrowDown && arrowUp) {
                arrowDown.style.opacity = '1';
                arrowUp.style.opacity = '0';
            }
        }
    });
</script>