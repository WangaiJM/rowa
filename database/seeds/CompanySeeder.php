<?php

use Illuminate\Database\Seeder;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('companies')->insert([
            'name' => 'NNUS',
            'industry' => 'Transportation',
            'email' => 'nnus@gmail.com',
            'contacts' => '0723546987',
            'box_code' => 246,
            'postal_code' => 20100,
            'town' => 'Nakuru',
            'kra_pin' => 'A002548546Z',
        ]);
        DB::table('companies')->insert([
            'name' => 'NaivashaPolytechnic',
            'industry' => 'Education',
            'email' => 'naipoly@gmail.com',
            'contacts' => '0723546987',
            'box_code' => 254,
            'postal_code' => 20100,
            'town' => 'Nakuru',
            'kra_pin' => 'A002533346Z',
        ]);
        DB::table('companies')->insert([
            'name' => 'Service Hospital',
            'industry' => 'Health',
            'email' => 'serhos@gmail.com',
            'contacts' => '0723546987',
            'box_code' => 333,
            'postal_code' => 20100,
            'town' => 'Nakuru',
            'kra_pin' => 'A002548646Z',
        ]);
    }
}
