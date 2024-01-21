<div class="flex-1 w-full mx-auto max-w-sm content-center py-4 lg:py-0">
    <form action="{{ route('dashboard') }}" method="GET" class="relative pull-right pl-4 pr-4 md:pr-0 flex">
        <input type="text" name="search" placeholder="Search" class="w-full bg-gray-100 text-sm text-gray-800 transition border focus:outline-none focus:border-purple-500 rounded py-1 px-2 pl-10 appearance-none leading-normal">
        <div class="absolute search-icon" style="top: 0.375rem;left: 1.75rem;">
            <svg class="fill-current pointer-events-none text-gray-800 w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                <path d="M12.9 14.32a8 8 0 1 1 1.41-1.41l5.35 5.33-1.42 1.42-5.33-5.34zM8 14A6 6 0 1 0 8 2a6 6 0 0 0 0 12z"></path>
            </svg>
        </div>
        <button class="px-3 py-1 bg-indigo-400 text-white">
            Search
        </button>
    </form>
</div>