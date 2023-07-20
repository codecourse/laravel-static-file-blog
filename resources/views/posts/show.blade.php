<x-app-layout>
    <article class="prose prose-lg">
        <h1>{{ $post->title }}</h1>
        <div>{{ $post->contents }}</div>
        <x-post-meta :post="$post" />
    </article>
</x-app-layout>
