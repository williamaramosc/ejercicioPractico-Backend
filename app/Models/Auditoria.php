<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Auditoria extends Model
{
    use HasFactory;
    protected $table = 'auditoria';
    protected $fillable = [
        'id',
        'id_conductor',
        'accion',
        'created_at',
        'updated_at'];
}
