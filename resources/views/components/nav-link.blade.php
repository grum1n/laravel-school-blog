@props(['name'])

@php
    $classes = 'font-normal cursor-pointer';
@endphp
<li>
    <a {{ $attributes->merge(['class' => $classes]) }}>
        {{ $name }}
    </a>
</li>
