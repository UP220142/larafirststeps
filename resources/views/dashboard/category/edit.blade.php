@extends('dashboard.master')

@section('content')
    @include('dashboard/fragment/errors-form')
    <h1>Editar Categoría</h1>

    <form action="{{ route('category.update', $category->id) }}" method="POST">
        @include('dashboard.category._form', ['task' => 'edit'])
    </form>
@endsection
