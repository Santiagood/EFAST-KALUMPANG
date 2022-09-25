<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DashboardInfograph extends Model
{

    protected $fillable = [
        'infograph_title',
        'infograph_image',
        'infograph_order',
        'infograph_message',
    ];
    use HasFactory;
}
