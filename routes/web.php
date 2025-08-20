<?php

use App\Http\Controllers\CarDetailCategoryController;
use App\Http\Controllers\CarDetailController;
use App\Http\Controllers\CarDetailRegistrationTypeController;
use App\Http\Controllers\CarDetailUsageController;
use App\Http\Controllers\CarMakeCarGurusWarrantyController;
use App\Http\Controllers\CarMakeManufacturersWarrantyController;
use App\Http\Controllers\CarMakeSteeringController;
use App\Http\Controllers\CarMakeSuspensionController;
use App\Http\Controllers\CarMakeBrakeController;
use App\Http\Controllers\CarMakeConsumptionController;
use App\Http\Controllers\CarMakeController;
use App\Http\Controllers\CarMakeDriveTrainController;
use App\Http\Controllers\CarMakeEngineTypeController;
use App\Http\Controllers\CarMakeExteriorColorController;
use App\Http\Controllers\CarMakeFuelTypeController;
use App\Http\Controllers\CarMakeInteriorColorController;
use App\Http\Controllers\CarMakeMadeYearController;
use App\Http\Controllers\CarMakeSeatController;
use App\Http\Controllers\CarMakeTransmissionController;
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
    // Car Make Feature Dropdown
    Route::get('/list-feature/search', [CarMakeController::class, 'getFeature'])->name('feature.search');
    Route::post('/add-feature', [CarMakeController::class, 'postFeature'])->name('feature.add');
    // Car Make Transmissions Dropdown
    Route::get('/list-transmission/search', [CarMakeTransmissionController::class, 'getTransmissions'])->name('transmissions.search');
    Route::post('/add-transmission', [CarMakeTransmissionController::class, 'postTransmissions'])->name('transmissions.add');
    // Car Make Fuel Type Dropdown
    Route::get('/list-fuel-type/search', [CarMakeFuelTypeController::class, 'getFuelTypes'])->name('fuelType.search');
    Route::post('/add-fuel-type', [CarMakeFuelTypeController::class, 'postFuelTypes'])->name('fuelType.add');
    // Car Make Drive Train Dropdown
    Route::get('/list-drive-train/search', [CarMakeDriveTrainController::class, 'getDriveTrains'])->name('driveTrains.search');
    Route::post('/add-drive-train', [CarMakeDriveTrainController::class, 'postDriveTrains'])->name('driveTrains.add');
    // Car Make Made Year Dropdown
    Route::get('/list-made-year/search', [CarMakeMadeYearController::class, 'getMadeYear'])->name('madeYear.search');
    Route::post('/add-made-year', [CarMakeMadeYearController::class, 'postMadeYear'])->name('madeYear.add');
    // Car Make Seat Dropdown
    Route::get('/list-seat/search', [CarMakeSeatController::class, 'getSeat'])->name('seat.search');
    Route::post('/add-seat', [CarMakeSeatController::class, 'postSeat'])->name('seat.add');
    // Car Make Exterior Color Dropdown
    Route::get('/list-exteriorColor/search', [CarMakeExteriorColorController::class, 'getExteriorColor'])->name('exteriorColor.search');
    Route::post('/add-exteriorColor', [CarMakeExteriorColorController::class, 'postExteriorColor'])->name('exteriorColor.add');
    // Car Make Interior Color Dropdown
    Route::get('/list-interiorColor/search', [CarMakeInteriorColorController::class, 'getInteriorColor'])->name('interiorColor.search');
    Route::post('/add-interiorColor', [CarMakeInteriorColorController::class, 'postInteriorColor'])->name('interiorColor.add');
    // Car Make Seat Dropdown
    Route::get('/list-consumption/search', [CarMakeConsumptionController::class, 'getConsumption'])->name('consumption.search');
    Route::post('/add-consumption', [CarMakeConsumptionController::class, 'postConsumption'])->name('consumption.add');
    // Car Make Engine type Dropdown
    Route::get('/list-engineType/search', [CarMakeEngineTypeController::class, 'getEngineType'])->name('engineType.search');
    Route::post('/add-engineType', [CarMakeEngineTypeController::class, 'postEngineType'])->name('engineType.add');
    // Car Make Brake Fornt Dropdown
    Route::get('/list-brake/search', [CarMakeBrakeController::class, 'getBrakes'])->name('brake.search');
    Route::post('/add-brake', [CarMakeBrakeController::class, 'postBrakes'])->name('brake.add');
    // Car Make Suspension Dropdown
    Route::get('/list-suspension/search', [CarMakeSuspensionController::class, 'getSuspension'])->name('suspension.search');
    Route::post('/add-suspension', [CarMakeSuspensionController::class, 'postSuspension'])->name('suspension.add');
    // Car Make Steering Dropdown
    Route::get('/list-steering/search', [CarMakeSteeringController::class, 'getSteering'])->name('steering.search');
    Route::post('/add-steering', [CarMakeSteeringController::class, 'postSteering'])->name('steering.add');
    // Car Make Mamufacturer Warranty Dropdown
    Route::get('/list-manufacturersWarranty/search', [CarMakeManufacturersWarrantyController::class, 'getManufacturersWarranty'])->name('manufacturersWarranty.search');
    Route::post('/add-manufacturersWarranty', [CarMakeManufacturersWarrantyController::class, 'postManufacturersWarranty'])->name('manufacturersWarranty.add');
    // Car Make Mamufacturer Warranty Dropdown
    Route::get('/list-cargurusWarranty/search', [CarMakeCarGurusWarrantyController::class, 'getCargurusWarranty'])->name('cargurusWarranty.search');
    Route::post('/add-cargurusWarranty', [CarMakeCarGurusWarrantyController::class, 'postCargurusWarranty'])->name('cargurusWarranty.add');
    // Car Detail Category Dropdown
    Route::get('/list-carcategory/search', [CarDetailCategoryController::class, 'getCarCategory'])->name('category.search');
    Route::post('/add-carcategory', [CarDetailCategoryController::class, 'postCarCategory'])->name('category.add');
    // Car Detail Category Dropdown
    Route::get('/list-registrationType/search', [CarDetailRegistrationTypeController::class, 'getRegistrationType'])->name('registrationType.search');
    Route::post('/add-registrationType', [CarDetailRegistrationTypeController::class, 'postRegistrationType'])->name('registrationType.add');
    // Car Detail Usage Dropdown
    Route::get('/list-Usage/search', [CarDetailUsageController::class, 'getUsage'])->name('usage.search');
    Route::post('/add-Usage', [CarDetailUsageController::class, 'postUsage'])->name('usage.add');

    Route::resource('car-details', CarDetailController::class);
    Route::get('/car-marketing/index', function () {
        return view('cars.marketing.index');
    });
});