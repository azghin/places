<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homeController;
use App\Http\Controllers\adminController;
use App\Http\Controllers\PlacesController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\newplaceController;
use App\Http\Controllers\uniplaceController;
use App\Http\Controllers\InformationController;
use App\Http\Controllers\updatePlaceController;

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


// users routes
Route::get('/', [homeController::class,'index']);
Route::get('/profile',[ProfileController::class,'myprofile']);
Route::get('/info',[InformationController::class,'info']);
Route::get('/uniplace/{id}',[uniplaceController::class,'show'])->name('uniplace.show');
// admin routes
Route::get('/admin',[adminController::class,'index']);
Route::get('/places',[PlacesController::class,'placeList']);
Route::delete('/places/{id}', [PlacesController::class,'deletePlace'])->name('deleteplace');
Route::get('/newplace',[newplaceController::class,'addForm']);
Route::post('/newplace',[newplaceController::class,'addNew']);
Route::get('/update/{id}',[updatePlaceController::class,'index'])->name('update.show');
Route::put('/update/{places}',[updatePlaceController::class,'updatePlace'])->name('update');


