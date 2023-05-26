<?php

namespace App\Http\Livewire\Post;

use App\Models\Post;
use Livewire\Component;

class Add extends Component
{
    public $title;
    public $content;

    public function render()
    {
        return view('livewire.post.add');
    }

    public function save(){
        $input = $this->validate([
            'title' => 'required',
            'content' => 'required'
        ]);

        $post = new Post();
        $post->title = $this->title;
        $post->content = $this->content;
        try {
            $post->save();
            session()->flash('msg', __('Post Saved Sucessfully'));
            session()->flash('alert', 'successs');
        } catch (\Throwable $th) {
            session()->flash('msg', $th);
            session()->flash('alert', 'danger');
        }
    }
}
