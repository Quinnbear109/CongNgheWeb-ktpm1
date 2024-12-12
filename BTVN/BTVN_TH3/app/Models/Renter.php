<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Renter extends Model
{
    protected $table='renters';
    public function laptop(){
        return $this->hasMany(Laptop::class);
    }
}
