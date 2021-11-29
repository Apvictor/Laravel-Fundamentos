<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ClientController extends Controller
{
    /**
     * Lista os clientes
     *
     * @return View
     */
    public function index(): View
    {
        $clients = Client::get();

        return view('clients.index', ['clients' => $clients]);
    }

    /**
     * Mostra um cliente especifico
     *
     * @param integer $id
     * @return View
     */
    public function show(int $id): View
    {
        $client = Client::find($id);

        return view('clients.show', ['client' => $client]);
    }

    /**
     * Exibi o formulário de criação
     *
     * @return View
     */
    public function create(): View
    {
        return view('clients.create');
    }

    /**
     * Cria um cliente no banco de dados
     *
     * @param Request $request
     * @return RedirectResponse
     */
    public function store(Request $request): RedirectResponse
    {
        $dados = $request->all();

        Client::create($dados);

        return redirect()->route('clients.index');
    }

    /**
     * Mostra o formulário para edição
     *
     * @param integer $id
     * @return View
     */
    public function edit(int $id): View
    {
        $client = Client::find($id);

        return view('clients.edit', ['client' => $client]);
    }

    /**
     * Atualiza o cliente no banco de dados
     *
     * @param integer $id
     * @param Request $request
     * @return RedirectResponse
     */
    public function update(int $id, Request $request): RedirectResponse
    {
        $dados = $request->all();

        Client::find($id)->update($dados);

        return redirect()->route('clients.index');
    }

    /**
     * Apagar um cliente no banco de dados
     *
     * @param integer $id
     * @return RedirectResponse
     */
    public function destroy(int $id): RedirectResponse
    {
        Client::find($id)->delete();

        return redirect()->route('clients.index');
    }
}
