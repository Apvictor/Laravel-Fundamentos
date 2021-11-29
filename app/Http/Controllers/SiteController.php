<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    /**
     * Mostra a página Welcome
     *
     * @return void
     */
    public function index()
    {
        return view('home');
    }

    /**
     * Mostrar um servico por id
     *
     * @param integer $id
     * @return void
     */
    public function servico(int $id)
    {
        $servico = [
            1 => [
                'nome' => 'Lavagem de Roupa',
                'descricao' => 'descrição muito longa...'
            ],
            2 => [
                'nome' => 'Lavagem do Cobertor',
                'descricao' => 'descrição muito longa...'
            ],
            3 => [
                'nome' => 'Lavagem de Urso',
                'descricao' => 'descrição muito longa...'
            ],
        ];

        return view('site.servico', ['servico' => $servico[$id]]);
    }
}
