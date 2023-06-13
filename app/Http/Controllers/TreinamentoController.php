<?php

namespace App\Http\Controllers;

use Carbon\Carbon;

use Illuminate\Http\Request;

use App\Models\Treinamento;

use App\Models\Vaga;

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

        $date1 = $treinamento->inscIni;
        $date1 = Carbon::parse($date1);

        $date2 = $treinamento->inscFim;
        $date2 = Carbon::parse($date2);

        $result1 = $date1->gt($date2);

        $date3 = $treinamento->treiIni;
        $date3 = Carbon::parse($date3);

        $date4 = $treinamento->treiFim;
        $date4 = Carbon::parse($date4);

        $result2 = $date3->gt($date4);

        if($result1 == true && $result2 == true){
            return redirect("/treinamentos/criar")->with('msgerror', 'Data invalida do treinamento e das inscriçoes');
        }elseif($result1 == true) {
            return redirect("/treinamentos/criar")->with('msgerror', 'Data invalida das inscriçoes');
        }elseif($result2 == true) {
            return redirect("/treinamentos/criar")->with('msgerror', 'Data invalida do treinamento');
        }else {
            if($treinamento->quantMin > $treinamento->quantMax){
                return redirect("/treinamentos/criar")->with('msgerror', 'Quantidade minima nao pode ser maior que a maxima');
            }else {
                $treinamento->save();
                return redirect("/")->with('msg', 'Treinamento criado com sucesso!');
            }
            
        }
    }

    public function show($id) {

        $treinamento = Treinamento::findOrFail($id);

        $user = auth()->user();
        $hasUserJoined = false;
        $treinamentos = $user->treinamentos;
        if($user) {
            $userTreinamentos = $user->treinamentos->toArray();

            foreach($userTreinamentos as $userTreinamento) {
                if($userTreinamento['id'] == $id) {
                    $hasUserJoined = true;
                }
            }
        }

        return view('treinamentos.show', ['treinamento' => $treinamento, 'hasUserJoined' => $hasUserJoined, 'treinamentos' => $treinamentos]);

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

        $date1 = $treinamento->inscIni;
        $date1 = Carbon::parse($date1);

        $date2 = $treinamento->inscFim;
        $date2 = Carbon::parse($date2);

        $result1 = $date1->gt($date2);

        $date3 = $treinamento->treiIni;
        $date3 = Carbon::parse($date3);

        $date4 = $treinamento->treiFim;
        $date4 = Carbon::parse($date4);

        $result2 = $date3->gt($date4);

        if($result1 == true && $result2 == true){
            return redirect("/treinamentos/edit/{$request->id}")->with('msgerror', 'Data invalida do treinamento e das inscriçoes');
        }elseif($result1 == true) {
            return redirect("/treinamentos/edit/{$request->id}")->with('msgerror', 'Data invalida das inscriçoes');
        }elseif($result2 == true) {
            return redirect("/treinamentos/edit/{$request->id}")->with('msgerror', 'Data invalida do treinamento');
        }else {
            if($treinamento->quantMin > $treinamento->quantMax){
                return redirect("/treinamentos/edit/{$request->id}")->with('msgerror', 'Quantidade minima nao pode ser maior que a maxima');
            }else {
                Treinamento::findOrFail($request->id)->update($request->all());
                return redirect('/')->with('msg', 'Treinamento editado com sucesso!');
            }
            
        }    
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
        $vagas = $user->vagas;
        
        return view('treinamentos.dashboard', ['treinamentos' => $treinamentos, 'vagas' => $vagas]);
    }

    public function leaveTreinamento($id) {
        
        $user = auth()->user();

        $user->treinamentos()->detach($id);

        $treinamento = Treinamento::findOrFail($id);
        
        return redirect('/')->with('msg', 'Presença cancelada no treinamento: ' . $treinamento->nome);
    }

    public function quiz($id) {

        $treinamento = Treinamento::findOrFail($id);

        return view('treinamentos.quiz', ['treinamento' => $treinamento]);
    }


    public function quizUpdate(Request $request) {
        $contador = 0;

        if($request->resposta1 == 1){
            $contador++;
        }
        if($request->resposta2 == 2){
            $contador++;
        }
        if($request->resposta3 == 3){
            $contador++;
        }
        if($request->resposta4 == 1){
            $contador++;
        }
        if($request->resposta5 == 2){
            $contador++;
        }

        $nota = $contador * 2;

        $user = auth()->user();

        $actualPivot = $user->treinamentos()->where('treinamento_id', $request->id)->first()->pivot;

        $user->treinamentos()->updateExistingPivot($request->id, ['nota' => $nota]);
        
        
        return redirect('/')->with('msg', 'Quiz finalizado com sucesso!');
    }

    public function case1($id) {

        $treinamento = Treinamento::findOrFail($id);

        return view('treinamentos.case1', ['treinamento' => $treinamento]);
    }

    public function case1Update(Request $request) {
        $contador = 0;

        if($request->resposta1 == 1){
            $contador++;
        }
        if($request->resposta2 == 2){
            $contador++;
        }
        if($request->resposta3 == 3){
            $contador++;
        }
        if($request->resposta4 == 1){
            $contador++;
        }
        if($request->resposta5 == 2){
            $contador++;
        }

        $nota1 = $contador * 2;

        $user = auth()->user();

        $actualPivot = $user->treinamentos()->where('treinamento_id', $request->id)->first()->pivot;

        $user->treinamentos()->updateExistingPivot($request->id, ['nota1' => $nota1]);
        
        
        return redirect('/')->with('msg', 'Case 1 finalizado com sucesso!');
    }

    public function case2($id) {

        $treinamento = Treinamento::findOrFail($id);

        return view('treinamentos.case2', ['treinamento' => $treinamento]);
    }

    public function case2Update(Request $request) {
        $contador = 0;

        if($request->resposta1 == 1){
            $contador++;
        }
        if($request->resposta2 == 2){
            $contador++;
        }
        if($request->resposta3 == 3){
            $contador++;
        }
        if($request->resposta4 == 1){
            $contador++;
        }
        if($request->resposta5 == 2){
            $contador++;
        }

        $nota2 = $contador * 2;

        $user = auth()->user();

        $actualPivot = $user->treinamentos()->where('treinamento_id', $request->id)->first()->pivot;

        $user->treinamentos()->updateExistingPivot($request->id, ['nota2' => $nota2]);
        
        
        return redirect('/')->with('msg', 'Case 2 finalizado com sucesso!');
    }

}
