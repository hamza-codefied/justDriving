<!-- Header -->
<header
    class="bg-[#1E1E1E] text-white py-3 pl-6 pr-3 flex items-center justify-between rounded-xl w-[90vw] md:w-[80vw] xl:w-[50vw] mx-auto mt-4 shadow-md relative z-10">
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

        <!-- Dropdown -->
        <div class="relative group">
            <button class="flex items-center space-x-1 hover:text-blue-400 transition">
                <span>Systemet</span>
                <svg class="w-4 h-4 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                </svg>
            </button>
            <div
                class="absolute hidden group-hover:block bg-white text-gray-800 mt-[1px] py-2 rounded-lg shadow-lg w-60 z-10">
                <a href="{{ route('administration') }}" class="block px-4 py-2 hover:bg-gray-100">Online administration
                    system</a>
                <a href="{{ route('undervisning') }}" class="block px-4 py-2 hover:bg-gray-100">Online undervisning
                    system</a>
                <a href="{{ route('booking') }}" class="block px-4 py-2 hover:bg-gray-100">Online booking system</a>
                <a href="{{ route('okonomi') }}" class="block px-4 py-2 hover:bg-gray-100">Online økonomisystem</a>
            </div>
        </div>

        <a href="#" class="hover:text-blue-400 transition">Om Just Driving</a>
        <a href="#" class="hover:text-blue-400 transition">Priser</a>
    </nav>

    <!-- Contact Button (desktop only) -->
    <a href="#" class="hidden md:inline-block relative overflow-hidden text-white px-5 py-2 text-sm font-medium rounded-lg
         transition-all duration-300 bg-[#3384FF] hover:bg-[#2563EB] hover:scale-105 group shadow-md">
        <span class="relative z-10">Kontakt</span>

        <!-- Glowing background animation -->
        <span class="absolute inset-0 bg-gradient-to-r from-blue-400 via-blue-500 to-blue-600 
               opacity-0 group-hover:opacity-100 blur-sm transition duration-500"></span>
    </a>


    <!-- Mobile Menu -->
    <div
        class="absolute peer-checked:flex hidden flex-col bg-[#1E1E1E] w-full left-0 top-full mt-2 rounded-xl py-4 space-y-3 text-center shadow-lg md:hidden">
        <a href="#" class="hover:text-blue-400 transition">Forside</a>

        <!-- Systemet (Dropdown simplified for mobile) -->
        <details class="group">
            <summary class="cursor-pointer hover:text-blue-400 transition list-none">Systemet</summary>
            <div class="mt-2 space-y-2">
                <a href="{{ route('administration') }}" class="block px-4 py-2 hover:bg-gray-800">Online administration
                    system</a>
                <a href="{{ route('undervisning') }}" class="block px-4 py-2 hover:bg-gray-800">Online undervisning
                    system</a>
                <a href="{{ route('booking') }}" class="block px-4 py-2 hover:bg-gray-800">Online booking system</a>
                <a href="{{ route('okonomi') }}" class="block px-4 py-2 hover:bg-gray-800">Online økonomisystem</a>
            </div>
        </details>

        <a href="#" class="hover:text-blue-400 transition">Om Just Driving</a>
        <a href="#" class="hover:text-blue-400 transition">Priser</a>

        <a href="#"
            class="bg-[#3384FF] text-white px-5 py-2 text-sm font-medium shadow-md transition rounded-lg hover:bg-[#2563EB] inline-block w-[80%] mx-auto">
            Kontakt
        </a>
    </div>
</header>