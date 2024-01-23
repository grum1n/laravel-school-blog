@extends('layouts.app')

@section('content')
    <main class="w-full flex justify-center pt-12">
        <div class="w-full lg:w-4/5 p-4 mt-6 lg:mt-0 text-gray-900 leading-normal bg-white border border-gray-400 border-rounded">
            
            @include('includes.success-message')
           

            <div class="min-h-screen flex items-center justify-center">
                <div class="max-w-md w-full p-4 bg-white rounded-lg shadow-lg">
                    <h1 class="text-2xl font-semibold text-center text-gray-500 mt-8 mb-6">Login</h1>
                    <form action="{{ route('login') }}" method="POST">
                        @csrf
                       
                        <div class="mb-4">
                            <label for="email" class="block mb-2 text-sm text-gray-600">Email</label>
                            <input type="email" id="email" name="email" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-cyan-500">
                            @error('email')
                                <span class="block mt-2 text-sm text-red-500">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-4">
                            <label for="password" class="block mb-2 text-sm text-gray-600">Password</label>
                            <input type="password" id="password" name="password" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-cyan-500">
                            @error('password')
                                <span class="block mt-2 text-sm text-red-500">{{ $message }}</span>
                            @enderror
                        </div>
                        
                        <button type="submit" class="w-32 bg-gradient-to-r from-cyan-400 to-cyan-600 text-white py-2 rounded-lg mx-auto block focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-cyan-500 mb-2">
                            Login
                        </button>
                    </form>
                    <div class="text-center">
                        <p class="text-sm"><a href="{{ route('register') }}" class="text-cyan-600">Register here</a></p>
                    </div>
                </div>
              </div>


           
        </div>
    </main>
@endsection