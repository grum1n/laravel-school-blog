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

            @include('includes.edit-idea-card')
        </x-content-box>
        <x-aside-container>
            @include('includes.search-bar')
        </x-aside-container>
       
    </x-main-container>
    
@endsection
   