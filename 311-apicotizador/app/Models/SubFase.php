<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Fase; // Importa el modelo TblFase

class SubFase extends Model
{
    use HasFactory;

    // Nombre de la tabla asociada
    protected $table = 'tbl_subfase';

    // Nombre de la clave primaria
    protected $primaryKey = 'id_subfase';

    // Si la clave primaria no es autoincremental
    public $incrementing = true;

    // Campos que pueden ser asignados en masa
    protected $fillable = [
        'fase_id',
        'foto_id',
        'no_fase',
        'nombre_fase',
        'tipo_fase',
        'orden',
        'fecha_creacion',
        'activo',
    ];

    // Habilitar los timestamps automáticos
    public $timestamps = false;

    /**
     * Relación con la fase principal.
     */
    public function fase()
    {
        return $this->belongsTo(Fase::class, 'fase_id', 'id_fase');
    }
}
