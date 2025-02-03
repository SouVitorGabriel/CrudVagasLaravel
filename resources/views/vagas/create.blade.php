@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Cadastrar Vaga</h1>

        <form action="{{ route('vagas.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="titulo" class="form-label">Título</label>
                <input type="text" class="form-control" name="titulo" id="titulo" required>
            </div>
            <div class="mb-3">
                <label for="cargo" class="form-label">Cargo</label>
                <input type="text" class="form-control" name="cargo" id="cargo" required>
            </div>
            <div class="mb-3">
                <label for="salario" class="form-label">Salário</label>
                <input type="number" class="form-control" name="salario" id="salario" required>
            </div>
            <div class="mb-3">
                <label for="salario_visivel" class="form-label">Salário Visível</label>
                <input type="checkbox" name="salario_visivel" id="salario_visivel">
            </div>
            <div class="mb-3">
                <label for="descricao" class="form-label">Descrição</label>
                <textarea class="form-control" name="descricao" id="descricao" rows="4" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Cadastrar</button>
        </form>
    </div>
@endsection