<!-- Walk as if you are kissing the Earth with your feet. - Thich Nhat Hanh -->

@props([
'variant' => 'success'
])



@php
$badgeClasses = [
'success' => 'bg-green-500 text-white',
'error' => 'bg-red-500 text-white',
'warning' => 'bg-yellow-500 text-white',
'default' => 'bg-gray-300 text-gray-700'
];
@endphp

<span class="px-3 py-1 rounded-full {{ $badgeClasses[$variant] ?? $badgeClasses['default'] }}">
    {{ $slot }}
</span>