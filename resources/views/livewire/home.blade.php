<div>
    <h1 class="text-center text-4xl mt-5">
        {{ auth()->user()->FullName().' عزیز ، خوش آمدید' }}
    </h1>
    <div class="bg-gray-200 dark:bg-gray-800 mt-10 p-5 rounded">
        <h2 class="text-center text-3xl mb-5">
            آمار
        </h2>
        <hr>
        <div class="grid md:grid-cols-5 md:gap-6 mt-5">
            <div class="flex items-center flex-col bg-gray-300 dark:bg-gray-700 rounded p-5">
                <svg class="w-14 h-14 transition duration-75"
                    aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 18">
                    <path
                        d="M14 2a3.963 3.963 0 0 0-1.4.267 6.439 6.439 0 0 1-1.331 6.638A4 4 0 1 0 14 2Zm1 9h-1.264A6.957 6.957 0 0 1 15 15v2a2.97 2.97 0 0 1-.184 1H19a1 1 0 0 0 1-1v-1a5.006 5.006 0 0 0-5-5ZM6.5 9a4.5 4.5 0 1 0 0-9 4.5 4.5 0 0 0 0 9ZM8 10H5a5.006 5.006 0 0 0-5 5v2a1 1 0 0 0 1 1h11a1 1 0 0 0 1-1v-2a5.006 5.006 0 0 0-5-5Z"/>
                </svg>
                <h3 class="mt-2 text-xl">
                    کاربران
                </h3>
                <p class="mt-3 px-1 bg-gray-400 dark:bg-gray-600 rounded">
                    {{ $users }}
                </p>
            </div>
        </div>
        <div class="grid md:grid-cols-5 md:gap-6">

        </div>
    </div>
</div>
