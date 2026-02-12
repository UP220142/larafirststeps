@extends('dashboard.master')

@section('content')
    <form action="{{ route('post.store') }}" method="post">
        @csrf
        
        <label for="">Title</label>
        <input type="text" name="title">

        <label for="">Slug</label>
        <input type="text" name="slug">

        <label for="">Content</label>
        <textarea name="content" id="" cols="30" rows="10"></textarea>

        <label for="">Category</label>
        <select name="category_id">
            @foreach ($categories as $title => $id)
                <option value="{{ $id }}">{{ $title }}</option>
            @endforeach

        </select>

        <label for="">Description</label>
        <textarea name="description" id="" cols="30" rows="10"></textarea>

        <label for="">Posted</label>
        <select name="posted">
            <option value="yes">Yes</option>
            <option value="not">No</option>

        </select>

        <button type="submit">
            Send
        </button>
    </form>
@endsection
