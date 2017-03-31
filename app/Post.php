<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['title', 'body'];

    //protected $guarded = ['title', 'body']; // si no quiero guadar

    public function comments()
    {

    	return $this->hasMany(Comment::class)
    }

}
