<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DeliveryModel extends Model
{
    use HasFactory;
    protected $table = 'delivery';
    protected $guarded = [];

    public function people()
    {
        return $this->belongsTo(PeopleModel::class, 'people_id');
    }

    public function vehicle()
    {
        return $this->belongsTo(VehicleModel::class, 'vehicle_id');
    }

    public function role(){
        return $this->belongsTo(RoleModel::class, 'roles_deliveries');
    }
}
