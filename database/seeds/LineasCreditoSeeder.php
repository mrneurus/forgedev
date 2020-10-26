<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LineasCreditoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('linea_creditos')->insert([
            
            'name'=>'Cooperativa Bicentenario'
            
        ]);

        DB::table('linea_creditos')->insert([
            
            'name'=>'Comerpy BAPRO Amuproba'
            
        ]);
    }
}