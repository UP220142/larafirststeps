@extends('dashboard.master')

@section('content')
        <h1>Post Index</h1>
        <table>
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Category</th>
                    <th>Posted</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($posts as $post)
                    <tr>
                        <td>
                            {{ $post->title }}
                        </td>
                        <td>
                            {{ $post-> posted }}
                        </td>
                        <td>
                            {{ $post->category->title }}
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
@endsection
