<?php

use Illuminate\Database\Seeder;

class ClientTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \project\Client::truncate();
        factory(\project\Client::class, 10)->create();
    }
}
