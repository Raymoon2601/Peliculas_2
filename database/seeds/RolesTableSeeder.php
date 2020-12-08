<?php

use Illuminate\Database\Seeder;
use App\Models\Role;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $Roles = array(
        	['Role' => 'Gerente general'],
        	['Role' => 'Cajero'],
        	['Role' => 'Rentador'],
        	['Role' => 'Conserje'],
        	['Role' => 'Vigilante'],
        	['Role' => 'Administración'],
        	['Role' => 'Aprendiz'],
        	['Role' => 'Pasante'],
        	['Role' => 'CEO'],
        	['Role' => 'Supervisor'],
        );


        foreach ($Roles as $value) {
        	$role = new Role;
        	$role->name = $value['Role'];
        	$role->status_id = rand(1,3);
        	$role->save();
        }
    }
}
