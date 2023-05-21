<?php

namespace Database\Seeders;

use App\Models\Pintura;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class PinturaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Pintura::factory(50)->create();

        /*DB::table('pinturas')->insert([
            'nombre' => Str::random(15),
            'descripcion' => Str::random(30),
            'precio' => Str::random(
        ])*/

    }
}
