@extends('dashboard.master')

@section('content')
    <h1>Post Index</h1>

    <a href="{{route('post.create')}}">Crear Post</a>


    <table>
        <thead>
            <tr>
                <th>Title</th>
                <th>id</th>
                <th>Posted</th>
                <th>Category</th>
                <th>Options</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($posts as $post)
                <tr>
                    <td>
                        {{ $post->title }}
                    </td>
                    <td>
                        {{ $post->id }}
                    </td>
                    <td>
                        {{ $post->posted }}
                    </td>
                    <td>
                        {{ $post->category->title }}
                    </td>
                    <td>
                        
                        <a href="{{ route('post.edit', $post->id) }}">Editar</a>
                        
                        <a href="{{ route('post.show', $post->id) }}">Mostrar</a>

                        <form action="{{ route('post.destroy', $post->id) }}" method="POST" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" onclick="return confirm('shure?')">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{ $posts->links() }}
@endsection
