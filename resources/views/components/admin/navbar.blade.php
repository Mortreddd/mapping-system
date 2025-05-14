<!-- Life is available only in the present moment. - Thich Nhat Hanh -->
<!-- An unexamined life is not worth living. - Socrates -->

<nav class="w-full sticky top-0 px-20 py-6 flex z-20 items-center bg-primary-800 shadow-md">
    <div class="w-full flex justify-between items-center">
        <div class="w-fit space-x-5">
            <a href="{{ route('admin.dashboard') }}" class="text-2xl font-bold text-white">Baliti Catholic Cemetery</a>
            <a href="{{ route('admin.dashboard') }}"
                class="text-gray-100 hover:text-gray-300 duration-200 ease-in-out transition-all text-xl cursor-pointer">Home</a>
            <a href="{{ route('admin.records.new') }}"
                class="text-gray-100 hover:text-gray-300 duration-200 ease-in-out transition-all text-xl cursor-pointer">New</a>
            <a href="{{ route('admin.reservations.index') }}"
                class="text-gray-100 hover:text-gray-300 duration-200 ease-in-out transition-all text-xl cursor-pointer">Reservations</a>
            <a href="{{ route('admin.feedbacks') }}"
                class="text-gray-100 hover:text-gray-300 duration-200 ease-in-out transition-all text-xl cursor-pointer">Feedbacks</a>
            <a href="{{ route('about') }}"
                class="text-gray-100 hover:text-gray-300 duration-200 ease-in-out transition-all text-xl cursor-pointer">Location</a>
        </div>
        <form action="{{ route('admin.logout') }}" method="POST">
            @csrf
            <x-form.button variant="danger">
                Logout
            </x-form.button>
        </form>
    </div>
</nav>