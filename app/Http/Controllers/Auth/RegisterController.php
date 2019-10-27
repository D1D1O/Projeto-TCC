<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Aluno;
use App\Professor;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    //protected $redirectTo = '/home';
    protected $redirectTo ;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {

        $messages = [
            'name.required'    => 'Informe seu nome',
            'email.required'    => 'Informe seu Email',
            'email.unique'    => 'Este email já esta cadastrado em nosso sistema.',
            'password.required' => 'informe uma senha valida',
            'password.min' => 'Senha deve ter no mínimo 6 digitos',
            'password.required' => 'informe uma senha valida',

        ];

        return Validator::make($data, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ], $messages);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data )
    {
        /* return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);*/

        $user = new User;
        $user->name = $data['name'];
        $user->email = $data['email'];
        $user->matricula = $data['matricula'];
        $user->tipo = $data['tipo'];
        $user->password = bcrypt($data['password']);
        $user->save();
        
        if ($data['tipo'] == 'aluno') {
            $aluno = new Aluno;
            $aluno->id_user = $user->id;
            $aluno->nome =  $data['name'];
            $aluno->turma =  $data['turma'];
            $aluno->id_professor =  $data['id_professor'];
            $aluno->save();
            $this->redirectTo = '/t1';
            return $user;
        }
        if ($data['tipo'] == 'professor') {
            $professor = new Professor;
            $professor->id_user = $user->id;
            $professor->nome =  $data['name'];
            $professor->descricao =  $data['descricao'];
            $professor->save();
            
            $this->redirectTo = '/t2';
            //$this->redirectTo = '/t2';
            return $user;
        }
        
    }
}
