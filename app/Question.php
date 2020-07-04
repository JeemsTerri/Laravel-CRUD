<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    //
    protected $fillable = ['judul', 'isi'];

    public function answers(){
        return $this->hasMany(Answer::class);
    }

    public function addAnswer($answer){
        $this->answers()->create($answer);
    }
}
