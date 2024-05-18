<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderModel extends Model
{
    use HasFactory;
    protected $table = 'orders';
    protected $guarded = [];

    public function customer()
    {
        return $this->belongsTo(CustomerModel::class, 'customer_id');
    }

    public function products()
    {
        return $this->belongsToMany(ProductModel::class, 'order_product', 'order_id', 'product_id');
    }

    public function services()
    {
        return $this->belongsToMany(ServiceModel::class, 'order_service', 'order_id', 'service_id');
    }

    public function bills()
    {
        return $this->hasMany(BillModel::class, 'order_id');
    }
}
