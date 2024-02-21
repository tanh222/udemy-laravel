<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Taggable extends Model
{

    public function tags()
    {
        return $this->morphMany('App\Models\Tag', 'taggable');
    }
}
