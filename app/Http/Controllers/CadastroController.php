// app/Http/Controllers/CadastroController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CadastroController extends Controller
{
    public function showCadastroForm()
    {
        return view('cadastro');
    }

    public function cadastrar(Request $request)
    {
        // Adicione a lógica de cadastro aqui

        // Se o cadastro for bem-sucedido, redirecione para a página desejada
        return redirect('/dashboard');
    }
}
