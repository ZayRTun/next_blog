<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function addComment($body)
    {
//        Comment::create([
//            'body' => $body,
//            'post_id' => $this->id
//        ]);
        /*Or we can also do*/
//        $this->comments()->create(['body' => $body]);
        /*Or again*/
        $this->comments()->create(compact('body'));
    }
}
