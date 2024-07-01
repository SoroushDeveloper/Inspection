<div class="bg-gray-800 mx-5 rounded" style="margin-top: 50px; padding: 10px;">
    <div class="flex justify-center">
        <h1 class="text-center text-black dark:text-white text-3xl w-fit border-b-2 pb-5">
            ورود به سیستم
        </h1>
    </div>
    <br>
    <div class="flex justify-center items-center">
        <form class="max-w-sm mx-auto" wire:submit="save">
            <div class="mb-5">
                <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                    ایمیل
                </label>
                <input type="email" id="email" wire:model="form.email"
                       class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                       placeholder="email@sample.com" required/>
                @error('form.email') <span class="text-red-600">{{ $message }}</span> @enderror
            </div>
            <div class="mb-5">
                <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                    رمز عبور
                </label>
                <input type="password" id="password" wire:model="form.password"
                       class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                       required/>
                @error('form.password') <span class="text-red-600">{{ $message }}</span> @enderror
            </div>
            <div class="text-center">
                <button type="submit"
                        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    ورود
                </button>
            </div>
        </form>
    </div>
</div>
