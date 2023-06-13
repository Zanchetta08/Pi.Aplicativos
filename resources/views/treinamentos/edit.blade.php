@extends('layouts.main')

@section('title', 'Editando: ' . $treinamento->nome)

@section('content')
    
<div id="event-create-container" class="col-md-6 offset-md-3">
    <h1>Editando: {{ $treinamento->nome }}</h1>
    <form action="/treinamentos/update/{{ $treinamento->id }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="nome">Treinamento:</label>
            <input type="text" class="form-control" id="nomeTrei" name="nome" placeholder="Nome do Treinamento" value="{{ $treinamento->nome }}">
        </div>
        <div class="form-group">
            <label for="nome">Descrição:</label>
            <textarea name="descricao" id="descricaoTrei" class="form-control" placeholder="Descrição do Treinamento">{{ $treinamento->descricao  }}</textarea>
        </div>
        <div class="form-group">
            <label for="nome">Carga horária do Treinamento:</label>
            <input type="number" class="form-control" id="cargaHrTrei" name="cargaHr" min="0" value="{{ $treinamento->cargaHr }}">
        </div>
        <div class="form-group">
            <label for="nome">Início das Inscrições:</label>
            <input type="date" class="form-control" id="inicioInscTrei" name="inscIni" value="{{ $treinamento->inscIni }}">
        </div>
        <div class="form-group">
            <label for="nome">Fim das Inscrições:</label>
            <input type="date" class="form-control" id="fimInscTrei" name="inscFim" value="{{ $treinamento->inscFim }}">
        </div>
        <div class="form-group">
            <label for="nome">Início do Treinamento:</label>
            <input type="date" class="form-control" id="inicioTreiTrei" name="treiIni" value="{{ $treinamento->treiIni }}">
        </div>
        <div class="form-group">
            <label for="nome">Fim do Treinamento:</label>
            <input type="date" class="form-control" id="fimTreiTrei" name="treiFim" value="{{ $treinamento->treiFim }}">
        </div>
        <div class="form-group">
            <label for="nome">Quantidade mínima de participantes:</label>
            <input type="number" class="form-control" id="quantidadeMinTrei" name="quantMin" min="1" value="{{ $treinamento->quantMin }}">
        </div>
        <div class="form-group">
            <label for="nome">Quantidade máxima de participantes:</label>
            <input type="number" class="form-control" id="quantidadeMaxTrei" name="quantMax" min="1" value="{{ $treinamento->quantMax }}">
        </div>
        <input type="submit" class="btn btn-primary" value="Editar Treinamento">
    </form>
</div>

@endsection