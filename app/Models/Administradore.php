<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Administradore extends Model
{
    use HasFactory;

    protected $table = "administradores";

    protected $primaryKey = 'id_admin';

    public $incrementing = false;

    protected $keyType = 'string';

    protected $fillable = [
        'id_admin',
        'nombre',
        'apellido1',
        'apellido2',
        'telefono',
        'correo',
        'direccion',
        'ciudad',
        'password',
    ];
    
    protected $hidden = [
        'password',
    ];

    //relacion de uno a muchos
    public function personales()
    {
        return $this->hasMany('app\Model\Personal');
    }
}
