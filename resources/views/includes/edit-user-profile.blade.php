<div class="mx-auto w-full max-w-[95%] xl:max-w-[800px] flex flex-col justify-center items-center border border-indigo-800 pb-4">
    <div
        class="flex w-full flex-col bg-cover max-w-[95%] xl:max-w-[800px]"
        style='background-image: url("https://raw.githubusercontent.com/horizon-ui/horizon-tailwind-react-ts-corporate/main/src/assets/img/nfts/NftBanner1.png");'
        >
        <div class="bg-gradient-to-r from-[#6c73ff] to-[#2b2d4e] border border-gray-800 shadow-lg p-4 opacity-80">
            <div class="flex-none sm:flex">
                <div class=" relative h-32 w-32   sm:mb-0 mb-3">
                    <img src="{{ $user->getImageURL() }}" alt="{{ $user->name }}" class=" w-32 h-32 object-cover rounded-2xl">
                </div>
            </div>
        </div>
    </div>

    @auth
        @if (Auth::id() === $user->id)
            <div x-data="{ open: true }" class="w-full pt-4 px-4 ">
                <form action="{{ route('users.update', $user->id) }}" enctype="multipart/form-data" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="mb-4">
                        <label for="name" class="block mb-2 text-sm text-indigo-300">Name</label>
                        <input type="text" id="name" name="name" value="{{ $user->name }}" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500">
                        @error('name')
                            <span class="block mt-2 text-sm text-red-500">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <label for="email" class="block mb-2 text-sm text-indigo-300">Email</label>
                        <input type="email" id="email" name="email" value="{{ $user->email }}"class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500">
                        @error('password')
                            <span class="block mt-2 text-sm text-red-500">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label for="bio" class="block mb-2 text-sm text-indigo-300">Bio</label>
                        <textarea name="bio" rows="2" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500"" placeholder="Bio...">{{ $user->bio }}</textarea>
                        @error('bio')
                            <span class="block mt-2 text-sm text-red-500">{{ $message }}</span>
                        @enderror
                    </div>

                    <div x-data="{ images: [] }">
                        <div class="mb-4 editor mx-auto w-full min-h-[320px] flex flex-col text-indigo-800 border border-dashed border-indigo-500 relative rounded-lg p-4 shadow-lg">
                            <!-- icons -->
                            <div class="icons flex text-indigo-300 m-2">
                                <label id="select-image">
                                    <svg class="mr-2 cursor-pointer hover:text-indigo-500 border rounded-full p-1 h-7" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.172 7l-6.586 6.586a2 2 0 102.828 2.828l6.414-6.586a4 4 0 00-5.656-5.656l-6.415 6.585a6 6 0 108.486 8.486L20.5 13" />
                                    </svg>
                                   <input hidden type="file" name="image" id="image" @change="images = Array.from($event.target.files).map(file => ({url: URL.createObjectURL(file), name: file.name, preview: ['jpg', 'jpeg', 'png', 'gif'].includes(file.name.split('.').pop().toLowerCase()), size: file.size > 1024 ? file.size > 1048576 ? Math.round(file.size / 1048576) + 'mb' : Math.round(file.size / 1024) + 'kb' : file.size + 'b'}))" x-ref="fileInput">
                
                                </label>
                                <div class="count ml-auto text-indigo-400 text-xs font-semibold">0/300</div>
                            </div>
                
                            <!-- Preview image here -->
                            <div id="preview" class="my-4 flex">
                                <template x-for="(image, index) in images" :key="index">
                                    <div class="relative w-32 h-32 object-cover rounded ">
                                        <div x-show="image.preview" class="relative w-32 h-32 object-cover rounded">
                                            <img :src="image.url" class="w-32 h-32 object-cover rounded">
                                            <button 
                                                @click="images.splice(index, 1)" 
                                                class="w-6 h-6 absolute text-center flex items-center top-0 right-0 m-2 text-white text-lg bg-red-500 hover:text-red-700 hover:bg-gray-100 rounded-full p-1">
                                                    <span class="mx-auto">×</span>
                                            </button>
                                            <div x-text="image.size" class="text-xs text-center p-2 text-indigo-300"></div>
                                            <div x-text="image.name" class="text-xs text-center p-2 text-indigo-300"></div>
                                        </div>
                                        <div x-show="!image.preview" class="relative w-32 h-32 object-cover rounded">
                                            <svg class="fill-current  w-32 h-32 ml-auto pt-1" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                                <path d="M15 2v5h5v15h-16v-20h11zm1-2h-14v24h20v-18l-6-6z" />
                                            </svg>
                                            <button @click="images.splice(index, 1)" class="w-6 h-6 absolute text-center flex items-center top-0 right-0 m-2 text-white text-lg bg-red-500 hover:text-red-700 hover:bg-gray-100 rounded-full p-1"><span class="mx-auto">×</span></button>
                                            <div x-text="image.size" class="text-xs text-center p-2"></div>
                                        </div>
                                    </div>
                                </template>
                            </div>
                          
                        </div>
                        @error('image')
                            <span class="block mt-2 text-sm text-red-500">{{ $message }}</span>
                        @enderror
                    </div>
                    
                    <button type="submit" x-on:click="open = ! open" x-show="open" class="w-32 bg-gradient-to-r from-indigo-800 to-indigo-600 hover:bg-indigo-900 text-white hover:text-gray-300 py-2 rounded-lg mx-auto block focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-800 mb-2">
                        Update
                    </button>
                </form>
            </div>
        @endif
    @endauth
</div>
