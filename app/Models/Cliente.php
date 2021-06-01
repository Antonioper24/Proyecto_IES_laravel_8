<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;

    protected $table = "clientes";

    protected $primaryKey = 'num_expe';

    public $incrementing = false;

    protected $keyType = 'string';

    protected $fillable = [
       'num_expe',
        'nombre',
        'apellido1',
        'apellido2',
        'telefono',
        'DNI',
        'direccion',
        'ciudad',
        'id_personal',
    ];

    // Relacion de uno a muchos

    public function personal(){
        return $this->belongsTo('app\Models\Personal');
    }

    public function citas(){
        return $this->hasMany('app\Models\Cita');
    }
}
