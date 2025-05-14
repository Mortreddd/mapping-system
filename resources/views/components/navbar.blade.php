<!-- An unexamined life is not worth living. - Socrates -->

<nav class="w-full sticky top-0 px-20 py-6 flex z-20 justify-between items-center bg-primary-800 shadow-md">
    <div class="flex items-center">
        <a href="{{ route('home') }}" class="text-2xl font-bold text-white">Baliti Catholic Cemetery</a>
    </div>
    <div class="hidden md:flex space-x-6">
        <a href="{{ route('home') }}"
            class="text-gray-100 hover:text-gray-300 duration-200 ease-in-out transition-all cursor-pointer">Home</a>
        <a href="{{ route('map') }}"
            class="text-gray-100 hover:text-gray-300 duration-200 ease-in-out transition-all cursor-pointer">Cemetery
            Map</a>
        <a href="{{ route('reservations.new') }}"
            class="text-gray-100 hover:text-gray-300 duration-200 ease-in-out transition-all cursor-pointer">Plot
            Reservation</a>
        <a href="{{ route('feedback.index') }}"
            class="text-gray-100 hover:text-gray-300 duration-200 ease-in-out transition-all cursor-pointer">Rate Us</a>


        <a href="{{ route('search') }}"
            class="text-gray-100 hover:text-gray-300 duration-200 ease-in-out transition-all cursor-pointer">Search</a>

        <a href="{{ route('about') }}"
            class="text-gray-100 hover:text-gray-300 duration-200 ease-in-out transition-all cursor-pointer">About</a>
    </div>

</nav>