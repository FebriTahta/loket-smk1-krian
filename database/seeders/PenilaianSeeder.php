<?php

namespace Database\Seeders;
use DB;
use Illuminate\Database\Seeder;

class PenilaianSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $u = [
            [
                'name'=>"A"
            ],
            [
                'name'=>"B"
            ],
            [
                'name'=>"C"
            ]
        ];
        \DB::table('kriterias')->insert($u);

        $usr = [
            [
                'kriteria_id' => 1,
                'factor' => "fs",
                
            ],
            [
                'kriteria_id'=>1,
                'factor' => "tj",
               
            ],
            [
                'kriteria_id'=>1,
                'factor' => "sm",
               
            ],
            [
                'kriteria_id'=>2,
                'factor' => "tj",
               
            ],
            [
                'kriteria_id'=>2,
                'factor' => "bl",
               
            ],
            [
                'kriteria_id'=>3,
                'factor' => "ux",
               
            ],
        ];
        \DB::table('penilaians')->insert($usr);

    }
}
