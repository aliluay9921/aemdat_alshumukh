<?php

namespace Database\Seeders;

use App\Models\staf;
use Illuminate\Database\Seeder;

class stafseed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        staf::create([
            'name' => 'enginerrs',
            'count'  => 200,

        ]);
        staf::create([
            'name' => 'employees',
            'count'  => 300,

        ]);
        staf::create([
            'name' => 'technicians',
            'count'  => 50,

        ]);
        staf::create([
            'name' => 'drivers',
            'count'  => 200,

        ]);
    }
}