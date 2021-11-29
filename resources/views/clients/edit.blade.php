@extends('app')

@section('titulo', 'Editar Cliente')

@section('conteudo')

    <h1>Editar Cliente</h1>
    <form action="{{ route('clients.update', $client->id) }}" method="POST">
        @method('PUT')
        @csrf
        <div class="mb-3">
            <label for="nome" class="form-label">Nome</label>
            <input name="nome" type="text" class="form-control" id="nome" placeholder="Digite o Nome" required
                value="{{ $client->nome }}">
        </div>
        <div class="mb-3">
            <label for="endereco" class="form-label">Endereço</label>
            <input name="endereco" type="text" class="form-control" id="endereco" placeholder="Digite o Endereço"
                value="{{ $client->endereco }}" required>
        </div>
        <div class="mb-3">
            <label for="obervacao" class="form-label">Observação</label>
            <textarea name="observacao" class="form-control" id="obervacao" rows="3"
                placeholder="Digite a Observação" required>{{ $client->observacao }}</textarea>
        </div>

        <button class="btn btn-dark" type="submit">Atualizar</button>
    </form>


@endsection
