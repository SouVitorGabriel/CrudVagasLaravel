@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Vagas</h1>
        <a href="{{ route('vagas.create') }}" class="btn btn-primary">Cadastrar Nova Vaga</a>
        <ul>
            @foreach ($vagas as $vaga)
                <li>
                    <h3>{{ $vaga->titulo }}</h3>
                    <p>{{ $vaga->cargo }}</p>
                    <p>
                        @if ($vaga->salario_visivel)
                            <strong>Salário:</strong> R$ {{ number_format($vaga->salario, 2, ',', '.') }}
                        @else
                            <strong>Salário:</strong> Não Visível
                        @endif
                    </p>
                    <a href="{{ route('vagas.show', $vaga) }}">Ver Detalhes</a>
                    <a href="{{ route('vagas.edit', $vaga) }}">Editar</a>
                    <form action="{{ route('vagas.destroy', $vaga) }}" method="POST" onsubmit="return confirm('Tem certeza que deseja excluir essa vaga?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Excluir</button>
                    </form>
                </li>
            @endforeach
        </ul>
    </div>
@endsection
