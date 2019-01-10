<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OwnerProperty extends Model
{
    protected $fillable = ['percentage','owner_id','property_id'];
protected $table = 'owner_property';

}
