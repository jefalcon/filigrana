<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClienteResidencial extends Model
{
    use HasFactory;

    protected $fillable = ['nombre','fx_nacimiento','documento','email','telefono','ingresos','antiguedad'];
}
