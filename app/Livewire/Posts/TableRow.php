<?php 
namespace App\Livewire\Posts;

use Livewire\Component;
use App\Models\Post;

class TableRow extends Component
{
    public Post $post;

    public function archived()
{
    $this->post->is_archived=true;
    $this->post->save();
}
public function render()
{
    return view('livewire.posts.table-row');
}
}
  
    