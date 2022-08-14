<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();
Route::get('/home',([HomeController::class, 'index']))->name("home");
Route::get('logout', 'App\Http\Controllers\Auth\LoginController@logout')->name("logout");
Route::get('/contact','App\Http\Controllers\Web\EmailController@getContact')->name('contact');
Route::post('/contact','App\Http\Controllers\Web\EmailController@postContact')->name('contact');


//parent Routes
Route::get('/parents','App\Http\Controllers\Web\ParentController@index')->name('parents');
Route::get('/parent/create','App\Http\Controllers\Web\ParentController@create')->name('parent.create');
Route::post('/parent/store','App\Http\Controllers\Web\ParentController@store')->name('parent.store');
Route::post('/parent/update{id}','App\Http\Controllers\Web\ParentController@update')->name('parent.update');
Route::get('/parent/show/{id}', 'App\Http\Controllers\Web\ParentController@show')->name('parent.show');
Route::get('/parent/edit/{id}','App\Http\Controllers\Web\ParentController@edit')->name('parent.edit');
Route::get('/parent/delete/{id}','App\Http\Controllers\Web\ParentController@destroy')->name('parent.destroy');

//Students Routes
Route::get('/students','App\Http\Controllers\Web\StudentController@index')->name('students');
Route::get('/students/create/{id}','App\Http\Controllers\Web\StudentController@create')->name('student.create');
Route::post('/student/store','App\Http\Controllers\Web\StudentController@store')->name('student.store');
Route::post('/student/update/{id}','App\Http\Controllers\Web\StudentController@update')->name('student.update');
Route::get('/student/show/{id}', 'App\Http\Controllers\Web\StudentController@show')->name('student.show');
Route::get('/student/edit/{id}','App\Http\Controllers\Web\StudentController@edit')->name('student.edit');
Route::get('/student/delete/{id}','App\Http\Controllers\Web\StudentController@destroy')->name('student.destroy');

//Teacher Routes
Route::get('/teachers','App\Http\Controllers\Web\TeacherController@index')->name('teacher.index');
Route::get('/teacher/create','App\Http\Controllers\Web\TeacherController@create')->name('teacher.create');
Route::post('/teacher/store','App\Http\Controllers\Web\TeacherController@store')->name('teacher.store');
Route::post('/teacher/update/{id}','App\Http\Controllers\Web\TeacherController@update')->name('teacher.update');
Route::get('/teacher/show/{id}', 'App\Http\Controllers\Web\TeacherController@show')->name('teacher.show');
Route::get('/teacher/edit/{id}','App\Http\Controllers\Web\TeacherController@edit')->name('teacher.edit');
Route::get('/teacher/delete/{id}','App\Http\Controllers\Web\TeacherController@destroy')->name('teacher.destroy');

//attendances Routes
Route::get('/attendances','App\Http\Controllers\Web\AbsenceController@index')->name('attendance');
Route::get('/attendance/create','App\Http\Controllers\Web\AbsenceController@create')->name('attendance.create');
Route::post('/attendance/store','App\Http\Controllers\Web\AbsenceController@store')->name('attendance.store');
Route::post('/attendance/update{id}','App\Http\Controllers\Web\AbsenceController@update')->name('attendance.update');
Route::get('/attendance/show/{id}', 'App\Http\Controllers\Web\AbsenceController@show')->name('attendance.show');
Route::get('/attendance/edit/{id}','App\Http\Controllers\Web\AbsenceController@edit')->name('attendance.edit');
Route::get('/attendance/delete/{id}','App\Http\Controllers\Web\AbsenceController@destroy')->name('attendance.destroy');


