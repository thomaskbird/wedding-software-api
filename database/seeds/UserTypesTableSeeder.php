<?php

use Illuminate\Database\Seeder;

class UserTypesTableSeeder extends Seeder
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
                'title' => 'Groom',
                'slug' => 'groom'
            ],
            [
                'title' => 'Bride',
                'slug' => 'bride'
            ],
            [
                'title' => 'Attendee',
                'slug' => 'attendee'
            ],
            [
                'title' => 'Groomsmen',
                'slug' => 'groomsmen'
            ],
            [
                'title' => 'Bridesmaid',
                'slug' => 'bridesmaid'
            ],
            [
                'title' => 'Family Groom',
                'slug' => 'family-groom'
            ],
            [
                'title' => 'Family Bride',
                'slug' => 'family-bride'
            ],
            [
                'title' => 'Flower Girl',
                'slug' => 'flower-girl'
            ],
            [
                'title' => 'Officiant',
                'slug' => 'officiant'
            ],
            [
                'title' => 'DJ',
                'slug' => 'dj'
            ],
            [
                'title' => 'Photographer',
                'slug' => 'photographer'
            ],
            [
                'title' => 'Videographer',
                'slug' => 'videographer'
            ],
            [
                'title' => 'Ring Bearer',
                'slug' => 'ring-bearer'
            ]
        ]);
    }
}
