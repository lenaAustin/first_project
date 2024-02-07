<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyPlaceController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactsController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\FilmController;

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
    return 'Хеллё Егор!';
});

/*Route::get('/posts/update', [PostController::class, 'egor']);
//Route::get('/posts/delete', [PostController::class, 'delete']);
//Route::get('/posts/first_or_create', [PostController::class, 'firstOrCreate']);

//Route::get('my_page', 'MyPlaceController@'index');
//Route::controller(MyPlaceController::class)->group(function () {
 //  Route::get('/my_page', 'index');
//});

*/

Route::get('/main', [MainController::class, 'index'])->name('main.index');

Route::get('/contacts', [ContactsController::class, 'index'])->name('contact.index');
Route::get('/about', [AboutController::class, 'index'])->name('about.index');
Route::get('/posts', [PostController::class, 'index'])->name('post.index');
Route::get('/posts/create', [PostController::class, 'create'])->name('post.create');
Route::post('/posts', [PostController::class, 'store'])->name('post.store');
Route::get('/posts/{post}', [PostController::class, 'show'])->name('post.show');
Route::get('/posts/{post}/edit', [PostController::class, 'edit'])->name('post.edit');
Route::patch('/posts/{post}', [PostController::class, 'update'])->name('post.update');
Route::delete('/posts/{post}', [PostController::class, 'destroy'])->name('post.destroy');



Route::get('/films', [FilmController::class, 'index'])->name('film.index');
Route::get('/films/create', [FilmController::class, 'create'])->name('film.create');
Route::post('/films', [FilmController::class, 'store'])->name('film.store');
Route::get('/films/{film}', [FilmController::class, 'show'])->name('film.show');
Route::get('/films/{film}/edit', [FilmController::class, 'edit'])->name('film.edit');
Route::patch('/films/{film}', [FilmController::class, 'update'])->name('film.update');
Route::delete('/films/{film}', [FilmController::class, 'destroy'])->name('film.destroy');
