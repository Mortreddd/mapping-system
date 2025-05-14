@extends('base')

@section('content')

<div class="container mx-auto">
    <div class="min-h-screen w-full bg-green-100">
        <x-admin.navbar />
        <div class="relative px-20 w-full">
            <h1 class="mt-5 font-sans text-2xl text-gray-800 font-bold">Feedbacks</h1>
            <div class="w-full mt-5 relative">
                <livewire:admin.feedback-list />
            </div>
        </div>
    </div>
</div>

@endsection