<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reuniao extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_discente',
        'id_docente',
        'dataHora',
        'resumo',
        'statusReuniao',
    ];

    protected $dates = ['created_at', 'updated_at'];
}
