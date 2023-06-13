<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Treinamento;

use App\Http\Requests\StoreUpdateFromRequestTreinamento;

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

    public function store(StoreUpdateFromRequestTreinamento $request) {

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

        $user = auth()->user();
        $hasUserJoined = false;

        if($user) {
            $userTreinamentos = $user->treinamentos->toArray();

            foreach($userTreinamentos as $userTreinamento) {
                if($userTreinamento['id'] == $id) {
                    $hasUserJoined = true;
                }
            }
        }

        return view('treinamentos.show', ['treinamento' => $treinamento, 'hasUserJoined' => $hasUserJoined]);

    }

    public function destroy($id) {

        Treinamento::findOrFail($id)->delete();

        return redirect('/')->with('msg', 'Treinamento excluído com sucesso!');
    }

    public function edit($id) {

        $treinamento = Treinamento::findOrFail($id);

        return view('treinamentos.edit', ['treinamento' => $treinamento]);
    }

    public function update(StoreUpdateFromRequestTreinamento $request) {
        
        Treinamento::findOrFail($request->id)->update($request->all());

        return redirect('/')->with('msg', 'Treinamento editado com sucesso!');
    }

    public function joinTreinamento($id) {
        
        $user = auth()->user();

        $user->treinamentos()->attach($id);

        $treinamento = Treinamento::findOrFail($id);

        return redirect('/')->with('msg', 'Presença confirmada no treinamento: ' . $treinamento->nome);
    }

    public function dashboard() {

        $user = auth()->user();
        $treinamentos = $user->treinamentos;

        return view('treinamentos.dashboard', ['treinamentos' => $treinamentos]);
    }

    public function leaveTreinamento($id) {
        
        $user = auth()->user();

        $user->treinamentos()->detach($id);

        $treinamento = Treinamento::findOrFail($id);
        
        return redirect('/')->with('msg', 'Presença cancelada no treinamento: ' . $treinamento->nome);
    }
}
