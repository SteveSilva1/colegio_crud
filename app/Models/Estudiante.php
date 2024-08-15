<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\SoftDeletes;


class Estudiante extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'nombre',
        'email',
    ];

    public function cursos(): BelongsToMany
    {
        return $this->BelongsToMany(Curso::class);
    }

    public function notas(): HasMany
    {
        return $this->hasMany(Notas::class);
    }
}
