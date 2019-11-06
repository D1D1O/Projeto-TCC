<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\User;

class SolicitacaoController extends Controller
{
    public function index()
    {


         /* $users = User::where('tipo','=','professor')->get(); */

         $users = DB::table('professores')->get();
          /* dd($users);  */

        return view('sistema.Aluno_solicitaOri', ['users' => $users]);
    }
}
