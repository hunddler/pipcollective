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
Route::get('admin/user-guide',[App\Http\Controllers\AdminController::class, 'Dashboard']);
Route::get('admin/courses',[App\Http\Controllers\AdminController::class, 'Courses']);
Route::post('upload-user-guide',[App\Http\Controllers\AdminController::class, 'storeUserGuide']);
Route::post('admin/delete-user-guide',[App\Http\Controllers\AdminController::class, 'DeleteUserGuide']);
Route::post('update-user-guide',[App\Http\Controllers\AdminController::class, 'UpdateUserGuide']);

