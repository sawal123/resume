<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\ProfileController;
use App\Livewire\Dashboard\AddProject;
use App\Livewire\Dashboard\Dashboard;
use App\Livewire\Pendidikan;
use App\Livewire\Projek;
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

// Route::get('/dashboard', [DashboardController::class, 'dashboard'])->middleware(['auth', 'verified'])->name('dashboard');
    
// Route::get('/add-project',AddProject::class)->middleware(['auth', 'verified'])->name('add-project');
Route::get('/add-project', [DashboardController::class, 'addProject'])->middleware(['auth', 'verified'])->name('addProject');

Route::middleware('auth')->group(function () {

    Route::get('/dashboard', Dashboard::class)->name('dashboard');
    Route::get('/dashboard/getProject', [Dashboard::class, 'getProjects'])->name('getProject');

    Route::get('/{uuid}/edit', [Projek::class, 'edit'])->name('edit-project');
    
    Route::get('/{id}/delete', [DashboardController::class, 'delete'])->name('delete-project');
    Route::get('/data', [DashboardController::class, 'data'])->name('data');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/school', Pendidikan::class)->name('school');
});

require __DIR__ . '/auth.php';
