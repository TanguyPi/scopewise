<?php

namespace App\Livewire;

use Livewire\Component;
use Auth;
use App\Models\MainForm;
use App\Models\Estimation;

class TableProjects extends Component
{
    public $projects;
    public $metaDescription;

    public function mount(){
        $this->projects = MainForm::where('user_id',Auth::user()->id)->with('estimation')->get();
        $this->metaDescription = "Check out your project!";
    }
    
    public function render()
    {
        return view('livewire.table-projects')->extends('layouts.app')->section('meta');
    }
}
