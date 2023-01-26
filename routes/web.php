<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ScheduleController;
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
|MANAGE TITLE - TIM
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

Route::post('/registertitle/create','App\Http\Controllers\TitleController@CreateRegistration');

//edit form
Route::get('/registertitle/{Reg_id}/edit','App\Http\Controllers\TitleController@EditRegister');

//update
Route::post('/registertitle/{Reg_id}/update','App\Http\Controllers\TitleController@update');

//delete
Route::get('/registertitle/{Reg_id}/delete','App\Http\Controllers\TitleController@delete');

Route::resource('/TitleManagement', TitleController::class);

/*
|--------------------------------------------------------------------------
|Schedule -Takippu
|--------------------------------------------------------------------------
|
*/
Route::get('/schedule-requests', [App\Http\Controllers\ScheduleController::class, 'indexReq'])->name('scheduleReq');
Route::put('/schedule-accept', [App\Http\Controllers\ScheduleController::class, 'acceptSchedule'])->name('acceptReq');
Route::put('/schedule-reject', [App\Http\Controllers\ScheduleController::class, 'rejectSchedule'])->name('rejectReq');

Route::resource('/schedule', ScheduleController::class);
