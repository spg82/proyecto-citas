<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    use HasFactory;
    protected $table = 'empleados';
    protected $primaryKey = 'id';
    protected $fillable = [
        'user_id',
        'fecha_incorporacion',
        'calle',
        'nombre',
        'numero',
        'letra',
        'cp',
        'localidad'


    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
