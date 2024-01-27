@extends('layouts.app')

@section('content')

    <section class="bg-cover w-full h-full" style="background-image: url(https://images.unsplash.com/photo-1616763355603-9755a640a287?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80)">
        <div class="w-full h-full bg-gray-900 bg-opacity-90">
            <div class="mx-auto w-full lg:w-4/5 px-4 py-28 mt-0 text-gray-900 leading-normal border-rounded flex items-center justify-center">
                <div x-data="{ open: true }" class="max-w-md w-full p-4 bg-white rounded-lg shadow-lg">
                    <h1 class="text-2xl font-semibold text-center text-gray-500 mt-2 mb-6">Register</h1>
                    <form action="{{ route('register') }}" method="POST">
                        @csrf
                        <div class="mb-4">
                            <label for="name" class="block mb-2 text-sm text-gray-600">Name</label>
                            <input type="text" id="name" name="name" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500">
                            @error('name')
                                <span class="block mt-2 text-sm text-red-500">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-4">
                            <label for="email" class="block mb-2 text-sm text-gray-600">Email</label>
                            <input type="email" id="email" name="email" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500">
                            @error('email')
                                <span class="block mt-2 text-sm text-red-500">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-4">
                            <label for="password" class="block mb-2 text-sm text-gray-600">Password</label>
                            <input type="password" id="password" name="password" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500">
                            @error('password')
                                <span class="block mt-2 text-sm text-red-500">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-4">
                            <label for="password_confirmation" class="block mb-2 text-sm text-gray-600">Confirm password</label>
                            <input type="password" id="password_confirmation" name="password_confirmation" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500">
                            @error('password_confirmation')
                                <span class="block mt-2 text-sm text-red-500">{{ $message }}</span>
                            @enderror
                        </div>
                        
                        <button type="submit" x-on:click="open = ! open" x-show="open" class="w-32 bg-gradient-to-r from-indigo-800 to-indigo-600 text-white py-2 rounded-lg mx-auto block focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 mb-2">
                            Register
                        </button>
                    </form>
                    <div class="text-center">
                        <p class="text-sm"><a href="{{ route('login') }}" class="text-indigo-600">Login here</a></p>
                    </div>
                </div>
            </div>
        </div>     
    </section>
    
@endsection