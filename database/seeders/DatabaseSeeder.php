<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Tweet;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Tweet::factory()->count(3)->create(['user_id' => 1]);
        Tweet::factory()->count(3)->create(['user_id' => 2]);
        Tweet::factory()->count(3)->create(['user_id' => 3]);
    }
}
