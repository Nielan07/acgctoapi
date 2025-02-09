<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Api\DepartmentController;


Route::apiResource("departments", DepartmentController::class);
