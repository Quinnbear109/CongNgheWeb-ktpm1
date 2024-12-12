<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Laptop extends Model
{
    protected $table='laptops';
 protected $fillable=['id','brand','model','specifications','rental_status','renter_id'];
    //
}
