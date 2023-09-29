<?php

namespace App\Livewire;

use App\Models\Comment;
use Livewire\Component;
use Livewire\WithPagination;
use Livewire\Attributes\On;

class ShowComments extends Component
{  
    use WithPagination;

    public $postId;
    public $newComment;
    public $author;

    public function addComment()
    {
        Comment::create([
            'post_id' => $this->postId,
            'author' => $this->author,
            'content' => $this->newComment,
        ]);

        $this->newComment = '';
        $this->author = '';
    }

    public function render()
    {
        $comments = Comment::where('post_id', $this->postId)->paginate(5); // for example, 5 comments per page
        return view('livewire.show-comments', ['comments' => $comments]);
    }

}
