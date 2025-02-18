<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ChecksClaimedDetail extends Model
{
    use HasFactory;

    protected $fillable = [
        'check_claimed_id', 'check_date', 'check_number', 'db_payroll_number', 'ors_burs_number', 'department_id', 'payee', 'nature_of_payment', 'amount'
    ];

    public static function getAllowedFilters()
    {
        return [
            'check_claimed_id', 'check_date', 'check_number', 'db_payroll_number', 'ors_burs_number', 'department_id',
            'payee', 'nature_of_payment'];
    }

    public static function getAllowedSorts()
    {
        return [
            'check_claimed_id', 'check_date', 'check_number', 'department_id', 'payee', 'nature_of_payment'];
    }

    public function checks_claimed()
    {
        return $this->belongsTo(ChecksClaimed::class, 'check_claimed_id');
    }

    public function department()
    {
        return $this->belongsTo(Department::class);
    }
}
