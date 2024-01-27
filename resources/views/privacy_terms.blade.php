@extends('layouts.app')

@section('content')

    <x-main-container class="pt-24 flex justify-center flex-col">
        <h1 class="font-semibold text-4xl text-indigo-400 w-full text-center">
            Privacy & Terms
        </h1>
        <x-content-box class="text-gray-200 pb-20">
            <li>
                <h2 class="mt-2 py-4 font-normal text-xl text-indigo-400">
                    General Information
                </h2>
                <p class="py-4">
                    All of our registered users information ( Name, Email, Phone Number and Address ) are secure to us. We are committed to taking care of all information and we are promised to our customers that we are never going to share their information with anyone.
                </p>
                <p>
                    Also, We do not store any credit card information in server, all payments are processed by world leading payment gateway PayPal and Paddle and our site is secured by SSL encryption.
                </p>
            </li>
            <li>
                <h2 class="mt-2 py-4 font-normal text-xl text-indigo-400">
                    What rights you have over your data
                </h2>
                <p>
                    If you have an account on this site, or have left comments, you can request to receive an exported file of the personal data we hold about you, including any data you have provided to us. You can also request that we erase any personal data we hold about you. This does not include any data we are obliged to keep for administrative, legal, or security purposes.                
                </p>
            </li>
        </x-content-box>
    </x-main-container>
    
@endsection
   