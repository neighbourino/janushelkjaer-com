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
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                @foreach ($services as $service)
                    @php
                        $mediaItems = $service->getMedia('services');
                        $publicFullUrl = isset($mediaItems[0])
                            ? $mediaItems[0]->getFullUrl()
                            : 'https://placehold.co/540x540?text=' . $service->title;

                    @endphp
                    <flux:card class="shadow">
                        <div class="">
                            <div class="">
                                <div
                                    class="w-full h-full max-h-64 rounded-lg overflow-hidden bg-zinc-50 p-6 shadow-inner flex items-center justify-center">
                                    <img src="{{ $publicFullUrl }}" alt="{{ $service->title }}"
                                        class="w-full h-full object-contain ">
                                </div>
                            </div>
                            <div class="p-3 space-y-3 flex flex-col">
                                <div class="">
                                    <flux:heading size="xl" class="font-display">{{ $service->title }}
                                    </flux:heading>
                                    <flux:subheading>{{ $service->short_description }}</flux:subheading>
                                </div>

                                <div class="mt-auto">
                                    <flux:button href="{{ route('services.show', $service->slug) }}" variant="primary"
                                        icon-trailing="arrow-right">More Info</flux:button>
                                </div>
                            </div>
                        </div>
                    </flux:card>
                @endforeach
            </div>
        @else
            <p>No projects found</p>
        @endif
    </div>
</x-app-layout>
