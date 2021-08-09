@extends('layouts.master')

@section('content')

    <div class="container">

        <h1>{{ $post->title }}</h1>
        <p class="blog-post-meta">{{ $post->created_at->toFormattedDateString() }}</p>
        <p>{{ $post->content }}</p>

    </div>

@endsection
