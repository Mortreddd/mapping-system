@extends('base')


@section('content')

<div class="w-full mx-auto">
    <x-navbar />

    <div class="relative h-fit min-h-[80vh] px-20 w-full">
        <div class="mt-5 w-full space-y-6">
            <h1 class="block text-center text-3xl text-gray-800 font-sans font-bold">Welcome to Baliti Catholic
                Cemetery</h1>
            <p class="font-sans text-sm text-center text-gray-500">Locate graves, reserve plots, and access burial
                information with ease.</p>
        </div>
        <div class="w-full h-full px-20 mt-5">
            <h1 class="text-2xl font-sans text-center font-bold">Rate Us!</h1>
            <p class="mt-3 text-lg font-sans text-center text-gray-500">Every feedback matters to us, tell us how
                was your recent experience at our service.</p>
        </div>

        <div class="mt-10 relative">
            <livewire:feedback-form />
        </div>
    </div>
    <x-footer />
</div>

@endsection