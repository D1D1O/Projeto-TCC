<?php



Route::get('/', function () {
  return view('sistema.Index');
    //return view('welcome');
});




Route::get('/home', 'HomeController@index')->name('home');

//Auth::routes();

Route::post('/create','testeController@store')->name('store');

Route::post('/store','AlunoController@store')->name('store.aluno');

//ute::post('/store','alunController@store')->name('store.aluno');


Route::post('/store/professor','ProfessorController@store')->name('store.professor');




//rotas viwews 

Route::view('/Login_aluno', 'sistema/Login_aluno')->name('Login_aluno');
Route::view('/Cadastro_aluno', 'sistema/Cadastro_aluno')->name('Cadastro_aluno');

Route::view('/Login_professor', 'sistema/Login_professor')->name('Login_professor');
Route::view('/Cadastro_professor', 'sistema/Cadastro_professor')->name('Cadastro_professor');

Route::view('/t1', 'sistema/Tela_aluno')->name('t1');
Route::view('/t2', 'sistema/Tela_professor')->name('t2');





Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
