<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\ProfileController;
use App\Livewire\Dashboard\AddProject;
use Illuminate\Support\Facades\Route;
use Livewire\Livewire;
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

Route::get('/', [Controller::class, 'index'])->name('index');
// Route::get('/', [Controller::class, 'index'])->name('index');

Route::get('/dashboard', [DashboardController::class, 'dashboard'])->middleware(['auth', 'verified'])->name('dashboard');
// Route::get('/add-project',AddProject::class)->middleware(['auth', 'verified'])->name('add-project');
Route::get('/add-project', [DashboardController::class, 'addProject'])->middleware(['auth', 'verified'])->name('addProject');

Route::middleware('auth')->group(function () {
    Route::get('/{id}/edit', [DashboardController::class, 'edit'])->name('edit');
    Route::get('/data', [DashboardController::class, 'data'])->name('data');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
