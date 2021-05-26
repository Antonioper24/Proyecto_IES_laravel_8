<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cita extends Model
{
    use HasFactory;

    protected $table = "citas";

    public function cliente(){
        return $this->belongsTo('app\Models\Cliente');
    }
}
