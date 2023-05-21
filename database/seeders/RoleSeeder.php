<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('roles')->insert([
            'nombre' => 'Administrador',
        ]);

        DB::table('roles')->insert([
            'nombre' => 'Editor',
        ]);

        DB::table('roles')->insert([
            'nombre' => 'Usuario',
        ]);

        DB::table('roles')->insert([
            'nombre' => 'Comprador',
        ]);
    }
}
