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
Route::get('admin/upload-ea',[App\Http\Controllers\AdminController::class, 'UploadEA']);


Route::get('download-file/{file_name}',[App\Http\Controllers\AdminController::class, 'DownloadFile']);
Route::get('admin/accounts',[App\Http\Controllers\AdminController::class, 'Accounts']);
Route::post('upload-courses',[App\Http\Controllers\AdminController::class, 'storeCourses']);
Route::post('update-course',[App\Http\Controllers\AdminController::class, 'UpdateCourse']);
Route::post('admin/delete-course',[App\Http\Controllers\AdminController::class, 'DeleteCourse']);
Route::post('admin/delete-course-bulk',[App\Http\Controllers\AdminController::class, 'DeleteBulkCourse']);
Route::post('admin/delete-guide-bulk',[App\Http\Controllers\AdminController::class, 'DeleteUserGuideBulk']);

//   setfile routs
Route::get('admin/setfiles',[App\Http\Controllers\SetFileController::class, 'Setfiles']);
Route::post('upload-setfile',[App\Http\Controllers\SetFileController::class, 'storeSetFile']);
Route::post('update-setfile',[App\Http\Controllers\SetFileController::class, 'UpdateSetfile']);
Route::post('admin/delete-setfile',[App\Http\Controllers\SetFileController::class, 'DeleteSetfile']);
Route::post('admin/delete-setfile-bulk',[App\Http\Controllers\SetFileController::class, 'DeleteUserSetfileBulk']);


Route::get('admin/faqs',[App\Http\Controllers\FaqController::class, 'Faq']);
Route::post('add-faq-category',[App\Http\Controllers\FaqController::class, 'storeFaqCategory']);

//   Users routs
Route::get('user/user-guide',[App\Http\Controllers\UserController::class, 'UserGuide']);
Route::get('user/courses',[App\Http\Controllers\UserController::class, 'UserCourses']);
Route::get('user/setfiles',[App\Http\Controllers\UserController::class, 'UserSetfiles']);
Route::get('user/inputs',[App\Http\Controllers\UserController::class, 'UserInputs']);
Route::get('user/faqs',[App\Http\Controllers\UserController::class, 'UserFaq']);
Route::get('user/dashboard',[App\Http\Controllers\UserController::class, 'UserDashboard']);
Route::get('user/upload-history',[App\Http\Controllers\UserController::class, 'UserUploadHistory']);
Route::get('user/account-statistics',[App\Http\Controllers\UserController::class, 'UserAccountStatistics']);
Route::get('user/tools',[App\Http\Controllers\UserController::class, 'UserTool']);
Route::get('user/eadownload',[App\Http\Controllers\UserController::class, 'UserEADownlaod']);




