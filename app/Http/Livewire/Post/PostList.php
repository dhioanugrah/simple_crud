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
    public function deletePost($id){
        $post = Post::find($id);
        if (!empty($post)) 
        {
            $post->delete();
            session()->flash('msg', __('Post Delete Sucessfully'));
            session()->flash('alert', 'successs');
        }else{
            session()->flash('msg', __('Post Not Found'));
            session()->flash('alert', 'danger');
        }
        }
}
