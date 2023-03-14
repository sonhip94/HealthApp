<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ExerciseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Exercise::factory(50)->hasAttached(
            \App\Models\User::inRandomOrder()->limit(10)->get(),
        )->create();
    }
}
