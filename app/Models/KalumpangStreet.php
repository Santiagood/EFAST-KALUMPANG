<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KalumpangStreet extends Model
{
    use HasFactory;

    protected $table = 'kalumpang_streets';

    protected $fillable = [
        'Street_name',
        'Priority',
    ];
}
