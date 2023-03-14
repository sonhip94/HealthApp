<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class BeautySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Beauty::factory(50)->create();
    }
}
