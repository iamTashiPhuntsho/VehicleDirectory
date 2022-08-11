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
            'name' => 'Directory Administrator',
            'email' => 'taphin@bnb.bt',
            'password' => Hash::make('D1rect0ry@2oi9'),
        ]);
        DB::table('users')->insert([
            'name' => 'Directory Administrator2',
            'email' => 'damber@bnb.bt',
            'password' => Hash::make('D1rect0ry@2oi9'),
        ]);
        DB::table('users')->insert([
            'name' => 'Lhaki Delma',
            'email' => 'lhaki@bnb.bt',
            'password' => Hash::make('Lhaki@2020'),
        ]);
        DB::table('users')->insert([
            'name' => 'cyangden',
            'email' => 'cyangden@bnb.bt',
            'password' => Hash::make('cyangden@2022'),
        ]);
    }
}
