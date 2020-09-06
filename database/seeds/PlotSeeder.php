<?php

use Illuminate\Database\Seeder;

class PlotSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('plots')->insert([
            'client_id' => 1,
            'plot_name' => 'Jubilee',
            'plot_no' => 2248,
            'size' => 0.0048,
            'location' => 'Naivasha Town',
            'value' => 60000000
        ]);

        DB::table('plots')->insert([
            'client_id' => 1,
            'plot_name' => 'View Point',
            'plot_no' => 2548,
            'size' => 0.0048,
            'location' => 'Naivasha Town',
            'value' => 12000000
        ]);

        DB::table('plots')->insert([
            'client_id' => 5,
            'plot_name' => 'Jasho',
            'plot_no' => 98654,
            'size' => 0.0005,
            'location' => 'Naivasha Town',
            'value' => 30000000
        ]);
    }
}
