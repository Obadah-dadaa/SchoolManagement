<?php

use App\Models\FinancialFees;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


//Authentication Api
Route::post('/login','App\Http\Controllers\Api\AuthController@login');
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::delete('/logout','App\Http\Controllers\Api\AuthController@logout')->middleware('auth:sanctum');

///////////////////////////////////
Route::get('/test-online', function () {
    dd('i am online ^_^');
});
// Route::middleware('auth:sanctum')->group(function (){
//Students Api ( استعراض معلومات الطالب )
    Route::get('/parents/show/{id}','App\Http\Controllers\Api\StudentController@show');

//Schedule Api (استعراض البرنامج الدراسي)
    Route::get('/schedule','App\Http\Controllers\Api\ScheduleController@index');

//Exam Api (استعراض علامات الفحص)
    Route::get('/exam/show/{id}','App\Http\Controllers\Api\ExamController@show');

//Show Subjects Api
    Route::get('/subjects','App\Http\Controllers\Api\ExamController@index');

//Show Grades Api
    Route::get('/grades','App\Http\Controllers\Api\StudentController@index');


//FinancialFees Api Through Parent ID (استعراض الرسوم المالية عن طريق رقم الأهل)
    Route::get('/fees/parents/show/{id}','App\Http\Controllers\Api\FinancialFeesController@show_parent');

//FinancialFees Api Through Student ID ( استعراض الرسوم المالية عن طريق رقم الابن)
    Route::get('/fees/student/show/{id}','App\Http\Controllers\Api\FinancialFeesController@show_student');

//Absences Api (استعراض الغيابات)
    Route::get('/absences/show/{id}','App\Http\Controllers\Api\AbsencesController@show');

//Store Absences Info   (تخزين معلومات الغياب)
    Route::post('/absences/store','App\Http\Controllers\Api\AbsencesController@store');

//Update Absences Info   (تعديل معلومات الغياب)
    Route::put('/absences/update/{id}','App\Http\Controllers\Api\AbsencesController@update');

//Delete Absences Info   (حذف معلومات الغياب)
    Route::delete('/absences/delete/{id}','App\Http\Controllers\Api\AbsencesController@destroy');

//Consult Api (استعراض الاستشارة)
    Route::get('/consult/show/{id}','App\Http\Controllers\Api\ConsultController@show');

//Store consult Info   (تخزين معلومات الاستشارة)
    Route::post('/consult/store','App\Http\Controllers\Api\ConsultController@store');

//Update consult Info   (تعديل معلومات الاستشارة)
    Route::put('/consult/update/{id}','App\Http\Controllers\Api\ConsultController@update');

//Delete consult Info   (حذف معلومات الاستشارة)
    Route::delete('/consult/delete/{id}','App\Http\Controllers\Api\ConsultController@destroy');

//Psychological Counselors Api (المرشد النفسي)
    Route::get('/counselor','App\Http\Controllers\Api\ConsultController@index');
// });
