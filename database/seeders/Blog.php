<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class Blog extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        \App\Models\blog::factory(10)->create();
    }
}
