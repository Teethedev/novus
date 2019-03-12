<?php

use Illuminate\Database\Seeder;

class CabinetTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory('App\Cabinet', 100)->create();
    }
}
