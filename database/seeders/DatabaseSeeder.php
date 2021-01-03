<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Carbon\Carbon;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        ////////////////////////
        ////SEED FOR TICKETS///
        ///////////////////////

        if(DB::table('tickets')->get()->count() == 0)
        {
            DB::table('tickets')->insert(
            [
                [
                    'name' => 'Children',
                    'info' => 'This ticket is for children up to 7 years old.',
                    'price'=> 0.00,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'name' => 'Student',
                    'info' => 'This ticket is for students that are going to school or univeristy.',
                    'price'=> 5.50,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'name' => 'Disabled',
                    'info' => 'This ticket is for disabled people.',
                    'price'=> 5.50,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'name' => 'Standart',
                    'info' => 'This is standart ticket.',
                    'price'=> 11.00,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ]
            ]);
        }
        else
        {
            echo "\r\n\e[31m Tickets table is not empty, therefore NOT \r\n";
        }

        ////////////////////////
        ////SEED FOR LOCATION///
        ///////////////////////
        if(DB::table('locations')->get()->count() == 0)
        {
            DB::table('locations')->insert(
            [
                [
                    'name' => 'Ivan Vazov',
                    'address' => 'Dqkon Ignatii 5',
                    'city'=> 'Sofia',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'name' => 'Valentin Stoichev',
                    'address' => 'Slavqnska 5',
                    'city'=> 'Sofia',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'name' => 'Konstantin Kisimov',
                    'address' => 'Vasil Levski 4',
                    'city'=> 'Veliko Tarnovo',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'name' => 'Summer Theater',
                    'address' => 'Park Marno Pole',
                    'city'=> 'Veliko Tarnovo',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ]
            ]);
        }
        else
        {
            echo "\r\n\e[31m Locations table is not empty, therefore NOT \r\n";
        }

        ////////////////////////////
        ////SEED FOR PERFORMANCES///
        ////////////////////////////

        if(DB::table('performances')->get()->count() == 0)
        {
            DB::table('performances')->insert(
            [
                [
                    'title' => 'Romeo and Juliet',
                    'date' => Carbon::create('2021','10','01'),
                    'image' => 'https://images-na.ssl-images-amazon.com/images/I/519iBc8P4tL._SY445_.jpg',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'title' => 'Hamlet',
                    'date' => Carbon::create('2021','09','09'),
                    'image' => 'https://i.pinimg.com/originals/41/7b/8a/417b8aadbcc3abc854fdce5bb47eb4b9.jpg',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
            ]);
        }
        else
        {
            echo "\r\n\e[31m Performances table is not empty, therefore NOT  \r\n ";
        }


        //////////////////////////////////////
        ////SEED FOR PERFORMANCES-LOCATIONS///
        //////////////////////////////////////


        if(DB::table('performance_locations')->get()->count() == 0)
        {
            DB::table('performance_locations')->insert(
            [
                [
                    'performance_id' => 1,
                    'location_id' => 1,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'performance_id' => 1,
                    'location_id' => 2,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'performance_id' => 2,
                    'location_id' => 2,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'performance_id' => 2,
                    'location_id' => 3,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
            ]);
        }
        else
        {
            echo "\r\n\e[31m Performances-Locations table is not empty, therefore NOT \r\n";
        }

        //////////////////////////////////////
        ////SEED FOR PERFORMANCES-TICKETS/////
        //////////////////////////////////////


        if(DB::table('performance_tickets')->get()->count() == 0)
        {
            DB::table('performance_tickets')->insert(
            [
                [
                    'performance_id' => 1,
                    'ticket_id' => 1,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'performance_id' => 2,
                    'ticket_id' => 1,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'performance_id' => 2,
                    'ticket_id' => 1,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'performance_id' => 2,
                    'ticket_id' => 1,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
            ]);
        }
        else
        {
            echo "\r\n\e[31m Performances-Locations table is not empty, therefore NOT \r\n";
        }
    }
}
