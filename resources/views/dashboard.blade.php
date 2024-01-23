@extends('layouts.app')

@section('content')
    <main class="w-full flex justify-center pt-12">
        <div class="w-full lg:w-4/5 p-8 mt-6 lg:mt-0 text-gray-900 leading-normal bg-white border border-gray-400 border-rounded">
            
            @include('includes.success-message')
            
            @include('includes.submit-idea')

            <div class="flex flex-col gap-4">
                <hr>
                @if (count($ideas) > 0)
                    @foreach ($ideas as $idea)
        
                        @include('includes.idea-card-top')
                        
                    @endforeach

                    @else 
                   
                    No results found
                @endif
            </div>


            <div class="mt-4">
                {{ $ideas->links() }}
            </div>
        </div>
    </main>
@endsection
   