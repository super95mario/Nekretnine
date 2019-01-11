<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Owner extends Model
{
    protected $fillable = ['oib','name','surname','username','password','address','town_id'];
    public function properties()
    {
        return $this->belongsToMany(\App\Property::class);
    }
    public function town()
    {
        return $this->belongsTo(\App\Town::class);
    }
}
