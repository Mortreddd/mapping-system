@extends('base')


@section('content')

<div class="ww-full mx-auto">
    <h1 class="text-3xl font-sans w-full text-center font-bold">Grave - {{ $grave->grave_number }}</h1>
    <div class="h-screen bg-gray-200 w-full flex justify-center items-center">
        <div class="w-96 bg-white  rounded border space-y-5 p-9 shadow-md">
            <h1 class="text-xl font-sans text-center font-bold">{{ $grave->deceased->full_name }}</h1>
            <h1 class="text-lg font-sans text-center font-bold">Grave Number: {{ $grave->grave_number }}</h1>
            <h1 class="text-lg font-sans text-center font-bold">
                Date of Birth:
                {{ $grave->deceased->date_of_birth ? \Carbon\Carbon::parse($grave->deceased->date_of_birth)->format('F
                j, Y') : 'N/A' }}
            </h1>
            <h1 class="text-lg font-sans text-center font-bold">
                Date of Death:
                {{ $grave->deceased->date_of_death ? \Carbon\Carbon::parse($grave->deceased->date_of_death)->format('F
                j, Y') : 'N/A' }}
            </h1>
        </div>
    </div>
</div>

@endsection