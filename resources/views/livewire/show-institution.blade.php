<div>
    <h1 class="text-2xl text-center mt-5 mb-10">
        مشاهده آموزشگاه
    </h1>
    <div class="bg-gray-200 dark:bg-gray-800 rounded pt-5 px-5 mb-5">
        <div class="grid md:grid-cols-3 md:gap-6 border-b-2 mb-5">
            <div class="relative z-0 w-full mb-5 group">
                <label>
                    {{ 'نام آموزشگاه : '.$institution->name }}
                </label>
            </div>
            <div class="relative z-0 w-full mb-5 group">
                <label>
                    {{ 'کد آموزشگاه : '.$institution->code }}
                </label>
            </div>
            <div class="relative z-0 w-full mb-5 group">
                <label>
                    {{ 'مدیر آموزشگاه : '.$institution->principle }}
                </label>
            </div>
        </div>
        <div class="grid md:grid-cols-2 md:gap-6 border-b-2 mb-5">
            <div class="relative z-0 w-full mb-5 group">
                <label>
                    {{ 'آدرس آموزشگاه : '.$institution->address }}
                </label>
            </div>
            <div class="relative z-0 w-full mb-5 group">
                <label>
                    {{ 'تلفن آموزشگاه : '.$institution->phone }}
                </label>
            </div>
        </div>
        <div class="grid md:grid-cols-3 md:gap-6">
            <div class="relative z-0 w-full mb-5 group">
                <label>
                    {{ 'نوع واحد آموزشی : '.$institution->Type->title }}
                </label>
            </div>
            <div class="relative z-0 w-full mb-5 group">
                <label>
                    {{ 'جنسیت : '.$institution->GetGender() }}
                </label>
            </div>
            <div class="relative z-0 w-full mb-5 group">
                <label>
                    {{ 'منطقه : '.$institution->State->name }}
                </label>
            </div>
        </div>
    </div>
    <div class="flex justify-between">
        <a
            class="text-white bg-gray-700 hover:bg-gray-800 focus:ring-4 focus:outline-none focus:ring-gray-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-gray-600 dark:hover:bg-gray-700 dark:focus:ring-gray-800"
            href="{{ route('Institutions') }}">
            برگشت
        </a>
    </div>
</div>
