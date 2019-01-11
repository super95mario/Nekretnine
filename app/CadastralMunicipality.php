<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CadastralMunicipality extends Model
{
    protected $fillable = ['name'];
    public function properties()
    {
        return $this->hasMany(\App\Property::class);
    }
    public function town()
    {
        return $this->belongsTo(\App\Town::class);
    }
}
