<?php

use Illuminate\Support\Facades\Route;
use App\Models\Article;
use App\Http\Controllers\ArticleController;

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
    // Take the 3 newest posts
    $latestArticles = Article::orderBy('published_at', 'desc')->take(3)->get();

    return view('welcome', compact('latestArticles'));
})->name('home');

Route::get('/ships', function() {
    return view('ships.index', [
        'ships' => \App\Models\Starship::all()
    ]);
})->name('ships.index');

// Resource routes of the base pages. For more info on Resource Routes
Route::resource('/articles', ArticleController::class);
Route::resource('/holodeck', \App\Http\Controllers\HolodeckController::class);
