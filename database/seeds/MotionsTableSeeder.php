<?php

use Illuminate\Database\Seeder;

class MotionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        return factory(App\Motion::class, 5)->create();
    }
}
