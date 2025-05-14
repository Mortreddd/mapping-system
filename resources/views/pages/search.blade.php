@extends('base')



@section('content')


<div class="container mx-auto">
    <div class="h-[80vh] bg-white w-full">
        <x-navbar />
        <div class="relative min-h-full h-fit px-20 w-full">
            <div class="mt-5 w-full space-y-6">
                <h1 class="block text-center text-3xl text-gray-800 font-sans font-bold">Welcome to Baliti Catholic
                    Cemetery</h1>
                <p class="font-sans text-sm text-center text-gray-500">Locate graves, reserve plots, and access burial
                    information with ease.</p>
            </div>
            <div class="w-full">
                <livewire:search-result />
            </div>
        </div>
        <x-footer />
    </div>


    @endsection