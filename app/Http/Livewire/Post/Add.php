<?php

namespace App\Http\Livewire\Post;

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

        dd($input);
    }
}
