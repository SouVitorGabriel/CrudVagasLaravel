@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>{{ $vaga->titulo }}</h1>
        <p><strong>Cargo:</strong> {{ $vaga->cargo }}</p>
        <p><strong>Descrição:</strong> {{ $vaga->descricao }}</p>
        <p>
            @if ($vaga->salario_visivel)
                <strong>Salário:</strong> R$ {{ number_format($vaga->salario, 2, ',', '.') }}
            @else
                <strong>Salário:</strong> Não Visível
            @endif
        </p>
    </div>
@endsection
