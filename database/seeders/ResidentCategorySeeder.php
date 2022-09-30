<?php

namespace Database\Seeders;

use App\Models\residentCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ResidentCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        residentCategory::create([
            'category' => 'N/A',
            'category_description' => 'not applicable, not available, not assessed, or no answer',
        ]);

        residentCategory::create([
            'category' => 'Elderly',
            'category_description' => 'The word elderly refers to those who are 65 years old or older, with those 65 to 74 years old being referred to as "early elderly" and those over 75 years old being referred to as "late elderly.',
        ]);

        residentCategory::create([
            'category' => 'LGBTQ',
            'category_description' => 'LGBTQ is pertaining collectively to people who identify as lesbian, gay, bisexual, transgender, and queer (or those questioning their gender identity or sexual orientation)',
        ]);

        residentCategory::create([
            'category' => 'Person with disability',
            'category_description' => 'The term persons with disabilities is used to apply to all persons with disabilities including those who have long-term physical, mental, intellectual or sensory impairments which, in interaction with various attitudinal and environmental barriers, hinders their full and effective participation in society on an equal basis with others.',
        ]);

    }
}
