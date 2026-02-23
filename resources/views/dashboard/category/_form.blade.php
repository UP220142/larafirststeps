@csrf
@isset($category->id)
    @method('PUT')
@endisset

<label for="title">Tittle:</label>
<input type="text" name="title" id="title" value="{{ old('title', $category->title ?? '') }}">
@error('title')
    <small>{{ $message }}</small>
@enderror

<label for="slug">Slug:</label>
<input type="text" name="slug" id="slug" value="{{ old('slug', $category->slug ?? '') }}">
@error('slug')
    <small>{{ $message }}</small>
@enderror

<button type="submit">{{ isset($category->id) ? 'Update' : 'Send' }}</button>
