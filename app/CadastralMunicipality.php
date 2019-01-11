<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CadastralMunicipality extends Model
{
    protected $fillable = ['name'];
    public function property()
    {
        return $this->hasMany(\App\Property::class);
    }
    public function towns()
    {
        return $this->hasMany(\App\Town::class);
    }
}
