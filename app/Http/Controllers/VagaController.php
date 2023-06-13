<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Vaga;

use App\Http\Requests\StoreUpdateFromRequestVagas;

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

        return view('vagas.mostrar',['vaga' => $vaga]);

    }

    public function destroy($id){

        Vaga::findOrFail($id)->delete();

        return redirect('/vagas')->with('msg', 'Vaga excluida !!!');

    }

    public function edit($id){

        $vaga = Vaga::findOrFail($id);

        return view('vagas.edit',['vaga'=>$vaga]);

    }

    public function update(StoreUpdateFromRequestVagas $request){

        Vaga::findOrFail($request->id)->update($request->all());

        return redirect('/vagas')->with('msg', 'Vaga editada com sucesso !!!');

    }

    public function joinVaga($id) {

        $user = auth()->user();

        $user->vagas()->attach($id);

        return redirect('/vagas')->with('msg', 'Fazer msg'); 
    }
}
