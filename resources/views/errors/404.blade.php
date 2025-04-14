<x-minimal-layout>
<div class="relative isolate min-h-full flex items-center justify-center">
    
    <div class="flex flex-col items-center justify-center">
        <div class="max-w-64 max-h-64 mb-6">
            <img src="{{ asset('images/404.png') }}" alt="404" class="w-full h-full object-contain">
        </div>
        <div><p class="text-base/8 font-semibold text-zinc-500">404</p>
            <h1 class=" text-balance text-5xl font-semibold tracking-tight  sm:text-7xl">
                {{ __('Not Found') }}
            </h1>
            <p class="mt-6 text-pretty text-lg font-medium /70 sm:text-xl/8">
                {{ __('Sorry, we couldn’t find the page you’re looking for.') }}
            </p>
            <div class="mt-10 flex justify-center">
                <a href="{{ config('app.url') }}" class="text-sm/7 font-semibold "><span
                        aria-hidden="true">&larr;</span> Back
                    to
                    home</a>
            </div></div>
    </div>
</div>

</x-minimal-layout>
