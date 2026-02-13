@extends('dashboard.master')

@section('content')
    @include('dashboard/fragment/errors-form')
    <h1>Editar Post</h1>

    <form action="{{ route('post.update', $post->id) }}" method="POST">
        @include('dashboard.post._form')
    </form>
@endsection
