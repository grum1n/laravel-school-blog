@if (session()->has('success'))
    <div class="font-regular relative mb-4 block w-full rounded-lg bg-green-500 p-4 text-base leading-5 text-white opacity-100">
        {{ session('success') }}
    </div>
@endif