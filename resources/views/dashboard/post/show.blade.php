@extends('dashboard.master')

@section('content')
    <h1>Post Details</h1>

    <p><strong>Title:</strong> {{ $post->title }}</p>
    <p><strong>ID:</strong> {{ $post->id }}</p>
    <p><strong>Posted:</strong> {{ $post->posted }}</p>
    <p><strong>Category:</strong> {{ $post->category->title }}</p>
    <p><strong>Image:</strong></p>
    @if ($post->image)
        <img src="{{ asset('upload/posts/' . $post->image) }}" alt="{{ $post->title }}" style="max-width:150px;">
    @else
        <p>No image available.</p>
    @endif

    <a href="{{ route('post.index') }}">Back to Posts</a>
@endsection
