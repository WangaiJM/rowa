<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class WorkerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('workers')->insert([
            'firstname' => 'John Doe',
            'middlename' => 'Otis',
            'lastname' => 'Mwai',
            'email' => 'johndo@gmail.com',
            'id_no' => 28975431,
            'date_of_birth' => Carbon::create('2000', '01', '01'),
            'contacts' => '0723546987',
            'box_code' => 246,
            'postal_code' => 20100,
            'town' => 'Nakuru',
            'kra_pin' => 'A002548546Z',
            'company_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('workers')->insert([
            'firstname' => 'Jane Doe',
            'middlename' => 'Otis',
            'lastname' => 'Mwai',
            'email' => 'janedoe@gmail.com',
            'id_no' => 29564752,
            'date_of_birth' => Carbon::create('1996', '12', '03'),
            'contacts' => '0723546987',
            'box_code' => 84,
            'postal_code' => 00100,
            'town' => 'Nairobi',
            'kra_pin' => 'A025648796Z',
            'company_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('workers')->insert([
            'firstname' => 'Mary Kay',
            'middlename' => 'Otis',
            'lastname' => 'Mwai',
            'email' => 'maryk@gmail.com',
            'id_no' => 23659874,
            'date_of_birth' => Carbon::create('1982', '12', '12'),
            'contacts' => '0743506012',
            'box_code' => 480,
            'postal_code' => 20100,
            'town' => 'Nakuru',
            'kra_pin' => 'A000402626Z',
            'company_id' => 2,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('workers')->insert([
            'firstname' => 'Kelvin Mwai',
            'middlename' => 'Otis',
            'lastname' => 'Mwai',
            'email' => 'kelvinmwai@yahoo.com',
            'id_no' => 28965431,
            'date_of_birth' => Carbon::create('1992', '20', '03'),
            'contacts' => '0791632541',
            'box_code' => 362,
            'postal_code' => 20117,
            'town' => 'Naivasha',
            'kra_pin' => 'A007419646Z',
            'company_id' => 2,
            'created_at' => now(),
            'updated_at' => now(),

        ]);
    }
}
