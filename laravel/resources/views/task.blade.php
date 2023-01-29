<x-app-layout>

    <section class="text-gray-600 body-font">
        <div class="container px-5 py-24 mx-auto">
            <div class="flex flex-wrap w-full mb-20">
                <div class="lg:w-1/2 w-full mb-6 lg:mb-0">
                    <h1 class="sm:text-3xl text-2xl font-medium title-font mb-2 text-gray-900">Task</h1>
                    <div class="h-1 w-20 bg-blue-600 rounded"></div>
                </div>
                <p class="lg:w-1/2 w-full leading-relaxed text-gray-500">このページではインフラを触る為の必要な知識を学ぶことが出来ます。
                    色々なセクションを通して、インフラの仕組みを理解し、触れるようになりましょう！
                </p>
            </div>
            <ul class="flex border-b border-gray-100">
                <li class="flex-1">
                    <a class="relative block p-4" href="">
                        <span class="absolute inset-x-0 -bottom-px h-px w-full bg-blue-600"></span>

                        <div class="flex items-center justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 flex-shrink-0 text-gray-500"
                                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4" />
                            </svg>

                            <span class="ml-3 text-sm font-medium text-gray-900">general</span>
                        </div>
                    </a>
                </li>

                <li class="flex-1">
                    <a class="relative block p-4" href="">
                        <div class="flex items-center justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 flex-shrink-0 text-gray-500"
                                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z" />
                            </svg>

                            <span class="ml-3 text-sm font-medium text-gray-900">network</span>
                        </div>
                    </a>
                </li>

                <li class="flex-1">
                    <a class="relative block p-4" href="">
                        <div class="flex items-center justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 flex-shrink-0 text-gray-500"
                                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 8h14M5 8a2 2 0 110-4h14a2 2 0 110 4M5 8v10a2 2 0 002 2h10a2 2 0 002-2V8m-9 4h4" />
                            </svg>

                            <span class="ml-3 text-sm font-medium text-gray-900">application</span>
                        </div>
                    </a>
                </li>

                <li class="flex-1">
                    <a class="relative block p-4" href="">
                        <div class="flex items-center justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 flex-shrink-0 text-gray-500"
                                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
                            </svg>

                            <span class="ml-3 text-sm font-medium text-gray-900">
                                extra
                            </span>
                        </div>
                    </a>
                </li>
            </ul>


            <div class="flex flex-wrap mt-4">
                <div class="xl:w-1/4 md:w-1/2 p-4">
                    <a href="/dashboard">
                        <div class="bg-gray-100 p-6 rounded-lg shadow-lg hover:shadow-gray-600 hover:shadow-md">
                            <img class="h-40 rounded w-full object-cover object-center mb-6"
                                src="https://dummyimage.com/720x400" alt="content">
                            <h3 class="tracking-widest text-blue-600 text-xs title-font font-extrabold">general</h3>
                            <h2 class="text-lg text-gray-900 font-bold title-font mb-4">ssh設定</h2>
                            <p class="leading-relaxed text-base">ホストマシンからDocker上のUbuntuにsshの設定をしてみましょう。</p>
                        </div>
                    </a>
                </div>
            </div>

        </div>
    </section>
</x-app-layout>
