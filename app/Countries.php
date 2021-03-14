<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Countries extends Model
{
    protected $fillable = ['name'];

    public function regions(){
        return $this->hasMany(Regions::class, 'country_id');
    }
}
