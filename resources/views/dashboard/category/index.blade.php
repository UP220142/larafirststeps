@extends('dashboard.master')

@section('content')
    <h1>Category Index</h1>

    <a href="{{ route('category.create') }}">Crear Categoría</a>

    <table>
        <thead>
            <tr>
                <th>Title</th>
                <th>ID</th>
                <th>Options</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($categories as $category)
                <tr>
                    <td>
                        {{ $category->title }}
                    </td>
                    <td>
                        {{ $category->id }}
                    </td>
                    <td>
                        <a href="{{ route('category.show', $category->id) }}">Mostrar</a>
                        <a href="{{ route('category.edit', $category->id) }}">Editar</a>

                        <form action="{{ route('category.destroy', $category->id) }}" method="POST" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" onclick="return confirm('¿Estás seguro?')">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{ $categories->links() }}
@endsection
