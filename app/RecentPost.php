<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RecentPost extends Model
{
    protected $table = 'recent_post';
    protected $fillable = ['title','details'];

    // public function destinations()
    // {
    //     return $this->hasMany(Destinations::class);
    // }
}
