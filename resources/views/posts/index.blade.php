<x-app-layout>
    <div class="space-y-16">
        @if ($posts->count())
            @foreach ($posts as $post)
                <article class="prose">
                    <h1 class="not-prose">
                        <a href="" class="hover:text-blue-500 transition-colors duration-100">{{ $post->title }}</a>
                    </h1>
                    <div>{{ $post->teaser }}</div>
                    <div class="text-sm mt-10">
                        {{ $post->author }} / {{ $post->date->toDateString() }}
                    </div>
                </article>
            @endforeach
        @else
            <p>Nothing here yet.</p>
        @endif
    </div>
</x-app-layout>
