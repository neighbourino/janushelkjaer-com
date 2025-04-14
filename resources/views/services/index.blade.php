<x-app-layout>

    <div class="max-w-7xl mx-auto">


        <div class="bg-zinc-50 px-6 py-24 sm:py-24 lg:px-8 mb-6 rounded-lg  shadow relative ">
            <div class="mx-auto max-w-2xl text-center">
                <h2 class="text-5xl font-semibold tracking-tight text-gray-900 sm:text-7xl">Services</h2>
                <p class="mt-8 text-pretty text-lg font-medium text-gray-500 sm:text-xl/8">
                    Here are some of the services I offer.
                </p>
            </div>
        </div>

        @if ($services->count() > 0)
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach ($services as $service)
                    @php
                        $mediaItems = $service->getMedia('services');
                        $publicFullUrl = isset($mediaItems[0])
                            ? $mediaItems[0]->getFullUrl()
                            : 'https://placehold.co/540x540?text=' . $service->title;

                    @endphp
                    <flux:card
                        class="border-none bg-zinc-50 shadow aspect-square flex items-center justify-center hover:bg-white hover:shadow-md transition-colors duration-300">
                        <div class="">
                            <div class="mb-6">
                                {{-- <div
                                    class="w-full h-64 max-h-64 rounded-lg overflow-hidden bg-white p-6 shadow-inner flex items-center justify-center">
                                    <img src="{{ $publicFullUrl }}" alt="{{ $service->title }}"
                                        class="w-32 h-32 object-contain ">
                                </div> --}}
                                <div class="w-full flex items-center justify-center">
                                    <img src="{{ $publicFullUrl }}" alt="{{ $service->title }}"
                                        class="w-24 h-24 object-contain ">
                                </div>
                            </div>
                            <div class="p-3 space-y-3 flex flex-col items-center justify-center">
                                <div class="">
                                    <flux:heading size="lg" class="font-semibold">{{ $service->title }}
                                    </flux:heading>
                                    <flux:subheading>{!! $service->short_description !!}</flux:subheading>
                                </div>

                                <div class="mt-auto">
                                    <flux:button href="{{ route('services.show', $service->slug) }}" variant="ghost"
                                        icon-trailing="arrow-right">More Info</flux:button>
                                </div>
                            </div>
                        </div>
                    </flux:card>
                @endforeach
            </div>

            <div class="mt-10 space-y-6">

                @foreach ($services as $service)
                    @php
                        $mediaItems = $service->getMedia('services');
                        $publicFullUrl = isset($mediaItems[0])
                            ? $mediaItems[0]->getFullUrl()
                            : 'https://placehold.co/540x540?text=' . $service->title;

                    @endphp
                    <div class="bg-white border border-zinc-100 rounded-lg p-6">
                        <section aria-labelledby="features-heading" class="relative">
                            <img src="{{ $publicFullUrl }}" alt="{{ $service->title }}"
                                class="aspect-[3/2] w-full object-contain p-16  sm:aspect-[5/2] lg:absolute lg:aspect-auto lg:h-full lg:w-1/2 lg:pr-4 xl:pr-16">

                            <div
                                class="mx-auto max-w-2xl px-4 pb-24 pt-16 sm:px-6 sm:pb-32 lg:grid lg:max-w-7xl lg:grid-cols-2 lg:gap-x-8 lg:px-8 lg:pt-32">
                                <div class="lg:col-start-2">
                                    <h2 id="features-heading" class="font-medium text-gray-500">{{ $service->title }}
                                    </h2>
                                    <p class="mt-4 text-4xl font-bold tracking-tight text-gray-900">
                                        {{ $service->title }}</p>
                                    <p class="mt-4 text-gray-500">{{ $service->description }}</p>

                                    <dl class="mt-10 grid grid-cols-1 gap-x-8 gap-y-10 text-sm sm:grid-cols-2">
                                        <div>
                                            <dt class="font-medium text-gray-900">Durable</dt>
                                            <dd class="mt-2 text-gray-500">The leather cover and machined steel disc
                                                binding stand up to daily use for years to come.</dd>
                                        </div>
                                        <div>
                                            <dt class="font-medium text-gray-900">Refillable</dt>
                                            <dd class="mt-2 text-gray-500">Buy it once and refill as often as you need.
                                                Subscribe and save on routine refills.</dd>
                                        </div>
                                        <div>
                                            <dt class="font-medium text-gray-900">Thoughtfully designed</dt>
                                            <dd class="mt-2 text-gray-500">The comfortable disc binding allows you to
                                                quickly rearrange pages or combine lined, graph, and blank refills.</dd>
                                        </div>
                                        <div>
                                            <dt class="font-medium text-gray-900">Locally made</dt>
                                            <dd class="mt-2 text-gray-500">Responsibly and sustainably made real close
                                                to wherever you are, somehow.</dd>
                                        </div>
                                    </dl>
                                </div>
                            </div>
                        </section>
                    </div>
                @endforeach
            </div>
        @else
            <p>No projects found</p>
        @endif
    </div>
</x-app-layout>
