<?php

namespace Database\Seeders;
use DB;
use Illuminate\Database\Seeder;

class AntrianSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'antrian_ke'=>1,
                'loket_id'=>1,
                'user_id' => 2,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'tanggal' => date('Y-m-d'),
            ],
            [  
             'antrian_ke'=>2,
            'loket_id'=>1,
            'user_id' => 2,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
            'tanggal' => date('Y-m-d'),],
            [  
                'antrian_ke'=>2,
               'loket_id'=>1,
               'user_id' => 2,
               'created_at' => date('Y-m-d H:i:s'),
               'updated_at' => date('Y-m-d H:i:s'),
               'tanggal' => date('Y-m-d'),],
            [  
                'antrian_ke'=>1,
               'loket_id'=>2,
               'user_id' => 3,
               'created_at' => date('Y-m-d H:i:s'),
               'updated_at' => date('Y-m-d H:i:s'),
               'tanggal' => date('Y-m-d'),
            ],
            [  
                'antrian_ke'=>2,
               'loket_id'=>2,
               'user_id' => 3,
               'created_at' => date('Y-m-d H:i:s'),
               'updated_at' => date('Y-m-d H:i:s'),
               'tanggal' => date('Y-m-d'),
            ],
        ];
        foreach ($data as $raw_data) {
            DB::table('antrians')->insert($raw_data);
        }
    }
}
