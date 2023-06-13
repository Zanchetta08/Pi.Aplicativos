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
                    </div>
                </div>
            @endforeach
        @else 
            <p>Você não está participando de nenhum treinamento. Veja todos os treinamentos <a href="/">aqui.</a></p>
        @endif
        </div>
</div>

<div id="events-container" class="col-md-12">
        <h2>Vagas que me candidatei</h2>     
        <div id="cards-container" class="row">
            @if(count($vagas) > 0)
                @foreach($vagas as $vaga)
                <div class="card col-md-3">
                    <img src="/img/logo.png" alt="{{ $vaga->titulo }}">
                    <div class="card-body">        
                        <h5 class="card-title">{{ $vaga->titulo }}</h5>
                        <p class="card-participants">Empresa: {{ $vaga->empresa }}</p>
                        <a href="/vagas/{{ $vaga->id }}" class="btn btn-primary">Saber mais</a>
                    </div>
                </div>
                @endforeach
            @else 
                <p>Você não se candidatou para nenhuma vaga. Veja todas as vagas <a href="/vagas">aqui.</a></p>
            @endif   
        </div>
</div>
@endsection