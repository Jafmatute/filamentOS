<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('rols')->insert([
            'name' => 'User',
        ]);

        DB::table('rols')->insert([
            'name' => 'Administrator',
        ]);
    }
}
