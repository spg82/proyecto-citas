<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Servicio;

class Especialidad extends Model
{
    use HasFactory;

    protected $table = 'especialidads';
    protected $primaryKey = 'id';
    protected $fillable = [
        
        'nombre', 
    ];
    public function servicios()
    {
        return $this->hasMany(Servicio::class);
    }
    public function empleado()
    {
        return $this->hasMany(Empleado::class);
    }
}
