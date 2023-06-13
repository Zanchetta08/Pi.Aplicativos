@extends('layouts.main')

@section('title', 'Teste')

@section('content')
    
<div id="search-container" class="col-md-12">
    <h1>Busque um treinamento</h1>
    <form action="">
        <input type="text" id="search" name="search" class="form-control" placeholder="Procurar treinamento...">
    </form>
</div>
<div id="events-container" class="col-md-12">
    <h2>Próximos Treinamentos</h2>
    <p class="subtitle">Veja os treinamentos dos próximos dias</p>
    <div id="cards-container" class="row">
        @foreach($treinamentos as $treinamento)
        <div class="card col-md-3">
            <img src="/img/logo.png" alt="{{ $treinamento->nome }}">
            <div class="card-body">
                <p class="card-date">10/09/2023</p>
                <h5 class="card-title">{{ $treinamento->nome }}</h5>
                <p class="card-participants">X Inscritos</p>
                <a href="" class="btn btn-primary">Saber mais</a>
            </div>
        </div>
        @endforeach
    </div>
</div>

@endsection