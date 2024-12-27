<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VisitorController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('user.dashboard');
})->middleware(['auth', 'verified','rolemanager:user'])->name('dashboard');

Route::get('/admin/dashboard', function () {
    return view('admin.admin');
})->middleware(['auth', 'verified','rolemanager:admin'])->name('admin');

Route::get('/vendor/dashboard', function () {
    return view('vendor');
})->middleware(['auth', 'verified','rolemanager:vendor'])->name('vendor');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});




require __DIR__.'/auth.php';

//Visitor routes

Route::get('admin/add-visitor',[VisitorController::class, 'add'])->middleware(['auth', 'verified','rolemanager:admin'])->name('admin.add-visitor'); 

Route::post('admin/visitor-store',[VisitorController::class, 'store'])->middleware(['auth', 'verified','rolemanager:admin'])->name('admin.visitor-store');

Route::get('admin/visitor',[VisitorController::class, 'show'])->middleware(['auth', 'verified','rolemanager:admin'])->name('admin.visitor');

Route::get('admin/visitor-out/{id}',[VisitorController::class, 'visitorout'])->middleware(['auth', 'verified','rolemanager:admin'])->name('admin.visitor-out');
