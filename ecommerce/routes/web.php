<?php

use App\Http\Controllers\WebsiteController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ProductController;

Route::get('/', [WebsiteController::class, 'home'])->name('home');
Route::get('/about', [WebsiteController::class, 'about'])->name('about');
Route::get('/contact', [WebsiteController::class, 'contact'])->name('contact');
Route::get('/product', [WebsiteController::class, 'product'])->name('product');

// User Authentication Routes
Route::get('/register', [AuthController::class, 'showRegister'])->name('register.show');
Route::post('/register', [AuthController::class, 'register'])->name('register');

Route::get('/login', [AuthController::class, 'showLogin'])->name('login.show');
Route::post('/login', [AuthController::class, 'login'])->name('login');

Route::post('/logout', [AuthController::class, 'logout'])->name('user.logout');

// Admin Authentication Routes
Route::get('/adminlogin', [AuthController::class, 'showAdminLoginForm'])->name('adminlogin');
Route::post('/adminlogin', [AuthController::class, 'loginAdmin'])->name('admin.login');


// Admin-protected routes
Route::middleware(['auth:admin'])->prefix('admin')->group(function () {
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
    Route::post('/logout', [AuthController::class, 'logoutAdmin'])->name('admin.logout');

    Route::get('/category/list', [CategoryController::class, 'index'])->name('category.index'); // List category
    Route::post('/category', [CategoryController::class, 'store'])->name('category.store'); // Store new category
    Route::delete('/category/{product}', [CategoryController::class, 'destroy'])->name('category.destroy'); // Delete category


    Route::get('/product/list', [productController::class, 'index'])->name('product.index'); // List product
    Route::get('/product/create', [productController::class, 'create'])->name('product.create'); // Add new product form
    Route::post('/product', [productController::class, 'store'])->name('product.store'); // Store new product
    Route::get('/product/{product}/edit', [productController::class, 'edit'])->name('product.edit'); // Edit product form
    Route::put('/product/{product}', [productController::class, 'update'])->name('product.update'); // Update product
    Route::delete('/product/{product}', [productController::class, 'destroy'])->name('product.destroy'); // Delete product

    Route::get('/user/list', [AdminController::class, 'userdata'])->name('users.list');

});