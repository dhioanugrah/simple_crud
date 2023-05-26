<?php

namespace App\Http\Livewire\Post;

use App\Models\Post;
use Livewire\Component;

class Edit extends Component
{
    public $title;
    public $content;
    public $data;
    public $postId;
    public $empty;
    
    public function mount(){
        $this->data = Post::find($this->postId);
        if(!empty($this->data)){
            $this->title = $this->data->title;
            $this->content = $this->data->content;
        }else{
            $this->empty = true;
            session()->flash('msg',__('Data Not Found'));
            session()->flash('alert','danger');
        }
    }

    public function render()
    {
        return view('livewire.post.edit');
    }
    public function edit(){
        $input = $this->validate([
            'title' => 'required',
            'content' => 'required'
        ]);

        $post = $this->data;
        $post->title = $this->title;
        $post->content = $this->content;
        try {
            $post->save();
            $this->reset();
            session()->flash('msg', __('Post Edit Sucessfully'));
            session()->flash('alert', 'successs');
        } catch (\Throwable $th) {
            session()->flash('msg', $th);
            session()->flash('alert', 'danger');
        }
    }
}
