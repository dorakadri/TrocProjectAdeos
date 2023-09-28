@props(['tags'])

@php
    $tags = explode(',', $tags);
@endphp


@foreach ($tags as $tag)
    <a href="?tag={{ $tag }}" type="button" class="btn btn-soft-success p-1 rounded-pill"> #
        {{ $tag }}</a>
@endforeach
