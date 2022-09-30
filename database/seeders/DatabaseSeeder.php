<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\RoleSeeder;
use Database\Seeders\SentMessageLog;
use Database\Seeders\RiverLevelSeeder;
use Database\Seeders\SmsTemplateSeeder;
use Database\Seeders\KalumpangStreetSeeder;
use Database\Seeders\ResidentCategorySeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        $this->call([
            RoleSeeder::class,
            KalumpangStreetSeeder::class,
            ResidentCategorySeeder::class,
            SmsTemplateSeeder::class,
            // SentMessageLogSeeder::class,
            // RiverLevelSeeder::class,
        ]);
    }
}
