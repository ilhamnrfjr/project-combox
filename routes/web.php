<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MenuController;

Route::get('/', function () {
    return view('home');
});
Route::get('/menu', function () {
    return view('menu');
});
Route::get('/blog', function () {
    return view('blog');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/contact', function () {
    return view('contact');
});


//Auth
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'authenticated'])->name('authenticated');
Route::get('/logout', [AuthController::class, 'logout']);

//Dashboard
Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth')->name('dashboard');

//Menu
Route::resource('menus', MenuController::class); // Ini akan mengatur semua rute CRUD untuk menu

Route::get('/dashboard/best-seller', [MenuController::class, 'bestSeller'])->name('menus.DashboardBestSeller');

Route::get('/dashboard/main-course', [MenuController::class, 'mainCourse'])->name('menus.DashboardMainCourse');

Route::get('/dashboard/snack', [MenuController::class, 'Snack'])->name('menus.DashboardSnack');

Route::get('/dashboard/drink', [MenuController::class, 'Drink'])->name('menus.DashboardDrink');

// Tambahkan route untuk show best sellers
Route::get('/', [MenuController::class, 'show'])->name('home');

Route::get('/menu', [MenuController::class, 'menu'])->name('menu');

Route::get('/menu/main-course', [MenuController::class, 'menuMaincourse'])->name('menus.Maincourse');

Route::get('/menu/snack', [MenuController::class, 'menuSnack'])->name('menus.Snack');

Route::get('/menu/drink', [MenuController::class, 'menuDrink'])->name('menus.Drink');

// git baru