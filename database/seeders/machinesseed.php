<?php

namespace Database\Seeders;

use App\Models\mechanisms;
use Illuminate\Database\Seeder;

class machinesseed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        mechanisms::create([
            'name' => 'بم كونكريت',
            'count'     => 50,
        ]);
        mechanisms::create([
            'name' => 'بم ستيشن',
            'count'     => 30,
        ]);
        mechanisms::create([
            'name' => 'قاطرة مقطورة',
            'count'     => 90,
        ]);
        mechanisms::create([
            'name' => 'ناقلة كونكريت',
            'count' => 20,
        ]);
    }
}