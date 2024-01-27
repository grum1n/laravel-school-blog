<div class="w-full font-sans border-b border-gray-400 mb-4 py-4">
    <form action="{{ route('ideas.comments.store', $idea->id) }}" method="POST">
        @csrf
        <div class="block w-full">
            <label for="content" class="block pl-4 mb-2 text-sm font-medium text-gray-100">New Comment</label>
            <input type="text" name="content" id="content" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500" placeholder="New Comment..." />
            @error('content')
                <span class="block mt-2 text-sm text-red-500">{{ $message }}</span>
            @enderror
        </div>
        <div class="mt-2 px-0 py-2 flex justify-end">
            <button type="submit" class=" bg-indigo-500 hover:bg-indigo-600 w-40 flex justify-center items-center px-5 py-2 rounded-full font-semibold text-white cursor-pointer">Add Comment</button>
        </div>
    </form>         
</div>