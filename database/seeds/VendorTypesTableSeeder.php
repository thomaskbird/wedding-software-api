<?php

use Illuminate\Database\Seeder;

class VendorTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('user_types')->insert([
            [
                'title' => 'Florist',
                'description' => 'Floral decoration provider'
            ],
            [
                'title' => 'DJ',
                'description' => 'Company or person handling music'
            ],
            [
                'title' => 'Photographer',
                'description' => 'Handles photography'
            ],
            [
                'title' => 'Videographer',
                'description' => 'Handles video'
            ],
            [
                'title' => 'Officiant',
                'description' => 'Person handling ceremony'
            ],
            [
                'title' => 'Caterer',
                'description' => 'Food provider'
            ],
            [
                'title' => 'Beverage Services',
                'description' => 'Beverage supplier'
            ],
            [
                'title' => 'Cake maker',
                'description' => 'Cake provider'
            ]
        ]);
    }
}
