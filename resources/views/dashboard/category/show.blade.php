@extends('dashboard.master')

@section('content')
    <h1>Post Details</h1>
    <p><strong>Title:</strong> {{ $post->title }}</p>
@endsection
