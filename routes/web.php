<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
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
| Manage Rubric - evaluator
|--------------------------------------------------------------------------
*/


Route::get('EvaluatorView','App\Http\Controllers\RubricController@EvaviewRubric');
Route::get('eviewPSM1','App\Http\Controllers\RubricController@eviewPSM1');
Route::get('eviewPSM2','App\Http\Controllers\RubricController@eviewPSM2');
Route::get('eviewPTA','App\Http\Controllers\RubricController@eviewPTA');


//Mainpage of student
Route::get('/TitleMainpageStu', [TitleController::class, ('TitleMainpageStu')]);

//Add Registration info
Route::get('/RegisterTitle', function () {
    return view('TitleManagement.RegisterTitle');
});

//View Registration Status
// Route::get('/ViewRegistrationStatus', function () {
//     return view('TitleManagement.ViewRegistrationStatus');
// });

Route::get('/titleregister', function() {
    return view('TitleManagement.ViewRwgisterStatus');
});
//create registration

Route::post('/registertitle','App\Http\Controllers\TitleController@CreateRegistration');

//edit form
Route::get('/registertitle/{Reg_id}/edit','App\Http\Controllers\TitleController@EditRegister');

//update
Route::post('/registertitle/{Reg_id}/update','App\Http\Controllers\TitleController@update');

//delete
Route::get('/registertitle/{Reg_id}/delete','App\Http\Controllers\TitleController@delete');

Route::resource('/TitleManagement', TitleController::class);


/*
|--------------------------------------------------------------------------
| Manage Evaluation - QILA
|--------------------------------------------------------------------------
*/

//manage evaluation mainpage
Route::get('LecturerEvaluationMainpage', function () {
    return view('ManageEvaluation.EvaluationMainpage');
});
Route::get('CoordinatorEvaluationMainpage', function () {
    return view('ManageEvaluation.CoordinatorEvaluationMainpage');
});

// web routing manage evaluation for lecturer (supervisee / evaluator)
//open all add form
Route::get('AddEvaluationMarkSupervisee1','App\Http\Controllers\EvaluationController@AddEvaluationMarkSupervisee1');
Route::get('AddEvaluationMarkEvaluatee1','App\Http\Controllers\EvaluationController@AddEvaluationMarkEvaluatee1');
Route::get('AddEvaluationMarkSupervisee2','App\Http\Controllers\EvaluationController@AddEvaluationMarkSupervisee2');
Route::get('AddEvaluationMarkEvaluatee2','App\Http\Controllers\EvaluationController@AddEvaluationMarkEvaluatee2');

//create 
Route::post('/create','App\Http\Controllers\EvaluationController@create');
Route::post('/createEva','App\Http\Controllers\EvaluationController@createEva');

// view Mark Supervisee
Route::get('ViewMarkSupervisee','App\Http\Controllers\EvaluationController@ViewMarkSupervisee');

// view Mark evaluatee
Route::get('ViewMarkEvaluatee','App\Http\Controllers\EvaluationController@ViewMarkEvaluatee');

//edit form supervisee
Route::get('/ViewMarkSupervisee/{id}/edit','App\Http\Controllers\EvaluationController@edit');

//update supervisee
Route::post('/ViewMarkSupervisee/{id}/update','App\Http\Controllers\EvaluationController@update');

//edit form evaluatee
Route::get('/ViewMarkEvaluatee/{id}/editEva','App\Http\Controllers\EvaluationController@editEva');

//update evaluatee
Route::post('/ViewMarkEvaluatee/{id}/updateEva','App\Http\Controllers\EvaluationController@updateEva');

//delete mark supervisee
Route::get('/ViewMarkSupervisee/{id}/delete','App\Http\Controllers\EvaluationController@destroy');

//delete mark evaluatee
Route::get('/ViewMarkEvaluatee/{id}/delete','App\Http\Controllers\EvaluationController@destroyEva');


// web routing manage evaluation for coordinator
// view Mark supervisee for PSM1 AND PTA1
Route::get('ViewMarkSuperviseePSM1PTA1','App\Http\Controllers\EvaluationController@ViewMarkSuperviseePSM1PTA1');

// view Mark supervisee for PSM2 AND PTA2
Route::get('ViewMarkSuperviseePSM2PTA2','App\Http\Controllers\EvaluationController@ViewMarkSuperviseePSM2PTA2');

// view Mark evaluatee for PSM1 AND PTA1
Route::get('ViewMarkEvaluateePSM1PTA1','App\Http\Controllers\EvaluationController@ViewMarkEvaluateePSM1PTA1');

// view Mark evaluatee for PSM2 AND PTA2
Route::get('ViewMarkEvaluateePSM2PTA2','App\Http\Controllers\EvaluationController@ViewMarkEvaluateePSM2PTA2');
