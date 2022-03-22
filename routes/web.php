<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\admin\CategoryController;
use App\Http\Controllers\admin\TaskController;
use App\Http\Controllers\admin\TeacherController;
use App\Http\Controllers\teacher\IndexController;
use App\Http\Controllers\teacher\TeacherCourseController;
use App\Http\Controllers\admin\CourseController;

use App\Http\Controllers\TeacherAuth\AuthenticatedTeacherSessionController;

Route::get('/', function () {
    return view('homePage');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

//for admin panel
Route::group(['prefix' => 'admin'], function () {
    //admin
    Route::get('/', [AdminController::class,'index']);
    Route::get('/create', [AdminController::class,'create']);
    Route::post('/', [AdminController::class,'store']);
    Route::get('/edit/{id}', [AdminController::class,'edit']);
    Route::patch('/edit/{id}', [AdminController::class,'update']);
    Route::delete('/delete/{id}', [AdminController::class,'destroy']);

//  category
    Route::get('/category', [CategoryController::class,'index']);
    Route::get('/addCategory', [CategoryController::class,'create']);
    Route::post('/category', [CategoryController::class,'store']);

//  task
    Route::get('/category/task/{id}', [TaskController::class,'show']);
    Route::get('/category/createTask', [TaskController::class,'create']);
    Route::post('/category/createTask', [TaskController::class,'store']);
    Route::get('/category/task/edit/{id}', [TaskController::class,'edit']);
    Route::patch('/category/task/edit/{id}', [TaskController::class,'update']);
    Route::delete('/category/task/delete/{id}', [TaskController::class,'destroy']);

//  teacher
    Route::get('/teacher', [TeacherController::class,'index']);
    Route::get('/teacher/createTeacher', [TeacherController::class,'create']);
    Route::get('/teacher/edit/{id}', [TeacherController::class,'edit']);
    Route::patch('/teacher/editTeacher/{id}', [TeacherController::class,'update']);
    Route::post('/teacher/createTeacher', [TeacherController::class,'store']);
    Route::delete('/teacher/delete/{id}', [TeacherController::class,'destroy']);

//  course
    Route::get('/course', [CourseController::class,'index']);
    Route::get('/course/detailsCourse/{id}', [CourseController::class,'show']);
    Route::get('/course/edit/{id}', [CourseController::class,'edit']);
    Route::patch('/course/edit/{id}', [CourseController::class,'update']);
    Route::get('/course/createCourse', [CourseController::class,'create']);
    Route::post('/course/createCourse', [CourseController::class,'store']);
    Route::delete('/course/delete/{id}', [CourseController::class,'destroy']);
});


//for teacher panel
//Route::group(['middleware' => ['auth:teacher']], function () {
Route::group(['middleware' => ['teacher']], function () {
//    Route::get('/teacher', [IndexController::class,'index']);
    Route::get('/teacher/edit/{id}', [IndexController::class,'edit']);
    Route::patch('/teacher/edit/{id}', [IndexController::class,'update']);
    Route::delete('/teacher/delete/{id}', [IndexController::class,'destroy']);

//  course
    Route::get('/teacher/course', [TeacherCourseController::class,'index']);
    Route::get('/teacher/course/detailsCourse/{id}', [TeacherCourseController::class,'show']);
    Route::get('/teacher/course/edit/{id}', [TeacherCourseController::class,'edit']);
    Route::patch('/teacher/course/edit/{id}', [TeacherCourseController::class,'update']);
    Route::get('/teacher/course/createCourse', [TeacherCourseController::class,'create']);
    Route::post('/teacher/course/createCourse', [TeacherCourseController::class,'store']);
    Route::delete('/teacher/course/delete/{id}', [TeacherCourseController::class,'destroy']);

});


Route::middleware('auth:teacher')->group(function () {

    Route::get('/teacher', [IndexController::class,'index']);
    Route::post('teacher/logout', [AuthenticatedTeacherSessionController::class, 'destroy']);
});
require __DIR__.'/auth.php';
