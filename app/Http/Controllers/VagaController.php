<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Vaga;

use App\Http\Requests\StoreUpdateFromRequestVagas;



use App\Models\Treinamento;

class VagaController extends Controller
{
    
    public function index() {

        $search = request('search');
        if($search){
            $vagas = Vaga::where([
                ['titulo', 'like', '%'.$search.'%']
            ])->get();

        } else {
            $vagas = Vaga::all();
        }

        return view('vagas.vaga', ['vagas' => $vagas, 'search'=>$search]);
    }

    public function create() {
        return view('vagas.make');
    }

    public function store(StoreUpdateFromRequestVagas $request){

        $vaga = new Vaga;
        $vaga->titulo = $request->titulo;
        $vaga->empresa = $request->empresa;
        $vaga->desc = $request->desc;
        $vaga->requisitos = $request->requisitos;
        $vaga->salario = $request->salario;

        $vaga->save();

        return redirect('/vagas')->with('msg', 'Vaga criada com sucesso!');  

    }

    public function show($id){

        $vaga = Vaga::findOrFail($id);
        $user = auth()->user();
        $hasUserJoined = false;
        if($user) {
            $userVagas = $user->vagas->toArray();

            foreach($userVagas as $userVaga) {
                if($userVaga['id'] == $id) {
                    $hasUserJoined = true;
                }
            }
        }
        
        $hasUserNota = false;
        if($user) {

            foreach($user->treinamentos as $userTreinamento) {
                if($userTreinamento->pivot->nota2 != -1) {
                    $hasUserNota = true;
                }
            }
        }

        return view('vagas.mostrar', ['vaga' => $vaga, 'hasUserJoined' => $hasUserJoined, 'hasUserNota' => $hasUserNota]);
    }

    public function destroy($id){

        Vaga::findOrFail($id)->delete();

        return redirect('/vagas')->with('msg', 'Vaga excluída com sucesso!');

    }

    public function edit($id){

        $vaga = Vaga::findOrFail($id);

        return view('vagas.edit',['vaga'=>$vaga]);

    }

    public function update(StoreUpdateFromRequestVagas $request){

        Vaga::findOrFail($request->id)->update($request->all());

        return redirect('/vagas')->with('msg', 'Vaga editada com sucesso!');

    }

    public function joinVaga($id) {

        $user = auth()->user();

        $user->vagas()->attach($id);

        $vaga = Vaga::findOrFail($id);

        return redirect('/vagas')->with('msg', 'Candidatado na vaga: ' . $vaga->titulo);
    }

    public function leaveVaga($id) {
        
        $user = auth()->user();

        $user->vagas()->detach($id);

        $vaga = Vaga::findOrFail($id);
        
        return redirect('/vagas')->with('msg', 'Candidatura cancelada na vaga: ' . $vaga->titulo);
    }
}
