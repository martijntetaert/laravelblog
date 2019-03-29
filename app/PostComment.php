<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use carbon\carbon;

class PostComment extends Model
{
    //
    protected  $fillable = [
        'post_id',
        'is_active',
        'author',
        'photo',
        'email',
        'body'
    ];
    protected  $guarded;
    public function replies(){
        return $this->hasMany('App\CommentReply');
    }

    public function post(){
        return $this->belongsTo('App\Post');
    }
}
