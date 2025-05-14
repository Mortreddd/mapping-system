@extends('base')


@section('content')

<div class="container mx-auto">
    <div class="h-[70vh] bg-white w-full">
        <x-navbar />
        <div class="relative min-h-full h-full px-20 mb-20 w-full">
            <div class="mt-5 w-full space-y-6">
                <h1 class="block text-center text-3xl text-gray-800 font-sans font-bold">Welcome to Baliti Catholic
                    Cemetery</h1>
                <p class="font-sans text-sm text-center text-gray-500">Locate graves, reserve plots, and access burial
                    information with ease.</p>
            </div>
            <div class="w-full">
                <div class="w-full mt-5 relative h-full">
                    <div class="w-full flex items-center flex-col h-full">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="size-16 mx-auto text-primary-800">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                        </svg>

                        <p class="text-lg font-sans font-semibold">

                            {{ session('message') }}
                        </p>
                    </div>

                </div>
            </div>
        </div>
        <x-footer />
    </div>
</div>

@endsection