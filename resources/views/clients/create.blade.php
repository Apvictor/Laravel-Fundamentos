@extends('app')

@section('titulo', 'Novo Cliente')

@section('conteudo')

    <h1>Novo Cliente</h1>
    <form action="{{ route('clients.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="nome" class="form-label">Nome</label>
            <input name="nome" type="text" class="form-control" id="nome" placeholder="Digite o Nome" required>
        </div>
        <div class="mb-3">
            <label for="endereco" class="form-label">Endereço</label>
            <input name="endereco" type="text" class="form-control" id="endereco" placeholder="Digite o Endereço" required>
        </div>
        <div class="mb-3">
            <label for="obervacao" class="form-label">Observação</label>
            <textarea name="observacao" class="form-control" id="obervacao" rows="3" placeholder="Digite a Observação"
                required></textarea>
        </div>

        <button class="btn btn-success" type="submit">Enviar</button>
    </form>


@endsection
