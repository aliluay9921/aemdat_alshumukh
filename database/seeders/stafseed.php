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
            'name' => 'مهندسين ',
            'count'  => 200,

        ]);
        staf::create([
            'name' => 'الموضفين',
            'count'  => 300,

        ]);
        staf::create([
            'name' => 'تقنين',
            'count'  => 50,

        ]);
        staf::create([
            'name' => 'سائقين',
            'count'  => 200,

        ]);
    }
}