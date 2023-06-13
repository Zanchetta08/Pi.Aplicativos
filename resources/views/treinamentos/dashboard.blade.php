@extends('layouts.main')

@section('title', 'Meus Treinamentos')

@section('content')
    
<div id="events-container" class="col-md-12">
        <h2>Treinamentos que estou participando</h2>     
        <div id="cards-container" class="row">
        @if(count($treinamentos) > 0)
            @foreach($treinamentos as $treinamento)
                <div class="card col-md-3">
                    <img src="/img/logo.png" alt="{{ $treinamento->nome }}">
                    <div class="card-body">        
                        <h5 class="card-title">{{ $treinamento->nome }}</h5>
                        <p class="card-participants">{{ count($treinamento->users) }} Participantes</p>
                        <a href="/treinamentos/{{ $treinamento->id }}" class="btn btn-primary">Saber mais</a>
                        <p>{{ $treinamento->pivot->nota }}</p>
                        <p>{{ $treinamento->pivot->nota1 }}</p>
                        <p>{{ $treinamento->pivot->nota2 }}</p>
                    </div>
                </div>
            @endforeach
        @else 
            <p>Você não está participando de nenhum treinamento. Veja todos os treinamentos <a href="/">aqui.</a></p>
        @endif
        </div>
    </div>

@endsection