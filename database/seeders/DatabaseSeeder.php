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
         $this->user();
         $this->calls();
    }

    private function user()
    {
        return \App\Models\User::factory(10)->create();
    }

    private function calls()
    {
        return \App\Models\Call::factory(10)->create();
    }
}
