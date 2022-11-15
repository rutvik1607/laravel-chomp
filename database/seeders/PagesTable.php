<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PagesTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        \App\Models\page::factory(10)->create();
    }
}
