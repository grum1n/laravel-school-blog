@php
    $classes = 'font-normal text-indigo-400 hover:text-indigo-500 cursor-pointer"';
@endphp
<li class="ml-10">
    <a {{ $attributes->merge(['class' => $classes]) }}>
        {{ $slot }}
    </a>
</li>