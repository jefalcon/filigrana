<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SolicitudResidencial extends Model
{
    use HasFactory;

    protected $fillable = ['estado_id','cliente_id','descripcion','importe','meses','cuota'];
}
