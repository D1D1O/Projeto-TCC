<?php

namespace App\Http\Controllers;

use App\User;
use App\Professor;
use Illuminate\Http\Request;

class ProfessorController extends Controller
{
    
    
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
