<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WorkshopsModel extends Model
{
    use HasFactory;

    protected $table = 'workshops';
    protected $guarded = [];

    public function services()
    {
        return $this->hasMany(ServiceModel::class, 'services_id');
    }

}
