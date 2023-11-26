<?php

use App\Http\Controllers\PortfolioController;
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
//     return view('welcome');
// });

route::group(['prefix'=> 'portfolio'], function(){
    Route::get('/home', [PortfolioController::class, 'home'])->name('home');
    Route::get('/about', [PortfolioController::class, 'about'])->name('about.me');
    Route::get('/projects', [PortfolioController::class, 'projects'])->name('projects');
    Route::get('/contact', [PortfolioController::class, 'contact'])->name('contact');
});


