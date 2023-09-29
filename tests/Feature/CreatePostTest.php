<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use App\Livewire\CreatePost;
use Livewire\Livewire;
use Tests\TestCase;

class CreatePostTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function it_dispatches_post_created_event()
    {
        Livewire::test(CreatePost::class)
            ->set('title', 'Test Title')
            ->set('content', 'Test Content')
            ->call('save')
            ->assertDispatched('post-created');
    }

}




