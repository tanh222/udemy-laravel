<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    protected $fillable = [
        'name',

    ];

    public function tags()
    {
        return $this->morphToMany('App\Models\Tag', 'taggable');
    }
}
