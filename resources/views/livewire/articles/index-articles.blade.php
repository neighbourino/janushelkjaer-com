<div>

    <div class="grid grid-cols-1 gap-4 md:grid-cols-2 lg:grid-cols-4">
        <div class="col-span-1">
            <flux:navlist class="w-64">
                <flux:navlist.item href="#" icon="home">Dashboard</flux:navlist.item>
                <flux:navlist.item href="#" icon="list-bullet">Transactions</flux:navlist.item>

                <flux:navlist.group heading="Account" expandable>
                    <flux:navlist.item href="#">Profile</flux:navlist.item>
                    <flux:navlist.item href="#">Settings</flux:navlist.item>
                    <flux:navlist.item href="#">Billing</flux:navlist.item>
                </flux:navlist.group>
            </flux:navlist>
        </div>
        <div class="col-span-3">
            @if ($articles->count() > 0)

                <div class="grid grid-cols-1 gap-4">
                    @foreach ($articles as $key => $article)
                        @php
                            $mediaItems = $article->getMedia('articles');
                            $publicFullUrl = isset($mediaItems[0]) ? $mediaItems[0]->getFullUrl() : '';

                            #var_dump($mediaItems);

                        @endphp
                        <flux:card class="flex flex-col md:flex-row">
                            <a href="{{ route('articles.show', $article) }}"
                                class="block hover:opacity-75 transition-opacity duration-300 border-yellow-500 border-4 rounded shadow">
                                <img src="{{ $publicFullUrl }}" alt="{{ $article->title }}"
                                    class="object-cover rounded shadow  h-48 w-64">
                            </a>
                            <div class="px-6 py-3 flex flex-col w-full">
                                <flux:heading size="lg">{{ $article->title }}</flux:heading>

                                <flux:subheading class="mb-4">
                                    {{ $article->created_at->diffForHumans() }}
                                </flux:subheading>

                                <flux:subheading class="mb-4">
                                    {{ $article->excerpt }}
                                </flux:subheading>

                                <flux:button class="ml-auto mt-auto" icon="plus"
                                    href="{{ route('articles.show', $article) }}">Read Article
                                </flux:button>
                            </div>
                        </flux:card>
                    @endforeach
                </div>
            @else
                <div class="alert alert-warning" role="alert">
                    No articles found.
                </div>
            @endif
        </div>
    </div>

</div>
