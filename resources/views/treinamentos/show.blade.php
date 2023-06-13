@extends('layouts.main')

@section('title', $treinamento->nome)

@section('content')

    <div class="col-md-10 offset-md-1">
        <div class="row">
                <div id="info-container" class="col-md-6">
                    <h1>{{ $treinamento->nome }}</h1>
                    <h3>Carga horária: </h3>
                    <p>{{ $treinamento->cargaHr }} horas</p>
                    <h3>Início das inscrições: </h3>
                    <p>{{ date('d/m/Y' , strtotime($treinamento->inscIni)) }}</p>
                    <h3>Fim das inscrições: </h3>
                    <p>{{ date('d/m/Y' , strtotime($treinamento->inscFim)) }}</p>
                    <h3>Início do treinamento: </h3>
                    <p>{{ date('d/m/Y' , strtotime($treinamento->treiIni)) }}</p>
                    <h3>Fim do treinamento: </h3>
                    <p>{{ date('d/m/Y' , strtotime($treinamento->treiFim)) }}</p>
                    <h3>Quantidade mínima de participantes: </h3>
                    <p>{{ $treinamento->quantMin }}</p>
                    <h3>Quantidade máxima de participantes: </h3>
                    <p>{{ $treinamento->quantMax }}</p>
                    <h3>Sobre o treinamento:</h3>
                    <p class="event-description"> {{ $treinamento->descricao }}</p>
                    @foreach($treinamentos as $treinamentoo)
                        @if($treinamentoo->id == $treinamento->id)
                            @if($treinamentoo->pivot->nota != -1)
                                <h3>Nota do Quiz:</h3>
                                <p>{{ $treinamentoo->pivot->nota }}</p>
                            @endif
                            @if($treinamentoo->pivot->nota != -1 && $treinamentoo->pivot->nota < 7)
                                <h3 class="avisoQuiz">Nota insuficiente no Quiz para prosseguir!</h3>
                            @endif
                            @if($treinamentoo->pivot->nota1 != -1)    
                                <h3>Nota do Case 1:</h3>
                                <p>{{ $treinamentoo->pivot->nota1 }}</p>
                            @endif 
                            @if($treinamentoo->pivot->nota2 != -1)  
                                <h3>Nota do Case 2:</h3>
                                <p>{{ $treinamentoo->pivot->nota2 }}</p>
                            @endif 
                        @endif 
                    @endforeach
                    @if(!$hasUserJoined)
                        @if(count($treinamento->users) < $treinamento->quantMax)
                            <form action="/treinamentos/join/{{ $treinamento->id }}" method="POST">
                            @csrf
                            <a href="/treinamentos/join/{{ $treinamento->id }}" 
                                class="btn btn-primary" 
                                id="event-submit" 
                                onClick="event.preventDefault();
                                this.closest('form').submit();">
                                Confirmar Presença
                            </a>
                            </form>
                        @else 
                            <h3 class="avisoQuiz">Quantidade máxima de inscritos atingido!</h3>
                        @endif
                    @else
                    @foreach($treinamentos as $treinamentoo)
                        @if($treinamentoo->id == $treinamento->id)
                            @if($treinamentoo->pivot->nota == -1)
                            <form action="/treinamentos/leave/{{ $treinamento->id }}" method="POST">
                                @csrf
                                @method("DELETE")
                                <button type="submit" class="btn btn-danger delete-btn">Sair do Treinamento</button>
                            </form>
                            @endif
                        @endif
                    @endforeach
                    @endif
                    <div class="botoes">
                        <a href="/treinamentos/edit/{{ $treinamento->id }}" class="btn btn-info edit-btn">Editar</a> 
                        <form action="/treinamentos/{{ $treinamento->id }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger delete-btn">Deletar</button>
                        </form>
                    </div>
                    @foreach($treinamentos as $treinamentoo)
                        @if($treinamentoo->id == $treinamento->id)
                            @if($treinamentoo->pivot->nota == -1)
                            <a href="/treinamentos/quiz/{{ $treinamento->id }}" class="btn btn-info edit-btn">Quiz</a>
                            @endif
                            @if($treinamentoo->pivot->nota1 == -1 && $treinamentoo->pivot->nota > 7)
                            <a href="/treinamentos/case1/{{ $treinamento->id }}" class="btn btn-info edit-btn">Case 1</a>
                            @endif
                            @if($treinamentoo->pivot->nota2 == -1 && $treinamentoo->pivot->nota1 != -1)
                            <a href="/treinamentos/case2/{{ $treinamento->id }}" class="btn btn-info edit-btn">Case 2</a>
                            @endif
                        @endif
                    @endforeach
                </div>
                <div id="info-container" class="col-md-6">
                    @foreach($treinamentos as $treinamentoo)
                        @if($treinamentoo->id == $treinamento->id)
                            @if($treinamentoo->pivot->nota > 7)
                                <h1>Matéria para o Case 1:</h1>
                                <p>Mussum Ipsum, cacilds vidis litro abertis. Interessantiss quisso pudia ce receita de bolis, mais bolis eu num gostis.Nullam volutpat risus nec leo commodo, ut interdum diam laoreet. Sed non consequat odio.Suco de cevadiss, é um leite divinis, qui tem lupuliz, matis, aguis e fermentis.Mé faiz elementum girarzis, nisi eros vermeio.</p>
                                <p>Suco de cevadiss, é um leite divinis, qui tem lupuliz, matis, aguis e fermentis.Suco de cevadiss deixa as pessoas mais interessantis.Praesent malesuada urna nisi, quis volutpat erat hendrerit non. Nam vulputate dapibus.A ordem dos tratores não altera o pão duris.</p>
                                <p>Suco de cevadiss deixa as pessoas mais interessantis.Aenean aliquam molestie leo, vitae iaculis nisl.Quem num gosta di mé, boa gentis num é.A ordem dos tratores não altera o pão duris.</p>
                                <p>Si num tem leite então bota uma pinga aí cumpadi!Nullam volutpat risus nec leo commodo, ut interdum diam laoreet. Sed non consequat odio.Praesent malesuada urna nisi, quis volutpat erat hendrerit non. Nam vulputate dapibus.Mé faiz elementum girarzis, nisi eros vermeio.</p>
                                <p>Viva Forevis aptent taciti sociosqu ad litora torquent.Interessantiss quisso pudia ce receita de bolis, mais bolis eu num gostis.A ordem dos tratores não altera o pão duris.Atirei o pau no gatis, per gatis num morreus.</p>
                            @endif
                            @if($treinamentoo->pivot->nota1 != -1)
                                <h1>Matéria para o Case 2:</h1>
                                <p>Detraxit consequat et quo num tendi nada.Interessantiss quisso pudia ce receita de bolis, mais bolis eu num gostis.Suco de cevadiss, é um leite divinis, qui tem lupuliz, matis, aguis e fermentis.Quem num gosta di mim que vai caçá sua turmis!</p>
                                <p>Quem num gosta di mim que vai caçá sua turmis!Atirei o pau no gatis, per gatis num morreus.A ordem dos tratores não altera o pão duris.Casamentiss faiz malandris se pirulitá.</p>
                                <p>Si num tem leite então bota uma pinga aí cumpadi!Sapien in monti palavris qui num significa nadis i pareci latim.Si u mundo tá muito paradis? Toma um mé que o mundo vai girarzis!Per aumento de cachacis, eu reclamis.</p>
                                <p>Suco de cevadiss, é um leite divinis, qui tem lupuliz, matis, aguis e fermentis.Mauris nec dolor in eros commodo tempor. Aenean aliquam molestie leo, vitae iaculis nisl.Tá deprimidis, eu conheço uma cachacis que pode alegrar sua vidis.Praesent malesuada urna nisi, quis volutpat erat hendrerit non. Nam vulputate dapibus.</p>
                                <p>Si u mundo tá muito paradis? Toma um mé que o mundo vai girarzis!Em pé sem cair, deitado sem dormir, sentado sem cochilar e fazendo pose.Mé faiz elementum girarzis, nisi eros vermeio.Per aumento de cachacis, eu reclamis.</p>
                            @endif
                        @endif
                    @endforeach
                </div> 
        </div>
    </div>

@endsection