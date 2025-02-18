<?php

namespace App\Models;

use Spatie\QueryBuilder\AllowedFilter;
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
            AllowedFilter::scope('bank_id'),
            AllowedFilter::scope('fund_cluster_id'),
            ];
    }

    public static function getAllowedSorts()
    {
        return [
            'tran_date', 'fund_cluster_id', 'bank_id', 'encoded_by_id'];
    }

    public function scopeBankId($query, $id)
    {
        if ($id == 0) {
            return $query;
        }

        return $query->where('bank_id', $id);
    }

    public function scopeFundClusterId($query, $id)
    {
        if ($id == 0) {
            return $query;
        }

        return $query->where('fund_cluster_id', $id);
    }

    public function fund_cluster()
    {
        return $this->belongsTo(FundCluster::class);
    }

    public function bank()
    {
        return $this->belongsTo(Bank::class);
    }

    public function checks_claimed_details()
    {
        return $this->hasMany(ChecksClaimedDetail::class, 'check_claimed_id');
    }
}
