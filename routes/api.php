<?php

use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');

Route::apiResource('users', UserController::class);
Route::apiResource('patients', PatientController::class);
Route::get('roles',[RoleController::class, 'index']);

Route::get('doctors/search', [DoctorController::class, 'search']);
Route::apiResource('doctors', DoctorController::class);
Route::apiResource('departments', DepartmentController::class);
