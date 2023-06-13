<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Treinamento;

class TreinamentoController extends Controller
{
    public function index() {

        $treinamentos = Treinamento::all();

        return view('home', ['treinamentos' => $treinamentos]);
    }

    public function criar() {
        return view('treinamentos.criar');
    }

    public function store(Request $request) {

        $treinamento = new Treinamento;
        $treinamento->nome = $request->nome;
        $treinamento->descricao = $request->desc;
        $treinamento->cargaHr = $request->cargaHr;
        $treinamento->inscIni = $request->iniInsc;
        $treinamento->inscFim = $request->fimInsc;
        $treinamento->treiIni = $request->iniTrei;
        $treinamento->treiFim = $request->fimTrei;
        $treinamento->quantMin = $request->quantMin;
        $treinamento->quantMax = $request->quantMax;

        $treinamento->save();

        return redirect("/");
    }
}
