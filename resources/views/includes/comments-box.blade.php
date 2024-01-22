<div class="font-sans border-b border-gray-400 mb-4 p-4">
    <form action="{{ route('ideas.comments.store', $idea->id) }}" method="POST" class="w-full mx-auto h-full">
        @csrf
        <label for="content" class="block pl-4 mb-2 text-sm font-medium text-gray-100">New Comment</label>
        <input type="text" name="content" id="content" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500" placeholder="New Idea..." />
        @error('content')
            <span class="block mt-2 text-sm text-red-500">{{ $message }}</span>
        @enderror
        <div class="mt-2 px-4 py-2 flex justify-end">
            <button type="submit" class="px-3 py-2 bg-indigo-500 text-white  rounded-md w-full sm:w-auto"> Post Comment </button>
        </div>
    </form>         
</div>