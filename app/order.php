<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class order extends Model
{
    //
    public $timestamps = false;
    protected $fillable=['fname','lname','date','staddress','st2address','city','region','postalcode','country','validation','product','quantity','size','price','tprice'];
}
