<div class="mx-auto w-full max-w-[95%] xl:max-w-[800px] flex flex-col justify-center items-center border border-indigo-800 pb-4">
    <div
        class="flex w-full flex-col bg-cover max-w-[95%] xl:max-w-[800px]"
        style='background-image: url("https://raw.githubusercontent.com/horizon-ui/horizon-tailwind-react-ts-corporate/main/src/assets/img/nfts/NftBanner1.png");'
        >
        <div class="bg-gradient-to-r from-[#6c73ff] to-[#2b2d4e] border border-gray-800 shadow-lg p-4 opacity-80">
            <div class="flex-none sm:flex">
                <div class=" relative h-32 w-32   sm:mb-0 mb-3">
                    <img src="{{ asset('storage/' . $user->getImageURL()) }}" alt="{{ $user->name }}" class=" w-32 h-32 object-cover rounded-2xl">
                    @auth
                        @if (Auth::id() === $user->id)
                            <a href="{{ route('users.edit', $user->id) }}" title="Edit profile" class="absolute -right-2 bottom-2   -ml-3  text-white p-1 text-xs bg-green-400 hover:bg-green-500 font-medium tracking-wider rounded-full transition ease-in duration-300">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="h-4 w-4">
                                    <path d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z">
                                    </path>
                                </svg>
                            </a>
                        @endif
                    @endauth
                </div>
                <div class="flex-auto sm:ml-5 justify-evenly">
                    <div class="flex items-center justify-between sm:mt-2">
                        <div class="flex items-center">
                            <div class="flex flex-col">
                                <div class="w-full flex-none text-lg text-gray-200 font-semibold leading-none">
                                    {{ $user->name }}
                                </div>
                                <div class="flex flex-row items-center text-gray-50 my-1">
                                    <span class="mr-3 pr-4 border-r border-gray-50"> {{ $user->bio }}</span>
                                    <div class="flex justify-center items-center space-x-2">
                                        <a hre="https://www.linkedin.com/in/ajeeshmon" target="_blank">
                                            <svg class="cursor-pointer w-5 h-5 p-1  rounded-2xl hover:bg-blue-500 hover:text-white transition ease-in duration-300" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="30" height="30" viewBox="0 0 172 172" style=" fill:#ffffff;">
                                                <g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal">
                                                    <path d="M0,172v-172h172v172z" fill="none"></path>
                                                    <g fill="#ffffff">
                                                        <path d="M51.6,143.33333h-28.66667v-86h28.66667zM37.2724,45.86667c-7.9292,0 -14.33907,-6.42707 -14.33907,-14.33907c0,-7.912 6.42133,-14.3276 14.33907,-14.3276c7.90053,0 14.3276,6.42707 14.3276,14.3276c0,7.912 -6.42707,14.33907 -14.3276,14.33907zM154.8,143.33333h-27.56013v-41.85333c0,-9.98173 -0.1892,-22.81867 -14.3276,-22.81867c-14.35053,0 -16.55787,10.8704 -16.55787,22.09627v42.57573h-27.5544v-86.06307h26.4536v11.75907h0.37267c3.6808,-6.76533 12.6764,-13.8976 26.0924,-13.8976c27.92133,0 33.08133,17.82493 33.08133,40.99907z"></path>
                                                    </g>
                                                </g>
                                            </svg>
                                        </a>
                                        <a hre="https://twitter.com/ajeemon?lang=en" target="_blank"><svg class="cursor-pointer w-5 h-5 p-1  rounded-2xl hover:bg-blue-400 hover:text-white transition ease-in duration-300" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="24" height="24" viewBox="0 0 172 172" style=" fill:#ffffff;">
                                            <g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal">
                                                <path d="M0,172v-172h172v172z" fill="none"></path>
                                                <g fill="#ffffff">
                                                <path d="M155.04367,28.88883c-5.84083,2.75917 -15.781,7.9335 -20.77617,8.9225c-0.1935,0.05017 -0.35117,0.11467 -0.5375,0.16483c-5.8265,-5.74767 -13.81017,-9.3095 -22.64667,-9.3095c-17.80917,0 -32.25,14.44083 -32.25,32.25c0,0.93883 -0.07883,2.666 0,3.58333c-23.06233,0 -39.904,-12.03283 -52.51017,-27.4985c-1.68417,-2.07833 -3.47583,-0.99617 -3.8485,0.48017c-0.8385,3.33967 -1.12517,8.9225 -1.12517,12.90717c0,10.0405 7.8475,19.90183 20.06667,26.015c-2.25033,0.5805 -4.73,0.99617 -7.31,0.99617c-3.03867,0 -6.536,-0.7955 -9.59617,-2.40083c-1.13233,-0.59483 -3.57617,-0.43 -2.85233,2.46533c2.9025,11.60283 16.1465,19.75133 27.97867,22.1235c-2.6875,1.58383 -8.42083,1.26133 -11.05817,1.26133c-0.97467,0 -4.3645,-0.22933 -6.5575,-0.50167c-1.9995,-0.24367 -5.074,0.27233 -2.50117,4.171c5.5255,8.3635 18.02417,13.61667 28.78133,13.81733c-9.90433,7.76867 -26.101,10.60667 -41.61683,10.60667c-3.139,-0.07167 -2.98133,3.5045 -0.4515,4.83033c11.44517,6.00567 30.19317,9.56033 43.58767,9.56033c53.24833,0 83.51317,-40.58483 83.51317,-78.8405c0,-0.61633 -0.01433,-1.90633 -0.03583,-3.2035c0,-0.129 0.03583,-0.25083 0.03583,-0.37983c0,-0.1935 -0.05733,-0.37983 -0.05733,-0.57333c-0.0215,-0.97467 -0.043,-1.88483 -0.0645,-2.35783c4.22117,-3.04583 10.6855,-8.33483 13.9535,-12.384c1.11083,-1.376 0.215,-3.04583 -1.29717,-2.52267c-3.8915,1.3545 -10.621,3.9775 -14.835,4.47917c8.43517,-5.58283 12.60617,-10.44183 16.1895,-15.83833c1.2255,-1.84183 -0.30817,-3.71233 -2.17867,-2.82367z"></path>
                                                </g>
                                            </g>
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-row items-center">
                        <div class="flex">
                            @php
                                $random_number = rand(1,5);
                                $fixed_number = 5;
                            @endphp
                            
                            @for ($i = 0; $i < $random_number; $i++)
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill h-5 w-5 text-yellow-300" viewBox="0 0 16 16">
                                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                                </svg>
                            @endfor

                            @if ($random_number >= 1 && $random_number < 5)
                                @for ($i = 0; $i < $fixed_number - $random_number; $i++)
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star h-5 w-5 text-yellow-300" viewBox="0 0 16 16">
                                        <path d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.56.56 0 0 0-.163-.505L1.71 6.745l4.052-.576a.53.53 0 0 0 .393-.288L8 2.223l1.847 3.658a.53.53 0 0 0 .393.288l4.052.575-2.906 2.77a.56.56 0 0 0-.163.506l.694 3.957-3.686-1.894a.5.5 0 0 0-.461 0z"/>
                                    </svg>
                                @endfor
                            @endif
                        
                        </div>
                    </div>
                    <div class="flex pt-2  text-sm text-gray-50">
                        <div class="flex-1 inline-flex items-center">
                            <a href="{{ route('login') }}" class="flex items-center gap-2">
                                @if($user->likes()->count() >= 1)
                                    <div class="inline-flex w-4 h-4">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#2e1065" class="bi bi-heart-fill  relative w-4 h-4 object-cover rounded-2xl" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314"/>
                                        </svg>
                                        <span class="animate-ping absolute w-4 h-4 inline-flex border-2 rounded-2xl border-indigo-300 opacity-75"></span>
                                    </div>
                                    @else
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#134e4a" class="bi bi-heart-fill" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314"/>
                                    </svg>
                                @endif

                                <span>{{ $user->likes()->count() }}</span>
                            </a> 
                        </div>
                       
                        @auth
                            @if (Auth::id() !== $user->id)
                                @if (Auth::user()->follows($user))

                                    <form action="{{ route('users.unfollow', $user->id) }}" method="POST">
                                        @csrf
                                        <button type="submit" class="flex-no-shrink bg-purple-800 hover:bg-purple-900 px-5 ml-4 py-2 text-xs shadow-sm hover:shadow-lg font-medium tracking-wider border-2 border-purple-300 hover:border-purple-500 text-white rounded-full transition ease-in duration-300">UNFOLLOW</button>
                                    </form>

                                    @else

                                    <form action="{{ route('users.follow', $user->id) }}" method="POST">
                                        @csrf
                                        <button type="submit" class="flex-no-shrink bg-indigo-400 hover:bg-indigo-500 px-5 ml-4 py-2 text-xs shadow-sm hover:shadow-lg font-medium tracking-wider border-2 border-indigo-300 hover:border-indigo-500 text-white rounded-full transition ease-in duration-300">FOLLOW</button>
                                    </form>
                                    
                                @endif
                            @endif
                        @endauth
                    </div>
                </div>
            </div>
        </div>
    </div>
  
    <div class="w-full mx-auto grid gap-4 grid-cols-1 mt-4 px-4">
        <div class="grid grid-cols-12 gap-4 ">
            <div class="col-span-12 sm:col-span-4 ">
                <div class="p-4 relative border border-indigo-500 shadow-lg  rounded-md">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chat-square-text h-14 w-14  absolute bottom-4 right-3 text-indigo-400" viewBox="0 0 16 16">
                        <path d="M14 1a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1h-2.5a2 2 0 0 0-1.6.8L8 14.333 6.1 11.8a2 2 0 0 0-1.6-.8H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1zM2 0a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h2.5a1 1 0 0 1 .8.4l1.9 2.533a1 1 0 0 0 1.6 0l1.9-2.533a1 1 0 0 1 .8-.4H14a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2z"/>
                        <path d="M3 3.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5M3 6a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9A.5.5 0 0 1 3 6m0 2.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5"/>
                    </svg>
                    <div class="text-2xl text-gray-100 font-medium leading-8 mt-2">{{ $user->ideas()->count() }}</div>
                    <div class="text-sm text-gray-500">Ideas</div>
                </div>
            </div>
            <div class="col-span-12 sm:col-span-4">
                <div class="p-4 relative border border-indigo-500 shadow-lg  rounded-md">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chat-left-dots h-14 w-14 absolute bottom-4 right-3 text-blue-500" viewBox="0 0 16 16">
                        <path d="M14 1a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H4.414A2 2 0 0 0 3 11.586l-2 2V2a1 1 0 0 1 1-1zM2 0a2 2 0 0 0-2 2v12.793a.5.5 0 0 0 .854.353l2.853-2.853A1 1 0 0 1 4.414 12H14a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2z"/>
                        <path d="M5 6a1 1 0 1 1-2 0 1 1 0 0 1 2 0m4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0m4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0"/>
                    </svg>
                    <div class="text-2xl text-gray-100 font-medium leading-8 mt-2">{{ $user->comments()->count() }}</div>
                    <div class="text-sm text-gray-500">Comments</div>
                </div>
            </div>
            <div class="col-span-12 sm:col-span-4">
                <div class="p-4 relative border border-indigo-500 shadow-lg  rounded-md">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-14 w-14  absolute bottom-4 right-3 text-yellow-300" viewBox="0 0 20 20" fill="currentColor">
                        <path d="M8 9a3 3 0 100-6 3 3 0 000 6zM8 11a6 6 0 016 6H2a6 6 0 016-6zM16 7a1 1 0 10-2 0v1h-1a1 1 0 100 2h1v1a1 1 0 102 0v-1h1a1 1 0 100-2h-1V7z">
                        </path>
                    </svg>
                    <div class="text-2xl text-gray-100 font-medium leading-8 mt-2">{{ $user->followers()->count() }}</div>
                    <div class="text-sm text-gray-500">Followers</div>
                </div>
            </div>
        </div>
    </div>

    @auth
        @if (Auth::id() === $user->id)
            <div class="w-full pt-4 px-4 ">
                <div class="flex items-center justify-between border border-indigo-500 shadow-md hover:shodow-lg rounded-md p-4">
                    <div class="flex items-center">
                        <div class="flex flex-col">
                            <div class="font-medium leading-none text-gray-100">Delete Your Acccount?</div>
                            <p class="text-sm text-gray-500 leading-none mt-1">By deleting your account.</p>
                        </div>
                    </div>
                    <button class="flex-no-shrink text-xs  font-medium tracking-wider  text-red-400 hover:text-red-600 transition ease-in duration-300" onclick="return confirm('Confirm to delete?')">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd" />
                        </svg>
                    </button>
                </div>
            </div>
        @endif
    @endauth
</div>