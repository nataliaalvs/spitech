<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\PostController;

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
})->name('welcome');

Route::get('/dashboard', function () {
    return view('dashboard.dashboard');
})->name('dashboard');
// ->middleware(['auth'])->name('dashboard');

//p ver se ta bonitinho
Route::get('/profile', function () {
    return view('layouts.admin-template');
});

Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::get('/register', function () {
    return view('auth.register');
});

Route::resource('course', CourseController::class);

Route::resource('post', PostController::class);

// rota somente ver o template sem nada
Route::get('/layout-shop-template', function(){
    return view('layouts.shop-template');
});

// require __DIR__.'/auth.php';

