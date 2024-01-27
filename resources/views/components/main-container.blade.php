@php
    $classes = 'mx-auto max-w-[1280px]';
@endphp

<main {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</main>