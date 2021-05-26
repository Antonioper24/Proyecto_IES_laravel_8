<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;

    protected $table = "clientes";

    // Relacion de uno a muchos

    public function personal(){
        return $this->belongsTo('app\Models\Personal');
    }

    public function citas(){
        return $this->hasMany('app\Models\Cita');
    }
}
