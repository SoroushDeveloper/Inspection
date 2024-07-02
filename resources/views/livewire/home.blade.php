<div>
    <h1 class="text-center text-4xl mt-5">
        {{ auth()->user()->FullName().' عزیز ، خوش آمدید' }}
    </h1>
    <div class="bg-gray-200 dark:bg-gray-800 mt-10 p-5 rounded">
        <h2 class="text-center text-3xl mb-5">
            دسترسی سریع و آمار
        </h2>
        <hr>
        <div class="grid md:grid-cols-5 md:gap-6 mt-5">
            @if(auth()->user()->isAdmin())
                <div class="flex items-center flex-col bg-gray-300 dark:bg-gray-700 rounded pt-5 pb-3 hover:shadow-2xl">
                    <svg class="w-14 h-14 transition duration-75"
                         aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 18">
                        <path
                            d="M14 2a3.963 3.963 0 0 0-1.4.267 6.439 6.439 0 0 1-1.331 6.638A4 4 0 1 0 14 2Zm1 9h-1.264A6.957 6.957 0 0 1 15 15v2a2.97 2.97 0 0 1-.184 1H19a1 1 0 0 0 1-1v-1a5.006 5.006 0 0 0-5-5ZM6.5 9a4.5 4.5 0 1 0 0-9 4.5 4.5 0 0 0 0 9ZM8 10H5a5.006 5.006 0 0 0-5 5v2a1 1 0 0 0 1 1h11a1 1 0 0 0 1-1v-2a5.006 5.006 0 0 0-5-5Z"/>
                    </svg>
                    <a class="mt-2 text-xl hover:underline" href="{{ route('Users') }}">
                        کاربران
                    </a>
                    <span
                        class="inline-flex items-center justify-center w-4 h-4 text-xs font-semibold text-blue-800 bg-blue-200 rounded-full mt-2">
                    {{ $count['users'] }}
                </span>
                </div>
            @endif
            <div class="flex items-center flex-col bg-gray-300 dark:bg-gray-700 rounded pt-5 pb-3 hover:shadow-2xl">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                     class="bi bi-binoculars-fill w-14 h-14" viewBox="0 0 16 16">
                    <path
                        d="M4.5 1A1.5 1.5 0 0 0 3 2.5V3h4v-.5A1.5 1.5 0 0 0 5.5 1zM7 4v1h2V4h4v.882a.5.5 0 0 0 .276.447l.895.447A1.5 1.5 0 0 1 15 7.118V13H9v-1.5a.5.5 0 0 1 .146-.354l.854-.853V9.5a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5v.793l.854.853A.5.5 0 0 1 7 11.5V13H1V7.118a1.5 1.5 0 0 1 .83-1.342l.894-.447A.5.5 0 0 0 3 4.882V4zM1 14v.5A1.5 1.5 0 0 0 2.5 16h3A1.5 1.5 0 0 0 7 14.5V14zm8 0v.5a1.5 1.5 0 0 0 1.5 1.5h3a1.5 1.5 0 0 0 1.5-1.5V14zm4-11H9v-.5A1.5 1.5 0 0 1 10.5 1h1A1.5 1.5 0 0 1 13 2.5z"/>
                </svg>
                <a class="mt-2 text-xl hover:underline" href="{{ route('Inspections') }}">
                    بازرسی ها
                </a>
                <span
                    class="inline-flex items-center justify-center w-4 h-4 text-xs font-semibold text-blue-800 bg-blue-200 rounded-full mt-2">
                    {{ $count['inspections'] }}
                </span>
            </div>
            <div class="flex items-center flex-col bg-gray-300 dark:bg-gray-700 rounded pt-5 pb-3 hover:shadow-2xl">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                     class="bi bi-buildings-fill w-14 h-14 transition duration-75" viewBox="0 0 16 16">
                    <path
                        d="M15 .5a.5.5 0 0 0-.724-.447l-8 4A.5.5 0 0 0 6 4.5v3.14L.342 9.526A.5.5 0 0 0 0 10v5.5a.5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5V14h1v1.5a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5zM2 11h1v1H2zm2 0h1v1H4zm-1 2v1H2v-1zm1 0h1v1H4zm9-10v1h-1V3zM8 5h1v1H8zm1 2v1H8V7zM8 9h1v1H8zm2 0h1v1h-1zm-1 2v1H8v-1zm1 0h1v1h-1zm3-2v1h-1V9zm-1 2h1v1h-1zm-2-4h1v1h-1zm3 0v1h-1V7zm-2-2v1h-1V5zm1 0h1v1h-1z"/>
                </svg>
                <a class="mt-2 text-xl hover:underline" href="{{ route('Institutions') }}">
                    آموزشگاه ها
                </a>
                <span
                    class="inline-flex items-center justify-center w-4 h-4 text-xs font-semibold text-blue-800 bg-blue-200 rounded-full mt-2">
                    {{ $count['institutions'] }}
                </span>
            </div>
            <div class="flex items-center flex-col bg-gray-300 dark:bg-gray-700 rounded pt-5 pb-3 hover:shadow-2xl">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                     class="bi bi-map-fill w-14 h-14 transition duration-75" viewBox="0 0 16 16">
                    <path fill-rule="evenodd"
                          d="M16 .5a.5.5 0 0 0-.598-.49L10.5.99 5.598.01a.5.5 0 0 0-.196 0l-5 1A.5.5 0 0 0 0 1.5v14a.5.5 0 0 0 .598.49l4.902-.98 4.902.98a.5.5 0 0 0 .196 0l5-1A.5.5 0 0 0 16 14.5zM5 14.09V1.11l.5-.1.5.1v12.98l-.402-.08a.5.5 0 0 0-.196 0zm5 .8V1.91l.402.08a.5.5 0 0 0 .196 0L11 1.91v12.98l-.5.1z"/>
                </svg>
                <a class="mt-2 text-xl hover:underline" href="{{ route('States') }}">
                    مناطق
                </a>
                <span
                    class="inline-flex items-center justify-center w-4 h-4 text-xs font-semibold text-blue-800 bg-blue-200 rounded-full mt-2">
                    {{ $count['states'] }}
                </span>
            </div>
            <div class="flex items-center flex-col bg-gray-300 dark:bg-gray-700 rounded pt-5 pb-3 hover:shadow-2xl">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                     class="bi bi-mortarboard-fill w-14 h-14 transition duration-75" viewBox="0 0 16 16">
                    <path
                        d="M8.211 2.047a.5.5 0 0 0-.422 0l-7.5 3.5a.5.5 0 0 0 .025.917l7.5 3a.5.5 0 0 0 .372 0L14 7.14V13a1 1 0 0 0-1 1v2h3v-2a1 1 0 0 0-1-1V6.739l.686-.275a.5.5 0 0 0 .025-.917z"/>
                    <path
                        d="M4.176 9.032a.5.5 0 0 0-.656.327l-.5 1.7a.5.5 0 0 0 .294.605l4.5 1.8a.5.5 0 0 0 .372 0l4.5-1.8a.5.5 0 0 0 .294-.605l-.5-1.7a.5.5 0 0 0-.656-.327L8 10.466z"/>
                </svg>
                <a class="mt-2 text-xl hover:underline" href="{{ route('Majors') }}">
                    رشته های تحصیلی
                </a>
                <span
                    class="inline-flex items-center justify-center w-4 h-4 text-xs font-semibold text-blue-800 bg-blue-200 rounded-full mt-2">
                    {{ $count['majors'] }}
                </span>
            </div>
        </div>
        <div class="grid md:grid-cols-5 md:gap-6 mt-5">
            <div class="flex items-center flex-col bg-gray-300 dark:bg-gray-700 rounded pt-5 pb-3 hover:shadow-2xl">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                     class="bi bi-spellcheck w-14 h-14 transition duration-75" viewBox="0 0 16 16">
                    <path
                        d="M8.217 11.068c1.216 0 1.948-.869 1.948-2.31v-.702c0-1.44-.727-2.305-1.929-2.305-.742 0-1.328.347-1.499.889h-.063V3.983h-1.29V11h1.27v-.791h.064c.21.532.776.86 1.499.86zm-.43-1.025c-.66 0-1.113-.518-1.113-1.28V8.12c0-.825.42-1.343 1.098-1.343.684 0 1.075.518 1.075 1.416v.45c0 .888-.386 1.401-1.06 1.401zm-5.583 1.035c.767 0 1.201-.356 1.406-.737h.059V11h1.216V7.519c0-1.314-.947-1.783-2.11-1.783C1.355 5.736.75 6.42.69 7.27h1.216c.064-.323.313-.552.84-.552s.864.249.864.771v.464H2.346C1.145 7.953.5 8.568.5 9.496c0 .977.693 1.582 1.704 1.582m.42-.947c-.44 0-.845-.235-.845-.718 0-.395.269-.684.84-.684h.991v.538c0 .503-.444.864-.986.864m8.897.567c-.577-.4-.9-1.088-.9-1.983v-.65c0-1.42.894-2.338 2.305-2.338 1.352 0 2.119.82 2.139 1.806h-1.187c-.04-.351-.283-.776-.918-.776-.674 0-1.045.517-1.045 1.328v.625c0 .468.121.834.343 1.067z"/>
                    <path
                        d="M14.469 9.414a.75.75 0 0 1 .117 1.055l-4 5a.75.75 0 0 1-1.116.061l-2.5-2.5a.75.75 0 1 1 1.06-1.06l1.908 1.907 3.476-4.346a.75.75 0 0 1 1.055-.117"/>
                </svg>
                <a class="mt-2 text-xl hover:underline" href="{{ route('Types') }}">
                    انواع واحد های آموزشی
                </a>
                <span
                    class="inline-flex items-center justify-center w-4 h-4 text-xs font-semibold text-blue-800 bg-blue-200 rounded-full mt-2">
                    {{ $count['types'] }}
                </span>
            </div>
            <div class="flex items-center flex-col bg-gray-300 dark:bg-gray-700 rounded pt-5 pb-3 hover:shadow-2xl">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                     class="bi bi-tools w-14 h-14 transition duration-75"
                     viewBox="0 0 16 16">
                    <path
                        d="M1 0 0 1l2.2 3.081a1 1 0 0 0 .815.419h.07a1 1 0 0 1 .708.293l2.675 2.675-2.617 2.654A3.003 3.003 0 0 0 0 13a3 3 0 1 0 5.878-.851l2.654-2.617.968.968-.305.914a1 1 0 0 0 .242 1.023l3.27 3.27a.997.997 0 0 0 1.414 0l1.586-1.586a.997.997 0 0 0 0-1.414l-3.27-3.27a1 1 0 0 0-1.023-.242L10.5 9.5l-.96-.96 2.68-2.643A3.005 3.005 0 0 0 16 3q0-.405-.102-.777l-2.14 2.141L12 4l-.364-1.757L13.777.102a3 3 0 0 0-3.675 3.68L7.462 6.46 4.793 3.793a1 1 0 0 1-.293-.707v-.071a1 1 0 0 0-.419-.814zm9.646 10.646a.5.5 0 0 1 .708 0l2.914 2.915a.5.5 0 0 1-.707.707l-2.915-2.914a.5.5 0 0 1 0-.708M3 11l.471.242.529.026.287.445.445.287.026.529L5 13l-.242.471-.026.529-.445.287-.287.445-.529.026L3 15l-.471-.242L2 14.732l-.287-.445L1.268 14l-.026-.529L1 13l.242-.471.026-.529.445-.287.287-.445.529-.026z"/>
                </svg>
                <a class="mt-2 text-xl hover:underline" href="{{ route('Properties') }}">
                    ویژگی های فنی
                </a>
                <span
                    class="inline-flex items-center justify-center w-4 h-4 text-xs font-semibold text-blue-800 bg-blue-200 rounded-full mt-2">
                    {{ $count['properties'] }}
                </span>
            </div>
            <div class="flex items-center flex-col bg-gray-300 dark:bg-gray-700 rounded pt-5 pb-3 hover:shadow-2xl">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                     class="bi bi-card-checklist w-14 h-14 transition duration-75" viewBox="0 0 16 16">
                    <path
                        d="M14.5 3a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5zm-13-1A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2z"/>
                    <path
                        d="M7 5.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5m-1.496-.854a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0l-.5-.5a.5.5 0 1 1 .708-.708l.146.147 1.146-1.147a.5.5 0 0 1 .708 0M7 9.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5m-1.496-.854a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0l-.5-.5a.5.5 0 0 1 .708-.708l.146.147 1.146-1.147a.5.5 0 0 1 .708 0"/>
                </svg>
                <a class="mt-2 text-xl hover:underline" href="{{ route('Commons') }}">
                    ویژگی های غیر فنی
                </a>
                <span
                    class="inline-flex items-center justify-center w-4 h-4 text-xs font-semibold text-blue-800 bg-blue-200 rounded-full mt-2">
                    {{ $count['commons'] }}
                </span>
            </div>
            <div class="flex items-center flex-col bg-gray-300 dark:bg-gray-700 rounded pt-5 pb-3 hover:shadow-2xl">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                     class="bi bi-shield-fill-check w-14 h-14 transition duration-75" viewBox="0 0 16 16">
                    <path fill-rule="evenodd"
                          d="M8 0c-.69 0-1.843.265-2.928.56-1.11.3-2.229.655-2.887.87a1.54 1.54 0 0 0-1.044 1.262c-.596 4.477.787 7.795 2.465 9.99a11.8 11.8 0 0 0 2.517 2.453c.386.273.744.482 1.048.625.28.132.581.24.829.24s.548-.108.829-.24a7 7 0 0 0 1.048-.625 11.8 11.8 0 0 0 2.517-2.453c1.678-2.195 3.061-5.513 2.465-9.99a1.54 1.54 0 0 0-1.044-1.263 63 63 0 0 0-2.887-.87C9.843.266 8.69 0 8 0m2.146 5.146a.5.5 0 0 1 .708.708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 7.793z"/>
                </svg>
                <a class="mt-2 text-xl hover:underline" href="{{ route('Consistencies') }}">
                    سطوح پیگیری
                </a>
                <span
                    class="inline-flex items-center justify-center w-4 h-4 text-xs font-semibold text-blue-800 bg-blue-200 rounded-full mt-2">
                    {{ $count['consistencies'] }}
                </span>
            </div>
            <div class="flex items-center flex-col bg-gray-300 dark:bg-gray-700 rounded pt-5 pb-3 hover:shadow-2xl">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                     class="bi bi-chat-text-fill w-14 h-14 transition duration-75" viewBox="0 0 16 16">
                    <path
                        d="M16 8c0 3.866-3.582 7-8 7a9 9 0 0 1-2.347-.306c-.584.296-1.925.864-4.181 1.234-.2.032-.352-.176-.273-.362.354-.836.674-1.95.77-2.966C.744 11.37 0 9.76 0 8c0-3.866 3.582-7 8-7s8 3.134 8 7M4.5 5a.5.5 0 0 0 0 1h7a.5.5 0 0 0 0-1zm0 2.5a.5.5 0 0 0 0 1h7a.5.5 0 0 0 0-1zm0 2.5a.5.5 0 0 0 0 1h4a.5.5 0 0 0 0-1z"/>
                </svg>
                <a class="mt-2 text-xl hover:underline" href="{{ route('Subjects') }}">
                    موضوعات بازدید
                </a>
                <span
                    class="inline-flex items-center justify-center w-4 h-4 text-xs font-semibold text-blue-800 bg-blue-200 rounded-full mt-2">
                    {{ $count['subjects'] }}
                </span>
            </div>
        </div>
    </div>
    <div class="bg-gray-200 dark:bg-gray-800 mt-5 p-5 rounded">
        <h2 class="text-center text-3xl mb-5">
            ویرایش اطلاعات کاربری
        </h2>
        <hr>
        <form wire:submit="save">
            <div class="grid md:grid-cols-5 md:gap-6 mt-5">
                <div class="mb-5">
                    <label for="first_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                        نام
                    </label>
                    <input type="text" id="first_name" name="first_name" wire:model="form.first_name"
                           class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                           placeholder="" required/>
                </div>
                <div class="mb-5">
                    <label for="last_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                        نام خانوادگی
                    </label>
                    <input type="text" id="last_name" name="last_name" wire:model="form.last_name"
                           class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                           placeholder="" required/>
                </div>
                <div class="mb-5">
                    <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                        ایمیل
                    </label>
                    <input type="email" id="email" name="email" wire:model="form.email"
                           class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                           placeholder="address@sample.com" required/>
                </div>
                <div class="mb-5">
                    <label for="personal_code" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                        کد پرسنلی
                    </label>
                    <input type="text" id="personal_code" name="personal_code" wire:model="form.personal_code"
                           class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                           placeholder="" required/>
                </div>
                <div class="mb-5">
                    <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                        رمز عبور
                    </label>
                    <input type="password" id="password" name="password" wire:model="form.password"
                           class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                           placeholder="فقط در صورت نیاز به تغییر رمز پر شود"/>
                </div>
            </div>
            <div class="text-center">
                <button type="submit"
                        class="text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">
                    به روز رسانی
                </button>
            </div>
        </form>
    </div>
</div>
