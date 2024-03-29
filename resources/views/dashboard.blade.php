@extends('layouts.app')

@section('content')

    @include('includes.hero')

    <x-main-container class="pt-4 grid grid-cols-12 gap-4">
        <x-content-box>
            <div class="block pb-6 md:hidden ">
                @include('includes.search-bar')
            </div>
          
            <li class="w-full flex justify-between items-center mb-8 pb-8 border-b border-gray-400">
                <div class="flex justify-start items-center gap-4">
                    <h2 class="text-indigo-400 text-md font-normal underline">Ideas</h2>
                    {{-- <h2 class="text-gray-400 text-md font-normal">Newest</h2>
                    <h2 class="text-gray-400 text-md font-normal">Following</h2> --}}
                </div>
               
                <div x-data="{ showModal: false }" @keydown.window.escape="showModal = false" class="relative">
                    <button @click="showModal = !showModal" class="w-[150px] flex justify-center items-center px-5 py-2 bg-indigo-500 hover:bg-indigo-600 rounded-full font-semibold text-white cursor-pointer relative">
                        <svg class="w-4 h-4 mr-2 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                        </svg>
                        <span class="text-white">New Idea</span>
                        <span class="animate-ping absolute w-28 h-10 inline-flex border rounded-full border-indigo-400 opacity-25"></span>
                    </button>
                    
                    <div
                        x-cloak
                        x-transition.opacity
                        x-show="showModal"
                        class="fixed inset-0 bg-black/50"
                        >
                    </div>
                    
                    <div
                        x-cloak
                        x-transition
                        x-show="showModal"
                        class="fixed inset-0 z-30 grid place-content-center"
                        >
                        <div
                            @click.away="showModal = false"
                            class="w-[320px] md:w-[500px] h-[320px] bg-white rounded-md"
                        >
                            <p class="p-4 flex justify-end items-center">
                                <button @click="showModal = !showModal">
                                    <span
                                        title='Close'
                                        class="w-full bg-indigo-700 hover:bg-indigo-800 text-white hover:text-gray-300 p-1 rounded-full flex items-center justify-center gap-4 cursor-pointer">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-x-circle" viewBox="0 0 16 16">
                                            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16"/>
                                            <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708"/>
                                        </svg>
                                    </span>
                                </button>
                            </p>
                            @include('includes.submit-idea')
                        </div>
                    </div>
                </div>
            </li>
            @if (count($ideas) >= 1 )

                @foreach ($ideas as $idea)
                    @include('includes.idea-card')
                @endforeach
                
                <li class="pt-6 pb-3">
                    {{ $ideas->links() }}
                </li>

                @else 
                <li class="mb-0 w-full bg-blue-950 border border-gray-600 text-gray-400 p-8 gap-3 flex items-start justify-center flex-col sm:flex-row relative overflow-hidden">
                    No records.
                </li>
                
            @endif
        </x-content-box>

        <x-aside-container>
            <div class="hidden md:block">
                @include('includes.search-bar')
            </div>
            <x-aside-box name="New Cooments">
                @if (count($ideas_comments) >= 1)
                    @foreach ($ideas_comments as $i_comment)
                        @include('includes.comment-mini-card')
                    @endforeach
                    @else
                  
                    <div class="w-full flex justify-start items-center gap-6 h-6 border border-gray-600 p-4 text-gray-400">
                        No records.
                    </div>
                @endif
            </x-aside-box>
            
            <x-aside-box name="Last registered Students">
                @if (count($last_three_registered_users) >= 1)
                    @foreach ($last_three_registered_users as $last_users)
                        @include('includes.user-mini-card')
                    @endforeach
                    @else
                  
                    <div class="w-full flex justify-start items-center gap-6 h-6 border border-gray-600 p-4 text-gray-400">
                        No records.
                    </div>
                @endif
            </x-aside-box>
        </x-aside-container>
    </x-main-container>
    
@endsection
   