//exams Routes
Route::get('/exams','App\Http\Controllers\Web\ExamController@index')->name('exams');
Route::get('/exam/create','App\Http\Controllers\Web\ExamController@create')->name('exam.create');
Route::post('/exams/add','App\Http\Controllers\Web\ExamController@addmarks')->name('exams.add');
Route::post('/exam/store','App\Http\Controllers\Web\ExamController@store')->name('exam.store');
Route::post('/exam/update{id}','App\Http\Controllers\Web\ExamController@update')->name('exam.update');
Route::get('/exam/show', 'App\Http\Controllers\Web\ExamController@show')->name('exam.show');
Route::post('/exams/show', 'App\Http\Controllers\Web\ExamController@showforstudent')->name('exams.showmarksforstudent');
Route::get('/exam/show/marks', 'App\Http\Controllers\Web\ExamStudentController@show')->name('exam.show-marks');
Route::post('/exam/show/student/marks', 'App\Http\Controllers\Web\ExamStudentController@showmarks')->name('exam.show-marks-for-student');
Route::get('/exam/edit/{id}','App\Http\Controllers\Web\ExamController@edit')->name('exam.edit');
Route::get('/exam/delete/{id}','App\Http\Controllers\Web\ExamController@destroy')->name('exam.destroy');

//grades Routes
Route::get('/grade/create','App\Http\Controllers\Web\GradeController@create')->name('grade.create');
Route::post('/grade/add','App\Http\Controllers\Web\GradeController@store')->name('grade.store');

//finalfees Routes
Route::get('/finalfees','App\Http\Controllers\Web\FinancialFeesController@index')->name('finalfees');
Route::get('/finalfee/create','App\Http\Controllers\Web\FinancialFeesController@create')->name('finalfee.create');
Route::post('/finalfee/store','App\Http\Controllers\Web\FinancialFeesController@store')->name('finalfee.store');
Route::post('/finalfee/update{id}','App\Http\Controllers\Web\FinancialFeesController@update')->name('finalfee.update');
Route::get('/finalfee/show/{id}', 'App\Http\Controllers\Web\FinancialFeesController@show')->name('finalfee.show');
Route::get('/finalfee/edit/{id}','App\Http\Controllers\Web\FinancialFeesController@edit')->name('finalfee.edit');
Route::get('/finalfee/delete/{id}','App\Http\Controllers\Web\FinancialFeesController@destroy')->name('finalfee.destroy');

//payment Routes
Route::get('/payments','App\Http\Controllers\Web\PaymentController@index')->name('payments');
Route::get('/payment/create/{id}','App\Http\Controllers\Web\PaymentController@create')->name('payment.create');
Route::post('/payment/store/{id}','App\Http\Controllers\Web\PaymentController@store')->name('payment.store');
Route::post('/payment/update{id}','App\Http\Controllers\Web\PaymentController@update')->name('payment.update');
Route::get('/payment/show/{id}', 'App\Http\Controllers\Web\PaymentController@show')->name('payment.show');
Route::get('/payment/edit/{id}','App\Http\Controllers\Web\PaymentController@edit')->name('payment.edit');
Route::get('/payment/delete/{id}','App\Http\Controllers\Web\PaymentController@destroy')->name('payment.destroy');

//search Routes
Route::get('/parent/search','App\Http\Controllers\SearchController@search_p')->name('parent.search');
Route::get('/student/search','App\Http\Controllers\SearchController@search_s')->name('student.search');
Route::get('/teacher/search','App\Http\Controllers\SearchController@search_t')->name('teacher.search');

//grade Routes
Route::get('/grades','App\Http\Controllers\Web\PaymentController@index')->name('grade');
Route::get('/grade/create','App\Http\Controllers\Web\GradeController@create')->name('grade.create');
Route::post('/grade/store','App\Http\Controllers\Web\GradeController@store')->name('grade.store');
Route::post('/grade/update{id}','App\Http\Controllers\Web\GradeController@update')->name('grade.update');
Route::get('/grade/view', 'App\Http\Controllers\Web\GradeController@view')->name('grade.view');
Route::get('/grade/show/{id}', 'App\Http\Controllers\Web\GradeController@show')->name('grade.show');
Route::get('/grade/edit/{id}','App\Http\Controllers\Web\GradeController@edit')->name('grade.edit');
Route::get('/grade/delete/{id}','App\Http\Controllers\Web\GradeController@destroy')->name('grade.destroy');
