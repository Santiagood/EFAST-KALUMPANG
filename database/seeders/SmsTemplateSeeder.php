<?php

namespace Database\Seeders;
use Database\Seeders\SmsTemplateSeeder;
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
            'SMS_Template_Title' => 'Evacuate to the kalumpang elementary school',
            'SMS_Template_Message' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam et euismod dui. Pellentesque faucibus, velit et faucibus facilisis, dolor tortor sodales lorem, ac pulvinar tortor mi ac metus. Duis bibendum, eros tincidunt dictum elementum, enim lectus accumsan massa, quis efficitur velit urna nec arcu.',
            'SMS_Template_Author' => 'john rainier santiago',
            'SMS_Template_IsDefault' => true,
        ]);

        smsTemplate::create([
            'SMS_Template_Title' => 'Evacuate to the Parang Elementary School',
            'SMS_Template_Message' => 'Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Praesent gravida sem ut nisl gravida, at hendrerit quam rutrum. ',
            'SMS_Template_Author' => 'john rainier santiago',
        ]);

        smsTemplate::create([
            'SMS_Template_Title' => 'Evacuate to the Concepcion Integrated School',
            'SMS_Template_Message' => 'Praesent imperdiet porta lacus pulvinar tempus. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas',
            'SMS_Template_Author' => 'john rainier santiago',
        ]);

        smsTemplate::create([
            'SMS_Template_Title' => 'Evacuate to the Tumana Elementary School',
            'SMS_Template_Message' => 'In hac habitasse platea dictumst. Morbi in sapien id arcu fringilla auctor id convallis nulla. Pellentesque sollicitudin pellentesque neque, sed ultricies metus molestie vitae.',
            'SMS_Template_Author' => 'john rainier santiago',
        ]);

        smsTemplate::create([
            'SMS_Template_Title' => 'Evacuate to the H. Baustisa Elementary School',
            'SMS_Template_Message' => 'Aliquam erat volutpat. Curabitur turpis leo, faucibus ac arcu et, dignissim molestie justo. Aenean vel finibus dui. Sed diam augue, efficitur vel ipsum et, feugiat accumsan urna.',
            'SMS_Template_Author' => 'john rainier santiago',
        ]);

        smsTemplate::create([
            'SMS_Template_Title' => 'Evacuate to the Malanday Elementary School',
            'SMS_Template_Message' => 'Sed bibendum ipsum ac lacus cursus ultrices at sed quam. Ut quis malesuada tellus, sit amet consequat libero. Nulla ut tincidunt risus, vitae lobortis turpis.',
            'SMS_Template_Author' => 'john rainier santiago',
        ]);

    }
}
