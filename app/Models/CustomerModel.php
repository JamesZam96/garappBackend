<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomerModel extends Model
{
    use HasFactory;
    protected $table = 'customers';
    protected $guarded = [];

   
    public function bills(){
        return $this->hasMany(BillModel::class , 'bills_id');
    }

    public function people(){
        return $this->belongsTo(VehicleModel::class , 'people_id');
    }

    public function vehicles(){
        return $this->belongsTo(VehicleModel::class , 'vehicle_id');
    }
}
