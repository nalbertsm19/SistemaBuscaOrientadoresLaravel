<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Projeto extends Model
{
    use HasFactory;

    protected $fillable = [
        'matriz_tcc',
        'tema',
        'descricao',
        'Projetocol',
    ];

    protected $dates = ['created_at', 'updated_at'];
}
