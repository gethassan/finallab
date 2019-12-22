<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    //
    public $timestamps = false;
    protected $fillable=['name','image','description','price','category'];
}
