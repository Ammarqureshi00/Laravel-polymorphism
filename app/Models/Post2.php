<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post2 extends Model
{
    protected $table = 'post2s';
    protected $guarded = [];
    public function comment()
    {
        return $this->morphMany(Comment::class, 'commentable');
    }
}
