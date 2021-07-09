<?php

use App\Http\Controllers\DefaultController;
use App\Http\Controllers\MusicController;
use App\Http\Controllers\TutorialsController;
use App\Http\Controllers\UserDetailsController;
use Illuminate\Routing\RouteRegistrar;
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

Route::get('/', [DefaultController::class, 'welcome']);
Route::get('/', [UserDetailsController::class, 'show']);
Route::get('/tutorials', [TutorialsController::class, 'addVideos']);
Route::get('/videos', [TutorialsController::class, 'showVideos']);
Route::get('/music', [MusicController::class, 'addMusic']);
Route::get('/musics', [MusicController::class, 'viewMusic']);
Route::get('/customer', [DefaultController::class, 'customers']);
Route::get('/admin', [DefaultController::class, 'admin']);
Route::post('/save', [UserDetailsController::class, 'save']);
Route::get('edit/{id}', [UserDetailsController::class, 'edit']);
Route::post('edit/save', [UserDetailsController::class, 'saveEdit']);
