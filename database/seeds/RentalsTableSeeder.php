<?php

use Illuminate\Database\Seeder;

use Faker\Factory as Faker; 

use App\Models\Rentals;



class RentalsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $faker = Faker::create();
        for ($i=0; $i <10 ; $i++) { 
        	$rental = new Rentals;
        	$rental->start_date= $faker->date($format = 'Y-m-d', $max = 'now') ;
        	$rental->end_date= $faker->date($format = 'Y-m-d', $max = 'now') ;
        	$rental->total = $faker->numberBetween($min = 1000, $max = 9000);
        	$rental->user_id = rand(2,10);
        	$rental->status_id = 1;
        	$rental->save();

        }
    }
}
