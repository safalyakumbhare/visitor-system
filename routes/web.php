<?php

use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VisitorController;

Route::get('/', function () {
    return view('welcome');
});

Route::get(
    '/dashboard',
    [VisitorController::class, 'count'],
)->middleware(['auth', 'verified', 'rolemanager:user'])->name('dashboard');


Route::get('admin/dashboard',[VisitorController::class,'admin_count'])->middleware(['auth','verified', 'rolemanager:admin'])->name('admin');

Route::get('/vendor/dashboard', function () {
    return view('vendor');
})->middleware(['auth', 'verified', 'rolemanager:vendor'])->name('vendor');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});




require __DIR__ . '/auth.php';


//admin routes

Route::get('user-search', [RegisteredUserController::class, 'user_search'])->middleware(['auth', 'verified', 'rolemanager:admin'])->name('user-search');    

Route::get('admin/visitor-in',[VisitorController::class,'visitor_in'])->middleware(['auth', 'verified', 'rolemanager:admin'])->name('admin.visitor-in');

Route::get('admin/visitor-today',[VisitorController::class,'visitor_today'])->middleware(['auth', 'verified', 'rolemanager:admin'])->name('admin.visitor-today');

Route::get('admin/visitor-user-search',[VisitorController::class,'visitor_user_search'])->middleware(['auth', 'verified', 'rolemanager:admin'])->name('admin-visitor-user-search');


//Visitor routes

Route::get('admin/add-visitor/{id?}', [VisitorController::class, 'add'])->middleware(['auth', 'verified', 'rolemanager:admin'])->name('admin.add-visitor');


Route::post('admin/visitor-store', [VisitorController::class, 'store'])->middleware(['auth', 'verified', 'rolemanager:admin'])->name('admin.visitor-store');

Route::get('admin/visitor', [VisitorController::class, 'show'])->middleware(['auth', 'verified', 'rolemanager:admin'])->name('admin.visitor');

Route::get('admin/visitor-out/{id}', [VisitorController::class, 'visitorout'])->middleware(['auth', 'verified', 'rolemanager:admin'])->name('admin.visitor-out');

Route::get('admin/user-visitor/{id}', [VisitorController::class, 'user_visitor'])->middleware(['auth', 'verified', 'rolemanager:admin'])->name('admin.user-visitor');

// User route

Route::get('user/guest', [VisitorController::class, 'guest'])->middleware(['auth', 'verified', 'rolemanager:user'])->name('user.guest');


Route::get('user/todays_guest',[VisitorController::class,'guest_today'])->middleware(['auth', 'verified', 'rolemanager:user'])->name('user.todays_guest');

