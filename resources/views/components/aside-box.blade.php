@props(['name'])
<div>
    <h3 class="my-6 pb-6 text-gray-400 font-normal uppercase border-b border-gray-400"> {{ $name }}</h3>
    {{ $slot }}
</div>