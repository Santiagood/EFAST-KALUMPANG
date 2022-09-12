<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SentMessageLog extends Model
{
    use HasFactory;

    protected $fillable = [
        'Sent_Title',
        'Sent_Message',
        'Sent_Sender',
        'Sent_Status',
    ];
}