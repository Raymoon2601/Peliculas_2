<?php

use Illuminate\Database\Seeder;

use Faker\Factory as Faker; 

use App\Models\Movie;

class MoviesTableSeeder extends Seeder
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
        	$movie = new Movie;
        	$movie->name= $faker->sentence(2) ;
        	$movie->description= $faker->sentence($nbWords = 10, $variableNbWords = true) ;
        	$movie->user_id = rand(2,10);
        	$movie->status_id = 1;
        	$movie->save();

        }
    }
}
