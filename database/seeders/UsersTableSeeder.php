<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Sherab Wangchuk',
            'email' => 'sherabwangchuk@bnb.bt',
            'password' => bcrypt('qwer1234'),
        ]);
        DB::table('users')->insert([
            'name' => 'Chening Yangden',
            'email' => 'cyangden@bnb.bt',
            'password' => Hash::make('cyangden@2022'),
        ]);
        DB::table('users')->insert([
            'name' => 'Tashi Phuntsho',
            'email' => 'taphin@bnb.bt',
            'password' => Hash::make('12345678'),
        ]);
    }
}
