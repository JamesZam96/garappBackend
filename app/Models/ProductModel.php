<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductModel extends Model
{
    use HasFactory;
    protected $table = 'products';
    protected $guarded = [];

    public function warehouse()
    {
        return $this->belongsTo(WarehouseModel::class, 'warehouse_id');
    }

    public function categories()
    {
        return $this->belongsToMany(CategoryModel::class, 'category_product', 'product_id', 'category_id');
    }

    public function orders()
    {
        return $this->belongsToMany(OrderModel::class, 'order_product', 'product_id', 'order_id');
    }
}
