<?php

namespace App\Http\Controllers;

use App\Aluno;
use App\solicitacoes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\User;

class SolicitacaoController extends Controller
{

    /* retonar todos os professores que estão cadastrado no sistema. */

    public function index()
    {
        $jaSolicitou = solicitacoes::where([['id_aluno', Auth::id()], ['sttsSolic', 3]])->count();

        if ($jaSolicitou > 0) {
            return redirect('home')->with('status', 'Você já possui um orientador ');
        }

        $jaSolicitou = solicitacoes::where([['id_aluno', Auth::id()], ['sttsSolic', 1]])->count();


        if ($jaSolicitou > 0) {
            return redirect('home')->with('status', 'Você já possui uma solicitação de orientador aguarde a possição do professor');
        }

        $users = DB::table('professores')->get();

        return view('sistema.Aluno_solicitaOri', ['users' => $users]);
    }

    /* Esta função verifica se o professor tem solicitações de orientação,
    quando tiver retorna os alunos que solicitaram e se não tiver retorna uma msg
    informando que o professor não possui solicitaçõs */

    public function verificar()
    {
        $solicitacoes = solicitacoes::where('id_prof', '=', Auth::id())
            ->where('sttsSolic', '=', 1)
            ->get();

        foreach ($solicitacoes as $u) {
            $ids[] = $u->id_aluno;
        }
        if (!isset($ids)) {
            return view('sistema.SAluno');
        }

        foreach ($ids as $id) {
            $users[] = User::where('id', '=', $id)->get();
        }

        return view('sistema.Professor_verifica', ['users' => $users]);
    }

    /* Função responsavel por cadastrar as solicitaçõs que o aluno fazao professor. */

    public function cadSoliticao(Request $request)
    {
        /* return view('sistema.Login_professor'); */
        /* dd($request); */

        $solic = new solicitacoes();
        $solic->id_aluno = $request->id_auth;
        $solic->id_prof = $request->id_professor;
        $solic->sttsSolic = '1';
        $solic->save();
        //$users = Auth::user();
        return redirect('home');
        //return view('home',['users' => $users]); 

    }


    public function RespProfessor(Request $request)
    {

        /* dd($request); */

        $id_professor = $request->id_professor;
        $id_aluno = $request->id_aluno;
        $sim = $request->resp1;
        $nao = $request->resp0;

        if (isset($request->resp1)) {
            $Solicitou = solicitacoes::where([['id_aluno', $id_aluno], ['id_prof', $id_professor], ['sttsSolic', 1]])->get();

            foreach ($Solicitou as $u) {
                $ids[] = $u->id;
            }

            $solicitacao = solicitacoes::find($ids[0]);
            $solicitacao->respProf = 1;
            $solicitacao->sttsSolic = 3;
            $solicitacao->save(); 
    
            $aluno = Aluno::where('id_user', '=', $id_aluno)->get();
            $aluno[0]->id_professor = $id_professor;
            $aluno[0]->save();

            return redirect('home')->with('status', 'Parabens você possui um novo orientando. ');
            

        } else if (isset($request->resp0)) {

            $Solicitou = solicitacoes::where([['id_aluno', $id_aluno], ['id_prof', $id_professor], ['sttsSolic', 1]])->get();

            foreach ($Solicitou as $u) {
                $ids[] = $u->id;
            }

            $solicitacao = solicitacoes::find($ids[0]);
            $solicitacao->respProf = 0;
            $solicitacao->sttsSolic = 2;
            $solicitacao->save(); 

            return redirect('home');
        }

        return 'Nenhum';
    }
}
