<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EstimateController;
use App\Livewire\Counter;
use App\Livewire\ShowPosts;
use App\Livewire\Header;
use App\Livewire\ProjectForm;
use App\Livewire\TableProjects;
use App\Livewire\Sheet;
use App\Livewire\Feedback;
use App\Livewire\Ideas;

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
Route::view('/','welcome')->name('home');
Route::get('/estimate/{id}',[EstimateController::class,'getProject'])->name('get.estimate');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

Route::view('projects', 'projects')
    ->middleware(['auth'])
    ->name('project');

Route::view('projects/{id}','projects/id')
    ->middleware(['auth'])
    ->name('get.project_id');

Route::view('new-project', 'new-project')
    ->middleware(['auth'])
    ->name('new.project');

/* Composant */ 
Route::get('/counter',Counter::class);
Route::get('/posts',ShowPosts::class);
Route::get('/header',Header::class);
Route::get('/project-form',ProjectForm::class);
Route::get('/table-projects',TableProjects::class);
Route::get('/sheet/{id}',Sheet::class);
Route::get('/feedback',Feedback::class);
Route::get('/ideas',Ideas::class);

require __DIR__.'/auth.php';
