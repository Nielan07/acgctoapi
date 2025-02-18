<?php

namespace App\Services\Reports;

use App\Models\ChecksClaimed;
use Carbon\Carbon;

class ChecksClaimedReportService
{
    public static function get($validatedData)
    {
        $bankId = $validatedData['bank_id'];
        $fundClusterId = $validatedData['fund_cluster_id'];
        $fromDate = Carbon::parse($validatedData['from_date'])->toDateString();
        $toDate = Carbon::parse($validatedData['to_date'])->toDateString();

        $checksClaimedDetails = ChecksClaimed::with(['fund_cluster', 'bank',
            'checks_claimed_details' => function ($query) {
                $query->with('department');
            }])
            ->whereBetween('tran_date', [$fromDate, $toDate])
            ->bankId($bankId)
            ->fundClusterId($fundClusterId)
            ->get();
        return $checksClaimedDetails;
    }
}
