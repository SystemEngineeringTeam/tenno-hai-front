<x-app-layout>
    <main class="pt-8 pb-16 lg:pt-16 lg:pb-24 bg-white dark:bg-gray-900">
        <div class="flex justify-between px-4 mx-auto max-w-screen-xl ">

            <article
                class="mx-auto w-full max-w-2xl format format-sm sm:format-base lg:format-lg format-blue dark:format-invert">

                <header class="mb-4 lg:mb-6 not-format">
                    <h1
                        class="mb-4 text-3xl font-extrabold leading-tight text-gray-900 lg:mb-6 lg:text-4xl dark:text-white">
                        {{ $task->title }}</h1>
                </header>
                <section>
                    {{ $task->content }}
                </section>


                <form action="{{ route('result.store') }}" method="POST">

                    @csrf
                    <input type="hidden" name="issue_id" value="{{ $task->id }}">
                    <button type="submit"
                        class="inline-flex items-center rounded border border-blue-600 px-8 py-3 mt-64 text-blue-600 hover:bg-blue-600 hover:text-white focus:outline-none focus:ring active:bg-blue-500">
                        <span class="text-sm font-medium">クリア</span>

                        <svg class="ml-3 h-5 w-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17 8l4 4m0 0l-4 4m4-4H3" />
                        </svg>
                    </button>
                </form>
            </article>

        </div>
    </main>

    <aside aria-label="Related articles" class="mt-60 py-8 lg:py-24 bg-gray-50 dark:bg-gray-800">
        <div class="px-4 mx-auto max-w-screen-xl">
            <h2 class="mb-8 text-2xl font-bold text-gray-900 dark:text-white">他のタスク</h2>
            <div class="grid gap-12 sm:grid-cols-2 lg:grid-cols-4">
                @foreach ($new_issues as $new_issue)
                    <article class="max-w-xs">
                        <a href="{{ route('task.show', ['task' => $new_issue->id]) }}">
                            <img class="h-40 rounded w-full object-cover object-center mb-6"
                                src="{{ asset($new_issue->image_path) }}" alt="content">
                        </a>
                        <h2 class="mb-2 text-xl font-bold leading-tight text-gray-900 dark:text-white">
                            <a href="{{ route('task.show', ['task' => $new_issue->id]) }}">{{ $new_issue->title }}</a>
                        </h2>
                        <p class="mb-4 font-light text-gray-500 dark:text-gray-400">{{ $new_issue->overview }}</p>
                        <a href="{{ route('task.show', ['task' => $new_issue->id]) }}"
                            class="inline-flex items-center font-medium underline underline-offset-4 text-primary-600 dark:text-primary-500 hover:no-underline">
                            Read more
                        </a>
                    </article>
                @endforeach
            </div>
        </div>
    </aside>

    @include('components.footer')
</x-app-layout>
