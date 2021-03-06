<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Saudacao extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param string $nome
     * @return void
     */
    public function __invoke(string $nome = 'TreinaWeb')
    {
        // return view('saudacao', ['nome' => $nome]);
        return view('saudacao')->with('nome', $nome);
    }
}
