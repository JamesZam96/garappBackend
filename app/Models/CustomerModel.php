<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomerModel extends Model
{
    use HasFactory;
    protected $table = 'customers';
    protected $guarded = [];

   
    public function people()
    {
        return $this->belongsTo(PeopleModel::class, 'people_id');
    }

    public function orders()
    {
        return $this->hasMany(OrderModel::class, 'customer_id');
    }

    public function bills()
    {
        return $this->hasMany(BillModel::class, 'customer_id');
    }
}
