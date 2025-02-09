<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Department extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $fillable = [
        'id', 'code', 'name', 'created_by', 'created_at', 'history'
    ];

    public static function getAllowedFilters()
    {
        return [
            'code', 'name'];
    }
}
