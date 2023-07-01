<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\PropertiesController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
| Changes made by Qusai 1/7/23
| 1. Added routes that requires a user to be signed in to auth middleware
| 2. Replaced properties CRUD routes with resource method
| 3. Named routes to better refrence them in code
*/

/*
| routes generated by resource method:
|    GET /properties - properties.index
|    GET /properties/create - properties.create
|    POST /properties - properties.store
|    GET /properties/{property} - properties.show
|    GET /properties/{property}/edit - properties.edit
|    PUT/PATCH /properties/{property} - properties.update
|    DELETE /properties/{property} - properties.destroy
*/


Route::middleware(['auth:sanctum'])->group(function () {
    Route::resource('properties', PropertiesController::class);
    Route::get('properties/favorites', [PropertiesController::class, 'favorites'])->name('properties.favorites');
    Route::post('properties/{property}/favorite', [PropertiesController::class, 'change_favorite_state'])->where('property', '[0-9]+')->name('properties.favorite');
    Route::post('/logout', [AuthController::class,'logout']);
});

Route::post('/register',[AuthController::class,'register']);
Route::post('/login',[AuthController::class,'login']);
Route::get('sendSMS', [AuthController::class , 'index']);