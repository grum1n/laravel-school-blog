@props(['path', 'altName'])

@php
    $classes = 'relative flex justify-center items-center border-2 border-white rounded-full';
@endphp

<div {{ $attributes->merge(['class' => $classes]) }}>
    <img src="{{ asset('images/profile/' . $path) }}" alt="{{ $altName }}" class="w-full h-full rounded-full object-cover object-center hover:z-10 focus:z-4" >
</div>