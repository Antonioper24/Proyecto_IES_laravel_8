<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tratamiento extends Model
{
    use HasFactory;

    protected $table = 'tratamiento';

    protected $fillable = [
        'tratamiento',
        'precio',
        'num_expe',
    ];

    public function clienta(){
        $this->belongsTo('App\Model\Cliente');
    }
}