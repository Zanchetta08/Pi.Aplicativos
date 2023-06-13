<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'=>'Larry Silva',
            'email'=>'larry_silva@gmail.com',
            'password'=>bcrypt('123123123'),
        ]);

        User::create([
            'name'=>'Pedro Serra',
            'email'=>'pedro_serra@gmail.com',
            'password'=>bcrypt('123123123'),
        ]);

        User::create([
            'name'=>'Enzo Ferreira',
            'email'=>'enzo_ferreira@gmail.com',
            'password'=>bcrypt('123123123'),
        ]);

        User::create([
            'name'=>'Valentina Barbosa',
            'email'=>'valentina_barbosa@gmail.com',
            'password'=>bcrypt('123123123'),
        ]);

        User::create([
            'name'=>'admin',
            'acesso'=>'admin',
            'email'=>'admin@gmail.com',
            'password'=>bcrypt('123123123'),
        ]);

        User::create([
            'name'=>'Roberto Matos',
            'acesso'=>'mentor',
            'email'=>'beto@gmail.com',
            'password'=>bcrypt('123123123'),
        ]);

        User::create([
            'name'=>'Murilo Picon',
            'acesso'=>'mentor',
            'email'=>'mumu@gmail.com',
            'password'=>bcrypt('123123123'),
        ]);

        User::create([
            'name'=>'Hello World',
            'acesso'=>'empresa',
            'email'=>'hello_world@gmail.com',
            'password'=>bcrypt('123123123'),
        ]);

        User::create([
            'name'=>'Empresa 2',
            'acesso'=>'empresa',
            'email'=>'empresa2@gmail.com',
            'password'=>bcrypt('123123123'),
        ]);


    }
}
