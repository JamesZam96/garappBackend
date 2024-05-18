<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VehicleModel extends Model
{
    use HasFactory;
    protected $table = 'vehicle';
    protected $guarded = [];

    public function delivery()
    {
        return $this->belongsTo(DeliveryModel::class, 'delivery_id');
    }
    
}
