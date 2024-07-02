<div>
    <h1 class="text-2xl text-center mt-5 mb-10">
        ثبت بازرسی جدید
    </h1>
    <form class="bg-gray-200 dark:bg-gray-800 rounded p-5" wire:submit="save">
        <div class="grid md:grid-cols-5 md:gap-6">
            <div class="relative z-0 w-full mb-5 group">
                <label for="institution_id" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                    آموزشگاه
                </label>
                <select id="institution_id"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        wire:model="form.institution_id">
                    <option value="">
                        انتخاب کنید...
                    </option>
                    @foreach($institutions as $institution)
                        <option value="{{ $institution->id }}">
                            {{ $institution->name }}
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="relative z-0 w-full mb-5 group">
                <label for="subject_id" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                    موضوع بازدید
                </label>
                <select id="subject_id"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        wire:model="form.subject_id">
                    <option value="">
                        انتخاب کنید...
                    </option>
                    @foreach($subjects as $subject)
                        <option value="{{ $subject->id }}">
                            {{ $subject->title }}
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="relative z-0 w-full mb-5 group">
                <label for="consistency_id" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                    سطح پیگیری بازدید
                </label>
                <select id="consistency_id"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        wire:model="form.consistency_id">
                    <option value="">
                        انتخاب کنید...
                    </option>
                    @foreach($consistencies as $consistency)
                        <option value="{{ $consistency->id }}">
                            {{ $consistency->title }}
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="relative z-0 w-full mb-5 group">
                <label for="major_id" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                    رشته تحصیلی
                </label>
                <select id="major_id"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        wire:model="form.major_id">
                    <option value="">
                        انتخاب کنید...
                    </option>
                    @foreach($majors as $major)
                        <option value="{{ $major->id }}">
                            {{ $major->title }}
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="relative z-0 w-full mb-5 group">
                <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="user_avatar">
                    بارگزاری فایل
                </label>
                <input type="file" multiple wire:model="files"
                       class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                       aria-describedby="user_avatar_help" id="user_avatar">
            </div>
        </div>
        <div class="grid md:grid-cols-2 md:gap-6">
            <div class="relative z-0 w-full mb-5 group">
                <label for="advantages" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                    ویژگی های مثبت
                </label>
                <select id="advantages" multiple
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        wire:model="form.advantages">
                    <option value="">
                        انتخاب کنید...
                    </option>
                    @foreach($commons as $common)
                        <option value="{{ $common->id }}">
                            {{ $common->title }}
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="relative z-0 w-full mb-5 group">
                <label for="disadvantages" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                    ویژگی های منفی
                </label>
                <select id="disadvantages" multiple
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        wire:model="form.disadvantages">
                    <option value="">
                        انتخاب کنید...
                    </option>
                    @foreach($commons as $common)
                        <option value="{{ $common->id }}">
                            {{ $common->title }}
                        </option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="grid md:grid-cols-2 md:gap-6">
            <div class="relative z-0 w-full mb-5 group">
                <label for="description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                    توضیحات
                </label>
                <textarea id="description" rows="4" wire:model="description"
                          class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                          placeholder=""></textarea>
            </div>
            <div class="relative z-0 w-full mb-5 group">
                <label for="operations" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                    اقدامات
                </label>
                <textarea id="operations" rows="4" wire:model="operations"
                          class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                          placeholder=""></textarea>
            </div>
        </div>
        <div class="grid md:grid-cols-2 md:gap-6">
        </div>
        <div class="flex justify-between">
            <button type="submit"
                    class="text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">
                ثبت
            </button>
        </div>
    </form>
</div>
