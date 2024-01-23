<div class="flex flex-col items-center justify-center bg-gray-900">
    <!-- dark theme -->
    <div class="container  m-4">
        <div class="max-w-3xl w-full mx-auto grid gap-4 grid-cols-1">
            <!-- profile card -->
            <div class="flex flex-col sticky top-0 z-10">
                <div class="bg-gray-800 border border-gray-800 shadow-lg  rounded-2xl p-4">
                    <div class="flex-none sm:flex">
                        <div class=" relative h-32 w-32   sm:mb-0 mb-3">
                            <img src="{{ $user->getImageURL() }}" alt="{{ $user->name }}" class=" w-32 h-32 object-cover rounded-2xl">                     
                        </div>
                        <div class="flex-auto sm:ml-5 justify-evenly">
                            <div class="flex items-center justify-between sm:mt-2">
                                <form action="{{ route('users.update', $user->id) }}" method="POST" enctype="multipart/form-data" class="flex items-center">
                                    @csrf
                                    @method('PUT')
                                    <div class="flex flex-col">
                                        <div class="w-full flex-none text-lg text-gray-200 leading-none">
                                            <input type="text" name="name" value="{{ $user->name }}" class="w-full bg-gray-100 text-sm text-gray-800 transition border focus:outline-none focus:border-purple-500 rounded py-1 px-2 appearance-none leading-normal">
                                            @error('name')
                                                <span class="block mt-2 text-sm text-red-500">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="flex-auto text-gray-400 my-1">
                                            <input type="email" name="email" value="{{ $user->email }}" class="w-full bg-gray-100 text-sm text-gray-800 transition border focus:outline-none focus:border-purple-500 rounded py-1 px-2 appearance-none leading-normal">
                                            @error('email')
                                                <span class="block mt-2 text-sm text-red-500">{{ $message }}</span>
                                            @enderror
                                            <span class="mr-3 border-r border-gray-600  max-h-0"></span>
                                            <div class="mt-2 ">
                                                <label for="image">Profile Picture</label>

                                                <input type="file" name="image" id="image" class="w-full bg-gray-100 text-sm text-gray-800 transition border focus:outline-none focus:border-purple-500 rounded py-1 px-2 appearance-none leading-normal">
                                                @error('image')
                                                    <span class="block mt-2 text-sm text-red-500">{{ $message }}</span>
                                                @enderror
                                            </div>

                                            <span>Bio: 
                                                <textarea name="bio" rows="2" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500" placeholder="Bio...">{{ $user->bio }}</textarea>
                                            </span>
                                            @error('bio')
                                                <span class="block mt-2 text-sm text-red-500">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div>
                                            <button type="submit" class="mt-2 w-full px-5 py-2 text-sm tracking-wide text-white capitalize transition-colors duration-300 transform bg-blue-600 rounded-md sm:mx-2 sm:order-2 sm:w-auto hover:bg-blue-500 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-80">
                                                Save
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>