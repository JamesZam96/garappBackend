<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RoleModel extends Model
{
    use HasFactory;

    protected $table = 'roles';
    protected $guarded = [];

    public function permissions(){
        return $this->belongsToMany(PermissionsModel::class , 'roles_permissions');
    }
}
