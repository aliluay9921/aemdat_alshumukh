<?php

namespace Database\Seeders;

use Database\Seeders\adminseed;
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
        // \App\Models\User::factory(10)->create();
        $this->call(adminseed::class);
        $this->call(stafseed::class);
        $this->call(machinesseed::class);
    }
}