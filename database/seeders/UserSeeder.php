<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $usr = [
            [
                'name' => "Andre",
                'username' => "loket",
                'role' => "loket",
                'password'   => bcrypt("rahasialoket1"),
                'created_at' => new \DateTime,
                'updated_at' => null,
            ],
            [
                'name' => "Andy",
                'username' => "loket2",
                'role' => "loket2",
                'password'   => bcrypt("rahasialoket2"),
                'created_at' => new \DateTime,
                'updated_at' => null,
            ],
            

        ];
        \DB::table('users')->insert($usr);
    }
}
