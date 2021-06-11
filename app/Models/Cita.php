<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cita extends Model
{
    use HasFactory;

    protected $table = "citas";

    protected $fillable = [
        'num_radiogra',
        'tratamiento',
        'descripcion',
        'fecha',
        'hora',
        'cita',
        'num_expe',
    ];

    public function cliente(){
        return $this->belongsTo('app\Models\Cliente');
    }
}
