<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\solicitacoes;
use App\User;

class SolicitacaoController extends Controller
{
    public function index()
    {
         $users = DB::table('professores')->get();

        return view('sistema.Aluno_solicitaOri', ['users' => $users]);
    }

    public function cadSoliticao(Request $request){
        /* return view('sistema.Login_professor'); */
        /* dd($request); */

        $solic = new solicitacoes();
        $solic->id_aluno = $request->id_auth;
        $solic->id_prof = $request->id_professor;
        $solic->sttsSolic = '1';
        $solic->save();

        /* return view('home'); */

    }

}


