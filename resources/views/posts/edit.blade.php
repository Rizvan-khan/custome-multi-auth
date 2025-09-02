
<div class="container">
    <h2>Edit Post</h2>
    <form method="POST" action="{{ route('posts.update', $post) }}">
        @csrf @method('PUT')
        <div class="mb-3">
            <label>Title</label>
            <input type="text" name="title" value="{{ $post->title }}" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Body</label>
            <textarea name="body" class="form-control" required>{{ $post->body }}</textarea>
        </div>
        <button class="btn btn-primary">Update</button>
    </form>
</div>

