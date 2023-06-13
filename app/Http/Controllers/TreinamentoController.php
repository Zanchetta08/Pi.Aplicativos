<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Treinamento;

class TreinamentoController extends Controller
{
    public function index() {

        $search = request('search');
        if($search){
            $treinamentos = Treinamento::where([
                ['nome', 'like', '%'.$search.'%']
            ])->get();

        } else {
            $treinamentos = Treinamento::all();
        }

        

        return view('home', ['treinamentos' => $treinamentos, 'search'=>$search]);
    }

    public function create() {
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

        return redirect("/")->with('msg', 'Treinamento criado com sucesso!');
    }

    public function show($id) {

        $treinamento = Treinamento::findOrFail($id);

        return view('treinamentos.show', ['treinamento' => $treinamento]);

    }
}
