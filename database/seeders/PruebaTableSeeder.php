<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Prueba;

class PruebaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Prueba::truncate();
        $prueba = new Prueba;
        $prueba->nombre = 'Alberto';
        $prueba->votos = 2;
        $prueba->email = 'alberto@gmail.com';
        $prueba->user_id = 1;
        $prueba->save();
    }
}
