@extends('layouts.main')

@section('title', 'Vagas')

@section('content')
    
    <div id="search-container" class="col-md-12">
        <h1>Busque uma vaga</h1>
        <form action="/vagas" method="GET">
            <input type="text" id="search" name="search" class="form-control" placeholder="Procurar vaga...">
        </form>
    </div>
    <div id="events-container" class="col-md-12">
        @if($search)
        <h2>Buscando por: {{ $search }}</h2>
        @else
        <h2>Próximas Vagas</h2>
        @endif
            
        <div id="cards-container" class="row">
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
            @if(count($vagas) == 0 && $search)
                <p>Não foi possível encontrar nenhuma vaga com {{ $search }}! <a href="/vagas">Ver todas</a> </p>                
            @elseif(count($vagas) == 0 )
                <p>Não há vagas disponíveis </p>
            @endif
        </div>
    </div>

@endsection