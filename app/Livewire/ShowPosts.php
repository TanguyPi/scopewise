<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Component;

class ShowPosts extends Component
{

    public $title = '';
    public $content = '';

    public function save(){

        $this->validate([
            'title' => 'required|min:3',
            'content' => 'required'
        ]);

        Post::create([
            'title' => $this->title,
            'content' => $this->content
        ]);

        return redirect('/posts');
        
    }


    public function delete($id){
        Post::find($id)->delete();
    }

    public function render(){
   
        return view('livewire.show-posts',[
            'posts' => Post::all(),
            ]);
    }
}
