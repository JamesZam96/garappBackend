<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceModel extends Model
{
    use HasFactory;
    protected $table = 'services';
    protected  $guarded = [];

    public function orders()
    {
        return $this->belongsToMany(OrderModel::class, 'order_service', 'service_id', 'order_id');
    }

    public function workshops()
    {
        return $this->belongsToMany(WorkshopsModel::class, 'workshops_id');
    }
}
