@php
    $classes = 'px-6 mx-auto xl:max-w-[1280px] flex justify-between items-center';
@endphp


<nav {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</nav>
