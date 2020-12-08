<?php

use Illuminate\Database\Seeder;
use App\Models\type_statuses;

class TypeStatusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $type_status = array(
        	['tsstatus' => 'General'],
        	['tsstatus' => 'Específico'],
        	['tsstatus' => 'Condicional'],
        	['tsstatus' => 'Secuencial'],
        	['tsstatus' => 'Temporales'],
        	['tsstatus' => 'Permamentes'],
        	['tsstatus' => 'Mixtos'],
        	['tsstatus' => 'Cambiantes'],
        	['tsstatus' => 'Extremo'],
        	['tsstatus' => 'Periodico'],
        );


        foreach ($type_status as $value) {
        	$tsstatus = new type_statuses;
        	$tsstatus->name = $value['tsstatus'];
        	$tsstatus->save();
        }    
    }
}
