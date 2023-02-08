<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ContactusController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\RegusersController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\VehicleController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::get('/brand/list/{brandid}', [BrandController::class, 'list']);
Route::get('/brand/lists', [BrandController::class, 'lists']);
Route::post('/brand/save', [BrandController::class, 'store']);
Route::post('/brand/update', [BrandController::class, 'update']);
Route::get('/brand/remove/{brandid}', [BrandController::class, 'delete']);

Route::post('/vehicle/save', [VehicleController::class, 'store']);
Route::get('/vehicle/list', [VehicleController::class, 'lists']);
Route::get('/vehicle/list/{vehicleid}', [VehicleController::class, 'list']);
Route::get('/vehicle/remove/{brandid}', [VehicleController::class, 'delete']);

Route::get('/booking/lists', [BookingController::class, 'lists']);
Route::get('/booking/confirm/{bookingid}', [BookingController::class, 'confirm']);
Route::get('/booking/cancel/{bookingid}', [BookingController::class, 'cancel']);


Route::get('/testimonial/lists', [TestimonialController::class, 'lists']);
Route::get('/testimonial/active/{id}', [TestimonialController::class, 'statusupdateActive']);
Route::get('/testimonial/inactive/{id}', [TestimonialController::class, 'statusupdateInactive']);


Route::get('/contactus/lists', [ContactusController::class, 'lists']);
Route::get('/contactus/read/{id}', [ContactusController::class, 'contactStatusUpdate']);

Route::get('/regusers/lists', [RegusersController::class, 'lists']);


Route::get('/page/{id}', [PageController::class, 'getpage']);
Route::post('/page/save', [PageController::class, 'savePage']);



Route::get('/contact/info', [ContactController::class, 'info']);
Route::post('/contact/update', [ContactController::class, 'update']);

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });
