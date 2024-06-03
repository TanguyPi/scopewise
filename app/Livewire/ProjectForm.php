<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\MainForm;

class ProjectForm extends Component
{

    public $team = '';
    public $design = '';
    public $docker = '';
    public $stack = [];
    public $qa = '';
    public $description = '';
    public $features = '';
    public $experience = '';
    public $hosting = [];
    public $devops = '';

    public $currentStep = 0;

    public function nextStep()
    {
        $this->validateForm();
        $this->currentStep++;
    }

    public function previousStep()
    {
        $this->currentStep--;
    }

    public function validateForm(){
        if($this->currentStep == 1){
            $this->validate([
                'team' => 'required',
                'experience' => 'required',
                'stack' => 'required'
            ]);
        }elseif($this->currentStep == 2){
            $this->validate([
                'design' => 'required',
                'description' => 'required|min:5',
                'features' => 'required|min:5'
            ]);
        }elseif($this->currentStep == 3){
            $this->validate([
                'qa' => 'required',
                'docker' => 'required',
                'hosting' => 'required',
                'devps' => 'required'
            ]);

        }
    }

    public function submitForm(){

        MainForm::create([
            'team' => $this->team,
            'experience' => $this->experience,
            'stack' => json_encode($this->stack),
            'design' => $this->design,
            'description' => $this->description,
            'features' => $this->features,
            'qa' => $this->qa,
            'docker' => $this->docker,
            'hosting' => json_encode($this->hosting),
            'devops' => $this->devops
        ]);
        return redirect('/');
    }

    public function render()
    {
        return view('livewire.project-form');
    }
}
