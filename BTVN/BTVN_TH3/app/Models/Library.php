<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Relations\HasMany;

use Illuminate\Database\Eloquent\Model;

class Library extends Model
{
    protected $table='labraries';
    public function book(){
        return $this->hasMany(Book::class);
    }
}
