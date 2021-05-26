<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Personal extends Model
{
    use HasFactory;

    protected $table = "personal";

    // Relacion de uno a muchos (inversa)

    public function administrador(){
        return $this->belongsTo('App\Model\administradores');
    }

    public function clientes(){
        return $this->hasMany('app\Models\Cliente');
    }
}
