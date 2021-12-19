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




Route::get('/', 'AlunoController@index');
Route::get('home', 'AlunoController@index');

Route::get('/novo', 'AlunoController@novo');
Route::post('/novo', 'AlunoController@adicionar');

Route::get('/editar/{id}', 'AlunoController@editar');
Route::post('/editar/{id}', 'AlunoController@update');


Route::get('/excluir/{id}', 'AlunoController@excluir');

Route::get('/visualizar/{id}', 'AlunoController@visualizar');
Route::post('/visualizar/{id}', 'AlunoController@voltar');

Route::get('/gerarPdf/{id}', 'AlunoController@gerarPdf')->name('pdf');

Route::post('/', 'AlunoController@store');





/*Route::get('qr-code-g', function () {
    \QrCode::size(500)
              ->format('png')
              ->generate('ItSolutionStuff.com', public_path('images/qrcode.png'));
      
    return view('QrCode');
});


 
/*Route::get('qr-code', function () {
    return QrCode::size(500)->generate('Welcome to kerneldev.com!');
}); */