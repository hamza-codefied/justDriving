<!-- Footer -->
<footer class="bg-white mt-16 text-gray-700 py-10 px-6 md:px-12 rounded-2xl shadow-sm w-[95vw] overflow-hidden mx-auto">
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-8">
        <div class="flex flex-col justify-between ">
            <div class="space-x-1 text-lg font-semibold mb-3">
                <!-- Logo -->
                <div class="flex items-center">
                    <img src="{{ asset('images/logo.png') }}" alt="Just Driving Logo"
                        class="h-7 w-auto object-contain" />
                </div>
                <p class="text-sm text-[#777777] mt-2 mb-4">
                    Du får et bedre overblik, mindre spildtid og større omsætning med Just-drivings komplette online
                    administrationssystem.
                    <br />
                    <br />
                    Just Driving ApS<br />
                    CVR: 28848161<br>
                    Adresse: Trykkeriet, Kvarmløsevej 36, 4340 Tølløse<br />
                    Telefon: +45 42424276<br />
                    E-mail: support@just-driving.dk
                </p>
            </div>

            <div class="flex space-x-4">
                <img src="{{ asset('images/linkedIn.png') }}" alt="Apple Logo" class="w-4 h-4 mr-2" />
                <img src="{{ asset('images/messenger.png') }}" alt="Apple Logo" class="w-4 h-4 mr-2" />
                <img src="{{ asset('images/twitter.png') }}" alt="Apple Logo" class="w-4 h-4 mr-2" />
                <img src="{{ asset('images/meta.png') }}" alt="Apple Logo" class="w-4 h-4 mr-2" />
            </div>
        </div>

        <div>
            <h3 class="font-semibold mb-3">Virksomheden</h3>
            <ul class="space-y-2 text-sm">
                <!-- <li><a href="#" class="hover:text-[#3673EF] transition">Privatlivs- og Cookie politik</a>
                </li> -->
                <!-- <li><a href="#" class="hover:text-[#3673EF] transition">Handelsbetingelser</a></li> -->
                <li><a href="{{ route('omJustDriving') }}" class="hover:text-[#3673EF] transition">Om os</a></li>
                <li><a href="{{ route('priser') }}" class="hover:text-[#3673EF] transition">Priser</a></li>
                <!-- <li><a href="#" class="hover:text-[#3673EF] transition">Karriere</a></li> -->
                <li><a href="{{ route('kontakt') }}" class="hover:text-[#3673EF] transition">Kontakt</a></li>
            </ul>
        </div>

        <div>
            <h3 class="font-semibold mb-3">Login</h3>
            <ul class="space-y-2 text-sm">
                <li><a href="#" class="hover:text-[#3673EF] transition">Køreskole</a></li>
                <li><a href="#" class="hover:text-[#3673EF] transition">Kørelærer</a></li>
                <li><a href="#" class="hover:text-[#3673EF] transition">Elev</a></li>
            </ul>
        </div>
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


    <div class="border-t border-gray-200 mt-10 pt-4 text-center text-xs text-gray-900">
        © <span id="year"></span> - Udviklet af Just Driving A/S.
    </div>
</footer>