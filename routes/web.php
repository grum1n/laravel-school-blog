<?php

use App\Http\Controllers\CommentController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\IdeaController;
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

// Route::get('/', function () {
//     return view('dashboard');
// });

Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

// Route::group(['prefix' => 'ideas', 'as' => 'ideas.'], function(){
//     Route::get('/{idea}', [IdeaController::class, 'show'])->name('show');
    
//     Route::group(['middleware' => ['auth']], function() {
//         Route::post('', [IdeaController::class, 'store'])->name('store');
//         Route::get('/{idea}/edit', [IdeaController::class, 'edit'])->name('edit');
//         Route::put('/{idea}/update', [IdeaController::class, 'update'])->name('update');
//         Route::delete('/{idea}', [IdeaController::class, 'destroy'])->name('destroy');
//         Route::post('/ideas/{idea}/comments', [CommentController::class, 'store'])->name('comments.store');
//     });
// });

Route::resource('ideas', IdeaController::class)->except(['index', 'create', 'show'])->middleware('auth');
Route::resource('ideas', IdeaController::class)->only(['show']);
Route::resource('ideas.comments', CommentController::class)->only(['store'])->middleware(['auth']);




