<?php

use Illuminate\Database\Seeder;

class FakeCustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory('App\Models\Customer', 1000)->create();
    }
}
