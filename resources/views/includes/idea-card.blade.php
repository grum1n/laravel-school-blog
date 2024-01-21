<div class="border border-gray-200">
   @if ($editing ?? false)
      <div class="bg-purple-100 p-4">
         <form action="{{ route('ideas.update', $idea) }}" method="POST" class="w-full mx-auto h-full">
               @csrf
               @method('PUT')
               <label for="content" class="block pl-4 mb-2 text-sm font-medium text-gray-600">Content</label>
               <textarea name="content" id="messcontentage" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500" placeholder="New Idea...">
                  {{ $idea->content }}
               </textarea>
               @error('content')
                  <span class="block mt-2 text-sm text-red-500">{{ $message }}</span>
               @enderror
               <div class="mt-2 px-4 py-2 flex justify-end">
                  <button type="submit" class="px-3 py-2 bg-indigo-500 text-white  rounded-md w-full sm:w-auto"> Update </button>
               </div>
         </form>

      </div>
      @else
         <div class="font-sans border-b border-gray-400 mb-4 p-4">
            <div class="flex justify-end gap-4">
               <a href="{{ route('ideas.show', $idea->id)}}" class="bg-indigo-400 hover:bg-indigo-600 text-white px-3 py-1">View</a>
               <a href="{{ route('ideas.edit', $idea->id)}}" class="bg-green-400 hover:bg-green-600 text-white px-3 py-1">Edit</a>
               <form action="{{ route('ideas.destroy', $idea->id) }}" method="POST">
                  @csrf
                  @method('DELETE')
                  <button type="submit" class="bg-red-400 hover:bg-red-600 text-white px-3 py-1">
                     X
                  </button>
               </form>
            
            </div>
            <h1 class="font-sans break-normal text-gray-900 pt-6 pb-2 text-lg">{{ $idea->content }}</h1>
         </div>
         @include('includes.comments-box')

      
         @foreach ($idea->comments as $comment)
            <div>
               {{ $comment->created_at }}
            </div>
            <div>
               {{ $comment->content }}
            </div>
            <div class="flex items-center">
               <svg class="h-16 fill-current text-gray-600 hover:shadow hover:bg-purple-100 hover:text-green-500 p-4 mr-2 border rounded" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                  <path d="M11 0h1v3l3 7v8a2 2 0 0 1-2 2H5c-1.1 0-2.31-.84-2.7-1.88L0 12v-2a2 2 0 0 1 2-2h7V2a2 2 0 0 1 2-2zm6 10h3v10h-3V10z"/>
               </svg>
               <svg class="h-16 fill-current text-gray-600 hover:shadow hover:bg-purple-100 hover:text-red-500 p-4 mr-2 border rounded" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                  <path d="M11 20a2 2 0 0 1-2-2v-6H2a2 2 0 0 1-2-2V8l2.3-6.12A3.11 3.11 0 0 1 5 0h8a2 2 0 0 1 2 2v8l-3 7v3h-1zm6-10V0h3v10h-3z"/>
               </svg>
               <div class="pl-4">
                  <p class="text-gray-800 font-bold">Did you find this article useful?</p>
                  <p class="text-xs text-gray-600 pt-2">0 out of 0 found this useful</p>
               </div>
            </div>
         @endforeach
   @endif
</div>