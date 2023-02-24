<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\WineController;
use App\Models\Wine;
use Illuminate\Auth\Events\Verified;
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

// Route::get('/', function () {
//     return view('welcome');
// })->name('root');

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::redirect('/', '/dashboard');
Route::middleware(['auth', 'verified'])->group(function(){
  Route::get('/dashboard', [WineController::class, 'home'])->name('dashboard');
  Route::get('/new', [WineController::class, 'new'])->name('new');
  Route::get('/search', [WineController::class, 'search'])->name('search');
  Route::get('/mypage', [WineController::class, 'myPage'])->name('myPage');
  Route::get('/info/{id}', [WineController::class, 'info'])->name('info');
});
Route::middleware(['auth', 'verified'])->group(function(){
  Route::get('/list/{id}', [WineController::class, 'editList'])->name('list.edit');
  Route::post('/list', [WineController::class, 'createList'])->name('list.create');
  Route::patch('/list', [WineController::class, 'addList'])->name('list.add');
  Route::delete('/list', [WineController::class, 'destroyList'])->name('list.destroy');
});


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
