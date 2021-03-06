<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('linux', 'linuxController@index');

Route::get('aluno', 'AlunoController@index');
Route::post('aluno', 'AlunoController@insert');
Route::get('aluno/{id}', 'AlunoController@find');
Route::put('aluno/{id}', 'AlunoController@update');
Route::delete('aluno/{id}', 'AlunoController@delete');








// Route::get('/4linux', function () {
//     return view('4linux',['blade' => 'Olá Blade']);
// });
