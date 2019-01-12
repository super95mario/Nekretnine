<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OwnerProperty extends Model
{
    protected $fillable = ['percentage','owner_id','property_id'];
    protected $table = 'owner_property';

public function owner()
    {
        return $this->belongsTo(\App\Owner::class);
    }


public function property()
    {
        return $this->belongsTo(\App\Property::class);
    }
}