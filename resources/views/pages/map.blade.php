@extends('base')


@section('content')

<div class="w-full mx-auto">
    <section class="w-full">
        <x-navbar />
        <div class="w-full bg-gray-300 min-h-[80vh] flex items-center justify-center">
            <livewire:grave-yard-preview />
        </div>
    </section>
    <section class="w-full mt-5 min-h-[100vh] space-y-5 px-20">
        <h1 class="text-center font-sans text-3xl text-gray-800">Deceased Persons</h1>
        <livewire:deceased-preview />
    </section>
</div>
@endsection