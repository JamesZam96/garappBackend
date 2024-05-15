<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductModel extends Model
{
    use HasFactory;
    protected $table = 'products';
    protected $guarded = [];

    public function stocks(){
        return $this->hasMany(StockModel::class, 'stocks_id');
    }
}
