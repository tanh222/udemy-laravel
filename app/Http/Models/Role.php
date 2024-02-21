<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    public function user (){
        return $this->belongsToMany('App\Http\Models\User');
    }
}
