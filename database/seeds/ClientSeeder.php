<?php

use Illuminate\Database\Seeder;
use carbon\Carbon;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('clients')->insert([
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
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('clients')->insert([
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
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('clients')->insert([
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
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('clients')->insert([
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
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('clients')->insert([
            'firstname' => 'Ann Tey',
            'middlename' => 'Otis',
            'lastname' => 'Mwai',
            'email' => 'Atey@gmail.com',
            'id_no' => 36524897,
            'date_of_birth' => Carbon::create('1996', '01', '03'),
            'contacts' => '0723556987',
            'box_code' => 4,
            'postal_code' => 00100,
            'town' => 'Nairobi',
            'kra_pin' => 'A025634796Z',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('clients')->insert([
            'firstname' => 'Joseph Don',
            'middlename' => 'Otis',
            'lastname' => 'Mwai',
            'email' => 'josephdon@outlook.com',
            'id_no' => 23633874,
            'date_of_birth' => Carbon::create('1982', '20', '03'),
            'contacts' => '0756506012',
            'box_code' => 48,
            'postal_code' => 00200,
            'town' => 'Kiambu',
            'kra_pin' => 'A005202626Z',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('clients')->insert([
            'firstname' => 'Loise Mwara',
            'middlename' => 'Otis',
            'lastname' => 'Mwai',
            'email' => 'loisemwara@gmail.com',
            'id_no' => 28966237,
            'date_of_birth' => Carbon::create('1992', '05', '12'),
            'contacts' => '0723546635',
            'box_code' => 26,
            'postal_code' => 20109,
            'town' => 'Kisii',
            'kra_pin' => 'A002548248H',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('clients')->insert([
            'firstname' => 'Dickson Mwangi',
            'middlename' => 'Otis',
            'lastname' => 'Mwai',
            'email' => 'dickmwa@gmail.com',
            'id_no' => 30189562,
            'date_of_birth' => Carbon::create('1996', '03', '03'),
            'contacts' => '0714652398',
            'box_code' => 75,
            'postal_code' => 00100,
            'town' => 'Nairobi',
            'kra_pin' => 'A098748796M',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('clients')->insert([
            'firstname' => 'Mary Tom',
            'middlename' => 'Otis',
            'lastname' => 'Mwai',
            'email' => 'marytom@gmail.com',
            'id_no' => 24859623,
            'date_of_birth' => Carbon::create('1997', '26', '01'),
            'contacts' => '0710236958',
            'box_code' => 25,
            'postal_code' => 20100,
            'town' => 'Nakuru',
            'kra_pin' => 'A222402626Z',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('clients')->insert([
            'firstname' => 'Mercy Tok',
            'middlename' => 'Otis',
            'lastname' => 'Mwai',
            'email' => 'mercytok@gmail.com',
            'id_no' => 32654895,
            'date_of_birth' => Carbon::create('1993', '06', '03'),
            'contacts' => '0711625854',
            'box_code' => 23,
            'postal_code' => 00100,
            'town' => 'Nairobi',
            'kra_pin' => 'A007156328Z',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('clients')->insert([
            'firstname' => 'Tik Tok',
            'middlename' => 'Otis',
            'lastname' => 'Mwai',
            'email' => 'tiktok@gmail.com',
            'id_no' => 36524896,
            'date_of_birth' => Carbon::create('2009', '10', '03'),
            'contacts' => '0723546987',
            'box_code' => 84,
            'postal_code' => 00100,
            'town' => 'Nairobi',
            'kra_pin' => 'A025648796Z',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
