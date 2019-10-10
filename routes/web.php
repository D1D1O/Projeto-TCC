<?php



Route::get('/', function () {
    return view('sistema.Index');
});



Route::get('/home', 'HomeController@index')->name('home');

//Auth::routes();

Route::post('/create','AlunoController@create')->name('create');

Route::post('/store','alunController@store')->name('store.aluno');

Route::post('/store/professor','ProfessorController@store')->name('store.professor');


//rotas viwews 

Route::view('/Login_aluno', 'sistema/Login_aluno')->name('Login_aluno');
Route::view('/Cadastro_aluno', 'sistema/Cadastro_aluno')->name('Cadastro_aluno');

Route::view('/Login_professor', 'sistema/Login_professor')->name('Login_professor');
Route::view('/Cadastro_professor', 'sistema/Cadastro_professor')->name('Cadastro_professor');







