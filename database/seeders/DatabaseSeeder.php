<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
     
    public function run()
    {
         \App\Models\User::factory(1000)->create();
    }
}
