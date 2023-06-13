@extends('layouts.main')

@section('title', 'Meus Treinamentos')

@section('content')
    
<h2>Meus Treinamentos</h2>     
    <div id="cards-container" class="row">
    @if(count(treinamentosAsParticipant) > 0)
        @foreach($treinamentosAsParticipant as $treinamento)
            <div class="card col-md-3">
                <img src="/img/logo.png" alt="{{ $treinamento->nome }}">
                <div class="card-body">        
                    <h5 class="card-title">{{ $treinamento->nome }}</h5>
                    <p class="card-participants">{{ count($treinamento->users) }} Participantes</p>
                    <a href="/treinamentos/{{ $treinamento->id }}" class="btn btn-primary">Saber mais</a>
                </div>
            </div>
        @else 
        <p>Você ainda não está participando de nenhum treinamento. <a href="/">Veja todos os treinamentos!</a></p>
        @endif
    </div>

@endsection