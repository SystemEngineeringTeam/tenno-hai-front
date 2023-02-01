<x-app-layout>
    <div class="mx-auto max-w-screen-xl px-4 py-16 sm:px-6 lg:px-8">
        <div class="mx-auto max-w-lg text-center">
            <h1 class="text-2xl font-bold sm:text-3xl">task create</h1>

            <p class="mt-4 text-gray-500">
                新たにタスクを作成します。
            </p>
        </div>

        <form action="{{ route('task.store') }}" method="POST" enctype="multipart/form-data"
            class="mx-auto mt-8 mb-0 max-w-md space-y-4">
            @csrf
            <div class="mb-6">
                <label for="base-input"
                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Title</label>
                <input type="text" id="title" name="title" value="{{ old('title') }}"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            </div>
            <div class="mb-6">
                <label for="large-input"
                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Overview</label>
                <input type="text" id="overview" name="overview" value="{{ old('overview') }}"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            </div>

            <label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Content</label>
            <textarea id="content" rows="4" name="content" value="{{ old('content') }}"
                class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"></textarea>

            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="user_avatar">Upload
                file</label>
            <input
                class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                aria-describedby="user_avatar_help" id="image_path" name="image_path" value="{{ old('image_path') }}"
                type="file">
            <label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your
                message</label>
            <fieldset>
                <legend class="sr-only">Category</legend>
                <div class="flex items-center mb-4">
                    <input id="country-option-1" type="radio" name="category_id" value="1"
                        class="w-4 h-4 border-gray-300 focus:ring-2 focus:ring-blue-300 dark:focus:ring-blue-600 dark:focus:bg-blue-600 dark:bg-gray-700 dark:border-gray-600"
                        checked>
                    <label for="country-option-1"
                        class="block ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                        general
                    </label>
                </div>

                <div class="flex items-center mb-4">
                    <input id="country-option-2" type="radio" name="category_id" value="2"
                        class="w-4 h-4 border-gray-300 focus:ring-2 focus:ring-blue-300 dark:focus:ring-blue-600 dark:focus:bg-blue-600 dark:bg-gray-700 dark:border-gray-600">
                    <label for="country-option-2"
                        class="block ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                        network
                    </label>
                </div>

                <div class="flex items-center mb-4">
                    <input id="country-option-3" type="radio" name="category_id" value="3"
                        class="w-4 h-4 border-gray-300 focus:ring-2 focus:ring-blue-300 dark:focus:ring-blue-600 dark:bg-gray-700 dark:border-gray-600">
                    <label for="country-option-3"
                        class="block ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                        application
                    </label>
                </div>

                <div class="flex items-center mb-4">
                    <input id="country-option-4" type="radio" name="category_id" value="4"
                        class="w-4 h-4 border-gray-300 focus:ring-2 focus:ring:blue-300 dark:focus-ring-blue-600 dark:bg-gray-700 dark:border-gray-600">
                    <label for="country-option-4"
                        class="block ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                        extra
                    </label>
                </div>

            </fieldset>




            <button type="submit" class="inline-block rounded-lg bg-blue-500 px-5 py-3 text-sm font-medium text-white">
                Submit
            </button>
        </form>
    </div>
</x-app-layout>
