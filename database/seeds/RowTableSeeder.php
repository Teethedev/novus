<?php

use Illuminate\Database\Seeder;

class RowTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory('App\Row', 10)->create();
    }
}
