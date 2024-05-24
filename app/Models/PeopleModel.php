<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PeopleModel extends Model
{
    use HasFactory;
    protected $table = 'people';
    protected $guarded = [];

    public function customers()
    {
        return $this->hasOne(CustomerModel::class, 'people_id');
    }

    public function deliveries()
    {
        return $this->hasMany(DeliveryModel::class, 'deliveries_id');
    }
}
