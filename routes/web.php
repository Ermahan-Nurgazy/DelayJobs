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

Route::get('/', 'App\Http\Controllers\MainController@home')->name('home');

Route::get('/about', 'App\Http\Controllers\MainController@about')->name('about');

Route::get('/profile', 'App\Http\Controllers\MainController@profile')->name('profile');

Route::get('/detailsProfile/{id}', 'App\Http\Controllers\UserController@detailsProfile')->name('detailsProfile');

Route::get('/detailsJob/{id}', 'App\Http\Controllers\JobsController@details')->name('details-job');

Route::get('/detailsWorker/{id}', 'App\Http\Controllers\WorkersController@details')->name('details-worker');

// Route::get('/register', 'App\Http\Controllers\UserController@register')->name('register');

// Route::post('/register/auth', 'App\Http\Controllers\UserController@submit')->name('register-form');

// Route::post('/login', 'App\Http\Controllers\UserController@login')->name('login');

Route::get('/jobs', 'App\Http\Controllers\JobsController@jobs')->name('find-job');

Route::get('/jobs/add', 'App\Http\Controllers\JobsController@addJob')->name('add-job');

Route::post('/jobs/add/submit', 'App\Http\Controllers\JobsController@submit')->name('add-job-submit');

Route::post('/jobs/find', 'App\Http\Controllers\JobsController@findJobsByName')->name('find-job-by-name');

Route::get('/workers', 'App\Http\Controllers\WorkersController@workers')->name('find-worker');

Route::get('/workers/add', 'App\Http\Controllers\WorkersController@addWorker')->name('add-worker');

Route::post('/workers/add/submit', 'App\Http\Controllers\WorkersController@submit')->name('add-worker-submit');

Route::post('/workers/find', 'App\Http\Controllers\WorkersController@findWorkersByName')->name('find-worker-by-name');

Auth::routes(['verfiy' => true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
