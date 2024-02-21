<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    protected $fillable=[
        'path'
    ];
    public function tags()
    {
        return $this->morphToMany('App\Models\Tag', 'taggable');
    }
}
