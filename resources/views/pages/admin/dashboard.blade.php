@extends('base')

@section('title', 'Dashboard')

@section('content')
<div class="w-full mx-auto">
    <div class="min-h-screen w-full bg-green-100">
        <x-admin.navbar />
        <div class="relative px-20 w-full">
            <h1 class="mt-5 font-sans text-2xl text-gray-800 font-bold">View Record</h1>
            <div class="w-full mt-5 relative">
                <livewire:admin.view-records />
            </div>
        </div>
    </div>
</div>


@endSection