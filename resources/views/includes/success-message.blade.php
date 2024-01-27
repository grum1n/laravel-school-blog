@if (session()->has('success'))
    <div 
        x-cloak
        x-show="showAlert"
        x-data="{ showAlert: true }"
        x-init="setTimeout(() => showAlert = false, 3000)"
        role="alert"
        class="fixed bottom-[135px] lg:bottom-20 right-3 flex flex-col justify-center p-4 bg-green-600 border-green-800 shadow-md hover:shodow-lg rounded-2xl z-50">
        <div class=" text-gray-100 flex items-center gap-8">
            <p> 
                {{ session('success') }}
            </p>
            <button type="button" class="ml-auto text-xs  font-medium tracking-wider  text-gray-400 text-gray-400 hover:text-green-400 transition ease-in duration-300"><svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
            <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
            </svg></button>
        </div>
    </div>
@endif