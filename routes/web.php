<?php
use Illuminate\Support\Facades\Route;
use App\Models\Promotion;
use App\Models\Brand;
use App\Models\Car;
use App\Models\Reservation;

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
Route::view('cgInfo','cgInfo');
Route::view('profil','profil');
Route::view('reservation','reservation');
Route::view('contest','contest');
Route::view('construct','construct');

//--------------------------------------------------------------------------
//********************************GET************************************** 
//--------------------------------------------------------------------------

Route::get('/', function () {
    $brands = Brand::getAllBrands();
    $cars = Car::getAllCars();
    $latestCar = Car::getLatestCar();
    $availableCars = Car::getAvailableCarsForTomorrow();
    return view('welcome', compact('brands','cars','latestCar','availableCars'));
});

Route::middleware('auth')->group(function () {
    
    Route::get('/reservation', function (){
        $user = Auth::user();
        $cars = Car::getAllCars();
        $reservations = Reservation::getUserReservations($user->id);
        return view('reservation', compact('cars','reservations'));
    })->name('reservation');
    
    Route::get('/home', function () {
        $availableCars = Car::getAvailableCarsForTomorrow();
        $actuPromo = Promotion::getPromotionsByDate();
        return view('home', compact('availableCars', 'actuPromo'));
    })->name('home');
});


Route::get('/events', [App\Http\Controllers\EventController::class, 'index']);
Route::get('/car/{id}', [App\Http\Controllers\CarController::class, 'show'])->name('CarController@show');
Route::get('/test',[App\Http\Controllers\BrandController::class, 'list'])->name('BrandController@list');

Route::get('/logout', function () {
    Auth::logout();
    return redirect('/login');
})->name('logout');

//--------------------------------------------------------------------------
//********************************POST************************************* 
//--------------------------------------------------------------------------

Route::post('/create-reservation', [App\Http\Controllers\ReservationController::class, 'createReservation'])->name('create.reservation');
Route::delete('/delete-reservation/{id}', [App\Http\Controllers\ReservationController::class, 'deleteReservation'])->name('delete.reservation');

//--------------------------------------------------------------------------
//********************************OTHER************************************* 
//--------------------------------------------------------------------------
Auth::routes();

