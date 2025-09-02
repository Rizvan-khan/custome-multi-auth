
<div class="container">
    <h2>All Posts</h2>
    <a href="{{ route('posts.create') }}" class="btn btn-primary mb-3">Add Post</a>
    @foreach($posts as $post)
        <div class="card mb-3">
            <div class="card-body">
                <h4>{{ $post->title }}</h4>
                <p>{{ $post->body }}</p>
                <small>By: {{ $post->user->name }}</small>
                @if($post->user_id == Auth::id())
                    <div class="mt-2">
                        <a href="{{ route('posts.edit', $post) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('posts.destroy', $post) }}" method="POST" style="display:inline;">
                            @csrf @method('DELETE')
                            <button class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</button>
                        </form>
                    </div>
                @endif
            </div>
        </div>
    @endforeach
</div>

