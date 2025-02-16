<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ChecksClaimed extends Model
{
    use HasFactory;

    protected $fillable = [
        'tran_date', 'fund_cluster_id', 'bank_id', 'encoded_by_id'
    ];

    public static function getAllowedFilters()
    {
        return [
            'tran_date', 'fund_cluster_id', 'bank_id', 'encoded_by_id'];
    }

    public static function getAllowedSorts()
    {
        return [
            'tran_date', 'fund_cluster_id', 'bank_id', 'encoded_by_id'];
    }

    public function fund_cluster()
    {
        return $this->belongsTo(FundCluster::class);
    }

    public function bank()
    {
        return $this->belongsTo(Bank::class);
    }
}
