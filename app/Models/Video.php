<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Comment; // ✅ correct import syntax

class Video extends Model
{
    public function comment()
    {
        return $this->morphMany(Comment::class, 'commentable');
    }
}
