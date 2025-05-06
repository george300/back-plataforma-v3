<?php


use App\Http\Controllers\SimuladorController;
use Illuminate\Support\Facades\Route;

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
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('user', 'HomeController@index');
Route::get('userInfo', 'HomeController@userInfo');
Route::apiResource('menu', 'MenuController');
Auth::routes(['register' => false]);
Route::get('/', function () {
    return view('welcome');
});


//EJEMPLO DE RUTAS
// require_once "others/codigos/RouterCodigos.php";
