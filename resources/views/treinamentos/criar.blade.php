@extends('layouts.main')

@section('title', 'Criar Treinamento')

@section('content')
    
<div id="event-create-container" class="col-md-6 offset-md-3">
    <h1>Crie um treinamento</h1>

    @if ($errors->any())
        <ul class="errors" id="errors-preencher">
            @foreach ($errors->all() as $error)
                <li class="error">{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form action="/treinamentos" method="POST">
        @csrf
        <div class="form-group">
            <label for="nome">Treinamento:</label>
            <input type="text" class="form-control" id="nomeTrei" name="nome" placeholder="Nome do Treinamento" value="{{ old('nome') }}">
        </div>
        <div class="form-group">
            <label for="nome">Descrição:</label>
            <textarea name="descricao" id="descricaoTrei" class="form-control" placeholder="Descrição do Treinamento" >{{ old('descricao') }}</textarea>
        </div>
        <div class="form-group">
            <label for="nome">Carga horária do Treinamento:</label>
            <input type="number" class="form-control" id="cargaHrTrei" name="cargaHr" min="0" value="{{ old('cargaHr') }}">
        </div>
        <div class="form-group">
            <label for="nome">Início das Inscrições:</label>
            <input type="date" class="form-control" id="inicioInscTrei" name="inscIni" placeholder="Data do Treinamento" value="{{ old('inscIni') }}">
        </div>
        <div class="form-group">
            <label for="nome">Fim das Inscrições:</label>
            <input type="date" class="form-control" id="fimInscTrei" name="inscFim" placeholder="Nome do Treinamento" value="{{ old('inscFim') }}">
        </div>
        <div class="form-group">
            <label for="nome">Início do Treinamento:</label>
            <input type="date" class="form-control" id="inicioTreiTrei" name="treiIni" placeholder="Nome do Treinamento" value="{{ old('treiIni') }}">
        </div>
        <div class="form-group">
            <label for="nome">Fim do Treinamento:</label>
            <input type="date" class="form-control" id="fimTreiTrei" name="treiFim" placeholder="Nome do Treinamento" value="{{ old('treiFim') }}">
        </div>
        <div class="form-group">
            <label for="nome">Quantidade mínima de participantes:</label>
            <input type="number" class="form-control" id="quantidadeMinTrei" name="quantMin" min="1" value="{{ old('quantMin') }}">
        </div>
        <div class="form-group">
            <label for="nome">Quantidade máxima de participantes:</label>
            <input type="number" class="form-control" id="quantidadeMaxTrei" name="quantMax" min="1" value="{{ old('quantMax') }}">
        </div>
        <input type="submit" class="btn btn-primary" value="Criar Treinamento">
    </form>
</div>

@endsection