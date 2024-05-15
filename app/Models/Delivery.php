<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Delivery extends Model
{
    use HasFactory;
    protected $table = 'delivery';
    protected $guarded = [];

    public function vehicles(){
        return $this->belongsTo(Vehicle::class , 'vehicle_id');
    }

    public function people(){
        return $this->belongsTo(People::class , 'people_id');
    }
}
