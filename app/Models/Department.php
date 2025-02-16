<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Department extends Model
{
    use HasFactory;
    // public $timestamps = false;

    protected $fillable = [
        'code', 'name'];

    public static function getAllowedFilters()
    {
        return [
            'code', 'name'];
    }

    public static function getAllowedSorts()
    {
        return [
            'id', 'code', 'name'];
    }

    public function check_claimed_details()
    {
        return $this->hasMany(CheckClaimedDetail::class);
    }
}
