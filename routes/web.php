<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\VideoController;
use App\Http\Controllers\FotoController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\MotivationController;
use App\Http\Controllers\InfografisController;
use App\Http\Controllers\PrespektifController;

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
    return view('prespektif.menu-upload');
});

Route::name('siska.')->prefix('siska')->group(function () {

    Route::get('/prespektif', [PrespektifController::class, 'index'])->name('prespektif');

});

Auth::routes();

Route::name('siska.')->prefix('siska')->middleware(['auth'])->group(function () {

    Route::get('/menu', [PrespektifController::class, 'menu'])->name('menu');

    Route::get('/create/foto', [FotoController::class, 'index'])->name('create.foto');
    Route::post('/create/foto/store', [FotoController::class, 'store'])->name('store.foto');


    Route::get('/create/video', [VideoController::class, 'index'])->name('create.video');
    Route::post('/create/video/store', [VideoController::class, 'store'])->name('store.video');

    Route::get('/menu/create/news', [NewsController::class, 'index'])->name('create.news');
    Route::post('/menu/store/news', [NewsController::class, 'store'])->name('store.news');

    Route::get('/menu/create/infografis', [InfografisController::class, 'index'])->name('create.infografis');
    Route::post('/menu/create/infografis/store', [InfografisController::class, 'store'])->name('store.infografis');

    Route::get('/menu/create/motivation', [MotivationController::class, 'index'])->name('create.motivation');
    Route::post('/menu/store/motivation', [MotivationController::class, 'store'])->name('store.motivation');


    Route::get('/exit', [HomeController::class, 'logout'])->name('logout');

});