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
            'SMS_Template_Message' => 'Ang ilog sa Kalumpang, Marikina ay kasalukuyang nasa @river-level@ metro ang lebel ng tubig at ito ay nasa @river-status@. Base sa datos na nakuha ngayong @river-date@ - @river-time@. Narito ang ilang mga numero para sa agarang tulong ng paglikas at iba pang impormasyon: Brgy. Hall: 8-6477205 Tanod Office: 09969044972/ 09386212617 Marikina Rescue: 161 Maaaring i-click ang www.efastkalumpang.com para sa kasalukuyang lagay ng tubig.',
            'SMS_Template_Author' => 'EfastDevelopers',
            'SMS_Template_IsDefault' => true,
        ]);

    }
}
