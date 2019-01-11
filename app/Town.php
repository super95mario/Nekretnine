<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Town extends Model
{
    protected $fillable = ['name','municipality_id','cadastral_municipality_id'];
    public function cadastral_municipality()
    {
        return $this->belongsTo(\App\CadastralMunicipality::class);
        
    }
    public function owners()
    {
        return $this->hasMany(\App\Owner::class);
    }
    public function municipality()
    {
        return $this->belongsTo(\App\Municipality::class);
    }
}
