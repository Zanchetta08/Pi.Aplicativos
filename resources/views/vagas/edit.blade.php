@extends('layouts.main')

@section('title', 'Editando: '.$vaga->titulo)

@section('content')
    
<div id="event-create-container" class="col-md-6 offset-md-3">
    <h1>Editando: {{ $vaga->titulo }}</h1>

    @if ($errors->any())
        <ul class="errors" id="errors-preencher">
            @foreach ($errors->all() as $error)
                <li class="error">{{ $error }}</li>
            @endforeach
        </ul>
    @endif
    
    <form action="/vagas/update/{{ $vaga->id }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="nome">Vaga:</label>
            <input type="text" class="form-control" id="titulo" name="titulo" placeholder="Titulo da Vaga" value="{{ $vaga->titulo }}">
        </div>
        <div class="form-group">
            <label for="nome">Empresa:</label>
            <input type="text" class="form-control" id="empresa" name="empresa" placeholder="Empresa que está ofertando" value="{{ $vaga->empresa }}">
        </div>
        <div class="form-group">
            <label for="nome">Descrição:</label>
            <textarea name="desc" id="desc" class="form-control" placeholder="Descrição das atividades a serem desempenhadas" >{{ $vaga->desc }}</textarea>
        </div>
        <div class="form-group">
            <label for="nome">Requisitos:</label>
            <textarea name="requisitos" id="requisitos" class="form-control" placeholder="Requisitos para candidatura" >{{ $vaga->requisitos }}</textarea>
        </div>
        <div class="form-group">
            <label for="nome">Salario:</label>
            <input type="text" class="form-control" id="salario" name="salario" placeholder="Faixa salarial" value="{{ $vaga->salario }}">
        </div>
        <input type="submit" class="btn btn-primary" value="Editar a Vaga">
    </form>
</div>

@endsection