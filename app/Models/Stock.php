<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{
    use HasFactory;
    protected $table = 'stocks';
    protected $guarded =[];

    public function products(){
        return $this->belongsTo(Product::class , 'product_id');

    }
    public function services(){
        return $this->belongsTo(Service::class , 'service_id');
    }

    public function companies(){
      return $this->belongsTo(Company::class , 'company_id');
    }

}
