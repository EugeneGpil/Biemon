<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $guarded = ['id', 'created_at', 'updated_at'];

    public function owner(){
        return $this->belongsTo('App\User', 'user_id', 'id')->get()->first();
    }
}
