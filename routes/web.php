<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserAuthController;
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

/**User Login and Authentications 
 * All user authentication related actions and views, actions could be Ajax or Form GET,PUT, POST and DELETE
*/
Route::get('/', [UserAuthController::class, 'dashboard']); 

Route::get('dashboard', [UserAuthController::class, 'dashboard'])->name('dashboard'); 
Route::get('login', [UserAuthController::class, 'index'])->name('login');
Route::post('user-login', [UserAuthController::class, 'userLogin'])->name('user.login'); 
Route::get('registration', [UserAuthController::class, 'registration'])->name('registration');
Route::post('user-registration', [UserAuthController::class, 'userRegistration'])->name('user.register'); 
Route::get('signout', [UserAuthController::class, 'signOut'])->name('signout');


/**User Table Routes 
 * All user related actions and views, actions could be Ajax or Form GET,PUT, POST and DELETE
*/
Route::get('user-list', [UserController::class, 'index'])->name('users.index');
Route::get('user-create', [UserController::class, 'create'])->name('user.create');
Route::get('user-edit/{id}', [UserController::class, 'edit'])->name('user.edit');

Route::post('user/create', [UserController::class, 'userCreate'])->name('user.action.create');
Route::post('/user/update/{id}', [UserController::class, 'userUpdate'])->name('user.action.update'); 

Route::delete('/user/delete/{id}', [UserController::class, 'userDestroy'])->name('user.action.destroy');

