<?php

use App\Http\Controllers\Admin\ProjectController;
use App\Http\Controllers\Admin\TaskController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('user.index');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/project/{id}', [App\Http\Controllers\Admin\ProjectController::class, 'project_student_assign']);

Route::get('about', [App\Http\Controllers\User\UserDashboardController::class, 'about']);
Route::get('contact', [App\Http\Controllers\User\UserDashboardController::class, 'contact']);
Route::post('contact/store', [App\Http\Controllers\User\UserDashboardController::class, 'contact_store']);
Route::group(["as"=>'user.', "prefix"=>'user',  "middleware"=>['auth','user']],function(){
    Route::get('dashboard', [App\Http\Controllers\User\UserDashboardController::class, 'index'])->name('dashboard');
    Route::get('logout', [App\Http\Controllers\User\UserDashboardController::class, 'logout']);
    Route::get('task/detail/{id}', [App\Http\Controllers\User\TaskController::class, 'show']);
    Route::get('doc/view/{id}', [App\Http\Controllers\User\TaskController::class, 'pdfview']);
    
    Route::get('task/status/{id}', [App\Http\Controllers\User\TaskController::class, 'index']);
    Route::get('comment/store/{id}', [App\Http\Controllers\User\CommentController::class, 'store']);
});

Route::group(["as"=>'admin.', "prefix"=>'admin', "middleware"=>['auth','admin']],function(){
    Route::get('dashboard', [App\Http\Controllers\Admin\AdminDashboardController::class, 'index'])->name('dashboard');
    //project
    Route::resource('project', ProjectController::class);
    Route::get('/student/search/{id}', [App\Http\Controllers\Admin\ProjectController::class, 'student_search']);
    Route::get('/project/{id}', [App\Http\Controllers\Admin\ProjectController::class, 'project_student_assign']);
    //task
    Route::resource('task', TaskController::class);
    Route::get('doc/view/{id}', [App\Http\Controllers\Admin\TaskController::class, 'docview']);
    Route::get('task/status/{id}', [App\Http\Controllers\Admin\TaskController::class, 'status']);
    //contact list
    Route::get('/contact/list', [App\Http\Controllers\Admin\AdminDashboardController::class, 'contact_list']);


    Route::get('/contact/status/{id}', [App\Http\Controllers\Admin\AdminDashboardController::class, 'status']);
    //comment
    Route::get('comment/store/{id}', [App\Http\Controllers\Admin\CommentController::class, 'store']);
    //search
    Route::post('search', [App\Http\Controllers\Admin\SearchController::class, 'search']);
    Route::get('student/{id}', [App\Http\Controllers\Admin\SearchController::class, 'student']);
    Route::get('projectinfo/{id}', [App\Http\Controllers\Admin\SearchController::class, 'project']);
    Route::get('project/details/{id}', [App\Http\Controllers\Admin\ProjectController::class, 'details']);
    
    //logout
    Route::get('logout', [App\Http\Controllers\Admin\AdminDashboardController::class, 'logout']);

});
