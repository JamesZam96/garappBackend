<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoryModel extends Model
{
    use HasFactory;

    protected $table = 'categories';
    protected $guarded = [];

    public function products()
    {
        return $this->belongsToMany(ProductModel::class, 'category_product', 'category_id', 'product_id');
    }
}
