<?php

namespace App\Livewire;

use Livewire\Component;

class CreatePost extends Component
{
    public $title = 'Hello world';
    public function render()
    {
        return view('livewire.create-post');
    }
}
