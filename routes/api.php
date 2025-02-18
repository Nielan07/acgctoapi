<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Api\BankController;
use App\Http\Controllers\Api\DepartmentController;
use App\Http\Controllers\Api\FundClusterController;
use App\Http\Controllers\Api\Reports\CheckClaimedReportController;


Route::apiResource("departments", DepartmentController::class);
Route::apiResource("fund-clusters", FundClusterController::class);
Route::apiResource("banks", BankController::class);

Route::prefix('reports')->group(
    function () {
        Route::apiResource("check-claimed-report", CheckClaimedReportController::class);
    }
);
