<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RoleModel extends Model
{
    use HasFactory;

    protected $table = 'roles';

    protected $guarded = [];

    public function permissions()
    {
        return $this->belongsToMany(PermissionsModel::class, 'roles_permissions', 'role_id', 'permission_id');
    }

    public function users()
    {
        return $this->belongsToMany(User::class, 'roles_users', 'role_id', 'user_id');
    }

    public function customers()
    {
        return $this->belongsToMany(CustomerModel::class, 'roles_customers', 'role_id', 'customer_id');
    }

    public function deliveries()
    {
        return $this->belongsToMany(DeliveryModel::class, 'roles_deliveries', 'role_id', 'delivery_id');
    }

    public function warehouses()
    {
        return $this->belongsToMany(WarehouseModel::class, 'roles_warehouses', 'role_id', 'warehouse_id');
    }

    public function workshops()
    {
        return $this->belongsToMany(WorkshopsModel::class, 'roles_workshops', 'role_id', 'workshop_id');
    }
}