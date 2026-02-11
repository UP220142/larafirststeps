@extends('master')

@section('content')
    <h1>Contact Page 1</h1>
    <p>{{ $name }}</p>

    @if ($name != 'John')
        <p>Name is not John</p>
    @else
        <p>Name is John</p>
    @endif
    <ul>
        @foreach ([1, 2, 3, 4, 5, 6, 7, 8, 9] as $item)
            <li>{{ $item }}</li>
        @endforeach
    </ul>
@endsection
