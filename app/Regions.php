<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Regions extends Model
{
    protected $fillable = ['name', 'country_id'];


    public function cities(){
        return $this->hasMany(Regions::class);
    }
}
