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
}
