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
            'name' => 'pumping_concret',
            'count'     => 50,
        ]);
        mechanisms::create([
            'name' => 'pum_station',
            'count'     => 30,
        ]);
        mechanisms::create([
            'name' => 'trailer_qatra',
            'count'     => 90,
        ]);
        mechanisms::create([
            'name' => 'transfer_concret',
            'count' => 20,
        ]);
    }
}