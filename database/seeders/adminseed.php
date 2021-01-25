<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class adminseed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Ziad Tariq',
            'email' => 'Admin@gmail.com',
            'password' => bcrypt('Admin_admin')
        ]);
    }
}