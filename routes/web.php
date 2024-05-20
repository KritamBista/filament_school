<?php

use App\Http\Controllers\frontend\FrontendController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/',[FrontendController::class,'home'])->name('home');
Route::get('/about/{slug}',[FrontendController::class,'about'])->name('about');
Route::get('/academic/{slug}',[FrontendController::class,'academic'])->name('academic');
Route::get('/notice',[FrontendController::class,'notice'])->name('notice');
Route::get('/gallery',[FrontendController::class,'gallery'])->name('gallery');
Route::get('/contact',[FrontendController::class,'contact'])->name('contact');
// Route::post('/message',[FrontendController::class,'message'])->name('contact');
// Route::post('/message',[FrontendController::class,'message'])->name('meaasge');
Route::post('/message',[FrontendController::class,'message'])->name('message');
Route::get('/news',[FrontendController::class,'news'])->name('news');
Route::get('news/{id}',[FrontendController::class,'newsmany'])->name('newsmany');





