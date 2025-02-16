<?php

namespace App\Http\Controllers\Api;

use App\Models\FundCluster;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\FundClusterRequest;

class FundClusterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return FundCluster::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(FundClusterRequest $request)
    {
        FundCluster::create($request->validated());
    }

    /**
     * Display the specified resource.
     */
    public function show(FundCluster $fundCluster)
    {
        return $fundCluster;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(FundClusterRequest $request, FundCluster $fundCluster)
    {
        $fundCluster->update($request->validated());
        $fundCluster->fresh();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(FundCluster $fundCluster)
    {
        $fundCluster->delete();
    }
}
