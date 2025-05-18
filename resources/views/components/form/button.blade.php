<!-- Do what you can, with what you have, where you are. - Theodore Roosevelt -->

<!-- resources/views/components/form/button.blade.php -->
@props([
'variant' => 'primary',
])

@php
$variants = [
'primary' => 'bg-primary-800 text-white hover:bg-primary-800/80 rounded-md',
'secondary' => 'bg-gray-300 text-gray-900 hover:bg-gray-400 rounded-md',
'danger' => 'bg-red-600 text-white hover:bg-red-700 rounded-md',
'success' => 'bg-green-600 text-white hover:bg-green-700 rounded-md',
'warning' => 'bg-amber-600 text-white hover:bg-amber-700 rounded-md',
'transparent' => 'bg-transparent text-gray-900 hover:bg-gray-200 rounded-md',
'custom' => ''
];
@endphp

<button {{ $attributes->merge([
    'class' => $variants[$variant] . ' px-4 py-2 font-semibold shadow-md hover:cursor-pointer
    transition-all duration-200 ease-in-out'
    ]) }}>
    {{ $slot }}
</button>