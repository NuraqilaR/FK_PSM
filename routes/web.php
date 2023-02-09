<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;

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
});

Route::get('/coordinator', [HomeController::class, 'index'])->name('coordinator');
Route::get('/lecturer', [HomeController::class, 'index'])->name('lecturer');
Route::get('/dashboard', [HomeController::class, 'index'])->name('dashboard');
Route::get('/userList', [HomeController::class, 'userList'])->name('userList');

Route::get('/userList', [UserController::class, 'index'])->name('userList');
//add new user
Route::get('userAdd', function () {
    return view('userAdd');
});

Route::post('/userList', [UserController::class, 'store'])->name('userList');
//user view
Route::get('/userView/{std_id}', [UserController::class, 'show']);
//edit user
Route::get('/userEdit/{std_id}/edit',[UserController::class,'edit']);
Route::post('/userList',[UserController::class,'update']);
//delete user
Route::post('/userList/{std_id}', [UserController::class, 'destroy']);
