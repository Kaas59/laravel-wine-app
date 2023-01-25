<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\WineController;
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
})->name('root');

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/dashboard', [WineController::class, 'home'])->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/new', [WineController::class, 'new'])->middleware(['auth', 'verified'])->name('new');
Route::get('/search', [WineController::class, 'search'])->middleware(['auth', 'verified'])->name('search');
Route::get('/mypage', [WineController::class, 'mypage'])->middleware(['auth', 'verified'])->name('mypage');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
