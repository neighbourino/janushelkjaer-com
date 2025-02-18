<x-app-layout>
    @if ($projects->count() > 0)
        <div class="grid grid-cols-1 gap-4 space-y-6">
            @foreach ($projects as $project)
                @php
                    $mediaItems = $project->getMedia('projects');
                    $publicFullUrl = isset($mediaItems[0])
                        ? $mediaItems[0]->getFullUrl()
                        : 'https://placehold.co/540x540?text=' . $project->title;

                @endphp
                <flux:card class="shadow">
                    <div class="grid grid-cols-3 gap-4">
                        <div class="col-span-1 ">
                            <div
                                class="w-full h-full max-h-64 rounded-lg overflow-hidden bg-zinc-50 p-6 shadow-inner flex items-center justify-center">
                                <img src="{{ $publicFullUrl }}" alt="{{ $project->title }}"
                                    class="w-full h-full object-contain ">
                            </div>
                        </div>
                        <div class="col-span-2 flex flex-col justify-between">
                            <div class="px-3 py-1">
                                <flux:heading size="xl" class="font-display">{{ $project->title }}</flux:heading>
                                <flux:subheading>{{ $project->short_description }}</flux:subheading>
                            </div>

                            <div class="mt-auto flex justify-end">
                                <flux:button href="{{ route('projects.show', $project->slug) }}" variant="filled"
                                    icon-trailing="arrow-right">View
                                    Project</flux:button>
                            </div>
                        </div>
                    </div>
                </flux:card>
            @endforeach
        </div>
    @else
        <p>No projects found</p>
    @endif
</x-app-layout>
