<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Personal extends Model
{
    use HasFactory;

    protected $table = "personal";

    protected $primaryKey = 'id_personal';

    public $incrementing = false;

    protected $keyType = 'string';

    protected $fillable = [
        'id_personal',
        'nombre',
        'apellido1',
        'apellido2',
        'telefono',
        'correo',
        'direccion',
        'ciudad',
        'id_doctor',
        'password',
        'id_admin'
    ];

    protected $hidden = [
        'Password',
        'password',
    ];
    // Relacion de uno a muchos (inversa)

    public function administrador(){
        return $this->belongsTo('App\Model\administradores');
    }

    public function clientes(){
        return $this->hasMany('app\Models\Cliente');
    }
}
