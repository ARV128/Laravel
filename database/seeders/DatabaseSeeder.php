<?php

namespace Database\Seeders;

use App\Models\Klijent;
use App\Models\Kupovina;
use App\Models\Putovanje;
use App\Models\User;
use Database\Factories\PutovanjeFactory;
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
        Kupovina::truncate();
        Putovanje::truncate();
        Klijent::truncate();
        User::truncate(); 
       User::factory(3)->create();

       Klijent::factory(15)->create();

       Putovanje::factory(10)->create();
       Kupovina::factory(10)->create();
    }
}
