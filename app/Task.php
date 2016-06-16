<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable = [
    	'name',
    	'when'
    ];

    protected $dates = [
    	'when'
    ];

    // public function setAttributeWhen($datetime)
    // {

    // }
}
