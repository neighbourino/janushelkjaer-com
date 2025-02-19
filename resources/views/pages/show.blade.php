<x-app-layout>

    <div class="flex flex-col  items-center w-full">
        @if ($page->content)



            @foreach ($page->content as $key => $blockComponent)
                <div class="py-1 w-full">
                    <div>
                        {{ $blockComponent['type'] }}
                    </div>
                    <x-dynamic-component :component="'blocks.' . $blockComponent['type']" :info="$blockComponent" />
                </div>
            @endforeach

        @endif
    </div>

</x-app-layout>
