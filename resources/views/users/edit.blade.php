@extends('layouts.app')

@section('content')
    <x-main-container class="pt-24 flex justify-center">
        <div class="mx-auto w-full xl:max-w-[835px] flex flex-col gap-4">
            <x-content-box>
                <li class="flex flex-col gap-4">                
                    @include('includes.edit-user-profile')
                    
                </li>
            </x-content-box>
        </div>
    </x-main-container>
@endsection
   