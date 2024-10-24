<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\User;
use App\Models\Idea;
use App\Models\Vote;
use Auth;

class Ideas extends Component
{
    public $ideas;
    public $hasVoted;
    public $idea_id;
    public $vote;
    public $answer = [];
    public $idea;
    public $metaDescription;

    public function mount(){
        $this->ideas = Idea::with('votes')->get();
        $this->metaDescription = "Welcome to your dashboard!";
    }

    // Count yes and no
    public function getVoteCounts($ideaId){
    $idea = Idea::find($ideaId);
    // Compter les votes "Oui" et "Non"
    $yes = $idea->countYes();
    $no = $idea->countNo();
    return [
        'countYes' => $yes,
        'countNo' => $no
    ];
}


    public function submitVotes($idea_id){
        $this->hasVoted = Vote::where('user_id',Auth::user()->id)->where('idea_id',$idea_id)->first();

        if(! $this->hasVoted){

            $this->validate([
                'answer' => 'required' 
            ]);
            Vote::create([
                'idea_id' => $idea_id,
                'user_id' => Auth::user()->id,
                'answer' => json_encode($this->answer),
            ]);
            session()->flash('message', 'Thanks for voting!');
            $this->answer = [];

        }else{    
            session()->flash('message', 'You have voted for this one!');    
        }
    }

    public function render()
    {
        return view('livewire.ideas')->extends('layouts.app')->section('meta');
    }
}
