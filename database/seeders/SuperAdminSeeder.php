<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SuperAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Admin::truncate();

        Admin::create([
            'name' => 'Super Admin',
            'email' => 'ulisess@test.com',
            'telefono'=>55445,
            'password' => bcrypt('ulises2415'),

        ]);
    }
}
