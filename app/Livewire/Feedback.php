<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\MainForm;
use App\Models\Estimation;
use App\Models\FeedbackEstimations;
use OpenAI\Laravel\Facades\OpenAI;


class Feedback extends Component
{
    public $id;
    public $feedback;
    public $value;
    public $estimation;
    public $update;

    // On check si l'estimation a deja un feedback
    public function mount($id){
       $this->estimation = Estimation::where('id',$id)->with('feedback')->first(); 
    }

    public function submitFeedback(){
        $this->validate([
            'feedback' => 'required|min:2|max:3'
        ]);
        $this->value = FeedbackEstimations::create([
            'estimation_id' => $this->id,
            'feedback' => $this->feedback
        ]);
        session()->flash('message', 'Thanks for the feedback!');
    }


    public function render()
    {
        return view('livewire.feedback-estimations');
    }
}
