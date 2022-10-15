<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DefaultUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'EfastDevelopers',
            'email' => 'efastkalumpang@gmail.com',
            'email_verified_at' => Carbon::now(),
            'password' => Hash::make('password'),
            'birthday' => '2022-10-09',
            'gender' => 'Male',
            'mobile_number' => '09451448928',
            'address' => 'J. P. Rizal Street',
            'isVerified' => true,
            'registerMeAs' => 'N/A',
            'roles_id' => true,
        ]);
    }
}
