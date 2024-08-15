<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;


class Curso extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'materia_id',
    ];

    public function estudiantes(): BelongsToMany
    {
        return $this->BelongsToMany(Estudiantes::class);
    }

    public function notas(): HasMany
    {
        return $this->hasMany(Notas::class);
    }

    public function materia(): BelongsTo
    {
        return $this->belongsTo(Materia::class);
    }
    
}
