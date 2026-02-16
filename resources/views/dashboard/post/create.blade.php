@extends('dashboard.master')

@section('content')
    @include('dashboard/fragment/errors-form')
    <h1>Crear Post</h1>

    <form action="{{ route('post.store') }}" method="post">
        @include('dashboard.post._form')
    </form>
@endsection
