<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    public function grupos()
    {
        return $this->belongsToMany(Grupo::class, 'calificacions', 'alumno_id', 'grupo_id');
    }

    public function maestro()
    {
        return $this->hasOne(Maestro::class);
    }

    public function alumno()
    {
        return $this->hasOne(Alumno::class);
    }

    public function administrador()
    {
        return $this->hasOne(Administrador::class);
    }


    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
