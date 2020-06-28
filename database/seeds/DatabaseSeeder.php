<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(DefaultUser::class);
        $this->call(DefaultSegmentSeeder::class);
        $this->call(DefaultSegmentTypeSeeder::class);
        $this->call(FakeCustomerSeeder::class);
    }
}
