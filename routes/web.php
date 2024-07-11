<?php

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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('admin/user-guide',[App\Http\Controllers\AdminController::class, 'Dashboard'])->middleware('is_admin');
Route::get('admin/courses',[App\Http\Controllers\AdminController::class, 'Courses']);
Route::post('upload-user-guide',[App\Http\Controllers\AdminController::class, 'storeUserGuide']);
Route::post('admin/delete-user-guide',[App\Http\Controllers\AdminController::class, 'DeleteUserGuide']);
Route::post('update-user-guide',[App\Http\Controllers\AdminController::class, 'UpdateUserGuide']);
Route::get('admin/inputs',[App\Http\Controllers\AdminController::class, 'Inputs']);
Route::get('admin/setfiles',[App\Http\Controllers\AdminController::class, 'Setfiles']);
Route::get('admin/faqs',[App\Http\Controllers\AdminController::class, 'Faq']);
Route::get('download-file/{file_name}',[App\Http\Controllers\AdminController::class, 'DownloadFile']);
Route::get('user/user-guide',[App\Http\Controllers\UserController::class, 'UserDashboard']);
Route::get('user/courses',[App\Http\Controllers\UserController::class, 'UserCourses']);
Route::get('user/setfiles',[App\Http\Controllers\UserController::class, 'UserSetfiles']);
Route::get('user/inputs',[App\Http\Controllers\UserController::class, 'UserInputs']);
Route::get('user/faqs',[App\Http\Controllers\UserController::class, 'UserFaq']);



Route::get('/user/dashboard', function () {
    return view('users.dashboard');
});