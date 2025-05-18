@extends('base')

@section('title', $record->full_name . ' - Edit Record')

@section('content')
<div class="w-full mx-auto">
    <div class="min-h-screen w-full bg-green-100">
        <x-admin.navbar />
        <div class="relative px-20 w-full">
            <h1 class="mt-5 font-sans text-2xl text-gray-800 font-bold">New Record</h1>
            <x-admin.partials.edit :record="$record" />
        </div>
    </div>
</div>


@endSection