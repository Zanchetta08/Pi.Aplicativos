@extends('layouts.main')

@section('title', 'Vagas')

@section('content')
    
    <div id="search-container" class="col-md-12">
        <h1>Busque uma vaga</h1>
        <form action="/" method="GET">
            <input type="text" id="search" name="search" class="form-control" placeholder="Procurar vagas...">
        </form>
    </div>
    <div id="events-container" class="col-md-12">
        <h2>Proximas Vagas</h2>
        <p>Veja as vagas ai</p> 
        <div id="cards-container" class="row">
            @foreach($vagas as $vaga)
            <div class="card col-md-3">
                <img src="/img/no-logo.png" alt="{{ $vaga->nome }}">
                <div class="card-body">        
                    <h5 class="card-title">{{ $vaga->titulo }}</h5>
                    <p class="card-participants">Empresa: {{ $vaga->empresa }}</p>
                    <a href="/vagas/{{ $vaga->id }}" class="btn btn-primary">Saber mais</a>
                </div>
            </div>
           @endforeach
        </div>
    </div>

@endsection