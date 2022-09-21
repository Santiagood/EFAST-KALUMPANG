<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RiverLevel extends Model
{
    use HasFactory;

    protected $table = 'river_levels';

    protected $fillable = [
        'river_status',
        'river_level',
        'year',
        'month',
        'day',
        'time',
        'date',
    ];
}
