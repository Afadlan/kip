<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MentorController;
use App\Http\Controllers\UserController;

Route::middleware(['guest'])->group(function(){
    Route::get('/', [LoginController::class, 'index'])->name('login');
    Route::post('/', [LoginController::class, 'login'])->name('login.post');
});

Route::get('/admin', [AdminController::class, 'index']);
Route::get('/mentor', [MentorController::class, 'index']);
Route::get('/user', [UserController::class, 'index']);

Route::get('/dashboard-admin', function () {
    return view('admin.admin');
});
Route::get('/edit-exam', function () {
    return view('admin.exam');
});
Route::get('/data-admin', function () {
    return view('admin.user');
});
Route::get('/add-user', function () {
    return view('admin.add');
});
Route::get('/dashboard-mentor', function () {
    return view('mentor.mentor');
});
Route::get('/input-material', function () {
    return view('mentor.material');
});
Route::get('/edit-progress', function () {
    return view('mentor.progress');
});
Route::get('/edit-schedule', function () {
    return view('mentor.schedule');
});
Route::get('/edit-task', function () {
    return view('mentor.task');
});
Route::get('/profile-mentor', function () {
    return view('mentor.profile');
});
Route::get('/dashboard-student', function () {
    return view('user.student');
});
Route::get('/learning-student', function () {
    return view('user.learning');
});
Route::get('/report-student', function () {
    return view('user.report');
});
Route::get('/talk-mentor', function () {
    return view('user.talk');
});
Route::get('/exam-student', function () {
    return view('user.exam');
});
Route::get('/update-profile', function () {
    return view('user.update');
});

