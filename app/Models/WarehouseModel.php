<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class  WarehouseModel extends Model
{
    use HasFactory;
    protected $table = 'companies';
    protected $guarded = [];

    public function products()
    {
        return $this->hasMany(ProductModel::class, 'warehouse_id');
    }
}
