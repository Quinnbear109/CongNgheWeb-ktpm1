<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class It_center extends Model
{
    protected $table='it_centers';
    public function hardWave(){
        return $this->hasMany(HardWave::class);
    }
}
