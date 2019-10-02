<?php



Route::get('/', function () {
    return view('welcome');
});

//Route::resource('Usuario', 'UsuarioController');

Route::resources([
    
    'usuario.index' => 'PhotoController',
    'usuario.creat' => 'PostController',
    'usuario.store' => 'PostController',
    'usuario.show' => 'PostController',

    
]);
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
