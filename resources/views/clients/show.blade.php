@extends('app')

@section('titulo', 'Detalhes do Clientes')

@section('conteudo')

    <div class="card">
        <h5 class="card-header">Detalhes do Cliente {{ $client->nome }}</h5>
        <div class="card-body">
            <p><b>ID: </b> {{ $client->id }}</p>
            <p><b>Nome: </b> {{ $client->nome }}</p>
            <p><b>Endereço: </b> {{ $client->endereco }}</p>
            <p><b>Observação: </b> {{ $client->observacao }}</p>
            <br>
            <a class="btn btn-success" href="{{ route('clients.index') }}">Voltar para lista</a>
        </div>
    </div>

@endsection
