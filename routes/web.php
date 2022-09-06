<?php

use App\Http\Controllers\AcademicYearController;
use App\Http\Controllers\AssignmentController;
use App\Http\Controllers\CollageController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\DormitoryController;
use App\Http\Controllers\GroupController;
use App\Http\Controllers\SectionController;
use App\Models\Course;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AdmissionController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\RegisterController;
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
    return view('admin.layout.admin');
});

Route::resource('login', LoginController::class);

Route::resource('academic-year', AcademicYearController::class);
Route::resource('Admin', AdmissionController::class);
Route::resource('collage', CollageController::class);
Route::resource('admission', AdmissionController::class);
Route::resource('student', StudentController::class);
Route::resource('profile', ProfileController::class);
Route::resource('asses', AssesmentController::class);
Route::resource('teacher', TeacherController::class);
Route::resource('grade', GradeController::class);
Route::resource('department', DepartmentController::class);
Route::resource('dormitory', DormitoryController::class);
Route::resource('section', SectionController::class);
Route::resource('register', RegisterController::class);

Route::resource('course', CourseController::class);
Route::resource('assignment', AssignmentController::class);
Route::get('assignment/{id}/group', [AssignmentController::class, 'group'])->name('assignment.group');
Route::get('assignment/{id}/upload', [AssignmentController::class, 'upload'])->name('assignment.upload');
Route::resource('result', ResultController::class);
Route::resource('group', GroupController::class);
//search
Route::get('/searchAS','AssignmentController@search');
Route::get('/searchA','AcademicYearController@search');
Route::get('/searchTA','AssesmentController@create');
Route::get('/searchGR','GradeController@search');
Route::get('/searchR','ResultController@search');

//
//;
//
//
//
//Route::get('/search','DepartmentController@search');


//acadamic_year route

Route::get('academic_year/edit/{id}','AcademicYearController@edit');
Route::post('academic_year/save','AcademicYearController@save');
Route::post('academic_year/update/{id}','AcademicYearController@update');
Route::delete('academic_year/destroy{id}','AcademicYearController@destroy');
//collage
Route::get('collage/edit/{id}','CollageController@edit');
Route::post('collage/update/{id}','CollageController@update');
Route::delete('collage/destroy{id}','CollageController@destroy');
Route::get('/searchC','CollageController@search');
//course
Route::get('course/edit/{id}','CourseController@edit');
Route::post('course/update/{id}','CourseController@update');
Route::delete('course/destroy{id}','CourseController@destroy');
Route::get('/searchCU','CourseController@search');
// departement
Route::get('department/edit/{id}','DepartmentController@edit');
Route::post('department/update/{id}','DepartmentController@update');
Route::delete('department/destroy{id}','DepartmentController@destroy');
Route::get('/searchD','DepartmentController@search');
//section
Route::get('section/edit/{id}','SectionController@edit');
Route::post('section/update/{id}','SectionController@update');
Route::delete('section/destroy{id}','SectionController@destroy');
Route::get('/searchS','SectionController@search');
//dorm
Route::get('dormitory/edit/{id}','DormitoryController@edit');
Route::post('dormitory/update/{id}','DormitoryController@update');
Route::delete('dormitory/destroy{id}','DormitoryController@destroy');
Route::get('/searchDO','DormitoryController@search');
//
Route::get('/login','LoginController@index');
Route::post('/login','LoginController@login');
//Route::get('register','RegisterController@index');
Route::post('/register','RegisterController@register');
Route::post('store',[AdmissionController::class,'store']);
Route::get('add',function (){
    return view('admin.layout.Admision');
});
Route::get('register',function (){
    return view('register');
});
Route::get('home','LoginController@index');


//teacher
Route::post('storeT',[TeacherController::class,'store']);
Route::get('asses/edit/{id}','AssesmentController@edit');
Route::post('asses/update/{id}','AssesmentController@update');
Route::delete('asses/destroy{id}','AssesmentController@destroy');
//grade
Route::get('grade/edit/{id}','GradeController@edit');
Route::post('grade/update/{id}','GradeController@update');
Route::delete('grade/destroy{id}','GradeController@destroy');
//
//Route::post('storeT',[TeacherController::class,'store']);
Route::get('assignment/edit/{id}','AssignmentController@edit');
Route::post('assignment/update/{id}','AssignmentController@update');
Route::delete('assignment/destroy{id}','AssignmentController@destroy');




