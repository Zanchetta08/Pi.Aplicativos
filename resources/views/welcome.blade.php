@extends('layouts.main')

@section('title', 'Home')

@section('content')
    
    <div id="search-container" class="col-md-12">
        <h1>Busque um treinamento</h1>
        <form action="/" method="GET">
            <input type="text" id="search" name="search" class="form-control" placeholder="Procurar treinamento...">
        </form>
    </div>
    <div id="events-container" class="col-md-12">
        @if($search)
        <h2>Buscando por: {{ $search }}</h2>
        @else
        <h2>Proximos Treinamentos</h2>
        <p class="subtitle">Veja os treinamentos dos próximos dias</p>
        @endif
            
        <div id="cards-container" class="row">
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
            @if(count($treinamentos) == 0 && $search)
                <p>Não foi possível encontrar nenhum treinamento com {{ $search }}! <a href="/">Ver todos</a> </p>                
            @elseif(count($treinamentos) == 0 )
                <p>Não há treinamentos disponíveis </p>
            @endif
        </div>
    </div>

@endsection