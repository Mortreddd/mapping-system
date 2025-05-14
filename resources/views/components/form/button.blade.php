<!-- Do what you can, with what you have, where you are. - Theodore Roosevelt -->

<!-- resources/views/components/form/button.blade.php -->
@props([
'variant' => 'primary',
])

@php
$variants = [
'primary' => 'bg-primary-800 text-white hover:bg-primary-800/80',
'secondary' => 'bg-gray-300 text-gray-900 hover:bg-gray-400',
'danger' => 'bg-red-600 text-white hover:bg-red-700',
'success' => 'bg-green-600 text-white hover:bg-green-700',
'warning' => 'bg-amber-600 text-white hover:bg-amber-700',
];
@endphp

<button {{ $attributes->merge([
    'class' => $variants[$variant] . ' px-4 py-2 rounded-md text-sm font-semibold shadow-md hover:cursor-pointer
    transition-all duration-200 ease-in-out'
    ]) }}>
    {{ $slot }}
</button>