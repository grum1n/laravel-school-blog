<div class="bg-[#0d1829] items-start justify-center flex flex-col rounded-lg p-4 text-gray-200">
    <p class="w-full font-normal text-lg pb-4 text-left border-b border-gray-500">
        {{ $i_comment->content }}
    </p>
        
    <div class="grid grid-cols-6 px-4 pt-4">
        
        <x-circle-image-box :path="$i_comment->user->getImageURL()" :altName="$i_comment->user->name" class="w-12 h-12" />

        <div class="col-span-3 px-3 font-semibold flex flex-col"> 
                <div>{{ $i_comment->user->name }}</div>
                <div class="text-sm text-gray-400 font-light">{{ $i_comment->created_at->diffForHumans() }}</div>
        </div>
        
        <div class="col-span-2 py-2 justify-self-end">
            <a href="{{ route('ideas.show', $i_comment->idea->id) }}" class="bg-gradient-to-b from-[#6c73ff8f] hover:bg-[#1b2b426c] text-gray-300 hover:text-gray-400 font-normal text-md rounded-full py-1 px-4 hover:indigo-600">Idea link</a>
        </div>
    </div>
</div>