<?php

namespace App\Http\Controllers;

use App\Models\Aluno;
use App\User;
use Illuminate\Http\Request;

class alunController extends Controller
{
     //
    protected $professor;
    protected $user;

     public function __construct(Professor $professor, User $user){
         $this->$professor = new Professor;
         $this->$user = new User;
     }

    public function store(Request $request)
    {
       $user = new User;
       $user->name = $request->name;
       $user->matricula = $request->matricula;
       $user->password =$request->senha;
       $user->save();
      
       $professor = new Professor;
       $professor->id_user = $user->id;
       $professor->nome = $request->name;
       $professor->descricao = $request->descricao;
       $professor->save();

       return view('sistema.Login_professor')->with('matricula', $user->matricula);
       


        //return view('sistema.Index');
        
    }
}
