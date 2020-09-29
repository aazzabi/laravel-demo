<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
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

//Retourner un message
Route::get('/hello', function () {
    echo "Hello";
});

//Retourner un message parametré
Route::get('/hello/{name}',
    function ($name) {
        echo "Hello $name";
    }
);


//Ajouter des Contraintes de type pour les paramétres
Route::get('user/{name}', function ($name) {
    echo $name;
})
->where('name', '[A-Za-z]+');
Route::get('user/{id}', function ($id) {
    echo 'ID ' . $id;
})
->where('id', '[0-9]+');
Route::get('user/{id}/{name}', function ($id, $name)
{
    echo $id .'-'. $name;

})
->where(['id' => '[0-9]+', 'name' => '[a-z]+']);


//Retourner une réponse JSON
Route::get('jsonResponse', function(){
    return response()->json([
        'name' => 'Arafet',
        'state' => 'Djerba',
        'age' => 25
    ]);
});

// Utilisation de controlleurs
//Route::get('/home',  'App\Http\Controllers\HomeController@index');
Route::get('/home',  [HomeController::class, 'index']);
Route::get('/show',  [HomeController::class, 'show']);
Route::get('/detail/{value}',  [HomeController::class, 'detail']);