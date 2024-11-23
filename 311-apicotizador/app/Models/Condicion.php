<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\DataBase\Eloquent\Factories\HasFactory;

class Condicion extends Model
{
    use HasFactory;

    // El nombre de la tabla asociada
    protected $table = 'cat_condicion';

    // El nombre de la clave primaria (por defecto es 'id', pero en tu caso es 'id_fase')
    protected $primaryKey = 'id_condicion';

    // Si la clave primaria no es un entero autoincremental
    public $incrementing = true;

    protected $fillable = [
        'proyecto_id', 'clave', 'valor', "descripcion", "fecha_creacion", 'activo'
    ];

    // Si los campos 'created_at' y 'updated_at' no deben ser gestionados por Eloquent, desactívalos
    public $timestamps = false;
}
