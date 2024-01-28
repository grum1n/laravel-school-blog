@extends('layouts.app')

@section('content')

    <x-main-container class="pt-24 grid grid-cols-12 gap-4">
        <x-content-box>
            <li class="w-full flex justify-between items-center mb-8 pb-8 border-b border-gray-400">
                <a href="{{ route('dashboard') }}" class="w-[150px] flex justify-center items-center gap-4 px-5 py-2 bg-indigo-500 hover:bg-indigo-600 rounded-full font-semibold text-white cursor-pointer">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left-square-fill" viewBox="0 0 16 16">
                        <path d="M16 14a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2zm-4.5-6.5H5.707l2.147-2.146a.5.5 0 1 0-.708-.708l-3 3a.5.5 0 0 0 0 .708l3 3a.5.5 0 0 0 .708-.708L5.707 8.5H11.5a.5.5 0 0 0 0-1"/>
                    </svg>
                    <span class="text-white">Go Back</span>
                </a>
            </li>

            @include('includes.idea-card')
            
            <li>
                <div id="comments" x-data="{ activeAccordion: true }" class="mb-20 w-full bg-[#0d1829] border border-gray-600 p-0 gap-3 flex flex-col items-center justify-center relative overflow-hidden">
                    <button @click="activeAccordion = !activeAccordion">
                        <span
                            x-show="activeAccordion"
                            class="mt-4 w-full bg-gray-700 hover:bg-gray-800 text-gray-100 hover:text-gray-300 px-4 py-2 rounded-full flex items-center justify-center gap-4 no-underline">
                            Close
            
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-circle" viewBox="0 0 16 16">
                                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16"/>
                                <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708"/>
                            </svg>
                        </span>
                        <span
                            x-show="!activeAccordion"
                            class="w-full flex items-center justify-center gap-4 flex-col bg-[#0d1829] p-4 rounded-md  self-stretch ">
                            
                            <div class="w-full flex justify-center items-center -space-x-4">
                                <img
                                alt="user 1"
                                src="https://images.unsplash.com/photo-1633332755192-727a05c4013d?ixlib=rb-1.2.1&amp;ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;auto=format&amp;fit=crop&amp;w=1480&amp;q=80"
                                class="relative inline-block h-12 w-12 rounded-full border-2 border-white object-cover object-center hover:z-10 focus:z-10"
                                />
                                <img
                                alt="user 2"
                                src="https://images.unsplash.com/photo-1580489944761-15a19d654956?ixlib=rb-1.2.1&amp;ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;auto=format&amp;fit=crop&amp;w=1061&amp;q=80"
                                class="relative inline-block h-12 w-12 rounded-full border-2 border-white object-cover object-center hover:z-10 focus:z-10"
                                />
                                <img
                                alt="user 3"
                                src="https://images.unsplash.com/photo-1544005313-94ddf0286df2?ixlib=rb-4.0.3&amp;ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;auto=format&amp;fit=crop&amp;w=1288&amp;q=80"
                                class="relative inline-block h-12 w-12 rounded-full border-2 border-white object-cover object-center hover:z-10 focus:z-10"
                                />
                            </div>
                            <p class="w-full pt-0 px-4 text-sm text-gray-100 text-center">
                                Show {{ $idea->comments()->count() }} Comments
                            </p>
                        </span>
                    </button>
            
                    <div x-cloak x-collapse x-show="activeAccordion" class="w-full flex flex-col gap-2 text-gray-100 bg-[#0d1829] p-4">
                        @include('includes.comments-box')
            
                        @forelse ($idea->comments as $comment)

                            <div class="w-full bg-gradient-to-r from-indigo-950 to-blue-900 border border-gray-800 shadow-lg p-4 opacity-80">
                                <article class="mb-6 text-md font-normal mt-3 text-gray-200 h-full">
                                    {{ $comment->content }}
                                </article>
                                <figure class="bg-blue-950 p-4 rounded-md border border-gray-700 min-w-[220px] self-stretch flex items-center justify-center gap-4 flex-col">
                                    <figcaption class="w-full flex justify-start items-center gap-2 ">
                                        <a href="{{ route('users.show', $comment->user->id) }}" class="flex justify-start items-center gap-2">
                                            <x-circle-image-box :path="$comment->user->getImageURL()" :altName="$comment->user->name" class="h-6 w-6" />
                                            <x-user-name :userName="$comment->user->name" />
                                        </a>
                                        <span class="text-md text-gray-500">
                                            · {{ $comment->created_at->diffForHumans() }} · 
                                        </span>
                                    </figcaption>
                                </figure>
                            </div>
                           
                            @empty
                            <span class="block text-center text-gray-200"> No Comments Found</span>
                        @endforelse
                        
                    </div>
                </div>
            </li>
        </x-content-box>
          
        <x-aside-container>
            @include('includes.search-bar')
            <x-aside-box name="New Cooments">
                @foreach ($ideas_comments as $i_comment)
                    <div class="flex flex-col items-start gap-2 mb-4 border-t border-gray-600 pt-4">
                        <div class="flex justify-start items-center gap-2">
                            <x-circle-image-box :path="$i_comment->user->getImageURL()" :altName="$i_comment->user->name" class="h-6 w-6" />
                            <a href="{{ route('users.show', $i_comment->user->id) }}">
                                <x-user-name :userName="$i_comment->user->name" />
                            </a>
                        </div>
                        <p class="font-bold text-gray-200">{{ $i_comment->content }}</p>
                        <span class="text-gray-500 font-normal">{{ $i_comment->created_at->diffForHumans() }} · <a href="{{ route('ideas.show', $i_comment->idea->id) }}" class="text-indigo-500 hover:indigo-600 underline">Idea link</a></span>
                    </div>
                @endforeach
            </x-aside-box>

            <x-aside-box name="Last registered Students">
                @foreach ($last_three_registered_users as $last_users)
                    <div class="flex flex-col items-start gap-2 mb-4 border-t border-gray-600 pt-4">
                        <div class="flex justify-start items-center gap-2">
                            <x-circle-image-box :path="$last_users->getImageURL()" :altName="$last_users->name" class="h-6 w-6" />
                            <a href="{{ route('users.show', $last_users->id) }}">
                                <x-user-name :userName="$last_users->name" />
                            </a>
                        </div>
                        <span class="text-gray-500 font-normal">{{ $last_users->created_at->diffForHumans() }}</span>
                    </div>
                @endforeach
            </x-aside-box>
        </x-aside-container>
    </x-main-container>
    
@endsection
   