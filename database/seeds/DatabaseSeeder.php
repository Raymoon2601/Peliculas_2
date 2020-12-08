<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        

        //$this->call(StatusTableSeeder::class);
        //$this->call(UsersTableSeeder::class);
        //$this->call(RolesTableSeeder::class);
        //$this->call(RentalsTableSeeder::class);
        //$this->call(CategoriesTableSeeder::class);
        //$this->call(TypeStatusTableSeeder::class);
        $this->call(MoviesTableSeeder::class);
    }
}
