<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
  public function posts(){
    return $this->hasManyThrough('App\Http\Models\Post','App\Http\Models\User');
  }
}
