@extends('layouts.app')

@section('content')
    <main class="w-full flex justify-center pt-12">
        <div class="w-full lg:w-4/5 p-8 mt-6 lg:mt-0 text-gray-900 leading-normal bg-white border border-gray-400 border-rounded">

            <div class="flex flex-col gap-4">                
                @include('includes.success-message')

                @include('includes.idea-card-top')

                {{-- @include('includes.idea-card-bottom') --}}
                
            </div>
        </div>
    </main>
@endsection
   