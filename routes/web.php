<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyAuthController;
use App\Http\Controllers\UserController;

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

// Route::get('/', function () {
//     return view('home');
// });

Route::get('/', [MyAuthController::class, 'dashboard']); 

Route::get('dashboard', [MyAuthController::class, 'dashboard'])->name('dashboard'); 
Route::get('login', [MyAuthController::class, 'index'])->name('login');
Route::post('my-login', [MyAuthController::class, 'myLogin'])->name('login.my'); 
Route::get('registration', [MyAuthController::class, 'registration'])->name('register-user');
Route::post('my-registration', [MyAuthController::class, 'myRegistration'])->name('register.my'); 
Route::get('signout', [MyAuthController::class, 'signOut'])->name('signout');


Route::get('users', [UserController::class, 'indexPaging'])->name('users');
