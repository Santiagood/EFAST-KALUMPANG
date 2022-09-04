<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class smsTemplate extends Model
{
    use HasFactory;

    protected $table = 'sms_templates';

    protected $fillable = [
        'SMS_Template_Title',
        'SMS_Template_Message',
        'SMS_Template_Author',
        'IsDefault',
    ];
}
