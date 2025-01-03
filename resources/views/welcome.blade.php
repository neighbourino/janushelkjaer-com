<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>





    <div>
        <div class="bg-white py-24 sm:py-32">
            <div class="mx-auto max-w-7xl px-6 lg:px-8">
                <div class="grid grid-cols-1 items-center gap-x-8 gap-y-16 lg:grid-cols-2">
                    <div class="mx-auto w-full max-w-xl lg:mx-0">
                        <h2 class="text-pretty text-4xl font-semibold tracking-tight text-gray-900 sm:text-5xl">
                            Specialized. Focused. Ever Learning.
                        </h2>
                        <p class="mt-6 text-lg/8 text-gray-600">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                            Et, egestas tempus tellus etiam sed. Quam a scelerisque amet ullamcorper eu enim et
                            fermentum, augue.</p>
                        <div class="mt-8 flex items-center gap-x-6">
                            <a href="#"
                                class="rounded-md bg-indigo-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Create
                                account</a>
                            <a href="#" class="text-sm font-semibold text-gray-900">Contact us <span
                                    aria-hidden="true">&rarr;</span></a>
                        </div>
                    </div>
                    <div
                        class="mx-auto grid w-full max-w-xl grid-cols-2 items-center gap-y-12 sm:gap-y-14 lg:mx-0 lg:max-w-none lg:pl-8">
                        <img class="max-h-12 w-full object-contain object-left"
                            src="https://picperf.io/https://laravelnews.s3.amazonaws.com/images/laravel-featured.png"
                            alt="Tuple" width="105" height="48">
                        <img class="max-h-12 w-full object-contain object-left"
                            src="https://logos-world.net/wp-content/uploads/2023/08/React-Symbol.png" alt="Reform"
                            width="104" height="48">
                        <img class="max-h-12 w-full object-contain object-left"
                            src="https://picperf.io/https://laravelnews.s3.amazonaws.com/images/laravel-livewire.png"
                            alt="SavvyCal" width="140" height="48">
                        <img class="max-h-12 w-full object-contain object-left"
                            src="https://getlogovector.com/wp-content/uploads/2021/01/tailwind-css-logo-vector.png"
                            alt="Laravel" width="136" height="48">
                        <img class="max-h-12 w-full object-contain object-left"
                            src="https://tailwindui.com/plus/img/logos/transistor-logo-gray-900.svg" alt="Transistor"
                            width="158" height="48">
                        <img class="max-h-12 w-full object-contain object-left"
                            src="https://tailwindui.com/plus/img/logos/statamic-logo-gray-900.svg" alt="Statamic"
                            width="147" height="48">
                    </div>
                </div>
            </div>
        </div>

        <div>
            <div class="relative z-10 mt-32 bg-gray-900 pb-20 sm:mt-56 sm:pb-24 xl:pb-0 -mx-8">
                <div class="absolute inset-0 overflow-hidden" aria-hidden="true">
                    <div class="absolute top-[calc(50%-36rem)] left-[calc(50%-19rem)] transform-gpu blur-3xl">
                        <div class="aspect-1097/1023 w-[68.5625rem] bg-linear-to-r from-[#ff4694] to-[#776fff] opacity-25"
                            style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)">
                        </div>
                    </div>
                </div>
                <div
                    class="mx-auto flex max-w-7xl flex-col items-center gap-x-8 gap-y-10 px-6 sm:gap-y-8 lg:px-8 xl:flex-row xl:items-stretch">
                    <div class="-mt-8 w-full max-w-2xl xl:-mb-8 xl:w-96 xl:flex-none">
                        <div class="relative aspect-2/1 h-full md:-mx-8 xl:mx-0 xl:aspect-auto">
                            <img class="absolute inset-0 size-full rounded-2xl bg-gray-800 object-cover shadow-2xl"
                                src="{{ asset('images/jh/1709032768-081e96b96e6e3ca49fcd9d86a31c0b95-5.jpeg') }}"
                                alt="">
                        </div>
                    </div>
                    <div class="w-full max-w-2xl xl:max-w-none xl:flex-auto xl:px-16 xl:py-24">
                        <figure class="relative isolate pt-6 sm:pt-12">
                            <svg viewBox="0 0 162 128" fill="none" aria-hidden="true"
                                class="absolute top-0 left-0 -z-10 h-32 stroke-white/20">
                                <path id="b56e9dab-6ccb-4d32-ad02-6b4bb5d9bbeb"
                                    d="M65.5697 118.507L65.8918 118.89C68.9503 116.314 71.367 113.253 73.1386 109.71C74.9162 106.155 75.8027 102.28 75.8027 98.0919C75.8027 94.237 75.16 90.6155 73.8708 87.2314C72.5851 83.8565 70.8137 80.9533 68.553 78.5292C66.4529 76.1079 63.9476 74.2482 61.0407 72.9536C58.2795 71.4949 55.276 70.767 52.0386 70.767C48.9935 70.767 46.4686 71.1668 44.4872 71.9924L44.4799 71.9955L44.4726 71.9988C42.7101 72.7999 41.1035 73.6831 39.6544 74.6492C38.2407 75.5916 36.8279 76.455 35.4159 77.2394L35.4047 77.2457L35.3938 77.2525C34.2318 77.9787 32.6713 78.3634 30.6736 78.3634C29.0405 78.3634 27.5131 77.2868 26.1274 74.8257C24.7483 72.2185 24.0519 69.2166 24.0519 65.8071C24.0519 60.0311 25.3782 54.4081 28.0373 48.9335C30.703 43.4454 34.3114 38.345 38.8667 33.6325C43.5812 28.761 49.0045 24.5159 55.1389 20.8979C60.1667 18.0071 65.4966 15.6179 71.1291 13.7305C73.8626 12.8145 75.8027 10.2968 75.8027 7.38572C75.8027 3.6497 72.6341 0.62247 68.8814 1.1527C61.1635 2.2432 53.7398 4.41426 46.6119 7.66522C37.5369 11.6459 29.5729 17.0612 22.7236 23.9105C16.0322 30.6019 10.618 38.4859 6.47981 47.558L6.47976 47.558L6.47682 47.5647C2.4901 56.6544 0.5 66.6148 0.5 77.4391C0.5 84.2996 1.61702 90.7679 3.85425 96.8404L3.8558 96.8445C6.08991 102.749 9.12394 108.02 12.959 112.654L12.959 112.654L12.9646 112.661C16.8027 117.138 21.2829 120.739 26.4034 123.459L26.4033 123.459L26.4144 123.465C31.5505 126.033 37.0873 127.316 43.0178 127.316C47.5035 127.316 51.6783 126.595 55.5376 125.148L55.5376 125.148L55.5477 125.144C59.5516 123.542 63.0052 121.456 65.9019 118.881L65.5697 118.507Z">
                                </path>
                                <use href="#b56e9dab-6ccb-4d32-ad02-6b4bb5d9bbeb" x="86"></use>
                            </svg>
                            <blockquote class="text-xl/8 font-semibold text-white sm:text-2xl/9">
                                <p>Gravida quam mi erat tortor neque molestie. Auctor aliquet at porttitor a enim nunc
                                    suscipit tincidunt nunc. Et non lorem tortor posuere. Nunc eu scelerisque interdum
                                    eget tellus non nibh scelerisque bibendum.</p>
                            </blockquote>
                            <figcaption class="mt-8 text-base">
                                <div class="font-semibold text-white">Judith Black</div>
                                <div class="mt-1 text-gray-400">CEO of Tuple</div>
                            </figcaption>
                        </figure>
                    </div>
                </div>
            </div>
        </div>


        <div>
            <div class="overflow-hidden bg-white py-24 sm:py-32 -mx-8">
                <div class="mx-auto max-w-7xl px-6 lg:px-8">
                    <div
                        class="mx-auto grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 sm:gap-y-20 lg:mx-0 lg:max-w-none lg:grid-cols-2">
                        <div class="lg:ml-auto lg:pl-4 lg:pt-4">
                            <div class="lg:max-w-lg">
                                <h2 class="text-base/7 font-semibold text-indigo-600">Deploy faster</h2>
                                <p
                                    class="mt-2 text-pretty text-4xl font-semibold tracking-tight text-gray-900 sm:text-5xl">
                                    A better workflow</p>
                                <p class="mt-6 text-lg/8 text-gray-600">Lorem ipsum, dolor sit amet consectetur
                                    adipisicing elit. Maiores impedit perferendis suscipit eaque, iste dolor cupiditate
                                    blanditiis ratione.</p>
                                <dl class="mt-10 max-w-xl space-y-8 text-base/7 text-gray-600 lg:max-w-none">
                                    <div class="relative pl-9">
                                        <dt class="inline font-semibold text-gray-900">
                                            <svg class="absolute left-1 top-1 size-5 text-indigo-600"
                                                viewBox="0 0 20 20" fill="currentColor" aria-hidden="true"
                                                data-slot="icon">
                                                <path fill-rule="evenodd"
                                                    d="M5.5 17a4.5 4.5 0 0 1-1.44-8.765 4.5 4.5 0 0 1 8.302-3.046 3.5 3.5 0 0 1 4.504 4.272A4 4 0 0 1 15 17H5.5Zm3.75-2.75a.75.75 0 0 0 1.5 0V9.66l1.95 2.1a.75.75 0 1 0 1.1-1.02l-3.25-3.5a.75.75 0 0 0-1.1 0l-3.25 3.5a.75.75 0 1 0 1.1 1.02l1.95-2.1v4.59Z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                            Push to deploy.
                                        </dt>
                                        <dd class="inline">Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                                            Maiores impedit perferendis suscipit eaque, iste dolor cupiditate blanditiis
                                            ratione.</dd>
                                    </div>
                                    <div class="relative pl-9">
                                        <dt class="inline font-semibold text-gray-900">
                                            <svg class="absolute left-1 top-1 size-5 text-indigo-600"
                                                viewBox="0 0 20 20" fill="currentColor" aria-hidden="true"
                                                data-slot="icon">
                                                <path fill-rule="evenodd"
                                                    d="M10 1a4.5 4.5 0 0 0-4.5 4.5V9H5a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2v-6a2 2 0 0 0-2-2h-.5V5.5A4.5 4.5 0 0 0 10 1Zm3 8V5.5a3 3 0 1 0-6 0V9h6Z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                            SSL certificates.
                                        </dt>
                                        <dd class="inline">Anim aute id magna aliqua ad ad non deserunt sunt. Qui irure
                                            qui lorem cupidatat commodo.</dd>
                                    </div>
                                    <div class="relative pl-9">
                                        <dt class="inline font-semibold text-gray-900">
                                            <svg class="absolute left-1 top-1 size-5 text-indigo-600"
                                                viewBox="0 0 20 20" fill="currentColor" aria-hidden="true"
                                                data-slot="icon">
                                                <path
                                                    d="M4.632 3.533A2 2 0 0 1 6.577 2h6.846a2 2 0 0 1 1.945 1.533l1.976 8.234A3.489 3.489 0 0 0 16 11.5H4c-.476 0-.93.095-1.344.267l1.976-8.234Z" />
                                                <path fill-rule="evenodd"
                                                    d="M4 13a2 2 0 1 0 0 4h12a2 2 0 1 0 0-4H4Zm11.24 2a.75.75 0 0 1 .75-.75H16a.75.75 0 0 1 .75.75v.01a.75.75 0 0 1-.75.75h-.01a.75.75 0 0 1-.75-.75V15Zm-2.25-.75a.75.75 0 0 0-.75.75v.01c0 .414.336.75.75.75H13a.75.75 0 0 0 .75-.75V15a.75.75 0 0 0-.75-.75h-.01Z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                            Database backups.
                                        </dt>
                                        <dd class="inline">Ac tincidunt sapien vehicula erat auctor pellentesque
                                            rhoncus. Et magna sit morbi lobortis.</dd>
                                    </div>
                                </dl>
                            </div>
                        </div>
                        <div class="flex items-start justify-end lg:order-first">
                            <img src="https://tailwindui.com/plus/img/component-images/dark-project-app-screenshot.png"
                                alt="Product screenshot"
                                class="w-[48rem] max-w-none rounded-xl shadow-xl ring-1 ring-gray-400/10 sm:w-[57rem]"
                                width="2432" height="1442">
                        </div>
                    </div>
                </div>
            </div>

        </div>


        <div>
            <div class="bg-gray-50 py-24 sm:py-32 -mx-8">
                <div class="mx-auto max-w-2xl px-6 lg:max-w-7xl lg:px-8">
                    <h2 class="text-center text-base/7 font-semibold text-indigo-600">Deploy faster</h2>
                    <p
                        class="mx-auto mt-2 max-w-lg text-balance text-center text-4xl font-semibold tracking-tight text-gray-950 sm:text-5xl">
                        Everything you need to deploy your app</p>
                    <div class="mt-10 grid gap-4 sm:mt-16 lg:grid-cols-3 lg:grid-rows-2">
                        <div class="relative lg:row-span-2">
                            <div class="absolute inset-px rounded-lg bg-white lg:rounded-l-[2rem]"></div>
                            <div
                                class="relative flex h-full flex-col overflow-hidden rounded-[calc(theme(borderRadius.lg)+1px)] lg:rounded-l-[calc(2rem+1px)]">
                                <div class="px-8 pb-3 pt-8 sm:px-10 sm:pb-0 sm:pt-10">
                                    <p
                                        class="mt-2 text-lg font-medium tracking-tight text-gray-950 max-lg:text-center">
                                        Mobile friendly</p>
                                    <p class="mt-2 max-w-lg text-sm/6 text-gray-600 max-lg:text-center">Anim aute id
                                        magna aliqua ad ad non deserunt sunt. Qui irure qui lorem cupidatat commodo.</p>
                                </div>
                                <div
                                    class="relative min-h-[30rem] w-full grow [container-type:inline-size] max-lg:mx-auto max-lg:max-w-sm">
                                    <div
                                        class="absolute inset-x-10 bottom-0 top-10 overflow-hidden rounded-t-[12cqw] border-x-[3cqw] border-t-[3cqw] border-gray-700 bg-gray-900 shadow-2xl">
                                        <img class="size-full object-cover object-top"
                                            src="https://tailwindui.com/plus/img/component-images/bento-03-mobile-friendly.png"
                                            alt="">
                                    </div>
                                </div>
                            </div>
                            <div
                                class="pointer-events-none absolute inset-px rounded-lg shadow ring-1 ring-black/5 lg:rounded-l-[2rem]">
                            </div>
                        </div>
                        <div class="relative max-lg:row-start-1">
                            <div class="absolute inset-px rounded-lg bg-white max-lg:rounded-t-[2rem]"></div>
                            <div
                                class="relative flex h-full flex-col overflow-hidden rounded-[calc(theme(borderRadius.lg)+1px)] max-lg:rounded-t-[calc(2rem+1px)]">
                                <div class="px-8 pt-8 sm:px-10 sm:pt-10">
                                    <p
                                        class="mt-2 text-lg font-medium tracking-tight text-gray-950 max-lg:text-center">
                                        Performance</p>
                                    <p class="mt-2 max-w-lg text-sm/6 text-gray-600 max-lg:text-center">Lorem ipsum,
                                        dolor sit amet consectetur adipisicing elit maiores impedit.</p>
                                </div>
                                <div
                                    class="flex flex-1 items-center justify-center px-8 max-lg:pb-12 max-lg:pt-10 sm:px-10 lg:pb-2">
                                    <img class="w-full max-lg:max-w-xs"
                                        src="https://tailwindui.com/plus/img/component-images/bento-03-performance.png"
                                        alt="">
                                </div>
                            </div>
                            <div
                                class="pointer-events-none absolute inset-px rounded-lg shadow ring-1 ring-black/5 max-lg:rounded-t-[2rem]">
                            </div>
                        </div>
                        <div class="relative max-lg:row-start-3 lg:col-start-2 lg:row-start-2">
                            <div class="absolute inset-px rounded-lg bg-white"></div>
                            <div
                                class="relative flex h-full flex-col overflow-hidden rounded-[calc(theme(borderRadius.lg)+1px)]">
                                <div class="px-8 pt-8 sm:px-10 sm:pt-10">
                                    <p
                                        class="mt-2 text-lg font-medium tracking-tight text-gray-950 max-lg:text-center">
                                        Security</p>
                                    <p class="mt-2 max-w-lg text-sm/6 text-gray-600 max-lg:text-center">Morbi viverra
                                        dui mi arcu sed. Tellus semper adipiscing suspendisse semper morbi.</p>
                                </div>
                                <div class="flex flex-1 items-center [container-type:inline-size] max-lg:py-6 lg:pb-2">
                                    <img class="h-[min(152px,40cqw)] object-cover"
                                        src="https://tailwindui.com/plus/img/component-images/bento-03-security.png"
                                        alt="">
                                </div>
                            </div>
                            <div class="pointer-events-none absolute inset-px rounded-lg shadow ring-1 ring-black/5">
                            </div>
                        </div>
                        <div class="relative lg:row-span-2">
                            <div
                                class="absolute inset-px rounded-lg bg-white max-lg:rounded-b-[2rem] lg:rounded-r-[2rem]">
                            </div>
                            <div
                                class="relative flex h-full flex-col overflow-hidden rounded-[calc(theme(borderRadius.lg)+1px)] max-lg:rounded-b-[calc(2rem+1px)] lg:rounded-r-[calc(2rem+1px)]">
                                <div class="px-8 pb-3 pt-8 sm:px-10 sm:pb-0 sm:pt-10">
                                    <p
                                        class="mt-2 text-lg font-medium tracking-tight text-gray-950 max-lg:text-center">
                                        Powerful APIs</p>
                                    <p class="mt-2 max-w-lg text-sm/6 text-gray-600 max-lg:text-center">Sit quis amet
                                        rutrum tellus ullamcorper ultricies libero dolor eget sem sodales gravida.</p>
                                </div>
                                <div class="relative min-h-[30rem] w-full grow">
                                    <div
                                        class="absolute bottom-0 left-10 right-0 top-10 overflow-hidden rounded-tl-xl bg-gray-900 shadow-2xl">
                                        <div class="flex bg-gray-800/40 ring-1 ring-white/5">
                                            <div class="-mb-px flex text-sm/6 font-medium text-gray-400">
                                                <div
                                                    class="border-b border-r border-b-white/20 border-r-white/10 bg-white/5 px-4 py-2 text-white">
                                                    NotificationSetting.jsx</div>
                                                <div class="border-r border-gray-600/10 px-4 py-2">App.jsx</div>
                                            </div>
                                        </div>
                                        <div class="px-6 pb-14 pt-6">
                                            <!-- Your code example -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="pointer-events-none absolute inset-px rounded-lg shadow ring-1 ring-black/5 max-lg:rounded-b-[2rem] lg:rounded-r-[2rem]">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</x-app-layout>
