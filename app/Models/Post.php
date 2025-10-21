<?php
// ...existing code...
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Image;

class Post extends Model
{
    public function image()
    {
        return $this->morphOne(Image::class, 'imageable');
    }
}
// ...existing code...