<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Proyecto;

class Fase extends Model
{
    use HasFactory;

    // El nombre de la tabla asociada
    protected $table = 'tbl_fase';

    // El nombre de la clave primaria (por defecto es 'id', pero en tu caso es 'id_fase')
    protected $primaryKey = 'id_fase';

    // Si la clave primaria no es un entero autoincremental
    public $incrementing = true;

    // Los campos que pueden ser asignados en masa
    protected $fillable = [
        'proyecto_id', 
        'svg_id', 
        'nombre_fase', 
        'tipo_fase', 
        'no_fase', 
        'orden', 
        'fecha_creacion', 
        'activo'
    ];

    // Si los campos 'created_at' y 'updated_at' no deben ser gestionados por Eloquent, desactívalos
    public $timestamps = false;

    public function proyecto()
    {
        return $this->belongsTo(Proyecto::class, 'proyecto_id', 'id_proyecto');
    }
}
