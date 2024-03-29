<?php

namespace App\Http\Controllers;

use App\User;
use App\Message;
use App\Models\Aluno;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Pusher\Pusher;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
            /* $users = User::where('id', '!=', Auth::id())->get();
            return view('home', ['users' => $users]);    */

        if (Auth::user()->tipo == 'professor') {

            $users = Aluno::where('alunos.id_professor', '=', Auth::id())
                ->join('users', 'alunos.id_user', '=', 'users.id')
                ->get();
            return view('home', ['users' => $users]); 
        }

        if (Auth::user()->tipo == 'aluno') {

            $busca = User::where('users.id', '=',  Auth::id())
                ->join('alunos', 'alunos.id_user', '=', 'users.id')
                ->get();

            foreach ($busca as $u) {
                $id = $u->id_professor;
            }

            $users = User::where('users.id', '=', $id)
                ->get();

            return view('home', ['users' => $users]);
        }  

    }



    public function getMessage($user_id)
    {
        $my_id = Auth::id();

        Message::where(['from' => $user_id, 'to' => $my_id])->update(['is_read' => 1]);

        $messages = Message::where(function ($query) use ($user_id, $my_id) {
            $query->where('from', $my_id)->where('to', $user_id);
        })->orWhere(function ($query) use ($user_id, $my_id) {
            $query->where('from', $user_id)->where('to', $my_id);
        })->get();

        return view('messages.index', ['messages' => $messages]);
    }

    public function sendMessage(Request $request)
    {

        $from = Auth::id();
        $to = $request->receiver_id;
        $message = $request->message;

        $data = new Message();
        $data->from = $from;
        $data->to = $to;
        $data->message = $message;
        $data->is_read = 0;
        $data->save();

        // pusher
        $options = array(
            'cluster' => 'ap2',
            'useTLS' => true
        );
        $pusher = new Pusher(
            env('PUSHER_APP_KEY'),
            env('PUSHER_APP_SECRET'),
            env('PUSHER_APP_ID'),
            $options
        );
        $data = ['from' => $from, 'to' => $to]; // sending from and to user id when pressed enter
        $pusher->trigger('my-channel', 'my-event', $data);
    }
}
