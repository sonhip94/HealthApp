<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UserDiarySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\UserDiary::factory(50)->create();
    }
}
