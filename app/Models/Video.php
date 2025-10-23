<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Comment; // ✅ correct import syntax

class Video extends Model
{
    protected $guarded = [];
    public function comment()
    {
        return $this->morphMany(Comment::class, 'commentable');
    }
    public function latestComment()
    {
        return $this->morphOne(Comment::class, 'commentable');
    }
    public function oldestComment()
    {
        return $this->morphOne(Comment::class, 'commentable');
    }
}
