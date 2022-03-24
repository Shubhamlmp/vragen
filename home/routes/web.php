<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomAuthController;



// Route::get('/', function () {
//     return view('welcome');
// });


// Route::get('/home',function(){
//     return view('home');
// });
// Route::get('/login', function () {
//     return view('login');
// });

// Route::get('/register', function () {
//     return view('register');
// });

Route::get('/login',[CustomAuthController::class,'login'])->middleware('alreadyLoggedIn');
Route::get('/registration',[CustomAuthController::class,'registration'])->middleware('alreadyLoggedIn');
Route::post('/register-user',[CustomAuthController::class,'registerUser'])->name('register-user');
Route::post('/login-user',[CustomAuthController::class,'loginUser'])->name('login-user');
Route::get('/dashboard',[CustomAuthController::class,'dashboard'])->middleware('isLoginId');
Route::get('/logout', [CustomAuthController::class, 'logout']);


Route::get('question',[CustomAuthController::class,'question']);
