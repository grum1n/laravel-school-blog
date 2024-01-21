<div class="mb-6 col-span-4 bg-purple-100 rounded-md flex items-center p-4">
    <form action="{{ route('ideas.store') }}" method="POST" class="w-full mx-auto h-full">
        @csrf
        <label for="content" class="block pl-4 mb-2 text-sm font-medium text-gray-100">New Idea</label>
        <textarea name="content" id="content" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500" placeholder="New Idea..."></textarea>
        @error('content')
            <span class="block mt-2 text-sm text-red-500">{{ $message }}</span>
        @enderror
        <div class="mt-2 px-4 py-2 flex justify-end">
            <button type="submit" class="px-3 py-2 bg-indigo-500 text-white  rounded-md w-full sm:w-auto"> Submit </button>
        </div>
    </form>
</div>

