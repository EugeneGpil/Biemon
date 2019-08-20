<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Article extends Model
{
    public function ownsAuthorizedUser(){
        return (auth()->user() and ($this->user_id == auth()->user()->id));
    }

    public function owner(){
        return $this->belongsTo('App\User', 'user_id', 'id')->get()->first();
    }
}
