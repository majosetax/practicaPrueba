<?php

namespace Database\Seeders;

use App\Models\Lawyer;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LawyerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Lawyer::factory()->count(10)->create();


    }
}
