<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UsersController;
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
    return view('users.login');
})->name('login');

Route::post('/savelogin', [UsersController::class,'userlogin'])->name('savelogin');

Route::get('/text', function () {
    return view('welcome');
}); // Blank layout

Route::middleware(['auth'])->group(function(){

    Route::get('dashboard', [DashboardController::class,'index'])->name('dashboard'); //

    /* Masters */
    Route::prefix('masters')->group(function(){

        /* Roles Routes */
        Route::resource('roles', RoleController::class);
    });
    /* End Masters */

});

/* Logout */
Route::get('logout',[UsersController::class,'logout'])->name('logout');
