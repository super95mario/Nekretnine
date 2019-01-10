<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    protected $fillable = ['area ','cadastral_number','property_type_id','cadastral_municipality_id'];
}
