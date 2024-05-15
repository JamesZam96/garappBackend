<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class People extends Model
{
    //protected $primaryKey = 'idperson';
    use HasFactory;
    protected $table = 'people';
    protected $guarded = [];

    public function delivery(){
        return $this->hasMany(Delivery::class, 'delivery_id');
    }
}
