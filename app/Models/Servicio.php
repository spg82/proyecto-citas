<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Especialidad;

class Servicio extends Model
{
    use HasFactory;
    protected $table = 'servicios';
    protected $primaryKey = 'id';
    protected $fillable = [
        'especialidad_id',
        'nombre',
        'descripcion',
        'duracion',
        'precio',
        'imagen',


    ];
    public function especialidad()
    {
        return $this->belongsTo(Especialidad::class);
    }
}
