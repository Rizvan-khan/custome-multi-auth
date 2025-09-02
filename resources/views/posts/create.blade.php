
<div class="container">
    <h2>Add Post</h2>
    <form method="POST" action="{{ route('posts.store') }}">
        @csrf
        <div class="mb-3">
            <label>Title</label>
            <input type="text" name="title" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Body</label>
            <textarea name="body" class="form-control" required></textarea>
        </div>
        <button class="btn btn-success">Save</button>
    </form>
</div>

