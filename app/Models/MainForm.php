<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class MainForm extends Model
{
    protected $guarded = [''];

    public function users(){
        return $this->belongsTo(User::class,'user_id');
    }

    public function estimation(){
        return $this->HasOne(Estimation::class);
    }
}

