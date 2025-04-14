@php
    $data = $attributes['info']['data'];

    #dd($data);

@endphp
<div>
    <div class="py-1 w-full">
        <div class="rounded-lg  shadow relative z-10 mt-32 bg-zinc-800 pb-20 sm:mt-56 sm:pb-24 xl:pb-0">
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
                            src="{{ Storage::url($data['profile_image']) }}" alt="">
                    </div>
                </div>
                <div class="w-full max-w-2xl xl:max-w-none xl:flex-auto xl:px-16 xl:py-24">
                    <div class="relative isolate pt-6 sm:pt-12">
                        {{-- <svg viewBox="0 0 162 128" fill="none" aria-hidden="true"
                            class="absolute top-0 left-0 -z-10 h-32 stroke-white/20">
                            <path id="b56e9dab-6ccb-4d32-ad02-6b4bb5d9bbeb"
                                d="M65.5697 118.507L65.8918 118.89C68.9503 116.314 71.367 113.253 73.1386 109.71C74.9162 106.155 75.8027 102.28 75.8027 98.0919C75.8027 94.237 75.16 90.6155 73.8708 87.2314C72.5851 83.8565 70.8137 80.9533 68.553 78.5292C66.4529 76.1079 63.9476 74.2482 61.0407 72.9536C58.2795 71.4949 55.276 70.767 52.0386 70.767C48.9935 70.767 46.4686 71.1668 44.4872 71.9924L44.4799 71.9955L44.4726 71.9988C42.7101 72.7999 41.1035 73.6831 39.6544 74.6492C38.2407 75.5916 36.8279 76.455 35.4159 77.2394L35.4047 77.2457L35.3938 77.2525C34.2318 77.9787 32.6713 78.3634 30.6736 78.3634C29.0405 78.3634 27.5131 77.2868 26.1274 74.8257C24.7483 72.2185 24.0519 69.2166 24.0519 65.8071C24.0519 60.0311 25.3782 54.4081 28.0373 48.9335C30.703 43.4454 34.3114 38.345 38.8667 33.6325C43.5812 28.761 49.0045 24.5159 55.1389 20.8979C60.1667 18.0071 65.4966 15.6179 71.1291 13.7305C73.8626 12.8145 75.8027 10.2968 75.8027 7.38572C75.8027 3.6497 72.6341 0.62247 68.8814 1.1527C61.1635 2.2432 53.7398 4.41426 46.6119 7.66522C37.5369 11.6459 29.5729 17.0612 22.7236 23.9105C16.0322 30.6019 10.618 38.4859 6.47981 47.558L6.47976 47.558L6.47682 47.5647C2.4901 56.6544 0.5 66.6148 0.5 77.4391C0.5 84.2996 1.61702 90.7679 3.85425 96.8404L3.8558 96.8445C6.08991 102.749 9.12394 108.02 12.959 112.654L12.959 112.654L12.9646 112.661C16.8027 117.138 21.2829 120.739 26.4034 123.459L26.4033 123.459L26.4144 123.465C31.5505 126.033 37.0873 127.316 43.0178 127.316C47.5035 127.316 51.6783 126.595 55.5376 125.148L55.5376 125.148L55.5477 125.144C59.5516 123.542 63.0052 121.456 65.9019 118.881L65.5697 118.507Z">
                            </path>
                            <use href="#b56e9dab-6ccb-4d32-ad02-6b4bb5d9bbeb" x="86"></use>
                        </svg> --}}
                        <div class="text-xl/8   text-white sm:text-2xl/9">
                            {!! $data['profile_content'] !!}
                        </div>
                        <div class="mt-8 text-base">
                            <div class="font-semibold text-white">{{ $data['profile_heading'] }}</div>
                            <div class="mt-1 text-gray-400">{{ $data['profile_subheading'] }}</div>
                        </div>
                    </div>

                    @if ($data['profile_buttons'] && count($data['profile_buttons']) > 0)
                        <div class="mt-8">
                            @foreach ($data['profile_buttons'] as $button)
                                <flux:button :href="$button['url']" :variant="$button['variant']"
                                    icon-trailing="arrow-right">{{ $button['label'] }}</flux:button>
                            @endforeach
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>

    {{-- <div class="h-full flex flex-col items-center justify-center space-y-4">
        <div class="flex flex-col items-center justify-center space-y-4 py-6">


            <flux:separator variant="subtle" class="my-3" />
            <div class="flex items-center justify-center space-x-4 py-12">
                <ul role="list">
                    <li class="flex"><a
                            class="group flex text-sm font-medium text-zinc-800 transition hover:text-yellow-600 dark:text-zinc-200 dark:hover:text-yellow-600"
                            target="_blank" href="https://twitter.com/janushelkjaer"><svg viewBox="0 0 24 24"
                                aria-hidden="true"
                                class="h-6 w-6 flex-none fill-zinc-500 transition group-hover:fill-yellow-600">
                                <path
                                    d="M13.3174 10.7749L19.1457 4H17.7646L12.7039 9.88256L8.66193 4H4L10.1122 12.8955L4 20H5.38119L10.7254 13.7878L14.994 20H19.656L13.3171 10.7749H13.3174ZM11.4257 12.9738L10.8064 12.0881L5.87886 5.03974H8.00029L11.9769 10.728L12.5962 11.6137L17.7652 19.0075H15.6438L11.4257 12.9742V12.9738Z">
                                </path>
                            </svg><span class="ml-4">Follow on X</span></a></li>
                    <li class="mt-4 flex"><a
                            class="group flex text-sm font-medium text-zinc-800 transition hover:text-yellow-600 dark:text-zinc-200 dark:hover:text-yellow-600"
                            target="_blank" href="https://www.instagram.com/janushelkjaer"><svg viewBox="0 0 24 24"
                                aria-hidden="true"
                                class="h-6 w-6 flex-none fill-zinc-500 transition group-hover:fill-yellow-600">
                                <path
                                    d="M12 3c-2.444 0-2.75.01-3.71.054-.959.044-1.613.196-2.185.418A4.412 4.412 0 0 0 4.51 4.511c-.5.5-.809 1.002-1.039 1.594-.222.572-.374 1.226-.418 2.184C3.01 9.25 3 9.556 3 12s.01 2.75.054 3.71c.044.959.196 1.613.418 2.185.23.592.538 1.094 1.039 1.595.5.5 1.002.808 1.594 1.038.572.222 1.226.374 2.184.418C9.25 20.99 9.556 21 12 21s2.75-.01 3.71-.054c.959-.044 1.613-.196 2.185-.419a4.412 4.412 0 0 0 1.595-1.038c.5-.5.808-1.002 1.038-1.594.222-.572.374-1.226.418-2.184.044-.96.054-1.267.054-3.711s-.01-2.75-.054-3.71c-.044-.959-.196-1.613-.419-2.185A4.412 4.412 0 0 0 19.49 4.51c-.5-.5-1.002-.809-1.594-1.039-.572-.222-1.226-.374-2.184-.418C14.75 3.01 14.444 3 12 3Zm0 1.622c2.403 0 2.688.009 3.637.052.877.04 1.354.187 1.67.31.421.163.72.358 1.036.673.315.315.51.615.673 1.035.123.317.27.794.31 1.671.043.95.052 1.234.052 3.637s-.009 2.688-.052 3.637c-.04.877-.187 1.354-.31 1.67-.163.421-.358.72-.673 1.036a2.79 2.79 0 0 1-1.035.673c-.317.123-.794.27-1.671.31-.95.043-1.234.052-3.637.052s-2.688-.009-3.637-.052c-.877-.04-1.354-.187-1.67-.31a2.789 2.789 0 0 1-1.036-.673 2.79 2.79 0 0 1-.673-1.035c-.123-.317-.27-.794-.31-1.671-.043-.95-.052-1.234-.052-3.637s.009-2.688.052-3.637c.04-.877.187-1.354.31-1.67.163-.421.358-.72.673-1.036.315-.315.615-.51 1.035-.673.317-.123.794-.27 1.671-.31.95-.043 1.234-.052 3.637-.052Z">
                                </path>
                                <path
                                    d="M12 15a3 3 0 1 1 0-6 3 3 0 0 1 0 6Zm0-7.622a4.622 4.622 0 1 0 0 9.244 4.622 4.622 0 0 0 0-9.244Zm5.884-.182a1.08 1.08 0 1 1-2.16 0 1.08 1.08 0 0 1 2.16 0Z">
                                </path>
                            </svg><span class="ml-4">Follow on Instagram</span></a></li>
                    <li class="mt-4 flex"><a
                            class="group flex text-sm font-medium text-zinc-800 transition hover:text-yellow-600 dark:text-zinc-200 dark:hover:text-yellow-600"
                            target="_blank" href="https://github.com/neighbourino"><svg viewBox="0 0 24 24"
                                aria-hidden="true"
                                class="h-6 w-6 flex-none fill-zinc-500 transition group-hover:fill-yellow-600">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M12 2C6.475 2 2 6.588 2 12.253c0 4.537 2.862 8.369 6.838 9.727.5.09.687-.218.687-.487 0-.243-.013-1.05-.013-1.91C7 20.059 6.35 18.957 6.15 18.38c-.113-.295-.6-1.205-1.025-1.448-.35-.192-.85-.667-.013-.68.788-.012 1.35.744 1.538 1.051.9 1.551 2.338 1.116 2.912.846.088-.666.35-1.115.638-1.371-2.225-.256-4.55-1.14-4.55-5.062 0-1.115.387-2.038 1.025-2.756-.1-.256-.45-1.307.1-2.717 0 0 .837-.269 2.75 1.051.8-.23 1.65-.346 2.5-.346.85 0 1.7.115 2.5.346 1.912-1.333 2.75-1.05 2.75-1.05.55 1.409.2 2.46.1 2.716.637.718 1.025 1.628 1.025 2.756 0 3.934-2.337 4.806-4.562 5.062.362.32.675.936.675 1.897 0 1.371-.013 2.473-.013 2.82 0 .268.188.589.688.486a10.039 10.039 0 0 0 4.932-3.74A10.447 10.447 0 0 0 22 12.253C22 6.588 17.525 2 12 2Z">
                                </path>
                            </svg><span class="ml-4">Follow on GitHub</span></a></li>
                    <li class="mt-4 flex"><a
                            class="group flex text-sm font-medium text-zinc-800 transition hover:text-yellow-600 dark:text-zinc-200 dark:hover:text-yellow-600"
                            target="_blank" href="https://www.linkedin.com/in/janushelkjaer/"><svg viewBox="0 0 24 24"
                                aria-hidden="true"
                                class="h-6 w-6 flex-none fill-zinc-500 transition group-hover:fill-yellow-600">
                                <path
                                    d="M18.335 18.339H15.67v-4.177c0-.996-.02-2.278-1.39-2.278-1.389 0-1.601 1.084-1.601 2.205v4.25h-2.666V9.75h2.56v1.17h.035c.358-.674 1.228-1.387 2.528-1.387 2.7 0 3.2 1.778 3.2 4.091v4.715zM7.003 8.575a1.546 1.546 0 01-1.548-1.549 1.548 1.548 0 111.547 1.549zm1.336 9.764H5.666V9.75H8.34v8.589zM19.67 3H4.329C3.593 3 3 3.58 3 4.297v15.406C3 20.42 3.594 21 4.328 21h15.338C20.4 21 21 20.42 21 19.703V4.297C21 3.58 20.4 3 19.666 3h.003z">
                                </path>
                            </svg><span class="ml-4">Follow on LinkedIn</span></a></li>
                    <li class="mt-8 border-t border-zinc-100 pt-8 dark:border-zinc-700/40 flex"><a
                            class="group flex text-sm font-medium text-zinc-800 transition hover:text-yellow-600 dark:text-zinc-200 dark:hover:text-yellow-600"
                            target="_blank" href="mailto:hello@janushelkjaer.com"><svg viewBox="0 0 24 24"
                                aria-hidden="true"
                                class="h-6 w-6 flex-none fill-zinc-500 transition group-hover:fill-yellow-600">
                                <path fill-rule="evenodd"
                                    d="M6 5a3 3 0 0 0-3 3v8a3 3 0 0 0 3 3h12a3 3 0 0 0 3-3V8a3 3 0 0 0-3-3H6Zm.245 2.187a.75.75 0 0 0-.99 1.126l6.25 5.5a.75.75 0 0 0 .99 0l6.25-5.5a.75.75 0 0 0-.99-1.126L12 12.251 6.245 7.187Z">
                                </path>
                            </svg><span class="ml-4">hello@janushelkjaer.com</span></a></li>
                </ul>
            </div>
        </div>

    </div> --}}
