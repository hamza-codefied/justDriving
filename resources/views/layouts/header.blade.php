<!-- Header -->
<header
    class="bg-[#1E1E1E] text-white py-3 pl-6 pr-3 flex items-center justify-between rounded-xl w-[90vw] md:w-[80vw] xl:w-[50vw] mx-auto mt-4 shadow-md relative z-50">

    <!-- Logo -->
    <div href="{{ route('home') }}" class="flex items-center">
        <img src="{{ asset('images/logo.png') }}" alt="Just Driving Logo" class="h-7 w-auto object-contain" />
    </div>

    <!-- Hamburger button (mobile only) -->
    <input type="checkbox" id="menu-toggle" class="peer hidden">
    <label for="menu-toggle" class="md:hidden cursor-pointer p-2 rounded-lg hover:bg-[#2A2A2A] transition">
        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
        </svg>
    </label>

    <!-- Navigation (desktop) -->
    <nav class="hidden md:flex items-center space-x-6 text-sm">
        <a href="{{ route('home') }}" class="hover:text-blue-400 transition">Forside</a>

        <!-- Dropdown (now click-based) -->
        <!-- Dropdown (hover-based and flicker-free with faster animation) -->
        <div class="relative group">
            <!-- Trigger -->
            <button class="flex items-center space-x-1 hover:text-blue-400 transition focus:outline-none">
                <span>Funktioner</span>
                <svg class="w-4 h-4 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                </svg>
            </button>

            <!-- Full-width mega menu -->
            <div class="absolute left-1/2 top-full w-[50vw] -translate-x-1/2 mt-2 bg-white text-black border-t border-gray-400 rounded-b-2xl shadow-2xl z-40
        opacity-0 translate-y-2 pointer-events-none scale-95 transition-all duration-300 ease-[cubic-bezier(0.25,1,0.5,1)]
        group-hover:opacity-100 group-hover:translate-y-0 group-hover:pointer-events-auto group-hover:scale-100
        hover:opacity-100 hover:translate-y-0 hover:pointer-events-auto hover:scale-100">

                <div class="grid grid-cols-2 gap-8 px-10 py-8">

                    <!-- Column 1 -->
                    <div>
                        <h3 class="font-bold text-[#248ec1] mb-3 border-b pb-1">
                            <a href="{{ route('administration') }}">Online administrationssystem</a>
                        </h3>
                        <ul class="space-y-2 text-sm">
                            <li><a href="{{ route('administration') }}#holdadministration"
                                    class="block hover:text-[#4eb1df] transition">Holdadministration</a></li>
                            <li><a href="{{ route('administration') }}#afdelinger"
                                    class="block hover:text-[#4eb1df] transition">Afdelinger</a></li>
                            <li><a href="{{ route('administration') }}#Gå-aldrig"
                                    class="block hover:text-[#4eb1df] transition">Gå Aldrig</a></li>
                            <li><a href="{{ route('administration') }}#SMS-Notificationer"
                                    class="block hover:text-[#4eb1df] transition">SMS Notifikationer</a></li>
                        </ul>
                    </div>

                    <!-- Column 2 -->
                    <div>
                        <h3 class="font-bold text-[#248ec1] mb-3 border-b pb-1">
                            <a href="{{ route('undervisning') }}">Online undervisningsystem</a>
                        </h3>
                        <ul class="space-y-2 text-sm">
                            <li><a href="{{ route('undervisning') }}#digitale-lektionsplaner"
                                    class="block hover:text-[#4eb1df] transition">Digitale Lektionsplaner</a></li>
                            <li><a href="{{ route('undervisning') }}#undervisning-tilpasset"
                                    class="block hover:text-[#4eb1df] transition">Digital Undervisning</a></li>
                            <li><a href="{{ route('undervisning') }}#online-teoriprøver"
                                    class="block hover:text-[#4eb1df] transition">Online teoriprøver</a></li>
                        </ul>
                    </div>

                    <!-- Column 3 -->
                    <div>
                        <h3 class="font-bold text-[#248ec1] mb-3 border-b pb-1">
                            <a href="{{ route('booking') }}">Online Bookingsystem</a>
                        </h3>
                        <ul class="space-y-2 text-sm">
                            <li><a href="{{ route('booking') }}#overview"
                                    class="block hover:text-[#4eb1df] transition">Booking Oversigt</a></li>
                        </ul>
                    </div>

                    <!-- Column 4 -->
                    <div>
                        <h3 class="font-bold text-[#248ec1] mb-3 border-b pb-1">
                            <a href="{{ route('okonomi') }}">Online Økonomisystem</a>
                        </h3>
                        <ul class="space-y-2 text-sm">
                            <li><a href="{{ route('okonomi') }}#betalinger"
                                    class="block hover:text-[#4eb1df] transition">Automatiske betalinger</a></li>
                            <li><a href="{{ route('okonomi') }}#rapporter"
                                    class="block hover:text-[#4eb1df] transition">Rapporter</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>


        <a href="{{ route('omJustDriving') }}" class="hover:text-blue-400 transition">Om Os</a>
        <a href="{{ route('priser') }}" class="hover:text-blue-400 transition">Priser</a>
    </nav>

    <!-- Contact Button (desktop only) -->
    <a href="{{ route('kontakt') }}" class="hidden md:inline-block relative overflow-hidden text-white px-5 py-2 text-sm font-medium rounded-lg
         transition-all duration-300 bg-[#3384FF] hover:bg-[#2563EB] hover:scale-105 group shadow-md">
        <span class="relative z-10">Kontakt</span>
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

        <a href="{{ route('kontakt') }}"
            class="bg-[#3384FF] text-white px-5 py-2 text-sm font-medium shadow-md transition rounded-lg hover:bg-[#2563EB] inline-block w-[80%] mx-auto">
            Kontakt
        </a>
    </div>
</header>