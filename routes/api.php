<?php

use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\LabTestController;
use App\Http\Controllers\LabTestOrderController;
use App\Http\Controllers\MedicineController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\PrescriptionController;
use App\Http\Controllers\PrescriptionMedicineController;
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


Route::apiResource('appointments', AppointmentController::class);
// age eta
Route::get('prescriptions/options', [PrescriptionController::class, 'options']);
Route::apiResource('prescriptions', PrescriptionController::class);

Route::apiResource('lab-test', LabTestController::class);
Route::apiResource('lab-test-Order', LabTestOrderController::class);
Route::apiResource('medicine', MedicineController::class);
Route::apiResource('prescription-medicines', PrescriptionMedicineController::class);

