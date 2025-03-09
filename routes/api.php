<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DistrictController;
use App\Http\Controllers\DivisionController;
use App\Http\Controllers\SettingsController;
use App\Http\Controllers\UnionController;
use App\Http\Controllers\UpazilaController;
use Illuminate\Support\Facades\Route;



Route::scopeBindings()->group(function () {

    Route::get('divisions', [DivisionController::class, 'getDivisions']);
    Route::get('division/{division}/districts', [DivisionController::class, 'view']);

    Route::get('districts', [DistrictController::class, 'index']);
    Route::get('district/{district}/upazilas', [DistrictController::class, 'view']);

    Route::get('upazilas', [UpazilaController::class, 'index']);

    Route::get('upazila/{upazila}/unions', [UpazilaController::class, 'view']);
});


// Route group for guest user only
Route::prefix('auth')->group(function (){
    Route::post('/register', [AuthController::class, 'register']);
    Route::post('/login', [AuthController::class, 'login']);
});

Route::scopeBindings()->group(function (){
    Route::middleware(['guest'])->group(function (){

        Route::get('user', [AuthController::class, 'user']);
        Route::post('logout', [AuthController::class, 'logout']);

        Route::prefix('divisions')->group(function (){
            Route::get('all', [DivisionController::class, 'index']);
            Route::post('store', [DivisionController::class, 'store']);
            Route::get('{division}/show', [DivisionController::class, 'show']);
            Route::put('{division}/update', [DivisionController::class, 'update']);
            Route::delete('{division}/delete', [DivisionController::class, 'destroy']);
        });

        Route::prefix('districts')->group(function (){
            Route::get('all', [DistrictController::class, 'index']);
            Route::post('store', [DistrictController::class, 'store']);
            Route::get('{division}/show', [DistrictController::class, 'show']);
            Route::put('{division}/update', [DistrictController::class, 'update']);
            Route::delete('{division}/delete', [DistrictController::class, 'destroy']);
        });

        Route::prefix('upazilas')->group(function (){
            Route::get('all', [UpazilaController::class, 'index']);
            Route::post('store', [UpazilaController::class, 'store']);
            Route::get('{division}/show', [UpazilaController::class, 'show']);
            Route::put('{division}/update', [UpazilaController::class, 'update']);
            Route::delete('{division}/delete', [UpazilaController::class, 'destroy']);
        });

        Route::prefix('unions')->group(function (){
            Route::get('all', [UnionController::class, 'index']);
            Route::post('store', [UnionController::class, 'store']);
            Route::get('{division}/show', [UnionController::class, 'show']);
            Route::put('{division}/update', [UnionController::class, 'update']);
            Route::delete('{division}/delete', [UnionController::class, 'destroy']);
        });

    });
});


Route::get('reboot', [SettingsController::class, 'reboot']);
Route::get('seed', [SettingsController::class, 'seed']);
