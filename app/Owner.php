<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Owner extends Model
{
    protected $fillable = ['oib','name','surname','username','password','address','town_id'];
    public function ownerproperty()
    {
        return $this->hasMany(\App\OwnerProperty::class);
    }
    public function town()
    {
        return $this->belongsTo(\App\Town::class);
    }
}
