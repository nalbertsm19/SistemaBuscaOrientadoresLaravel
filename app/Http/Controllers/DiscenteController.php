<?php

namespace App\Http\Controllers;

use App\Models\Discente;
use Illuminate\Http\Request;

class DiscenteController extends Controller
{
    public function index()
    {
        $discentes = Discente::all();
        return view('discentes.index', compact('discentes'));
    }
}
