<?php

namespace App\Http\Controllers\Api\Reports;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Services\Reports\ChecksClaimedReportService;
use App\Http\Requests\Reports\ChecksClaimedReportRequest;

class CheckClaimedReportController extends Controller
{
    public function index(ChecksClaimedReportRequest $request)
    {
        $validatedData = $request->validated();
        return ChecksClaimedReportService::get($validatedData);
    }
}
