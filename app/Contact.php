<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $table = 'customer_info';
     public $fillable = ['name', 'email', 'subject', 'message','updated_at'];
}
