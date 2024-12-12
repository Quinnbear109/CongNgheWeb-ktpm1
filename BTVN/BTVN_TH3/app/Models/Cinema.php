<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cinema extends Model
{
    protected $table='cinemas';
    public function movie(){
        return $this->hasMany(Movie::class);
    }
    //
}
