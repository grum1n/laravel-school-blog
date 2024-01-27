<article class="pr-4 grow">
    <div class="absolute slide-in-top bg-gradient-to-r from-[#6c73ff] to-[#676bbe] text-white px-12 py-[4px] rounded-br-lg left-0 top-0 text-sm flex justify-center items-center gap-8">
        Likes @include('ideas.partials.like-button') 
    </div>
    @auth
        @if (Auth::id() === $idea->user->id)
            @include('includes.action-buttons')
        @endif
    @endauth
    <h2 class="mb-6 text-xl font-semibold mt-3 text-gray-200 min-h-16"> 
        <a href="{{ route('ideas.show', $idea->id) }}"> {{ $idea->content }}</a>
    </h2>
    <div class="flex justify-start items-center gap-2 flex-wrap">
        <a href="{{ route('users.show', $idea->user->id) }}" class="flex justify-start items-center gap-2">
            <div class="h-6 w-6">
                <img src="{{ $idea->user->getImageURL() }}" alt="{{ $idea->user->name }}" class="w-full h-full rounded-full object-cover">
            </div>
            <span class="text-md text-indigo-400">
            {{ $idea->user->name }}
            </span>
        </a>
        <span class="flex justify-start items-center gap-2 text-md text-gray-500" title="Idea Created">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-clock" viewBox="0 0 16 16">
                <path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71z"/>
                <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16m7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0"/>
            </svg>
            {{ $idea->created_at->diffForHumans() }} 
        </span>
        @if ($idea->updated_at != $idea->created_at)
            <span class="flex justify-start items-center gap-2 text-md text-gray-500" title="Idea Updated">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-clockwise" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M8 3a5 5 0 1 0 4.546 2.914.5.5 0 0 1 .908-.417A6 6 0 1 1 8 2z"/>
                    <path d="M8 4.466V.534a.25.25 0 0 1 .41-.192l2.36 1.966c.12.1.12.284 0 .384L8.41 4.658A.25.25 0 0 1 8 4.466"/>
                </svg>
                {{ $idea->updated_at->diffForHumans() }}
            </span>
        @endif
    </div>
</article>