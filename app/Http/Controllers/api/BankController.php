<?php

namespace App\Http\Controllers\Api;

use App\Models\Bank;
use Illuminate\Http\Request;
use App\Http\Requests\BankRequest;
use App\Http\Controllers\Controller;
use App\Http\Resources\BankResource;

class BankController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Bank::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(BankRequest $request)
    {
        Bank::create($request->validated());
    }

    /**
     * Display the specified resource.
     */
    public function show(Bank $bank)
    {
        return new BankResource($bank);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(BankRequest $request, Bank $bank)
    {
        $bank->update($request->validated());
        $bank->fresh();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Bank $bank)
    {
        $bank->delete();
    }
}
