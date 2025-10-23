<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post2 extends Model
{
    protected $guarded = [];
    public function comment()
    {
        return $this->morphMany(Comment::class, 'commentable');
    }
}
