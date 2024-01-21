@extends('layouts.app')

@section('content')
    <main>
        <div class="container w-full flex flex-wrap mx-auto px-2 pt-8 lg:pt-16 mt-16">

            @include('layouts.partials.sidebar')

            <div class="w-full lg:w-4/5 p-8 mt-6 lg:mt-0 text-gray-900 leading-normal bg-white border border-gray-400 border-rounded">
                
                @include('includes.success-message')

                @include('includes.idea-card')
                
            </div>
        </div>
    </main>
@endsection
   