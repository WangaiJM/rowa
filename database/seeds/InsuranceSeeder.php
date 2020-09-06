<?php

use Illuminate\Database\Seeder;

class InsuranceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('insurances')->insert([
            'client_id' => 1,
            'motor_id' => 1,
            'added_on' => now(),
            'expires_on' => date_add(now(), date_interval_create_from_date_string('1 Year')),
            'premium' => '100000',
            'amount' => '100000',
            'created_at' => now(),
            'updated_at' =>now(),
        ]);
    }
}
