<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $guarded = [];
    public $timestamps =  false;
    public function imageable()
    {
        return $this->morphTo();
    }
}
