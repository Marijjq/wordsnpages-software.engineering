<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\AdminController;
use App\Http\Controllers\Backend\ProfileController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\BookController;
use App\Http\Controllers\Backend\AuthorController;
use App\Http\Controllers\Backend\SliderController;
use App\Http\Controllers\Backend\ShippingRuleController;
use App\Http\Controllers\StatusController;



Route::get('dashboard', [AdminController::class, 'dashboard'])->name('dashbaord');

    // Admin profile update
    Route::get('profile', [ProfileController::class, 'index'])->name('profile');
    Route::post('profile/update', [ProfileController::class, 'updateProfile'])->name('profile.update');
    Route::post('profile/update/password', [ProfileController::class, 'updatePassword'])->name('password.update');

    // Book status
    Route::put('books/change-status', [StatusController::class, 'changeBookStatus'])->name('books.change-status');
    
    // Resource routes
    Route::resource('categories', CategoryController::class);
    Route::resource('books', BookController::class);
    Route::resource('authors', AuthorController::class);

    // Slider routes
    Route::resource('slider', SliderController::class);

    
    // Shipping Rule
    Route::put('shipping-rule/change-status', [StatusController::class, 'changeRuleStatus'])->name('shipping-rule.change-status');
    Route::resource('shipping-rule', ShippingRuleController::class);