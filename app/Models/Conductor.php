<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Conductor extends Model
{
    use HasFactory;
    protected $table = 'conductor';
    protected $fillable = [
        'id',
        'nombre',
        'apellido',
        'cedula',
        'direccion',
        'telefono',
        'pais',
        'ciudad_nacimiento',
        'placa',
        'id_supervisor',
        'created_at',
        'updated_at'];
}
