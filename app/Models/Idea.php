<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Idea extends Model
{
    protected $fillable = ['name'];

    public function votes(){
        return $this->hasMany(Vote::class);
    }

    // Compte le nombre de non
    public function countYes(){
        return $this->votes()->where('answer','like','%Yes%')->count();
    }
    // Compte le nombre de non
    public function countNo(){
        return $this->votes()->where('answer','like','%No%')->count();
    }

    // Vote non
}
