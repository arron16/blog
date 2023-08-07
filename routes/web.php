<?php

use App\Http\Controllers\CommentController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';

Route::middleware(['auth', 'verified'])->group(function () {
    Route::resource('post', PostController::class);
    Route::resource('comment', CommentController::class);
});

Route::middleware(['guest'])->group(function () {
    Route::get('/sign-up', [UserController::class, 'signUp']);
    Route::post('/sign-up', [UserController::class, 'store']);

    Route::get('/sign-in', [UserController::class, 'signIn']);
    Route::post('/sign-in', [UserController::class, 'authenticate']);
});

Route::get('/sign-out', [UserController::class, 'signOut'])->middleware(['auth']);
