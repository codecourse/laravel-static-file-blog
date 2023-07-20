<div class="text-sm mt-10">
    {{ $post->author }} / {{ $post->date->toDateString() }}
    @if (count($post->tags))
        <ul class="not-prose p-0 list-none flex items-center space-x-1 mt-2">
            @foreach ($post->tags as $tag)
                <li class="text-sm"><a href="{{ route('tags.show', $tag) }}" class="text-blue-500">{{ Str::title($tag) }}</a></li>
            @endforeach
        </ul>
    @endif
</div>
