@extends('layouts.main')

@section('title', $treinamento->nome)

@section('content')

    <div class="col-md-10 offset-md-1">
        <div class="row">
                <div id="info-container" class="col-md-6">
                    <h1>{{ $treinamento->nome }}</h1>
                    <p>Carga horária: {{ $treinamento->cargaHr }} horas</p>
                    <p>Início das inscrições: {{ $treinamento->inscIni }}</p>
                    <p>Fim das inscrições: {{ $treinamento->InscFim }}</p>
                    <p>Início do treinamento: {{ $treinamento->treiIni }}</p>
                    <p>Fim do treinamento: {{ $treinamento->treiFim }}</p>
                    <p>Quantidade mínima de participantes: {{ $treinamento->quantMin }}</p>
                    <p>Quantidade máxima de participantes: {{ $treinamento->quantMax }}</p>
                    <h3>Sobre o treinamento:</h3>
                    <p class="event-description"> {{ $treinamento->descricao }}</p>
                    <a href="" class="btn btn-primary" id="event-submit">Confirmar Presença</a>
                </div>
        </div>
    </div>

@endsection