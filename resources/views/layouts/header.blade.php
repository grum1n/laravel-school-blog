<header 
    class="fixed top-0 w-full py-6 z-50"
    id="header"
    >
    <x-nav-container>
        <x-nav-logo />
        <x-nav-ul-container class="space-x-2 md:space-x-8">            
            @guest
                <x-nav-link href="{{ route('login') }}" name="Login" class="{{ Request::is('login') ? 'text-indigo-400 underline' : 'text-gray-300 hover:text-gray-50 hover:underline' }}"/>
                <li>
                    <x-nav-button 
                        href="{{ route('register') }}" 
                        name="{{ Route::is('register') ? 'Regiter Now !' : 'Join Community' }} " 
                        class="{{ Route::is('register') ? 'bg-green-500 hover:bg-green-600 ' : ' bg-indigo-500 hover:bg-indigo-600' }}"
                        /> 
                </li>
            @endguest

            @auth
                <x-nav-link href="{{ route('feed') }}" name="Feed" class="{{ Request::is('feed') ? 'text-indigo-400 underline' : 'text-gray-300 hover:text-gray-50 hover:underline' }}"/>
                <x-nav-link href="{{ route('profile') }}" name="{{ Auth::user()->email }}" class="{{ Request::is('profile') ? 'text-indigo-400 underline' : 'text-gray-300 hover:text-gray-50 hover:underline' }}"/>
                <li>
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button type="submit" title="Logout" class=" bg-red-500 hover:bg-red-600  w-9 flex justify-center items-center px-1 py-2 rounded-full font-semibold text-white cursor-pointer">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-right" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0z"/>
                                <path fill-rule="evenodd" d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708z"/>
                            </svg>
                        </button>
                    </form>
                </li>
            @endauth
        </x-nav-ul-container>   
    </x-nav-container>
</header>