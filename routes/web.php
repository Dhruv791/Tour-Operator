<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TourController;

Route::get('/', [TourController::class, 'home']);
Route::get('/packages', [TourController::class, 'packages']);
Route::get('/book', [TourController::class, 'book']);
Route::post('/book', [TourController::class, 'storeBooking']);
Route::get('/assign-guide', [TourController::class, 'assignGuide']);
Route::post('/assign-guide', [TourController::class, 'storeGuide']);
Route::get('/custom-tour', [TourController::class, 'customTour']);
Route::post('/custom-tour', [TourController::class, 'storeCustomTour']);
Route::get('/feedback', [TourController::class, 'feedback']);
Route::post('/feedback', [TourController::class, 'storeFeedback']);
Route::get('/admin-dashboard', [TourController::class, 'adminDashboard']);
Route::delete('/admin/delete-booking/{id}', [TourController::class, 'deleteBooking']);
Route::delete('/admin/delete-assignment/{id}', [TourController::class, 'deleteAssignment']);
Route::delete('/admin/delete-custom-tour/{id}', [TourController::class, 'deleteCustomTour']);

Route::delete('/admin/delete-feedback/{id}', [TourController::class, 'deleteFeedback']);
