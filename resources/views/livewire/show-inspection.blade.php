<div>
    <h1 class="text-2xl text-center mt-5 mb-10">
        {{ 'بازرسی شماره '.$inspection->id }}
    </h1>
    <div class="bg-gray-200 dark:bg-gray-800 rounded pt-5 px-5 mb-5">
        <div class="grid md:grid-cols-3 md:gap-6 border-b-2 mb-5">
            <div class="relative z-0 w-full mb-5 group">
                <label>
                    {{ 'نام آموزشگاه : '.$inspection->Institution->name }}
                </label>
            </div>
            <div class="relative z-0 w-full mb-5 group">
                <label>
                    {{ 'نام بازرس : '.$inspection->User->FullName() }}
                </label>
            </div>
            <div class="relative z-0 w-full mb-5 group">
                <label>
                    {{ 'تاریخ ثبت بازدید : '.jdate($inspection->created_at)->format('%A, %d %B %Y | ساعت H:i:s') }}
                </label>
            </div>
        </div>
        <div class="grid md:grid-cols-3 md:gap-6 border-b-2 mb-5">
            <div class="relative z-0 w-full mb-5 group">
                <label>
                    {{ 'موضوع بازدید : '.$inspection->Subject->title }}
                </label>
            </div>
            <div class="relative z-0 w-full mb-5 group">
                <label>
                    {{ 'سطح پیگیری : '.$inspection->Consistency->title }}
                </label>
            </div>
            <div class="relative z-0 w-full mb-5 group">
                <label>
                    {{ 'رشته تحصیلی : '.$inspection->Major->title }}
                </label>
            </div>
        </div>
        <div class="grid md:grid-cols-2 md:gap-6 border-b-2 mb-5">
            <div class="relative z-0 w-full mb-5 group">
                <label class="text-green-500">
                    {{ 'نکات مثبت : '.$inspection->Advantages() }}
                </label>
            </div>
            <div class="relative z-0 w-full mb-5 group">
                <label class="text-red-600">
                    {{ 'نکات منفی : '.$inspection->Disadvantages() }}
                </label>
            </div>
        </div>
        <div class="grid md:grid-cols-2 md:gap-6 border-b-2 mb-5">
            <div class="relative z-0 w-full mb-5 group">
                <label>
                    {{ 'توضیحات : '.$inspection->description }}
                </label>
            </div>
            <div class="relative z-0 w-full mb-5 group">
                <label>
                    {{ 'نکات منفی : '.$inspection->operations ?? '---' }}
                </label>
            </div>
        </div>
        <div class="grid md:grid-cols-1 md:gap-6">
            <div class="relative z-0 w-full mb-5 group">
                @foreach($inspection->files as $i => $file)
                    <a target="_blank"
                       id="{{ 'file'.$file->id }}"
                       href="{{ $file->status()->link }}">
                        <img style="height: 60px; width: 60px;"
                             src="{{ $file->status()->icon }}"
                             alt="{{ $file->status()->name }}">
                    </a>
                @endforeach
            </div>
        </div>
    </div>
    <div class="flex justify-between">
        <a
            class="text-white bg-gray-700 hover:bg-gray-800 focus:ring-4 focus:outline-none focus:ring-gray-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-gray-600 dark:hover:bg-gray-700 dark:focus:ring-gray-800"
            href="{{ route('Inspections') }}">
            برگشت
        </a>
    </div>
</div>
