<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Fase;

class Proyecto extends Model
{
    use HasFactory;

    // El nombre de la tabla asociada
    protected $table = 'tbl_proyecto';

    // El nombre de la clave primaria (por defecto es 'id', pero en tu caso es 'id_fase')
    protected $primaryKey = 'id_proyecto';

    // Si la clave primaria no es un entero autoincremental
    public $incrementing = true;

    protected $fillable = [
        'foto_id', 'svg_id', 'nombre_proyecto', "fecha_creacion", 'activo'
    ];

    // Si los campos 'created_at' y 'updated_at' no deben ser gestionados por Eloquent, desactívalos
    public $timestamps = false;

    public function fase()
    {
        return $this->hasMany(Fase::class, 'proyecto_id', 'id_proyecto');
    }
}
