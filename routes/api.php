<?php

use App\Http\Controllers\Api\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\Api\LicenceController;

// Get User info
Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

// Login to open session and get the XSRF token
Route::post('/login', [AuthController::class, 'login']);

// API route for licences
// Get all the licences info
Route::get('/licences', [LicenceController::class,'listLicence'])->middleware('auth:sanctum');

Route::middleware(['auth:sanctum'])->group(function() { 
    Route::group(['prefix' => 'licence'], function() {
    
        //Get one licence info
        Route::get('/{id}', [LicenceController::class,'infoLicence']);

        //Add a new licence
        Route::post('/add', [LicenceController::class,'addLicence']);

        //Update a licence
        Route::patch('/{id}/update', [LicenceController::class,'updateLicence']);

        //Delete a licence
        Route::delete('{id}/delete', [LicenceController::class,'deleteLicence']);
    });
});

// API route for licenciés



