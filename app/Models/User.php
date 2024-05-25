<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Facades\Hash;

class User extends Authenticatable
{
    use Notifiable, HasFactory; // Incluye HasFactory si es necesario

    protected $table = 'users';
    protected $guarded = [];

    public function setPasswordAttribute($value)
    {
        $this->attributes['password'] = Hash::make($value);
    }

    public function role(){
        return $this->belongsTo(RoleModel::class, 'roles_users');
    }
}