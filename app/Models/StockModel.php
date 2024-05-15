<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StockModel extends Model
{
    use HasFactory;
    protected $table = 'stocks';
    protected $guarded =[];

    public function products(){
        return $this->belongsTo(ProductModel::class , 'product_id');

    }
    public function services(){
        return $this->belongsTo(ServiceModel::class , 'service_id');
    }

    public function companies(){
      return $this->belongsTo(CompanyModel::class , 'company_id');
    }
}
