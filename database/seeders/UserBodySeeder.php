<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UserBodySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\UserBody::factory(10)->create();
    }
}
