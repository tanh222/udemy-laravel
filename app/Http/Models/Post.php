<?php

namespace App\Http\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use SoftDeletes;
    //
//  protected $table='posts';
//  protected $primaryKey='id';


protected $dates =['delete_at'];
protected $fillable = [
        'user_id',
        'title',
        'content',
];
    public function user (){
        return $this->belongsTo('App\Http\Models\User');
    }

    public function tags()
    {
        return $this->morphToMany('App\Models\Tag', 'taggable');
    }

}

