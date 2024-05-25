<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PermissionsModel extends Model
{
    use HasFactory;

    protected $table = 'permissions';
    protected $guarded = [];

    public function roles(){
        return $this->belongsToMany(PermissionsModel::class , 'roles_permissions');
    }
}
