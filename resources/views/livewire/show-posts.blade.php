<div>

<input type="text" wire:model.live="search" placeholder="Search posts...">

    <h1>All Posts</h1>
    @foreach($posts as $post)
        <div>
            <h3>{{ $post->title }}</h3>
            <p>{{ $post->content }}</p>
            @foreach($post->photos as $photo)
                <img src="{{ Storage::url($photo->photo_path) }}" alt="{{ $post->title }}" width="300">
            @endforeach

            <!-- Display comments for each post -->
            <div class="comments-section">
                <h4>Comments:</h4>
                @livewire('show-comments', ['postId' => $post->id])
            </div>
        </div>
    @endforeach

    {{ $posts->links() }}
</div>
