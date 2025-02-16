<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Bank extends Model
{
    use HasFactory;
    // public $timestamps = false;

    protected $fillable = [
        'code', 'name'
    ];

    public static function getAllowedFilters()
    {
        return [
            'id', 'code', 'name'];
    }

    public function getAllowedSorts()
    {
        return [
            'id', 'code', 'name'];
    }

    public function check_claimed()
    {
        return $this->hasMany(ChecksClaimed::class);
    }
}
