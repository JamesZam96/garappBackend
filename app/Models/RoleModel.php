<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 *Modelo a seguir de clase
 *
 *Este modelo representa la tabla de 'roles' en la base de datos.
 *Define relaciones con otros modelos y utiliza el rasgo HasFactory.
 */
class RoleModel extends Model
{
    use HasFactory;

   /**
     *La tabla asociada al modelo.
     *
     * @var string
     */
    protected $table = 'roles';

   /**
     *Los atributos que son asignables masivamente.
     *
     * @var array
     */
    protected $guarded = [];

   /**
     *Definir una relación de muchos a muchos con PermissionsModel.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function permissions()
    {
        return $this->belongsToMany(PermissionsModel::class, 'roles_permissions');
    }

   /**
     *Definir una relación uno a uno con el modelo de Usuario.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function user()
    {
        return $this->hasOne(User::class, 'roles_users');
    }

    /**
     *Definir una relación uno a uno con el CustomerModel.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function customers()
    {
        return $this->hasOne(CustomerModel::class, 'roles_customers');
    }

   /**
     *Definir una relación uno a uno con DeliveryModel.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function deliveries()
    {
        return $this->hasOne(DeliveryModel::class, 'roles_deliveries');
    }

   /**
     *Definir una relación uno a uno con WarehouseModel.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function warehouses()
    {
        return $this->hasOne(WarehouseModel::class, 'roles_warehouses');
    }

    /**
     *Definir una relación uno a uno con WorkshopsModel.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function workshops()
    {
        return $this->hasOne(WorkshopsModel::class, 'roles_workshops');
    }
}
