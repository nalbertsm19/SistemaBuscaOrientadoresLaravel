<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orientacao extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_dicente',
        'id_docente',
        'statusOrientacao',
    ];

    protected $dates = ['created_at', 'updated_at'];
}
