<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DepartmentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('departments')->insert([
        	'code' => '101',
        	'name' => 'Credit',
        	'vertical_id' => '1',   
        ]);
        DB::table('departments')->insert([
        	'code' => '102',
        	'name' => 'Legal and Credit Monitoring & Review Unit',
        	'vertical_id' => '1',   
        ]);
        DB::table('departments')->insert([
        	'code' => '201',
        	'name' => 'Accounts',
        	'vertical_id' => '2',   
        ]);
        DB::table('departments')->insert([
        	'code' => '202',
        	'name' => 'Risk',
        	'vertical_id' => '2',   
        ]);
        DB::table('departments')->insert([
        	'code' => '203',
        	'name' => 'Credit Review',
        	'vertical_id' => '2',   
        ]);
        DB::table('departments')->insert([
        	'code' => '301',
        	'name' => 'Card',
        	'vertical_id' => '3',   
        ]);
        DB::table('departments')->insert([
        	'code' => '302',
        	'name' => 'Operations - Banking',
        	'vertical_id' => '3',   
        ]);
        DB::table('departments')->insert([
        	'code' => '303',
        	'name' => 'Sales and Marketing',
        	'vertical_id' => '3',   
        ]);
        DB::table('departments')->insert([
        	'code' => '401',
        	'name' => 'Human Resource and Administration',
        	'vertical_id' => '4',   
        ]);
        DB::table('departments')->insert([
        	'code' => '402',
        	'name' => 'Engineering',
        	'vertical_id' => '4',   
        ]);
        DB::table('departments')->insert([
        	'code' => '501',
        	'name' => 'Information Technology',
        	'vertical_id' => '5',   
        ]);
        DB::table('departments')->insert([
        	'code' => '502',
        	'name' => 'Office of Strategy Management',
        	'vertical_id' => '5',   
        ]);
        DB::table('departments')->insert([
        	'code' => '601',
        	'name' => 'Executive Members',
        	'vertical_id' => '6',   
        ]);
        DB::table('departments')->insert([
        	'code' => '602',
        	'name' => 'Internal Audit',
        	'vertical_id' => '6',   
        ]);
        DB::table('departments')->insert([
        	'code' => '603',
        	'name' => 'Compliance',
        	'vertical_id' => '6',   
        ]);
    }
}
