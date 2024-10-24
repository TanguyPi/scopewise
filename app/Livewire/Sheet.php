<?php

namespace App\Livewire;

use Livewire\Component;
use Auth;
use App\Models\MainForm;
use App\Models\Estimation;

class Sheet extends Component
{
    public $data;

    public function mount($id){
        $this->data = Estimation::where('id',$id)->with(['mainform' => function($query){
            $query->where('user_id',Auth::user()->id);
        }])->get();
    }

    public function render()
    {
        return view('livewire.sheet');
    }
}
