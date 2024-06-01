<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class PeopleModel
 *
 * Modelo que representa las personas en la base de datos.
 */
class ProfileModel extends Model
{
    use HasFactory;

    /**
     * @var string La tabla asociada al modelo.
     */
    protected $table = 'profiles';

    /**
     * @var array Los atributos que no son asignables en masa.
     */
    protected $guarded = [];

    /**
     * Relación uno a uno con el modelo CustomerModel.
     *
     * Una persona puede ser un cliente.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function user()
    {
        return $this->hasOne(User::class, 'user_id');
    }
}
