<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Counter;
use App\Livewire\ShowPosts;
use App\Livewire\Header;
use App\Livewire\ProjectForm;

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
Route::view('/', 'welcome');

Route::get('/counter',Counter::class);
Route::get('/posts',ShowPosts::class);
Route::get('/header',Header::class);
Route::get('/project-form',ProjectForm::class);

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__.'/auth.php';
