<?php

namespace App\Http\Controllers\Auth;

use App\User;

use App\Aluno;
use App\Professor;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{

    private $tipo;
    
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    //protected $redirectTo = '/t2';
     protected $redirectTo;


    /**
     * Create a new controller instance.
     *
     * @return void
     */
    //public function __construct( Request $request)
    public function __construct( )
    {
        $this->middleware('guest')->except('logout');

        /*$this->tipo = $request->tipo ;

        if ($this->tipo == 'professor'){
            $this->redirectTo = '/t1';
        }

        if($this->tipo == 'aluno') {
            $this->redirectTo = '/t2';
        }*/
    }
}