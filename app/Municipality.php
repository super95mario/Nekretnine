<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Municipality extends Model
{
    protected $fillable = ['name','county_id'];
    public function towns()
    {
        return $this->hasMany(\App\Town::class);
    }
    public function county()
    {
        return $this->belongsTo(\App\County::class);
    }
}
