<div class="js-cookie-consent cookie-consent fixed bottom-0 inset-x-0 pb-2">
    <div class="max-w-7xl mx-auto px-4">
        <div class="p-2 rounded-lg bg-indigo-100">
            <div class="flex items-center justify-between flex-wrap">
                <div class="flex-1 items-center md:inline">
                    <p class="ml-3 text-black cookie-consent__message">
                        {!! trans('cookie-consent::texts.message') !!}
                       <a href="{{ url('privacy_terms') }}" class="font-semibold text-indigo-800 hover:text-indigo-900 underline">Privacy & Terms</a>
                    </p>
                </div>
                <div class="mt-4 md:mt-2 flex-shrink-0 w-full sm:mt-0 sm:w-auto">
                    <button class="js-cookie-consent-agree cookie-consent__agree mx-auto w-40 flex justify-center items-center px-5 py-2 rounded-full cursor-pointer font-medium text-gray-100 bg-indigo-500 hover:bg-indigo-600">
                        {{ trans('cookie-consent::texts.agree') }}
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
