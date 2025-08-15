<?php

use App\Http\Controllers\CarMakeController;
use App\Http\Controllers\MakeController;
use App\Http\Controllers\ModelController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VariantController;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Auth::routes(['register' => false]);

Route::get('/dashboard', [HomeController::class, 'index'])->name('dashboard');

Route::group(['middleware' => ['auth']], function () {
    Route::resource('roles', RoleController::class);
    Route::resource('users', UserController::class);
    Route::resource('makes', MakeController::class);
    Route::resource('models', ModelController::class);
    Route::resource('variants', VariantController::class);
    Route::resource('carmakes', CarMakeController::class);
    // Make Dropdown
    Route::get('/list-brand/search', [MakeController::class, 'getBrands'])->name('brands.search');
    Route::post('/add-brand', [MakeController::class, 'postBrands'])->name('brands.add');
    // Model Dropdown
    Route::get('/lis-model/search', [ModelController::class, 'getModels'])->name('models.search');
    Route::post('/add-model', [ModelController::class, 'postModels'])->name('models.add');
    // Variant Dropdown
    Route::get('/list-variant/search', [VariantController::class, 'getVariants'])->name('variants.search');
    Route::post('/add-variant', [VariantController::class, 'postVariant'])->name('variants.add');
    // Feature Dropdown
    Route::get('/list-feature/search', [CarMakeController::class, 'getFeature'])->name('feature.search');
    Route::post('/add-feature', [CarMakeController::class, 'postFeature'])->name('feature.add');

});