<?php
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
//--------------------------------------------------------------------------
//********************************VIEW************************************** 
//--------------------------------------------------------------------------
Route::view('main','main');
Route::view('connect','connect');
Route::view('add','add');
//--------------------------------------------------------------------------
//********************************GET************************************** 
//--------------------------------------------------------------------------
Route::get('/', function () {
    return view('welcome');
});

Route::get('/cars/{id}', [App\Http\Controllers\CarsController::class, 'show'])->name('CarsController@show');
Route::get('/test',[App\Http\Controllers\BrandsController::class, 'list'])->name('BrandsController@list');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/events', [App\Http\Controllers\EventController::class, 'index']);


Route::get('/logout', function () {
    Auth::logout();
    return redirect('/login');
})->name('logout');
//--------------------------------------------------------------------------
//********************************OTHER************************************* 
//--------------------------------------------------------------------------
Auth::routes();

