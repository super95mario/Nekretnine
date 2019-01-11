<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class County extends Model
{
    protected $fillable = ['name'];
    public function municipalities()
    {
        return $this->hasMany(\App\Municipality::class);
    }
}
