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

        

        return view('welcome', ['treinamentos' => $treinamentos, 'search'=>$search]);
    }

    public function create() {
        return view('treinamentos.criar');
    }

    public function store(Request $request) {

        $treinamento = new Treinamento;
        $treinamento->nome = $request->nome;
        $treinamento->descricao = $request->descricao;
        $treinamento->cargaHr = $request->cargaHr;
        $treinamento->inscIni = $request->inscIni;
        $treinamento->inscFim = $request->inscFim;
        $treinamento->treiIni = $request->treiIni;
        $treinamento->treiFim = $request->treiFim;
        $treinamento->quantMin = $request->quantMin;
        $treinamento->quantMax = $request->quantMax;

        $treinamento->save();

        return redirect("/")->with('msg', 'Treinamento criado com sucesso!');
    }

    public function show($id) {

        $treinamento = Treinamento::findOrFail($id);

        return view('treinamentos.show', ['treinamento' => $treinamento]);

    }

    public function destroy($id) {

        Treinamento::findOrFail($id)->delete();

        return redirect('/')->with('msg', 'Treinamento excluído com sucesso!');
    }

    public function edit($id) {

        $treinamento = Treinamento::findOrFail($id);

        return view('treinamentos.edit', ['treinamento' => $treinamento]);
    }

    public function update(Request $request) {
        
        Treinamento::findOrFail($request->id)->update($request->all());

        return redirect('/')->with('msg', 'Treinamento editado com sucesso!');
    }

    public function joinTreinamento($id) {
        
        $user = auth()->user();

        $user->treinamentos()->attach($id);

        $treinamento = Treinamento::findOrFail($id);

        return redirect('/')->with('msg', 'Presença confirmada no treinamento ' . $treinamento->nome . '!!');
    }

    public function meusTreinamentos() {
        $user = auth()->user();
        $treinamentos = $user->treinamentos;
        $treinamentosAsParticipant = $user->treinamentos;

        return view('treinamentos.meusTreinamentos', ['treinamentos' => $treinamentos, 'treinamentosAsParticipant' => $treinamentosAsParticipant]);
    }
}
