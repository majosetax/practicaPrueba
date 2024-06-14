<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserPostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users=User::factory()->count(10)->create();

        $users->each(function($user){
            Post::factory()->count(rand(1,5))->create(['user_id'=>$user->id]);
        });
    }
}
