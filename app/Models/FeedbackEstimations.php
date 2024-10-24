<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FeedbackEstimations extends Model
{
    protected $guarded = [''];

    // Feedback appartient à Estimation
    public function estimation(){
        return $this->belongsTo(Estimaton::class,'foreign_key');
    }
}
