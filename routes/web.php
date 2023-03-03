<?php

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

Route::prefix('movies')
    ->name('movies.')
    ->group(function () {
    Route::get('/list', function () {
        return '<ul>
                <li><a href="' . \route('movies.show', ["title" => 'halloween', "year" => '1978', 'user_rating' => 7.8]) . '">Halloween</a></li>
                <li><a href="' . \route('movies.show', ["title" => 'jaw', "year" => '1975', 'user_rating' => 8.0]) . '">Jaw</a></li>
            </ul>';
    })->name('list');

    Route::get('/{title}/{year}', function ($title, $year) {
        return "Movie title: {$title}, Released in {$year}";
    })->name('show');
});

Route::get('/login', function (){
   return "Authentification required";
})->name('login');
