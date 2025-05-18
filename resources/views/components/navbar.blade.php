<!-- An unexamined life is not worth living. - Socrates -->

<nav class="w-full sticky top-0 px-20 py-6 flex z-20 justify-between items-center bg-primary-800 shadow-md">
    <div class="flex items-center">
        <a href="{{ route('home') }}" class="text-2xl font-bold text-white">Baliti Catholic Cemetery</a>
    </div>

    <div class="flex space-x-6 items-center">

        <a href="{{ route('search') }}"
            class="text-gray-100 hover:text-gray-300 duration-200 ease-in-out transition-all cursor-pointer">Search</a>
        <x-form.button id="dropdown" variant="custom" class="bg-transparent text-white hover:text-gray-200">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="size-8">
                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
            </svg>

            <div id="dropdown-content" class="absolute hidden top-14 right-10 bg-white rounded">
                <div class="w-48 bg-white shadow-lg rounded-md">
                    <a href="{{ route('map') }}"
                        class=" block text-left text-gray-800
                         hover:text-gray-700 text-lg w-full bg-transparent hover:bg-gray-300 px-4 py-2 duration-200 ease-in-out transition-all cursor-pointer">Cemetery
                        Map</a>
                    <a href="{{ route('pricing') }}"
                        class=" block text-left text-gray-800
                         hover:text-gray-700 text-lg w-full bg-transparent hover:bg-gray-300 px-4 py-2 duration-200 ease-in-out transition-all cursor-pointer">Pricing</a>
                    <a href="{{ route('contact') }}"
                        class=" block text-left text-gray-800
                         hover:text-gray-700 text-lg w-full bg-transparent hover:bg-gray-300 px-4 py-2 duration-200 ease-in-out transition-all cursor-pointer">Contact
                        Us</a>
                    <a href="{{ route('reservations.new') }}"
                        class="block text-left text-gray-800 hover:text-gray-700 px-4 py-2 text-lg w-full bg-transparent hover:bg-gray-300  duration-200 ease-in-out transition-all cursor-pointer">Plot
                        Reservation</a>
                    <a href="{{ route('feedback.index') }}"
                        class="block text-left text-gray-800 hover:text-gray-700 px-4 py-2 text-lg w-full bg-transparent hover:bg-gray-300  duration-200 ease-in-out transition-all cursor-pointer">Rate
                        Us</a>
                    <a href="{{ route('about') }}"
                        class="block text-left text-gray-800 hover:tex
                                t-gray-700 bg-transparent hover:bg-gray-300 px-4 py-2 text-lg w-full  duration-200 ease-in-out transition-all cursor-pointer">About</a>

                </div>
            </div>
        </x-form.button>


    </div>

</nav>

@push('scripts')
<script>
    const dropdown = document.getElementById('dropdown');
    const content = document.getElementById('dropdown-content');


    dropdown.addEventListener('click', () => {
        content.classList.toggle('hidden');
    });
</script>

@endpush