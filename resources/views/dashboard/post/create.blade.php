@extends('dashboard.master')

@section('content')
    <form action="{{ route('post.store') }}" method="post">
        @csrf
        
        <label for="title">Title</label>
        <input type="text" name="title" id="title">

        <label for="slug">Slug</label>
        <input type="text" name="slug" id="slug">

        <label for="content">Content</label>
        <textarea name="content" id="content" cols="30" rows="10"></textarea>

        <label for="category_id">Category</label>
        <select name="category_id" id="category_id">
            @foreach ($categories as $title => $id)
                <option value="{{ $id }}">{{ $title }}</option>
            @endforeach
        </select>

        <label for="description">Description</label>
        <textarea name="description" id="description" cols="30" rows="10"></textarea>

        <label for="posted">Posted</label>
        <select name="posted" id="posted">
            <option value="yes">Yes</option>
            <option value="not">No</option>
        </select>

        <button type="submit">
            Send
        </button>
    </form>
@endsection
