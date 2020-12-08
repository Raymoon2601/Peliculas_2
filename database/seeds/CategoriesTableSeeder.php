<?php

use Illuminate\Database\Seeder;

use Faker\Factory as Faker;

use App\Models\Categories;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = array(
        	['category' => 'Acción'],
        	['category' => 'Terror'],
        	['category' => 'Comedia'],
        	['category' => 'Anime'],
        	['category' => 'Drama'],
        	['category' => 'Suspenso'],
        	['category' => 'Infantil'],
        	['category' => 'Recuentos de la vida'],
        	['category' => 'Romantico'],
        	['category' => 'Aventura'],
        );


        foreach ($categories as $value) {
        	$category = new Categories;
        	$category->name = $value['category'];
        	$category->status_id = 1;
        	$category->save();
        }
    }
  }
