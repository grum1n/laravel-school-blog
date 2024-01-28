@props(['userName'])

@php
    $classes = 'font-normal text-md text-indigo-400 hover:text-indigo-600';
@endphp

<span {{ $attributes->merge(['class' => $classes]) }}>
    {{ $userName }}
</span>