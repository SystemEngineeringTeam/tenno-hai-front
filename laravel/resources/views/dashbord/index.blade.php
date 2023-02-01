<x-app-layout>
    <section>
        <a href="#"
            class="container mt-16 mx-auto flex flex-col relative overflow-hidden rounded-lg border border-gray-400 max-w-2xl p-8 ">
            <div class="justify-between sm:flex">
                <div>
                    <h3 class="text-xl font-bold text-gray-900">
                        {{ Auth::user()->name }}
                    </h3>
                </div>

                <div class="ml-3 hidden flex-shrink-0 sm:block">
                    <img alt="{{ Auth::user()->name }}" src="https://avatars.githubusercontent.com/u/26848713?v=4"
                        class="h-16 w-16 rounded-lg object-cover shadow-sm" />
                </div>
            </div>
            <dl class="mt-6 flex">
                <div class="flex flex-col-reverse">
                    <dt class="text-xl font-medium text-blue-600">{{ $clear_count }}</dt>
                    <dd class="text-xs text-gray-500">タスククリア数</dd>
                </div>
            </dl>
        </a>

    </section>
    <section>
        <div class="container mt-6 mx-auto flex flex-col max-w-screen-xl px-4 py-16 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 gap-y-8 lg:grid-cols-2 lg:items-center lg:gap-x-16">
                <div class="mx-auto max-w-lg text-center lg:mx-0 lg:text-left">
                    <h2 class="text-3xl font-bold sm:text-4xl">
                        学習を始める
                    </h2>

                    <p class="mt-4 text-gray-600">
                        初めての方はTutorialから始めて環境をセットアップしましょう。すでに環境をお持ちの方は、タスクをクリアしていきましょう。
                    </p>

                    <a class="mt-8 inline-flex items-center rounded border border-blue-600 bg-blue-600 px-8 py-3 text-white hover:bg-transparent hover:text-blue-600 focus:outline-none focus:ring active:text-blue-500"
                        href="/tutorial">
                        <span class="text-sm font-medium"> Get Started </span>

                        <svg class="ml-3 h-5 w-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17 8l4 4m0 0l-4 4m4-4H3" />
                        </svg>
                    </a>
                </div>

                <div class="grid grid-cols-2 gap-4 sm:grid-cols-3">
                    <a class="block rounded-xl border border-gray-100 p-4 shadow-sm hover:border-gray-200 hover:ring-1 hover:ring-gray-200 focus:outline-none focus:ring"
                        href="/tutorial">
                        <span class="inline-block rounded-lg bg-gray-50 p-3">
                            <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M12 14l9-5-9-5-9 5 9 5z"></path>
                                <path
                                    d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z">
                                </path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222">
                                </path>
                            </svg>
                        </span>

                        <h2 class="mt-2 font-bold">Gitのインストール
                        </h2>

                        <p class="hidden sm:mt-1 sm:block sm:text-sm sm:text-gray-600">
                            Git/GitHubの基本的な使い方を学びましょう。
                        </p>
                    </a>

                    <a class="block rounded-xl border border-gray-100 p-4 shadow-sm hover:border-gray-200 hover:ring-1 hover:ring-gray-200 focus:outline-none focus:ring"
                        href="/tutorial">
                        <span class="inline-block rounded-lg bg-gray-50 p-3">
                            <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M12 14l9-5-9-5-9 5 9 5z"></path>
                                <path
                                    d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z">
                                </path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222">
                                </path>
                            </svg>
                        </span>

                        <h2 class="mt-2 font-bold">Dockerのインストール</h2>

                        <p class="hidden sm:mt-1 sm:block sm:text-sm sm:text-gray-600">
                            Dockerをパソコンにインストールしましょう。
                        </p>
                    </a>

                    <a class="block rounded-xl border border-gray-100 p-4 shadow-sm hover:border-gray-200 hover:ring-1 hover:ring-gray-200 focus:outline-none focus:ring"
                        href="/tutorial">
                        <span class="inline-block rounded-lg bg-gray-50 p-3">
                            <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M12 14l9-5-9-5-9 5 9 5z"></path>
                                <path
                                    d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z">
                                </path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222">
                                </path>
                            </svg>
                        </span>

                        <h2 class="mt-2 font-bold">shellの使い方</h2>

                        <p class="hidden sm:mt-1 sm:block sm:text-sm sm:text-gray-600">
                            shellの使い方を学びましょう。
                        </p>
                    </a>

                    <a class="block rounded-xl border border-gray-100 p-4 shadow-sm hover:border-gray-200 hover:ring-1 hover:ring-gray-200 focus:outline-none focus:ring"
                        href="/tutorial">
                        <span class="inline-block rounded-lg bg-gray-50 p-3">
                            <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M12 14l9-5-9-5-9 5 9 5z"></path>
                                <path
                                    d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z">
                                </path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222">
                                </path>
                            </svg>
                        </span>

                        <h2 class="mt-2 font-bold">タスクの進め方</h2>

                        <p class="hidden sm:mt-1 sm:block sm:text-sm sm:text-gray-600">
                            天皇杯のクリアの仕方を学びましょう。
                        </p>
                    </a>

                    <a class="block rounded-xl border border-gray-100 p-4 shadow-sm hover:border-gray-200 hover:ring-1 hover:ring-gray-200 focus:outline-none focus:ring"
                        href="/tutorial">
                        <span class="inline-block rounded-lg bg-gray-50 p-3">
                            <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M12 14l9-5-9-5-9 5 9 5z"></path>
                                <path
                                    d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z">
                                </path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222">
                                </path>
                            </svg>
                        </span>

                        <h2 class="mt-2 font-bold">Ubuntuの使い方</h2>

                        <p class="hidden sm:mt-1 sm:block sm:text-sm sm:text-gray-600">
                            Ubuntuの使い方を学びましょう。
                        </p>
                    </a>

                    <a class="block rounded-xl border border-gray-100 p-4 shadow-sm hover:border-gray-200 hover:ring-1 hover:ring-gray-200 focus:outline-none focus:ring"
                        href="/tutorial">
                        <span class="inline-block rounded-lg bg-gray-50 p-3">
                            <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M12 14l9-5-9-5-9 5 9 5z"></path>
                                <path
                                    d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z">
                                </path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222">
                                </path>
                            </svg>
                        </span>

                        <h2 class="mt-2 font-bold">nginxの使い方</h2>

                        <p class="hidden sm:mt-1 sm:block sm:text-sm sm:text-gray-600">
                            nginxの使い方を学びましょう。
                        </p>
                    </a>
                </div>
            </div>
        </div>
    </section>


    <section class="mt-64">
        @include('components.footer')
    </section>
</x-app-layout>
