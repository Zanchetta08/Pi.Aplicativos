@extends('layouts.main')

@section('title', $vaga->titulo)

@section('content')

<div class="col-md-10 offset-md-1">
        <div class="row">
                <div id="info-container" class="col-md-6">
                    <h1>{{ $vaga->titulo }}</h1>
                    <p>Empresa: {{ $vaga->empresa }} </p>
                    <p>Requisitos: {{ $vaga->requisitos }}</p>
                    <p>Salario: {{ $vaga->salario }}</p>
                    <h3>Sobre a vaga:</h3>
                    <p class="event-description"> {{ $vaga->desc }}</p>
                    <form action="/vagas/join/{{ $vaga->id }}" method="POST">
                        @csrf
                        <a href="/vagas/join/{{ $vaga->id }}" 
                            class="btn btn-primary" 
                            id="event-submit" onClick="event.preventDefault();
                            this.closest('form').submit();">
                            Confirmar Presença
                        </a>
                    </form>
                    <a href="/vagas/edit/{{ $vaga->id }}" class="btn btn-info edit-btn">Editar</a> 

                    <form action="/vagas/{{ $vaga->id }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger delete-btn">Deletar</button>
                    </form>
                </div>
        </div>
    </div>



@endsection