<x-app-layout>
    <h1 class="text-2xl font-bold">Tag: {{ $tag }}</h1>
    <div class="mt-16 space-y-16">
        @foreach ($posts as $post)
            <x-post-list-item :post="$post" />
        @endforeach

        {{ $posts->links() }}
    </div>
</x-app-layout>
