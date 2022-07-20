<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Perfil extends Model
{
    use HasFactory;

    protected $table = 'perfils';
    protected $primaryKey = 'id';
    protected $fillable = [
        'user_id',
        'apellido1',
        'apellido2',
        'telefono',
        'imagen',
        

    ];
/**
 * Metodo para acceder a la relacion con user.
 */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
