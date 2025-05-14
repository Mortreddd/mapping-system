@extends('base')

@section('title', 'Create Reservation')

@section('content')

<div class="container mx-auto">
    <div class="h-[80vh] bg-white w-full">
        <x-navbar />
        <div class="relative min-h-full h-fit px-20 mb-20 w-full">
            <div class="mt-5 w-full space-y-6">
                <h1 class="block text-center text-3xl text-gray-800 font-sans font-bold">Welcome to Baliti Catholic
                    Cemetery</h1>
                <p class="font-sans text-sm text-center text-gray-500">Locate graves, reserve plots, and access burial
                    information with ease.</p>
            </div>
            <div class="w-full">
                @if (session('message'))
                <div class="bg-green-200 text-green-800 p-4 rounded">
                    {{ session('message') }}
                </div>
                @endif

                <form method="POST" action="{{ route('reservations.store') }}" class="w-full mt-5 relative">
                    @csrf
                    {{-- Full Name of the reserver --}}
                    <div class="mt-3 w-full">
                        <label for="full_name" class="block font-sans text-xl">Full Name</label>
                        @error('full_name')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                        <x-form.input type="text" id="full_name" name="full_name"
                            class="block w-full mt-1 border border-gray-300 rounded-md shadow-sm" />
                    </div>

                    {{-- Email of reserver --}}
                    <div class="mt-3 w-full">
                        <label for="email" class="block font-sans text-xl">Email</label>
                        @error('email')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                        <x-form.input type="email" id="email" name="email"
                            class="block w-full mt-1 border border-gray-300 rounded-md shadow-sm" />
                    </div>

                    {{-- Full Name of the deceased --}}
                    <div class="mt-3 w-full">
                        <label for="deceased_full_name" class="block font-sans text-xl">Deceased Full Name</label>
                        @error('deceased_full_name')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                        <x-form.input type="text" id="deceased_full_name" name="deceased_full_name"
                            class="block w-full mt-1 border border-gray-300 rounded-md shadow-sm" />
                    </div>

                    <div class="w-full mt-3">
                        <label for="grave_number" class="block font-sans text-xl">Plot Number</label>
                        @error('grave_number')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                        <x-form.input type="text" id="grave_number" name="grave_number"
                            class="block w-full mt-1 border border-gray-300 rounded-md shadow-sm" />
                    </div>

                    <div class="w-full mt-3">
                        <label for="date_of_birth" class="block font-sans text-xl">Born Date</label>
                        @error('date_of_birth')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                        <x-form.input type="date" id="date_of_birth" name="date_of_birth"
                            class="block w-full mt-1 border border-gray-300 rounded-md shadow-sm" />
                    </div>

                    <div class="w-full mt-3">
                        <label for="date_of_death" class="block font-sans text-xl">Died On</label>
                        @error('date_of_death')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                        <x-form.input type="date" id="date_of_death" name="date_of_death"
                            class="block w-full mt-1 border border-gray-300 rounded-md shadow-sm" />
                    </div>

                    <div class="w-full mt-5 flex justify-start items-center">
                        <x-form.button type="submit" variant="primary" class="w-fit">
                            Submit Reservation
                        </x-form.button>
                    </div>
                </form>
            </div>
        </div>
        <x-footer />
    </div>
</div>
@endsection