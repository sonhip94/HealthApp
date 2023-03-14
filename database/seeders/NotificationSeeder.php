<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class NotificationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Notification::factory(50)->hasAttached(
        	\App\Models\User::inRandomOrder()->limit(10)->get(),
        )->create();
    }
}
