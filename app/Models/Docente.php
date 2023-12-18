<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Docente extends Model
{
    protected $table = 'docente';
    use HasFactory;

    protected $fillable = [
        'nome',
        'email',
        'formacao',
        'disponibilidade',
        'SUAP',
        'descricao',
        'curriculo_lates',
        'trabalhos_anteriores',
    ];

    
    protected $dates = ['created_at', 'updated_at'];
}
