@extends('layouts.main')

@section('title', $vaga->titulo)

@section('content')

    <div class="col-md-10 offset-md-1">
        <div class="row">
                <div id="info-container" class="col-md-6">
                    <h1>{{ $vaga->titulo }}</h1>
                        <h3>Empresa: </h3>
                        <p>{{ $vaga->empresa }}</p>              
                        <h3>Requisitos: </h3>
                        <p>{{ $vaga->requisitos }}</p>
                        <h3>Salário: </h3>
                        <p>{{ $vaga->salario }}</p>
                    <h3>Sobre a vaga:</h3>
                    <p class="event-description"> {{ $vaga->desc }}</p>
                    @if(!$hasUserJoined && $hasUserNota)
                        <form action="/vagas/join/{{ $vaga->id }}" method="POST">
                        @csrf
                        <a href="/vagas/join/{{ $vaga->id }}" 
                            class="btn btn-primary" 
                            id="event-submit" 
                            onClick="event.preventDefault();
                            this.closest('form').submit();">
                            Se candidatar
                        </a>
                        </form>
                    @elseif($hasUserJoined)
                        <form action="/vagas/leave/{{ $vaga->id }}" method="POST">
                            @csrf
                            @method("DELETE")
                            <button type="submit" class="btn btn-danger delete-btn">Sair da vaga</button>
                        </form>
                    @else
                    @endif
                    @if(Auth::user()->acesso == 'empresa' || Auth::user()->acesso == 'admin')
                        <div class="botoes">
                            <a href="/vagas/edit/{{ $vaga->id }}" class="btn btn-info edit-btn">Editar</a> 
                            <form action="/vagas/{{ $vaga->id }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger delete-btn">Deletar</button>
                            </form>
                        </div>
                    @endif
                </div>
                <div id="info-container" class="col-md-6">
                    <h3>Lista de usuários inscritos:</h3>
                    @if(count($inscritos) == 0)
                        <p>Não há inscritos nessa vaga!</p>
                    @else
                        @foreach($inscritos as $inscrito)
                            <p>{{ $loop->index+1 }} - {{ $inscrito->name }}</p>
                        @endforeach
                    @endif
                </div>
        </div>
    </div>

@endsection