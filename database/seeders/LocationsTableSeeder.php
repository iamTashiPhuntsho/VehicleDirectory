<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LocationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('locations')->insert([
        	'code' => '100', 
        	'name' => 'Corporate Office',
        	'category' => 'headoffice',
        ]);
      	DB::table('locations')->insert([
      		'code' => '000', 
      		'name' => 'Thimphu Branch',
      		'category' => 'branch',
      	]);
      	DB::table('locations')->insert([
      		'code' => '001', 
      		'name' => 'Phuntsholing Branch',
      		'category' => 'branch',
      	]);
      	DB::table('locations')->insert([
      		'code' => '002', 
      		'name' => 'Samdrupjongkhar Branch',
      		'category' => 'branch',
      	]);
      	DB::table('locations')->insert([
      		'code' => '003', 
      		'name' => 'Trashigang Branch',
      		'category' => 'branch',
      	]);
      	DB::table('locations')->insert([
      		'code' => '004', 
      		'name' => 'Gelephu Branch',
      		'category' => 'branch',
      	]);
      	DB::table('locations')->insert([
      		'code' => '005', 
      		'name' => 'Paro Branch',
      		'category' => 'branch',
      	]);
      	DB::table('locations')->insert([
      		'code' => '006', 
      		'name' => 'Mongar Branch',
      		'category' => 'branch',
      	]);
      	DB::table('locations')->insert([
      		'code' => '007', 
      		'name' => 'Wangdue Branch',
      		'category' => 'branch',
      	]);
      	DB::table('locations')->insert([
      		'code' => '008', 
      		'name' => 'Bumthang Branch',
      		'category' => 'branch',
      	]);
      	DB::table('locations')->insert([
      		'code' => '009', 
      		'name' => 'Samtse Branch',
      		'category' => 'branch',
      	]);
      	DB::table('locations')->insert([
      		'code' => '010', 
      		'name' => 'Tsirang Branch',
      		'category' => 'branch',
      	]);
      	DB::table('locations')->insert([
      		'code' => '999', 
      		'name' => 'Corporate Banking',
      		'category' => 'branch',
      	]);
      	// Extensions
      	DB::table('locations')->insert([
      		'code' => '200', 
      		'name' => 'Taba Extension',
      		'category' => 'extension',
      	]); 
      	DB::table('locations')->insert([
      		'code' => '300', 
      		'name' => 'Motithang Extension',
      		'category' => 'extension',
      	]); 
      	DB::table('locations')->insert([
      		'code' => '400', 
      		'name' => 'Babesa Extension',
      		'category' => 'extension',
      	]);   
      	DB::table('locations')->insert([
      		'code' => '500', 
      		'name' => 'Olakha Extension',
      		'category' => 'extension',
      	]); 
      	DB::table('locations')->insert([
      		'code' => '600', 
      		'name' => 'Khasadrabchu Extension',
      		'category' => 'extension',
      	]); 
      	DB::table('locations')->insert([
      		'code' => '101', 
      		'name' => 'Tala Extension',
      		'category' => 'extension',
      	]);   
      	DB::table('locations')->insert([
      		'code' => '102', 
      		'name' => 'Samdrupcholing Extension',
      		'category' => 'extension',
      	]); 
      	DB::table('locations')->insert([
      		'code' => '202', 
      		'name' => 'Samdrupjongkhar Extension',
      		'category' => 'extension',
      	]); 
      	DB::table('locations')->insert([
      		'code' => '302', 
      		'name' => 'Nganglam Extension',
      		'category' => 'extension',
      	]); 
        DB::table('locations')->insert([
          'code' => '103', 
          'name' => 'Kanglung Extension',
          'category' => 'extension',
        ]);
        DB::table('locations')->insert([
          'code' => '203', 
          'name' => 'Wamrong Extension',
          'category' => 'extension',
        ]);
        DB::table('locations')->insert([
          'code' => '303', 
          'name' => 'Tashiyangtsi Extension',
          'category' => 'extension',
        ]);
        DB::table('locations')->insert([
          'code' => '403', 
          'name' => 'Rangjung Extension',
          'category' => 'extension',
        ]);
        DB::table('locations')->insert([
          'code' => '104', 
          'name' => 'Tingtibi Extension',
          'category' => 'extension',
        ]);
        DB::table('locations')->insert([
          'code' => '204', 
          'name' => 'Sarpang Extension',
          'category' => 'extension',
        ]);
        DB::table('locations')->insert([
          'code' => '105', 
          'name' => 'Bonday Extension',
          'category' => 'extension',
        ]);
        DB::table('locations')->insert([
          'code' => '205', 
          'name' => 'Haa Extension',
          'category' => 'extension',
        ]);
        DB::table('locations')->insert([
          'code' => '106', 
          'name' => 'Gyelposhing Extension',
          'category' => 'extension',
        ]);
        DB::table('locations')->insert([
          'code' => '206', 
          'name' => 'Lingmithang Extension',
          'category' => 'extension',
        ]);
        DB::table('locations')->insert([
          'code' => '306', 
          'name' => 'Lhuntse Extension',
          'category' => 'extension',
        ]);
        DB::table('locations')->insert([
          'code' => '107', 
          'name' => 'Khuruthang Extension',
          'category' => 'extension',
        ]);
        DB::table('locations')->insert([
          'code' => '207', 
          'name' => 'Gasa Extension',
          'category' => 'extension',
        ]);
        DB::table('locations')->insert([
          'code' => '108', 
          'name' => 'Trongsa Extension',
          'category' => 'extension',
        ]);
        DB::table('locations')->insert([
          'code' => '109', 
          'name' => 'Gomtu Extension',
          'category' => 'extension',
        ]);
        DB::table('locations')->insert([
          'code' => '209', 
          'name' => 'Tashicholing Extension',
          'category' => 'extension',
        ]);
        DB::table('locations')->insert([
          'code' => '110', 
          'name' => 'Dagapela Extension',
          'category' => 'extension',
        ]);
    }
}
