<?php



Route::get('/', function () {
  return view('sistema.Index');
    //return view('welcome');
});




Route::get('/home', 'HomeController@index')->name('home');

//Auth::routes();

Route::post('/create','testeController@store')->name('store');

//route::post('/store','alunController@store')->name('store.aluno');

Route::post('/store/professor','ProfessorController@store')->name('store.professor');
Route::get('/message/{id}', 'HomeController@getMessage')->name('message');
Route::post('/message', 'HomeController@sendMessage');




//rotas viwews 

Route::view('/Login_aluno', 'sistema/Login_aluno')->name('Login_aluno');
Route::get('/Cadastro_aluno', 'AlunoController@index')->name('Cadastro_aluno');
Route::get('/solicitacao', 'SolicitacaoController@index')->name('Solicitacao');

Route::get('/Cadastro_professor', 'ProfessorController@index')->name('Cadastro_professor');
/* Route::view('/Cadastro_professor', 'sistema/Cadastro_professor')->name('Cadastro_professor'); */

Route::view('/Login_professor', 'sistema/Login_professor')->name('Login_professor');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home'); 
