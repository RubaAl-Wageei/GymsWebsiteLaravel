<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\GymController;
use App\Http\Controllers\GymServiceController;
use App\Http\Controllers\PersonalTrainerController;
use App\Http\Controllers\PersonalTrainerServiceController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginAdminController;
use App\Http\Controllers\ProfileUserController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserGymBookController;
use App\Http\Controllers\GymUserController;
use App\Http\Controllers\TrainerReservationController;
use App\Http\Controllers\UserTrainerBookController;
use App\Http\Controllers\TrainerUserController;
use App\Http\Controllers\SearchController;
use App\Models\Reservation;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('Website.Home');
});

Route::get('/Gyms', function () {
    return view('Website.Gyms');
});

Route::get('/PersonalTrainers', function () {
    return view('Website.PersonalTrainers');
});

// Route::get('/Products', function () {
//     return view('Website.Product');
// });

Route::get('/About', function () {
    return view('Website.About');
});

// Route::get('/Contact', function () {
//     return view('Website.Contact');
// });

Route::get('/Login', function () {
    return view('Website.Login');
});

Route::get('/Register', function () {
    return view('Website.Register');
});

Route::get('/ProfileUser', function () {
    return view('Website.ProfileUser');
});

Route::get('/EditProfile', function () {
    return view('Website.EditProfile');
});

Route::resource('/UserProfile' , ProfileUserController::class);

Route::resource('/UserGymBook',UserGymBookController::class);

Route::resource('/UserTrainerBook',UserTrainerBookController::class);

Route::get('/GymUser' , [GymUserController::class,'index']);

Route::get('/TrainerUser' , [TrainerUserController::class,'index']);


Route::post('/search', [SearchController::class, 'searchGym'])->name('search.searchGym');
Route::post('/searchTrainer', [SearchController::class, 'searchTrainer'])->name('search.searchTrainer');






//----------------------------------------------------------------------------------------------//


Route::get('/AdminLogin' , function(){
    return view('Dashboard.Login');
});
Route::post('/CheckLogin' , [LoginAdminController::class,'login'])->name('CheckLogin');

Route::middleware(['Admin'])->group(function(){

    Route::get('/Admin', function () {
        return view('Dashboard.index');
    });

    Route::get('/Account', function () {
        return view('Dashboard.ProfileAdmin');
    });

    Route::resource('/user' , UserController::class);

    Route::resource('/category' , CategoryController::class);

    Route::resource('/Gym' , GymController::class);

    Route::resource('/Trainers' , PersonalTrainerController::class);

    Route::resource('/GymServices', GymServiceController::class);

    Route::resource('/TrainerServices' , PersonalTrainerServiceController::class);

    Route::resource('/Contact' , ContactController::class);

    Route::resource('/GymReservation' , ReservationController::class);

    Route::resource('/TrainerReservation' , TrainerReservationController::class);
});



/////////////////////////////////////////////////////////////////////////////////////
Route::controller(RegisterController::class)->group(function(){
    Route::get('register', 'create')->name('register');
    Route::post('register', 'store')->name('register');
    Route::get('login', 'index')->name('login');
    Route::post('login', 'login')->name('go.login');
    Route::get('logout', 'destroy')->name('logout');
    Route::post('logout', 'destroy')->name('logout');
});

// Route::get('/Account', function () {
//     return view('account');
// });


// Route::get('/Table', function () {
//     return view('Table');
// });


// Route::get('/CUser', function () {
//     return view('CreateUser');
// });


Route::get('/form', function () {
    return view('index');
});

Route::get('/nav', function () {
    return view('Nav');
});

