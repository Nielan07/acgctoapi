<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Models\CheckClaimedDetail;
use App\Http\Controllers\Controller;
use App\Http\Requests\ChecksClaimedRequest;

class CheckClaimedReportController extends Controller
{
    public function index(ChecksClaimedRequest $request)
    {
        $validatedData = $request->validated();
    }
}
