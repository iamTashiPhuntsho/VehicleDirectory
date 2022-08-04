<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VerticalsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('verticals')->insert([
            'code' => '100',
            'name' => 'Credit',
        ]);
        DB::table('verticals')->insert([
            'code' => '200',
            'name' => 'Finance',
        ]);
        DB::table('verticals')->insert([
            'code' => '300',
            'name' => 'Operations',
        ]);
        DB::table('verticals')->insert([
            'code' => '400',
            'name' => 'Resource',
        ]);
        DB::table('verticals')->insert([
            'code' => '500',
            'name' => 'Strategy and Information Technology',
        ]);
        DB::table('verticals')->insert([
            'code' => '600',
            'name' => 'Unspecified',
        ]);
    }
}
