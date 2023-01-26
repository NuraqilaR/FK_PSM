<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TitleController;

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

Route::get('/redirects',[HomeController::class,"index"]);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    
    // Route::get('/TitleMainpageStu', function () {
    //     return view('titlemainpagestu');
    // })->name('TitleManagement.TitleMainpageStu');
    
});


Route::get('/coordinator', [HomeController::class, 'index'])->name('coordinator');
Route::get('/lecturer', [HomeController::class, 'index'])->name('lecturer');
Route::get('/dashboard', [HomeController::class, 'index'])->name('dashboard');

Route::get('/userList', [HomeController::class, 'userList'])->name('userList');


/*
|--------------------------------------------------------------------------
|MANAGE TITLE
|--------------------------------------------------------------------------
|
*/

//Mainpage of student
Route::get('/TitleMainpageStu', [TitleController::class, ('titlemainpagestu')]);

//Add Registration info
Route::get('/RegisterTitle', function () {
    return view('TitleManagement.RegisterTitle');
});

//View Registration Status
// Route::get('/ViewRegistrationStatus', function () {
//     return view('TitleManagement.ViewRegistrationStatus');
// });

//create registration
Route::post('/ViewRegisterStatus', [TitleController::class, 'store'])->name('ViewRegisterStatus');

