<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\userController;
use App\Http\Controllers\adminController;
use App\Http\Controllers\loginController;

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

Route::view('login', 'login')->name('login');
Route::view('/', 'layouts.masterpage');


Route::group(['prefix'=>'admin','as'=>'admin.','middleware'=>'auth'],function(){
    Route::get('/',[adminController::class ,'index'])->name('dashboard');
    Route::get('/places',[adminController::class,'list'])->name('places');
    Route::get('/create',[adminController::class,'create'])->name('create');
    Route::post('/create',[adminController::class,'store'])->name('store');
    Route::get('/edit/{id}',[adminController::class,'edit'])->name('edit');
    Route::put('/edit/{id}',[adminController::class,'update'])->name('update');
    Route::delete('/delete/{id}',[adminController::class,'destroy'])->name('delete');
    Route::get('/profile',[adminController::class,'profile'])->name('profile');
    Route::put('/upuser',[userController::class,'update'])->name('userUpdate');
    Route::get('/users',[userController::class,'list'])->name('users');
});

Route::group(['middleware'=>['guest']],function(){
    Route::view('login', 'login')->name('login');
    Route::post('login',[loginController::class,'login']);
    Route::post('/createuser',[userController::class,'store'])->name('storeuser');
    Route::get('logout',[loginController::class,'logout'])->name('logout')->withoutmiddleware('guest');
});

// Route::get('/places',[adminController::class,'list'])->name('places');
// Route::get('/create',[adminController::class,'create'])->name('create');
// Route::post('/create',[adminController::class,'store'])->name('store');
// Route::get('/edit/{id}',[adminController::class,'edit'])->name('edit');
// Route::put('/edit/{id}',[adminController::class,'update'])->name('update');
// Route::delete('/delete/{id}',[adminController::class,'destroy'])->name('delete');