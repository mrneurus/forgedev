<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //admin
        $administrador = User::create([
           'name' => 'aminsitrador',
           'email'=> 'admin@admin.com',
           'password'=>bcrypt('123456789')
        ]);
       
        $administrador->assignRole('administrador');

       //admin
       $vendedor = User::create([
        'name' => 'vendedor',
        'email'=> 'vendedor@vendedor.com',
        'password'=>bcrypt('123456789')
     ]);
    
     $vendedor->assignRole('vendedor');     



        
    }
}