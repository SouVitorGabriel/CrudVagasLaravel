@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Editar Vaga</h1>

        <form action="{{ route('vagas.update', $vaga) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="titulo" class="form-label">Título</label>
                <input type="text" class="form-control" name="titulo" value="{{ $vaga->titulo }}" required>
            </div>
            <div class="mb-3">
                <label for="cargo" class="form-label">Cargo</label>
                <input type="text" class="form-control" name="cargo" value="{{ $vaga->cargo }}" required>
            </div>
            <div class="mb-3">
                <label for="salario" class="form-label">Salário</label>
                <input type="number" class="form-control" name="salario" value="{{ $vaga->salario }}" required>
            </div>
            <div class="mb-3">
                <label for="salario_visivel" class="form-label">Salário Visível</label>
                <input type="checkbox" name="salario_visivel" {{ $vaga->salario_visivel ? 'checked' : '' }}>
            </div>
            <div class="mb-3">
                <label for="descricao" class="form-label">Descrição</label>
                <textarea class="form-control" name="descricao" rows="4" required>{{ $vaga->descricao }}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">Salvar Alterações</button>
        </form>
    </div>
@endsection
