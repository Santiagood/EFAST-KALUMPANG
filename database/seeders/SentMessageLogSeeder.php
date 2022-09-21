<?php

namespace Database\Seeders;
use Database\Seeders\SentMessageLogSeeder;
use App\Models\SentMessageLog;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SentMessageLogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        SentMessageLog::create([
            'Sent_Message' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam et euismod dui. Pellentesque faucibus, velit et faucibus facilisis, dolor tortor sodales lorem, ac pulvinar tortor mi ac metus. Duis bibendum, eros tincidunt dictum elementum, enim lectus accumsan massa, quis efficitur velit urna nec arcu.',
            'Sent_Sender' => 'Sample User Name',
            'Sent_Status' => 'Success',
            'Sent_Status_Message' => 'Success! Message is now on queue and will be sent soon',
        ]);

        SentMessageLog::create([
            'Sent_Message' => 'Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Praesent gravida sem ut nisl gravida, at hendrerit quam rutrum. ',
            'Sent_Sender' => 'Sample User Name',
            'Sent_Status' => 'Success',
            'Sent_Status_Message' => 'Success! Message is now on queue and will be sent soon',
        ]);

        SentMessageLog::create([
            'Sent_Message' => 'Praesent imperdiet porta lacus pulvinar tempus. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas',
            'Sent_Sender' => 'Sample User Name',
            'Sent_Status' => 'Success',
            'Sent_Status_Message' => 'Success! Message is now on queue and will be sent soon',
        ]);

        SentMessageLog::create([
            'Sent_Message' => 'In hac habitasse platea dictumst. Morbi in sapien id arcu fringilla auctor id convallis nulla. Pellentesque sollicitudin pellentesque neque, sed ultricies metus molestie vitae.',
            'Sent_Sender' => 'Sample User Name',
            'Sent_Status' => 'Success',
            'Sent_Status_Message' => 'Success! Message is now on queue and will be sent soon',
        ]);

        SentMessageLog::create([
            'Sent_Message' => 'Aliquam erat volutpat. Curabitur turpis leo, faucibus ac arcu et, dignissim molestie justo. Aenean vel finibus dui. Sed diam augue, efficitur vel ipsum et, feugiat accumsan urna.',
            'Sent_Sender' => 'Sample User Name',
            'Sent_Status' => 'Success',
            'Sent_Status_Message' => 'Success! Message is now on queue and will be sent soon',
        ]);

        SentMessageLog::create([
            'Sent_Message' => 'Sed bibendum ipsum ac lacus cursus ultrices at sed quam. Ut quis malesuada tellus, sit amet consequat libero. Nulla ut tincidunt risus, vitae lobortis turpis.',
            'Sent_Sender' => 'Sample User Name',
            'Sent_Status' => 'Success',
            'Sent_Status_Message' => 'Success! Message is now on queue and will be sent soon',
        ]);
    }
}
