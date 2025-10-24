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
        return $this->morphOne(Comment::class, 'commentable')->latestOfMany();
    }
    public function oldestComment()
    {
        return $this->morphOne(Comment::class, 'commentable')->oldestOfMany();
    }
    public function BestComment()
    {
        return $this->morphOne(Comment::class, 'commentable')->ofMany('likes', 'max');
    }
    public function leastComment()
    {
        return $this->morphOne(Comment::class, 'commentable')->ofMany('likes', 'min');
    }
    // this is make  the many to many relationship
    public function tags()
    {
        return $this->morphToMany(Tag::class, 'taggable');
    }
}
