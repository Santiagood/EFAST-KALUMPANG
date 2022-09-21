<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\RoleSeeder;
use Database\Seeders\SentMessageLog;
use Database\Seeders\RiverLevelSeeder;
use Database\Seeders\SmsTemplateSeeder;
use Database\Seeders\KalumpangStreetSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // $this->call(RoleSeeder::class);
        // $this->call(SmsTemplateSeeder::class);

        $this->call([
            RoleSeeder::class,
            KalumpangStreetSeeder::class,
            // SmsTemplateSeeder::class,
            // SentMessageLogSeeder::class,
            // RiverLevelSeeder::class,
        ]);
    }
}
