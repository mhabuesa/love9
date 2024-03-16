<?php

use App\Http\Controllers\AudioController;
use App\Http\Controllers\CommonController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\QuizCOntroller;
use App\Http\Controllers\ResultController;
use App\Http\Controllers\UserStore;
use App\Http\Controllers\WorksController;
use Illuminate\Support\Facades\Route;


// Frontend View
Route::get('/', [HomeController::class, 'index'])->name('index');
Route::get('/works', [HomeController::class, 'works'])->name('works');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');

//Backend View
Route::get('/dashboard', [HomeController::class, 'dashboard'])->middleware('auth', 'verified')->name('dashboard');
Route::get('/date', [HomeController::class, 'date'])->middleware('auth', 'verified')->name('date');
Route::get('/user', [HomeController::class, 'user'])->middleware('auth', 'verified')->name('user');
Route::get('/works/category', [HomeController::class, 'category'])->middleware('auth', 'verified')->name('category');
Route::get('/works/post', [HomeController::class, 'post'])->middleware('auth', 'verified')->name('post');
Route::get('/audio', [HomeController::class, 'audio'])->middleware('auth', 'verified')->name('audio');


// Functional
Route::post('/user/store', [UserStore::class, 'user_store'])->middleware('auth', 'verified')->name('user.store');
Route::get('/user/delete/{id}', [UserStore::class, 'user_delete'])->name('user.delete');
Route::post('/date/update/{id}', [CommonController::class, 'date_update'])->name('date.update');
Route::post('/hijri/update', [CommonController::class, 'hijri_update'])->name('hijri.update');
Route::post('/volume/update', [CommonController::class, 'volume_update'])->name('volume.update');

//Works
Route::post('/category/store', [WorksController::class, 'category_store'])->name('category.store');

//Audio
Route::post('/audio/store', [AudioController::class, 'audio_store'])->name('audio.store');


//9Shareef Cover & Profile Pic
Route::get('/cover_photo', [CommonController::class, 'cover']);
Route::get('/cover/photo/down', [CommonController::class, 'cover_down'])->name('cover.down');

Route::get('/profile_photo', [CommonController::class, 'profile']);
Route::get('/profile/photo/down', [CommonController::class, 'profile_down'])->name('profile.down');

//Quiz
Route::get('/quiz9', [QuizCOntroller::class, 'quiz'])->name('quiz');
Route::post('/quiz9/store', [QuizCOntroller::class, 'quiz_store'])->name('quiz.store');
Route::get('/quiz/success/{name}', [QuizCOntroller::class, 'quiz_success'])->name('quiz.success');
Route::get('/quiz/success', [QuizCOntroller::class, 'quiz_back'])->name('quiz.back');
Route::get('/quiz/list', [QuizCOntroller::class, 'quiz_list'])->middleware('auth','verified')->name('quiz.list');
Route::get('/quiz/time', [QuizCOntroller::class, 'quiz_time'])->middleware('auth','verified')->name('quiz.time');
Route::post('/quiz/time/update', [QuizCOntroller::class, 'quiz_time_update'])->name('quiz.time.update');


Route::get('/result', [ResultController::class, 'result']);
Route::get('/certificate/{id}', [ResultController::class, 'certificate'])->name('certificate');








Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
