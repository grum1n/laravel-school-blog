<section class="bg-sky-950 text-gray-100">
    <div class="block bg-cover w-full h-[350px] " style="background-image: url(https://images.unsplash.com/photo-1616763355603-9755a640a287?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80)">
        <div class="w-full h-full bg-gray-900 bg-opacity-90">
            <div class="mx-auto xl:max-w-[1280px] flex flex-col justify-center items-center h-full px-12 pt-8 ">
                <h1 class="w-full text-2xl font-normal text-white">
                    @include('includes.alpine-text')
                </h1>
                <div class="mt-6 p-6 bg-indigo-900 bg-opacity-40 rounded-lg">
                    <p class="text-gray-300 text-center">Catch up with founders from</p>
                    <ul class="list-none flex justify-center items-center gap-4 pt-4 opacity-60">
                        <li class="">
                            <img src="{{ asset('storage/web/company-1.png') }}" width="67" height="32" alt="Company 01">
                        </li>
                        <li class="">
                            <img src="{{ asset('storage/web/company-3.png') }}" width="67" height="32" alt="Company 3">
                        </li>
                        <li class="">
                            <img src="{{ asset('storage/web/company-4.png') }}" width="67" height="32" alt="Company 4">
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

