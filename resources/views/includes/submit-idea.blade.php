@auth
    <div x-data="{ open: true }" class="mb-6 col-span-4 bg-white rounded-md flex items-center px-4 py-1">
        <form action="{{ route('ideas.store') }}" method="POST" class="w-full mx-auto h-full">
            @csrf
            <label for="content" class="block pl-4 mb-2 text-sm font-medium text-gray-800">New Idea</label>
            <textarea name="content" id="content" rows="3" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500" placeholder="New Idea..."></textarea>
            @error('content')
                <span class="block mt-2 text-sm text-red-500">{{ $message }}</span>
            @enderror
            <div class="mt-2 py-2 flex justify-end">
                <button type="submit" x-on:click="open = ! open" x-show="open" class="px-6 py-2 bg-indigo-500 text-white  rounded-md w-full sm:w-auto"> Add </button>
            </div>
        </form>
    </div>
@endauth

@guest
    <div class="w-full grid place-content-center pt-20">
        <a href="{{ route('login') }}" class="w-full flex justify-center items-center px-5 py-2 bg-indigo-500 hover:bg-indigo-600 rounded-full font-semibold text-white cursor-pointer">
            Login to share your ideas
        </a>
    </div>
@endguest


