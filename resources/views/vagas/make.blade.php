@extends('layouts.main')

@section('title', 'Criar vaga de emprego')

@section('content')
    
<div id="event-create-container" class="col-md-6 offset-md-3">
    <h1>Crie uma vaga</h1>

    @if ($errors->any())
        <ul class="errors" id="errors-preencher">
            @foreach ($errors->all() as $error)
                <li class="error">{{ $error }}</li>
            @endforeach
        </ul>
    @endif
    <form action="/vagas" method="POST">
        @csrf
        <div class="form-group">
            <label for="nome">Vaga:</label>
            <input type="text" class="form-control" id="titulo" name="titulo" placeholder="Titulo da Vaga" value="{{ old('titulo') }}">
        </div>
        <div class="form-group">
            <label for="nome">Empresa:</label>
            <input type="text" class="form-control" id="empresa" name="empresa" placeholder="Empresa que está ofertando" value="{{ old('empresa') }}">
        </div>
        <div class="form-group">
            <label for="nome">Descrição:</label>
            <textarea name="desc" id="desc" class="form-control" placeholder="Descrição das atividades a serem desempenhadas">{{ old('desc') }}</textarea>
        </div>
        <div class="form-group">
            <label for="nome">Requisitos:</label>
            <textarea name="requisitos" id="requisitos" class="form-control" placeholder="Requisitos para candidatura">{{ old('requisitos') }}</textarea>
        </div>
        <div class="form-group">
            <label for="nome">Salario:</label>
            <input type="text" class="form-control" id="salario" name="salario" placeholder="Faixa salarial" value="{{ old('salario') }}">
        </div>
        <input type="submit" class="btn btn-primary" value="Criar Vaga">
    </form>
</div>

@endsection