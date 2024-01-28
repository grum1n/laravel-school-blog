<li class="mb-2 w-full bg-blue-950 border border-gray-600 p-8 gap-3 flex items-start justify-center flex-col sm:flex-row relative overflow-hidden">
    
    @include('includes.idea-card-article')
   
    @if ($show_images_box ?? true)
        <figure class="bg-[#0d1829] p-4 rounded-md min-w-[220px] self-stretch flex items-center justify-center gap-4 flex-col">
            @if ($idea->comments->count() > 0)

                <div class="flex items-center -space-x-4">
                    @foreach ($idea->last_three_comments() as $item)
                        <x-circle-image-box :path="$item->user->getImageURL()" :altName="$item->user->name" class="h-12 w-12" />
                    @endforeach
                </div>
                <figcaption class="w-full pt-0 px-4 text-sm text-gray-500 text-center">
                    <x-nav-link 
                        {{-- href="{{ route('ideas.show', $idea->id) . '/#comments' }}"  --}}
                        href="{{ route('ideas.show', $idea) }}"
                        name="{{ ($idea->comments()->count() > 1) ? $idea->comments()->count() . ' Comments' : $idea->comments()->count() . ' Comment' }}" 
                        class="text-gray-400 hover:text-gray-50 hover:underline" 
                        />
                </figcaption>

                @else 

                <figcaption class="w-full pt-0 px-4 text-sm text-gray-500 text-center">
                    <x-nav-link 
                        href="{{ route('ideas.show', $idea) }}" 
                        name="Add a comment" 
                        class="text-gray-400 hover:text-gray-50 hover:underline" 
                        />
                </figcaption>
            @endif
        </figure>
    @endif
</li>
