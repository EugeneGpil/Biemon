<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Comment;

class Article extends Model
{
    protected $guarded = ['id', 'created_at', 'updated_at', 'views', 'likes'];

    private $comments = null;

    private function setComments()
    {
        if (!$this->comments)
            $this->comments = $this->hasMany('App\Comment')->get();
    }

    public function comments()
    {
        Article::setComments();
        return $this->comments;
    }

    public function ownsAuthorizedUser(){
        return (auth()->user() and ($this->user_id == auth()->user()->id));
    }

    public function owner(){
        return $this->belongsTo('App\User', 'user_id', 'id')->get()->first();
    }
}
