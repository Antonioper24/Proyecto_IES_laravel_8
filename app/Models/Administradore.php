<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Administradore extends Model
{
    use HasFactory;

    protected $table = "administradores";

    //relacion de uno a muchos
    public function personales()
    {
        return $this->hasMany('app\Model\Personal');
    }
}
