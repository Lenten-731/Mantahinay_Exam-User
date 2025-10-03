<?php

namespace App\Livewire\Posts;

use Livewire\Component;
use App\Models\Post;

class Table extends Component
{
    public $posts;

    
    public function mount()
    {
        $this->posts  = Post::all();
    }

    public function render()
    {
        return view('livewire.posts.table');
    }
}