<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\MainForm;
use Auth;
use OpenAI\Client\Facades\OpenAI;

class ProjectForm extends Component
{
    public $name = '';
    public $team = '';
    public $design = '';
    public $docker = '';
    public $stack = [];
    public $free_stack = '';
    public $description = '';
    public $features = '';
    public $experience = '';
    public $unitaire = '';
    public $qa = '';
    public $hosting = [];
    public $devops = '';
    public $risk = 3;

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
        
        if($this->currentStep == 0){
            $this->validate([
                'name' => 'required|min:2|max:20',
                'team' => 'required',
                'experience' => 'required',
                'stack' => '',
                'free_stack' => 'required_without:stack'
            ]);
        }elseif($this->currentStep == 1){
            $this->validate([
                'design' => 'required',
                'description' => 'required|min:5',
                'features' => 'required|min:5'
            ]);
        }elseif($this->currentStep == 2){
            $this->validate([
                'unitaire' => 'required',
                'qa' => 'required',
                'docker' => 'required',
                'hosting' => 'required',
                'devops' => 'required',
                'risk' => 'required|numeric|min:0|max:5'
            ]);
        }

    }

    public function submitForm(){
        // On vérifier que la fonction est ok
        $this->ValidateForm();
            // Design info
            if($this->design == "yes"){
                $this->design = "Designer are going to do the mock-up of the application. Keep in mind it can have several types of feedback from the customer";
            }else{
                $this->design = "No mock-up has to be provided to the customer. O hour to add to the estimation. Nonetheless, you can mention that this may be a problem if the developer has no design for the integration.";
            }
            // Test unitaire info
            if($this->unitaire == "yes"){
                $this->unitaire = "The development team is going to do unit test";
            }else{
                $this->unitaire = "The development team is not going to do unit test";
            }
            // QA info
            if($this->qa == "yes"){
                $this->qa = "The development team is going to do a QA testing to automate application testing. It's useful for a big application, that's mean they have a QA working on it.";
            }else{
                $this->qa = "The development team is not going to do a QA testing. It's not necessary if it's a small project otherwise it's better to a QA testing. Manual testing will be done.";
            }
            // Docker info
            if($this->docker == "yes"){
                $this->docker = "Docker is going to be setup by the team. Add 1 day at least to the estimation.";
            }else{
                $this->docker = "The team is not going to setup docker. So, there is no estimation to add.";
            }
            // Risk info
            if($this->risk == 0){
                $this->risk = "The project has no risk";
            }elseif($this->risk == 1){
                $this->risk = "The project is low risk";
            }elseif($this->risk == 2){
                $this->risk = "The project involves some risks but these should not have a major impact on delivery";
            }elseif($this->risk == 3){
                $this->risk = "The project involves risks that may affect delivery";
            }elseif($this->risk == 4){
                $this->risk = "The project involves a lot of risks";
            }else{
                $this->risk = "The project is higly risky";
            }

            $form = MainForm::create([
                'user_id' => Auth::user()->id,
                'name' => $this->name,
                'team' => $this->team,
                'experience' => $this->experience,
                'stack' => json_encode($this->stack),
                'free_stack' => $this->free_stack,
                'design' => $this->design,
                'description' => $this->description,
                'features' => $this->features,
                'unitaire' => $this->unitaire,
                'qa' => $this->qa,
                'docker' => $this->docker,
                'hosting' => json_encode($this->hosting),
                'devops' => $this->devops,
                'risk' => $this->risk
            ]); 
        return redirect()->route('get.estimate',[$form]);  
    }


    public function render()
    {
        return view('livewire.project-form');
    }
}
