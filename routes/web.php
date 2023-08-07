<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\MastersController;
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
        /* Users Masters */
        Route::prefix('users')->group(function(){
            Route::get('/', [MastersController::class,'userMaster'])->name('users.index');
            Route::post('/create', [MastersController::class,'createUserMaster'])->name('users.create');
            Route::get('/list', [MastersController::class,'userList'])->name('users.list');
            Route::get('/edit/{id}', [MastersController::class,'userEdit'])->name('users.edit');
            Route::post('/update', [MastersController::class,'userUpdate'])->name('users.update');
            Route::post('/destroy/{id}', [MastersController::class,'userDelete'])->name('users.destroy');
        });
        /* Roles Masters */
        /* Roles Routes */
        Route::resource('roles', RoleController::class);
    });
    /* End Masters */

});

/* Logout */
Route::get('logout',[UsersController::class,'logout'])->name('logout');
