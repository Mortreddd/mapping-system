@extends('base')


@section(section: 'content')
<div class="w-full mx-auto">
    {{-- Background Image --}}
    <div class="absolute inset-0 bg-cover bg-center bg-no-repeat"
        style="background-image: url('{{ asset('baliti-pic.jpg') }}');">
    </div>

    {{-- Overlay --}}
    <div class="absolute inset-0 bg-black opacity-70"></div>
    <section class="w-full h-screen bg-fixed bg-no-repeat bg-center bg-cover">
        <x-navbar />
        <div class="w-full h-[80vh] flex items-center ">
            <div class="relative z-10 w-full mx-auto">
                <h1 class="w-full px-20 text-5xl text-nowrap text-center font-bold text-white">Welcome to Baliti
                    Catholic Cemetery
                </h1>
                <p class="w-full px-20 mt-4 text-2xl text-gray-200 text-center">Honoring Traditions, Preserving Legacies
                </p>
                <p class="w-full px-20 mt-4 text-lg text-gray-200 text-center">Locate graves, reserve plots, and access
                    burial information with ease.</p>


                <div class="relative mt-5 flex w-full justify-center">

                    <a href="#contact" variant="custom"
                        class="rounded-full px-6 py-2 text-xl text-white bg-green-500 hover:bg-green-600 focus:outline-none focus:ring-2 focus:ring-green-700 focus:ring-opacity-50 transition-all duration-200 ease-in-out">
                        Contact Us
                    </a>
                </div>
            </div>

        </div>
    </section>
    <section class="bg-white flex py-5 mt-10 flex-col items-center w-full px-20">
        <h1 class="text-gray-800 font-sans font-bold text-4xl">Baliti Catholic Cemetery</h1>
        <p class="text-xl font-thin text-center font-sans mt-5 text-gray-700">
            Baliti Catholic Cemetery in the City of San Fernando, Pampanga, is a sacred ground devoted to honoring the
            departed with reverence, peace, and care. Serving generations of families, we provide a tranquil environment
            where loved ones can rest in serenity and families can gather in remembrance.
        </p>
    </section>
    <section class="bg-white py-5 my-10 w-full px-20">
        <h1 class="block text-center text-gray-800 font-sans font-bold text-4xl">Our Mission</h1>
        <p class="text-xl font-thin block text-center mt-5 font-sans text-gray-700">
            To provide a respectful, peaceful, and faith-driven resting place for the departed, upholding Catholic
            traditions and offering compassionate service to grieving families.
        </p>
    </section>
    {{-- Gallery Section --}}

    <div class="w-full relative">
        <livewire:gallery-list />
    </div>

    <section class="bg-white py-5 my-10 w-full px-20 flex items-center flex-col">
        <h1 class="block text-center text-gray-800 font-sans font-bold text-4xl">Why Choose Baliti Catholic Cemetery
        </h1>
        <div class="relative">

            <p class="text-xl font-thin block mt-5 font-sans text-gray-700">
                <strong class="font-semibold">Catholic Values:</strong> Operated under the guidance of the local parish
                with
                spiritual services
                available
            </p>
            <p class="text-xl font-thin block mt-5 font-sans text-gray-700">
                <strong class="font-semibold">Peaceful Environment:</strong> Landscaped gardens and prayer spaces ideal
                for
                reflection and
                remembrance.
            </p>
            <p class="text-xl font-thin block mt-5 font-sans text-gray-700">
                <strong class="font-semibold">Modern Systems:</strong> Our integrated digital system makes locating,
                managing, and reserving plots
                easier than ever.
            </p>
            <p class="text-xl font-thin block mt-5 font-sans text-gray-700">
                <strong class="font-semibold">Trusted by Families:</strong> A history of dedicated service to San
                Fernando
                and nearby communities.
            </p>
        </div>
    </section>
    <section class="bg-white py-5 my-10 w-full px-20 flex items-center flex-col">
        <h1 class="block text-center text-gray-800 font-sans font-bold text-4xl">Visitation Information</h1>
        <div class="relative">

            <p class="text-xl font-thin block mt-5 font-sans text-gray-700">
                <strong class="font-semibold">Operating Hours:</strong> Monday to Sunday – 7:00 AM to 6:00 PM
            </p>
            <p class="text-xl font-thin block mt-5 font-sans text-gray-700">
                <strong class="font-semibold">Mass Schedules:</strong> First Saturday of the month – 8:00 AM (Memorial
                Mass)
            </p>
            <p class="text-xl font-thin block mt-5 font-sans text-gray-700">
                <strong class="font-semibold">Location:</strong> Brgy. Baliti, City of San Fernando, Pampanga
            </p>
        </div>
    </section>
    <section class="bg-white py-5 my-10 w-full px-20 flex items-center flex-col">
        <h1 id="contact" class="block text-center text-gray-800 font-sans font-bold text-4xl">Contact Us</h1>
        <div class="relative">

            <p class="text-2xl font-thin block mt-5 font-sans text-gray-700">
                <strong class="font-semibold">Phone:</strong> 09956103234
            </p>
            <p class="text-2xl font-thin block mt-5 font-sans text-gray-700">
                <strong class="font-semibold">Email:</strong> baliticatholiccemetery2025@gmail.com
            </p>
        </div>
    </section>
    <x-footer />
</div>
@endsection