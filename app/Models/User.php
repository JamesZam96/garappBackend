<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Facades\Hash;

/**
 * Class User
 *
 * Este modelo representa la tabla 'users' en la base de datos.
 * Extiende la clase Authenticatable para proporcionar funcionalidad de autenticación.
 * Define las relaciones con otros modelos y usa el trait Notifiable.
 */
class User extends Authenticatable
{
    use Notifiable, HasFactory; // Incluye HasFactory si es necesario

    /**
     * La tabla asociada con el modelo.
     *
     * @var string
     */
    protected $table = 'users';

    /**
     * Los atributos que no son asignables masivamente.
     *
     * @var array
     */
    protected $guarded = [];

    /**
     * Método para establecer la contraseña del usuario.
     *
     * @param  string  $value
     * @return void
     */
    public function setPasswordAttribute($value)
    {
        $this->attributes['password'] = Hash::make($value);
    }

    /**
     * Define una relación de pertenencia con el modelo RoleModel.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function role()
    {
        return $this->belongsTo(RoleModel::class, 'role_id'); // Corregido el nombre de la columna
    }
}
