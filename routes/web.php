<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\ScheduleController;
use App\Http\Controllers\TitleController;
use App\Http\Controllers\RubricController;

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


//ady report
Route::resource('reports', ReportController::class);

Route::get('lecturerReport', [ReportController::class, 'lecturerShow'])->name('lecturerReport');

Route::get('lecturerView/{report}', [ReportController::class, 'lecturerView'])->name('lecturerView');

Route::put('lecturerAccept', [ReportController::class, 'lecturerApprove'])->name('lecturerApprove');




/*
|--------------------------------------------------------------------------
 Manage Rubric - coordinator
|--------------------------------------------------------------------------
*/

//route to  Rubric Homepagae
Route::get('HomePage', function () {
    return view('ManageRubric/CoorMainpage');
});

//route to AddRubric 
 Route::get('AddRubric', function () {
    return view('ManageRubric/AddRubric');
});

//create rubric
Route::post('rubricdata/create','App\Http\Controllers\RubricController@createRubric');

//View rubric
Route::get('rubricdata','App\Http\Controllers\RubricController@viewRubric');
Route::get('viewPSM1','App\Http\Controllers\RubricController@viewPSM1');
Route::get('viewPSM2','App\Http\Controllers\RubricController@viewPSM2');
Route::get('viewPTA','App\Http\Controllers\RubricController@viewPTA');

//edit form
Route::get('/rubricdata/{Rubric_id}/edit','App\Http\Controllers\RubricController@EditRubric');

//update
Route::post('/rubricdata/{Rubric_id}/update','App\Http\Controllers\RubricController@update');

//delete
Route::get('/rubricdata/{Rubric_id}/delete','App\Http\Controllers\RubricController@delete');

/*
|--------------------------------------------------------------------------
|Manage Rubric - Student
|--------------------------------------------------------------------------
*/
Route::get('ViewRubric','App\Http\Controllers\RubricController@StdviewRubric');
Route::get('sviewPSM1','App\Http\Controllers\RubricController@sviewPSM1');
Route::get('sviewPSM2','App\Http\Controllers\RubricController@sviewPSM2');
Route::get('sviewPTA','App\Http\Controllers\RubricController@sviewPTA');

/*
|--------------------------------------------------------------------------
| Evaluator (MANAGE RUBRIC)
|--------------------------------------------------------------------------
*/

Route::middleware(['auth:evaluator'])->group(function(){
Route::get('EvalView','App\Http\Controllers\RubricController@EvaviewRubric');
Route::get('eviewPSM1','App\Http\Controllers\RubricController@eviewPSM1');
Route::get('eviewPSM2','App\Http\Controllers\RubricController@eviewPSM2');
Route::get('eviewPTA','App\Http\Controllers\RubricController@eviewPTA');
});