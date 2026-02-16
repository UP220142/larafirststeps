@extends('dashboard.master')

@section('content')
    @include('dashboard/fragment/errors-form')
    <h1>Crear Categoría</h1>

    <form action="{{ route('category.store') }}" method="post">
        @include('dashboard.category._form')
    </form>
@endsection
