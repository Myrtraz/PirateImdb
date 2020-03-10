<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    protected $fillable =[
    	    "name",
            "resume",
            "category",
            "year",
            "cover",
            "trailer",
    ];
}
