<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    protected $fillable = ['area','cadastral_number','property_type_id','cadastral_municipality_id'];
    public function ownerproperty()
    {
        return $this->hasMany(\App\OwnerProperty::class);
    }

    public function cadastral_municipality()
    {
        return $this->belongsTo(\App\CadastralMunicipality::class);
    }
    public function property_type()
    {
        return $this->belongsTo(\App\PropertyType::class);
    }
    
}
