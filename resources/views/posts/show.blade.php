<x-app-layout>
    <article class="prose prose-lg">
        <h1>{{ $post->title }}</h1>
        <div>{{ $post->contents }}</div>
        <div class="text-sm mt-10">
            {{ $post->author }} / {{ $post->date->toDateString() }}
        </div>
    </article>
</x-app-layout>
