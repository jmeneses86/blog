<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        User::create([
            'name' => "José Meneses",
            'email' => "josemeneses86@gmail.com",
            'password' => bcrypt('jmeneses555')
        ])->assignRole('Admin');

        User::factory(99)->create();
    }
}
