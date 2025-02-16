<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class FundCluster extends Model
{
    use HasFactory;
    // public $timestamps = false;

    protected $fillable = [
        'name'
    ];

    public static function getAllowedFilters()
    {
        return [
            'id', 'name'];
    }

    public function getAllowedSorts()
    {
        return [
            'id', 'name'];
    }

    public function check_claimed()
    {
        return $this->hasMany(ChecksClaimed::class);
    }
}
