<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cities extends Model
{
    protected $fillable = ['name', 'region_id'];

    public function regions(){
        return $this->hasMany(Regions::class);
    }
}
