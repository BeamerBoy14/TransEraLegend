<?php
use Illuminate\Support\Facades\Route;
use App\Models\Brand;
use App\Models\Cars;

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
Route::view('profil','profil');
Route::view('reservation','reservation');
Route::view('contest','contest');
//--------------------------------------------------------------------------
//********************************GET************************************** 
//--------------------------------------------------------------------------
Route::get('/', function () {
    $brands = Brand::getAllBrands();
    $cars = Cars::getAllCars();
    $latestCar = Cars::getLatestCar();
    return view('welcome', compact('brands','cars','latestCar'));
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

