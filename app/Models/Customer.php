<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    protected $table = "customers";
    protected $guarded = [];


    public function bills(){
        return $this->hasMany(Bill::class , 'bills_id');
    }

    public function people(){
        return $this->belongsTo(Vehicle::class , 'people_id');
    }

    public function vehicles(){
        return $this->belongsTo(Vehicle::class , 'vehicle_id');
    }


   
}
