<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;

// Show login form
Route::get('/', [LoginController::class, 'showLoginForm'])->name('login');

// Handle login request
Route::post('/login', [LoginController::class, 'login']);

// Logout
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// Dashboard
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware('auth');

Route::get('/report', function () {
    // Add your report logic here
    return view('report');
});

Route::get('/user-management', function () {
    // Add your user management logic here
    return view('user-management');
});
