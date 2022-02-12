<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        $this->call(AccountSeeder::class);
        $this->call(EBookSeeder::class);
        $this->call(GenderSeeder::class);
        $this->call(OrderSeeder::class);
        $this->call(RoleSeeder::class);
    }
}
