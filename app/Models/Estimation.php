<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estimation extends Model
{
    protected $guarded = [''];

    public function mainform(){
        return $this->belongsTo(MainForm::class,'foreign_key');
    }

    public function feedback(){
        return $this->hasOne(FeedbackEstimations::class);
    }
}