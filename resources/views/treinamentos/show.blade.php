@extends('layouts.main')

@section('title', $treinamento->nome)

@section('content')

    <div class="col-md-10 offset-md-1">
        <div class="row">
                <div id="info-container" class="col-md-6">
                    <h1>{{ $treinamento->nome }}</h1>
                    <p>Carga horária: {{ $treinamento->cargaHr }} horas</p>
                    <p>Início das inscrições: {{ date('d/m/Y' , strtotime($treinamento->inscIni)) }}</p>
                    <p>Fim das inscrições: {{ date('d/m/Y' , strtotime($treinamento->inscFim)) }}</p>
                    <p>Início do treinamento: {{ date('d/m/Y' , strtotime($treinamento->treiIni)) }}</p>
                    <p>Fim do treinamento: {{ date('d/m/Y' , strtotime($treinamento->treiFim)) }}</p>
                    <p>Quantidade mínima de participantes: {{ $treinamento->quantMin }}</p>
                    <p>Quantidade máxima de participantes: {{ $treinamento->quantMax }}</p>
                    <h3>Sobre o treinamento:</h3>
                    <p class="event-description"> {{ $treinamento->descricao }}</p>
                    @if(!$hasUserJoined)
                        <form action="/treinamentos/join/{{ $treinamento->id }}" method="POST">
                        @csrf
                        <a href="/treinamentos/join/{{ $treinamento->id }}" 
                            class="btn btn-primary" 
                            id="event-submit" 
                            onClick="event.preventDefault();
                            this.closest('form').submit();">
                            Confirmar Presença
                        </a>
                        </form>
                    @else
                        <form action="/treinamentos/leave/{{ $treinamento->id }}" method="POST">
                            @csrf
                            @method("DELETE")
                            <button type="submit" class="btn btn-danger delete-btn">Sair do Treinamento</button>
                        </form>
                    @endif
                    <a href="/treinamentos/edit/{{ $treinamento->id }}" class="btn btn-info edit-btn">Editar</a> 
                    <form action="/treinamentos/{{ $treinamento->id }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger delete-btn">Deletar</button>
                    </form>
                </div>
        </div>
    </div>

@endsection