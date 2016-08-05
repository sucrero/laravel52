<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class NavTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('navs')->truncate();
        DB::table('navs')->insert([
            'posicion' => 1,
            'name' => 'Inicio',
            'url' => '/',
        ]);
        DB::table('navs')->insert([
            'posicion' => 2,
            'name' => 'Perfil',
            'url' => 'profile',
        ]);
        DB::table('navs')->insert([
            'posicion' => 3,
            'name' => 'Ayuda',
            'url' => 'help',
        ]);
        DB::table('navs')->insert([
            'posicion' => 4,
            'name' => 'Impresora',
            'url' => 'printer',
        ]);
    }
}
