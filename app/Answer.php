<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    //
    protected $fillable = ['isi'];

    public function question(){
        return $this->belongsTo(Question::class);
    }
}
