<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UserChallengeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\UserChallenge::factory(50)->create();
    }
}
