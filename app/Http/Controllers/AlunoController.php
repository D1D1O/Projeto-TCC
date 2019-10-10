<?php

namespace App\Http\Controllers;

use App\Models\Aluno;
use App\User;
use Illuminate\Http\Request;

class AlunoController extends Controller
{
    
    private $aluno;
    private $user;

     public function __construct(Aluno $aluno, User $user){

         $this->$aluno = new Aluno;
         $this->$user = new User;
     }
    public function index()
    {
        //
    }

   
    public function create()
    {
        //return view('sistema.Login_aluno');
    }

    
    public function store(Request $request)
    {

    
       $user = new User;
       $user->name = $request->name;
       $user->matricula = $request->matricula;
       $user->password =$request->senha;

      // $info = $user->save();

       
       $aluno = new Aluno;
       $aluno->id_user = $user->id;
       $aluno->nome = $request->name;
       $aluno->turma = $request->turma;
       $aluno->save();

       return view('sistema.Login_aluno')->with('matricula', $user->matricula);
       


        //return view('sistema.Index');
        
    }

    
    public function show(Aluno $aluno)
    {
        //
    }

    
    public function edit(Aluno $aluno)
    {
        //
    }

    
    public function update(Request $request, Aluno $aluno)
    {
        //
    }

   
    public function destroy(Aluno $aluno)
    {
        $aluno->delete();
        return [
            'message' => 'Aluno deleted!'
        ];
    }
}
