<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CommentsController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\TagController;
use App\Models\Post;
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

Route::get('/', [PostController::class, 'index'])->name('posts');
Route::get('/posts/create', [PostController::class, 'create'])->name('posts.create')->middleware('auth');
Route::post('/posts/create', [PostController::class, 'store'])->middleware('auth');;
Route::get('/posts/{post}', [PostController::class, 'show'])->name('post')->middleware('auth');;

Route::post('/posts/{post}', [CommentsController::class, 'store'])->name('comments.store')->middleware('auth', 'age.requirement');;

Route::group(['middleware' => 'guest'], function (){
    Route::get('/register', [AuthController::class, 'getRegistrationForm'])->name('register');
    Route::post('/register', [AuthController::class, 'register']);
    Route::get('/login', [AuthController::class, 'getLoginForm'])->name('login');
    Route::post('/login', [AuthController::class, 'login']);
});

Route::post('/logout', [AuthController::class, 'logout'])->name('logout')->middleware('auth');

Route::get('/posts/tags', [TagController::class, 'index'])->name('posts.tags')->middleware('auth');;
Route::post('/tags', [TagController::class, 'store'])->middleware('auth');


