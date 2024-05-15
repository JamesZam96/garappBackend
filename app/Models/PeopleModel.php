<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PeopleModel extends Model
{
    use HasFactory;
    protected $table = 'people';
    protected $guarded = [];

    public function delivery(){
        return $this->hasMany(DeliveryModel::class, 'delivery_id');
    }
}
