@php
    $tags = $tags ?? collect();
@endphp

@if ($tags->isNotEmpty())

    <div>
        @foreach ($tags as $tag)
            <a href="/articles/tags/{{ $tag->getRouteKey() }}" class="badge badge-info">{{ $tag->name }}</a>
        @endforeach
    </div>

@endif
