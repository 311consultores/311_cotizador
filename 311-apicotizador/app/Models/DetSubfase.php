<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\SubFase; // Importa el modelo TblFase

class DetSubfase extends Model
{
    use HasFactory;

    // Nombre de la tabla asociada
    protected $table = 'det_subfase';

    // Nombre de la clave primaria
    protected $primaryKey = 'id_det_subfase';

    // Si la clave primaria no es autoincremental
    public $incrementing = true;

    // Campos que pueden ser asignados en masa
    protected $fillable = [
        'subfase_id',
        'obj_subfase',
        'fecha_creacion',
        'activo',
    ];

    // Habilitar los timestamps automáticos
    public $timestamps = false;

    /**
     * Relación con la fase principal.
     */
    public function subFase()
    {
        return $this->belongsTo(SubFase::class, 'subfase_id', 'id_subfase');
    }
}
