<div class="p-5">
    <div class="flex justify-between items-center mb-5">
        <h1 class="text-center text-xl">
            بازرسی ها
        </h1>
        @if(auth()->user()->isInspector())
            <a class=" text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
               href="{{ route('CreateInspection') }}">
                ثبت بازرسی جدید
            </a>
        @endif
    </div>
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        <table class="w-full text-sm text-left rtl:text-right text-gray-900 dark:text-gray-100">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    ردیف
                </th>
                <th scope="col" class="px-6 py-3">
                    بازرس
                </th>
                <th scope="col" class="px-6 py-3">
                    آموزشگاه
                </th>
                <th scope="col" class="px-6 py-3">
                    موضوع بازدید
                </th>
                <th scope="col" class="px-6 py-3">
                    سطح پیگیری
                </th>
                <th scope="col" class="px-6 py-3">
                    تاریخ ثبت بازدید
                </th>
                <th scope="col" class="px-6 py-3">
                    عملیات
                </th>
            </tr>
            </thead>
            <tbody>
            @foreach($inspections as $key => $inspection)
                <tr class="bg-white dark:bg-gray-800 {{ !$loop->last ? 'border-b dark:border-gray-700' : '' }}">
                    <td class="px-6 py-4 font-medium whitespace-nowrap">
                        {{ $key + 1 }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $inspection->User->FullName() }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $inspection->Institution->name }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $inspection->Subject->title }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $inspection->Consistency->title }}
                    </td>
                    <td class="px-6 py-4">
                        {{ jdate($inspection->created_at)->format('%A, %d %B %Y | ساعت H:i:s') }}
                    </td>
                    <td class="px-6 py-4 text-right">
                        <a
                            class="text-white bg-yellow-700 hover:bg-yellow-800 focus:ring-4 focus:outline-none focus:ring-yellow-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-yellow-600 dark:hover:bg-yellow-700 dark:focus:ring-yellow-800"
                            href="{{ route('ShowInspection', $inspection) }}">
                            مشاهده
                        </a>
                        @if(auth()->user()->isAdmin())
                            <button
                                class="mr-5 text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800"
                                wire:click="delete({{ $inspection->id }})">
                                حذف
                            </button>
                        @endif
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>
