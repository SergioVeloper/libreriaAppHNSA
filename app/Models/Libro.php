<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Libro extends Model
{
    use HasFactory;

    /**
     * Los atributos que se pueden asignar masivamente.
     */
    protected $table = 'libros';
    protected $fillable = [
        'titulo',
        'edicion',
        'pais',
        'precio',
        'editorial_id',
    ];

    /**
     * Relación con el modelo Editorial.
     */
    public function editorial()
    {
        return $this->belongsTo(Editorial::class);
    }
}
