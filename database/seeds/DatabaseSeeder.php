<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(MotionsTableSeeder::class);
        $this->call(RoundsTableSeeder::class);
        $this->call(TournamentsTableSeeder::class);
        $this->call(HostsTableSeeder::class);
    }
}
