<?php

namespace App\Http\Livewire\Post;

use App\Models\Post;
use Livewire\Component;

class PostList extends Component
{
    public $keyword;
    public function render()
    {
        $posts = $this->getdata();
        return view('livewire.post.post-list', compact('posts'));
    }
    public function getdata(){
        $data = Post::where('title','like','%' . $this->keyword. '%')->paginate(12);
        return $data;
    }
}
