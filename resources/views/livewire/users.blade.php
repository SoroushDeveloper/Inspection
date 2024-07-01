<div class="p-5">
    <h1 class="text-center mb-5">
        کاربران
    </h1>
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        <form wire:submit="save">
            <table class="w-full text-sm text-left rtl:text-right text-gray-900 dark:text-gray-100">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        ردیف
                    </th>
                    <th scope="col" class="px-6 py-3">
                        نام
                    </th>
                    <th scope="col" class="px-6 py-3">
                        نام خانوادگی
                    </th>
                    <th scope="col" class="px-6 py-3">
                        ایمیل
                    </th>
                    <th scope="col" class="px-6 py-3">
                        کد پرسنلی
                    </th>
                    <th scope="col" class="px-6 py-3" width="14%">
                        نوع کاربر
                    </th>
                    <th scope="col" class="px-6 py-3">
                        رمز عبور
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
                                   wire:model="form.first_name">
                        </td>
                        <td class="px-6 py-4">
                            <input type="text"
                                   class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                   wire:model="form.last_name">
                        </td>
                        <td class="px-6 py-4">
                            <input type="email"
                                   class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                   wire:model="form.email">
                        </td>
                        <td class="px-6 py-4">
                            <input type="text"
                                   class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                   wire:model="form.personal_code">
                        </td>
                        <td class="px-6 py-4">
                            <select
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                wire:model="form.user_type">
                                <option value="">
                                    انتخاب کنید ...
                                </option>
                                @foreach($types as $key => $type)
                                    <option value="{{ $key }}">
                                        {{ $type }}
                                    </option>
                                @endforeach
                            </select>
                        </td>
                        <td class="px-6 py-4">
                            <input type="password"
                                   class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                   wire:model="form.password">
                        </td>
                        <td class="px-6 py-4 text-right">
                            <button type="submit"
                                    class="text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">
                                ثبت
                            </button>
                        </td>
                    </tr>
                @endif
                @foreach($users as $key => $user)
                    <tr class="bg-white dark:bg-gray-800 {{ !$loop->last ? 'border-b dark:border-gray-700' : '' }}">
                        <td class="px-6 py-4 font-medium whitespace-nowrap">
                            {{ $key + 1 }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $user->first_name }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $user->last_name }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $user->email }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $user->personal_code }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $user->getType() }}
                        </td>
                        <td class="px-6 py-4">
                            ---
                        </td>
                        <td class="px-6 py-4 text-right">
                            @if(auth()->user()->isAdmin() && $user->id != auth()->id())
                                <button
                                    class="text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800"
                                    wire:click="delete({{ $user->id }})">
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
