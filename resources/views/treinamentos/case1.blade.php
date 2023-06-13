@extends('layouts.main')

@section('title', 'Case 1')

@section('content')
    
<div id="event-create-container" class="col-md-6 offset-md-3">
    <h1>Case 1: {{ $treinamento->nome }}</h1>
    <form action="/treinamentos/case1Update/{{ $treinamento->id }}" method="POST">
        @csrf
        @method('PUT')
        <h4>Selecione o círculo:</h4>
        <div class="form-group">
            <input class="form-check-input" type="radio" name="resposta1" value="1">
            <label for="nome"><ion-icon name="ellipse-outline"></ion-icon></label>
        </div>
        <div class="form-group">
            <input class="form-check-input" type="radio" name="resposta1" value="2">
            <label for="nome"><ion-icon name="square-outline"></ion-icon></label>
        </div>
        <div class="form-group">
            <input class="form-check-input" type="radio" name="resposta1" value="3">
            <label for="nome"><ion-icon name="triangle-outline"></ion-icon></label>
        </div>
        <h4>Selecione o quadrado:</h4>
        <div class="form-group">
            <input class="form-check-input" type="radio" name="resposta2" value="1">
            <label for="nome"><ion-icon name="ellipse-outline"></ion-icon></label>
        </div>
        <div class="form-group">
            <input class="form-check-input" type="radio" name="resposta2" value="2">
            <label for="nome"><ion-icon name="square-outline"></ion-icon></label>
        </div>
        <div class="form-group">
            <input class="form-check-input" type="radio" name="resposta2" value="3">
            <label for="nome"><ion-icon name="triangle-outline"></ion-icon></label>
        </div>
        <h4>Selecione o triângulo:</h4>
        <div class="form-group">
            <input class="form-check-input" type="radio" name="resposta3" value="1">
            <label for="nome"><ion-icon name="ellipse-outline"></ion-icon></label>
        </div>
        <div class="form-group">
            <input class="form-check-input" type="radio" name="resposta3" value="2">
            <label for="nome"><ion-icon name="square-outline"></ion-icon></label>
        </div>
        <div class="form-group">
            <input class="form-check-input" type="radio" name="resposta3" value="3">
            <label for="nome"><ion-icon name="triangle-outline"></ion-icon></label>
        </div>
        <h4>Selecione a chave:</h4>
        <div class="form-group">
            <input class="form-check-input" type="radio" name="resposta4" value="1">
            <label for="nome"><ion-icon name="key-outline"></ion-icon></label>
        </div>
        <div class="form-group">
            <input class="form-check-input" type="radio" name="resposta4" value="2">
            <label for="nome"><ion-icon name="leaf-outline"></ion-icon></label>
        </div>
        <div class="form-group">
            <input class="form-check-input" type="radio" name="resposta4" value="3">
            <label for="nome"><ion-icon name="hammer-outline"></ion-icon></label>
        </div>
        <h4>Selecione a folha:</h4>
        <div class="form-group">
            <input class="form-check-input" type="radio" name="resposta5" value="1">
            <label for="nome"><ion-icon name="key-outline"></ion-icon></label>
        </div>
        <div class="form-group">
            <input class="form-check-input" type="radio" name="resposta5" value="2">
            <label for="nome"><ion-icon name="leaf-outline"></ion-icon></label>
        </div>
        <div class="form-group">
            <input class="form-check-input" type="radio" name="resposta5" value="3">
            <label for="nome"><ion-icon name="hammer-outline"></ion-icon></label>
        </div>
        <input type="submit" class="btn btn-primary" value="Finalizar Case 1">
    </form>
</div>

@endsection