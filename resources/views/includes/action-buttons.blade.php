<div x-data="{dropdownOpen: false}" class="absolute slide-in-top bg-indigo-400 hover:bg-indigo-600 text-white px-1 py-[4px] rounded-bl-lg right-0 top-0 text-sm flex justify-start items-center gap-8 hover:z-20">
    <button @click="dropdownOpen=true">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-three-dots-vertical" viewBox="0 0 16 16">
            <path d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0m0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0m0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0"/>
        </svg>
    </button>

    <div x-show="dropdownOpen" 
        @click.away="dropdownOpen=false"
        x-transition:enter="ease-out duration-200"
        x-transition:enter-start="-translate-y-2"
        x-transition:enter-end="translate-y-0"
        class="absolute top-0 z-50 w-56 mt-6 -translate-x-1 right-1"
        x-cloak>

        <div class="p-1 mt-2 text-sm bg-indigo-200 border rounded-md shadow-md border-neutral-200/70 text-neutral-700">
            @if (! Route::is('ideas.show'))

                <a href="{{ route('ideas.show', $idea) }}" @click="menuBarOpen=false" class="relative flex justify-between w-full cursor-pointer select-none group items-center rounded px-2 py-1.5 hover:bg-indigo-300 hover:text-neutral-900 outline-none data-[disabled]:opacity-50 data-[disabled]:pointer-events-none">
                    <span>View</span>
                    <span class="ml-auto text-xs tracking-widest text-neutral-400 group-hover:text-neutral-600">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
                            <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8M1.173 8a13 13 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5s3.879 1.168 5.168 2.457A13 13 0 0 1 14.828 8q-.086.13-.195.288c-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5s-3.879-1.168-5.168-2.457A13 13 0 0 1 1.172 8z"/>
                            <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5M4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0"/>
                        </svg>
                    </span>
                </a>
                
            @endif

            @if (! Route::is('ideas.edit'))
           
                <a href="{{ route('ideas.edit', $idea) }}" @click="menuBarOpen=false" class="relative flex justify-between w-full cursor-pointer select-none group items-center rounded px-2 py-1.5 hover:bg-green-300 hover:text-neutral-900 outline-none data-[disabled]:opacity-50 data-[disabled]:pointer-events-none">
                    <span>Edit</span>
                    <span class="ml-auto text-xs tracking-widest text-neutral-400 group-hover:text-neutral-600">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                            <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                            <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z"/>
                        </svg>
                    </span>
                </a>

            @endif
            <form action="{{ route('ideas.destroy', $idea) }}" method="POST">
                @csrf
                @method('DELETE')
                <button 
                    type="submit"  
                    onclick="return confirm('Confirm to delete?')"
                    @click="menuBarOpen=false"  
                    class="relative flex justify-between w-full cursor-pointer select-none group items-center rounded px-2 py-1.5 hover:bg-red-300 hover:text-neutral-900 outline-none data-[disabled]:opacity-50 data-[disabled]:pointer-events-none"
                    >
                    <span>Delete</span>
                    <span class="ml-auto text-xs tracking-widest text-neutral-400 group-hover:text-neutral-600">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3" viewBox="0 0 16 16">
                            <path d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5M11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47M8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5"/>
                        </svg>
                    </span>
                </button>
            </form>
        </div>

    </div>
</div>