<div class="p-5">
    <div class="flex justify-between items-center mb-5">
        <h1 class="text-center text-xl">
        رشته های تحصیلی
        </h1>
    </div>
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        <form wire:submit="save">
            <table class="w-full text-sm text-left rtl:text-right text-gray-900 dark:text-gray-100">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        ردیف
                    </th>
                    <th scope="col" class="px-6 py-3">
                        عنوان
                    </th>
                    <th scope="col" class="px-6 py-3">
                        کد
                    </th>
                    <th scope="col" class="px-6 py-3">
                        عملیات
                    </th>
                </tr>
                </thead>
                <tbody>
                @if(auth()->user()->isAdmin())
                    <tr class="bg-white dark:bg-gray-800 border-b dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            #
                        </td>
                        <td class="px-6 py-4">
                            <input type="text"
                                   class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                   wire:model="form.title">
                        </td>
                        <td class="px-6 py-4">
                            <input type="text"
                                   class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                   wire:model="form.code">
                        </td>
                        <td class="px-6 py-4 text-right">
                            <button type="submit"
                                    class="text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">
                                ثبت
                            </button>
                        </td>
                    </tr>
                @endif
                @foreach($majors as $key => $major)
                    <tr class="bg-white dark:bg-gray-800 {{ !$loop->last ? 'border-b dark:border-gray-700' : '' }}">
                        <td class="px-6 py-4 font-medium whitespace-nowrap">
                            {{ $key + 1 }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $major->title }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $major->code }}
                        </td>
                        <td class="px-6 py-4 text-right">
                            @if(auth()->user()->isAdmin())
                                <button
                                    class="text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800"
                                    wire:click="delete({{ $major->id }})">
                                    حذف
                                </button>
                            @endif
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </form>
    </div>
</div>
