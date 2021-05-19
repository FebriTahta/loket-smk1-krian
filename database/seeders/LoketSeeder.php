<?php

namespace Database\Seeders;
use DB;
use Illuminate\Database\Seeder;

class LoketSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = array(
            array( 'nama_loket' => 'Loket 1'),
            array('nama_loket' => 'Loket 2'),
        );
        foreach ($data as $raw_data) {
            DB::table('lokets')->insert($raw_data);
        }
    }
}
