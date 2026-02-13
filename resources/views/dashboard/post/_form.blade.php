@csrf
@isset($post->id)
    @method('PUT')
@endisset

<label for="title">Tittle:</label>
<input type="text" name="title" id="title" value="{{ old('title', $post->title ?? '') }}">
@error('title')
    <small>{{ $message }}</small>
@enderror

<label for="slug">Slug:</label>
<input type="text" name="slug" id="slug" value="{{ old('slug', $post->slug ?? '') }}">
@error('slug')
    <small>{{ $message }}</small>
@enderror

<label for="content">Content:</label>
<textarea name="content" id="content">{{ old('content', $post->content ?? '') }}</textarea>
@error('content')
    <small>{{ $message }}</small>
@enderror

<label for="category_id">Category:</label>
<select name="category_id" id="category_id">
    @foreach ($categories as $id => $title)
        <option value="{{ $id }}" {{ old('category_id', $post->category_id ?? '') == $id ? 'selected' : '' }}>
            {{ $title }}
        </option>
    @endforeach
</select>
@error('category_id')
    <small>{{ $message }}</small>
@enderror

<label for="description">Description</label>
<textarea name="description" id="description" cols="30" rows="10">{{ old('description', $post->description ?? '') }}</textarea>
@error('description')
    <small>{{ $message }}</small>
@enderror

<label for="posted">Posted:</label>
<select name="posted" id="posted">
    <option value="yes" {{ old('posted', $post->posted ?? '') == 'yes' ? 'selected' : '' }}>Yes</option>
    <option value="not" {{ old('posted', $post->posted ?? '') == 'not' ? 'selected' : '' }}>No</option>
</select>
@error('posted')
    <small>{{ $message }}</small>
@enderror

<button type="submit">{{ isset($post->id) ? 'Update' : 'Send' }}</button>
