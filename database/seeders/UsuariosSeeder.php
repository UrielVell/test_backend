<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsuariosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'name' => 'Ana Luz Polo Estrella',
                'email' => 'apolo@uv.mx',
                'password' => Hash::make('adminDFCana_25'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Maribel Carmona Garcia',
                'email' => 'mariblecarmona@uv.mx',
                'password' => Hash::make('adminDFCmaribel_25'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
