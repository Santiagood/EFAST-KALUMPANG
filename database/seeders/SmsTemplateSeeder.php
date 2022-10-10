<?php

namespace Database\Seeders;
use App\Models\smsTemplate;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SmsTemplateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        smsTemplate::create([
            'SMS_Template_Title' => 'Default Message',
            'SMS_Template_Message' => 'Ang Water Level ng Marikina River ay kasalukuyang nasa @river-level@ meter, ang lebel ng tubig ay nasa @river-status@. Ito ay base sa datos na inilabas ni MCDRRM - Rescue 161 ngayong @river-date@, @river-time@.',
            'SMS_Template_Author' => 'EfastDevelopers',
            'SMS_Template_IsDefault' => true,
        ]);

    }
}
