<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{
    use HasFactory;
    protected $table = "bills";
    protected $guarded = [];


    public function customers(){
        return $this->belongsTo(Customer::class , 'customer_id');
    }
    public function orders(){
        return $this->belongsTo(Order::class , 'order_id');
    }
}

