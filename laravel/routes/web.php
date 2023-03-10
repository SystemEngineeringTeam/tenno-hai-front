<?php

use App\Http\Controllers\DashbordController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\RankingController;
use App\Http\Controllers\ResultController;
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

Route::get('/', function () {
    return view('welcome');
});



Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', [DashbordController::class , 'index'])->name('dashbord.index');

    Route::get('/tutorial',function(){
        return view('tutorial');
    })->name('tutorial');

    Route::resource('task', TaskController::class);

    Route::get('/ranking', [RankingController::class, 'index'])->name('ranking.index');

    Route::get('task/{id}/result', [ResultController::class, 'show'])->name('result.show');
    Route::post('task/result', [ResultController::class, 'store'])->name('result.store');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
