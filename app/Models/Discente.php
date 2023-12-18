<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Discente extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
        'email',
        'RA',
        'areInteresse',
        'statusSolicitacao',
        'id_Projeto',
    ];

    protected $dates = ['created_at', 'updated_at'];
}
