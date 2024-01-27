@props(['name'])
<div>
    <h3 class="my-6 text-gray-400 font-normal uppercase"> {{ $name }}</h3>
    {{ $slot }}
</div>