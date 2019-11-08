<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\solicitacoes;
use App\User;

class SolicitacaoController extends Controller
{
    public function index()
    {
         $users = DB::table('professores')->get();

        return view('sistema.Aluno_solicitaOri', ['users' => $users]);
    }
    public function verificar()
    {
         //$users = DB::table('professores')->get();
         $solicitacoes = solicitacoes::where('id_prof','=', Auth::id())
                               ->where('sttsSolic', '=', 1)
                               ->get();
        /* dd($solicitacoes); */
/*         $solicitacoes = solicitacoes::where([['id_prof', Auth::id()],[ 'sttsSolic', 1]])->get();
 */
       
        foreach ($solicitacoes as $u) {
            $ids[] = $u->id_aluno;
        }
        if (!isset($ids) ){
            return view('sistema.SAluno');
        }
         
        foreach ($ids as $id) {
            $users[] = User::where('id','=', $id)->get();
        }
        /* dd($users);  */
        return view('sistema.Professor_verifica',['users' => $users]);
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
    public function Resp(Request $request){
       
            dd($request);

            return 'funcionou';
        
    }

}


